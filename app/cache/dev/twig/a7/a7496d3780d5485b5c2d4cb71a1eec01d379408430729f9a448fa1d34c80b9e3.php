<?php

/* PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig */
class __TwigTemplate_eb958de39cd3b84063ed8240fe7ab00e424fadd0e225ed9752e5fc04c4f48bdf extends Twig_Template
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
        $__internal_f3f729e02a71e38fdea4f5b1f094f30933c1b2ef0dc3fd85ba045e6b45b443ad = $this->env->getExtension("native_profiler");
        $__internal_f3f729e02a71e38fdea4f5b1f094f30933c1b2ef0dc3fd85ba045e6b45b443ad->enter($__internal_f3f729e02a71e38fdea4f5b1f094f30933c1b2ef0dc3fd85ba045e6b45b443ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig"));

        // line 1
        echo "<table class=\"listeLegere\">
  \t   <caption>Descriptif des éléments hors forfait -";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nbjustificatifs"]) ? $context["nbjustificatifs"] : $this->getContext($context, "nbjustificatifs")), "html", null, true);
        echo " justificatifs reçus -
       </caption>
             <tr>
                <th class=\"date\">Date</th>
                <th class=\"libelle\">Libellé</th>
                <th class='montant'>Montant</th>                
             </tr>
         ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFrais"]) {
            // line 10
            echo "\t\t";
            $context["date"] = $this->getAttribute($context["unFrais"], "date", array());
            // line 11
            echo "                ";
            $context["libelle"] = $this->getAttribute($context["unFrais"], "libelle", array());
            // line 12
            echo "                ";
            $context["montant"] = $this->getAttribute($context["unFrais"], "montant", array());
            // line 13
            echo "                <tr>
                    <td>";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
                    <td>";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "</td>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "html", null, true);
            echo "</td>
                </tr>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  
    </table>
 ";
        
        $__internal_f3f729e02a71e38fdea4f5b1f094f30933c1b2ef0dc3fd85ba045e6b45b443ad->leave($__internal_f3f729e02a71e38fdea4f5b1f094f30933c1b2ef0dc3fd85ba045e6b45b443ad_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  59 => 16,  55 => 15,  51 => 14,  48 => 13,  45 => 12,  42 => 11,  39 => 10,  35 => 9,  25 => 2,  22 => 1,);
    }
}
/* <table class="listeLegere">*/
/*   	   <caption>Descriptif des éléments hors forfait -{{nbjustificatifs}} justificatifs reçus -*/
/*        </caption>*/
/*              <tr>*/
/*                 <th class="date">Date</th>*/
/*                 <th class="libelle">Libellé</th>*/
/*                 <th class='montant'>Montant</th>                */
/*              </tr>*/
/*          {% for unFrais in  lesfraishorsforfait %}*/
/* 		{% set date = unFrais.date%}*/
/*                 {% set libelle = unFrais.libelle%}*/
/*                 {% set montant = unFrais.montant%}*/
/*                 <tr>*/
/*                     <td>{{date}}</td>*/
/*                     <td>{{libelle}}</td>*/
/*                     <td>{{montant}}</td>*/
/*                 </tr>*/
/*            {% endfor %}  */
/*     </table>*/
/*  */
