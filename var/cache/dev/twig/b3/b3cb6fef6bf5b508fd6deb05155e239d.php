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
        yield "\" class=\"btn__add-new\">Ajouter une recette</a>

\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Catégorie</th>
\t\t\t\t\t\t<th>Difficulté</th>
\t\t\t\t\t\t<th>Créée le</th>
\t\t\t\t\t\t<th>Photo</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 34
            yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "title", [], "any", false, false, false, 35)), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "category", [], "any", false, false, false, 36)), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "difficulty", [], "any", false, false, false, 37)), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 38
            ((CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "createdAt", [], "any", false, false, false, 38)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "createdAt", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true)) : (yield ""));
            yield "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"picture__list\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recipe/" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "picture", [], "any", false, false, false, 41))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "title", [], "any", false, false, false, 41), "html", null, true);
            yield "\" class=\"recipe__picture-list\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t<div class=\"action-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" class=\"action-show\" title=\"Voir la recette\">";
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("healthicons:magnifying-glass");
            yield " </a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"action-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\" class=\"action-edit\" title=\"Modifier la recette\">";
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("iconamoon:edit");
            yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"action-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recipe_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\" class=\"action-delete\" title=\"Supprimer la recette\">";
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("weui:delete-filled");
            yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            yield "\t\t\t\t\t\t<h2>Vous n'avez pas encore de recette...</h2>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recipe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        return array (  207 => 60,  200 => 58,  187 => 52,  179 => 49,  171 => 46,  161 => 41,  155 => 38,  151 => 37,  147 => 36,  143 => 35,  140 => 34,  135 => 33,  118 => 19,  106 => 10,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
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

\t\t\t<a href=\"{{ path('app_recipe_new') }}\" class=\"btn__add-new\">Ajouter une recette</a>

\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Catégorie</th>
\t\t\t\t\t\t<th>Difficulté</th>
\t\t\t\t\t\t<th>Créée le</th>
\t\t\t\t\t\t<th>Photo</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ recipe.title|capitalize }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.category|capitalize }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.difficulty|capitalize }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.createdAt ? recipe.createdAt|date('d/m/Y') : '' }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"picture__list\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/recipe/'~ recipe.picture) }}\" alt=\"{{recipe.title}}\" class=\"recipe__picture-list\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t<div class=\"action-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_recipe_show', {'id': recipe.id}) }}\" class=\"action-show\" title=\"Voir la recette\">{{ ux_icon('healthicons:magnifying-glass') }} </a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"action-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_recipe_edit', {'id': recipe.id}) }}\" class=\"action-edit\" title=\"Modifier la recette\">{{ ux_icon('iconamoon:edit') }}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"action-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_recipe_delete', {'id': recipe.id}) }}\" class=\"action-delete\" title=\"Supprimer la recette\">{{ ux_icon('weui:delete-filled') }}</a>
\t\t\t\t\t\t\t\t</div>
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
