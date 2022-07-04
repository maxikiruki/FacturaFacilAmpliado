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

/* invoice/duplicate.html.twig */
class __TwigTemplate_80c4bdc60aacdc6610271abf57d308742f8a381570d61a371bde89ba6d208274 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/duplicate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/duplicate.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "invoice/duplicate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/invoice.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Editar factura
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 14
        echo "\t";
        echo twig_include($this->env, $context, "navbar/navbar.html.twig");
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
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "


\t<div class=\"container content-invoice\">
\t\t<div class=\"load-animate animated fadeInUp\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">


\t\t\t\t\t<h1>Duplicar factura</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\tFecha:
\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "date", [], "any", false, false, false, 33), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\tNº de Factura:
\t\t\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 37, $this->source); })()), "invoicenumber", [], "any", false, false, false, 37), "html", null, true);
        echo "
\t\t\t\t</div>


\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">


\t\t\t\t\t<h3>Cliente,</h3>
\t\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 46, $this->source); })()), "address", [], "any", false, false, false, 46), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 47, $this->source); })()), "telephone", [], "any", false, false, false, 47), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), "html", null, true);
        echo "<br>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
\t\t\t\t\t<h3>Empresa,</h3>
\t\t\t\t\t<p id=\"idempresa\" style=\"display: none\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
\t\t\t\t\t";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 54, $this->source); })()), "address", [], "any", false, false, false, 54), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 55, $this->source); })()), "telephone", [], "any", false, false, false, 55), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56), "html", null, true);
        echo "<br>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t<table class=\"table table-striped\" id=\"invoiceItem\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new RuntimeError('Variable "lines" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 73
            echo "                        ";
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 73, $this->source); })()) + 1);
            // line 74
            echo "                        ";
            $context["total"] = ((twig_get_attribute($this->env, $this->source, $context["line"], "price", [], "any", false, false, false, 74) * twig_get_attribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 74)) + ((twig_get_attribute($this->env, $this->source, $context["line"], "price", [], "any", false, false, false, 74) * twig_get_attribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 74)) * (twig_get_attribute($this->env, $this->source, $context["line"], "vat", [], "any", false, false, false, 74) / 100)));
            // line 75
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><input class=\"itemRow\" type=\"checkbox\"></td>
\t\t\t\t\t\t\t\t<td><input required type=\"text\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "name", [], "any", false, false, false, 77), "html", null, true);
            echo "\" name=\"productName[]\" id=\"productName_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 77, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control\" autocomplete=\"off\"><div class=\"suggestions\" id=\"suggestions_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 77, $this->source); })()), "html", null, true);
            echo "\"></div></td>
\t\t\t\t\t\t\t\t<td><input required type=\"number\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 78), "html", null, true);
            echo "\" name=\"quantity[]\" id=\"quantity_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 78, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control quantity\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input required type=\"number\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "price", [], "any", false, false, false, 79), "html", null, true);
            echo "\" step=\"any\" name=\"price[]\" id=\"price_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 79, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input required type=\"number\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "vat", [], "any", false, false, false, 80), "html", null, true);
            echo "\" step=\"any\" name=\"VAT[]\" id=\"vat_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 80, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input required type=\"number\" disabled value=\"";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 81, $this->source); })()), "html", null, true);
            echo "\" step=\"any\" name=\"total[]\" id=\"total_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 81, $this->source); })()), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "description", [], "any", false, false, false, 102), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "subtotal", [], "any", false, false, false, 122), 'widget');
        echo "

\t\t\t\t\t\t<div class=\"input-group-addon\">euros</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<label>total:</label>
\t\t\t\t\t\t";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "total", [], "any", false, false, false, 129), 'widget');
        echo "

\t\t\t\t\t\t<div class=\"input-group-addon\">euros</div>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>

\t";
        // line 141
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), 'form_end');
        echo "
\t</div>


\t

\t";
        // line 148
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 152
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/invoice.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "invoice/duplicate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 153,  387 => 152,  377 => 151,  366 => 148,  357 => 141,  342 => 129,  332 => 122,  309 => 102,  306 => 101,  288 => 84,  277 => 81,  271 => 80,  265 => 79,  259 => 78,  251 => 77,  247 => 75,  244 => 74,  241 => 73,  236 => 72,  234 => 71,  227 => 66,  215 => 56,  211 => 55,  207 => 54,  203 => 53,  199 => 52,  192 => 48,  188 => 47,  184 => 46,  180 => 45,  169 => 37,  162 => 33,  143 => 18,  133 => 17,  120 => 14,  110 => 13,  90 => 10,  77 => 6,  72 => 5,  62 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block stylesheet %}
\t{{parent()}}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/invoice.css') }}\"/>

