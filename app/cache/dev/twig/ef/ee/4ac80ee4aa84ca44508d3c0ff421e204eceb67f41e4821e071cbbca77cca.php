<?php

/* InventarioFrontBundle:Informes:kardex.html.twig */
class __TwigTemplate_efee4ac80ee4aa84ca44508d3c0ff421e204eceb67f41e4821e071cbbca77cca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InventarioFrontBundle:informes:index.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
            'sitecontent' => array($this, 'block_sitecontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InventarioFrontBundle:informes:index.html.twig";
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

        
            \$.getJSON( \"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("productos_listProGrid", array("pidter" => "CLIENTE GENERICO"));
        echo "\", function( data ) {
                var sel1 = document.getElementById('movproductos');
                var i = 0;
                //alert(i);
                \$.each( data, function() {
                    var opt = document.createElement('option');
                    opt.innerHTML = data[i].txrefinterna+' '+data[i].txnomproducto;
                    opt.value = data[i].txrefinterna;
                    sel1.appendChild(opt);
                    i++; 
                });
            });
            jQuery(\"#kardex\").jqGrid({        
                    url:\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("informes_kardexData");
        echo "\",
                    datatype: \"json\",
                    width:'100%',
                    heigth:'500',
                    colNames:['IDProducto','Ref.','Producto','Tip. Dc.','Num. Doc.','Fecha','Entrada','Salida','IdDet','IdMasD'],
                    colModel:[
                            {name:'Productos_idProducto',index:'Productos_idProducto',search:false,sortable:false},
                            {name:'txRefInterna',index:'txRefInterna',search:false,sortable:false},
                            {name:'txNomProducto',index:'txNomProducto',search:false,sortable:false},
                            {name:'txTipDoc',index:'txTipDoc',search:false,sortable:false},
                            {name:'txNumDoc',index:'txNumDoc',search:false,sortable:false},
                            {name:'feFecha',index:'feFecha',formatter:'date',search: false,sortable:false},
                            {name:'inEntrada',index:'inEntrada', formatter: 'integer',
                                align: 'right', summaryTpl: '<i>{0}</i>',summaryType: 'sum',search: false,sortable:false},
                            {name:'inSalida',index:'inSalida', formatter: 'integer',
                                align: 'right', summaryTpl: '<i>{0}</i>',summaryType: 'sum',search: false,sortable:false},
                            {name:'idDetDocumentos',index:'idDetDocumentos', search: false,sortable:false},
                            {name:'inidMasDocumento',index:'inidMasDocumento', search: false,sortable:false},
                    ],
                    rowNum:1000,
                    rowList:[1000,2000,3000],
                    pager: '#paginacion',
                    sortname: 'txNomProducto',
                    sortorder: 'asc',
                    viewrecords: true,
                    caption: 'MOVIMIENTO DE PRODUCTOS',
                    grouping:true, 
                    footerrow: true,
                    sortable:false, 
                    groupingView : { 
                        groupField : ['txNomProducto'], 
                        groupSummary: [true],
                        groupColumnShow: [true],
                        groupText: ['<b>{0}</b>'],
                        groupDataSorted: true
                    },
            });
            jQuery(\"#kardex\").hideCol('idDetDocumentos');
            jQuery(\"#kardex\").hideCol('txRefInterna');
            jQuery(\"#kardex\").hideCol('txNomProducto');
            jQuery(\"#kardex\").hideCol('inidMasDocumento');
            jQuery(\"#kardex\").hideCol('Productos_idProducto');

            //jQuery(\"#kardex\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: false, ignoreCase: true });
            //jQuery(\"#kardex\").jqGrid('navGrid',\"#paginacion\",{reloadAfterSubmit:true, add: false,edit:false,del:false,search:false});
            jQuery(\"#kardex\").jqGrid('inlineNav',\"#paginacion\");
            
            jQuery(\"#existenc\").jqGrid({        
                    url:\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("informes_kardexResumen");
        echo "\",
                    datatype: \"json\",
                    width:'100%',
                    heigth:'500',
                    colNames:['IDProducto','Ref.','Producto','Entrada','Salida','Existencias'],
                    colModel:[
                            {name:'Productos_idProducto',index:'Productos_idProducto',editable:false,sortable:false},
                            {name:'txRefInterna',index:'txRefInterna',editable:false,sortable:false},
                            {name:'txNomProducto',index:'txNomProducto',editable:false,sortable:false},
                            {name:'sumEntrada',index:'sumEntrada',editable:false,search: false,sortable:false},
                            {name:'sumSalida',index:'sumSalida',editable:false,search: false,sortable:false},
                            {name:'inExistencia',index:'inExistencia',editable:false,search: false,sortable:false},
                    ],
                    rowNum:1000,
                    rowList:[1000,2000,3000],
                    pager: '#pagina',
                    sortname: 'txNomProducto',
                    sortorder: 'asc',
                    viewrecords: true,
                    caption: 'RESUMEN EXISTENCIAS DE PRODUCTOS',
                    footerrow: true,
            });
            jQuery(\"#existenc\").hideCol('Productos_idProducto');
            //jQuery(\"#existenc\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: false, ignoreCase: true });
            //jQuery(\"#existenc\").jqGrid('navGrid',\"#pagina\",{reloadAfterSubmit:true, add: false,edit:false,del:false,search:false});
            jQuery(\"#existenc\").jqGrid('inlineNav',\"#pagina\");
       }); 
    </script>
";
    }

    // line 100
    public function block_main($context, array $blocks = array())
    {
        // line 101
        echo "  ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "     

  ";
        // line 103
        $this->displayBlock('sitecontent', $context, $blocks);
    }

    public function block_sitecontent($context, array $blocks = array())
    {
        // line 104
        echo "        <h1>Informe de Kardex</h1>
        <select id=\"movproductos\" onchange=\"recargaGrid(this.value)\">
            <option value=\"ALL\">Seleccione un producto </option></select> 
        <table id=\"kardex\" ></table>
        <div id=\"paginacion\" ></div>
        
        <table id=\"existenc\" ></table>
        <div id=\"pagina\" ></div>
  ";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Informes:kardex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 104,  151 => 103,  145 => 101,  142 => 100,  109 => 70,  58 => 22,  42 => 9,  33 => 4,  30 => 3,);
    }
}
