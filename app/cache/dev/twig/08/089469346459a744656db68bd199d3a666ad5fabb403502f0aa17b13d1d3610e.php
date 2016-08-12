<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b331da747397c7b1f805657a7835974bf47915b82102d315e56d83a0f85db071 extends Twig_Template
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
        $__internal_e81d2721cd306519cd9c5aea934a3cdc6081f86d4abe2965021c2e2cb0a02f68 = $this->env->getExtension("native_profiler");
        $__internal_e81d2721cd306519cd9c5aea934a3cdc6081f86d4abe2965021c2e2cb0a02f68->enter($__internal_e81d2721cd306519cd9c5aea934a3cdc6081f86d4abe2965021c2e2cb0a02f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e81d2721cd306519cd9c5aea934a3cdc6081f86d4abe2965021c2e2cb0a02f68->leave($__internal_e81d2721cd306519cd9c5aea934a3cdc6081f86d4abe2965021c2e2cb0a02f68_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b72145ddd40e65a7e5f7da6a80769d26b5ec3f6d4236a79d781ca0a2e8ffb86 = $this->env->getExtension("native_profiler");
        $__internal_0b72145ddd40e65a7e5f7da6a80769d26b5ec3f6d4236a79d781ca0a2e8ffb86->enter($__internal_0b72145ddd40e65a7e5f7da6a80769d26b5ec3f6d4236a79d781ca0a2e8ffb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b72145ddd40e65a7e5f7da6a80769d26b5ec3f6d4236a79d781ca0a2e8ffb86->leave($__internal_0b72145ddd40e65a7e5f7da6a80769d26b5ec3f6d4236a79d781ca0a2e8ffb86_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1fd1252ea0ecca46d7dc725f23ab991cf65bc85ac4663f526ee30b8644a61e28 = $this->env->getExtension("native_profiler");
        $__internal_1fd1252ea0ecca46d7dc725f23ab991cf65bc85ac4663f526ee30b8644a61e28->enter($__internal_1fd1252ea0ecca46d7dc725f23ab991cf65bc85ac4663f526ee30b8644a61e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1fd1252ea0ecca46d7dc725f23ab991cf65bc85ac4663f526ee30b8644a61e28->leave($__internal_1fd1252ea0ecca46d7dc725f23ab991cf65bc85ac4663f526ee30b8644a61e28_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03673a2789bb354deb93bf60089f7028e9a71e3602f27d0553992c59fa433a26 = $this->env->getExtension("native_profiler");
        $__internal_03673a2789bb354deb93bf60089f7028e9a71e3602f27d0553992c59fa433a26->enter($__internal_03673a2789bb354deb93bf60089f7028e9a71e3602f27d0553992c59fa433a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_03673a2789bb354deb93bf60089f7028e9a71e3602f27d0553992c59fa433a26->leave($__internal_03673a2789bb354deb93bf60089f7028e9a71e3602f27d0553992c59fa433a26_prof);

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
