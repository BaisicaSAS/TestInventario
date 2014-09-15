<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use  Symfony\Component\Serializer\Serializer;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Inventario\FrontBundle\Entity\Productos;
use Inventario\FrontBundle\Entity\Detdocumentos;

/**
 * Terceros controller...
 *
 */
class InformesController extends Controller
{

    /**
     * Genera datos del informe de kardex.
     *
     */
    public function kardexDataAction($prod,$desde,$hasta)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $sql = "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, 0 AS inSalida ";
        $sql .= "FROM DetDocumentos a ";
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "WHERE d.inAfecta = 0 AND c.feFecha BETWEEN :desde AND :hasta ";
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, a.inCantidad AS inSalida ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "WHERE d.inAfecta = 1 AND c.feFecha BETWEEN :desde AND :hasta "; //RESTA;
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, a.inCantidad*-1 AS inSalida ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "WHERE d.inAfecta = 4 AND a.inCantidad < 0 AND c.feFecha BETWEEN :desde AND :hasta "; //SIGNO -
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, 0 AS inSalida ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "WHERE d.inAfecta = 4 AND a.inCantidad > 0 AND c.feFecha BETWEEN :desde AND :hasta "; //SIGNO +
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .= "ORDER BY txNomProducto, txRefInterna, feFecha DESC, idDetDocumentos DESC ";
        $entities = $connection->prepare($sql);
        
        if ($prod != 'ALL') {$entities->bindParam('prod',$prod);}
        $entities->bindParam('desde',$desde);
        $entities->bindParam('hasta',$hasta);
            
        $entities->execute();
        $result = $entities->fetchAll();
        
