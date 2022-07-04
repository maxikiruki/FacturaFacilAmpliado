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

/* client/navbar.html.twig */
class __TwigTemplate_0daedb2efe6ad0a3f66aa132d54495847e4d9f95d53cff2c2b09ae238bcdb4c0 extends \Twig\Template
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
      <li class=\"nav-item\">
        <a class=\"nav-link disabled\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index", ["idempresa" => twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">Clientes</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index", ["idempresa" => twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">Productos</a>
      </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_listinvoices", ["idempresa" => twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\">Facturas empresa</a>
      </li>      
    </ul>
    <ul class=\"nav navbar-nav navbar-right mobileNav pull-right navbar-text\" id=\"navbarNavDropdown\">
      <li class=\"nav-item dropdown active\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "
        </a>
        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">

        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enterprises"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["enterprise"]) {
            // line 26
            echo "          <a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_show", ["id" => twig_get_attribute($this->env, $this->source, $context["enterprise"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["enterprise"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>          
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enterprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
      </li>       
    </ul>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "client/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  82 => 26,  78 => 25,  71 => 21,  62 => 15,  56 => 12,  50 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/navbar.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\client\\navbar.html.twig");
    }
}
