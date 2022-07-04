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

/* budget/show.html.twig */
class __TwigTemplate_4b360ac0140ef575e52bac4e0f45d225f52e9fcb0fa25d2b1ed2924ef13e03e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "budget/show.html.twig", 1);
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

        echo "Presupuesto ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "
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
    
\t   



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
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32), 'widget');
        echo "

\t\t\t\t\t</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\tNº de Presupuesto:
\t\t\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "html", null, true);
        echo "
\t\t\t\t</div>


\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">


\t\t\t\t\t<h3>Cliente</h3>
\t\t\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 48, $this->source); })()), "address", [], "any", false, false, false, 48), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 49, $this->source); })()), "telephone", [], "any", false, false, false, 49), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), "html", null, true);
        echo "<br>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
\t\t\t\t\t<h3>Empresa</h3>
\t\t\t\t\t<p id=\"idempresa\" style=\"display: none\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "</p>
\t\t\t\t\t";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 57, $this->source); })()), "address", [], "any", false, false, false, 57), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 58, $this->source); })()), "telephone", [], "any", false, false, false, 58), "html", null, true);
        echo "<br>
\t\t\t\t\t";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 59, $this->source); })()), "email", [], "any", false, false, false, 59), "html", null, true);
        echo "<br>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
\t\t\t\t\t";
        // line 62
        $context["imagen"] = ("img/logos/" . twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 62, $this->source); })()), "logo", [], "any", false, false, false, 62));
        // line 63
        echo "\t\t\t\t\t<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagen"]) || array_key_exists("imagen", $context) ? $context["imagen"] : (function () { throw new RuntimeError('Variable "imagen" does not exist.', 63, $this->source); })())), "html", null, true);
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
        // line 80
        $context["count"] = 0;
        // line 81
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new RuntimeError('Variable "lines" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 82
            echo "\t\t\t\t\t\t\t";
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 82, $this->source); })()) + 1);
            // line 83
            echo "\t\t\t\t\t\t\t";
            $context["total"] = ((twig_get_attribute($this->env, $this->source, $context["line"], "price", [], "any", false, false, false, 83) * twig_get_attribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 83)) + ((twig_get_attribute($this->env, $this->source, $context["line"], "price", [], "any", false, false, false, 83) * twig_get_attribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 83)) * (twig_get_attribute($this->env, $this->source, $context["line"], "vat", [], "any", false, false, false, 83) / 100)));
            // line 84
            echo "\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t<td><input readonly required type=\"text\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "name", [], "any", false, false, false, 86), "html", null, true);
            echo "\" name=\"productName[]\" id=\"productName_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 86, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control\" autocomplete=\"off\"><div class=\"suggestions\" id=\"suggestions_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 86, $this->source); })()), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><input readonly required type=\"number\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 88), "html", null, true);
            echo "\" name=\"quantity[]\" id=\"quantity_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 88, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control quantity\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input readonly required type=\"number\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "price", [], "any", false, false, false, 89), "html", null, true);
            echo "\" step=\"any\" name=\"price[]\" id=\"price_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 89, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input readonly required type=\"number\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "vat", [], "any", false, false, false, 90), "html", null, true);
            echo "\" step=\"any\" name=\"VAT[]\" id=\"vat_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 90, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control price\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t\t<td><input readonly required type=\"number\" disabled value=\"";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 91, $this->source); })()), "html", null, true);
            echo "\" step=\"any\" name=\"total[]\" id=\"total_";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 91, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control total\" autocomplete=\"off\"></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8\">
\t\t\t\t\t<h3>Contrato:
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"form-group\">


\t\t\t\t\t\t";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "contract", [], "any", false, false, false, 106), 'widget');
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
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "subtotal", [], "any", false, false, false, 123), 'widget');
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
\t\t\t<br>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8\">
\t\t\t\t\t";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 140, $this->source); })()), "footer", [], "any", false, false, false, 140), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div=\"row\">

\t\t<div class=\"col-12 text-center mt-4\">
\t\t\t<input type=\"button\" class=\"btn btn-success\" onclick=\"location.href='";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("budget_approbe", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148)]), "html", null, true);
        echo "'\" value=\"ACEPTAR PRESUPUESTO\"/>
\t\t</div>
\t
\t
\t\t<div class=\"col-12 text-center mt-4\">
\t\t\t<input type=\"button\" class=\"btn btn-inverse\" onclick=\"printDiv('printableArea')\" value=\"IMPRIMIR PRESUPUESTO\"/>
\t\t</div>


