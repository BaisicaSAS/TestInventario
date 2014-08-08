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
                    width:'40%',
                    colNames:['Id','Nombre','Act./Inac.'],
                    colModel:[
                            {name:'id',index:'id', editable:false,search:true,editoptions:{readonly:true,size:10}},
                            {name:'txnomlista',index:'txnomlista',search:true,editable:true,editoptions:{size:30}},
                            {name:'txactiva',index:'txactiva',search:true,sortable:false,editable: true, edittype:'select', formatter:'select', editoptions:{value: \"ACTIVA:ACTIVA;ACTIVA:INACTIVA\"},}\t\t
                    ],
                    rowNum:10,
                    rowList:[10,20,30],
                    pager: '#paginacion',
                    sortname: 'id',
                    viewrecords: true,
                    sortorder: \"asc\",
                    caption:\"Documentos\",
                    editurl:\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("masdocumentos_guardaMasDocGrid");
        echo "\",
                    onSelectRow: function(id) {
                        var vid=id;
                        var vurl=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("masdocumentos_listDetDocGrid", array("ptipdoc" => "1", "piddoc" => "1")), "html", null, true);
        echo "\";
                        //alert (vurl);
                        var rowData = jQuery(this).getRowData(id); 
                        var val= rowData['txnomlista'];//replace name with you column
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
            jQuery(\"#masdoc\").jqGrid('filterToolbar', { searchOnEnter: true, enableClear: false });
            jQuery(\"#masdoc\").jqGrid('navGrid',\"#paginacion\",{add: false,edit:false,del:false,search:false});
            jQuery(\"#masdoc\").jqGrid('inlineNav',\"#paginacion\");

            //DETALLE
            jQuery(\"#detdoc\").jqGrid({        
                        var vurl=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("masdocumentos_listDetDocGrid", array("ptipdoc" => "1", "piddoc" => "1")), "html", null, true);
        echo "\";
                    url:\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("masdocumentos_listDetDocGrid", array("ptipdoc" => "1", "piddoc" => "1")), "html", null, true);
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
                    caption:\"Detalle de documento: 1\",//,
                //editurl:\"someurl.php\"
            });
            jQuery(\"#detdoc\").hideCol('iddoc');
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

    // line 95
    public function block_main($context, array $blocks = array())
    {
        // line 96
        echo "
  ";
        // line 97
        $this->displayParentBlock("main", $context, $blocks);
        echo "     
  ";
        // line 98
        $this->displayBlock('sitecontent', $context, $blocks);
    }

    public function block_sitecontent($context, array $blocks = array())
    {
        // line 99
        echo "        <h1>Documentos</h1>
        <table id=\"CONTENEDOR\" width=\"100%\">
            <tr id=\"Fila\" width=\"100%\">
                <td id=\"C1\"width=\"40%\">
                    <table id=\"masdoc\" ></table>
                    <div id=\"paginacion\" ></div>
                </td>
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
        return array (  159 => 99,  153 => 98,  149 => 97,  146 => 96,  143 => 95,  103 => 58,  99 => 57,  66 => 27,  60 => 24,  41 => 8,  33 => 4,  30 => 3,);
    }
}
