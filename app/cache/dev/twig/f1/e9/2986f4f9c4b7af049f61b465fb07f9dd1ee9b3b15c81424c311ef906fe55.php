<?php

/* InventarioFrontBundle:Clasifproductos:edit.html.twig */
class __TwigTemplate_f1e92986f4f9c4b7af049f61b465fb07f9dd1ee9b3b15c81424c311ef906fe55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InventarioFrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
   <div id=\"sitecontent\"> 
        <div id=\"menubar\"> 
            <ul id=\"menu\">
              <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
              <li class=\"selected\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("terceros");
        echo "\">Lista de terceros</a></li>
              <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("terceros");
        echo "\">Crear tercero</a></li>
            </ul>
        </div>    
    </div>    

    <h1>Editar clasificación de productos</h1>

    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
    
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("clasifproductos");
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Clasifproductos:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  59 => 21,  52 => 17,  42 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
