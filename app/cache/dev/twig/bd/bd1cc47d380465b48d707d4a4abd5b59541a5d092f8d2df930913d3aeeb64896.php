<?php

/* AppBundle:User:list/list-user.html.twig */
class __TwigTemplate_2de3e0e26a655868f7a128de147ba2a3352fea568a4e2aa824bfe73a1a08bb99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:list/list-user.html.twig", 1);
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
        $__internal_4f7e59e1562401e0736214fbceb1ae51bff93687f9fec3e20c7968467e9ee4b7 = $this->env->getExtension("native_profiler");
        $__internal_4f7e59e1562401e0736214fbceb1ae51bff93687f9fec3e20c7968467e9ee4b7->enter($__internal_4f7e59e1562401e0736214fbceb1ae51bff93687f9fec3e20c7968467e9ee4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:list/list-user.html.twig"));

        // line 3
        $context["nav"] = "user_list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f7e59e1562401e0736214fbceb1ae51bff93687f9fec3e20c7968467e9ee4b7->leave($__internal_4f7e59e1562401e0736214fbceb1ae51bff93687f9fec3e20c7968467e9ee4b7_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_92976e50393459b185766d5935950fdc8a35eec1a44a3794b5f6a26019add5df = $this->env->getExtension("native_profiler");
        $__internal_92976e50393459b185766d5935950fdc8a35eec1a44a3794b5f6a26019add5df->enter($__internal_92976e50393459b185766d5935950fdc8a35eec1a44a3794b5f6a26019add5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/list.js")), "html", null, true);
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/show-user.js")), "html", null, true);
        echo "
  <div class=\"content-header\">
    ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            // line 10
            echo "      <h1>员工管理</h1>
    ";
        } else {
            // line 12
            echo "      <h1>员工列表</h1>
    ";
        }
        // line 14
        echo "  </div>
  <hr>
  ";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            // line 17
            echo "    <form id='search-form' class=\"form-inline\" ";
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
                echo "action='";
                echo $this->env->getExtension('routing')->getPath("user_present_list");
                echo "'";
            } else {
                echo "action='";
                echo $this->env->getExtension('routing')->getPath("admin_user_demission_list");
                echo "'";
            }
            echo ">
  ";
        } else {
            // line 19
            echo "    <form id='search-form' class=\"form-inline\" action='";
            echo $this->env->getExtension('routing')->getPath("user_present_list");
            echo "'>
  ";
        }
        // line 21
        echo "    <div class=\"search-time\">
      <select name=\"searchTime\" class=\"form-control\">
        ";
        // line 23
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
            // line 24
            echo "          <option value=\"joinTime\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "searchTime"), "method") == "joinTime")) {
                echo " selected=\"selected\"";
            }
            echo ">入职时间</option>
        ";
        } else {
            // line 26
            echo "          <option value=\"quitTime\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "searchTime"), "method") == "quitTime")) {
                echo " selected=\"selected\"";
            }
            echo ">离职时间</option>
        ";
        }
        // line 28
        echo "      </select>
      <div class='input-group date'>
        <input type='text' class=\"form-control time\" name=\"startTime\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "startTime"), "method"), "html", null, true);
        echo "\">
      </div> -
      <div class='input-group date'>
        <input type='text' class=\"form-control time\" name=\"endTime\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "endTime"), "method"), "html", null, true);
        echo "\">
      </div>
    </div><br>
    <div class=\"form-group\">
      <select class=\"form-control search-select\" name=\"pageNum\">
        ";
        // line 38
        echo $this->env->getExtension('twig.html_extension')->selectOptions($this->env->getExtension('twig.app_extension')->getDict("pageNum"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "pageNum"), "method"), "每页行数");
        echo "
      </select>
    </div>
    <select name=\"departmentId\" class=\"form-control search-select\">
      ";
        // line 42
        echo $this->env->getExtension('twig.html_extension')->selectOptions((isset($context["departmentsChoices"]) ? $context["departmentsChoices"] : $this->getContext($context, "departmentsChoices")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "departmentId"), "method"), "所有部门");
        echo "
    </select>
    <select name=\"gender\" class=\"form-control search-select\">
      <option value=\"\">性别</option>
      <option ";
        // line 46
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "gender"), "method") == "male")) {
            echo " selected=\"selected\"";
        }
        echo " value=\"male\">男</option>
      <option ";
        // line 47
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "gender"), "method") == "female")) {
            echo " selected=\"selected\"";
        }
        echo " value=\"female\">女</option>
    </select>
    <select name=\"education\" class=\"form-control search-select\">
      ";
        // line 50
        echo $this->env->getExtension('twig.html_extension')->selectOptions($this->env->getExtension('twig.app_extension')->getDict("education"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "education"), "method"), "学历");
        echo "
    </select>
    <select name=\"key\" class=\"form-control search-select\">
      <option value=\"trueName\" ";
        // line 53
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "key"), "method") == "trueName")) {
            echo " selected=\"selected\"";
        }
        echo ">姓名</option>
      <option value=\"number\" ";
        // line 54
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "key"), "method") == "number")) {
            echo " selected=\"selected\"";
        }
        echo ">工号</option>
    </select>
    <input class=\"form-control\" id='keyword' name='keyword' placeholder=\"请输入关键词\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">
    <input type='submit' class=\"btn btn-sm btn-default\" value='GO'>
  </form>
  <ul class=\"nav nav-tabs mbm job-status\">
    ";
        // line 60
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            // line 61
            echo "      <li ";
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_user_present_list");
            echo "\">在职</a></li>
      <li ";
            // line 62
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "off")) {
                echo " class=\"active\" ";
            }
            echo " ><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_user_demission_list");
            echo "\">离职</a></li>
    
      <div class=\"form-group pull-right\">
        <a class=\"btn btn-sm btn-success\" id=\"js-export-btn\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_export", array("status" => (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")))), "html", null, true);
            echo "\">
          <span class=\"glyphicon glyphicon-export\"></span>&nbsp;导出员工
        </a>
        <a class=\"btn btn-sm btn-success\" id=\"js-import-btn\" data-url=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("admin_user_import");
            echo "\">
          <span class=\"glyphicon glyphicon-import\"></span>&nbsp;导入员工
        </a>
        <a class=\"btn btn-sm btn-success\" href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("admin_user_add");
            echo "\">
          <span class=\"glyphicon glyphicon-plus\"></span>&nbsp;添加员工
        </a>
      </div>
    ";
        }
        // line 76
        echo "  </ul>
";
        
        $__internal_92976e50393459b185766d5935950fdc8a35eec1a44a3794b5f6a26019add5df->leave($__internal_92976e50393459b185766d5935950fdc8a35eec1a44a3794b5f6a26019add5df_prof);

    }

    // line 78
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_c03b0f76ee0d443e9f40496a707d6bd73173da2429f6a9b88b49fea3cbfe9721 = $this->env->getExtension("native_profiler");
        $__internal_c03b0f76ee0d443e9f40496a707d6bd73173da2429f6a9b88b49fea3cbfe9721->enter($__internal_c03b0f76ee0d443e9f40496a707d6bd73173da2429f6a9b88b49fea3cbfe9721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 79
        echo "  ";
        $this->loadTemplate("AppBundle:User:list/list-table.html.twig", "AppBundle:User:list/list-user.html.twig", 79)->display($context);
        
        $__internal_c03b0f76ee0d443e9f40496a707d6bd73173da2429f6a9b88b49fea3cbfe9721->leave($__internal_c03b0f76ee0d443e9f40496a707d6bd73173da2429f6a9b88b49fea3cbfe9721_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:list/list-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 79,  232 => 78,  224 => 76,  216 => 71,  210 => 68,  204 => 65,  194 => 62,  185 => 61,  183 => 60,  176 => 56,  169 => 54,  163 => 53,  157 => 50,  149 => 47,  143 => 46,  136 => 42,  129 => 38,  121 => 33,  115 => 30,  111 => 28,  103 => 26,  95 => 24,  93 => 23,  89 => 21,  83 => 19,  69 => 17,  67 => 16,  63 => 14,  59 => 12,  55 => 10,  53 => 9,  48 => 7,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% set nav = 'user_list' %}*/
/* */
/* {% block content_title %}*/
/* {{ script(['links/user/js/list.js']) }}*/
/* {{ script(['links/user/js/show-user.js']) }}*/
/*   <div class="content-header">*/
/*     {% if app.user.isAdmin() %}*/
/*       <h1>员工管理</h1>*/
/*     {% else %}*/
/*       <h1>员工列表</h1>*/
/*     {% endif %}*/
/*   </div>*/
/*   <hr>*/
/*   {% if app.user.isAdmin() %}*/
/*     <form id='search-form' class="form-inline" {% if status == 'on' %}action='{{ path('user_present_list') }}'{% else %}action='{{ path('admin_user_demission_list') }}'{% endif %}>*/
/*   {% else %}*/
/*     <form id='search-form' class="form-inline" action='{{ path('user_present_list') }}'>*/
/*   {% endif %}*/
/*     <div class="search-time">*/
/*       <select name="searchTime" class="form-control">*/
/*         {% if status == 'on' %}*/
/*           <option value="joinTime" {% if app.request.query.get('searchTime') == 'joinTime' %} selected="selected"{% endif %}>入职时间</option>*/
/*         {% else %}*/
/*           <option value="quitTime" {% if app.request.query.get('searchTime') == 'quitTime' %} selected="selected"{% endif %}>离职时间</option>*/
/*         {% endif %}*/
/*       </select>*/
/*       <div class='input-group date'>*/
/*         <input type='text' class="form-control time" name="startTime" value="{{ app.request.query.get('startTime') }}">*/
/*       </div> -*/
/*       <div class='input-group date'>*/
/*         <input type='text' class="form-control time" name="endTime" value="{{ app.request.query.get('endTime') }}">*/
/*       </div>*/
/*     </div><br>*/
/*     <div class="form-group">*/
/*       <select class="form-control search-select" name="pageNum">*/
/*         {{ select_options(dict('pageNum'), app.request.query.get('pageNum'), '每页行数') }}*/
/*       </select>*/
/*     </div>*/
/*     <select name="departmentId" class="form-control search-select">*/
/*       {{ select_options(departmentsChoices, app.request.query.get('departmentId'), '所有部门') }}*/
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
/*     <input type='submit' class="btn btn-sm btn-default" value='GO'>*/
/*   </form>*/
/*   <ul class="nav nav-tabs mbm job-status">*/
/*     {% if app.user.isAdmin() %}*/
/*       <li {% if status == 'on' %} class="active" {% endif %}><a href="{{ path('admin_user_present_list') }}">在职</a></li>*/
/*       <li {% if status == 'off' %} class="active" {% endif %} ><a href="{{ path('admin_user_demission_list') }}">离职</a></li>*/
/*     */
/*       <div class="form-group pull-right">*/
/*         <a class="btn btn-sm btn-success" id="js-export-btn" href="{{ path('admin_user_export', {status:status}) }}">*/
/*           <span class="glyphicon glyphicon-export"></span>&nbsp;导出员工*/
/*         </a>*/
/*         <a class="btn btn-sm btn-success" id="js-import-btn" data-url="{{ path('admin_user_import') }}">*/
/*           <span class="glyphicon glyphicon-import"></span>&nbsp;导入员工*/
/*         </a>*/
/*         <a class="btn btn-sm btn-success" href="{{ path('admin_user_add') }}">*/
/*           <span class="glyphicon glyphicon-plus"></span>&nbsp;添加员工*/
/*         </a>*/
/*       </div>*/
/*     {% endif %}*/
/*   </ul>*/
/* {% endblock %}*/
/* {% block content_body %}*/
/*   {% include 'AppBundle:User:list/list-table.html.twig' %}*/
/* {% endblock %}*/
/* */
/* */
