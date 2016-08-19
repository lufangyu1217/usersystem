<?php

/* AppBundle:User:upload/upload-profile.html.twig */
class __TwigTemplate_8936f65582c2ebe6035dff075b91803542c8ae611fcab2071230952eda3b390a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:upload/upload-profile.html.twig", 1);
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
        $__internal_7afb1fe0941b246695db4cd61a1569e9a72a9bfb6c101768d185d9dc1b00cc41 = $this->env->getExtension("native_profiler");
        $__internal_7afb1fe0941b246695db4cd61a1569e9a72a9bfb6c101768d185d9dc1b00cc41->enter($__internal_7afb1fe0941b246695db4cd61a1569e9a72a9bfb6c101768d185d9dc1b00cc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:upload/upload-profile.html.twig"));

        // line 2
        $context["nav"] = "upload_image";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7afb1fe0941b246695db4cd61a1569e9a72a9bfb6c101768d185d9dc1b00cc41->leave($__internal_7afb1fe0941b246695db4cd61a1569e9a72a9bfb6c101768d185d9dc1b00cc41_prof);

    }

    // line 3
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c7948c6a309b61c3124c0bd70af775d6f7a567fa8e70fdaaa1f26b11b9b1203e = $this->env->getExtension("native_profiler");
        $__internal_c7948c6a309b61c3124c0bd70af775d6f7a567fa8e70fdaaa1f26b11b9b1203e->enter($__internal_c7948c6a309b61c3124c0bd70af775d6f7a567fa8e70fdaaa1f26b11b9b1203e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 4
        echo "<ul class=\"nav nav-tabs\">
  <li role=\"presentation\"><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_IDcard", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">身份证图片上传</a></li>
  <li role=\"presentation\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_education", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">学历证书图片上传</a></li>
  <li role=\"presentation\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_rank", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">职称证书图片上传</a></li>
  <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_Profile", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">头像上传</a></li>
 </ul>
";
        
        $__internal_c7948c6a309b61c3124c0bd70af775d6f7a567fa8e70fdaaa1f26b11b9b1203e->leave($__internal_c7948c6a309b61c3124c0bd70af775d6f7a567fa8e70fdaaa1f26b11b9b1203e_prof);

    }

    // line 11
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_0c57949f62be4c06359cf53052e9a5e9ac55d24a1890a13f1bc0159a6681c5cf = $this->env->getExtension("native_profiler");
        $__internal_0c57949f62be4c06359cf53052e9a5e9ac55d24a1890a13f1bc0159a6681c5cf->enter($__internal_0c57949f62be4c06359cf53052e9a5e9ac55d24a1890a13f1bc0159a6681c5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

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
        
        $__internal_0c57949f62be4c06359cf53052e9a5e9ac55d24a1890a13f1bc0159a6681c5cf->leave($__internal_0c57949f62be4c06359cf53052e9a5e9ac55d24a1890a13f1bc0159a6681c5cf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:upload/upload-profile.html.twig";
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
/*   <li role="presentation"><a href="{{path('user_upload_IDcard',{id:id})}}">身份证图片上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_education',{id:id})}}">学历证书图片上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_rank',{id:id})}}">职称证书图片上传</a></li>*/
/*   <li role="presentation" class="active"><a href="{{path('user_upload_Profile',{id:id})}}">头像上传</a></li>*/
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
