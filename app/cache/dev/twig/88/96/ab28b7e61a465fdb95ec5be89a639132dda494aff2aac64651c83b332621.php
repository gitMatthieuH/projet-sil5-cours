<?php

/* sil12VitrineBundle::layout.html.twig */
class __TwigTemplate_8896ab28b7e61a465fdb95ec5be89a639132dda494aff2aac64651c83b332621 extends Twig_Template
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
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption' rel='stylesheet' type='text/css'>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/js/snap.svg-min.js"), "html", null, true);
        echo "\"></script>
</head>
    <body>
        ";
        // line 15
        $this->env->loadTemplate("sil12VitrineBundle:Default:header.html.twig")->display($context);
        // line 16
        echo "        <div class=\"row\">
            ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "        </div>
        ";
        // line 20
        $this->env->loadTemplate("sil12VitrineBundle:Default:footer.html.twig")->display($context);
        // line 21
        echo "       
        ";
        // line 23
        echo "
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/lib/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/lib/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/js/hovers.js"), "html", null, true);
        echo "\"></script>
        <script>
            (function() {
    
                function init() {
                    var speed = 250,
                        easing = mina.easeinout;

                    [].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
                        var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
                            pathConfig = {
                                from : path.attr( 'd' ),
                                to : el.getAttribute( 'data-path-hover' )
                            };

                        el.addEventListener( 'mouseenter', function() {
                            path.animate( { 'path' : pathConfig.to }, speed, easing );
                        } );

                        el.addEventListener( 'mouseleave', function() {
                            path.animate( { 'path' : pathConfig.from }, speed, easing );
                        } );
                    } );
                }

                init();

                \$( \"#type\" ).on('change', function() {
                  \$( \"#filter\" ).submit();
                });

            })();
        </script>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "HATme.com";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "            ";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 18,  136 => 17,  131 => 6,  125 => 5,  86 => 28,  82 => 27,  77 => 25,  73 => 23,  70 => 21,  68 => 20,  65 => 19,  63 => 17,  60 => 16,  52 => 12,  47 => 10,  43 => 9,  39 => 8,  34 => 7,  32 => 6,  22 => 1,  128 => 42,  118 => 37,  112 => 35,  104 => 33,  98 => 32,  96 => 31,  89 => 30,  84 => 29,  81 => 28,  79 => 27,  75 => 26,  71 => 25,  64 => 22,  58 => 15,  54 => 19,  40 => 8,  36 => 7,  31 => 4,  28 => 5,);
    }
}
