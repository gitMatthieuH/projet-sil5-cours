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
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/js/snap.svg-min.js"), "html", null, true);
        echo "\"></script>
</head>
    <body>
        ";
        // line 13
        $this->env->loadTemplate("sil12VitrineBundle:Default:header.html.twig")->display($context);
        // line 14
        echo "        <div class=\"row\">
            ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "        </div>
       
        ";
        // line 20
        echo "
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/lib/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/lib/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
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

            })();
        </script>
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

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
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
        return array (  126 => 16,  123 => 15,  118 => 6,  112 => 5,  77 => 25,  73 => 24,  68 => 22,  64 => 20,  60 => 17,  58 => 15,  55 => 14,  53 => 13,  47 => 10,  43 => 9,  39 => 8,  34 => 7,  32 => 6,  22 => 1,  48 => 16,  40 => 11,  31 => 4,  28 => 5,);
    }
}
