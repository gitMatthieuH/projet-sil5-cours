<?php

/* BraincraftedBootstrapBundle:Pagination:bootstrap.html.twig */
class __TwigTemplate_a3d7478bde215ded466a37c268e9359fdf21d03b59ba42bbc99f763999fb216d extends Twig_Template
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
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "")) : (""));
        // line 2
        echo "
";
        // line 3
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
            // line 4
            echo "    ";
            if ((array_key_exists("style", $context) && ((isset($context["style"]) ? $context["style"] : null) == "pager"))) {
                // line 5
                echo "
        ";
                // line 6
                $context["prev_label"] = ((array_key_exists("prev_label", $context)) ? (_twig_default_filter((isset($context["prev_label"]) ? $context["prev_label"] : null), "Previous")) : ("Previous"));
                // line 7
                echo "        ";
                $context["next_label"] = ((array_key_exists("next_label", $context)) ? (_twig_default_filter((isset($context["next_label"]) ? $context["next_label"] : null), "Next")) : ("Next"));
                // line 8
                echo "        ";
                $context["aligned"] = ((array_key_exists("aligned", $context)) ? (_twig_default_filter((isset($context["aligned"]) ? $context["aligned"] : null), false)) : (false));
                // line 9
                echo "
        <ul class=\"pager";
                // line 10
                if ((!twig_test_empty((isset($context["class"]) ? $context["class"] : null)))) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                }
                echo "\">
            ";
                // line 11
                if (array_key_exists("previous", $context)) {
                    // line 12
                    echo "                <li";
                    if ((isset($context["aligned"]) ? $context["aligned"] : null)) {
                        echo " class=\"previous\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["previous"]) ? $context["previous"] : null)))), "html", null, true);
                    echo "\">";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : null);
                    echo "</a></li>
            ";
                } else {
                    // line 14
                    echo "                <li class=\"disabled";
                    if ((isset($context["aligned"]) ? $context["aligned"] : null)) {
                        echo " previous";
                    }
                    echo "\"><span>";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : null);
                    echo "</span></li>
            ";
                }
                // line 16
                echo "            ";
                if (array_key_exists("next", $context)) {
                    // line 17
                    echo "                <li";
                    if ((isset($context["aligned"]) ? $context["aligned"] : null)) {
                        echo " class=\"next\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["next"]) ? $context["next"] : null)))), "html", null, true);
                    echo "\">";
                    echo (isset($context["next_label"]) ? $context["next_label"] : null);
                    echo "</a></li>
            ";
                } else {
                    // line 19
                    echo "                <li class=\"disabled";
                    if ((isset($context["aligned"]) ? $context["aligned"] : null)) {
                        echo " next";
                    }
                    echo "\"><span>";
                    echo (isset($context["next_label"]) ? $context["next_label"] : null);
                    echo "</span></li>
            ";
                }
                // line 21
                echo "        </ul>
    ";
            } else {
                // line 23
                echo "
        ";
                // line 24
                $context["prev_label"] = ((array_key_exists("prev_label", $context)) ? (_twig_default_filter((isset($context["prev_label"]) ? $context["prev_label"] : null), "&laquo;")) : ("&laquo;"));
                // line 25
                echo "        ";
                $context["next_label"] = ((array_key_exists("next_label", $context)) ? (_twig_default_filter((isset($context["next_label"]) ? $context["next_label"] : null), "&raquo;")) : ("&raquo;"));
                // line 26
                echo "
        <ul class=\"pagination";
                // line 27
                if ((!twig_test_empty((isset($context["class"]) ? $context["class"] : null)))) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                }
                echo "\">
            ";
                // line 28
                if (((array_key_exists("first_label", $context) && array_key_exists("first", $context)) && ((isset($context["current"]) ? $context["current"] : null) != (isset($context["first"]) ? $context["first"] : null)))) {
                    // line 29
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["first"]) ? $context["first"] : null)))), "html", null, true);
                    echo "\">";
                    echo (isset($context["first_label"]) ? $context["first_label"] : null);
                    echo "</a></li>
            ";
                } elseif (array_key_exists("last_label", $context)) {
                    // line 31
                    echo "                <li class=\"disabled\"><span>";
                    echo (isset($context["first_label"]) ? $context["first_label"] : null);
                    echo "</span></li>
            ";
                }
                // line 33
                echo "
            ";
                // line 34
                if (array_key_exists("previous", $context)) {
                    // line 35
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["previous"]) ? $context["previous"] : null)))), "html", null, true);
                    echo "\">";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : null);
                    echo "</a></li>
            ";
                } else {
                    // line 37
                    echo "                <li class=\"disabled\"><span>";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : null);
                    echo "</span></li>
            ";
                }
                // line 39
                echo "
            ";
                // line 40
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 41
                    echo "                ";
                    if (((isset($context["page"]) ? $context["page"] : null) != (isset($context["current"]) ? $context["current"] : null))) {
                        // line 42
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["page"]) ? $context["page"] : null)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                        echo "</a></li>
                ";
                    } else {
                        // line 44
                        echo "                    <li class=\"active\"><span>";
                        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                        echo "</span></li>
                ";
                    }
                    // line 46
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "
            ";
                // line 49
                if (array_key_exists("next", $context)) {
                    // line 50
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["next"]) ? $context["next"] : null)))), "html", null, true);
                    echo "\">";
                    echo (isset($context["next_label"]) ? $context["next_label"] : null);
                    echo "</a></li>
            ";
                } else {
                    // line 52
                    echo "                <li class=\"disabled\"><span>";
                    echo (isset($context["next_label"]) ? $context["next_label"] : null);
                    echo "</span></li>
            ";
                }
                // line 54
                echo "
            ";
                // line 55
                if (((array_key_exists("last_label", $context) && array_key_exists("last", $context)) && ((isset($context["current"]) ? $context["current"] : null) != (isset($context["last"]) ? $context["last"] : null)))) {
                    // line 56
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["last"]) ? $context["last"] : null)))), "html", null, true);
                    echo "\">";
                    echo (isset($context["last_label"]) ? $context["last_label"] : null);
                    echo "</a></li>
            ";
                } elseif (array_key_exists("last_label", $context)) {
                    // line 58
                    echo "                <li class=\"disabled\"><span>";
                    echo (isset($context["last_label"]) ? $context["last_label"] : null);
                    echo "</span></li>
            ";
                }
                // line 60
                echo "        </ul>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Pagination:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 60,  211 => 56,  206 => 54,  200 => 52,  192 => 50,  174 => 44,  190 => 49,  186 => 58,  172 => 53,  150 => 37,  134 => 42,  90 => 31,  126 => 40,  152 => 56,  120 => 58,  100 => 40,  139 => 43,  113 => 40,  23 => 1,  110 => 36,  104 => 37,  96 => 43,  76 => 26,  53 => 5,  180 => 46,  161 => 71,  146 => 45,  137 => 33,  118 => 38,  114 => 27,  84 => 32,  127 => 62,  77 => 17,  70 => 27,  65 => 26,  58 => 24,  52 => 12,  34 => 7,  145 => 48,  97 => 29,  83 => 26,  81 => 30,  74 => 16,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 34,  132 => 17,  128 => 58,  111 => 26,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 58,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 40,  143 => 56,  135 => 62,  131 => 31,  119 => 51,  108 => 25,  102 => 34,  71 => 25,  67 => 26,  63 => 6,  59 => 25,  47 => 12,  29 => 5,  94 => 32,  89 => 19,  85 => 31,  79 => 27,  75 => 25,  68 => 24,  56 => 21,  50 => 11,  43 => 10,  28 => 6,  38 => 9,  24 => 3,  87 => 28,  72 => 25,  55 => 20,  41 => 12,  26 => 4,  35 => 10,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 42,  163 => 41,  158 => 48,  156 => 39,  151 => 63,  142 => 35,  138 => 43,  136 => 42,  123 => 29,  121 => 28,  117 => 41,  115 => 43,  105 => 40,  101 => 34,  91 => 41,  69 => 16,  66 => 23,  62 => 22,  49 => 14,  25 => 5,  21 => 2,  19 => 1,  98 => 33,  93 => 40,  88 => 38,  78 => 34,  46 => 17,  44 => 16,  40 => 9,  32 => 6,  27 => 4,  22 => 1,  209 => 55,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 48,  182 => 66,  176 => 54,  173 => 65,  168 => 52,  164 => 59,  162 => 49,  154 => 47,  149 => 51,  147 => 54,  144 => 49,  141 => 48,  133 => 52,  130 => 41,  125 => 43,  122 => 39,  116 => 41,  112 => 53,  109 => 34,  106 => 24,  103 => 23,  99 => 21,  95 => 33,  92 => 34,  86 => 30,  82 => 29,  80 => 32,  73 => 28,  64 => 14,  60 => 22,  57 => 22,  54 => 22,  51 => 20,  48 => 16,  45 => 7,  42 => 16,  39 => 10,  36 => 13,  33 => 6,  30 => 7,);
    }
}
