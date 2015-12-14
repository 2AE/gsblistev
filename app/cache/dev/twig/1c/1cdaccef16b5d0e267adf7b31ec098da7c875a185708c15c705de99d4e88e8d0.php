<?php

/* base.html.twig */
class __TwigTemplate_318b7d9f51cfbb89a3fad6adcad7f5c25f6223eeee87c1681da2be62f4cb88cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec51e3e9dba87d056a761d129f10fe475c3ab79d9b2289d7e374dfe6cc59ab9d = $this->env->getExtension("native_profiler");
        $__internal_ec51e3e9dba87d056a761d129f10fe475c3ab79d9b2289d7e374dfe6cc59ab9d->enter($__internal_ec51e3e9dba87d056a761d129f10fe475c3ab79d9b2289d7e374dfe6cc59ab9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ec51e3e9dba87d056a761d129f10fe475c3ab79d9b2289d7e374dfe6cc59ab9d->leave($__internal_ec51e3e9dba87d056a761d129f10fe475c3ab79d9b2289d7e374dfe6cc59ab9d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a47703e623a1414ec43620fd4472a7caa8a85199663db96b47392f0e988b34b4 = $this->env->getExtension("native_profiler");
        $__internal_a47703e623a1414ec43620fd4472a7caa8a85199663db96b47392f0e988b34b4->enter($__internal_a47703e623a1414ec43620fd4472a7caa8a85199663db96b47392f0e988b34b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a47703e623a1414ec43620fd4472a7caa8a85199663db96b47392f0e988b34b4->leave($__internal_a47703e623a1414ec43620fd4472a7caa8a85199663db96b47392f0e988b34b4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be8b7352543b699479186619e48a896443400d1aa54bc2a109c0c7ea46cc1f80 = $this->env->getExtension("native_profiler");
        $__internal_be8b7352543b699479186619e48a896443400d1aa54bc2a109c0c7ea46cc1f80->enter($__internal_be8b7352543b699479186619e48a896443400d1aa54bc2a109c0c7ea46cc1f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_be8b7352543b699479186619e48a896443400d1aa54bc2a109c0c7ea46cc1f80->leave($__internal_be8b7352543b699479186619e48a896443400d1aa54bc2a109c0c7ea46cc1f80_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b4c151545efdd627b5856521a36da5c8f69a031e36578a317315f0973df42a4 = $this->env->getExtension("native_profiler");
        $__internal_8b4c151545efdd627b5856521a36da5c8f69a031e36578a317315f0973df42a4->enter($__internal_8b4c151545efdd627b5856521a36da5c8f69a031e36578a317315f0973df42a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b4c151545efdd627b5856521a36da5c8f69a031e36578a317315f0973df42a4->leave($__internal_8b4c151545efdd627b5856521a36da5c8f69a031e36578a317315f0973df42a4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_233cb368010c4b696811eb3993b4472001540b12f92de086437382ffc00483ed = $this->env->getExtension("native_profiler");
        $__internal_233cb368010c4b696811eb3993b4472001540b12f92de086437382ffc00483ed->enter($__internal_233cb368010c4b696811eb3993b4472001540b12f92de086437382ffc00483ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_233cb368010c4b696811eb3993b4472001540b12f92de086437382ffc00483ed->leave($__internal_233cb368010c4b696811eb3993b4472001540b12f92de086437382ffc00483ed_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
