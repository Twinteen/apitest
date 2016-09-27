<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f60c5944eeece951226b46d9926ca865d7b4cf6206833b0d8f8d0aa803eab513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54623ed708abe8e7e2b7b2413ed3a2e0d535f02b4566925fab08931fe533d06b = $this->env->getExtension("native_profiler");
        $__internal_54623ed708abe8e7e2b7b2413ed3a2e0d535f02b4566925fab08931fe533d06b->enter($__internal_54623ed708abe8e7e2b7b2413ed3a2e0d535f02b4566925fab08931fe533d06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54623ed708abe8e7e2b7b2413ed3a2e0d535f02b4566925fab08931fe533d06b->leave($__internal_54623ed708abe8e7e2b7b2413ed3a2e0d535f02b4566925fab08931fe533d06b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef636b493f3707381f5562be1ca098e55e89e785d425cac7bab1ad8bfbdabf0b = $this->env->getExtension("native_profiler");
        $__internal_ef636b493f3707381f5562be1ca098e55e89e785d425cac7bab1ad8bfbdabf0b->enter($__internal_ef636b493f3707381f5562be1ca098e55e89e785d425cac7bab1ad8bfbdabf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ef636b493f3707381f5562be1ca098e55e89e785d425cac7bab1ad8bfbdabf0b->leave($__internal_ef636b493f3707381f5562be1ca098e55e89e785d425cac7bab1ad8bfbdabf0b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3861a50b4e0f7d3bca023908592c7ea44e06be24b334a9f60072f7b46ad00dd = $this->env->getExtension("native_profiler");
        $__internal_a3861a50b4e0f7d3bca023908592c7ea44e06be24b334a9f60072f7b46ad00dd->enter($__internal_a3861a50b4e0f7d3bca023908592c7ea44e06be24b334a9f60072f7b46ad00dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a3861a50b4e0f7d3bca023908592c7ea44e06be24b334a9f60072f7b46ad00dd->leave($__internal_a3861a50b4e0f7d3bca023908592c7ea44e06be24b334a9f60072f7b46ad00dd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecbd66057e012879153328c430be3c8cc7c8ddcf3b3f6f53399180cd22abd2d2 = $this->env->getExtension("native_profiler");
        $__internal_ecbd66057e012879153328c430be3c8cc7c8ddcf3b3f6f53399180cd22abd2d2->enter($__internal_ecbd66057e012879153328c430be3c8cc7c8ddcf3b3f6f53399180cd22abd2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ecbd66057e012879153328c430be3c8cc7c8ddcf3b3f6f53399180cd22abd2d2->leave($__internal_ecbd66057e012879153328c430be3c8cc7c8ddcf3b3f6f53399180cd22abd2d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
