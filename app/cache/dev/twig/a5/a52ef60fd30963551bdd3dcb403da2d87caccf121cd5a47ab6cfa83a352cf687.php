<?php

/* AppBundle:User:show/show-learn-info.html.twig */
class __TwigTemplate_cb3882138dfd6fa205090f792eb28b0f405e99add14f09bfbbf5abefe82d5b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:show/show-learn-info.html.twig", 1);
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
        $__internal_8d57fccf3ff8c4a2ae5b9727987883ceb7996328498dfc69f2b16314fa7a261e = $this->env->getExtension("native_profiler");
        $__internal_8d57fccf3ff8c4a2ae5b9727987883ceb7996328498dfc69f2b16314fa7a261e->enter($__internal_8d57fccf3ff8c4a2ae5b9727987883ceb7996328498dfc69f2b16314fa7a261e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show/show-learn-info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d57fccf3ff8c4a2ae5b9727987883ceb7996328498dfc69f2b16314fa7a261e->leave($__internal_8d57fccf3ff8c4a2ae5b9727987883ceb7996328498dfc69f2b16314fa7a261e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f213a58b28bdeacb7752f3158b8ba10ea3e28099865ef27ce6356e72a2420e20 = $this->env->getExtension("native_profiler");
        $__internal_f213a58b28bdeacb7752f3158b8ba10ea3e28099865ef27ce6356e72a2420e20->enter($__internal_f213a58b28bdeacb7752f3158b8ba10ea3e28099865ef27ce6356e72a2420e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "<div class=\"page-header\">
  <h4>员工详情</h4>
</div>
<ul class=\"nav nav-tabs\">
  <li role=\"button\"><a class=\"show-basic-info\" data-url=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_basic_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">基础信息</a></li>
  <li role=\"button\"><a class=\"show-family-info\"  data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_family_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">家庭信息</a></li>
  <li role=\"button\" class=\"active\"><a class=\"show-learn-info\"  data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_learn_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">学历信息</a></li>
  <li role=\"button\"><a class=\"show-work-info\"  data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_work_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">工作信息</a></li>
  <li role=\"button\"><a class=\"show-other-info\"  data-url=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_other_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">其他信息</a></li>
";
        
        $__internal_f213a58b28bdeacb7752f3158b8ba10ea3e28099865ef27ce6356e72a2420e20->leave($__internal_f213a58b28bdeacb7752f3158b8ba10ea3e28099865ef27ce6356e72a2420e20_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_0449d08bb4b28fc457fc9bbda63dddcb22695f619abea9d1e7b8cf811346383b = $this->env->getExtension("native_profiler");
        $__internal_0449d08bb4b28fc457fc9bbda63dddcb22695f619abea9d1e7b8cf811346383b->enter($__internal_0449d08bb4b28fc457fc9bbda63dddcb22695f619abea9d1e7b8cf811346383b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eduExperiences"]) ? $context["eduExperiences"] : $this->getContext($context, "eduExperiences")));
        foreach ($context['_seq'] as $context["_key"] => $context["eduExperience"]) {
            // line 17
            echo "  <table class=\"table table-bordered\">
    <tr>
      <td class=\"col-sm-3\">开始时间：</td>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["eduExperience"], "startTime", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>结束时间：</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["eduExperience"], "endTime", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>院校名称：</td>
      <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["eduExperience"], "schoolName", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>所学专业：</td>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["eduExperience"], "profession", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>担任职务：</td>
      <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["eduExperience"], "position", array()), "html", null, true);
            echo "</td>
    </tr>
  </table>
  <hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eduExperience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0449d08bb4b28fc457fc9bbda63dddcb22695f619abea9d1e7b8cf811346383b->leave($__internal_0449d08bb4b28fc457fc9bbda63dddcb22695f619abea9d1e7b8cf811346383b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show/show-learn-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 36,  108 => 32,  101 => 28,  94 => 24,  87 => 20,  82 => 17,  78 => 16,  72 => 15,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}*/
/* <div class="page-header">*/
/*   <h4>员工详情</h4>*/
/* </div>*/
/* <ul class="nav nav-tabs">*/
/*   <li role="button"><a class="show-basic-info" data-url="{{path('user_basic_show',{id:userId})}}">基础信息</a></li>*/
/*   <li role="button"><a class="show-family-info"  data-url="{{path('leader_user_family_show',{id:userId})}}">家庭信息</a></li>*/
/*   <li role="button" class="active"><a class="show-learn-info"  data-url="{{path('leader_user_learn_show',{id:userId})}}">学历信息</a></li>*/
/*   <li role="button"><a class="show-work-info"  data-url="{{path('leader_user_work_show',{id:userId})}}">工作信息</a></li>*/
/*   <li role="button"><a class="show-other-info"  data-url="{{path('leader_user_other_show',{id:userId})}}">其他信息</a></li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {% for eduExperience in eduExperiences%}*/
/*   <table class="table table-bordered">*/
/*     <tr>*/
/*       <td class="col-sm-3">开始时间：</td>*/
/*       <td>{{eduExperience.startTime|date('Y-m-d')}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>结束时间：</td>*/
/*       <td>{{eduExperience.endTime|date('Y-m-d')}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>院校名称：</td>*/
/*       <td>{{eduExperience.schoolName}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>所学专业：</td>*/
/*       <td>{{eduExperience.profession}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>担任职务：</td>*/
/*       <td>{{eduExperience.position}}</td>*/
/*     </tr>*/
/*   </table>*/
/*   <hr>*/
/* {% endfor %}*/
/* {% endblock %}*/
/* */
