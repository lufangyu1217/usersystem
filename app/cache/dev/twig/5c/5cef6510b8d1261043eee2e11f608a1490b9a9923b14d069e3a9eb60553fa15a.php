<?php

/* AppBundle:User:show-user/show-family-info.html.twig */
class __TwigTemplate_aa708dcc73aaccb41818d981e2d4ce34759f1b2a163a5da74dffd56080718c27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:User:show-user/show-user-modal.html.twig", "AppBundle:User:show-user/show-family-info.html.twig", 1);
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
        $__internal_40dc09ec512a31c88412e54831929c54da077eb039f40806bc7e59f3a6cbdbf0 = $this->env->getExtension("native_profiler");
        $__internal_40dc09ec512a31c88412e54831929c54da077eb039f40806bc7e59f3a6cbdbf0->enter($__internal_40dc09ec512a31c88412e54831929c54da077eb039f40806bc7e59f3a6cbdbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show-user/show-family-info.html.twig"));

        // line 2
        $context["script_controller_show"] = "links/user/js/add-user.js";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40dc09ec512a31c88412e54831929c54da077eb039f40806bc7e59f3a6cbdbf0->leave($__internal_40dc09ec512a31c88412e54831929c54da077eb039f40806bc7e59f3a6cbdbf0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fa610136220c24a93b619c62c43de5df4e320fcc9b5553afd6d3c9cb2f20a03 = $this->env->getExtension("native_profiler");
        $__internal_3fa610136220c24a93b619c62c43de5df4e320fcc9b5553afd6d3c9cb2f20a03->enter($__internal_3fa610136220c24a93b619c62c43de5df4e320fcc9b5553afd6d3c9cb2f20a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "<div class=\"page-header\">
  <h4>员工详情</h4>
</div>
<ul class=\"nav nav-tabs\">
  <li role=\"button\"><a class=\"show-basic-info\" data-url=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_basic_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">基础信息</a></li>
  <li role=\"button\" class=\"active\"><a class=\"show-family-info\"  data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_family_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">家庭信息</a></li>
  <li role=\"button\"><a class=\"show-learn-info\"  data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_learn_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">学历信息</a></li>
  <li role=\"button\"><a class=\"show-work-info\"  data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_work_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">工作信息</a></li>
  <li role=\"button\"><a class=\"show-other-info\"  data-url=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_other_show", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">其他信息</a></li>
";
        
        $__internal_3fa610136220c24a93b619c62c43de5df4e320fcc9b5553afd6d3c9cb2f20a03->leave($__internal_3fa610136220c24a93b619c62c43de5df4e320fcc9b5553afd6d3c9cb2f20a03_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4e59952e9f7796dbb17ecb3f6713ac5a3d361ef42e805d1666d4c4652a338dc = $this->env->getExtension("native_profiler");
        $__internal_d4e59952e9f7796dbb17ecb3f6713ac5a3d361ef42e805d1666d4c4652a338dc->enter($__internal_d4e59952e9f7796dbb17ecb3f6713ac5a3d361ef42e805d1666d4c4652a338dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["familyMembers"]) ? $context["familyMembers"] : $this->getContext($context, "familyMembers")));
        foreach ($context['_seq'] as $context["_key"] => $context["familyMember"]) {
            // line 17
            echo "  <form class=\"form-horizontal\">
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">称谓：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "member", array()), "html", null, true);
            echo "
      </div>
      <label class=\"col-sm-3 control-label\">姓名：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "trueName", array()), "html", null, true);
            echo "
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">年龄：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "age", array()), "html", null, true);
            echo "
      </div>

      <label class=\"col-sm-3 control-label\">联系电话：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "phone", array()), "html", null, true);
            echo "
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">工作单位及职务：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "job", array()), "html", null, true);
            echo "
      </div>
    </div>
  </form>
  <hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['familyMember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d4e59952e9f7796dbb17ecb3f6713ac5a3d361ef42e805d1666d4c4652a338dc->leave($__internal_d4e59952e9f7796dbb17ecb3f6713ac5a3d361ef42e805d1666d4c4652a338dc_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7b5cf5898c724d6a6158cd4cb8dbe1dfcab1deb4381ae59d00719b0388e8a456 = $this->env->getExtension("native_profiler");
        $__internal_7b5cf5898c724d6a6158cd4cb8dbe1dfcab1deb4381ae59d00719b0388e8a456->enter($__internal_7b5cf5898c724d6a6158cd4cb8dbe1dfcab1deb4381ae59d00719b0388e8a456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_7b5cf5898c724d6a6158cd4cb8dbe1dfcab1deb4381ae59d00719b0388e8a456->leave($__internal_7b5cf5898c724d6a6158cd4cb8dbe1dfcab1deb4381ae59d00719b0388e8a456_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show-user/show-family-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 49,  125 => 42,  116 => 36,  108 => 31,  99 => 25,  92 => 21,  86 => 17,  82 => 16,  76 => 15,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  45 => 4,  39 => 3,  32 => 1,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle:User:show-user/show-user-modal.html.twig' %}*/
/* {% set script_controller_show = 'links/user/js/add-user.js' %}*/
/* {% block title %}*/
/* <div class="page-header">*/
/*   <h4>员工详情</h4>*/
/* </div>*/
/* <ul class="nav nav-tabs">*/
/*   <li role="button"><a class="show-basic-info" data-url="{{path('admin_user_basic_show',{id:userId})}}">基础信息</a></li>*/
/*   <li role="button" class="active"><a class="show-family-info"  data-url="{{path('admin_user_family_show',{id:userId})}}">家庭信息</a></li>*/
/*   <li role="button"><a class="show-learn-info"  data-url="{{path('admin_user_learn_show',{id:userId})}}">学历信息</a></li>*/
/*   <li role="button"><a class="show-work-info"  data-url="{{path('admin_user_work_show',{id:userId})}}">工作信息</a></li>*/
/*   <li role="button"><a class="show-other-info"  data-url="{{path('admin_user_other_show',{id:userId})}}">其他信息</a></li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {% for familyMember in familyMembers%}*/
/*   <form class="form-horizontal">*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label">称谓：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{familyMember.member}}*/
/*       </div>*/
/*       <label class="col-sm-3 control-label">姓名：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{familyMember.trueName}}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label">年龄：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{familyMember.age}}*/
/*       </div>*/
/* */
/*       <label class="col-sm-3 control-label">联系电话：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{familyMember.phone}}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label">工作单位及职务：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{familyMember.job}}*/
/*       </div>*/
/*     </div>*/
/*   </form>*/
/*   <hr>*/
/* {% endfor %}*/
/* {% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* */
