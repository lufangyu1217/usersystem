<?php

/* AppBundle:Department:add-modal.html.twig */
class __TwigTemplate_e41ece24e3e4fe52ae91c1abe25d501e1abfd533f43c16da711ee5b0ab00715a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:Department:add-modal.html.twig", 1);
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
        $__internal_fdf57c0e042106bce218010b26cf5ef8db0056ca7ae2cb87b715468074167e86 = $this->env->getExtension("native_profiler");
        $__internal_fdf57c0e042106bce218010b26cf5ef8db0056ca7ae2cb87b715468074167e86->enter($__internal_fdf57c0e042106bce218010b26cf5ef8db0056ca7ae2cb87b715468074167e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Department:add-modal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdf57c0e042106bce218010b26cf5ef8db0056ca7ae2cb87b715468074167e86->leave($__internal_fdf57c0e042106bce218010b26cf5ef8db0056ca7ae2cb87b715468074167e86_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b97b64aea9256191763b314704b05200e81f455b888fef90a14a9da5eb4ef25 = $this->env->getExtension("native_profiler");
        $__internal_8b97b64aea9256191763b314704b05200e81f455b888fef90a14a9da5eb4ef25->enter($__internal_8b97b64aea9256191763b314704b05200e81f455b888fef90a14a9da5eb4ef25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  <h4>增加部门</h4>
";
        
        $__internal_8b97b64aea9256191763b314704b05200e81f455b888fef90a14a9da5eb4ef25->leave($__internal_8b97b64aea9256191763b314704b05200e81f455b888fef90a14a9da5eb4ef25_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3601c742a2ab31f3695fc56b3eceba6593a856380ffa8af2fb47abd22a171b4 = $this->env->getExtension("native_profiler");
        $__internal_e3601c742a2ab31f3695fc56b3eceba6593a856380ffa8af2fb47abd22a171b4->enter($__internal_e3601c742a2ab31f3695fc56b3eceba6593a856380ffa8af2fb47abd22a171b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<form>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">部门名称</label>
    <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" name=\"name\">
  </div>
</form>
";
        
        $__internal_e3601c742a2ab31f3695fc56b3eceba6593a856380ffa8af2fb47abd22a171b4->leave($__internal_e3601c742a2ab31f3695fc56b3eceba6593a856380ffa8af2fb47abd22a171b4_prof);

    }

    // line 16
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c8491f7a6362b6ffcdf9694329bd3d7b7c296cdde36c7f426a30d392e765af00 = $this->env->getExtension("native_profiler");
        $__internal_c8491f7a6362b6ffcdf9694329bd3d7b7c296cdde36c7f426a30d392e765af00->enter($__internal_c8491f7a6362b6ffcdf9694329bd3d7b7c296cdde36c7f426a30d392e765af00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 17
        echo "  <button type=\"button\" class=\"btn btn-default add-department\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_add_department");
        echo "\">增加
  </button>
";
        
        $__internal_c8491f7a6362b6ffcdf9694329bd3d7b7c296cdde36c7f426a30d392e765af00->leave($__internal_c8491f7a6362b6ffcdf9694329bd3d7b7c296cdde36c7f426a30d392e765af00_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Department:add-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  69 => 16,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}*/
/*   <h4>增加部门</h4>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <form>*/
/*   <div class="form-group">*/
/*     <label for="exampleInputEmail1">部门名称</label>*/
/*     <input type="text" class="form-control" id="exampleInputEmail1" name="name">*/
/*   </div>*/
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-default add-department" data-url="{{path('admin_add_department')}}">增加*/
/*   </button>*/
/* {% endblock %}*/
