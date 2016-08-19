<?php

/* AppBundle:User:show/show-basic-info.html.twig */
class __TwigTemplate_7471cbcc1979c4527a62c4d37ef3456badf9865ab998ce5706c2498d0c95a299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:show/show-basic-info.html.twig", 1);
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
        $__internal_c594bb2640a654c166d646dce8198aa9031779e8414668a955b5ae77ed63f938 = $this->env->getExtension("native_profiler");
        $__internal_c594bb2640a654c166d646dce8198aa9031779e8414668a955b5ae77ed63f938->enter($__internal_c594bb2640a654c166d646dce8198aa9031779e8414668a955b5ae77ed63f938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show/show-basic-info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c594bb2640a654c166d646dce8198aa9031779e8414668a955b5ae77ed63f938->leave($__internal_c594bb2640a654c166d646dce8198aa9031779e8414668a955b5ae77ed63f938_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bf860e106fec3a9ccb3a272dd1a4cecebb91430644454bc8202fdea5864109d = $this->env->getExtension("native_profiler");
        $__internal_0bf860e106fec3a9ccb3a272dd1a4cecebb91430644454bc8202fdea5864109d->enter($__internal_0bf860e106fec3a9ccb3a272dd1a4cecebb91430644454bc8202fdea5864109d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "<div class=\"page-header\">
  <h4>员工详情</h4>
</div>
";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            // line 8
            echo "  <ul class=\"nav nav-tabs\">
    <li role=\"button\" class=\"active\"><a class=\"show-basic-info\" data-url=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_basic_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
            echo "\">基础信息</a></li>
    <li role=\"button\"><a class=\"show-family-info\"  data-url=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_family_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
            echo "\">家庭信息</a></li>
    <li role=\"button\"><a class=\"show-learn-info\"  data-url=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_learn_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
            echo "\">学历信息</a></li>
    <li role=\"button\"><a class=\"show-work-info\"  data-url=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_work_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
            echo "\">工作信息</a></li>
    <li role=\"button\"><a class=\"show-other-info\"  data-url=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leader_user_other_show", array("id" => $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "userId", array()))), "html", null, true);
            echo "\">其他信息</a></li>
  </ul>
";
        }
        
        $__internal_0bf860e106fec3a9ccb3a272dd1a4cecebb91430644454bc8202fdea5864109d->leave($__internal_0bf860e106fec3a9ccb3a272dd1a4cecebb91430644454bc8202fdea5864109d_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_6574113135b63c4c6eff0d8f9b6ac4489a302d56c4f3bc4f619983c2d7bb895a = $this->env->getExtension("native_profiler");
        $__internal_6574113135b63c4c6eff0d8f9b6ac4489a302d56c4f3bc4f619983c2d7bb895a->enter($__internal_6574113135b63c4c6eff0d8f9b6ac4489a302d56c4f3bc4f619983c2d7bb895a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "  <table class=\"table table-bordered\">
    <tr>
      <td class=\"col-sm-3\">姓名：</td>
      <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "trueName", array()), "html", null, true);
        echo "</td>
    </tr>    
    <tr>
      <td>性别：</td>
      <td>";
        // line 26
        if (($this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "gender", array()) == "male")) {
            echo "男";
        } else {
            echo "女";
        }
        echo "</td>
    </tr>   
    <tr>
      <td>籍贯：</td>
      <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "native", array()), "html", null, true);
        echo "</td>
    </tr>   
    <tr>
      <td>民族：</td>
      <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "nation", array()), "html", null, true);
        echo "</td>
    </tr>   
    <tr>
      <td>身高：</td>
      <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "height", array()), "html", null, true);
        echo "</td>
    </tr>   
    <tr>
      <td>体重：</td>
      <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "weight", array()), "html", null, true);
        echo "</td>
    </tr>   
    <tr>
      <td>血型：</td>
      <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "blood", array()), "html", null, true);
        echo "</td>
    </tr>   
    <tr>
      <td>文化程度：</td>
      <td>";
        // line 50
        echo $this->env->getExtension('twig.app_extension')->getDictText("education", $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "education", array()));
        echo "</td>
    </tr>
    <tr>
      <td>专业：</td>
      <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "prefession", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>婚否：</td>
      <td>";
        // line 58
        if (($this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "marriage", array()) == 0)) {
            echo "未婚";
        } else {
            echo "已婚";
        }
        echo "</td>
    </tr>
    <tr>
      <td>户口所在地：</td>
      <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "residence", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>家庭地址：</td>
      <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "address", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>邮编：</td>
      <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "postcode", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>身份证号码：</td>
      <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "Idcard", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>职级：</td>
      <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "rank", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>职称：</td>
      <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "professionTitle", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>户口性质：</td>
      <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "householdType", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>联系电话：</td>
      <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "phone", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>档案存放地：</td>
      <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "recordPlace", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>政治面貌：</td>
      <td>";
        // line 98
        echo $this->env->getExtension('twig.app_extension')->getDictText("politics", $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "politics", array()));
        echo "</td>
    </tr>
    <tr>
      <td>预计到岗时间：</td>
      <td>";
        // line 102
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "joinTime", array()), "Y-m-d"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <td>与原工作的劳动关系：</td>
      <td>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "formerLaborShip", array()), "html", null, true);
        echo "</td>
    </tr>
  </table>
