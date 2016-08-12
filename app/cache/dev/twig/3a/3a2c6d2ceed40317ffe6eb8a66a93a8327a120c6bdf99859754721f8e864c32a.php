<?php

/* AppBundle:Layout:stylesheet.html.twig */
class __TwigTemplate_89c977ca305cf856c4b80b387edee1bc430b7e3d481659bd45d2301d6ca597a0 extends Twig_Template
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
        $__internal_597aad0f3fdc9622bfa821a6eb617df9a8bb826fa99686b92a6753cd7174b206 = $this->env->getExtension("native_profiler");
        $__internal_597aad0f3fdc9622bfa821a6eb617df9a8bb826fa99686b92a6753cd7174b206->enter($__internal_597aad0f3fdc9622bfa821a6eb617df9a8bb826fa99686b92a6753cd7174b206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layout:stylesheet.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/vendor.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("links/util/css/datetimepicker.css"), "html", null, true);
        echo "\">
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("links/user/css/main.css"), "html", null, true);
        echo "\"\">
";
        
        $__internal_597aad0f3fdc9622bfa821a6eb617df9a8bb826fa99686b92a6753cd7174b206->leave($__internal_597aad0f3fdc9622bfa821a6eb617df9a8bb826fa99686b92a6753cd7174b206_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Layout:stylesheet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('links/util/css/datetimepicker.css') }}">*/
/* <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('links/user/css/main.css') }}"">*/
/* */
