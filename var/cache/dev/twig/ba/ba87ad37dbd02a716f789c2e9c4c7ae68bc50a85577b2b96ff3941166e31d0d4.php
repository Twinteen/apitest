<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_4873ee539a7af3143b77367b23fad6c199c33e9cb635857207dacfb6165218be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bb77aa3957e247265af332a4170c1435e10e5f48189f4dde6d200e2e3fd8b5a = $this->env->getExtension("native_profiler");
        $__internal_7bb77aa3957e247265af332a4170c1435e10e5f48189f4dde6d200e2e3fd8b5a->enter($__internal_7bb77aa3957e247265af332a4170c1435e10e5f48189f4dde6d200e2e3fd8b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bb77aa3957e247265af332a4170c1435e10e5f48189f4dde6d200e2e3fd8b5a->leave($__internal_7bb77aa3957e247265af332a4170c1435e10e5f48189f4dde6d200e2e3fd8b5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f097433227918bd2179cc1c35a6ed3ab5e95ed68a76bfa3112f9cdf0b5cc2813 = $this->env->getExtension("native_profiler");
        $__internal_f097433227918bd2179cc1c35a6ed3ab5e95ed68a76bfa3112f9cdf0b5cc2813->enter($__internal_f097433227918bd2179cc1c35a6ed3ab5e95ed68a76bfa3112f9cdf0b5cc2813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_f097433227918bd2179cc1c35a6ed3ab5e95ed68a76bfa3112f9cdf0b5cc2813->leave($__internal_f097433227918bd2179cc1c35a6ed3ab5e95ed68a76bfa3112f9cdf0b5cc2813_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
