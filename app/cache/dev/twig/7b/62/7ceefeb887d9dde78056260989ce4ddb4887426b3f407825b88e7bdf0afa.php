<?php

/* sil12VitrineBundle:Category:edit.html.twig */
class __TwigTemplate_7b627ceefeb887d9dde78056260989ce4ddb4887426b3f407825b88e7bdf0afa extends Twig_Template
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
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Liste des catégories</h3>
        </div>
        <div class=\"panel-body\">
            <h1>Edition de catégorie</h1>

    \t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

\t        <ul class=\"record_actions\">
\t\t\t    <li>
\t\t\t        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("category");
        echo "\">
\t\t\t            Retour à liste
\t\t\t        </a>
\t\t\t    </li>
\t\t\t\t    <li>";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
\t\t\t</ul>
        </div>
    </div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  48 => 16,  41 => 12,  31 => 4,  28 => 3,);
    }
}
