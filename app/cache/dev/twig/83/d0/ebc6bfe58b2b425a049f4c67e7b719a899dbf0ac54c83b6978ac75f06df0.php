<?php

/* sil12VitrineBundle:Product:new.html.twig */
class __TwigTemplate_83d0ebc6bfe58b2b425a049f4c67e7b719a899dbf0ac54c83b6978ac75f06df0 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"col-md-6 col-md-offset-3\">
    <div class=\"panel panel-default\">
    \t <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Ajout d'un produit</h3>
        </div>
        <div class=\"panel-body\">

\t    \t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

\t        <ul class=\"record_actions\">
\t\t\t    <li>
\t\t\t        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("product");
        echo "\">
\t\t\t            Retour à la liste
\t\t\t        </a>
\t\t\t    </li>
\t\t\t</ul>
\t\t</div>
    </div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Product:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 40,  113 => 47,  23 => 3,  110 => 50,  104 => 46,  76 => 33,  53 => 18,  180 => 81,  161 => 71,  146 => 64,  137 => 60,  118 => 49,  114 => 49,  84 => 30,  127 => 54,  77 => 29,  70 => 24,  65 => 26,  58 => 15,  34 => 7,  97 => 29,  81 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 17,  128 => 58,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 51,  102 => 32,  71 => 30,  67 => 25,  63 => 24,  59 => 25,  94 => 37,  89 => 29,  85 => 36,  75 => 26,  68 => 29,  56 => 24,  28 => 3,  38 => 9,  24 => 3,  87 => 28,  26 => 6,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 73,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 42,  121 => 5,  117 => 44,  105 => 40,  91 => 41,  62 => 22,  49 => 17,  25 => 5,  21 => 2,  19 => 1,  93 => 32,  88 => 34,  78 => 34,  46 => 14,  44 => 12,  27 => 4,  79 => 38,  72 => 25,  69 => 27,  47 => 15,  40 => 11,  37 => 12,  22 => 1,  246 => 90,  157 => 56,  145 => 48,  139 => 43,  131 => 6,  123 => 53,  120 => 53,  115 => 43,  111 => 46,  108 => 44,  101 => 32,  98 => 31,  96 => 43,  83 => 26,  74 => 25,  66 => 23,  55 => 19,  52 => 23,  50 => 18,  43 => 14,  41 => 13,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 67,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 5,  122 => 43,  116 => 41,  112 => 46,  109 => 34,  106 => 42,  103 => 50,  99 => 43,  95 => 30,  92 => 38,  86 => 39,  82 => 27,  80 => 32,  73 => 28,  64 => 26,  60 => 17,  57 => 22,  54 => 22,  51 => 11,  48 => 14,  45 => 16,  42 => 14,  39 => 10,  36 => 5,  33 => 11,  30 => 7,);
    }
}
