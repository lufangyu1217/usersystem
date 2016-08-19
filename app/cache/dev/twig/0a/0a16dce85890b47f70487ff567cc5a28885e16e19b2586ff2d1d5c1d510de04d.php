<?php

/* AppBundle:User:upload/upload-images.html.twig */
class __TwigTemplate_aa011ed60fcf54c00fd47f4b98ed14bce97e863b11ff3892b5f1d9052c28b9ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:upload/upload-images.html.twig", 1);
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
        $__internal_1e4c8109c530d0a5fafcd1f3afb019ce52430e9dc1c15a1a615176d399ed9de4 = $this->env->getExtension("native_profiler");
        $__internal_1e4c8109c530d0a5fafcd1f3afb019ce52430e9dc1c15a1a615176d399ed9de4->enter($__internal_1e4c8109c530d0a5fafcd1f3afb019ce52430e9dc1c15a1a615176d399ed9de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:upload/upload-images.html.twig"));

        // line 3
        $context["nav"] = "upload_image";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e4c8109c530d0a5fafcd1f3afb019ce52430e9dc1c15a1a615176d399ed9de4->leave($__internal_1e4c8109c530d0a5fafcd1f3afb019ce52430e9dc1c15a1a615176d399ed9de4_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c8615976d3c03894b653ca1165b817da847f64b71871205745da413467c4e3a4 = $this->env->getExtension("native_profiler");
        $__internal_c8615976d3c03894b653ca1165b817da847f64b71871205745da413467c4e3a4->enter($__internal_c8615976d3c03894b653ca1165b817da847f64b71871205745da413467c4e3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 6
        echo "<ul class=\"nav nav-tabs\">
  <li role=\"presentation\" ";
        // line 7
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "Profile")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => "Profile")), "html", null, true);
        echo "\">头像上传</a></li>
  <li role=\"presentation\" ";
        // line 8
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "FrontIDcard")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => "FrontIDcard")), "html", null, true);
        echo "\">身份证图片上传</a></li>
  <li role=\"presentation\" ";
        // line 9
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "Education")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => "Education")), "html", null, true);
        echo "\">学历证书图片上传</a></li>
  <li role=\"presentation\" ";
        // line 10
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "Rank")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => "Rank")), "html", null, true);
        echo "\">职称证书图片上传</a></li>
 </ul>
";
        
        $__internal_c8615976d3c03894b653ca1165b817da847f64b71871205745da413467c4e3a4->leave($__internal_c8615976d3c03894b653ca1165b817da847f64b71871205745da413467c4e3a4_prof);

    }

    // line 14
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_40a99e5e75151f1fd80df9b3c610a61209f6f0ce3bd6faac4f90ad69831051ed = $this->env->getExtension("native_profiler");
        $__internal_40a99e5e75151f1fd80df9b3c610a61209f6f0ce3bd6faac4f90ad69831051ed->enter($__internal_40a99e5e75151f1fd80df9b3c610a61209f6f0ce3bd6faac4f90ad69831051ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 15
        echo "<form id=\"pic-uploader\" enctype=\"multipart/form-data\">
  <div id=\"preview\">
    <img id=\"imghead\" width=100% height=100% border=0 src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["imagePath"]) ? $context["imagePath"] : $this->getContext($context, "imagePath"))), "html", null, true);
        echo "\">
  </div>
  <input id=\"fileInput\" type=\"file\" required onchange=\"previewImage(this)\" name=\"image\" accept=\"image/*\">
  <br>
  <br>
  <p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>
  <br>
  <button id=\"submit\" class=\"btn btn-success\" type=\"button\" data-url=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
        echo "\">上传图片</button>
  ";
        // line 25
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "Profile")) {
            // line 26
            echo "    ";
            if ((((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getEducationImage", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getEducationImage", array(), "method"))) : ("")) || (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getRankImage", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getRankImage", array(), "method"))) : (""))) || (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getIDcardImage", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getIDcardImage", array(), "method"))) : ("")))) {
                // line 27
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("file_download", array("fileName" => ("img" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))))), "html", null, true);
                echo "\" class=\"btn btn-success\">下载</a>
    ";
            }
            // line 29
            echo "  ";
        }
        // line 30
        echo "</form>
";
        
        $__internal_40a99e5e75151f1fd80df9b3c610a61209f6f0ce3bd6faac4f90ad69831051ed->leave($__internal_40a99e5e75151f1fd80df9b3c610a61209f6f0ce3bd6faac4f90ad69831051ed_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:upload/upload-images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 30,  120 => 29,  114 => 27,  111 => 26,  109 => 25,  105 => 24,  95 => 17,  91 => 15,  85 => 14,  71 => 10,  63 => 9,  55 => 8,  47 => 7,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% set nav = 'upload_image' %}*/
/* */
/* {% block content_title %}*/
/* <ul class="nav nav-tabs">*/
/*   <li role="presentation" {% if type == 'Profile'%}class="active"{% endif %}><a href="{{path('user_upload',{id:id,type:'Profile'})}}">头像上传</a></li>*/
/*   <li role="presentation" {% if type == 'FrontIDcard'%}class="active"{% endif %}><a href="{{path('user_upload',{id:id,type:'FrontIDcard'})}}">身份证图片上传</a></li>*/
/*   <li role="presentation" {% if type == 'Education'%}class="active"{% endif %}><a href="{{path('user_upload',{id:id,type:'Education'})}}">学历证书图片上传</a></li>*/
/*   <li role="presentation" {% if type == 'Rank'%}class="active"{% endif %}><a href="{{path('user_upload',{id:id,type:'Rank'})}}">职称证书图片上传</a></li>*/
/*  </ul>*/
/* {% endblock %}*/
/* */
/* {% block content_body %}*/
/* <form id="pic-uploader" enctype="multipart/form-data">*/
/*   <div id="preview">*/
/*     <img id="imghead" width=100% height=100% border=0 src="{{asset(imagePath)}}">*/
/*   </div>*/
/*   <input id="fileInput" type="file" required onchange="previewImage(this)" name="image" accept="image/*">*/
/*   <br>*/
/*   <br>*/
/*   <p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>*/
/*   <br>*/
/*   <button id="submit" class="btn btn-success" type="button" data-url="{{ path('user_upload',{id:id,type:type}) }}">上传图片</button>*/
/*   {% if type != 'Profile' %}*/
/*     {% if app.user.getEducationImage()|default() or app.user.getRankImage()|default() or app.user.getIDcardImage()|default()%}*/
/*       <a href="{{ path('file_download', {fileName:'img' ~ type }) }}" class="btn btn-success">下载</a>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* </form>*/
/* {% endblock %}*/
/* */
