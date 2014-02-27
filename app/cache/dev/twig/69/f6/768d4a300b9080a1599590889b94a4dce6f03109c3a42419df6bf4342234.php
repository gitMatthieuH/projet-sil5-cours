<?php

/* sil12VitrineBundle:Default:mentions.html.twig */
class __TwigTemplate_69f6768d4a300b9080a1599590889b94a4dce6f03109c3a42419df6bf4342234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("sil12VitrineBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "sil12VitrineBundle::layout.html.twig";
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
\t<div class=\"panel panel-default\">
\t    <div class=\"panel-heading\">
\t        <h3 class=\"panel-title\">Mentions légales</h3>
\t    </div>
\t    <div class=\"panel-body\">
\t\t\t<h4>Société HATme SAS</h4>

\t\t\t<p>Société par Actions Simplifiées au capital de 15 000 euros, ayant son siège social au 75 rue Ampère - 38000 GRENOBLE, immatriculée au RCS de Grenoble sous le numéro 79889651000012.<br>
\t\t\tNuméro de TVA Intracommunautaire : FR 798 896 510</p>

\t\t\t<h4>Contactez nous</h4>

\t\t\t<p>Tél : 06.78.28.00.85<br>
\t\t\tPar email : matthieu.hostache@gmail.com<br>
\t\t\tDirecteur de la publication : Monsieur Matthieu Hostache, ayant la qualité de président de la société HATme SAS</p>

\t\t\t<p>Hébergement du site HATme.COM</p>

\t\t\t<p>HATme SAS</p>
\t    </div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Default:mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  104 => 46,  76 => 33,  53 => 21,  180 => 81,  161 => 71,  146 => 64,  137 => 60,  118 => 50,  114 => 49,  84 => 30,  127 => 54,  77 => 26,  70 => 21,  65 => 28,  58 => 15,  34 => 7,  97 => 29,  81 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 17,  128 => 49,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 18,  119 => 39,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 14,  94 => 28,  89 => 32,  85 => 25,  75 => 17,  68 => 29,  56 => 22,  28 => 3,  38 => 9,  24 => 3,  87 => 25,  26 => 6,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 73,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 46,  121 => 5,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 15,  25 => 5,  21 => 2,  19 => 1,  93 => 28,  88 => 38,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 38,  72 => 16,  69 => 23,  47 => 10,  40 => 11,  37 => 33,  22 => 1,  246 => 90,  157 => 56,  145 => 48,  139 => 45,  131 => 52,  123 => 53,  120 => 40,  115 => 43,  111 => 34,  108 => 36,  101 => 32,  98 => 31,  96 => 42,  83 => 26,  74 => 32,  66 => 22,  55 => 15,  52 => 15,  50 => 10,  43 => 13,  41 => 12,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 67,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 32,  103 => 40,  99 => 31,  95 => 28,  92 => 21,  86 => 37,  82 => 35,  80 => 25,  73 => 23,  64 => 21,  60 => 19,  57 => 19,  54 => 10,  51 => 20,  48 => 14,  45 => 7,  42 => 14,  39 => 13,  36 => 5,  33 => 9,  30 => 7,);
    }
}
