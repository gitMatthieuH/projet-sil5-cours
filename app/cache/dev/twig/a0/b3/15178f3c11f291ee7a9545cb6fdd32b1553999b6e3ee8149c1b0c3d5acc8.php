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
        echo "<div class=\"col-md-6 col-md-offset-3\">
\t
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">Panier :</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<table class=\"table table-striped\">
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
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")));
        foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
            // line 23
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "id"), "html", null, true);
            echo ".jpg\" width=\"250px\"></td>
\t\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "name"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "description"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "price"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td  style=\"text-align:center\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_contenuPanier", array("id" => $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "id"), "type" => "del")), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-default btn-xs\">-</a>
\t\t\t\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "qte"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_contenuPanier", array("id" => $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "id"), "type" => "add")), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-default btn-xs\">+</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_contenuPanier", array("id" => $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "id"), "type" => "rem")), "html", null, true);
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
        // line 38
        echo "\t\t\t   </tbody>
\t\t\t</table>
\t\t\t<a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_validationPanier");
        echo "\" type=\"button\" class=\"btn btn-primary btn-lg pull-right\" ";
        if ((twig_length_filter($this->env, (isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier"))) < 1)) {
            echo "disabled";
        }
        echo ">Commander</a>
\t\t</div>
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
        return array (  104 => 40,  100 => 38,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  71 => 27,  67 => 26,  63 => 25,  58 => 24,  55 => 23,  51 => 22,  31 => 4,  28 => 3,);
    }
}
