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

/* enterprise/edit.html.twig */
class __TwigTemplate_3fe8c21077bddd528296d4a89963d9d298f45b4240c2e48e14640bbd701e4c6d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "enterprise/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Editar Empresa
";
    }

    // line 6
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t";
        echo twig_include($this->env, $context, "enterprise/navbar.html.twig");
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
\t\t<h1>Editar Empresa</h1>

\t\t";
        // line 15
        echo twig_include($this->env, $context, "enterprise/_form.html.twig", ["button_label" => "Update"]);
        echo "

\t\t<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_index");
        echo "\">Regresar al listado de empresas</a>

\t\t";
        // line 19
        echo twig_include($this->env, $context, "enterprise/_delete_form.html.twig");
        echo "

\t</div>
";
    }

    public function getTemplateName()
    {
        return "enterprise/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  82 => 17,  77 => 15,  71 => 11,  67 => 10,  60 => 7,  56 => 6,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "enterprise/edit.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\enterprise\\edit.html.twig");
    }
}
