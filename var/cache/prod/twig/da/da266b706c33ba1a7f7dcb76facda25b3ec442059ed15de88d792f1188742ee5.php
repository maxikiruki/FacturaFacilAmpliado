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

/* security/login.html.twig */
class __TwigTemplate_c923d28b1c483c806b994f040f185a5406ec56bd430d9f9bcb98fad19dbbf251 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in!
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
\t<div class=\"container-fluid\">
\t\t<div class=\"abs-center\">

\t\t\t<form id=\"login\" method=\"post\">
\t\t\t\t";
        // line 15
        if (($context["error"] ?? null)) {
            // line 16
            echo "\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 16), "security"), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 18
        echo "
\t\t\t\t";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\tEst&aacute;s logueado como
\t\t\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "username", [], "any", false, false, false, 22), "html", null, true);
            echo ",
\t\t\t\t\t\t<a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 26
        echo "
\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Por favor, registrese</h1>
\t\t\t\t<label for=\"inputUsername\">Usuario</label>
\t\t\t\t<input type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" class=\"form-control m-auto rounded-pill\" required autofocus>
\t\t\t\t<label for=\"inputPassword\">Contrase&ntilde;a</label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control m-auto rounded-pill\" required>

\t\t\t\t<input
\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t";
        // line 46
        echo "
\t\t\t\t<button class=\"btn btn-lg btn-primary rounded-pill\" type=\"submit\">
\t\t\t\t\tLogueate
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  122 => 34,  114 => 29,  109 => 26,  103 => 23,  99 => 22,  95 => 20,  93 => 19,  90 => 18,  84 => 16,  82 => 15,  75 => 10,  71 => 9,  65 => 7,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\security\\login.html.twig");
    }
}
