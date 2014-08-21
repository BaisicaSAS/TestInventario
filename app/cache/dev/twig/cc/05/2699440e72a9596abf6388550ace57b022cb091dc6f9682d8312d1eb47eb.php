<?php

/* InventarioFrontBundle:Clasifproductos:show.html.twig */
class __TwigTemplate_cc052699440e72a9596abf6388550ace57b022cb091dc6f9682d8312d1eb47eb extends Twig_Template
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
        echo "<h1>Clasifproductos</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txdescripcion</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txdescripcion"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Intipo</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "intipo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Clase principal</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "inpadre"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("clasifproductos");
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clasifproductos_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Modificar
        </a>
    </li>
    <li>";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Clasifproductos:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  104 => 53,  206 => 50,  192 => 43,  188 => 42,  184 => 41,  180 => 40,  172 => 38,  160 => 34,  152 => 46,  150 => 33,  137 => 27,  129 => 49,  113 => 22,  84 => 12,  76 => 10,  70 => 30,  65 => 23,  58 => 10,  34 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 28,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 26,  102 => 32,  71 => 19,  67 => 15,  63 => 16,  59 => 14,  38 => 26,  94 => 51,  89 => 20,  85 => 39,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 49,  78 => 35,  46 => 15,  27 => 1,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 44,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 20,  91 => 50,  62 => 23,  49 => 5,  24 => 4,  25 => 3,  19 => 1,  79 => 11,  72 => 16,  69 => 25,  47 => 9,  40 => 54,  37 => 10,  22 => 2,  246 => 90,  157 => 33,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 19,  98 => 52,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 15,  43 => 11,  41 => 8,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 49,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 39,  173 => 65,  168 => 37,  164 => 36,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 30,  141 => 48,  133 => 55,  130 => 41,  125 => 47,  122 => 27,  116 => 41,  112 => 42,  109 => 21,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 9,  42 => 11,  39 => 11,  36 => 7,  33 => 4,  30 => 3,);
    }
}
