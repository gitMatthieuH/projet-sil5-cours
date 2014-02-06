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
        return array (  76 => 22,  64 => 16,  60 => 15,  56 => 14,  49 => 11,  44 => 9,  41 => 8,  37 => 7,  31 => 4,  28 => 3,);
    }
}
