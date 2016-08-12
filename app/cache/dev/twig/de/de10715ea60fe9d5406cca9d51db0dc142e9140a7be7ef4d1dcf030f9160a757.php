<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_a49907a2252f81d94ee323182248be00c6e2983fdc64fc320bd150a63ec2235e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content_title' => array($this, 'block_content_title'),
            'content_body' => array($this, 'block_content_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4251af9d38b1e00bccece942446dc8d275daff36ed368a16e619fe4b79f4a38d = $this->env->getExtension("native_profiler");
        $__internal_4251af9d38b1e00bccece942446dc8d275daff36ed368a16e619fe4b79f4a38d->enter($__internal_4251af9d38b1e00bccece942446dc8d275daff36ed368a16e619fe4b79f4a38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "assets/js/vendor.js")), "html", null, true);
        echo "
";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "assets/js/jquery.validate.js")), "html", null, true);
        echo "
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "assets/js/messages_zh.js")), "html", null, true);
        echo "
";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/util/js/datepicker.js")), "html", null, true);
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/datepicker.js")), "html", null, true);
        echo "


";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->css("assets/css/vendor.css"), "html", null, true);
        echo "
";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->css("links/user/css/main.css"), "html", null, true);
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->css("links/util/css/datetimepicker.css"), "html", null, true);
        echo "

<html lang=\"zh\">
  <head>
    <meta charset=\"UTF-8\" />
    <title>员工管理系统</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "  </head>
  <body class=\"hold-transition skin-green-light sidebar-mini\">
    <div class=\"wrapper\">
      <header class=\"main-header\">
        ";
        // line 28
        $this->loadTemplate("AppBundle:Layout:main-header.html.twig", "AppBundle::base.html.twig", 28)->display($context);
        // line 29
        echo "      </header>
      <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
          ";
        // line 32
        $this->loadTemplate("AppBundle:Layout:main-sidebar.html.twig", "AppBundle::base.html.twig", 32)->display($context);
        // line 33
        echo "        </section>
      </aside>
      <div class=\"content-wrapper\">
        <section class=\"content-header\">
        ";
        // line 37
        $this->displayBlock('content_title', $context, $blocks);
        // line 39
        echo "        </section>
        <section class=\"content\">
        <div class=\"box\">
          <div class=\"box-header with-border\">
            ";
        // line 43
        $this->displayBlock('content_body', $context, $blocks);
        // line 45
        echo "          </div>
        </div>
        </section>
      </div>
    <footer class=\"main-footer\"></footer>
    <div class=\"control-sidebar-bg\"></div>
  </div>
  <div id=\"modal\" class=\"modal\" ></div>
  </body>
  ";
        // line 54
        $this->displayBlock('scripts', $context, $blocks);
        // line 59
        echo "  ";
        // line 60
        echo "</html>
