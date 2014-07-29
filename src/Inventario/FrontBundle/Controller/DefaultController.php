<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
use Inventario\FrontBundle\Entity\Terceros;
use Inventario\FrontBundle\Form;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InventarioFrontBundle:Default:index.html.twig');
    }

    
    public function listTercerosAction()
    {
        $terceros = $this->getDoctrine()
            ->getRepository('InventarioFrontBundle:Terceros')
            ->findAll();

        return $this->render('InventarioFrontBundle:Default:terceros.html.twig', array('Terceros' => $terceros));
        
    }    
    
    public function newTercerosAction(Request $request)
    {
        // crear un objeto $task nuevo (borra los datos de prueba)
        $tercero = new Terceros();

        $form = $this->createForm(new Form\TercerosType(), $tercero);
        
        //@TODO: para trace
        //echo "<script type='text/javascript'> alert('En el build...!') </script>";

        if($request->isMethod('POST'))
        {
            if ($form->isValid()) {
                // guardar la tarea en la base de datos

                return $this->redirect($this->generateUrl('listTerceros'));
            }
        }
        
        $form->handleRequest($request);

        return $this->render('InventarioFrontBundle:Default:newterceros.html.twig', array(
               'form' => $form->createView()));    


    }    
 }


