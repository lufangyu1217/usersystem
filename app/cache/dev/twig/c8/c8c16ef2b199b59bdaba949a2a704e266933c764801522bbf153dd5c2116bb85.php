<?php

/* AppBundle:User/list-user:tr-table.html.twig */
class __TwigTemplate_220f0aa2f48a463362933433a311c3a37698242ef2af6ad6752a5e660fca95b8 extends Twig_Template
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
        $__internal_82092e6ad15762d0e6041b7802691c34666e023af9175e6731be256b201715d9 = $this->env->getExtension("native_profiler");
        $__internal_82092e6ad15762d0e6041b7802691c34666e023af9175e6731be256b201715d9->enter($__internal_82092e6ad15762d0e6041b7802691c34666e023af9175e6731be256b201715d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User/list-user:tr-table.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/change-role.js")), "html", null, true);
        echo "
<tr id=\"js-status-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">
  <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "number", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "trueName", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "bornTime", array()), "n-d"), "html", null, true);
        echo "</td>
  <td>";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "joinTime", array()), "Y-n-d"), "html", null, true);
        echo "</td>
  <td>
    ";
        // line 9
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender", array()) == "male")) {
            echo "男";
        } else {
            echo "女";
        }
        // line 10
        echo "  </td>
  <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "professionTitle", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rank", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "education", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()), "html", null, true);
        echo "</td>
  ";
        // line 15
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "status", array()) == "off")) {
            // line 16
            echo "    <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "quitTime", array()), "Y-m-d"), "html", null, true);
            echo "</td>
  ";
        }
        // line 18
        echo "  <td style=\"min-width:100px;\">
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm show-inuser\" data-url=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_basic_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">查看</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\" role=\"button\">
        ";
        // line 25
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "status", array()) == "on")) {
            // line 26
            echo "        <li><a id=\"js-edit-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">编辑</a></li>
        <li><a>修改密码</a></li>
        <li><a class=\"change-status-show\" data-url=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_status_change", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId", array()), "status" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "status", array()))), "html", null, true);
            echo "\">离职</a></li>
        <li><a class=\"change-role\" data-url=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_role_change", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId", array()))), "html", null, true);
            echo "\">设为管理员</a></li>
        ";
        } else {
            // line 31
            echo "        <li><a class=\"change-status-show\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_status_change", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId", array()), "status" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "status", array()))), "html", null, true);
            echo "\">入职</a></li>
        ";
        }
        // line 33
        echo "      </ul>
    </div>
  </td>
</tr>
";
        
        $__internal_82092e6ad15762d0e6041b7802691c34666e023af9175e6731be256b201715d9->leave($__internal_82092e6ad15762d0e6041b7802691c34666e023af9175e6731be256b201715d9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User/list-user:tr-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  113 => 31,  108 => 29,  104 => 28,  98 => 26,  96 => 25,  88 => 20,  84 => 18,  78 => 16,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ script(['links/user/js/change-role.js']) }}*/
/* <tr id="js-status-{{ user.id }}">*/
/*   <td>{{ user.number }}</td>*/
/*   <td>{{ user.name }}</td>*/
/*   <td>{{ user.trueName }}</td>*/
/*   <td>{{ user.bornTime|date('n-d') }}</td>*/
/*   <td>{{ user.joinTime|date('Y-n-d') }}</td>*/
/*   <td>*/
/*     {% if user.gender == 'male' %}男{% else %}女{% endif %}*/
/*   </td>*/
/*   <td>{{ user.professionTitle }}</td>*/
/*   <td>{{ user.rank }}</td>*/
/*   <td>{{ user.education }}</td>*/
/*   <td>{{ user.phone }}</td>*/
/*   {% if user.status == 'off' %}*/
/*     <td>{{ user.quitTime|date('Y-m-d') }}</td>*/
/*   {% endif %}*/
/*   <td style="min-width:100px;">*/
/*     <div class="btn-group">*/
/*       <a class="btn btn-default btn-sm show-inuser" data-url="{{ path('admin_user_basic_show',{id:user.id}) }}">查看</a>*/
/*       <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*         <span class="caret"></span>*/
/*       </a>*/
/*       <ul class="dropdown-menu" role="button">*/
/*         {% if user.status == 'on' %}*/
/*         <li><a id="js-edit-btn" href="{{ path('admin_user_edit', {id:user.id}) }}">编辑</a></li>*/
/*         <li><a>修改密码</a></li>*/
/*         <li><a class="change-status-show" data-url="{{ path('admin_user_status_change', {id:user.userId, status:user.status}) }}">离职</a></li>*/
/*         <li><a class="change-role" data-url="{{path('admin_user_role_change',{id:user.userId})}}">设为管理员</a></li>*/
/*         {% else %}*/
/*         <li><a class="change-status-show" data-url="{{ path('admin_user_status_change', {id:user.userId, status:user.status}) }}">入职</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/*   </td>*/
/* </tr>*/
/* */
