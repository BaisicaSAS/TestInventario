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
        return array (  137 => 96,  146 => 105,  152 => 107,  178 => 131,  126 => 88,  23 => 1,  113 => 22,  84 => 12,  76 => 10,  58 => 13,  70 => 29,  53 => 20,  197 => 45,  185 => 42,  181 => 132,  165 => 37,  161 => 35,  153 => 47,  127 => 48,  124 => 86,  90 => 51,  81 => 11,  65 => 23,  34 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 40,  169 => 38,  140 => 97,  132 => 94,  128 => 49,  107 => 20,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 50,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 28,  102 => 32,  71 => 32,  67 => 22,  63 => 27,  59 => 20,  38 => 6,  94 => 39,  89 => 20,  85 => 38,  75 => 28,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 28,  88 => 13,  78 => 36,  46 => 10,  27 => 1,  44 => 11,  31 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 34,  156 => 66,  151 => 106,  142 => 99,  138 => 28,  136 => 56,  121 => 27,  117 => 44,  105 => 20,  91 => 27,  62 => 14,  49 => 18,  24 => 1,  25 => 3,  19 => 1,  79 => 11,  72 => 5,  69 => 17,  47 => 12,  40 => 8,  37 => 28,  22 => 2,  246 => 90,  157 => 116,  145 => 31,  139 => 98,  131 => 93,  123 => 47,  120 => 40,  115 => 22,  111 => 21,  108 => 36,  101 => 19,  98 => 31,  96 => 16,  83 => 25,  74 => 39,  66 => 16,  55 => 15,  52 => 19,  50 => 11,  43 => 11,  41 => 9,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 44,  189 => 43,  187 => 84,  182 => 66,  176 => 64,  173 => 39,  168 => 72,  164 => 59,  162 => 118,  154 => 58,  149 => 51,  147 => 106,  144 => 49,  141 => 29,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 21,  106 => 36,  103 => 19,  99 => 40,  95 => 28,  92 => 35,  86 => 12,  82 => 22,  80 => 29,  73 => 38,  64 => 10,  60 => 22,  57 => 11,  54 => 12,  51 => 5,  48 => 4,  45 => 17,  42 => 8,  39 => 7,  36 => 7,  33 => 6,  30 => 7,);
    }
}
