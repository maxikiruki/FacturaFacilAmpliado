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

/* social_network/show.html.twig */
class __TwigTemplate_f3e8d1c5fdb9fb993a10a79ddc199cbd1b023ea9696cbdbca5d34d2675efa0bf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "social_network/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Red social";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Red social</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Url</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["social_network"] ?? null), "url", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("social_network_index");
        echo "\">Regresar a listado de red social</a>

    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("social_network_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["social_network"] ?? null), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\">Editar</a>

    ";
        // line 21
        echo twig_include($this->env, $context, "social_network/_delete_form.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "social_network/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  79 => 19,  74 => 17,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "social_network/show.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\social_network\\show.html.twig");
    }
}
