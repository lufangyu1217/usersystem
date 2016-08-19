<?php

/* AppBundle:User:upload/uploadProfile.html.twig */
class __TwigTemplate_78670c1a101db3b3ed5e79ed93f7c73560686a17c06b784de4567199d60aa359 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:upload/uploadProfile.html.twig", 1);
        $this->blocks = array(
            'content_title' => array($this, 'block_content_title'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_173fe44f02b5d76c78b9dfc1387fcb0c8b1e9acb5a09b6e60ab05ae487010890 = $this->env->getExtension("native_profiler");
        $__internal_173fe44f02b5d76c78b9dfc1387fcb0c8b1e9acb5a09b6e60ab05ae487010890->enter($__internal_173fe44f02b5d76c78b9dfc1387fcb0c8b1e9acb5a09b6e60ab05ae487010890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:upload/uploadProfile.html.twig"));

        // line 2
        $context["nav"] = "upload_image";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_173fe44f02b5d76c78b9dfc1387fcb0c8b1e9acb5a09b6e60ab05ae487010890->leave($__internal_173fe44f02b5d76c78b9dfc1387fcb0c8b1e9acb5a09b6e60ab05ae487010890_prof);

    }

    // line 3
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_3a11d1d2187cd0af235b2a8b9c5e6db02cbced3c93682d716a794dc291e98cab = $this->env->getExtension("native_profiler");
        $__internal_3a11d1d2187cd0af235b2a8b9c5e6db02cbced3c93682d716a794dc291e98cab->enter($__internal_3a11d1d2187cd0af235b2a8b9c5e6db02cbced3c93682d716a794dc291e98cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 4
        echo "<ul class=\"nav nav-tabs\">
  <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_Profile", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">头像上传</a></li>
  <li role=\"presentation\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_IDcard", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">身份证图片上传</a></li>
  <li role=\"presentation\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_education", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">学历证书图片上传</a></li>
  <li role=\"presentation\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_rank", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">职称证书图片上传</a></li>
 </ul>
";
        
        $__internal_3a11d1d2187cd0af235b2a8b9c5e6db02cbced3c93682d716a794dc291e98cab->leave($__internal_3a11d1d2187cd0af235b2a8b9c5e6db02cbced3c93682d716a794dc291e98cab_prof);

    }

    // line 11
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_7a831b1f2c013066d3eed202e6e2357a5477f89f11a5441b93e3c155ec060402 = $this->env->getExtension("native_profiler");
        $__internal_7a831b1f2c013066d3eed202e6e2357a5477f89f11a5441b93e3c155ec060402->enter($__internal_7a831b1f2c013066d3eed202e6e2357a5477f89f11a5441b93e3c155ec060402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 12
        echo "<form id=\"pic-uploader\" enctype=\"multipart/form-data\">
    <div id=\"preview\">
      <img id=\"imghead\" width=100% height=100% border=0 src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["imagePath"]) ? $context["imagePath"] : $this->getContext($context, "imagePath"))), "html", null, true);
        echo "\">
    </div>
    <input id=\"fileInput\" type=\"file\" required onchange=\"previewImage(this)\" name=\"image\" accept=\"image/*\">
    <br>
    <br>
    <p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>
    <br>
    <button id=\"submit\" class=\"btn btn-success\" type=\"button\" data-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_Profile", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">上传图片</button>
</form>
";
        
        $__internal_7a831b1f2c013066d3eed202e6e2357a5477f89f11a5441b93e3c155ec060402->leave($__internal_7a831b1f2c013066d3eed202e6e2357a5477f89f11a5441b93e3c155ec060402_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:upload/uploadProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  79 => 14,  75 => 12,  69 => 11,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% set nav = 'upload_image' %}*/
/* {% block content_title %}*/
/* <ul class="nav nav-tabs">*/
/*   <li role="presentation" class="active"><a href="{{path('user_upload_Profile',{id:id})}}">头像上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_IDcard',{id:id})}}">身份证图片上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_education',{id:id})}}">学历证书图片上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_rank',{id:id})}}">职称证书图片上传</a></li>*/
/*  </ul>*/
/* {% endblock %}*/
/* {% block content_body %}*/
/* <form id="pic-uploader" enctype="multipart/form-data">*/
/*     <div id="preview">*/
/*       <img id="imghead" width=100% height=100% border=0 src="{{asset(imagePath)}}">*/
/*     </div>*/
/*     <input id="fileInput" type="file" required onchange="previewImage(this)" name="image" accept="image/*">*/
/*     <br>*/
/*     <br>*/
/*     <p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>*/
/*     <br>*/
/*     <button id="submit" class="btn btn-success" type="button" data-url="{{ path('user_upload_Profile',{id:id}) }}">上传图片</button>*/
/* </form>*/
/* {% endblock %}*/
/* */
