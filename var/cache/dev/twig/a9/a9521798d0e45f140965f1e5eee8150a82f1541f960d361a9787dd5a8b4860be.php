<?php

/* AppBundle:Example:index.html.twig */
class __TwigTemplate_107c447291da2f12d68950ec1117d8d7efafa7e765963a4df886bd2c699fc0ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Example:index.html.twig", 1);
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
        $__internal_143cca3d3e2d0c27f29c475b51075abfca5a6e753694e01802c0fa0001d0b857 = $this->env->getExtension("native_profiler");
        $__internal_143cca3d3e2d0c27f29c475b51075abfca5a6e753694e01802c0fa0001d0b857->enter($__internal_143cca3d3e2d0c27f29c475b51075abfca5a6e753694e01802c0fa0001d0b857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Example:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_143cca3d3e2d0c27f29c475b51075abfca5a6e753694e01802c0fa0001d0b857->leave($__internal_143cca3d3e2d0c27f29c475b51075abfca5a6e753694e01802c0fa0001d0b857_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6aabbbe2e066a70db51e0dfa78b3469126e07a738050ecc3570173eda407a05c = $this->env->getExtension("native_profiler");
        $__internal_6aabbbe2e066a70db51e0dfa78b3469126e07a738050ecc3570173eda407a05c->enter($__internal_6aabbbe2e066a70db51e0dfa78b3469126e07a738050ecc3570173eda407a05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "app/js/example.js")), "html", null, true);
        echo "

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        <h1 class=\"text-center\">Example</h1>
        <form class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">当前登陆用户</label>
            <div class=\"col-sm-10\">
              <p class=\"form-control-static\">
                ";
        // line 15
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 16
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " ! <a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">退出</a>
                ";
        } else {
            // line 18
            echo "                  未登陆
                ";
        }
        // line 20
        echo "              </p>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">登陆演示</label>
            <div class=\"col-sm-10\">
              <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"btn btn-sm btn-default\">登陆</a>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">注册演示</label>
            <div class=\"col-sm-10\">
              <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\" class=\"btn btn-sm btn-default\">注册</a>
            </div>
          </div>
          
        </form>

      </div>
    </div>



  </div>


";
        
        $__internal_6aabbbe2e066a70db51e0dfa78b3469126e07a738050ecc3570173eda407a05c->leave($__internal_6aabbbe2e066a70db51e0dfa78b3469126e07a738050ecc3570173eda407a05c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Example:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  78 => 27,  69 => 20,  65 => 18,  57 => 16,  55 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*   {{ script(['app/js/example.js']) }}*/
/* */
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-8 col-md-offset-2">*/
/*         <h1 class="text-center">Example</h1>*/
/*         <form class="form-horizontal">*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">当前登陆用户</label>*/
/*             <div class="col-sm-10">*/
/*               <p class="form-control-static">*/
/*                 {% if app.user %}*/
/*                   {{ app.user.username }} ! <a href="{{ path('logout') }}">退出</a>*/
/*                 {% else %}*/
/*                   未登陆*/
/*                 {% endif %}*/
/*               </p>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">登陆演示</label>*/
/*             <div class="col-sm-10">*/
/*               <a href="{{ path('login') }}" class="btn btn-sm btn-default">登陆</a>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">注册演示</label>*/
/*             <div class="col-sm-10">*/
/*               <a href="{{ path('register') }}" class="btn btn-sm btn-default">注册</a>*/
/*             </div>*/
/*           </div>*/
/*           */
/*         </form>*/
/* */
/*       </div>*/
/*     </div>*/
/* */
/* */
/* */
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
