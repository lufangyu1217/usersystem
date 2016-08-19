<?php

/* AppBundle:User:add/user-learn-info.html.twig */
class __TwigTemplate_cee2186bdbeb15df2cd81fc3309e3e34f87e36b4eaed731376f743f0829a41b9 extends Twig_Template
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
        $__internal_f8d849dec39a7d51380ec999eac6605686d005d9d5eb3899e20bc378ce1f103e = $this->env->getExtension("native_profiler");
        $__internal_f8d849dec39a7d51380ec999eac6605686d005d9d5eb3899e20bc378ce1f103e->enter($__internal_f8d849dec39a7d51380ec999eac6605686d005d9d5eb3899e20bc378ce1f103e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:add/user-learn-info.html.twig"));

        // line 1
        echo "<div class=\"learn-modal hidden\">
  <div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"startTime\">开始时间:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"learnStartTime form-control time\" type=\"text\" name=\"education[1][startTime]\" placeholder=\"日期格式：年-月-日\" value=\"\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"endTime\">结束时间:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"learnEndTime form-control time\" type=\"text\" name=\"education[1][endTime]\" placeholder=\"日期格式：年-月-日\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"schoolName\">院校名称:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"learnSchoolName form-control\" type=\"text\" name=\"education[1][schoolName]\" value=\"\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"profession\">所学专业:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"learnProfession form-control\" type=\"text\" name=\"education[1][profession]\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"position\">担任职务:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"learnPosition form-control\" type=\"text\" name=\"education[1][position]\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-2 col-sm-offset-8\">
        <button type=\"button\" id=\"delete-learn-info\" class=\"btn btn-sm btn-danger delete-learn-info hidden\">删除</button>
        <button type=\"button\" class=\"btn btn-sm btn-success add-learn-info\">新增</button>
      </div>
    </div>
  </div>
</div>";
        
        $__internal_f8d849dec39a7d51380ec999eac6605686d005d9d5eb3899e20bc378ce1f103e->leave($__internal_f8d849dec39a7d51380ec999eac6605686d005d9d5eb3899e20bc378ce1f103e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:add/user-learn-info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="learn-modal hidden">*/
/*   <div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="startTime">开始时间:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="learnStartTime form-control time" type="text" name="education[1][startTime]" placeholder="日期格式：年-月-日" value="">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="endTime">结束时间:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="learnEndTime form-control time" type="text" name="education[1][endTime]" placeholder="日期格式：年-月-日" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="schoolName">院校名称:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="learnSchoolName form-control" type="text" name="education[1][schoolName]" value="">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="profession">所学专业:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="learnProfession form-control" type="text" name="education[1][profession]" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="position">担任职务:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="learnPosition form-control" type="text" name="education[1][position]" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-2 col-sm-offset-8">*/
/*         <button type="button" id="delete-learn-info" class="btn btn-sm btn-danger delete-learn-info hidden">删除</button>*/
/*         <button type="button" class="btn btn-sm btn-success add-learn-info">新增</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
