<?php

/* AppBundle:Layout:main-sidebar.html.twig */
class __TwigTemplate_143e19e57e098159867c9e05f905011d9939a3c7dca4609dad13b5d7699f6676 extends Twig_Template
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
        $__internal_fb540f9fd10086c973a826bff857ca6322bf339834415932f2acd2b0f76a2e59 = $this->env->getExtension("native_profiler");
        $__internal_fb540f9fd10086c973a826bff857ca6322bf339834415932f2acd2b0f76a2e59->enter($__internal_fb540f9fd10086c973a826bff857ca6322bf339834415932f2acd2b0f76a2e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layout:main-sidebar.html.twig"));

        // line 1
        echo "<div class=\"user-panel\">
  <div class=\"pull-left image\">
    ";
        // line 3
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getAvatar", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getAvatar", array(), "method"))) : (""))) {
            // line 4
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getAvatar", array(), "method")), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">
    ";
        } else {
            // line 6
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/avatar.png"), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">  
    ";
        }
        // line 8
        echo "  </div>
  <div class=\"pull-left info\">
    <p>";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "trueName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "trueName", array()))) : ("")), "html", null, true);
        echo "</p>
    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i>
    ";
        // line 12
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "department", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "department", array()))) : (""))) {
            // line 13
            echo "      ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "department", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "department", array()))) : ("")), "html", null, true);
            echo "
    ";
        } else {
            // line 15
            echo "      暂未加入部门
    ";
        }
        // line 17
        echo "    </a>
  </div>
