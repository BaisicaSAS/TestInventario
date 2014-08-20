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
        // line 9
        echo $this->env->getExtension('routing')->getPath("masdocumentos_listMasDocGrid");
        echo "\",
                    datatype: \"json\",
                    width:'400px',
                    colNames:['Id','Tipo Doc.','Num. Doc.', 'Tercero', 'Val. Neto', 'Val IVA.', 'Val. Total', 'Cond. Pago', 'Fecha', 'Vencimiento', 'Observaciones', 'Vendedor' ],
                    colModel:[
                            {name:'id',index:'id', editable:false,search:true,editoptions:{readonly:true,size:10}},
                            {name:'txnomdoc',index:'txnomdoc',search:true,editable:true,edittype:\"select\",formatter:\"select\",editoptions:{dataUrl:\"";
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
                            {name:'txnomtercero',index:'txnomtercero',weight:'50px',search:true,editable:true,edittype:\"select\",formatter:\"select\",editoptions:{dataUrl:\"";
        // line 30
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
        // line 38
        echo $this->env->getExtension('routing')->getPath("vendedores_listVenGrid");
        echo "\", align:'center'}},
                    ],
                    rowNum:100,
                    rowList:[100,200,300],
                    pager: '#paginacion',
                    sortname: 'id',
                    viewrecords: true,
                    sortorder: \"asc\",
                    caption:\"Documentos\",
                    editurl:\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("masdocumentos_guardaMasDocGrid");
        echo "\",
            });
            jQuery(\"#masdoc\").hideCol('id');
            jQuery(\"#masdoc\").hideCol('dbvalneto');
            jQuery(\"#masdoc\").hideCol('dbvaliva');
            jQuery(\"#masdoc\").hideCol('dbtotal');

            jQuery(\"#masdoc\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: false });
            jQuery(\"#masdoc\").jqGrid('navGrid',\"#paginacion\",{reloadAfterSubmit:true, add: false,edit:false,del:false,search:false});
            jQuery(\"#masdoc\").jqGrid('inlineNav',\"#paginacion\");
            jQuery(\"#masdoc\").dblclick(function(){
                    jQuery(\"#masdoc\").jqGrid('editGridRow',rowid,{width: 800,reloadAfterSubmit:false}).trigger('reloadGrid');
            });

            //DETALLE
            jQuery(\"#detdoc\").jqGrid({        
                    url:\"";
        // line 63
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
        });
        
    </script>
";
    }

    // line 99
    public function block_main($context, array $blocks = array())
    {
        // line 100
        echo "
  ";
        // line 101
        $this->displayParentBlock("main", $context, $blocks);
        echo "     
  ";
        // line 102
        $this->displayBlock('sitecontent', $context, $blocks);
    }

    public function block_sitecontent($context, array $blocks = array())
    {
        // line 103
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
        return array (  166 => 103,  160 => 102,  156 => 101,  153 => 100,  150 => 99,  111 => 63,  92 => 47,  80 => 38,  69 => 30,  51 => 15,  42 => 9,  33 => 4,  30 => 3,);
    }
}
