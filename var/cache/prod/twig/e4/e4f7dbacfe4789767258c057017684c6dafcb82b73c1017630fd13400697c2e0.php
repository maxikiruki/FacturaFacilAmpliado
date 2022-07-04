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

/* invoice/baseinvoice.html.twig */
class __TwigTemplate_2515b9c445e948f94cb7da47e0ebf68335007ff5e4d3b34136fb0034fc41fb85 extends \Twig\Template
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
        // line 1
        echo "<div class=\"container content-invoice\">
\t<div class=\"load-animate animated fadeInUp\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">
\t\t\t\t<h1>Crear nueva factura</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-8\">
\t\t\t\tFecha:
\t\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 11), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-4\">
\t\t\t\tNº de Factura:
\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "nextinvoicenumber", [], "any", false, false, false, 15), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
\t\t\t\t<h3>Cliente,</h3>
\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "<br>
\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "address", [], "any", false, false, false, 20), "html", null, true);
        echo "<br>
\t\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "telephone", [], "any", false, false, false, 21), "html", null, true);
        echo "<br>
\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 22), "html", null, true);
        echo "<br>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
\t\t\t\t<h3>Empresa,</h3>
\t\t\t\t<p id=\"idempresa\" style=\"display: none\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
\t\t\t\t";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "<br>
\t\t\t\t";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "address", [], "any", false, false, false, 28), "html", null, true);
        echo "<br>
\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "telephone", [], "any", false, false, false, 29), "html", null, true);
        echo "<br>
\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "email", [], "any", false, false, false, 30), "html", null, true);
        echo "<br>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t<table class=\"table table-bordered\" id=\"invoiceItem\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th width=\"20px\"><input id=\"checkAll\" class=\"formcontrol\" type=\"checkbox\"></th>
\t\t\t\t\t\t<th width=\"100px\">Nombre Producto</th>
\t\t\t\t\t\t<th width=\"40px\">Cantidad</th>
\t\t\t\t\t\t<th width=\"80px\">Precio</th>
\t\t\t\t\t\t<th width=\"40px\">% Descuento</th>
\t\t\t\t\t\t<th width=\"80px\">Total</th>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><input class=\"itemRow\" type=\"checkbox\"></td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"productName[]\" id=\"productName_1\" class=\"form-control\" autocomplete=\"off\"><div class=\"suggestions\" id=\"suggestions_1\"></div></td>
\t\t\t\t\t\t<td><input type=\"number\" name=\"quantity[]\" id=\"quantity_1\" class=\"form-control quantity\" autocomplete=\"off\"></td>
\t\t\t\t\t\t<td><input type=\"number\" step=\"any\" name=\"price[]\" id=\"price_1\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t<td><input type=\"number\" step=\"any\" name=\" VAT[]\" id=\"vat_1\" class=\" form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t<td><input type=\"number\" readonly step=\"any\" name=\"total[]\" id=\"total_1\" class=\"form-control total\" autocomplete=\"off\"></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3 mt-5\">
\t\t\t\t<button class=\"btn btn-danger delete\" id=\"removeRows\" type=\"button\">- Borrar</button>
\t\t\t\t<button class=\"btn btn-success\" id=\"addRows\" type=\"button\">+ Agregar Más</button>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8\">
\t\t\t\t<h3>Descripción:
\t\t\t\t</h3>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 66), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<br>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<label>Tasa Impuestos:</label>
\t\t\t\t\t<input type=\"number\" class=\"form-control w-100\" name=\"taxRate\" id=\"taxRate\" value=\"21\" placeholder=\"Tasa de Impuestos\">
\t\t\t\t\t<div class=\"input-group-addon\">%</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<label>Subtotal:</label>
\t\t\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subtotal", [], "any", false, false, false, 78), 'widget');
        echo "
\t\t\t\t\t<div class=\"input-group-addon\">euros</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<label>total:</label>
\t\t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "total", [], "any", false, false, false, 83), 'widget');
        echo "
\t\t\t\t\t<div class=\"input-group-addon\">euros</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "footer", [], "any", false, false, false, 87), 'label');
        echo "
\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "footer", [], "any", false, false, false, 88), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "invoice/baseinvoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 88,  167 => 87,  160 => 83,  152 => 78,  137 => 66,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  56 => 15,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "invoice/baseinvoice.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\invoice\\baseinvoice.html.twig");
    }
}
