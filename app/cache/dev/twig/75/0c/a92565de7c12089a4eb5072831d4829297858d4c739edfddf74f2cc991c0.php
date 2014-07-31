<?php

/* InventarioFrontBundle:Clasifproductos:index.html.twig */
class __TwigTemplate_750ca92565de7c12089a4eb5072831d4829297858d4c739edfddf74f2cc991c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InventarioFrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "     
    <script type=\"text/javascript\">
        \$(document).ready(function(){
       jQuery(\"#tblclasprod\").jqGrid({
                url:'Clasifproductos::indexAction',
                datatype: 'json',
                mtype: 'POST',
                colNames:['Id','Descripción', 'Aplicación','Pertenece a'],
                colModel:[
                    {name:'id', index:'id', width:50, resizable:false, align:\"center\"},
                    {name:'txdescripcion', index:'txdescripcion', width:160,resizable:false, sortable:true},
                    {name:'intipo', index:'intipo', width:150},
                    {name:'inpadre', index:'inpadre', width:70},
                ],
                pager: '#paginacion',
                rowNum:20,
                rowList:[15,30],
                sortname: 'txdescripcion',
                sortorder: 'asc',
                viewrecords: true,
                gridview: true,
                autoencode: true,
                caption: 'CLASIFICACION DE PRODUCTOS'
            });              
        });
    </script>
";
    }

    // line 32
    public function block_main($context, array $blocks = array())
    {
        // line 33
        echo "
  ";
        // line 34
        $this->displayParentBlock("main", $context, $blocks);
        echo "     
  ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "    <div id=\"sitecontent\"><div id=\"menubar\"><ul id=\"menu\"> 
            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("clasifproductos_new");
        echo "\">Crear nueva clasificación</a></li>
    </ul></div></div>
    <table id=\"tblclasprod\"></table>
    <div id=\"paginacion\"> </div>
  ";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Clasifproductos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  81 => 36,  75 => 35,  71 => 34,  68 => 33,  65 => 32,  33 => 4,  30 => 3,);
    }
}
