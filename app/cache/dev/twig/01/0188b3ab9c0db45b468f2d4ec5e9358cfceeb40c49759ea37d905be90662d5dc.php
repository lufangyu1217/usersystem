<?php

/* AppBundle:User:edit/user-work-info.html.twig */
class __TwigTemplate_c28dfa38f4fa854937927d23802cd57756c6152c1fe6d29bd37bf325cde613cd extends Twig_Template
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
        $__internal_2564901d5368120f46bb6315d916e5ec1ba0664c0ca23a626b80f5078fa0a748 = $this->env->getExtension("native_profiler");
        $__internal_2564901d5368120f46bb6315d916e5ec1ba0664c0ca23a626b80f5078fa0a748->enter($__internal_2564901d5368120f46bb6315d916e5ec1ba0664c0ca23a626b80f5078fa0a748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:edit/user-work-info.html.twig"));

        // line 1
        echo "<div>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workInfos"]) ? $context["workInfos"] : $this->getContext($context, "workInfos")));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 3
            echo "  <div>
    <div class=\"form-group\">
      <div>
        <input type=\"hidden\" name=\"work[";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "id", array()), "html", null, true);
            echo "][id]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "id", array()), "html", null, true);
            echo "\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"startTime\">开始时间:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"form-control time\" type=\"text\" name=\"work[";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "id", array()), "html", null, true);
            echo "][startTime]\" placeholder=\"日期格式：年-月-日\" value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["work"], "startTime", array()), "Y/m/d"), "html", null, true);
            echo "\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"endTime\">结束时间:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"form-control time\" type=\"text\" name=\"work[";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "id", array()), "html", null, true);
            echo "][endTime]\" placeholder=\"日期格式：年-月-日\" value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["work"], "endTime", array()), "Y/m/d"), "html", null, true);
            echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"company\">工作单位:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"form-control\" type=\"text\" name=\"work[";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "id", array()), "html", null, true);
            echo "][company]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "company", array()), "html", null, true);
            echo "\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"position\">岗位职务:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"form-control\" type=\"text\" name=\"work[";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "id", array()), "html", null, true);
            echo "][position]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "position", array()), "html", null, true);
            echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"leaveReason\">离职原因:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"form-control\" type=\"text\" name=\"work[";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "id", array()), "html", null, true);
            echo "][leaveReason]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "leaveReason", array()), "html", null, true);
            echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-2 col-sm-offset-8\">
        <button type=\"button\" id=\"delete-work-info\" class=\"btn btn-sm btn-danger delete-work-info\">删除</button>
        <button type=\"button\" class=\"btn btn-sm btn-success add-work-info\">新增</button>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
";
        
        $__internal_2564901d5368120f46bb6315d916e5ec1ba0664c0ca23a626b80f5078fa0a748->leave($__internal_2564901d5368120f46bb6315d916e5ec1ba0664c0ca23a626b80f5078fa0a748_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:edit/user-work-info.html.twig";
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
/* {% for work in workInfos %}*/
/*   <div>*/
/*     <div class="form-group">*/
/*       <div>*/
/*         <input type="hidden" name="work[{{ work.id }}][id]" value="{{ work.id }}">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="startTime">开始时间:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="form-control time" type="text" name="work[{{ work.id }}][startTime]" placeholder="日期格式：年-月-日" value="{{ work.startTime|date('Y/m/d') }}">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="endTime">结束时间:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="form-control time" type="text" name="work[{{ work.id }}][endTime]" placeholder="日期格式：年-月-日" value="{{ work.endTime|date('Y/m/d') }}">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="company">工作单位:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="form-control" type="text" name="work[{{ work.id }}][company]" value="{{ work.company }}">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="position">岗位职务:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="form-control" type="text" name="work[{{ work.id }}][position]" value="{{ work.position }}">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="leaveReason">离职原因:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="form-control" type="text" name="work[{{ work.id }}][leaveReason]" value="{{ work.leaveReason }}">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-2 col-sm-offset-8">*/
/*         <button type="button" id="delete-work-info" class="btn btn-sm btn-danger delete-work-info">删除</button>*/
/*         <button type="button" class="btn btn-sm btn-success add-work-info">新增</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
