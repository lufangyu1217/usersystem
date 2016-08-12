<?php

/* AppBundle:User/list-user:list-table.html.twig */
class __TwigTemplate_97f61a59e08074b3b92cd7076b818d9ecd0da07befaf1f7cee7818e46c09c77f extends Twig_Template
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
        $__internal_d4f147724b2c2e14d738f71c8e7cd0a2f95faa27394bb4e51f0f130dbf69d029 = $this->env->getExtension("native_profiler");
        $__internal_d4f147724b2c2e14d738f71c8e7cd0a2f95faa27394bb4e51f0f130dbf69d029->enter($__internal_d4f147724b2c2e14d738f71c8e7cd0a2f95faa27394bb4e51f0f130dbf69d029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User/list-user:list-table.html.twig"));

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
      <th>职称</th>
      <th>职级</th>
      <th>学历</th>
      <th>联系方式</th>
      ";
        // line 16
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "off")) {
            // line 17
            echo "      <th>离职时间</th>
      ";
        }
        // line 19
        echo "      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 23
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
            // line 24
            echo "      ";
            $this->loadTemplate("AppBundle:User/list-user:tr-table.html.twig", "AppBundle:User/list-user:list-table.html.twig", 24)->display($context);
            // line 25
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
            // line 26
            echo "      <tr class=\"empty\"><td colspan=\"20\">暂无员工记录</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  </tbody>
</table>";
        
        $__internal_d4f147724b2c2e14d738f71c8e7cd0a2f95faa27394bb4e51f0f130dbf69d029->leave($__internal_d4f147724b2c2e14d738f71c8e7cd0a2f95faa27394bb4e51f0f130dbf69d029_prof);

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
        return array (  96 => 28,  89 => 26,  76 => 25,  73 => 24,  55 => 23,  49 => 19,  45 => 17,  43 => 16,  26 => 2,  22 => 1,);
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
