<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_3f75d5d13d2b08ff3bfd5983300687a26cc448c7bdcda28eb3f3cbfbaf5ad3dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 68,  100 => 41,  110 => 22,  104 => 37,  97 => 42,  416 => 346,  275 => 213,  265 => 206,  195 => 145,  155 => 111,  137 => 96,  146 => 105,  152 => 62,  178 => 131,  126 => 88,  23 => 1,  113 => 55,  84 => 29,  76 => 17,  58 => 27,  70 => 29,  53 => 10,  197 => 45,  185 => 42,  181 => 134,  165 => 37,  161 => 35,  153 => 47,  127 => 28,  124 => 86,  90 => 32,  81 => 36,  65 => 29,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 345,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 314,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 40,  169 => 38,  140 => 56,  132 => 94,  128 => 49,  107 => 44,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 182,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 50,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 59,  102 => 17,  71 => 31,  67 => 27,  63 => 26,  59 => 26,  38 => 6,  94 => 34,  89 => 32,  85 => 36,  75 => 31,  68 => 28,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 33,  88 => 31,  78 => 26,  46 => 15,  27 => 1,  44 => 11,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 34,  156 => 66,  151 => 106,  142 => 95,  138 => 28,  136 => 56,  121 => 27,  117 => 19,  105 => 18,  91 => 40,  62 => 27,  49 => 15,  24 => 1,  25 => 3,  19 => 1,  79 => 33,  72 => 29,  69 => 17,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 116,  145 => 96,  139 => 98,  131 => 93,  123 => 48,  120 => 20,  115 => 46,  111 => 45,  108 => 19,  101 => 19,  98 => 57,  96 => 16,  83 => 33,  74 => 31,  66 => 20,  55 => 25,  52 => 10,  50 => 13,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 146,  193 => 44,  189 => 43,  187 => 84,  182 => 66,  176 => 64,  173 => 39,  168 => 72,  164 => 59,  162 => 118,  154 => 58,  149 => 51,  147 => 106,  144 => 49,  141 => 29,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 47,  109 => 52,  106 => 36,  103 => 43,  99 => 47,  95 => 44,  92 => 43,  86 => 12,  82 => 28,  80 => 29,  73 => 16,  64 => 13,  60 => 23,  57 => 12,  54 => 14,  51 => 13,  48 => 9,  45 => 17,  42 => 11,  39 => 11,  36 => 4,  33 => 3,  30 => 7,);
    }
}
