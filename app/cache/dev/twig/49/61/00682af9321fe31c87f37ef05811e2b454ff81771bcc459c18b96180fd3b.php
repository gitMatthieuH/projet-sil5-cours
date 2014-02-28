<?php

/* sil12VitrineBundle:Category:new.html.twig */
class __TwigTemplate_496100682af9321fe31c87f37ef05811e2b454ff81771bcc459c18b96180fd3b extends Twig_Template
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
            <h3 class=\"panel-title\">Ajouter une catégorie</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

            <ul class=\"record_actions\">
\t\t\t    <li>
\t\t\t        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("category");
        echo "\">
\t\t\t            Retour à la liste
\t\t\t        </a>
\t\t\t    </li>
\t\t\t</ul>
        </div>
    </div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Category:new.html.twig";
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
