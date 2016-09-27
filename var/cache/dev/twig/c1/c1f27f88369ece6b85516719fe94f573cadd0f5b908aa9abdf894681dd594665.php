<?php

/* test/test.html.twig */
class __TwigTemplate_6d5d21dd645e67d068b5ad5ac202f78ae31e526148e973953f6050366d5671ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "test/test.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79c89251c3668cfecbe3060d6e1621d6fa2c13f92858b4e57c74545d543f7e2b = $this->env->getExtension("native_profiler");
        $__internal_79c89251c3668cfecbe3060d6e1621d6fa2c13f92858b4e57c74545d543f7e2b->enter($__internal_79c89251c3668cfecbe3060d6e1621d6fa2c13f92858b4e57c74545d543f7e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79c89251c3668cfecbe3060d6e1621d6fa2c13f92858b4e57c74545d543f7e2b->leave($__internal_79c89251c3668cfecbe3060d6e1621d6fa2c13f92858b4e57c74545d543f7e2b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9c85a026e830e59358732ee6eff456c6e726adff85d2da97e8f99a2714168b7 = $this->env->getExtension("native_profiler");
        $__internal_f9c85a026e830e59358732ee6eff456c6e726adff85d2da97e8f99a2714168b7->enter($__internal_f9c85a026e830e59358732ee6eff456c6e726adff85d2da97e8f99a2714168b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "id: ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
name: ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
email: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "
password: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "html", null, true);
        echo "
";
        
        $__internal_f9c85a026e830e59358732ee6eff456c6e726adff85d2da97e8f99a2714168b7->leave($__internal_f9c85a026e830e59358732ee6eff456c6e726adff85d2da97e8f99a2714168b7_prof);

    }

    public function getTemplateName()
    {
        return "test/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}
{% block body %}
id: {{ id }}
name: {{ name }}
email: {{ email }}
password: {{ password }}
{% endblock %}
";
    }
}
