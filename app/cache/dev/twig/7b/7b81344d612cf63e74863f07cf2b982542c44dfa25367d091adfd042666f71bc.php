<?php

/* AppBundle:User:add/user-family-info.html.twig */
class __TwigTemplate_819f1c9cc72ff0171f8fd2dafce02cdd77e1e5d64b344e9227438b1a109a449e extends Twig_Template
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
        $__internal_2fc3ac3b01abd74802cd763996ad4949433350fba42747799e7e14bff9977464 = $this->env->getExtension("native_profiler");
        $__internal_2fc3ac3b01abd74802cd763996ad4949433350fba42747799e7e14bff9977464->enter($__internal_2fc3ac3b01abd74802cd763996ad4949433350fba42747799e7e14bff9977464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:add/user-family-info.html.twig"));

        // line 1
        echo "<div class=\"family-modal hidden\">
  <div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"member\">称谓:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"member form-control\" type=\"text\" name=\"family[1][member]\" value=\"\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"trueName\">姓名:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"familyName form-control\" type=\"text\" name=\"family[1][trueName]\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"age\">年龄:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"age form-control\" type=\"text\" name=\"family[1][age]\" value=\"\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"job\">工作单位及职务:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"job form-control\" type=\"text\" name=\"family[1][job]\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"phone\">联系电话:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"familyphone form-control\" type=\"text\" name=\"family[1][phone]\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-2 col-sm-offset-8\">
        <button type=\"button\" id=\"delete-family-info\" class=\"btn btn-sm btn-danger delete-family-info hidden\">删除</button>
        <button type=\"button\" class=\"btn btn-sm btn-success add-family-info\">新增</button>
      </div>
    </div>
  </div>
</div>";
        
        $__internal_2fc3ac3b01abd74802cd763996ad4949433350fba42747799e7e14bff9977464->leave($__internal_2fc3ac3b01abd74802cd763996ad4949433350fba42747799e7e14bff9977464_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:add/user-family-info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="family-modal hidden">*/
/*   <div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="member">称谓:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="member form-control" type="text" name="family[1][member]" value="">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="trueName">姓名:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="familyName form-control" type="text" name="family[1][trueName]" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="age">年龄:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="age form-control" type="text" name="family[1][age]" value="">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="job">工作单位及职务:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="job form-control" type="text" name="family[1][job]" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="phone">联系电话:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="familyphone form-control" type="text" name="family[1][phone]" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-2 col-sm-offset-8">*/
/*         <button type="button" id="delete-family-info" class="btn btn-sm btn-danger delete-family-info hidden">删除</button>*/
/*         <button type="button" class="btn btn-sm btn-success add-family-info">新增</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
