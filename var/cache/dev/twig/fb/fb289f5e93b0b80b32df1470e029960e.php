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

/* parts/footer.html.twig */
class __TwigTemplate_f4f885073d0e17801239f98a0857304f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/footer.html.twig"));

        // line 1
        yield "<footer>
\t<div class=\"container footer__container\">
\t\t<div>
\t\t\t<ul class=\"footer__menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Recettes</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 11
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11))) {
            // line 12
            yield "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Mes recettes</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 16
        yield "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#contact\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"test\">
\t\t\t<ul class=\"footer__socials\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" title=\"Youtube\">
\t\t\t\t\t\t<i class=\"uil uil-youtube\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" title=\"Instagram\">
\t\t\t\t\t\t<i class=\"uil uil-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" title=\"Facebook\">
\t\t\t\t\t\t<i class=\"uil uil-facebook\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" title=\"X\">
\t\t\t\t\t\t<i class=\"uil uil-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<form action=\"https://formsubmit.co/53ab710215b1d3154d75a41f1f63fd64@gmail.com\" method=\"post\" class=\"contact__form\" id=\"contact\">
\t\t\t<input type=\"text\" name=\"Nom\" placeholder=\"Nom\">
\t\t\t<input type=\"text\" name=\"Prénom\" placeholder=\"Prénom\">
\t\t\t<input type=\"email\" name=\"Email\" placeholder=\"Adresse mail\">
\t\t\t<textarea rows=\"7\" name=\"Message\" placeholder=\"Votre message\"></textarea>
\t\t\t<div class=\"contact__btn\">
\t\t\t\t<button type=\"submit\" class=\"btn\">Envoyer</button>
\t\t\t</div>
\t\t</form>
\t</div>
\t<div class=\"footer__copyright\">
\t\t<small>2024 YUMMY &copy;</small>
\t</div>
</footer>
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
        return "parts/footer.html.twig";
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
        return array (  71 => 16,  65 => 12,  63 => 11,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer>
\t<div class=\"container footer__container\">
\t\t<div>
\t\t\t<ul class=\"footer__menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('app_home') }}\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Recettes</a>
\t\t\t\t</li>
\t\t\t\t{% if app.user is not null %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Mes recettes</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#contact\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"test\">
\t\t\t<ul class=\"footer__socials\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" title=\"Youtube\">
\t\t\t\t\t\t<i class=\"uil uil-youtube\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" title=\"Instagram\">
\t\t\t\t\t\t<i class=\"uil uil-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" title=\"Facebook\">
\t\t\t\t\t\t<i class=\"uil uil-facebook\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" title=\"X\">
\t\t\t\t\t\t<i class=\"uil uil-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<form action=\"https://formsubmit.co/53ab710215b1d3154d75a41f1f63fd64@gmail.com\" method=\"post\" class=\"contact__form\" id=\"contact\">
\t\t\t<input type=\"text\" name=\"Nom\" placeholder=\"Nom\">
\t\t\t<input type=\"text\" name=\"Prénom\" placeholder=\"Prénom\">
\t\t\t<input type=\"email\" name=\"Email\" placeholder=\"Adresse mail\">
\t\t\t<textarea rows=\"7\" name=\"Message\" placeholder=\"Votre message\"></textarea>
\t\t\t<div class=\"contact__btn\">
\t\t\t\t<button type=\"submit\" class=\"btn\">Envoyer</button>
\t\t\t</div>
\t\t</form>
\t</div>
\t<div class=\"footer__copyright\">
\t\t<small>2024 YUMMY &copy;</small>
\t</div>
</footer>
", "parts/footer.html.twig", "C:\\Users\\a-bra\\OneDrive\\Bureau\\blog-app-recipes-symfony\\templates\\parts\\footer.html.twig");
    }
}
