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
    <script type=\"text/javascript\">
        \$(document).ready(function(){
       jQuery(\"#tblclasprod\").jqGrid({
                url:\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("clasifproductos_listGrid");
        echo "\",
                editurl:\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("clasifproductos_guardaGrid");
        echo "\",
                datatype: 'json',
                height:'400px',
                width:'900px', 
                mtype: 'POST',
                colNames:['Id','Descripción', 'Aplicación','Pertenece a'],
                colModel:[
                    {name:'id', index:'id', width:100, resizable:false, align:\"center\"},
                    {name:'txdescripcion', index:'txdescripcion', width:250, resizable:false, sortable:true, editable: true},
                    {name:'intipo', index:'intipo', width:150, editable: true, edittype:'select', formatter:'select', editoptions:{value: \"0:APLICACION;1:MARCA\"} },
                    {name:'inpadre', index:'inpadre', width:200, editable: true}
                ],
                pager: '#paginacion',
                rowNum:50,
                rowList:[10,20,50,100,500],
                sortname: 'intipo',
                sortorder: 'asc',
                viewrecords: true,
                caption: 'CLASIFICACION DE PRODUCTOS',
                grouping:true, 
                groupingView : { 
                    groupField : ['intipo', 'inpadre']}
               }); 
            jQuery(\"#tblclasprod\").jqGrid('navGrid',\"#paginacion\",{add: false,edit:false,del:false,search:false});
            jQuery(\"#tblclasprod\").jqGrid('inlineNav',\"#paginacion\");
            //jQuery(\"#tblclasprod\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: true });
        });
        
    </script>
";
    }

    // line 40
    public function block_main($context, array $blocks = array())
    {
        // line 41
        echo "
  ";
        // line 42
        $this->displayParentBlock("main", $context, $blocks);
        echo "     
  ";
        // line 43
        $this->displayBlock('sitecontent', $context, $blocks);
    }

    public function block_sitecontent($context, array $blocks = array())
    {
        // line 44
        echo "      <div> <table id=\"tblclasprod\"></table>
    <div id=\"paginacion\"></div> </div> 
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
        return array (  95 => 44,  89 => 43,  85 => 42,  82 => 41,  79 => 40,  45 => 9,  41 => 8,  33 => 4,  30 => 3,);
    }
}
