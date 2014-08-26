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

<div id=\"main\">";
        // line 26
        $this->displayBlock('main', $context, $blocks);
        // line 54
        echo "</div>
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

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "  <div id=\"header\"> ";
        $this->displayBlock('header', $context, $blocks);
        // line 47
        echo "</div>
  <div id=\"site_content\"> 
      <div id=\"content\">";
        // line 49
        $this->displayBlock('sitecontent', $context, $blocks);
        // line 52
        echo "</div>
  </div>
  ";
    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        // line 28
        echo "    <div id=\"logo\">
      <!-- class=\"logo_colour\", allows you to change the colour of the text -->
      <h1><a href=\" ";
        // line 30
        echo $this->env->getExtension('routing')->getPath("inventario_front_homepage");
        echo " \">Distribuidora de repuestos <span class=\"logo_colour\">MAR</span></a></h1>
      <h2>Prueba de inventario.</h2>
    </div>
    <div id=\"menubar\"> ";
        // line 33
        $this->displayBlock('menubar', $context, $blocks);
        // line 46
        echo "</div>
  ";
    }

    // line 33
    public function block_menubar($context, array $blocks = array())
    {
        // line 34
        echo "      <ul id=\"menu\">
        <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
        <li class=\"selected\"><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("inventario_front_homepage");
        echo "\">Inicio</a></li>
        <li><a href=\" ";
        // line 37
        echo $this->env->getExtension('routing')->getPath("vendedores");
        echo "\">Vendedores</a></li>
        <li><a href=\" ";
        // line 38
        echo $this->env->getExtension('routing')->getPath("tipdoc");
        echo "\">Tipos documentos</a></li>
        <li><a href=\" ";
        // line 39
        echo $this->env->getExtension('routing')->getPath("clasifproductos");
        echo "\">Clases productos</a></li>
        <li><a href=\" ";
        // line 40
        echo $this->env->getExtension('routing')->getPath("listaprecios");
        echo "\">Listas de precios</a></li>
        <li><a href=\" ";
        // line 41
        echo $this->env->getExtension('routing')->getPath("terceros");
        echo " \">Terceros</a></li>
        <li><a href=\" ";
        // line 42
        echo $this->env->getExtension('routing')->getPath("productos");
        echo "\">Productos</a></li>
        <li><a href=\" ";
        // line 43
        echo $this->env->getExtension('routing')->getPath("masdocumentos");
        echo "\">Documentos</a></li>
        <li><a href=\" ";
        // line 44
        echo $this->env->getExtension('routing')->getPath("informes");
        echo "\">Informes</a></li>
      </ul>
    ";
    }

    // line 49
    public function block_sitecontent($context, array $blocks = array())
    {
        // line 50
        echo "        <h5>Inventarios Autopartes MAR</h5>
        <p>Herramienta para el control de inventarios</p>
      ";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  206 => 50,  203 => 49,  196 => 44,  192 => 43,  188 => 42,  184 => 41,  180 => 40,  176 => 39,  172 => 38,  168 => 37,  164 => 36,  160 => 34,  157 => 33,  152 => 46,  150 => 33,  144 => 30,  140 => 28,  137 => 27,  131 => 52,  129 => 49,  125 => 47,  122 => 27,  119 => 26,  113 => 22,  109 => 21,  105 => 20,  101 => 19,  94 => 16,  88 => 13,  84 => 12,  79 => 11,  76 => 10,  70 => 5,  65 => 23,  63 => 16,  60 => 15,  58 => 10,  49 => 5,  46 => 4,  40 => 54,  38 => 26,  34 => 24,  32 => 4,  27 => 1,);
    }
}
