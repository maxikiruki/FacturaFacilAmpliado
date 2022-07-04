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

/* enterprise/navbar.html.twig */
class __TwigTemplate_6f7b62718f328cc8f00803d56831bfb612226d4d816eb5a2136161b06d7088d4 extends \Twig\Template
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
      <li class=\"nav-item dropdown active\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Empresas
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
 
          <a class=\"dropdown-item\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_show", ["id" => twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">Empresa: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</a>

        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index", ["idempresa" => twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\">Clientes</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index", ["idempresa" => twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\">Productos</a>
      </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_listinvoices", ["idempresa" => twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\">Facturas empresa</a>
      </li>
    </ul>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "enterprise/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  71 => 22,  65 => 19,  55 => 14,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "enterprise/navbar.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\enterprise\\navbar.html.twig");
    }
}
