<?php

/* AppBundle:User:edit/user-basic-info.html.twig */
class __TwigTemplate_7a07b728c6ada5d8f892bfc8c96bf88b5e68a9750a363c972a42c9b79d553541 extends Twig_Template
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
        $__internal_fe1878ab9f0e956a180ba992403a4db79fdc1cf8dd9da7c13fcdd4afa3eb75e6 = $this->env->getExtension("native_profiler");
        $__internal_fe1878ab9f0e956a180ba992403a4db79fdc1cf8dd9da7c13fcdd4afa3eb75e6->enter($__internal_fe1878ab9f0e956a180ba992403a4db79fdc1cf8dd9da7c13fcdd4afa3eb75e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:edit/user-basic-info.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
  <div>
    <input type=\"hidden\" name=\"basic[id]\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"number\">员工工号:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"number\" class=\"form-control\" type=\"text\" name=\"basic[number]\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "number", array()), "html", null, true);
        echo "\" disabled=\"disabled\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"trueName\">姓  名:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"trueName\" class=\"form-control\" type=\"text\" name=\"basic[trueName]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "trueName", array()), "html", null, true);
        echo "\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"department\">所属部门:</label>
  <div class=\"col-sm-2 controls\" id=\"department\">
    <select class=\"form-control\"  name=\"basic[departmentId]\" ";
        // line 18
        if (( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isLeader", array(), "method"))) {
            echo "disabled=\"disabled\"";
        }
        // line 19
        echo "    >
      ";
        // line 20
        echo $this->env->getExtension('twig.html_extension')->selectOptions((isset($context["departmentsChoices"]) ? $context["departmentsChoices"] : $this->getContext($context, "departmentsChoices")), $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "departmentId", array()));
        echo "
    </select>
  </div>
  <label class=\"col-sm-2 control-label\" for=\"rank\">职 级:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"rank\" class=\"form-control\" type=\"text\" name=\"basic[rank]\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "rank", array()), "html", null, true);
        echo "\" ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            echo "disabled=\"disabled\"";
        }
        echo ">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"phone\">手 机:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"phone\" class=\"form-control\" type=\"text\" name=\"basic[phone]\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "phone", array()), "html", null, true);
        echo "\">
  </div>

  <label class=\"col-sm-2 control-label\" for=\"email\">邮 箱:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"email\" class=\"form-control\" type=\"text\" name=\"basic[email]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "email", array()), "html", null, true);
        echo "\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\">性 别:</label>
    <div class=\"radio col-sm-2\">
      <label>
        <input type=\"radio\" name=\"basic[gender]\" id=\"gender\" value=\"male\" ";
        // line 45
        if (($this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "gender", array()) == "male")) {
            echo "checked";
        }
        echo ">男
      </label>
      <label>
        <input type=\"radio\" name=\"basic[gender]\" id=\"gender\" value=\"female\" ";
        // line 48
        if (($this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "gender", array()) == "female")) {
            echo "checked";
        }
        echo ">女
      </label>
    </div>

  <label class=\"col-sm-2 control-label\">出生日期:</label>
  <div class=\"col-sm-3 controls\">
      <input type=\"text\" id=\"bornTime\" class=\"form-control time\" name=\"basic[bornTime]\" placeholder=\"日期格式：年-月-日\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "bornTime", array()), "Y/m/d"), "html", null, true);
        echo "\"/>
  </div>
