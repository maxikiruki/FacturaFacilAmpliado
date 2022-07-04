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
class __TwigTemplate_8481b9bc9b572c2f8bb709cd5039d267a6ea2e3e4603ff6be87c7543596af95a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/baseinvoice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/baseinvoice.html.twig"));

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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "date", [], "any", false, false, false, 11), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-4\">
\t\t\t\tNº de Factura:
\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 15, $this->source); })()), "nextinvoicenumber", [], "any", false, false, false, 15), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
\t\t\t\t<h3>Cliente,</h3>
\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "<br>
\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 20, $this->source); })()), "address", [], "any", false, false, false, 20), "html", null, true);
        echo "<br>
\t\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 21, $this->source); })()), "telephone", [], "any", false, false, false, 21), "html", null, true);
        echo "<br>
\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), "html", null, true);
        echo "<br>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
\t\t\t\t<h3>Empresa,</h3>
\t\t\t\t<p id=\"idempresa\" style=\"display: none\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
\t\t\t\t";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "<br>
\t\t\t\t";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 28, $this->source); })()), "address", [], "any", false, false, false, 28), "html", null, true);
        echo "<br>
\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 29, $this->source); })()), "telephone", [], "any", false, false, false, 29), "html", null, true);
        echo "<br>
\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), "html", null, true);
        echo "<br>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t<table class=\"table table-striped\" id=\"invoiceItem\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th width=\"20px\"><input id=\"checkAll\" class=\"formcontrol\" type=\"checkbox\"></th>
\t\t\t\t\t\t<th width=\"100px\">Nombre Producto</th>
\t\t\t\t\t\t<th width=\"40px\">Cantidad</th>
\t\t\t\t\t\t<th width=\"80px\">Precio</th>
\t\t\t\t\t\t<th width=\"40px\">% IVA</th>
\t\t\t\t\t\t<th width=\"80px\">Total</th>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><input class=\"itemRow\" type=\"checkbox\"></td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"productName[]\" id=\"productName_1\" class=\"form-control\" autocomplete=\"off\"><div class=\"suggestions\" id=\"suggestions_1\"></div></td>
\t\t\t\t\t\t<td><input type=\"number\" name=\"quantity[]\" id=\"quantity_1\" min=\"0\" pattern=\"^[0-9]+\" class=\"form-control quantity\" autocomplete=\"off\"></td>
\t\t\t\t\t\t<td><input type=\"number\" step=\"any\" name=\"price[]\" id=\"price_1\" min=\"0\" pattern=\"^[0-9]+\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t<td><input type=\"number\" step=\"any\" name=\" VAT[]\" id=\"vat_1\" class=\" form-control price\" min=\"0\" pattern=\"^[0-9]+\" autocomplete=\"off\"></td>
\t\t\t\t\t\t<td><input type=\"number\" readonly step=\"any\" name=\"total[]\" min=\"0\" pattern=\"^[0-9]+\" id=\"total_1\" class=\"form-control total\" autocomplete=\"off\"></td>
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<br>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">\t\t\t\t
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "subtotal", [], "any", false, false, false, 72), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "subtotal", [], "any", false, false, false, 72), 'widget');
        echo "
\t\t\t\t\t<div class=\"input-group-addon\">euros</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<label>Total IVA:</label>
\t\t\t\t\t<input type=\"number\" class=\"form-control w-100\" name=\"taxRate\" step=\"any\" id=\"taxRate\">
\t\t\t\t\t<div class=\"input-group-addon\">%</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "total", [], "any", false, false, false, 81), 'label');
        echo ": ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "total", [], "any", false, false, false, 81), 'widget');
        echo "
\t\t\t\t\t<div class=\"input-group-addon\">euros</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "footer", [], "any", false, false, false, 85), 'label');
        echo "
