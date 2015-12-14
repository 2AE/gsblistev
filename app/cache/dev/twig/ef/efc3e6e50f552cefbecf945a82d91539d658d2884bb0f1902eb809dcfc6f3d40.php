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
        $__internal_e331243381c542b9c898fcdd00c93210fb61a8d16fc518daa3dd9bf7757c8b5f = $this->env->getExtension("native_profiler");
        $__internal_e331243381c542b9c898fcdd00c93210fb61a8d16fc518daa3dd9bf7757c8b5f->enter($__internal_e331243381c542b9c898fcdd00c93210fb61a8d16fc518daa3dd9bf7757c8b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:ListeVehicules:ListeVehicules.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e331243381c542b9c898fcdd00c93210fb61a8d16fc518daa3dd9bf7757c8b5f->leave($__internal_e331243381c542b9c898fcdd00c93210fb61a8d16fc518daa3dd9bf7757c8b5f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dca5ed8c6d0f6bc025b5af5697baf97314f5339191d23c45ed6f1c230bea2a89 = $this->env->getExtension("native_profiler");
        $__internal_dca5ed8c6d0f6bc025b5af5697baf97314f5339191d23c45ed6f1c230bea2a89->enter($__internal_dca5ed8c6d0f6bc025b5af5697baf97314f5339191d23c45ed6f1c230bea2a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_dca5ed8c6d0f6bc025b5af5697baf97314f5339191d23c45ed6f1c230bea2a89->leave($__internal_dca5ed8c6d0f6bc025b5af5697baf97314f5339191d23c45ed6f1c230bea2a89_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_01b01f7a495856979f335889e94b77b4a97a38b4a7ade07579b13771954c3f13 = $this->env->getExtension("native_profiler");
        $__internal_01b01f7a495856979f335889e94b77b4a97a38b4a7ade07579b13771954c3f13->enter($__internal_01b01f7a495856979f335889e94b77b4a97a38b4a7ade07579b13771954c3f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

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
            echo "\t        <th><h3>nom: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneL"], "nom", array()), "html", null, true);
            echo "</h3>  
           \t <br/>matricule: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneL"], "idnumImmat", array()), "html", null, true);
            echo "
             <br/>marque: ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneL"], "marque", array()), "html", null, true);
            echo "
             <br/>modele: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneL"], "modele", array()), "html", null, true);
            echo "
             <br/>couleur: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneL"], "couleur", array()), "html", null, true);
            echo "</th>

             
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneL'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</table>\t\t\t

</div>

";
        
        $__internal_01b01f7a495856979f335889e94b77b4a97a38b4a7ade07579b13771954c3f13->leave($__internal_01b01f7a495856979f335889e94b77b4a97a38b4a7ade07579b13771954c3f13_prof);

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
        return array (  89 => 16,  79 => 12,  75 => 11,  71 => 10,  67 => 9,  62 => 8,  58 => 7,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::accueil.html.twig" %}*/
/* {% block body %}*/
/* {% block bloc1 %}*/
/* <div id="contenu">*/
/* <h2>Historique des Véhicules</h2>*/
/* <table>*/
/* 	         {% for uneL in ListeVehiculesVisiteurs%}*/
/* 	        <th><h3>nom: {{ uneL.nom}}</h3>  */
/*            	 <br/>matricule: {{ uneL.idnumImmat}}*/
/*              <br/>marque: {{ uneL.marque}}*/
/*              <br/>modele: {{ uneL.modele}}*/
/*              <br/>couleur: {{ uneL.couleur}}</th>*/
/* */
/*              */
/*              {%endfor%}*/
/* </table>			*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* {% endblock %}*/
