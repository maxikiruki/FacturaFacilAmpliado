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

/* invoice/toPrint.html.twig */
class __TwigTemplate_0e82c3b4bd8c51bcca74ce79d0891f69ec8b2b502f7045a24d54b943e318e923 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/toPrint.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/toPrint.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "invoice/toPrint.html.twig", 1);
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
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/toPrint.css"), "html", null, true);
        echo "\"/>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js\"></script>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Imprimir factura
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "

\t<div class=\"container content-invoice dina4\" id=\"printableArea\">
\t\t<div class=\"load-animate animated fadeInUp\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t<p id=\"fecha\" readonly>
\t\t\t\t\t\tFecha:
\t\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "date", [], "any", false, false, false, 28), 'widget');
        echo "

\t\t\t\t\t</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\tNº de Factura:
\t\t\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 35, $this->source); })()), "invoicenumber", [], "any", false, false, false, 35), "html", null, true);
        echo "
\t\t\t\t</div>


\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">


\t\t\t\t\t<h3>Cliente</h3>
\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 44, $this->source); })()), "address", [], "any", false, false, false, 44), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 45, $this->source); })()), "telephone", [], "any", false, false, false, 45), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), "html", null, true);
        echo "<br>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
\t\t\t\t\t<h3>Empresa</h3>
\t\t\t\t\t<p id=\"idempresa\" style=\"display: none\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>
\t\t\t\t\t";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 53, $this->source); })()), "address", [], "any", false, false, false, 53), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 54, $this->source); })()), "telephone", [], "any", false, false, false, 54), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), "html", null, true);
        echo "<br>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
\t\t\t\t\t";
        // line 58
        $context["imagen"] = ("img/logos/" . twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 58, $this->source); })()), "logo", [], "any", false, false, false, 58));
        // line 59
        echo "\t\t\t\t\t<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagen"]) || array_key_exists("imagen", $context) ? $context["imagen"] : (function () { throw new RuntimeError('Variable "imagen" does not exist.', 59, $this->source); })())), "html", null, true);
        echo "\" height=\"136px\">

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t<table class=\"table table-striped\" id=\"invoiceItem\">
\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t<th width=\"100px\">Nombre Producto</th>

\t\t\t\t\t\t\t<th width=\"40px\">Cantidad</th>
\t\t\t\t\t\t\t<th width=\"80px\">Precio</th>
\t\t\t\t\t\t\t<th width=\"40px\">%VAT</th>
\t\t\t\t\t\t\t<th width=\"80px\">Total</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        // line 76
        $context["count"] = 0;
        // line 77
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new RuntimeError('Variable "lines" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 78
            echo "\t\t\t\t\t\t\t";
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 78, $this->source); })()) + 1);
            // line 79
            echo "\t\t\t\t\t\t\t";
            $context["total"] = ((twig_get_attribute($this->env, $this->source, $context["line"], "price", [], "any", false, false, false, 79) * twig_get_attribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 79)) - ((twig_get_attribute($this->env, $this->source, $context["line"], "price", [], "any", false, false, false, 79) * twig_get_attribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 79)) * (twig_get_attribute($this->env, $this->source, $context["line"], "vat", [], "any", false, false, false, 79) / 100)));
            // line 80
            echo "\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t<td><input readonly required type=\"text\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "name", [], "any", false, false, false, 82), "html", null, true);
            echo "\" name=\"productName[]\" id=\"productName_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 82, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control\" autocomplete=\"off\"><div class=\"suggestions\" id=\"suggestions_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 82, $this->source); })()), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><input readonly required type=\"number\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 84), "html", null, true);
            echo "\" name=\"quantity[]\" id=\"quantity_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 84, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control quantity\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input readonly required type=\"number\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "price", [], "any", false, false, false, 85), "html", null, true);
            echo "\" step=\"any\" name=\"price[]\" id=\"price_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 85, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input readonly required type=\"number\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "vat", [], "any", false, false, false, 86), "html", null, true);
            echo "\" step=\"any\" name=\"VAT[]\" id=\"vat_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 86, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input readonly required type=\"number\" disabled value=\"";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 87, $this->source); })()), "html", null, true);
            echo "\" step=\"any\" name=\"total[]\" id=\"total_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 87, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control total\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8\">
\t\t\t\t\t<h3>Descripción:
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"form-group\">


\t\t\t\t\t\t";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "description", [], "any", false, false, false, 102), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<br>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<label>Tasa Impuestos:</label>
\t\t\t\t\t\t<input readonly type=\"number\" class=\"form-control w-100\" name=\"taxRate\" id=\"taxRate\" value=\"21\" placeholder=\"Tasa de Impuestos\">

\t\t\t\t\t\t<div class=\"input-group-addon\">%</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<label>Subtotal:</label>

\t\t\t\t\t\t";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "subtotal", [], "any", false, false, false, 119), 'widget');
        echo "

\t\t\t\t\t\t<div class=\"input-group-addon\">euros</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<label>total:</label>
\t\t\t\t\t\t";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "total", [], "any", false, false, false, 125), 'widget');
        echo "

\t\t\t\t\t\t<div class=\"input-group-addon\">euros</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<br>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8\">
\t\t\t\t\t";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 136, $this->source); })()), "footer", [], "any", false, false, false, 136), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div=\"row\">
\t\t<div class=\"col-12 text-center mt-4\">
\t\t\t<input type=\"button\" class=\"btn btn-success\" onclick=\"printDiv('printableArea')\" value=\"IMPRIMIR FACTURA\"/>
\t\t</div>
\t\t<div class=\"col-12 text-center mt-2 mb-5\">
\t\t\t<input type=\"button\" class=\"btn btn-danger\" onclick=\"window.history.back();\" value=\"Cancelar\"/>
\t\t</div>

