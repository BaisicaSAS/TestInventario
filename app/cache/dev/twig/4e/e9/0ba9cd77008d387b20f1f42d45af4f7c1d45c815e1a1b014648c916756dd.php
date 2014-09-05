<?php

/* InventarioFrontBundle:Masdocumentos:print.html.twig */
class __TwigTemplate_4ee90ba9cd77008d387b20f1f42d45af4f7c1d45c815e1a1b014648c916756dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sitecontent' => array($this, 'block_sitecontent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('sitecontent', $context, $blocks);
    }

    public function block_sitecontent($context, array $blocks = array())
    {
        // line 3
        echo "<table id=\"doc_print\">
        <tbody>
            cabecera = entities;
        <tr>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cabecera"]) ? $context["cabecera"] : $this->getContext($context, "cabecera")), "txnomcliente"), "html", null, true);
        echo "</td>
            <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cabecera"]) ? $context["cabecera"] : $this->getContext($context, "cabecera")), "txtelefonos"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "txdireccion"), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "incantidad"), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txrefinterna"), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txnomproducto"), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dbvalunitario"), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dbvaltotal"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Masdocumentos:print.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  54 => 14,  50 => 13,  45 => 11,  39 => 8,  35 => 7,  29 => 3,  23 => 2,  20 => 1,);
    }
}
