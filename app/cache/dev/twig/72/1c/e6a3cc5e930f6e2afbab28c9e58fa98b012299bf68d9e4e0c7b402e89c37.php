<?php

/* InventarioFrontBundle:Terceros:index.html.twig */
class __TwigTemplate_721ce6a3cc5e930f6e2afbab28c9e58fa98b012299bf68d9e4e0c7b402e89c37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InventarioFrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/inventario/js/index.js"), "html", null, true);
        echo "\" ></script>
";
    }

    // line 8
    public function block_sitecontent($context, array $blocks = array())
    {
        // line 10
        echo "<h1>Terceros list</h1>

    <table id=\"listado_terceros\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Txtipdoc</th>
                <th>Txdocumento</th>
                <th>Txnomtercero</th>
                <th>Intipoter</th>
                <th>Txdescuento</th>
                <th>Txdiasdescuento</th>
                <th>Txdireccion</th>
                <th>Txtelefonos</th>
                <th>Inactivo</th>
                <th>Intipodesc</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "            <tr>
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terceros_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txtipdoc"), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txdocumento"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txnomtercero"), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "intipoter"), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txdescuento"), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txdiasdescuento"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txdireccion"), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txtelefonos"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "inactivo"), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "intipodesc"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terceros_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Ver</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terceros_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Modificar</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>

    <div id='pagerTerceros' ></div>
    <div id='resultado' ></div>
    <ul>
        <li>
            <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("terceros_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Terceros:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 46,  97 => 37,  90 => 34,  77 => 27,  81 => 33,  161 => 108,  23 => 1,  53 => 19,  104 => 53,  194 => 44,  190 => 43,  186 => 42,  178 => 40,  174 => 111,  170 => 38,  155 => 98,  150 => 46,  148 => 33,  113 => 41,  84 => 38,  76 => 10,  70 => 29,  65 => 24,  58 => 20,  34 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 48,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 49,  179 => 69,  159 => 61,  143 => 56,  135 => 27,  119 => 71,  102 => 40,  71 => 32,  67 => 27,  63 => 25,  59 => 20,  38 => 26,  94 => 39,  89 => 35,  85 => 34,  75 => 32,  68 => 30,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 36,  88 => 39,  78 => 34,  46 => 10,  27 => 1,  44 => 11,  31 => 5,  28 => 3,  201 => 48,  196 => 90,  183 => 82,  171 => 61,  166 => 37,  163 => 62,  158 => 107,  156 => 66,  151 => 62,  142 => 55,  138 => 28,  136 => 56,  121 => 46,  117 => 42,  105 => 39,  91 => 50,  62 => 21,  49 => 15,  24 => 4,  25 => 3,  19 => 1,  79 => 11,  72 => 31,  69 => 25,  47 => 12,  40 => 55,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 96,  139 => 94,  131 => 52,  123 => 47,  120 => 59,  115 => 43,  111 => 37,  108 => 36,  101 => 38,  98 => 52,  96 => 51,  83 => 25,  74 => 31,  66 => 27,  55 => 22,  52 => 21,  50 => 18,  43 => 8,  41 => 8,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 41,  176 => 64,  173 => 65,  168 => 110,  164 => 109,  162 => 36,  154 => 58,  149 => 97,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 49,  125 => 47,  122 => 27,  116 => 41,  112 => 42,  109 => 40,  106 => 36,  103 => 32,  99 => 47,  95 => 43,  92 => 43,  86 => 28,  82 => 40,  80 => 29,  73 => 26,  64 => 10,  60 => 23,  57 => 11,  54 => 10,  51 => 15,  48 => 20,  45 => 17,  42 => 11,  39 => 11,  36 => 7,  33 => 4,  30 => 3,);
    }
}
