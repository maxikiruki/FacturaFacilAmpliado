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

/* main/user.html.twig */
class __TwigTemplate_591a1e2370640ab0f479b3c72921b9bbbdcc7499068638ec4229777307d2eae5 extends \Twig\Template
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
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t<a class=\"navbar-brand\" href=\"#\">Factura F&aacute;cil</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\tUsuario
\t\t\t\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 12), "html", null, true);
        echo "
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Informaci&oacute;n</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Desloguear</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
";
    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
\t<div class=\"container mt-2\">
\t\t<h2>Seleccione una empresa</h2>

\t\t<div class=\"card-deck\">
\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "enterprises", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["enterprise"]) {
            // line 31
            echo "\t\t\t\t<div class=\"card bg-light\">

\t\t\t\t\t";
            // line 33
            if (((twig_get_attribute($this->env, $this->source, $context["enterprise"], "logo", [], "any", false, false, false, 33) != "") || (twig_get_attribute($this->env, $this->source, $context["enterprise"], "logo", [], "any", false, false, false, 33) != null))) {
                // line 34
                echo "\t\t\t\t\t\t";
                $context["imagen"] = ("img/logos/" . twig_get_attribute($this->env, $this->source, $context["enterprise"], "logo", [], "any", false, false, false, 34));
                // line 35
                echo "\t\t\t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t\t\t";
                $context["imagen"] = "img/logos/default.png";
                // line 37
                echo "\t\t\t\t\t";
            }
            // line 38
            echo "
\t\t\t\t\t<div class=\"card-header\"><img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["imagen"] ?? null)), "html", null, true);
            echo "\" width=\"100%\"></div>
\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_show", ["id" => twig_get_attribute($this->env, $this->source, $context["enterprise"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["enterprise"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"card-text text-center\">
\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["enterprise"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">editar</a>
\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["enterprise"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">eliminar</a>
\t\t\t\t\t</p>

\t\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enterprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
\t\t\t";
        // line 52
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "enterprises", [], "any", false, false, false, 52)) < twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "max", [], "any", false, false, false, 52))) {
            // line 53
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "enterprises", [], "any", false, false, false, 53)) + 1), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "max", [], "any", false, false, false, 53)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 54
                echo "
\t\t\t\t\t<div class=\"card bg-light\">
\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 58
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_new");
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/add.png"), "html", null, true);
                echo "\" width='150px'/></a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t\t";
        }
        // line 65
        echo "
\t\t</div>
\t</div>


";
    }

    public function getTemplateName()
    {
        return "main/user.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  180 => 65,  177 => 64,  163 => 58,  157 => 54,  152 => 53,  150 => 52,  147 => 51,  135 => 45,  131 => 44,  123 => 41,  118 => 39,  115 => 38,  112 => 37,  109 => 36,  106 => 35,  103 => 34,  101 => 33,  97 => 31,  93 => 30,  86 => 25,  82 => 24,  71 => 16,  64 => 12,  52 => 2,  48 => 1,  44 => 24,  41 => 23,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/user.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\main\\user.html.twig");
    }
}
