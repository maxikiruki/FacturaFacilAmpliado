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

/* navbar/invoicenavbar.html.twig */
class __TwigTemplate_cc4286b4195e19bd7b9d6966ed42a9177395ff29931dfc18ba511edd6a0c08a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/invoicenavbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/invoicenavbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">Factura F&aacute;cil</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
    <ul class=\"navbar-nav\">
      ";
        // line 11
        echo "      <li class=\"nav-item\">
        <a class=\"nav-link disabled\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index", ["idempresa" => twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">Clientes</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index", ["idempresa" => twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\">Productos</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_index", ["idclient" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\">Mostrar Facturas</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("budget_index", ["idclient" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\">Mostrar presupuestos</a>
      </li> 
    </ul>
    <ul class=\"nav navbar-nav navbar-right mobileNav pull-right navbar-text\" id=\"navbarNavDropdown\">
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle disabled\" href=\"#\" id=\"navbarDropdownMenuLink\" aria-haspopup=\"true\" aria-expanded=\"false\">
          ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "
        </a>        
      </li>       
    </ul>
  </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar/invoicenavbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  76 => 21,  70 => 18,  64 => 15,  58 => 12,  55 => 11,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"{{ path('main')}}\">Factura F&aacute;cil</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
    <ul class=\"navbar-nav\">
      {# <li class=\"nav-item\">
        <a class=\"nav-link active\" href=\"{{path('enterprise_show', {id: enterprise.id})}}\">Empresa: {{enterprise.name}}</a>
      </li>       #}
      <li class=\"nav-item\">
        <a class=\"nav-link disabled\" href=\"{{ path('client_index', {'idempresa': enterprise.id}) }}\">Clientes</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('product_index', {'idempresa': enterprise.id}) }}\">Productos</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('invoice_index', {'idclient': client.id}) }}\">Mostrar Facturas</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('budget_index', {'idclient': client.id}) }}\">Mostrar presupuestos</a>
      </li> 
    </ul>
    <ul class=\"nav navbar-nav navbar-right mobileNav pull-right navbar-text\" id=\"navbarNavDropdown\">
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle disabled\" href=\"#\" id=\"navbarDropdownMenuLink\" aria-haspopup=\"true\" aria-expanded=\"false\">
          {{enterprise.name}}
        </a>        
      </li>       
    </ul>
  </div>
</nav>", "navbar/invoicenavbar.html.twig", "D:\\GS_DAW\\SEGUNDO\\Proyecto Grupal\\invoice develop\\templates\\navbar\\invoicenavbar.html.twig");
    }
}
