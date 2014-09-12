<?php

/* InventarioFrontBundle:Informes:mvtovendedores.html.twig */
class __TwigTemplate_338e45a517f62ffa3881202a4580f06ba3ccd6bbc6a69a360def1a8ae3684bbc extends Twig_Template
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
        // line 8
        echo $this->env->getExtension('routing')->getPath("vendedores_listVenGrid");
        echo "\", function( data ) {
                var sel1 = document.getElementById('movvendedor');
                var i = 0;
                //alert(i);
                \$.each( data, function() {
                    var opt = document.createElement('option');
                    opt.innerHTML = data[i].txNomVendedor;
                    opt.value = data[i].idVendedor;
                    sel1.appendChild(opt);
                    i++; 
                });
            });

            var now = new Date();
            var month = (now.getMonth()+1);               
            var fin = now.getDate();
            if(month < 10) 
                month = \"0\" + month;
            fin = 31;
            if(month == 2) 
                fin = \"28\";
            if((month == 4) | (month == 7) | (month == 9) | (month == 11))
                fin = \"30\";
            var fecha = now.getFullYear() + '-' + month + '-01';
            \$('#desde').val(fecha);
            fecha = now.getFullYear() + '-' + month + '-' + fin;
            \$('#hasta').val(fecha);
            
        
        jQuery(\"#vendedores\").jqGrid({        
                    url:\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informes_mvtovendedoresData", array("ven" => "ALL", "desde" => "2014-01-01", "hasta" => "2025-01-01")), "html", null, true);
        echo "\",
                    datatype: \"json\",
                    width:'90%',
                    heigth:'500px',
                    colNames:['Vendedor','Ref.','Producto','Tip. Dc.','Num. Doc.','Fecha','Entrada','Salida','Valor Uni.','Total','IdDet','IdMasD'],
                    colModel:[
                            {name:'txNomVendedor',index:'txNomTercero',search:false,sortable:false},
                            {name:'txRefInterna',index:'txRefInterna',search:false,sortable:false},
                            {name:'txNomProducto',index:'txNomProducto',search:false,sortable:false,width:\"250px\"},
                            {name:'txTipDoc',index:'txTipDoc',search:false,sortable:false,width:\"20px\"},
                            {name:'txNumDoc',index:'txNumDoc',search:false,sortable:false},
                            {name:'feFecha',index:'feFecha',formatter:'date',search:false,sortable:false,width:\"80px\"},
                            {name:'inEntrada',index:'inEntrada', formatter: 'integer',search:false,
                                align: 'right', summaryTpl: '<i>{0}</i>',summaryType: 'sum',sortable:false,width:\"80px\"},
                            {name:'inSalida',index:'inSalida', formatter: 'integer',search:false,
                                align: 'right', summaryTpl: '<i>{0}</i>',summaryType: 'sum',sortable:false,width:\"80px\"},
                            {name:'dbValUnitario',index:'dbValUnitario',search:false,sortable:false,formatter:'currency', 
                                    align: 'right',formatoptions:{defaultValue:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                            {name:'dbValTotal',index:'dbValTotal',search:false,sortable:false,formatter:'currency', 
                                    formatoptions:{defaultValue:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"},
                                    align: 'right', summaryTpl: '<i>{0}</i>',summaryType: 'sum'},
                            {name:'idDetDocumentos',index:'idDetDocumentos',search:false,sortable:false},
                            {name:'inidMasDocumento',index:'inidMasDocumento',search:false,sortable:false},
                    ],
                    rowNum:1000,
                    rowList:[1000,2000,3000],
                    pager: '#paginacion',
                    sortname: ['txNomVendedor','feFecha'],
                    sortorder: 'asc',
                    viewrecords: true,
                    caption: 'MOVIMIENTO POR VENDEDORES',
                    grouping:true, 
                    footerrow: true,
                    groupingView : { 
                        groupField : ['txNomVendedor'], 
                        groupSummary: [true],
                        groupColumnShow: [false],
                        groupText: ['<b>{0}</b>'],
                        groupDataSorted: true
                    },
            });
            jQuery(\"#vendedores\").hideCol('txNomVendedor');
            //jQuery(\"#vendedores\").hideCol('txRefInterna');
            jQuery(\"#vendedores\").hideCol('idDetDocumentos');
            jQuery(\"#vendedores\").hideCol('inidMasDocumento');
            jQuery(\"#vendedores\").hideCol('Productos_idProducto');

            //jQuery(\"#terceros\").jqGrid('filterToolbar', { searchOnEnter: false, enableClear: false, ignoreCase: false });
            //jQuery(\"#terceros\").jqGrid('navGrid',\"#paginacion\",{reloadAfterSubmit:true});
            //jQuery(\"#vendedores\").jqGrid('inlineNav',\"#paginacion\");
            
       }); 

        function recargaGrid(value){
          //alert(value);
          var newUrl = \"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informes_mvtovendedoresData", array("ven" => "ALL", "desde" => "FDESDE", "hasta" => "FHASTA")), "html", null, true);
        echo "\";
          newUrl = newUrl.replace('ALL', \$('#movvendedor').val());
          newUrl = newUrl.replace('FDESDE', \$('#desde').val());
          newUrl = newUrl.replace('FHASTA', \$('#hasta').val());
          //alert(newUrl);

          \$(\"#vendedores\").setGridParam({url: newUrl, page: 1}).trigger('reloadGrid');
          jQuery(\"#vendedores\").hideCol('txNomVendedor');
        };
    </script>
";
    }

    // line 105
    public function block_sitecontent($context, array $blocks = array())
    {
        echo " 
  ";
        // line 106
        $this->displayParentBlock("sitecontent", $context, $blocks);
        echo "     
        <h1>Ventas por vendedor</h1>
        <div>
            <table> 
                <tr>
                    <td><label>Filtrar</label></td>
                    <td><select id=\"movvendedor\" onchange=\"recargaGrid(this.value)\">
                    <option value=\"ALL\">Seleccione un vendedor </option></select> </td>
                </tr>
            </table>    
            <table> 
                <tr>
                    <td><label>Desde</label></td>
                    <td><input id=\"desde\" type=date  onchange=\"recargaGrid(this.value)\"></td>
                    <td><label>Hasta</label></td>
                    <td><input id=\"hasta\" type=date  onchange=\"recargaGrid(this.value)\"></td>
                </tr>
            </table>    
        </div>     
        <div><table id=\"vendedores\"></table>
        <div id=\"paginacion\" ></div></div>
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Informes:mvtovendedores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 106,  146 => 105,  131 => 93,  73 => 38,  40 => 8,  32 => 4,  29 => 3,);
    }
}
