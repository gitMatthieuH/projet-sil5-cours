<?php

/* sil12VitrineBundle:Default:mentions.html.twig */
class __TwigTemplate_69f6768d4a300b9080a1599590889b94a4dce6f03109c3a42419df6bf4342234 extends Twig_Template
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
\t<div class=\"panel panel-default\">
\t    <div class=\"panel-heading\">
\t        <h3 class=\"panel-title\">Mentions légales</h3>
\t    </div>
\t    <div class=\"panel-body\">
\t\t\t<h4>Société HATme SAS</h4>

\t\t\t<p>Société par Actions Simplifiées au capital de 15 000 euros, ayant son siège social au 75 rue Ampère - 38000 GRENOBLE, immatriculée au RCS de Grenoble sous le numéro 79889651000012.<br>
\t\t\tNuméro de TVA Intracommunautaire : FR 798 896 510</p>

\t\t\t<h4>Contactez nous</h4>

\t\t\t<p>Tél : 06.78.28.00.85<br>
\t\t\tPar email : matthieu.hostache@gmail.com<br>
\t\t\tDirecteur de la publication : Monsieur Matthieu Hostache, ayant la qualité de président de la société HATme SAS</p>

\t\t\t<p>Hébergement du site HATme.COM</p>

\t\t\t<p>HATme SAS</p>
\t    </div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Default:mentions.html.twig";
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
