<?php

/* sil12VitrineBundle:Default:articlesParCategorie.html.twig */
class __TwigTemplate_11a14fd3e1cc58cb12d7103c679a7b7b4de5c42df936d8924f13ce4704f6fc26 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))), "html", null, true);
        echo "
\t<section id=\"grid\" class=\"grid clearfix\">\t\t
\t
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "
\t\t    \t<a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
            echo "\" data-path-hover=\"m 180,34.57627 -180,0 L 0,0 180,0 z\">
\t\t\t    \t<figure>
\t\t\t    \t\t<img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "html", null, true);
            echo ".jpg\" width=\"250px\">
\t\t\t    \t\t<svg viewBox=\"0 0 180 320\" preserveAspectRatio=\"none\"><path d=\"M 180,160 0,218 0,0 180,0 z\"/></svg>
\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t<h2>";
            // line 14
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), 15), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<p>";
            // line 15
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description"), 30), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p><b>Prix : </b>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<button href=\"\" type=\"button\" class=\"btn btn-primary btn-lg btn-block\">Détails</button>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t</figure>
\t\t\t\t</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t</section>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Default:articlesParCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  126 => 16,  118 => 6,  77 => 25,  58 => 15,  53 => 21,  65 => 17,  34 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 22,  56 => 14,  28 => 3,  38 => 12,  24 => 3,  87 => 25,  26 => 6,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 11,  25 => 5,  21 => 2,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  44 => 9,  27 => 4,  79 => 18,  72 => 16,  69 => 18,  47 => 10,  40 => 11,  37 => 7,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 15,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 14,  52 => 21,  50 => 11,  43 => 9,  41 => 8,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 5,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 16,  60 => 15,  57 => 11,  54 => 12,  51 => 14,  48 => 16,  45 => 17,  42 => 7,  39 => 8,  36 => 6,  33 => 4,  30 => 7,);
    }
}