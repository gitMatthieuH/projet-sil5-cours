<?php

/* sil12VitrineBundle:Orderhat:show.html.twig */
class __TwigTemplate_4cbe365f465257541f670c4490c4d42f8291ef425b9e5ac414d27ea9cf071daf extends Twig_Template
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
            <h3 class=\"panel-title\">Voir une commande</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"record_properties\">
                <tbody>
                    <tr>
                        <th>Référence</th>
                        <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Order_date</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "orderdate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Validé</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "validated"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

            <ul class=\"record_actions\">
                <li>
                    <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("orderhat");
        echo "\">
                        Retour à la liste
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orderhat_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                        Editer
                    </a>
                </li>
                <li>";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
            </ul>
    </div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Orderhat:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 38,  75 => 34,  67 => 29,  57 => 22,  50 => 18,  43 => 14,  31 => 4,  28 => 3,);
    }
}
