<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8fb2fe0090208f6e31ab4793f9cbbd30764045122a39f1052cb68d56929cf232 extends Twig_Template
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
        $__internal_d55ffe09d1ae4608761adda21b4ad5659146341054910a595ec4984bafcc38ae = $this->env->getExtension("native_profiler");
        $__internal_d55ffe09d1ae4608761adda21b4ad5659146341054910a595ec4984bafcc38ae->enter($__internal_d55ffe09d1ae4608761adda21b4ad5659146341054910a595ec4984bafcc38ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d55ffe09d1ae4608761adda21b4ad5659146341054910a595ec4984bafcc38ae->leave($__internal_d55ffe09d1ae4608761adda21b4ad5659146341054910a595ec4984bafcc38ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed7b7b91fc908da26874797dbc17546a378750a891bdb969f874042b6798c597 = $this->env->getExtension("native_profiler");
        $__internal_ed7b7b91fc908da26874797dbc17546a378750a891bdb969f874042b6798c597->enter($__internal_ed7b7b91fc908da26874797dbc17546a378750a891bdb969f874042b6798c597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ed7b7b91fc908da26874797dbc17546a378750a891bdb969f874042b6798c597->leave($__internal_ed7b7b91fc908da26874797dbc17546a378750a891bdb969f874042b6798c597_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7024ef8b3558c69bdab71e9d00e64592d4458b45770258ff185a7d6c1697769 = $this->env->getExtension("native_profiler");
        $__internal_a7024ef8b3558c69bdab71e9d00e64592d4458b45770258ff185a7d6c1697769->enter($__internal_a7024ef8b3558c69bdab71e9d00e64592d4458b45770258ff185a7d6c1697769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a7024ef8b3558c69bdab71e9d00e64592d4458b45770258ff185a7d6c1697769->leave($__internal_a7024ef8b3558c69bdab71e9d00e64592d4458b45770258ff185a7d6c1697769_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_696b87bd2d7b8d984bae8f5cbcd4db01e9fbad711ef42fd1c259b493db46de20 = $this->env->getExtension("native_profiler");
        $__internal_696b87bd2d7b8d984bae8f5cbcd4db01e9fbad711ef42fd1c259b493db46de20->enter($__internal_696b87bd2d7b8d984bae8f5cbcd4db01e9fbad711ef42fd1c259b493db46de20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_696b87bd2d7b8d984bae8f5cbcd4db01e9fbad711ef42fd1c259b493db46de20->leave($__internal_696b87bd2d7b8d984bae8f5cbcd4db01e9fbad711ef42fd1c259b493db46de20_prof);

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
