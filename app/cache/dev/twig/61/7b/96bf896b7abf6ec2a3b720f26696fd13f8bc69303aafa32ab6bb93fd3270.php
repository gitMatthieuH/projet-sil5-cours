<?php

/* sil12VitrineBundle:Category:show.html.twig */
class __TwigTemplate_617b96bf896b7abf6ec2a3b720f26696fd13f8bc69303aafa32ab6bb93fd3270 extends Twig_Template
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
        echo "
    <div class=\"col-md-6 col-md-offset-3\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Catégorie</h3>
            </div>
            <div class=\"panel-body\">
                <table class=\"record_properties\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>

                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("category");
        echo "\">
                            Retour à liste
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                            Editer
                        </a>
                    </li>
                    <li>";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
                </ul>
            </div>
        </div>  
    </div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  100 => 40,  113 => 40,  23 => 3,  110 => 41,  104 => 37,  76 => 36,  53 => 18,  180 => 81,  161 => 71,  146 => 64,  137 => 49,  118 => 49,  114 => 49,  84 => 32,  127 => 54,  77 => 29,  70 => 27,  65 => 26,  58 => 24,  34 => 7,  97 => 29,  81 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 17,  128 => 58,  107 => 36,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 51,  102 => 32,  71 => 25,  67 => 29,  63 => 24,  59 => 22,  94 => 33,  89 => 33,  85 => 36,  75 => 25,  68 => 29,  56 => 24,  28 => 4,  38 => 9,  24 => 3,  87 => 28,  26 => 6,  31 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 73,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 52,  138 => 54,  136 => 42,  121 => 42,  117 => 41,  105 => 40,  91 => 41,  62 => 22,  49 => 17,  25 => 5,  21 => 2,  19 => 1,  93 => 32,  88 => 30,  78 => 34,  46 => 14,  44 => 16,  27 => 4,  79 => 27,  72 => 25,  69 => 32,  47 => 15,  40 => 11,  37 => 47,  22 => 1,  246 => 90,  157 => 56,  145 => 48,  139 => 43,  131 => 6,  123 => 53,  120 => 53,  115 => 43,  111 => 46,  108 => 44,  101 => 32,  98 => 35,  96 => 43,  83 => 26,  74 => 28,  66 => 23,  55 => 21,  52 => 23,  50 => 18,  43 => 14,  41 => 12,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 67,  149 => 51,  147 => 54,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 43,  122 => 43,  116 => 41,  112 => 46,  109 => 34,  106 => 39,  103 => 50,  99 => 43,  95 => 30,  92 => 34,  86 => 39,  82 => 38,  80 => 32,  73 => 28,  64 => 26,  60 => 17,  57 => 22,  54 => 22,  51 => 20,  48 => 14,  45 => 7,  42 => 6,  39 => 10,  36 => 7,  33 => 11,  30 => 7,);
    }
}
