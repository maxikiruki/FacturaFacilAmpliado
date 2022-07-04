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

/* invoice/show.html.twig */
class __TwigTemplate_23b2c6e5f32149bc688857a3a11eb4ee518b1ca4ea0ee1a673bf10336fdf044b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "invoice/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/invoice.css"), "html", null, true);
        echo "\"/>

";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ver factura
";
    }

    // line 12
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t";
        echo twig_include($this->env, $context, "invoice/navbar.html.twig");
        echo "
";
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "\t<div class=\"container\">
\t\t<h1>Ver factura</h1>


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
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "invoicenumber", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "date", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "date", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t\t\t<td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "description", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "footer", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "subtotal", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "total", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\">edit</a>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
";
        // line 48
        echo twig_include($this->env, $context, "invoice/_delete_form.html.twig");
        echo "
\t</div>

";
    }

    public function getTemplateName()
    {
        return "invoice/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 48,  133 => 42,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  88 => 17,  84 => 16,  77 => 13,  73 => 12,  65 => 9,  58 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "invoice/show.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\invoice\\show.html.twig");
    }
}
