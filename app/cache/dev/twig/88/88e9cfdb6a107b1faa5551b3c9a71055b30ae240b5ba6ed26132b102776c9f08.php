<?php

/* AppBundle:User:edit/user-other-info.html.twig */
class __TwigTemplate_ce454e481ee72b16a99af0f1fdfe4f6b6bc5a0c22707e6dab69e182c6220b2d3 extends Twig_Template
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
        $__internal_653f8123d31fd71d48cb830f840ce866e181decec68572665e694260ab2d93ac = $this->env->getExtension("native_profiler");
        $__internal_653f8123d31fd71d48cb830f840ce866e181decec68572665e694260ab2d93ac->enter($__internal_653f8123d31fd71d48cb830f840ce866e181decec68572665e694260ab2d93ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:edit/user-other-info.html.twig"));

        // line 1
        echo "<div>
  <input type=\"hidden\" name=\"other[id]\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : null), "id", array()), "")) : ("")), "html", null, true);
        echo "\">
</div>
<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"reward\">所受培训及所具有证书:</label>
  <div class=\"col-sm-7 controls\">
    <textarea class=\"form-control\" rows=\"3\" name=\"other[reward]\">";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : null), "reward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : null), "reward", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
  </div>
</div>
<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"selfAssessment\">自我评价:</label>
  <div class=\"col-sm-7 controls\">
    <textarea class=\"form-control\" rows=\"3\" name=\"other[selfAssessment]\">";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : null), "selfAssessment", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : null), "selfAssessment", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
  </div>
</div>";
        
        $__internal_653f8123d31fd71d48cb830f840ce866e181decec68572665e694260ab2d93ac->leave($__internal_653f8123d31fd71d48cb830f840ce866e181decec68572665e694260ab2d93ac_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:edit/user-other-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  33 => 7,  25 => 2,  22 => 1,);
    }
}
/* <div>*/
/*   <input type="hidden" name="other[id]" value="{{ otherInfo.id|default('') }}">*/
/* </div>*/
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="reward">所受培训及所具有证书:</label>*/
/*   <div class="col-sm-7 controls">*/
/*     <textarea class="form-control" rows="3" name="other[reward]">{{ otherInfo.reward|default('') }}</textarea>*/
/*   </div>*/
/* </div>*/
/* <div class="form-group">*/
/*   <label class="col-sm-2 control-label" for="selfAssessment">自我评价:</label>*/
/*   <div class="col-sm-7 controls">*/
/*     <textarea class="form-control" rows="3" name="other[selfAssessment]">{{ otherInfo.selfAssessment|default('') }}</textarea>*/
/*   </div>*/
/* </div>*/
