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
            
        jQuery(\"#terceros\").jqGrid({        
                    url:\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informes_mvtotercerosData", array("ter" => "ALL", "desde" => "2014-01-01", "hasta" => "2025-01-01")), "html", null, true);
        echo "\",
                    datatype: \"json\",
                    width:'90%',
                    heigth:'400px',
                    colNames:['Tercero','Ref.','Producto','Tip. Dc.','Num. Doc.','Fecha','Entrada','Salida','Valor Uni.','Total','IdDet','IdMasD'],
                    colModel:[
                            {name:'txNomTercero',index:'txNomTercero',search:false,sortable:false,width:\"250px\"},
                            {name:'txRefInterna',index:'txRefInterna',search:false,sortable:false,width:\"100px\"},
                            {name:'txNomProducto',index:'txNomProducto',search:false,sortable:false,width:\"250px\"},
                            {name:'txTipDoc',index:'txTipDoc',search:false,sortable:false,width:\"20px\"},
                            {name:'txNumDoc',index:'txNumDoc',search:false,sortable:false},
                            {name:'feFecha',index:'feFecha',formatter:'date',search:false,sortable:false,width:\"80px\"},
                            {name:'inEntrada',index:'inEntrada', formatter: 'integer',search:false,width:\"80px\",
                                align: 'right', summaryTpl: '<i>{0}</i>',summaryType: 'sum',sortable:false},
                            {name:'inSalida',index:'inSalida', formatter: 'integer',search:false,width:\"80px\",
                                align: 'right', summaryTpl: '<i>{0}</i>',summaryType: 'sum',sortable:false},
                            {name:'dbValUnitario',index:'dbValUnitario',search:false,sortable:false,formatter:'currency', 
                                    formatoptions:{defaultValue:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"},
                                    align: 'right'},
                            {name:'dbValTotal',index:'dbValTotal',search:false,sortable:false,formatter:'currency', 
                                    formatoptions:{defaultValue:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"},
                                    align: 'right', summaryTpl: '<i>{0}</i>',summaryType: 'sum'},
                            {name:'idDetDocumentos',index:'idDetDocumentos',search:false,sortable:false},
                            {name:'inidMasDocumento',index:'inidMasDocumento',search:false,sortable:false},
                    ],
                    rowNum:1000,
                    rowList:[1000,2000,3000],
                    pager: '#paginacion',
                    sortname: ['txNomTercero','feFecha'],
                    sortorder: 'asc',
                    viewrecords: true,
                    caption: 'MOVIMIENTO DE TERCEROS',
                    grouping:true, 
                    footerrow: true,
                    groupingView : { 
                        groupField : ['txNomTercero'], 
                        groupSummary: [true],
                        groupColumnShow: [false],
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
            //jQuery(\"#terceros\").jqGrid('inlineNav',\"#paginacion\");
            
       }); 

        function recargaGrid(value){
          //alert(value);
          var newUrl = \"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informes_mvtotercerosData", array("ter" => "ALL", "desde" => "FDESDE", "hasta" => "FHASTA")), "html", null, true);
        echo "\";
          newUrl = newUrl.replace('ALL', \$('#movterceros').val());
          newUrl = newUrl.replace('FDESDE', \$('#desde').val());
          newUrl = newUrl.replace('FHASTA', \$('#hasta').val());
          //alert(newUrl);

          \$(\"#terceros\").setGridParam({url: newUrl, page: 1}).trigger('reloadGrid');
          jQuery(\"#terceros\").hideCol('txNomTercero');
        };
    </script>
";
    }

    // line 106
    public function block_sitecontent($context, array $blocks = array())
    {
        echo " 
  ";
        // line 107
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
            <table> 
                <tr>
                    <td><label>Desde</label></td>
                    <td><input id=\"desde\" type=date  onchange=\"recargaGrid(this.value)\"></td>
                    <td><label>Hasta</label></td>
                    <td><input id=\"hasta\" type=date  onchange=\"recargaGrid(this.value)\"></td>
                </tr>
            </table>    
        </div>     
        <table id=\"terceros\"  </table>
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
        return array (  152 => 107,  147 => 106,  132 => 94,  73 => 38,  41 => 9,  32 => 4,  29 => 3,);
    }
}
