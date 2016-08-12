<?php

/* AppBundle:user/list-user:tr-table.html.twig */
class __TwigTemplate_7601a71fb5321bde355bd706fbbc7adbf6e54aaea1204a98db992a8a0ad09a79 extends Twig_Template
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
        $__internal_d062a245722c16617d7f8940c8efce680f5382c4bf657e8c8995db14b3539e6e = $this->env->getExtension("native_profiler");
        $__internal_d062a245722c16617d7f8940c8efce680f5382c4bf657e8c8995db14b3539e6e->enter($__internal_d062a245722c16617d7f8940c8efce680f5382c4bf657e8c8995db14b3539e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/list-user:tr-table.html.twig"));

        // line 1
        echo "<tr id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">
  <td>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "number", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "departmentId", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "trueName", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "bornTime", array()), "n-d"), "html", null, true);
        echo "</td>
  <td>";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "joinTime", array()), "Y-n-d"), "html", null, true);
        echo "</td>
  <td>
    ";
        // line 8
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender", array()) == "male")) {
            echo "男";
        } else {
            echo "女";
        }
        // line 9
        echo "  </td>
  <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "professionTitle", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rank", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "education", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()), "html", null, true);
        echo "</td>
  ";
        // line 14
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "status", array()) == 0)) {
            // line 15
            echo "    <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "quitTime", array()), "Y-n-d"), "html", null, true);
            echo "</td>
  ";
        }
        // line 17
        echo "  <td style=\"min-width:100px;\">
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm show-inuser\" data-url=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_basic_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">查看</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\" role=\"button\">
        ";
        // line 24
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "status", array()) == 1)) {
            // line 25
            echo "        <li><a id=\"js-edit-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">编辑</a></li>
        <li><a>修改密码</a></li>
        <li><a data-id=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "status", array()), "html", null, true);
            echo "\" class=\"change-status-show\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_jobStatus_change_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "status" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "status", array()))), "html", null, true);
            echo "\">离职</a></li>
        <li><a class=\"change-role\" data-url=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_role_change", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">设为管理员</a></li>
        ";
        } else {
            // line 30
            echo "        <li><a data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "status", array()), "html", null, true);
            echo "\" class=\"change-status-show\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_jobStatus_change_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "status" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "status", array()))), "html", null, true);
            echo "\">入职</a></li>
        ";
        }
        // line 32
        echo "      </ul>
    </div>
  </td>
</tr>
";
        
        $__internal_d062a245722c16617d7f8940c8efce680f5382c4bf657e8c8995db14b3539e6e->leave($__internal_d062a245722c16617d7f8940c8efce680f5382c4bf657e8c8995db14b3539e6e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/list-user:tr-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 32,  112 => 30,  107 => 28,  101 => 27,  95 => 25,  93 => 24,  85 => 19,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  54 => 9,  48 => 8,  43 => 6,  39 => 5,  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <tr id="{{ user.id }}">*/
/*   <td>{{ user.number }}</td>*/
/*   <td>{{ user.departmentId }}</td>*/
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
/*   {% if user.status == 0 %}*/
/*     <td>{{ user.quitTime|date('Y-n-d') }}</td>*/
/*   {% endif %}*/
/*   <td style="min-width:100px;">*/
/*     <div class="btn-group">*/
/*       <a class="btn btn-default btn-sm show-inuser" data-url="{{ path('admin_user_basic_show',{id:user.id}) }}">查看</a>*/
/*       <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*         <span class="caret"></span>*/
/*       </a>*/
/*       <ul class="dropdown-menu" role="button">*/
/*         {% if user.status == 1 %}*/
/*         <li><a id="js-edit-btn" href="{{ path('admin_user_edit', {id:user.id}) }}">编辑</a></li>*/
/*         <li><a>修改密码</a></li>*/
/*         <li><a data-id="{{ user.status }}" class="change-status-show" data-url="{{ path('admin_user_jobStatus_change_show', {id:user.id, status:user.status}) }}">离职</a></li>*/
/*         <li><a class="change-role" data-url="{{path('admin_user_role_change',{id:user.id})}}">设为管理员</a></li>*/
/*         {% else %}*/
/*         <li><a data-id="{{ user.status }}" class="change-status-show" data-url="{{ path('admin_user_jobStatus_change_show', {id:user.id, status:user.status}) }}">入职</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/*   </td>*/
/* </tr>*/
/* */
