<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2ec2d6728f96c8f9b36cab705d35695d3fade0af3de3c5442c5de53b7565f129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_21d60ebef8c9c12f84c0d48452e0298d799dc1b8af5609ca721843715aea9660 = $this->env->getExtension("native_profiler");
        $__internal_21d60ebef8c9c12f84c0d48452e0298d799dc1b8af5609ca721843715aea9660->enter($__internal_21d60ebef8c9c12f84c0d48452e0298d799dc1b8af5609ca721843715aea9660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d60ebef8c9c12f84c0d48452e0298d799dc1b8af5609ca721843715aea9660->leave($__internal_21d60ebef8c9c12f84c0d48452e0298d799dc1b8af5609ca721843715aea9660_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_367332faaa081470e9102187486451528258ea50b5b0f2ddb2cfc2e3ad676566 = $this->env->getExtension("native_profiler");
        $__internal_367332faaa081470e9102187486451528258ea50b5b0f2ddb2cfc2e3ad676566->enter($__internal_367332faaa081470e9102187486451528258ea50b5b0f2ddb2cfc2e3ad676566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_367332faaa081470e9102187486451528258ea50b5b0f2ddb2cfc2e3ad676566->leave($__internal_367332faaa081470e9102187486451528258ea50b5b0f2ddb2cfc2e3ad676566_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_434f5ea8459b29ceab24df90a1a16ecad777d5f121d835d7d6043790d9dc7879 = $this->env->getExtension("native_profiler");
        $__internal_434f5ea8459b29ceab24df90a1a16ecad777d5f121d835d7d6043790d9dc7879->enter($__internal_434f5ea8459b29ceab24df90a1a16ecad777d5f121d835d7d6043790d9dc7879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_434f5ea8459b29ceab24df90a1a16ecad777d5f121d835d7d6043790d9dc7879->leave($__internal_434f5ea8459b29ceab24df90a1a16ecad777d5f121d835d7d6043790d9dc7879_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0f292925110a628fc120308474cdcefe7e0d279df05419e8dde2754b8fc0775 = $this->env->getExtension("native_profiler");
        $__internal_a0f292925110a628fc120308474cdcefe7e0d279df05419e8dde2754b8fc0775->enter($__internal_a0f292925110a628fc120308474cdcefe7e0d279df05419e8dde2754b8fc0775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a0f292925110a628fc120308474cdcefe7e0d279df05419e8dde2754b8fc0775->leave($__internal_a0f292925110a628fc120308474cdcefe7e0d279df05419e8dde2754b8fc0775_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
