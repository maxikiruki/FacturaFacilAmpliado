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

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_73aa520b6c1f9eb504a01e893c4e628c8122d604e38acf3e0092e249eca64015 extends \Twig\Template
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
        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/field_id.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_id.html.twig");
    }
}
