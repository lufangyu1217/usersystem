<?php

/* AppBundle:Layout:main-sidebar.html.twig */
class __TwigTemplate_f4461be91d119d9846a4600026c6bba6b7369bc4da874268bd6e5a2b52d9ab49 extends Twig_Template
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
        $__internal_c7c28a164a99446abad99980db7135aff0647acdf3e8037b38586fcf7e8d4ab0 = $this->env->getExtension("native_profiler");
        $__internal_c7c28a164a99446abad99980db7135aff0647acdf3e8037b38586fcf7e8d4ab0->enter($__internal_c7c28a164a99446abad99980db7135aff0647acdf3e8037b38586fcf7e8d4ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layout:main-sidebar.html.twig"));

        // line 1
        echo "<div class=\"user-panel\">
  <div class=\"pull-left image\">
    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/avator.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
  </div>
  <div class=\"pull-left info\">
    <p>赵姐</p>
    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i>人力资源部</a>
  </div>
</div>
";
        // line 19
        echo "<ul class=\"sidebar-menu\">
  <li class=\"header\">HEADER</li>
  <li class=\"treeview ";
        // line 21
        if (((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")) == "user_list")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_user_present_list");
        echo "\">
      <i class=\"fa fa-user\"></i> <span>员工管理</span>
    </a>
  </li>  
  <li class=\"treeview ";
        // line 26
        if (twig_in_filter((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), array(0 => "department"))) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("admin_list_department");
        echo "\">
      <i class=\"glyphicon glyphicon-cog\"></i> <span>系统设置</span>
      <span class=\"pull-right-container\">
        <i class=\"fa fa-angle-left pull-right\"></i>
      </span>
    </a>
    <ul class=\"treeview-menu\">
      <li ";
        // line 34
        if (((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")) == "department")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_list_department");
        echo "\"><i class=\"fa fa-circle-o\"></i> 部门管理</a></li>
    </ul>
    
  </li> 
</ul>";
        
        $__internal_c7c28a164a99446abad99980db7135aff0647acdf3e8037b38586fcf7e8d4ab0->leave($__internal_c7c28a164a99446abad99980db7135aff0647acdf3e8037b38586fcf7e8d4ab0_prof);

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
        return array (  69 => 34,  59 => 27,  53 => 26,  46 => 22,  40 => 21,  36 => 19,  26 => 3,  22 => 1,);
    }
}
/* <div class="user-panel">*/
/*   <div class="pull-left image">*/
/*     <img src="{{ asset('assets/avator.jpg')}}" class="img-circle" alt="User Image">*/
/*   </div>*/
/*   <div class="pull-left info">*/
/*     <p>赵姐</p>*/
/*     <a href="#"><i class="fa fa-circle text-success"></i>人力资源部</a>*/
/*   </div>*/
/* </div>*/
/* {# <form action="#" method="get" class="sidebar-form">*/
/*   <div class="input-group">*/
/*     <input type="text" name="q" class="form-control" placeholder="Search...">*/
/*         <span class="input-group-btn">*/
/*           <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>*/
/*           </button>*/
/*         </span>*/
/*   </div>*/
/* </form> #}*/
/* <ul class="sidebar-menu">*/
/*   <li class="header">HEADER</li>*/
/*   <li class="treeview {% if nav == 'user_list' %}active{% endif %}">*/
/*     <a href="{{ path('admin_user_present_list') }}">*/
/*       <i class="fa fa-user"></i> <span>员工管理</span>*/
/*     </a>*/
/*   </li>  */
/*   <li class="treeview {% if nav in ['department'] %}active{% endif %}">*/
/*     <a href="{{ path('admin_list_department') }}">*/
/*       <i class="glyphicon glyphicon-cog"></i> <span>系统设置</span>*/
/*       <span class="pull-right-container">*/
/*         <i class="fa fa-angle-left pull-right"></i>*/
/*       </span>*/
/*     </a>*/
/*     <ul class="treeview-menu">*/
/*       <li {% if nav == 'department' %}class="active"{% endif %}><a href="{{ path('admin_list_department') }}"><i class="fa fa-circle-o"></i> 部门管理</a></li>*/
/*     </ul>*/
/*     */
/*   </li> */
/* </ul>*/
