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
        return array (  100 => 47,  65 => 28,  53 => 21,  165 => 72,  160 => 70,  153 => 66,  145 => 63,  113 => 48,  83 => 29,  52 => 15,  134 => 17,  126 => 53,  120 => 5,  81 => 26,  76 => 34,  34 => 5,  90 => 31,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 80,  159 => 61,  143 => 56,  135 => 53,  131 => 16,  119 => 42,  108 => 36,  102 => 39,  71 => 19,  67 => 19,  63 => 15,  59 => 18,  47 => 10,  29 => 3,  94 => 43,  89 => 20,  85 => 27,  79 => 18,  75 => 17,  68 => 29,  56 => 22,  50 => 10,  43 => 9,  28 => 7,  38 => 6,  24 => 3,  87 => 25,  72 => 22,  55 => 15,  41 => 12,  26 => 6,  35 => 5,  31 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  123 => 47,  121 => 46,  117 => 49,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 20,  66 => 15,  62 => 16,  49 => 19,  25 => 5,  21 => 2,  19 => 1,  98 => 31,  93 => 28,  88 => 31,  78 => 35,  46 => 7,  44 => 12,  40 => 7,  32 => 6,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 52,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 33,  95 => 28,  92 => 21,  86 => 39,  82 => 29,  80 => 19,  73 => 19,  64 => 18,  60 => 13,  57 => 14,  54 => 17,  51 => 20,  48 => 13,  45 => 8,  42 => 14,  39 => 13,  36 => 5,  33 => 4,  30 => 7,);
    }
}
