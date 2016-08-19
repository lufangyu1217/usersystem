<?php

/* AppBundle:User:list/tr-table.html.twig */
class __TwigTemplate_f64a60ac185481524ddbe6768656de2772c935451cc67ef53b7041a3e58cad5e extends Twig_Template
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
        $__internal_41ad685f0cbe8932e2a3ce4b8124470b40e5900b349fb2a46d71853fae5c282f = $this->env->getExtension("native_profiler");
        $__internal_41ad685f0cbe8932e2a3ce4b8124470b40e5900b349fb2a46d71853fae5c282f->enter($__internal_41ad685f0cbe8932e2a3ce4b8124470b40e5900b349fb2a46d71853fae5c282f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:list/tr-table.html.twig"));

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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "bornTime", array()), "Y-n-d"), "html", null, true);
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
  ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isLeader", array(), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method"))) {
            // line 12
            echo "  <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "professionTitle", array()), "html", null, true);
            echo "</td>
  <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rank", array()), "html", null, true);
            echo "</td>
  ";
        }
        // line 15
        echo "  <td>";
        echo $this->env->getExtension('twig.app_extension')->getDictText("education", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "education", array()));
        echo "</td>
  <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()), "html", null, true);
        echo "</td>
  ";
        // line 17
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "status", array()) == "off")) {
            // line 18
            echo "    <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "quitTime", array()), "Y-m-d"), "html", null, true);
            echo "</td>
  ";
        }
        // line 20
        echo "  <td style=\"min-width:100px;\">
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm show-inuser\" data-url=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_basic_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">查看</a>
      ";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            // line 24
            echo "      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\" role=\"button\">
        ";
            // line 28
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "status", array()) == "on")) {
                // line 29
                echo "        <li>
          <a id=\"js-edit-btn\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\">
            编辑
          </a>
        </li>
        <li>
          <a class=\"js-certificate-btn\" data-url=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_certificate", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "type" => "idcard")), "html", null, true);
                echo "\">
            档案图片
          </a>
        </li>
        <li>
          <a class=\"change-status-show\" data-url=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_exit_job", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId", array()))), "html", null, true);
                echo "\">
            离职
          </a>
        </li>
        <li>
          <a class=\"change-role-modal\" data-url=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_role_change", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\">
            更改权限
          </a>
        </li>
        ";
            } else {
                // line 50
                echo "        <li>
          <a class=\"change-status-show\" data-url=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_entry_job", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId", array()))), "html", null, true);
                echo "\">
            入职
          </a>
        </li>
        ";
            }
            // line 56
            echo "      </ul>
      ";
        }
        // line 58
        echo "    </div>
  </td>
</tr>
";
        
        $__internal_41ad685f0cbe8932e2a3ce4b8124470b40e5900b349fb2a46d71853fae5c282f->leave($__internal_41ad685f0cbe8932e2a3ce4b8124470b40e5900b349fb2a46d71853fae5c282f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:list/tr-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 58,  153 => 56,  145 => 51,  142 => 50,  134 => 45,  126 => 40,  118 => 35,  110 => 30,  107 => 29,  105 => 28,  99 => 24,  97 => 23,  93 => 22,  89 => 20,  83 => 18,  81 => 17,  77 => 16,  72 => 15,  67 => 13,  62 => 12,  60 => 11,  57 => 10,  51 => 9,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ script(['links/user/js/change-role.js']) }}*/
/* <tr id="js-status-{{ user.id }}">*/
/*   <td>{{ user.number }}</td>*/
/*   <td>{{ user.name }}</td>*/
/*   <td>{{ user.trueName }}</td>*/
/*   <td>{{ user.bornTime|date('Y-n-d') }}</td>*/
/*   <td>{{ user.joinTime|date('Y-n-d') }}</td>*/
/*   <td>*/
/*     {% if user.gender == 'male' %}男{% else %}女{% endif %}*/
/*   </td>*/
/*   {% if app.user.isLeader() or app.user.isAdmin() %}*/
/*   <td>{{ user.professionTitle }}</td>*/
/*   <td>{{ user.rank }}</td>*/
/*   {% endif %}*/
/*   <td>{{ dict_text('education', user.education) }}</td>*/
/*   <td>{{ user.phone }}</td>*/
/*   {% if user.status == 'off' %}*/
/*     <td>{{ user.quitTime|date('Y-m-d') }}</td>*/
/*   {% endif %}*/
/*   <td style="min-width:100px;">*/
/*     <div class="btn-group">*/
/*       <a class="btn btn-default btn-sm show-inuser" data-url="{{ path('user_basic_show',{id:user.id}) }}">查看</a>*/
/*       {% if app.user.isAdmin() %}*/
/*       <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*         <span class="caret"></span>*/
/*       </a>*/
/*       <ul class="dropdown-menu" role="button">*/
/*         {% if user.status == 'on' %}*/
/*         <li>*/
/*           <a id="js-edit-btn" href="{{ path('admin_user_edit', {id:user.id}) }}">*/
/*             编辑*/
/*           </a>*/
/*         </li>*/
/*         <li>*/
/*           <a class="js-certificate-btn" data-url="{{ path('admin_user_certificate',{id:user.id,type:'idcard'}) }}">*/
/*             档案图片*/
/*           </a>*/
/*         </li>*/
/*         <li>*/
/*           <a class="change-status-show" data-url="{{ path('admin_user_exit_job', {id:user.userId}) }}">*/
/*             离职*/
/*           </a>*/
/*         </li>*/
/*         <li>*/
/*           <a class="change-role-modal" data-url="{{ path('admin_user_role_change',{id:user.id}) }}">*/
/*             更改权限*/
/*           </a>*/
/*         </li>*/
/*         {% else %}*/
/*         <li>*/
/*           <a class="change-status-show" data-url="{{ path('admin_user_entry_job', {id:user.userId}) }}">*/
/*             入职*/
/*           </a>*/
/*         </li>*/
/*         {% endif %}*/
/*       </ul>*/
/*       {% endif %}*/
/*     </div>*/
/*   </td>*/
/* </tr>*/
/* */
