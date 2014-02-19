<?php

/* BraincraftedBootstrapBundle::flash.html.twig */
class __TwigTemplate_7d5b857191e13386ba83ef92ed164e067f90c88dadc2c58fa34ed89cdf7140e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((!array_key_exists("translation_domain", $context))) {
            // line 2
            echo "    ";
            $context["translation_domain"] = null;
        }
        // line 4
        if ((!array_key_exists("close", $context))) {
            // line 5
            echo "    ";
            $context["close"] = false;
        }
        // line 7
        echo "
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "    <div class=\"alert alert-warning\">
        ";
            // line 10
            if ((isset($context["close"]) ? $context["close"] : null)) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flashMessage"]) ? $context["flashMessage"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "    <div class=\"alert alert-danger\">
        ";
            // line 17
            if ((isset($context["close"]) ? $context["close"] : null)) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flashMessage"]) ? $context["flashMessage"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "    <div class=\"alert alert-info\">
        ";
            // line 24
            if ((isset($context["close"]) ? $context["close"] : null)) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 25
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flashMessage"]) ? $context["flashMessage"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "    <div class=\"alert alert-success\">
        ";
            // line 31
            if ((isset($context["close"]) ? $context["close"] : null)) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flashMessage"]) ? $context["flashMessage"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle::flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 60,  211 => 56,  206 => 54,  200 => 52,  192 => 50,  174 => 44,  137 => 33,  190 => 49,  186 => 58,  180 => 46,  172 => 53,  150 => 37,  146 => 45,  118 => 38,  114 => 27,  110 => 30,  104 => 45,  70 => 24,  77 => 17,  23 => 1,  84 => 37,  74 => 16,  37 => 8,  100 => 42,  65 => 17,  53 => 18,  165 => 72,  160 => 70,  153 => 66,  145 => 63,  113 => 31,  83 => 26,  52 => 12,  134 => 42,  126 => 40,  120 => 5,  81 => 25,  76 => 26,  34 => 8,  90 => 31,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 34,  132 => 51,  128 => 49,  111 => 26,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 58,  217 => 75,  208 => 68,  204 => 72,  179 => 80,  159 => 40,  143 => 56,  135 => 53,  131 => 31,  119 => 42,  108 => 25,  102 => 34,  71 => 30,  67 => 24,  63 => 6,  59 => 22,  47 => 10,  29 => 5,  94 => 32,  89 => 24,  85 => 32,  79 => 21,  75 => 24,  68 => 24,  56 => 21,  50 => 11,  43 => 10,  28 => 6,  38 => 9,  24 => 3,  87 => 25,  72 => 25,  55 => 14,  41 => 10,  26 => 4,  35 => 10,  31 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 42,  163 => 41,  158 => 48,  156 => 39,  151 => 63,  142 => 35,  138 => 43,  136 => 59,  123 => 29,  121 => 28,  117 => 32,  115 => 43,  105 => 41,  101 => 39,  91 => 27,  69 => 18,  66 => 22,  62 => 16,  49 => 14,  25 => 4,  21 => 2,  19 => 1,  98 => 33,  93 => 25,  88 => 29,  78 => 34,  46 => 17,  44 => 16,  40 => 9,  32 => 6,  27 => 5,  22 => 1,  209 => 55,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 48,  182 => 66,  176 => 54,  173 => 65,  168 => 52,  164 => 59,  162 => 49,  154 => 47,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 39,  116 => 41,  112 => 42,  109 => 34,  106 => 29,  103 => 28,  99 => 21,  95 => 28,  92 => 42,  86 => 23,  82 => 22,  80 => 19,  73 => 28,  64 => 14,  60 => 22,  57 => 19,  54 => 17,  51 => 11,  48 => 19,  45 => 11,  42 => 16,  39 => 10,  36 => 13,  33 => 6,  30 => 7,);
    }
}
