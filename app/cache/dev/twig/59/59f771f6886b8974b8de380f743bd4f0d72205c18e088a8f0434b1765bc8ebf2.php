<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_87f31c6e364c2f11ed19b3d88b399d8fa4d75dd734f8408b3805951ef6e5d0f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content_title' => array($this, 'block_content_title'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_212ec447bdb23cf2a1e3191a834f0ff9c7ac32c63cac2cd63da03ce71bbd399b = $this->env->getExtension("native_profiler");
        $__internal_212ec447bdb23cf2a1e3191a834f0ff9c7ac32c63cac2cd63da03ce71bbd399b->enter($__internal_212ec447bdb23cf2a1e3191a834f0ff9c7ac32c63cac2cd63da03ce71bbd399b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh\">
  <head>
    <meta charset=\"UTF-8\" />
    <title>员工管理系统</title>
    ";
        // line 6
        $this->loadTemplate("AppBundle:Layout:stylesheet.html.twig", "AppBundle::base.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "  </head>
  <body class=\"hold-transition skin-green-light sidebar-mini\">
    <div class=\"wrapper\">
      <header class=\"main-header\">
        ";
        // line 13
        $this->loadTemplate("AppBundle:Layout:main-header.html.twig", "AppBundle::base.html.twig", 13)->display($context);
        // line 14
        echo "      </header>
      <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
          ";
        // line 17
        $this->loadTemplate("AppBundle:Layout:main-sidebar.html.twig", "AppBundle::base.html.twig", 17)->display($context);
        // line 18
        echo "        </section>
      </aside>
      <div class=\"content-wrapper\">
        <section class=\"content-header\">
        ";
        // line 22
        $this->displayBlock('content_title', $context, $blocks);
        // line 24
        echo "        </section>
        <section class=\"content\">
        <div class=\"box\">
          <div class=\"box-header with-border\">
            ";
        // line 28
        $this->displayBlock('content_body', $context, $blocks);
        // line 30
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
        // line 39
        $this->loadTemplate("AppBundle:Layout:load-js.html.twig", "AppBundle::base.html.twig", 39)->display($context);
        // line 40
        echo "</html>
";
        
        $__internal_212ec447bdb23cf2a1e3191a834f0ff9c7ac32c63cac2cd63da03ce71bbd399b->leave($__internal_212ec447bdb23cf2a1e3191a834f0ff9c7ac32c63cac2cd63da03ce71bbd399b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6325c4b8821aee2552eec050790fba49b2c80730913c3d1e487f366c65f8219 = $this->env->getExtension("native_profiler");
        $__internal_d6325c4b8821aee2552eec050790fba49b2c80730913c3d1e487f366c65f8219->enter($__internal_d6325c4b8821aee2552eec050790fba49b2c80730913c3d1e487f366c65f8219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        
        $__internal_d6325c4b8821aee2552eec050790fba49b2c80730913c3d1e487f366c65f8219->leave($__internal_d6325c4b8821aee2552eec050790fba49b2c80730913c3d1e487f366c65f8219_prof);

    }

    // line 22
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ad0d2729675f9f7652f1a22b0ec5f6fa60a10f0e13f0e1f76de8e48b5c8a58ec = $this->env->getExtension("native_profiler");
        $__internal_ad0d2729675f9f7652f1a22b0ec5f6fa60a10f0e13f0e1f76de8e48b5c8a58ec->enter($__internal_ad0d2729675f9f7652f1a22b0ec5f6fa60a10f0e13f0e1f76de8e48b5c8a58ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 23
        echo "        ";
        
        $__internal_ad0d2729675f9f7652f1a22b0ec5f6fa60a10f0e13f0e1f76de8e48b5c8a58ec->leave($__internal_ad0d2729675f9f7652f1a22b0ec5f6fa60a10f0e13f0e1f76de8e48b5c8a58ec_prof);

    }

    // line 28
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_c4babc707a14ad8e89319e69fb6f79bab1328416b38a59e32e5c3c7c3c00a102 = $this->env->getExtension("native_profiler");
        $__internal_c4babc707a14ad8e89319e69fb6f79bab1328416b38a59e32e5c3c7c3c00a102->enter($__internal_c4babc707a14ad8e89319e69fb6f79bab1328416b38a59e32e5c3c7c3c00a102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 29
        echo "            ";
        
        $__internal_c4babc707a14ad8e89319e69fb6f79bab1328416b38a59e32e5c3c7c3c00a102->leave($__internal_c4babc707a14ad8e89319e69fb6f79bab1328416b38a59e32e5c3c7c3c00a102_prof);

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
        return array (  121 => 29,  115 => 28,  108 => 23,  102 => 22,  95 => 8,  89 => 7,  81 => 40,  79 => 39,  68 => 30,  66 => 28,  60 => 24,  58 => 22,  52 => 18,  50 => 17,  45 => 14,  43 => 13,  37 => 9,  34 => 7,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="zh">*/
/*   <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>员工管理系统</title>*/
/*     {% include 'AppBundle:Layout:stylesheet.html.twig' %}*/
/*     {% block stylesheets %}*/
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
/*   {% include 'AppBundle:Layout:load-js.html.twig' %}*/
/* </html>*/
/* */
