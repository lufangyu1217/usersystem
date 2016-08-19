<?php

/* AppBundle:User:show/show-family-info.html.twig */
class __TwigTemplate_a2b3f5d080c1beaabbfbf4b232ff7bb7e00527dbed2ae1a2f1369277858509cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:show/show-family-info.html.twig", 1);
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
        $__internal_404f9581c4e9646418085639f6e2b2ffc703ed44ff3dabf266ba71abeed775b4 = $this->env->getExtension("native_profiler");
        $__internal_404f9581c4e9646418085639f6e2b2ffc703ed44ff3dabf266ba71abeed775b4->enter($__internal_404f9581c4e9646418085639f6e2b2ffc703ed44ff3dabf266ba71abeed775b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show/show-family-info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_404f9581c4e9646418085639f6e2b2ffc703ed44ff3dabf266ba71abeed775b4->leave($__internal_404f9581c4e9646418085639f6e2b2ffc703ed44ff3dabf266ba71abeed775b4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfa8fadca98f44c4e25a86dce689ccb931e096f89ef64f1789f5b3f09b60231b = $this->env->getExtension("native_profiler");
        $__internal_cfa8fadca98f44c4e25a86dce689ccb931e096f89ef64f1789f5b3f09b60231b->enter($__internal_cfa8fadca98f44c4e25a86dce689ccb931e096f89ef64f1789f5b3f09b60231b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "<div class=\"page-header\">
  <h4>员工详情</h4>
</div>
<ul class=\"nav nav-tabs\">
  <li role=\"button\"><a class=\"show-basic-info\" data-url=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_basic_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">基础信息</a></li>
  <li role=\"button\" class=\"active\"><a class=\"show-family-info\"  data-url=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_family_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">家庭信息</a></li>
  <li role=\"button\"><a class=\"show-learn-info\"  data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_learn_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">学历信息</a></li>
  <li role=\"button\"><a class=\"show-work-info\"  data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_work_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">工作信息</a></li>
  <li role=\"button\"><a class=\"show-other-info\"  data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_other_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">其他信息</a></li>
";
        
        $__internal_cfa8fadca98f44c4e25a86dce689ccb931e096f89ef64f1789f5b3f09b60231b->leave($__internal_cfa8fadca98f44c4e25a86dce689ccb931e096f89ef64f1789f5b3f09b60231b_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_951c43b18ae0ca12a0edd91eb22fcf830cf4aea186a3c3b7d7086b04c9f31d30 = $this->env->getExtension("native_profiler");
        $__internal_951c43b18ae0ca12a0edd91eb22fcf830cf4aea186a3c3b7d7086b04c9f31d30->enter($__internal_951c43b18ae0ca12a0edd91eb22fcf830cf4aea186a3c3b7d7086b04c9f31d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["familyMembers"]) ? $context["familyMembers"] : $this->getContext($context, "familyMembers")));
        foreach ($context['_seq'] as $context["_key"] => $context["familyMember"]) {
            // line 16
            echo "  <table class=\"table table-bordered\">
    <tr>
      <td class=\"col-sm-3\">称谓：</td>
      <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "member", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>姓名：</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "trueName", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>年龄：</td>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "age", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>联系电话：</td>
      <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "phone", array()), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <td>工作单位及职务：</td>
      <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "job", array()), "html", null, true);
            echo "</td>
    </tr>
  </table>
  <hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['familyMember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_951c43b18ae0ca12a0edd91eb22fcf830cf4aea186a3c3b7d7086b04c9f31d30->leave($__internal_951c43b18ae0ca12a0edd91eb22fcf830cf4aea186a3c3b7d7086b04c9f31d30_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show/show-family-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  108 => 31,  101 => 27,  94 => 23,  87 => 19,  82 => 16,  78 => 15,  72 => 14,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* {% block title %}*/
/* <div class="page-header">*/
/*   <h4>员工详情</h4>*/
/* </div>*/
/* <ul class="nav nav-tabs">*/
/*   <li role="button"><a class="show-basic-info" data-url="{{path('user_basic_show',{id:userId})}}">基础信息</a></li>*/
/*   <li role="button" class="active"><a class="show-family-info"  data-url="{{path('leader_user_family_show',{id:userId})}}">家庭信息</a></li>*/
/*   <li role="button"><a class="show-learn-info"  data-url="{{path('leader_user_learn_show',{id:userId})}}">学历信息</a></li>*/
/*   <li role="button"><a class="show-work-info"  data-url="{{path('leader_user_work_show',{id:userId})}}">工作信息</a></li>*/
/*   <li role="button"><a class="show-other-info"  data-url="{{path('leader_user_other_show',{id:userId})}}">其他信息</a></li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {% for familyMember in familyMembers%}*/
/*   <table class="table table-bordered">*/
/*     <tr>*/
/*       <td class="col-sm-3">称谓：</td>*/
/*       <td>{{familyMember.member}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>姓名：</td>*/
/*       <td>{{familyMember.trueName}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>年龄：</td>*/
/*       <td>{{familyMember.age}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>联系电话：</td>*/
/*       <td>{{familyMember.phone}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>工作单位及职务：</td>*/
/*       <td>{{familyMember.job}}</td>*/
/*     </tr>*/
/*   </table>*/
/*   <hr>*/
/* {% endfor %}*/
/* {% endblock %}*/
/* */
