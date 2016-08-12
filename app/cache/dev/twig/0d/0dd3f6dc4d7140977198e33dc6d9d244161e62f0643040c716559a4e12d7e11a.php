<?php

/* AppBundle:User:add-user/add-user.html.twig */
class __TwigTemplate_b83158eac7013638da14abd006f6ab756e69570bb0182f1d10ce4bed9eba058e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:add-user/add-user.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5a7ee336809221422cfc3d93cb0476ade2303481f0cc7326073b1d290c1d13a8 = $this->env->getExtension("native_profiler");
        $__internal_5a7ee336809221422cfc3d93cb0476ade2303481f0cc7326073b1d290c1d13a8->enter($__internal_5a7ee336809221422cfc3d93cb0476ade2303481f0cc7326073b1d290c1d13a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:add-user/add-user.html.twig"));

        // line 3
        $context["script_controller"] = "links/user/js/add-user.js";
        // line 4
        $context["nav"] = "user_list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a7ee336809221422cfc3d93cb0476ade2303481f0cc7326073b1d290c1d13a8->leave($__internal_5a7ee336809221422cfc3d93cb0476ade2303481f0cc7326073b1d290c1d13a8_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_6f9a35f0ceccf4c0a14cc6e9b584b8ced45007dafdea5686e2bd4d40ec4911e7 = $this->env->getExtension("native_profiler");
        $__internal_6f9a35f0ceccf4c0a14cc6e9b584b8ced45007dafdea5686e2bd4d40ec4911e7->enter($__internal_6f9a35f0ceccf4c0a14cc6e9b584b8ced45007dafdea5686e2bd4d40ec4911e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " <h4>添加员工</h4>";
        
        $__internal_6f9a35f0ceccf4c0a14cc6e9b584b8ced45007dafdea5686e2bd4d40ec4911e7->leave($__internal_6f9a35f0ceccf4c0a14cc6e9b584b8ced45007dafdea5686e2bd4d40ec4911e7_prof);

    }

    // line 6
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_626a2a980ddc224fe1c210b1471e7f121cec2ddbbf9c3bbfe0c14c13f4cc96a4 = $this->env->getExtension("native_profiler");
        $__internal_626a2a980ddc224fe1c210b1471e7f121cec2ddbbf9c3bbfe0c14c13f4cc96a4->enter($__internal_626a2a980ddc224fe1c210b1471e7f121cec2ddbbf9c3bbfe0c14c13f4cc96a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 7
        echo "
<form id=\"add-user-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_user_add");
        echo "\">
  <div class=\"add-user-body\">
    <legend class=\"text-primary\">基本信息</legend>
    ";
        // line 11
        $this->loadTemplate("AppBundle:User:add-user/user-basic-info.html.twig", "AppBundle:User:add-user/add-user.html.twig", 11)->display($context);
        // line 12
        echo "
    <legend class=\"text-primary\">
      家庭状况
      <button type=\"button\" class=\"btn btn-sm btn-success add-family-info\">新增</button>
    </legend>
    <div class=\"family\">
      ";
        // line 18
        $this->loadTemplate("AppBundle:User:add-user/user-family-info.html.twig", "AppBundle:User:add-user/add-user.html.twig", 18)->display($context);
        // line 19
        echo "    </div>

    <legend class=\"text-primary\">
      学习经历
      <button type=\"button\" class=\"btn btn-sm btn-success add-learn-info\">新增</button>
    </legend>
    <div class=\"learn\">
      ";
        // line 26
        $this->loadTemplate("AppBundle:User:add-user/user-learn-info.html.twig", "AppBundle:User:add-user/add-user.html.twig", 26)->display($context);
        // line 27
        echo "    </div>

    <legend class=\"text-primary\">
      工作履历
      <button type=\"button\" class=\"btn btn-sm btn-success add-work-info\">新增</button>
    </legend>
    <div class=\"work\">
      ";
        // line 34
        $this->loadTemplate("AppBundle:User:add-user/user-work-info.html.twig", "AppBundle:User:add-user/add-user.html.twig", 34)->display($context);
        // line 35
        echo "    </div>

    <legend class=\"text-primary\">其他信息</legend>
    ";
        // line 38
        $this->loadTemplate("AppBundle:User:add-user/user-other-info.html.twig", "AppBundle:User:add-user/add-user.html.twig", 38)->display($context);
        // line 39
        echo "  </div>
  <div class=\"footer btn-footer\">
    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("admin_user_present_list");
        echo "\" class=\"btn btn-default\">取消</a>
    ";
        // line 43
        echo "    <button class=\"btn btn-primary\" type=\"submit\">保存</button>
  </div>
</form>
";
        
        $__internal_626a2a980ddc224fe1c210b1471e7f121cec2ddbbf9c3bbfe0c14c13f4cc96a4->leave($__internal_626a2a980ddc224fe1c210b1471e7f121cec2ddbbf9c3bbfe0c14c13f4cc96a4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:add-user/add-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  112 => 41,  108 => 39,  106 => 38,  101 => 35,  99 => 34,  90 => 27,  88 => 26,  79 => 19,  77 => 18,  69 => 12,  67 => 11,  61 => 8,  58 => 7,  52 => 6,  40 => 5,  33 => 1,  31 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% set script_controller = 'links/user/js/add-user.js' %}*/
/* {% set nav = 'user_list' %}*/
/* {% block content_title %} <h4>添加员工</h4>{% endblock %}*/
/* {% block content_body %}*/
/* */
/* <form id="add-user-form" class="form-horizontal" method="post" action="{{ path('admin_user_add') }}">*/
/*   <div class="add-user-body">*/
/*     <legend class="text-primary">基本信息</legend>*/
/*     {% include 'AppBundle:User:add-user/user-basic-info.html.twig' %}*/
/* */
/*     <legend class="text-primary">*/
/*       家庭状况*/
/*       <button type="button" class="btn btn-sm btn-success add-family-info">新增</button>*/
/*     </legend>*/
/*     <div class="family">*/
/*       {% include 'AppBundle:User:add-user/user-family-info.html.twig' %}*/
/*     </div>*/
/* */
/*     <legend class="text-primary">*/
/*       学习经历*/
/*       <button type="button" class="btn btn-sm btn-success add-learn-info">新增</button>*/
/*     </legend>*/
/*     <div class="learn">*/
/*       {% include 'AppBundle:User:add-user/user-learn-info.html.twig' %}*/
/*     </div>*/
/* */
/*     <legend class="text-primary">*/
/*       工作履历*/
/*       <button type="button" class="btn btn-sm btn-success add-work-info">新增</button>*/
/*     </legend>*/
/*     <div class="work">*/
/*       {% include 'AppBundle:User:add-user/user-work-info.html.twig' %}*/
/*     </div>*/
/* */
/*     <legend class="text-primary">其他信息</legend>*/
/*     {% include 'AppBundle:User:add-user/user-other-info.html.twig' %}*/
/*   </div>*/
/*   <div class="footer btn-footer">*/
/*     <a href="{{ path('admin_user_present_list') }}" class="btn btn-default">取消</a>*/
/*     {# <a href="{{ path('admin_user_add') }}" class="btn btn-primary add-user">保存</a> #}*/
/*     <button class="btn btn-primary" type="submit">保存</button>*/
/*   </div>*/
/* </form>*/
/* {% endblock %}*/
/* */
/* */
/* */
