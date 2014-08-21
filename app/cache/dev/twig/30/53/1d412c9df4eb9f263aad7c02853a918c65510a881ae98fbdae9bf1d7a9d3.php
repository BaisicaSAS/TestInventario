<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_30531d412c9df4eb9f263aad7c02853a918c65510a881ae98fbdae9bf1d7a9d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
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
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  124 => 46,  97 => 45,  90 => 32,  77 => 27,  81 => 33,  286 => 212,  280 => 211,  274 => 209,  271 => 208,  249 => 189,  118 => 57,  155 => 98,  23 => 1,  53 => 11,  104 => 49,  206 => 50,  192 => 43,  188 => 42,  184 => 41,  180 => 40,  172 => 38,  160 => 34,  152 => 46,  150 => 77,  137 => 27,  129 => 78,  113 => 41,  84 => 29,  76 => 17,  70 => 29,  65 => 24,  58 => 21,  34 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 123,  169 => 60,  140 => 28,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 73,  135 => 68,  119 => 26,  102 => 17,  71 => 30,  67 => 27,  63 => 27,  59 => 13,  38 => 6,  94 => 34,  89 => 35,  85 => 34,  75 => 32,  68 => 30,  56 => 11,  87 => 41,  21 => 2,  26 => 11,  93 => 36,  88 => 31,  78 => 26,  46 => 8,  27 => 1,  44 => 11,  31 => 3,  28 => 3,  201 => 92,  196 => 44,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 62,  142 => 55,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 50,  62 => 25,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 36,  72 => 31,  69 => 29,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 33,  145 => 96,  139 => 94,  131 => 52,  123 => 47,  120 => 20,  115 => 43,  111 => 53,  108 => 19,  101 => 38,  98 => 42,  96 => 31,  83 => 37,  74 => 31,  66 => 27,  55 => 21,  52 => 10,  50 => 18,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 49,  199 => 67,  193 => 73,  189 => 71,  187 => 130,  182 => 66,  176 => 39,  173 => 65,  168 => 37,  164 => 36,  162 => 57,  154 => 58,  149 => 97,  147 => 58,  144 => 30,  141 => 48,  133 => 55,  130 => 49,  125 => 61,  122 => 27,  116 => 41,  112 => 42,  109 => 45,  106 => 36,  103 => 32,  99 => 47,  95 => 43,  92 => 43,  86 => 36,  82 => 28,  80 => 33,  73 => 16,  64 => 13,  60 => 26,  57 => 12,  54 => 10,  51 => 17,  48 => 9,  45 => 8,  42 => 7,  39 => 11,  36 => 5,  33 => 3,  30 => 3,);
    }
}
