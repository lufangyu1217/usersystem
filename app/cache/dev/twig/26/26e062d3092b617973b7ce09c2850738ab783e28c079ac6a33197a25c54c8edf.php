<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1d3bd63ee1152940024bf0a37065f2b21f3810b278e981e243124759439b4804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f45186d116a4cdf768c6229c415044d1a94661643d64404dcd4300ebfbcda7bd = $this->env->getExtension("native_profiler");
        $__internal_f45186d116a4cdf768c6229c415044d1a94661643d64404dcd4300ebfbcda7bd->enter($__internal_f45186d116a4cdf768c6229c415044d1a94661643d64404dcd4300ebfbcda7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f45186d116a4cdf768c6229c415044d1a94661643d64404dcd4300ebfbcda7bd->leave($__internal_f45186d116a4cdf768c6229c415044d1a94661643d64404dcd4300ebfbcda7bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a382e0728a74c242a045434addf6ea49add2ed07a062cb8d67477f988bf80d3 = $this->env->getExtension("native_profiler");
        $__internal_5a382e0728a74c242a045434addf6ea49add2ed07a062cb8d67477f988bf80d3->enter($__internal_5a382e0728a74c242a045434addf6ea49add2ed07a062cb8d67477f988bf80d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5a382e0728a74c242a045434addf6ea49add2ed07a062cb8d67477f988bf80d3->leave($__internal_5a382e0728a74c242a045434addf6ea49add2ed07a062cb8d67477f988bf80d3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c67f10507db7b979efe3e91837266d27bfc9302dd825cfe1cc29ac21ee94ee9a = $this->env->getExtension("native_profiler");
        $__internal_c67f10507db7b979efe3e91837266d27bfc9302dd825cfe1cc29ac21ee94ee9a->enter($__internal_c67f10507db7b979efe3e91837266d27bfc9302dd825cfe1cc29ac21ee94ee9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c67f10507db7b979efe3e91837266d27bfc9302dd825cfe1cc29ac21ee94ee9a->leave($__internal_c67f10507db7b979efe3e91837266d27bfc9302dd825cfe1cc29ac21ee94ee9a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_78c2a17e455ecbad258f0c95b3d16b6d13c21a4b17f838430409fdddd7322f92 = $this->env->getExtension("native_profiler");
        $__internal_78c2a17e455ecbad258f0c95b3d16b6d13c21a4b17f838430409fdddd7322f92->enter($__internal_78c2a17e455ecbad258f0c95b3d16b6d13c21a4b17f838430409fdddd7322f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_78c2a17e455ecbad258f0c95b3d16b6d13c21a4b17f838430409fdddd7322f92->leave($__internal_78c2a17e455ecbad258f0c95b3d16b6d13c21a4b17f838430409fdddd7322f92_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
