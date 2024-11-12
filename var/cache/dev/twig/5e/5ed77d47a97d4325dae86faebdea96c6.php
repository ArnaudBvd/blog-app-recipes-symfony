<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* parts/navbar.html.twig */
class __TwigTemplate_23964399ffd4b5787ee37b79ea1b037a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/navbar.html.twig"));

        // line 1
        yield "<nav>
\t<div class=\"container nav__container\">
\t\t<a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav__logo\">
\t\t\tYUMMY
\t\t</a>
\t\t<ul class=\"nav__menu\">
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\">Recettes</a>
\t\t\t</li>

\t\t\t";
        // line 14
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14))) {
            // line 15
            yield "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_myrecipes", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
            yield "\">Mes recettes</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 19
        yield "
\t\t\t<li>
\t\t\t\t<a href=\"#contact\">Contact</a>
\t\t\t</li>
\t\t\t
\t\t\t";
        // line 24
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "hasRole", ["ROLE_ADMIN"], "method", false, false, false, 24))) {
            // line 25
            yield "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Administration</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 29
        yield "\t\t</ul>
\t\t<div>
\t\t\t<ul class=\"nav__connection\">
\t\t\t\t";
        // line 32
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32))) {
            // line 33
            yield "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 34
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Se connecter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 37
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">S'enregistrer</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 40
        yield "
\t\t\t\t";
        // line 41
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41))) {
            // line 42
            yield "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 43
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se déconnecter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "avatar", [], "any", false, false, false, 46)) ?: ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar_defaut.webp"))), "html", null, true);
            yield "\" class=\"avatar__nav\" alt=\"Avatar de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "firstname", [], "any", false, false, false, 46), "html", null, true);
            yield "\"/>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 49
        yield "\t\t\t</ul>
\t\t</div>
\t\t<div class=\"nav__buttons\">
\t\t\t<button class=\"nav__toggle-open\">
\t\t\t\t<i class=\"uil uil-bars\"></i>
\t\t\t</button>
\t\t\t<button class=\"nav__toggle-close\">
\t\t\t\t<i class=\"uil uil-multiply\"></i>
\t\t\t</button>
\t\t</div>
\t</div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "parts/navbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  139 => 49,  131 => 46,  125 => 43,  122 => 42,  120 => 41,  117 => 40,  111 => 37,  105 => 34,  102 => 33,  100 => 32,  95 => 29,  89 => 25,  87 => 24,  80 => 19,  74 => 16,  71 => 15,  69 => 14,  60 => 8,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav>
\t<div class=\"container nav__container\">
\t\t<a href=\"{{ path('app_home') }}\" class=\"nav__logo\">
\t\t\tYUMMY
\t\t</a>
\t\t<ul class=\"nav__menu\">
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_home') }}\">Accueil</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\">Recettes</a>
\t\t\t</li>

\t\t\t{% if app.user is not null %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('app_myrecipes', {'id': app.user.id}) }}\">Mes recettes</a>
\t\t\t\t</li>
\t\t\t{% endif %}

\t\t\t<li>
\t\t\t\t<a href=\"#contact\">Contact</a>
\t\t\t</li>
\t\t\t
\t\t\t{% if app.user is not null and app.user.hasRole(\"ROLE_ADMIN\") %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Administration</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t</ul>
\t\t<div>
\t\t\t<ul class=\"nav__connection\">
\t\t\t\t{% if app.user is null %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\">Se connecter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_register') }}\">S'enregistrer</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t\t{% if app.user is not null %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Se déconnecter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"{{ app.user.avatar ?: asset('images/avatar_defaut.webp') }}\" class=\"avatar__nav\" alt=\"Avatar de {{ app.user.firstname }}\"/>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"nav__buttons\">
\t\t\t<button class=\"nav__toggle-open\">
\t\t\t\t<i class=\"uil uil-bars\"></i>
\t\t\t</button>
\t\t\t<button class=\"nav__toggle-close\">
\t\t\t\t<i class=\"uil uil-multiply\"></i>
\t\t\t</button>
\t\t</div>
\t</div>
</nav>
", "parts/navbar.html.twig", "C:\\Users\\a-bra\\OneDrive\\Bureau\\blog-app-recipes-symfony\\templates\\parts\\navbar.html.twig");
    }
}
