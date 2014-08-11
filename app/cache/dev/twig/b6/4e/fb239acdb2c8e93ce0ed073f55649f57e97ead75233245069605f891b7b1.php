<?php

/* InventarioFrontBundle:Tipdoc:edit.html.twig */
class __TwigTemplate_b64efb239acdb2c8e93ce0ed073f55649f57e97ead75233245069605f891b7b1 extends Twig_Template
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
        <div id=\"menubar\"> 
            <ul id=\"menu\">
                <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("tipdoc");
        echo "\">Volver al listado</a></li>
                <li>";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
            </ul>
        </div>    
        <h1>Modificar tipos de documento</h1>

        ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
    </div>    


";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Tipdoc:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  40 => 9,  36 => 8,  31 => 5,  28 => 3,);
    }
}
