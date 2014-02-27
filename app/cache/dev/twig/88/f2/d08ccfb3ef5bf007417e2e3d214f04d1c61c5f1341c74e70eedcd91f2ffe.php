<?php

/* sil12VitrineBundle:Product:edit.html.twig */
class __TwigTemplate_88f2d08ccfb3ef5bf007417e2e3d214f04d1c61c5f1341c74e70eedcd91f2ffe extends Twig_Template
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
        echo "<div class=\"col-md-6 col-md-offset-3\">
\t<div class=\"panel panel-default\">
\t    <div class=\"panel-heading\">
\t        <h3 class=\"panel-title\">Edition du produit</h3>
\t    </div>
\t    <div class=\"panel-body\">
\t\t    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

\t        <ul class=\"record_actions\">
\t\t\t    <li>
\t\t\t        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("product");
        echo "\">
\t\t\t            Retour à la\tliste
\t\t\t        </a>
\t\t\t    </li>
\t\t\t    <li>";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
\t\t\t</ul>
\t    </div>
\t</div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  46 => 15,  39 => 11,  31 => 5,  28 => 4,);
    }
}
