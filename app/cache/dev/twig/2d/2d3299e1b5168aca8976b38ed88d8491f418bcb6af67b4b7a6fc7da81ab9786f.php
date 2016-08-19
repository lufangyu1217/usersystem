<?php

/* AppBundle:User:show/show-user-modal.html.twig */
class __TwigTemplate_905a367641a5eeed3d5a9fdd284daefd8d5bd6a9d6482e1426d88ebdc309ed80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:show/show-user-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::modal-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5409e53b1142290417181ffdf5e960f9ba45e54f1d4cb701d9767f74ad154a12 = $this->env->getExtension("native_profiler");
        $__internal_5409e53b1142290417181ffdf5e960f9ba45e54f1d4cb701d9767f74ad154a12->enter($__internal_5409e53b1142290417181ffdf5e960f9ba45e54f1d4cb701d9767f74ad154a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show/show-user-modal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5409e53b1142290417181ffdf5e960f9ba45e54f1d4cb701d9767f74ad154a12->leave($__internal_5409e53b1142290417181ffdf5e960f9ba45e54f1d4cb701d9767f74ad154a12_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b60dacd805b46ce637580eea916ab3efbee3e6c8587e2ad25ee773d297dc95b5 = $this->env->getExtension("native_profiler");
        $__internal_b60dacd805b46ce637580eea916ab3efbee3e6c8587e2ad25ee773d297dc95b5->enter($__internal_b60dacd805b46ce637580eea916ab3efbee3e6c8587e2ad25ee773d297dc95b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/add-user.js")), "html", null, true);
        echo "
";
        
        $__internal_b60dacd805b46ce637580eea916ab3efbee3e6c8587e2ad25ee773d297dc95b5->leave($__internal_b60dacd805b46ce637580eea916ab3efbee3e6c8587e2ad25ee773d297dc95b5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_10f96dc432b38cbb6ba323bb16a70f586f22aa5c7a4dd6f13ab3b4f2391f0611 = $this->env->getExtension("native_profiler");
        $__internal_10f96dc432b38cbb6ba323bb16a70f586f22aa5c7a4dd6f13ab3b4f2391f0611->enter($__internal_10f96dc432b38cbb6ba323bb16a70f586f22aa5c7a4dd6f13ab3b4f2391f0611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_10f96dc432b38cbb6ba323bb16a70f586f22aa5c7a4dd6f13ab3b4f2391f0611->leave($__internal_10f96dc432b38cbb6ba323bb16a70f586f22aa5c7a4dd6f13ab3b4f2391f0611_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show/show-user-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ script(['links/user/js/add-user.js']) }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {% endblock %}*/
/* */
