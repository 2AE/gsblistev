<?php

/* PgGsbFraisBundle::accueil.html.twig */
class __TwigTemplate_7fd499147fc314fd5f51485d99ba021c6cb627b6894fa483380c025f787472c2 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
            echo "<br>   
            ";
        }
        // line 10
        echo "        </h3>
        <h4>
            ";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "matricule"), "method", true, true)) {
            // line 13
            echo "                           Votre matricule:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "matricule"), "method"), "html", null, true);
            echo "<br>   
            ";
        }
        // line 15
        echo "        </h4>
     </div>  
        <ul id=\"menuList\">
\t   <li class=\"smenu\">
              <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_listefrais");
        echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>\t
           <li class=\"smenu\">
              <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>

           
         </ul>
     </div> 
";
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
        return array (  76 => 25,  70 => 22,  64 => 19,  58 => 15,  52 => 13,  50 => 12,  46 => 10,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
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
/*             {%if(app.session.get('matricule') is defined )%}*/
/*                            Votre matricule:{{app.session.get('matricule')}}<br>   */
/*             {%endif%}*/
/*         </h4>*/
/*      </div>  */
/*         <ul id="menuList">*/
/* 	   <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_saisirfrais')}}" title="Saisie fiche de frais ">Saisie fiche de frais</a>*/
/*            </li>*/
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
