<?php

/* :lucky:number.html.twig */
class __TwigTemplate_000e2043376b754de41bd27f1b09b34d4dc089cc16ff372fc6180e8b4be1f813 extends Twig_Template
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
        // line 1
        echo "<h1>Your lucky number is ";
        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : null), "html", null, true);
        echo "</h1>
</br>
";
    }

    public function getTemplateName()
    {
        return ":lucky:number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<h1>Your lucky number is {{ number }}</h1>
</br>
";
    }
}
