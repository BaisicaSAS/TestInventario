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
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/inventario/style/style.css"), "html", null, true);
        echo "\" />
</head>

<body>
  <div id=\"main\">";
        // line 13
        $this->displayBlock('main', $context, $blocks);
        // line 44
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

    // line 13
    public function block_main($context, array $blocks = array())
    {
        // line 14
        echo "    <div id=\"header\"> ";
        $this->displayBlock('header', $context, $blocks);
        // line 34
        echo "</div>
    <div id=\"site_content\">
      ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "    </div>
  ";
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "      <div id=\"logo\">
        <!-- class=\"logo_colour\", allows you to change the colour of the text -->
        <h1><a href=\" ";
        // line 17
        echo $this->env->getExtension('routing')->getPath("inventario_front_homepage");
        echo " \">Distribuidora de repuestos <span class=\"logo_colour\">MAR</span></a></h1>
        <h2>Prueba de inventario.</h2>
      </div>
      <div id=\"menubar\"> ";
        // line 20
        $this->displayBlock('menubar', $context, $blocks);
        // line 33
        echo "</div>
    ";
    }

    // line 20
    public function block_menubar($context, array $blocks = array())
    {
        // line 21
        echo "        <ul id=\"menu\">
          <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
          <li class=\"selected\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("inventario_front_homepage");
        echo "\">Inicio</a></li>
          <li><a href=\" ";
        // line 24
        echo $this->env->getExtension('routing')->getPath("vendedores");
        echo "\">Vendedores</a></li>
          <li><a href=\" ";
        // line 25
        echo $this->env->getExtension('routing')->getPath("tipdoc");
        echo "\">Tipos documentos</a></li>
          <li><a href=\" ";
        // line 26
        echo $this->env->getExtension('routing')->getPath("clasifproductos");
        echo "\">Clases productos</a></li>
          <li><a href=\" ";
        // line 27
        echo $this->env->getExtension('routing')->getPath("detlistaprecios");
        echo "\">Listas de precios</a></li>
          <li><a href=\" ";
        // line 28
        echo $this->env->getExtension('routing')->getPath("terceros");
        echo " \">Terceros</a></li>
          <li><a href=\" ";
        // line 29
        echo $this->env->getExtension('routing')->getPath("productos");
        echo "\">Productos</a></li>
          <li><a href=\" ";
        // line 30
        echo $this->env->getExtension('routing')->getPath("detdocumentos");
        echo "\">Documentos</a></li>
          <li><a href=\" ";
        // line 31
        echo $this->env->getExtension('routing')->getPath("inventario_front_homepage");
        echo "\">Informes</a></li>
        </ul>
      ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 37,  142 => 36,  135 => 31,  131 => 30,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  111 => 25,  107 => 24,  103 => 23,  99 => 21,  96 => 20,  91 => 33,  89 => 20,  83 => 17,  79 => 15,  76 => 14,  71 => 43,  69 => 36,  65 => 34,  62 => 14,  59 => 13,  53 => 5,  46 => 44,  44 => 13,  37 => 9,  30 => 5,  24 => 1,);
    }
}
