<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_124c0eed8b45da25f18ac2c51db64a2f2dc03dc5896ef630e2eeefabf880cea6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  104 => 49,  97 => 45,  150 => 77,  114 => 46,  90 => 32,  100 => 47,  81 => 33,  77 => 27,  124 => 49,  118 => 57,  110 => 22,  23 => 1,  58 => 21,  70 => 28,  127 => 28,  76 => 17,  65 => 24,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 64,  107 => 41,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 73,  135 => 68,  119 => 27,  102 => 17,  71 => 31,  67 => 27,  63 => 21,  59 => 13,  38 => 6,  94 => 34,  89 => 35,  85 => 34,  75 => 32,  68 => 30,  56 => 11,  87 => 41,  21 => 2,  26 => 9,  93 => 36,  88 => 31,  78 => 26,  46 => 15,  27 => 4,  44 => 11,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 36,  138 => 54,  136 => 55,  121 => 46,  117 => 19,  105 => 18,  91 => 38,  62 => 25,  49 => 10,  24 => 1,  25 => 3,  19 => 1,  79 => 36,  72 => 16,  69 => 29,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 37,  139 => 45,  131 => 54,  123 => 28,  120 => 20,  115 => 56,  111 => 53,  108 => 19,  101 => 49,  98 => 42,  96 => 44,  83 => 37,  74 => 29,  66 => 26,  55 => 21,  52 => 10,  50 => 16,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 61,  122 => 43,  116 => 41,  112 => 42,  109 => 45,  106 => 44,  103 => 48,  99 => 42,  95 => 38,  92 => 43,  86 => 39,  82 => 28,  80 => 29,  73 => 16,  64 => 13,  60 => 23,  57 => 12,  54 => 20,  51 => 17,  48 => 9,  45 => 8,  42 => 7,  39 => 11,  36 => 5,  33 => 3,  30 => 3,);
    }
}
