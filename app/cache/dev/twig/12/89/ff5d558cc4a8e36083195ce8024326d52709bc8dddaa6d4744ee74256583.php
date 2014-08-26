<?php

/* InventarioFrontBundle:Terceros:new.html.twig */
class __TwigTemplate_1289ff5d558cc4a8e36083195ce8024326d52709bc8dddaa6d4744ee74256583 extends Twig_Template
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
        echo "<div id=\"sitecontent\"> 
        <div id=\"menubar\"> 
            <ul id=\"menu\">
              <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
              <li class=\"selected\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("terceros");
        echo "\">Lista de terceros</a></li>
              <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("terceros");
        echo "\">Crear tercero</a></li>
            </ul>
        </div>    
    </div>    
            
    <h1>Terceros creation</h1>

    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("terceros");
        echo "\">
            Volver al listado
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Terceros:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 46,  97 => 37,  90 => 34,  84 => 38,  77 => 27,  65 => 24,  113 => 41,  81 => 33,  153 => 98,  146 => 96,  300 => 226,  288 => 223,  262 => 202,  172 => 118,  127 => 79,  118 => 73,  58 => 21,  23 => 1,  70 => 29,  53 => 19,  104 => 53,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 225,  285 => 222,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 99,  143 => 95,  135 => 53,  119 => 42,  102 => 40,  71 => 30,  67 => 27,  63 => 25,  59 => 20,  38 => 6,  94 => 39,  89 => 35,  85 => 34,  75 => 32,  68 => 30,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 36,  88 => 39,  78 => 34,  46 => 10,  27 => 4,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 62,  142 => 55,  138 => 54,  136 => 56,  121 => 76,  117 => 42,  105 => 39,  91 => 50,  62 => 21,  49 => 15,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 31,  69 => 25,  47 => 9,  40 => 8,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 80,  123 => 47,  120 => 59,  115 => 43,  111 => 37,  108 => 36,  101 => 38,  98 => 52,  96 => 31,  83 => 25,  74 => 31,  66 => 27,  55 => 22,  52 => 21,  50 => 18,  43 => 8,  41 => 10,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 125,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 97,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 49,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 40,  106 => 36,  103 => 32,  99 => 47,  95 => 43,  92 => 43,  86 => 28,  82 => 22,  80 => 29,  73 => 26,  64 => 10,  60 => 23,  57 => 11,  54 => 10,  51 => 17,  48 => 20,  45 => 17,  42 => 11,  39 => 11,  36 => 7,  33 => 4,  30 => 3,);
    }
}
