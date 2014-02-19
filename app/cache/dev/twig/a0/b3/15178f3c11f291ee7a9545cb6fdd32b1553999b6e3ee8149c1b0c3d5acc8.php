<?php

/* sil12VitrineBundle:Panier:panier.html.twig */
class __TwigTemplate_a0b315178f3c11f291ee7a9545cb6fdd32b1553999b6e3ee8149c1b0c3d5acc8 extends Twig_Template
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
        echo "
<div class=\"col-md-6 col-md-offset-3\">
\t
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">Panier</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier"))) < 1)) {
            echo "Votre panier est vide";
        } else {
            // line 13
            echo "\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t        <tr>
\t\t\t        \t<th>Photo</th>
\t\t\t        \t<th>Nom</th>
\t\t\t        \t<th>Description</th>
\t\t\t        \t<th>Prix</th>
\t\t\t        \t<th width=\"100\">Quantité</th>
\t\t\t        </tr>
\t\t\t    </thead>
\t\t\t    <tbody>
\t\t\t    \t";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")));
            foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
                // line 25
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "id"), "html", null, true);
                echo ".png\" width=\"250px\"></td>
\t\t\t\t\t\t\t<td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "name"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "description"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "price"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:center\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_deleteProduct", array("id" => $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "id"), "qte" => 1)), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-default btn-xs\">-</a>
\t\t\t\t\t\t\t\t";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "qte"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_addProduct", array("id" => $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "id"), "qte" => 1)), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-default btn-xs\">+</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_removeProduct", array("id" => $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "id"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t   </tbody>
\t\t\t</table>
\t\t\t<div class=\"pull-right\">
\t\t\t\t<b>Total : </b>";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo " €
\t\t\t</div><br>
\t\t\t<a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("sil12_vitrine_validationPanier");
            echo "\" type=\"button\" class=\"btn btn-primary btn-lg pull-right\">Commander</a>
\t\t\t";
        }
        // line 47
        echo "\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Panier:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 47,  117 => 45,  112 => 43,  107 => 40,  95 => 34,  91 => 33,  87 => 32,  83 => 31,  78 => 29,  74 => 28,  70 => 27,  65 => 26,  62 => 25,  58 => 24,  45 => 13,  41 => 12,  31 => 4,  28 => 3,);
    }
}
