<?php

/* AppBundle:User:add/add-user.html.twig */
class __TwigTemplate_c989f02b0febf8b8b81ab3e9827a1cd5065610bab153d2ccc51628aef26f0ba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:add/add-user.html.twig", 1);
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
        $__internal_7fb975101b638d7ec8b6cf8dd17c1434a860118ccdaf8d6e7f96c5ac75910835 = $this->env->getExtension("native_profiler");
        $__internal_7fb975101b638d7ec8b6cf8dd17c1434a860118ccdaf8d6e7f96c5ac75910835->enter($__internal_7fb975101b638d7ec8b6cf8dd17c1434a860118ccdaf8d6e7f96c5ac75910835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:add/add-user.html.twig"));

        // line 3
        $context["nav"] = "user_create";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fb975101b638d7ec8b6cf8dd17c1434a860118ccdaf8d6e7f96c5ac75910835->leave($__internal_7fb975101b638d7ec8b6cf8dd17c1434a860118ccdaf8d6e7f96c5ac75910835_prof);

    }

    // line 4
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_a4f3a406c0df6a5864e7a80b25d4ad8fc153828813aa119c93edef17ae94dddb = $this->env->getExtension("native_profiler");
        $__internal_a4f3a406c0df6a5864e7a80b25d4ad8fc153828813aa119c93edef17ae94dddb->enter($__internal_a4f3a406c0df6a5864e7a80b25d4ad8fc153828813aa119c93edef17ae94dddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " <h4>添加员工</h4>";
        
        $__internal_a4f3a406c0df6a5864e7a80b25d4ad8fc153828813aa119c93edef17ae94dddb->leave($__internal_a4f3a406c0df6a5864e7a80b25d4ad8fc153828813aa119c93edef17ae94dddb_prof);

    }

    // line 5
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_aa4b796516c4f1808fe2e0d27750a099a031fc8b731a77211ce7f38231f5a901 = $this->env->getExtension("native_profiler");
        $__internal_aa4b796516c4f1808fe2e0d27750a099a031fc8b731a77211ce7f38231f5a901->enter($__internal_aa4b796516c4f1808fe2e0d27750a099a031fc8b731a77211ce7f38231f5a901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/add-user.js")), "html", null, true);
        echo "
<form id=\"add-user-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_user_add");
        echo "\">
  <div class=\"add-user-body\">
    <legend class=\"text-primary\">基本信息</legend>
    ";
        // line 11
        $this->loadTemplate("AppBundle:User:add/user-basic-info.html.twig", "AppBundle:User:add/add-user.html.twig", 11)->display($context);
        // line 12
        echo "
    <legend class=\"text-primary\">
      家庭状况
    </legend>
    <div class=\"family\">
      ";
        // line 17
        $this->loadTemplate("AppBundle:User:add/user-family-info.html.twig", "AppBundle:User:add/add-user.html.twig", 17)->display($context);
        // line 18
        echo "    </div>

    <legend class=\"text-primary\">
      学习经历
    </legend>
    <div class=\"learn\">
      ";
        // line 24
        $this->loadTemplate("AppBundle:User:add/user-learn-info.html.twig", "AppBundle:User:add/add-user.html.twig", 24)->display($context);
        // line 25
        echo "    </div>

    <legend class=\"text-primary\">
      工作履历
    </legend>
    <div class=\"work\">
      ";
        // line 31
        $this->loadTemplate("AppBundle:User:add/user-work-info.html.twig", "AppBundle:User:add/add-user.html.twig", 31)->display($context);
        // line 32
        echo "    </div>

    <legend class=\"text-primary\">其他信息</legend>
    ";
        // line 35
        $this->loadTemplate("AppBundle:User:add/user-other-info.html.twig", "AppBundle:User:add/add-user.html.twig", 35)->display($context);
        // line 36
        echo "  </div>
  <div class=\"footer btn-footer\">
    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("admin_user_present_list");
        echo "\" class=\"btn btn-default\">取消</a>
    ";
        // line 39
        echo $this->env->getExtension('app_asset_helper')->rendorFormCsrfToken();
        echo "
    <button class=\"btn btn-primary\" type=\"submit\">保存</button>
  </div>
</form>
";
        
        $__internal_aa4b796516c4f1808fe2e0d27750a099a031fc8b731a77211ce7f38231f5a901->leave($__internal_aa4b796516c4f1808fe2e0d27750a099a031fc8b731a77211ce7f38231f5a901_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:add/add-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 39,  111 => 38,  107 => 36,  105 => 35,  100 => 32,  98 => 31,  90 => 25,  88 => 24,  80 => 18,  78 => 17,  71 => 12,  69 => 11,  63 => 8,  59 => 7,  56 => 6,  50 => 5,  38 => 4,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% set nav = 'user_create' %}*/
/* {% block content_title %} <h4>添加员工</h4>{% endblock %}*/
/* {% block content_body %}*/
/* */
/* {{ script(['links/user/js/add-user.js']) }}*/
/* <form id="add-user-form" class="form-horizontal" method="post" action="{{ path('admin_user_add') }}">*/
/*   <div class="add-user-body">*/
/*     <legend class="text-primary">基本信息</legend>*/
/*     {% include 'AppBundle:User:add/user-basic-info.html.twig' %}*/
/* */
/*     <legend class="text-primary">*/
/*       家庭状况*/
/*     </legend>*/
/*     <div class="family">*/
/*       {% include 'AppBundle:User:add/user-family-info.html.twig' %}*/
/*     </div>*/
/* */
/*     <legend class="text-primary">*/
/*       学习经历*/
/*     </legend>*/
/*     <div class="learn">*/
/*       {% include 'AppBundle:User:add/user-learn-info.html.twig' %}*/
/*     </div>*/
/* */
/*     <legend class="text-primary">*/
/*       工作履历*/
/*     </legend>*/
/*     <div class="work">*/
/*       {% include 'AppBundle:User:add/user-work-info.html.twig' %}*/
/*     </div>*/
/* */
/*     <legend class="text-primary">其他信息</legend>*/
/*     {% include 'AppBundle:User:add/user-other-info.html.twig' %}*/
/*   </div>*/
/*   <div class="footer btn-footer">*/
/*     <a href="{{ path('admin_user_present_list') }}" class="btn btn-default">取消</a>*/
/*     {{ form_csrf_token() }}*/
/*     <button class="btn btn-primary" type="submit">保存</button>*/
/*   </div>*/
/* </form>*/
/* {% endblock %}*/
/* */
/* */
/* */
