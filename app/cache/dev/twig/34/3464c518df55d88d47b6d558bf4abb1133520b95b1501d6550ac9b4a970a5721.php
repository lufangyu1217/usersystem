<?php

/* AppBundle:User:show-user/show-basic-info.html.twig */
class __TwigTemplate_d3ee8ed734a7303b092f74ea5c8418916af61803c8ecd952af5050ac38381643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:User:show-user/show-user-modal.html.twig", "AppBundle:User:show-user/show-basic-info.html.twig", 1);
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
        $__internal_fc9a888b4db28142bb8b3703ec105e81fd86bcb0eff119449dd071e0a09b2f4f = $this->env->getExtension("native_profiler");
        $__internal_fc9a888b4db28142bb8b3703ec105e81fd86bcb0eff119449dd071e0a09b2f4f->enter($__internal_fc9a888b4db28142bb8b3703ec105e81fd86bcb0eff119449dd071e0a09b2f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show-user/show-basic-info.html.twig"));

        // line 3
        $context["script_controller_show"] = "links/user/js/add-user.js";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc9a888b4db28142bb8b3703ec105e81fd86bcb0eff119449dd071e0a09b2f4f->leave($__internal_fc9a888b4db28142bb8b3703ec105e81fd86bcb0eff119449dd071e0a09b2f4f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_69ebeeab54a31ad4d951a94fc1c82b27026645dbed5760fdc09fa63c4275a274 = $this->env->getExtension("native_profiler");
        $__internal_69ebeeab54a31ad4d951a94fc1c82b27026645dbed5760fdc09fa63c4275a274->enter($__internal_69ebeeab54a31ad4d951a94fc1c82b27026645dbed5760fdc09fa63c4275a274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "<div class=\"page-header\">
  <h4>员工详情</h4>
</div>
<ul class=\"nav nav-tabs\">
  <li role=\"button\" class=\"active\"><a class=\"show-basic-info\" data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_basic_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
        echo "\">基础信息</a></li>
  <li role=\"button\"><a class=\"show-family-info\"  data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_family_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
        echo "\">家庭信息</a></li>
  <li role=\"button\"><a class=\"show-learn-info\"  data-url=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_learn_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
        echo "\">学历信息</a></li>
  <li role=\"button\"><a class=\"show-work-info\"  data-url=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_work_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
        echo "\">工作信息</a></li>
  <li role=\"button\"><a class=\"show-other-info\"  data-url=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_other_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
        echo "\">其他信息</a></li>
";
        
        $__internal_69ebeeab54a31ad4d951a94fc1c82b27026645dbed5760fdc09fa63c4275a274->leave($__internal_69ebeeab54a31ad4d951a94fc1c82b27026645dbed5760fdc09fa63c4275a274_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba12c626787613d1aa0ba5296eb8fd1d03c055d8f0b91268a6536274d1139021 = $this->env->getExtension("native_profiler");
        $__internal_ba12c626787613d1aa0ba5296eb8fd1d03c055d8f0b91268a6536274d1139021->enter($__internal_ba12c626787613d1aa0ba5296eb8fd1d03c055d8f0b91268a6536274d1139021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "  <form class=\"form-horizontal\">
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" align=\"center\">姓名：</label>
        <div class=\"col-sm-3\" align=\"center\">
         ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "trueName", array()), "html", null, true);
        echo "
        </div>
      <label for=\"inputEmail3\" class=\"col-sm-3 control-label\" align=\"center\">性别：</label>
        <div class=\"col-sm-3\" align=\"center\">
          ";
        // line 26
        if (($this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "gender", array()) == "famale")) {
            echo "男";
        } else {
            echo "女";
        }
        // line 27
        echo "        </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" >出生日期：</label>
        <div class=\"col-sm-3\" align=\"center\">
          ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "bornTime", array()), "m-d"), "html", null, true);
        echo "
        </div>
      <label for=\"inputEmail3\" class=\"col-sm-3 control-label\" align=\"center\">籍贯：</label>
        <div class=\"col-sm-3\" align=\"center\">
          ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "native", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" align=\"center\">民族：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "nation", array()), "html", null, true);
        echo "
      </div>
      <label for=\"inputEmail3\" class=\"col-sm-3 control-label\" align=\"center\">身高：</label>
        <div class=\"col-sm-3\" align=\"center\">
          ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "height", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" align=\"center\">体重：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "weight", array()), "html", null, true);
        echo "
      </div>
      <label for=\"inputEmail3\" class=\"col-sm-3 control-label\" align=\"center\">血型：</label>
        <div class=\"col-sm-3\" align=\"center\">
          ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "blood", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" align=\"center\">文化程度：</label>
      <div class=\"col-sm-3\" align=\"center\">
       ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "education", array()), "html", null, true);
        echo "
      </div>
      <label for=\"inputEmail3\" class=\"col-sm-3 control-label\" align=\"center\">专业：</label>
        <div class=\"col-sm-3\" align=\"center\">
          ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "prefession", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" align=\"center\">婚否：</label>
      <div class=\"col-sm-3\" align=\"center\">
      ";
        // line 72
        if (($this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "marriage", array()) == 0)) {
            echo "未婚";
        } else {
            echo "已婚";
        }
        // line 73
        echo "      </div>
      <label for=\"inputEmail3\" class=\"col-sm-3 control-label\" align=\"center\">户口所在地：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "residence", array()), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" align=\"center\">家庭地址：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "address", array()), "html", null, true);
        echo "
      </div>
      <label for=\"inputEmail3\" class=\"col-sm-3 control-label\" align=\"center\">邮编：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "postcode", array()), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" align=\"center\">身份证号码：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "IDcard", array()), "html", null, true);
        echo "
      </div>
      <label for=\"inputEmail3\" class=\"col-sm-3 control-label\" align=\"center\">职称：</label>
      <div class=\"col-sm-3\" align=\"center\">
       ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "professionTitle", array()), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" align=\"center\">户口性质：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "householdType", array()), "html", null, true);
        echo "
      </div>
      <label for=\"inputEmail3\" class=\"col-sm-3 control-label\" align=\"center\">联系电话：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "phone", array()), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" align=\"center\">Email：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "email", array()), "html", null, true);
        echo "
      </div>
      <label for=\"inputEmail3\" class=\"col-sm-3 control-label\" align=\"center\">档案存放地：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "recordPlace", array()), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" align=\"center\">有无疾病史：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "hasSick", array()), "html", null, true);
        echo "
      </div>
      <label for=\"inputEmail3\" class=\"col-sm-3 control-label\" align=\"center\">希望服务年限：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "serviceTime", array()), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" align=\"center\">期望月薪：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "expectedSalary", array()), "html", null, true);
        echo "
      </div>
      <label for=\"inputEmail3\" class=\"col-sm-3 control-label\" align=\"center\">政治面貌：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "politics", array()), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"form-group\">
      <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" align=\"center\">预计到岗时间：</label>
      <div class=\"col-sm-3\" align=\"center\">
        ";
        // line 142
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "joinTime", array()), "Y-m-d"), "html", null, true);
        echo "
      </div>
      <label for=\"inputEmail3\" class=\"col-sm-3 control-label\" align=\"center\">与原工作的劳动关系：</label>
      <div class=\"col-sm-3\" align=\"center\">
       ";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "formerLaborShip", array()), "html", null, true);
        echo "
    </div>
  </form>
