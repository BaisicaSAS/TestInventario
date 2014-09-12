<?php

/* InventarioFrontBundle:Informes:kardex.html.twig */
class __TwigTemplate_efee4ac80ee4aa84ca44508d3c0ff421e204eceb67f41e4821e071cbbca77cca extends Twig_Template
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
            
            jQuery(\"#kardex\").jqGrid({        
                    url:\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informes_kardexData", array("prod" => "ALL", "desde" => "2014-01-01", "hasta" => "2025-01-01")), "html", null, true);
        echo "\",
                    datatype: \"json\",
                    //width:'100%',
                    heigth:'400px',
                    colNames:['IDProducto','Ref.','Producto','Tip. Dc.','Num. Doc.','Fecha','Entrada','Salida','IdDet','IdMasD'],
                    colModel:[
                            {name:'Productos_idProducto',index:'Productos_idProducto',search:false,sortable:false},
                            {name:'txRefInterna',index:'txRefInterna',search:false,sortable:false,width:'120px'},
                            {name:'txNomProducto',index:'txNomProducto',search:false,sortable:false,width:'250px'},
                            {name:'txTipDoc',index:'txTipDoc',search:false,sortable:false,width:'80px'},
                            {name:'txNumDoc',index:'txNumDoc',search:false,sortable:false},
                            {name:'feFecha',index:'feFecha',formatter:'date',search: false,sortable:false,width:'80px'},
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
                    sortname: ['txNomProducto','feFecha'],
                    sortorder: 'desc',
                    viewrecords: true,
                    caption: 'MOVIMIENTO DE PRODUCTOS',
                    grouping:true, 
                    footerrow: true,
                    sortable:false, 
                    groupingView : { 
                        groupField : ['txNomProducto'], 
                        groupSummary: [true],
                        groupColumnShow: [false],
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
        // line 86
        echo $this->env->getExtension('routing')->getPath("informes_kardexResumen", array("prod" => "ALL"));
        echo "\",
                    datatype: \"json\",
                    //width:'100%',
                    heigth:'400px',
                    colNames:['IDProducto','Ref.','Producto','Entradas','Salidas','Existencias'],
                    colModel:[
                            {name:'Productos_idProducto',index:'Productos_idProducto',editable:false,sortable:false},
                            {name:'txRefInterna',index:'txRefInterna',editable:false,sortable:false,width:'120px'},
                            {name:'txNomProducto',index:'txNomProducto',editable:false,sortable:false,width:'250px'},
                            {name:'sumEntrada',index:'sumEntrada',editable:false,search: false,sortable:false,width:'80px',align:'center'},
                            {name:'sumSalida',index:'sumSalida',editable:false,search: false,sortable:false,width:'80px',align:'center'},
                            {name:'inExistencia',index:'inExistencia',editable:false,search: false,sortable:false,width:'80px',align:'center'},
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
            //jQuery(\"#existenc\").jqGrid('inlineNav',\"#pagina\");
       }); 

        function recargaGrid(value){
          //alert(value);
          var newUrlr = \"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("informes_kardexResumen", array("prod" => "ALL"));
        echo "\"
          newUrlr = newUrlr.replace('ALL', \$('#movproductos').val());
          var newUrlk = \"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informes_kardexData", array("prod" => "ALL", "desde" => "FDESDE", "hasta" => "FHASTA")), "html", null, true);
        echo "\";
          newUrlk = newUrlk.replace('ALL', \$('#movproductos').val());              
          newUrlk = newUrlk.replace('FDESDE', \$('#desde').val());
          newUrlk = newUrlk.replace('FHASTA', \$('#hasta').val());
          //alert(newUrlr);

          \$(\"#existenc\").setGridParam({url: newUrlr, page: 1}).trigger('reloadGrid');
          \$(\"#kardex\").setGridParam({url: newUrlk, page: 1}).trigger('reloadGrid');
        };

    </script>
";
    }

    // line 131
    public function block_sitecontent($context, array $blocks = array())
    {
        // line 132
        echo "  ";
        $this->displayParentBlock("sitecontent", $context, $blocks);
        echo "     
        <h1>Informe de Kardex</h1>
        <div>
            <table> 
                <tr>
                    <td><label>Filtrar</label></td>
                    <td><select id=\"movproductos\" onchange=\"recargaGrid(this.value)\">
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
         
        <table> 
            <tr>
                <td><table id=\"kardex\" ></table>
                <div id=\"paginacion\" ></div></td>

                <td><table id=\"existenc\" ></table>
                <div id=\"pagina\" ></div></td>
            </tr>
        </table>    
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
        return array (  181 => 132,  178 => 131,  162 => 118,  157 => 116,  124 => 86,  73 => 38,  41 => 9,  32 => 4,  29 => 3,);
    }
}
