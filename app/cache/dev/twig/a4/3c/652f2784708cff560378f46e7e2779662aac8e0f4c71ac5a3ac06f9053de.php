<?php

/* sil12VitrineBundle:Product:addprom.html.twig */
class __TwigTemplate_a43c652f2784708cff560378f46e7e2779662aac8e0f4c71ac5a3ac06f9053de extends Twig_Template
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
            <h3 class=\"panel-title\">Produit</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table record_properties\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Prix</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "price"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Label</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "label"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Stock</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stock"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

            <form role=\"form\" action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("product_promadded");
        echo "\" method=\"POST\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"hidden\" name=\"product\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "\">
\t\t\t\t\t<select name=\"prom\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proms"]) ? $context["proms"] : $this->getContext($context, "proms")));
        foreach ($context['_seq'] as $context["_key"] => $context["prom"]) {
            // line 44
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "name"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" value=\"Ajouter la promotion\">
\t\t\t\t</div>
\t\t\t</form>

            <ul class=\"record_actions\">
                <li>
                    <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("product");
        echo "\">
                        Retour à la liste
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                        Editer
                    </a>
                </li>
                <li>";
        // line 62
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
        return "sil12VitrineBundle:Product:addprom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 62,  128 => 58,  120 => 53,  111 => 46,  100 => 44,  96 => 43,  91 => 41,  86 => 39,  78 => 34,  71 => 30,  64 => 26,  57 => 22,  50 => 18,  43 => 14,  31 => 4,  28 => 3,);
    }
}