\t\t<div class=\"col-12 text-center mt-4\">
\t\t\t<input type=\"button\" class=\"btn btn-danger\" onclick=\"location.href='";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("budget_reject", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 158, $this->source); })()), "id", [], "any", false, false, false, 158)]), "html", null, true);
        echo "'\" value=\"RECHAZAR PRESUPUESTO\"/>
\t\t</div>
\t</div>
\t<br><br><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 165
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 166
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
\t<script>
\t
\t//HAGO LOS INPUT READONLY

    var inputSubtotal= document.getElementById('budget_subtotal');
    inputSubtotal.readOnly = true;

    var inputTAX= document.getElementById('taxRate');
    inputTAX.readOnly = true;

    var inputtotal= document.getElementById('budget_total');
    inputtotal.readOnly = true;

\tvar datemonth=document.getElementById('budget_date_month');
\tdatemonth.disabled = true;;

\tvar dateday=document.getElementById('budget_date_day');
\tdateday.disabled = true;

\tvar dateyear=document.getElementById('budget_date_year');
\tdateyear.disabled = true;


    ";
        // line 200
        echo "    var inputcontract= document.getElementById('budget_contract');
    ";
        // line 203
        echo "    inputcontract.rows=\"6\";
    inputcontract.cols=\"80\";
\tinputcontract.readOnly = true;
    </script> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "budget/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 203,  432 => 200,  396 => 166,  391 => 165,  381 => 164,  366 => 158,  353 => 148,  342 => 140,  328 => 129,  319 => 123,  299 => 106,  285 => 94,  274 => 91,  268 => 90,  262 => 89,  256 => 88,  247 => 86,  243 => 84,  240 => 83,  237 => 82,  232 => 81,  230 => 80,  209 => 63,  207 => 62,  201 => 59,  197 => 58,  193 => 57,  189 => 56,  185 => 55,  177 => 50,  173 => 49,  169 => 48,  165 => 47,  154 => 39,  144 => 32,  127 => 17,  117 => 16,  95 => 13,  80 => 7,  76 => 6,  71 => 5,  61 => 4,  38 => 1,);
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

{% block title %}Presupuesto {{ budget.id }}
{% endblock %}

{% block body %}

    
\t   



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
\t\t\t\t\tNº de Presupuesto:
\t\t\t\t\t{{ budget.id }}
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
\t\t\t\t\t\t\t{% set total = (line.price * line.quantity) + (line.price * line.quantity * (line.vat/100))%}
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
\t\t\t\t\t<h3>Contrato:
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"form-group\">


\t\t\t\t\t\t{{ form_widget(form.contract)}}
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
\t\t\t<input type=\"button\" class=\"btn btn-success\" onclick=\"location.href='{{ path('budget_approbe',{'id': budget.id}) }}'\" value=\"ACEPTAR PRESUPUESTO\"/>
\t\t</div>
\t
\t
\t\t<div class=\"col-12 text-center mt-4\">
\t\t\t<input type=\"button\" class=\"btn btn-inverse\" onclick=\"printDiv('printableArea')\" value=\"IMPRIMIR PRESUPUESTO\"/>
\t\t</div>


\t\t<div class=\"col-12 text-center mt-4\">
\t\t\t<input type=\"button\" class=\"btn btn-danger\" onclick=\"location.href='{{ path('budget_reject',{'id': budget.id}) }}'\" value=\"RECHAZAR PRESUPUESTO\"/>
\t\t</div>
\t</div>
\t<br><br><br>
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
\t<script>
\t
\t//HAGO LOS INPUT READONLY

    var inputSubtotal= document.getElementById('budget_subtotal');
    inputSubtotal.readOnly = true;

    var inputTAX= document.getElementById('taxRate');
    inputTAX.readOnly = true;

    var inputtotal= document.getElementById('budget_total');
    inputtotal.readOnly = true;

\tvar datemonth=document.getElementById('budget_date_month');
\tdatemonth.disabled = true;;

\tvar dateday=document.getElementById('budget_date_day');
\tdateday.disabled = true;

\tvar dateyear=document.getElementById('budget_date_year');
\tdateyear.disabled = true;


    {# CAMBIO EL TAMAÑO DEL CONTRACT #}
    var inputcontract= document.getElementById('budget_contract');
    {# inputcontract.style.width = \"500px\";
    inputcontract.style.height = \"400px\"; #}
    inputcontract.rows=\"6\";
    inputcontract.cols=\"80\";
\tinputcontract.readOnly = true;
    </script> 
{% endblock %}
", "budget/show.html.twig", "D:\\GS_DAW\\SEGUNDO\\Proyecto Grupal\\invoice develop\\templates\\budget\\show.html.twig");
    }
}
