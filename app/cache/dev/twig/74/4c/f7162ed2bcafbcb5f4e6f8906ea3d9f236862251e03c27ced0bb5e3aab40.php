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
            
            var miselect=\$(\"#productos\");
            /* VACIAMOS EL SELECT Y PONEMOS UNA OPCION QUE DIGA CARGANDO... */
            miselect.find('option').remove().end().append('').val('');

            \$.post(\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("productos_listProGrid", array("pidter" => "0"));
        echo "\",
                    function(data) {
                            miselect.empty();
                            for (var i=0; i' + data[i].literal + '');
                            }
            }, \"json\");
            
            jQuery(\"#histprecios\").jqGrid({        
                    url:\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("informes_histpreciosData", array("prod" => "ALL"));
        echo "\",
                    datatype: \"json\",
                    width:'100%',
                    heigth:'500px',
                    colNames:['Ref.','Producto','Tercero','Tip. Dc.','Num. Doc.','Fecha','Transaccion','Valor','IdDet','IdMasD'],
                    colModel:[
                            {name:'txRefInterna',index:'txRefInterna',search:false,sortable:false},
                            {name:'txNomProducto',index:'txNomProducto',search:false,sortable:false},
                            {name:'txNomTercero',index:'txNomTercero',search:false,sortable:false},
                            {name:'txTipDoc',index:'txTipDoc',search:false,sortable:false},
                            {name:'txNumDoc',index:'txNumDoc',search:false,sortable:false},
                            {name:'feFecha',index:'feFecha',formatter:'date',search:false,sortable:false},
                            {name:'transaccion',index:'transaccion',search:false,sortable:false},
                            {name:'dbValUnitario',index:'dbValUnitario',search:false,sortable:false,formatter:'currency', 
                                    formatoptions:{defaultValue:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                            {name:'idDetDocumentos',index:'idDetDocumentos',search:false,sortable:false},
                            {name:'inidMasDocumento',index:'inidMasDocumento',search:false,sortable:false},
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
            jQuery(\"#histprecios\").hideCol('txNomTercero');
            jQuery(\"#histprecios\").hideCol('transaccion');
            //jQuery(\"#histprecios\").hideCol('txRefInterna');
            jQuery(\"#histprecios\").hideCol('idDetDocumentos');
            jQuery(\"#histprecios\").hideCol('inidMasDocumento');
            jQuery(\"#histprecios\").hideCol('Productos_idProducto');

            //jQuery(\"#histprecios\").jqGrid('filterToolbar', { searchOnEnter: false, enableClear: false, ignoreCase: false });
            //jQuery(\"#histprecios\").jqGrid('navGrid',\"#paginacion\",{reloadAfterSubmit:true});
            jQuery(\"#histprecios\").jqGrid('inlineNav',\"#paginacion\");
            
       }); 
    </script>
";
    }

    // line 69
    public function block_main($context, array $blocks = array())
    {
        // line 70
        echo "  ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "     

  ";
        // line 72
        $this->displayBlock('sitecontent', $context, $blocks);
    }

    public function block_sitecontent($context, array $blocks = array())
    {
        // line 73
        echo "    <div height=\"500px\">
        <select id=\"productos\"> </selec>
    </div>
    <div height=\"500px\">
        <table id=\"histprecios\" ></table>
        <div id=\"paginacion\" ></div>
    </div>
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
        return array (  123 => 73,  117 => 72,  111 => 70,  108 => 69,  56 => 20,  45 => 12,  33 => 4,  30 => 3,);
    }
}
