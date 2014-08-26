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
                colNames:['Id','Descripción', 'Aplicación','Pertenece a', 'Apl.', 'Grupo'],
                colModel:[
                    {name:'id', index:'id', width:100, resizable:false, align:\"center\"},
                    {name:'txdescripcion', index:'txdescripcion', width:250, resizable:false, sortable:true, editable: true},
                    {name:'intipo', index:'intipo', width:150, editable: true, hidden: true},
                    {name:'inpadre', index:'inpadre', width:200, editable: true, hidden: true},
                    {name:'txtipo', index:'txtipo', width:200, editable: true, edittype:'select', formatter:'select', editoptions:{value: \"APLICACION:APLICACION;MARCA:MARCA\"} },
                    {name:'txpadre', index:'txpadre', width:200, editable: false}
                ],
                pager: '#paginacion',
                rowNum:50,
                rowList:[10,20,50,100,500],
                sortname: 'txtipo',
                sortorder: 'asc',
                viewrecords: true,
                caption: 'CLASIFICACION DE PRODUCTOS',
                grouping:true, 
                groupingView : { 
                    groupField : ['txtipo', 'txpadre']},
//                onSelectRow: function(id,intipo){
//                        pid=id;
//                        pintipo=intipo;
//                        grid.setGridParam({editurl:”page.php?parameter=bye”});
//                }
               }); 
            jQuery(\"#tblclasprod\").jqGrid('navGrid',\"#paginacion\",{add: false,edit:false,del:false,search:false});
            jQuery(\"#tblclasprod\").jqGrid('inlineNav',\"#paginacion\");
            jQuery(\"#tblclasprod\").hideCol('intipo');
            jQuery(\"#tblclasprod\").hideCol('inpadre');
            //*jQuery(\"#tblclasprod\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: true });
        });
        
    </script>
";
    }

    // line 49
    public function block_main($context, array $blocks = array())
    {
        // line 50
        echo "
  ";
        // line 51
        $this->displayParentBlock("main", $context, $blocks);
        echo "     
  ";
        // line 52
        $this->displayBlock('sitecontent', $context, $blocks);
    }

    public function block_sitecontent($context, array $blocks = array())
    {
        // line 53
        echo "        <div> <table id=\"tblclasprod\"></table>
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
        return array (  104 => 53,  98 => 52,  94 => 51,  91 => 50,  88 => 49,  45 => 9,  41 => 8,  33 => 4,  30 => 3,);
    }
}
