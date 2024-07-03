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

/* blog/index.html.twig */
class __TwigTemplate_32c919d7d9aee659eecc306ab3c9071e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        // line 0
        yield "blog_index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 6, $this->source); })()), "results", [], "any", false, false, false, 6));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "blog/_post.html.twig");
            yield "
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 9
            yield "        <div class=\"jumbotron\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.no_posts_found"), "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "
    ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "hasToPaginate", [], "any", false, false, false, 12)) {
            // line 13
            yield "
        <div class=\"navigation text-center\">
            <ul class=\"pagination pagination-lg\">
                ";
            // line 16
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 16, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 16)) {
                // line 17
                yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 18, $this->source); })()), "previousPage", [], "any", false, false, false, 18), "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 18, $this->source); })())]), "html", null, true);
                yield "\" rel=\"previous\">
                            <i class=\"fa fw fa-long-arrow-left\"></i> ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
                yield "
                        </a>
                    </li>
                ";
            } else {
                // line 23
                yield "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\"><i class=\"fa fw fa-arrow-left\"></i> ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
                yield "</span>
                    </li>
                ";
            }
            // line 27
            yield "
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 28, $this->source); })()), "lastPage", [], "any", false, false, false, 28)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                yield "                    ";
                if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 29, $this->source); })()), "currentPage", [], "any", false, false, false, 29))) {
                    // line 30
                    yield "                        <li class=\"page-item active\">
                            <span class=\"page-link\">";
                    // line 31
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield " <span class=\"sr-only\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.current"), "html", null, true);
                    yield "</span></span>
                        </li>
                    ";
                } else {
                    // line 34
                    yield "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => $context["i"], "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 34, $this->source); })())]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "</a></li>
                    ";
                }
                // line 36
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "
                ";
            // line 38
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 38, $this->source); })()), "hasNextPage", [], "any", false, false, false, 38)) {
                // line 39
                yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 40, $this->source); })()), "nextPage", [], "any", false, false, false, 40), "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 40, $this->source); })())]), "html", null, true);
                yield "\">
                            <span>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
                yield " <i class=\"fa fw fa-long-arrow-right\"></i></span>
                        </a>
                    </li>
                ";
            } else {
                // line 45
                yield "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
                yield " <i class=\"fa fw fa-long-arrow-right\"></i></span>
                    </li>
                ";
            }
            // line 49
            yield "            </ul>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 54
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 55
        yield "    ";
        yield from $this->yieldParentBlock("sidebar", $context, $blocks);
        yield "

    ";
        // line 57
        yield $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        yield "
    ";
        // line 58
        yield Twig\Extension\CoreExtension::include($this->env, $context, "blog/_rss.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "blog/index.html.twig";
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
        return array (  268 => 58,  264 => 57,  258 => 55,  248 => 54,  234 => 49,  228 => 46,  225 => 45,  218 => 41,  214 => 40,  211 => 39,  209 => 38,  206 => 37,  200 => 36,  192 => 34,  184 => 31,  181 => 30,  178 => 29,  174 => 28,  171 => 27,  165 => 24,  162 => 23,  155 => 19,  151 => 18,  148 => 17,  146 => 16,  141 => 13,  139 => 12,  136 => 11,  127 => 9,  111 => 7,  92 => 6,  82 => 5,  71 => 0,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_id 'blog_index' %}

{% block main %}
    {% for post in paginator.results %}
        {{ include('blog/_post.html.twig') }}
    {% else %}
        <div class=\"jumbotron\">{{ 'post.no_posts_found'|trans }}</div>
    {% endfor %}

    {% if paginator.hasToPaginate %}

        <div class=\"navigation text-center\">
            <ul class=\"pagination pagination-lg\">
                {% if paginator.hasPreviousPage %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('blog_index_paginated', {page: paginator.previousPage, tag: tagName}) }}\" rel=\"previous\">
                            <i class=\"fa fw fa-long-arrow-left\"></i> {{ 'paginator.previous'|trans }}
                        </a>
                    </li>
                {% else %}
                    <li class=\"page-item disabled\">
                        <span class=\"page-link\"><i class=\"fa fw fa-arrow-left\"></i> {{ 'paginator.previous'|trans }}</span>
                    </li>
                {% endif %}

                {% for i in 1..paginator.lastPage %}
                    {% if i == paginator.currentPage %}
                        <li class=\"page-item active\">
                            <span class=\"page-link\">{{ i }} <span class=\"sr-only\">{{ 'paginator.current'|trans }}</span></span>
                        </li>
                    {% else %}
                        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('blog_index_paginated', {page: i, tag: tagName}) }}\">{{ i }}</a></li>
                    {% endif %}
                {% endfor %}

                {% if paginator.hasNextPage %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('blog_index_paginated', {page: paginator.nextPage, tag: tagName}) }}\">
                            <span>{{ 'paginator.next'|trans }} <i class=\"fa fw fa-long-arrow-right\"></i></span>
                        </a>
                    </li>
                {% else %}
                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">{{ 'paginator.next'|trans }} <i class=\"fa fw fa-long-arrow-right\"></i></span>
                    </li>
                {% endif %}
            </ul>
        </div>
    {% endif %}
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
    {{ include('blog/_rss.html.twig') }}
{% endblock %}
", "blog/index.html.twig", "C:\\Users\\Horia Omar\\OneDrive\\Pictures\\Documents\\Coding Projects\\Main Projects\\Coding-Blog\\my_project\\templates\\blog\\index.html.twig");
    }
}
