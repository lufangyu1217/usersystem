<?php

/* AppBundle:User:person/index.html.twig */
class __TwigTemplate_75fee709ec543f25f402011fd4f5e7ff4225475831c9b08910da2e1b34a4ff57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:person/index.html.twig", 1);
        $this->blocks = array(
            'content_title' => array($this, 'block_content_title'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a11d5275861647dec548319eeea72b88a63534fb77657558f6833a9323bd086 = $this->env->getExtension("native_profiler");
        $__internal_1a11d5275861647dec548319eeea72b88a63534fb77657558f6833a9323bd086->enter($__internal_1a11d5275861647dec548319eeea72b88a63534fb77657558f6833a9323bd086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:person/index.html.twig"));

        // line 3
        $context["nav"] = "person_info";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a11d5275861647dec548319eeea72b88a63534fb77657558f6833a9323bd086->leave($__internal_1a11d5275861647dec548319eeea72b88a63534fb77657558f6833a9323bd086_prof);

    }

    // line 4
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_e3b607b003ea5fbcfeaef6a42f3c7249a42316d955b09639dccbcdd2f3adae80 = $this->env->getExtension("native_profiler");
        $__internal_e3b607b003ea5fbcfeaef6a42f3c7249a42316d955b09639dccbcdd2f3adae80->enter($__internal_e3b607b003ea5fbcfeaef6a42f3c7249a42316d955b09639dccbcdd2f3adae80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 5
        echo "<ul class=\"nav nav-tabs\" role=\"tablist\" style=\"margin-bottom:20px;\">
    <li ";
        // line 6
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "basic")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#person-basic-info\" data-toggle=\"tab\">基础信息</a></li>
    <li ";
        // line 7
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "education")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#person-education-info\" data-toggle=\"tab\">学历信息</a></li>
    <li ";
        // line 8
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "personnel")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#person-personnel-info\" data-toggle=\"tab\">人事信息</a></li>
    <li ";
        // line 9
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "other")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#person-other-info\" data-toggle=\"tab\">其他信息</a></li>
  </ul>
";
        
        $__internal_e3b607b003ea5fbcfeaef6a42f3c7249a42316d955b09639dccbcdd2f3adae80->leave($__internal_e3b607b003ea5fbcfeaef6a42f3c7249a42316d955b09639dccbcdd2f3adae80_prof);

    }

    // line 13
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_3cfb6d8c53fc4b100d49bcb4aa3634e6ca081535255e07a48f38b0be5099f82c = $this->env->getExtension("native_profiler");
        $__internal_3cfb6d8c53fc4b100d49bcb4aa3634e6ca081535255e07a48f38b0be5099f82c->enter($__internal_3cfb6d8c53fc4b100d49bcb4aa3634e6ca081535255e07a48f38b0be5099f82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 14
        echo "<div class=\"tab-content\">
  <div class=\"tab-pane ";
        // line 15
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "basic")) {
            echo "active";
        }
        echo "\" id=\"person-basic-info\">
    ";
        // line 16
        $this->loadTemplate("AppBundle:User:person/basic.html.twig", "AppBundle:User:person/index.html.twig", 16)->display($context);
        // line 17
        echo "  </div>
  <div class=\"tab-pane ";
        // line 18
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "education")) {
            echo "active";
        }
        echo "\" id=\"person-education-info\">
    ";
        // line 19
        $this->loadTemplate("AppBundle:User:person/education.html.twig", "AppBundle:User:person/index.html.twig", 19)->display($context);
        // line 20
        echo "  </div>
  <div class=\"tab-pane ";
        // line 21
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "personnel")) {
            echo "active";
        }
        echo "\" id=\"person-personnel-info\">
    ";
        // line 22
        $this->loadTemplate("AppBundle:User:person/personnel.html.twig", "AppBundle:User:person/index.html.twig", 22)->display($context);
        // line 23
        echo "  </div>
  <div class=\"tab-pane ";
        // line 24
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "other")) {
            echo "active";
        }
        echo "\" id=\"person-other-info\">
    ";
        // line 25
        $this->loadTemplate("AppBundle:User:person/other.html.twig", "AppBundle:User:person/index.html.twig", 25)->display($context);
        // line 26
        echo "  </div>
</div>
  
";
        
        $__internal_3cfb6d8c53fc4b100d49bcb4aa3634e6ca081535255e07a48f38b0be5099f82c->leave($__internal_3cfb6d8c53fc4b100d49bcb4aa3634e6ca081535255e07a48f38b0be5099f82c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:person/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 26,  125 => 25,  119 => 24,  116 => 23,  114 => 22,  108 => 21,  105 => 20,  103 => 19,  97 => 18,  94 => 17,  92 => 16,  86 => 15,  83 => 14,  77 => 13,  65 => 9,  59 => 8,  53 => 7,  47 => 6,  44 => 5,  38 => 4,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% set nav = 'person_info' %}*/
/* {% block content_title %}*/
/* <ul class="nav nav-tabs" role="tablist" style="margin-bottom:20px;">*/
/*     <li {% if tab == 'basic' %}class="active"{% endif %}><a href="#person-basic-info" data-toggle="tab">基础信息</a></li>*/
/*     <li {% if tab == 'education' %}class="active"{% endif %}><a href="#person-education-info" data-toggle="tab">学历信息</a></li>*/
/*     <li {% if tab == 'personnel' %}class="active"{% endif %}><a href="#person-personnel-info" data-toggle="tab">人事信息</a></li>*/
/*     <li {% if tab == 'other' %}class="active"{% endif %}><a href="#person-other-info" data-toggle="tab">其他信息</a></li>*/
/*   </ul>*/
/* {% endblock %}*/
/* */
/* {% block content_body %}*/
/* <div class="tab-content">*/
/*   <div class="tab-pane {% if tab == 'basic' %}active{% endif %}" id="person-basic-info">*/
/*     {% include 'AppBundle:User:person/basic.html.twig' %}*/
/*   </div>*/
/*   <div class="tab-pane {% if tab == 'education' %}active{% endif %}" id="person-education-info">*/
/*     {% include 'AppBundle:User:person/education.html.twig' %}*/
/*   </div>*/
/*   <div class="tab-pane {% if tab == 'personnel' %}active{% endif %}" id="person-personnel-info">*/
/*     {% include 'AppBundle:User:person/personnel.html.twig' %}*/
/*   </div>*/
/*   <div class="tab-pane {% if tab == 'other' %}active{% endif %}" id="person-other-info">*/
/*     {% include 'AppBundle:User:person/other.html.twig' %}*/
/*   </div>*/
/* </div>*/
/*   */
/* {% endblock %}*/
