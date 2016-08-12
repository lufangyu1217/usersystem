<?php

/* AppBundle:Layout:load-js.html.twig */
class __TwigTemplate_38fe257e8987919e22a125e7a1aaac7633761f3e6912cbbcdb2bc6de4786a71d extends Twig_Template
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
        $__internal_21c074bb84a827e50320736cc2dda2d981b350d6e4d0328d6f95ba28b960816c = $this->env->getExtension("native_profiler");
        $__internal_21c074bb84a827e50320736cc2dda2d981b350d6e4d0328d6f95ba28b960816c->enter($__internal_21c074bb84a827e50320736cc2dda2d981b350d6e4d0328d6f95ba28b960816c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layout:load-js.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/vendor.js"), "html", null, true);
        echo "\"></script> 
<script type=\"text/javascript\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.validate.js"), "html", null, true);
        echo "\"></script> 
<script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/messages_zh.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("links/util/js/datepicker.js"), "html", null, true);
        echo "\"></script> 
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("links/util/js/tableSort.js"), "html", null, true);
        echo "\"></script>
";
        // line 6
        if (array_key_exists("script_controller", $context)) {
            // line 7
            echo "  <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["script_controller"]) ? $context["script_controller"] : $this->getContext($context, "script_controller"))), "html", null, true);
            echo "\"></script>
";
        }
        // line 9
        if (array_key_exists("script_controller_show", $context)) {
            // line 10
            echo "  <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["script_controller_show"]) ? $context["script_controller_show"] : $this->getContext($context, "script_controller_show"))), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("links/user/js/sort.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("links/user/js/change-role.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("links/user/js/datepicker.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_21c074bb84a827e50320736cc2dda2d981b350d6e4d0328d6f95ba28b960816c->leave($__internal_21c074bb84a827e50320736cc2dda2d981b350d6e4d0328d6f95ba28b960816c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Layout:load-js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  64 => 13,  59 => 12,  53 => 10,  51 => 9,  45 => 7,  43 => 6,  39 => 5,  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <script type="text/javascript" src="{{ asset('assets/js/vendor.js') }}"></script> */
/* <script type="text/javascript" src="{{ asset('assets/js/jquery.validate.js') }}"></script> */
/* <script type="text/javascript" src="{{ asset('assets/js/messages_zh.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('links/util/js/datepicker.js') }}"></script> */
/* <script type="text/javascript" src="{{ asset('links/util/js/tableSort.js') }}"></script>*/
/* {% if script_controller is defined %}*/
/*   <script type="text/javascript" src="{{ asset(script_controller) }}"></script>*/
/* {% endif %}*/
/* {% if script_controller_show is defined %}*/
/*   <script type="text/javascript" src="{{ asset(script_controller_show) }}"></script>*/
/* {% endif %}*/
/* <script type="text/javascript" src="{{ asset('links/user/js/sort.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('links/user/js/change-role.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('links/user/js/datepicker.js') }}"></script>*/
/* */
