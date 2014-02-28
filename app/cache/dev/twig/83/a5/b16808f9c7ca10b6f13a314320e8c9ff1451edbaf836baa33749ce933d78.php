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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/img/"), "html", null, true);
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
        return array (  139 => 43,  136 => 42,  131 => 6,  125 => 5,  118 => 49,  113 => 47,  108 => 44,  106 => 42,  93 => 32,  86 => 28,  82 => 27,  78 => 26,  74 => 25,  70 => 24,  60 => 17,  56 => 16,  47 => 10,  43 => 9,  39 => 8,  34 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
