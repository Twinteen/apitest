<?php

/* registration/register.html.twig */
class __TwigTemplate_e03f7606dd941dadbae4335c69d0b24daf492d1609345164cff0cdd8b2a2d14d extends Twig_Template
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
        $__internal_2afee120fb5501b5e6e2566cac6d652e1422d43c720817fe7ec0b0b070f7bde8 = $this->env->getExtension("native_profiler");
        $__internal_2afee120fb5501b5e6e2566cac6d652e1422d43c720817fe7ec0b0b070f7bde8->enter($__internal_2afee120fb5501b5e6e2566cac6d652e1422d43c720817fe7ec0b0b070f7bde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'row');
        echo "


<button id=\"submit\" type=\"button\">Register!</button>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<script src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js\"></script>

<script>
    var \$send = \$('#submit');

    // When sport gets selected ...
    \$send.click(function() {
        // ... retrieve the corresponding form.
        var \$form = \$(this).closest('form');
        // Simulate form data, but only include the selected sport value.
        var data = JSON.stringify((\$form).serializeObject());
        console.log(data);
        \$.ajax({
            url : '/test/user',
            type: 'PUT',
            contentType: \"application/json; charset=utf-8\",
            dataType: \"json\",
            data : data,
            success: function(json) {
                // Replace current position field ...
                alert(json);
                // Position field now displays the appropriate positions.
            }
        });
    });
   // .replace(\"form_controller\", \"\")
    \$.fn.serializeObject = function()
    {
        var o = {};
        var a = this.serializeArray();
        \$.each(a, function() {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                  o[this.name] = o[this.name];
                }
                o[this.name].push(this.value || '');

            } else {
                o[this.name] = this.value || '';
            }
        });

        return o;
    };
</script>";
        
        $__internal_2afee120fb5501b5e6e2566cac6d652e1422d43c720817fe7ec0b0b070f7bde8->leave($__internal_2afee120fb5501b5e6e2566cac6d652e1422d43c720817fe7ec0b0b070f7bde8_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  34 => 4,  30 => 3,  26 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.password) }}


<button id=\"submit\" type=\"button\">Register!</button>
{{ form_end(form) }}
<script src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js\"></script>

<script>
    var \$send = \$('#submit');

    // When sport gets selected ...
    \$send.click(function() {
        // ... retrieve the corresponding form.
        var \$form = \$(this).closest('form');
        // Simulate form data, but only include the selected sport value.
        var data = JSON.stringify((\$form).serializeObject());
        console.log(data);
        \$.ajax({
            url : '/test/user',
            type: 'PUT',
            contentType: \"application/json; charset=utf-8\",
            dataType: \"json\",
            data : data,
            success: function(json) {
                // Replace current position field ...
                alert(json);
                // Position field now displays the appropriate positions.
            }
        });
    });
   // .replace(\"form_controller\", \"\")
    \$.fn.serializeObject = function()
    {
        var o = {};
        var a = this.serializeArray();
        \$.each(a, function() {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                  o[this.name] = o[this.name];
                }
                o[this.name].push(this.value || '');

            } else {
                o[this.name] = this.value || '';
            }
        });

        return o;
    };
</script>";
    }
}
