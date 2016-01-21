<?php

/* InventarioFrontBundle:Listaprecios:index.html.twig */
class __TwigTemplate_c96912065ff0e12d3931a296084d605375ff738a02452661074d45dfb73bb821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InventarioFrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
            jQuery(\"#maslista\").jqGrid({        
                    url:\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("listaprecios_listMasLPGrid");
        echo "\",
                    datatype: \"json\",
                    width:'40%',
                    colNames:['Id','Nombre','Act./Inac.'],
                    colModel:[
                            {name:'id',index:'id', editable:false,editoptions:{readonly:true,size:10}},
                            {name:'txnomlista',index:'txnomlista',editable:true,editoptions:{size:30}},
                            {name:'txactiva',index:'txactiva',sortable:false,editable: true, edittype:'select', formatter:'select', editoptions:{value: \"ACTIVA:ACTIVA;INACTIVA:INACTIVA\"},}\t\t
                    ],
                    rowNum:30,
                    rowList:[10,20,30],
                    pager: '#paginacion',
                    sortname: 'id',
                    viewrecords: true,
                    sortorder: \"asc\",
                    caption:\"Listas de precios\",
                    editurl:\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("listaprecios_guardaMasLPGrid");
        echo "\",
                    onSelectRow: function(id) {
                        var vid=id;
                        var vurl=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("listaprecios_listDetLPGrid", array("pidlista" => "1"));
        echo "\";
                        //alert (vurl);
                        var rowData = jQuery(this).getRowData(id); 
                        var val= rowData['txnomlista'];//replace name with you column
                        //alert (val);
                        
                        if (vid != null){
                            vurl = vurl.replace('1', vid);
                        }
                            
                        if(vid == null) {
                            if(jQuery(\"#detlista\").jqGrid('getGridParam','records') >0 )
                            {
                                jQuery(\"#detlista\").jqGrid('setGridParam',{url:vurl, page: 1 });
                                jQuery(\"#detlista\").jqGrid('setCaption',\"Detalle de lista: \"+vid+\" - \"+val)
                                .trigger('reloadGrid');
                            } 
                        } else { 
                            jQuery(\"#detlista\").jqGrid('setGridParam',{url:vurl, page: 1 });
                            jQuery(\"#detlista\").jqGrid('setCaption',\"Detalle de lista:  \"+vid+\" - \"+val)
                            .trigger('reloadGrid');\t\t\t
                        }
                    },
            });
            jQuery(\"#maslista\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: false });
            jQuery(\"#maslista\").jqGrid('navGrid',\"#paginacion\",{add: false,edit:false,del:false,search:false});
            jQuery(\"#maslista\").jqGrid('inlineNav',\"#paginacion\");

            //DETALLE
            jQuery(\"#detlista\").jqGrid({        
                    url:\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("listaprecios_listDetLPGrid", array("pidlista" => 1));
        echo "\",
                    datatype: \"json\",
                    width:'800px',
                    colNames:['Lista','Id','Id Producto', 'Ref. Producto','Producto','Precio'],
                    colModel:[
                            {name:'idlista',index:'idlista', editable:false,editoptions:{readonly:true,size:10}},
                            {name:'id',index:'id', editable:false,editoptions:{readonly:true,size:10}},
                            {name:'txrefinterna',index:'txrefinterna',editable:false,width:\"100px\"},
                            {name:'txnomproducto',index:'txnomproducto',editable:false,width:\"400px\"},
                            {name:'idproducto',index:'idproducto',editable:false},
                            {name:'dbvalor',index:'dbvalor',editable:true,width:\"200px\", formatter:'currency', formatoptions:{decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                    ],
                    rowNum:1000,
                    rowList:[1000,2000,3000],
                    pager: '#pagered',
                    sortname: 'id',
                    viewrecords: true,
                    sortorder: \"asc\",
                    caption:\"Detalle de lista: 1\",//,
                    editurl:\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("listaprecios_guardaDetLPGrid");
        echo "\",
                //editurl:\"someurl.php\"
            });
            jQuery(\"#detlista\").hideCol('idlista');
            jQuery(\"#detlista\").hideCol('id');
            jQuery(\"#detlista\").hideCol('idproducto');

            jQuery(\"#detlista\").jqGrid('navGrid',\"#pagered\",{add: false,edit:false,del:false,search:false});
            jQuery(\"#detlista\").jqGrid('inlineNav',\"#pagered\");

            jQuery(\"#detlista\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: false });
            \$(\"#bedata\").click(function(){
                    jQuery(\"#detlista\").jqGrid('editGridRow',\"new\",{width: 800,height:200,reloadAfterSubmit:false}).trigger('reloadGrid');
            });
        });
        
    </script>
";
    }

    // line 95
    public function block_sitecontent($context, array $blocks = array())
    {
        // line 96
        echo "        <h1>Listas de precios</h1>
        <table id=\"CONTENEDOR\" width=\"100%\">
            <tr id=\"Fila\" width=\"100%\">
                <td id=\"C1\"width=\"40%\">
                    <table id=\"maslista\" ></table>
                    <div id=\"paginacion\" ></div>
                </td>
                <td id=\"C1\" width=\"60%\">
                    <table id=\"detlista\" ></table>
                    <div id=\"pagered\" ></div>
                </td>
            </tr>
        </table>    
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Listaprecios:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 96,  146 => 105,  152 => 107,  178 => 131,  126 => 88,  23 => 1,  113 => 22,  84 => 12,  76 => 10,  58 => 13,  70 => 29,  53 => 20,  197 => 45,  185 => 42,  181 => 132,  165 => 37,  161 => 35,  153 => 47,  127 => 48,  124 => 86,  90 => 51,  81 => 11,  65 => 27,  34 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 40,  169 => 38,  140 => 97,  132 => 94,  128 => 49,  107 => 20,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 50,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 28,  102 => 32,  71 => 32,  67 => 22,  63 => 27,  59 => 24,  38 => 6,  94 => 39,  89 => 20,  85 => 38,  75 => 28,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 28,  88 => 13,  78 => 36,  46 => 10,  27 => 1,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 34,  156 => 66,  151 => 106,  142 => 95,  138 => 28,  136 => 56,  121 => 27,  117 => 44,  105 => 20,  91 => 27,  62 => 14,  49 => 14,  24 => 1,  25 => 3,  19 => 1,  79 => 11,  72 => 5,  69 => 16,  47 => 12,  40 => 8,  37 => 28,  22 => 2,  246 => 90,  157 => 116,  145 => 96,  139 => 98,  131 => 93,  123 => 47,  120 => 76,  115 => 22,  111 => 21,  108 => 36,  101 => 19,  98 => 57,  96 => 16,  83 => 25,  74 => 39,  66 => 15,  55 => 15,  52 => 19,  50 => 11,  43 => 11,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 44,  189 => 43,  187 => 84,  182 => 66,  176 => 64,  173 => 39,  168 => 72,  164 => 59,  162 => 118,  154 => 58,  149 => 51,  147 => 106,  144 => 49,  141 => 29,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 21,  106 => 36,  103 => 19,  99 => 40,  95 => 28,  92 => 35,  86 => 12,  82 => 22,  80 => 29,  73 => 38,  64 => 10,  60 => 22,  57 => 11,  54 => 12,  51 => 5,  48 => 4,  45 => 17,  42 => 10,  39 => 7,  36 => 7,  33 => 6,  30 => 7,);
    }
}
