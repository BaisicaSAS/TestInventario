<?php

/* InventarioFrontBundle:Vendedores:edit.html.twig */
class __TwigTemplate_68b117709ae9b04b92af68e13f48a741ebb253d3950897eb7c15d0ee92261491 extends Twig_Template
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
        // line 5
        echo "<h1>Modificar Vendedores</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("vendedores");
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Vendedores:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 38,  104 => 49,  97 => 45,  150 => 77,  114 => 46,  90 => 34,  100 => 47,  81 => 33,  77 => 27,  124 => 49,  118 => 57,  110 => 45,  23 => 1,  58 => 21,  70 => 33,  127 => 29,  76 => 33,  65 => 24,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 64,  107 => 41,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 73,  135 => 68,  119 => 27,  102 => 40,  71 => 31,  67 => 27,  63 => 21,  59 => 22,  38 => 9,  94 => 41,  89 => 35,  85 => 34,  75 => 32,  68 => 30,  56 => 9,  87 => 41,  21 => 2,  26 => 6,  93 => 36,  88 => 6,  78 => 31,  46 => 15,  27 => 4,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 36,  138 => 54,  136 => 55,  121 => 46,  117 => 44,  105 => 40,  91 => 38,  62 => 25,  49 => 15,  24 => 1,  25 => 3,  19 => 1,  79 => 35,  72 => 16,  69 => 25,  47 => 12,  40 => 9,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 37,  139 => 45,  131 => 54,  123 => 28,  120 => 59,  115 => 56,  111 => 53,  108 => 52,  101 => 49,  98 => 42,  96 => 44,  83 => 37,  74 => 31,  66 => 26,  55 => 22,  52 => 21,  50 => 16,  43 => 8,  41 => 10,  35 => 7,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 61,  122 => 43,  116 => 41,  112 => 42,  109 => 45,  106 => 44,  103 => 48,  99 => 47,  95 => 38,  92 => 43,  86 => 39,  82 => 38,  80 => 29,  73 => 26,  64 => 29,  60 => 23,  57 => 20,  54 => 20,  51 => 17,  48 => 20,  45 => 17,  42 => 11,  39 => 11,  36 => 8,  33 => 6,  30 => 5,);
    }
}
