<?php

/* InventarioFrontBundle:Informes:rentabilidad.html.twig */
class __TwigTemplate_cefeac94a88749cf393eff6fa0507c3d2ede09ffd18c30155d66b66b20f043ff extends Twig_Template
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
            
     
          
            jQuery(\"#rentabilidad\").jqGrid({        
                    url:\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informes_rentabilidadData", array("prod" => "ALL", "desde" => "2014-01-01", "hasta" => "2025-01-01")), "html", null, true);
        echo "\",
                    datatype: \"json\",
                    //width:'100%',
                    heigth:'400px',
                    mtype: 'POST',
                    colNames:['Ref.','Producto','Transaccion','Promedio valor','Total','Cantidad','IdDetD','IdMasD'],
                    colModel:[
                            {name:'txRefInterna',index:'txRefInterna',search:false,sortable:false},
                            {name:'txNomProducto',index:'txNomProducto',search:false,sortable:false},
                            {name:'transaccion',index:'transaccion',search:false,sortable:false},
                            {name:'promedio',index:'promedio',search:false,sortable:false,formatter:'currency',
                                align:'right', formatoptions:{defaultValue:0,decimalSeparator:\".\", 
                                    thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}, 
                                summaryTpl: '<i>{0}</i>',summaryType: 'sum'},
                            {name:'total',index:'total',search:false,sortable:false,formatter:'currency',
                                align:'right', formatoptions:{defaultValue:0,decimalSeparator:\".\", 
                                    thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}, 
                                summaryTpl: '<i>{0}</i>',summaryType: 'sum'},
                            {name:'cantidad',index:'cantidad',search:false,sortable:false,align:'right', 
                                summaryTpl: '<i>{0}</i>',summaryType: 'sum'},
                            {name:'idDetDocumentos',index:'idDetDocumentos',search:false,sortable:false},
                            {name:'inidMasDocumento',index:'inidMasDocumento',search:false,sortable:false},
                    ],
                    pager: '#paginacion',
                    rowNum:1000,
                    rowList:[1000,2000,3000],
                    sortname: 'txNomProducto',
                    sortorder: 'asc',
                    viewrecords: true,
                    caption: 'Rentabilidad por productos',
                    grouping:true, 
                    groupingView : { 
                        groupField : ['txNomProducto'], 
                        groupSummary: [true],
                        groupColumnShow: [true],
                        groupText: ['<b>{0}</b>'],
                        groupDataSorted: true
                    },
            });
            //jQuery(\"#rentabilidad\").hideCol('transaccion');
            jQuery(\"#rentabilidad\").hideCol('idDetDocumentos');
            jQuery(\"#rentabilidad\").hideCol('inidMasDocumento');
            jQuery(\"#rentabilidad\").hideCol('Productos_idProducto');

       }); 
        function recargaGrid(value){
          //alert(value);
          var newUrl = \"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informes_rentabilidadData", array("prod" => "ALL", "desde" => "FDESDE", "hasta" => "FHASTA")), "html", null, true);
        echo "\";
          newUrl = newUrl.replace('ALL', \$('#productos').val());              
          newUrl = newUrl.replace('FDESDE', \$('#desde').val());
          newUrl = newUrl.replace('FHASTA', \$('#hasta').val());

          \$(\"#rentabilidad\").setGridParam({url: newUrl, page: 1}).trigger('reloadGrid');
        };
    </script>
";
    }

    // line 96
    public function block_sitecontent($context, array $blocks = array())
    {
        // line 97
        echo "    ";
        $this->displayParentBlock("sitecontent", $context, $blocks);
        echo "     
        <h1>Rentabilidad por productos</h1>
        <div>
            <table> 
                <tr>
                    <td><label>Filtrar</label></td>
                    <td><select id=\"productos\" onchange=\"recargaGrid(this.value)\">
                    <option value=\"ALL\">Seleccione un producto </option></select> </td>
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
         
        <div><table id=\"rentabilidad\" ></table>
        <div id=\"paginacion\" ></div></div>
            <table> 
                <tr><td><h5>*La suma de <strong>Promedio valor</strong> es el valor por unidad que se ha ganado por cada producto vendido</h5></td></tr>
                <tr><td><h5>*La suma de <strong>Total</strong> es el valor general que se ha ganado por el item seleccionado</h5> </td></tr>
                <tr><td><h5>*La suma de <strong>Cantidad</strong> es el valor que aún tenemos en existencias </h5></td></tr>
                
            </table>    
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Informes:rentabilidad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 97,  137 => 96,  124 => 86,  74 => 39,  40 => 8,  32 => 4,  29 => 3,);
    }
}
