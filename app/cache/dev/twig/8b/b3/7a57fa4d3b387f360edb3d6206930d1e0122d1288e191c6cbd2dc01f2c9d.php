<?php

/* InventarioFrontBundle:Default:index.html.twig */
class __TwigTemplate_8bb37a57fa4d3b387f360edb3d6206930d1e0122d1288e191c6cbd2dc01f2c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>

<head>
  <title>Prueba Inventario</title>
  <meta name=\"description\" content=\"Esta es una prueba de desarrollo en PHP, de uso academico\" />
  <meta name=\"keywords\" content=\"prueba, desarrollo\" />
  <meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1252\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/inventario/style/style.css"), "html", null, true);
        echo "\" />
</head>

<body>
  <div id=\"main\">
    <div id=\"header\">
      <div id=\"logo\">
        <!-- class=\"logo_colour\", allows you to change the colour of the text -->
        <h1><a href=\"index.html\">Distribuidora de repuestos <span class=\"logo_colour\">MAR</span></a></h1>
        <h2>Prueba de inventario.</h2>
      </div>
      <div id=\"menubar\">
        <ul id=\"menu\">
          <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
          <li class=\"selected\"><a href=\"inventario_front_homepage\">Inicio</a></li>
          <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("examples.html"), "html", null, true);
        echo "\">Crear documentos</a></li>
          <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("page.html"), "html", null, true);
        echo "\">Administrar terceros</a></li>
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
      </div>
    </div>
    <div id=\"site_content\">

      <div id=\"content\">
        <h1>Inventarios Autopartes MAR</h1>
        <p>This standards compliant, simple, fixed width website template is released as an 'open source' design (under a <a href=\"http://creativecommons.org/licenses/by/3.0\">Creative Commons Attribution 3.0 Licence</a>), which means that you are free to download and use it for anything you want (including modifying and amending it). All I ask is that you leave the 'design from HTML5webtemplates.co.uk' link in the footer of the template, but other than that...</p>
        <p>This template is written entirely in <strong>HTML5</strong> and <strong>CSS</strong>, and can be validated using the links in the footer.</p>
        <p>You can view more free HTML5 web templates <a href=\"http://www.html5webtemplates.co.uk\">here</a>.</p>
        <p>This template is a fully functional 5 page website, with an <a href=\"examples.html\">examples</a> page that gives examples of all the styles available with this design.</p>
      </div>
    </div>
  </div>
</body>
</html>
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
        return array (  63 => 28,  59 => 27,  55 => 26,  51 => 25,  47 => 24,  29 => 9,  19 => 1,);
    }
}
