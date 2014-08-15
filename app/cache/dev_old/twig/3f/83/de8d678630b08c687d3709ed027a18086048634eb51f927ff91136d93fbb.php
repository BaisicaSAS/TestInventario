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

        var tipdocs = \$.ajax({url: \$(\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("tipdoc_listTipDocGrid");
        echo "\").val(), async: false, success: function(data, result) {if (!result) alert('Failure to retrieve the Countries.');}}).responseText;
        \$(document).ready(function(){
            jQuery(\"#masdoc\").jqGrid({        
                    url:\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listMasDocGrid");
        echo "\",
                    datatype: \"json\",
                    width:'400px',
                    colNames:['Id','Id. TD', 'Tipo Doc.','Num. Doc.', 'Tercero', 'Val. Neto', 'Val IVA.', 'Val. Total', 'Cond. Pago', 'Fecha', 'Vencimiento', 'Observaciones', 'Vendedor', 'Id. Vendedor', 'Id. Tercero', ],
                    colModel:[
                            {name:'id',index:'id', editable:false,search:true,editoptions:{readonly:true,size:10}},
                            {name:'inidtipdoc',index:'inidtipdoc',search:true,editable:true,edittype:\"select\",formatter:\"select\",editoptions:{dataUrl:\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("tipdoc_listTipDocGrid");
        echo "\"}},
                            {name:'txtipdoc',index:'txtipdoc',search:true,editable:false},
                            {name:'txnumdoc',index:'txnumdoc',weight:'50px',search:true,editable:true,editoptions:{weight:'30px', align:'center'}},\t\t
                            {name:'txnomtercero',index:'txnomtercero',weight:'50px',search:true,editable:true,edittype:\"select\",formatter:\"select\",editoptions:{dataUrl:\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("terceros_listTerGrid", array("tipo" => "0"));
        echo "\" }},
                            {name:'dbvalneto',index:'dbvalneto',weight:'50px',search:true,editable:true,editoptions:{align:'center', defaultValue:'0'}},\t\t
                            {name:'dbvaliva',index:'dbvaliva',weight:'50px',search:true,editable:true,editoptions:{align:'center', defaultValue:'0'}},\t\t
                            {name:'dbtotal',index:'dbvaliva',weight:'50px',search:true,editable:true,editoptions:{align:'center', defaultValue:'0'}},\t\t
                            {name:'txcondPago',index:'txcondPago',weight:'50px',search:true,editable:true,editoptions:{align:'center'}},\t\t
                            {name:'fefecha',index:'fefecha',weight:'50px',search:true,editable:true,editoptions:{align:'center'}},
                            {name:'fevencimiento',index:'fevencimiento',weight:'50px',search:true,editable:true,editoptions:{align:'center'}},
                            {name:'txobservaciones',index:'txobservaciones',weight:'50px',search:true,editable:true,editoptions:{align:'center'}},
                            {name:'txnomvendedor',index:'txnomvendedor',weight:'50px',search:true,editable:true,edittype:\"select\",formatter:\"select\",editoptions:{dataUrl:\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("vendedores_listVenGrid");
        echo "\", align:'center'}},
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
        // line 38
        echo $this->env->getExtension('routing')->getPath("masdocumentos_guardaMasDocGrid");
        echo "\",
                    loadComplete: function() {
                        \$(#masdoc).setColProp('inidtipdoc', { editoptions: { value: tipdocs} });
                    },                    
                    onSelectRow: function(id) {
                        var vid=id;
                        var vurl=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listDetDocGrid", array("piddoc" => "1"));
        echo "\";
                        //alert (vurl);
                        var rowData = jQuery(this).getRowData(id); 
                        var val= rowData['inidtipdoc']+\" - \"+rowData['txnumdoc'];//replace name with you column
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
            jQuery(\"#masdoc\").hideCol('txtipdoc');
            jQuery(\"#masdoc\").hideCol('idvendedor');
            jQuery(\"#masdoc\").hideCol('inidtercero');
            jQuery(\"#masdoc\").hideCol('dbvalneto');
            jQuery(\"#masdoc\").hideCol('dbvaliva');
            jQuery(\"#masdoc\").hideCol('dbtotal');

            jQuery(\"#masdoc\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: false });
            jQuery(\"#masdoc\").jqGrid('navGrid',\"#paginacion\",{add: false,edit:false,del:false,search:false});
            jQuery(\"#masdoc\").jqGrid('inlineNav',\"#paginacion\");

            //DETALLE
            jQuery(\"#detdoc\").jqGrid({        
                    url:\"";
        // line 82
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

    // line 121
    public function block_main($context, array $blocks = array())
    {
        // line 122
        echo "
  ";
        // line 123
        $this->displayParentBlock("main", $context, $blocks);
        echo "     
  ";
        // line 124
        $this->displayBlock('sitecontent', $context, $blocks);
    }

    public function block_sitecontent($context, array $blocks = array())
    {
        // line 125
        echo "        <h1>Documentos</h1>
        <table id=\"CONTENEDOR\" width=\"100%\">
            <tr id=\"Fila\" width=\"100%\">
                <td id=\"C1\"width=\"40%\">
                    <table id=\"masdoc\" ></table>
                    <div id=\"paginacion\" ></div>
                </td>
            </tr>
            <tr id=\"Fila2\" width=\"100%\" >
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
        return array (  194 => 125,  188 => 124,  184 => 123,  181 => 122,  178 => 121,  136 => 82,  95 => 44,  86 => 38,  72 => 27,  61 => 19,  55 => 16,  46 => 10,  40 => 7,  33 => 4,  30 => 3,);
    }
}