        /*
         * DEVOLVER JSON
         */        
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $response = new Response($serializer->serialize($result, 'json')); 
        $response->headers->set('Content-Type', 'application/json');
        return $response;        

    }
    
   /**
     * Genera datos del informe de kardex.
     *
     */
    public function kardexResumenAction($prod)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $sql = "SELECT Productos_idProducto, txNomProducto, txRefInterna, ";
        $sql .= "SUM(inEntrada) as sumEntrada, SUM(inSalida) as sumSalida, (SUM(inEntrada))-(SUM(inSalida)) as inExistencia ";
        $sql .= "FROM (";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, 0 AS inSalida ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "WHERE d.inAfecta = 0 ";  //SUMA
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, a.inCantidad AS inSalida ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "WHERE d.inAfecta = 1 "; //RESTA
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, a.inCantidad*-1 AS inSalida ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "WHERE d.inAfecta = 4 AND a.inCantidad < 0 "; //SIGNO -
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, 0 AS inSalida ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
         $sql .= "WHERE d.inAfecta = 4 AND a.inCantidad > 0 "; //SIGNO +
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";};
        $sql .= ") Detalle ";
        $sql .= "GROUP BY txNomProducto ORDER BY txNomProducto ";
        
        $entities = $connection->prepare($sql);
        
        if ($prod != 'ALL') {$entities->bindParam('prod',$prod);}
            
        $entities->execute();
        $result = $entities->fetchAll();
        
        /*
         * DEVOLVER JSON
         */        
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $response = new Response($serializer->serialize($result, 'json')); 
        $response->headers->set('Content-Type', 'application/json');
        return $response;        
    }    
    /**
     * Genera datos del informe de movimiento por terceros.
     *
     */
    public function mvtotercerosDataAction($ter,$desde,$hasta)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $sql = "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, ";
        $sql .= "0 AS inSalida, e.txNomTercero, a.dbValUnitario, a.dbValTotal ";
        $sql .= "FROM DetDocumentos a ";
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "LEFT JOIN Terceros e ON c.inidTercero = e.idTercero ";
        $sql .= "WHERE d.inAfecta = 0 AND c.feFecha BETWEEN :desde AND :hasta ";
        if ($ter != 'ALL') {$sql .= "AND e.idTercero = :ter ";};
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, ";
        $sql .= "a.inCantidad AS inSalida, e.txNomTercero, a.dbValUnitario, a.dbValTotal ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "LEFT JOIN Terceros e ON c.inidTercero = e.idTercero ";
        $sql .= "WHERE d.inAfecta = 1 AND c.feFecha BETWEEN :desde AND :hasta ";
        if ($ter != 'ALL') {$sql .= "AND e.idTercero = :ter ";};
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, ";
        $sql .= "a.inCantidad AS inSalida, e.txNomTercero, a.dbValUnitario, a.dbValTotal ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "LEFT JOIN Terceros e ON c.inidTercero = e.idTercero ";
        $sql .= "WHERE d.inAfecta = 4 AND a.inCantidad < 0 AND c.feFecha BETWEEN :desde AND :hasta "; //SIGNO -;
        if ($ter != 'ALL') {$sql .= "AND e.idTercero = :ter ";};
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, ";
        $sql .= "0 AS inSalida, e.txNomTercero, a.dbValUnitario, a.dbValTotal ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "LEFT JOIN Terceros e ON c.inidTercero = e.idTercero ";
        $sql .= "WHERE d.inAfecta = 4 AND a.inCantidad > 0 AND c.feFecha BETWEEN :desde AND :hasta "; //SIGNO +;
        if ($ter != 'ALL') {$sql .= "AND e.idTercero = :ter ";};
        $sql .= "ORDER BY txNomTercero, feFecha DESC, idDetDocumentos DESC ";
        $entities = $connection->prepare($sql);
        
        if ($ter != 'ALL') {$entities->bindParam('ter',$ter);}
        $entities->bindParam('desde',$desde);
        $entities->bindParam('hasta',$hasta);
            
        $entities->execute();
        $result = $entities->fetchAll();
        
        /*
         * DEVOLVER JSON
         */        
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $response = new Response($serializer->serialize($result, 'json')); 
        $response->headers->set('Content-Type', 'application/json');
        return $response;        

    }
    /**
     * Genera datos del informe de movimiento por terceros.
     *
     */
    public function mvtovendedoresDataAction($ven,$desde,$hasta)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $sql = "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, ";
        $sql .= "0 AS inSalida, e.txNomVendedor, a.dbValUnitario, a.dbValTotal ";
        $sql .= "FROM DetDocumentos a ";
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "LEFT JOIN Vendedores e ON c.Vendedores_idVendedor = e.idVendedor ";
        $sql .= "WHERE d.inAfecta = 0 AND c.feFecha BETWEEN :desde AND :hasta ";
        if ($ven != 'ALL') {$sql .= "AND e.idVendedor = :ven ";};
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, ";
        $sql .= "a.inCantidad AS inSalida, e.txNomVendedor, a.dbValUnitario, a.dbValTotal ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "LEFT JOIN Vendedores e ON c.Vendedores_idVendedor = e.idVendedor ";
        $sql .= "WHERE d.inAfecta = 1 AND c.feFecha BETWEEN :desde AND :hasta ";
        if ($ven != 'ALL') {$sql .= "AND e.idVendedor = :ven ";};
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, ";
        $sql .= "a.inCantidad AS inSalida, e.txNomVendedor, a.dbValUnitario, a.dbValTotal ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "LEFT JOIN Vendedores e ON c.Vendedores_idVendedor = e.idVendedor ";
        $sql .= "WHERE d.inAfecta = 4 AND a.inCantidad < 0 AND c.feFecha BETWEEN :desde AND :hasta "; //SIGNO -;
        if ($ven != 'ALL') {$sql .= "AND e.idVendedor = :ven ";};
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, ";
        $sql .= "0 AS inSalida, e.txNomVendedor, a.dbValUnitario, a.dbValTotal ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "LEFT JOIN Vendedores e ON c.Vendedores_idVendedor = e.idVendedor ";
        $sql .= "WHERE d.inAfecta = 4 AND a.inCantidad > 0 AND c.feFecha BETWEEN :desde AND :hasta "; //SIGNO +;
        if ($ven != 'ALL') {$sql .= "AND e.idVendedor = :ven ";};
        $sql .= "ORDER BY txNomVendedor, feFecha DESC, idDetDocumentos DESC ";
        $entities = $connection->prepare($sql);
        
        if ($ven != 'ALL') {$entities->bindParam('ven',$ven);}
        
        $entities->bindParam('desde',$desde);
        $entities->bindParam('hasta',$hasta);
            
        $entities->execute();
        $result = $entities->fetchAll();
        
        /*
         * DEVOLVER JSON
         */        
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $response = new Response($serializer->serialize($result, 'json')); 
        $response->headers->set('Content-Type', 'application/json');
        return $response;        

    }
    
    public function histpreciosDataAction($prod,$desde,$hasta)
    {
        $sql = "";
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .=  "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 'ENTRADA/COMPRA' as transaccion, ";
        $sql .=  "e.txNomTercero, a.dbValUnitario ";
        $sql .=  "FROM DetDocumentos a " ;
        $sql .=  "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .=  "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .=  "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .=  "LEFT JOIN Terceros e ON c.inidTercero = e.idTercero ";
        $sql .=  "WHERE d.inAfecta = 0  AND c.feFecha BETWEEN :desde AND :hasta ";  //SUMA
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .=  "UNION ";
        $sql .=  "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .=  "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 'ENTRADA/COMPRA' as transaccion, ";
        $sql .=  "e.txNomTercero, a.dbValUnitario ";
        $sql .=  "FROM DetDocumentos a " ;
        $sql .=  "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .=  "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .=  "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .=  "LEFT JOIN Terceros e ON c.inidTercero = e.idTercero ";
        $sql .=  "WHERE d.inAfecta = 4 AND a.inCantidad > 0  AND c.feFecha BETWEEN :desde AND :hasta "; //SIGNO +
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .=  "UNION ";
        $sql .=  "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .=  "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 'SALIDA/VENTA' as transaccion, ";
        $sql .=  "e.txNomTercero, a.dbValUnitario ";
        $sql .=  "FROM DetDocumentos a " ;
        $sql .=  "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .=  "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .=  "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .=  "LEFT JOIN Terceros e ON c.inidTercero = e.idTercero ";
        $sql .=  "WHERE d.inAfecta = 1  AND c.feFecha BETWEEN :desde AND :hasta "; //RESTA
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .=  "UNION ";
        $sql .=  "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .=  "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 'SALIDA/VENTA' as transaccion, ";
        $sql .=  "e.txNomTercero, a.dbValUnitario ";
        $sql .=  "FROM DetDocumentos a " ;
        $sql .=  "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .=  "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .=  "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .=  "LEFT JOIN Terceros e ON c.inidTercero = e.idTercero ";
        $sql .=  "WHERE d.inAfecta = 4 AND a.inCantidad < 0 AND c.feFecha BETWEEN :desde AND :hasta "; //SIGNO -
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .=  "GROUP BY txNomProducto, dbValUnitario,txNomTercero ";
        $sql .=  "ORDER BY transaccion, txNomProducto, dbValUnitario, feFecha DESC, idDetDocumentos DESC ";
        
        $entities = $connection->prepare($sql);
        
        if ($prod != 'ALL') {$entities->bindParam('prod',$prod);}
        $entities->bindParam('desde',$desde);
        $entities->bindParam('hasta',$hasta);
            
        $entities->execute();
        $result = $entities->fetchAll();
        
        /*
         * DEVOLVER JSON
         */        
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $response = new Response($serializer->serialize($result, 'json')); 
        $response->headers->set('Content-Type', 'application/json');
        return $response;        

    }
    /**
     * 
     *
     */
    public function rentabilidadDataAction($prod,$desde,$hasta)
    {
        $sql = "";
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, ";
        $sql .=  "a.inidMasDocumento, b.txNomProducto, b.txRefInterna, 'ENTRADAS/COMPRAS' as transaccion, ";
        $sql .=  "(SUM(a.dbValTotal)/SUM(a.inCantidad))*-1 AS promedio, ";
        $sql .=  "SUM(a.dbValTotal)*-1 AS total, SUM(a.inCantidad) AS cantidad ";
        $sql .=  "FROM DetDocumentos a " ;
        $sql .=  "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .=  "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .=  "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .=  "LEFT JOIN Terceros e ON c.inidTercero = e.idTercero ";
        $sql .=  "WHERE (d.inAfecta = 0 OR (d.inAfecta = 4 AND a.inCantidad > 0 )) AND c.feFecha BETWEEN :desde AND :hasta ";  //SUMA
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .=  "UNION ";
        $sql .=  "SELECT a.idDetDocumentos, a.Productos_idProducto, ";
        $sql .=  "a.inidMasDocumento, b.txNomProducto, b.txRefInterna, 'SALIDAS/VENTAS' as transaccion, ";
        $sql .=  "SUM(a.dbValTotal)/SUM(a.inCantidad) AS promedio, ";
        $sql .=  "SUM(a.dbValTotal) AS total, SUM(a.inCantidad)*-1 AS cantidad ";
        $sql .=  "FROM DetDocumentos a " ;
        $sql .=  "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .=  "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .=  "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .=  "LEFT JOIN Terceros e ON c.inidTercero = e.idTercero ";
        $sql .=  "WHERE (d.inAfecta = 1 OR (d.inAfecta = 4 AND a.inCantidad < 0) ) AND c.feFecha BETWEEN :desde AND :hasta "; //RESTA
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .=  "GROUP BY txNomProducto ";
        $sql .=  "ORDER BY transaccion, txNomProducto ";
        
        $entities = $connection->prepare($sql);
        
        if ($prod != 'ALL') {$entities->bindParam('prod',$prod);}
        $entities->bindParam('desde',$desde);
        $entities->bindParam('hasta',$hasta);
           
        $entities->execute();
        $result = $entities->fetchAll();
        
        /*
         * DEVOLVER JSON
         */        
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $response = new Response($serializer->serialize($result, 'json')); 
        $response->headers->set('Content-Type', 'application/json');
        return $response;        

    }
    /**
     * 
     *
     */
    public function kardexAction()
    {
        return $this->render('InventarioFrontBundle:Informes:kardex.html.twig');
    }
    /**
     * 
     *
     */
    public function mvtotercerosAction()
    {
        return $this->render('InventarioFrontBundle:Informes:mvtoterceros.html.twig');
    }
    /**
     * 
     *
     */
    public function mvtovendedoresAction()
    {
        return $this->render('InventarioFrontBundle:Informes:mvtovendedores.html.twig');
    }
    /**
     * 
     *
     */
    public function histpreciosAction()
    {
        return $this->render('InventarioFrontBundle:Informes:histprecios.html.twig');
    }
    /**
     * 
     *
     */
    public function rentabilidadAction()
    {
        return $this->render('InventarioFrontBundle:Informes:rentabilidad.html.twig');
    }
    /**
     * 
     *
     */
    public function indexAction()
    {
        return $this->render('InventarioFrontBundle:Informes:index.html.twig');
    }
}
