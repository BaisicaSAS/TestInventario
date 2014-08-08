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
                    rowNum:10,
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
        return array (  155 => 98,  149 => 97,  145 => 96,  142 => 95,  139 => 94,  99 => 57,  66 => 27,  60 => 24,  41 => 8,  33 => 4,  30 => 3,);
    }
}
