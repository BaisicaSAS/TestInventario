<?php

/* InventarioFrontBundle:Default:index.html.twig */
class __TwigTemplate_8bb37a57fa4d3b387f360edb3d6206930d1e0122d1288e191c6cbd2dc01f2c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'menubar' => array($this, 'block_menubar'),
            'sitecontent' => array($this, 'block_sitecontent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>

<head> ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 24
        echo " </head>

<body> 
<div id=\"main\">";
        // line 27
        $this->displayBlock('main', $context, $blocks);
        // line 56
        echo "</div>
</body>      
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"Esta es una prueba de desarrollo en PHP, de uso academico\" />
    <meta name=\"keywords\" content=\"prueba, desarrollo\" />
    <meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1252\" />
  
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo " 
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Prueba Inventario";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/inventario/style/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jqgrid/css/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jqgrid/css/ui.jqgrid.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        echo "   
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jquery/js/i18n/grid.locale-es.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jquery/js/jquery.jqGrid.min.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\" ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jqgrid/js/i18n/grid.locale-es.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\" ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jqgrid/js/jquery.jqGrid.min.js"), "html", null, true);
        echo "\" ></script>
    ";
    }

    // line 27
    public function block_main($context, array $blocks = array())
    {
        // line 28
        echo "  <div id=\"header\"> ";
        $this->displayBlock('header', $context, $blocks);
        // line 48
        echo "</div>
  <div id=\"site_content\">
    ";
        // line 50
        $this->displayBlock('sitecontent', $context, $blocks);
        // line 55
        echo "  </div>
  ";
    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        // line 29
        echo "    <div id=\"logo\">
      <!-- class=\"logo_colour\", allows you to change the colour of the text -->
      <h1><a href=\" ";
        // line 31
        echo $this->env->getExtension('routing')->getPath("inventario_front_homepage");
        echo " \">Distribuidora de repuestos <span class=\"logo_colour\">MAR</span></a></h1>
      <h2>Prueba de inventario.</h2>
    </div>
    <div id=\"menubar\"> ";
        // line 34
        $this->displayBlock('menubar', $context, $blocks);
        // line 47
        echo "</div>
  ";
    }

    // line 34
    public function block_menubar($context, array $blocks = array())
    {
        // line 35
        echo "      <ul id=\"menu\">
        <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
        <li class=\"selected\"><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("inventario_front_homepage");
        echo "\">Inicio</a></li>
        <li><a href=\" ";
        // line 38
        echo $this->env->getExtension('routing')->getPath("vendedores");
        echo "\">Vendedores</a></li>
        <li><a href=\" ";
        // line 39
        echo $this->env->getExtension('routing')->getPath("tipdoc");
        echo "\">Tipos documentos</a></li>
        <li><a href=\" ";
        // line 40
        echo $this->env->getExtension('routing')->getPath("clasifproductos");
        echo "\">Clases productos</a></li>
        <li><a href=\" ";
        // line 41
        echo $this->env->getExtension('routing')->getPath("listaprecios");
        echo "\">Listas de precios</a></li>
        <li><a href=\" ";
        // line 42
        echo $this->env->getExtension('routing')->getPath("terceros");
        echo " \">Terceros</a></li>
        <li><a href=\" ";
        // line 43
        echo $this->env->getExtension('routing')->getPath("productos");
        echo "\">Productos</a></li>
        <li><a href=\" ";
        // line 44
        echo $this->env->getExtension('routing')->getPath("masdocumentos");
        echo "\">Documentos</a></li>
        <li><a href=\" ";
        // line 45
        echo $this->env->getExtension('routing')->getPath("informes");
        echo "\">Informes</a></li>
      </ul>
    ";
    }

    // line 50
    public function block_sitecontent($context, array $blocks = array())
    {
        echo " 
     
        <h5>Inventarios Autopartes MAR</h5>
        <p>Herramienta para el control de inventarios</p>
    ";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  204 => 50,  197 => 45,  193 => 44,  189 => 43,  185 => 42,  181 => 41,  177 => 40,  173 => 39,  169 => 38,  165 => 37,  161 => 35,  158 => 34,  153 => 47,  151 => 34,  145 => 31,  141 => 29,  138 => 28,  133 => 55,  131 => 50,  127 => 48,  124 => 28,  121 => 27,  115 => 22,  111 => 21,  107 => 20,  103 => 19,  96 => 16,  90 => 13,  86 => 12,  81 => 11,  78 => 10,  72 => 5,  67 => 23,  65 => 16,  62 => 15,  60 => 10,  51 => 5,  41 => 56,  39 => 27,  34 => 24,  27 => 1,  395 => 325,  392 => 324,  369 => 304,  272 => 210,  262 => 203,  235 => 179,  196 => 143,  192 => 142,  178 => 131,  152 => 108,  88 => 47,  77 => 39,  57 => 22,  48 => 4,  32 => 4,  29 => 3,);
    }
}
