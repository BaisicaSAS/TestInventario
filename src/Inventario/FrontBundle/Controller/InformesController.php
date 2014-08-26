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
     * Genera informe de kardex.
     *
     */
    public function kardexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $entities = $connection->prepare("SELECT a.idTercero, a.txNomTercero "
                . "FROM Terceros a WHERE a.inTipoTer IN (:tipo,2) AND a.InActivo=1");
        
        $entities->bindParam('tipo',$tipo);
            
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
        //return $response;        
        
        return $this->render('InventarioFrontBundle:Informes:kardex.html.twig');
        /*
         * Devolver combo
         */
        /*$response = '<select>';
        foreach($result as $td) {
              $response .= '<option value='.$td['idTercero'].'>'.$td['txNomTercero']."</option>";
         }            
        $response.='</select>';
        return $resp = new Response($response);        */
    }
    /**
     * Lists all Terceros entities.
     *
     */
    public function indexAction()
    {
        return $this->render('InventarioFrontBundle:Informes:index.html.twig');
    }
}
