<?php

/* sil12VitrineBundle:Client:edit.html.twig */
class __TwigTemplate_d26e1dbdbe38310e3f683db4778705c2a959a6f57094d1199165cd629fc30d36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("sil12VitrineBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
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
\t";
        // line 5
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t    <h1>Client edit</h1>

\t    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form');
        echo "

\t        <ul class=\"record_actions\">
\t    <li>
\t        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("client");
        echo "\">
\t            Back to the list
\t        </a>
\t    </li>
\t    <li>";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
\t</ul>
\t";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Client:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  100 => 47,  65 => 28,  53 => 21,  165 => 72,  160 => 70,  153 => 66,  145 => 63,  113 => 48,  83 => 26,  52 => 12,  134 => 17,  126 => 53,  120 => 5,  81 => 32,  76 => 22,  34 => 5,  90 => 31,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 80,  159 => 61,  143 => 56,  135 => 53,  131 => 16,  119 => 42,  108 => 40,  102 => 39,  71 => 19,  67 => 19,  63 => 19,  59 => 16,  47 => 10,  29 => 3,  94 => 43,  89 => 29,  85 => 27,  79 => 38,  75 => 17,  68 => 29,  56 => 16,  50 => 10,  43 => 9,  28 => 3,  38 => 6,  24 => 3,  87 => 25,  72 => 21,  55 => 15,  41 => 6,  26 => 6,  35 => 5,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  123 => 47,  121 => 46,  117 => 49,  115 => 43,  105 => 40,  101 => 35,  91 => 27,  69 => 20,  66 => 20,  62 => 16,  49 => 12,  25 => 5,  21 => 2,  19 => 1,  98 => 31,  93 => 28,  88 => 36,  78 => 35,  46 => 7,  44 => 9,  40 => 7,  32 => 4,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 52,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 33,  95 => 28,  92 => 21,  86 => 39,  82 => 29,  80 => 19,  73 => 27,  64 => 16,  60 => 15,  57 => 19,  54 => 17,  51 => 11,  48 => 13,  45 => 8,  42 => 5,  39 => 7,  36 => 5,  33 => 11,  30 => 7,);
    }
}
