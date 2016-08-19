<?php

/* AppBundle:User:upload/upload-image.html.twig */
class __TwigTemplate_a0c6bab68d263d2546a75cc349bfb0e34bd798517730a8e0a689d75ec668350a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:upload/upload-image.html.twig", 1);
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
        $__internal_a0a186fb9877b846353d412dfbd2b74f91ff48eff8a139ba7ae4f20d490a987d = $this->env->getExtension("native_profiler");
        $__internal_a0a186fb9877b846353d412dfbd2b74f91ff48eff8a139ba7ae4f20d490a987d->enter($__internal_a0a186fb9877b846353d412dfbd2b74f91ff48eff8a139ba7ae4f20d490a987d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:upload/upload-image.html.twig"));

        // line 2
        $context["nav"] = "upload_image";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0a186fb9877b846353d412dfbd2b74f91ff48eff8a139ba7ae4f20d490a987d->leave($__internal_a0a186fb9877b846353d412dfbd2b74f91ff48eff8a139ba7ae4f20d490a987d_prof);

    }

    // line 3
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_a700aa170cb1997d4f3d44b2c7bcdbd2f090e6f46507e97eb55915649852b557 = $this->env->getExtension("native_profiler");
        $__internal_a700aa170cb1997d4f3d44b2c7bcdbd2f090e6f46507e97eb55915649852b557->enter($__internal_a700aa170cb1997d4f3d44b2c7bcdbd2f090e6f46507e97eb55915649852b557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 4
        echo "<ul class=\"nav nav-tabs\">
  <li role=\"presentation\" ";
        // line 5
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "Profile")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => "Profile")), "html", null, true);
        echo "\">头像上传</a></li>
  <li role=\"presentation\" ";
        // line 6
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "FrontIDcard")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => "FrontIDcard")), "html", null, true);
        echo "\">身份证图片上传</a></li>
  <li role=\"presentation\" ";
        // line 7
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "Education")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => "Education")), "html", null, true);
        echo "\">学历证书图片上传</a></li>
  <li role=\"presentation\" ";
        // line 8
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "Rank")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => "Rank")), "html", null, true);
        echo "\">职称证书图片上传</a></li>
 </ul>
";
        
        $__internal_a700aa170cb1997d4f3d44b2c7bcdbd2f090e6f46507e97eb55915649852b557->leave($__internal_a700aa170cb1997d4f3d44b2c7bcdbd2f090e6f46507e97eb55915649852b557_prof);

    }

    // line 11
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_809a7d5feb177824814b7f79b72c335531545ed122ef84ab21d8b6f2db389ca6 = $this->env->getExtension("native_profiler");
        $__internal_809a7d5feb177824814b7f79b72c335531545ed122ef84ab21d8b6f2db389ca6->enter($__internal_809a7d5feb177824814b7f79b72c335531545ed122ef84ab21d8b6f2db389ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 12
        echo "<form id=\"pic-uploader\" enctype=\"multipart/form-data\">
\t<div id=\"preview\">
    <img id=\"imghead\" width=100% height=100% border=0 src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["imagePath"]) ? $context["imagePath"] : $this->getContext($context, "imagePath"))), "html", null, true);
        echo "\">
\t</div>
\t<input id=\"fileInput\" type=\"file\" required onchange=\"previewImage(this)\" name=\"image\" accept=\"image/*\">
\t<br>
\t<br>
\t<p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>
\t<br>
\t<button id=\"submit\" class=\"btn btn-success\" type=\"button\" data-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
        echo "\">上传图片</button>
  ";
        // line 22
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getEducationImage", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getEducationImage", array(), "method"))) : (""))) {
            // line 23
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("file_download", array("fileName" => "imgEducation"));
            echo "\" class=\"btn btn-success\">下载</a>
  ";
        }
        // line 25
        echo "</form>
";
        
        $__internal_809a7d5feb177824814b7f79b72c335531545ed122ef84ab21d8b6f2db389ca6->leave($__internal_809a7d5feb177824814b7f79b72c335531545ed122ef84ab21d8b6f2db389ca6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:upload/upload-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  111 => 23,  109 => 22,  105 => 21,  95 => 14,  91 => 12,  85 => 11,  71 => 8,  63 => 7,  55 => 6,  47 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% set nav = 'upload_image' %}*/
/* {% block content_title %}*/
/* <ul class="nav nav-tabs">*/
/*   <li role="presentation" {% if type == 'Profile'%}class="active"{% endif %}><a href="{{path('user_upload',{id:id,type:'Profile'})}}">头像上传</a></li>*/
/*   <li role="presentation" {% if type == 'FrontIDcard'%}class="active"{% endif %}><a href="{{path('user_upload',{id:id,type:'FrontIDcard'})}}">身份证图片上传</a></li>*/
/*   <li role="presentation" {% if type == 'Education'%}class="active"{% endif %}><a href="{{path('user_upload',{id:id,type:'Education'})}}">学历证书图片上传</a></li>*/
/*   <li role="presentation" {% if type == 'Rank'%}class="active"{% endif %}><a href="{{path('user_upload',{id:id,type:'Rank'})}}">职称证书图片上传</a></li>*/
/*  </ul>*/
/* {% endblock %}*/
/* {% block content_body %}*/
/* <form id="pic-uploader" enctype="multipart/form-data">*/
/* 	<div id="preview">*/
/*     <img id="imghead" width=100% height=100% border=0 src="{{asset(imagePath)}}">*/
/* 	</div>*/
/* 	<input id="fileInput" type="file" required onchange="previewImage(this)" name="image" accept="image/*">*/
/* 	<br>*/
/* 	<br>*/
/* 	<p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>*/
/* 	<br>*/
/* 	<button id="submit" class="btn btn-success" type="button" data-url="{{ path('user_upload',{id:id,type:type}) }}">上传图片</button>*/
/*   {% if app.user.getEducationImage()|default() %}*/
/*     <a href="{{ path('file_download', {fileName:'imgEducation'}) }}" class="btn btn-success">下载</a>*/
/*   {% endif %}*/
/* </form>*/
/* {% endblock %}*/
/* */
