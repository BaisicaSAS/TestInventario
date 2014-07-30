<?php

/* InventarioFrontBundle:Default:index.html.twig */
class __TwigTemplate_8bb37a57fa4d3b387f360edb3d6206930d1e0122d1288e191c6cbd2dc01f2c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'menubar' => array($this, 'block_menubar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>

<head>
  <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta name=\"description\" content=\"Esta es una prueba de desarrollo en PHP, de uso academico\" />
  <meta name=\"keywords\" content=\"prueba, desarrollo\" />
  <meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1252\" />
  
";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo " 
 
";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo " 
</head>

<body>
  <div id=\"main\">";
        // line 23
        $this->displayBlock('main', $context, $blocks);
        // line 54
        echo "</div>
</body>
</html>
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
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jquery/css/ui.jqgrid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  type=\"text/css\" media=\"all\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/inventario/style/style.css"), "html", null, true);
        echo "\" />
";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        echo "   
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jquery/js/i18n/grid.locale-es.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jquery/js/jquery.jqGrid.min.js"), "html", null, true);
        echo "\" ></script>
";
    }

    // line 23
    public function block_main($context, array $blocks = array())
    {
        // line 24
        echo "    <div id=\"header\"> ";
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "</div>
    <div id=\"site_content\">
      ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "    </div>
  ";
    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        // line 25
        echo "      <div id=\"logo\">
        <!-- class=\"logo_colour\", allows you to change the colour of the text -->
        <h1><a href=\" ";
        // line 27
        echo $this->env->getExtension('routing')->getPath("inventario_front_homepage");
        echo " \">Distribuidora de repuestos <span class=\"logo_colour\">MAR</span></a></h1>
        <h2>Prueba de inventario.</h2>
      </div>
      <div id=\"menubar\"> ";
        // line 30
        $this->displayBlock('menubar', $context, $blocks);
        // line 43
        echo "</div>
    ";
    }

    // line 30
    public function block_menubar($context, array $blocks = array())
    {
        // line 31
        echo "        <ul id=\"menu\">
          <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
          <li class=\"selected\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("inventario_front_homepage");
        echo "\">Inicio</a></li>
          <li><a href=\" ";
        // line 34
        echo $this->env->getExtension('routing')->getPath("vendedores");
        echo "\">Vendedores</a></li>
          <li><a href=\" ";
        // line 35
        echo $this->env->getExtension('routing')->getPath("tipdoc");
        echo "\">Tipos documentos</a></li>
          <li><a href=\" ";
        // line 36
        echo $this->env->getExtension('routing')->getPath("clasifproductos");
        echo "\">Clases productos</a></li>
          <li><a href=\" ";
        // line 37
        echo $this->env->getExtension('routing')->getPath("detlistaprecios");
        echo "\">Listas de precios</a></li>
          <li><a href=\" ";
        // line 38
        echo $this->env->getExtension('routing')->getPath("terceros");
        echo " \">Terceros</a></li>
          <li><a href=\" ";
        // line 39
        echo $this->env->getExtension('routing')->getPath("productos");
        echo "\">Productos</a></li>
          <li><a href=\" ";
        // line 40
        echo $this->env->getExtension('routing')->getPath("masdocumentos");
        echo "\">Documentos</a></li>
          <li><a href=\" ";
        // line 41
        echo $this->env->getExtension('routing')->getPath("inventario_front_homepage");
        echo "\">Informes</a></li>
        </ul>
      ";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "        <h1>Inventarios Autopartes MAR</h1>
        <p>This standards compliant, simple, fixed width website template is released as an 'open source' design (under a <a href=\"http://creativecommons.org/licenses/by/3.0\">Creative Commons Attribution 3.0 Licence</a>), which means that you are free to download and use it for anything you want (including modifying and amending it). All I ask is that you leave the 'design from HTML5webtemplates.co.uk' link in the footer of the template, but other than that...</p>
        <p>This template is written entirely in <strong>HTML5</strong> and <strong>CSS</strong>, and can be validated using the links in the footer.</p>
        <p>You can view more free HTML5 web templates <a href=\"http://www.html5webtemplates.co.uk\">here</a>.</p>
        <p>This template is a fully functional 5 page website, with an <a href=\"examples.html\">examples</a> page that gives examples of all the styles available with this design.</p>
      ";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  184 => 47,  181 => 46,  174 => 41,  170 => 40,  166 => 39,  162 => 38,  158 => 37,  154 => 36,  150 => 35,  146 => 34,  142 => 33,  138 => 31,  135 => 30,  130 => 43,  128 => 30,  122 => 27,  118 => 25,  115 => 24,  110 => 53,  108 => 46,  104 => 44,  101 => 24,  98 => 23,  92 => 18,  88 => 17,  83 => 16,  77 => 12,  72 => 11,  69 => 10,  63 => 5,  56 => 54,  54 => 23,  48 => 19,  46 => 16,  42 => 14,  40 => 10,  32 => 5,  26 => 1,);
    }
}
