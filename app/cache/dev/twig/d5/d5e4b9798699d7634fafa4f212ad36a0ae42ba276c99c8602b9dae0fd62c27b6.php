<?php

/* AppBundle:Layout:main-header.html.twig */
class __TwigTemplate_2805e3da757b8757fbf6690d91fe78e048084742a878fbfdff14fceb019b8c3a extends Twig_Template
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
        $__internal_18cbbe6148d96498d19bf4d1fffce2ae4703e04cbfc8fb30a28e3d0b36695121 = $this->env->getExtension("native_profiler");
        $__internal_18cbbe6148d96498d19bf4d1fffce2ae4703e04cbfc8fb30a28e3d0b36695121->enter($__internal_18cbbe6148d96498d19bf4d1fffce2ae4703e04cbfc8fb30a28e3d0b36695121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layout:main-header.html.twig"));

        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_user_present_list");
        echo "\" class=\"logo\">
  <span class=\"logo-mini\"><b>U</b>MS</span>
  <span class=\"logo-lg\"><b>User</b>-Manage-System</span>
</a>
<nav class=\"navbar navbar-static-top\">
  <a class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\"></a>

  <div class=\"navbar-custom-menu\">
    <ul class=\"nav navbar-nav\">
      <li class=\"dropdown user user-menu\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        ";
        // line 12
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getAvatar", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getAvatar", array(), "method"))) : (""))) {
            // line 13
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getAvatar", array(), "method")), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">
        ";
        } else {
            // line 15
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/avatar.png"), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">  
        ";
        }
        // line 17
        echo "          <span class=\"hidden-xs\">
            ";
        // line 18
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 19
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "trueName", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 21
            echo "              未登陆
            ";
        }
        // line 23
        echo "          </span>
        </a>
        <ul class=\"dropdown-menu\">
          <li class=\"user-header\">
            ";
        // line 27
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getAvatar", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getAvatar", array(), "method"))) : (""))) {
            // line 28
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getAvatar", array(), "method")), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">
            ";
        } else {
            // line 30
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/avatar.png"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">  
            ";
        }
        // line 32
        echo "            <p>
              ";
        // line 33
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "trueName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "trueName", array()))) : ("")), "html", null, true);
        echo "
              <small>";
        // line 34
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "department", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "department", array()))) : ("")), "html", null, true);
        echo "</small>
            </p>
          </li>
          <li class=\"user-body\">
            <div class=\"row head-link\">
              <div class=\"col-xs-4 text-center\">
                <a href=\"http://kuozhicollege.edusoho.cn/\" target=\"_blank\">阔知大学</a>
              </div>
              <div class=\"col-xs-4 text-center\">
                <a href=\"http://www.edusoho.com/\" target=\"_blank\">Edusoho</a>
              </div>
              <div class=\"col-xs-4 text-center\">
                <a href=\"http://www.qiqiuyu.com/\" target=\"_blank\">气球鱼</a>
              </div>
            </div>
          </li>
          <li class=\"user-footer\">
            <div class=\"pull-left\">
              <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit_person", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-flat\">个人信息</a>
            </div>
            <div class=\"pull-right\">
              ";
        // line 55
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method"), false)) : (false))) {
            // line 56
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"btn btn-default btn-flat\">退出</a>
              ";
        } else {
            // line 58
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" class=\"btn btn-default btn-flat\">登录</a>
              ";
        }
        // line 60
        echo "              
            </div>
          </li>
        </ul>
      </li>
    </ul> 
  </div>
</nav>";
        
        $__internal_18cbbe6148d96498d19bf4d1fffce2ae4703e04cbfc8fb30a28e3d0b36695121->leave($__internal_18cbbe6148d96498d19bf4d1fffce2ae4703e04cbfc8fb30a28e3d0b36695121_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Layout:main-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 60,  128 => 58,  122 => 56,  120 => 55,  114 => 52,  93 => 34,  89 => 33,  86 => 32,  80 => 30,  74 => 28,  72 => 27,  66 => 23,  62 => 21,  56 => 19,  54 => 18,  51 => 17,  45 => 15,  39 => 13,  37 => 12,  22 => 1,);
    }
}
/* <a href="{{ path('admin_user_present_list') }}" class="logo">*/
/*   <span class="logo-mini"><b>U</b>MS</span>*/
/*   <span class="logo-lg"><b>User</b>-Manage-System</span>*/
/* </a>*/
/* <nav class="navbar navbar-static-top">*/
/*   <a class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>*/
/* */
/*   <div class="navbar-custom-menu">*/
/*     <ul class="nav navbar-nav">*/
/*       <li class="dropdown user user-menu">*/
/*         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*         {% if app.user.getAvatar()|default() %}*/
/*           <img src="{{ asset(app.user.getAvatar())}}" class="user-image" alt="User Image">*/
/*         {% else %}*/
/*           <img src="{{ asset('assets/avatar.png')}}" class="user-image" alt="User Image">  */
/*         {% endif %}*/
/*           <span class="hidden-xs">*/
/*             {% if app.user %}*/
/*               {{ app.user.trueName }}*/
/*             {% else %}*/
/*               未登陆*/
/*             {% endif %}*/
/*           </span>*/
/*         </a>*/
/*         <ul class="dropdown-menu">*/
/*           <li class="user-header">*/
/*             {% if app.user.getAvatar()|default() %}*/
/*               <img src="{{ asset(app.user.getAvatar())}}" class="img-circle" alt="User Image">*/
/*             {% else %}*/
/*               <img src="{{ asset('assets/avatar.png')}}" class="img-circle" alt="User Image">  */
/*             {% endif %}*/
/*             <p>*/
/*               {{ app.user.trueName|default() }}*/
/*               <small>{{ app.user.department|default() }}</small>*/
/*             </p>*/
/*           </li>*/
/*           <li class="user-body">*/
/*             <div class="row head-link">*/
/*               <div class="col-xs-4 text-center">*/
/*                 <a href="http://kuozhicollege.edusoho.cn/" target="_blank">阔知大学</a>*/
/*               </div>*/
/*               <div class="col-xs-4 text-center">*/
/*                 <a href="http://www.edusoho.com/" target="_blank">Edusoho</a>*/
/*               </div>*/
/*               <div class="col-xs-4 text-center">*/
/*                 <a href="http://www.qiqiuyu.com/" target="_blank">气球鱼</a>*/
/*               </div>*/
/*             </div>*/
/*           </li>*/
/*           <li class="user-footer">*/
/*             <div class="pull-left">*/
/*               <a href="{{ path('user_edit_person',{id:app.user.id}) }}" class="btn btn-default btn-flat">个人信息</a>*/
/*             </div>*/
/*             <div class="pull-right">*/
/*               {% if app.user.isLogin()|default(false) %}*/
/*                 <a href="{{ path('logout') }}" class="btn btn-default btn-flat">退出</a>*/
/*               {% else %}*/
/*                 <a href="{{ path('login') }}" class="btn btn-default btn-flat">登录</a>*/
/*               {% endif %}*/
/*               */
/*             </div>*/
/*           </li>*/
/*         </ul>*/
/*       </li>*/
/*     </ul> */
/*   </div>*/
/* </nav>*/
