<?php

/* sil12VitrineBundle:BackOffice:layout.html.twig */
class __TwigTemplate_83a5b16808f9c7ca10b6f13a314320e8c9ff1451edbaf836baa33749ce933d78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"demo-1 no-js\">
    <head>
    \t<meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/lib/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/css/shapeover.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/js/snap.svg-min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <nav class=\"navbar navbar-default row\" role=\"navigation\">
            <div class=\"col-md-6 col-md-offset-3\">
                <div class=\"navbar-header\">
                    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
        echo "logo.png\" height=\"45px\"/ style=\"float:left;\">
                    <a class=\"navbar-brand\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_backoffice");
        echo "\"> 
                        HATme Back Office
                    </a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-left\">
                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("category");
        echo "\">Categories</a></li>
                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("product");
        echo "\">Produits</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("orderhat");
        echo "\">Commandes</a></li>
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("client");
        echo "\">Clients</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("promotion");
        echo "\">Promotions</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_accueil");
        echo "\">
                                Retour site
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class=\"row\">
            ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "        </div>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/lib/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/lib/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Back Office !";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "            ";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:BackOffice:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 47,  23 => 3,  110 => 50,  104 => 46,  76 => 33,  53 => 16,  180 => 81,  161 => 71,  146 => 64,  137 => 60,  118 => 49,  114 => 49,  84 => 30,  127 => 54,  77 => 31,  70 => 24,  65 => 28,  58 => 15,  34 => 7,  97 => 29,  81 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 17,  128 => 49,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 18,  119 => 39,  102 => 32,  71 => 19,  67 => 25,  63 => 24,  59 => 14,  94 => 28,  89 => 29,  85 => 36,  75 => 26,  68 => 29,  56 => 16,  28 => 5,  38 => 9,  24 => 3,  87 => 28,  26 => 6,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 73,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 42,  121 => 5,  117 => 44,  105 => 40,  91 => 27,  62 => 22,  49 => 17,  25 => 5,  21 => 2,  19 => 1,  93 => 32,  88 => 38,  78 => 26,  46 => 7,  44 => 12,  27 => 4,  79 => 38,  72 => 25,  69 => 23,  47 => 10,  40 => 11,  37 => 33,  22 => 1,  246 => 90,  157 => 56,  145 => 48,  139 => 43,  131 => 6,  123 => 53,  120 => 40,  115 => 43,  111 => 34,  108 => 44,  101 => 32,  98 => 31,  96 => 42,  83 => 26,  74 => 25,  66 => 23,  55 => 19,  52 => 15,  50 => 21,  43 => 9,  41 => 6,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 67,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 5,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 42,  103 => 32,  99 => 43,  95 => 30,  92 => 38,  86 => 28,  82 => 27,  80 => 32,  73 => 23,  64 => 21,  60 => 17,  57 => 23,  54 => 22,  51 => 11,  48 => 14,  45 => 16,  42 => 14,  39 => 8,  36 => 5,  33 => 9,  30 => 7,);
    }
}
