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

/* main/index.html.twig */
class __TwigTemplate_6d3e3877da124eb7c83675dfbf8b5da4bee294bcd37a532eca0d8caf92613eb8 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  Hello MainController!
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  <style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font:
    18px/1.5 sans-serif; } .example-wrapper code { background: #F5F5F5; padding:
    2px 6px; }
  </style>

    ";
        // line 14
        $context["admin"] = false;
        // line 15
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", true, true, false, 15)) {
            // line 16
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
                // line 17
                echo "        ";
                if (($context["rol"] == "ROLE_ADMIN")) {
                    // line 18
                    echo "          ";
                    $context["admin"] = true;
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      ";
            if ((($context["admin"] ?? null) == true)) {
                // line 22
                echo "        ";
                // line 23
                echo "        ";
                echo twig_include($this->env, $context, "main/admin.html.twig");
                echo "        
      ";
            } else {
                // line 25
                echo "        ";
                echo twig_include($this->env, $context, "main/user.html.twig");
                echo "       
      ";
            }
            // line 27
            echo "      ";
        } else {
            // line 28
            echo "        ";
            // line 29
            echo "        ";
            echo twig_include($this->env, $context, "main/register.html.twig");
            echo "
          
    ";
        }
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 32,  115 => 29,  113 => 28,  110 => 27,  104 => 25,  98 => 23,  96 => 22,  93 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  73 => 16,  70 => 15,  68 => 14,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/index.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\main\\index.html.twig");
    }
}
