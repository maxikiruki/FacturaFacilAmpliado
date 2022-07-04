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
class __TwigTemplate_2b09b47c0bac47bc6e026f656424e86f7c1f5b853bc1f5214772b31aa4855567 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/user.html.twig"));

        // line 1
        $this->displayBlock('nav', $context, $blocks);
        // line 22
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "username", [], "any", false, false, false, 12), "html", null, true);
        echo "
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Desloguear</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "\t<div class=\"container mt-2\">
\t\t<h2>Seleccione una empresa</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"card-deck\" id=\"tarjeta\">
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "enterprises", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["enterprise"]) {
            // line 29
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["enterprise"], "visible", [], "any", false, false, false, 29) == true)) {
                // line 30
                echo "\t\t\t\t\t\t\t<div class=\"card bg-light\">
\t\t\t\t\t\t\t\t";
                // line 31
                if (((twig_get_attribute($this->env, $this->source, $context["enterprise"], "logo", [], "any", false, false, false, 31) != "") || (twig_get_attribute($this->env, $this->source, $context["enterprise"], "logo", [], "any", false, false, false, 31) != null))) {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["imagen"] = ("img/logos/" . twig_get_attribute($this->env, $this->source, $context["enterprise"], "logo", [], "any", false, false, false, 32));
                    // line 33
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["imagen"] = "img/logos/default.png";
                    // line 35
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_show", ["id" => twig_get_attribute($this->env, $this->source, $context["enterprise"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagen"]) || array_key_exists("imagen", $context) ? $context["imagen"] : (function () { throw new RuntimeError('Variable "imagen" does not exist.', 37, $this->source); })())), "html", null, true);
                echo "\" width=\"100%\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_show", ["id" => twig_get_attribute($this->env, $this->source, $context["enterprise"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["enterprise"], "name", [], "any", false, false, false, 40), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["enterprise"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">Editar</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["enterprise"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">Eliminar</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enterprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t";
        $context["visibles"] = 0;
        // line 50
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "enterprises", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["enterprise"]) {
            // line 51
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["enterprise"], "visible", [], "any", false, false, false, 51) == true)) {
                // line 52
                echo "\t\t\t\t\t\t\t";
                $context["visibles"] = ((isset($context["visibles"]) || array_key_exists("visibles", $context) ? $context["visibles"] : (function () { throw new RuntimeError('Variable "visibles" does not exist.', 52, $this->source); })()) + 1);
                // line 53
                echo "\t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enterprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t\t";
        // line 56
        echo "\t\t\t\t\t";
        if (((isset($context["visibles"]) || array_key_exists("visibles", $context) ? $context["visibles"] : (function () { throw new RuntimeError('Variable "visibles" does not exist.', 56, $this->source); })()) != twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "max", [], "any", false, false, false, 56))) {
            // line 57
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(((isset($context["visibles"]) || array_key_exists("visibles", $context) ? $context["visibles"] : (function () { throw new RuntimeError('Variable "visibles" does not exist.', 57, $this->source); })()) + 1), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "max", [], "any", false, false, false, 57)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 58
                echo "\t\t\t\t\t\t\t<div class=\"card bg-light\">
\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 61
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enterprise_new");
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/add.png"), "html", null, true);
                echo "\" width='100%'/></a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/user.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  233 => 67,  230 => 66,  217 => 61,  212 => 58,  207 => 57,  204 => 56,  202 => 55,  196 => 54,  193 => 53,  190 => 52,  187 => 51,  182 => 50,  179 => 49,  173 => 48,  166 => 44,  162 => 43,  154 => 40,  146 => 37,  143 => 36,  140 => 35,  137 => 34,  134 => 33,  131 => 32,  129 => 31,  126 => 30,  123 => 29,  119 => 28,  112 => 23,  102 => 22,  85 => 15,  79 => 12,  67 => 2,  57 => 1,  47 => 22,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block nav %}
\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t<a class=\"navbar-brand\" href=\"#\">Factura F&aacute;cil</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\tUsuario
\t\t\t\t\t\t{{user.username}}
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_logout')}}\">Desloguear</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
{% endblock %}
{% block body %}
\t<div class=\"container mt-2\">
\t\t<h2>Seleccione una empresa</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"card-deck\" id=\"tarjeta\">
\t\t\t\t\t{% for enterprise in user.enterprises %}
\t\t\t\t\t\t{% if enterprise.visible == true %}
\t\t\t\t\t\t\t<div class=\"card bg-light\">
\t\t\t\t\t\t\t\t{% if enterprise.logo != \"\" or enterprise.logo != null %}
\t\t\t\t\t\t\t\t\t{% set imagen = \"img/logos/\" ~ enterprise.logo %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% set imagen = \"img/logos/default.png\" %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path('enterprise_show', {id: enterprise.id})}}\"><img src=\"{{ asset(imagen)}}\" width=\"100%\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path('enterprise_show', {id: enterprise.id})}}\">{{ enterprise.name }}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path('enterprise_edit', {id: enterprise.id})}}\">Editar</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('enterprise_delete', {id: enterprise.id})}}\">Eliminar</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% set visibles = 0 %}
\t\t\t\t\t{% for enterprise in user.enterprises %}
\t\t\t\t\t\t{% if enterprise.visible == true %}
\t\t\t\t\t\t\t{% set visibles = visibles +1 %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{# {% for i in range(visibles + 1, user.max) %} #}
\t\t\t\t\t{% if visibles != user.max %}
\t\t\t\t\t\t{% for i in visibles+1..user.max %}
\t\t\t\t\t\t\t<div class=\"card bg-light\">
\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('enterprise_new')}}\"><img src=\"{{ asset('img/add.png') }}\" width='100%'/></a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "main/user.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\main\\user.html.twig");
    }
}
