<?php

/* sil12VitrineBundle:Orderhat:edit.html.twig */
class __TwigTemplate_bd96a2fcf2946635d920d780e9970ef108bcf8f7bddc4cbec30268b2907eb8d5 extends Twig_Template
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
\t        <h3 class=\"panel-title\">Edition d'une commande</h3>
\t    </div>
\t    <div class=\"panel-body\">
\t\t    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

\t\t    <ul class=\"record_actions\">
\t\t\t    <li>
\t\t\t        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("orderhat");
        echo "\">
\t\t\t            Retour à la liste
\t\t\t        </a>
\t\t\t    </li>
\t\t\t    <li>";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
\t\t\t</ul>
\t</div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Orderhat:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
