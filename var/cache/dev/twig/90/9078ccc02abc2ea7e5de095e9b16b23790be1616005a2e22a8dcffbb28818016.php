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

/* navbar/navbar.html.twig */
class __TwigTemplate_e7dfe0928ef0e0e1bc77b3d2ca99752ef57d61621a653c3f21050dd56684df74 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-light bg-light\">
\t<a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">Factura F&aacute;cil</a>
\t<button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample04\" aria-controls=\"navbarsExample04\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"navbar-collapse collapse\" id=\"navbarsExample04\" style=\"\">
\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index", ["idempresa" => twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\">Clientes</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index", ["idempresa" => twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\">Productos</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_listinvoices", ["idempresa" => twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">Facturas empresa</a>
\t\t\t</li>\t\t\t
\t\t</ul>
\t\t<li class=\"nav-item dropdown active list-inline\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">

\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enterprises"]) || array_key_exists("enterprises", $context) ? $context["enterprises"] : (function () { throw new RuntimeError('Variable "enterprises" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["enterprise"]) {
            // line 26
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["enterprise"], "visible", [], "any", false, false, false, 26)) {
                // line 27
                echo "\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_show", ["id" => twig_get_attribute($this->env, $this->source, $context["enterprise"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["enterprise"], "name", [], "any", false, false, false, 27), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 29
            echo "
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enterprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t</div>
\t\t\t</li>\t\t
\t</div>
</nav>















<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">Factura F&aacute;cil</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item dropdown active\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Empresas
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
 
          <a class=\"dropdown-item\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\">Empresa: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63), "html", null, true);
        echo "</a>

        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index", ["idempresa" => twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\">Clientes</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index", ["idempresa" => twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71)]), "html", null, true);
        echo "\">Productos</a>
      </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_listinvoices", ["idempresa" => twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)]), "html", null, true);
        echo "\">Facturas empresa</a>
      </li>
    </ul>
  </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 74,  159 => 71,  153 => 68,  143 => 63,  128 => 51,  106 => 31,  99 => 29,  91 => 27,  88 => 26,  84 => 25,  77 => 21,  69 => 16,  63 => 13,  57 => 10,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-light bg-light\">
\t<a class=\"navbar-brand\" href=\"{{ path('main')}}\">Factura F&aacute;cil</a>
\t<button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample04\" aria-controls=\"navbarsExample04\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"navbar-collapse collapse\" id=\"navbarsExample04\" style=\"\">
\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ path('client_index', {'idempresa': enterprise.id}) }}\">Clientes</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ path('product_index', {'idempresa': enterprise.id}) }}\">Productos</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ path('enterprise_listinvoices', {'idempresa': enterprise.id}) }}\">Facturas empresa</a>
\t\t\t</li>\t\t\t
\t\t</ul>
\t\t<li class=\"nav-item dropdown active list-inline\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t{{enterprise.name}}
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">

\t\t\t\t\t{% for enterprise in enterprises %}
\t\t\t\t\t\t{% if enterprise.visible %}
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('enterprise_show', {id: enterprise.id})}}\">{{enterprise.name}}</a>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</li>\t\t
\t</div>
</nav>















<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"{{ path('main')}}\">Factura F&aacute;cil</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item dropdown active\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Empresas
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
 
          <a class=\"dropdown-item\" href=\"{{ path('enterprise_show', {'id': enterprise.id}) }}\">Empresa: {{enterprise.name}}</a>

        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('client_index', {'idempresa': enterprise.id}) }}\">Clientes</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('product_index', {'idempresa': enterprise.id}) }}\">Productos</a>
      </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('enterprise_listinvoices', {idempresa: enterprise.id}) }}\">Facturas empresa</a>
      </li>
    </ul>
  </div>
</nav>", "navbar/navbar.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\navbar\\navbar.html.twig");
    }
}
