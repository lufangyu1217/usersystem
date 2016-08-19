<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8f5017d01a8eb2c9603f6efd6dc492879c19f18b2f41a684c0652f8e959bd28a extends Twig_Template
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
        $__internal_3259bad1909f5e1f1d8cd3ab9abea79058092c46e8d69190e3c296179b7ff459 = $this->env->getExtension("native_profiler");
        $__internal_3259bad1909f5e1f1d8cd3ab9abea79058092c46e8d69190e3c296179b7ff459->enter($__internal_3259bad1909f5e1f1d8cd3ab9abea79058092c46e8d69190e3c296179b7ff459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3259bad1909f5e1f1d8cd3ab9abea79058092c46e8d69190e3c296179b7ff459->leave($__internal_3259bad1909f5e1f1d8cd3ab9abea79058092c46e8d69190e3c296179b7ff459_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11583115ecfc125d3cfb74480dd9e746d5816ca5343a4c684cf6282805419934 = $this->env->getExtension("native_profiler");
        $__internal_11583115ecfc125d3cfb74480dd9e746d5816ca5343a4c684cf6282805419934->enter($__internal_11583115ecfc125d3cfb74480dd9e746d5816ca5343a4c684cf6282805419934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_11583115ecfc125d3cfb74480dd9e746d5816ca5343a4c684cf6282805419934->leave($__internal_11583115ecfc125d3cfb74480dd9e746d5816ca5343a4c684cf6282805419934_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1224d09714f428190a03818b9ff834f6c28cdceeac672d76664f305755acd954 = $this->env->getExtension("native_profiler");
        $__internal_1224d09714f428190a03818b9ff834f6c28cdceeac672d76664f305755acd954->enter($__internal_1224d09714f428190a03818b9ff834f6c28cdceeac672d76664f305755acd954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1224d09714f428190a03818b9ff834f6c28cdceeac672d76664f305755acd954->leave($__internal_1224d09714f428190a03818b9ff834f6c28cdceeac672d76664f305755acd954_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db1a8fbc128b397910f015ce4ebdbf92fda12b2f6193d661028fe17869b74c41 = $this->env->getExtension("native_profiler");
        $__internal_db1a8fbc128b397910f015ce4ebdbf92fda12b2f6193d661028fe17869b74c41->enter($__internal_db1a8fbc128b397910f015ce4ebdbf92fda12b2f6193d661028fe17869b74c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db1a8fbc128b397910f015ce4ebdbf92fda12b2f6193d661028fe17869b74c41->leave($__internal_db1a8fbc128b397910f015ce4ebdbf92fda12b2f6193d661028fe17869b74c41_prof);

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
