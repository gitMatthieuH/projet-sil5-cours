<?php

/* sil12VitrineBundle:Client:new.html.twig */
class __TwigTemplate_b121a34903583e80eb1c68718d579da008c6608990b74c8ca33f481a908f35d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("client");
        echo "\">
    Back to the list
</a>


<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">Inscription</h3>
    </div>
    <div class=\"panel-body\">
      \t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors', array("global_errors" => true));
        echo "
      \t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>



";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Client:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  33 => 11,  19 => 1,  79 => 38,  57 => 19,  49 => 15,  43 => 13,  41 => 13,  31 => 4,  28 => 3,);
    }
}
