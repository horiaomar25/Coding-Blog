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

/* form/fields.html.twig */
class __TwigTemplate_8dfa75f52411f7f9d563215121561760 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'date_time_picker_widget' => [$this, 'block_date_time_picker_widget'],
            'tags_input_widget' => [$this, 'block_tags_input_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('date_time_picker_widget', $context, $blocks);
        // line 20
        yield "
";
        // line 21
        yield from $this->unwrap()->yieldBlock('tags_input_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 10
    public function block_date_time_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        yield "    <div class=\"input-group date\">
        ";
        // line 12
        yield from         $this->unwrap()->yieldBlock("datetime_widget", $context, $blocks);
        yield "
        <div class=\"input-group-append\">
            <button type=\"button\" class=\"btn btn-outline-secondary\">
                <span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>
            </button>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 21
    public function block_tags_input_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tags_input_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tags_input_widget"));

        // line 22
        yield "    <div class=\"input-group\">
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'widget', ["attr" => ["data-toggle" => "tagsinput", "data-tags" => json_encode((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 23, $this->source); })()))]]);
        yield "
        <div class=\"input-group-append\">
            <span class=\"input-group-text\">
                <span class=\"fa fa-tags\" aria-hidden=\"true\"></span>
            </span>
        </div>
    </div>
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
        return "form/fields.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  110 => 23,  107 => 22,  97 => 21,  78 => 12,  75 => 11,  65 => 10,  54 => 21,  51 => 20,  49 => 10,  46 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See https://symfony.com/doc/current/form/create_custom_field_type.html#creating-the-form-type-template
#}

{% block date_time_picker_widget %}
    <div class=\"input-group date\">
        {{ block('datetime_widget') }}
        <div class=\"input-group-append\">
            <button type=\"button\" class=\"btn btn-outline-secondary\">
                <span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>
            </button>
        </div>
    </div>
{% endblock %}

{% block tags_input_widget %}
    <div class=\"input-group\">
        {{ form_widget(form, {'attr': {'data-toggle': 'tagsinput', 'data-tags': tags|json_encode}}) }}
        <div class=\"input-group-append\">
            <span class=\"input-group-text\">
                <span class=\"fa fa-tags\" aria-hidden=\"true\"></span>
            </span>
        </div>
    </div>
{% endblock %}
", "form/fields.html.twig", "C:\\Users\\Horia Omar\\OneDrive\\Pictures\\Documents\\Coding Projects\\Main Projects\\Coding-Blog\\my_project\\templates\\form\\fields.html.twig");
    }
}
