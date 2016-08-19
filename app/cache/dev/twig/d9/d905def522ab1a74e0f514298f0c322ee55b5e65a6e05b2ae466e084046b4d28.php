<?php

/* AppBundle:User:change-jobstatus-modal.html.twig */
class __TwigTemplate_af930bef5a169c4b71df64d4e4a8201f811ac583bcb194072e43dac4f0f4d5f2 extends Twig_Template
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
        $__internal_db20a8e614db83350f4c40f5ef859170997f563be93dd54d5222a0cf201d691a = $this->env->getExtension("native_profiler");
        $__internal_db20a8e614db83350f4c40f5ef859170997f563be93dd54d5222a0cf201d691a->enter($__internal_db20a8e614db83350f4c40f5ef859170997f563be93dd54d5222a0cf201d691a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:change-jobstatus-modal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db20a8e614db83350f4c40f5ef859170997f563be93dd54d5222a0cf201d691a->leave($__internal_db20a8e614db83350f4c40f5ef859170997f563be93dd54d5222a0cf201d691a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b03684887274f31d4fc8ce32390bd54599dcb923730236430a98ce0952add7fc = $this->env->getExtension("native_profiler");
        $__internal_b03684887274f31d4fc8ce32390bd54599dcb923730236430a98ce0952add7fc->enter($__internal_b03684887274f31d4fc8ce32390bd54599dcb923730236430a98ce0952add7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  员工离职信息
";
        
        $__internal_b03684887274f31d4fc8ce32390bd54599dcb923730236430a98ce0952add7fc->leave($__internal_b03684887274f31d4fc8ce32390bd54599dcb923730236430a98ce0952add7fc_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_28c84654537c8732251aa8a32d4e73ecc19371ac3e0520bb9b7c4bb3535935fc = $this->env->getExtension("native_profiler");
        $__internal_28c84654537c8732251aa8a32d4e73ecc19371ac3e0520bb9b7c4bb3535935fc->enter($__internal_28c84654537c8732251aa8a32d4e73ecc19371ac3e0520bb9b7c4bb3535935fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "  ";
        $this->displayBlock('footer', $context, $blocks);
        // line 26
        echo "  <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("links/user/js/datepicker.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_28c84654537c8732251aa8a32d4e73ecc19371ac3e0520bb9b7c4bb3535935fc->leave($__internal_28c84654537c8732251aa8a32d4e73ecc19371ac3e0520bb9b7c4bb3535935fc_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_acb29d9ebc072037247c695f755f0cccffb66dbb1c6aa786b99e213224673cba = $this->env->getExtension("native_profiler");
        $__internal_acb29d9ebc072037247c695f755f0cccffb66dbb1c6aa786b99e213224673cba->enter($__internal_acb29d9ebc072037247c695f755f0cccffb66dbb1c6aa786b99e213224673cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <form id=\"injob-form\" >
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\" for=\"";
        // line 11
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
            echo "quitTime";
        } else {
            echo "joinTime";
        }
        echo "\">";
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
            echo "离职日期";
        } else {
            echo "入职日期";
        }
        echo ":</label>
        <div class=\"col-sm-8 controls\">
          <div class='input-group date time' id='";
        // line 13
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
            echo "quitTime";
        } else {
            echo "joinTime";
        }
        echo "'>
          <input type='text' class=\"form-control\" name=\"";
        // line 14
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "on")) {
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
      <button type=\"button\" class=\"btn btn-sm btn-success change-status\" data-url=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">保存</button>
      </div>
    </form>
  ";
        
        $__internal_acb29d9ebc072037247c695f755f0cccffb66dbb1c6aa786b99e213224673cba->leave($__internal_acb29d9ebc072037247c695f755f0cccffb66dbb1c6aa786b99e213224673cba_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_171742d64053111a61c6e574629b41984a86cf4f1f6990472dae7c57daecc601 = $this->env->getExtension("native_profiler");
        $__internal_171742d64053111a61c6e574629b41984a86cf4f1f6990472dae7c57daecc601->enter($__internal_171742d64053111a61c6e574629b41984a86cf4f1f6990472dae7c57daecc601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 25
        echo "  ";
        
        $__internal_171742d64053111a61c6e574629b41984a86cf4f1f6990472dae7c57daecc601->leave($__internal_171742d64053111a61c6e574629b41984a86cf4f1f6990472dae7c57daecc601_prof);

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
        return array (  136 => 25,  130 => 24,  119 => 20,  106 => 14,  98 => 13,  83 => 11,  79 => 9,  73 => 8,  63 => 26,  60 => 24,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
/*     <form id="injob-form" >*/
/*       <div class="form-group">*/
/*         <label class="col-sm-2 control-label" for="{% if status == 'on' %}quitTime{% else %}joinTime{% endif %}">{% if status == 'on' %}离职日期{% else %}入职日期{% endif %}:</label>*/
/*         <div class="col-sm-8 controls">*/
/*           <div class='input-group date time' id='{% if status == 'on' %}quitTime{% else %}joinTime{% endif %}'>*/
/*           <input type='text' class="form-control" name="{% if status == 'on' %}quitTime{% else %}joinTime{% endif %}" />*/
/*           <span class="input-group-addon">*/
/*             <span class="glyphicon glyphicon-calendar"></span>*/
/*           </span>*/
/*         </div>*/
/*       </div>*/
/*       <button type="button" class="btn btn-sm btn-success change-status" data-url="{{ path(url, {id:id}) }}">保存</button>*/
/*       </div>*/
/*     </form>*/
/*   {% endblock %}*/
/*   {% block footer %}*/
/*   {% endblock %}*/
/*   <script type="text/javascript" src="{{ asset('links/user/js/datepicker.js') }}"></script>*/
/* {% endblock %}*/
/* */
