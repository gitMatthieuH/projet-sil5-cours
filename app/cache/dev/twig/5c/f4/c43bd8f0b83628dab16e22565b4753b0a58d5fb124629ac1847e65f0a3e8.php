<?php

/* sil12VitrineBundle:Default:auth.html.twig */
class __TwigTemplate_5cf4c43bd8f0b83628dab16e22565b4753b0a58d5fb124629ac1847e65f0a3e8 extends Twig_Template
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

  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">Authentification</h3>
    </div>
    <div class=\"panel-body\">
      ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), 'form');
        echo "
    </div>
</div>


";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("sil12VitrineBundle:Client:new"));
        echo "
  
  

";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Default:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  40 => 11,  31 => 4,  28 => 3,);
    }
}
