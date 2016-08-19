<?php

/* AppBundle::modal-base.html.twig */
class __TwigTemplate_ab210d262b52bdb73ae8402c41d5f086bcc70c36cd0db44c442dad3a33fe0ac2 extends Twig_Template
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
        $__internal_67aefddeb48615e12cd8a3675b68fa0ada5841ac7b91cbaee045e4e34554fc62 = $this->env->getExtension("native_profiler");
        $__internal_67aefddeb48615e12cd8a3675b68fa0ada5841ac7b91cbaee045e4e34554fc62->enter($__internal_67aefddeb48615e12cd8a3675b68fa0ada5841ac7b91cbaee045e4e34554fc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::modal-base.html.twig"));

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
        echo "      </div>
    </div>
  </div>
</div>
";
        
        $__internal_67aefddeb48615e12cd8a3675b68fa0ada5841ac7b91cbaee045e4e34554fc62->leave($__internal_67aefddeb48615e12cd8a3675b68fa0ada5841ac7b91cbaee045e4e34554fc62_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_95e32b11e4650a45e461337fb7a0cf4343ee3b98915cb8adb0ef02fce0a5b4f5 = $this->env->getExtension("native_profiler");
        $__internal_95e32b11e4650a45e461337fb7a0cf4343ee3b98915cb8adb0ef02fce0a5b4f5->enter($__internal_95e32b11e4650a45e461337fb7a0cf4343ee3b98915cb8adb0ef02fce0a5b4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_95e32b11e4650a45e461337fb7a0cf4343ee3b98915cb8adb0ef02fce0a5b4f5->leave($__internal_95e32b11e4650a45e461337fb7a0cf4343ee3b98915cb8adb0ef02fce0a5b4f5_prof);

    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        $__internal_3ca74ed413aee1a17f0046f3768cd4b07aa6283760d795478106fd69680e58dc = $this->env->getExtension("native_profiler");
        $__internal_3ca74ed413aee1a17f0046f3768cd4b07aa6283760d795478106fd69680e58dc->enter($__internal_3ca74ed413aee1a17f0046f3768cd4b07aa6283760d795478106fd69680e58dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 15
        echo "        <div class=\"modal-body\">";
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
      ";
        
        $__internal_3ca74ed413aee1a17f0046f3768cd4b07aa6283760d795478106fd69680e58dc->leave($__internal_3ca74ed413aee1a17f0046f3768cd4b07aa6283760d795478106fd69680e58dc_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_196adf6f3f71db40ed8f736ae0e34eaec686bd1054e450212c67b4e9007b482d = $this->env->getExtension("native_profiler");
        $__internal_196adf6f3f71db40ed8f736ae0e34eaec686bd1054e450212c67b4e9007b482d->enter($__internal_196adf6f3f71db40ed8f736ae0e34eaec686bd1054e450212c67b4e9007b482d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_196adf6f3f71db40ed8f736ae0e34eaec686bd1054e450212c67b4e9007b482d->leave($__internal_196adf6f3f71db40ed8f736ae0e34eaec686bd1054e450212c67b4e9007b482d_prof);

    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d5305e0fdfd2c6f1f389c3ba63d79e4c73ff0bdfd7edcc8ba9a3c6eac90625b9 = $this->env->getExtension("native_profiler");
        $__internal_d5305e0fdfd2c6f1f389c3ba63d79e4c73ff0bdfd7edcc8ba9a3c6eac90625b9->enter($__internal_d5305e0fdfd2c6f1f389c3ba63d79e4c73ff0bdfd7edcc8ba9a3c6eac90625b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 19
        echo "        ";
        
        $__internal_d5305e0fdfd2c6f1f389c3ba63d79e4c73ff0bdfd7edcc8ba9a3c6eac90625b9->leave($__internal_d5305e0fdfd2c6f1f389c3ba63d79e4c73ff0bdfd7edcc8ba9a3c6eac90625b9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::modal-base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 19,  99 => 18,  79 => 15,  73 => 14,  62 => 9,  51 => 20,  49 => 18,  46 => 17,  44 => 14,  38 => 10,  36 => 9,  26 => 1,);
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
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