\t\t\t";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "footer", [], "any", false, false, false, 86), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t</div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  178 => 86,  174 => 85,  165 => 81,  152 => 72,  143 => 66,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  62 => 15,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container content-invoice\">
\t<div class=\"load-animate animated fadeInUp\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">
\t\t\t\t<h1>Crear nueva factura</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-8\">
\t\t\t\tFecha:
\t\t\t\t{{ form_widget(form.date)}}
\t\t\t</div>
\t\t\t<div class=\"col-4\">
\t\t\t\tNº de Factura:
\t\t\t\t{{ enterprise.nextinvoicenumber }}
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
\t\t\t\t<h3>Cliente,</h3>
\t\t\t\t{{client.name}}<br>
\t\t\t\t{{client.address}}<br>
\t\t\t\t{{client.telephone}}<br>
\t\t\t\t{{client.email}}<br>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
\t\t\t\t<h3>Empresa,</h3>
\t\t\t\t<p id=\"idempresa\" style=\"display: none\">{{enterprise.id}}</p>
\t\t\t\t{{enterprise.name}}<br>
\t\t\t\t{{enterprise.address}}<br>
\t\t\t\t{{enterprise.telephone}}<br>
\t\t\t\t{{enterprise.email}}<br>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t<table class=\"table table-striped\" id=\"invoiceItem\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th width=\"20px\"><input id=\"checkAll\" class=\"formcontrol\" type=\"checkbox\"></th>
\t\t\t\t\t\t<th width=\"100px\">Nombre Producto</th>
\t\t\t\t\t\t<th width=\"40px\">Cantidad</th>
\t\t\t\t\t\t<th width=\"80px\">Precio</th>
\t\t\t\t\t\t<th width=\"40px\">% IVA</th>
\t\t\t\t\t\t<th width=\"80px\">Total</th>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><input class=\"itemRow\" type=\"checkbox\"></td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"productName[]\" id=\"productName_1\" class=\"form-control\" autocomplete=\"off\"><div class=\"suggestions\" id=\"suggestions_1\"></div></td>
\t\t\t\t\t\t<td><input type=\"number\" name=\"quantity[]\" id=\"quantity_1\" min=\"0\" pattern=\"^[0-9]+\" class=\"form-control quantity\" autocomplete=\"off\"></td>
\t\t\t\t\t\t<td><input type=\"number\" step=\"any\" name=\"price[]\" id=\"price_1\" min=\"0\" pattern=\"^[0-9]+\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t<td><input type=\"number\" step=\"any\" name=\" VAT[]\" id=\"vat_1\" class=\" form-control price\" min=\"0\" pattern=\"^[0-9]+\" autocomplete=\"off\"></td>
\t\t\t\t\t\t<td><input type=\"number\" readonly step=\"any\" name=\"total[]\" min=\"0\" pattern=\"^[0-9]+\" id=\"total_1\" class=\"form-control total\" autocomplete=\"off\"></td>
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
\t\t\t\t\t{{ form_widget(form.description)}}
\t\t\t\t</div>
\t\t\t\t<br>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">\t\t\t\t
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t{{ form_label(form.subtotal)}}{{ form_widget(form.subtotal)}}
\t\t\t\t\t<div class=\"input-group-addon\">euros</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<label>Total IVA:</label>
\t\t\t\t\t<input type=\"number\" class=\"form-control w-100\" name=\"taxRate\" step=\"any\" id=\"taxRate\">
\t\t\t\t\t<div class=\"input-group-addon\">%</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t{{ form_label(form.total)}}: {{ form_widget(form.total)}}
\t\t\t\t\t<div class=\"input-group-addon\">euros</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{{form_label(form.footer)}}
\t\t\t{{ form_widget(form.footer)}}
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t</div>
</div>
", "invoice/baseinvoice.html.twig", "D:\\GS_DAW\\SEGUNDO\\Proyecto Grupal\\invoice develop\\templates\\invoice\\baseinvoice.html.twig");
    }
}
