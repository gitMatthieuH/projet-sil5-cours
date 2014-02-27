<?php

/* BraincraftedBootstrapBundle::layout.html.twig */
class __TwigTemplate_43ad95c47d4c1e1cbadefd17b24dbccbeeb117c2e4bfcca7286cac35267b1a79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

<!-- Bootstrap -->
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

</head>

<body>

";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "
<!-- JavaScript plugins (requires jQuery) -->
<script src=\"//code.jquery.com/jquery.js\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/bootstrap.js"), "html", null, true);
        echo "\"></script>

<!-- Optionally enable responsive features in IE8 -->
<script src=\"js/respond.js\"></script>

</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 59,  186 => 58,  172 => 53,  150 => 46,  134 => 42,  90 => 31,  126 => 40,  152 => 56,  100 => 40,  113 => 40,  23 => 1,  110 => 36,  104 => 37,  76 => 26,  53 => 5,  180 => 55,  161 => 71,  146 => 45,  137 => 49,  118 => 38,  114 => 37,  84 => 32,  127 => 62,  77 => 29,  70 => 27,  65 => 26,  58 => 24,  34 => 7,  97 => 29,  81 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 17,  128 => 58,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 51,  102 => 34,  71 => 25,  67 => 26,  63 => 6,  59 => 25,  94 => 32,  89 => 32,  85 => 31,  75 => 25,  68 => 24,  56 => 21,  28 => 6,  38 => 9,  24 => 3,  87 => 28,  26 => 6,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 73,  163 => 62,  158 => 48,  156 => 66,  151 => 63,  142 => 44,  138 => 43,  136 => 42,  121 => 42,  117 => 41,  105 => 40,  91 => 41,  62 => 22,  49 => 14,  25 => 5,  21 => 1,  19 => 1,  93 => 40,  88 => 38,  78 => 34,  46 => 17,  44 => 16,  27 => 4,  79 => 27,  72 => 25,  69 => 16,  47 => 12,  40 => 11,  37 => 47,  22 => 1,  246 => 90,  157 => 56,  145 => 48,  139 => 43,  131 => 6,  123 => 53,  120 => 58,  115 => 43,  111 => 46,  108 => 38,  101 => 34,  98 => 33,  96 => 43,  83 => 26,  74 => 30,  66 => 23,  55 => 20,  52 => 21,  50 => 18,  43 => 14,  41 => 12,  35 => 10,  32 => 12,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 54,  173 => 65,  168 => 52,  164 => 59,  162 => 49,  154 => 47,  149 => 51,  147 => 54,  144 => 49,  141 => 48,  133 => 52,  130 => 41,  125 => 43,  122 => 39,  116 => 41,  112 => 53,  109 => 34,  106 => 35,  103 => 50,  99 => 43,  95 => 33,  92 => 34,  86 => 30,  82 => 29,  80 => 32,  73 => 28,  64 => 23,  60 => 22,  57 => 22,  54 => 22,  51 => 20,  48 => 16,  45 => 7,  42 => 16,  39 => 10,  36 => 13,  33 => 6,  30 => 7,);
    }
}