</div>
<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"nation\">民 族:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"nation\" class=\"form-control\" type=\"text\" name=\"basic[nation]\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "nation", array()), "html", null, true);
        echo "\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"native\">籍 贯:</label>
  <div class=\"col-sm-3 controls\">
    <textarea id=\"native\" style=\"resize:vertical\" class=\"form-control\" type=\"text\" name=\"basic[native]\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "native", array()), "html", null, true);
        echo "</textarea>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"height\">身 高:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"height\" class=\"form-control\" type=\"text\" name=\"basic[height]\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "height", array()), "html", null, true);
        echo "\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"weight\">体 重:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"weight\" class=\"form-control\" type=\"text\" name=\"basic[weight]\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "weight", array()), "html", null, true);
        echo "\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"blood\">血 型:</label>
  <div class=\"col-sm-2 controls\">
    <select class=\"form-control\"  name=\"basic[blood]\" >
      ";
        // line 83
        echo $this->env->getExtension('twig.html_extension')->selectOptions($this->env->getExtension('twig.app_extension')->getDict("blood"), $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "blood", array()));
        echo "
    </select>
  </div>
  <label class=\"col-sm-2 control-label\" for=\"education\">文化程度:</label>
  <div class=\"col-sm-3 controls\" id=\"education\">
    <select class=\"form-control\"  name=\"basic[education]\">
      ";
        // line 89
        echo $this->env->getExtension('twig.html_extension')->selectOptions($this->env->getExtension('twig.app_extension')->getDict("education"), $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "education", array()));
        echo "
    </select>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"prefession\">专业:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"prefession\" class=\"form-control\" type=\"text\" name=\"basic[prefession]\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "prefession", array()), "html", null, true);
        echo "\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"marriage\">婚姻:</label>
  <div class=\"col-sm-3 controls\">
    <select class=\"form-control\"  name=\"basic[marriage]\">
      ";
        // line 102
        echo $this->env->getExtension('twig.html_extension')->selectOptions($this->env->getExtension('twig.app_extension')->getDict("marriage"), $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "marriage", array()));
        echo "
    </select>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"address\">家庭住址:</label>
  <div class=\"col-sm-2 controls\">
    <textarea id=\"address\" style=\"resize:vertical\" class=\"form-control\" type=\"text\" name=\"basic[address]\">";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "address", array()), "html", null, true);
        echo "</textarea>
  </div>
  <label class=\"col-sm-2 control-label\" for=\"postcode\">邮编:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"postcode\" class=\"form-control\" type=\"text\" name=\"basic[postcode]\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "postcode", array()), "html", null, true);
        echo "\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"professionTitle\">职 称:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"professionTitle\" class=\"form-control\" type=\"text\" name=\"basic[professionTitle]\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "professionTitle", array()), "html", null, true);
        echo "\" ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            echo "disabled=\"disabled\"";
        }
        echo ">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"Idcard\">身份证:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"Idcard\" class=\"form-control\" type=\"text\" name=\"basic[Idcard]\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "Idcard", array()), "html", null, true);
        echo "\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"householdType\">户口性质:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"householdType\" class=\"form-control\" type=\"text\" name=\"basic[householdType]\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "householdType", array()), "html", null, true);
        echo "\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"residence\">户口所在地:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"residence\" class=\"form-control\" type=\"text\" name=\"basic[residence]\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "residence", array()), "html", null, true);
        echo "\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"recordPlace\">档案存放地:</label>
  <div class=\"col-sm-2 controls\">
    <input id=\"recordPlace\" class=\"form-control\" type=\"text\" name=\"basic[recordPlace]\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "recordPlace", array()), "html", null, true);
        echo "\">
  </div>
  <label class=\"col-sm-2 control-label\" for=\"formerLaborShip\">与原工作的劳动关系:</label>
  <div class=\"col-sm-3 controls\">
    <input id=\"formerLaborShip\" class=\"form-control\" type=\"text\" name=\"basic[formerLaborShip]\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "formerLaborShip", array()), "html", null, true);
        echo "\">
  </div>
</div>

<div class=\"form-group\"> 
  <label class=\"col-sm-2 control-label\">入职时间:</label>
  <div class=\"col-sm-2 controls\">
      <input type=\"text\" id=\"joinTime\" class=\"form-control time\" name=\"basic[joinTime]\" placeholder=\"日期格式：年-月-日\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "joinTime", array()), "Y/m/d"), "html", null, true);
        echo "\" ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            echo "disabled=\"disabled\"";
        }
        echo "/>
  </div>
  <label class=\"col-sm-2 control-label\" for=\"politics\">政治面貌:</label>
  <div class=\"col-sm-3 controls\">
    <select class=\"form-control\" name=\"basic[politics]\">
      ";
        // line 159
        echo $this->env->getExtension('twig.html_extension')->selectOptions($this->env->getExtension('twig.app_extension')->getDict("politics"), $this->getAttribute((isset($context["basic"]) ? $context["basic"] : $this->getContext($context, "basic")), "politics", array()));
        echo "
    </select>    
  </div>
