<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5e35c568d54b070dcd57da1127f0220b29e4f9677f7b18063e83eca369253795 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3eccad4f856c6488ad2d4fa1a4255d0619be18e22fc56cc80f414b8220cfc13e = $this->env->getExtension("native_profiler");
        $__internal_3eccad4f856c6488ad2d4fa1a4255d0619be18e22fc56cc80f414b8220cfc13e->enter($__internal_3eccad4f856c6488ad2d4fa1a4255d0619be18e22fc56cc80f414b8220cfc13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eccad4f856c6488ad2d4fa1a4255d0619be18e22fc56cc80f414b8220cfc13e->leave($__internal_3eccad4f856c6488ad2d4fa1a4255d0619be18e22fc56cc80f414b8220cfc13e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_66bfd87a9da11b9dc1058509fb8efd856c891ceacda230db5166b75864bf9b93 = $this->env->getExtension("native_profiler");
        $__internal_66bfd87a9da11b9dc1058509fb8efd856c891ceacda230db5166b75864bf9b93->enter($__internal_66bfd87a9da11b9dc1058509fb8efd856c891ceacda230db5166b75864bf9b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_66bfd87a9da11b9dc1058509fb8efd856c891ceacda230db5166b75864bf9b93->leave($__internal_66bfd87a9da11b9dc1058509fb8efd856c891ceacda230db5166b75864bf9b93_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ced3cb812faf14051a8129378d99f98c174172dd6d70d5f6ee6582a507f14d28 = $this->env->getExtension("native_profiler");
        $__internal_ced3cb812faf14051a8129378d99f98c174172dd6d70d5f6ee6582a507f14d28->enter($__internal_ced3cb812faf14051a8129378d99f98c174172dd6d70d5f6ee6582a507f14d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ced3cb812faf14051a8129378d99f98c174172dd6d70d5f6ee6582a507f14d28->leave($__internal_ced3cb812faf14051a8129378d99f98c174172dd6d70d5f6ee6582a507f14d28_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d21695035a25cce141eff43d65b19312f2d4b33278c4f809d046abd27c89013 = $this->env->getExtension("native_profiler");
        $__internal_1d21695035a25cce141eff43d65b19312f2d4b33278c4f809d046abd27c89013->enter($__internal_1d21695035a25cce141eff43d65b19312f2d4b33278c4f809d046abd27c89013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1d21695035a25cce141eff43d65b19312f2d4b33278c4f809d046abd27c89013->leave($__internal_1d21695035a25cce141eff43d65b19312f2d4b33278c4f809d046abd27c89013_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
