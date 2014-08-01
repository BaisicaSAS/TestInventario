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
                url:\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("clasifproductos_listGrid");
        echo "\",
                editurl:\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("clasifproductos_listGrid");
        echo "\",
                datatype: 'json',
                height:'400px',
                mtype: 'POST',
                colNames:['Id','Descripción', 'Aplicación','Pertenece a'],
                colModel:[
                    {name:'id', index:'id', width:100, resizable:false, align:\"center\"},
                    {name:'txdescripcion', index:'txdescripcion', width:250, resizable:false, sortable:true, editable: true},
                    {name:'txtipo', index:'txtipo', width:150},
                    {name:'txpadre', index:'txpadre', width:200},
                ],
                pager: '#paginacion',
                rowList:[10,20,50,100,500],
                sortname: 'txtipo',
                sortorder: 'asc',
                viewrecords: true,
                caption: 'CLASIFICACION DE PRODUCTOS',
                grouping:true, 
                groupingView : { 
                    groupField : ['txtipo', 'txpadre']}
            }); 
            jQuery(\"#tblclasprod\").jqGrid('tblclasprod',\"#paginacion\",{edit:true,add:true,del:true});

            jQuery(\"#ed1\").click( function() {
                    jQuery(\"#tblclasprod\").jqGrid('editRow',\"1\");
                    this.disabled = 'true';
                    jQuery(\"#sved1,#cned1\").attr(\"disabled\",false);
            });
            jQuery(\"#sved1\").click( function() {
                    jQuery(\"#tblclasprod\").jqGrid('saveRow',\"13\");
                    jQuery(\"#sved1,#cned1\").attr(\"disabled\",true);
                    jQuery(\"#ed1\").attr(\"disabled\",false);
            });
            jQuery(\"#cned1\").click( function() {
                    jQuery(\"#tblclasprod\").jqGrid('restoreRow',\"13\");
                    jQuery(\"#sved1,#cned1\").attr(\"disabled\",true);
                    jQuery(\"#ed1\").attr(\"disabled\",false);
            });
    });
        
    </script>
";
    }

    // line 52
    public function block_main($context, array $blocks = array())
    {
        // line 53
        echo "
  ";
        // line 54
        $this->displayParentBlock("main", $context, $blocks);
        echo "     
  ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "    <table id=\"tblclasprod\"></table>
    <input type=\"BUTTON\" id=\"ed1\" value=\"Edit row 13\" />
    <input type=\"BUTTON\" id=\"sved1\" disabled='true' value=\"Save row 13\" />
    <input type=\"BUTTON\" id=\"cned1\" disabled='true' value=\"Cancel Save\" />
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
        return array (  107 => 56,  101 => 55,  97 => 54,  94 => 53,  91 => 52,  45 => 9,  41 => 8,  33 => 4,  30 => 3,);
    }
}
