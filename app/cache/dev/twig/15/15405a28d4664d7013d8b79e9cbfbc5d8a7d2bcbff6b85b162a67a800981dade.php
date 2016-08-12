<?php

/* AppBundle:User:show-user/show-learn-info.html.twig */
class __TwigTemplate_ed411721d3e5795269b84337a164d1d5432cb9158b41ba75a0df7551c8482c2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:User:show-user/show-user-modal.html.twig", "AppBundle:User:show-user/show-learn-info.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:User:show-user/show-user-modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5b86183a9a3b0240f19eb287d70650ea78d1be9ec841306a708cb50cd75053b = $this->env->getExtension("native_profiler");
        $__internal_f5b86183a9a3b0240f19eb287d70650ea78d1be9ec841306a708cb50cd75053b->enter($__internal_f5b86183a9a3b0240f19eb287d70650ea78d1be9ec841306a708cb50cd75053b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show-user/show-learn-info.html.twig"));

        // line 2
        $context["script_controller_show"] = "links/user/js/add-user.js";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5b86183a9a3b0240f19eb287d70650ea78d1be9ec841306a708cb50cd75053b->leave($__internal_f5b86183a9a3b0240f19eb287d70650ea78d1be9ec841306a708cb50cd75053b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c78fc179bd5b54fd665072af0df032c45efc122a63ddfb73e0afb0a7dca0d241 = $this->env->getExtension("native_profiler");
        $__internal_c78fc179bd5b54fd665072af0df032c45efc122a63ddfb73e0afb0a7dca0d241->enter($__internal_c78fc179bd5b54fd665072af0df032c45efc122a63ddfb73e0afb0a7dca0d241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "<div class=\"page-header\">
  <h4>员工详情</h4>
</div>
<ul class=\"nav nav-tabs\">
  <li role=\"button\"><a class=\"show-basic-info\" data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_basic_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">基础信息</a></li>
  <li role=\"button\"><a class=\"show-family-info\"  data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_family_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">家庭信息</a></li>
  <li role=\"button\" class=\"active\"><a class=\"show-learn-info\"  data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_learn_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">学历信息</a></li>
  <li role=\"button\"><a class=\"show-work-info\"  data-url=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_work_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">工作信息</a></li>
  <li role=\"button\"><a class=\"show-other-info\"  data-url=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_other_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">其他信息</a></li>
";
        
        $__internal_c78fc179bd5b54fd665072af0df032c45efc122a63ddfb73e0afb0a7dca0d241->leave($__internal_c78fc179bd5b54fd665072af0df032c45efc122a63ddfb73e0afb0a7dca0d241_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aec83cb2e88f43f8a0f92a83f9ed034364c5217bfdc0b47948360f4d14ed119 = $this->env->getExtension("native_profiler");
        $__internal_4aec83cb2e88f43f8a0f92a83f9ed034364c5217bfdc0b47948360f4d14ed119->enter($__internal_4aec83cb2e88f43f8a0f92a83f9ed034364c5217bfdc0b47948360f4d14ed119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eduExperiences"]) ? $context["eduExperiences"] : $this->getContext($context, "eduExperiences")));
        foreach ($context['_seq'] as $context["_key"] => $context["eduExperience"]) {
            // line 18
            echo "<form class=\"form-horizontal\">
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label time\">开始时间：</label>
    <div class=\"col-sm-3\" align=\"center\">
      ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["eduExperience"], "startTime", array()), "Y-m-d"), "html", null, true);
            echo "
    </div>
    <label for=\"inputEmail3\" class=\"col-sm-3 control-label time\">结束时间：</label>
    <div class=\"col-sm-3\" align=\"center\">
      ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["eduExperience"], "endTime", array()), "Y-m-d"), "html", null, true);
            echo "
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">院校名称：</label>
    <div class=\"col-sm-3\" align=\"center\">
      ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["eduExperience"], "schoolName", array()), "html", null, true);
            echo "
    </div>
    <label for=\"inputEmail3\" class=\"col-sm-3 control-label\">所学专业：</label>
    <div class=\"col-sm-3\" align=\"center\">
      ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["eduExperience"], "profession", array()), "html", null, true);
            echo "
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">担任职务：</label>
    <div class=\"col-sm-3\" align=\"center\">
      ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["eduExperience"], "position", array()), "html", null, true);
            echo "
    </div>
  </div>
