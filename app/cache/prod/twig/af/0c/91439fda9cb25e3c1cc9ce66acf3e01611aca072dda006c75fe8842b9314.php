<?php

/* sil12VitrineBundle:Default:catalogue.html.twig */
class __TwigTemplate_af0c91439fda9cb25e3c1cc9ce66acf3e01611aca072dda006c75fe8842b9314 extends Twig_Template
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
\t<div class=\"row\">\t\t
\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t    <div class=\"thumbnail\">
\t\t\t    \t<a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_articlesParCategorie", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<h3>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/categories/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo ".jpg\" height=\"127\">
\t\t\t\t\t</a>
\t\t\t    </div>
\t\t\t</div>  
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Default:catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  100 => 47,  65 => 28,  53 => 21,  165 => 72,  160 => 70,  153 => 66,  145 => 63,  113 => 48,  83 => 29,  52 => 15,  134 => 17,  126 => 53,  120 => 5,  81 => 26,  76 => 22,  34 => 5,  90 => 31,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 80,  159 => 61,  143 => 56,  135 => 53,  131 => 16,  119 => 42,  108 => 36,  102 => 39,  71 => 19,  67 => 19,  63 => 16,  59 => 18,  47 => 10,  29 => 3,  94 => 43,  89 => 20,  85 => 27,  79 => 38,  75 => 17,  68 => 29,  56 => 14,  50 => 10,  43 => 9,  28 => 3,  38 => 6,  24 => 3,  87 => 25,  72 => 22,  55 => 15,  41 => 8,  26 => 6,  35 => 6,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  123 => 47,  121 => 46,  117 => 49,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 20,  66 => 15,  62 => 16,  49 => 11,  25 => 5,  21 => 2,  19 => 1,  98 => 31,  93 => 28,  88 => 31,  78 => 35,  46 => 7,  44 => 9,  40 => 7,  32 => 6,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 52,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 33,  95 => 28,  92 => 21,  86 => 39,  82 => 29,  80 => 19,  73 => 19,  64 => 16,  60 => 15,  57 => 19,  54 => 17,  51 => 11,  48 => 13,  45 => 8,  42 => 14,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
