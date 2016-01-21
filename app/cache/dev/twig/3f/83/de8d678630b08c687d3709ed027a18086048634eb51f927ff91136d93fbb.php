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
        var idMasDocumento, txnomter, gvaluni, selIRow = 1;
        var descActual, diasActual;
        var Hoy = new Date();
        var arTerceros = [];
        var arTipdoc = [];
        var idReg = 1;
        
        
        \$(document).ready(function(){
            jQuery(\"#masdoc\").jqGrid({        
                    url:\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listMasDocGrid");
        echo "\",
                    datatype: \"json\",
                    width:'100%',
                    colNames:['Imprimir','Tipo Doc.','Num. Doc.', 'Tercero', 'Val. Neto', 'Val IVA.', 'Val. Total', 'Cond. Pago', 'Fecha', 'Vencimiento', 'Observaciones', 'Vendedor' ],
                    colModel:[
                            {name:'id',index:'id', editable:false,search:false,edittype: \"text\",width:'55px',formatter: editLink},
                            {name:'txnomdoc',index:'txnomdoc',search:false,editable:true,edittype:\"select\",editoptions:{weight:'50px',dataUrl:\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tipdoc_listTipDocGrid");
        echo "\",
                                buildSelect: function (data) {
                                            var response = jQuery.parseJSON(data);
                                            //alert(response);
                                            var s = '<select>';
                                            for (var i in response) {
                                                    //alert(response[i].inidtipdoc);
                                                    s += '<option value=\"' + response[i].txNomDoc + '\">' + response[i].txNomDoc + '</option>';
                                                    arTipdoc[i] = {\"tip\":response[i].txNomDoc,\"afe\":response[i].inTipTer};
                                            }
                                            //alert(s + \"</select>\");
                                            return s + \"</select>\";
                                        },                           
                                        async:false,                            
                                dataEvents: [{ type:'change',
                                                fn: function(e) {
                                                    var Id = objectFindByKey(arTipdoc, \"tip\", \$(e.target).val());
                                                    var vturl=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("terceros_listTerGrid", array("tipo" => "0"));
        echo "\";
                                                    vturl = vturl.replace('0',  arTipdoc[Id]['afe']);
                                                    jQuery(\"#masdoc\").jqGrid('setColProp', 'txnomtercero',{editoptions: {dataUrl: vturl}});
                                                }
                                            }]
                                }
                            },
                            {name:'txnumdoc',index:'txnumdoc',weight:'50px',search:false,editable:true,editoptions:{weight:'30px', align:'center'}},\t\t
                            {name:'txnomtercero',index:'txnomtercero',weight:'50px',search:false,editable:true,edittype:\"select\",editoptions:{weight:'50px',dataUrl:\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("terceros_listTerGrid", array("tipo" => "0"));
        echo "\",
                                buildSelect: function (data) {
                                            var response = jQuery.parseJSON(data);
                                            //alert(response);
                                            var s = '<select>';
                                            for (var i in response) {
                                                    //alert(response[i].inidtipdoc);
                                                    s += '<option value=\"' + response[i].txNomTercero + '\">' + response[i].txNomTercero + '</option>';
                                                    arTerceros[i] = {\"ter\":response[i].txNomTercero,\"desc\":response[i].txDescuento,\"dias\":response[i].txDiasDescuento};
                                            }
                                            //alert(s + \"</select>\");
                                            return s + \"</select>\";
                                        }, 
                                        async:false,                            
                                dataEvents: [{ type:'change',
                                                fn: function(e) {
                                                    //var row = \$(e.target).val();
                                                    var rowid = jQuery(\"#masdoc\").jqGrid('getGridParam','selrow');
                                                    var Id = objectFindByKey(arTerceros, \"ter\", \$(e.target).val());

                                                    var fila = '#'+rowid+'_txcondPago';    
                                                    \$(fila).val(arTerceros[Id][\"desc\"]+'% a '+arTerceros[Id][\"dias\"]+' días');
                                                    descActual = arTerceros[Id][\"desc\"];
                                                    diasActual = arTerceros[Id][\"dias\"];
                                                    

                                                    //var fila = '#'+rowid+'_fefecha';    
                                                    //var NFecha = new Date();
                                                    //NFecha.setTime(Date.parse(\$(fila).val()));
                                                    //alert(NFecha) ;
                                                    //var Venc = new Date(NFecha+ (diasActual*86400));
                                                    //alert(Venc) ;
                                                    //var fila = '#'+rowid+'_fevencimiento';    
                                                    //\$(fila).val(Venc);
                                                }
                                            }
                                ]}
                            },
                            {name:'dbvalneto',index:'dbvalneto',weight:'50px',search:false,editable:false, formatter:'currency', formatoptions:{defaultValue:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},\t\t
                            {name:'dbvaliva',index:'dbvaliva',weight:'50px',search:false,editable:false, formatter:'currency', formatoptions:{default:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                            {name:'dbtotal',index:'dbvaliva',weight:'50px',search:false,editable:false, formatter:'currency', formatoptions:{default:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                            {name:'txcondPago',index:'txcondPago',weight:'50px',search:false,editable:true,editoptions:{align:'center'}},\t\t
                            {name:'fefecha',index:'fefecha',weight:'50px',search:false,editable:true,formatter:'date', edittype:'text', editoptions: {defaultValue:Hoy, dataInit:function(el){ \$(el).datepicker({dateFormat:'dd-mm-yy'});},
                                dataEvents: [{ type:'change',
                                                fn: function(e) {
                                                    //var rowid = jQuery(\"#masdoc\").jqGrid('getGridParam','selrow');
                                                    //var Venc = new Date();
                                                    //alert(Venc.toString('dd-mm-yy'));
                                                    //Venc = Date.parse(\$(e.target).val())+(diasActual*86400);
                                                    //alert(Venc);
                                                    //var fVenc = new Date(Venc);
                                                    //alert(fVenc.toString());
                                                    //var fila = '#'+rowid+'_fevencimiento';    
                                                    //\$(fila).val(Venc);
                                                }
                                            }
                                            ]
                                }    
                            },
                            {name:'fevencimiento',index:'fevencimiento',weight:'50px',search:false,editable:true,formatter:'date',edittype:'text', editoptions:{ dataInit:function(el){ \$(el).datepicker({dateFormat:'dd-mm-yy'});}}},
                            {name:'txobservaciones',index:'txobservaciones',weight:'50px',search:false,editable:true,editoptions:{align:'center'}},
                            {name:'txnomvendedor',index:'txnomvendedor',weight:'50px',search:false,editable:true,edittype:\"select\",editoptions:{dataUrl:\"";
        // line 108
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
                                        }, 
                                async:false,                            
                            },
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
        // line 131
        echo $this->env->getExtension('routing')->getPath("masdocumentos_guardaMasDocGrid");
        echo "\",

                    onSelectRow: function (ids) {

                        var rowidant = idMasDocumento;
                        var filaant = '#'+rowidant;    
                        \$(filaant).find(\"td\").css(\"background-color\", \"#E5F0F2\");
                        
                        var rowid = jQuery(\"#masdoc\").jqGrid('getGridParam','selrow');
                        //idmasd = jQuery(\"#masdoc\").jqGrid('getCell', ids, 'id');
                        nomter = jQuery(\"#masdoc\").jqGrid('getCell', ids, 'txnomtercero');
                        var vurl=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listDetDocGrid", array("piddoc" => "1"));
        echo "\";
                        var vturl=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("productos_listProGrid", array("pidter" => "1"));
        echo "\";
                        vturl = vturl.replace('1',  nomter);
                        idMasDocumento = rowid;
                        if (ids != null){
                            vurl = vurl.replace('1', rowid);
                        }
                        var TDoc = jQuery(\"#masdoc\").jqGrid('getCell', rowid, 'txnomdoc');
                         var NDoc = jQuery(\"#masdoc\").jqGrid('getCell', rowid, 'txnumdoc');
                         if (ids == null) {
                             ids = 0;
                             if (jQuery(\"#detdoc\").jqGrid('getGridParam', 'records') > 0) {

                                 jQuery(\"#detdoc\").jqGrid('setGridParam', {url: vurl, page: 1 });
                                 //alert(\"Null \"+vurl);
                                 jQuery(\"#detdoc\").jqGrid('setCaption', \"Detalle documento--:      [ \"  + TDoc + \" - \" + NDoc + \" ]\")
                                    .trigger('reloadGrid');
                             }
                        } else {

                             jQuery(\"#detdoc\").jqGrid('setGridParam', { url: vurl, page: 1 }).trigger('reloadGrid');
                             //alert(\".\"+vurl);
                             jQuery(\"#detdoc\").jqGrid('setCaption',\".Detalle documento:      [ \" + TDoc + \" - \" + NDoc + \" ]\")
                                .trigger('reloadGrid');
                        }

                        //Cambia el color de la fila
                        var rowid = jQuery(\"#masdoc\").jqGrid('getGridParam','selrow');
                        var fila = '#'+rowid;    
                        \$(fila).find(\"td\").css(\"background-color\", \"#F91C54\");
                       //Cambia el color de la fila
    
                        jQuery(\"#detdoc\").jqGrid('setColProp', 'txrefinterna',{editoptions: {dataUrl: vturl}}).trigger('reloadGrid');
                     },
            });
            
            function editLink(cellValue, options, rowdata, action)
            {   var vurl =  \"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("masdocumentos_print", array("piddoc" => "IDDOC"));
        echo "\";
                vurl = vurl.replace('IDDOC',rowdata.id);
                return '<a href='+ vurl+ ' >Imprimir </a>';
            }
            function objectFindByKey(array, key, value) {
                for (var i = 0; i < array.length; i++) {
                    if (array[i][key] === value) {
                        return i;
                    }
                }
                return null;
            };
            
            //jQuery(\"#masdoc\").hideCol('id');
            jQuery(\"#masdoc\").hideCol('dbvalneto');
            jQuery(\"#masdoc\").hideCol('dbvaliva');
            jQuery(\"#masdoc\").hideCol('dbtotal');

            jQuery(\"#masdoc\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: false });
            jQuery(\"#masdoc\").jqGrid('navGrid',\"#paginacion\",{reloadAfterSubmit:true, add: false,edit:false,del:false,search:false});
            jQuery(\"#masdoc\").jqGrid('inlineNav',\"#paginacion\");

            //DETALLE
            jQuery(\"#detdoc\").jqGrid({        
                    url:\"";
        // line 203
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listDetDocGrid", array("piddoc" => "0"));
        echo "\",
                    datatype: \"json\",
                    width:'100%',
                    colNames:['Id','Id Doc.','Ref.', 'Producto', 'Cantidad','Val. Unitario','Val. Total'],
                    colModel:[
                            {name:'id',index:'id', editable:false,search:false,editoptions:{readonly:true,size:10}},
                            {name:'inidmasdocumento',index:'inidmasdocumento',editable:true,search:false,editoptions:{readonly:true}, editrules: {edithidden : true}},
                            {name:'txrefinterna',index:'txrefinterna',editable:true,search:false,edittype:\"select\",editoptions:{dataUrl:\"";
        // line 210
        echo $this->env->getExtension('routing')->getPath("productos_listProGrid", array("pidter" => "0"));
        echo "\", 
                                buildSelect: function (data) {
                                            
                                            var response = jQuery.parseJSON(data);
                                            //alert(response);
                                            var s = '<select>';
                                            s += '<option value=\"0\">Seleccione producto</option>'
                                            for (var i in response) {
                                                    //alert(response[i].inidtipdoc);
                                                    s += '<option value=\"' + response[i].txnomproducto+'|'+ response[i].dbvalor +'\">' + response[i].txrefinterna+\"-\"+response[i].txnomproducto + '</option>';
                                            }
                                            //alert(s + \"</select>\");
                                            return s + \"</select>\";
                                        }, 
                                dataEvents: [{ type:'change',
                                                fn: function(e) {
                                                    var row = \$(e.target).val();
                                                    var arr = row.split('|');
                                                    var rowid = jQuery(\"#detdoc\").jqGrid('getGridParam','selrow');
                                                    
                                                    jQuery(\"#detdoc\").jqGrid('setCell', rowid, 'txnomproducto', arr[0]);
                                                    
                                                    var fila = '#'+rowid+'_dbvalunitario';    
                                                    \$(fila).val(arr[1]);
                                                    fila = '#'+rowid+'_inidmasdocumento';    
                                                    \$(fila).val(idMasDocumento);
                                                    
                                                    jQuery(\"#detdoc\").jqGrid('setCell', rowid, 'dbvaltotal', arr[1]);
                                                }}
                                    ]
                                },
                                
                            },
                            {name:'txnomproducto',index:'txnomproducto',editable:true,search:false,edittype:\"text\", editoptions:{readonly:true}},
                            {name:'incantidad',index:'incantidad',editable:true,search:false,editoptions:{defaultValue:1,
                                dataEvents: [{ type:'change',
                                                fn: function(e) {
                                                    var rowid = jQuery(\"#detdoc\").jqGrid('getGridParam','selrow');
                                                    var dbvaltot = 0;
                                                    var incant = \$(e.target).val();
                                                    //var dbvaluni = jQuery(\"#detdoc\").jqGrid('getCell', rowid, 'dbvalunitario');
                                                    var fila = '#'+rowid+'_dbvalunitario';    
                                                    var dbvaluni = \$(fila).val();
                                                    dbvaltot = incant * dbvaluni;
                                                    jQuery(\"#detdoc\").jqGrid('setCell', rowid, 'dbvaltotal', dbvaltot);
                                                    //jQuery(\"#detdoc\").jqGrid('setCell', rowid, {dbvaltotal:dbvaltot});
                                                    //jQuery(\"#detdoc\").jqGrid('getLocalRow', rowid).dbvaltotal = dbvaltot;
                                                    
                                                }}
                                    ]
                                    
                            }},
                            {name:'dbvalunitario',index:'dbvalunitario',editable:true,search:false,width:\"200px\", formatter:'currency', formatoptions:{decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"},
                                editoptions:{defaultValue:1, dataInit: function (elem) { \$(elem).focus(function () { this.select(); }) },
                                dataEvents: [{ type:'change',
                                                fn: function(e) {
                                                    var rowid = jQuery(\"#detdoc\").jqGrid('getGridParam','selrow');
                                                    var dbvaltot = 0;
                                                    //var incant = jQuery(\"#detdoc\").jqGrid('getCell', rowid, 'incantidad');
                                                    var dbvaluni = \$(e.target).val(); 
                                                    var fila = '#'+rowid+'_incantidad';    
                                                    var incant = \$(fila).val(); 
                                                    dbvaltot = incant * dbvaluni;
                                                    jQuery(\"#detdoc\").jqGrid('setCell', rowid, 'dbvaltotal', dbvaltot);
                                            }},
                            //                {
                            //    type: 'keydown',
                            //                    fn: function (e) {
                            //                        var key = e.charCode || e.keyCode;
                            //                        if (key == 9)//tab
                            //                        {
                            //                            var grid = \$('#detdoc');
                                                        //Save editing for current row
                            //                            grid.jqGrid('saveRow', selIRow, false, 'clientArray');
                                                        //If at bottom of grid, create new row
                            //                            if (selIRow++ == grid.getDataIDs().length) {
                            //                                grid.addRowData(selIRow, {});
                            //                            }
                                                        //Enter edit row for next row in grid
                            //                            grid.jqGrid('editRow', selIRow, false, 'clientArray');
                            //                        }
                            //                    }
                            //                }
                                        ]
                                }},
                            {name:'dbvaltotal',index:'dbvaltotal',editable:true,search:false,width:\"200px\", formatter:'currency', formatoptions:{decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                    ],
                    rowNum:1000,
                    rowList:[1000,2000,3000],
                    pager: '#pagered',
                    sortname: 'id',
                    viewrecords: true,
                    sortorder: \"asc\",
                    caption:\"Detalle de documento: XX\",
                    editurl:\"";
        // line 304
        echo $this->env->getExtension('routing')->getPath("masdocumentos_guardaDetDocGrid");
        echo "\",

            });
            jQuery(\"#detdoc\").hideCol('inidmasdocumento');
            jQuery(\"#detdoc\").hideCol('id');
            jQuery(\"#detdoc\").hideCol('idproducto');

            jQuery(\"#detdoc\").jqGrid('navGrid',\"#pagered\",{add: false,edit:false,del:false,search:false});
            jQuery(\"#detdoc\").jqGrid('inlineNav',\"#pagered\");

            jQuery(\"#detdoc\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: false });
            //jQuery(\"#detdoc\").click(function(){
                    //jQuery(\"#masdoc\").trigger('reloadGrid');
                    //jQuery(\"#detdoc\").trigger('reloadGrid');
            //});
        });
        
    </script>
";
    }

    // line 324
    public function block_sitecontent($context, array $blocks = array())
    {
        // line 325
        echo "    <h1>Documentos</h1>
    <div>
        <div id=\"paginacion\" ></div>
        <table id=\"masdoc\" ></table>
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
        return array (  395 => 325,  392 => 324,  369 => 304,  272 => 210,  262 => 203,  192 => 142,  77 => 39,  137 => 96,  146 => 105,  152 => 108,  178 => 131,  126 => 88,  23 => 1,  113 => 22,  84 => 12,  76 => 10,  58 => 13,  70 => 29,  53 => 18,  197 => 45,  185 => 42,  181 => 132,  165 => 37,  161 => 35,  153 => 47,  127 => 48,  124 => 86,  90 => 51,  81 => 11,  65 => 27,  34 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 40,  169 => 38,  140 => 97,  132 => 94,  128 => 49,  107 => 20,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 179,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 50,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 28,  102 => 32,  71 => 30,  67 => 22,  63 => 25,  59 => 24,  38 => 6,  94 => 39,  89 => 20,  85 => 38,  75 => 28,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 28,  88 => 47,  78 => 34,  46 => 14,  27 => 1,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 143,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 34,  156 => 66,  151 => 106,  142 => 95,  138 => 28,  136 => 56,  121 => 27,  117 => 44,  105 => 20,  91 => 27,  62 => 14,  49 => 15,  24 => 1,  25 => 3,  19 => 1,  79 => 11,  72 => 5,  69 => 16,  47 => 12,  40 => 8,  37 => 28,  22 => 2,  246 => 90,  157 => 116,  145 => 96,  139 => 98,  131 => 93,  123 => 47,  120 => 76,  115 => 22,  111 => 21,  108 => 36,  101 => 19,  98 => 57,  96 => 16,  83 => 25,  74 => 39,  66 => 15,  55 => 15,  52 => 19,  50 => 11,  43 => 11,  41 => 9,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 44,  189 => 43,  187 => 84,  182 => 66,  176 => 64,  173 => 39,  168 => 72,  164 => 59,  162 => 118,  154 => 58,  149 => 51,  147 => 106,  144 => 49,  141 => 29,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 21,  106 => 36,  103 => 19,  99 => 40,  95 => 28,  92 => 35,  86 => 12,  82 => 22,  80 => 29,  73 => 38,  64 => 10,  60 => 22,  57 => 22,  54 => 12,  51 => 5,  48 => 16,  45 => 17,  42 => 11,  39 => 10,  36 => 7,  33 => 6,  30 => 7,);
    }
}
