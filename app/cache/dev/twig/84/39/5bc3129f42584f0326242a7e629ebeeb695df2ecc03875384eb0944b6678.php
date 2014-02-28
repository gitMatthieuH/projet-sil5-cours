<?php

/* sil12VitrineBundle:Default:myorders.html.twig */
class __TwigTemplate_84395bc3129f42584f0326242a7e629ebeeb695df2ecc03875384eb0944b6678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("sil12VitrineBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"col-md-6 col-md-offset-3\">
    ";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 33
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
                <table class=\"table records_list\">
                    <thead>
                        <tr>
                            <th>Référence</th>
                            <th>Date de la commande</th>
                            <th>Etat de la commande</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "                            <tr>
                                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sil12_vitrine_myorders_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 24
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "orderdate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "orderdate"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 25
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "validated") == 1)) {
                echo " Validée ";
            } else {
                echo " Non validée ";
            }
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Default:myorders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  80 => 25,  74 => 24,  68 => 23,  65 => 22,  61 => 21,  45 => 7,  42 => 6,  37 => 33,  35 => 6,  32 => 5,  29 => 4,);
    }
}
