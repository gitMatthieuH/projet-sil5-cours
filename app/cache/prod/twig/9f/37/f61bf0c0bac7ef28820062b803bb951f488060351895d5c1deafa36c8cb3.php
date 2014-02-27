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
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 33
            echo "\t\t\t\t\t\t\t( ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "name"), "html", null, true);
            echo " )
\t\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t</a>
\t\t\t\t\t</small>
\t\t\t\t\t";
        // line 37
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 38
            echo "\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"btn btn-default\" role=\"button\">
\t\t\t\t\t\tSe déconnecter <span class=\"glyphicon glyphicon-log-out\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("sil12_vitrine_auth");
            echo "\" class=\"btn btn-default\" role=\"button\">
\t\t\t\t\t\tSe connecter <span class=\"glyphicon glyphicon-log-out\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"hero-lead\">
\t\t\t\t<a href=\"";
        // line 50
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
        return array (  110 => 50,  104 => 46,  96 => 42,  76 => 33,  53 => 21,  180 => 81,  161 => 71,  146 => 64,  137 => 60,  118 => 50,  114 => 49,  84 => 30,  127 => 54,  77 => 26,  70 => 21,  65 => 28,  58 => 15,  52 => 15,  34 => 7,  145 => 48,  97 => 29,  83 => 26,  81 => 25,  74 => 32,  37 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 17,  128 => 49,  111 => 34,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 18,  131 => 52,  119 => 39,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 14,  47 => 10,  29 => 4,  94 => 28,  89 => 32,  85 => 25,  79 => 18,  75 => 17,  68 => 29,  56 => 22,  50 => 10,  43 => 9,  28 => 7,  38 => 9,  24 => 3,  87 => 25,  72 => 16,  55 => 15,  41 => 7,  26 => 6,  35 => 6,  31 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 73,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 46,  123 => 53,  121 => 5,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 23,  66 => 22,  62 => 23,  49 => 14,  25 => 5,  21 => 2,  19 => 1,  98 => 31,  93 => 28,  88 => 38,  78 => 21,  46 => 7,  44 => 12,  40 => 11,  32 => 5,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 67,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 32,  103 => 40,  99 => 31,  95 => 28,  92 => 21,  86 => 37,  82 => 35,  80 => 25,  73 => 23,  64 => 21,  60 => 19,  57 => 11,  54 => 10,  51 => 20,  48 => 14,  45 => 7,  42 => 14,  39 => 13,  36 => 5,  33 => 9,  30 => 7,);
    }
}
