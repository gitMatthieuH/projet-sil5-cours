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
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">Produits phares</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"row\">
  \t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mostBought"]) ? $context["mostBought"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ol"]) {
            // line 12
            echo "\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "id"))), "html", null, true);
            echo "\" title=\"Description\">
\t\t\t    \t\t\t<img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "id"), "html", null, true);
            echo ".png\" width=\"100px\">
\t\t\t    \t\t</a>
\t\t\t    \t\t<div class=\"caption\">
\t\t\t\t\t\t\t<p class=\"title_block\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "name"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"product_desc\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "description"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"lnk_more\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "id"))), "html", null, true);
            echo "\" title=\"Plus d'infos\">
\t\t\t\t\t\t\t\t\tPlus d'infos
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"price_container\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "price"), "html", null, true);
            echo " €</span>
\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"add_to_cart_button\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_addProduct", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : null), 0), "product"), "id"), "qte" => 1)), "html", null, true);
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
        // line 40
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
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastAdd"]) ? $context["lastAdd"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 50
            echo "\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t<span class=\"new\">Nouveau</span>
\t\t\t\t\t\t<a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"))), "html", null, true);
            echo "\" title=\"Description\" class=\"product_image\">
\t\t\t\t    \t\t<img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo ".png\" width=\"100px\">
\t\t\t\t    \t\t
\t\t\t\t    \t</a>

\t\t\t    \t\t<div class=\"caption\">
\t\t\t\t\t\t\t<p class=\"title_block\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"product_desc\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"lnk_more\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"))), "html", null, true);
            echo "\" title=\"Plus d'infos\">
\t\t\t\t\t\t\t\t\tPlus d'infos
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"price_container\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo " €</span>
\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"add_to_cart_button\"  href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_addProduct", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "qte" => 1)), "html", null, true);
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
        // line 81
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
        return array (  180 => 81,  161 => 71,  146 => 64,  137 => 60,  118 => 50,  114 => 49,  84 => 30,  127 => 54,  77 => 26,  70 => 21,  65 => 19,  58 => 15,  52 => 15,  34 => 7,  145 => 48,  97 => 29,  83 => 26,  81 => 25,  74 => 24,  37 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 17,  128 => 49,  111 => 34,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 18,  131 => 52,  119 => 39,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 14,  47 => 10,  29 => 3,  94 => 28,  89 => 32,  85 => 25,  79 => 18,  75 => 17,  68 => 20,  56 => 9,  50 => 10,  43 => 9,  28 => 3,  38 => 9,  24 => 3,  87 => 25,  72 => 16,  55 => 15,  41 => 7,  26 => 6,  35 => 5,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 73,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 46,  123 => 53,  121 => 5,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 23,  66 => 22,  62 => 23,  49 => 14,  25 => 5,  21 => 2,  19 => 1,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  40 => 11,  32 => 6,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 67,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 32,  103 => 40,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 27,  80 => 19,  73 => 23,  64 => 21,  60 => 19,  57 => 11,  54 => 10,  51 => 18,  48 => 14,  45 => 12,  42 => 7,  39 => 8,  36 => 5,  33 => 9,  30 => 7,);
    }
}
