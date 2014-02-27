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
        echo "\t<div class=\"col-md-6 col-md-offset-2\">
\t\t<div class=\"form-group\">
\t\t    <div class=\"col-sm-3\">
\t\t    \t<form role=\"form\" id=\"filter\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_filteredArticlesParCategorie");
        echo "\" method=\"POST\">
\t\t    \t\t<input type=\"hidden\" name=\"catId\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["catId"]) ? $context["catId"] : $this->getContext($context, "catId")), "html", null, true);
        echo "\">
\t\t    \t\t
\t\t\t\t\t<select id=\"type\" name=\"type\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"id\" ";
        // line 11
        if (array_key_exists("type", $context)) {
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "id")) {
                echo "selected";
            }
        } else {
            echo "selected";
        }
        echo ">Tout</option>
\t\t\t\t\t\t<option value=\"price\" ";
        // line 12
        if (array_key_exists("type", $context)) {
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "price")) {
                echo "selected";
            }
        }
        echo ">Tri par prix</option>
\t\t\t\t\t\t<option value=\"name\" ";
        // line 13
        if (array_key_exists("type", $context)) {
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "name")) {
                echo "selected";
            }
        }
        echo ">Tri par nom</option>
\t\t\t\t\t</select>

\t\t\t\t</form>
\t\t    </div>
\t    </div>
\t</div>
\t<section id=\"grid\" class=\"grid clearfix\">\t\t
\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chapeaux"]) ? $context["chapeaux"] : $this->getContext($context, "chapeaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["chapeau"]) {
            // line 22
            echo "\t    \t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_chapeau", array("id" => $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "id"))), "html", null, true);
            echo "\" data-path-hover=\"m 180,34.57627 -180,0 L 0,0 180,0 z\">
\t\t    \t<figure class=\"shadow\"  style=\"background: #b3c3cc\">
\t\t    \t\t<img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "id"), "html", null, true);
            echo ".png\" width=\"250px\">
\t\t    \t\t<svg viewBox=\"0 0 180 320\" preserveAspectRatio=\"none\"><path d=\"M180,160C180,160,0,218,0,218C0,218,0,0,0,0C0,0,180,0,180,0C180,0,180,160,180,160\"></path><desc>Created with Snap</desc><defs></defs></svg>
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<h2>";
            // line 27
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "name"), 30), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t<p>";
            // line 28
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "description"), 40), "html", null, true);
            echo "</p>
\t\t\t\t\t\t";
            // line 29
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "proms")) > 0)) {
                // line 30
                echo "\t\t\t\t\t\t\t";
                $context["price"] = $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "price");
                // line 31
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "proms"));
                foreach ($context['_seq'] as $context["_key"] => $context["prom"]) {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t<div class=\"prom\"><b>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "name"), "html", null, true);
                    echo " -";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "reduction"), "html", null, true);
                    echo "% !</b></div>
\t\t\t\t\t\t\t\t";
                    // line 33
                    $context["price"] = ((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) - ((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) / $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "reduction")));
                    // line 34
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prom'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "\t\t\t\t\t\t\t<p><b>Prix : </b><s>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "price"), "html", null, true);
                echo "€</s>    <span class=\"new-price\"><b>";
                echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")), "html", null, true);
                echo "€</b></span></p>
\t\t\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t\t\t\t<p><b>Prix : </b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "chapeau"), "price"), "html", null, true);
                echo " €</p>
\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t\t<button href=\"\" type=\"button\" class=\"btn btn-primary btn-lg btn-block\">Détails</button>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapeau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
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
        return array (  153 => 44,  143 => 39,  137 => 37,  129 => 35,  123 => 34,  121 => 33,  114 => 32,  109 => 31,  106 => 30,  104 => 29,  100 => 28,  96 => 27,  89 => 24,  83 => 22,  79 => 21,  64 => 13,  56 => 12,  46 => 11,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
