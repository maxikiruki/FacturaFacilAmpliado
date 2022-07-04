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

/* invoice/index.html.twig */
class __TwigTemplate_6172e6977834340a5d9efcafebbcef740cc9cd080d63899265ed7db0af0f82a2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "invoice/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/invoice.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de facturas
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 13
        echo "\t";
        echo twig_include($this->env, $context, "navbar/shownavbar.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
\t<div class=\"container\" id=\"tableArea\">
\t\t<h1>Listado de facturas</h1>
\t\t<table
\t\t\tid=\"dtHorizontalExample\" class=\"table table-striped table-sm\" cellspacing=\"0\" width=\"100%\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nº factura</th>
\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t<th>Pie de página</th>
\t\t\t\t\t<th>Subtotal</th>
\t\t\t\t\t<th>Total</th>
\t\t\t\t\t<th>acciones</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invoices"]) || array_key_exists("invoices", $context) ? $context["invoices"] : (function () { throw new RuntimeError('Variable "invoices" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 36
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["invoice"], "visible", [], "any", false, false, false, 36)) {
                // line 37
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "invoicenumber", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 39
                ((twig_get_attribute($this->env, $this->source, $context["invoice"], "date", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "date", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "description", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "footer", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "subtotal", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "total", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_print", ["id" => twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/print.png"), "html", null, true);
                echo "\" width=\"25px\"></a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_show", ["id" => twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\">show</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">edit</a>
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            // line 52
            echo "
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"8\">No se han encontrado resultados</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t</tbody>
\t\t</table>

\t</div>

\t<a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_new", ["idclient" => (isset($context["idclient"]) || array_key_exists("idclient", $context) ? $context["idclient"] : (function () { throw new RuntimeError('Variable "idclient" does not exist.', 63, $this->source); })())]), "html", null, true);
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "invoice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 63,  230 => 58,  221 => 54,  215 => 52,  207 => 47,  203 => 46,  197 => 45,  192 => 43,  188 => 42,  184 => 41,  180 => 40,  176 => 39,  172 => 38,  169 => 37,  166 => 36,  161 => 35,  142 => 18,  132 => 17,  119 => 13,  109 => 12,  89 => 9,  76 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t{{parent()}}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/invoice.css') }}\"/>

{% endblock %}

{% block title %}Listado de facturas
{% endblock %}

{% block nav %}
\t{{ include('navbar/shownavbar.html.twig') }}
{% endblock %}


{% block body %}

\t<div class=\"container\" id=\"tableArea\">
\t\t<h1>Listado de facturas</h1>
\t\t<table
\t\t\tid=\"dtHorizontalExample\" class=\"table table-striped table-sm\" cellspacing=\"0\" width=\"100%\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nº factura</th>
\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t<th>Pie de página</th>
\t\t\t\t\t<th>Subtotal</th>
\t\t\t\t\t<th>Total</th>
\t\t\t\t\t<th>acciones</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for invoice in invoices %}
\t\t\t\t\t{% if invoice.visible %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ invoice.invoicenumber}}</td>
\t\t\t\t\t\t\t<td>{{ invoice.date ? invoice.date|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t<td>{{ invoice.description }}</td>
\t\t\t\t\t\t\t<td>{{ invoice.footer }}</td>
\t\t\t\t\t\t\t<td>{{ invoice.subtotal }}</td>
\t\t\t\t\t\t\t<td>{{ invoice.total }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('invoice_print', {'id': invoice.id}) }}\"><img src=\"{{ asset('img/print.png')}}\" width=\"25px\"></a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('invoice_show', {'id': invoice.id}) }}\">show</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('invoice_edit', {'id': invoice.id}) }}\">edit</a>
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endif %}

\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"8\">No se han encontrado resultados</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>

\t</div>

\t<a href=\"{{ path('invoice_new', {'idclient': idclient}) }}\">Create new</a>
{% endblock %}
", "invoice/index.html.twig", "D:\\GS_DAW\\SEGUNDO\\Proyecto Grupal\\invoice develop\\templates\\invoice\\index.html.twig");
    }
}
