<?php

/* PgGsbFraisBundle::accueil.html.twig */
class __TwigTemplate_9a883d581d038adc11da367e193bff7db0efbe059e41793f0592032ade4b69f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle::accueil.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9b261e438e9e631078a3d8152351e28d2faaf5afe6e458e1b9b706346662d20 = $this->env->getExtension("native_profiler");
        $__internal_c9b261e438e9e631078a3d8152351e28d2faaf5afe6e458e1b9b706346662d20->enter($__internal_c9b261e438e9e631078a3d8152351e28d2faaf5afe6e458e1b9b706346662d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9b261e438e9e631078a3d8152351e28d2faaf5afe6e458e1b9b706346662d20->leave($__internal_c9b261e438e9e631078a3d8152351e28d2faaf5afe6e458e1b9b706346662d20_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46ed65367de96e9a7bc06289e3127dde98f6b74b31104e21b9d4e96ba28fead7 = $this->env->getExtension("native_profiler");
        $__internal_46ed65367de96e9a7bc06289e3127dde98f6b74b31104e21b9d4e96ba28fead7->enter($__internal_46ed65367de96e9a7bc06289e3127dde98f6b74b31104e21b9d4e96ba28fead7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "<div id=\"menuGauche\">
     <div id=\"infosUtil\">
         <h3>
            ";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "nom"), "method", true, true)) {
            // line 7
            echo "                           Visiteur:
                           bonjour ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
            echo "<br>   
            ";
        }
        // line 10
        echo "        </h3>
        <h4>
            ";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "idnumImmat"), "method", true, true)) {
            // line 13
            echo "                           Votre matricule:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idnumImmat"), "method"), "html", null, true);
            echo "<br>   
            ";
        }
        // line 15
        echo "            
        </h4>
     </div>  
        <ul id=\"menuList\">
           <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_listevehicules");
        echo "\" title=\"liste vehicules \">liste des vehicules</a>
           </li> 

\t   
           <li class=\"smenu\">
              <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>  
           <li class=\"smenu\">
              <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_listefrais");
        echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>\t
           <li class=\"smenu\">
              <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>

           
         </ul>
     </div> 
";
        
        $__internal_46ed65367de96e9a7bc06289e3127dde98f6b74b31104e21b9d4e96ba28fead7->leave($__internal_46ed65367de96e9a7bc06289e3127dde98f6b74b31104e21b9d4e96ba28fead7_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 30,  87 => 27,  81 => 24,  73 => 19,  67 => 15,  61 => 13,  59 => 12,  55 => 10,  50 => 8,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::layout.html.twig" %}*/
/* {% block menu %}*/
/* <div id="menuGauche">*/
/*      <div id="infosUtil">*/
/*          <h3>*/
/*             {%if(app.session.get('nom') is defined )%}*/
/*                            Visiteur:*/
/*                            bonjour {{app.session.get('nom')}}<br>   */
/*             {%endif%}*/
/*         </h3>*/
/*         <h4>*/
/*             {%if(app.session.get('idnumImmat') is defined )%}*/
/*                            Votre matricule:{{app.session.get('idnumImmat')}}<br>   */
/*             {%endif%}*/
/*             */
/*         </h4>*/
/*      </div>  */
/*         <ul id="menuList">*/
/*            <a href="{{path('pg_gsb_frais_listevehicules')}}" title="liste vehicules ">liste des vehicules</a>*/
/*            </li> */
/* */
/* 	   */
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_saisirfrais')}}" title="Saisie fiche de frais ">Saisie fiche de frais</a>*/
/*            </li>  */
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_listefrais')}}" title="Consultation de mes fiches de frais">Mes fiches de frais</a>*/
/*            </li>	*/
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_deconnexion')}}" title="Se déconnecter">Déconnexion</a>*/
/*            </li>*/
/* */
/*            */
/*          </ul>*/
/*      </div> */
/* {% endblock%}*/
/* */
/* */
/* {#*/
/*  <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_saisirfrais')}}" title="Saisie fiche de frais ">Saisie fiche de frais</a>*/
/*            </li>*/
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_listefrais')}}" title="Consultation de mes fiches de frais">Mes fiches de frais</a>*/
/*            </li>*/
/* #}*/
