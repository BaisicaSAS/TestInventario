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
        \$(document).ready(function(){
            jQuery(\"#masdoc\").jqGrid({        
                    url:\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listMasDocGrid");
        echo "\",
                    datatype: \"json\",
                    width:'400px',
                    colNames:['Id','Id. TD', 'Tipo Doc.','Num. Doc.', 'Tercero', 'Val. Neto', 'Val IVA.', 'Val. Total', 'Cond. Pago', 'Fecha', 'Vencimiento', 'Onservaciones', 'Vendedor', 'Id. Vendedor', 'Id. Tercero', ],
                    colModel:[
                            {name:'id',index:'id', editable:false,search:true,editoptions:{readonly:true,size:10}},
                            {name:'inidtipdoc',index:'inidtipdoc',search:true,editable:true,editoptions:{size:10}},
                            {name:'txtipdoc',index:'txtipdoc',search:true,editable:true,editoptions:{size:10}},
                            {name:'txnumdoc',index:'txnumdoc',search:true,editable:true,editoptions:{size:10}},\t\t
                            {name:'txnomtercero',index:'txnomtercero',search:true,editable:true,editoptions:{size:10}},\t\t
                            {name:'dbvalneto',index:'dbvalneto',search:true,editable:true,editoptions:{size:10}},\t\t
                            {name:'dbvaliva',index:'dbvaliva',search:true,editable:true,editoptions:{size:10}},\t\t
                            {name:'dbtotal',index:'dbvaliva',search:true,editable:true,editoptions:{size:10}},\t\t
                            {name:'txcondPago',index:'txcondPago',search:true,editable:true,editoptions:{size:10}},\t\t
                            {name:'fefecha',index:'fefecha',search:true,editable:true,editoptions:{size:10}},
                            {name:'fevencimiento',index:'fevencimiento',search:true,editable:true,editoptions:{size:10}},
                            {name:'txobservaciones',index:'txobservaciones',search:true,editable:true,editoptions:{size:10}},
                            {name:'txnomvendedor',index:'txnomvendedor',search:true,editable:true,editoptions:{size:10}},
                            {name:'idvendedor',index:'idvendedor',search:true,editable:true,editoptions:{size:10}},
                            {name:'inidtercero',index:'inidtercero',search:true,editable:true,editoptions:{size:10}},
                    ],
                    rowNum:10,
                    rowList:[10,20,30],
                    pager: '#paginacion',
                    sortname: 'id',
                    viewrecords: true,
                    sortorder: \"asc\",
                    caption:\"Documentos\",
                    editurl:\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("masdocumentos_guardaMasDocGrid");
        echo "\",
                    onSelectRow: function(id) {
                        var vid=id;
                        var vurl=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listDetDocGrid", array("piddoc" => "1"));
        echo "\";
                        //alert (vurl);
                        var rowData = jQuery(this).getRowData(id); 
                        var val= rowData['txtipdoc']+\" - \"+rowData['txnumdoc'];//replace name with you column
                        //alert (val);
                        
                        if (vid != null){
                            vurl = vurl.replace('1', vid);
                        }
                            
                        if(vid == null) {
                            if(jQuery(\"#detdoc\").jqGrid('getGridParam','records') >0 )
                            {
                                jQuery(\"#detdoc\").jqGrid('setGridParam',{url:vurl,page:1});
                                jQuery(\"#detdoc\").jqGrid('setCaption',\"Detalle de documento: \"+vid+\" - \"+val)
                                .trigger('reloadGrid');
                            } 
                        } else { 
                            jQuery(\"#detdoc\").jqGrid('setGridParam',{url:vurl,page:1});
                            jQuery(\"#detdoc\").jqGrid('setCaption',\"Detalle de documento:  \"+vid+\" - \"+val)
                            .trigger('reloadGrid');\t\t\t
                        }
                    },
            });
            jQuery(\"#masdoc\").hideCol('id');
            jQuery(\"#masdoc\").hideCol('inidtipdoc');
            jQuery(\"#masdoc\").hideCol('idvendedor');
            jQuery(\"#masdoc\").hideCol('inidtercero');

            jQuery(\"#masdoc\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: false });
            jQuery(\"#masdoc\").jqGrid('navGrid',\"#paginacion\",{add: false,edit:false,del:false,search:false});
            jQuery(\"#masdoc\").jqGrid('inlineNav',\"#paginacion\");

            //DETALLE
            jQuery(\"#detdoc\").jqGrid({        
                    url:\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listDetDocGrid", array("piddoc" => "1"));
        echo "\",
                    datatype: \"json\",
                    width:'50%',
                    colNames:['Id','Id Doc.','Ref.', 'Producto','Id. Producto','Cantidad','Val. Unitario','Val. Total'],
                    colModel:[
                            {name:'id',index:'id', editable:false,search:true,editoptions:{readonly:true,size:10}},
                            {name:'inidmasdocumento',index:'inidmasdocumento', editable:false,search:true,editoptions:{readonly:true,size:10}},
                            {name:'txrefinterna',index:'txrefinterna',editable:true,search:true,width:\"100px\"},
                            {name:'txnomproducto',index:'txnomproducto',editable:true,search:true,width:\"400px\"},
                            {name:'idproducto',index:'idproducto',editable:true,search:true},
                            {name:'incantidad',index:'incantidad',editable:true,search:true},
                            {name:'dbvalunitario',index:'dbvalunitario',editable:true,search:true,width:\"200px\", formatter:'currency', formatoptions:{decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                            {name:'dbvaltotal',index:'dbvaltotal',editable:true,search:true,width:\"200px\", formatter:'currency', formatoptions:{decimalSeparator:\".\", thousandsSeparator: \",\", decimalPlaces: 0, prefix: \"\$ \"}},
                    ],
                    rowNum:1000,
                    rowList:[1000,2000,3000],
                    pager: '#pagered',
                    sortname: 'id',
                    viewrecords: true,
                    sortorder: \"asc\",
                    caption:\"Detalle de documento: 1\",//,
                //editurl:\"someurl.php\"
            });
            jQuery(\"#detdoc\").hideCol('inidmasdocumento');
            jQuery(\"#detdoc\").hideCol('id');
            jQuery(\"#detdoc\").hideCol('idproducto');

            jQuery(\"#detdoc\").jqGrid('navGrid',\"#pagered\",{add: false,edit:false,del:false,search:false});
            jQuery(\"#detdoc\").jqGrid('inlineNav',\"#pagered\");

            jQuery(\"#detdoc\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: false });
            \$(\"#bedata\").click(function(){
                    jQuery(\"#detdoc\").jqGrid('editGridRow',\"new\",{width: 800,height:200,reloadAfterSubmit:false}).trigger('reloadGrid');
            });
        });
        
    </script>
";
    }

    // line 113
    public function block_main($context, array $blocks = array())
    {
        // line 114
        echo "
  ";
        // line 115
        $this->displayParentBlock("main", $context, $blocks);
        echo "     
  ";
        // line 116
        $this->displayBlock('sitecontent', $context, $blocks);
    }

    public function block_sitecontent($context, array $blocks = array())
    {
        // line 117
        echo "        <h1>Documentos</h1>
        <table id=\"CONTENEDOR\" width=\"100%\">
            <tr id=\"Fila\" width=\"100%\">
                <td id=\"C1\"width=\"40%\">
                    <table id=\"masdoc\" ></table>
                    <div id=\"paginacion\" ></div>
                </td>
            </tr>
            <tr id=\"Fila2\" width=\"100%\">
                <td id=\"C1\" width=\"60%\">
                    <table id=\"detdoc\" ></table>
                    <div id=\"pagered\" ></div>
                </td>
            </tr>
        </table>    
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
        return array (  174 => 117,  168 => 116,  164 => 115,  161 => 114,  158 => 113,  116 => 74,  78 => 39,  72 => 36,  41 => 8,  33 => 4,  30 => 3,);
    }
}
