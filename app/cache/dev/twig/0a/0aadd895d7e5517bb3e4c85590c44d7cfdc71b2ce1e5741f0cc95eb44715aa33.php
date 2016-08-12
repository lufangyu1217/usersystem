<?php

/* AppBundle:user:show-list.html.twig */
class __TwigTemplate_68b28c32c0b4435452b944b11021ce7ebbf6c917a614691e14ae7f4db8c6ff34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:user:show-list.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content_title' => array($this, 'block_content_title'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04269ec147c9a88e3eb4e6911f8ae50b70851ba18f021b4de33fc6879a475a24 = $this->env->getExtension("native_profiler");
        $__internal_04269ec147c9a88e3eb4e6911f8ae50b70851ba18f021b4de33fc6879a475a24->enter($__internal_04269ec147c9a88e3eb4e6911f8ae50b70851ba18f021b4de33fc6879a475a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:show-list.html.twig"));

        // line 7
        $context["script_controller"] = "cssjs/user/js/add-user.js";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04269ec147c9a88e3eb4e6911f8ae50b70851ba18f021b4de33fc6879a475a24->leave($__internal_04269ec147c9a88e3eb4e6911f8ae50b70851ba18f021b4de33fc6879a475a24_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8303b3c07b2601cdabfb500f6b14a07a0a0e66a9da20621ac7d9db8e3ee21d06 = $this->env->getExtension("native_profiler");
        $__internal_8303b3c07b2601cdabfb500f6b14a07a0a0e66a9da20621ac7d9db8e3ee21d06->enter($__internal_8303b3c07b2601cdabfb500f6b14a07a0a0e66a9da20621ac7d9db8e3ee21d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("cssjs/user/css/list.css"), "html", null, true);
        echo "\">
";
        
        $__internal_8303b3c07b2601cdabfb500f6b14a07a0a0e66a9da20621ac7d9db8e3ee21d06->leave($__internal_8303b3c07b2601cdabfb500f6b14a07a0a0e66a9da20621ac7d9db8e3ee21d06_prof);

    }

    // line 9
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f93cd60a518501d1ab769d9753a8bfa4ad59e54c5c11cd256e0b2c0c17c0ea35 = $this->env->getExtension("native_profiler");
        $__internal_f93cd60a518501d1ab769d9753a8bfa4ad59e54c5c11cd256e0b2c0c17c0ea35->enter($__internal_f93cd60a518501d1ab769d9753a8bfa4ad59e54c5c11cd256e0b2c0c17c0ea35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 10
        echo "  <div>
    <h4>员工管理</h4>
  </div>
  <hr>
  <ul class=\"nav nav-tabs mbm job-status\">
    <li ";
        // line 15
        if (((isset($context["jobStatus"]) ? $context["jobStatus"] : $this->getContext($context, "jobStatus")) == 1)) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_injob_user_list");
        echo "\">在职</a></li>
    <li ";
        // line 16
        if (((isset($context["jobStatus"]) ? $context["jobStatus"] : $this->getContext($context, "jobStatus")) == 0)) {
            echo " class=\"active\" ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_outjob_user_list");
        echo "\">离职</a></li>
    <a class=\"btn btn-sm btn-success pull-right\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("admin_user_add");
        echo "\">添加员工</a>
  </ul>
";
        
        $__internal_f93cd60a518501d1ab769d9753a8bfa4ad59e54c5c11cd256e0b2c0c17c0ea35->leave($__internal_f93cd60a518501d1ab769d9753a8bfa4ad59e54c5c11cd256e0b2c0c17c0ea35_prof);

    }

    // line 20
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_866317294ba0e0314a3bd7278f803f7eefee1a959bf8ed99c6f9a8dd4bc30afa = $this->env->getExtension("native_profiler");
        $__internal_866317294ba0e0314a3bd7278f803f7eefee1a959bf8ed99c6f9a8dd4bc30afa->enter($__internal_866317294ba0e0314a3bd7278f803f7eefee1a959bf8ed99c6f9a8dd4bc30afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 21
        echo "  ";
        if (((isset($context["jobStatus"]) ? $context["jobStatus"] : $this->getContext($context, "jobStatus")) == 1)) {
            // line 22
            echo "    ";
            $this->loadTemplate("AppBundle:user:injob.html.twig", "AppBundle:user:show-list.html.twig", 22)->display($context);
            // line 23
            echo "  ";
        } else {
            // line 24
            echo "    ";
            $this->loadTemplate("AppBundle:user:outjob.html.twig", "AppBundle:user:show-list.html.twig", 24)->display($context);
            // line 25
            echo "  ";
        }
        
        $__internal_866317294ba0e0314a3bd7278f803f7eefee1a959bf8ed99c6f9a8dd4bc30afa->leave($__internal_866317294ba0e0314a3bd7278f803f7eefee1a959bf8ed99c6f9a8dd4bc30afa_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user:show-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 25,  109 => 24,  106 => 23,  103 => 22,  100 => 21,  94 => 20,  84 => 17,  76 => 16,  68 => 15,  61 => 10,  55 => 9,  45 => 4,  39 => 3,  32 => 1,  30 => 7,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('cssjs/user/css/list.css') }}">*/
/* {% endblock %}*/
/* */
/* {% set script_controller = 'cssjs/user/js/add-user.js' %}*/
/* */
/* {% block content_title %}*/
/*   <div>*/
/*     <h4>员工管理</h4>*/
/*   </div>*/
/*   <hr>*/
/*   <ul class="nav nav-tabs mbm job-status">*/
/*     <li {% if jobStatus == 1 %} class="active" {% endif %}><a href="{{ path('admin_injob_user_list') }}">在职</a></li>*/
/*     <li {% if jobStatus == 0 %} class="active" {% endif %} ><a href="{{ path('admin_outjob_user_list') }}">离职</a></li>*/
/*     <a class="btn btn-sm btn-success pull-right" href="{{ path('admin_user_add') }}">添加员工</a>*/
/*   </ul>*/
/* {% endblock %}*/
/* {% block content_body %}*/
/*   {% if jobStatus == 1 %}*/
/*     {% include 'AppBundle:user:injob.html.twig' %}*/
/*   {% else %}*/
/*     {% include 'AppBundle:user:outjob.html.twig' %}*/
/*   {% endif %}*/
/* {% endblock %}*/
