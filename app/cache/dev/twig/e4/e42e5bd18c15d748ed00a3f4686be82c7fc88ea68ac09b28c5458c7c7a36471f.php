<?php

/* AppBundle:User:add-user/user-basic-info.html.twig */
class __TwigTemplate_638c46a20ce4676fd7be171c0ddafee3cf754ce3cbbd6e80ab41fb13749beee1 extends Twig_Template
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
        $__internal_5b00dda7b52a54ca323f62104064244056b1ef1ade640a7c3d3b97062db1e943 = $this->env->getExtension("native_profiler");
        $__internal_5b00dda7b52a54ca323f62104064244056b1ef1ade640a7c3d3b97062db1e943->enter($__internal_5b00dda7b52a54ca323f62104064244056b1ef1ade640a7c3d3b97062db1e943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:add-user/user-basic-info.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"number\">员工工号:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"number\" class=\"form-control\" type=\"text\" name=\"basic[number]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"trueName\">姓  名:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"trueName\" class=\"form-control\" type=\"text\" name=\"basic[trueName]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"department\">所属部门:</label>
  <div class=\"col-sm-2 controls\" id=\"department\">
    <select class=\"form-control\"  name=\"basic[department]\">
      <option value=\"1\">技术部</option>
    </select>
  </div>
  <label class=\"col-sm-2 control-label\" for=\"rank\">职 级:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"rank\" class=\"form-control\" type=\"text\" name=\"basic[rank]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"phone\">手 机:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"phone\" class=\"form-control\" type=\"text\" name=\"basic[phone]\" value=\"\">
  </div>

  <label class=\"col-sm-2 control-label\" for=\"email\">邮 箱:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"email\" class=\"form-control\" type=\"text\" name=\"basic[email]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\">性 别:</label>
    <div class=\"radio col-sm-2\">
      <label>
        <input type=\"radio\" name=\"basic[gender]\" id=\"gender\" value=\"male\" checked>男
      </label>
      <label>
        <input type=\"radio\" name=\"basic[gender]\" id=\"gender\" value=\"female\">女
      </label>
    </div>

  <label class=\"col-sm-2 control-label\">出生日期:</label>
  <div class=\"col-sm-3 controls\">
      <input type=\"text\" id=\"bornTime\" class=\"form-control time\" name=\"basic[bornTime]\" placeholder=\"日期格式：年-月-日\" value=\"\"/>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"nation\">民 族:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"nation\" class=\"form-control\" type=\"text\" name=\"basic[nation]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"native\">籍 贯:</label>
  <div class=\"col-sm-4 controls\">
    <input id=\"native\" class=\"form-control\" type=\"text\" name=\"basic[native]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"height\">身 高:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"height\" class=\"form-control\" type=\"text\" name=\"basic[height]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"weight\">体 重:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"weight\" class=\"form-control\" type=\"text\" name=\"basic[weight]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"blood\">血 型:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"blood\" class=\"form-control\" type=\"text\" name=\"basic[blood]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"education\">文化程度:</label>
  <div class=\"col-sm-3 controls\" id=\"education\">
    <select class=\"form-control\"  name=\"basic[education]\">
      <option>初中</option>
      <option>高中</option>
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
    <input id=\"prefession\" class=\"form-control\" type=\"text\" name=\"basic[prefession]\" value=\"\"}>
  </div>
  <label class=\"col-sm-2 control-label\" for=\"marriage\">婚姻:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"marriage\" class=\"form-control\" type=\"text\" name=\"basic[marriage]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"address\">家庭住址:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"address\" class=\"form-control\" type=\"text\" name=\"basic[address]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"postcode\">邮编:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"postcode\" class=\"form-control\" type=\"text\" name=\"basic[postcode]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"IDcard\">身份证:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"IDcard\" class=\"form-control\" type=\"text\" name=\"basic[IDcard]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"professionTitle\">职 称:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"professionTitle\" class=\"form-control\" type=\"text\" name=\"basic[professionTitle]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"householdType\">户口性质:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"householdType\" class=\"form-control\" type=\"text\" name=\"basic[householdType]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"residence\">户口所在地:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"residence\" class=\"form-control\" type=\"text\" name=\"basic[residence]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"recordPlace\">档案存放地:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"recordPlace\" class=\"form-control\" type=\"text\" name=\"basic[recordPlace]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"formerLaborShip\">与原工作的劳动关系:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"formerLaborShip\" class=\"form-control\" type=\"text\" name=\"basic[formerLaborShip]\" value=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\">入职时间:</label>
  <div class=\"col-sm-2 controls\">
      <input type=\"text\" id=\"joinTime\" class=\"form-control time\" name=\"basic[joinTime]\" placeholder=\"日期格式：年-月-日\"/>
  </div>
  <label class=\"col-sm-2 control-label\" for=\"hasSick\">有无疾病史:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"hasSick\" class=\"form-control\" type=\"text\" name=\"basic[hasSick]\" value=\"无\" placeholder=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"serviceTime\">希望服务年限:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"serviceTime\" class=\"form-control\" type=\"text\" name=\"basic[serviceTime]\" value=\"\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"expectedSalary\">期望月薪:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"expectedSalary\" class=\"form-control\" type=\"text\" name=\"basic[expectedSalary]\"value=\"\">
  </div>
</div>

<div class=\"form-group\"> 
  <label class=\"col-sm-2 control-label\" for=\"politics\">政治面貌:</label>
  <div class=\"col-sm-2 controls\">
    <select class=\"form-control\" name=\"basic[politics]\">
      <option>群众</option>
      <option>共青团员</option>
      <option>预备党员</option>
      <option>共产党员</option>
      <option>其他</option>
    </select>    
  </div>
</div>";
        
        $__internal_5b00dda7b52a54ca323f62104064244056b1ef1ade640a7c3d3b97062db1e943->leave($__internal_5b00dda7b52a54ca323f62104064244056b1ef1ade640a7c3d3b97062db1e943_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:add-user/user-basic-info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="number">员工工号:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="number" class="form-control" type="text" name="basic[number]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="trueName">姓  名:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="trueName" class="form-control" type="text" name="basic[trueName]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="department">所属部门:</label>*/
/*   <div class="col-sm-2 controls" id="department">*/
/*     <select class="form-control"  name="basic[department]">*/
/*       <option value="1">技术部</option>*/
/*     </select>*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="rank">职 级:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="rank" class="form-control" type="text" name="basic[rank]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="phone">手 机:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="phone" class="form-control" type="text" name="basic[phone]" value="">*/
/*   </div>*/
/* */
/*   <label class="col-sm-2 control-label" for="email">邮 箱:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="email" class="form-control" type="text" name="basic[email]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label">性 别:</label>*/
/*     <div class="radio col-sm-2">*/
/*       <label>*/
/*         <input type="radio" name="basic[gender]" id="gender" value="male" checked>男*/
/*       </label>*/
/*       <label>*/
/*         <input type="radio" name="basic[gender]" id="gender" value="female">女*/
/*       </label>*/
/*     </div>*/
/* */
/*   <label class="col-sm-2 control-label">出生日期:</label>*/
/*   <div class="col-sm-3 controls">*/
/*       <input type="text" id="bornTime" class="form-control time" name="basic[bornTime]" placeholder="日期格式：年-月-日" value=""/>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="nation">民 族:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="nation" class="form-control" type="text" name="basic[nation]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="native">籍 贯:</label>*/
/*   <div class="col-sm-4 controls">*/
/*     <input id="native" class="form-control" type="text" name="basic[native]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="height">身 高:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="height" class="form-control" type="text" name="basic[height]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="weight">体 重:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="weight" class="form-control" type="text" name="basic[weight]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="blood">血 型:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="blood" class="form-control" type="text" name="basic[blood]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="education">文化程度:</label>*/
/*   <div class="col-sm-3 controls" id="education">*/
/*     <select class="form-control"  name="basic[education]">*/
/*       <option>初中</option>*/
/*       <option>高中</option>*/
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
/*     <input id="prefession" class="form-control" type="text" name="basic[prefession]" value=""}>*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="marriage">婚姻:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="marriage" class="form-control" type="text" name="basic[marriage]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="address">家庭住址:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="address" class="form-control" type="text" name="basic[address]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="postcode">邮编:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="postcode" class="form-control" type="text" name="basic[postcode]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="IDcard">身份证:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="IDcard" class="form-control" type="text" name="basic[IDcard]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="professionTitle">职 称:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="professionTitle" class="form-control" type="text" name="basic[professionTitle]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="householdType">户口性质:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="householdType" class="form-control" type="text" name="basic[householdType]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="residence">户口所在地:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="residence" class="form-control" type="text" name="basic[residence]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="recordPlace">档案存放地:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="recordPlace" class="form-control" type="text" name="basic[recordPlace]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="formerLaborShip">与原工作的劳动关系:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="formerLaborShip" class="form-control" type="text" name="basic[formerLaborShip]" value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label">入职时间:</label>*/
/*   <div class="col-sm-2 controls">*/
/*       <input type="text" id="joinTime" class="form-control time" name="basic[joinTime]" placeholder="日期格式：年-月-日"/>*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="hasSick">有无疾病史:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="hasSick" class="form-control" type="text" name="basic[hasSick]" value="无" placeholder="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="serviceTime">希望服务年限:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="serviceTime" class="form-control" type="text" name="basic[serviceTime]" value="">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="expectedSalary">期望月薪:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="expectedSalary" class="form-control" type="text" name="basic[expectedSalary]"value="">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group"> */
/*   <label class="col-sm-2 control-label" for="politics">政治面貌:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <select class="form-control" name="basic[politics]">*/
/*       <option>群众</option>*/
/*       <option>共青团员</option>*/
/*       <option>预备党员</option>*/
/*       <option>共产党员</option>*/
/*       <option>其他</option>*/
/*     </select>    */
/*   </div>*/
/* </div>*/