</div>
<ul class=\"sidebar-menu\">
  <li class=\"header\"></li>
  <li class=\"treeview ";
        // line 22
        if (twig_in_filter((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), array(0 => "user_list", 1 => "user_create", 2 => "user_edit"))) {
            echo "active";
        }
        echo "\">
    ";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            // line 24
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_user_present_list");
            echo "\">
      <i class=\"glyphicon glyphicon-home\"></i><span>员工管理</span>
    </a>
    ";
        } else {
            // line 28
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_present_list");
            echo "\">
      <i class=\"glyphicon glyphicon-home\"></i><span>员工列表</span>
    </a>
    ";
        }
        // line 32
        echo "  </li>
  ";
        // line 33
        if (( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isLeader", array(), "method"))) {
            // line 34
            echo "  <li class=\"treeview ";
            if (((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")) == "department_personnel_list")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("department_personnel_list");
            echo "\">
      <i class=\"fa fa-user\"></i> <span>部门管理</span>
    </a>
  </li>
  ";
        }
        // line 40
        echo "  <li class=\"treeview ";
        if (twig_in_filter((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), array(0 => "person_info", 1 => "edit_person", 2 => "upload_image"))) {
            echo "active";
        }
        echo "\">
    <a href=\"\">
      <i class=\"glyphicon glyphicon-user\"></i> <span>个人操作</span>
      <span class=\"pull-right-container\">
        <i class=\"fa fa-angle-left pull-right\"></i>
      </span>
    </a>
    <ul class=\"treeview-menu\">
      <li class=\"";
        // line 48
        if (((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")) == "edit_person")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit_person", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">
          <i class=\"glyphicon glyphicon-pencil\"></i> <span>个人信息</span>
        </a>
      </li>
      <li class=\"";
        // line 53
        if (((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")) == "upload_image")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "type" => "Profile")), "html", null, true);
        echo "\">
          <i class=\"glyphicon glyphicon-picture\"></i> <span>图片上传</span>
        </a>
      </li>
  </ul>
  </li>
  ";
        // line 60
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            // line 61
            echo "  <li class=\"treeview ";
            if (twig_in_filter((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), array(0 => "department"))) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("admin_list_department");
            echo "\">
      <i class=\"glyphicon glyphicon-cog\"></i> <span>系统设置</span>
      <span class=\"pull-right-container\">
        <i class=\"fa fa-angle-left pull-right\"></i>
      </span>
    </a>
    <ul class=\"treeview-menu\">
      <li ";
            // line 69
            if (((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")) == "department")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_list_department");
            echo "\"><i class=\"fa fa-circle-o\"></i> 部门管理</a></li>
    </ul>   
  </li> 
  ";
        }
        // line 73
        echo "</ul>";
        
        $__internal_fb540f9fd10086c973a826bff857ca6322bf339834415932f2acd2b0f76a2e59->leave($__internal_fb540f9fd10086c973a826bff857ca6322bf339834415932f2acd2b0f76a2e59_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Layout:main-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 73,  173 => 69,  163 => 62,  156 => 61,  154 => 60,  145 => 54,  139 => 53,  132 => 49,  126 => 48,  112 => 40,  104 => 35,  97 => 34,  95 => 33,  92 => 32,  84 => 28,  76 => 24,  74 => 23,  68 => 22,  61 => 17,  57 => 15,  51 => 13,  49 => 12,  44 => 10,  40 => 8,  34 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="user-panel">*/
/*   <div class="pull-left image">*/
/*     {% if app.user.getAvatar()|default() %}*/
/*       <img src="{{ asset(app.user.getAvatar())}}" class="user-image" alt="User Image">*/
/*     {% else %}*/
/*       <img src="{{ asset('assets/avatar.png')}}" class="user-image" alt="User Image">  */
/*     {% endif %}*/
/*   </div>*/
/*   <div class="pull-left info">*/
/*     <p>{{ app.user.trueName|default() }}</p>*/
/*     <a href="#"><i class="fa fa-circle text-success"></i>*/
/*     {% if app.user.department|default()  %}*/
/*       {{ app.user.department|default() }}*/
/*     {% else %}*/
/*       暂未加入部门*/
/*     {% endif %}*/
/*     </a>*/
/*   </div>*/
/* </div>*/
/* <ul class="sidebar-menu">*/
/*   <li class="header"></li>*/
/*   <li class="treeview {% if nav in ['user_list', 'user_create', 'user_edit'] %}active{% endif %}">*/
/*     {% if app.user.isAdmin() %}*/
/*     <a href="{{ path('admin_user_present_list') }}">*/
/*       <i class="glyphicon glyphicon-home"></i><span>员工管理</span>*/
/*     </a>*/
/*     {% else %}*/
/*     <a href="{{ path('user_present_list') }}">*/
/*       <i class="glyphicon glyphicon-home"></i><span>员工列表</span>*/
/*     </a>*/
/*     {% endif %}*/
/*   </li>*/
/*   {% if not app.user.isAdmin() and app.user.isLeader() %}*/
/*   <li class="treeview {% if nav == 'department_personnel_list' %}active{% endif %}">*/
/*     <a href="{{ path('department_personnel_list') }}">*/
/*       <i class="fa fa-user"></i> <span>部门管理</span>*/
/*     </a>*/
/*   </li>*/
/*   {% endif %}*/
/*   <li class="treeview {% if nav in ['person_info','edit_person','upload_image'] %}active{% endif %}">*/
/*     <a href="">*/
/*       <i class="glyphicon glyphicon-user"></i> <span>个人操作</span>*/
/*       <span class="pull-right-container">*/
/*         <i class="fa fa-angle-left pull-right"></i>*/
/*       </span>*/
/*     </a>*/
/*     <ul class="treeview-menu">*/
/*       <li class="{% if nav == 'edit_person' %}active{% endif %}">*/
/*         <a href="{{ path('user_edit_person',{id:app.user.id}) }}">*/
/*           <i class="glyphicon glyphicon-pencil"></i> <span>个人信息</span>*/
/*         </a>*/
/*       </li>*/
/*       <li class="{% if nav == 'upload_image' %}active{% endif %}">*/
/*         <a href="{{ path('user_upload',{id:app.user.id,type:'Profile'}) }}">*/
/*           <i class="glyphicon glyphicon-picture"></i> <span>图片上传</span>*/
/*         </a>*/
/*       </li>*/
/*   </ul>*/
/*   </li>*/
/*   {% if app.user.isAdmin() %}*/
/*   <li class="treeview {% if nav in ['department'] %}active{% endif %}">*/
/*     <a href="{{ path('admin_list_department') }}">*/
/*       <i class="glyphicon glyphicon-cog"></i> <span>系统设置</span>*/
/*       <span class="pull-right-container">*/
/*         <i class="fa fa-angle-left pull-right"></i>*/
/*       </span>*/
/*     </a>*/
/*     <ul class="treeview-menu">*/
/*       <li {% if nav == 'department' %}class="active"{% endif %}><a href="{{ path('admin_list_department') }}"><i class="fa fa-circle-o"></i> 部门管理</a></li>*/
/*     </ul>   */
/*   </li> */
/*   {% endif %}*/
/* </ul>*/
