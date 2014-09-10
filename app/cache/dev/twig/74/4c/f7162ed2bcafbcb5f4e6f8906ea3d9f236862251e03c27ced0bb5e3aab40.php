<?php

/* InventarioFrontBundle:Informes:histprecios.html.twig */
class __TwigTemplate_744cf7162ed2bcafbcb5f4e6f8906ea3d9f236862251e03c27ced0bb5e3aab40 extends Twig_Template
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
        // line 8
        echo $this->env->getExtension('routing')->getPath("productos_listProGrid", array("pidter" => "CLIENTE GENERICO"));
        echo "\", function( data ) {
                var sel = document.getElementById('productos');
                var i = 0;
                //alert(i);
                \$.each( data, function() {
                    var opt = document.createElement('option');
                    opt.innerHTML = data[i].txrefinterna+' '+data[i].txnomproducto;
                    opt.value = data[i].txrefinterna;
                    sel.appendChild(opt);
                    i++; 
                });
            });
            
            
          
            jQuery(\"#histprecios\").jqGrid({        
                    url:\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("informes_histpreciosData", array("prod" => "ALL"));
        echo "\",
                    datatype: \"json\",
                    width:'100%',
                    heigth:'500px',
                    colNames:['Ref.','Producto','Tip. Dc.','Num. Doc.','Fecha','Transaccion','Valor','IdDet','IdMasD','Tercero'],
                    colModel:[
                            {name:'txRefInterna',index:'txRefInterna',search:false,sortable:false},
                            {name:'txNomProducto',index:'txNomProducto',search:false,sortable:false},
                            {name:'txTipDoc',index:'txTipDoc',search:false,sortable:false},
                            {name:'txNumDoc',index:'txNumDoc',search:false,sortable:false},
                            {name:'feFecha',index:'feFecha',formatter:'date',search:false,sortable:false},
                            {name:'transaccion',index:'transaccion',search:false,sortable:false},
                            {name:'dbValUnitario',index:'dbValUnitario',search:false,sortable:false,formatter:'currency', 
                                    formatoptions:{defaultValue:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                            {name:'idDetDocumentos',index:'idDetDocumentos',search:false,sortable:false},
                            {name:'inidMasDocumento',index:'inidMasDocumento',search:false,sortable:false},
                            {name:'txNomTercero',index:'txNomTercero',search:false,sortable:false},
                    ],
                    rowNum:1000,
                    rowList:[1000,2000,3000],
                    pager: '#paginacion',
                    sortname: 'txNomTercero',
                    sortorder: 'asc',
                    viewrecords: true,
                    caption: 'HISTORICO DE PRECIOS / COSTOS',
                    grouping:true, 
                    groupingView : { 
                        groupField : ['txNomProducto', 'transaccion'], 
                        groupSummary: [true],
                        groupColumnShow: [true],
                        groupText: ['<b>{0}</b>'],
                        groupDataSorted: true
                    },
            });
            //jQuery(\"#histprecios\").hideCol('txNomTercero');
            jQuery(\"#histprecios\").hideCol('transaccion');
            //jQuery(\"#histprecios\").hideCol('txRefInterna');
            jQuery(\"#histprecios\").hideCol('idDetDocumentos');
            jQuery(\"#histprecios\").hideCol('inidMasDocumento');
            jQuery(\"#histprecios\").hideCol('Productos_idProducto');

            //jQuery(\"#histprecios\").jqGrid('filterToolbar', { searchOnEnter: false, enableClear: false, ignoreCase: false });
            //jQuery(\"#histprecios\").jqGrid('navGrid',\"#paginacion\",{reloadAfterSubmit:true});
            jQuery(\"#histprecios\").jqGrid('inlineNav',\"#paginacion\");
            
       }); 
        function recargaGrid(value){
          //alert(value);
          var newUrl = \"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("informes_histpreciosData", array("prod" => "ALL"));
        echo "\";
          newUrl = newUrl.replace('ALL', value);              

          \$(\"#histprecios\").setGridParam({url: newUrl, page: 1}).trigger('reloadGrid');
        };
    </script>
";
    }

    // line 80
    public function block_main($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "     
    ";
        // line 82
        $this->displayBlock('sitecontent', $context, $blocks);
    }

    public function block_sitecontent($context, array $blocks = array())
    {
        // line 83
        echo "        <h1>Historico de precios productos</h1>
        <select id=\"productos\" onchange=\"recargaGrid(this.value)\">
            <option value=\"ALL\">Seleccione un producto </option></select> 
        <table id=\"histprecios\" ></table>
        <div id=\"paginacion\" ></div>
    ";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Informes:histprecios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 83,  130 => 82,  125 => 81,  122 => 80,  111 => 72,  60 => 24,  41 => 8,  33 => 4,  30 => 3,);
    }
}
