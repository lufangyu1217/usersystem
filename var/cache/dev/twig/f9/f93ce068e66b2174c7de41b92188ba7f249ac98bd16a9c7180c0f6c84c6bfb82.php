<?php

/* base.html.twig */
class __TwigTemplate_9e3f12f109fe4b0f20051b34b618359a4bcdf6d28ecbc54fee9d340e52004508 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11e799854f2d8e56c151f6efeb0b9a3de9e672eb64bd6bce7f81d05589ba81c5 = $this->env->getExtension("native_profiler");
        $__internal_11e799854f2d8e56c151f6efeb0b9a3de9e672eb64bd6bce7f81d05589ba81c5->enter($__internal_11e799854f2d8e56c151f6efeb0b9a3de9e672eb64bd6bce7f81d05589ba81c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "common/js/vendor.js")), "html", null, true);
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->css("common/css/vendor.css"), "html", null, true);
        // line 4
        echo "<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  </head>
  <body>
    ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 23
        echo "  </body>
</html>";
        
        $__internal_11e799854f2d8e56c151f6efeb0b9a3de9e672eb64bd6bce7f81d05589ba81c5->leave($__internal_11e799854f2d8e56c151f6efeb0b9a3de9e672eb64bd6bce7f81d05589ba81c5_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_c62c5287fee3104bcab0befc55d476a4957d587f5de2521cd4b57b66bc79c864 = $this->env->getExtension("native_profiler");
        $__internal_c62c5287fee3104bcab0befc55d476a4957d587f5de2521cd4b57b66bc79c864->enter($__internal_c62c5287fee3104bcab0befc55d476a4957d587f5de2521cd4b57b66bc79c864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c62c5287fee3104bcab0befc55d476a4957d587f5de2521cd4b57b66bc79c864->leave($__internal_c62c5287fee3104bcab0befc55d476a4957d587f5de2521cd4b57b66bc79c864_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4499c37f2c6f4a6acc2cb3880cf7ae4a9e85814b2dd05808f1422b72c8dd7047 = $this->env->getExtension("native_profiler");
        $__internal_4499c37f2c6f4a6acc2cb3880cf7ae4a9e85814b2dd05808f1422b72c8dd7047->enter($__internal_4499c37f2c6f4a6acc2cb3880cf7ae4a9e85814b2dd05808f1422b72c8dd7047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app_asset_helper')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("assets/" . $context["path"])), "html", null, true);
            echo "\" rel=\"stylesheet\" />
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        
        $__internal_4499c37f2c6f4a6acc2cb3880cf7ae4a9e85814b2dd05808f1422b72c8dd7047->leave($__internal_4499c37f2c6f4a6acc2cb3880cf7ae4a9e85814b2dd05808f1422b72c8dd7047_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_60d74cfa7ece1116380f26b65295708e2763ab610d7bdd4a8c1a43cfc3ee8605 = $this->env->getExtension("native_profiler");
        $__internal_60d74cfa7ece1116380f26b65295708e2763ab610d7bdd4a8c1a43cfc3ee8605->enter($__internal_60d74cfa7ece1116380f26b65295708e2763ab610d7bdd4a8c1a43cfc3ee8605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60d74cfa7ece1116380f26b65295708e2763ab610d7bdd4a8c1a43cfc3ee8605->leave($__internal_60d74cfa7ece1116380f26b65295708e2763ab610d7bdd4a8c1a43cfc3ee8605_prof);

    }

    // line 18
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_c38662fe5321d0af3cdc2848a5e53cdc572d9c00a71bddc622e8cfbc31be7c0c = $this->env->getExtension("native_profiler");
        $__internal_c38662fe5321d0af3cdc2848a5e53cdc572d9c00a71bddc622e8cfbc31be7c0c->enter($__internal_c38662fe5321d0af3cdc2848a5e53cdc572d9c00a71bddc622e8cfbc31be7c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 19
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app_asset_helper')->script());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 20
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("assets/" . $context["path"])), "html", null, true);
            echo "\"></script>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    ";
        
        $__internal_c38662fe5321d0af3cdc2848a5e53cdc572d9c00a71bddc622e8cfbc31be7c0c->leave($__internal_c38662fe5321d0af3cdc2848a5e53cdc572d9c00a71bddc622e8cfbc31be7c0c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 22,  123 => 20,  118 => 19,  112 => 18,  101 => 17,  94 => 14,  85 => 12,  80 => 11,  74 => 10,  63 => 9,  55 => 23,  52 => 18,  50 => 17,  46 => 15,  44 => 10,  40 => 9,  33 => 4,  31 => 3,  29 => 2,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* {{ script(['common/js/vendor.js']) -}}*/
/* {{- css('common/css/vendor.css') -}}*/
/* <html>*/
/*   <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <title>{% block title %}{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*       {% for path in css() %}*/
/*         <link href="{{ asset('assets/' ~ path) }}" rel="stylesheet" />*/
/*       {% endfor %}*/
/*     {% endblock %}*/
/*   </head>*/
/*   <body>*/
/*     {% block body %}{% endblock %}*/
/*     {% block scripts %}*/
/*       {% for path in script()  %}*/
/*         <script src="{{ asset( 'assets/' ~ path) }}"></script>*/
/*       {% endfor %}*/
/*     {% endblock %}*/
/*   </body>*/
/* </html>*/
