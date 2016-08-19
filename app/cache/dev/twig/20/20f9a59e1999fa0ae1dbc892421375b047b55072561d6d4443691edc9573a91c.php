<?php

/* AppBundle:User:show/certificate.html.twig */
class __TwigTemplate_25a6dfa1cef2b8602fbf7b3411f8db274e3b87f1ab34e6af3e240f811f4e3296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::modal-base.html.twig", "AppBundle:User:show/certificate.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::modal-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a662405c284ed378cca11e0a0ffad7104b6375a2e40f8877ea96a3bf984973f = $this->env->getExtension("native_profiler");
        $__internal_7a662405c284ed378cca11e0a0ffad7104b6375a2e40f8877ea96a3bf984973f->enter($__internal_7a662405c284ed378cca11e0a0ffad7104b6375a2e40f8877ea96a3bf984973f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show/certificate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a662405c284ed378cca11e0a0ffad7104b6375a2e40f8877ea96a3bf984973f->leave($__internal_7a662405c284ed378cca11e0a0ffad7104b6375a2e40f8877ea96a3bf984973f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d885f65bd286d652751f6ce9ad68b9ee7ec49b25ea8c6e4cf9918b651a52ce84 = $this->env->getExtension("native_profiler");
        $__internal_d885f65bd286d652751f6ce9ad68b9ee7ec49b25ea8c6e4cf9918b651a52ce84->enter($__internal_d885f65bd286d652751f6ce9ad68b9ee7ec49b25ea8c6e4cf9918b651a52ce84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "<div class=\"page-header\">档案照片（";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "trueName", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "trueName", array()), "html", null, true);
        } else {
            // line 5
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "number", array()), "html", null, true);
        }
        // line 6
        echo "）</div>
";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            // line 8
            echo "  <ul class=\"nav nav-tabs\">
    <li role=\"button\" ";
            // line 9
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "idcard")) {
                echo " class=\"active\"";
            }
            echo "><a class=\"show-idcard-img js-certificate-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_certificate", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "type" => "idcard")), "html", null, true);
            echo "\">身份证图片</a></li>
    <li role=\"button\" ";
            // line 10
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "education")) {
                echo " class=\"active\"";
            }
            echo "><a class=\"show-education-img js-certificate-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_certificate", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "type" => "education")), "html", null, true);
            echo "\">学历证书图片</a></li>
    <li role=\"button\" ";
            // line 11
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "rank")) {
                echo " class=\"active\"";
            }
            echo "><a class=\"show-rank-img js-certificate-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_certificate", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "type" => "rank")), "html", null, true);
            echo "\">职称证书图片</a></li>
  </ul>
";
        }
        
        $__internal_d885f65bd286d652751f6ce9ad68b9ee7ec49b25ea8c6e4cf9918b651a52ce84->leave($__internal_d885f65bd286d652751f6ce9ad68b9ee7ec49b25ea8c6e4cf9918b651a52ce84_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_13c2a5ead457ffeeb67cd1bb3681c8bc4172f0953353325bd00e1ccfbeb0c543 = $this->env->getExtension("native_profiler");
        $__internal_13c2a5ead457ffeeb67cd1bb3681c8bc4172f0953353325bd00e1ccfbeb0c543->enter($__internal_13c2a5ead457ffeeb67cd1bb3681c8bc4172f0953353325bd00e1ccfbeb0c543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "idcard")) {
            // line 18
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imgFrontIDcard", array())), "html", null, true);
            echo "\" class=\"certificate-img\">
  ";
        } elseif ((        // line 19
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "education")) {
            // line 20
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imgEducation", array())), "html", null, true);
            echo "\" class=\"certificate-img\">
  ";
        } else {
            // line 22
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imgRank", array())), "html", null, true);
            echo "\" class=\"certificate-img\">
  ";
        }
        // line 24
        echo "  
  
