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
        echo "  <tr>
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
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Terceros"]) ? $context["Terceros"] : $this->getContext($context, "Terceros")));
        foreach ($context['_seq'] as $context["_key"] => $context["terceros"]) {
            // line 15
            echo "     <tr>
        <td> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txtipdoc"), "html", null, true);
            echo " </td>
        <td> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txdocumento"), "html", null, true);
            echo " </td>
        <td> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txnomtercero"), "html", null, true);
            echo " </td>
        <td> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "intipoter"), "html", null, true);
            echo " </td>
        <td> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txdescuento"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txdiasdescuento"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "intipodesc"), "html", null, true);
            echo " </td>
        <td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txdireccion"), "html", null, true);
            echo " </td>
        <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "txtelefonos"), "html", null, true);
            echo " </td>
        <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terceros"]) ? $context["terceros"] : $this->getContext($context, "terceros")), "inactivo"), "html", null, true);
            echo " </td>
     </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terceros'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    
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
        return array (  91 => 25,  82 => 23,  78 => 22,  74 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  47 => 15,  43 => 14,  31 => 4,  28 => 3,);
    }
}