</div>";
        
        $__internal_fe1878ab9f0e956a180ba992403a4db79fdc1cf8dd9da7c13fcdd4afa3eb75e6->leave($__internal_fe1878ab9f0e956a180ba992403a4db79fdc1cf8dd9da7c13fcdd4afa3eb75e6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:edit/user-basic-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 159,  272 => 154,  262 => 147,  255 => 143,  245 => 136,  238 => 132,  228 => 125,  217 => 121,  207 => 114,  200 => 110,  189 => 102,  181 => 97,  170 => 89,  161 => 83,  150 => 75,  143 => 71,  133 => 64,  126 => 60,  117 => 54,  106 => 48,  98 => 45,  87 => 37,  79 => 32,  65 => 25,  57 => 20,  54 => 19,  50 => 18,  40 => 11,  33 => 7,  26 => 3,  22 => 1,);
    }
}
/* <div class="form-group">*/
/*   <div>*/
/*     <input type="hidden" name="basic[id]" value="{{ user.id }}">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="number">员工工号:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="number" class="form-control" type="text" name="basic[number]" value="{{ user.number }}" disabled="disabled">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="trueName">姓  名:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="trueName" class="form-control" type="text" name="basic[trueName]" value="{{ basic.trueName }}">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="department">所属部门:</label>*/
/*   <div class="col-sm-2 controls" id="department">*/
/*     <select class="form-control"  name="basic[departmentId]" {% if not app.user.isAdmin() and app.user.isLeader() %}disabled="disabled"{% endif %}*/
/*     >*/
/*       {{ select_options(departmentsChoices, basic.departmentId) }}*/
/*     </select>*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="rank">职 级:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="rank" class="form-control" type="text" name="basic[rank]" value="{{ basic.rank }}" {% if not app.user.isAdmin() %}disabled="disabled"{% endif %}>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="phone">手 机:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="phone" class="form-control" type="text" name="basic[phone]" value="{{ basic.phone }}">*/
/*   </div>*/
/* */
/*   <label class="col-sm-2 control-label" for="email">邮 箱:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="email" class="form-control" type="text" name="basic[email]" value="{{ basic.email }}">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label">性 别:</label>*/
/*     <div class="radio col-sm-2">*/
/*       <label>*/
/*         <input type="radio" name="basic[gender]" id="gender" value="male" {% if basic.gender == 'male' %}checked{% endif %}>男*/
/*       </label>*/
/*       <label>*/
/*         <input type="radio" name="basic[gender]" id="gender" value="female" {% if basic.gender == 'female' %}checked{% endif %}>女*/
/*       </label>*/
/*     </div>*/
/* */
/*   <label class="col-sm-2 control-label">出生日期:</label>*/
/*   <div class="col-sm-3 controls">*/
/*       <input type="text" id="bornTime" class="form-control time" name="basic[bornTime]" placeholder="日期格式：年-月-日" value="{{ basic.bornTime|date('Y/m/d') }}"/>*/
/*   </div>*/
/* </div>*/
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="nation">民 族:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="nation" class="form-control" type="text" name="basic[nation]" value="{{ basic.nation }}">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="native">籍 贯:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <textarea id="native" style="resize:vertical" class="form-control" type="text" name="basic[native]">{{ basic.native }}</textarea>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="height">身 高:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="height" class="form-control" type="text" name="basic[height]" value="{{ basic.height }}">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="weight">体 重:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="weight" class="form-control" type="text" name="basic[weight]" value="{{ basic.weight }}">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="blood">血 型:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <select class="form-control"  name="basic[blood]" >*/
/*       {{ select_options(dict('blood'), basic.blood) }}*/
/*     </select>*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="education">文化程度:</label>*/
/*   <div class="col-sm-3 controls" id="education">*/
/*     <select class="form-control"  name="basic[education]">*/
/*       {{ select_options(dict('education'), basic.education) }}*/
/*     </select>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="prefession">专业:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="prefession" class="form-control" type="text" name="basic[prefession]" value="{{ basic.prefession }}">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="marriage">婚姻:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <select class="form-control"  name="basic[marriage]">*/
/*       {{ select_options(dict('marriage'), basic.marriage) }}*/
/*     </select>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="address">家庭住址:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <textarea id="address" style="resize:vertical" class="form-control" type="text" name="basic[address]">{{ basic.address }}</textarea>*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="postcode">邮编:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="postcode" class="form-control" type="text" name="basic[postcode]" value="{{ basic.postcode }}">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="professionTitle">职 称:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="professionTitle" class="form-control" type="text" name="basic[professionTitle]" value="{{ basic.professionTitle }}" {% if not app.user.isAdmin() %}disabled="disabled"{% endif %}>*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="Idcard">身份证:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="Idcard" class="form-control" type="text" name="basic[Idcard]" value="{{ basic.Idcard }}">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="householdType">户口性质:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="householdType" class="form-control" type="text" name="basic[householdType]" value="{{ basic.householdType }}">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="residence">户口所在地:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="residence" class="form-control" type="text" name="basic[residence]" value="{{ basic.residence }}">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="recordPlace">档案存放地:</label>*/
/*   <div class="col-sm-2 controls">*/
/*     <input id="recordPlace" class="form-control" type="text" name="basic[recordPlace]" value="{{ basic.recordPlace }}">*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="formerLaborShip">与原工作的劳动关系:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <input id="formerLaborShip" class="form-control" type="text" name="basic[formerLaborShip]" value="{{ basic.formerLaborShip }}">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group"> */
/*   <label class="col-sm-2 control-label">入职时间:</label>*/
/*   <div class="col-sm-2 controls">*/
/*       <input type="text" id="joinTime" class="form-control time" name="basic[joinTime]" placeholder="日期格式：年-月-日" value="{{ user.joinTime|date('Y/m/d') }}" {% if not app.user.isAdmin() %}disabled="disabled"{% endif %}/>*/
/*   </div>*/
/*   <label class="col-sm-2 control-label" for="politics">政治面貌:</label>*/
/*   <div class="col-sm-3 controls">*/
/*     <select class="form-control" name="basic[politics]">*/
/*       {{ select_options(dict('politics'), basic.politics) }}*/
/*     </select>    */
/*   </div>*/
/* </div>*/
