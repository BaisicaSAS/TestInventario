<?php

/* InventarioFrontBundle:Terceros:index.html.twig */
class __TwigTemplate_721ce6a3cc5e930f6e2afbab28c9e58fa98b012299bf68d9e4e0c7b402e89c37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InventarioFrontBundle:Default:index.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
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
            
    <h1>Terceros list</h1>

    <table class=\"records_list\">
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
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "            <tr>
                <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terceros_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txtipdoc"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txdocumento"), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txnomtercero"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "intipoter"), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txdescuento"), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txdiasdescuento"), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txdireccion"), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txtelefonos"), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "inactivo"), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "intipodesc"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terceros_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Ver</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 54
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
        // line 60
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 65
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
        return array (  150 => 65,  114 => 46,  90 => 40,  118 => 47,  100 => 47,  81 => 33,  77 => 32,  110 => 45,  70 => 29,  23 => 1,  58 => 20,  127 => 29,  76 => 37,  65 => 28,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 24,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 60,  135 => 31,  119 => 27,  102 => 43,  71 => 31,  67 => 22,  63 => 21,  59 => 22,  38 => 9,  94 => 41,  89 => 35,  85 => 34,  75 => 17,  68 => 30,  56 => 25,  87 => 41,  21 => 2,  26 => 6,  93 => 36,  88 => 6,  78 => 31,  46 => 14,  27 => 4,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 36,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 38,  62 => 24,  49 => 14,  24 => 1,  25 => 3,  19 => 1,  79 => 36,  72 => 16,  69 => 35,  47 => 12,  40 => 8,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 37,  139 => 45,  131 => 54,  123 => 28,  120 => 40,  115 => 56,  111 => 25,  108 => 52,  101 => 32,  98 => 42,  96 => 20,  83 => 36,  74 => 30,  66 => 26,  55 => 20,  52 => 18,  50 => 18,  43 => 8,  41 => 10,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 51,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 44,  103 => 44,  99 => 40,  95 => 28,  92 => 35,  86 => 39,  82 => 38,  80 => 29,  73 => 36,  64 => 29,  60 => 22,  57 => 11,  54 => 10,  51 => 16,  48 => 13,  45 => 17,  42 => 10,  39 => 10,  36 => 8,  33 => 6,  30 => 5,);
    }
}
