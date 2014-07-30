<?php

/* InventarioFrontBundle:Detdocumentos:new.html.twig */
class __TwigTemplate_8610ac4f11239d63a6af7a30b1e5201366f48cd0a4987c1e36aef66a1ead89a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Detdocumentos creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("detdocumentos");
        echo "\">
            Volver al listado
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Detdocumentos:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,  58 => 21,  70 => 29,  127 => 29,  76 => 33,  65 => 34,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 24,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 31,  119 => 27,  102 => 32,  71 => 43,  67 => 22,  63 => 21,  59 => 20,  38 => 9,  94 => 45,  89 => 20,  85 => 35,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 31,  46 => 17,  27 => 4,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 36,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 38,  62 => 25,  49 => 14,  24 => 1,  25 => 3,  19 => 1,  79 => 15,  72 => 16,  69 => 11,  47 => 12,  40 => 8,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 37,  139 => 45,  131 => 30,  123 => 28,  120 => 40,  115 => 26,  111 => 25,  108 => 36,  101 => 49,  98 => 31,  96 => 20,  83 => 17,  74 => 26,  66 => 25,  55 => 21,  52 => 17,  50 => 18,  43 => 8,  41 => 10,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 44,  99 => 40,  95 => 28,  92 => 35,  86 => 40,  82 => 22,  80 => 29,  73 => 19,  64 => 10,  60 => 6,  57 => 26,  54 => 10,  51 => 17,  48 => 13,  45 => 17,  42 => 10,  39 => 9,  36 => 8,  33 => 6,  30 => 5,);
    }
}
