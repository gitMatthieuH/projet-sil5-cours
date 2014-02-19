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

\t\t";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "\t\t\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 15
        echo "\t\t<form class=\"form-inline\" action=\"";
        echo $this->env->getExtension('routing')->getPath("auth_check");
        echo "\" method=\"post\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<label class=\"sr-only\" for=\"username\">Login :</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<label class=\"sr-only\" for=\"password\">Mot de passe :</label>
\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"/accueil\" />
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
\t\t</form>


    </div>
</div>



";
        // line 38
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("sil12VitrineBundle:Client:new"));
        echo "
  
 </div>

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
        return array (  79 => 38,  57 => 19,  49 => 15,  43 => 13,  41 => 12,  31 => 4,  28 => 3,);
    }
}
