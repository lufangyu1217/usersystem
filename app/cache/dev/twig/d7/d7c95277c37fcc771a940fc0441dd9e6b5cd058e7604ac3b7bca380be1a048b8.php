<?php

/* AppBundle:user:user-basic-info.html.twig */
class __TwigTemplate_0aba22445485d4db77942e40b227f3c8a8874b32e293d42321e43e5f057780cf extends Twig_Template
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
        $__internal_6148d22c9bb2499c16583e7505e3430fed4dabc0ddf4933ad2484cf39e2fbffe = $this->env->getExtension("native_profiler");
        $__internal_6148d22c9bb2499c16583e7505e3430fed4dabc0ddf4933ad2484cf39e2fbffe->enter($__internal_6148d22c9bb2499c16583e7505e3430fed4dabc0ddf4933ad2484cf39e2fbffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:user-basic-info.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"number\">员工工号:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"number\" class=\"form-control\" type=\"text\" name=\"number\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"name\">姓  名:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"name\" class=\"form-control\" type=\"text\" name=\"name\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"department\">所属部门:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"department\" class=\"form-control\" type=\"text\" name=\"department\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"professionalLevel\">职 级:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"professionalLevel\" class=\"form-control\" type=\"text\" name=\"professionalLevel\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"mobile\">手 机:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"mobile\" class=\"form-control\" type=\"text\" name=\"mobile\" value=\"\">
  </div>

  <label class=\"col-sm-2 control-label\" for=\"email\">邮 箱:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"email\" class=\"form-control\" type=\"text\" name=\"email\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\">性 别:</label>

    <div class=\"radio col-sm-2\">
      <label>
        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>男
      </label>
      <label>
        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>女
      </label>
    </div>

  <label class=\"col-sm-2 control-label\" for=\"bornTime\">出生日期:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"bornTime\" class=\"form-control\" type=\"date\" name=\"bornTime\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"nation\">民 族:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"nation\" class=\"form-control\" type=\"text\" name=\"nation\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"native\">籍 贯:</label>
  <div class=\"col-sm-4 controls\">
    <input id=\"native\" class=\"form-control\" type=\"text\" name=\"native\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"height\">身 高:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"height\" class=\"form-control\" type=\"text\" name=\"height\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"weight\">体 重:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"weight\" class=\"form-control\" type=\"text\" name=\"weight\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"blood\">血 型:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"blood\" class=\"form-control\" type=\"text\" name=\"blood\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"studyLevel\">文化程度:</label>
  <div class=\"col-sm-3 controls\" id=\"studyLevel\">
    <select class=\"form-control\">
      <option>大专</option>
      <option>本科</option>
      <option>研究生</option>
      <option>博士</option>
    </select>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"prefession\">专业:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"prefession\" class=\"form-control\" type=\"text\" name=\"prefession\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"marriage\">婚姻:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"marriage\" class=\"form-control\" type=\"text\" name=\"marriage\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"address\">家庭住址:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"address\" class=\"form-control\" type=\"text\" name=\"address\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"postcode\">邮编:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"postcode\" class=\"form-control\" type=\"text\" name=\"postcode\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"IDcard\">身份证:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"IDcard\" class=\"form-control\" type=\"text\" name=\"IDcard\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"workTitle\">职称:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"workTitle\" class=\"form-control\" type=\"text\" name=\"workTitle\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"householdType\">户口性质:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"householdType\" class=\"form-control\" type=\"text\" name=\"householdType\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"recordPlace\">档案存放地:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"recordPlace\" class=\"form-control\" type=\"text\" name=\"recordPlace\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"originWorkIntro\">与原工作的劳动关系:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"originWorkIntro\" class=\"form-control\" type=\"text\" name=\"originWorkIntro\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"reportTime\">报道日期:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"reportTime\" class=\"form-control\" type=\"text\" name=\"reportTime\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"disease\">有无疾病史:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"disease\" class=\"form-control\" type=\"text\" name=\"disease\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"serviceLife\">希望服务年限:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"serviceLife\" class=\"form-control\" type=\"text\" name=\"serviceLife\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"expectedSalary\">期望月薪:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"expectedSalary\" class=\"form-control\" type=\"text\" name=\"expectedSalary\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"politics\">政治面貌:</label>
  <div class=\"col-sm-3 controls\">
    <select class=\"form-control\" name=\"politics\">
      <option>大专</option>
      <option>本科</option>
      <option>研究生</option>
      <option>博士</option>
    </select>    
  </div>
</div>";
        
        $__internal_6148d22c9bb2499c16583e7505e3430fed4dabc0ddf4933ad2484cf39e2fbffe->leave($__internal_6148d22c9bb2499c16583e7505e3430fed4dabc0ddf4933ad2484cf39e2fbffe_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user:user-basic-info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="number">员工工号:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="number" class="form-control" type="text" name="number" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="name">姓  名:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="name" class="form-control" type="text" name="name" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="department">所属部门:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="department" class="form-control" type="text" name="department" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="professionalLevel">职 级:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="professionalLevel" class="form-control" type="text" name="professionalLevel" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="mobile">手 机:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="mobile" class="form-control" type="text" name="mobile" value="">*/
/*   </div>*/
/* */
/*   <label class="col-sm-2 control-label" for="email">邮 箱:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="email" class="form-control" type="text" name="email" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label">性 别:</label>*/
/* */
/*     <div class="radio col-sm-2">*/
/*       <label>*/
/*         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>男*/
/*       </label>*/
/*       <label>*/
/*         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>女*/
/*       </label>*/
/*     </div>*/
/* */
/*   <label class="col-sm-2 control-label" for="bornTime">出生日期:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="bornTime" class="form-control" type="date" name="bornTime" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="nation">民 族:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="nation" class="form-control" type="text" name="nation" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="native">籍 贯:</label>*/
/*   <div class="col-sm-4 controls">*/
/*     <input id="native" class="form-control" type="text" name="native" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="height">身 高:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="height" class="form-control" type="text" name="height" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="weight">体 重:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="weight" class="form-control" type="text" name="weight" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="blood">血 型:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="blood" class="form-control" type="text" name="blood" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="studyLevel">文化程度:</label>*/
/*   <div class="col-sm-3 controls" id="studyLevel">*/
/*     <select class="form-control">*/
/*       <option>大专</option>*/
/*       <option>本科</option>*/
/*       <option>研究生</option>*/
/*       <option>博士</option>*/
/*     </select>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="prefession">专业:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="prefession" class="form-control" type="text" name="prefession" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="marriage">婚姻:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="marriage" class="form-control" type="text" name="marriage" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="address">家庭住址:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="address" class="form-control" type="text" name="address" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="postcode">邮编:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="postcode" class="form-control" type="text" name="postcode" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="IDcard">身份证:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="IDcard" class="form-control" type="text" name="IDcard" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="workTitle">职称:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="workTitle" class="form-control" type="text" name="workTitle" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="householdType">户口性质:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="householdType" class="form-control" type="text" name="householdType" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="recordPlace">档案存放地:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="recordPlace" class="form-control" type="text" name="recordPlace" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="originWorkIntro">与原工作的劳动关系:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="originWorkIntro" class="form-control" type="text" name="originWorkIntro" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="reportTime">报道日期:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="reportTime" class="form-control" type="text" name="reportTime" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="disease">有无疾病史:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="disease" class="form-control" type="text" name="disease" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="serviceLife">希望服务年限:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="serviceLife" class="form-control" type="text" name="serviceLife" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="expectedSalary">期望月薪:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="expectedSalary" class="form-control" type="text" name="expectedSalary" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="politics">政治面貌:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <select class="form-control" name="politics">*/
/*       <option>大专</option>*/
/*       <option>本科</option>*/
/*       <option>研究生</option>*/
/*       <option>博士</option>*/
/*     </select>    */
/*   </div>*/
/* </div>*/