{% endblock %}

{% block title %}Editar factura
{% endblock %}

{% block nav %}
\t{{ include('navbar/navbar.html.twig') }}
{% endblock %}

{% block body %}
\t{{ form_start(form) }}


\t<div class=\"container content-invoice\">
\t\t<div class=\"load-animate animated fadeInUp\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">


\t\t\t\t\t<h1>Duplicar factura</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\tFecha:
\t\t\t\t\t{{ form_widget(form.date)}}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\tNº de Factura:
\t\t\t\t\t{{ invoice.invoicenumber }}
\t\t\t\t</div>


\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">


\t\t\t\t\t<h3>Cliente,</h3>
\t\t\t\t\t{{client.name}}<br>
\t\t\t\t\t{{client.address}}<br>
\t\t\t\t\t{{client.telephone}}<br>
\t\t\t\t\t{{client.email}}<br>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
\t\t\t\t\t<h3>Empresa,</h3>
\t\t\t\t\t<p id=\"idempresa\" style=\"display: none\">{{enterprise.id}}</p>
\t\t\t\t\t{{enterprise.name}}<br>
\t\t\t\t\t{{enterprise.address}}<br>
\t\t\t\t\t{{enterprise.telephone}}<br>
\t\t\t\t\t{{enterprise.email}}<br>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t<table class=\"table table-striped\" id=\"invoiceItem\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th width=\"20px\"><input id=\"checkAll\" class=\"formcontrol\" type=\"checkbox\"></th>
\t\t\t\t\t\t\t<th width=\"100px\">Nombre Producto</th>
\t\t\t\t\t\t\t{# <th width=\"250px\">Descripci&oacute;n</th> #}
\t\t\t\t\t\t\t<th width=\"40px\">Cantidad</th>
\t\t\t\t\t\t\t<th width=\"80px\">Precio</th>
\t\t\t\t\t\t\t<th width=\"40px\">%VAT</th>
\t\t\t\t\t\t\t<th width=\"80px\">Total</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% set count = 0 %}
\t\t\t\t\t\t{% for line in lines %}
                        {% set count = count + 1 %}
                        {% set total = (line.price * line.quantity) + (line.price * line.quantity * (line.vat/100))%}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><input class=\"itemRow\" type=\"checkbox\"></td>
\t\t\t\t\t\t\t\t<td><input required type=\"text\" value=\"{{line.name}}\" name=\"productName[]\" id=\"productName_{{count}}\" class=\"form-control\" autocomplete=\"off\"><div class=\"suggestions\" id=\"suggestions_{{ count }}\"></div></td>
\t\t\t\t\t\t\t\t<td><input required type=\"number\" value=\"{{line.quantity}}\" name=\"quantity[]\" id=\"quantity_{{ count }}\" class=\"form-control quantity\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input required type=\"number\" value=\"{{line.price}}\" step=\"any\" name=\"price[]\" id=\"price_{{count}}\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input required type=\"number\" value=\"{{line.vat}}\" step=\"any\" name=\"VAT[]\" id=\"vat_{{ count }}\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input required type=\"number\" disabled value=\"{{total}}\" step=\"any\" name=\"total[]\" id=\"total_{{count}}\" class=\"form-control total\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}

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
\t\t\t\t\t\t{# <textarea class=\"form-control txt\" rows=\"5\" name=\"invoice[description]\" maxlength=\"255\" id=\"invoice_description\" placeholder=\"Descripción\"></textarea> #}

\t\t\t\t\t\t{{ form_widget(form.description)}}
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
\t\t\t\t\t\t{{ form_widget(form.subtotal)}}

\t\t\t\t\t\t<div class=\"input-group-addon\">euros</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<label>total:</label>
\t\t\t\t\t\t{{ form_widget(form.total)}}

\t\t\t\t\t\t<div class=\"input-group-addon\">euros</div>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>

\t{{ form_end(form) }}
\t</div>


\t

\t{# <a href=\"{{ path('invoice_index') }}\">back to list</a> #}

{% endblock %}

{% block javascripts %}
\t{{ parent() }}
\t<script src=\"{{ asset('js/invoice.js') }}\"></script>
{% endblock %}
", "invoice/duplicate.html.twig", "D:\\GS_DAW\\SEGUNDO\\Proyecto Grupal\\invoice develop\\templates\\invoice\\duplicate.html.twig");
    }
}
