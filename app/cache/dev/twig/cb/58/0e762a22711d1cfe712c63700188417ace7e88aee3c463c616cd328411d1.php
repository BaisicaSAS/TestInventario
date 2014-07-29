<?php

/* InventarioFrontBundle:Default:newterceros.html.twig */
class __TwigTemplate_cb580e762a22711d1cfe712c63700188417ace7e88aee3c463c616cd328411d1 extends Twig_Template
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
    <div id=\"menubar\"> 
        <ul id=\"menu\">
          <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("listTerceros");
        echo "\">Lista de terceros</a></li>
          <li class=\"selected\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("newTerceros");
        echo "\">Crear tercero</a></li>
        </ul>
    </div>    

   ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Default:newterceros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
