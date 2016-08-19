<?php

/* AppBundle:User:import.html.twig */
class __TwigTemplate_a4d296795bdf7bcf7e52c61bce3c5ca9ed22ab0590b25b951eab8351a2d218b1 extends Twig_Template
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
        $__internal_a6b6d711472fa3e23bc760135740197fd2e77c3fa9a5fd62b73127bd19f049d0 = $this->env->getExtension("native_profiler");
        $__internal_a6b6d711472fa3e23bc760135740197fd2e77c3fa9a5fd62b73127bd19f049d0->enter($__internal_a6b6d711472fa3e23bc760135740197fd2e77c3fa9a5fd62b73127bd19f049d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:import.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6b6d711472fa3e23bc760135740197fd2e77c3fa9a5fd62b73127bd19f049d0->leave($__internal_a6b6d711472fa3e23bc760135740197fd2e77c3fa9a5fd62b73127bd19f049d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_61711978fc906ec8431264ba8843dd2b705727ec7bc61e27218695c6c7e1792a = $this->env->getExtension("native_profiler");
        $__internal_61711978fc906ec8431264ba8843dd2b705727ec7bc61e27218695c6c7e1792a->enter($__internal_61711978fc906ec8431264ba8843dd2b705727ec7bc61e27218695c6c7e1792a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "导入员工";
        
        $__internal_61711978fc906ec8431264ba8843dd2b705727ec7bc61e27218695c6c7e1792a->leave($__internal_61711978fc906ec8431264ba8843dd2b705727ec7bc61e27218695c6c7e1792a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_deeb15e9648ed5cb259f06801185ec4797e02c4f81bbf7dc855b49afdd7a1443 = $this->env->getExtension("native_profiler");
        $__internal_deeb15e9648ed5cb259f06801185ec4797e02c4f81bbf7dc855b49afdd7a1443->enter($__internal_deeb15e9648ed5cb259f06801185ec4797e02c4f81bbf7dc855b49afdd7a1443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<form method=\"post\" enctype=\"multipart/form-data\" class=\"import form-horizontal\" action=\"";
        echo $this->env->getExtension('routing')->getPath("admin_user_import");
        echo "\">
  <div class=\"form-group\" id=\"teachers-form-group\">
    <label class=\"col-md-3 col-md-offset-1\">
      选择要导入的文件
    </label>
    <div class=\"col-md-8 controls\">
      <div class=\"uploader blue\">
        <input  type=\"file\" name=\"file_stu\" id=\"import\"/>
      </div>
      <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("import.xls"), "html", null, true);
        echo "\">点击下载示例说明文件</a>
      <br>
      ";
        // line 16
        echo $this->env->getExtension('app_asset_helper')->rendorFormCsrfToken();
        echo "
      <button class=\"btn btn-primary col-md-offset-6\" type=\"submit\">导入</button>
      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">关闭</button>
    </div>
  </div>
</form>
";
        
        $__internal_deeb15e9648ed5cb259f06801185ec4797e02c4f81bbf7dc855b49afdd7a1443->leave($__internal_deeb15e9648ed5cb259f06801185ec4797e02c4f81bbf7dc855b49afdd7a1443_prof);

    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8518a3df4918350fd69870973db570cbe782729bea998aeab170556b64f601b0 = $this->env->getExtension("native_profiler");
        $__internal_8518a3df4918350fd69870973db570cbe782729bea998aeab170556b64f601b0->enter($__internal_8518a3df4918350fd69870973db570cbe782729bea998aeab170556b64f601b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_8518a3df4918350fd69870973db570cbe782729bea998aeab170556b64f601b0->leave($__internal_8518a3df4918350fd69870973db570cbe782729bea998aeab170556b64f601b0_prof);

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
        return array (  86 => 23,  72 => 16,  67 => 14,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}导入员工{% endblock %}*/
/* {% block body %}*/
/* <form method="post" enctype="multipart/form-data" class="import form-horizontal" action="{{ path('admin_user_import')}}">*/
/*   <div class="form-group" id="teachers-form-group">*/
/*     <label class="col-md-3 col-md-offset-1">*/
/*       选择要导入的文件*/
/*     </label>*/
/*     <div class="col-md-8 controls">*/
/*       <div class="uploader blue">*/
/*         <input  type="file" name="file_stu" id="import"/>*/
/*       </div>*/
/*       <a href="{{ asset('import.xls') }}">点击下载示例说明文件</a>*/
/*       <br>*/
/*       {{ form_csrf_token() }}*/
/*       <button class="btn btn-primary col-md-offset-6" type="submit">导入</button>*/
/*       <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* {% endblock %}*/
/* {% block footer %}{% endblock %}*/
