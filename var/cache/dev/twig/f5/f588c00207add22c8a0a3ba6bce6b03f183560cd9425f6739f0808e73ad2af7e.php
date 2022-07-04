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

/* budget/index.html.twig */
class __TwigTemplate_754c9616b8f15e3bd15a282349b16973a2a1cebfd90478b804523f3a3231baa5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "budget/index.html.twig", 1);
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

        echo "Listado de presupuestos
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

\t\t\t


\t<div class=\"container\" id=\"tableArea\">
\t\t<h1>Listado de presupuestos</h1>
\t\t<table
\t\t\tid=\"dtHorizontalExample\" class=\"table table-striped table-sm\" cellspacing=\"0\" width=\"100%\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nº presupuesto</th>
\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t";
        // line 32
        echo "\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t<th>Subtotal</th>
\t\t\t\t\t<th>Total</th>
\t\t\t\t\t<th>Acciones</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["budgets"]) || array_key_exists("budgets", $context) ? $context["budgets"] : (function () { throw new RuntimeError('Variable "budgets" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["budget"]) {
            // line 40
            echo "\t\t\t\t\t";
            // line 41
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 43
            ((twig_get_attribute($this->env, $this->source, $context["budget"], "date", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["budget"], "date", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t";
            // line 45
            echo "\t\t\t\t\t\t\t";
            // line 46
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["budget"], "status", [], "any", false, false, false, 46) == 0)) {
                // line 47
                echo "\t\t\t\t\t\t\t\t<td>PENDIENTE</td>\t\t
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 48
$context["budget"], "status", [], "any", false, false, false, 48) == 1)) {
                // line 49
                echo "\t\t\t\t\t\t\t\t<td>VISTO</td>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 50
$context["budget"], "status", [], "any", false, false, false, 50) == 2)) {
                // line 51
                echo "\t\t\t\t\t\t\t\t<td>ACEPTADO</td>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 52
$context["budget"], "status", [], "any", false, false, false, 52) == 3)) {
                // line 53
                echo "\t\t\t\t\t\t\t\t<td>RECHAZADO</td>
\t\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["budget"], "subtotal", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["budget"], "total", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("budget_show", ["id" => twig_get_attribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 58), "psswrd" => twig_get_attribute($this->env, $this->source, $context["budget"], "psswrd", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\"> VER</a>
\t\t\t\t\t\t\t\t";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, $context["budget"], "status", [], "any", false, false, false, 59) == 2)) {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t o <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("budget_invoice", ["id" => twig_get_attribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\"> FACTURAR</a>
\t\t\t\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t\t\t\t\t";
            // line 63
            echo "\t\t\t\t\t\t\t\t";
            // line 64
            echo "\t\t\t\t\t\t\t\t";
            // line 65
            echo "\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            // line 69
            echo "
\t\t\t\t";
            // line 74
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['budget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("budget_new", ["idclient" => (isset($context["idclient"]) || array_key_exists("idclient", $context) ? $context["idclient"] : (function () { throw new RuntimeError('Variable "idclient" does not exist.', 77, $this->source); })())]), "html", null, true);
        echo "\">CREAR PRESUPUESTO</a>
\t</div>

\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "budget/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 77,  249 => 75,  243 => 74,  240 => 69,  235 => 65,  233 => 64,  231 => 63,  229 => 62,  223 => 60,  221 => 59,  217 => 58,  212 => 56,  207 => 55,  203 => 53,  201 => 52,  198 => 51,  196 => 50,  193 => 49,  191 => 48,  188 => 47,  185 => 46,  183 => 45,  179 => 43,  175 => 42,  172 => 41,  170 => 40,  166 => 39,  157 => 32,  142 => 18,  132 => 17,  119 => 13,  109 => 12,  89 => 9,  76 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
\t{{parent()}}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/invoice.css') }}\"/>

{% endblock %}

{% block title %}Listado de presupuestos
{% endblock %}

{% block nav %}
\t{{ include('navbar/shownavbar.html.twig') }}
{% endblock %}


{% block body %}


\t\t\t


\t<div class=\"container\" id=\"tableArea\">
\t\t<h1>Listado de presupuestos</h1>
\t\t<table
\t\t\tid=\"dtHorizontalExample\" class=\"table table-striped table-sm\" cellspacing=\"0\" width=\"100%\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nº presupuesto</th>
\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t{# <th>Contrato</th> #}
\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t<th>Subtotal</th>
\t\t\t\t\t<th>Total</th>
\t\t\t\t\t<th>Acciones</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for budget in budgets %}
\t\t\t\t\t{# {% if budget.visible %} #}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ budget.id}}</td>
\t\t\t\t\t\t\t<td>{{ budget.date ? budget.date|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t{# <td>{{ budget.contract }}</td> #}
\t\t\t\t\t\t\t{# <td>{{ budget.status }}</td> #}
\t\t\t\t\t\t\t{% if budget.status == 0 %}
\t\t\t\t\t\t\t\t<td>PENDIENTE</td>\t\t
\t\t\t\t\t\t\t{% elseif budget.status == 1 %}
\t\t\t\t\t\t\t\t<td>VISTO</td>
\t\t\t\t\t\t\t{% elseif budget.status == 2 %}
\t\t\t\t\t\t\t\t<td>ACEPTADO</td>
\t\t\t\t\t\t\t{% elseif budget.status == 3 %}
\t\t\t\t\t\t\t\t<td>RECHAZADO</td>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<td>{{ budget.subtotal }}</td>
\t\t\t\t\t\t\t<td>{{ budget.total }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('budget_show',{'id': budget.id, 'psswrd': budget.psswrd}) }}\"> VER</a>
\t\t\t\t\t\t\t\t{% if budget.status ==2 %}
\t\t\t\t\t\t\t\t\t o <a href=\"{{ path('budget_invoice', {'id': budget.id}) }}\"> FACTURAR</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{# <a href=\"/budget/budget/{{ budget.id }}/{{ budget.psswrd }}\"> GENERAR 2</a> #}
\t\t\t\t\t\t\t\t{# <a href=\"{{ path('invoice_show', {'id': budget.id}) }}\">show</a> #}
\t\t\t\t\t\t\t\t{# <a href=\"{{ path('invoice_edit', {'id': budget.id}) }}\">edit</a> #}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t{# {% endif %} #}

\t\t\t\t{# {% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"8\">No se han encontrado resultados</td>
\t\t\t\t\t</tr> #}
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t<a href=\"{{ path('budget_new', {'idclient': idclient}) }}\">CREAR PRESUPUESTO</a>
\t</div>

\t
{% endblock %}", "budget/index.html.twig", "D:\\GS_DAW\\SEGUNDO\\Proyecto Grupal\\invoice develop\\templates\\budget\\index.html.twig");
    }
}
