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

/* enterprise/show_invoices.html.twig */
class __TwigTemplate_fab3dd1fc31b15c4b29c0fde758698f8e49782d45e82cbd80380a045b476b31f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enterprise/show_invoices.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enterprise/show_invoices.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "enterprise/show_invoices.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de facturas de empresa
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 7
        echo "\t";
        echo twig_include($this->env, $context, "navbar/shownavbar.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
\t<div class=\"container\" id=\"tableArea\">

\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-9\">
\t\t\t\t<h1>Listado de facturas</h1>
\t\t\t</div>
\t\t\t<div class=\"col-3 text-right\">
\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "buscar", [], "any", false, false, false, 20), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "buscar", [], "any", false, false, false, 20), 'widget');
        echo "
\t\t\t\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
        echo "

\t\t\t</div>
\t\t</div>

\t\t<div class=\"row mt-2\">
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nº Factura</th>
\t\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t\t<th>Cliente</th>
\t\t\t\t\t\t<th>Subtotal</th>
\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t<th>acciones</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 40
        $context["sumSubtotal"] = 0;
        // line 41
        echo "\t\t\t\t\t";
        $context["sumTotal"] = 0;
        // line 42
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invoiceseterprises"]) || array_key_exists("invoiceseterprises", $context) ? $context["invoiceseterprises"] : (function () { throw new RuntimeError('Variable "invoiceseterprises" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoiceseterprise"]) {
            // line 43
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "visible", [], "any", false, false, false, 43)) {
                // line 44
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "invoicenumber", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 46
                ((twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "date", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "date", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "description", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "client", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "subtotal", [], "any", false, false, false, 49), "html", null, true);
                echo "€</td>
\t\t\t\t\t\t\t\t<td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "total", [], "any", false, false, false, 50), "html", null, true);
                echo "€</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_show", ["id" => twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">elegir</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\">editar</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                // line 55
                $context["sumSubtotal"] = ((isset($context["sumSubtotal"]) || array_key_exists("sumSubtotal", $context) ? $context["sumSubtotal"] : (function () { throw new RuntimeError('Variable "sumSubtotal" does not exist.', 55, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "subtotal", [], "any", false, false, false, 55));
                // line 56
                echo "\t\t\t\t\t\t\t\t";
                $context["sumTotal"] = ((isset($context["sumTotal"]) || array_key_exists("sumTotal", $context) ? $context["sumTotal"] : (function () { throw new RuntimeError('Variable "sumTotal" does not exist.', 56, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "total", [], "any", false, false, false, 56));
                // line 57
                echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            // line 59
            echo "
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"8\">No se han encontrado resultados</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoiceseterprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td>";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["sumSubtotal"]) || array_key_exists("sumSubtotal", $context) ? $context["sumSubtotal"] : (function () { throw new RuntimeError('Variable "sumSubtotal" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "€</td>
\t\t\t\t\t\t<td>";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["sumTotal"]) || array_key_exists("sumTotal", $context) ? $context["sumTotal"] : (function () { throw new RuntimeError('Variable "sumTotal" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "€</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>

\t\t</div>
\t\t<a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_index");
        echo "\">Regresar al listado de empresas</a>
\t</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "enterprise/show_invoices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 78,  240 => 71,  236 => 70,  229 => 65,  220 => 61,  214 => 59,  210 => 57,  207 => 56,  205 => 55,  200 => 53,  196 => 52,  191 => 50,  187 => 49,  183 => 48,  179 => 47,  175 => 46,  171 => 45,  168 => 44,  165 => 43,  159 => 42,  156 => 41,  154 => 40,  132 => 21,  127 => 20,  123 => 19,  113 => 11,  103 => 10,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listado de facturas de empresa
{% endblock %}

{% block nav %}
\t{{ include('navbar/shownavbar.html.twig') }}
{% endblock %}

{% block body %}

\t<div class=\"container\" id=\"tableArea\">

\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-9\">
\t\t\t\t<h1>Listado de facturas</h1>
\t\t\t</div>
\t\t\t<div class=\"col-3 text-right\">
\t\t\t\t{{form_start(form)}}
\t\t\t\t{{form_label(form.buscar)}}{{form_widget(form.buscar)}}
\t\t\t\t{{form_end(form)}}

\t\t\t</div>
\t\t</div>

\t\t<div class=\"row mt-2\">
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nº Factura</th>
\t\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t\t<th>Cliente</th>
\t\t\t\t\t\t<th>Subtotal</th>
\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t<th>acciones</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% set sumSubtotal = 0 %}
\t\t\t\t\t{% set sumTotal = 0 %}
\t\t\t\t\t{% for invoiceseterprise in invoiceseterprises  %}
\t\t\t\t\t\t{% if invoiceseterprise.visible %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ invoiceseterprise.invoicenumber}}</td>
\t\t\t\t\t\t\t\t<td>{{ invoiceseterprise.date ? invoiceseterprise.date|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t\t<td>{{ invoiceseterprise.description }}</td>
\t\t\t\t\t\t\t\t<td>{{ invoiceseterprise.client }}</td>
\t\t\t\t\t\t\t\t<td>{{ invoiceseterprise.subtotal }}€</td>
\t\t\t\t\t\t\t\t<td>{{ invoiceseterprise.total }}€</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('invoice_show', {'id': invoiceseterprise.id}) }}\">elegir</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('invoice_edit', {'id': invoiceseterprise.id}) }}\">editar</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% set sumSubtotal = sumSubtotal + invoiceseterprise.subtotal %}
\t\t\t\t\t\t\t\t{% set sumTotal = sumTotal + invoiceseterprise.total %}
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"8\">No se han encontrado resultados</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td>{{sumSubtotal}}€</td>
\t\t\t\t\t\t<td>{{sumTotal}}€</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>

\t\t</div>
\t\t<a href=\"{{ path('enterprise_index') }}\">Regresar al listado de empresas</a>
\t</div>


{% endblock %}
", "enterprise/show_invoices.html.twig", "D:\\GS_DAW\\SEGUNDO\\Proyecto Grupal\\invoice develop\\templates\\enterprise\\show_invoices.html.twig");
    }
}
