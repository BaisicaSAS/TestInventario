<?php

/* InventarioFrontBundle:Productos:show.html.twig */
class __TwigTemplate_59fef0c1079b316fd4e24581aa8d261b00c02aaef261ec50e3bbb1e8aead87ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InventarioFrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div id=\"sitecontent\"> 
        <div id=\"menubar\"> 
            <ul id=\"menu\">
              <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
              <li class=\"selected\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("productos");
        echo "\">Lista de terceros</a></li>
              <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("productos");
        echo "\">Crear tercero</a></li>
            </ul>
        </div>    
    </div>  
    <h1>Productos</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txrefinterna</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txrefinterna"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txrefexterna</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txrefexterna"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txnomproducto</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txnomproducto"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txdescripcion</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txdescripcion"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Inactivo</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "inactivo"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("productos");
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>
        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Modificar
        </a>
    </li>
    <li>";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Productos:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 40,  118 => 49,  100 => 47,  81 => 33,  77 => 32,  110 => 49,  70 => 29,  23 => 1,  58 => 20,  127 => 29,  76 => 32,  65 => 28,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 24,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 31,  119 => 27,  102 => 32,  71 => 31,  67 => 22,  63 => 21,  59 => 21,  38 => 9,  94 => 45,  89 => 35,  85 => 34,  75 => 17,  68 => 30,  56 => 25,  87 => 41,  21 => 2,  26 => 6,  93 => 36,  88 => 6,  78 => 31,  46 => 14,  27 => 4,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 36,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 38,  62 => 24,  49 => 14,  24 => 1,  25 => 3,  19 => 1,  79 => 36,  72 => 16,  69 => 28,  47 => 12,  40 => 8,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 37,  139 => 45,  131 => 30,  123 => 28,  120 => 40,  115 => 56,  111 => 25,  108 => 52,  101 => 32,  98 => 42,  96 => 20,  83 => 36,  74 => 30,  66 => 25,  55 => 20,  52 => 17,  50 => 18,  43 => 8,  41 => 10,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 54,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 43,  103 => 44,  99 => 40,  95 => 28,  92 => 35,  86 => 36,  82 => 22,  80 => 29,  73 => 29,  64 => 29,  60 => 22,  57 => 11,  54 => 10,  51 => 16,  48 => 13,  45 => 17,  42 => 10,  39 => 10,  36 => 8,  33 => 6,  30 => 5,);
    }
}
