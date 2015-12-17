<?php

/* InventarioFrontBundle:Vendedores:new.html.twig */
class __TwigTemplate_1d2be1db210b04d7a3027ccc0df4949b260505d5ccbab44102ead42182fa6cd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InventarioFrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'sitecontent' => array($this, 'block_sitecontent'),
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
    public function block_sitecontent($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Nuevo vendedor</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
    </ul>
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Vendedores:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 42,  134 => 68,  100 => 41,  395 => 325,  392 => 324,  369 => 304,  272 => 210,  262 => 203,  192 => 142,  77 => 29,  137 => 96,  146 => 105,  152 => 62,  178 => 131,  126 => 88,  23 => 1,  113 => 55,  84 => 38,  76 => 10,  58 => 27,  70 => 29,  53 => 19,  197 => 45,  185 => 42,  181 => 132,  165 => 37,  161 => 35,  153 => 47,  127 => 64,  124 => 86,  90 => 51,  81 => 36,  65 => 29,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 40,  169 => 38,  140 => 56,  132 => 94,  128 => 49,  107 => 44,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 179,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 50,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 59,  102 => 48,  71 => 30,  67 => 27,  63 => 25,  59 => 26,  38 => 6,  94 => 38,  89 => 32,  85 => 36,  75 => 31,  68 => 28,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 33,  88 => 40,  78 => 37,  46 => 15,  27 => 1,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 143,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 34,  156 => 66,  151 => 106,  142 => 95,  138 => 28,  136 => 56,  121 => 27,  117 => 44,  105 => 50,  91 => 40,  62 => 27,  49 => 15,  24 => 1,  25 => 3,  19 => 1,  79 => 33,  72 => 29,  69 => 16,  47 => 12,  40 => 9,  37 => 5,  22 => 2,  246 => 90,  157 => 116,  145 => 96,  139 => 98,  131 => 93,  123 => 48,  120 => 59,  115 => 46,  111 => 45,  108 => 36,  101 => 19,  98 => 35,  96 => 16,  83 => 33,  74 => 31,  66 => 15,  55 => 25,  52 => 19,  50 => 13,  43 => 8,  41 => 10,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 44,  189 => 43,  187 => 84,  182 => 66,  176 => 64,  173 => 39,  168 => 72,  164 => 59,  162 => 118,  154 => 58,  149 => 51,  147 => 106,  144 => 49,  141 => 29,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 47,  109 => 52,  106 => 37,  103 => 43,  99 => 47,  95 => 44,  92 => 43,  86 => 12,  82 => 38,  80 => 29,  73 => 38,  64 => 10,  60 => 23,  57 => 22,  54 => 14,  51 => 13,  48 => 14,  45 => 17,  42 => 11,  39 => 11,  36 => 9,  33 => 6,  30 => 7,);
    }
}
