<?php

/* InventarioFrontBundle:Masdocumentos:printdoc.html.twig */
class __TwigTemplate_b77f47727f97548036b527c64dca3b0ce334e5cb72c4e33de4fbe4690d491e54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InventarioFrontBundle:Default:plantillaprint.html.twig");

        $this->blocks = array(
            'sitecontent' => array($this, 'block_sitecontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InventarioFrontBundle:Default:plantillaprint.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sitecontent($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $context["num"] = 1;
        // line 5
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 6
            echo "            ";
            if (((isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")) == 1)) {
                // line 7
                echo "                <table id=\"doc_print\" background=\"#FFFFFF\" color=\"#000\" border-top=\"0px\" >
                    <tr background=\"#FFFFFF\"></tr>
                    <tr background=\"#FFFFFF\"></tr>
                    <tr background=\"#FFFFFF\"></tr>
                    <tr background=\"#FFFFFF\"></tr>
                    <tr background=\"#FFFFFF\">
                        <td background=\"#FFFFFF\" width=\"400px\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txnomtercero"), "html", null, true);
                echo "</td>
                        <td background=\"#FFFFFF\" width=\"400px\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txtelefonos"), "html", null, true);
                echo "</td>
                        <td background=\"#FFFFFF\" width=\"400px\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totaldoc"), "html", null, true);
                echo "</td>
                    </tr>
                </table>
                <table id=\"doc_print\" background=\"#FFFFFF\" color=\"#000\" border-top=\"0px\" >
                    <tr background=\"#FFFFFF\">
                        <td background=\"#FFFFFF\" width=\"800px\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txdireccion"), "html", null, true);
                echo "</td>
                    </tr>
                    <tr background=\"#FFFFFF\"></tr>
                    <tr background=\"#FFFFFF\"></tr>
                    <tr background=\"#FFFFFF\"></tr>
                    <tr background=\"#FFFFFF\"></tr>
                </table>
    <table id=\"doc_print\" background=\"#FFFFFF\" color=\"#000\" border-top=\"0px\" >
            ";
            }
            // line 29
            echo "            <tr background=\"#FFFFFF\">
                <td background=\"#FFFFFF\" width=\"150px\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "incantidad"), "html", null, true);
            echo "</td>
                <td background=\"#FFFFFF\" width=\"150px\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txrefinterna"), "html", null, true);
            echo "</td>
                <td background=\"#FFFFFF\" width=\"300px\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "txnomproducto"), "html", null, true);
            echo "</td>
                <td style=\"text-align:right\" background=\"#FFFFFF\" width=\"210px\">\$ ";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dbvalunitario"), 0, ",", "."), "html", null, true);
            echo "</td>
                <td style=\"text-align:right\" background=\"#FFFFFF\" width=\"210px\">\$ ";
            // line 34
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dbvaltotal"), 0, ",", "."), "html", null, true);
            echo "</td>
            </tr>
            ";
            // line 36
            $context["num"] = 2;
            // line 37
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "InventarioFrontBundle:Masdocumentos:printdoc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  104 => 37,  97 => 34,  416 => 346,  275 => 213,  265 => 206,  195 => 145,  155 => 111,  137 => 96,  146 => 105,  152 => 107,  178 => 131,  126 => 88,  23 => 1,  113 => 22,  84 => 12,  76 => 10,  58 => 15,  70 => 29,  53 => 18,  197 => 45,  185 => 42,  181 => 134,  165 => 37,  161 => 35,  153 => 47,  127 => 48,  124 => 86,  90 => 49,  81 => 30,  65 => 27,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 345,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 314,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 40,  169 => 38,  140 => 97,  132 => 94,  128 => 49,  107 => 20,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 182,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 50,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 28,  102 => 36,  71 => 30,  67 => 22,  63 => 25,  59 => 24,  38 => 6,  94 => 39,  89 => 32,  85 => 31,  75 => 28,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 33,  88 => 13,  78 => 29,  46 => 14,  27 => 1,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 34,  156 => 66,  151 => 106,  142 => 95,  138 => 28,  136 => 56,  121 => 27,  117 => 44,  105 => 20,  91 => 27,  62 => 14,  49 => 17,  24 => 1,  25 => 3,  19 => 1,  79 => 11,  72 => 5,  69 => 17,  47 => 12,  40 => 8,  37 => 28,  22 => 2,  246 => 90,  157 => 116,  145 => 96,  139 => 98,  131 => 93,  123 => 47,  120 => 76,  115 => 22,  111 => 21,  108 => 36,  101 => 19,  98 => 57,  96 => 16,  83 => 25,  74 => 39,  66 => 20,  55 => 15,  52 => 19,  50 => 13,  43 => 11,  41 => 9,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 146,  193 => 44,  189 => 43,  187 => 84,  182 => 66,  176 => 64,  173 => 39,  168 => 72,  164 => 59,  162 => 118,  154 => 58,  149 => 51,  147 => 106,  144 => 49,  141 => 29,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 21,  106 => 36,  103 => 19,  99 => 40,  95 => 28,  92 => 35,  86 => 12,  82 => 22,  80 => 29,  73 => 38,  64 => 10,  60 => 22,  57 => 11,  54 => 14,  51 => 5,  48 => 4,  45 => 17,  42 => 7,  39 => 6,  36 => 7,  33 => 6,  30 => 7,);
    }
}
