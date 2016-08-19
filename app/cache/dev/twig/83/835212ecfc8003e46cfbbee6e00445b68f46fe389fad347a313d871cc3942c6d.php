<?php

/* AppBundle:User:person/education.html.twig */
class __TwigTemplate_163fb43d0709f24fd3c8c4fa750416bfe77af15927b84c124767198ee7c25512 extends Twig_Template
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
        $__internal_5cb0932752d2ffb702c3dd112d09b0db52d6149743a9570bc1c4afd0eb8e8acf = $this->env->getExtension("native_profiler");
        $__internal_5cb0932752d2ffb702c3dd112d09b0db52d6149743a9570bc1c4afd0eb8e8acf->enter($__internal_5cb0932752d2ffb702c3dd112d09b0db52d6149743a9570bc1c4afd0eb8e8acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:person/education.html.twig"));

        // line 1
        echo "<ul class=\"person-info\">
  <li>文化程度：";
        // line 2
        echo $this->env->getExtension('twig.app_extension')->getDictText("education", $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "education", array()));
        echo "</li>
  <li>专业：";
        // line 3
        if ($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "prefession", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "prefession", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
</ul>";
        
        $__internal_5cb0932752d2ffb702c3dd112d09b0db52d6149743a9570bc1c4afd0eb8e8acf->leave($__internal_5cb0932752d2ffb702c3dd112d09b0db52d6149743a9570bc1c4afd0eb8e8acf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:person/education.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="person-info">*/
/*   <li>文化程度：{{ dict_text('education', userBasic.education) }}</li>*/
/*   <li>专业：{% if userBasic.prefession %}{{ userBasic.prefession }}{% else %}暂无{% endif %}</li>*/
/* </ul>*/
