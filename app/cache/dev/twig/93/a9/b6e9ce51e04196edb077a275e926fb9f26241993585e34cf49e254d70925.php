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
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["mostBought"]) ? $context["mostBought"] : $this->getContext($context, "mostBought")));
        foreach ($context['_seq'] as $context["_key"] => $context["ol"]) {
            // line 13
            echo "\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t    \t\t<img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : $this->getContext($context, "ol")), 0), "product"), "id"), "html", null, true);
            echo ".png\" width=\"100px\">
\t\t\t    \t\t<div class=\"caption\">
\t\t\t\t\t\t\t<p class=\"title_block\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : $this->getContext($context, "ol")), 0), "product"), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : $this->getContext($context, "ol")), 0), "product"), "name"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"product_desc\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : $this->getContext($context, "ol")), 0), "product"), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : $this->getContext($context, "ol")), 0), "product"), "description"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"lnk_more\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : $this->getContext($context, "ol")), 0), "product"), "id"))), "html", null, true);
            echo "\" title=\"Plus d'infos\">
\t\t\t\t\t\t\t\t\tPlus d'infos
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"price_container\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : $this->getContext($context, "ol")), 0), "product"), "price"), "html", null, true);
            echo " €</span>
\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"add_to_cart_button\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_contenuPanier", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ol"]) ? $context["ol"] : $this->getContext($context, "ol")), 0), "product"), "id"), "type" => "add")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["lastAdd"]) ? $context["lastAdd"] : $this->getContext($context, "lastAdd")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 49
            echo "\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t<span class=\"new\">Nouveau</span>
\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
            echo "\" title=\"Description\" class=\"product_image\">
\t\t\t\t    \t\t<img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "html", null, true);
            echo ".png\" width=\"100px\">
\t\t\t\t    \t\t
\t\t\t\t    \t</a>

\t\t\t    \t\t<div class=\"caption\">
\t\t\t\t\t\t\t<p class=\"title_block\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"product_desc\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"lnk_more\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
            echo "\" title=\"Plus d'infos\">
\t\t\t\t\t\t\t\t\tPlus d'infos
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"price_container\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price"), "html", null, true);
            echo " €</span>
\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"add_to_cart_button\"  href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_contenuPanier", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "type" => "add")), "html", null, true);
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
        return array (  179 => 80,  165 => 72,  160 => 70,  153 => 66,  145 => 63,  136 => 59,  126 => 53,  122 => 52,  117 => 49,  113 => 48,  102 => 39,  88 => 31,  83 => 29,  76 => 25,  68 => 22,  59 => 18,  52 => 15,  48 => 13,  44 => 12,  34 => 5,  31 => 4,  28 => 3,);
    }
}
