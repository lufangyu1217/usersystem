<?php

/* AppBundle:User:show-user/show-other-info.html.twig */
class __TwigTemplate_47562087f3f3908ec147e262c3961619f4129b9932f8ba0d0f93c3c70e7ffc86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:User:show-user/show-user-modal.html.twig", "AppBundle:User:show-user/show-other-info.html.twig", 1);
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
        $__internal_30c909e12fcd17ba05598bfa49bd2d842cebbd5beff38c1f91a2de16c58798c3 = $this->env->getExtension("native_profiler");
        $__internal_30c909e12fcd17ba05598bfa49bd2d842cebbd5beff38c1f91a2de16c58798c3->enter($__internal_30c909e12fcd17ba05598bfa49bd2d842cebbd5beff38c1f91a2de16c58798c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show-user/show-other-info.html.twig"));

        // line 2
        $context["script_controller_show"] = "links/user/js/add-user.js";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30c909e12fcd17ba05598bfa49bd2d842cebbd5beff38c1f91a2de16c58798c3->leave($__internal_30c909e12fcd17ba05598bfa49bd2d842cebbd5beff38c1f91a2de16c58798c3_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f3745e017f260d5a91abf34a81e5043275270f4c25b07a66be6a8eea99d1bff = $this->env->getExtension("native_profiler");
        $__internal_0f3745e017f260d5a91abf34a81e5043275270f4c25b07a66be6a8eea99d1bff->enter($__internal_0f3745e017f260d5a91abf34a81e5043275270f4c25b07a66be6a8eea99d1bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "<div class=\"page-header\">
  <h4>员工详情</h4>
</div>
<ul class=\"nav nav-tabs\">
  <li role=\"button\"><a class=\"show-basic-info\" data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_basic_show", array("id" => $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "userId", array()))), "html", null, true);
        echo "\">基础信息</a></li>
  <li role=\"button\"><a class=\"show-family-info\"  data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_family_show", array("id" => $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "userId", array()))), "html", null, true);
        echo "\">家庭信息</a></li>
  <li role=\"button\"><a class=\"show-learn-info\"  data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_learn_show", array("id" => $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "userId", array()))), "html", null, true);
        echo "\">学历信息</a></li>
  <li role=\"button\"><a class=\"show-work-info\"  data-url=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_work_show", array("id" => $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "userId", array()))), "html", null, true);
        echo "\" >工作信息</a></li>
  <li role=\"button\"  class=\"active\"><a class=\"show-other-info\"  data-url=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_other_show", array("id" => $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "userId", array()))), "html", null, true);
        echo "\">其他信息</a></li>
";
        
        $__internal_0f3745e017f260d5a91abf34a81e5043275270f4c25b07a66be6a8eea99d1bff->leave($__internal_0f3745e017f260d5a91abf34a81e5043275270f4c25b07a66be6a8eea99d1bff_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_32aae1aa987bb98e48bb5625f845e08acd53b288b0e6929d096d02321879d4ed = $this->env->getExtension("native_profiler");
        $__internal_32aae1aa987bb98e48bb5625f845e08acd53b288b0e6929d096d02321879d4ed->enter($__internal_32aae1aa987bb98e48bb5625f845e08acd53b288b0e6929d096d02321879d4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <form class=\"form-horizontal\">
    <div class=\"form-group\">
      <label for=\"exampleInputEmail1\" class=\"col-sm-3 control-label\">所受培训及所具有证书：</label>
      <div class=\"col-sm-6\" align=\"center\">
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "reward", array()), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <label for=\"exampleInputEmail1\" class=\"col-sm-3 control-label\" >自我评价：</label>
      <div class=\"col-sm-6\" align=\"center\">
       ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "selfAssessment", array()), "html", null, true);
        echo "
      </div>
    </div>
  </form>
";
        
        $__internal_32aae1aa987bb98e48bb5625f845e08acd53b288b0e6929d096d02321879d4ed->leave($__internal_32aae1aa987bb98e48bb5625f845e08acd53b288b0e6929d096d02321879d4ed_prof);

    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        $__internal_caa69dfb8a3df1fa03ab813767b4a26de94bb004f4fcb967bdc2f1c21d86f2e2 = $this->env->getExtension("native_profiler");
        $__internal_caa69dfb8a3df1fa03ab813767b4a26de94bb004f4fcb967bdc2f1c21d86f2e2->enter($__internal_caa69dfb8a3df1fa03ab813767b4a26de94bb004f4fcb967bdc2f1c21d86f2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_caa69dfb8a3df1fa03ab813767b4a26de94bb004f4fcb967bdc2f1c21d86f2e2->leave($__internal_caa69dfb8a3df1fa03ab813767b4a26de94bb004f4fcb967bdc2f1c21d86f2e2_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show-user/show-other-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  98 => 28,  88 => 21,  82 => 17,  76 => 16,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  45 => 5,  39 => 4,  32 => 1,  30 => 2,  11 => 1,);
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
/*   <li role="button"><a class="show-basic-info" data-url="{{path('admin_user_basic_show',{id:otherInfo.userId})}}">基础信息</a></li>*/
/*   <li role="button"><a class="show-family-info"  data-url="{{path('admin_user_family_show',{id:otherInfo.userId})}}">家庭信息</a></li>*/
/*   <li role="button"><a class="show-learn-info"  data-url="{{path('admin_user_learn_show',{id:otherInfo.userId})}}">学历信息</a></li>*/
/*   <li role="button"><a class="show-work-info"  data-url="{{path('admin_user_work_show',{id:otherInfo.userId})}}" >工作信息</a></li>*/
/*   <li role="button"  class="active"><a class="show-other-info"  data-url="{{path('admin_user_other_show',{id:otherInfo.userId})}}">其他信息</a></li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <form class="form-horizontal">*/
/*     <div class="form-group">*/
/*       <label for="exampleInputEmail1" class="col-sm-3 control-label">所受培训及所具有证书：</label>*/
/*       <div class="col-sm-6" align="center">*/
/*         {{otherInfo.reward}}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <label for="exampleInputEmail1" class="col-sm-3 control-label" >自我评价：</label>*/
/*       <div class="col-sm-6" align="center">*/
/*        {{otherInfo.selfAssessment}}*/
/*       </div>*/
/*     </div>*/
/*   </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}{% endblock %}*/