</form>
<hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eduExperience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4aec83cb2e88f43f8a0f92a83f9ed034364c5217bfdc0b47948360f4d14ed119->leave($__internal_4aec83cb2e88f43f8a0f92a83f9ed034364c5217bfdc0b47948360f4d14ed119_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2d91554bba4079b31e6091d3b1407404daaa48244bbfc8cc848d992e66f34d02 = $this->env->getExtension("native_profiler");
        $__internal_2d91554bba4079b31e6091d3b1407404daaa48244bbfc8cc848d992e66f34d02->enter($__internal_2d91554bba4079b31e6091d3b1407404daaa48244bbfc8cc848d992e66f34d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_2d91554bba4079b31e6091d3b1407404daaa48244bbfc8cc848d992e66f34d02->leave($__internal_2d91554bba4079b31e6091d3b1407404daaa48244bbfc8cc848d992e66f34d02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show-user/show-learn-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 50,  124 => 42,  115 => 36,  108 => 32,  99 => 26,  92 => 22,  86 => 18,  82 => 17,  76 => 16,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  45 => 5,  39 => 4,  32 => 1,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle:User:show-user/show-user-modal.html.twig' %}*/
/* {% set script_controller_show = 'links/user/js/add-user.js' %}*/
/* */
/* {% block title %}*/
/* <div class="page-header">*/
/*   <h4>员工详情</h4>*/
/* </div>*/
/* <ul class="nav nav-tabs">*/
/*   <li role="button"><a class="show-basic-info" data-url="{{path('admin_user_basic_show',{id:userId})}}">基础信息</a></li>*/
/*   <li role="button"><a class="show-family-info"  data-url="{{path('admin_user_family_show',{id:userId})}}">家庭信息</a></li>*/
/*   <li role="button" class="active"><a class="show-learn-info"  data-url="{{path('admin_user_learn_show',{id:userId})}}">学历信息</a></li>*/
/*   <li role="button"><a class="show-work-info"  data-url="{{path('admin_user_work_show',{id:userId})}}">工作信息</a></li>*/
/*   <li role="button"><a class="show-other-info"  data-url="{{path('admin_user_other_show',{id:userId})}}">其他信息</a></li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {% for eduExperience in eduExperiences%}*/
/* <form class="form-horizontal">*/
/*   <div class="form-group">*/
/*     <label for="inputEmail3" class="col-sm-2 control-label time">开始时间：</label>*/
/*     <div class="col-sm-3" align="center">*/
/*       {{eduExperience.startTime|date('Y-m-d')}}*/
/*     </div>*/
/*     <label for="inputEmail3" class="col-sm-3 control-label time">结束时间：</label>*/
/*     <div class="col-sm-3" align="center">*/
/*       {{eduExperience.endTime|date('Y-m-d')}}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label for="inputEmail3" class="col-sm-2 control-label">院校名称：</label>*/
/*     <div class="col-sm-3" align="center">*/
/*       {{eduExperience.schoolName}}*/
/*     </div>*/
/*     <label for="inputEmail3" class="col-sm-3 control-label">所学专业：</label>*/
/*     <div class="col-sm-3" align="center">*/
/*       {{eduExperience.profession}}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label for="inputEmail3" class="col-sm-2 control-label">担任职务：</label>*/
/*     <div class="col-sm-3" align="center">*/
/*       {{eduExperience.position}}*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* <hr>*/
/* {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block footer %}{% endblock %}*/
