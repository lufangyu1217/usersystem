<?php

/* AppBundle:Department:edit-modal.html.twig */
class __TwigTemplate_c4f2344ffe1602f04569000b7280aec1ab96d5e4052e5b69f3262f4c8646e7d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:Department:edit-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::modal-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_738007d050621d661a2379db715201216ef17452715ae74464f4ea209c2bacad = $this->env->getExtension("native_profiler");
        $__internal_738007d050621d661a2379db715201216ef17452715ae74464f4ea209c2bacad->enter($__internal_738007d050621d661a2379db715201216ef17452715ae74464f4ea209c2bacad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Department:edit-modal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_738007d050621d661a2379db715201216ef17452715ae74464f4ea209c2bacad->leave($__internal_738007d050621d661a2379db715201216ef17452715ae74464f4ea209c2bacad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0b008ab8887f174691cbd37d57bba2bd67c323484f69a50e16a3b1fe96cd161 = $this->env->getExtension("native_profiler");
        $__internal_c0b008ab8887f174691cbd37d57bba2bd67c323484f69a50e16a3b1fe96cd161->enter($__internal_c0b008ab8887f174691cbd37d57bba2bd67c323484f69a50e16a3b1fe96cd161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "编辑部门信息";
        
        $__internal_c0b008ab8887f174691cbd37d57bba2bd67c323484f69a50e16a3b1fe96cd161->leave($__internal_c0b008ab8887f174691cbd37d57bba2bd67c323484f69a50e16a3b1fe96cd161_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2011de564f92ed7e211a759958e8e8a188d427bcde503daf69b34a782a3acde2 = $this->env->getExtension("native_profiler");
        $__internal_2011de564f92ed7e211a759958e8e8a188d427bcde503daf69b34a782a3acde2->enter($__internal_2011de564f92ed7e211a759958e8e8a188d427bcde503daf69b34a782a3acde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<form class=\"form-horizontal\">
  <div class=\"form-group\">
    <label for=\"js-edit-department-name\" class=\"col-sm-2 control-label\">部门名称</label>
    <div class=\"col-sm-8\">
      <input type=\"text\" class=\"form-control\" id=\"js-edit-department-name\" name=\"name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "name", array()), "html", null, true);
        echo "\">
    </div>
  </div>
</form>
";
        
        $__internal_2011de564f92ed7e211a759958e8e8a188d427bcde503daf69b34a782a3acde2->leave($__internal_2011de564f92ed7e211a759958e8e8a188d427bcde503daf69b34a782a3acde2_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_93d76cdb3b3500f020dfc4cc2c22f63d4cf40381b9e14f13ebea42ca23417697 = $this->env->getExtension("native_profiler");
        $__internal_93d76cdb3b3500f020dfc4cc2c22f63d4cf40381b9e14f13ebea42ca23417697->enter($__internal_93d76cdb3b3500f020dfc4cc2c22f63d4cf40381b9e14f13ebea42ca23417697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        echo "  <button type=\"button\" class=\"btn btn-primary edit-department\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_edit_department", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">保存</button>
  <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">关闭</button>
";
        
        $__internal_93d76cdb3b3500f020dfc4cc2c22f63d4cf40381b9e14f13ebea42ca23417697->leave($__internal_93d76cdb3b3500f020dfc4cc2c22f63d4cf40381b9e14f13ebea42ca23417697_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Department:edit-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  73 => 17,  61 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}编辑部门信息{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <form class="form-horizontal">*/
/*   <div class="form-group">*/
/*     <label for="js-edit-department-name" class="col-sm-2 control-label">部门名称</label>*/
/*     <div class="col-sm-8">*/
/*       <input type="text" class="form-control" id="js-edit-department-name" name="name" value="{{department.name}}">*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-primary edit-department" data-url="{{path('admin_edit_department', {id:id})}}">保存</button>*/
/*   <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>*/
/* {% endblock %}*/
