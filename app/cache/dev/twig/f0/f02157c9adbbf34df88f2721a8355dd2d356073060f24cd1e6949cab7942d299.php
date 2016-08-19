<?php

/* AppBundle:User:upload/upload-rank.html.twig */
class __TwigTemplate_2abde1df4d5e3f9bcee3880a837069cfcc52207be87965a4c130b0964b0a7d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:upload/upload-rank.html.twig", 1);
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
        $__internal_d27562e934152773f594f1213a73784fc2fedaaa581df106b781493cf6acd63c = $this->env->getExtension("native_profiler");
        $__internal_d27562e934152773f594f1213a73784fc2fedaaa581df106b781493cf6acd63c->enter($__internal_d27562e934152773f594f1213a73784fc2fedaaa581df106b781493cf6acd63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:upload/upload-rank.html.twig"));

        // line 2
        $context["nav"] = "upload_image";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d27562e934152773f594f1213a73784fc2fedaaa581df106b781493cf6acd63c->leave($__internal_d27562e934152773f594f1213a73784fc2fedaaa581df106b781493cf6acd63c_prof);

    }

    // line 3
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_5f13a59b8dbf3f90b9b7a3dd5d0225d45b55238e682a8584f4facbabb0193bf7 = $this->env->getExtension("native_profiler");
        $__internal_5f13a59b8dbf3f90b9b7a3dd5d0225d45b55238e682a8584f4facbabb0193bf7->enter($__internal_5f13a59b8dbf3f90b9b7a3dd5d0225d45b55238e682a8584f4facbabb0193bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

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
  <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_rank", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">职称证书图片上传</a></li>
  <li role=\"presentation\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_Profile", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">头像上传</a></li>
 </ul>
";
        
        $__internal_5f13a59b8dbf3f90b9b7a3dd5d0225d45b55238e682a8584f4facbabb0193bf7->leave($__internal_5f13a59b8dbf3f90b9b7a3dd5d0225d45b55238e682a8584f4facbabb0193bf7_prof);

    }

    // line 11
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_4416b62828809997c8f4671f8e09fa76f77dffee234bf05fcf38b57f93f94540 = $this->env->getExtension("native_profiler");
        $__internal_4416b62828809997c8f4671f8e09fa76f77dffee234bf05fcf38b57f93f94540->enter($__internal_4416b62828809997c8f4671f8e09fa76f77dffee234bf05fcf38b57f93f94540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

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
        
        $__internal_4416b62828809997c8f4671f8e09fa76f77dffee234bf05fcf38b57f93f94540->leave($__internal_4416b62828809997c8f4671f8e09fa76f77dffee234bf05fcf38b57f93f94540_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:upload/upload-rank.html.twig";
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
/*   <li role="presentation"><a href="{{path('user_upload_IDcard',{id:id})}}">身份证图片上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_education',{id:id})}}">学历证书图片上传</a></li>*/
/*   <li role="presentation" class="active"><a href="{{path('user_upload_rank',{id:id})}}">职称证书图片上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_Profile',{id:id})}}">头像上传</a></li>*/
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
