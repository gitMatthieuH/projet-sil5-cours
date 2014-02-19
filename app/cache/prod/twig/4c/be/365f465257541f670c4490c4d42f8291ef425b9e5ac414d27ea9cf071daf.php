<?php

/* sil12VitrineBundle:Orderhat:show.html.twig */
class __TwigTemplate_4cbe365f465257541f670c4490c4d42f8291ef425b9e5ac414d27ea9cf071daf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Orderhat</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Référence</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Order_date</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "orderdate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Validated</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "validated"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("orderhat");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orderhat_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Orderhat:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 45,  70 => 24,  77 => 30,  23 => 1,  84 => 37,  74 => 25,  37 => 12,  100 => 42,  65 => 26,  53 => 18,  165 => 72,  160 => 70,  153 => 66,  145 => 63,  113 => 49,  83 => 26,  52 => 23,  134 => 41,  126 => 6,  120 => 5,  81 => 31,  76 => 22,  34 => 7,  90 => 31,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 80,  159 => 61,  143 => 56,  135 => 53,  131 => 40,  119 => 42,  108 => 47,  102 => 39,  71 => 30,  67 => 24,  63 => 25,  59 => 22,  47 => 10,  29 => 5,  94 => 37,  89 => 33,  85 => 32,  79 => 27,  75 => 26,  68 => 27,  56 => 24,  50 => 10,  43 => 9,  28 => 3,  38 => 6,  24 => 3,  87 => 25,  72 => 28,  55 => 21,  41 => 6,  26 => 6,  35 => 6,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  123 => 47,  121 => 46,  117 => 49,  115 => 43,  105 => 41,  101 => 39,  91 => 27,  69 => 27,  66 => 20,  62 => 23,  49 => 14,  25 => 5,  21 => 2,  19 => 1,  98 => 40,  93 => 28,  88 => 30,  78 => 34,  46 => 14,  44 => 11,  40 => 7,  32 => 6,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 52,  116 => 41,  112 => 42,  109 => 34,  106 => 43,  103 => 32,  99 => 46,  95 => 28,  92 => 42,  86 => 39,  82 => 29,  80 => 19,  73 => 28,  64 => 26,  60 => 17,  57 => 19,  54 => 17,  51 => 11,  48 => 13,  45 => 8,  42 => 10,  39 => 10,  36 => 7,  33 => 6,  30 => 7,);
    }
}
