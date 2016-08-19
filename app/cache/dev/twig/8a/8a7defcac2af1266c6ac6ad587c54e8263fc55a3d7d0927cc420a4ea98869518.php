<?php

/* AppBundle:User:person/other.html.twig */
class __TwigTemplate_0bec4a2a7e6e363bb49fc12140d5be982774cf617a74f281181a7df32c71f41e extends Twig_Template
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
        $__internal_9ac614d0c552a1201927e9d9499ecce7039049921f51de7a83377b3abddcafa9 = $this->env->getExtension("native_profiler");
        $__internal_9ac614d0c552a1201927e9d9499ecce7039049921f51de7a83377b3abddcafa9->enter($__internal_9ac614d0c552a1201927e9d9499ecce7039049921f51de7a83377b3abddcafa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:person/other.html.twig"));

        // line 1
        echo "<ul class=\"person-info\">
  <li>所受培训及所具有证书：";
        // line 2
        if ($this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : null), "reward", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "reward", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
  <li>自我评价：";
        // line 3
        if ($this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : null), "selfAssessment", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["otherInfo"]) ? $context["otherInfo"] : $this->getContext($context, "otherInfo")), "selfAssessment", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
</ul>";
        
        $__internal_9ac614d0c552a1201927e9d9499ecce7039049921f51de7a83377b3abddcafa9->leave($__internal_9ac614d0c552a1201927e9d9499ecce7039049921f51de7a83377b3abddcafa9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:person/other.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="person-info">*/
/*   <li>所受培训及所具有证书：{% if otherInfo.reward is defined %}{{ otherInfo.reward }}{% else %}暂无{% endif %}</li>*/
/*   <li>自我评价：{% if otherInfo.selfAssessment is defined %}{{ otherInfo.selfAssessment }}{% else %}暂无{% endif %}</li>*/
/* </ul>*/
