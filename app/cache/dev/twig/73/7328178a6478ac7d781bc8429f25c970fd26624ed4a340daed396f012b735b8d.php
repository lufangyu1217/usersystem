<?php

/* AppBundle:User:show/show-other-info.html.twig */
class __TwigTemplate_15b599882b58a40baa23395b66f9a47e4a9079a530b087dd6e126b396ec4e9ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:show/show-other-info.html.twig", 1);
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
        $__internal_583c3d00de7bf2364711255d726131f32f3d332b4b0ce7d5ab8c000a53c94a2d = $this->env->getExtension("native_profiler");
        $__internal_583c3d00de7bf2364711255d726131f32f3d332b4b0ce7d5ab8c000a53c94a2d->enter($__internal_583c3d00de7bf2364711255d726131f32f3d332b4b0ce7d5ab8c000a53c94a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show/show-other-info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_583c3d00de7bf2364711255d726131f32f3d332b4b0ce7d5ab8c000a53c94a2d->leave($__internal_583c3d00de7bf2364711255d726131f32f3d332b4b0ce7d5ab8c000a53c94a2d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72b6b05604005d4d00ee28b8eece81f834be759ef40ee5d0967bcd1b99f8b9f4 = $this->env->getExtension("native_profiler");
        $__internal_72b6b05604005d4d00ee28b8eece81f834be759ef40ee5d0967bcd1b99f8b9f4->enter($__internal_72b6b05604005d4d00ee28b8eece81f834be759ef40ee5d0967bcd1b99f8b9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "<div class=\"page-header\">
  <h4>员工详情</h4>
</div>
<ul class=\"nav nav-tabs\">
  <li role=\"button\"><a class=\"show-basic-info\" data-url=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_basic_show", array("id" => $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "userId", array()))), "html", null, true);
        echo "\">基础信息</a></li>
  <li role=\"button\"><a class=\"show-family-info\"  data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_family_show", array("id" => $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "userId", array()))), "html", null, true);
        echo "\">家庭信息</a></li>
  <li role=\"button\"><a class=\"show-learn-info\"  data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_learn_show", array("id" => $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "userId", array()))), "html", null, true);
        echo "\">学历信息</a></li>
  <li role=\"button\"><a class=\"show-work-info\"  data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_work_show", array("id" => $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "userId", array()))), "html", null, true);
        echo "\" >工作信息</a></li>
  <li role=\"button\"  class=\"active\"><a class=\"show-other-info\"  data-url=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_other_show", array("id" => $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "userId", array()))), "html", null, true);
        echo "\">其他信息</a></li>
";
        
        $__internal_72b6b05604005d4d00ee28b8eece81f834be759ef40ee5d0967bcd1b99f8b9f4->leave($__internal_72b6b05604005d4d00ee28b8eece81f834be759ef40ee5d0967bcd1b99f8b9f4_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_da00b42b8d6c6e8049ae8dc8f4989d58373d42fb41ce546a62d171b84cec782e = $this->env->getExtension("native_profiler");
        $__internal_da00b42b8d6c6e8049ae8dc8f4989d58373d42fb41ce546a62d171b84cec782e->enter($__internal_da00b42b8d6c6e8049ae8dc8f4989d58373d42fb41ce546a62d171b84cec782e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "  <table class=\"table table-bordered\">
    <tr>
      <td class=\"col-sm-3\">所受培训及所具有证书：</td>
      <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "reward", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>自我评价：</td>
      <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "selfAssessment", array()), "html", null, true);
        echo "</td>
    </tr>
  </table>
";
        
        $__internal_da00b42b8d6c6e8049ae8dc8f4989d58373d42fb41ce546a62d171b84cec782e->leave($__internal_da00b42b8d6c6e8049ae8dc8f4989d58373d42fb41ce546a62d171b84cec782e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show/show-other-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  83 => 19,  78 => 16,  72 => 15,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}*/
/* <div class="page-header">*/
/*   <h4>员工详情</h4>*/
/* </div>*/
/* <ul class="nav nav-tabs">*/
/*   <li role="button"><a class="show-basic-info" data-url="{{path('user_basic_show',{id:otherInfo.userId})}}">基础信息</a></li>*/
/*   <li role="button"><a class="show-family-info"  data-url="{{path('leader_user_family_show',{id:otherInfo.userId})}}">家庭信息</a></li>*/
/*   <li role="button"><a class="show-learn-info"  data-url="{{path('leader_user_learn_show',{id:otherInfo.userId})}}">学历信息</a></li>*/
/*   <li role="button"><a class="show-work-info"  data-url="{{path('leader_user_work_show',{id:otherInfo.userId})}}" >工作信息</a></li>*/
/*   <li role="button"  class="active"><a class="show-other-info"  data-url="{{path('leader_user_other_show',{id:otherInfo.userId})}}">其他信息</a></li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <table class="table table-bordered">*/
/*     <tr>*/
/*       <td class="col-sm-3">所受培训及所具有证书：</td>*/
/*       <td>{{otherInfo.reward}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>自我评价：</td>*/
/*       <td>{{otherInfo.selfAssessment}}</td>*/
/*     </tr>*/
/*   </table>*/
/* {% endblock %}*/
/* */
