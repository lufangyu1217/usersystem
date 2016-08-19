<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_3a2aa418f6298fd7029bf7ee126d346f732debd509dcd51aea4e7d48360fe2c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content_title' => array($this, 'block_content_title'),
            'content_body' => array($this, 'block_content_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef0fab5582afd54889d0fdedf2fe48480612a59e4a780319dae0b4c3f7cd96bd = $this->env->getExtension("native_profiler");
        $__internal_ef0fab5582afd54889d0fdedf2fe48480612a59e4a780319dae0b4c3f7cd96bd->enter($__internal_ef0fab5582afd54889d0fdedf2fe48480612a59e4a780319dae0b4c3f7cd96bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("AppBundle::macro.html.twig", "AppBundle::base.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>

";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "assets/js/vendor.js", 1 => "assets/js/global.js")), "html", null, true);
        echo "
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "assets/js/jquery.validate.js")), "html", null, true);
        echo "
";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "assets/js/messages_zh.js")), "html", null, true);
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/util/js/datepicker.js")), "html", null, true);
        echo "
";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/datepicker.js")), "html", null, true);
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/upload/js/upload.js")), "html", null, true);
        echo "

";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->css("links/upload/css/upload.css"), "html", null, true);
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->css("assets/css/vendor.css"), "html", null, true);
        echo "
";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->css("links/user/css/main.css"), "html", null, true);
        echo "
";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->css("links/util/css/datetimepicker.css"), "html", null, true);
        echo "

<html lang=\"zh\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta content=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken((isset($context["default_csrf_token_id"]) ? $context["default_csrf_token_id"] : $this->getContext($context, "default_csrf_token_id"))), "html", null, true);
        echo "\" name=\"csrf-token\" />
    <title>员工管理系统</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "  </head>
  <body class=\"hold-transition skin-green-light sidebar-mini\">
    <div class=\"wrapper\">
      <header class=\"main-header\">
        ";
        // line 31
        $this->loadTemplate("AppBundle:Layout:main-header.html.twig", "AppBundle::base.html.twig", 31)->display($context);
        // line 32
        echo "      </header>
      ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "  </div>
  <div id=\"modal\" class=\"modal\" ></div>
  </body>
  ";
        // line 59
        $this->displayBlock('scripts', $context, $blocks);
        // line 64
        echo "  ";
        // line 65
        echo "</html>
