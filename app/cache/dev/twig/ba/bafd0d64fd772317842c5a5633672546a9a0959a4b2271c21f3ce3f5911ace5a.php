<?php

/* AppBundle:User/list-user:list-table.html.twig */
class __TwigTemplate_5cb6a6412bf6a57e570b2cee74eb51233f82bf1eb3f9435fc39564115f8ff01c extends Twig_Template
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
        $__internal_53d26cc4b6df7eaa396d3fae4eaf6da1917475f5af6603c3dd5ffd7f4c40fa42 = $this->env->getExtension("native_profiler");
        $__internal_53d26cc4b6df7eaa396d3fae4eaf6da1917475f5af6603c3dd5ffd7f4c40fa42->enter($__internal_53d26cc4b6df7eaa396d3fae4eaf6da1917475f5af6603c3dd5ffd7f4c40fa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User/list-user:list-table.html.twig"));

        // line 1
        echo "<table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
  <thead>
    <tr>
      <th id=\"sort-number\" role=\"button\">工号&nbsp;<span class=\"glyphicon glyphicon-arrow-up change-glyphicon\"></span></th>
      <th>部门</th>
      <th>姓名</th>
      <th>生日</th>
      <th>入职时间</th>
      <th>性别</th>
      <th>职称</th>
      <th>职级</th>
      <th>学历</th>
      <th>联系方式</th>
      ";
        // line 14
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "off")) {
            // line 15
            echo "      <th>离职时间</th>
      ";
        }
        // line 17
        echo "      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "      ";
            $this->loadTemplate("AppBundle:User/list-user:tr-table.html.twig", "AppBundle:User/list-user:list-table.html.twig", 22)->display($context);
            // line 23
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 24
            echo "      <tr class=\"empty\"><td colspan=\"20\">暂无员工记录</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </tbody>
</table>";
        
        $__internal_53d26cc4b6df7eaa396d3fae4eaf6da1917475f5af6603c3dd5ffd7f4c40fa42->leave($__internal_53d26cc4b6df7eaa396d3fae4eaf6da1917475f5af6603c3dd5ffd7f4c40fa42_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User/list-user:list-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  83 => 24,  70 => 23,  67 => 22,  49 => 21,  43 => 17,  39 => 15,  37 => 14,  22 => 1,);
    }
}
/* <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*   <thead>*/
/*     <tr>*/
/*       <th id="sort-number" role="button">工号&nbsp;<span class="glyphicon glyphicon-arrow-up change-glyphicon"></span></th>*/
/*       <th>部门</th>*/
/*       <th>姓名</th>*/
/*       <th>生日</th>*/
/*       <th>入职时间</th>*/
/*       <th>性别</th>*/
/*       <th>职称</th>*/
/*       <th>职级</th>*/
/*       <th>学历</th>*/
/*       <th>联系方式</th>*/
/*       {% if status == 'off' %}*/
/*       <th>离职时间</th>*/
/*       {% endif %}*/
/*       <th>操作</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% for user in users %}*/
/*       {% include 'AppBundle:User/list-user:tr-table.html.twig' %}*/
/*     {% else %}*/
/*       <tr class="empty"><td colspan="20">暂无员工记录</td></tr>*/
/*     {% endfor %}*/
/*   </tbody>*/
/* </table>*/
