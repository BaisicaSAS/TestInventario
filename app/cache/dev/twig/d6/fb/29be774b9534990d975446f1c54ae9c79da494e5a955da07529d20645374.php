<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_d6fb29be774b9534990d975446f1c54ae9c79da494e5a955da07529d20645374 extends Twig_Template
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
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  124 => 46,  97 => 45,  90 => 32,  77 => 27,  81 => 33,  248 => 178,  244 => 177,  184 => 127,  129 => 78,  118 => 57,  23 => 1,  53 => 11,  104 => 49,  194 => 44,  190 => 43,  186 => 42,  178 => 40,  174 => 120,  170 => 38,  155 => 98,  150 => 77,  148 => 33,  113 => 41,  84 => 29,  76 => 17,  70 => 29,  65 => 24,  58 => 21,  34 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 176,  229 => 73,  220 => 160,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 48,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 179,  243 => 88,  240 => 86,  238 => 175,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 49,  179 => 69,  159 => 61,  143 => 73,  135 => 68,  119 => 26,  102 => 17,  71 => 30,  67 => 27,  63 => 27,  59 => 13,  38 => 6,  94 => 34,  89 => 35,  85 => 34,  75 => 32,  68 => 30,  56 => 11,  87 => 41,  21 => 2,  26 => 9,  93 => 36,  88 => 31,  78 => 26,  46 => 8,  27 => 1,  44 => 11,  31 => 3,  28 => 3,  201 => 48,  196 => 90,  183 => 82,  171 => 61,  166 => 37,  163 => 62,  158 => 34,  156 => 66,  151 => 62,  142 => 55,  138 => 28,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 50,  62 => 25,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 36,  72 => 31,  69 => 29,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 96,  139 => 94,  131 => 52,  123 => 47,  120 => 20,  115 => 43,  111 => 53,  108 => 19,  101 => 38,  98 => 42,  96 => 31,  83 => 37,  74 => 31,  66 => 27,  55 => 21,  52 => 10,  50 => 18,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 41,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 97,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 49,  125 => 61,  122 => 27,  116 => 41,  112 => 42,  109 => 45,  106 => 36,  103 => 32,  99 => 47,  95 => 43,  92 => 43,  86 => 36,  82 => 28,  80 => 33,  73 => 16,  64 => 13,  60 => 26,  57 => 12,  54 => 10,  51 => 17,  48 => 9,  45 => 8,  42 => 7,  39 => 11,  36 => 5,  33 => 3,  30 => 3,);
    }
}
