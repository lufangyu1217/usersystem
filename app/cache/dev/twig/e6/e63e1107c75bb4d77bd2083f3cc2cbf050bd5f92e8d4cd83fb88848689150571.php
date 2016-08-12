<?php

/* AppBundle:User:import.html.twig */
class __TwigTemplate_2fad5ebee17386722bcfdb4797a855d879c68291c897b9c39566a477e10bc1c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:import.html.twig", 1);
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
        $__internal_53d69f63aeb5da87a8fd89e3859caeb0bfe38133a5f9b4a8374a033debe84bd8 = $this->env->getExtension("native_profiler");
        $__internal_53d69f63aeb5da87a8fd89e3859caeb0bfe38133a5f9b4a8374a033debe84bd8->enter($__internal_53d69f63aeb5da87a8fd89e3859caeb0bfe38133a5f9b4a8374a033debe84bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:import.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53d69f63aeb5da87a8fd89e3859caeb0bfe38133a5f9b4a8374a033debe84bd8->leave($__internal_53d69f63aeb5da87a8fd89e3859caeb0bfe38133a5f9b4a8374a033debe84bd8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_70724a2ebceef3aa23fbeab8c79201bd0249122f7e163b5f7c8f174e98605999 = $this->env->getExtension("native_profiler");
        $__internal_70724a2ebceef3aa23fbeab8c79201bd0249122f7e163b5f7c8f174e98605999->enter($__internal_70724a2ebceef3aa23fbeab8c79201bd0249122f7e163b5f7c8f174e98605999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  <h4 class=\"modal-title\">导入员工</h4>
";
        
        $__internal_70724a2ebceef3aa23fbeab8c79201bd0249122f7e163b5f7c8f174e98605999->leave($__internal_70724a2ebceef3aa23fbeab8c79201bd0249122f7e163b5f7c8f174e98605999_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea32a8dca3d562ef134908c4e8ec80c94f1eec7d9b78b35fb332b537b43d888c = $this->env->getExtension("native_profiler");
        $__internal_ea32a8dca3d562ef134908c4e8ec80c94f1eec7d9b78b35fb332b537b43d888c->enter($__internal_ea32a8dca3d562ef134908c4e8ec80c94f1eec7d9b78b35fb332b537b43d888c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "  <form method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("admin_user_import");
        echo "\" class=\" form-group col-md-offset-3\" enctype=\"multipart/form-data\">
    <label for=\"import\">选择需要导入的文件</label>
    <input  type=\"file\" name=\"file_stu\" id=\"import\"/>
    <p class=\"help-block\">文件格式为.xls文件.<a href=\"#\">点击下载示例文件</a></p>
    <button class=\"btn btn-primary col-md-offset-6\" type=\"submit\">导入</button>

  </form>
";
        
        $__internal_ea32a8dca3d562ef134908c4e8ec80c94f1eec7d9b78b35fb332b537b43d888c->leave($__internal_ea32a8dca3d562ef134908c4e8ec80c94f1eec7d9b78b35fb332b537b43d888c_prof);

    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ad8954d3bb369bc06c4f6b1a94d0c0b162f9430b6abcc2f0016f15e3678fc9ef = $this->env->getExtension("native_profiler");
        $__internal_ad8954d3bb369bc06c4f6b1a94d0c0b162f9430b6abcc2f0016f15e3678fc9ef->enter($__internal_ad8954d3bb369bc06c4f6b1a94d0c0b162f9430b6abcc2f0016f15e3678fc9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_ad8954d3bb369bc06c4f6b1a94d0c0b162f9430b6abcc2f0016f15e3678fc9ef->leave($__internal_ad8954d3bb369bc06c4f6b1a94d0c0b162f9430b6abcc2f0016f15e3678fc9ef_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  56 => 7,  50 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}*/
/*   <h4 class="modal-title">导入员工</h4>*/
/* {% endblock %}*/
/* {% block body %}*/
/*   <form method="post" action="{{ path('admin_user_import')}}" class=" form-group col-md-offset-3" enctype="multipart/form-data">*/
/*     <label for="import">选择需要导入的文件</label>*/
/*     <input  type="file" name="file_stu" id="import"/>*/
/*     <p class="help-block">文件格式为.xls文件.<a href="#">点击下载示例文件</a></p>*/
/*     <button class="btn btn-primary col-md-offset-6" type="submit">导入</button>*/
/* */
/*   </form>*/
/* {% endblock %}*/
/* {% block footer %}{% endblock %}*/
