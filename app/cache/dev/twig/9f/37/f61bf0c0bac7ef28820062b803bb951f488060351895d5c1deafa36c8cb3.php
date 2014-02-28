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
            echo $this->env->getExtension('routing')->getPath("sil12_vitrine_myorders");
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
\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("sil12VitrineBundle:Panier:showPanier"));
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</small>
\t\t\t\t\t";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 36
            echo "\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"btn btn-default\" role=\"button\">
\t\t\t\t\t\tSe déconnecter";
            // line 37
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "name", array(), "any", true, true)) {
                echo " ( ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "name"), "html", null, true);
                echo " )";
            }
            echo " <span class=\"glyphicon glyphicon-log-out\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("sil12_vitrine_auth");
            echo "\" class=\"btn btn-default\" role=\"button\">
\t\t\t\t\t\tSe connecter <span class=\"glyphicon glyphicon-log-out\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"hero-lead\">
\t\t\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/img/"), "html", null, true);
        echo "logo.png\" height=\"45px\">
\t\t\t\t<h2>HATme.com</h2></a>
\t\t\t\t<p class=\"lead\">
\t\t\t\t\tIn hats we trust since men lose their hair
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
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
        return array (  111 => 48,  105 => 44,  97 => 40,  87 => 37,  82 => 36,  80 => 35,  74 => 32,  68 => 29,  65 => 28,  56 => 22,  53 => 21,  51 => 20,  42 => 14,  39 => 13,  31 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
