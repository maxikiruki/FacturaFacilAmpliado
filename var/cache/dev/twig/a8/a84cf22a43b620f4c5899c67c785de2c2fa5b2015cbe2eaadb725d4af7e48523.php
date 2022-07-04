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

/* enterprise/show.html.twig */
class __TwigTemplate_5bfadcdcc153df6ff212dff58ff1654588c5f306a9ab1264fb611b5a9919037f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enterprise/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enterprise/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "enterprise/show.html.twig", 1);
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

        echo "Empresa
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
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>Empresa</h1>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped  table-light\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"col\">Nombre</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Direccion</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Telefono</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Email</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Web</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">NIF</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Logo</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 32, $this->source); })()), "address", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 33, $this->source); })()), "telephone", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 35, $this->source); })()), "web", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 36, $this->source); })()), "nif", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 37, $this->source); })()), "logo", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 h6\">

\t\t\t\t<table class=\"table table-striped  table-light\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Responsables de empresa</th>
\t\t\t\t\t\t\t<th class=\"align-right float-right\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supervisor_index", ["identerprise" => twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\">Añadir</a>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["supervisors"]) || array_key_exists("supervisors", $context) ? $context["supervisors"] : (function () { throw new RuntimeError('Variable "supervisors" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["supervisor"]) {
            // line 62
            echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
            // line 63
            if (twig_get_attribute($this->env, $this->source, $context["supervisor"], "visible", [], "any", false, false, false, 63)) {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $context["supervisor"], "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supervisor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td></td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 h6\">

\t\t\t\t<table class=\"table table-striped table-light\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Pie de empresa</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"font-size: 10px\">Para editar, ir a empresa</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 94, $this->source); })()), "footer", [], "any", false, false, false, 94), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 h6\">

\t\t\t\t<table class=\"table table-striped table-light\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Redes Sociales</th>
\t\t\t\t\t\t\t<th class=\"align-right float-right\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("social_network_new", ["identerprise" => twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112)]), "html", null, true);
        echo "\">Añadir red social</a>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 119, $this->source); })()), "socialnetwork", [], "any", false, false, false, 119));
        foreach ($context['_seq'] as $context["_key"] => $context["socialnetwork"]) {
            // line 120
            echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 121
            if (twig_get_attribute($this->env, $this->source, $context["socialnetwork"], "visible", [], "any", false, false, false, 121)) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["socialnetwork"], "network", [], "any", false, false, false, 122), "html", null, true);
                echo ":
\t\t\t\t\t\t\t\t\t\t";
                // line 123
                echo twig_escape_filter($this->env, $context["socialnetwork"], "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("social_network_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["socialnetwork"], "id", [], "any", false, false, false, 125)]), "html", null, true);
                echo "\">editar</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 127
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['socialnetwork'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>


\t\t<a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_index");
        echo "\">volver al listado</a>
\t\t<a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 139, $this->source); })()), "id", [], "any", false, false, false, 139)]), "html", null, true);
        echo "\"><br/>editar</a>
\t\t";
        // line 140
        echo twig_include($this->env, $context, "enterprise/_delete_form.html.twig");
        echo "


\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "enterprise/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 140,  316 => 139,  312 => 138,  302 => 130,  294 => 127,  289 => 125,  284 => 123,  279 => 122,  277 => 121,  274 => 120,  270 => 119,  260 => 112,  239 => 94,  211 => 68,  204 => 66,  198 => 64,  196 => 63,  193 => 62,  189 => 61,  179 => 54,  159 => 37,  155 => 36,  151 => 35,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  113 => 11,  103 => 10,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Empresa
{% endblock %}

{% block nav %}
\t{{ include('navbar/shownavbar.html.twig') }}
{% endblock %}

{% block body %}

\t<div class=\"container\" id=\"tableArea\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>Empresa</h1>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped  table-light\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"col\">Nombre</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Direccion</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Telefono</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Email</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Web</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">NIF</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Logo</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ enterprise.name }}</td>
\t\t\t\t\t\t\t\t<td>{{ enterprise.address }}</td>
\t\t\t\t\t\t\t\t<td>{{ enterprise.telephone }}</td>
\t\t\t\t\t\t\t\t<td>{{ enterprise.email }}</td>
\t\t\t\t\t\t\t\t<td>{{ enterprise.web }}</td>
\t\t\t\t\t\t\t\t<td>{{ enterprise.nif }}</td>
\t\t\t\t\t\t\t\t<td>{{ enterprise.logo }}</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 h6\">

\t\t\t\t<table class=\"table table-striped  table-light\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Responsables de empresa</th>
\t\t\t\t\t\t\t<th class=\"align-right float-right\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('supervisor_index', {identerprise: enterprise.id} ) }}\">Añadir</a>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% for supervisor in supervisors %}
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t{% if supervisor.visible %}
\t\t\t\t\t\t\t\t\t\t\t{{ supervisor}}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td></td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 h6\">

\t\t\t\t<table class=\"table table-striped table-light\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Pie de empresa</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"font-size: 10px\">Para editar, ir a empresa</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">{{enterprise.footer}}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 h6\">

\t\t\t\t<table class=\"table table-striped table-light\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Redes Sociales</th>
\t\t\t\t\t\t\t<th class=\"align-right float-right\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('social_network_new', {identerprise: enterprise.id} ) }}\">Añadir red social</a>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t{% for socialnetwork in enterprise.socialnetwork %}
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if socialnetwork.visible %}
\t\t\t\t\t\t\t\t\t\t{{socialnetwork.network }}:
\t\t\t\t\t\t\t\t\t\t{{socialnetwork}}
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('social_network_edit', {id: socialnetwork.id}) }}\">editar</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>


\t\t<a href=\"{{ path('enterprise_index') }}\">volver al listado</a>
\t\t<a href=\"{{ path('enterprise_edit', {'id': enterprise.id}) }}\"><br/>editar</a>
\t\t{{ include('enterprise/_delete_form.html.twig') }}


\t{% endblock %}
", "enterprise/show.html.twig", "D:\\GS_DAW\\SEGUNDO\\Proyecto Grupal\\invoice develop\\templates\\enterprise\\show.html.twig");
    }
}
