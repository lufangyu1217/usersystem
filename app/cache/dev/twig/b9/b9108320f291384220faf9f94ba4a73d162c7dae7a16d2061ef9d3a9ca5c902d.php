<?php

/* AppBundle:user:add-user.html.twig */
class __TwigTemplate_08cb72c79a1b8563e49c278ea9e3864ba4fa47410f5241c343449a0567ce89c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:user:add-user.html.twig", 1);
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
        $__internal_543b2d07bc2bcff49f498844aa3dacf1e0fe1838f7214cf5e0d3f78fcf58f3d2 = $this->env->getExtension("native_profiler");
        $__internal_543b2d07bc2bcff49f498844aa3dacf1e0fe1838f7214cf5e0d3f78fcf58f3d2->enter($__internal_543b2d07bc2bcff49f498844aa3dacf1e0fe1838f7214cf5e0d3f78fcf58f3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:add-user.html.twig"));

        // line 2
        $context["script_controller"] = "cssjs/user/js/add-user.js";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_543b2d07bc2bcff49f498844aa3dacf1e0fe1838f7214cf5e0d3f78fcf58f3d2->leave($__internal_543b2d07bc2bcff49f498844aa3dacf1e0fe1838f7214cf5e0d3f78fcf58f3d2_prof);

    }

    // line 3
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_dcb0e3ff4d20cca95a9caff1df8ddb9549db121673c9df289763ff0243213ea8 = $this->env->getExtension("native_profiler");
        $__internal_dcb0e3ff4d20cca95a9caff1df8ddb9549db121673c9df289763ff0243213ea8->enter($__internal_dcb0e3ff4d20cca95a9caff1df8ddb9549db121673c9df289763ff0243213ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " <h4>添加员工</h4>";
        
        $__internal_dcb0e3ff4d20cca95a9caff1df8ddb9549db121673c9df289763ff0243213ea8->leave($__internal_dcb0e3ff4d20cca95a9caff1df8ddb9549db121673c9df289763ff0243213ea8_prof);

    }

    // line 4
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_48e15d864749e9e1ff699d80cc25230dd278d21b38ede1c60b1dc6c5d6a2bc27 = $this->env->getExtension("native_profiler");
        $__internal_48e15d864749e9e1ff699d80cc25230dd278d21b38ede1c60b1dc6c5d6a2bc27->enter($__internal_48e15d864749e9e1ff699d80cc25230dd278d21b38ede1c60b1dc6c5d6a2bc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 5
        echo "
<form id=\"add-user-form\" class=\"form-horizontal\">
  <div class=\"add-user-body\">
    <legend class=\"text-primary\">基本信息</legend>
    ";
        // line 9
        $this->loadTemplate("AppBundle:user:user-basic-info.html.twig", "AppBundle:user:add-user.html.twig", 9)->display($context);
        // line 10
        echo "
    <legend class=\"text-primary\">家庭状况</legend>
    ";
        // line 12
        $this->loadTemplate("AppBundle:user:user-family-info.html.twig", "AppBundle:user:add-user.html.twig", 12)->display($context);
        // line 13
        echo "
    <legend class=\"text-primary\">学习经历</legend>
    ";
        // line 15
        $this->loadTemplate("AppBundle:user:user-learn-info.html.twig", "AppBundle:user:add-user.html.twig", 15)->display($context);
        // line 16
        echo "
    <legend class=\"text-primary\">工作履历</legend>
    ";
        // line 18
        $this->loadTemplate("AppBundle:user:user-work-info.html.twig", "AppBundle:user:add-user.html.twig", 18)->display($context);
        // line 19
        echo "
    <legend class=\"text-primary\">其他信息</legend>
    ";
        // line 21
        $this->loadTemplate("AppBundle:user:user-other-info.html.twig", "AppBundle:user:add-user.html.twig", 21)->display($context);
        // line 22
        echo "  </div>
  <div class=\"footer btn-footer\">
    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin_injob_user_list");
        echo "\" class=\"btn btn-default\">取消</a>
    <button class=\"btn btn-primary add-user\" type=\"button\" data-url=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("admin_user_add");
        echo "\">保存</button>
  </div>
</form>
";
        
        $__internal_48e15d864749e9e1ff699d80cc25230dd278d21b38ede1c60b1dc6c5d6a2bc27->leave($__internal_48e15d864749e9e1ff699d80cc25230dd278d21b38ede1c60b1dc6c5d6a2bc27_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user:add-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  92 => 24,  88 => 22,  86 => 21,  82 => 19,  80 => 18,  76 => 16,  74 => 15,  70 => 13,  68 => 12,  64 => 10,  62 => 9,  56 => 5,  50 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% set script_controller = 'cssjs/user/js/add-user.js' %}*/
/* {% block content_title %} <h4>添加员工</h4>{% endblock %}*/
/* {% block content_body %}*/
/* */
/* <form id="add-user-form" class="form-horizontal">*/
/*   <div class="add-user-body">*/
/*     <legend class="text-primary">基本信息</legend>*/
/*     {% include 'AppBundle:user:user-basic-info.html.twig' %}*/
/* */
/*     <legend class="text-primary">家庭状况</legend>*/
/*     {% include 'AppBundle:user:user-family-info.html.twig' %}*/
/* */
/*     <legend class="text-primary">学习经历</legend>*/
/*     {% include 'AppBundle:user:user-learn-info.html.twig' %}*/
/* */
/*     <legend class="text-primary">工作履历</legend>*/
/*     {% include 'AppBundle:user:user-work-info.html.twig' %}*/
/* */
/*     <legend class="text-primary">其他信息</legend>*/
/*     {% include 'AppBundle:user:user-other-info.html.twig' %}*/
/*   </div>*/
/*   <div class="footer btn-footer">*/
/*     <a href="{{ path('admin_injob_user_list') }}" class="btn btn-default">取消</a>*/
/*     <button class="btn btn-primary add-user" type="button" data-url="{{ path('admin_user_add') }}">保存</button>*/
/*   </div>*/
/* </form>*/
/* {% endblock %}*/
/* */
/* */
/* */
