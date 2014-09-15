<?php

/* InventarioFrontBundle:Informes:index.html.twig */
class __TwigTemplate_fd0bb52f4da074896cc02eee2835c478434fe0e27757835e18e309739fcd6ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InventarioFrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " 
";
    }

    // line 7
    public function block_sitecontent($context, array $blocks = array())
    {
        // line 8
        echo "    <table>
        <tr>
            <td><li><a href=\" ";
        // line 10
        echo $this->env->getExtension('routing')->getPath("informes_kardex");
        echo " \">Kardex</a></li></td>
            <td><li><a href=\" ";
        // line 11
        echo $this->env->getExtension('routing')->getPath("informes_mvtoterceros");
        echo " \">Movimiento por Terceros</a></li></td>
            <td><li><a href=\" ";
        // line 12
        echo $this->env->getExtension('routing')->getPath("informes_histprecios");
        echo " \">Historico Precios (Venta/Compra)</a></li></td>
            <td><li><a href=\" ";
        // line 13
        echo $this->env->getExtension('routing')->getPath("informes_mvtovendedores");
        echo " \">Ventas por vendedor</a></li>
            <td><li><a href=\" ";
        // line 14
        echo $this->env->getExtension('routing')->getPath("informes_rentabilidad");
        echo "   \">Rentabilidad productos</a></li>
            <!--<td><li><a href=\"";
        // line 15
        echo "\">Mov. Meses</a></li></td>-->
            <!--<td><li><a href=\"";
        // line 16
        echo "\">Rotación mensual</a></li></td>-->
        </tr>
    </table>    
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
        return array (  69 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 8,  39 => 7,  141 => 98,  138 => 97,  125 => 87,  74 => 39,  40 => 8,  32 => 4,  29 => 3,);
    }
}
