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
    public function kardexDataAction($prod)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $sql = "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, 0 AS inSalida ";
        $sql .= "FROM DetDocumentos a ";
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "WHERE d.inAfecta = 0 ";
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, a.inCantidad AS inSalida ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "WHERE d.inAfecta = 1 "; //RESTA;
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, a.inCantidad AS inSalida ";
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
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .= "ORDER BY txNomProducto, txRefInterna, feFecha DESC, idDetDocumentos DESC ";
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
    public function mvtotercerosDataAction($ter)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $sql = "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, ";
        $sql .= "0 AS inSalida, e.txNomTercero, a.dbValUnitario ";
        $sql .= "FROM DetDocumentos a ";
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "LEFT JOIN Terceros e ON c.inidTercero = e.idTercero ";
        $sql .= "WHERE d.inAfecta = 0 ";
        if ($ter != 'ALL') {$sql .= "AND e.idTercero = :ter ";};
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, ";
        $sql .= "a.inCantidad AS inSalida, e.txNomTercero, a.dbValUnitario ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "LEFT JOIN Terceros e ON c.inidTercero = e.idTercero ";
        $sql .= "WHERE d.inAfecta = 1 ";
        if ($ter != 'ALL') {$sql .= "AND e.idTercero = :ter ";};
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, ";
        $sql .= "a.inCantidad AS inSalida, e.txNomTercero, a.dbValUnitario ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "LEFT JOIN Terceros e ON c.inidTercero = e.idTercero ";
        $sql .= "WHERE d.inAfecta = 4 AND a.inCantidad < 0 "; //SIGNO -;
        if ($ter != 'ALL') {$sql .= "AND e.idTercero = :ter ";};
        $sql .= "UNION ";
        $sql .= "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, ";
        $sql .= "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, ";
        $sql .= "0 AS inSalida, e.txNomTercero, a.dbValUnitario ";
        $sql .= "FROM DetDocumentos a " ;
        $sql .= "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto ";
        $sql .= "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento ";
        $sql .= "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc ";
        $sql .= "LEFT JOIN Terceros e ON c.inidTercero = e.idTercero ";
        $sql .= "WHERE d.inAfecta = 4 AND a.inCantidad > 0 "; //SIGNO +;
        if ($ter != 'ALL') {$sql .= "AND e.idTercero = :ter ";};
        $sql .= "ORDER BY txNomTercero, txNomProducto, txRefInterna, feFecha DESC, idDetDocumentos DESC ";
        $entities = $connection->prepare($sql);
        
        if ($ter != 'ALL') {$entities->bindParam('ter',$ter);}
            
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
    public function histpreciosDataAction($prod)
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
        $sql .=  "WHERE d.inAfecta = 0 ";  //SUMA
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
        $sql .=  "WHERE d.inAfecta = 4 AND a.inCantidad > 0 "; //SIGNO +
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
        $sql .=  "WHERE d.inAfecta = 1 "; //RESTA
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
        $sql .=  "WHERE d.inAfecta = 4 AND a.inCantidad < 0 "; //SIGNO -
        if ($prod != 'ALL') {$sql .= "AND b.txRefInterna = :prod ";}
        $sql .=  "GROUP BY txNomProducto, dbValUnitario,txNomTercero ";
        $sql .=  "ORDER BY transaccion, txNomProducto, dbValUnitario, feFecha DESC, idDetDocumentos DESC ";
        
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
    public function histpreciosAction()
    {
        return $this->render('InventarioFrontBundle:Informes:histprecios.html.twig', array(
            'response' => $this->histpreciosDataAction('ALL')));
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
