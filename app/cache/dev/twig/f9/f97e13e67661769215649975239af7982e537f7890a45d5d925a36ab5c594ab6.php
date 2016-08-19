<?php

/* AppBundle:User:show/show-work-info.html.twig */
class __TwigTemplate_f112d493652355a5c021d57f9962a54d28db3d53e494d589a061d1f46fa11dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:show/show-work-info.html.twig", 1);
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
        $__internal_73454150cdaa78eb44adaa6227b089d2058b7c60edb8a645c939c528c04ab929 = $this->env->getExtension("native_profiler");
        $__internal_73454150cdaa78eb44adaa6227b089d2058b7c60edb8a645c939c528c04ab929->enter($__internal_73454150cdaa78eb44adaa6227b089d2058b7c60edb8a645c939c528c04ab929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show/show-work-info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73454150cdaa78eb44adaa6227b089d2058b7c60edb8a645c939c528c04ab929->leave($__internal_73454150cdaa78eb44adaa6227b089d2058b7c60edb8a645c939c528c04ab929_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bc898264e416930f81f045a3f1d4eaf03fbe43d286c3dc50f0c34fd6f6231a2 = $this->env->getExtension("native_profiler");
        $__internal_0bc898264e416930f81f045a3f1d4eaf03fbe43d286c3dc50f0c34fd6f6231a2->enter($__internal_0bc898264e416930f81f045a3f1d4eaf03fbe43d286c3dc50f0c34fd6f6231a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
  <li role=\"button\"><a class=\"show-learn-info\"  data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_learn_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">学历信息</a></li>
  <li role=\"button\" class=\"active\"><a class=\"show-work-info\"  data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_work_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\" >工作信息</a></li>
  <li role=\"button\"><a class=\"show-other-info\"  data-url=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_other_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">其他信息</a></li>
";
        
        $__internal_0bc898264e416930f81f045a3f1d4eaf03fbe43d286c3dc50f0c34fd6f6231a2->leave($__internal_0bc898264e416930f81f045a3f1d4eaf03fbe43d286c3dc50f0c34fd6f6231a2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_627af3b0f55286dd381df4887706bf998d895c4e1ab944ec7e053869e4d96111 = $this->env->getExtension("native_profiler");
        $__internal_627af3b0f55286dd381df4887706bf998d895c4e1ab944ec7e053869e4d96111->enter($__internal_627af3b0f55286dd381df4887706bf998d895c4e1ab944ec7e053869e4d96111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workInfos"]) ? $context["workInfos"] : $this->getContext($context, "workInfos")));
        foreach ($context['_seq'] as $context["_key"] => $context["workInfo"]) {
            // line 17
            echo "  <table class=\"table table-bordered\">
    <tr>
      <td class=\"col-sm-3\">开始时间：</td>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["workInfo"], "startTime", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>结束时间：</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["workInfo"], "endTime", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>工作单位：</td>
      <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["workInfo"], "company", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>岗位职务：</td>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["workInfo"], "position", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>离职原因：</td>
      <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["workInfo"], "leaveReason", array()), "html", null, true);
            echo "</td>
    </tr>
  </table>
  <hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_627af3b0f55286dd381df4887706bf998d895c4e1ab944ec7e053869e4d96111->leave($__internal_627af3b0f55286dd381df4887706bf998d895c4e1ab944ec7e053869e4d96111_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show/show-work-info.html.twig";
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
/*   <li role="button"><a class="show-learn-info"  data-url="{{path('leader_user_learn_show',{id:userId})}}">学历信息</a></li>*/
/*   <li role="button" class="active"><a class="show-work-info"  data-url="{{path('leader_user_work_show',{id:userId})}}" >工作信息</a></li>*/
/*   <li role="button"><a class="show-other-info"  data-url="{{path('leader_user_other_show',{id:userId})}}">其他信息</a></li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {% for workInfo in workInfos%}*/
/*   <table class="table table-bordered">*/
/*     <tr>*/
/*       <td class="col-sm-3">开始时间：</td>*/
/*       <td>{{workInfo.startTime|date('Y-m-d')}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>结束时间：</td>*/
/*       <td>{{workInfo.endTime|date('Y-m-d')}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>工作单位：</td>*/
/*       <td>{{workInfo.company}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>岗位职务：</td>*/
/*       <td>{{workInfo.position}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>离职原因：</td>*/
/*       <td>{{workInfo.leaveReason}}</td>*/
/*     </tr>*/
/*   </table>*/
/*   <hr>*/
/* {% endfor %}*/
/* {% endblock %}*/
