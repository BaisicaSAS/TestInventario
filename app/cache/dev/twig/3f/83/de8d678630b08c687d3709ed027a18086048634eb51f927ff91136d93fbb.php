<?php

/* InventarioFrontBundle:Masdocumentos:index.html.twig */
class __TwigTemplate_3f83de8d678630b08c687d3709ed027a18086048634eb51f927ff91136d93fbb extends Twig_Template
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
        var idMasDocumento;
        \$(document).ready(function(){
            jQuery(\"#masdoc\").jqGrid({        
                    url:\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listMasDocGrid");
        echo "\",
                    datatype: \"json\",
                    width:'100%',
                    colNames:['Id','Tipo Doc.','Num. Doc.', 'Tercero', 'Val. Neto', 'Val IVA.', 'Val. Total', 'Cond. Pago', 'Fecha', 'Vencimiento', 'Observaciones', 'Vendedor' ],
                    colModel:[
                            {name:'id',index:'id', editable:false,search:false,editoptions:{readonly:true}},
                            {name:'txnomdoc',index:'txnomdoc',search:true,editable:true,edittype:\"select\",editoptions:{weight:'50px',dataUrl:\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("tipdoc_listTipDocGrid");
        echo "\",
                                buildSelect: function (data) {
                                            var response = jQuery.parseJSON(data);
                                            //alert(response);
                                            var s = '<select>';
                                            for (var i in response) {
                                                    //alert(response[i].inidtipdoc);
                                                    s += '<option value=\"' + response[i].txNomDoc + '\">' + response[i].txNomDoc + '</option>';
                                            }
                                            //alert(s + \"</select>\");
                                            return s + \"</select>\";
                                        }, async:false,                            
                                    }
                            },
                            {name:'txnumdoc',index:'txnumdoc',weight:'50px',search:true,editable:true,editoptions:{weight:'30px', align:'center'}},\t\t
                            {name:'txnomtercero',index:'txnomtercero',weight:'50px',search:true,editable:true,edittype:\"select\",editoptions:{weight:'50px',dataUrl:\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("terceros_listTerGrid", array("tipo" => "0"));
        echo "\",
                                buildSelect: function (data) {
                                            var response = jQuery.parseJSON(data);
                                            //alert(response);
                                            var s = '<select>';
                                            for (var i in response) {
                                                    //alert(response[i].inidtipdoc);
                                                    s += '<option value=\"' + response[i].txNomTercero + '\">' + response[i].txNomTercero + '</option>';
                                            }
                                            //alert(s + \"</select>\");
                                            return s + \"</select>\";
                                        }, async:false,                            
                                    }
                            },
                            {name:'dbvalneto',index:'dbvalneto',weight:'50px',search:true,editable:false, formatter:'currency', formatoptions:{defaultValue:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},\t\t
                            {name:'dbvaliva',index:'dbvaliva',weight:'50px',search:true,editable:false, formatter:'currency', formatoptions:{default:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                            {name:'dbtotal',index:'dbvaliva',weight:'50px',search:true,editable:false, formatter:'currency', formatoptions:{default:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                            {name:'txcondPago',index:'txcondPago',weight:'50px',search:true,editable:true,editoptions:{align:'center'}},\t\t
                            {name:'fefecha',index:'fefecha',weight:'50px',search:true,editable:true,formatter:'date', edittype:'text', editoptions: { dataInit:function(el){ \$(el).datepicker({dateFormat:'dd-mm-yy'});}}},
                            {name:'fevencimiento',index:'fevencimiento',weight:'50px',search:true,editable:true,formatter:'date',edittype:'text', editoptions:{ dataInit:function(el){ \$(el).datepicker({dateFormat:'dd-mm-yy'});}}},
                            {name:'txobservaciones',index:'txobservaciones',weight:'50px',search:true,editable:true,editoptions:{align:'center'}},
                            {name:'txnomvendedor',index:'txnomvendedor',weight:'50px',search:true,editable:true,edittype:\"select\",editoptions:{dataUrl:\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("vendedores_listVenGrid");
        echo "\", align:'center',
                                buildSelect: function (data) {
                                            var response = jQuery.parseJSON(data);
                                            //alert(response);
                                            var s = '<select>';
                                            for (var i in response) {
                                                    //alert(response[i].inidtipdoc);
                                                    s += '<option value=\"' + response[i].txNomVendedor + '\">' + response[i].txNomVendedor + '</option>';
                                            }
                                            //alert(s + \"</select>\");
                                            return s + \"</select>\";
                                        }, async:false,                            
                                    }
                            },
                    ],
                    rowNum:100,
                    rowList:[100,200,300],
                    pager: '#paginacion',
                    sortname: 'id',
                    viewrecords: true,
                    sortorder: \"asc\",
                    caption:\"Documentos\",
                    editurl:\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("masdocumentos_guardaMasDocGrid");
        echo "\",
                    onSelectRow: function (ids) {

                        idmasd = jQuery(\"#masdoc\").jqGrid('getCell', ids, 'id');
                        var vurl=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listDetDocGrid", array("piddoc" => "1"));
        echo "\";
                        //var veurl=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("masdocumentos_guardaDetDocGrid");
        echo "\";
                        idMasDocumento = idmasd;
                        //alert(veurl+\"----\"+vurl+\"---\"+idmasd);       
                        alert (idMasDocumento);
                        if (ids != null){
                            vurl = vurl.replace('1', idmasd);
                            //veurl = veurl.replace('1', idmasd);
                        }
                            
                         //alert(veurl+\"----\"+vurl);       
                         var TDoc = jQuery(\"#masdoc\").jqGrid('getCell', ids, 'txnomdoc');
                         var NDoc = jQuery(\"#masdoc\").jqGrid('getCell', ids, 'txnumdoc');
                         if (ids == null) {
                             ids = 0;
                             if (jQuery(\"#detdoc\").jqGrid('getGridParam', 'records') > 0) {
                                 //alert(ids);

                                 jQuery(\"#detdoc\").jqGrid('setGridParam', {url: vurl, page: 1 });
                                 jQuery(\"#detdoc\").jqGrid('setCaption', \"Detalle documento--:      [ \"  + TDoc + \" - \" + NDoc + \" ]\")
                                    .trigger('reloadGrid');
                             }
                         } else {

                             //alert(\"si\"+ids);
                             jQuery(\"#detdoc\").jqGrid('setGridParam', { url: vurl, page: 1 });
                             jQuery(\"#detdoc\").jqGrid('setCaption',\"Detalle documento:      [ \" + TDoc + \" - \" + NDoc + \" ]\")
                                .trigger('reloadGrid');
                         }
                     }                    
            });
            jQuery(\"#masdoc\").hideCol('id');
            jQuery(\"#masdoc\").hideCol('dbvalneto');
            jQuery(\"#masdoc\").hideCol('dbvaliva');
            jQuery(\"#masdoc\").hideCol('dbtotal');

            jQuery(\"#masdoc\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: false });
            jQuery(\"#masdoc\").jqGrid('navGrid',\"#paginacion\",{reloadAfterSubmit:true, add: false,edit:false,del:false,search:false});
            jQuery(\"#masdoc\").jqGrid('inlineNav',\"#paginacion\");
            jQuery(\"#masdoc\").click(function(){
                    jQuery(\"#masdoc\").trigger('reloadGrid');
                    jQuery(\"#detdoc\").trigger('reloadGrid');
            });

            //DETALLE
            jQuery(\"#detdoc\").jqGrid({        
                    url:\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listDetDocGrid", array("piddoc" => "1"));
        echo "\",
                    datatype: \"json\",
                    width:'100%',
                    colNames:['Id','Id Doc.','Ref.', 'Producto', 'Cantidad','Val. Unitario','Val. Total'],
                    colModel:[
                            {name:'id',index:'id', editable:false,search:true,editoptions:{readonly:true,size:10}},
                            {name:'inidmasdocumento',index:'inidmasdocumento',editable:false,search:true,editoptions:{readonly:true,defaultValue:idMasDocumento}},
                            {name:'txrefinterna',index:'txrefinterna',editable:true,edittype:\"select\",editoptions:{dataUrl:\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("productos_listProGrid", array("pidter" => "1"));
        echo "\", 
                                buildSelect: function (data) {
                                            
                                            var response = jQuery.parseJSON(data);
                                            //alert(response);
                                            var s = '<select>';
                                            s += '<option value=\"0|0\">Seleccione producto</option>'
                                            for (var i in response) {
                                                    //alert(response[i].inidtipdoc);
                                                    s += '<option value=\"' + response[i].txnomproducto +\"|\"+ response[i].dbvalor + '\">' + response[i].txrefinterna+\"-\"+response[i].txnomproducto + '</option>';
                                            }
                                            //alert(s + \"</select>\");
                                            return s + \"</select>\";
                                        }, 
                                dataEvents: [{ type:'change',
                                                fn: function(e) {
                                                    var row = \$(e.target).val();
                                                    var arr = row.split('|');
                                                    //var masid = 0;
                                                    //alert(arr[0]);
                                                    //alert(arr[1]);
                                                    //var masrowid = jQuery(\"#masdoc\").jqGrid('getGridParam','selrow');
                                                    var rowid = jQuery(\"#detdoc\").jqGrid('getGridParam','selrow');
                                                    //jQuery(\"#detdoc\").jqGrid('setCell', rowid, 'txnomproducto', row);
                                                    //masid = jQuery(\"#masdoc\").jqGrid('getCell', masrowid, 'id');
                                                    
                                                    //alert(masrowid);
                                                    jQuery(\"#detdoc\").jqGrid('setCell', rowid, 'inidmasdocumento', idMasDocumento);
                                                    jQuery(\"#detdoc\").jqGrid('setCell', rowid, 'txnomproducto', arr[0]);
                                                    jQuery(\"#detdoc\").jqGrid('setCell', rowid, 'dbvalunitario', arr[1]);
                                                }}
                                    ]
                                },
                                
                            },
                            {name:'txnomproducto',index:'txnomproducto',editable:true,edittype:\"text\", editoptions:{readonly:true}},
                            {name:'incantidad',index:'incantidad',editable:true,search:true,editoptions:{defaultValue:1,
                                dataEvents: [{ type:'blur',
                                                fn: function(e) {
                                                    var rowid = jQuery(\"#detdoc\").jqGrid('getGridParam','selrow');
                                                    var dbvaltot = 0;
                                                    var incant = \$(e.target).val();
                                                    var dbvaluni = jQuery(\"#detdoc\").jqGrid('getCell', rowid, 'dbvalunitario');
                                                    dbvaltot = incant * dbvaluni;
                                                    jQuery(\"#detdoc\").jqGrid('setCell', rowid, 'dbvaltotal', dbvaltot);
                                                }}
                                    ]
                                    
                            }},
                            {name:'dbvalunitario',index:'dbvalunitario',editable:true,search:true,width:\"200px\", formatter:'currency', formatoptions:{decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                            {name:'dbvaltotal',index:'dbvaltotal',editable:true,search:true,width:\"200px\", formatter:'currency', formatoptions:{decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                    ],
                    rowNum:1000,
                    rowList:[1000,2000,3000],
                    pager: '#pagered',
                    sortname: 'id',
                    viewrecords: true,
                    sortorder: \"asc\",
                    caption:\"Detalle de documento: XX\",
                    editurl:\"";
        // line 189
        echo $this->env->getExtension('routing')->getPath("masdocumentos_guardaDetDocGrid");
        echo "\",
            });
            //jQuery(\"#detdoc\").hideCol('inidmasdocumento');
            jQuery(\"#detdoc\").hideCol('id');
            jQuery(\"#detdoc\").hideCol('idproducto');

            jQuery(\"#detdoc\").jqGrid('navGrid',\"#pagered\",{add: false,edit:false,del:false,search:false});
            jQuery(\"#detdoc\").jqGrid('inlineNav',\"#pagered\");

            jQuery(\"#detdoc\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: false });
            jQuery(\"#detdoc\").click(function(){
                    jQuery(\"#masdoc\").trigger('reloadGrid');
                    //jQuery(\"#detdoc\").trigger('reloadGrid');
            });
        });
        
    </script>
";
    }

    // line 208
    public function block_main($context, array $blocks = array())
    {
        // line 209
        echo "  ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "     

  ";
        // line 211
        $this->displayBlock('sitecontent', $context, $blocks);
    }

    public function block_sitecontent($context, array $blocks = array())
    {
        // line 212
        echo "    <div>
        <table id=\"masdoc\" ></table>
        <div id=\"paginacion\" ></div>
    </div>
    <div>
        <table id=\"detdoc\" ></table>
        <div id=\"pagered\" ></div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Masdocumentos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 212,  280 => 211,  274 => 209,  271 => 208,  249 => 189,  118 => 73,  155 => 98,  23 => 1,  53 => 18,  104 => 53,  206 => 50,  192 => 43,  188 => 42,  184 => 41,  180 => 40,  172 => 38,  160 => 34,  152 => 46,  150 => 33,  137 => 27,  129 => 78,  113 => 22,  84 => 12,  76 => 10,  70 => 29,  65 => 23,  58 => 20,  34 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 123,  169 => 60,  140 => 28,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 26,  102 => 32,  71 => 30,  67 => 22,  63 => 25,  59 => 20,  38 => 26,  94 => 39,  89 => 20,  85 => 38,  75 => 28,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 51,  88 => 49,  78 => 34,  46 => 14,  27 => 1,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 44,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 95,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 20,  91 => 50,  62 => 21,  49 => 15,  24 => 4,  25 => 3,  19 => 1,  79 => 11,  72 => 16,  69 => 30,  47 => 12,  40 => 54,  37 => 10,  22 => 2,  246 => 90,  157 => 33,  145 => 96,  139 => 94,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 19,  98 => 52,  96 => 31,  83 => 25,  74 => 26,  66 => 27,  55 => 15,  52 => 19,  50 => 18,  43 => 11,  41 => 8,  35 => 7,  32 => 4,  29 => 5,  209 => 82,  203 => 49,  199 => 67,  193 => 73,  189 => 71,  187 => 130,  182 => 66,  176 => 39,  173 => 65,  168 => 37,  164 => 36,  162 => 57,  154 => 58,  149 => 97,  147 => 58,  144 => 30,  141 => 48,  133 => 55,  130 => 41,  125 => 77,  122 => 27,  116 => 41,  112 => 42,  109 => 21,  106 => 36,  103 => 32,  99 => 57,  95 => 28,  92 => 35,  86 => 28,  82 => 22,  80 => 29,  73 => 19,  64 => 10,  60 => 24,  57 => 11,  54 => 10,  51 => 15,  48 => 13,  45 => 17,  42 => 9,  39 => 10,  36 => 7,  33 => 4,  30 => 3,);
    }
}
