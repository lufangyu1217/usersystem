<?php

/* AppBundle:User:upload/upload-idcard.html.twig */
class __TwigTemplate_93ca0b1123c159c0600d3e6f41396cc63324d5a54c454c33fa7011db49cdf247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:upload/upload-idcard.html.twig", 1);
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
        $__internal_8adedab832d69c92b20dcd13a9a4a3904556cba63fc65a689d6f553de0a2f108 = $this->env->getExtension("native_profiler");
        $__internal_8adedab832d69c92b20dcd13a9a4a3904556cba63fc65a689d6f553de0a2f108->enter($__internal_8adedab832d69c92b20dcd13a9a4a3904556cba63fc65a689d6f553de0a2f108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:upload/upload-idcard.html.twig"));

        // line 2
        $context["nav"] = "upload_image";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8adedab832d69c92b20dcd13a9a4a3904556cba63fc65a689d6f553de0a2f108->leave($__internal_8adedab832d69c92b20dcd13a9a4a3904556cba63fc65a689d6f553de0a2f108_prof);

    }

    // line 3
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_781ddf9b376a6330a24f0fafdb61039360e6e86ddb06626665a0438698950afd = $this->env->getExtension("native_profiler");
        $__internal_781ddf9b376a6330a24f0fafdb61039360e6e86ddb06626665a0438698950afd->enter($__internal_781ddf9b376a6330a24f0fafdb61039360e6e86ddb06626665a0438698950afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 4
        echo "
<ul class=\"nav nav-tabs\">
  <li role=\"presentation\" class=\"active\"><a href=\"";
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
  <li role=\"presentation\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_Profile", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">头像上传</a></li>
 </ul>
";
        
        $__internal_781ddf9b376a6330a24f0fafdb61039360e6e86ddb06626665a0438698950afd->leave($__internal_781ddf9b376a6330a24f0fafdb61039360e6e86ddb06626665a0438698950afd_prof);

    }

    // line 12
    public function block_content_body($context, array $blocks = array())
    {
        $__internal_8039ac0dec5345d76d8c6bc7f21bc4d9d407e1dfb1e689b701b8321a8cb589c1 = $this->env->getExtension("native_profiler");
        $__internal_8039ac0dec5345d76d8c6bc7f21bc4d9d407e1dfb1e689b701b8321a8cb589c1->enter($__internal_8039ac0dec5345d76d8c6bc7f21bc4d9d407e1dfb1e689b701b8321a8cb589c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_body"));

        // line 13
        echo "<form id=\"pic-uploader\" enctype=\"multipart/form-data\">
    <div id=\"preview\">
       <img id=\"imghead\" width=100% height=100% border=0 src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["imagePath"]) ? $context["imagePath"] : $this->getContext($context, "imagePath"))), "html", null, true);
        echo "\">
    </div>
    <input id=\"fileInput\" type=\"file\" required onchange=\"previewImage(this)\" name=\"image\" accept=\"image/*\">
    <br>
    <br>
    <p>图片大小不得超过3M，格式为JPEG,JPG,PNG</p>
    <br>
    <button id=\"submit\" class=\"btn btn-success\" type=\"button\" data-url=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_upload_IDcard", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">上传图片</button>
    ";
        // line 23
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getIdCardImage", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "getIdCardImage", array(), "method"))) : (""))) {
            // line 24
            echo "      <a href=\"";
            echo $this->env->getExtension('routing')->getPath("file_download", array("fileName" => "imgProfile"));
            echo "\" class=\"btn btn-success\">下载</a>
    ";
        }
        // line 26
        echo "    
</form>

";
        
        $__internal_8039ac0dec5345d76d8c6bc7f21bc4d9d407e1dfb1e689b701b8321a8cb589c1->leave($__internal_8039ac0dec5345d76d8c6bc7f21bc4d9d407e1dfb1e689b701b8321a8cb589c1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:upload/upload-idcard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  96 => 24,  94 => 23,  90 => 22,  80 => 15,  76 => 13,  70 => 12,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% set nav = 'upload_image' %}*/
/* {% block content_title %}*/
/* */
/* <ul class="nav nav-tabs">*/
/*   <li role="presentation" class="active"><a href="{{path('user_upload_IDcard',{id:id})}}">身份证图片上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_education',{id:id})}}">学历证书图片上传</a></li>*/
/*   <li role="presentation"><a href="{{path('user_upload_rank',{id:id})}}">职称证书图片上传</a></li>*/
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
/*     <button id="submit" class="btn btn-success" type="button" data-url="{{ path('user_upload_IDcard',{id:id}) }}">上传图片</button>*/
/*     {% if app.user.getIdCardImage()|default() %}*/
/*       <a href="{{ path('file_download', {fileName:'imgProfile'}) }}" class="btn btn-success">下载</a>*/
/*     {% endif %}*/
/*     */
/* </form>*/
/* */
/* {% endblock %}*/
/* */
