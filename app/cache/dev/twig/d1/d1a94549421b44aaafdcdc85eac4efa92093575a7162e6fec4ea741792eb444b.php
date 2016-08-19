<?php

/* AppBundle:User:person/personnel.html.twig */
class __TwigTemplate_6b897e5382e84227d2dfc9cd332f6f799d2c93af934ebb8bcea7f3aefd9777ae extends Twig_Template
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
        $__internal_79915d68b15dea2e238c02b913a786ccd99174be566d753ae7e305b90225d588 = $this->env->getExtension("native_profiler");
        $__internal_79915d68b15dea2e238c02b913a786ccd99174be566d753ae7e305b90225d588->enter($__internal_79915d68b15dea2e238c02b913a786ccd99174be566d753ae7e305b90225d588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:person/personnel.html.twig"));

        // line 1
        echo "<ul class=\"person-info\">
  <li>与原劳动关系情况：";
        // line 2
        if ($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "formerLaborShip", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "formerLaborShip", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
  <li>预计到岗时间：即刻</li>
  <li>希望服务年限：";
        // line 4
        if ($this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "serviceTime", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userBasic"]) ? $context["userBasic"] : $this->getContext($context, "userBasic")), "serviceTime", array()), "html", null, true);
        } else {
            echo "暂无";
        }
        echo "</li>
</ul>";
        
        $__internal_79915d68b15dea2e238c02b913a786ccd99174be566d753ae7e305b90225d588->leave($__internal_79915d68b15dea2e238c02b913a786ccd99174be566d753ae7e305b90225d588_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:person/personnel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  25 => 2,  22 => 1,);
    }
}
/* <ul class="person-info">*/
/*   <li>与原劳动关系情况：{% if userBasic.formerLaborShip %}{{ userBasic.formerLaborShip }}{% else %}暂无{% endif %}</li>*/
/*   <li>预计到岗时间：即刻</li>*/
/*   <li>希望服务年限：{% if userBasic.serviceTime %}{{ userBasic.serviceTime }}{% else %}暂无{% endif %}</li>*/
/* </ul>*/