";
        
        $__internal_ef0fab5582afd54889d0fdedf2fe48480612a59e4a780319dae0b4c3f7cd96bd->leave($__internal_ef0fab5582afd54889d0fdedf2fe48480612a59e4a780319dae0b4c3f7cd96bd_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b83a373ea896fcdba7a6f059b8678665a9b9cae0ca67d7a1b0a4b6ae57aa3eb = $this->env->getExtension("native_profiler");
        $__internal_3b83a373ea896fcdba7a6f059b8678665a9b9cae0ca67d7a1b0a4b6ae57aa3eb->enter($__internal_3b83a373ea896fcdba7a6f059b8678665a9b9cae0ca67d7a1b0a4b6ae57aa3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app_asset_helper')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 24
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["path"]), "html", null, true);
            echo "\" rel=\"stylesheet\" />
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    ";
        
        $__internal_3b83a373ea896fcdba7a6f059b8678665a9b9cae0ca67d7a1b0a4b6ae57aa3eb->leave($__internal_3b83a373ea896fcdba7a6f059b8678665a9b9cae0ca67d7a1b0a4b6ae57aa3eb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fa9688da6a3e948e664eafc225ca26279f6c452f1876ae87ce7708d8bfe02b3 = $this->env->getExtension("native_profiler");
        $__internal_6fa9688da6a3e948e664eafc225ca26279f6c452f1876ae87ce7708d8bfe02b3->enter($__internal_6fa9688da6a3e948e664eafc225ca26279f6c452f1876ae87ce7708d8bfe02b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "      <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
          ";
        // line 36
        $this->loadTemplate("AppBundle:Layout:main-sidebar.html.twig", "AppBundle::base.html.twig", 36)->display($context);
        // line 37
        echo "        </section>
      </aside>
      <div class=\"content-wrapper\">
        <section class=\"content-header\">
        ";
        // line 41
        $this->displayBlock('content_title', $context, $blocks);
        // line 43
        echo "        </section>
        <section class=\"content\">
        <div class=\"box\">
          <div class=\"box-header with-border\">
            ";
        // line 47
        $this->displayBlock('content_body', $context, $blocks);
        // line 49
        echo "          </div>
        </div>
        </section>
      </div>
    <footer class=\"main-footer\"></footer>
    <div class=\"control-sidebar-bg\"></div>
    ";
        
        $__internal_6fa9688da6a3e948e664eafc225ca26279f6c452f1876ae87ce7708d8bfe02b3->leave($__internal_6fa9688da6a3e948e664eafc225ca26279f6c452f1876ae87ce7708d8bfe02b3_prof);

    }

    // line 41
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_8afcee9c91d1668f78d377d0f406a5ede7e41d59ac20bcce3f8203a6b38616b6 = $this->env->getExtension("native_profiler");
        $__internal_8afcee9c91d1668f78d377d0f406a5ede7e41d59ac20bcce3f8203a6b38616b6->enter($__internal_8afcee9c91d1668f78d377d0f406a5ede7e41d59ac20bcce3f8203a6b38616b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 42
        echo "        ";
        
        $__internal_8afcee9c91d1668f78d377d0f406a5ede7e41d59ac20bcce3f8203a6b38616b6->leave($__internal_8afcee9c91d1668f78d377d0f406a5ede7e41d59ac20bcce3f8203a6b38616b6_prof);

    }

    // line 47
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_bbde099287ccb431b3d2857e66e9d43a21978edf3db62db2832145ac5f16bd23 = $this->env->getExtension("native_profiler");
        $__internal_bbde099287ccb431b3d2857e66e9d43a21978edf3db62db2832145ac5f16bd23->enter($__internal_bbde099287ccb431b3d2857e66e9d43a21978edf3db62db2832145ac5f16bd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 48
        echo "            ";
        
        $__internal_bbde099287ccb431b3d2857e66e9d43a21978edf3db62db2832145ac5f16bd23->leave($__internal_bbde099287ccb431b3d2857e66e9d43a21978edf3db62db2832145ac5f16bd23_prof);

    }

    // line 59
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_221daf681dfb828c90faa5cf3c84cedc36c640398781a1dc6121c08206fbcdc0 = $this->env->getExtension("native_profiler");
        $__internal_221daf681dfb828c90faa5cf3c84cedc36c640398781a1dc6121c08206fbcdc0->enter($__internal_221daf681dfb828c90faa5cf3c84cedc36c640398781a1dc6121c08206fbcdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 60
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app_asset_helper')->script());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 61
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["path"]), "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "  ";
        
        $__internal_221daf681dfb828c90faa5cf3c84cedc36c640398781a1dc6121c08206fbcdc0->leave($__internal_221daf681dfb828c90faa5cf3c84cedc36c640398781a1dc6121c08206fbcdc0_prof);

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
        return array (  233 => 63,  224 => 61,  219 => 60,  213 => 59,  206 => 48,  200 => 47,  193 => 42,  187 => 41,  174 => 49,  172 => 47,  166 => 43,  164 => 41,  158 => 37,  156 => 36,  152 => 34,  146 => 33,  139 => 26,  130 => 24,  125 => 23,  119 => 22,  111 => 65,  109 => 64,  107 => 59,  102 => 56,  100 => 33,  97 => 32,  95 => 31,  89 => 27,  87 => 22,  83 => 21,  78 => 19,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 2,  27 => 1,);
    }
}
/* {% import "AppBundle::macro.html.twig" as web_macro %}*/
/* <!DOCTYPE html>*/
/* */
/* {{ script(['assets/js/vendor.js', 'assets/js/global.js']) }}*/
/* {{ script(['assets/js/jquery.validate.js']) }}*/
/* {{ script(['assets/js/messages_zh.js']) }}*/
/* {{ script(['links/util/js/datepicker.js']) }}*/
/* {{ script(['links/user/js/datepicker.js']) }}*/
/* {{ script(['links/upload/js/upload.js']) }}*/
/* */
/* {{ css('links/upload/css/upload.css') }}*/
/* {{ css('assets/css/vendor.css') }}*/
/* {{ css('links/user/css/main.css') }}*/
/* {{ css('links/util/css/datetimepicker.css') }}*/
/* */
/* <html lang="zh">*/
/*   <head>*/
/*     <meta charset="UTF-8" />*/
/*     <meta content="{{ csrf_token(default_csrf_token_id) }}" name="csrf-token" />*/
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
/*       {% block body %}*/
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
/*     {% endblock %}*/
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
