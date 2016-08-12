<?php

/* AppBundle:Example:register.html.twig */
class __TwigTemplate_f9543363605667356c1b289ceaf4907b6abe730b87d0de6db28f4c4c99217fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Example:register.html.twig", 1);
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
        $__internal_b18b2fbe6c74d03fa95ba6a6c7b1b8116ef15161d16f88b7f2a17348216d35d6 = $this->env->getExtension("native_profiler");
        $__internal_b18b2fbe6c74d03fa95ba6a6c7b1b8116ef15161d16f88b7f2a17348216d35d6->enter($__internal_b18b2fbe6c74d03fa95ba6a6c7b1b8116ef15161d16f88b7f2a17348216d35d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Example:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b18b2fbe6c74d03fa95ba6a6c7b1b8116ef15161d16f88b7f2a17348216d35d6->leave($__internal_b18b2fbe6c74d03fa95ba6a6c7b1b8116ef15161d16f88b7f2a17348216d35d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5408da00dd08e0b44fe22d5a02675659cdf35c7335255f2a69de341580d97f9c = $this->env->getExtension("native_profiler");
        $__internal_5408da00dd08e0b44fe22d5a02675659cdf35c7335255f2a69de341580d97f9c->enter($__internal_5408da00dd08e0b44fe22d5a02675659cdf35c7335255f2a69de341580d97f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-4 col-md-offset-4\">
      <h2>用户注册</h2>
      <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\" method=\"post\">
        <div class=\"form-group\">
          <label>用户名</label>
          <input type=\"text\" class=\"form-control\" name=\"username\" value=\"\">
        </div>
        <div class=\"form-group\">
          <label for=\"exampleInputPassword1\">密码</label>
          <input type=\"password\" class=\"form-control\" name=\"password\" value=\"\">
        </div>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\"> 记住密码
          </label>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">注册</button>
      </form>
    </div>
  </div>
</div>

";
        
        $__internal_5408da00dd08e0b44fe22d5a02675659cdf35c7335255f2a69de341580d97f9c->leave($__internal_5408da00dd08e0b44fe22d5a02675659cdf35c7335255f2a69de341580d97f9c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Example:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container">*/
/*   <div class="row">*/
/*     <div class="col-md-4 col-md-offset-4">*/
/*       <h2>用户注册</h2>*/
/*       <form action="{{ path('register') }}" method="post">*/
/*         <div class="form-group">*/
/*           <label>用户名</label>*/
/*           <input type="text" class="form-control" name="username" value="">*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="exampleInputPassword1">密码</label>*/
/*           <input type="password" class="form-control" name="password" value="">*/
/*         </div>*/
/*         <div class="checkbox">*/
/*           <label>*/
/*             <input type="checkbox"> 记住密码*/
/*           </label>*/
/*         </div>*/
/*         <button type="submit" class="btn btn-primary">注册</button>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
