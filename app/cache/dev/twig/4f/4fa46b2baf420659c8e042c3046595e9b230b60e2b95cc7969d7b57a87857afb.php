<?php

/* AppBundle:User:add-user/user-work-info.html.twig */
class __TwigTemplate_550a8ff72e4673a3f46752eac85fea710e585bcd76ab14382235e47cc9156a60 extends Twig_Template
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
        $__internal_cbe93d74fa1de23fd59ec8182dc1471c754d4cd86fd0f567b0c50c84d7eeb66f = $this->env->getExtension("native_profiler");
        $__internal_cbe93d74fa1de23fd59ec8182dc1471c754d4cd86fd0f567b0c50c84d7eeb66f->enter($__internal_cbe93d74fa1de23fd59ec8182dc1471c754d4cd86fd0f567b0c50c84d7eeb66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:add-user/user-work-info.html.twig"));

        // line 1
        echo "<div class=\"work-modal hidden\">
  <div>
    <button type=\"button\" id=\"delete-work-info\" class=\"btn btn-sm btn-danger delete-work-info hidden\">删除</button>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"startTime\">开始时间:</label>
      <div class=\"col-sm-2 controls\">
        <input id=\"workStartTime\" class=\"form-control time\" type=\"text\" name=\"work[1][startTime]\" placeholder=\"日期格式：年-月-日\" value=\"\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"endTime\">结束时间:</label>
      <div class=\"col-sm-3 controls\">
        <input id=\"workEndTime\" class=\"form-control time\" type=\"text\" name=\"work[1][endTime]\" placeholder=\"日期格式：年-月-日\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"company\">工作单位:</label>
      <div class=\"col-sm-2 controls\">
        <input id=\"workUnit\" class=\"form-control\" type=\"text\" name=\"work[1][company]\" value=\"\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"position\">岗位职务:</label>
      <div class=\"col-sm-3 controls\">
        <input id=\"workPosition\" class=\"form-control\" type=\"text\" name=\"work[1][position]\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"leaveReason\">离职原因:</label>
      <div class=\"col-sm-2 controls\">
        <input id=\"leaveReason\" class=\"form-control\" type=\"text\" name=\"work[1][leaveReason]\" value=\"\">
      </div>
    </div>
  </div>
</div>";
        
        $__internal_cbe93d74fa1de23fd59ec8182dc1471c754d4cd86fd0f567b0c50c84d7eeb66f->leave($__internal_cbe93d74fa1de23fd59ec8182dc1471c754d4cd86fd0f567b0c50c84d7eeb66f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:add-user/user-work-info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="work-modal hidden">*/
/*   <div>*/
/*     <button type="button" id="delete-work-info" class="btn btn-sm btn-danger delete-work-info hidden">删除</button>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="startTime">开始时间:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input id="workStartTime" class="form-control time" type="text" name="work[1][startTime]" placeholder="日期格式：年-月-日" value="">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="endTime">结束时间:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input id="workEndTime" class="form-control time" type="text" name="work[1][endTime]" placeholder="日期格式：年-月-日" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="company">工作单位:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input id="workUnit" class="form-control" type="text" name="work[1][company]" value="">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="position">岗位职务:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input id="workPosition" class="form-control" type="text" name="work[1][position]" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="leaveReason">离职原因:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input id="leaveReason" class="form-control" type="text" name="work[1][leaveReason]" value="">*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
