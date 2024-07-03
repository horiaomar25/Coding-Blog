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

/* @LiveComponent/form_theme.html.twig */
class __TwigTemplate_1740c45e9338fb1aec44541f49e42abc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'live_collection_widget' => [$this, 'block_live_collection_widget'],
            'live_collection_entry_row' => [$this, 'block_live_collection_entry_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LiveComponent/form_theme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LiveComponent/form_theme.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('live_collection_widget', $context, $blocks);
        // line 8
        yield from $this->unwrap()->yieldBlock('live_collection_entry_row', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 1
    public function block_live_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "live_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "live_collection_widget"));

        // line 2
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        // line 3
        if ((((((array_key_exists("skip_add_button", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["skip_add_button"]) || array_key_exists("skip_add_button", $context) ? $context["skip_add_button"] : (function () { throw new RuntimeError('Variable "skip_add_button" does not exist.', 3, $this->source); })()), false)) : (false)) === false) && array_key_exists("button_add", $context)) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["button_add"]) || array_key_exists("button_add", $context) ? $context["button_add"] : (function () { throw new RuntimeError('Variable "button_add" does not exist.', 3, $this->source); })()), "rendered", [], "any", false, false, false, 3))) {
            // line 4
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["button_add"]) || array_key_exists("button_add", $context) ? $context["button_add"] : (function () { throw new RuntimeError('Variable "button_add" does not exist.', 4, $this->source); })()), 'row');
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_live_collection_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "live_collection_entry_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "live_collection_entry_row"));

        // line 9
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        // line 10
        if ((array_key_exists("button_delete", $context) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["button_delete"]) || array_key_exists("button_delete", $context) ? $context["button_delete"] : (function () { throw new RuntimeError('Variable "button_delete" does not exist.', 10, $this->source); })()), "rendered", [], "any", false, false, false, 10))) {
            // line 11
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["button_delete"]) || array_key_exists("button_delete", $context) ? $context["button_delete"] : (function () { throw new RuntimeError('Variable "button_delete" does not exist.', 11, $this->source); })()), 'row');
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@LiveComponent/form_theme.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  99 => 11,  97 => 10,  95 => 9,  85 => 8,  73 => 4,  71 => 3,  69 => 2,  59 => 1,  48 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- block live_collection_widget -%}
    {{ block('form_widget') }}
    {%- if skip_add_button|default(false) is same as(false) and button_add is defined and not button_add.rendered -%}
        {{ form_row(button_add) }}
    {%- endif -%}
{%- endblock live_collection_widget -%}

{%- block live_collection_entry_row -%}
    {{ block('form_row') }}
    {%- if button_delete is defined and not button_delete.rendered -%}
        {{ form_row(button_delete) }}
    {%- endif -%}
{%- endblock live_collection_entry_row -%}
", "@LiveComponent/form_theme.html.twig", "C:\\Users\\Horia Omar\\OneDrive\\Pictures\\Documents\\Coding Projects\\Main Projects\\Coding-Blog\\my_project\\vendor\\symfony\\ux-live-component\\templates\\form_theme.html.twig");
    }
}
