<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InventarioFrontBundle:Default:index.html.twig');
    }
}
