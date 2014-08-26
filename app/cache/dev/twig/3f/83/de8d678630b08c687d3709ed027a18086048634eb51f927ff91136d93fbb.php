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
        var idMasDocumento, txnomter, gvaluni;
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

                        var rowid = jQuery(\"#masdoc\").jqGrid('getGridParam','selrow');
                        //idmasd = jQuery(\"#masdoc\").jqGrid('getCell', ids, 'id');
                        nomter = jQuery(\"#masdoc\").jqGrid('getCell', ids, 'txnomtercero');
                        var vurl=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listDetDocGrid", array("piddoc" => "1"));
        echo "\";
                        var vturl=\"";
        // line 80
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
                     }                    
            });
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
        // line 118
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listDetDocGrid", array("piddoc" => "0"));
        echo "\",
                    datatype: \"json\",
                    width:'100%',
                    colNames:['Id','Id Doc.','Ref.', 'Producto', 'Cantidad','Val. Unitario','Val. Total'],
                    colModel:[
                            {name:'id',index:'id', editable:false,search:true,editoptions:{readonly:true,size:10}},
                            {name:'inidmasdocumento',index:'inidmasdocumento',editable:true,search:true,editoptions:{readonly:true}, editrules: {edithidden : true}},
                            {name:'txrefinterna',index:'txrefinterna',editable:true,edittype:\"select\",editoptions:{dataUrl:\"";
        // line 125
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
                                editoptions:{defaultValue:1,
                    
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
                                                }}
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
        // line 202
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

    // line 222
    public function block_main($context, array $blocks = array())
    {
        // line 223
        echo "  ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "     

  ";
        // line 225
        $this->displayBlock('sitecontent', $context, $blocks);
    }

    public function block_sitecontent($context, array $blocks = array())
    {
        // line 226
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
        return array (  300 => 226,  294 => 225,  288 => 223,  285 => 222,  262 => 202,  182 => 125,  172 => 118,  131 => 80,  127 => 79,  118 => 73,  93 => 51,  69 => 30,  51 => 15,  42 => 9,  33 => 4,  30 => 3,);
    }
}
