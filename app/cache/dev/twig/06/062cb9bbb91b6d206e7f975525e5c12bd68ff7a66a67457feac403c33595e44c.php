<?php

/* AppBundle:user:outjob.html.twig */
class __TwigTemplate_f0d7929a26911ec886fcbaf16ea20e8d08ac902fc7a1181df11b75659d975444 extends Twig_Template
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
        $__internal_3c7e8a446bd78ca2bf32ca448f8c7d17e900350583b13619f8a8e8ce018f090c = $this->env->getExtension("native_profiler");
        $__internal_3c7e8a446bd78ca2bf32ca448f8c7d17e900350583b13619f8a8e8ce018f090c->enter($__internal_3c7e8a446bd78ca2bf32ca448f8c7d17e900350583b13619f8a8e8ce018f090c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:outjob.html.twig"));

        // line 1
        echo "<table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
  <thead>
    <tr>
      <th>工号</th>
      <th>部门</th>
      <th>姓名</th>
      <th>生日</th>
      <th>报道日期</th>
      <th>性别</th>
      <th>职位</th>
      <th>职级</th> 
      <th>学历</th>
      <th>联系方式</th>
      <th>离职时间</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userBasics"]) ? $context["userBasics"] : $this->getContext($context, "userBasics")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["userBasic"]) {
            // line 20
            echo "      ";
            $this->loadTemplate("AppBundle:user:tr-outjob.html.twig", "AppBundle:user:outjob.html.twig", 20)->display(array_merge($context, array("userBasic" => $context["userBasic"], "user" => $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["userBasic"], "userId", array()), array(), "array"))));
            // line 21
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userBasic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  </tbody>
</table>";
        
        $__internal_3c7e8a446bd78ca2bf32ca448f8c7d17e900350583b13619f8a8e8ce018f090c->leave($__internal_3c7e8a446bd78ca2bf32ca448f8c7d17e900350583b13619f8a8e8ce018f090c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user:outjob.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  62 => 21,  59 => 20,  42 => 19,  22 => 1,);
    }
}
/* <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*   <thead>*/
/*     <tr>*/
/*       <th>工号</th>*/
/*       <th>部门</th>*/
/*       <th>姓名</th>*/
/*       <th>生日</th>*/
/*       <th>报道日期</th>*/
/*       <th>性别</th>*/
/*       <th>职位</th>*/
/*       <th>职级</th> */
/*       <th>学历</th>*/
/*       <th>联系方式</th>*/
/*       <th>离职时间</th>*/
/*       <th>操作</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% for userBasic in userBasics %}*/
/*       {% include 'AppBundle:user:tr-outjob.html.twig' with {userBasic:userBasic,user:users[userBasic.userId]} %}*/
/*     {% endfor %}*/
/*   </tbody>*/
/* </table>*/
