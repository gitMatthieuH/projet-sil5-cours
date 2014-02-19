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
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_accueil");
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
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"";
        // line 30
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
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "        </div>
       
        ";
        // line 45
        echo "
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
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
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
        return array (  104 => 45,  70 => 24,  77 => 29,  23 => 1,  84 => 37,  74 => 25,  37 => 12,  100 => 42,  65 => 26,  53 => 5,  165 => 72,  160 => 70,  153 => 66,  145 => 63,  113 => 49,  83 => 26,  52 => 23,  134 => 41,  126 => 6,  120 => 5,  81 => 30,  76 => 22,  34 => 7,  90 => 31,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 80,  159 => 61,  143 => 56,  135 => 53,  131 => 40,  119 => 42,  108 => 47,  102 => 39,  71 => 19,  67 => 26,  63 => 19,  59 => 25,  47 => 10,  29 => 5,  94 => 37,  89 => 29,  85 => 30,  79 => 38,  75 => 17,  68 => 29,  56 => 16,  50 => 10,  43 => 9,  28 => 5,  38 => 6,  24 => 3,  87 => 25,  72 => 21,  55 => 15,  41 => 6,  26 => 6,  35 => 7,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  123 => 47,  121 => 46,  117 => 49,  115 => 43,  105 => 40,  101 => 35,  91 => 27,  69 => 27,  66 => 20,  62 => 16,  49 => 12,  25 => 5,  21 => 2,  19 => 1,  98 => 40,  93 => 28,  88 => 34,  78 => 26,  46 => 14,  44 => 11,  40 => 7,  32 => 6,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 52,  116 => 41,  112 => 42,  109 => 34,  106 => 43,  103 => 32,  99 => 46,  95 => 28,  92 => 42,  86 => 39,  82 => 29,  80 => 19,  73 => 28,  64 => 10,  60 => 17,  57 => 19,  54 => 17,  51 => 11,  48 => 13,  45 => 8,  42 => 10,  39 => 8,  36 => 5,  33 => 6,  30 => 7,);
    }
}
