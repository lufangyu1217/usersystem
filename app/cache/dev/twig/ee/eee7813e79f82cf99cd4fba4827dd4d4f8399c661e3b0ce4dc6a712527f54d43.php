<?php

/* AppBundle:User:change-jobstatus-modal.html.twig */
class __TwigTemplate_73c09c85ba852d6472e7c0f2d98e259ea5e40c361cd1e0c85dd3abc65c83ad58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:change-jobstatus-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::modal-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf92a159376a0d247d7b578c9cbef06998a671a2a102e9c4cb452fedb6cfc035 = $this->env->getExtension("native_profiler");
        $__internal_cf92a159376a0d247d7b578c9cbef06998a671a2a102e9c4cb452fedb6cfc035->enter($__internal_cf92a159376a0d247d7b578c9cbef06998a671a2a102e9c4cb452fedb6cfc035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:change-jobstatus-modal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf92a159376a0d247d7b578c9cbef06998a671a2a102e9c4cb452fedb6cfc035->leave($__internal_cf92a159376a0d247d7b578c9cbef06998a671a2a102e9c4cb452fedb6cfc035_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89ca6d1b308998043d9fcaa7e64f53d8baac8bbdd414b3fd1ce9ce06ee274f1e = $this->env->getExtension("native_profiler");
        $__internal_89ca6d1b308998043d9fcaa7e64f53d8baac8bbdd414b3fd1ce9ce06ee274f1e->enter($__internal_89ca6d1b308998043d9fcaa7e64f53d8baac8bbdd414b3fd1ce9ce06ee274f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  员工离职信息
";
        
        $__internal_89ca6d1b308998043d9fcaa7e64f53d8baac8bbdd414b3fd1ce9ce06ee274f1e->leave($__internal_89ca6d1b308998043d9fcaa7e64f53d8baac8bbdd414b3fd1ce9ce06ee274f1e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_6dc8a1866d576210ec997780c40b64be12912c2533a9f1261717fbf4b6403fe9 = $this->env->getExtension("native_profiler");
        $__internal_6dc8a1866d576210ec997780c40b64be12912c2533a9f1261717fbf4b6403fe9->enter($__internal_6dc8a1866d576210ec997780c40b64be12912c2533a9f1261717fbf4b6403fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "  ";
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_6dc8a1866d576210ec997780c40b64be12912c2533a9f1261717fbf4b6403fe9->leave($__internal_6dc8a1866d576210ec997780c40b64be12912c2533a9f1261717fbf4b6403fe9_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ae49d7713d1769ca3e5a5ca91e7b25cfe1c376076107ac3912a77b8a4060f24 = $this->env->getExtension("native_profiler");
        $__internal_4ae49d7713d1769ca3e5a5ca91e7b25cfe1c376076107ac3912a77b8a4060f24->enter($__internal_4ae49d7713d1769ca3e5a5ca91e7b25cfe1c376076107ac3912a77b8a4060f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <form id=\"injob-form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_jobStatus_change", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"post\" >
      <div class=\"form-group\">
        <input style=\"display:none\" name=\"status\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
        echo "\">
        <input style=\"display:none\" name=\"id\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
        // line 13
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == 1)) {
            echo "quitTime";
        } else {
            echo "joinTime";
        }
        echo "\">";
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == 1)) {
            echo "离职日期";
        } else {
            echo "入职日期";
        }
        echo ":</label>
        <div class=\"col-sm-8 controls\">
          <div class='input-group date time' id='";
        // line 15
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == 1)) {
            echo "quitTime";
        } else {
            echo "joinTime";
        }
        echo "'>
          <input type='text' class=\"form-control\" name=\"";
        // line 16
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == 1)) {
            echo "quitTime";
        } else {
            echo "joinTime";
        }
        echo "\" />
          <span class=\"input-group-addon\">
            <span class=\"glyphicon glyphicon-calendar\"></span>
          </span>
        </div>
      </div>
      <button type=\"button\" class=\"btn btn-sm btn-success change-status\">保存</button>
      </div>
    </form>
  ";
        
        $__internal_4ae49d7713d1769ca3e5a5ca91e7b25cfe1c376076107ac3912a77b8a4060f24->leave($__internal_4ae49d7713d1769ca3e5a5ca91e7b25cfe1c376076107ac3912a77b8a4060f24_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2e078fbed6a8a6a9a5c114c59f8bad2da97e595c6107aadaf076c03562a732ce = $this->env->getExtension("native_profiler");
        $__internal_2e078fbed6a8a6a9a5c114c59f8bad2da97e595c6107aadaf076c03562a732ce->enter($__internal_2e078fbed6a8a6a9a5c114c59f8bad2da97e595c6107aadaf076c03562a732ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 27
        echo "  ";
        
        $__internal_2e078fbed6a8a6a9a5c114c59f8bad2da97e595c6107aadaf076c03562a732ce->leave($__internal_2e078fbed6a8a6a9a5c114c59f8bad2da97e595c6107aadaf076c03562a732ce_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:change-jobstatus-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 27,  132 => 26,  111 => 16,  103 => 15,  88 => 13,  84 => 12,  80 => 11,  74 => 9,  68 => 8,  60 => 26,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}*/
/*   员工离职信息*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*   {% block body %}*/
/*     <form id="injob-form" action="{{ path('admin_user_jobStatus_change', {id:id}) }}" method="post" >*/
/*       <div class="form-group">*/
/*         <input style="display:none" name="status" value="{{ status }}">*/
/*         <input style="display:none" name="id" value="{{ id }}">*/
/*         <label class="col-sm-2 control-label" for="{% if status == 1 %}quitTime{% else %}joinTime{% endif %}">{% if status == 1 %}离职日期{% else %}入职日期{% endif %}:</label>*/
/*         <div class="col-sm-8 controls">*/
/*           <div class='input-group date time' id='{% if status == 1 %}quitTime{% else %}joinTime{% endif %}'>*/
/*           <input type='text' class="form-control" name="{% if status == 1 %}quitTime{% else %}joinTime{% endif %}" />*/
/*           <span class="input-group-addon">*/
/*             <span class="glyphicon glyphicon-calendar"></span>*/
/*           </span>*/
/*         </div>*/
/*       </div>*/
/*       <button type="button" class="btn btn-sm btn-success change-status">保存</button>*/
/*       </div>*/
/*     </form>*/
/*   {% endblock %}*/
/*   {% block footer %}*/
/*   {% endblock %}*/
/* {% endblock %}*/
/* */
