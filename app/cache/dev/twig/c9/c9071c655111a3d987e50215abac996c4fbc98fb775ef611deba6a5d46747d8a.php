<?php

/* AppBundle:User:change-role-modal.html.twig */
class __TwigTemplate_3c6ae1f8a6fc52575715b918e86f310bcf71701d5d8ba093fb2ce09e628c1fb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:change-role-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::modal-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b4c9acb8a0be67defba81733bf5d3986660fed05f0bac21b34d835da002566f = $this->env->getExtension("native_profiler");
        $__internal_9b4c9acb8a0be67defba81733bf5d3986660fed05f0bac21b34d835da002566f->enter($__internal_9b4c9acb8a0be67defba81733bf5d3986660fed05f0bac21b34d835da002566f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:change-role-modal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b4c9acb8a0be67defba81733bf5d3986660fed05f0bac21b34d835da002566f->leave($__internal_9b4c9acb8a0be67defba81733bf5d3986660fed05f0bac21b34d835da002566f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4329b32eba5ffd1eaecd3efc3991804e73f25615b30f5e599c5c27476bc16dee = $this->env->getExtension("native_profiler");
        $__internal_4329b32eba5ffd1eaecd3efc3991804e73f25615b30f5e599c5c27476bc16dee->enter($__internal_4329b32eba5ffd1eaecd3efc3991804e73f25615b30f5e599c5c27476bc16dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "设置用户组";
        
        $__internal_4329b32eba5ffd1eaecd3efc3991804e73f25615b30f5e599c5c27476bc16dee->leave($__internal_4329b32eba5ffd1eaecd3efc3991804e73f25615b30f5e599c5c27476bc16dee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_16938b39d9798fdbf615ec95a3d3353c1a8cc3ac16bef3b30816a38887c8ea5c = $this->env->getExtension("native_profiler");
        $__internal_16938b39d9798fdbf615ec95a3d3353c1a8cc3ac16bef3b30816a38887c8ea5c->enter($__internal_16938b39d9798fdbf615ec95a3d3353c1a8cc3ac16bef3b30816a38887c8ea5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <form method='post'  class=\"form-group \" >
    <div class=\"checkboxs\">
      <label>
        <input type=\"checkbox\" name=\"roles[]\" value=\"ROLE_USER\" ";
        // line 9
        if (twig_in_filter("ROLE_USER", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            echo "checked=\"checked\"";
        }
        echo ">普通员工
      </label>
      <label>
        <input type=\"checkbox\" name=\"roles[]\" value=\"ROLE_LEADER\" ";
        // line 12
        if (twig_in_filter("ROLE_LEADER", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            echo "checked=\"checked\"";
        }
        echo ">部门领导
      </label>
      <label>
        <input type=\"checkbox\" name=\"roles[]\" value=\"ROLE_ADMIN\" ";
        // line 15
        if (twig_in_filter("ROLE_ADMIN", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            echo "checked=\"checked\"";
        }
        echo ">管理员
      </label>
    </div>
";
        
        $__internal_16938b39d9798fdbf615ec95a3d3353c1a8cc3ac16bef3b30816a38887c8ea5c->leave($__internal_16938b39d9798fdbf615ec95a3d3353c1a8cc3ac16bef3b30816a38887c8ea5c_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6fb07d88c5e445540cca26145f4565f34d1179cb831a0449e59ae1fd5550e9c3 = $this->env->getExtension("native_profiler");
        $__internal_6fb07d88c5e445540cca26145f4565f34d1179cb831a0449e59ae1fd5550e9c3->enter($__internal_6fb07d88c5e445540cca26145f4565f34d1179cb831a0449e59ae1fd5550e9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "  <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">关闭</button>
  <button type=\"button\" class=\"btn btn-default change-role\" data-url=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_role_change", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">确认
  </button>
    </form>

  <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("links/user/js/change-role.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6fb07d88c5e445540cca26145f4565f34d1179cb831a0449e59ae1fd5550e9c3->leave($__internal_6fb07d88c5e445540cca26145f4565f34d1179cb831a0449e59ae1fd5550e9c3_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:change-role-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  97 => 22,  94 => 21,  88 => 20,  75 => 15,  67 => 12,  59 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}设置用户组{% endblock %}*/
/* */
/* {% block body %}*/
/*   <form method='post'  class="form-group " >*/
/*     <div class="checkboxs">*/
/*       <label>*/
/*         <input type="checkbox" name="roles[]" value="ROLE_USER" {% if 'ROLE_USER' in user.roles %}checked="checked"{% endif %}>普通员工*/
/*       </label>*/
/*       <label>*/
/*         <input type="checkbox" name="roles[]" value="ROLE_LEADER" {% if 'ROLE_LEADER' in user.roles %}checked="checked"{% endif %}>部门领导*/
/*       </label>*/
/*       <label>*/
/*         <input type="checkbox" name="roles[]" value="ROLE_ADMIN" {% if 'ROLE_ADMIN' in user.roles %}checked="checked"{% endif %}>管理员*/
/*       </label>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>*/
/*   <button type="button" class="btn btn-default change-role" data-url="{{path('admin_user_role_change',{id:user.id})}}">确认*/
/*   </button>*/
/*     </form>*/
/* */
/*   <script type="text/javascript" src="{{ asset('links/user/js/change-role.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* */
