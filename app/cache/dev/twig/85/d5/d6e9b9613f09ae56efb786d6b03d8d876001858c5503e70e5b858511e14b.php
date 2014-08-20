<?php

/* InventarioFrontBundle:Vendedores:show.html.twig */
class __TwigTemplate_85d5d6e9b9613f09ae56efb786d6b03d8d876001858c5503e70e5b858511e14b extends Twig_Template
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

    <h1>Vendedores</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txdocvendedor</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txdocvendedor"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txnomvendedor</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txnomvendedor"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("vendedores");
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>
        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vendedores_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Modificar
        </a>
    </li>
    <li>";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Vendedores:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 57,  124 => 46,  97 => 45,  90 => 34,  77 => 27,  81 => 33,  161 => 108,  23 => 1,  53 => 19,  104 => 49,  194 => 44,  190 => 43,  186 => 42,  178 => 40,  174 => 111,  170 => 38,  155 => 98,  150 => 77,  148 => 33,  113 => 41,  84 => 38,  76 => 33,  70 => 29,  65 => 24,  58 => 21,  34 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 48,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 49,  179 => 69,  159 => 61,  143 => 73,  135 => 68,  119 => 71,  102 => 40,  71 => 32,  67 => 27,  63 => 27,  59 => 20,  38 => 26,  94 => 45,  89 => 35,  85 => 34,  75 => 32,  68 => 30,  56 => 25,  87 => 41,  21 => 2,  26 => 6,  93 => 36,  88 => 39,  78 => 34,  46 => 15,  27 => 1,  44 => 11,  31 => 5,  28 => 3,  201 => 48,  196 => 90,  183 => 82,  171 => 61,  166 => 37,  163 => 62,  158 => 107,  156 => 66,  151 => 62,  142 => 55,  138 => 28,  136 => 56,  121 => 46,  117 => 42,  105 => 39,  91 => 50,  62 => 25,  49 => 15,  24 => 4,  25 => 3,  19 => 1,  79 => 36,  72 => 31,  69 => 29,  47 => 12,  40 => 9,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 96,  139 => 94,  131 => 52,  123 => 47,  120 => 59,  115 => 43,  111 => 53,  108 => 36,  101 => 38,  98 => 42,  96 => 51,  83 => 37,  74 => 31,  66 => 27,  55 => 21,  52 => 21,  50 => 18,  43 => 11,  41 => 10,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 41,  176 => 64,  173 => 65,  168 => 110,  164 => 109,  162 => 36,  154 => 58,  149 => 97,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 49,  125 => 61,  122 => 27,  116 => 41,  112 => 42,  109 => 45,  106 => 36,  103 => 32,  99 => 47,  95 => 43,  92 => 43,  86 => 36,  82 => 40,  80 => 33,  73 => 29,  64 => 10,  60 => 26,  57 => 11,  54 => 10,  51 => 17,  48 => 20,  45 => 17,  42 => 11,  39 => 11,  36 => 7,  33 => 4,  30 => 3,);
    }
}
