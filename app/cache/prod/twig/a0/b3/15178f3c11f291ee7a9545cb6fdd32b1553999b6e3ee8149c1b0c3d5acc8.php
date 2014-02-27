<?php

/* sil12VitrineBundle:Panier:panier.html.twig */
class __TwigTemplate_a0b315178f3c11f291ee7a9545cb6fdd32b1553999b6e3ee8149c1b0c3d5acc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("sil12VitrineBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"col-md-6 col-md-offset-3\">
\t
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">Panier</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["panier"]) ? $context["panier"] : null)) < 1)) {
            echo "Votre panier est vide";
        } else {
            // line 13
            echo "\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t        <tr>
\t\t\t        \t<th>Photo</th>
\t\t\t        \t<th>Nom</th>
\t\t\t        \t<th>Description</th>
\t\t\t        \t<th>Prix</th>
\t\t\t        \t<th width=\"100\">Quantité</th>
\t\t\t        </tr>
\t\t\t    </thead>
\t\t\t    <tbody>
\t\t\t    \t";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) ? $context["panier"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
                // line 25
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : null), "product"), "id"), "html", null, true);
                echo ".png\" width=\"250px\"></td>
\t\t\t\t\t\t\t<td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : null), "product"), "name"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : null), "product"), "description"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 30
                if ((twig_length_filter($this->env, (isset($context["proms"]) ? $context["proms"] : null)) > 0)) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t";
                    $context["price"] = $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : null), "product"), "price");
                    // line 32
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["proms"]) ? $context["proms"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["prom"]) {
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["price"] = ((isset($context["price"]) ? $context["price"] : null) - ((isset($context["price"]) ? $context["price"] : null) / $this->getAttribute((isset($context["prom"]) ? $context["prom"] : null), "reduction")));
                        // line 34
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prom'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "\t\t\t\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
                    echo " €</td>
\t\t\t\t\t\t\t";
                } else {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : null), "product"), "price"), "html", null, true);
                    echo " €</td>
\t\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t\t<td style=\"text-align:center\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_deleteProduct", array("id" => $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : null), "product"), "id"), "qte" => 1)), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-default btn-xs\">-</a>
\t\t\t\t\t\t\t\t";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elem"]) ? $context["elem"] : null), "qte"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_addProduct", array("id" => $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : null), "product"), "id"), "qte" => 1)), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-default btn-xs\">+</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_removeProduct", array("id" => $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : null), "product"), "id"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t   </tbody>
\t\t\t</table>
\t\t\t<div class=\"pull-right\">
\t\t\t\t<b>Total : </b>";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
            echo " €
\t\t\t</div><br>
\t\t\t<a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("sil12_vitrine_validationPanier");
            echo "\" type=\"button\" class=\"btn btn-primary btn-lg pull-right\">Commander</a>
\t\t\t";
        }
        // line 56
        echo "\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Panier:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  120 => 53,  100 => 40,  139 => 43,  113 => 40,  23 => 3,  110 => 39,  104 => 37,  96 => 43,  76 => 33,  53 => 19,  180 => 81,  161 => 71,  146 => 64,  137 => 49,  118 => 49,  114 => 49,  84 => 32,  127 => 54,  77 => 29,  70 => 27,  65 => 26,  58 => 24,  52 => 23,  34 => 7,  145 => 48,  97 => 29,  83 => 26,  81 => 31,  74 => 28,  37 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 17,  128 => 58,  111 => 46,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  131 => 6,  119 => 51,  108 => 44,  102 => 32,  71 => 30,  67 => 25,  63 => 24,  59 => 25,  47 => 15,  29 => 3,  94 => 37,  89 => 33,  85 => 36,  79 => 30,  75 => 26,  68 => 29,  56 => 24,  50 => 18,  43 => 14,  28 => 3,  38 => 9,  24 => 3,  87 => 28,  72 => 25,  55 => 19,  41 => 12,  26 => 6,  35 => 5,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 73,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 52,  138 => 54,  136 => 42,  123 => 53,  121 => 42,  117 => 41,  115 => 43,  105 => 40,  101 => 32,  91 => 41,  69 => 27,  66 => 23,  62 => 25,  49 => 17,  25 => 5,  21 => 2,  19 => 1,  98 => 35,  93 => 32,  88 => 34,  78 => 34,  46 => 15,  44 => 12,  40 => 11,  32 => 6,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 67,  149 => 51,  147 => 54,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 43,  122 => 43,  116 => 41,  112 => 46,  109 => 34,  106 => 42,  103 => 50,  99 => 43,  95 => 30,  92 => 34,  86 => 39,  82 => 27,  80 => 32,  73 => 28,  64 => 26,  60 => 17,  57 => 22,  54 => 22,  51 => 11,  48 => 14,  45 => 13,  42 => 14,  39 => 11,  36 => 5,  33 => 11,  30 => 7,);
    }
}
