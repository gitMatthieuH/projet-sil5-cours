<?php

/* sil12VitrineBundle:Category:show.html.twig */
class __TwigTemplate_617b96bf896b7abf6ec2a3b720f26696fd13f8bc69303aafa32ab6bb93fd3270 extends Twig_Template
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
        echo "
    <div class=\"col-md-6 col-md-offset-3\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Catégorie</h3>
            </div>
            <div class=\"panel-body\">
                <table class=\"table record_properties\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>

                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("category");
        echo "\">
                            Retour à liste
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                            Editer
                        </a>
                    </li>
                    <li>";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
                </ul>
            </div>
        </div>  
    </div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 36,  69 => 32,  61 => 27,  51 => 20,  44 => 16,  31 => 5,  28 => 4,);
    }
}
