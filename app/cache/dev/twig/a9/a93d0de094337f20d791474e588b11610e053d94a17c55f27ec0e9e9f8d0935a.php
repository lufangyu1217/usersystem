<?php

/* AppBundle:User:list/list-table.html.twig */
class __TwigTemplate_1be1c524b5e9e0b5c2f906920f55ef784c1d2da6099c6df51a18c58907b16831 extends Twig_Template
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
        $__internal_c66b35834dac46100eebb225c8a98401c0e2157d2a21cb260ea274b2a165bd4a = $this->env->getExtension("native_profiler");
        $__internal_c66b35834dac46100eebb225c8a98401c0e2157d2a21cb260ea274b2a165bd4a->enter($__internal_c66b35834dac46100eebb225c8a98401c0e2157d2a21cb260ea274b2a165bd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:list/list-table.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/util/js/tableSort.js")), "html", null, true);
        echo "
";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('app_asset_helper')->script(array(0 => "links/user/js/sort.js")), "html", null, true);
        echo "
<table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
  <thead>
    <tr>
      <th id=\"sort-number\" role=\"button\">工号&nbsp;<span class=\"glyphicon glyphicon-arrow-up change-glyphicon\"></span></th>
      <th>部门</th>
      <th>姓名</th>
      <th>生日</th>
      <th>入职时间</th>
      <th>性别</th>
      ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isLeader", array(), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method"))) {
            // line 13
            echo "      <th>职称</th>
      <th>职级</th>
      ";
        }
        // line 16
        echo "      <th>学历</th>
      <th>联系方式</th>
      ";
        // line 18
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "off")) {
            // line 19
            echo "      <th>离职时间</th>
      ";
        }
        // line 21
        echo "      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 25
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
            // line 26
            echo "      ";
            $this->loadTemplate("AppBundle:User:list/tr-table.html.twig", "AppBundle:User:list/list-table.html.twig", 26)->display($context);
            // line 27
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
            // line 28
            echo "      <tr class=\"empty\"><td colspan=\"20\">暂无员工记录</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  </tbody>
</table>
";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        
        $__internal_c66b35834dac46100eebb225c8a98401c0e2157d2a21cb260ea274b2a165bd4a->leave($__internal_c66b35834dac46100eebb225c8a98401c0e2157d2a21cb260ea274b2a165bd4a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:list/list-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  103 => 30,  96 => 28,  83 => 27,  80 => 26,  62 => 25,  56 => 21,  52 => 19,  50 => 18,  46 => 16,  41 => 13,  39 => 12,  26 => 2,  22 => 1,);
    }
}
/* {{ script(['links/util/js/tableSort.js']) }}*/
/* {{ script(['links/user/js/sort.js']) }}*/
/* <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*   <thead>*/
/*     <tr>*/
/*       <th id="sort-number" role="button">工号&nbsp;<span class="glyphicon glyphicon-arrow-up change-glyphicon"></span></th>*/
/*       <th>部门</th>*/
/*       <th>姓名</th>*/
/*       <th>生日</th>*/
/*       <th>入职时间</th>*/
/*       <th>性别</th>*/
/*       {% if app.user.isLeader() or app.user.isAdmin() %}*/
/*       <th>职称</th>*/
/*       <th>职级</th>*/
/*       {% endif %}*/
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
/*       {% include 'AppBundle:User:list/tr-table.html.twig' %}*/
/*     {% else %}*/
/*       <tr class="empty"><td colspan="20">暂无员工记录</td></tr>*/
/*     {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/* {{ web_macro.paginator(paginator) }}*/
