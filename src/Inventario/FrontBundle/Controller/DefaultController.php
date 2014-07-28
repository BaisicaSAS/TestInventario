<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
use Inventario\FrontBundle\Entity\Terceros;
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
 
    public function newTerceroAction(Request $request)
    {
        // crear un objeto $task nuevo (borra los datos de prueba)
        $tercero = new Terceros();

        $form = $this->createFormBuilder($tercero)
            ->add('txtipdoc', 'text')
            ->add('txdocumento', 'text')
            ->add('txnomtercero', 'text')
            ->add('intipoter', 'text')
            ->add('txdescuento', 'text')
            ->add('txdiasdescuento', 'text')
            ->add('txdireccion', 'text')
            ->add('txtelefonos', 'text')
            ->add('inactivo', 'text')
            ->add('intipodesc', 'text')
            ->add('Guardar', 'submit')
            ->getForm();
        
        $form->handleRequest($request);

        if ($form->isValid()) {
            // guardar la tarea en la base de datos

            return $this->redirect($this->generateUrl('inventario_front_homepage'));
        }

    }    
 }
