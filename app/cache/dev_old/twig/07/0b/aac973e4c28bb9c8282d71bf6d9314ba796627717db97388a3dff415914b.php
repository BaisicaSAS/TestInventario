<?php

/* InventarioFrontBundle:Terceros:edit.html.twig */
class __TwigTemplate_070baac973e4c28bb9c8282d71bf6d9314ba796627717db97388a3dff415914b extends Twig_Template
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
        echo "<h1>Modificar Terceros</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("terceros");
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
        return "InventarioFrontBundle:Terceros:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  77 => 27,  167 => 113,  81 => 35,  23 => 1,  53 => 19,  104 => 53,  194 => 44,  190 => 43,  186 => 42,  178 => 40,  174 => 39,  170 => 114,  155 => 98,  150 => 46,  148 => 33,  113 => 55,  84 => 38,  76 => 10,  70 => 29,  65 => 24,  58 => 20,  34 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 116,  169 => 60,  140 => 55,  132 => 51,  128 => 48,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 49,  179 => 69,  159 => 61,  143 => 56,  135 => 27,  119 => 26,  102 => 40,  71 => 30,  67 => 27,  63 => 25,  59 => 20,  38 => 26,  94 => 39,  89 => 20,  85 => 38,  75 => 28,  68 => 14,  56 => 17,  87 => 39,  21 => 2,  26 => 6,  93 => 28,  88 => 39,  78 => 34,  46 => 15,  27 => 1,  44 => 11,  31 => 5,  28 => 3,  201 => 48,  196 => 90,  183 => 117,  171 => 61,  166 => 37,  163 => 62,  158 => 34,  156 => 66,  151 => 63,  142 => 95,  138 => 28,  136 => 56,  121 => 46,  117 => 44,  105 => 50,  91 => 50,  62 => 21,  49 => 15,  24 => 4,  25 => 3,  19 => 1,  79 => 11,  72 => 16,  69 => 25,  47 => 12,  40 => 55,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 96,  139 => 94,  131 => 52,  123 => 47,  120 => 59,  115 => 43,  111 => 37,  108 => 36,  101 => 19,  98 => 52,  96 => 31,  83 => 25,  74 => 31,  66 => 27,  55 => 22,  52 => 21,  50 => 18,  43 => 11,  41 => 8,  35 => 7,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 41,  176 => 64,  173 => 115,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 97,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 54,  125 => 74,  122 => 27,  116 => 41,  112 => 42,  109 => 45,  106 => 36,  103 => 32,  99 => 47,  95 => 43,  92 => 43,  86 => 28,  82 => 22,  80 => 29,  73 => 26,  64 => 10,  60 => 23,  57 => 11,  54 => 10,  51 => 15,  48 => 20,  45 => 17,  42 => 11,  39 => 11,  36 => 7,  33 => 4,  30 => 3,);
    }
}