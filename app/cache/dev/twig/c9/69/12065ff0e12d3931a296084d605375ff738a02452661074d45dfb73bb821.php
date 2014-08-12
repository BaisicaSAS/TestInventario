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
            'main' => array($this, 'block_main'),
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
                            {name:'id',index:'id', editable:false,search:true,editoptions:{readonly:true,size:10}},
                            {name:'txnomlista',index:'txnomlista',search:true,editable:true,editoptions:{size:30}},
                            {name:'txactiva',index:'txactiva',search:true,sortable:false,editable: true, edittype:'select', formatter:'select', editoptions:{value: \"ACTIVA:ACTIVA;ACTIVA:INACTIVA\"},}\t\t
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
                                jQuery(\"#detlista\").jqGrid('setGridParam',{url:vurl,page:1});
                                jQuery(\"#detlista\").jqGrid('setCaption',\"Detalle de lista: \"+vid+\" - \"+val)
                                .trigger('reloadGrid');
                            } 
                        } else { 
                            jQuery(\"#detlista\").jqGrid('setGridParam',{url:vurl,page:1});
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
                            {name:'idlista',index:'idlista', editable:false,search:true,editoptions:{readonly:true,size:10}},
                            {name:'id',index:'id', editable:false,search:true,editoptions:{readonly:true,size:10}},
                            {name:'txrefinterna',index:'txrefinterna',editable:true,search:true,width:\"100px\"},
                            {name:'txnomproducto',index:'txnomproducto',editable:true,search:true,width:\"400px\"},
                            {name:'idproducto',index:'idproducto',editable:true,search:true},
                            {name:'dbvalor',index:'dbvalor',editable:true,search:true,width:\"200px\", formatter:'currency', formatoptions:{decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                    ],
                    rowNum:1000,
                    rowList:[1000,2000,3000],
                    pager: '#pagered',
                    sortname: 'id',
                    viewrecords: true,
                    sortorder: \"asc\",
                    caption:\"Detalle de lista: 1\",//,
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

    // line 94
    public function block_main($context, array $blocks = array())
    {
        // line 95
        echo "
  ";
        // line 96
        $this->displayParentBlock("main", $context, $blocks);
        echo "     
  ";
        // line 97
        $this->displayBlock('sitecontent', $context, $blocks);
    }

    public function block_sitecontent($context, array $blocks = array())
    {
        // line 98
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
        return array (  23 => 1,  53 => 20,  104 => 53,  194 => 44,  190 => 43,  186 => 42,  178 => 40,  174 => 39,  170 => 38,  155 => 98,  150 => 46,  148 => 33,  113 => 22,  84 => 12,  76 => 10,  70 => 29,  65 => 23,  58 => 20,  34 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 48,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 49,  179 => 69,  159 => 61,  143 => 56,  135 => 27,  119 => 26,  102 => 32,  71 => 32,  67 => 22,  63 => 27,  59 => 20,  38 => 26,  94 => 39,  89 => 20,  85 => 38,  75 => 28,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 28,  88 => 49,  78 => 36,  46 => 16,  27 => 1,  44 => 11,  31 => 4,  28 => 3,  201 => 48,  196 => 90,  183 => 82,  171 => 61,  166 => 37,  163 => 62,  158 => 34,  156 => 66,  151 => 63,  142 => 95,  138 => 28,  136 => 56,  121 => 46,  117 => 44,  105 => 20,  91 => 50,  62 => 21,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 11,  72 => 16,  69 => 25,  47 => 12,  40 => 55,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 96,  139 => 94,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 19,  98 => 52,  96 => 31,  83 => 25,  74 => 26,  66 => 27,  55 => 15,  52 => 19,  50 => 18,  43 => 11,  41 => 8,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 41,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 97,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 54,  125 => 47,  122 => 27,  116 => 41,  112 => 42,  109 => 21,  106 => 36,  103 => 32,  99 => 57,  95 => 28,  92 => 35,  86 => 28,  82 => 22,  80 => 29,  73 => 19,  64 => 10,  60 => 24,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 10,  39 => 12,  36 => 7,  33 => 4,  30 => 3,);
    }
}
