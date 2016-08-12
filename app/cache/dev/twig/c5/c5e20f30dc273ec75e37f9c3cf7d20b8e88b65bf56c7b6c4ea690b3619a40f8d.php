<?php

/* AppBundle:User:list-user/list-user.html.twig */
class __TwigTemplate_05ff60ace7dc14fa8e1f1acc652420bcf5bc71f9ca3ea0e62a6d2b00b0181868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:list-user/list-user.html.twig", 1);
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
        $__internal_5a5812f1ae70ee900ddb378e7571fc6d6b7b4215fa3e39b05495a095d4cc8012 = $this->env->getExtension("native_profiler");
        $__internal_5a5812f1ae70ee900ddb378e7571fc6d6b7b4215fa3e39b05495a095d4cc8012->enter($__internal_5a5812f1ae70ee900ddb378e7571fc6d6b7b4215fa3e39b05495a095d4cc8012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:list-user/list-user.html.twig"));

        // line 3
        $context["nav"] = "user_list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a5812f1ae70ee900ddb378e7571fc6d6b7b4215fa3e39b05495a095d4cc8012->leave($__internal_5a5812f1ae70ee900ddb378e7571fc6d6b7b4215fa3e39b05495a095d4cc8012_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_0f4c8b98426514b69f640c181eeb0c2216044ee1f22fbe86b0ef783b47c0cffb = $this->env->getExtension("native_profiler");
        $__internal_0f4c8b98426514b69f640c181eeb0c2216044ee1f22fbe86b0ef783b47c0cffb->enter($__internal_0f4c8b98426514b69f640c181eeb0c2216044ee1f22fbe86b0ef783b47c0cffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/list.js")), "html", null, true);
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/show-user.js")), "html", null, true);
        echo "
  <div class=\"content-header\">
    <h1>员工管理</h1>
  </div>
  <hr>
  <form id='search-form' class=\"form-inline\" ";
        // line 12
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
            echo "action='";
            echo $this->env->getExtension('routing')->getPath("admin_user_present_list");
            echo "'";
        } else {
            echo "action='";
            echo $this->env->getExtension('routing')->getPath("admin_user_demission_list");
            echo "'";
        }
        echo ">
    <select name=\"name\" class=\"form-control search-select\">
      <option value=\"\">所有部门</option>
      <option ";
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "name"), "method") == "运营部")) {
            echo " selected=\"selected\"";
        }
        echo ">运营部</option>
      <option ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "name"), "method") == "技术部")) {
            echo " selected=\"selected\"";
        }
        echo ">技术部</option>
      <option ";
        // line 17
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "name"), "method") == "销售部")) {
            echo " selected=\"selected\"";
        }
        echo ">销售部</option>
      <option ";
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "name"), "method") == "市场部")) {
            echo " selected=\"selected\"";
        }
        echo ">市场部</option>
      <option ";
        // line 19
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "name"), "method") == "人力资源部")) {
            echo " selected=\"selected\"";
        }
        echo ">人力资源部</option>
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "gender"), "method") == "famale")) {
            echo " selected=\"selected\"";
        }
        echo " value=\"famale\">女</option>
    </select>
    <select name=\"education\" class=\"form-control search-select\">
      <option value=\"\">学历</option>
      <option ";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "education"), "method") == "初中")) {
            echo " selected=\"selected\"";
        }
        echo ">初中</option>
      <option ";
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "education"), "method") == "高中")) {
            echo " selected=\"selected\"";
        }
        echo ">高中</option>
      <option ";
        // line 30
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "education"), "method") == "大专")) {
            echo " selected=\"selected\"";
        }
        echo ">大专</option>
      <option ";
        // line 31
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "education"), "method") == "本科")) {
            echo " selected=\"selected\"";
        }
        echo ">本科</option>
      <option ";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "education"), "method") == "研究生")) {
            echo " selected=\"selected\"";
        }
        echo ">研究生</option>
      <option ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "education"), "method") == "博士")) {
            echo " selected=\"selected\"";
        }
        echo ">博士</option>
    </select>
    <select name=\"key\" class=\"form-control search-select\">
      <option value=\"trueName\" ";
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "key"), "method") == "trueName")) {
            echo " selected=\"selected\"";
        }
        echo ">姓名</option>
      <option value=\"number\" ";
        // line 37
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "key"), "method") == "number")) {
            echo " selected=\"selected\"";
        }
        echo ">工号</option>
    </select>
    <input class=\"form-control\" id='keyword' name='keyword' placeholder=\"请输入关键词\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">
    <input type='submit' class=\"btn btn-sm btn-default\" value='搜索'>
  </form>
  <ul class=\"nav nav-tabs mbm job-status\">
    <li ";
        // line 43
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_user_present_list");
        echo "\">在职</a></li>
    <li ";
        // line 44
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "off")) {
            echo " class=\"active\" ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_user_demission_list");
        echo "\">离职</a></li>
    <div class=\"form-group pull-right\">
      <a class=\"btn btn-sm btn-success\" id=\"js-import-btn\" data-url=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("admin_user_import");
        echo "\">
      <span class=\"glyphicon glyphicon-import\"></span>&nbsp;导入员工</a>
      <a class=\"btn btn-sm btn-success\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("admin_user_add");
        echo "\">
      <span class=\"glyphicon glyphicon-plus\"></span>&nbsp;添加员工</a>
    </div>
  </ul>
