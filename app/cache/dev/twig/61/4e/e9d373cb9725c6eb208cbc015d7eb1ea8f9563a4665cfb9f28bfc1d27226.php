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
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">Panier</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t";
        // line 12
        if (($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "stock") <= 0)) {
            // line 13
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">Cet article n'est plus en stock !</div>
\t\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t\t<a href=\"#\" class=\"thumbnail\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "id"), "html", null, true);
        echo ".png\" width=\"650px\"></a>
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "name"), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t<p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "description"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<p><b>Prix : </b>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "price"), "html", null, true);
        echo "€</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<a href=\"";
        // line 23
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
\ttaille : ";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["boughtWith"]) ? $context["boughtWith"] : $this->getContext($context, "boughtWith"))), "html", null, true);
        echo "
\t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boughtWith"]) ? $context["boughtWith"] : $this->getContext($context, "boughtWith")));
        foreach ($context['_seq'] as $context["_key"] => $context[" product"]) {
            // line 31
            echo "\t\tid :";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context[" product"]) ? $context[" product"] : $this->getContext($context, " product")), "id"), "html", null, true);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context[' product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
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
        return array (  99 => 33,  90 => 31,  86 => 30,  82 => 29,  69 => 23,  62 => 19,  58 => 18,  54 => 17,  47 => 15,  43 => 13,  41 => 12,  31 => 4,  28 => 3,);
    }
}
