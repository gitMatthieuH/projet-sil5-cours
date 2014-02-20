<?php

/* sil12VitrineBundle:Default:footer.html.twig */
class __TwigTemplate_7101f527360e1a371ea18ff7f7262c014f1670afb195304bfe580c2bfcd18106 extends Twig_Template
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
        echo "<div class=\"footer navbar-fixed-bottom\" id=\"footer\">
  <div class=\"container\">
    <p class=\"text-muted\"><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("sil12_vitrine_mentions");
        echo "\">Mentions Légales</a></p>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
