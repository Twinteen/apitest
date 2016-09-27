<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_eebc2710e5e2fb31534166a060a2f1d900ff90dd7cc6c8c530ece25e79fdc4f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_9c330a352a4eae328f3f9667734159c517fb6ff2859b7157b3bbbdcbabad4b2d = $this->env->getExtension("native_profiler");
        $__internal_9c330a352a4eae328f3f9667734159c517fb6ff2859b7157b3bbbdcbabad4b2d->enter($__internal_9c330a352a4eae328f3f9667734159c517fb6ff2859b7157b3bbbdcbabad4b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c330a352a4eae328f3f9667734159c517fb6ff2859b7157b3bbbdcbabad4b2d->leave($__internal_9c330a352a4eae328f3f9667734159c517fb6ff2859b7157b3bbbdcbabad4b2d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6eff62afe50200e60aa7606cb1a12aacfac0dadd839b003c380b0640b1c6328 = $this->env->getExtension("native_profiler");
        $__internal_a6eff62afe50200e60aa7606cb1a12aacfac0dadd839b003c380b0640b1c6328->enter($__internal_a6eff62afe50200e60aa7606cb1a12aacfac0dadd839b003c380b0640b1c6328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a6eff62afe50200e60aa7606cb1a12aacfac0dadd839b003c380b0640b1c6328->leave($__internal_a6eff62afe50200e60aa7606cb1a12aacfac0dadd839b003c380b0640b1c6328_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
