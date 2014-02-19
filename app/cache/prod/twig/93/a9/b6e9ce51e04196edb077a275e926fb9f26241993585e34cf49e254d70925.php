<?php

/* sil12VitrineBundle:Default:index.html.twig */
class __TwigTemplate_93a9b6e9ce51e04196edb077a275e926fb9f26241993585e34cf49e254d70925 extends Twig_Template
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
        echo "<div class=\"col-md-6 col-md-offset-3 home\">
\t";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " 
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">Produits phares</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"row\">
  \t\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mostBought"]) ? $context["mostBought"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ol"]) {
            // line 13
            echo "\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t    \t\t<img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "id"), "html", null, true);
            echo ".png\" width=\"100px\">
\t\t\t    \t\t<div class=\"caption\">
\t\t\t\t\t\t\t<p class=\"title_block\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "name"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"product_desc\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "description"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"lnk_more\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "id"))), "html", null, true);
            echo "\" title=\"Plus d'infos\">
\t\t\t\t\t\t\t\t\tPlus d'infos
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"price_container\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "price"), "html", null, true);
            echo " €</span>
\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"add_to_cart_button\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_contenuPanier", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "id"), "type" => "add")), "html", null, true);
            echo "\" title=\"Ajouter au panier\">
\t\t\t\t\t\t\t\t\tAjouter au panier
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">Nouveaux produits</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"row\">
  \t\t\t";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastAdd"]) ? $context["lastAdd"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 49
            echo "\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t<span class=\"new\">Nouveau</span>
\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"))), "html", null, true);
            echo "\" title=\"Description\" class=\"product_image\">
\t\t\t\t    \t\t<img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo ".png\" width=\"100px\">
\t\t\t\t    \t\t
\t\t\t\t    \t</a>

\t\t\t    \t\t<div class=\"caption\">
\t\t\t\t\t\t\t<p class=\"title_block\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"product_desc\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"lnk_more\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"))), "html", null, true);
            echo "\" title=\"Plus d'infos\">
\t\t\t\t\t\t\t\t\tPlus d'infos
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"price_container\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo " €</span>
\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"add_to_cart_button\"  href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_contenuPanier", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "type" => "add")), "html", null, true);
            echo "\" title=\"Ajouter au panier\">
\t\t\t\t\t\t\t\t\tAjouter au panier
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 72,  160 => 70,  153 => 66,  145 => 63,  113 => 48,  83 => 29,  52 => 15,  134 => 17,  126 => 53,  120 => 5,  81 => 26,  76 => 25,  34 => 5,  90 => 31,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 80,  159 => 61,  143 => 56,  135 => 53,  131 => 16,  119 => 42,  108 => 36,  102 => 39,  71 => 19,  67 => 19,  63 => 15,  59 => 18,  47 => 10,  29 => 3,  94 => 28,  89 => 20,  85 => 27,  79 => 18,  75 => 17,  68 => 22,  56 => 9,  50 => 10,  43 => 9,  28 => 3,  38 => 6,  24 => 3,  87 => 25,  72 => 22,  55 => 15,  41 => 12,  26 => 6,  35 => 5,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  123 => 47,  121 => 46,  117 => 49,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 20,  66 => 15,  62 => 16,  49 => 19,  25 => 5,  21 => 2,  19 => 1,  98 => 31,  93 => 28,  88 => 31,  78 => 21,  46 => 7,  44 => 12,  40 => 7,  32 => 6,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 52,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 33,  95 => 28,  92 => 21,  86 => 30,  82 => 29,  80 => 19,  73 => 19,  64 => 18,  60 => 13,  57 => 14,  54 => 17,  51 => 11,  48 => 13,  45 => 8,  42 => 7,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
