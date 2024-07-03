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

/* debug/source_code.html.twig */
class __TwigTemplate_e5696c86a4ff5f8437077df404d5fab9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "debug/source_code.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "debug/source_code.html.twig"));

        // line 1
        yield "<div class=\"section source-code\">
    <p>
        ";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.show_code");
        yield "
    </p>

    <button type=\"button\" class=\"btn btn-secondary py-3 btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#sourceCodeModal\">
      <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show_code"), "html", null, true);
        yield "
    </button>

    <div class=\"modal fade\" id=\"sourceCodeModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\"><i class=\"fa fa-code\" aria-hidden=\"true\"></i> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.source_code"), "html", null, true);
        yield "</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close"), "html", null, true);
        yield "\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

                <div class=\"modal-body\">
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"controller-tab\" data-toggle=\"tab\" href=\"#controller-code\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\" target=\"_blank\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.controller_code"), "html", null, true);
        yield "</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"template-tab\" data-toggle=\"tab\" href=\"#template-code\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\" target=\"_blank\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.twig_template_code"), "html", null, true);
        yield "</a>
                        </li>
                    </ul>

                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane show active\" id=\"controller-code\" role=\"tabpanel\" aria-labelledby=\"controller-tab\">
                            ";
        // line 32
        if ((isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 32, $this->source); })())) {
            // line 33
            yield "                                <p class=\"file-link\">";
            yield $this->extensions['App\Twig\SourceCodeExtension']->linkSourceFile($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 33, $this->source); })()), "file_path", [], "any", false, false, false, 33), CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 33, $this->source); })()), "starting_line", [], "any", false, false, false, 33));
            yield "</p>
                                <pre><code class=\"php\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 34, $this->source); })()), "source_code", [], "any", false, false, false, 34), "html", null, true);
            yield "</code></pre>
                            ";
        } else {
            // line 36
            yield "                                <pre><code>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("not_available"), "html", null, true);
            yield "</code></pre>
                            ";
        }
        // line 38
        yield "                        </div>

                        <div class=\"tab-pane\" id=\"template-code\" role=\"tabpanel\" aria-labelledby=\"template-tab\">
                            <p class=\"file-link\">";
        // line 41
        yield $this->extensions['App\Twig\SourceCodeExtension']->linkSourceFile($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 41, $this->source); })()), "file_path", [], "any", false, false, false, 41), CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 41, $this->source); })()), "starting_line", [], "any", false, false, false, 41));
        yield "</p>
                            <pre><code class=\"twig\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 42, $this->source); })()), "source_code", [], "any", false, false, false, 42), "html", null, true);
        yield "</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "debug/source_code.html.twig";
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
        return array (  122 => 42,  118 => 41,  113 => 38,  107 => 36,  102 => 34,  97 => 33,  95 => 32,  86 => 26,  80 => 23,  69 => 15,  65 => 14,  55 => 7,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section source-code\">
    <p>
        {{ 'help.show_code'|trans|raw }}
    </p>

    <button type=\"button\" class=\"btn btn-secondary py-3 btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#sourceCodeModal\">
      <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> {{ 'action.show_code'|trans }}
    </button>

    <div class=\"modal fade\" id=\"sourceCodeModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\"><i class=\"fa fa-code\" aria-hidden=\"true\"></i> {{ 'title.source_code'|trans }}</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"{{ 'action.close'|trans }}\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

                <div class=\"modal-body\">
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"controller-tab\" data-toggle=\"tab\" href=\"#controller-code\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\" target=\"_blank\">{{ 'title.controller_code'|trans }}</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"template-tab\" data-toggle=\"tab\" href=\"#template-code\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\" target=\"_blank\">{{ 'title.twig_template_code'|trans }}</a>
                        </li>
                    </ul>

                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane show active\" id=\"controller-code\" role=\"tabpanel\" aria-labelledby=\"controller-tab\">
                            {% if controller %}
                                <p class=\"file-link\">{{ link_source_file(controller.file_path, controller.starting_line) }}</p>
                                <pre><code class=\"php\">{{ controller.source_code }}</code></pre>
                            {% else %}
                                <pre><code>{{ 'not_available'|trans }}</code></pre>
                            {% endif %}
                        </div>

                        <div class=\"tab-pane\" id=\"template-code\" role=\"tabpanel\" aria-labelledby=\"template-tab\">
                            <p class=\"file-link\">{{ link_source_file(template.file_path, template.starting_line) }}</p>
                            <pre><code class=\"twig\">{{ template.source_code }}</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "debug/source_code.html.twig", "C:\\Users\\Horia Omar\\OneDrive\\Pictures\\Documents\\Coding Projects\\Main Projects\\Coding-Blog\\my_project\\templates\\debug\\source_code.html.twig");
    }
}
