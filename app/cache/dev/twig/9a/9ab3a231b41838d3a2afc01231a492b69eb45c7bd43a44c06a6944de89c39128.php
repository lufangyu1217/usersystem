<?php

/* AppBundle:Auth:login.html.twig */
class __TwigTemplate_d8f35368b0583f600a2f5db442b1249f5702a9e95a4459ab8721d10b0756f5a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c5b2ef113afb2614fbe9d396de5479a269ea090554cf32454b685274f7fcb82 = $this->env->getExtension("native_profiler");
        $__internal_2c5b2ef113afb2614fbe9d396de5479a269ea090554cf32454b685274f7fcb82->enter($__internal_2c5b2ef113afb2614fbe9d396de5479a269ea090554cf32454b685274f7fcb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Auth:login.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "assets/js/vendor.js", 1 => "assets/js/global.js")), "html", null, true);
        echo "
";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->css("assets/css/vendor.css"), "html", null, true);
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->css("links/user/css/login.css"), "html", null, true);
        echo "
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>员工管理系统</title>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app_asset_helper')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 9
            echo "      <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["path"]), "html", null, true);
            echo "\" rel=\"stylesheet\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </head>
<body>
";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "<div class=\"alert alert-error\">
  帐号或密码错误
</div>
";
        }
        // line 18
        echo "<div class=\"header\">
  <div class=\"header-content\">
    <div class=\"content-left\">User-Manage-System</div>
    <div class=\"content-right\">
      ";
        // line 23
        echo "    </div>
  </div>
</div>
  
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-4 col-md-offset-4 login\">
      <h2>登录</h2>
        <form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
          <div class=\"form-group\">
            <label>用户名或工号</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">密码</label>
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
          </div>
          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"_remember_me\" checked /> 记住密码
            </label>
          </div>
          ";
        // line 45
        echo $this->env->getExtension('app_asset_helper')->rendorFormCsrfToken();
        echo "
          <button type=\"submit\" class=\"btn btn-primary\">登录</button>
        </form>
      </div>
    </div>
  </div>
</body>
";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app_asset_helper')->script());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 53
            echo "  <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["path"]), "html", null, true);
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</html> 
";
        
        $__internal_2c5b2ef113afb2614fbe9d396de5479a269ea090554cf32454b685274f7fcb82->leave($__internal_2c5b2ef113afb2614fbe9d396de5479a269ea090554cf32454b685274f7fcb82_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Auth:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 55,  113 => 53,  109 => 52,  99 => 45,  85 => 34,  79 => 31,  69 => 23,  63 => 18,  57 => 14,  55 => 13,  51 => 11,  42 => 9,  38 => 8,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ script(['assets/js/vendor.js', 'assets/js/global.js']) }}*/
/* {{ css('assets/css/vendor.css') }}*/
/* {{ css('links/user/css/login.css') }}*/
/* <html>*/
/*   <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>员工管理系统</title>*/
/*     {% for path in css() %}*/
/*       <link href="{{ asset(path) }}" rel="stylesheet" />*/
/*     {% endfor %}*/
/*   </head>*/
/* <body>*/
/* {% if error %}*/
/* <div class="alert alert-error">*/
/*   帐号或密码错误*/
/* </div>*/
/* {% endif %}*/
/* <div class="header">*/
/*   <div class="header-content">*/
/*     <div class="content-left">User-Manage-System</div>*/
/*     <div class="content-right">*/
/*       {# <a href="{{ path('login') }}">登录</a> #}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/*   */
/* <div class="container">*/
/*   <div class="row">*/
/*     <div class="col-md-4 col-md-offset-4 login">*/
/*       <h2>登录</h2>*/
/*         <form action="{{ path('login_check') }}" method="post">*/
/*           <div class="form-group">*/
/*             <label>用户名或工号</label>*/
/*             <input type="text" id="username" name="_username" value="{{ last_username }}" class="form-control" />*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label for="exampleInputPassword1">密码</label>*/
/*             <input type="password" id="password" name="_password" class="form-control" />*/
/*           </div>*/
/*           <div class="checkbox">*/
/*             <label>*/
/*               <input type="checkbox" name="_remember_me" checked /> 记住密码*/
/*             </label>*/
/*           </div>*/
/*           {{ form_csrf_token() }}*/
/*           <button type="submit" class="btn btn-primary">登录</button>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </body>*/
/* {% for path in script()  %}*/
/*   <script src="{{ asset(path) }}"></script>*/
/* {% endfor %}*/
/* </html> */
/* */
