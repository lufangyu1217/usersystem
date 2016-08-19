<?php

/* AppBundle:Leader:list/list-user.html.twig */
class __TwigTemplate_c19612c714fc30fd587cc3db21f072ad8d96e491df3c7a383b030afb33d53a95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Leader:list/list-user.html.twig", 1);
        $this->blocks = array(
            'content_title' => array($this, 'block_content_title'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc6713cedc4e73d9de196dc50c3a822252381569330946f3ec7ddce462da527b = $this->env->getExtension("native_profiler");
        $__internal_bc6713cedc4e73d9de196dc50c3a822252381569330946f3ec7ddce462da527b->enter($__internal_bc6713cedc4e73d9de196dc50c3a822252381569330946f3ec7ddce462da527b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Leader:list/list-user.html.twig"));

        // line 3
        $context["nav"] = "department_personnel_list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc6713cedc4e73d9de196dc50c3a822252381569330946f3ec7ddce462da527b->leave($__internal_bc6713cedc4e73d9de196dc50c3a822252381569330946f3ec7ddce462da527b_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_fae788bf87a40cd566f9984fdb0418f5cb6baa1c7c0f3b5c608bc574065d60ea = $this->env->getExtension("native_profiler");
        $__internal_fae788bf87a40cd566f9984fdb0418f5cb6baa1c7c0f3b5c608bc574065d60ea->enter($__internal_fae788bf87a40cd566f9984fdb0418f5cb6baa1c7c0f3b5c608bc574065d60ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/list.js")), "html", null, true);
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/show-user.js")), "html", null, true);
        echo "
  <div class=\"content-header\">
    <h1>部门管理</h1>
  </div>
  <hr>
  <form id='search-form' class=\"form-inline\" ";
        // line 12
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
            echo "action='";
            echo $this->env->getExtension('routing')->getPath("department_personnel_list");
            echo "'";
        } else {
            echo "action='";
            echo $this->env->getExtension('routing')->getPath("department_demission_list");
            echo "'";
        }
        echo ">
    <select name=\"pageNum\" class=\"form-control search-select\">
      <option value=\"\">每页行数</option>
      <option ";
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "pageNum"), "method") == 20)) {
            echo " selected=\"selected\"";
        }
        echo ">20</option>
      <option ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "pageNum"), "method") == 50)) {
            echo " selected=\"selected\"";
        }
        echo ">50</option>
      <option ";
        // line 17
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "pageNum"), "method") == 100)) {
            echo " selected=\"selected\"";
        }
        echo ">100</option>
      <option ";
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "pageNum"), "method") == 200)) {
            echo " selected=\"selected\"";
        }
        echo ">200</option>
      <option ";
        // line 19
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "pageNum"), "method") == 500)) {
            echo " selected=\"selected\"";
        }
        echo ">500</option>
    </select>
    <select name=\"gender\" class=\"form-control search-select\">
      <option value=\"\">性别</option>
      <option ";
        // line 23
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "gender"), "method") == "male")) {
            echo " selected=\"selected\"";
        }
        echo " value=\"male\">男</option>
      <option ";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "gender"), "method") == "female")) {
            echo " selected=\"selected\"";
        }
        echo " value=\"female\">女</option>
    </select>
    <select name=\"education\" class=\"form-control search-select\">
      ";
        // line 27
        echo $this->env->getExtension('twig.html_extension')->selectOptions($this->env->getExtension('twig.app_extension')->getDict("education"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "education"), "method"), "学历");
        echo "
    </select>
    <select name=\"key\" class=\"form-control search-select\">
      <option value=\"trueName\" ";
        // line 30
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "key"), "method") == "trueName")) {
            echo " selected=\"selected\"";
        }
        echo ">姓名</option>
      <option value=\"number\" ";
        // line 31
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "key"), "method") == "number")) {
            echo " selected=\"selected\"";
        }
        echo ">工号</option>
    </select>
    <input class=\"form-control\" id='keyword' name='keyword' placeholder=\"请输入关键词\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">
    <input type='submit' class=\"btn btn-sm btn-default\" value='搜索'>
  </form>
  <ul class=\"nav nav-tabs mbm job-status\">
    <li ";
        // line 37
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("department_personnel_list");
        echo "\">在职</a></li>
    <li ";
        // line 38
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "off")) {
            echo " class=\"active\" ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('routing')->getPath("department_demission_list");
        echo "\">离职</a></li>
  </ul>
";
        
        $__internal_fae788bf87a40cd566f9984fdb0418f5cb6baa1c7c0f3b5c608bc574065d60ea->leave($__internal_fae788bf87a40cd566f9984fdb0418f5cb6baa1c7c0f3b5c608bc574065d60ea_prof);

    }

    // line 41
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_bdc61b194ead37b552e683ddf942034ff2fad9510dfe5c3f79e1b4eec33455d7 = $this->env->getExtension("native_profiler");
        $__internal_bdc61b194ead37b552e683ddf942034ff2fad9510dfe5c3f79e1b4eec33455d7->enter($__internal_bdc61b194ead37b552e683ddf942034ff2fad9510dfe5c3f79e1b4eec33455d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 42
        echo "  ";
        $this->loadTemplate("AppBundle:Leader:list/list-table.html.twig", "AppBundle:Leader:list/list-user.html.twig", 42)->display($context);
        
        $__internal_bdc61b194ead37b552e683ddf942034ff2fad9510dfe5c3f79e1b4eec33455d7->leave($__internal_bdc61b194ead37b552e683ddf942034ff2fad9510dfe5c3f79e1b4eec33455d7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Leader:list/list-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 42,  165 => 41,  151 => 38,  143 => 37,  136 => 33,  129 => 31,  123 => 30,  117 => 27,  109 => 24,  103 => 23,  94 => 19,  88 => 18,  82 => 17,  76 => 16,  70 => 15,  56 => 12,  48 => 7,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% set nav = 'department_personnel_list' %}*/
/* */
/* {% block content_title %}*/
/* {{ script(['links/user/js/list.js']) }}*/
/* {{ script(['links/user/js/show-user.js']) }}*/
/*   <div class="content-header">*/
/*     <h1>部门管理</h1>*/
/*   </div>*/
/*   <hr>*/
/*   <form id='search-form' class="form-inline" {% if status == 'on' %}action='{{ path('department_personnel_list') }}'{% else %}action='{{ path('department_demission_list') }}'{% endif %}>*/
/*     <select name="pageNum" class="form-control search-select">*/
/*       <option value="">每页行数</option>*/
/*       <option {% if app.request.query.get('pageNum') == 20 %} selected="selected"{% endif %}>20</option>*/
/*       <option {% if app.request.query.get('pageNum') == 50 %} selected="selected"{% endif %}>50</option>*/
/*       <option {% if app.request.query.get('pageNum') == 100 %} selected="selected"{% endif %}>100</option>*/
/*       <option {% if app.request.query.get('pageNum') == 200 %} selected="selected"{% endif %}>200</option>*/
/*       <option {% if app.request.query.get('pageNum') == 500 %} selected="selected"{% endif %}>500</option>*/
/*     </select>*/
/*     <select name="gender" class="form-control search-select">*/
/*       <option value="">性别</option>*/
/*       <option {% if app.request.query.get('gender') == 'male' %} selected="selected"{% endif %} value="male">男</option>*/
/*       <option {% if app.request.query.get('gender') == 'female' %} selected="selected"{% endif %} value="female">女</option>*/
/*     </select>*/
/*     <select name="education" class="form-control search-select">*/
/*       {{ select_options(dict('education'), app.request.query.get('education'), '学历') }}*/
/*     </select>*/
/*     <select name="key" class="form-control search-select">*/
/*       <option value="trueName" {% if app.request.query.get('key') == 'trueName' %} selected="selected"{% endif %}>姓名</option>*/
/*       <option value="number" {% if app.request.query.get('key') == 'number' %} selected="selected"{% endif %}>工号</option>*/
/*     </select>*/
/*     <input class="form-control" id='keyword' name='keyword' placeholder="请输入关键词" value="{{ app.request.query.get('keyword') }}">*/
/*     <input type='submit' class="btn btn-sm btn-default" value='搜索'>*/
/*   </form>*/
/*   <ul class="nav nav-tabs mbm job-status">*/
/*     <li {% if status == 'on' %} class="active" {% endif %}><a href="{{ path('department_personnel_list') }}">在职</a></li>*/
/*     <li {% if status == 'off' %} class="active" {% endif %} ><a href="{{ path('department_demission_list') }}">离职</a></li>*/
/*   </ul>*/
/* {% endblock %}*/
/* {% block content_body %}*/
/*   {% include 'AppBundle:Leader:list/list-table.html.twig' %}*/
/* {% endblock %}*/
/* */
/* */
