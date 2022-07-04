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
class __TwigTemplate_dfb6ce5d4dc5e97b917fda61b86d748a0ce5309328d38a57e6a8ff71326ca42b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "invoice/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Invoice index
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
\t<div class=\"container\">
\t\t<h1>Invoice index</h1>

\t\t<table class=\"table table-striped table-bordered\">
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["invoices"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 25
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "invoicenumber", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            ((twig_get_attribute($this->env, $this->source, $context["invoice"], "date", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "date", [], "any", false, false, false, 27), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "description", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "footer", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "subtotal", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "total", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_print", ["id" => twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/print.png"), "html", null, true);
            echo "\" width=\"25px\"></a>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_show", ["id" => twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"8\">No se han encontrado resultados</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t</tbody>
\t\t</table>

\t</div>

\t<a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_new", ["idclient" => ($context["idclient"] ?? null)]), "html", null, true);
        echo "\">Create new</a>
";
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
        return array (  146 => 48,  139 => 43,  130 => 39,  121 => 35,  117 => 34,  111 => 33,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  83 => 25,  78 => 24,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "invoice/index.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\invoice\\index.html.twig");
    }
}
