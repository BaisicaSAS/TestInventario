<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_a23fca699ca6c67bbc9f446a7cd89bff0d2c00d11fbd5ca1e9284884ecb0ae2b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 49,  97 => 45,  150 => 77,  114 => 46,  90 => 41,  118 => 50,  100 => 48,  81 => 33,  77 => 33,  110 => 45,  70 => 28,  23 => 1,  58 => 21,  127 => 29,  76 => 33,  65 => 25,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 24,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 73,  135 => 68,  119 => 27,  102 => 43,  71 => 32,  67 => 22,  63 => 21,  59 => 22,  38 => 6,  94 => 45,  89 => 36,  85 => 35,  75 => 17,  68 => 31,  56 => 25,  87 => 41,  21 => 2,  26 => 6,  93 => 37,  88 => 6,  78 => 31,  46 => 14,  27 => 4,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 36,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 38,  62 => 25,  49 => 15,  24 => 1,  25 => 3,  19 => 1,  79 => 36,  72 => 16,  69 => 29,  47 => 12,  40 => 8,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 37,  139 => 45,  131 => 54,  123 => 28,  120 => 40,  115 => 57,  111 => 53,  108 => 53,  101 => 32,  98 => 42,  96 => 20,  83 => 37,  74 => 29,  66 => 26,  55 => 21,  52 => 10,  50 => 18,  43 => 7,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 55,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 44,  103 => 44,  99 => 42,  95 => 28,  92 => 35,  86 => 39,  82 => 38,  80 => 29,  73 => 36,  64 => 27,  60 => 22,  57 => 12,  54 => 10,  51 => 17,  48 => 9,  45 => 17,  42 => 11,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