\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 153
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/invoice.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\tfunction printDiv(divName) {
var printContents = document.getElementById(divName).innerHTML;
var originalContents = document.body.innerHTML;
document.body.innerHTML = printContents;
window.print();
document.body.innerHTML = originalContents;
}
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "invoice/toPrint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 154,  371 => 153,  361 => 152,  336 => 136,  322 => 125,  313 => 119,  293 => 102,  279 => 90,  268 => 87,  262 => 86,  256 => 85,  250 => 84,  241 => 82,  237 => 80,  234 => 79,  231 => 78,  226 => 77,  224 => 76,  203 => 59,  201 => 58,  195 => 55,  191 => 54,  187 => 53,  183 => 52,  179 => 51,  171 => 46,  167 => 45,  163 => 44,  159 => 43,  148 => 35,  138 => 28,  125 => 17,  115 => 16,  95 => 13,  80 => 7,  76 => 6,  71 => 5,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block stylesheet %}
\t{{parent()}}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/invoice.css') }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('css/toPrint.css') }}\"/>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js\"></script>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

{% endblock %}

{% block title %}Imprimir factura
{% endblock %}

{% block body %}


\t<div class=\"container content-invoice dina4\" id=\"printableArea\">
\t\t<div class=\"load-animate animated fadeInUp\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t<p id=\"fecha\" readonly>
\t\t\t\t\t\tFecha:
\t\t\t\t\t\t{{ form_widget(form.date)}}

\t\t\t\t\t</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\tNº de Factura:
\t\t\t\t\t{{ invoice.invoicenumber }}
\t\t\t\t</div>


\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">


\t\t\t\t\t<h3>Cliente</h3>
\t\t\t\t\t{{client.name}}<br>
\t\t\t\t\t{{client.address}}<br>
\t\t\t\t\t{{client.telephone}}<br>
\t\t\t\t\t{{client.email}}<br>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
\t\t\t\t\t<h3>Empresa</h3>
\t\t\t\t\t<p id=\"idempresa\" style=\"display: none\">{{enterprise.id}}</p>
\t\t\t\t\t{{enterprise.name}}<br>
\t\t\t\t\t{{enterprise.address}}<br>
\t\t\t\t\t{{enterprise.telephone}}<br>
\t\t\t\t\t{{enterprise.email}}<br>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
\t\t\t\t\t{% set imagen = \"img/logos/\" ~ enterprise.logo %}
\t\t\t\t\t<img src=\"{{ asset(imagen)}}\" height=\"136px\">

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t<table class=\"table table-striped\" id=\"invoiceItem\">
\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t<th width=\"100px\">Nombre Producto</th>

\t\t\t\t\t\t\t<th width=\"40px\">Cantidad</th>
\t\t\t\t\t\t\t<th width=\"80px\">Precio</th>
\t\t\t\t\t\t\t<th width=\"40px\">%VAT</th>
\t\t\t\t\t\t\t<th width=\"80px\">Total</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% set count = 0 %}
\t\t\t\t\t\t{% for line in lines %}
\t\t\t\t\t\t\t{% set count = count + 1 %}
\t\t\t\t\t\t\t{% set total = (line.price * line.quantity) - (line.price * line.quantity * (line.vat/100))%}
\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t<td><input readonly required type=\"text\" value=\"{{line.name}}\" name=\"productName[]\" id=\"productName_{{count}}\" class=\"form-control\" autocomplete=\"off\"><div class=\"suggestions\" id=\"suggestions_{{ count }}\"></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><input readonly required type=\"number\" value=\"{{line.quantity}}\" name=\"quantity[]\" id=\"quantity_{{ count }}\" class=\"form-control quantity\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input readonly required type=\"number\" value=\"{{line.price}}\" step=\"any\" name=\"price[]\" id=\"price_{{count}}\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input readonly required type=\"number\" value=\"{{line.vat}}\" step=\"any\" name=\"VAT[]\" id=\"vat_{{ count }}\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input readonly required type=\"number\" disabled value=\"{{total}}\" step=\"any\" name=\"total[]\" id=\"total_{{count}}\" class=\"form-control total\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8\">
\t\t\t\t\t<h3>Descripción:
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"form-group\">


\t\t\t\t\t\t{{ form_widget(form.description)}}
\t\t\t\t\t</div>
\t\t\t\t\t<br>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<label>Tasa Impuestos:</label>
\t\t\t\t\t\t<input readonly type=\"number\" class=\"form-control w-100\" name=\"taxRate\" id=\"taxRate\" value=\"21\" placeholder=\"Tasa de Impuestos\">

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
\t\t\t<br>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8\">
\t\t\t\t\t{{ enterprise.footer }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div=\"row\">
\t\t<div class=\"col-12 text-center mt-4\">
\t\t\t<input type=\"button\" class=\"btn btn-success\" onclick=\"printDiv('printableArea')\" value=\"IMPRIMIR FACTURA\"/>
\t\t</div>
\t\t<div class=\"col-12 text-center mt-2 mb-5\">
\t\t\t<input type=\"button\" class=\"btn btn-danger\" onclick=\"window.history.back();\" value=\"Cancelar\"/>
\t\t</div>

\t</div>
{% endblock %}

{% block javascripts %}
\t{{ parent() }}
\t<script src=\"{{ asset('js/invoice.js') }}\"></script>
\t<script>
\t\tfunction printDiv(divName) {
var printContents = document.getElementById(divName).innerHTML;
var originalContents = document.body.innerHTML;
document.body.innerHTML = printContents;
window.print();
document.body.innerHTML = originalContents;
}
\t</script>
{% endblock %}
", "invoice/toPrint.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\invoice\\toPrint.html.twig");
    }
}
