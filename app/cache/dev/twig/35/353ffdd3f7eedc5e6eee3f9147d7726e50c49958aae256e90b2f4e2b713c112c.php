<?php

/* AppBundle:Department:department.html.twig */
class __TwigTemplate_48d65587da51831289d2409f9ffa2dc4bcaa410d29d043a55b15863fa4322a9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Department:department.html.twig", 1);
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
        $__internal_3bf8d3ec8a401c38df00a1c8626eea752fd0c3f0621e517cdad0ac70db014bbc = $this->env->getExtension("native_profiler");
        $__internal_3bf8d3ec8a401c38df00a1c8626eea752fd0c3f0621e517cdad0ac70db014bbc->enter($__internal_3bf8d3ec8a401c38df00a1c8626eea752fd0c3f0621e517cdad0ac70db014bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Department:department.html.twig"));

        // line 2
        $context["script_controller"] = "links/user/js/system-settings.js";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bf8d3ec8a401c38df00a1c8626eea752fd0c3f0621e517cdad0ac70db014bbc->leave($__internal_3bf8d3ec8a401c38df00a1c8626eea752fd0c3f0621e517cdad0ac70db014bbc_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_45b06fd053fbe41eced79936cdbc9ab37c5852648b4f6ef66e2be1b8ab22196a = $this->env->getExtension("native_profiler");
        $__internal_45b06fd053fbe41eced79936cdbc9ab37c5852648b4f6ef66e2be1b8ab22196a->enter($__internal_45b06fd053fbe41eced79936cdbc9ab37c5852648b4f6ef66e2be1b8ab22196a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("links/user/css/list.css"), "html", null, true);
        echo "\"> -->
";
        
        $__internal_45b06fd053fbe41eced79936cdbc9ab37c5852648b4f6ef66e2be1b8ab22196a->leave($__internal_45b06fd053fbe41eced79936cdbc9ab37c5852648b4f6ef66e2be1b8ab22196a_prof);

    }

    // line 7
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f5559bd17b999567052da698aa69aa21e9415fafba008f6e0099608eba460c8f = $this->env->getExtension("native_profiler");
        $__internal_f5559bd17b999567052da698aa69aa21e9415fafba008f6e0099608eba460c8f->enter($__internal_f5559bd17b999567052da698aa69aa21e9415fafba008f6e0099608eba460c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " 
<div class=\"content-header\">  
  <h1>部门管理</h1>
</div>
<hr>
<ul class=\"nav nav-tabs mbm\">
  <a class=\"btn btn-sm btn-success pull-right bot add-department-modal\" data-url=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_add_department");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span>&nbsp;添加部门</a>
</ul>
";
        
        $__internal_f5559bd17b999567052da698aa69aa21e9415fafba008f6e0099608eba460c8f->leave($__internal_f5559bd17b999567052da698aa69aa21e9415fafba008f6e0099608eba460c8f_prof);

    }

    // line 16
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_f882dc89b5a1d512bb20fecb3081ded12dbf131c2f7344750a3baa7c371bb87e = $this->env->getExtension("native_profiler");
        $__internal_f882dc89b5a1d512bb20fecb3081ded12dbf131c2f7344750a3baa7c371bb87e->enter($__internal_f882dc89b5a1d512bb20fecb3081ded12dbf131c2f7344750a3baa7c371bb87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 17
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departments"]) ? $context["departments"] : $this->getContext($context, "departments")));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 30
            echo "          <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "id", array()), "html", null, true);
            echo "\">
          <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "departmentName", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "count", array()), "html", null, true);
            echo "</td>
          <td>
            <a class=\"btn btn-sm btn-primary edit-department-modal\" data-url=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_edit_department", array("id" => $this->getAttribute($context["department"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;编辑</a> 
            <a class=\"btn btn-sm btn-danger del-department\" data-url=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_delete_department", array("id" => $this->getAttribute($context["department"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span>&nbsp;删除</a>
          </td>
        </tr>  
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "      </tbody>
    </table>
  </div>
</form>
";
        
        $__internal_f882dc89b5a1d512bb20fecb3081ded12dbf131c2f7344750a3baa7c371bb87e->leave($__internal_f882dc89b5a1d512bb20fecb3081ded12dbf131c2f7344750a3baa7c371bb87e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Department:department.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 39,  120 => 35,  116 => 34,  111 => 32,  107 => 31,  102 => 30,  98 => 29,  84 => 17,  78 => 16,  68 => 13,  55 => 7,  45 => 4,  39 => 3,  32 => 1,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% set script_controller = 'links/user/js/system-settings.js' %}*/
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
/*           <tr id="{{department.id}}">*/
/*           <td>{{department.departmentName}}</td>*/
/*           <td>{{department.count}}</td>*/
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
