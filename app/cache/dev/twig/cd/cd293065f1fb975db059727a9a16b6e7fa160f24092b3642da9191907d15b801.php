<?php

/* AppBundle:User:upload/uploadRank.html.twig */
class __TwigTemplate_c0046c635c0d28f0c8b44a943e14229598dc5cc9051b67be3e7d759291d05504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:upload/uploadRank.html.twig", 1);
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
        $__internal_ecb376ecbfb7926cf52631dc9d92732788cd52f5a565e7772920a63aece3e3aa = $this->env->getExtension("native_profiler");
        $__internal_ecb376ecbfb7926cf52631dc9d92732788cd52f5a565e7772920a63aece3e3aa->enter($__internal_ecb376ecbfb7926cf52631dc9d92732788cd52f5a565e7772920a63aece3e3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:upload/uploadRank.html.twig"));

        // line 2
        $context["nav"] = "upload_image";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecb376ecbfb7926cf52631dc9d92732788cd52f5a565e7772920a63aece3e3aa->leave($__internal_ecb376ecbfb7926cf52631dc9d92732788cd52f5a565e7772920a63aece3e3aa_prof);

    }

    // line 3
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f620149bd9baba8f9c4e5fc8e832bead151a0f6195b8e59b7fc138cbd3e9ae4f = $this->env->getExtension("native_profiler");
        $__internal_f620149bd9baba8f9c4e5fc8e832bead151a0f6195b8e59b7fc138cbd3e9ae4f->enter($__internal_f620149bd9baba8f9c4e5fc8e832bead151a0f6195b8e59b7fc138cbd3e9ae4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 4
        echo "<ul class=\"nav nav-tabs\">
  <li role=\"presentation\"><a href=\"";
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
  <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_rank", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">职称证书图片上传</a></li>
 </ul>
";
        
        $__internal_f620149bd9baba8f9c4e5fc8e832bead151a0f6195b8e59b7fc138cbd3e9ae4f->leave($__internal_f620149bd9baba8f9c4e5fc8e832bead151a0f6195b8e59b7fc138cbd3e9ae4f_prof);

    }

    // line 11
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_1b67568a4b83d42d0750a61577f209bac6f243ed9d7178d40592f3ecd9325f8e = $this->env->getExtension("native_profiler");
        $__internal_1b67568a4b83d42d0750a61577f209bac6f243ed9d7178d40592f3ecd9325f8e->enter($__internal_1b67568a4b83d42d0750a61577f209bac6f243ed9d7178d40592f3ecd9325f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_rank", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">上传图片</button>
    ";
        // line 22
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getRankImage", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getRankImage", array(), "method"))) : (""))) {
            // line 23
            echo "      <a href=\"";
            echo $this->env->getExtension('routing')->getPath("file_download", array("fileName" => "imgRank"));
            echo "\" class=\"btn btn-success\">下载</a>
    ";
        }
        // line 25
        echo "</form>
";
        
        $__internal_1b67568a4b83d42d0750a61577f209bac6f243ed9d7178d40592f3ecd9325f8e->leave($__internal_1b67568a4b83d42d0750a61577f209bac6f243ed9d7178d40592f3ecd9325f8e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:upload/uploadRank.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 25,  95 => 23,  93 => 22,  89 => 21,  79 => 14,  75 => 12,  69 => 11,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% set nav = 'upload_image' %}*/
/* {% block content_title %}*/
/* <ul class="nav nav-tabs">*/
/*   <li role="presentation"><a href="{{path('user_upload_Profile',{id:id})}}">头像上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_IDcard',{id:id})}}">身份证图片上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_education',{id:id})}}">学历证书图片上传</a></li>*/
/*   <li role="presentation" class="active"><a href="{{path('user_upload_rank',{id:id})}}">职称证书图片上传</a></li>*/
/*  </ul>*/
/* {% endblock %}*/
/* {% block content_body %}*/
/* <form id="pic-uploader" enctype="multipart/form-data">*/
/*     <div id="preview">*/
/*        <img id="imghead" width=100% height=100% border=0 src="{{asset(imagePath)}}">*/
/*     </div>*/
/*     <input id="fileInput" type="file" required onchange="previewImage(this)" name="image" accept="image/*">*/
/*     <br>*/
/*     <br>*/
/*     <p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>*/
/*     <br>*/
/*     <button id="submit" class="btn btn-success" type="button" data-url="{{ path('user_upload_rank',{id:id}) }}">上传图片</button>*/
/*     {% if app.user.getRankImage()|default() %}*/
/*       <a href="{{ path('file_download', {fileName:'imgRank'}) }}" class="btn btn-success">下载</a>*/
/*     {% endif %}*/
/* </form>*/
/* {% endblock %}*/
/* */