";
        
        $__internal_0f4c8b98426514b69f640c181eeb0c2216044ee1f22fbe86b0ef783b47c0cffb->leave($__internal_0f4c8b98426514b69f640c181eeb0c2216044ee1f22fbe86b0ef783b47c0cffb_prof);

    }

    // line 53
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_559e24a073bff14e4acf86928a92c14112ff1d0bb3123316071d7b847b0808d9 = $this->env->getExtension("native_profiler");
        $__internal_559e24a073bff14e4acf86928a92c14112ff1d0bb3123316071d7b847b0808d9->enter($__internal_559e24a073bff14e4acf86928a92c14112ff1d0bb3123316071d7b847b0808d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 54
        echo "  ";
        $this->loadTemplate("AppBundle:User/list-user:list-table.html.twig", "AppBundle:User:list-user/list-user.html.twig", 54)->display($context);
        
        $__internal_559e24a073bff14e4acf86928a92c14112ff1d0bb3123316071d7b847b0808d9->leave($__internal_559e24a073bff14e4acf86928a92c14112ff1d0bb3123316071d7b847b0808d9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:list-user/list-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 54,  210 => 53,  198 => 48,  193 => 46,  184 => 44,  176 => 43,  169 => 39,  162 => 37,  156 => 36,  148 => 33,  142 => 32,  136 => 31,  130 => 30,  124 => 29,  118 => 28,  109 => 24,  103 => 23,  94 => 19,  88 => 18,  82 => 17,  76 => 16,  70 => 15,  56 => 12,  48 => 7,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
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
/*     <h1>员工管理</h1>*/
/*   </div>*/
/*   <hr>*/
/*   <form id='search-form' class="form-inline" {% if status == 'on' %}action='{{ path('admin_user_present_list') }}'{% else %}action='{{ path('admin_user_demission_list') }}'{% endif %}>*/
/*     <select name="name" class="form-control search-select">*/
/*       <option value="">所有部门</option>*/
/*       <option {% if app.request.query.get('name') == '运营部' %} selected="selected"{% endif %}>运营部</option>*/
/*       <option {% if app.request.query.get('name') == '技术部' %} selected="selected"{% endif %}>技术部</option>*/
/*       <option {% if app.request.query.get('name') == '销售部' %} selected="selected"{% endif %}>销售部</option>*/
/*       <option {% if app.request.query.get('name') == '市场部' %} selected="selected"{% endif %}>市场部</option>*/
/*       <option {% if app.request.query.get('name') == '人力资源部' %} selected="selected"{% endif %}>人力资源部</option>*/
/*     </select>*/
/*     <select name="gender" class="form-control search-select">*/
/*       <option value="">性别</option>*/
/*       <option {% if app.request.query.get('gender') == 'male' %} selected="selected"{% endif %} value="male">男</option>*/
/*       <option {% if app.request.query.get('gender') == 'famale' %} selected="selected"{% endif %} value="famale">女</option>*/
/*     </select>*/
/*     <select name="education" class="form-control search-select">*/
/*       <option value="">学历</option>*/
/*       <option {% if app.request.query.get('education') == '初中' %} selected="selected"{% endif %}>初中</option>*/
/*       <option {% if app.request.query.get('education') == '高中' %} selected="selected"{% endif %}>高中</option>*/
/*       <option {% if app.request.query.get('education') == '大专' %} selected="selected"{% endif %}>大专</option>*/
/*       <option {% if app.request.query.get('education') == '本科' %} selected="selected"{% endif %}>本科</option>*/
/*       <option {% if app.request.query.get('education') == '研究生' %} selected="selected"{% endif %}>研究生</option>*/
/*       <option {% if app.request.query.get('education') == '博士' %} selected="selected"{% endif %}>博士</option>*/
/*     </select>*/
/*     <select name="key" class="form-control search-select">*/
/*       <option value="trueName" {% if app.request.query.get('key') == 'trueName' %} selected="selected"{% endif %}>姓名</option>*/
/*       <option value="number" {% if app.request.query.get('key') == 'number' %} selected="selected"{% endif %}>工号</option>*/
/*     </select>*/
/*     <input class="form-control" id='keyword' name='keyword' placeholder="请输入关键词" value="{{ app.request.query.get('keyword') }}">*/
/*     <input type='submit' class="btn btn-sm btn-default" value='搜索'>*/
/*   </form>*/
/*   <ul class="nav nav-tabs mbm job-status">*/
/*     <li {% if status == 'on' %} class="active" {% endif %}><a href="{{ path('admin_user_present_list') }}">在职</a></li>*/
/*     <li {% if status == 'off' %} class="active" {% endif %} ><a href="{{ path('admin_user_demission_list') }}">离职</a></li>*/
/*     <div class="form-group pull-right">*/
/*       <a class="btn btn-sm btn-success" id="js-import-btn" data-url="{{ path('admin_user_import') }}">*/
/*       <span class="glyphicon glyphicon-import"></span>&nbsp;导入员工</a>*/
/*       <a class="btn btn-sm btn-success" href="{{ path('admin_user_add') }}">*/
/*       <span class="glyphicon glyphicon-plus"></span>&nbsp;添加员工</a>*/
/*     </div>*/
/*   </ul>*/
/* {% endblock %}*/
/* {% block content_body %}*/
/*   {% include 'AppBundle:User/list-user:list-table.html.twig' %}*/
/* {% endblock %}*/
/* */
/* */
