<?php

/* base.html.twig */
class __TwigTemplate_ba383ae3c9cc92acc1788fdcb5a658c34527edfc90926a0bca138fb9d9bc6771 extends Twig_Template
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
        $__internal_1b4254b8aaac9bf78f97645c7887853eaa1adf2a5359b1c8dacaaf01e98a50cf = $this->env->getExtension("native_profiler");
        $__internal_1b4254b8aaac9bf78f97645c7887853eaa1adf2a5359b1c8dacaaf01e98a50cf->enter($__internal_1b4254b8aaac9bf78f97645c7887853eaa1adf2a5359b1c8dacaaf01e98a50cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1b4254b8aaac9bf78f97645c7887853eaa1adf2a5359b1c8dacaaf01e98a50cf->leave($__internal_1b4254b8aaac9bf78f97645c7887853eaa1adf2a5359b1c8dacaaf01e98a50cf_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c54cc781d443a9a57b01333f52d317660e4796579fcbfb888db19fdcdc8d8f2 = $this->env->getExtension("native_profiler");
        $__internal_3c54cc781d443a9a57b01333f52d317660e4796579fcbfb888db19fdcdc8d8f2->enter($__internal_3c54cc781d443a9a57b01333f52d317660e4796579fcbfb888db19fdcdc8d8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3c54cc781d443a9a57b01333f52d317660e4796579fcbfb888db19fdcdc8d8f2->leave($__internal_3c54cc781d443a9a57b01333f52d317660e4796579fcbfb888db19fdcdc8d8f2_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a7f0bc04687f8c0c9ba9f24dbb000d27c8a5691ed9adac9a3308c31d4b34a5d = $this->env->getExtension("native_profiler");
        $__internal_0a7f0bc04687f8c0c9ba9f24dbb000d27c8a5691ed9adac9a3308c31d4b34a5d->enter($__internal_0a7f0bc04687f8c0c9ba9f24dbb000d27c8a5691ed9adac9a3308c31d4b34a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0a7f0bc04687f8c0c9ba9f24dbb000d27c8a5691ed9adac9a3308c31d4b34a5d->leave($__internal_0a7f0bc04687f8c0c9ba9f24dbb000d27c8a5691ed9adac9a3308c31d4b34a5d_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_b72a6a14ede97fe088cee62a39a177931a8e1049b94ea91eccccc88dbf197f56 = $this->env->getExtension("native_profiler");
        $__internal_b72a6a14ede97fe088cee62a39a177931a8e1049b94ea91eccccc88dbf197f56->enter($__internal_b72a6a14ede97fe088cee62a39a177931a8e1049b94ea91eccccc88dbf197f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b72a6a14ede97fe088cee62a39a177931a8e1049b94ea91eccccc88dbf197f56->leave($__internal_b72a6a14ede97fe088cee62a39a177931a8e1049b94ea91eccccc88dbf197f56_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dbcf9715e546ca7ff1b7e7b881eb8269fcf1e80497ebd388d69b9b427b7fe036 = $this->env->getExtension("native_profiler");
        $__internal_dbcf9715e546ca7ff1b7e7b881eb8269fcf1e80497ebd388d69b9b427b7fe036->enter($__internal_dbcf9715e546ca7ff1b7e7b881eb8269fcf1e80497ebd388d69b9b427b7fe036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dbcf9715e546ca7ff1b7e7b881eb8269fcf1e80497ebd388d69b9b427b7fe036->leave($__internal_dbcf9715e546ca7ff1b7e7b881eb8269fcf1e80497ebd388d69b9b427b7fe036_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 62,  139 => 61,  128 => 15,  116 => 11,  101 => 63,  98 => 62,  96 => 61,  47 => 16,  45 => 15,  38 => 11,  26 => 1,);
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
