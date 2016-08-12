<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1d936ea3cfbc33cfc8511b7c8b3d0a880fbff0715b852a565d4f1f4c5dce7b44 extends Twig_Template
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
        $__internal_80636445595acfaaf7ece35f609b222ba7bbc1d5f97845500f74bbae510d5565 = $this->env->getExtension("native_profiler");
        $__internal_80636445595acfaaf7ece35f609b222ba7bbc1d5f97845500f74bbae510d5565->enter($__internal_80636445595acfaaf7ece35f609b222ba7bbc1d5f97845500f74bbae510d5565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80636445595acfaaf7ece35f609b222ba7bbc1d5f97845500f74bbae510d5565->leave($__internal_80636445595acfaaf7ece35f609b222ba7bbc1d5f97845500f74bbae510d5565_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f50aea38a3005138b1a79470167f84f453b4e595beb79e58bebd966c5a8ce1a = $this->env->getExtension("native_profiler");
        $__internal_8f50aea38a3005138b1a79470167f84f453b4e595beb79e58bebd966c5a8ce1a->enter($__internal_8f50aea38a3005138b1a79470167f84f453b4e595beb79e58bebd966c5a8ce1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8f50aea38a3005138b1a79470167f84f453b4e595beb79e58bebd966c5a8ce1a->leave($__internal_8f50aea38a3005138b1a79470167f84f453b4e595beb79e58bebd966c5a8ce1a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_242758447176cfd74d281db2b6d70cdd9e3aae65a8350e5df9588fb536b9d49c = $this->env->getExtension("native_profiler");
        $__internal_242758447176cfd74d281db2b6d70cdd9e3aae65a8350e5df9588fb536b9d49c->enter($__internal_242758447176cfd74d281db2b6d70cdd9e3aae65a8350e5df9588fb536b9d49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_242758447176cfd74d281db2b6d70cdd9e3aae65a8350e5df9588fb536b9d49c->leave($__internal_242758447176cfd74d281db2b6d70cdd9e3aae65a8350e5df9588fb536b9d49c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_099a8c5bf045a1a112c8d90a5a4db66ee53f26b834839080ea813a2c8742020e = $this->env->getExtension("native_profiler");
        $__internal_099a8c5bf045a1a112c8d90a5a4db66ee53f26b834839080ea813a2c8742020e->enter($__internal_099a8c5bf045a1a112c8d90a5a4db66ee53f26b834839080ea813a2c8742020e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_099a8c5bf045a1a112c8d90a5a4db66ee53f26b834839080ea813a2c8742020e->leave($__internal_099a8c5bf045a1a112c8d90a5a4db66ee53f26b834839080ea813a2c8742020e_prof);

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
