<?php

/* sil12VitrineBundle:Default:chapeau.html.twig */
class __TwigTemplate_614ee9d373cb9725c6eb208cbc015d7eb1ea8f9563a4665cfb9f28bfc1d27226 extends Twig_Template
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

\t\t<div class=\"panel-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div style=\"text-align:center;\"><h3 style=\"font-family:'Lobster';font-size:4rem;\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : null), "name"), "html", null, true);
        echo "</h3></div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t";
        // line 11
        if (($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : null), "stock") <= 0)) {
            // line 12
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">Cet article n'est plus en stock !</div>
\t\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t\t<a href=\"#\" class=\"thumbnail\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : null), "id"), "html", null, true);
        echo ".png\" width=\"650px\"></a>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t
\t\t\t\t\t\t<p><b>Description : </b>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : null), "description"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t";
        // line 21
        if ((twig_length_filter($this->env, (isset($context["proms"]) ? $context["proms"] : null)) > 0)) {
            // line 22
            echo "\t\t\t\t\t\t\t";
            $context["price"] = $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : null), "price");
            // line 23
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proms"]) ? $context["proms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["prom"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t<b>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : null), "name"), "html", null, true);
                echo " -";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : null), "reduction"), "html", null, true);
                echo "% !</b>
\t\t\t\t\t\t\t\t";
                // line 25
                $context["price"] = ((isset($context["price"]) ? $context["price"] : null) - ((isset($context["price"]) ? $context["price"] : null) / $this->getAttribute((isset($context["prom"]) ? $context["prom"] : null), "reduction")));
                // line 26
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t\t\t\t\t\t<p><b>Prix : </b><s>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : null), "price"), "html", null, true);
            echo "€</s>    <span class=\"new-price\"><b>";
            echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
            echo "€</b></span></p>
\t\t\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t\t\t<p><b>Prix : </b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : null), "price"), "html", null, true);
            echo " €</p>
\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<form role=\"form\" action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_shareProduct");
        echo "\" method=\"POST\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : null), "id"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Adresse mail\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" value=\"Partager la fiche produit\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_addProduct", array("id" => $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : null), "id"), "qte" => 1)), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary btn-lg btn-block\" ";
        if (($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : null), "stock") <= 0)) {
            echo "disabled";
        }
        echo ">Ajouter au panier</a>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boughtWith"]) ? $context["boughtWith"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context[" product"]) {
            // line 46
            echo "\t\tid :";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context[" product"]) ? $context[" product"] : null), "id"), "html", null, true);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context[' product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t
</div>

";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Default:chapeau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  97 => 29,  83 => 26,  81 => 25,  74 => 24,  37 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 45,  128 => 49,  111 => 34,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 39,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 17,  29 => 3,  94 => 28,  89 => 27,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  43 => 11,  28 => 3,  38 => 9,  24 => 3,  87 => 25,  72 => 16,  55 => 15,  41 => 7,  26 => 6,  35 => 5,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 46,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 23,  66 => 22,  62 => 23,  49 => 14,  25 => 5,  21 => 2,  19 => 1,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  40 => 7,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 32,  103 => 31,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 27,  64 => 21,  60 => 20,  57 => 11,  54 => 10,  51 => 18,  48 => 13,  45 => 12,  42 => 7,  39 => 9,  36 => 5,  33 => 9,  30 => 7,);
    }
}