";
        
        $__internal_13c2a5ead457ffeeb67cd1bb3681c8bc4172f0953353325bd00e1ccfbeb0c543->leave($__internal_13c2a5ead457ffeeb67cd1bb3681c8bc4172f0953353325bd00e1ccfbeb0c543_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7a59423d8e258ed18af0a8c042b291b872e0461ed9be01514e4e2caee68a1844 = $this->env->getExtension("native_profiler");
        $__internal_7a59423d8e258ed18af0a8c042b291b872e0461ed9be01514e4e2caee68a1844->enter($__internal_7a59423d8e258ed18af0a8c042b291b872e0461ed9be01514e4e2caee68a1844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 29
        echo "  ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "idcard")) {
            // line 30
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file_download", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "fileName" => "imgFrontIDcard")), "html", null, true);
            echo "\" class=\"btn btn-success\">下载</a>
  ";
        } elseif ((        // line 31
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "education")) {
            // line 32
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file_download", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "fileName" => "imgEducation")), "html", null, true);
            echo "\" class=\"btn btn-success\">下载</a>
  ";
        } else {
            // line 34
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file_download", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "fileName" => "imgRank")), "html", null, true);
            echo "\" class=\"btn btn-success\">下载</a>
  ";
        }
        // line 36
        echo "
";
        
        $__internal_7a59423d8e258ed18af0a8c042b291b872e0461ed9be01514e4e2caee68a1844->leave($__internal_7a59423d8e258ed18af0a8c042b291b872e0461ed9be01514e4e2caee68a1844_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show/certificate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 36,  149 => 34,  143 => 32,  141 => 31,  136 => 30,  133 => 29,  127 => 28,  118 => 24,  112 => 22,  106 => 20,  104 => 19,  99 => 18,  96 => 17,  90 => 16,  75 => 11,  67 => 10,  59 => 9,  56 => 8,  54 => 7,  51 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::modal-base.html.twig' %}*/
/* */
/* {% block title %}*/
/* <div class="page-header">档案照片（{% if user.trueName %}{{user.trueName}}{% else %}*/
/*   {{user.number}}{% endif %}*/
/* ）</div>*/
/* {% if app.user.isAdmin() %}*/
/*   <ul class="nav nav-tabs">*/
/*     <li role="button" {% if type == 'idcard' %} class="active"{% endif %}><a class="show-idcard-img js-certificate-btn" data-url="{{ path('admin_user_certificate',{id:user.id,type:'idcard'}) }}">身份证图片</a></li>*/
/*     <li role="button" {% if type == 'education' %} class="active"{% endif %}><a class="show-education-img js-certificate-btn" data-url="{{ path('admin_user_certificate',{id:user.id,type:'education'}) }}">学历证书图片</a></li>*/
/*     <li role="button" {% if type == 'rank' %} class="active"{% endif %}><a class="show-rank-img js-certificate-btn" data-url="{{ path('admin_user_certificate',{id:user.id,type:'rank'}) }}">职称证书图片</a></li>*/
/*   </ul>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {% if type == 'idcard' %}*/
/*     <img src="{{ asset(user.imgFrontIDcard) }}" class="certificate-img">*/
/*   {% elseif type == 'education' %}*/
/*     <img src="{{ asset(user.imgEducation) }}" class="certificate-img">*/
/*   {% else %}*/
/*     <img src="{{ asset(user.imgRank) }}" class="certificate-img">*/
/*   {% endif %}*/
/*   */
/*   */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   {% if type == 'idcard' %}*/
/*     <a href="{{ path('admin_file_download',{id:user.id,fileName:'imgFrontIDcard'}) }}" class="btn btn-success">下载</a>*/
/*   {% elseif type == 'education' %}*/
/*     <a href="{{ path('admin_file_download',{id:user.id,fileName:'imgEducation'}) }}" class="btn btn-success">下载</a>*/
/*   {% else %}*/
/*     <a href="{{ path('admin_file_download',{id:user.id,fileName:'imgRank'}) }}" class="btn btn-success">下载</a>*/
/*   {% endif %}*/
/* */
/* {% endblock %}*/
