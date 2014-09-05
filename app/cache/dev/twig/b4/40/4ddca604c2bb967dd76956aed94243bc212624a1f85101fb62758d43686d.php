<?php

/* InventarioFrontBundle:Tipdoc:new.html.twig */
class __TwigTemplate_b4404ddca604c2bb967dd76956aed94243bc212624a1f85101fb62758d43686d extends Twig_Template
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
        // line 5
        echo "<div id=\"sitecontent\"> 
        <h1>Crear tipo de documento</h1>
        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("tipdoc");
        echo "\">Volver al listado</a></li>
        </ul>
    </div>    
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Tipdoc:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  35 => 7,  31 => 5,  28 => 3,);
    }
}
