<?php

/* AppBundle:user:show-user/show-user-modal.html.twig */
class __TwigTemplate_014575becc8b3540c1a714674489d332fdfb1d64610cd8a360cc60d64aebce02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:user:show-user/show-user-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::modal-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d621f0009b8a73f0b6d3acd9c2f813fb3c82fcd8d0ac47dfafa9a33bed653ced = $this->env->getExtension("native_profiler");
        $__internal_d621f0009b8a73f0b6d3acd9c2f813fb3c82fcd8d0ac47dfafa9a33bed653ced->enter($__internal_d621f0009b8a73f0b6d3acd9c2f813fb3c82fcd8d0ac47dfafa9a33bed653ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:show-user/show-user-modal.html.twig"));

        // line 3
        $context["script_controller_show"] = "links/user/js/add-user.js";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d621f0009b8a73f0b6d3acd9c2f813fb3c82fcd8d0ac47dfafa9a33bed653ced->leave($__internal_d621f0009b8a73f0b6d3acd9c2f813fb3c82fcd8d0ac47dfafa9a33bed653ced_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d3cf53f392ca3f104dd3354d07e7d52c818ae718eee4c02ae1544ddf1e24d53 = $this->env->getExtension("native_profiler");
        $__internal_0d3cf53f392ca3f104dd3354d07e7d52c818ae718eee4c02ae1544ddf1e24d53->enter($__internal_0d3cf53f392ca3f104dd3354d07e7d52c818ae718eee4c02ae1544ddf1e24d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0d3cf53f392ca3f104dd3354d07e7d52c818ae718eee4c02ae1544ddf1e24d53->leave($__internal_0d3cf53f392ca3f104dd3354d07e7d52c818ae718eee4c02ae1544ddf1e24d53_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c4c29687dde416b6121e1a639336ef05bc20c4561433b5ac1c9e576bd1bf4e8 = $this->env->getExtension("native_profiler");
        $__internal_5c4c29687dde416b6121e1a639336ef05bc20c4561433b5ac1c9e576bd1bf4e8->enter($__internal_5c4c29687dde416b6121e1a639336ef05bc20c4561433b5ac1c9e576bd1bf4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5c4c29687dde416b6121e1a639336ef05bc20c4561433b5ac1c9e576bd1bf4e8->leave($__internal_5c4c29687dde416b6121e1a639336ef05bc20c4561433b5ac1c9e576bd1bf4e8_prof);

    }

    // line 11
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0647bbd31ef7c6795eb2fac4791ab314b2e28c0217dac4e49855e50acfbf75c7 = $this->env->getExtension("native_profiler");
        $__internal_0647bbd31ef7c6795eb2fac4791ab314b2e28c0217dac4e49855e50acfbf75c7->enter($__internal_0647bbd31ef7c6795eb2fac4791ab314b2e28c0217dac4e49855e50acfbf75c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_0647bbd31ef7c6795eb2fac4791ab314b2e28c0217dac4e49855e50acfbf75c7->leave($__internal_0647bbd31ef7c6795eb2fac4791ab314b2e28c0217dac4e49855e50acfbf75c7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user:show-user/show-user-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  50 => 8,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% set script_controller_show = 'links/user/js/add-user.js' %}*/
/* */
/* {% block title %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {% endblock %}*/
/* */
/* {% block footer %}{% endblock %}*/
