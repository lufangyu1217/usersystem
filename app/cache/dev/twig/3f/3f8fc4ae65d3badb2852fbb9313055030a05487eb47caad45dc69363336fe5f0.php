<?php

/* AppBundle::modal-base.html.twig */
class __TwigTemplate_a38fbb2707e4d72132f7f9d598fbac54062acc8dd6e42d6a452c7f287f677ec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0441f498435b4f1b2e9eaaadaab94b527be0c01c3bcdab6b76aa2682a711d16 = $this->env->getExtension("native_profiler");
        $__internal_d0441f498435b4f1b2e9eaaadaab94b527be0c01c3bcdab6b76aa2682a711d16->enter($__internal_d0441f498435b4f1b2e9eaaadaab94b527be0c01c3bcdab6b76aa2682a711d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::modal-base.html.twig"));

        // line 1
        echo "<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\"
      data-dismiss=\"modal\" aria-hidden=\"true\">
      &times;
      </button>
    <h4 class=\"modal-title\" id=\"myModalLabel\">
      ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    </h4>
    </div>

    <div class=\"modal-body\">
      ";
        // line 14
        $this->displayBlock('main', $context, $blocks);
        // line 17
        echo "      <div class=\"modal-footer\">
        ";
        // line 18
        $this->displayBlock('footer', $context, $blocks);
        // line 20
        echo "        <button type=\"button\" class=\"btn btn-default\"
          data-dismiss=\"modal\">关闭
        </button>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_d0441f498435b4f1b2e9eaaadaab94b527be0c01c3bcdab6b76aa2682a711d16->leave($__internal_d0441f498435b4f1b2e9eaaadaab94b527be0c01c3bcdab6b76aa2682a711d16_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa10b73cd500e9f74dbcfa6cc608c90970b20628f2e8e39670e7dbfe4c4ca87e = $this->env->getExtension("native_profiler");
        $__internal_aa10b73cd500e9f74dbcfa6cc608c90970b20628f2e8e39670e7dbfe4c4ca87e->enter($__internal_aa10b73cd500e9f74dbcfa6cc608c90970b20628f2e8e39670e7dbfe4c4ca87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_aa10b73cd500e9f74dbcfa6cc608c90970b20628f2e8e39670e7dbfe4c4ca87e->leave($__internal_aa10b73cd500e9f74dbcfa6cc608c90970b20628f2e8e39670e7dbfe4c4ca87e_prof);

    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        $__internal_f50f2cab63002544dd3900f0ead02f8c415e7971f9b99832ad2ff60747614eee = $this->env->getExtension("native_profiler");
        $__internal_f50f2cab63002544dd3900f0ead02f8c415e7971f9b99832ad2ff60747614eee->enter($__internal_f50f2cab63002544dd3900f0ead02f8c415e7971f9b99832ad2ff60747614eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 15
        echo "        <div class=\"modal-body\">";
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
      ";
        
        $__internal_f50f2cab63002544dd3900f0ead02f8c415e7971f9b99832ad2ff60747614eee->leave($__internal_f50f2cab63002544dd3900f0ead02f8c415e7971f9b99832ad2ff60747614eee_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_cf42617e49d28cbed6d76ee1c98483ff376550f6fdab0c3497d86ae848eb479b = $this->env->getExtension("native_profiler");
        $__internal_cf42617e49d28cbed6d76ee1c98483ff376550f6fdab0c3497d86ae848eb479b->enter($__internal_cf42617e49d28cbed6d76ee1c98483ff376550f6fdab0c3497d86ae848eb479b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf42617e49d28cbed6d76ee1c98483ff376550f6fdab0c3497d86ae848eb479b->leave($__internal_cf42617e49d28cbed6d76ee1c98483ff376550f6fdab0c3497d86ae848eb479b_prof);

    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        $__internal_afff00f357e0dd7c5286aa230cd0ede8e88a9d39d9136be812362da29b26d542 = $this->env->getExtension("native_profiler");
        $__internal_afff00f357e0dd7c5286aa230cd0ede8e88a9d39d9136be812362da29b26d542->enter($__internal_afff00f357e0dd7c5286aa230cd0ede8e88a9d39d9136be812362da29b26d542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 19
        echo "        ";
        
        $__internal_afff00f357e0dd7c5286aa230cd0ede8e88a9d39d9136be812362da29b26d542->leave($__internal_afff00f357e0dd7c5286aa230cd0ede8e88a9d39d9136be812362da29b26d542_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::modal-base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 19,  102 => 18,  82 => 15,  76 => 14,  65 => 9,  51 => 20,  49 => 18,  46 => 17,  44 => 14,  38 => 10,  36 => 9,  26 => 1,);
    }
}
/* <div class="modal-dialog">*/
/*   <div class="modal-content">*/
/*     <div class="modal-header">*/
/*       <button type="button" class="close"*/
/*       data-dismiss="modal" aria-hidden="true">*/
/*       &times;*/
/*       </button>*/
/*     <h4 class="modal-title" id="myModalLabel">*/
/*       {% block title %}{% endblock %}*/
/*     </h4>*/
/*     </div>*/
/* */
/*     <div class="modal-body">*/
/*       {% block main %}*/
/*         <div class="modal-body">{% block body %}{% endblock %}</div>*/
/*       {% endblock %}*/
/*       <div class="modal-footer">*/
/*         {% block footer %}*/
/*         {% endblock %}*/
/*         <button type="button" class="btn btn-default"*/
/*           data-dismiss="modal">关闭*/
/*         </button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
