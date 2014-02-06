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
\t\t<div class=\"navbar-header\">
\t\t\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
        echo "logo.png\" height=\"45px\"/ style=\"float:left;\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_accueil");
        echo "\">\t
\t\t\t\tHATme
\t\t\t</a>
\t\t</div>

\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t<ul class=\"nav navbar-nav navbar-left\">
\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_catalogue");
        echo "\">Catalogue</a></li>
\t\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_mentions");
        echo "\">Mentions</a></li>
\t\t\t</ul>
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t";
        // line 16
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 17
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("orderhat");
            echo "\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-list\"></span>
\t\t\t\t\t\tMes commandes
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_contenuPanier");
        echo "\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-shopping-cart\"></span>
\t\t\t\t\t\tPanier
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 30
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 31
            echo "\t\t\t\t
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-log-out\"></span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("sil12_vitrine_auth");
            echo "\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-log-in\"></span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 45
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("sil12_vitrine_backoffice");
            echo "\">
\t\t\t\t\t\tBack Office
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t</ul>
\t\t</div>
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
        return array (  112 => 51,  104 => 46,  101 => 45,  98 => 44,  90 => 39,  87 => 38,  79 => 33,  75 => 31,  73 => 30,  65 => 25,  62 => 24,  53 => 18,  50 => 17,  48 => 16,  42 => 13,  38 => 12,  28 => 5,  24 => 4,  19 => 1,);
    }
}
