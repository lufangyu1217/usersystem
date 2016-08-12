<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e134e1448ad8d28087ded4d0c16b92b4bcbe96bdf154d9516472758841742c1f extends Twig_Template
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
        $__internal_2da65601ff03ae2afa47114596f72a0606945e9964dc7b5c1b13bd4cdb0aad31 = $this->env->getExtension("native_profiler");
        $__internal_2da65601ff03ae2afa47114596f72a0606945e9964dc7b5c1b13bd4cdb0aad31->enter($__internal_2da65601ff03ae2afa47114596f72a0606945e9964dc7b5c1b13bd4cdb0aad31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2da65601ff03ae2afa47114596f72a0606945e9964dc7b5c1b13bd4cdb0aad31->leave($__internal_2da65601ff03ae2afa47114596f72a0606945e9964dc7b5c1b13bd4cdb0aad31_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_711f809b33aef4e09b08e3c299a5a0343ab6c509cbc4ac7a84dd2cf1cadc67ba = $this->env->getExtension("native_profiler");
        $__internal_711f809b33aef4e09b08e3c299a5a0343ab6c509cbc4ac7a84dd2cf1cadc67ba->enter($__internal_711f809b33aef4e09b08e3c299a5a0343ab6c509cbc4ac7a84dd2cf1cadc67ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_711f809b33aef4e09b08e3c299a5a0343ab6c509cbc4ac7a84dd2cf1cadc67ba->leave($__internal_711f809b33aef4e09b08e3c299a5a0343ab6c509cbc4ac7a84dd2cf1cadc67ba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9442afb23599795ad3dc64d39be365fa4625639a7d0b075295188ce46a669803 = $this->env->getExtension("native_profiler");
        $__internal_9442afb23599795ad3dc64d39be365fa4625639a7d0b075295188ce46a669803->enter($__internal_9442afb23599795ad3dc64d39be365fa4625639a7d0b075295188ce46a669803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9442afb23599795ad3dc64d39be365fa4625639a7d0b075295188ce46a669803->leave($__internal_9442afb23599795ad3dc64d39be365fa4625639a7d0b075295188ce46a669803_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cf0178c57be2bcf1cd3c230d86c112b356bfaef7eb8036dd4f152565b7498e1 = $this->env->getExtension("native_profiler");
        $__internal_2cf0178c57be2bcf1cd3c230d86c112b356bfaef7eb8036dd4f152565b7498e1->enter($__internal_2cf0178c57be2bcf1cd3c230d86c112b356bfaef7eb8036dd4f152565b7498e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2cf0178c57be2bcf1cd3c230d86c112b356bfaef7eb8036dd4f152565b7498e1->leave($__internal_2cf0178c57be2bcf1cd3c230d86c112b356bfaef7eb8036dd4f152565b7498e1_prof);

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
