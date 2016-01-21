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
        return array (  197 => 45,  185 => 42,  181 => 41,  165 => 37,  161 => 35,  153 => 47,  127 => 48,  124 => 28,  90 => 13,  81 => 11,  65 => 16,  34 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 40,  169 => 38,  140 => 55,  132 => 51,  128 => 49,  107 => 20,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 50,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 23,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 10,  46 => 7,  27 => 1,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 34,  156 => 66,  151 => 34,  142 => 59,  138 => 28,  136 => 56,  121 => 27,  117 => 44,  105 => 40,  91 => 27,  62 => 15,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 5,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 31,  139 => 45,  131 => 50,  123 => 47,  120 => 40,  115 => 22,  111 => 21,  108 => 36,  101 => 32,  98 => 31,  96 => 16,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 15,  43 => 11,  41 => 56,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 44,  189 => 43,  187 => 84,  182 => 66,  176 => 64,  173 => 39,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 29,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 19,  99 => 31,  95 => 28,  92 => 21,  86 => 12,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 10,  57 => 11,  54 => 10,  51 => 5,  48 => 4,  45 => 17,  42 => 7,  39 => 27,  36 => 7,  33 => 4,  30 => 7,);
    }
}
