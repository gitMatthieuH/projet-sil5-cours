<?php

/* sil12VitrineBundle:BackOffice:index.html.twig */
class __TwigTemplate_b5e6234a9eed0837c4f8da8da2eb13f921aca78fcc64e0bddf1e9ae2354961a4 extends Twig_Template
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
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Back Office</h3>
        </div>
        <div class=\"panel-body\">
            Bienvenue sur le Back Office !
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:BackOffice:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
