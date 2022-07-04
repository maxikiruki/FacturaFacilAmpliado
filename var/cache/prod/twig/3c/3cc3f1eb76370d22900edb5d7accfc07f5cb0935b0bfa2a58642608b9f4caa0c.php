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

/* enterprise/errormax.html.twig */
class __TwigTemplate_02ca08a9a6772f505c4826944a6c7dff59d6ad60a4f3e3d8666e2c876c817978 extends \Twig\Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('nav', $context, $blocks);
        // line 3
        echo " 

<h1>Error de creaci&oacute;n de Empresas</h1>
<p> Limite superado, contacte con el administrador para ampliar su licencia.- </p>";
    }

    // line 1
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "enterprise/errormax.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 1,  40 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "enterprise/errormax.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\enterprise\\errormax.html.twig");
    }
}
