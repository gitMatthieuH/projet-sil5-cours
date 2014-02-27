<?php

/* sil12VitrineBundle:Email:validationPanier.txt.twig */
class __TwigTemplate_c066bec0118a22343eea5844f67074669ae1db7488ec3cf8902d47747149bedc extends Twig_Template
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
        echo "<h3 class=\"panel-title\">Récapitulatif de votre commande (ref #";
        echo $this->getAttribute((isset($context["orderHat"]) ? $context["orderHat"] : $this->getContext($context, "orderHat")), "id");
        echo ") d'un total de ";
        echo (isset($context["totalPrice"]) ? $context["totalPrice"] : $this->getContext($context, "totalPrice"));
        echo " € :</h3>
<table class=\"table table-striped\">
\t<thead>
        <tr>
        \t<th>Nom</th>
        \t<th>Description</th>
        \t<th>Prix</th>
        \t<th>Quantité</th>
        </tr>
    </thead>
    <tbody>
    \t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")));
        foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
            // line 13
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 14
            echo $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "name");
            echo "</td>
\t\t\t\t<td>";
            // line 15
            echo $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "description");
            echo "</td>
\t\t\t\t";
            // line 16
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "proms")) > 0)) {
                // line 17
                echo "\t\t\t\t\t";
                $context["price"] = $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "price");
                // line 18
                echo "\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "proms"));
                foreach ($context['_seq'] as $context["_key"] => $context["prom"]) {
                    // line 19
                    echo "\t\t\t\t\t\t";
                    $context["price"] = ((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) - ((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) / $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "reduction")));
                    // line 20
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prom'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "\t\t\t\t\t<td>";
                echo (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price"));
                echo " €</td>
\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t<td>";
                echo $this->getAttribute($this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "product"), "price");
                echo " €</td>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t<td>";
            echo $this->getAttribute((isset($context["elem"]) ? $context["elem"] : $this->getContext($context, "elem")), "qte");
            echo "</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t
   </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Email:validationPanier.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  82 => 25,  76 => 23,  70 => 21,  64 => 20,  61 => 19,  56 => 18,  53 => 17,  51 => 16,  47 => 15,  43 => 14,  40 => 13,  36 => 12,  19 => 1,);
    }
}
