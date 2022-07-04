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

/* client/index.html.twig */
class __TwigTemplate_f2015b73d75e34421070aa4f270ad45ac19ea0d80829b1844791ba35473a9a4c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Listado de clientes
";
    }

    // line 6
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t";
        echo twig_include($this->env, $context, "client/navbar.html.twig");
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "

\t<div class=\"container\" id=\"tableArea\">
\t\t<h1>Listado de clientes</h1>

\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t<th>Direccion</th>
\t\t\t\t\t<th>DNI</th>
\t\t\t\t\t<th>E-mail</th>
\t\t\t\t\t<th>Telefono</th>
\t\t\t\t\t<th>Web</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 29
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "address", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nif", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "telephone", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "web", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_show", ["client" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 37), "idempresa" => twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Mostrar</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">Editar</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"8\">No se han encontrado resultados</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>

\t<a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_new", ["idempresa" => ($context["id_empresa"] ?? null)]), "html", null, true);
        echo "\">Crear nuevo cliente</a>
";
    }

    public function getTemplateName()
    {
        return "client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  145 => 46,  136 => 42,  127 => 38,  123 => 37,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  95 => 29,  90 => 28,  71 => 11,  67 => 10,  60 => 7,  56 => 6,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/index.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\client\\index.html.twig");
    }
}