";
        
        $__internal_4251af9d38b1e00bccece942446dc8d275daff36ed368a16e619fe4b79f4a38d->leave($__internal_4251af9d38b1e00bccece942446dc8d275daff36ed368a16e619fe4b79f4a38d_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d50f4b1af5750acc2abdfbd58eedcc03e654736031dff482c6d3d763d4f76e7 = $this->env->getExtension("native_profiler");
        $__internal_7d50f4b1af5750acc2abdfbd58eedcc03e654736031dff482c6d3d763d4f76e7->enter($__internal_7d50f4b1af5750acc2abdfbd58eedcc03e654736031dff482c6d3d763d4f76e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app_asset_helper')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 21
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["path"]), "html", null, true);
            echo "\" rel=\"stylesheet\" />
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    ";
        
        $__internal_7d50f4b1af5750acc2abdfbd58eedcc03e654736031dff482c6d3d763d4f76e7->leave($__internal_7d50f4b1af5750acc2abdfbd58eedcc03e654736031dff482c6d3d763d4f76e7_prof);

    }

    // line 37
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_0b4df6111205070cea1da4c50d6da9de3e2fe054f809ec5db4507fcaa93036f9 = $this->env->getExtension("native_profiler");
        $__internal_0b4df6111205070cea1da4c50d6da9de3e2fe054f809ec5db4507fcaa93036f9->enter($__internal_0b4df6111205070cea1da4c50d6da9de3e2fe054f809ec5db4507fcaa93036f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 38
        echo "        ";
        
        $__internal_0b4df6111205070cea1da4c50d6da9de3e2fe054f809ec5db4507fcaa93036f9->leave($__internal_0b4df6111205070cea1da4c50d6da9de3e2fe054f809ec5db4507fcaa93036f9_prof);

    }

    // line 43
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_4f688c12f4fd6b57120f989ab37601367c1d8d5276bdbc5aa0249fbba1335723 = $this->env->getExtension("native_profiler");
        $__internal_4f688c12f4fd6b57120f989ab37601367c1d8d5276bdbc5aa0249fbba1335723->enter($__internal_4f688c12f4fd6b57120f989ab37601367c1d8d5276bdbc5aa0249fbba1335723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 44
        echo "            ";
        
        $__internal_4f688c12f4fd6b57120f989ab37601367c1d8d5276bdbc5aa0249fbba1335723->leave($__internal_4f688c12f4fd6b57120f989ab37601367c1d8d5276bdbc5aa0249fbba1335723_prof);

    }

    // line 54
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_795794a4432ba105cb04da3b5453e495df3b0e2fc3e057dc0880eb949eebbfaa = $this->env->getExtension("native_profiler");
        $__internal_795794a4432ba105cb04da3b5453e495df3b0e2fc3e057dc0880eb949eebbfaa->enter($__internal_795794a4432ba105cb04da3b5453e495df3b0e2fc3e057dc0880eb949eebbfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 55
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app_asset_helper')->script());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 56
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["path"]), "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "  ";
        
        $__internal_795794a4432ba105cb04da3b5453e495df3b0e2fc3e057dc0880eb949eebbfaa->leave($__internal_795794a4432ba105cb04da3b5453e495df3b0e2fc3e057dc0880eb949eebbfaa_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 58,  193 => 56,  188 => 55,  182 => 54,  175 => 44,  169 => 43,  162 => 38,  156 => 37,  149 => 23,  140 => 21,  135 => 20,  129 => 19,  121 => 60,  119 => 59,  117 => 54,  106 => 45,  104 => 43,  98 => 39,  96 => 37,  90 => 33,  88 => 32,  83 => 29,  81 => 28,  75 => 24,  73 => 19,  69 => 18,  60 => 12,  56 => 11,  52 => 10,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  30 => 3,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* {{ script(['assets/js/vendor.js']) }}*/
/* {{ script(['assets/js/jquery.validate.js']) }}*/
/* {{ script(['assets/js/messages_zh.js']) }}*/
/* {{ script(['links/util/js/datepicker.js']) }}*/
/* {{ script(['links/user/js/datepicker.js']) }}*/
/* */
/* */
/* {{ css('assets/css/vendor.css') }}*/
/* {{ css('links/user/css/main.css') }}*/
/* {{ css('links/util/css/datetimepicker.css') }}*/
/* */
/* <html lang="zh">*/
/*   <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>员工管理系统</title>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     {% block stylesheets %}*/
/*       {% for path in css() %}*/
/*         <link href="{{ asset(path) }}" rel="stylesheet" />*/
/*       {% endfor %}*/
/*     {% endblock %}*/
/*   </head>*/
/*   <body class="hold-transition skin-green-light sidebar-mini">*/
/*     <div class="wrapper">*/
/*       <header class="main-header">*/
/*         {% include 'AppBundle:Layout:main-header.html.twig' %}*/
/*       </header>*/
/*       <aside class="main-sidebar">*/
/*         <section class="sidebar">*/
/*           {% include 'AppBundle:Layout:main-sidebar.html.twig' %}*/
/*         </section>*/
/*       </aside>*/
/*       <div class="content-wrapper">*/
/*         <section class="content-header">*/
/*         {% block content_title %}*/
/*         {% endblock %}*/
/*         </section>*/
/*         <section class="content">*/
/*         <div class="box">*/
/*           <div class="box-header with-border">*/
/*             {% block content_body %}*/
/*             {% endblock %}*/
/*           </div>*/
/*         </div>*/
/*         </section>*/
/*       </div>*/
/*     <footer class="main-footer"></footer>*/
/*     <div class="control-sidebar-bg"></div>*/
/*   </div>*/
/*   <div id="modal" class="modal" ></div>*/
/*   </body>*/
/*   {% block scripts %}*/
/*     {% for path in script()  %}*/
/*       <script src="{{ asset(path) }}"></script>*/
/*     {% endfor %}*/
/*   {% endblock %}*/
/*   {# {% include 'AppBundle:Layout:load-js.html.twig' %} #}*/
/* </html>*/
/* */
