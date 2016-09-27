<?php

/* test/testForm.html.twig */
class __TwigTemplate_de7945c46310c3c62927cf64aa33f9b17bba124297cad02c4ac08b62b22a2590 extends Twig_Template
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
        $__internal_8aae8795026ca567fb588c4d61080f9adf93d0397029346c4cd73d888f1d36ed = $this->env->getExtension("native_profiler");
        $__internal_8aae8795026ca567fb588c4d61080f9adf93d0397029346c4cd73d888f1d36ed->enter($__internal_8aae8795026ca567fb588c4d61080f9adf93d0397029346c4cd73d888f1d36ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/testForm.html.twig"));

        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sport", array()), 'row');
        echo "    ";
        // line 4
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'row');
        echo " ";
        // line 5
        echo "    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<script>
    var \$sport = \$('#meetup_sport');
    // When sport gets selected ...
    \$sport.change(function() {
        // ... retrieve the corresponding form.
        var \$form = \$(this).closest('form');
        // Simulate form data, but only include the selected sport value.
        var data = {};
        data[\$sport.attr('name')] = \$sport.val();
        // Submit data via AJAX to the form's action path.
        \$.ajax({
            url : \$form.attr('action'),
            type: \$form.attr('method'),
            data : data,
            success: function(html) {
                // Replace current position field ...
                \$('#meetup_position').replaceWith(
                        // ... with the returned one from the AJAX response.
                        \$(html).find('#meetup_position')
                );
                // Position field now displays the appropriate positions.
            }
        });
    });
</script>";
        
        $__internal_8aae8795026ca567fb588c4d61080f9adf93d0397029346c4cd73d888f1d36ed->leave($__internal_8aae8795026ca567fb588c4d61080f9adf93d0397029346c4cd73d888f1d36ed_prof);

    }

    public function getTemplateName()
    {
        return "test/testForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  33 => 5,  29 => 4,  26 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{# app/Resources/views/Meetup/create.html.twig #}
{{ form_start(form) }}
    {{ form_row(form.sport) }}    {# <select id=\"meetup_sport\" ... #}
    {{ form_row(form.position) }} {# <select id=\"meetup_position\" ... #}
    {# ... #}
{{ form_end(form) }}

<script>
    var \$sport = \$('#meetup_sport');
    // When sport gets selected ...
    \$sport.change(function() {
        // ... retrieve the corresponding form.
        var \$form = \$(this).closest('form');
        // Simulate form data, but only include the selected sport value.
        var data = {};
        data[\$sport.attr('name')] = \$sport.val();
        // Submit data via AJAX to the form's action path.
        \$.ajax({
            url : \$form.attr('action'),
            type: \$form.attr('method'),
            data : data,
            success: function(html) {
                // Replace current position field ...
                \$('#meetup_position').replaceWith(
                        // ... with the returned one from the AJAX response.
                        \$(html).find('#meetup_position')
                );
                // Position field now displays the appropriate positions.
            }
        });
    });
</script>";
    }
}
