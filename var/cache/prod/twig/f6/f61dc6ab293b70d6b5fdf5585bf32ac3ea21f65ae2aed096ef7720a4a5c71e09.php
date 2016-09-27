<?php

/* :registration:register.html.twig */
class __TwigTemplate_960c0212a1bf05e9a8349acf22a2c3a20611315f79e27d5ef0515cc68bd02193 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'row');
        echo "

<button id=\"submit\" type=\"button\">Register!</button>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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

        \$.ajax({
            url : '/test/create/',
            type: 'POST',
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
                //if (!o[this.name].push) {
                  //  o[this.name] = o[this.name];
                //}
                o[this.name].push(this.value || '');

            } else {
                o[this.name.replace(\"form_controller\", \"\")] = this.value || '';
            }
        });
        return o;
    };
</script>";
    }

    public function getTemplateName()
    {
        return ":registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  35 => 5,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}

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

        \$.ajax({
            url : '/test/create/',
            type: 'POST',
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
                //if (!o[this.name].push) {
                  //  o[this.name] = o[this.name];
                //}
                o[this.name].push(this.value || '');

            } else {
                o[this.name.replace(\"form_controller\", \"\")] = this.value || '';
            }
        });
        return o;
    };
</script>";
    }
}
