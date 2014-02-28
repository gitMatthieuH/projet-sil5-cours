<?php

/* sil12VitrineBundle:Product:new.html.twig */
class __TwigTemplate_83d0ebc6bfe58b2b425a049f4c67e7b719a899dbf0ac54c83b6978ac75f06df0 extends Twig_Template
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
    \t <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Ajout d'un produit</h3>
        </div>
        <div class=\"panel-body\">

\t    \t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

\t        <ul class=\"record_actions\">
\t\t\t    <li>
\t\t\t        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("product");
        echo "\">
\t\t\t            Retour à la liste
\t\t\t        </a>
\t\t\t    </li>
\t\t\t</ul>
\t\t</div>
    </div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Product:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  40 => 11,  31 => 4,  28 => 3,);
    }
}
