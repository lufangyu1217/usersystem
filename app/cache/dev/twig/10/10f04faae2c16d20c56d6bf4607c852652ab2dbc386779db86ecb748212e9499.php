<?php

/* AppBundle:Leader:list/tr-table.html.twig */
class __TwigTemplate_d1597d6da5455e6009498cbe5c181f90d19ae34264b512ea5a324f9c532dea38 extends Twig_Template
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
        $__internal_5d89733ac94a795d12e44037ddb33eb83b24bd3df39536c566f8632a9a094165 = $this->env->getExtension("native_profiler");
        $__internal_5d89733ac94a795d12e44037ddb33eb83b24bd3df39536c566f8632a9a094165->enter($__internal_5d89733ac94a795d12e44037ddb33eb83b24bd3df39536c566f8632a9a094165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Leader:list/tr-table.html.twig"));

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
        echo $this->env->getExtension('twig.app_extension')->getDictText("education", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "education", array()));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("department_user_basic_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">查看</a>
    </div>
  </td>
</tr>
";
        
        $__internal_5d89733ac94a795d12e44037ddb33eb83b24bd3df39536c566f8632a9a094165->leave($__internal_5d89733ac94a795d12e44037ddb33eb83b24bd3df39536c566f8632a9a094165_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Leader:list/tr-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  84 => 18,  78 => 16,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  30 => 3,  26 => 2,  22 => 1,);
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
/*   <td>{{ dict_text('education', user.education) }}</td>*/
/*   <td>{{ user.phone }}</td>*/
/*   {% if user.status == 'off' %}*/
/*     <td>{{ user.quitTime|date('Y-m-d') }}</td>*/
/*   {% endif %}*/
/*   <td style="min-width:100px;">*/
/*     <div class="btn-group">*/
/*       <a class="btn btn-default btn-sm show-inuser" data-url="{{ path('department_user_basic_show',{id:user.id}) }}">查看</a>*/
/*     </div>*/
/*   </td>*/
/* </tr>*/
/* */
