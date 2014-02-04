<?php

/* sil12VitrineBundle:Panier:validationPanier.html.twig */
class __TwigTemplate_1628ff6f7c7156bd0e927b2699aac5baaddd2eb393a77c5b2bffc12193880196 extends Twig_Template
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
        echo "<div class=\"col-md-6 col-md-offset-3\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">Récapitulatif de votre commande (ref#";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderHat"]) ? $context["orderHat"] : $this->getContext($context, "orderHat")), "id"), "html", null, true);
        echo ") d'un total de ";
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : $this->getContext($context, "totalPrice")), "html", null, true);
        echo " € :</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t        <tr>
\t\t\t        \t<th>Photo</th>
\t\t\t        \t<th>Nom</th>
\t\t\t        \t<th>Description</th>
\t\t\t        \t<th>Prix</th>
\t\t\t        \t<th>Quantité</th>
\t\t\t        </tr>
\t\t\t    </thead>
\t\t\t    <tbody>
\t\t\t    \t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")));
        foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
            // line 22
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "id"), "html", null, true);
            echo ".jpg\" width=\"250px\"></td>
\t\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "name"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "description"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "price"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "qte"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t\t
\t\t\t   </tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Panier:validationPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 40,  100 => 38,  84 => 31,  70 => 41,  81 => 32,  76 => 29,  126 => 16,  118 => 6,  77 => 25,  58 => 24,  53 => 21,  65 => 17,  34 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 25,  67 => 24,  63 => 25,  59 => 22,  94 => 28,  89 => 29,  85 => 25,  75 => 26,  68 => 22,  56 => 16,  28 => 3,  38 => 12,  24 => 3,  87 => 25,  26 => 6,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 12,  25 => 5,  21 => 2,  19 => 1,  93 => 28,  88 => 30,  78 => 21,  46 => 10,  44 => 9,  27 => 4,  79 => 27,  72 => 21,  69 => 18,  47 => 10,  40 => 11,  37 => 12,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 15,  120 => 40,  115 => 43,  111 => 37,  108 => 40,  101 => 35,  98 => 31,  96 => 31,  83 => 26,  74 => 14,  66 => 20,  55 => 21,  52 => 12,  50 => 11,  43 => 9,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 5,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 30,  73 => 27,  64 => 16,  60 => 15,  57 => 11,  54 => 12,  51 => 22,  48 => 16,  45 => 8,  42 => 5,  39 => 7,  36 => 7,  33 => 11,  30 => 7,);
    }
}
