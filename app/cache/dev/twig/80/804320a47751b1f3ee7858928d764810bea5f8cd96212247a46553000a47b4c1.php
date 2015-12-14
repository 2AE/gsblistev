<?php

/* PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig */
class __TwigTemplate_c6d35fe899f03d205ab9d21c9ffb09086a1b0529caa8c18478aa8bd9ab96951b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::accueil.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 1);
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
        $__internal_f0447c16d94c3fa9ebc62cfc18230065c91252a4448c9fd4fe7b2c7260ed8e92 = $this->env->getExtension("native_profiler");
        $__internal_f0447c16d94c3fa9ebc62cfc18230065c91252a4448c9fd4fe7b2c7260ed8e92->enter($__internal_f0447c16d94c3fa9ebc62cfc18230065c91252a4448c9fd4fe7b2c7260ed8e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0447c16d94c3fa9ebc62cfc18230065c91252a4448c9fd4fe7b2c7260ed8e92->leave($__internal_f0447c16d94c3fa9ebc62cfc18230065c91252a4448c9fd4fe7b2c7260ed8e92_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f0585bc229763f85d526375eb23cdeecd928f319a92efe1dabbfc28bf10a00f = $this->env->getExtension("native_profiler");
        $__internal_6f0585bc229763f85d526375eb23cdeecd928f319a92efe1dabbfc28bf10a00f->enter($__internal_6f0585bc229763f85d526375eb23cdeecd928f319a92efe1dabbfc28bf10a00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_6f0585bc229763f85d526375eb23cdeecd928f319a92efe1dabbfc28bf10a00f->leave($__internal_6f0585bc229763f85d526375eb23cdeecd928f319a92efe1dabbfc28bf10a00f_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_4aed09cd82b1765362c3d17f1b93f2593a076f9cd01acf614b67173e7d338038 = $this->env->getExtension("native_profiler");
        $__internal_4aed09cd82b1765362c3d17f1b93f2593a076f9cd01acf614b67173e7d338038->enter($__internal_4aed09cd82b1765362c3d17f1b93f2593a076f9cd01acf614b67173e7d338038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo " ";
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:erreurs.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 4)->display(array_merge($context, array("leserreurs" => (isset($context["leserreursforfait"]) ? $context["leserreursforfait"] : $this->getContext($context, "leserreursforfait")))));
        // line 5
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 5)->display(array_merge($context, array("lesfraisforfait" => (isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")), "nummois" =>         // line 6
(isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "numannee" => (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")))));
        // line 7
        echo "
";
        // line 8
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:erreurs.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 8)->display(array_merge($context, array("leserreurs" => (isset($context["leserreurshorsforfait"]) ? $context["leserreurshorsforfait"] : $this->getContext($context, "leserreurshorsforfait")))));
        // line 9
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 9)->display(array_merge($context, array("lesfraishorsforfait" => (isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")))));
        
        $__internal_4aed09cd82b1765362c3d17f1b93f2593a076f9cd01acf614b67173e7d338038->leave($__internal_4aed09cd82b1765362c3d17f1b93f2593a076f9cd01acf614b67173e7d338038_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  62 => 8,  59 => 7,  57 => 6,  56 => 5,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::accueil.html.twig" %}*/
/* {% block body %}*/
/* {% block bloc1 %}*/
/*  {% include 'PgGsbFraisBundle:SaisirFrais:erreurs.html.twig' with {'leserreurs':leserreursforfait} %}*/
/* {% include 'PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig' with {'lesfraisforfait':lesfraisforfait,*/
/* 'nummois':nummois,'numannee':numannee} %}*/
/* */
/* {% include 'PgGsbFraisBundle:SaisirFrais:erreurs.html.twig' with {'leserreurs':leserreurshorsforfait} %}*/
/* {% include 'PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig' with {'lesfraishorsforfait':lesfraishorsforfait} %}*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
/* */
