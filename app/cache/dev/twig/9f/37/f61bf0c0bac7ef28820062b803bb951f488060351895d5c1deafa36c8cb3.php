<?php

/* sil12VitrineBundle:Default:header.html.twig */
class __TwigTemplate_9f37f61bf0c0bac7ef28820062b803bb951f488060351895d5c1deafa36c8cb3 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default row\" role=\"navigation\">
    <div class=\"col-md-6 col-md-offset-3\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t<div class=\"navbar-header\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_accueil");
        echo "\">HATme</a>
\t\t</div>

\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t<ul class=\"nav navbar-nav navbar-left\">
\t\t\t\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_catalogue");
        echo "\">Catalogue</a></li>
\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_mentions");
        echo "\">Mentions</a></li>
\t\t\t</ul>
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("orderhat");
        echo "\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-list\"></span>
\t\t\t\t\t\tMes commandes
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_contenuPanier");
        echo "\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-shopping-cart\"></span>
\t\t\t\t\t\tPanier
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div><!-- /.navbar-collapse -->
\t</div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  38 => 12,  25 => 5,  19 => 1,  126 => 16,  123 => 15,  118 => 6,  112 => 5,  77 => 25,  73 => 24,  68 => 22,  64 => 20,  60 => 17,  58 => 15,  55 => 14,  53 => 21,  47 => 10,  43 => 9,  39 => 8,  34 => 11,  32 => 6,  22 => 1,  48 => 16,  40 => 11,  31 => 4,  28 => 5,);
    }
}
