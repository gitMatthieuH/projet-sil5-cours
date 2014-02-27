<?php

/* sil12VitrineBundle:Default:myorders_show.html.twig */
class __TwigTemplate_a0333caf13365d90a5349ee05eb815b1e668d1f2498a710df2cc30f9baf6b982 extends Twig_Template
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
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">Commande #";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"), "html", null, true);
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t        <tr>
\t\t\t        \t<th>Photo</th>
\t\t\t        \t<th>Nom</th>
\t\t\t        \t<th>Description</th>
\t\t\t        \t<th>Prix</th>
\t\t\t        \t<th>Quantité</th>
\t\t\t        </tr>
\t\t\t    </thead>
\t\t\t    <tbody>
\t\t\t    \t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["OrderLines"]) ? $context["OrderLines"] : $this->getContext($context, "OrderLines")));
        foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
            // line 22
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "id"), "html", null, true);
            echo ".png\" width=\"250px\"></td>
\t\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "name"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "description"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "price"), "html", null, true);
            echo " €</td>
\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "quantity"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t\t
\t\t\t   </tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Default:myorders_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  77 => 27,  73 => 26,  69 => 25,  65 => 24,  60 => 23,  57 => 22,  53 => 21,  36 => 7,  31 => 4,  28 => 3,);
    }
}
