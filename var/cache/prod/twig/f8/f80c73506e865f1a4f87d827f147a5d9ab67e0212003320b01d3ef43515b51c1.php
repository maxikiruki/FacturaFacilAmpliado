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

/* client/simplenavbar.html.twig */
class __TwigTemplate_809d887682dec56665477bb73839f2ed06a1506ae1af6085f4d72680bd9d3d37 extends \Twig\Template
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
      ";
        // line 11
        echo "      <li class=\"nav-item\">
        <a class=\"nav-link disabled\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index", ["idempresa" => twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">Clientes</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index", ["idempresa" => twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\">Productos</a>
      </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_index", ["idclient" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\">Facturas cliente</a>
      </li>    
    </ul>
    <ul class=\"nav navbar-nav navbar-right mobileNav pull-right navbar-text\" id=\"navbarNavDropdown\">
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle disabled\" href=\"#\" id=\"navbarDropdownMenuLink\" aria-haspopup=\"true\" aria-expanded=\"false\">
          ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "
        </a>        
      </li>       
    </ul>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "client/simplenavbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  64 => 18,  58 => 15,  52 => 12,  49 => 11,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/simplenavbar.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\client\\simplenavbar.html.twig");
    }
}
