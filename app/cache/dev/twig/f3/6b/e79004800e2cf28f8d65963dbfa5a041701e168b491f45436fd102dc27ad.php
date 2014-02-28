<?php

/* sil12VitrineBundle:Orderhat:new.html.twig */
class __TwigTemplate_f36be79004800e2cf28f8d65963dbfa5a041701e168b491f45436fd102dc27ad extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"col-md-6 col-md-offset-3\">
\t<div class=\"panel panel-default\">
\t    <div class=\"panel-heading\">
\t        <h3 class=\"panel-title\">Création d'une commande</h3>
\t    </div>
\t    <div class=\"panel-body\">
\t\t    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

\t\t    <ul class=\"record_actions\">
\t\t\t    <li>
\t\t\t        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("orderhat");
        echo "\">
\t\t\t            Back to the list
\t\t\t        </a>
\t\t\t    </li>
\t\t\t</ul>
\t    </div>
\t</div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Orderhat:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
