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

/* recipe/myrecipes.html.twig */
class __TwigTemplate_8ea4dfae7c558811775cc1c722ad139c extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/myrecipes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/myrecipes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recipe/myrecipes.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste de recettes
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<section class=\"myrecipes\">
\t\t<div class=\"container\">
\t\t\t<h1>Bienvenue
\t\t\t\t";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "firstname", [], "any", false, false, false, 10), "html", null, true);
        yield "
\t\t\t\tsur votre liste de recettes</h1>

\t\t\t<div class=\"intro__myrecipes\">
\t\t\t\t<p>C'est ici que vous retrouvez toutes vos recettes.</p>
\t\t\t\t<p>Pour ajouter une recette, il vous suffit de cliquer sur le bouton \"Ajouter une recette\" et de remplir le formulaire.</p>
\t\t\t\t<p>Chaque recette créée peut ensuite être consultée, modifiée ou supprimée.</p>
\t\t\t</div>

\t\t\t<a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recipe_new");
        yield "\">Ajouter une recette</a>

\t\t\t<table
\t\t\t\tclass=\"table\">
\t\t\t\t";
        // line 36
        yield "\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 38
            yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "title", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "description", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "cookingTime", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "preparationTime", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "serving", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "difficulty", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "category", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 47
            ((CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "createdAt", [], "any", false, false, false, 47)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "createdAt", [], "any", false, false, false, 47), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "picture", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\">show</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\">edit</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recipe_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\">delete</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            yield "\t\t\t\t\t\t<h2>Vous n'avez pas encore de recette...</h2>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recipe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "recipe/myrecipes.html.twig";
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
        return array (  201 => 58,  194 => 56,  185 => 52,  181 => 51,  177 => 50,  172 => 48,  168 => 47,  164 => 46,  160 => 45,  156 => 44,  152 => 43,  148 => 42,  144 => 41,  140 => 40,  136 => 39,  133 => 38,  128 => 37,  125 => 36,  118 => 19,  106 => 10,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste de recettes
{% endblock %}

{% block body %}
\t<section class=\"myrecipes\">
\t\t<div class=\"container\">
\t\t\t<h1>Bienvenue
\t\t\t\t{{app.user.firstname}}
\t\t\t\tsur votre liste de recettes</h1>

\t\t\t<div class=\"intro__myrecipes\">
\t\t\t\t<p>C'est ici que vous retrouvez toutes vos recettes.</p>
\t\t\t\t<p>Pour ajouter une recette, il vous suffit de cliquer sur le bouton \"Ajouter une recette\" et de remplir le formulaire.</p>
\t\t\t\t<p>Chaque recette créée peut ensuite être consultée, modifiée ou supprimée.</p>
\t\t\t</div>

\t\t\t<a href=\"{{ path('app_recipe_new') }}\">Ajouter une recette</a>

\t\t\t<table
\t\t\t\tclass=\"table\">
\t\t\t\t{# <thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t<th>Temps de cuisson</th>
\t\t\t\t\t\t\t\t\t<th>Temps de préparation</th>
\t\t\t\t\t\t\t\t\t<th>Nombre de parts</th>
\t\t\t\t\t\t\t\t\t<th>Difficulté</th>
\t\t\t\t\t\t\t\t\t<th>Catégorie</th>
\t\t\t\t\t\t\t\t\t<th>Créée le</th>
\t\t\t\t\t\t\t\t\t<th>Photo</th>
\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead> #}
\t\t\t\t<tbody>
\t\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ recipe.id }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.title }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.description }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.cookingTime }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.preparationTime }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.serving }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.difficulty }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.category }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.createdAt ? recipe.createdAt|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.picture }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_recipe_show', {'id': recipe.id}) }}\">show</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_recipe_edit', {'id': recipe.id}) }}\">edit</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_recipe_delete', {'id': recipe.id}) }}\">delete</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<h2>Vous n'avez pas encore de recette...</h2>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</section>
{% endblock %}
", "recipe/myrecipes.html.twig", "C:\\Users\\a-bra\\OneDrive\\Bureau\\blog-app-recipes-symfony\\templates\\recipe\\myrecipes.html.twig");
    }
}
