<?php

/* AppBundle:User:edit/user-family-info.html.twig */
class __TwigTemplate_3b927542d63d10f4ac10b0e754ab542b6b9dfab156a77417125e5985f139a4c3 extends Twig_Template
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
        $__internal_b366395f8f2785e04a918206cece6fe8a0ae35e26f55afc597e4e9d6a2970b40 = $this->env->getExtension("native_profiler");
        $__internal_b366395f8f2785e04a918206cece6fe8a0ae35e26f55afc597e4e9d6a2970b40->enter($__internal_b366395f8f2785e04a918206cece6fe8a0ae35e26f55afc597e4e9d6a2970b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:edit/user-family-info.html.twig"));

        // line 1
        echo "<div>
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["familyMembers"]) ? $context["familyMembers"] : $this->getContext($context, "familyMembers")));
        foreach ($context['_seq'] as $context["_key"] => $context["familyMember"]) {
            // line 3
            echo "  <div class=\"family-member\">
    <div class=\"form-group\">
      <div>
        <input type=\"hidden\" name=\"family[";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "id", array()), "html", null, true);
            echo "][id]\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["familyMember"], "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["familyMember"], "id", array()), 1)) : (1)), "html", null, true);
            echo "\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"member\">称谓:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"form-control member\" type=\"text\" name=\"family[";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute($context["familyMember"], "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["familyMember"], "id", array()), 0)) : (0)), "html", null, true);
            echo "][member]\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["familyMember"], "member", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["familyMember"], "member", array()), "")) : ("")), "html", null, true);
            echo "\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"trueName\">姓名:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"form-control familyName\" type=\"text\" name=\"family[";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "id", array()), "html", null, true);
            echo "][trueName]\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["familyMember"], "trueName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["familyMember"], "trueName", array()), "")) : ("")), "html", null, true);
            echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"age\">年龄:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"form-control age\" type=\"text\" name=\"family[";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "id", array()), "html", null, true);
            echo "][age]\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["familyMember"], "age", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["familyMember"], "age", array()), 0)) : (0)), "html", null, true);
            echo "\">
      </div>
      <label class=\"col-sm-2 control-label\" for=\"job\">工作单位及职务:</label>
      <div class=\"col-sm-3 controls\">
        <input class=\"form-control job\" type=\"text\" name=\"family[";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "id", array()), "html", null, true);
            echo "][job]\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["familyMember"], "job", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["familyMember"], "job", array()), "")) : ("")), "html", null, true);
            echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"phone\">联系电话:</label>
      <div class=\"col-sm-2 controls\">
        <input class=\"form-control familyphone\" type=\"text\" name=\"family[";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["familyMember"], "id", array()), "html", null, true);
            echo "][phone]\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["familyMember"], "phone", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["familyMember"], "phone", array()), "")) : ("")), "html", null, true);
            echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-2 col-sm-offset-8\">
        <button type=\"button\" id=\"delete-family-info\" class=\"btn btn-sm btn-danger delete-family-info\">删除</button>
        <button type=\"button\" class=\"btn btn-sm btn-success add-family-info\">新增</button>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['familyMember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
";
        
        $__internal_b366395f8f2785e04a918206cece6fe8a0ae35e26f55afc597e4e9d6a2970b40->leave($__internal_b366395f8f2785e04a918206cece6fe8a0ae35e26f55afc597e4e9d6a2970b40_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:edit/user-family-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 41,  83 => 30,  72 => 24,  63 => 20,  52 => 14,  43 => 10,  34 => 6,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div>*/
/*   {% for familyMember in familyMembers %}*/
/*   <div class="family-member">*/
/*     <div class="form-group">*/
/*       <div>*/
/*         <input type="hidden" name="family[{{familyMember.id}}][id]" value="{{ familyMember.id |default(1) }}">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="member">称谓:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="form-control member" type="text" name="family[{{familyMember.id|default(0)}}][member]" value="{{ familyMember.member|default('') }}">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="trueName">姓名:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="form-control familyName" type="text" name="family[{{familyMember.id}}][trueName]" value="{{familyMember.trueName|default('') }}">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="age">年龄:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="form-control age" type="text" name="family[{{familyMember.id}}][age]" value="{{familyMember.age|default(0) }}">*/
/*       </div>*/
/*       <label class="col-sm-2 control-label" for="job">工作单位及职务:</label>*/
/*       <div class="col-sm-3 controls">*/
/*         <input class="form-control job" type="text" name="family[{{familyMember.id}}][job]" value="{{familyMember.job|default('') }}">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="phone">联系电话:</label>*/
/*       <div class="col-sm-2 controls">*/
/*         <input class="form-control familyphone" type="text" name="family[{{familyMember.id}}][phone]" value="{{familyMember.phone|default('') }}">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-sm-2 col-sm-offset-8">*/
/*         <button type="button" id="delete-family-info" class="btn btn-sm btn-danger delete-family-info">删除</button>*/
/*         <button type="button" class="btn btn-sm btn-success add-family-info">新增</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
