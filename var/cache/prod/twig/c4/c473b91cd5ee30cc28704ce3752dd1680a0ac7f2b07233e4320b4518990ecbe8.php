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

/* main/admin.html.twig */
class __TwigTemplate_91dd3438891bceee2e5d9d025e13710688e677a484c21703641351ba7e7f3293 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('nav', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "</div>
";
    }

    // line 1
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"#\">Factura F&aacute;cil</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
    <ul class=\"navbar-nav\">      
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Usuario ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 11), "html", null, true);
        echo "
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
          <a class=\"dropdown-item\" href=\"#\">Informaci&oacute;n</a>
          <a class=\"dropdown-item\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Desloguear</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
";
    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "<div class=\"example-wrapper\">
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["listuser"]) {
            // line 26
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["listuser"], "roles", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
                // line 27
                echo "      ";
                if (($context["rol"] == "ROLE_USER")) {
                    // line 28
                    echo "        ";
                    // line 29
                    echo "        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listuser"], "username", [], "any", false, false, false, 29), "html", null, true);
                    echo " - max empresas = ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listuser"], "max", [], "any", false, false, false, 29), "html", null, true);
                    echo "
      ";
                }
                // line 31
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listuser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "main/admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  113 => 31,  105 => 29,  103 => 28,  100 => 27,  95 => 26,  91 => 25,  88 => 24,  84 => 23,  73 => 15,  66 => 11,  55 => 2,  51 => 1,  46 => 34,  44 => 23,  41 => 22,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/admin.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\main\\admin.html.twig");
    }
}
