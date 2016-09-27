<?php

/* ::base.html.twig */
class __TwigTemplate_18ff0f3a8a05e0ac7ef3f910e34f8f55b66e911f2e93bdd22fd5a5903fae0c77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\"><head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />


</head>

<body>

<!-- Navigation -->
<nav class=\"navbar navbar-inverse\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"http://placehold.it/150x50&amp;text=Logo\" alt=\"\">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li>
                    <a href=\"#\">About</a>
                </li>
                <li>
                    <a href=\"#\">Services</a>
                </li>
                <li>
                    <a href=\"#\">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "        </div>
    </div>

</div>



</body></html>
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 62,  121 => 61,  116 => 15,  110 => 11,  98 => 63,  95 => 62,  93 => 61,  44 => 16,  42 => 15,  35 => 11,  23 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>

<html lang=\"en\"><head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}Welcome!{% endblock %}</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />


</head>

<body>

<!-- Navigation -->
<nav class=\"navbar navbar-inverse\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"http://placehold.it/150x50&amp;text=Logo\" alt=\"\">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li>
                    <a href=\"#\">About</a>
                </li>
                <li>
                    <a href=\"#\">Services</a>
                </li>
                <li>
                    <a href=\"#\">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% block body %}{% endblock %}
            {% block javascripts %}{% endblock %}
        </div>
    </div>

</div>



</body></html>
";
    }
}
