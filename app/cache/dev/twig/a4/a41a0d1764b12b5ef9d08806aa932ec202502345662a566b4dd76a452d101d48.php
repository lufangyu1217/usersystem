<?php

/* AppBundle:User:show-user/show-work-info.html.twig */
class __TwigTemplate_1e26f232a4365070a46219af728b600b76ebd4f7ebb22e38a608cc543b643854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:User:show-user/show-user-modal.html.twig", "AppBundle:User:show-user/show-work-info.html.twig", 1);
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
        $__internal_e6617ca2ccaf2fcfad23c04cdf1b10cee19c178e4bdd7a610729c343e448f051 = $this->env->getExtension("native_profiler");
        $__internal_e6617ca2ccaf2fcfad23c04cdf1b10cee19c178e4bdd7a610729c343e448f051->enter($__internal_e6617ca2ccaf2fcfad23c04cdf1b10cee19c178e4bdd7a610729c343e448f051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show-user/show-work-info.html.twig"));

        // line 2
        $context["script_controller_show"] = "links/user/js/add-user.js";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6617ca2ccaf2fcfad23c04cdf1b10cee19c178e4bdd7a610729c343e448f051->leave($__internal_e6617ca2ccaf2fcfad23c04cdf1b10cee19c178e4bdd7a610729c343e448f051_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_36c716e8cc37986e714f9b41144533d7f0c233550b075e465e4314a0cc8968e8 = $this->env->getExtension("native_profiler");
        $__internal_36c716e8cc37986e714f9b41144533d7f0c233550b075e465e4314a0cc8968e8->enter($__internal_36c716e8cc37986e714f9b41144533d7f0c233550b075e465e4314a0cc8968e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
  <li role=\"button\"><a class=\"show-learn-info\"  data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_learn_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">学历信息</a></li>
  <li role=\"button\" class=\"active\"><a class=\"show-work-info\"  data-url=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_work_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\" >工作信息</a></li>
  <li role=\"button\"><a class=\"show-other-info\"  data-url=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_other_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">其他信息</a></li>
";
        
        $__internal_36c716e8cc37986e714f9b41144533d7f0c233550b075e465e4314a0cc8968e8->leave($__internal_36c716e8cc37986e714f9b41144533d7f0c233550b075e465e4314a0cc8968e8_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_c12f5c16ee3745a7554da324f40319d24a94fe33ba0ce9ce8819acdafc93d1d3 = $this->env->getExtension("native_profiler");
        $__internal_c12f5c16ee3745a7554da324f40319d24a94fe33ba0ce9ce8819acdafc93d1d3->enter($__internal_c12f5c16ee3745a7554da324f40319d24a94fe33ba0ce9ce8819acdafc93d1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workInfos"]) ? $context["workInfos"] : $this->getContext($context, "workInfos")));
        foreach ($context['_seq'] as $context["_key"] => $context["workInfo"]) {
            // line 18
            echo "  <form class=\"form-horizontal\">
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label time\">开始时间：</label>
        <div class=\"col-sm-3\" align=\"center\">
          ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["workInfo"], "startTime", array()), "Y-m-d"), "html", null, true);
            echo "
        </div>
      <label for=\"inputEmail3\" class=\"col-sm-3 control-label time\">结束时间：</label>
        <div class=\"col-sm-3\" align=\"center\">
          ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["workInfo"], "endTime", array()), "Y-m-d"), "html", null, true);
            echo "
        </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">工作单位：</label>
        <div class=\"col-sm-3\" align=\"center\">
          ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["workInfo"], "company", array()), "html", null, true);
            echo "
        </div>

      <label for=\"inputEmail3\" class=\"col-sm-3 control-label\">岗位职务：</label>
        <div class=\"col-sm-3\" align=\"center\">
          ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["workInfo"], "position", array()), "html", null, true);
            echo "
        </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">离职原因：</label>
        <div class=\"col-sm-3\" align=\"center\">
          ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["workInfo"], "leaveReason", array()), "html", null, true);
            echo "
        </div>
    </div>
  </form>
  <hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c12f5c16ee3745a7554da324f40319d24a94fe33ba0ce9ce8819acdafc93d1d3->leave($__internal_c12f5c16ee3745a7554da324f40319d24a94fe33ba0ce9ce8819acdafc93d1d3_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5934e74d0e212de6972c09f6d287e94664e7c5e9ca4538ab551f22812bbb92db = $this->env->getExtension("native_profiler");
        $__internal_5934e74d0e212de6972c09f6d287e94664e7c5e9ca4538ab551f22812bbb92db->enter($__internal_5934e74d0e212de6972c09f6d287e94664e7c5e9ca4538ab551f22812bbb92db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_5934e74d0e212de6972c09f6d287e94664e7c5e9ca4538ab551f22812bbb92db->leave($__internal_5934e74d0e212de6972c09f6d287e94664e7c5e9ca4538ab551f22812bbb92db_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show-user/show-work-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 51,  125 => 43,  116 => 37,  108 => 32,  99 => 26,  92 => 22,  86 => 18,  82 => 17,  76 => 16,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  45 => 5,  39 => 4,  32 => 1,  30 => 2,  11 => 1,);
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
/*   <li role="button"><a class="show-learn-info"  data-url="{{path('admin_user_learn_show',{id:userId})}}">学历信息</a></li>*/
/*   <li role="button" class="active"><a class="show-work-info"  data-url="{{path('admin_user_work_show',{id:userId})}}" >工作信息</a></li>*/
/*   <li role="button"><a class="show-other-info"  data-url="{{path('admin_user_other_show',{id:userId})}}">其他信息</a></li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {% for workInfo in workInfos%}*/
/*   <form class="form-horizontal">*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label time">开始时间：</label>*/
/*         <div class="col-sm-3" align="center">*/
/*           {{workInfo.startTime|date('Y-m-d')}}*/
/*         </div>*/
/*       <label for="inputEmail3" class="col-sm-3 control-label time">结束时间：</label>*/
/*         <div class="col-sm-3" align="center">*/
/*           {{workInfo.endTime|date('Y-m-d')}}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label">工作单位：</label>*/
/*         <div class="col-sm-3" align="center">*/
/*           {{workInfo.company}}*/
/*         </div>*/
/* */
/*       <label for="inputEmail3" class="col-sm-3 control-label">岗位职务：</label>*/
/*         <div class="col-sm-3" align="center">*/
/*           {{workInfo.position}}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label">离职原因：</label>*/
/*         <div class="col-sm-3" align="center">*/
/*           {{workInfo.leaveReason}}*/
/*         </div>*/
/*     </div>*/
/*   </form>*/
/*   <hr>*/
/* {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block footer %}{% endblock %}*/
