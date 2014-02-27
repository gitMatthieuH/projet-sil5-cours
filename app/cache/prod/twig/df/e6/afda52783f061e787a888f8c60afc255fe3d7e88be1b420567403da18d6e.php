<?php

/* sil12VitrineBundle:Orderhat:index.html.twig */
class __TwigTemplate_dfe6afda52783f061e787a888f8c60afc255fe3d7e88be1b420567403da18d6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("sil12VitrineBundle:BackOffice:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
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
    ";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "</div>
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Mes commandes</h3>
            </div>
            <div class=\"panel-body\">
                <table class=\"records_list\">
                    <thead>
                        <tr>
                            <th>Référence</th>
                            <th>Date de la commande</th>
                            <th>Validé</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "                            <tr>
                                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orderhat_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 25
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "orderdate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "orderdate"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "validated"), "html", null, true);
            echo "</td>
                                <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orderhat_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">Voir</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orderhat_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">Editer</a>
                                    </li>
                                </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </tbody>
                </table>
                <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("orderhat_new");
        echo "\">
                    Ajouter une commande
                </a>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Orderhat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  120 => 53,  100 => 40,  139 => 43,  113 => 40,  23 => 3,  110 => 41,  104 => 37,  96 => 43,  76 => 33,  53 => 19,  180 => 81,  161 => 71,  146 => 64,  137 => 49,  118 => 49,  114 => 49,  84 => 32,  127 => 54,  77 => 29,  70 => 27,  65 => 26,  58 => 24,  52 => 23,  34 => 7,  145 => 48,  97 => 29,  83 => 26,  81 => 26,  74 => 28,  37 => 47,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 17,  128 => 58,  111 => 46,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  131 => 6,  119 => 51,  108 => 44,  102 => 32,  71 => 25,  67 => 29,  63 => 24,  59 => 22,  47 => 15,  29 => 4,  94 => 33,  89 => 33,  85 => 36,  79 => 27,  75 => 25,  68 => 29,  56 => 24,  50 => 18,  43 => 14,  28 => 3,  38 => 9,  24 => 3,  87 => 28,  72 => 25,  55 => 21,  41 => 12,  26 => 6,  35 => 6,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 73,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 52,  138 => 54,  136 => 42,  123 => 53,  121 => 42,  117 => 41,  115 => 43,  105 => 40,  101 => 32,  91 => 41,  69 => 24,  66 => 23,  62 => 22,  49 => 17,  25 => 5,  21 => 2,  19 => 1,  98 => 35,  93 => 32,  88 => 30,  78 => 34,  46 => 15,  44 => 12,  40 => 11,  32 => 5,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 67,  149 => 51,  147 => 54,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 43,  122 => 43,  116 => 41,  112 => 46,  109 => 34,  106 => 39,  103 => 50,  99 => 43,  95 => 30,  92 => 34,  86 => 39,  82 => 38,  80 => 32,  73 => 28,  64 => 26,  60 => 17,  57 => 22,  54 => 22,  51 => 11,  48 => 14,  45 => 7,  42 => 6,  39 => 11,  36 => 7,  33 => 11,  30 => 7,);
    }
}
