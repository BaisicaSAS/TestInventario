<?php

/* InventarioFrontBundle:Detlistaprecios:edit.html.twig */
class __TwigTemplate_49998ecd8f378c998cc9563d4490240aaf1a06667484119b756cb400c5626b77 extends Twig_Template
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
        echo "<h1>Detlistaprecios edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("detlistaprecios");
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
        return "InventarioFrontBundle:Detlistaprecios:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,  113 => 22,  84 => 12,  76 => 10,  58 => 10,  70 => 29,  53 => 18,  197 => 45,  185 => 42,  181 => 41,  165 => 37,  161 => 35,  153 => 47,  127 => 48,  124 => 28,  90 => 51,  81 => 11,  65 => 23,  34 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 40,  169 => 38,  140 => 55,  132 => 51,  128 => 49,  107 => 20,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 50,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 28,  102 => 32,  71 => 19,  67 => 22,  63 => 21,  59 => 20,  38 => 6,  94 => 16,  89 => 20,  85 => 38,  75 => 17,  68 => 14,  56 => 9,  87 => 50,  21 => 2,  26 => 6,  93 => 28,  88 => 13,  78 => 34,  46 => 14,  27 => 1,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 34,  156 => 66,  151 => 34,  142 => 59,  138 => 28,  136 => 56,  121 => 27,  117 => 44,  105 => 20,  91 => 27,  62 => 15,  49 => 15,  24 => 1,  25 => 3,  19 => 1,  79 => 11,  72 => 5,  69 => 11,  47 => 12,  40 => 8,  37 => 28,  22 => 2,  246 => 90,  157 => 56,  145 => 31,  139 => 45,  131 => 50,  123 => 47,  120 => 40,  115 => 22,  111 => 21,  108 => 36,  101 => 19,  98 => 31,  96 => 16,  83 => 25,  74 => 26,  66 => 15,  55 => 15,  52 => 21,  50 => 18,  43 => 11,  41 => 56,  35 => 7,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 44,  189 => 43,  187 => 84,  182 => 66,  176 => 64,  173 => 39,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 29,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 21,  106 => 36,  103 => 19,  99 => 40,  95 => 28,  92 => 35,  86 => 12,  82 => 22,  80 => 29,  73 => 19,  64 => 10,  60 => 22,  57 => 11,  54 => 10,  51 => 5,  48 => 4,  45 => 17,  42 => 11,  39 => 10,  36 => 7,  33 => 6,  30 => 7,);
    }
}
