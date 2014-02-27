<?php

/* sil12VitrineBundle:Product:edit.html.twig */
class __TwigTemplate_88f2d08ccfb3ef5bf007417e2e3d214f04d1c61c5f1341c74e70eedcd91f2ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("sil12VitrineBundle:BackOffice:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "sil12VitrineBundle:BackOffice:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"col-md-6 col-md-offset-3\">
\t<div class=\"panel panel-default\">
\t    <div class=\"panel-heading\">
\t        <h3 class=\"panel-title\">Edition du produit</h3>
\t    </div>
\t    <div class=\"panel-body\">
\t\t    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form');
        echo "

\t        <ul class=\"record_actions\">
\t\t\t    <li>
\t\t\t        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("product");
        echo "\">
\t\t\t            Retour à la\tliste
\t\t\t        </a>
\t\t\t    </li>
\t\t\t    <li>";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
\t\t\t</ul>
\t    </div>
\t</div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 53,  100 => 40,  139 => 43,  113 => 47,  23 => 3,  110 => 50,  104 => 46,  96 => 43,  76 => 33,  53 => 19,  180 => 81,  161 => 71,  146 => 64,  137 => 60,  118 => 49,  114 => 49,  84 => 30,  127 => 54,  77 => 29,  70 => 24,  65 => 26,  58 => 15,  52 => 23,  34 => 7,  145 => 48,  97 => 29,  83 => 26,  81 => 30,  74 => 25,  37 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 17,  128 => 58,  111 => 46,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  131 => 6,  119 => 51,  108 => 44,  102 => 32,  71 => 30,  67 => 25,  63 => 24,  59 => 25,  47 => 15,  29 => 3,  94 => 37,  89 => 29,  85 => 36,  79 => 38,  75 => 26,  68 => 29,  56 => 24,  50 => 18,  43 => 14,  28 => 4,  38 => 9,  24 => 3,  87 => 28,  72 => 25,  55 => 19,  41 => 13,  26 => 6,  35 => 5,  31 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 73,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 42,  123 => 53,  121 => 5,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 41,  69 => 27,  66 => 23,  62 => 22,  49 => 17,  25 => 5,  21 => 2,  19 => 1,  98 => 31,  93 => 32,  88 => 34,  78 => 34,  46 => 15,  44 => 12,  40 => 11,  32 => 6,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 67,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 5,  122 => 43,  116 => 41,  112 => 46,  109 => 34,  106 => 42,  103 => 50,  99 => 43,  95 => 30,  92 => 38,  86 => 39,  82 => 27,  80 => 32,  73 => 28,  64 => 26,  60 => 17,  57 => 22,  54 => 22,  51 => 11,  48 => 14,  45 => 16,  42 => 14,  39 => 11,  36 => 5,  33 => 11,  30 => 7,);
    }
}
