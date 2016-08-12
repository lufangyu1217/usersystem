<?php

/* AppBundle:Example:login.html.twig */
class __TwigTemplate_3ef9475baee1b8e7e6f7d443d309470d29149a45fd402e6ddb69276d347d3434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Example:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0065cea3bce0e5485cc21aa5fd73f83e71288a326bdbea8ff4d82c80a0a6c4a5 = $this->env->getExtension("native_profiler");
        $__internal_0065cea3bce0e5485cc21aa5fd73f83e71288a326bdbea8ff4d82c80a0a6c4a5->enter($__internal_0065cea3bce0e5485cc21aa5fd73f83e71288a326bdbea8ff4d82c80a0a6c4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Example:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0065cea3bce0e5485cc21aa5fd73f83e71288a326bdbea8ff4d82c80a0a6c4a5->leave($__internal_0065cea3bce0e5485cc21aa5fd73f83e71288a326bdbea8ff4d82c80a0a6c4a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bb9cc1289d78a400e02df02fab1cf8feec363028abe86a0b54b580aa1f7711f = $this->env->getExtension("native_profiler");
        $__internal_8bb9cc1289d78a400e02df02fab1cf8feec363028abe86a0b54b580aa1f7711f->enter($__internal_8bb9cc1289d78a400e02df02fab1cf8feec363028abe86a0b54b580aa1f7711f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-4 col-md-offset-4\">
      ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "          <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
      ";
        }
        // line 11
        echo "
      <h2>登陆</h2>
      <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <div class=\"form-group\">
          <label>用户名</label>
          <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
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
        <button type=\"submit\" class=\"btn btn-primary\">登陆</button>
      </form>
    </div>
  </div>
</div>


";
        
        $__internal_8bb9cc1289d78a400e02df02fab1cf8feec363028abe86a0b54b580aa1f7711f->leave($__internal_8bb9cc1289d78a400e02df02fab1cf8feec363028abe86a0b54b580aa1f7711f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Example:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  58 => 13,  54 => 11,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container">*/
/*   <div class="row">*/
/*     <div class="col-md-4 col-md-offset-4">*/
/*       {% if error %}*/
/*           <div class="alert alert-error">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*       {% endif %}*/
/* */
/*       <h2>登陆</h2>*/
/*       <form action="{{ path('login_check') }}" method="post">*/
/*         <div class="form-group">*/
/*           <label>用户名</label>*/
/*           <input type="text" id="username" name="_username" value="{{ last_username }}" class="form-control" />*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="exampleInputPassword1">密码</label>*/
/*           <input type="password" id="password" name="_password" class="form-control" />*/
/*         </div>*/
/*         <div class="checkbox">*/
/*           <label>*/
/*             <input type="checkbox" name="_remember_me" checked /> 记住密码*/
/*           </label>*/
/*         </div>*/
/*         <button type="submit" class="btn btn-primary">登陆</button>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
