<?php

/* sil12VitrineBundle:Panier:show_panier.html.twig */
class __TwigTemplate_449db7a3fed562056aff75acc6c6deaec20a6273fdca9766bf41945e3a2db352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "( ";
        echo twig_escape_filter($this->env, (isset($context["nb"]) ? $context["nb"] : $this->getContext($context, "nb")), "html", null, true);
        echo " articles - total : ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 2), "html", null, true);
        echo "€ )";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Panier:show_panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
