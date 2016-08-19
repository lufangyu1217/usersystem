<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ecd2cfd170e4261c2aa360a3243b8caed67690ccc7521187962e5edcaf6f6da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4402c018276e157319c3cc0842f0cc5f9e97b34b943df3023c1fc7c47d6318fe = $this->env->getExtension("native_profiler");
        $__internal_4402c018276e157319c3cc0842f0cc5f9e97b34b943df3023c1fc7c47d6318fe->enter($__internal_4402c018276e157319c3cc0842f0cc5f9e97b34b943df3023c1fc7c47d6318fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4402c018276e157319c3cc0842f0cc5f9e97b34b943df3023c1fc7c47d6318fe->leave($__internal_4402c018276e157319c3cc0842f0cc5f9e97b34b943df3023c1fc7c47d6318fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_15ac07e3d543346a47d951c0f394485cf7c66c9e1a4c36421c0c4bc625c22e11 = $this->env->getExtension("native_profiler");
        $__internal_15ac07e3d543346a47d951c0f394485cf7c66c9e1a4c36421c0c4bc625c22e11->enter($__internal_15ac07e3d543346a47d951c0f394485cf7c66c9e1a4c36421c0c4bc625c22e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_15ac07e3d543346a47d951c0f394485cf7c66c9e1a4c36421c0c4bc625c22e11->leave($__internal_15ac07e3d543346a47d951c0f394485cf7c66c9e1a4c36421c0c4bc625c22e11_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ac74d794c9223c99a299d0e55dde02c2ce038078c897883fc45325edd7da3f4 = $this->env->getExtension("native_profiler");
        $__internal_9ac74d794c9223c99a299d0e55dde02c2ce038078c897883fc45325edd7da3f4->enter($__internal_9ac74d794c9223c99a299d0e55dde02c2ce038078c897883fc45325edd7da3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9ac74d794c9223c99a299d0e55dde02c2ce038078c897883fc45325edd7da3f4->leave($__internal_9ac74d794c9223c99a299d0e55dde02c2ce038078c897883fc45325edd7da3f4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_40a968096d25dee067e5fdf9382373a3b3a1330307f3790154ad60f5165a8804 = $this->env->getExtension("native_profiler");
        $__internal_40a968096d25dee067e5fdf9382373a3b3a1330307f3790154ad60f5165a8804->enter($__internal_40a968096d25dee067e5fdf9382373a3b3a1330307f3790154ad60f5165a8804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_40a968096d25dee067e5fdf9382373a3b3a1330307f3790154ad60f5165a8804->leave($__internal_40a968096d25dee067e5fdf9382373a3b3a1330307f3790154ad60f5165a8804_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
