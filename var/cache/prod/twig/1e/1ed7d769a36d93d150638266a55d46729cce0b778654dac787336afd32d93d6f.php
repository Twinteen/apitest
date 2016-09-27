<?php

/* :test:test.html.twig */
class __TwigTemplate_97ab9fa7642926474db731a5904115197583d747f528b331ab2cb0d37c6ed9a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":test:test.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "id: ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "
name: ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "
email: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "
password: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return ":test:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 5,  36 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
