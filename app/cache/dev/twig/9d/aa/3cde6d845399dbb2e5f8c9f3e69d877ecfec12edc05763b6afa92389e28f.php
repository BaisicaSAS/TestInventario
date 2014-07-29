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
    <div id=\"menubar\"> 
        <ul id=\"menu\">
          <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
          <li class=\"selected\"><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("listTerceros");
        echo "\">Lista de terceros</a></li>
          <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("newTerceros");
        echo "\">Crear tercero</a></li>
        </ul>
    </div>    
    
    <table>
    <tr>
        <td>Tipo Doc</td>
        <td>Documento</td>
        <td>Razón Social</td>
        <td>Cliente/Proveedor</td>
        <td>Descuento</td>
        <td>Dirección</td>
        <td>Teléfonos</td>
        <td>Activo</td>
     </tr>

    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Terceros"]) ? $context["Terceros"] : $this->getContext($context, "Terceros")));
        foreach ($context['_seq'] as $context["_key"] => $context["terceros"]) {
            // line 26
            echo "     <tr>
        <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txtipdoc"), "html", null, true);
            echo " </td>
        <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txdocumento"), "html", null, true);
            echo " </td>
        <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txnomtercero"), "html", null, true);
            echo " </td>
        <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "intipoter"), "html", null, true);
            echo " </td>
        <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txdescuento"), "html", null, true);
            echo "% ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txdiasdescuento"), "html", null, true);
            echo " dias ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "intipodesc"), "html", null, true);
            echo " </td>
        <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txdireccion"), "html", null, true);
            echo " </td>
        <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txtelefonos"), "html", null, true);
            echo " </td>
        <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "inactivo"), "html", null, true);
            echo " </td>
     </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terceros'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    
    </table>
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
        return array (  108 => 36,  99 => 34,  95 => 33,  91 => 32,  83 => 31,  79 => 30,  75 => 29,  71 => 28,  67 => 27,  64 => 26,  60 => 25,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
