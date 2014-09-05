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
        var idMasDocumento, txnomter, gvaluni, selIRow = 1;
        var descActual, diasActual;
        var Hoy = new Date();
        var arTerceros = [];
        var arTipdoc = [];
        \$(document).ready(function(){
            jQuery(\"#masdoc\").jqGrid({        
                    url:\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listMasDocGrid");
        echo "\",
                    datatype: \"json\",
                    width:'100%',
                    colNames:['Imprimir','Id','Tipo Doc.','Num. Doc.', 'Tercero', 'Val. Neto', 'Val IVA.', 'Val. Total', 'Cond. Pago', 'Fecha', 'Vencimiento', 'Observaciones', 'Vendedor' ],
                    colModel:[
                            {name:'Imprimir', sortable:false, formatter: urlprint, width:'50px' ,
                                urlprint: function (cellvalue, options, rowObject)
                                {
                                  return cellvalue.replace(\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("masdocumentos_print", 1), "html", null, true);
        echo "\");
                                },},
                            {name:'id',index:'id', editable:false,search:false,editoptions:{readonly:true}},
                            {name:'txnomdoc',index:'txnomdoc',search:true,editable:true,edittype:\"select\",editoptions:{weight:'50px',dataUrl:\"";
        // line 24
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
        // line 41
        echo $this->env->getExtension('routing')->getPath("terceros_listTerGrid", array("tipo" => "0"));
        echo "\";
                                                    vturl = vturl.replace('0',  arTipdoc[Id]['afe']);
                                                    jQuery(\"#masdoc\").jqGrid('setColProp', 'txnomtercero',{editoptions: {dataUrl: vturl}});
                                                }
                                            }]
                                }
                            },
                            {name:'txnumdoc',index:'txnumdoc',weight:'50px',search:true,editable:true,editoptions:{weight:'30px', align:'center'}},\t\t
                            {name:'txnomtercero',index:'txnomtercero',weight:'50px',search:true,editable:true,edittype:\"select\",editoptions:{weight:'50px',dataUrl:\"";
        // line 49
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
                            {name:'dbvalneto',index:'dbvalneto',weight:'50px',search:true,editable:false, formatter:'currency', formatoptions:{defaultValue:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},\t\t
                            {name:'dbvaliva',index:'dbvaliva',weight:'50px',search:true,editable:false, formatter:'currency', formatoptions:{default:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                            {name:'dbtotal',index:'dbvaliva',weight:'50px',search:true,editable:false, formatter:'currency', formatoptions:{default:0,decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                            {name:'txcondPago',index:'txcondPago',weight:'50px',search:true,editable:true,editoptions:{align:'center'}},\t\t
                            {name:'fefecha',index:'fefecha',weight:'50px',search:true,editable:true,formatter:'date', edittype:'text', editoptions: {defaultValue:Hoy, dataInit:function(el){ \$(el).datepicker({dateFormat:'dd-mm-yy'});},
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
                            {name:'fevencimiento',index:'fevencimiento',weight:'50px',search:true,editable:true,formatter:'date',edittype:'text', editoptions:{ dataInit:function(el){ \$(el).datepicker({dateFormat:'dd-mm-yy'});}}},
                            {name:'txobservaciones',index:'txobservaciones',weight:'50px',search:true,editable:true,editoptions:{align:'center'}},
                            {name:'txnomvendedor',index:'txnomvendedor',weight:'50px',search:true,editable:true,edittype:\"select\",editoptions:{dataUrl:\"";
        // line 110
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
        // line 133
        echo $this->env->getExtension('routing')->getPath("masdocumentos_guardaMasDocGrid");
        echo "\",

                    onSelectRow: function (ids) {

                        var rowid = jQuery(\"#masdoc\").jqGrid('getGridParam','selrow');
                        //idmasd = jQuery(\"#masdoc\").jqGrid('getCell', ids, 'id');
                        nomter = jQuery(\"#masdoc\").jqGrid('getCell', ids, 'txnomtercero');
                        var vurl=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listDetDocGrid", array("piddoc" => "1"));
        echo "\";
                        var vturl=\"";
        // line 141
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
                        jQuery(\"#detdoc\").jqGrid('setColProp', 'txrefinterna',{editoptions: {dataUrl: vturl}}).trigger('reloadGrid');
                     },
            });
            
            function objectFindByKey(array, key, value) {
                for (var i = 0; i < array.length; i++) {
                    if (array[i][key] === value) {
                        return i;
                    }
                }
                return null;
            };

            
            jQuery(\"#masdoc\").printRow
            
            jQuery(\"#masdoc\").hideCol('id');
            jQuery(\"#masdoc\").hideCol('dbvalneto');
            jQuery(\"#masdoc\").hideCol('dbvaliva');
            jQuery(\"#masdoc\").hideCol('dbtotal');

            jQuery(\"#masdoc\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: false });
            jQuery(\"#masdoc\").jqGrid('navGrid',\"#paginacion\",{reloadAfterSubmit:true, add: false,edit:false,del:false,search:false});
            jQuery(\"#masdoc\").jqGrid('inlineNav',\"#paginacion\");

            //DETALLE
            jQuery(\"#detdoc\").jqGrid({        
                    url:\"";
        // line 192
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listDetDocGrid", array("piddoc" => "0"));
        echo "\",
                    datatype: \"json\",
                    width:'100%',
                    colNames:['Id','Id Doc.','Ref.', 'Producto', 'Cantidad','Val. Unitario','Val. Total'],
                    colModel:[
                            {name:'id',index:'id', editable:false,search:true,editoptions:{readonly:true,size:10}},
                            {name:'inidmasdocumento',index:'inidmasdocumento',editable:true,search:true,editoptions:{readonly:true}, editrules: {edithidden : true}},
                            {name:'txrefinterna',index:'txrefinterna',editable:true,edittype:\"select\",editoptions:{dataUrl:\"";
        // line 199
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
                            {name:'txnomproducto',index:'txnomproducto',editable:true,edittype:\"text\", editoptions:{readonly:true}},
                            {name:'incantidad',index:'incantidad',editable:true,search:true,editoptions:{defaultValue:1,
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
                            {name:'dbvalunitario',index:'dbvalunitario',editable:true,search:true,width:\"200px\", formatter:'currency', formatoptions:{decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"},
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
        // line 293
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

    // line 313
    public function block_main($context, array $blocks = array())
    {
        // line 314
        echo "  ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "     

  ";
        // line 316
        $this->displayBlock('sitecontent', $context, $blocks);
    }

    public function block_sitecontent($context, array $blocks = array())
    {
        // line 317
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
        return array (  397 => 317,  391 => 316,  385 => 314,  382 => 313,  359 => 293,  262 => 199,  252 => 192,  198 => 141,  194 => 140,  184 => 133,  158 => 110,  94 => 49,  83 => 41,  63 => 24,  57 => 21,  46 => 13,  33 => 4,  30 => 3,);
    }
}
