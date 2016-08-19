<?php

/* AppBundle:User:person/basic.html.twig */
class __TwigTemplate_aaaab4d2dee8f320a8d68d6a6da608e413fddd7125f09845193b38f92af0b904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d35d85f80673db890da6a859a39968565f6245f1181a6fa65625283513d15a8 = $this->env->getExtension("native_profiler");
        $__internal_2d35d85f80673db890da6a859a39968565f6245f1181a6fa65625283513d15a8->enter($__internal_2d35d85f80673db890da6a859a39968565f6245f1181a6fa65625283513d15a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:person/basic.html.twig"));

        // line 1
        echo "<ul class=\"person-info\">
  <li>姓名：";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "trueName", array()), "html", null, true);
        echo "</li>
  <li>性别：";
        // line 3
        if (($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "gender", array()) == "male")) {
            echo "男";
        } else {
            echo "女";
        }
        echo "</li>
  <li>出生日期：";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "bornTime", array()), "Y-m-d"), "html", null, true);
        echo "</li>
  <li>籍贯：";
        // line 5
        if ($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "native", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "native", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
  <li>名族：";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "nation", array()), "html", null, true);
        echo "</li>
  <li>身高：";
        // line 7
        if ($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "height", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "height", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
  <li>体重：";
        // line 8
        if ($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "weight", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "weight", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
  <li>血型：";
        // line 9
        if ($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "blood", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "blood", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
  <li>婚否：";
        // line 10
        if (($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "marriage", array()) == 0)) {
            echo "未婚";
        } else {
            echo "已婚";
        }
        echo "</li>
  <li>户口所在地：";
        // line 11
        if ($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "residence", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "residence", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
  <li>家庭地址：";
        // line 12
        if ($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "address", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "address", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
  <li>身份证号码：";
        // line 13
        if ($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "IDcard", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "IDcard", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
  <li>户口性质：";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "householdType", array()), "html", null, true);
        echo "</li>
  <li>联系电话：";
        // line 15
        if ($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "phone", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "phone", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
  <li>Email：";
        // line 16
        if ($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "email", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "email", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
  <li>档案存放地：";
        // line 17
        if ($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "recordPlace", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "recordPlace", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
  <li>政治面貌：";
        // line 18
        echo $this->env->getExtension('twig.app_extension')->getDictText("politics", $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "politics", array()));
        echo "</li>
</ul>";
        
        $__internal_2d35d85f80673db890da6a859a39968565f6245f1181a6fa65625283513d15a8->leave($__internal_2d35d85f80673db890da6a859a39968565f6245f1181a6fa65625283513d15a8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:person/basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 18,  129 => 17,  121 => 16,  113 => 15,  109 => 14,  101 => 13,  93 => 12,  85 => 11,  77 => 10,  69 => 9,  61 => 8,  53 => 7,  49 => 6,  41 => 5,  37 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="person-info">*/
/*   <li>姓名：{{ userBasic.trueName }}</li>*/
/*   <li>性别：{% if userBasic.gender == 'male' %}男{% else %}女{% endif %}</li>*/
/*   <li>出生日期：{{ userBasic.bornTime|date('Y-m-d') }}</li>*/
/*   <li>籍贯：{% if userBasic.native %}{{ userBasic.native }}{% else %}暂无{% endif %}</li>*/
/*   <li>名族：{{ userBasic.nation }}</li>*/
/*   <li>身高：{% if userBasic.height %}{{ userBasic.height }}{% else %}暂无{% endif %}</li>*/
/*   <li>体重：{% if userBasic.weight %}{{ userBasic.weight }}{% else %}暂无{% endif %}</li>*/
/*   <li>血型：{% if userBasic.blood %}{{ userBasic.blood }}{% else %}暂无{% endif %}</li>*/
/*   <li>婚否：{% if userBasic.marriage == 0 %}未婚{% else %}已婚{% endif %}</li>*/
/*   <li>户口所在地：{% if userBasic.residence %}{{ userBasic.residence }}{% else %}暂无{% endif %}</li>*/
/*   <li>家庭地址：{% if userBasic.address %}{{ userBasic.address }}{% else %}暂无{% endif %}</li>*/
/*   <li>身份证号码：{% if userBasic.IDcard %}{{ userBasic.IDcard }}{% else %}暂无{% endif %}</li>*/
/*   <li>户口性质：{{ userBasic.householdType }}</li>*/
/*   <li>联系电话：{% if userBasic.phone %}{{ userBasic.phone }}{% else %}暂无{% endif %}</li>*/
/*   <li>Email：{% if userBasic.email %}{{ userBasic.email }}{% else %}暂无{% endif %}</li>*/
/*   <li>档案存放地：{% if userBasic.recordPlace %}{{ userBasic.recordPlace }}{% else %}暂无{% endif %}</li>*/
/*   <li>政治面貌：{{ dict_text('politics', userBasic.politics) }}</li>*/
/* </ul>*/
