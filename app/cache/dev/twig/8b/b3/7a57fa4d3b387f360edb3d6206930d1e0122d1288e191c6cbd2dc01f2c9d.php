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
        // line 42
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
        // line 31
        echo "</div>
    <div id=\"site_content\">

      <div id=\"content\">";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "</div>
    </div>
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
        // line 30
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
          <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("examples.html"), "html", null, true);
        echo "\">Crear documentos</a></li>
          <li><a href=\" ";
        // line 25
        echo $this->env->getExtension('routing')->getPath("listTerceros");
        echo " \">Administrar terceros</a></li>
          <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("another_page.html"), "html", null, true);
        echo "\">Administrar productos</a></li>
          <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("contact.html"), "html", null, true);
        echo "\">Administrar listas de precios</a></li>
          <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("contact.html"), "html", null, true);
        echo "\">Informes</a></li>
        </ul>
      ";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
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
        return array (  135 => 35,  132 => 34,  125 => 28,  121 => 27,  117 => 26,  113 => 25,  109 => 24,  105 => 23,  101 => 21,  98 => 20,  93 => 30,  91 => 20,  85 => 17,  81 => 15,  78 => 14,  72 => 40,  70 => 34,  65 => 31,  62 => 14,  59 => 13,  53 => 5,  46 => 42,  44 => 13,  37 => 9,  30 => 5,  24 => 1,);
    }
}
