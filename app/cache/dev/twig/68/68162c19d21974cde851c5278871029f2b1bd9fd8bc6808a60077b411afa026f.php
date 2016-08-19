<?php

/* AppBundle:User:edit/user-learn-info.html.twig */
class __TwigTemplate_e156e6df11a6353ed0ae4f606df0568caae37ea3fa0f29c27e5b43840d585362 extends Twig_Template
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
        $__internal_7b51b5e121d7fbf81ce7ce80b47644fef712e1d8c37d67e73181fb54743d0c95 = $this->env->getExtension("native_profiler");
        $__internal_7b51b5e121d7fbf81ce7ce80b47644fef712e1d8c37d67e73181fb54743d0c95->enter($__internal_7b51b5e121d7fbf81ce7ce80b47644fef712e1d8c37d67e73181fb54743d0c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:edit/user-learn-info.html.twig"));

        // line 1
        echo "<div>
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eduExperiences"]) ? $context["eduExperiences"] : $this->getContext($context, "eduExperiences")));
        foreach ($context['_seq'] as $context["_key"] => $context["edu"]) {
            // line 3
            echo "  <div>
    <div class=\"form-group\">
      <div>
        <input type=\"hidden\" name=\"education[";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "id", array()), "html", null, true);
            echo "][id]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "id", array()), "html", null, true);
            echo "\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"startTime\">开始时间:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"form-control time\" type=\"text\" name=\"education[";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "id", array()), "html", null, true);
            echo "][startTime]\" placeholder=\"日期格式：年-月-日\" value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["edu"], "startTime", array()), "Y/m/d/"), "html", null, true);
            echo "\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"endTime\">结束时间:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"form-control time\" type=\"text\" name=\"education[";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "id", array()), "html", null, true);
            echo "][endTime]\" placeholder=\"日期格式：年-月-日\" value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["edu"], "endTime", array()), "Y/m/d"), "html", null, true);
            echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"schoolName\">院校名称:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"form-control\" type=\"text\" name=\"education[";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "id", array()), "html", null, true);
            echo "][schoolName]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "schoolName", array()), "html", null, true);
            echo "\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"profession\">所学专业:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"form-control\" type=\"text\" name=\"education[";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "id", array()), "html", null, true);
            echo "][profession]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "profession", array()), "html", null, true);
            echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"position\">担任职务:</label>
      <div class=\"col-sm-2 controls\">
        <input id=\"learnPosition\" class=\"form-control\" type=\"text\" name=\"education[";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "id", array()), "html", null, true);
            echo "][position]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "position", array()), "html", null, true);
            echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-2 col-sm-offset-8\">
        <button type=\"button\" id=\"delete-learn-info\" class=\"btn btn-sm btn-danger delete-learn-info\">删除</button>
        <button type=\"button\" class=\"btn btn-sm btn-success add-learn-info\">新增</button>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['edu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
";
        
        $__internal_7b51b5e121d7fbf81ce7ce80b47644fef712e1d8c37d67e73181fb54743d0c95->leave($__internal_7b51b5e121d7fbf81ce7ce80b47644fef712e1d8c37d67e73181fb54743d0c95_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:edit/user-learn-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 41,  83 => 30,  72 => 24,  63 => 20,  52 => 14,  43 => 10,  34 => 6,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div>*/
/*   {% for edu in eduExperiences %}*/
/*   <div>*/
/*     <div class="form-group">*/
/*       <div>*/
/*         <input type="hidden" name="education[{{edu.id}}][id]" value="{{ edu.id }}">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="startTime">开始时间:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="form-control time" type="text" name="education[{{edu.id}}][startTime]" placeholder="日期格式：年-月-日" value="{{ edu.startTime|date('Y/m/d/')}}">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="endTime">结束时间:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="form-control time" type="text" name="education[{{edu.id}}][endTime]" placeholder="日期格式：年-月-日" value="{{ edu.endTime|date('Y/m/d')}}">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="schoolName">院校名称:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="form-control" type="text" name="education[{{edu.id}}][schoolName]" value="{{ edu.schoolName }}">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="profession">所学专业:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="form-control" type="text" name="education[{{edu.id}}][profession]" value="{{ edu.profession }}">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="position">担任职务:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input id="learnPosition" class="form-control" type="text" name="education[{{edu.id}}][position]" value="{{ edu.position }}">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-2 col-sm-offset-8">*/
/*         <button type="button" id="delete-learn-info" class="btn btn-sm btn-danger delete-learn-info">删除</button>*/
/*         <button type="button" class="btn btn-sm btn-success add-learn-info">新增</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