";
        
        $__internal_6574113135b63c4c6eff0d8f9b6ac4489a302d56c4f3bc4f619983c2d7bb895a->leave($__internal_6574113135b63c4c6eff0d8f9b6ac4489a302d56c4f3bc4f619983c2d7bb895a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show/show-basic-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 106,  237 => 102,  230 => 98,  223 => 94,  216 => 90,  209 => 86,  202 => 82,  195 => 78,  188 => 74,  181 => 70,  174 => 66,  167 => 62,  156 => 58,  149 => 54,  142 => 50,  135 => 46,  128 => 42,  121 => 38,  114 => 34,  107 => 30,  96 => 26,  89 => 22,  84 => 19,  78 => 18,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  48 => 8,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}*/
/* <div class="page-header">*/
/*   <h4>员工详情</h4>*/
/* </div>*/
/* {% if app.user.isAdmin() %}*/
/*   <ul class="nav nav-tabs">*/
/*     <li role="button" class="active"><a class="show-basic-info" data-url="{{path('user_basic_show',{id:basic.userId})}}">基础信息</a></li>*/
/*     <li role="button"><a class="show-family-info"  data-url="{{path('leader_user_family_show',{id:basic.userId})}}">家庭信息</a></li>*/
/*     <li role="button"><a class="show-learn-info"  data-url="{{path('leader_user_learn_show',{id:basic.userId})}}">学历信息</a></li>*/
/*     <li role="button"><a class="show-work-info"  data-url="{{path('leader_user_work_show',{id:basic.userId})}}">工作信息</a></li>*/
/*     <li role="button"><a class="show-other-info"  data-url="{{path('leader_user_other_show',{id:basic.userId})}}">其他信息</a></li>*/
/*   </ul>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <table class="table table-bordered">*/
/*     <tr>*/
/*       <td class="col-sm-3">姓名：</td>*/
/*       <td>{{basic.trueName}}</td>*/
/*     </tr>    */
/*     <tr>*/
/*       <td>性别：</td>*/
/*       <td>{% if basic.gender == 'male' %}男{% else %}女{% endif %}</td>*/
/*     </tr>   */
/*     <tr>*/
/*       <td>籍贯：</td>*/
/*       <td>{{basic.native}}</td>*/
/*     </tr>   */
/*     <tr>*/
/*       <td>民族：</td>*/
/*       <td>{{basic.nation}}</td>*/
/*     </tr>   */
/*     <tr>*/
/*       <td>身高：</td>*/
/*       <td>{{basic.height}}</td>*/
/*     </tr>   */
/*     <tr>*/
/*       <td>体重：</td>*/
/*       <td>{{basic.weight}}</td>*/
/*     </tr>   */
/*     <tr>*/
/*       <td>血型：</td>*/
/*       <td>{{basic.blood}}</td>*/
/*     </tr>   */
/*     <tr>*/
/*       <td>文化程度：</td>*/
/*       <td>{{ dict_text('education', basic.education) }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>专业：</td>*/
/*       <td>{{basic.prefession}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>婚否：</td>*/
/*       <td>{% if basic.marriage == 0 %}未婚{% else %}已婚{% endif %}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>户口所在地：</td>*/
/*       <td>{{basic.residence}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>家庭地址：</td>*/
/*       <td>{{basic.address}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>邮编：</td>*/
/*       <td>{{basic.postcode}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>身份证号码：</td>*/
/*       <td>{{basic.Idcard}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>职级：</td>*/
/*       <td>{{basic.rank}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>职称：</td>*/
/*       <td>{{basic.professionTitle}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>户口性质：</td>*/
/*       <td>{{basic.householdType}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>联系电话：</td>*/
/*       <td>{{basic.phone}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>档案存放地：</td>*/
/*       <td>{{basic.recordPlace}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>政治面貌：</td>*/
/*       <td>{{ dict_text('politics', basic.politics) }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>预计到岗时间：</td>*/
/*       <td>{{basic.joinTime|date('Y-m-d')}}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>与原工作的劳动关系：</td>*/
/*       <td>{{basic.formerLaborShip}}</td>*/
/*     </tr>*/
/*   </table>*/
/* {% endblock %}*/
/* */
