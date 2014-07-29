<?php

/* InventarioFrontBundle:Default:terceros.html.twig */
class __TwigTemplate_9daa3cde6d845399dbb2e5f8c9f3e69d877ecfec12edc05763b6afa92389e28f extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("listTerceros");
        echo "\">Lista de terceros</a></li>
              <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("newTerceros");
        echo "\">Crear tercero</a></li>
            </ul>
        </div>    

        <table id=\"table\">
        <tr>
            <td><span class=\"logo_colour\">Tipo Doc</span></td>
            <td><span class=\"logo_colour\">Documento</span></td>
            <td><span class=\"logo_colour\">Razón Social</span></td>
            <td><span class=\"logo_colour\">Cliente/Proveedor</span></td>
            <td><span class=\"logo_colour\">Descuento</span></td>
            <td><span class=\"logo_colour\">Dirección</span></td>
            <td><span class=\"logo_colour\">Teléfonos</span></td>
            <td><span class=\"logo_colour\">Activo</span></td>
         </tr>

        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Terceros"]) ? $context["Terceros"] : $this->getContext($context, "Terceros")));
        foreach ($context['_seq'] as $context["_key"] => $context["terceros"]) {
            // line 27
            echo "         <tr>
            <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txtipdoc"), "html", null, true);
            echo " </td>
            <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txdocumento"), "html", null, true);
            echo " </td>
            <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txnomtercero"), "html", null, true);
            echo " </td>
            <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "intipoter"), "html", null, true);
            echo " </td>
            <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txdescuento"), "html", null, true);
            echo "% ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txdiasdescuento"), "html", null, true);
            echo " dias ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "intipodesc"), "html", null, true);
            echo " </td>
            <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txdireccion"), "html", null, true);
            echo " </td>
            <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txtelefonos"), "html", null, true);
            echo " </td>
            <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "inactivo"), "html", null, true);
            echo " </td>
         </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terceros'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    
        </table>
    </div>    
        
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Default:terceros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  100 => 35,  96 => 34,  92 => 33,  84 => 32,  80 => 31,  76 => 30,  72 => 29,  68 => 28,  65 => 27,  61 => 26,  42 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
