<?php

/* AppBundle:User:show-user/show-user-modal.html.twig */
class __TwigTemplate_89bccc2a7a16499ce85a699735c3cc2a497199e44a53479f36ced61941899705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:show-user/show-user-modal.html.twig", 1);
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
        $__internal_94038a88db685387b07cfd528a7961a7cbb7bc1b401b7ac3744000cb57e4362c = $this->env->getExtension("native_profiler");
        $__internal_94038a88db685387b07cfd528a7961a7cbb7bc1b401b7ac3744000cb57e4362c->enter($__internal_94038a88db685387b07cfd528a7961a7cbb7bc1b401b7ac3744000cb57e4362c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show-user/show-user-modal.html.twig"));

        // line 3
        $context["script_controller_show"] = "links/user/js/add-user.js";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94038a88db685387b07cfd528a7961a7cbb7bc1b401b7ac3744000cb57e4362c->leave($__internal_94038a88db685387b07cfd528a7961a7cbb7bc1b401b7ac3744000cb57e4362c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1dc75f6363184ef55d3d9c31317563b378cf44be85b5a731e2e27d06b4115dfd = $this->env->getExtension("native_profiler");
        $__internal_1dc75f6363184ef55d3d9c31317563b378cf44be85b5a731e2e27d06b4115dfd->enter($__internal_1dc75f6363184ef55d3d9c31317563b378cf44be85b5a731e2e27d06b4115dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1dc75f6363184ef55d3d9c31317563b378cf44be85b5a731e2e27d06b4115dfd->leave($__internal_1dc75f6363184ef55d3d9c31317563b378cf44be85b5a731e2e27d06b4115dfd_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c773145e5265e60944c322cc89cf106f8773f493b78ab7156b4fe3722d75e4e0 = $this->env->getExtension("native_profiler");
        $__internal_c773145e5265e60944c322cc89cf106f8773f493b78ab7156b4fe3722d75e4e0->enter($__internal_c773145e5265e60944c322cc89cf106f8773f493b78ab7156b4fe3722d75e4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c773145e5265e60944c322cc89cf106f8773f493b78ab7156b4fe3722d75e4e0->leave($__internal_c773145e5265e60944c322cc89cf106f8773f493b78ab7156b4fe3722d75e4e0_prof);

    }

    // line 11
    public function block_footer($context, array $blocks = array())
    {
        $__internal_057ce29bb750f1ce54ecc4e0b1cdb792d803dea7fcd642e5b9e432633dfe1b44 = $this->env->getExtension("native_profiler");
        $__internal_057ce29bb750f1ce54ecc4e0b1cdb792d803dea7fcd642e5b9e432633dfe1b44->enter($__internal_057ce29bb750f1ce54ecc4e0b1cdb792d803dea7fcd642e5b9e432633dfe1b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_057ce29bb750f1ce54ecc4e0b1cdb792d803dea7fcd642e5b9e432633dfe1b44->leave($__internal_057ce29bb750f1ce54ecc4e0b1cdb792d803dea7fcd642e5b9e432633dfe1b44_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show-user/show-user-modal.html.twig";
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
