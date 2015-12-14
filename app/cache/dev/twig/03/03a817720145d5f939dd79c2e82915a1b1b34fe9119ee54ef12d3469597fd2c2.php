<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_3b19f12eee02b21dc4b2a1acfb7b0c332f308c916dfbadc04d6ca77c5f413788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0d1910eb7adf77010d9d36876b7671e666b1c254ba749fa2b65d936c9b1b839 = $this->env->getExtension("native_profiler");
        $__internal_e0d1910eb7adf77010d9d36876b7671e666b1c254ba749fa2b65d936c9b1b839->enter($__internal_e0d1910eb7adf77010d9d36876b7671e666b1c254ba749fa2b65d936c9b1b839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsbfrais/styles/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsbfrais/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
     </div>
          ";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
  </html>

          
          
";
        
        $__internal_e0d1910eb7adf77010d9d36876b7671e666b1c254ba749fa2b65d936c9b1b839->leave($__internal_e0d1910eb7adf77010d9d36876b7671e666b1c254ba749fa2b65d936c9b1b839_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e8c9aa4a1e8e79f9d650e4f7f592447e365d1d588c8809bb30b4b52cf531e2e = $this->env->getExtension("native_profiler");
        $__internal_7e8c9aa4a1e8e79f9d650e4f7f592447e365d1d588c8809bb30b4b52cf531e2e->enter($__internal_7e8c9aa4a1e8e79f9d650e4f7f592447e365d1d588c8809bb30b4b52cf531e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_7e8c9aa4a1e8e79f9d650e4f7f592447e365d1d588c8809bb30b4b52cf531e2e->leave($__internal_7e8c9aa4a1e8e79f9d650e4f7f592447e365d1d588c8809bb30b4b52cf531e2e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_f65d8163e7a1f067290e76fdf6daee016331f2bafbe56b141cce0b6aa8cee8c8 = $this->env->getExtension("native_profiler");
        $__internal_f65d8163e7a1f067290e76fdf6daee016331f2bafbe56b141cce0b6aa8cee8c8->enter($__internal_f65d8163e7a1f067290e76fdf6daee016331f2bafbe56b141cce0b6aa8cee8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_f65d8163e7a1f067290e76fdf6daee016331f2bafbe56b141cce0b6aa8cee8c8->leave($__internal_f65d8163e7a1f067290e76fdf6daee016331f2bafbe56b141cce0b6aa8cee8c8_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_5efe4c2445a6237f378c86c59ddc2e64209c4184ca93cef4fa07976f279a06ce = $this->env->getExtension("native_profiler");
        $__internal_5efe4c2445a6237f378c86c59ddc2e64209c4184ca93cef4fa07976f279a06ce->enter($__internal_5efe4c2445a6237f378c86c59ddc2e64209c4184ca93cef4fa07976f279a06ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_5efe4c2445a6237f378c86c59ddc2e64209c4184ca93cef4fa07976f279a06ce->leave($__internal_5efe4c2445a6237f378c86c59ddc2e64209c4184ca93cef4fa07976f279a06ce_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  96 => 20,  89 => 22,  87 => 20,  79 => 19,  72 => 18,  66 => 17,  54 => 23,  51 => 19,  49 => 17,  42 => 13,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"*/
/*        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">*/
/*   <head>*/
/*     <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8" />*/
/*     <link href="{{ asset('bundles/gsbfrais/styles/styles.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />*/
/*   </head>*/
/*   <body>*/
/*     <div id="page">*/
/*       <div id="entete">*/
/*         <img src="{{ asset('bundles/gsbfrais/images/logo.jpg')}}" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />*/
/*         <h1>Suivi du remboursement des frais</h1>*/
/*       </div>*/
/*      </div>*/
/*           {% block menu %}*/
/*           {% endblock %}*/
/*           {% block body %} */
/*                  {% block bloc1 %}*/
/*                  {% endblock %}*/
/*           {% endblock %}*/
/*     </body>*/
/*   </html>*/
/* */
/*           */
/*           */
/* */
