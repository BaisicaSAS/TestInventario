<?php

/* InventarioFrontBundle:Informes:mvtoterceros.html.twig */
class __TwigTemplate_3b146df68ed64036b6c84b6422c922008accb1c0697af18d16a5917e6e8686c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InventarioFrontBundle:Informes:index.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'sitecontent' => array($this, 'block_sitecontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InventarioFrontBundle:Informes:index.html.twig";
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
        echo $this->env->getExtension('routing')->getPath("terceros_listTerGrid", array("tipo" => "0"));
        echo "\", function( data ) {
                var sel1 = document.getElementById('movterceros');
                var i = 0;
                //alert(i);
                \$.each( data, function() {
                    var opt = document.createElement('option');
                    opt.innerHTML = data[i].txNomTercero;
                    opt.value = data[i].idTercero;
                    sel1.appendChild(opt);
                    i++; 
                });
            });

        jQuery(\"#terceros\").jqGrid({        
                    url:\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("informes_mvtotercerosData", array("ter" => "ALL"));
        echo "\",
                    datatype: \"json\",
                    width:'100%',
                    heigth:'500px',
                    colNames:['Tercero','Ref.','Producto','Tip. Dc.','Num. Doc.','Fecha','Entrada','Salida','Valor','IdDet','IdMasD'],
                    colModel:[
                            {name:'txNomTercero',index:'txNomTercero',search:false,sortable:false},
                            {name:'txRefInterna',index:'txRefInterna',search:false,sortable:false},
                            {name:'txNomProducto',index:'txNomProducto',search:false,sortable:false},
                            {name:'txTipDoc',index:'txTipDoc',search:false,sortable:false},
                            {name:'txNumDoc',index:'txNumDoc',search:false,sortable:false},
                            {name:'feFecha',index:'feFecha',formatter:'date',search:false,sortable:false},
                            {name:'inEntrada',index:'inEntrada', formatter: 'integer',search:false,
                                align: 'right', summaryTpl: '<i>{0}</i>',summaryType: 'sum',sortable:false},
                            {name:'inSalida',index:'inSalida', formatter: 'integer',search:false,
                                align: 'right', summaryTpl: '<i>{0}</i>',summaryType: 'sum',sortable:false},
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
                    caption: 'MOVIMIENTO DE TERCEROS',
                    grouping:true, 
                    footerrow: true,
                    groupingView : { 
                        groupField : ['txNomTercero'], 
                        groupSummary: [true],
                        groupColumnShow: [true],
                        groupText: ['<b>{0}</b>'],
                        groupDataSorted: true
                    },
            });
            jQuery(\"#terceros\").hideCol('txNomTercero');
            //jQuery(\"#terceros\").hideCol('txRefInterna');
            jQuery(\"#terceros\").hideCol('idDetDocumentos');
            jQuery(\"#terceros\").hideCol('inidMasDocumento');
            jQuery(\"#terceros\").hideCol('Productos_idProducto');

            //jQuery(\"#terceros\").jqGrid('filterToolbar', { searchOnEnter: false, enableClear: false, ignoreCase: false });
            //jQuery(\"#terceros\").jqGrid('navGrid',\"#paginacion\",{reloadAfterSubmit:true});
            jQuery(\"#terceros\").jqGrid('inlineNav',\"#paginacion\");
            
       }); 

        function recargaGrid(value){
          //alert(value);
          var newUrl = \"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("informes_mvtotercerosData", array("ter" => "ALL"));
        echo "\";
          newUrl = newUrl.replace('ALL', value);
          //alert(newUrlr);

          \$(\"#terceros\").setGridParam({url: newUrl, page: 1}).trigger('reloadGrid');
          jQuery(\"#terceros\").hideCol('txNomTercero');
        };
    </script>
";
    }

    // line 85
    public function block_sitecontent($context, array $blocks = array())
    {
        echo " 
  ";
        // line 86
        $this->displayParentBlock("sitecontent", $context, $blocks);
        echo "     
        <h1>Movimiento por terceros</h1>
        <div>
            <table> 
                <tr>
                    <td><label>Filtrar</label></td>
                    <td><select id=\"movterceros\" onchange=\"recargaGrid(this.value)\">
                    <option value=\"ALL\">Seleccione un tercero </option></select> </td>
                </tr>
            </table>    
        </div>     
        <table id=\"terceros\" ></table>
        <div id=\"paginacion\" ></div>
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Informes:mvtoterceros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 86,  126 => 85,  113 => 75,  58 => 23,  41 => 9,  32 => 4,  29 => 3,);
    }
}
