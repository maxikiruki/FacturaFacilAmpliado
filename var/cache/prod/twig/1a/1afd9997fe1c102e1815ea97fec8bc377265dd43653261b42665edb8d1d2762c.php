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

/* enterprise/show.html.twig */
class __TwigTemplate_e6af5b67d62bf390d6b096712c6b27f20c8f9cbd55f9566bd9ad7a3b16c5044a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "enterprise/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Empresa
";
    }

    // line 6
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t";
        echo twig_include($this->env, $context, "enterprise/shownavbar.html.twig");
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
\t<div class=\"container\">
\t\t<h1>Empresa</h1>
\t\t<table class=\"table table-striped table-light\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Nombre</th>
\t\t\t\t\t<th scope=\"col\">Direccion</th>
\t\t\t\t\t<th scope=\"col\">Telefono</th>
\t\t\t\t\t<th scope=\"col\">Email</th>
\t\t\t\t\t<th scope=\"col\">Web</th>
\t\t\t\t\t<th scope=\"col\">NIF</th>
\t\t\t\t\t<th scope=\"col\">Logo</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "address", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "telephone", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "email", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "web", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "nif", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "logo", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
\t<a href=\"#\">Supervisor</a>
\t<br>
\t\t<a href=\"#\">Pie de empresa</a>
\t</br>
\t<a href=\"#\">RRSS</a>
\t<br/><br/><br/><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_index");
        echo "\">back to list</a>
\t<a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "id", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\"><br/>edit</a>
\t";
        // line 46
        echo twig_include($this->env, $context, "enterprise/_delete_form.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "enterprise/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 46,  131 => 45,  127 => 44,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  71 => 11,  67 => 10,  60 => 7,  56 => 6,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "enterprise/show.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\enterprise\\show.html.twig");
    }
}
