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
        $context['_seq'] = twig_ensure_traversable((isset($context["mostBought"]) ? $context["mostBought"] : $this->getContext($context, "mostBought")));
        foreach ($context['_seq'] as $context["_key"] => $context["chapeau"]) {
            // line 12
            echo "\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "id"))), "html", null, true);
            echo "\" title=\"Description\">
\t\t\t    \t\t\t<img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "id"), "html", null, true);
            echo ".png\" width=\"100px\">
\t\t\t    \t\t</a>
\t\t\t    \t\t<div class=\"caption\">
\t\t\t\t\t\t\t<p class=\"title_block\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "name"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"product_desc\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "description"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"lnk_more\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "id"))), "html", null, true);
            echo "\" title=\"Plus d'infos\">
\t\t\t\t\t\t\t\t\tPlus d'infos
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"price_container\">
\t\t\t\t\t\t\t\t\t";
            // line 30
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "proms")) > 0)) {
                // line 31
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["price"] = $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "price");
                // line 32
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "proms"));
                foreach ($context['_seq'] as $context["_key"] => $context["prom"]) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"prom\"><b>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "name"), "html", null, true);
                    echo " -";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "reduction"), "html", null, true);
                    echo "% !</b></div>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 34
                    $context["price"] = ((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) - ((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) / $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "reduction")));
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prom'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price\"><s>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "price"), "html", null, true);
                echo "€</s>    <span class=\"new-price\"><b>";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")), 2), "html", null, true);
                echo "€</b></span></span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "price"), "html", null, true);
                echo " €</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"add_to_cart_button\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_addProduct", array("id" => $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "id"), "qte" => 1)), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapeau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastAdd"]) ? $context["lastAdd"] : $this->getContext($context, "lastAdd")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 59
            echo "\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t<span class=\"new\">Nouveau</span>
\t\t\t\t\t\t<a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "chapeau"), "id"))), "html", null, true);
            echo "\" title=\"Description\" class=\"product_image\">
\t\t\t\t    \t\t<img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "chapeau"), "id"), "html", null, true);
            echo ".png\" width=\"100px\">
\t\t\t\t    \t\t
\t\t\t\t    \t</a>

\t\t\t    \t\t<div class=\"caption\">
\t\t\t\t\t\t\t<p class=\"title_block\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "chapeau"), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "chapeau"), "name"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"product_desc\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "chapeau"), "id"))), "html", null, true);
            echo "\" title=\"Description\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "chapeau"), "description"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"lnk_more\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "chapeau"), "id"))), "html", null, true);
            echo "\" title=\"Plus d'infos\">
\t\t\t\t\t\t\t\t\tPlus d'infos
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"price_container\">
\t\t\t\t\t\t\t\t\t";
            // line 80
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "proms")) > 0)) {
                // line 81
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["price"] = $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "chapeau"), "price");
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "proms"));
                foreach ($context['_seq'] as $context["_key"] => $context["prom"]) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"prom\"><b>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "name"), "html", null, true);
                    echo " -";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "reduction"), "html", null, true);
                    echo "% !</b></div>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 84
                    $context["price"] = ((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) - ((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) / $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "reduction")));
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prom'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price\"><s>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "chapeau"), "price"), "html", null, true);
                echo "€</s>    <span class=\"new-price\"><b>";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")), 2), "html", null, true);
                echo "€</b></span></span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 88
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "chapeau"), "price"), "html", null, true);
                echo " €</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 90
            echo "\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"add_to_cart_button\"  href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_addProduct", array("id" => $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "chapeau"), "id"), "qte" => 1)), "html", null, true);
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
        // line 99
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
        return array (  254 => 99,  240 => 91,  237 => 90,  231 => 88,  223 => 86,  217 => 85,  215 => 84,  208 => 83,  203 => 82,  200 => 81,  198 => 80,  191 => 76,  183 => 73,  174 => 69,  164 => 63,  160 => 62,  155 => 59,  151 => 58,  140 => 49,  126 => 41,  123 => 40,  117 => 38,  109 => 36,  103 => 35,  101 => 34,  94 => 33,  89 => 32,  86 => 31,  84 => 30,  77 => 26,  69 => 23,  60 => 19,  52 => 15,  48 => 14,  44 => 12,  40 => 11,  31 => 4,  28 => 3,);
    }
}
