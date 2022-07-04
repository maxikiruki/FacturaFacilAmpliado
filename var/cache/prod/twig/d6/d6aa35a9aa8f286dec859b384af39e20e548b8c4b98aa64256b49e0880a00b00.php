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

/* invoice/edit.html.twig */
class __TwigTemplate_f95c884f6d07080062ba979eb43c8068029cf514df751ffe54fd3854494a7489 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "invoice/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/invoice.css"), "html", null, true);
        echo "\"/>

";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Editar factura
";
    }

    // line 13
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t";
        echo twig_include($this->env, $context, "invoice/navbar.html.twig");
        echo "
";
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "


\t<div class=\"container content-invoice\">
\t\t<div class=\"load-animate animated fadeInUp\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">


\t\t\t\t\t<h1>Editar nueva factura</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\tFecha:
\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 33), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\tNº de Factura:
\t\t\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "invoicenumber", [], "any", false, false, false, 37), "html", null, true);
        echo "
\t\t\t\t</div>


\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">


\t\t\t\t\t<h3>Cliente,</h3>
\t\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "name", [], "any", false, false, false, 45), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "address", [], "any", false, false, false, 46), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "telephone", [], "any", false, false, false, 47), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 48), "html", null, true);
        echo "<br>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
\t\t\t\t\t<h3>Empresa,</h3>
\t\t\t\t\t<p id=\"idempresa\" style=\"display: none\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "id", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
\t\t\t\t\t";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "address", [], "any", false, false, false, 54), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "telephone", [], "any", false, false, false, 55), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "email", [], "any", false, false, false, 56), "html", null, true);
        echo "<br>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t<table class=\"table table-bordered\" id=\"invoiceItem\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th width=\"20px\"><input id=\"checkAll\" class=\"formcontrol\" type=\"checkbox\"></th>
\t\t\t\t\t\t\t<th width=\"100px\">Nombre Producto</th>
\t\t\t\t\t\t\t";
        // line 66
        echo "\t\t\t\t\t\t\t<th width=\"40px\">Cantidad</th>
\t\t\t\t\t\t\t<th width=\"80px\">Precio</th>
\t\t\t\t\t\t\t<th width=\"40px\">%VAT</th>
\t\t\t\t\t\t\t<th width=\"80px\">Total</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        // line 71
        $context["count"] = 0;
        // line 72
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 73
            echo "                        ";
            $context["count"] = (($context["count"] ?? null) + 1);
            // line 74
            echo "                        ";
            $context["total"] = ((twig_get_attribute($this->env, $this->source, $context["line"], "price", [], "any", false, false, false, 74) * twig_get_attribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 74)) - ((twig_get_attribute($this->env, $this->source, $context["line"], "price", [], "any", false, false, false, 74) * twig_get_attribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 74)) * (twig_get_attribute($this->env, $this->source, $context["line"], "vat", [], "any", false, false, false, 74) / 100)));
            // line 75
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><input class=\"itemRow\" type=\"checkbox\"></td>
\t\t\t\t\t\t\t\t<td><input required type=\"text\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "name", [], "any", false, false, false, 77), "html", null, true);
            echo "\" name=\"productName[]\" id=\"productName_";
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "\" class=\"form-control\" autocomplete=\"off\"><div class=\"suggestions\" id=\"suggestions_";
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "\"></div></td>
\t\t\t\t\t\t\t\t<td><input required type=\"number\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 78), "html", null, true);
            echo "\" name=\"quantity[]\" id=\"quantity_";
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "\" class=\"form-control quantity\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input required type=\"number\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "price", [], "any", false, false, false, 79), "html", null, true);
            echo "\" step=\"any\" name=\"price[]\" id=\"price_";
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input required type=\"number\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "vat", [], "any", false, false, false, 80), "html", null, true);
            echo "\" step=\"any\" name=\"VAT[]\" id=\"vat_";
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input required type=\"number\" disabled value=\"";
            // line 81
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo "\" step=\"any\" name=\"total[]\" id=\"total_";
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "\" class=\"form-control total\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3 mt-5\">
\t\t\t\t\t<button class=\"btn btn-danger delete\" id=\"removeRows\" type=\"button\">- Borrar</button>
\t\t\t\t\t<button class=\"btn btn-success\" id=\"addRows\" type=\"button\">+ Agregar Más</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8\">
\t\t\t\t\t<h3>Descripción:
\t\t\t\t\t</h3>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t";
        // line 101
        echo "
\t\t\t\t\t\t";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 102), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"hidden\" value=\"<?php echo \$_SESSION['userid']; ?>\" class=\"form-control\" name=\"userId\">
\t\t\t\t\t\t<input data-loading-text=\"Guardando factura...\" type=\"submit\" name=\"invoice_btn\" value=\"Guardar Factura\" class=\"btn btn-success submit_btn invoice-save-btm\">
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<label>Tasa Impuestos:</label>
\t\t\t\t\t\t<input type=\"number\" class=\"form-control w-100\" name=\"taxRate\" id=\"taxRate\" value=\"21\" placeholder=\"Tasa de Impuestos\">
\t\t\t\t\t\t<div class=\"input-group-addon\">%</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<label>Subtotal:</label>
\t\t\t\t\t\t";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subtotal", [], "any", false, false, false, 122), 'widget');
        echo "

\t\t\t\t\t\t<div class=\"input-group-addon\">euros</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<label>total:</label>
\t\t\t\t\t\t";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "total", [], "any", false, false, false, 129), 'widget');
        echo "

\t\t\t\t\t\t<div class=\"input-group-addon\">euros</div>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>

\t";
        // line 141
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t</div>


\t

\t";
        // line 148
        echo "
";
    }

    // line 151
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/invoice.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "invoice/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 153,  321 => 152,  317 => 151,  312 => 148,  303 => 141,  288 => 129,  278 => 122,  255 => 102,  252 => 101,  234 => 84,  223 => 81,  217 => 80,  211 => 79,  205 => 78,  197 => 77,  193 => 75,  190 => 74,  187 => 73,  182 => 72,  180 => 71,  173 => 66,  161 => 56,  157 => 55,  153 => 54,  149 => 53,  145 => 52,  138 => 48,  134 => 47,  130 => 46,  126 => 45,  115 => 37,  108 => 33,  89 => 18,  85 => 17,  78 => 14,  74 => 13,  66 => 10,  59 => 6,  54 => 5,  50 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "invoice/edit.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\invoice\\edit.html.twig");
    }
}
