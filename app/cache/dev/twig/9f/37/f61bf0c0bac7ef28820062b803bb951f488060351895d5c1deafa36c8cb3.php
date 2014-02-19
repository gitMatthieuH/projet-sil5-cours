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
        echo "<div class=\"container-hero\" id=\"container_hero\">
\t<div class=\"container\">
\t\t<div class=\"hero\">
\t\t\t<div class=\"clearfix\">
\t\t\t\t<h1 class=\"pull-left\" style=\"margin:0;\">
\t\t\t\t\t";
        // line 6
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "\t\t\t\t\t<small>
\t\t\t\t\t\t<a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("sil12_vitrine_backoffice");
            echo "\"  class=\"btn btn-default\" role=\"button\">
\t\t\t\t\t\t\tBack Office
\t\t\t\t\t\t</a>
\t\t\t\t\t</small>
\t\t\t\t\t";
        }
        // line 13
        echo "\t\t\t\t\t<small>
\t\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_catalogue");
        echo "\">
\t\t\t\t\t\t\tCatalogue
\t\t\t\t\t\t</a>
\t\t\t\t\t</small>
\t\t\t\t</h1>
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t";
        // line 20
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 21
            echo "\t\t\t\t\t<small>
\t\t\t\t\t\t<a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("orderhat");
            echo "\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-list\"></span>
\t\t\t\t\t\t\tMes commandes
\t\t\t\t\t\t</a>
\t\t\t\t\t</small>
\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t<small>
\t\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_contenuPanier");
        echo "\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-shopping-cart\"></span>
\t\t\t\t\t\t\tPanier
\t\t\t\t\t\t</a>
\t\t\t\t\t</small>
\t\t\t\t\t";
        // line 34
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 35
            echo "\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"btn btn-default\" role=\"button\">
\t\t\t\t\t\tSe déconnecter <span class=\"glyphicon glyphicon-log-out\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("sil12_vitrine_auth");
            echo "\" class=\"btn btn-default\" role=\"button\">
\t\t\t\t\t\tSe connecter <span class=\"glyphicon glyphicon-log-out\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"hero-lead\">
\t\t\t\t<a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/img/"), "html", null, true);
        echo "logo.png\" height=\"45px\">
\t\t\t\t<h2>HATme.com</h2></a>
\t\t\t\t<p class=\"lead\">
\t\t\t\t\tBienvenue sur le site qui vend plein de chapeaux 
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

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
        return array (  100 => 47,  94 => 43,  86 => 39,  78 => 35,  65 => 28,  53 => 21,  42 => 14,  26 => 6,  19 => 1,  134 => 17,  131 => 16,  126 => 6,  120 => 5,  76 => 34,  69 => 20,  67 => 19,  62 => 16,  57 => 14,  51 => 20,  47 => 10,  43 => 9,  39 => 13,  34 => 7,  32 => 6,  22 => 1,  105 => 41,  101 => 39,  89 => 33,  85 => 27,  81 => 26,  77 => 30,  72 => 22,  68 => 29,  64 => 18,  59 => 15,  56 => 22,  52 => 23,  31 => 8,  28 => 7,);
    }
}
