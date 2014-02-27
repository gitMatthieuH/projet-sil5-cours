<?php

/* sil12VitrineBundle:Default:chapeau.html.twig */
class __TwigTemplate_614ee9d373cb9725c6eb208cbc015d7eb1ea8f9563a4665cfb9f28bfc1d27226 extends Twig_Template
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

\t\t<div class=\"panel-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div style=\"text-align:center;\"><h3 style=\"font-family:'Lobster';font-size:4rem;\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "name"), "html", null, true);
        echo "</h3></div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t";
        // line 11
        if (($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "stock") <= 0)) {
            // line 12
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">Cet article n'est plus en stock !</div>
\t\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t\t<a href=\"#\" class=\"thumbnail\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "id"), "html", null, true);
        echo ".png\" width=\"650px\"></a>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t
\t\t\t\t\t\t<p><b>Description : </b>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "description"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t";
        // line 21
        if ((twig_length_filter($this->env, (isset($context["proms"]) ? $context["proms"] : $this->getContext($context, "proms"))) > 0)) {
            // line 22
            echo "\t\t\t\t\t\t\t";
            $context["price"] = $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "price");
            // line 23
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proms"]) ? $context["proms"] : $this->getContext($context, "proms")));
            foreach ($context['_seq'] as $context["_key"] => $context["prom"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t<b>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "name"), "html", null, true);
                echo " -";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "reduction"), "html", null, true);
                echo "% !</b>
\t\t\t\t\t\t\t\t";
                // line 25
                $context["price"] = ((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) - ((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) / $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "reduction")));
                // line 26
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t\t\t\t\t\t<p><b>Prix : </b><s>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "price"), "html", null, true);
            echo "€</s>    <span class=\"new-price\"><b>";
            echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")), "html", null, true);
            echo "€</b></span></p>
\t\t\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t\t\t<p><b>Prix : </b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "price"), "html", null, true);
            echo " €</p>
\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<form role=\"form\" action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_shareProduct");
        echo "\" method=\"POST\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "id"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Adresse mail\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" value=\"Partager la fiche produit\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_addProduct", array("id" => $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "id"), "qte" => 1)), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary btn-lg btn-block\" ";
        if (($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "stock") <= 0)) {
            echo "disabled";
        }
        echo ">Ajouter au panier</a>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boughtWith"]) ? $context["boughtWith"] : $this->getContext($context, "boughtWith")));
        foreach ($context['_seq'] as $context["_key"] => $context[" product"]) {
            // line 46
            echo "\t\tid :";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context[" product"]) ? $context[" product"] : $this->getContext($context, " product")), "id"), "html", null, true);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context[' product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t
</div>

";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Default:chapeau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  136 => 46,  132 => 45,  119 => 39,  111 => 34,  106 => 32,  103 => 31,  97 => 29,  89 => 27,  83 => 26,  81 => 25,  74 => 24,  69 => 23,  66 => 22,  64 => 21,  60 => 20,  49 => 14,  45 => 12,  43 => 11,  38 => 9,  31 => 4,  28 => 3,);
    }
}
