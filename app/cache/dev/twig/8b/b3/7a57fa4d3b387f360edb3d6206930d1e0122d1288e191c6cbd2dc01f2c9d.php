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
        return array (  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 28,  59 => 27,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 24,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 26,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 25,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
