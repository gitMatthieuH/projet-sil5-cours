<?php

/* sil12VitrineBundle:Default:myorders.html.twig */
class __TwigTemplate_84395bc3129f42584f0326242a7e629ebeeb695df2ecc03875384eb0944b6678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("sil12VitrineBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "sil12VitrineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"col-md-6 col-md-offset-3\">
    ";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "</div>
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Mes commandes</h3>
            </div>
            <div class=\"panel-body\">
                <table class=\"records_list\">
                    <thead>
                        <tr>
                            <th>Référence</th>
                            <th>Date de la commande</th>
                            <th>Etat de la commande</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "                            <tr>
                                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orderhat_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 24
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "orderdate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "orderdate"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 25
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "validated") == 1)) {
                echo " Validé ";
            } else {
                echo " Non validé ";
            }
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Default:myorders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 81,  161 => 71,  146 => 64,  137 => 60,  118 => 50,  114 => 49,  84 => 30,  127 => 54,  77 => 26,  70 => 21,  65 => 22,  58 => 15,  52 => 15,  34 => 7,  145 => 48,  97 => 29,  83 => 26,  81 => 25,  74 => 24,  37 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 17,  128 => 49,  111 => 34,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 18,  131 => 52,  119 => 39,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 14,  47 => 10,  29 => 4,  94 => 28,  89 => 32,  85 => 25,  79 => 18,  75 => 17,  68 => 23,  56 => 9,  50 => 10,  43 => 9,  28 => 3,  38 => 9,  24 => 3,  87 => 25,  72 => 16,  55 => 15,  41 => 7,  26 => 6,  35 => 6,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 73,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 46,  123 => 53,  121 => 5,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 23,  66 => 22,  62 => 23,  49 => 14,  25 => 5,  21 => 2,  19 => 1,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  40 => 11,  32 => 5,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 67,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 32,  103 => 40,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 27,  80 => 25,  73 => 23,  64 => 21,  60 => 19,  57 => 11,  54 => 10,  51 => 18,  48 => 14,  45 => 7,  42 => 6,  39 => 8,  36 => 5,  33 => 9,  30 => 7,);
    }
}
