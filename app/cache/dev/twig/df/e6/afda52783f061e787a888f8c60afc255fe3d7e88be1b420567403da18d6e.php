<?php

/* sil12VitrineBundle:Orderhat:index.html.twig */
class __TwigTemplate_dfe6afda52783f061e787a888f8c60afc255fe3d7e88be1b420567403da18d6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("sil12VitrineBundle:BackOffice:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
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
    ";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "</div>
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Mes commandes</h3>
            </div>
            <div class=\"panel-body\">
                <table class=\"records_list\">
                    <thead>
                        <tr>
                            <th>Référence</th>
                            <th>Date de la commande</th>
                            <th>Validé</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "                            <tr>
                                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orderhat_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 25
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "orderdate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "orderdate"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "validated"), "html", null, true);
            echo "</td>
                                <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orderhat_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Voir</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orderhat_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Editer</a>
                                    </li>
                                </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </tbody>
                </table>
                <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("orderhat_new");
        echo "\">
                    Ajouter une commande
                </a>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Orderhat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  106 => 39,  94 => 33,  88 => 30,  81 => 26,  75 => 25,  69 => 24,  66 => 23,  62 => 22,  45 => 7,  42 => 6,  37 => 47,  35 => 6,  32 => 5,  29 => 4,);
    }
}