";
        
        $__internal_ba12c626787613d1aa0ba5296eb8fd1d03c055d8f0b91268a6536274d1139021->leave($__internal_ba12c626787613d1aa0ba5296eb8fd1d03c055d8f0b91268a6536274d1139021_prof);

    }

    // line 151
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2bbb04ec86735d22db4b085d6881f90c2e64d5000caa4f72cf6d37114e3332cc = $this->env->getExtension("native_profiler");
        $__internal_2bbb04ec86735d22db4b085d6881f90c2e64d5000caa4f72cf6d37114e3332cc->enter($__internal_2bbb04ec86735d22db4b085d6881f90c2e64d5000caa4f72cf6d37114e3332cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_2bbb04ec86735d22db4b085d6881f90c2e64d5000caa4f72cf6d37114e3332cc->leave($__internal_2bbb04ec86735d22db4b085d6881f90c2e64d5000caa4f72cf6d37114e3332cc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show-user/show-basic-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 151,  295 => 146,  288 => 142,  279 => 136,  272 => 132,  263 => 126,  256 => 122,  247 => 116,  240 => 112,  231 => 106,  224 => 102,  215 => 96,  208 => 92,  199 => 86,  192 => 82,  183 => 76,  178 => 73,  172 => 72,  163 => 66,  156 => 62,  147 => 56,  140 => 52,  131 => 46,  124 => 42,  115 => 36,  108 => 32,  101 => 27,  95 => 26,  88 => 22,  82 => 18,  76 => 17,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle:User:show-user/show-user-modal.html.twig' %}*/
/* */
/* {% set script_controller_show = 'links/user/js/add-user.js' %}*/
/* */
/* {% block title %}*/
/* <div class="page-header">*/
/*   <h4>员工详情</h4>*/
/* </div>*/
/* <ul class="nav nav-tabs">*/
/*   <li role="button" class="active"><a class="show-basic-info" data-url="{{path('admin_user_basic_show',{id:basic.userId})}}">基础信息</a></li>*/
/*   <li role="button"><a class="show-family-info"  data-url="{{path('admin_user_family_show',{id:basic.userId})}}">家庭信息</a></li>*/
/*   <li role="button"><a class="show-learn-info"  data-url="{{path('admin_user_learn_show',{id:basic.userId})}}">学历信息</a></li>*/
/*   <li role="button"><a class="show-work-info"  data-url="{{path('admin_user_work_show',{id:basic.userId})}}">工作信息</a></li>*/
/*   <li role="button"><a class="show-other-info"  data-url="{{path('admin_user_other_show',{id:basic.userId})}}">其他信息</a></li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <form class="form-horizontal">*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label" align="center">姓名：</label>*/
/*         <div class="col-sm-3" align="center">*/
/*          {{basic.trueName}}*/
/*         </div>*/
/*       <label for="inputEmail3" class="col-sm-3 control-label" align="center">性别：</label>*/
/*         <div class="col-sm-3" align="center">*/
/*           {% if basic.gender == 'famale' %}男{% else %}女{% endif %}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label" >出生日期：</label>*/
/*         <div class="col-sm-3" align="center">*/
/*           {{basic.bornTime|date('m-d')}}*/
/*         </div>*/
/*       <label for="inputEmail3" class="col-sm-3 control-label" align="center">籍贯：</label>*/
/*         <div class="col-sm-3" align="center">*/
/*           {{basic.native}}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label" align="center">民族：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.nation}}*/
/*       </div>*/
/*       <label for="inputEmail3" class="col-sm-3 control-label" align="center">身高：</label>*/
/*         <div class="col-sm-3" align="center">*/
/*           {{basic.height}}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label" align="center">体重：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.weight}}*/
/*       </div>*/
/*       <label for="inputEmail3" class="col-sm-3 control-label" align="center">血型：</label>*/
/*         <div class="col-sm-3" align="center">*/
/*           {{basic.blood}}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label" align="center">文化程度：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*        {{basic.education}}*/
/*       </div>*/
/*       <label for="inputEmail3" class="col-sm-3 control-label" align="center">专业：</label>*/
/*         <div class="col-sm-3" align="center">*/
/*           {{basic.prefession}}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label" align="center">婚否：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*       {% if basic.marriage == 0 %}未婚{% else %}已婚{% endif %}*/
/*       </div>*/
/*       <label for="inputEmail3" class="col-sm-3 control-label" align="center">户口所在地：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.residence}}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label" align="center">家庭地址：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.address}}*/
/*       </div>*/
/*       <label for="inputEmail3" class="col-sm-3 control-label" align="center">邮编：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.postcode}}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label" align="center">身份证号码：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.IDcard}}*/
/*       </div>*/
/*       <label for="inputEmail3" class="col-sm-3 control-label" align="center">职称：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*        {{basic.professionTitle}}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label" align="center">户口性质：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.householdType}}*/
/*       </div>*/
/*       <label for="inputEmail3" class="col-sm-3 control-label" align="center">联系电话：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.phone}}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label" align="center">Email：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.email}}*/
/*       </div>*/
/*       <label for="inputEmail3" class="col-sm-3 control-label" align="center">档案存放地：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.recordPlace}}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label" align="center">有无疾病史：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.hasSick}}*/
/*       </div>*/
/*       <label for="inputEmail3" class="col-sm-3 control-label" align="center">希望服务年限：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.serviceTime}}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label" align="center">期望月薪：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.expectedSalary}}*/
/*       </div>*/
/*       <label for="inputEmail3" class="col-sm-3 control-label" align="center">政治面貌：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.politics}}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="inputEmail3" class="col-sm-2 control-label" align="center">预计到岗时间：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*         {{basic.joinTime|date('Y-m-d')}}*/
/*       </div>*/
/*       <label for="inputEmail3" class="col-sm-3 control-label" align="center">与原工作的劳动关系：</label>*/
/*       <div class="col-sm-3" align="center">*/
/*        {{basic.formerLaborShip}}*/
/*     </div>*/
/*   </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}{% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
