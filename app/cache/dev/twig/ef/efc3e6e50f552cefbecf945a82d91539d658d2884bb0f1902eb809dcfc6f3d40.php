<?php

/* PgGsbFraisBundle:ListeVehicules:ListeVehicules.html.twig */
class __TwigTemplate_49cb64cdce0b43f7249d28858cd0332d0b88f58c3e9a453091baa7384e1cf0fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::accueil.html.twig", "PgGsbFraisBundle:ListeVehicules:ListeVehicules.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_652cdeef5e45fdeb212bda0dd5b349a7427f96363e56e01d4dd323520d6a614b = $this->env->getExtension("native_profiler");
        $__internal_652cdeef5e45fdeb212bda0dd5b349a7427f96363e56e01d4dd323520d6a614b->enter($__internal_652cdeef5e45fdeb212bda0dd5b349a7427f96363e56e01d4dd323520d6a614b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:ListeVehicules:ListeVehicules.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_652cdeef5e45fdeb212bda0dd5b349a7427f96363e56e01d4dd323520d6a614b->leave($__internal_652cdeef5e45fdeb212bda0dd5b349a7427f96363e56e01d4dd323520d6a614b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed2479b9fb61bafe9b51d93e6940baf72546144b2b142b054d6b78014e200d71 = $this->env->getExtension("native_profiler");
        $__internal_ed2479b9fb61bafe9b51d93e6940baf72546144b2b142b054d6b78014e200d71->enter($__internal_ed2479b9fb61bafe9b51d93e6940baf72546144b2b142b054d6b78014e200d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_ed2479b9fb61bafe9b51d93e6940baf72546144b2b142b054d6b78014e200d71->leave($__internal_ed2479b9fb61bafe9b51d93e6940baf72546144b2b142b054d6b78014e200d71_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_690f59590bacff4ada13d06f5841b36fae339b5ab1adc6bbe2961795d1baa75e = $this->env->getExtension("native_profiler");
        $__internal_690f59590bacff4ada13d06f5841b36fae339b5ab1adc6bbe2961795d1baa75e->enter($__internal_690f59590bacff4ada13d06f5841b36fae339b5ab1adc6bbe2961795d1baa75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo "<div id=\"contenu\">
<h2>Historique des Véhicules</h2>
<table>
\t         ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ListeVehiculesVisiteurs"]) ? $context["ListeVehiculesVisiteurs"] : $this->getContext($context, "ListeVehiculesVisiteurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneL"]) {
            // line 8
            echo "\t        <th><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneL"], "nom", array()), "html", null, true);
            echo "</h3>
            
             matricule:";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneL"], "idnumImmat", array()), "html", null, true);
            echo "
             <br/>marque:";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneL"], "marque", array()), "html", null, true);
            echo "
             <br/>modele:";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneL"], "modele", array()), "html", null, true);
            echo "
             <br/>couleur:";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneL"], "couleur", array()), "html", null, true);
            echo "</th>

             
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneL'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</table>\t\t\t

</div>

";
        
        $__internal_690f59590bacff4ada13d06f5841b36fae339b5ab1adc6bbe2961795d1baa75e->leave($__internal_690f59590bacff4ada13d06f5841b36fae339b5ab1adc6bbe2961795d1baa75e_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeVehicules:ListeVehicules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  62 => 8,  58 => 7,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::accueil.html.twig" %}*/
/* {% block body %}*/
/* {% block bloc1 %}*/
/* <div id="contenu">*/
/* <h2>Historique des Véhicules</h2>*/
/* <table>*/
/* 	         {% for uneL in ListeVehiculesVisiteurs%}*/
/* 	        <th><h3>{{ uneL.nom}}</h3>*/
/*             */
/*              matricule:{{ uneL.idnumImmat}}*/
/*              <br/>marque:{{ uneL.marque}}*/
/*              <br/>modele:{{ uneL.modele}}*/
/*              <br/>couleur:{{ uneL.couleur}}</th>*/
/* */
/*              */
/*              {%endfor%}*/
/* </table>			*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* {% endblock %}*/
