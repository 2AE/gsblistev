<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c1c4d606a58fc4436442abb91470f441309211fc4d46536b159dab909a3af875 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b446d115d92efa63d5d5f766b560a169568316db7eea90972f7eab1928cba3b2 = $this->env->getExtension("native_profiler");
        $__internal_b446d115d92efa63d5d5f766b560a169568316db7eea90972f7eab1928cba3b2->enter($__internal_b446d115d92efa63d5d5f766b560a169568316db7eea90972f7eab1928cba3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b446d115d92efa63d5d5f766b560a169568316db7eea90972f7eab1928cba3b2->leave($__internal_b446d115d92efa63d5d5f766b560a169568316db7eea90972f7eab1928cba3b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_204e1a73f89164a5258d3e278b61d0bad3db7b11763a57f156ed2e1897d00b47 = $this->env->getExtension("native_profiler");
        $__internal_204e1a73f89164a5258d3e278b61d0bad3db7b11763a57f156ed2e1897d00b47->enter($__internal_204e1a73f89164a5258d3e278b61d0bad3db7b11763a57f156ed2e1897d00b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_204e1a73f89164a5258d3e278b61d0bad3db7b11763a57f156ed2e1897d00b47->leave($__internal_204e1a73f89164a5258d3e278b61d0bad3db7b11763a57f156ed2e1897d00b47_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cde9c8823853c5d7384365443571c2985c95eb21111aa47a5c22ef4e450eec6 = $this->env->getExtension("native_profiler");
        $__internal_0cde9c8823853c5d7384365443571c2985c95eb21111aa47a5c22ef4e450eec6->enter($__internal_0cde9c8823853c5d7384365443571c2985c95eb21111aa47a5c22ef4e450eec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0cde9c8823853c5d7384365443571c2985c95eb21111aa47a5c22ef4e450eec6->leave($__internal_0cde9c8823853c5d7384365443571c2985c95eb21111aa47a5c22ef4e450eec6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac04dc9c806a0a7040593f506875f5769322ea9fa6420da59be9de973eb8875a = $this->env->getExtension("native_profiler");
        $__internal_ac04dc9c806a0a7040593f506875f5769322ea9fa6420da59be9de973eb8875a->enter($__internal_ac04dc9c806a0a7040593f506875f5769322ea9fa6420da59be9de973eb8875a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ac04dc9c806a0a7040593f506875f5769322ea9fa6420da59be9de973eb8875a->leave($__internal_ac04dc9c806a0a7040593f506875f5769322ea9fa6420da59be9de973eb8875a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
