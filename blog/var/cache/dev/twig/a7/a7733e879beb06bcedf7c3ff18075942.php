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

/* default/_language_selector.html.twig */
class __TwigTemplate_81606ca6119091312fffddb373f69c4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_language_selector.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_language_selector.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 1
    public function macro_render_language_selector($__display_current_language__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "display_current_language" => $__display_current_language__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_language_selector"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_language_selector"));

            // line 2
            yield "    <a href=\"#\" class=\"nav-link dropdown-toggle language-selector-dropdown-button\" data-toggle=\"modal\" data-target=\"#locale-selector-modal\" role=\"button\" id=\"locales\">
        <i class=\"fa fa-solid fa-globe\" aria-hidden=\"true\"></i>
        ";
            // line 4
            if ((isset($context["display_current_language"]) || array_key_exists("display_current_language", $context) ? $context["display_current_language"] : (function () { throw new RuntimeError('Variable "display_current_language" does not exist.', 4, $this->source); })())) {
                // line 5
                yield "            <span class=\"current-language\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getLocaleName(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "locale", [], "any", false, false, false, 5)), "html", null, true);
                yield "</span>
        ";
            }
            // line 7
            yield "        <span class=\"caret\"></span>
        <span class=\"sr-only\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.choose_language"), "html", null, true);
            yield "</span>
    </a>

    <div id=\"locale-selector-modal\" class=\"modal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-lg modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\" lang=\"en\">
                        ";
            // line 17
            yield "                        Choose your language
                    </p>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

                <div class=\"modal-body\">
                    <ul class=\"locales\">
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['App\Twig\AppExtension']->getLocales());
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 27
                yield "                            ";
                $context["is_active"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "locale", [], "any", false, false, false, 27) == CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 27));
                // line 28
                yield "                            ";
                $context["is_rtl"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 28), ["ar", "fa", "he"]);
                // line 29
                yield "                            <li class=\"";
                yield (((isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 29, $this->source); })())) ? ("active") : (""));
                yield " ";
                yield (((isset($context["is_rtl"]) || array_key_exists("is_rtl", $context) ? $context["is_rtl"] : (function () { throw new RuntimeError('Variable "is_rtl" does not exist.', 29, $this->source); })())) ? ("rtl") : (""));
                yield "\" translate=\"no\">
                                <a class=\"stretched-link\" lang=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 30), "html", null, true);
                yield "\" hreflang=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 30), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "get", ["_route", "blog_index"], "method", false, false, false, 30), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "get", ["_route_params", []], "method", false, false, false, 30), ["_locale" => CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 30)])), "html", null, true);
                yield "\">
                                    ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 31)), "html", null, true);
                yield "
                                    <small>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 32), "html", null, true);
                yield "</small>
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "                    </ul>
                </div>
            </div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/_language_selector.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  147 => 36,  137 => 32,  133 => 31,  125 => 30,  118 => 29,  115 => 28,  112 => 27,  108 => 26,  97 => 17,  86 => 8,  83 => 7,  77 => 5,  75 => 4,  71 => 2,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro render_language_selector(display_current_language = false) %}
    <a href=\"#\" class=\"nav-link dropdown-toggle language-selector-dropdown-button\" data-toggle=\"modal\" data-target=\"#locale-selector-modal\" role=\"button\" id=\"locales\">
        <i class=\"fa fa-solid fa-globe\" aria-hidden=\"true\"></i>
        {% if display_current_language %}
            <span class=\"current-language\">{{ app.request.locale|locale_name }}</span>
        {% endif %}
        <span class=\"caret\"></span>
        <span class=\"sr-only\">{{ 'menu.choose_language'|trans }}</span>
    </a>

    <div id=\"locale-selector-modal\" class=\"modal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-lg modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\" lang=\"en\">
                        {# display this title always in English to make the language selector easier to use #}
                        Choose your language
                    </p>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

                <div class=\"modal-body\">
                    <ul class=\"locales\">
                        {% for locale in locales() %}
                            {% set is_active = app.request.locale == locale.code %}
                            {% set is_rtl = locale.code in ['ar', 'fa', 'he'] %}
                            <li class=\"{{ is_active ? 'active' }} {{ is_rtl ? 'rtl' }}\" translate=\"no\">
                                <a class=\"stretched-link\" lang=\"{{ locale.code }}\" hreflang=\"{{ locale.code }}\" href=\"{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({_locale: locale.code})) }}\">
                                    {{ locale.name|capitalize }}
                                    <small>{{ locale.code }}</small>
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% endmacro %}
", "default/_language_selector.html.twig", "C:\\Users\\Horia Omar\\OneDrive\\Pictures\\Documents\\Coding Projects\\Main Projects\\Coding-Blog\\my_project\\templates\\default\\_language_selector.html.twig");
    }
}
