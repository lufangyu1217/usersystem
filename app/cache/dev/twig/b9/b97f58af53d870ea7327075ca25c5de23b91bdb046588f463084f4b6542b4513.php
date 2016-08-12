<?php

/* AppBundle:Department:list.html.twig */
class __TwigTemplate_6a00bae0989d1372c76d7ef65e8c4dd2d0ae5074e7062318cace740f393d5c4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Department:list.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_de16408e7f1ca5d9ee34dae9eb9b0b27aed430152259f3e7edae5f0c2b6bcddb = $this->env->getExtension("native_profiler");
        $__internal_de16408e7f1ca5d9ee34dae9eb9b0b27aed430152259f3e7edae5f0c2b6bcddb->enter($__internal_de16408e7f1ca5d9ee34dae9eb9b0b27aed430152259f3e7edae5f0c2b6bcddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Department:list.html.twig"));

        // line 2
        $context["script_controller"] = "links/user/js/system-settings.js";
        // line 3
        $context["nav"] = "department";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de16408e7f1ca5d9ee34dae9eb9b0b27aed430152259f3e7edae5f0c2b6bcddb->leave($__internal_de16408e7f1ca5d9ee34dae9eb9b0b27aed430152259f3e7edae5f0c2b6bcddb_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99a95a2709c1a730b618347712ee10980f809f4f069f4560c15971a25a8f3f3d = $this->env->getExtension("native_profiler");
        $__internal_99a95a2709c1a730b618347712ee10980f809f4f069f4560c15971a25a8f3f3d->enter($__internal_99a95a2709c1a730b618347712ee10980f809f4f069f4560c15971a25a8f3f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "  <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("links/user/css/list.css"), "html", null, true);
        echo "\"> -->
";
        
        $__internal_99a95a2709c1a730b618347712ee10980f809f4f069f4560c15971a25a8f3f3d->leave($__internal_99a95a2709c1a730b618347712ee10980f809f4f069f4560c15971a25a8f3f3d_prof);

    }

    // line 8
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_38ca0f233f7a185fb1e36a61b53ad48859a93775930804a4662613d83cb0d62e = $this->env->getExtension("native_profiler");
        $__internal_38ca0f233f7a185fb1e36a61b53ad48859a93775930804a4662613d83cb0d62e->enter($__internal_38ca0f233f7a185fb1e36a61b53ad48859a93775930804a4662613d83cb0d62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " 
<div class=\"content-header\">  
  <h1>部门管理</h1>
</div>
<hr>
<ul class=\"nav nav-tabs mbm\">
  <a class=\"btn btn-sm btn-success pull-right bot add-department-modal\" data-url=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_add_department");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span>&nbsp;添加部门</a>
</ul>
";
        
        $__internal_38ca0f233f7a185fb1e36a61b53ad48859a93775930804a4662613d83cb0d62e->leave($__internal_38ca0f233f7a185fb1e36a61b53ad48859a93775930804a4662613d83cb0d62e_prof);

    }

    // line 17
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_2ec8982be3cd96da01bab18eec62df2a58d761a27528cd6b2d7277468a2ff709 = $this->env->getExtension("native_profiler");
        $__internal_2ec8982be3cd96da01bab18eec62df2a58d761a27528cd6b2d7277468a2ff709->enter($__internal_2ec8982be3cd96da01bab18eec62df2a58d761a27528cd6b2d7277468a2ff709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 18
        echo "
<form id=\"add-user-form\" class=\"form-horizontal\">
  <div class=\"add-user-body\">
    <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
      <thead>
        <tr>
          <th width=\"35%\">部门</th>
          <th width=\"40%\">现有人数</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departments"]) ? $context["departments"] : $this->getContext($context, "departments")));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 31
            echo "        <tr>
          <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "name", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "amount", array()), "html", null, true);
            echo "</td>
          <td>
            <a class=\"btn btn-sm btn-primary edit-department-modal\" data-url=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_edit_department", array("id" => $this->getAttribute($context["department"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;编辑</a> 
            <a class=\"btn btn-sm btn-danger del-department\" data-url=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_delete_department", array("id" => $this->getAttribute($context["department"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span>&nbsp;删除</a>
          </td>
        </tr>  
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "      </tbody>
    </table>
  </div>
</form>
";
        
        $__internal_2ec8982be3cd96da01bab18eec62df2a58d761a27528cd6b2d7277468a2ff709->leave($__internal_2ec8982be3cd96da01bab18eec62df2a58d761a27528cd6b2d7277468a2ff709_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Department:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  120 => 36,  116 => 35,  111 => 33,  107 => 32,  104 => 31,  100 => 30,  86 => 18,  80 => 17,  70 => 14,  57 => 8,  47 => 5,  41 => 4,  34 => 1,  32 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% set script_controller = 'links/user/js/system-settings.js' %}*/
/* {% set nav ='department' %}*/
/* {% block stylesheets %}*/
/*   <!-- <link rel="stylesheet" type="text/css" href="{{ asset('links/user/css/list.css') }}"> -->*/
/* {% endblock %}*/
/* */
/* {% block content_title %} */
/* <div class="content-header">  */
/*   <h1>部门管理</h1>*/
/* </div>*/
/* <hr>*/
/* <ul class="nav nav-tabs mbm">*/
/*   <a class="btn btn-sm btn-success pull-right bot add-department-modal" data-url="{{path('admin_add_department')}}"><span class="glyphicon glyphicon-plus"></span>&nbsp;添加部门</a>*/
/* </ul>*/
/* {% endblock %}*/
/* {% block content_body %}*/
/* */
/* <form id="add-user-form" class="form-horizontal">*/
/*   <div class="add-user-body">*/
/*     <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*       <thead>*/
/*         <tr>*/
/*           <th width="35%">部门</th>*/
/*           <th width="40%">现有人数</th>*/
/*           <th>操作</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*       {% for department in departments %}*/
/*         <tr>*/
/*           <td>{{department.name}}</td>*/
/*           <td>{{department.amount}}</td>*/
/*           <td>*/
/*             <a class="btn btn-sm btn-primary edit-department-modal" data-url="{{ path('admin_edit_department' , {id:department.id}) }}"><span class="glyphicon glyphicon-edit"></span>&nbsp;编辑</a> */
/*             <a class="btn btn-sm btn-danger del-department" data-url="{{ path('admin_delete_department', {id:department.id}) }}"><span class="glyphicon glyphicon-trash"></span>&nbsp;删除</a>*/
/*           </td>*/
/*         </tr>  */
/*       {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*   </div>*/
/* </form>*/
/* {% endblock %}*/
