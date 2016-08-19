<?php

/* AppBundle:User:add/user-work-info.html.twig */
class __TwigTemplate_f855828ba56dc37c934e863900deff566559aea7bbd6b0960b24e25539108783 extends Twig_Template
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
        $__internal_54f93a2bcb5766a8a19946bdf4529bf7d9db7c45cb1af23154de83f8476ce305 = $this->env->getExtension("native_profiler");
        $__internal_54f93a2bcb5766a8a19946bdf4529bf7d9db7c45cb1af23154de83f8476ce305->enter($__internal_54f93a2bcb5766a8a19946bdf4529bf7d9db7c45cb1af23154de83f8476ce305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:add/user-work-info.html.twig"));

        // line 1
        echo "<div class=\"work-modal hidden\">
  <div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"startTime\">开始时间:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"workStartTime form-control time\" type=\"text\" name=\"work[1][startTime]\" placeholder=\"日期格式：年-月-日\" value=\"\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"endTime\">结束时间:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"workEndTime form-control time\" type=\"text\" name=\"work[1][endTime]\" placeholder=\"日期格式：年-月-日\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"company\">工作单位:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"workUnit form-control\" type=\"text\" name=\"work[1][company]\" value=\"\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"position\">岗位职务:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"workPosition form-control\" type=\"text\" name=\"work[1][position]\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"leaveReason\">离职原因:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"leaveReason form-control\" type=\"text\" name=\"work[1][leaveReason]\" value=\"\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-2 col-sm-offset-8\">
        <button type=\"button\" id=\"delete-work-info\" class=\"btn btn-sm btn-danger delete-work-info hidden\">删除</button>
        <button type=\"button\" class=\"btn btn-sm btn-success add-work-info\">新增</button>
      </div>
    </div>
  </div>
</div>";
        
        $__internal_54f93a2bcb5766a8a19946bdf4529bf7d9db7c45cb1af23154de83f8476ce305->leave($__internal_54f93a2bcb5766a8a19946bdf4529bf7d9db7c45cb1af23154de83f8476ce305_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:add/user-work-info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="work-modal hidden">*/
/*   <div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="startTime">开始时间:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="workStartTime form-control time" type="text" name="work[1][startTime]" placeholder="日期格式：年-月-日" value="">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="endTime">结束时间:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="workEndTime form-control time" type="text" name="work[1][endTime]" placeholder="日期格式：年-月-日" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="company">工作单位:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="workUnit form-control" type="text" name="work[1][company]" value="">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="position">岗位职务:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="workPosition form-control" type="text" name="work[1][position]" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="leaveReason">离职原因:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="leaveReason form-control" type="text" name="work[1][leaveReason]" value="">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-2 col-sm-offset-8">*/
/*         <button type="button" id="delete-work-info" class="btn btn-sm btn-danger delete-work-info hidden">删除</button>*/
/*         <button type="button" class="btn btn-sm btn-success add-work-info">新增</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
