<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ae920e1ca6639cc889d1fa79a24604943277c0500bbce55dc7902fb6b297d4e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d39e51ea8e684f88f93cf6907c0ab5948f7b4b31127f86fedefb6e79eb1c73c = $this->env->getExtension("native_profiler");
        $__internal_7d39e51ea8e684f88f93cf6907c0ab5948f7b4b31127f86fedefb6e79eb1c73c->enter($__internal_7d39e51ea8e684f88f93cf6907c0ab5948f7b4b31127f86fedefb6e79eb1c73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7d39e51ea8e684f88f93cf6907c0ab5948f7b4b31127f86fedefb6e79eb1c73c->leave($__internal_7d39e51ea8e684f88f93cf6907c0ab5948f7b4b31127f86fedefb6e79eb1c73c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
    }
}
