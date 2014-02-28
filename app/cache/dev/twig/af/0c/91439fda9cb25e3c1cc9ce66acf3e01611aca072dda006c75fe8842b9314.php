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
\t<ol class=\"breadcrumb\">
\t  <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_accueil");
        echo "\">Accueil</a></li>
\t</ol>
\t<div class=\"row\">\t\t
\t\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t    <div class=\"thumbnail\">
\t\t\t    \t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_articlesParCategorie", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<h3>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sil12vitrine/images/categories/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "html", null, true);
            echo ".jpg\" height=\"127\">
\t\t\t\t\t</a>
\t\t\t    </div>
\t\t\t</div>  
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
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
        return array (  69 => 19,  57 => 14,  53 => 13,  49 => 12,  45 => 10,  41 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}
