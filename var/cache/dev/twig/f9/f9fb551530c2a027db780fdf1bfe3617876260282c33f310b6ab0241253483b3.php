<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* client/_form.html.twig */
class __TwigTemplate_d1b66f0ff17b9c0b8382a8076be96c676a01f7d0b6990785d78aff329a4eb345 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), 'row', ["label" => "Nombre"]);
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "address", [], "any", false, false, false, 3), 'row', ["label" => "Dirección"]);
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "nif", [], "any", false, false, false, 4), 'row', ["label" => "DNI"]);
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "email", [], "any", false, false, false, 5), 'row', ["label" => "Email"]);
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "telephone", [], "any", false, false, false, 6), 'row', ["label" => "Teléfono"]);
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "web", [], "any", false, false, false, 7), 'row', ["label" => "Página web"]);
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), 'widget');
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "address", [], "any", false, false, false, 9), 'label');
        echo "
";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "address", [], "any", false, false, false, 10), 'widget');
        echo "
";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nif", [], "any", false, false, false, 11), 'label');
        echo "
";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nif", [], "any", false, false, false, 12), 'widget');
        echo "
";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "email", [], "any", false, false, false, 13), 'label');
        echo "
";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), 'widget');
        echo "
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "telephone", [], "any", false, false, false, 15), 'label');
        echo "
";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "telephone", [], "any", false, false, false, 16), 'widget');
        echo "
";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "web", [], "any", false, false, false, 17), 'label');
        echo "
";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "web", [], "any", false, false, false, 18), 'widget');
        echo "

<label for=\"supervisor[]\">Supervisor</label>
<select class=\"form-control\" id=\"supervisor[]\" name=\"supervisor[]\">
\t<option value=\"\"></option>
\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["supervisors"]) || array_key_exists("supervisors", $context) ? $context["supervisors"] : (function () { throw new RuntimeError('Variable "supervisors" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["supervisor"]) {
            // line 24
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["supervisor"], "visible", [], "any", false, false, false, 24)) {
                // line 25
                echo "\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supervisor"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["supervisor"], "html", null, true);
                echo "</option>
\t\t";
            }
            // line 27
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supervisor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
</select>

<script>
\tvar number = document.querySelector(\"#supervisor\\\\[\\\\]\").options.length;
for (i = 0; i < number; i ++) {
";
        // line 34
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "supervisor", [], "any", false, true, false, 34), "name", [], "any", true, true, false, 34)) {
            // line 35
            echo "\tif (\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 35, $this->source); })()), "supervisor", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
            echo "\" == document.querySelector(\"#supervisor\\\\[\\\\]\").options[i].text) {
\tdocument.querySelector(\"#supervisor\\\\[\\\\]\").s}electedIndex = i;
";
        }
        // line 38
        echo "}
</script>

";
        // line 42
        echo "<button class=\"btn\">";
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 42, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "client/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 43,  162 => 42,  157 => 38,  150 => 35,  148 => 34,  140 => 28,  134 => 27,  126 => 25,  123 => 24,  119 => 23,  111 => 18,  107 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  79 => 10,  75 => 9,  71 => 8,  67 => 7,  63 => 6,  59 => 5,  55 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
{{ form_row(form.name, {'label': 'Nombre'}) }}
{{ form_row(form.address, {'label': 'Dirección'}) }}
{{ form_row(form.nif, {'label': 'DNI'}) }}
{{ form_row(form.email, {'label': 'Email'}) }}
{{ form_row(form.telephone, {'label': 'Teléfono'}) }}
{{ form_row(form.web, {'label': 'Página web'}) }}
{{ form_widget(form.name) }}
{{ form_label(form.address) }}
{{ form_widget(form.address) }}
{{ form_label(form.nif) }}
{{ form_widget(form.nif) }}
{{ form_label(form.email) }}
{{ form_widget(form.email) }}
{{ form_label(form.telephone) }}
{{ form_widget(form.telephone) }}
{{ form_label(form.web) }}
{{ form_widget(form.web) }}

<label for=\"supervisor[]\">Supervisor</label>
<select class=\"form-control\" id=\"supervisor[]\" name=\"supervisor[]\">
\t<option value=\"\"></option>
\t{% for supervisor in supervisors %}
\t\t{% if supervisor.visible %}
\t\t\t<option value=\"{{supervisor.id}}\">{{supervisor}}</option>
\t\t{% endif %}
\t{% endfor %}

</select>

<script>
\tvar number = document.querySelector(\"#supervisor\\\\[\\\\]\").options.length;
for (i = 0; i < number; i ++) {
{% if client.supervisor.name is defined %}
\tif (\"{{ client.supervisor.name }}\" == document.querySelector(\"#supervisor\\\\[\\\\]\").options[i].text) {
\tdocument.querySelector(\"#supervisor\\\\[\\\\]\").s}electedIndex = i;
{% endif %}
}
</script>

{# {{ dump (client.supervisor.name)}} #}
<button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "client/_form.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\client\\_form.html.twig");
    }
}
