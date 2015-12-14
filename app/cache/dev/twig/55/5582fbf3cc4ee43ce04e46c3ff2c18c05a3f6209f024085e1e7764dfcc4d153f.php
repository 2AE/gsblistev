<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_3f8eccfb51144f160c052d16ae01b4c85bf9e877207c690f2d484e6219e10980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle:Home:connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00993d5b1653b9ad174aa95ccd8621fd2fad3d4afe8b10f3624552efd169130c = $this->env->getExtension("native_profiler");
        $__internal_00993d5b1653b9ad174aa95ccd8621fd2fad3d4afe8b10f3624552efd169130c->enter($__internal_00993d5b1653b9ad174aa95ccd8621fd2fad3d4afe8b10f3624552efd169130c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00993d5b1653b9ad174aa95ccd8621fd2fad3d4afe8b10f3624552efd169130c->leave($__internal_00993d5b1653b9ad174aa95ccd8621fd2fad3d4afe8b10f3624552efd169130c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_13e2e1197e7c3566245f7450b979416b4501171c56d6e543d9990a24102afad7 = $this->env->getExtension("native_profiler");
        $__internal_13e2e1197e7c3566245f7450b979416b4501171c56d6e543d9990a24102afad7->enter($__internal_13e2e1197e7c3566245f7450b979416b4501171c56d6e543d9990a24102afad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_13e2e1197e7c3566245f7450b979416b4501171c56d6e543d9990a24102afad7->leave($__internal_13e2e1197e7c3566245f7450b979416b4501171c56d6e543d9990a24102afad7_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_d26a2410a3e9a130a7449e7e333cce3533ce2a6175ed86d1ae87ac9a8050ad72 = $this->env->getExtension("native_profiler");
        $__internal_d26a2410a3e9a130a7449e7e333cce3533ce2a6175ed86d1ae87ac9a8050ad72->enter($__internal_d26a2410a3e9a130a7449e7e333cce3533ce2a6175ed86d1ae87ac9a8050ad72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        echo " 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "            <div class =\"erreur\">
            <ul>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</ul></div>
      ";
        }
        // line 10
        echo "<form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_validerconnexion");
        echo "\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    ";
        
        $__internal_d26a2410a3e9a130a7449e7e333cce3533ce2a6175ed86d1ae87ac9a8050ad72->leave($__internal_d26a2410a3e9a130a7449e7e333cce3533ce2a6175ed86d1ae87ac9a8050ad72_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  67 => 8,  64 => 7,  62 => 6,  52 => 3,  44 => 24,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*  {% block bloc1 %} */
/*  <div id="contenu">*/
/*       <h2>Identification utilisateur</h2>*/
/*       {%if(message is defined )%}*/
/*             <div class ="erreur">*/
/*             <ul>{{message}}</ul></div>*/
/*       {%endif%}*/
/* <form method="POST" action="{{path('pg_gsb_frais_validerconnexion')}}">*/
/*         <p>*/
/*           <label for="nom">Login*</label>*/
/*            <input id="login" type="text" name="login"  size="30" maxlength="45">*/
/*         </p>*/
/* 	<p>*/
/*             <label for="mdp">Mot de passe*</label>*/
/*             <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">*/
/*         </p>*/
/*          <input type="submit" value="Valider" name="valider">*/
/*          <input type="reset" value="Annuler" name="annuler"> */
/*       </p>*/
/* </form>*/
/* </div>*/
/*     {% endblock %}    */
/*     {% endblock%}*/
/*      */
