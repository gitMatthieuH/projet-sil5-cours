<?php

/* sil12VitrineBundle:Email:share.txt.twig */
class __TwigTemplate_aae39ce4bf79f5d9724f782b5bf11d1e3f4097c4755866c2dbd766d5acacf4e3 extends Twig_Template
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
        echo "<div class=\"col-md-6 col-md-offset-3\">
\t<div class=\"panel panel-default\">

\t\t<div class=\"panel-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div style=\"text-align:center;\"><h3 style=\"font-family:'Lobster';font-size:4rem;\">";
        // line 6
        echo $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "name");
        echo "</h3></div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t";
        // line 8
        if (($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "stock") <= 0)) {
            // line 9
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">Cet article n'est plus en stock !</div>
\t\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t\t<a href=\"#\" class=\"thumbnail\"><img src=\"";
        echo (isset($context["IMGpath"]) ? $context["IMGpath"] : $this->getContext($context, "IMGpath"));
        echo "\" width=\"650px\"></a>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t
\t\t\t\t\t\t<p><b>Description : </b>";
        // line 17
        echo $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "description");
        echo "</p>
\t\t\t\t\t\t<p><b>Prix : </b>";
        // line 18
        echo $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "price");
        echo " €</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boughtWith"]) ? $context["boughtWith"] : $this->getContext($context, "boughtWith")));
        foreach ($context['_seq'] as $context["_key"] => $context[" product"]) {
            // line 25
            echo "\t\tid :";
            echo $this->getAttribute((isset($context[" product"]) ? $context[" product"] : $this->getContext($context, " product")), "id");
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context[' product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t
</div>";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Email:share.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  64 => 25,  60 => 24,  51 => 18,  47 => 17,  37 => 11,  33 => 9,  31 => 8,  26 => 6,  19 => 1,);
    }
}
