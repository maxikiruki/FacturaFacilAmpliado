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
class __TwigTemplate_f5b561f1415fe2a2cc9914625f4c8a9cf7c606f21a853577a82db33591a6fc0b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "enterprise/show_invoices.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Listado de facturas de empresa";
    }

    // line 5
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo twig_include($this->env, $context, "enterprise/simplenavbar.html.twig");
        echo "   
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
<div class=\"container\">
\t\t<h1>Invoice index</h1>

\t\t<table class=\"table table-striped table-bordered\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nº Factura</th>
\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t<th>Cliente</th>
\t\t\t\t\t<th>Subtotal</th>
\t\t\t\t\t<th>Total</th>
\t\t\t\t\t<th>acciones</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["invoiceseterprises"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoiceseterprise"]) {
            // line 28
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "invoicenumber", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            ((twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "date", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "date", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "description", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "client", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "subtotal", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "total", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_show", ["id" => twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["invoiceseterprise"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"8\">No se han encontrado resultados</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoiceseterprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t</tbody>
\t\t</table>

\t</div>




    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_index");
        echo "\">Regresar al listado de empresas</a>
";
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
        return array (  153 => 53,  143 => 45,  134 => 41,  125 => 37,  121 => 36,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  93 => 28,  88 => 27,  69 => 10,  65 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "enterprise/show_invoices.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\enterprise\\show_invoices.html.twig");
    }
}
