<?php

/* sil12VitrineBundle:Promotion:show.html.twig */
class __TwigTemplate_59bb2bdc5b6e791f0547ffc08a073a6c068e635bd227a3d94de02548b860b668 extends Twig_Template
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
        echo "<div class=\"col-md-6 col-md-offset-3\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Promotion</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"record_properties\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Reduction</th>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reduction"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Usagelimit</th>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usageLimit"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Used</th>
                        <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "used"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Coupon</th>
                        <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "coupon"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Start</th>
                        <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "start"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>End</th>
                        <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "end"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Manytomany</th>
                        <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "manyToMany"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

            <ul class=\"record_actions\">
                <li>
                    <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("promotion");
        echo "\">
                        Back to the list
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("promotion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                        Edit
                    </a>
                </li>
                <li>";
        // line 67
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
        return "sil12VitrineBundle:Promotion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 67,  124 => 63,  116 => 58,  106 => 51,  99 => 47,  92 => 43,  85 => 39,  78 => 35,  71 => 31,  64 => 27,  57 => 23,  50 => 19,  43 => 15,  31 => 5,  28 => 4,);
    }
}
