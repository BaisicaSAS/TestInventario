<?php

/* InventarioFrontBundle:Listaprecios:edit.html.twig */
class __TwigTemplate_4105f214591a99def14329d1cf863a28ad4998b48fd7caf6aaea4d9b00bf33f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'sitecontent' => array($this, 'block_sitecontent'),
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
    public function block_sitecontent($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Listaprecios edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("listaprecios");
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Listaprecios:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,  53 => 20,  104 => 53,  194 => 44,  190 => 43,  186 => 42,  178 => 40,  174 => 39,  170 => 38,  155 => 33,  150 => 46,  148 => 33,  113 => 22,  84 => 12,  76 => 10,  70 => 29,  65 => 23,  58 => 20,  34 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 48,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 49,  179 => 69,  159 => 61,  143 => 56,  135 => 27,  119 => 26,  102 => 32,  71 => 32,  67 => 22,  63 => 27,  59 => 20,  38 => 26,  94 => 39,  89 => 20,  85 => 38,  75 => 28,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 28,  88 => 49,  78 => 36,  46 => 16,  27 => 1,  44 => 11,  31 => 4,  28 => 3,  201 => 48,  196 => 90,  183 => 82,  171 => 61,  166 => 37,  163 => 62,  158 => 34,  156 => 66,  151 => 63,  142 => 30,  138 => 28,  136 => 56,  121 => 46,  117 => 44,  105 => 20,  91 => 50,  62 => 21,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 11,  72 => 16,  69 => 25,  47 => 12,  40 => 55,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 19,  98 => 52,  96 => 31,  83 => 25,  74 => 26,  66 => 15,  55 => 15,  52 => 19,  50 => 18,  43 => 11,  41 => 8,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 41,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 54,  125 => 47,  122 => 27,  116 => 41,  112 => 42,  109 => 21,  106 => 36,  103 => 32,  99 => 40,  95 => 28,  92 => 35,  86 => 28,  82 => 22,  80 => 29,  73 => 19,  64 => 10,  60 => 22,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 10,  39 => 12,  36 => 7,  33 => 6,  30 => 3,);
    }
}