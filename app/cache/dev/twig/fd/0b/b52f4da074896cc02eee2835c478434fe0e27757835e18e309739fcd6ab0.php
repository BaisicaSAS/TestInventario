<?php

/* InventarioFrontBundle:Informes:index.html.twig */
class __TwigTemplate_fd0bb52f4da074896cc02eee2835c478434fe0e27757835e18e309739fcd6ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InventarioFrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'sitecontent' => array($this, 'block_sitecontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InventarioFrontBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sitecontent($context, array $blocks = array())
    {
        // line 4
        echo "        <div id=\"menubar\"> 
            <ul id=\"menu\">
                <li><a href=\" ";
        // line 6
        echo $this->env->getExtension('routing')->getPath("informes_kardex");
        echo " \">Kardex</a></li>
                <li><a href=\" ";
        // line 7
        echo $this->env->getExtension('routing')->getPath("informes_mvtoterceros");
        echo "\">Mov. Terceros</a></li>
                <li><a href=\" ";
        // line 8
        echo $this->env->getExtension('routing')->getPath("informes_mvtomeses");
        echo " \">Mov. Meses</a></li>
                <li><a href=\" ";
        // line 9
        echo $this->env->getExtension('routing')->getPath("informes_mvtoproductos");
        echo " \">Mov. Productos</a></li>
                <li><a href=\" ";
        // line 10
        echo $this->env->getExtension('routing')->getPath("informes_rotacion");
        echo " \">Rotación</a></li>
            </ul>
        </div>    
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Informes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
