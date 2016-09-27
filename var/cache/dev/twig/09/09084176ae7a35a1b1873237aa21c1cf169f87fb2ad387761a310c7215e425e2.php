<?php

/* lucky/number.html.twig */
class __TwigTemplate_62f944a25b63c3c6457b7fcfa4d367a95a8c3e2ff399ce5891fdfd8190899ed5 extends Twig_Template
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
        $__internal_d438e2b19cbda6a1413fa66fd9caf7930ac80bf73ebc3e6d955f0ea71510abfc = $this->env->getExtension("native_profiler");
        $__internal_d438e2b19cbda6a1413fa66fd9caf7930ac80bf73ebc3e6d955f0ea71510abfc->enter($__internal_d438e2b19cbda6a1413fa66fd9caf7930ac80bf73ebc3e6d955f0ea71510abfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 1
        echo "<h1>Your lucky number is ";
        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
        echo "</h1>
</br>
<p>Your lucky number is ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "html", null, true);
        echo "</p>";
        
        $__internal_d438e2b19cbda6a1413fa66fd9caf7930ac80bf73ebc3e6d955f0ea71510abfc->leave($__internal_d438e2b19cbda6a1413fa66fd9caf7930ac80bf73ebc3e6d955f0ea71510abfc_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<h1>Your lucky number is {{ number }}</h1>
</br>
<p>Your lucky number is {{ info }}</p>";
    }
}
