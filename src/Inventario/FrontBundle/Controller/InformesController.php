<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use  Symfony\Component\Serializer\Serializer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
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
    public function kardexDataAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $entities = $connection->prepare("SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, "
                . "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, 0 AS inSalida "
                . "FROM DetDocumentos a " 
                . "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto "
                . "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento "
                . "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc "
                . "WHERE d.inAfecta = 0 "  //SUMA
                //. "GROUP BY txNomProducto "
                //. "ORDER BY b.txNomProducto, c.feFecha DESC, a.idDetDocumentos DESC "
                . "UNION "
                . "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, "
                . "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, a.inCantidad AS inSalida "
                . "FROM DetDocumentos a " 
                . "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto "
                . "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento "
                . "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc "
                . "WHERE d.inAfecta = 1 " //RESTA
                //. "GROUP BY txNomProducto "
                //. "ORDER BY b.txNomProducto, c.feFecha DESC, a.idDetDocumentos DESC ");
                . "UNION "
                . "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, "
                . "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, a.inCantidad AS inSalida "
                . "FROM DetDocumentos a " 
                . "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto "
                . "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento "
                . "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc "
                . "WHERE d.inAfecta = 4 AND a.inCantidad < 0 " //SIGNO -
                //. "GROUP BY txNomProducto "
                //. "ORDER BY b.txNomProducto, c.feFecha DESC, a.idDetDocumentos DESC ");
                . "UNION "
                . "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, "
                . "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, 0 AS inSalida "
                . "FROM DetDocumentos a " 
                . "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto "
                . "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento "
                . "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc "
                . "WHERE d.inAfecta = 4 AND a.inCantidad > 0 " //SIGNO +
                //. "GROUP BY txNomProducto "
                . "ORDER BY txNomProducto, txRefInterna, feFecha DESC, idDetDocumentos DESC "
                . "");
        
        //$entities->bindParam('tipo',$tipo);
            
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
    public function kardexResumenAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $entities = $connection->prepare("SELECT Productos_idProducto, txNomProducto, txRefInterna, "
                . "SUM(inEntrada) as sumEntrada, SUM(inSalida) as sumSalida, (SUM(inEntrada))-(SUM(inSalida)) as inExistencia "
                . "FROM ("
                . "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, "
                . "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, 0 AS inSalida "
                . "FROM DetDocumentos a " 
                . "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto "
                . "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento "
                . "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc "
                . "WHERE d.inAfecta = 0 "  //SUMA
                //. "GROUP BY txNomProducto "
                //. "ORDER BY b.txNomProducto, c.feFecha DESC, a.idDetDocumentos DESC "
                . "UNION "
                . "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, "
                . "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, a.inCantidad AS inSalida "
                . "FROM DetDocumentos a " 
                . "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto "
                . "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento "
                . "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc "
                . "WHERE d.inAfecta = 1 " //RESTA
                //. "GROUP BY txNomProducto "
                //. "ORDER BY b.txNomProducto, c.feFecha DESC, a.idDetDocumentos DESC ");
                . "UNION "
                . "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, "
                . "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, 0 as inEntrada, a.inCantidad*-1 AS inSalida "
                . "FROM DetDocumentos a " 
                . "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto "
                . "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento "
                . "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc "
                . "WHERE d.inAfecta = 4 AND a.inCantidad < 0 " //SIGNO -
                //. "GROUP BY txNomProducto "
                //. "ORDER BY b.txNomProducto, c.feFecha DESC, a.idDetDocumentos DESC ");
                . "UNION "
                . "SELECT a.idDetDocumentos, a.Productos_idProducto, d.txTipDoc, c.txNumDoc, "
                . "a.inidMasDocumento, c.feFecha, b.txNomProducto, b.txRefInterna, a.inCantidad as inEntrada, 0 AS inSalida "
                . "FROM DetDocumentos a " 
                . "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto "
                . "LEFT JOIN MasDocumentos c ON a.inidMasDocumento = c.idMasDocumento "
                . "LEFT JOIN TipDoc d ON c.inidTipDoc = d.idTipDoc "
                . "WHERE d.inAfecta = 4 AND a.inCantidad > 0 " //SIGNO +
                //. "GROUP BY txNomProducto "
                //. "ORDER BY txNomProducto, txRefInterna, feFecha DESC, idDetDocumentos DESC "
                . ") Detalle "
                . "GROUP BY txNomProducto ORDER BY txNomProducto "
                . "");
        
        //$entities->bindParam('tipo',$tipo);
            
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
    public function indexAction()
    {
        return $this->render('InventarioFrontBundle:Informes:index.html.twig');
    }
}
