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

/* admin/visit/_search_filter_form.html.twig */
class __TwigTemplate_84c45d18c09004e2ba7b6e01ceec48c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/visit/_search_filter_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/visit/_search_filter_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "js-visit-search-filter-form"]]);
        // line 5
        echo "
<div class=\"visit-search-filter-form\"> 
    <h3 class=\"visit-search-filter-form-title\">Filtres</h3>
    <div class=\"form-group ";
        // line 8
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "period", [], "any", false, false, false, 8), 'errors')) {
            echo "is-invalid";
        }
        echo "\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "period", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-box"]]);
        // line 13
        echo "
        <div class=\"error icon-left\">
            <svg class=\"icon i-left i-error-red\">
                <use xlink:href=\"/svg/sprite.svg#error\"></use>
            </svg> 
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "period", [], "any", false, false, false, 18), 'errors');
        echo "
        </div>
    </div>
    <div class=\"form-group ";
        // line 21
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "pageId", [], "any", false, false, false, 21), 'errors')) {
            echo "is-invalid";
        }
        echo "\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "pageId", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-box"]]);
        // line 26
        echo "
        <div class=\"error icon-left\">
            <svg class=\"icon i-left i-error-red\">
                <use xlink:href=\"/svg/sprite.svg#error\"></use>
            </svg> 
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "pageId", [], "any", false, false, false, 31), 'errors');
        echo "
        </div>
    </div>
    <div class=\"form-group sortBy-group ";
        // line 34
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "sortBy", [], "any", false, false, false, 34), 'errors')) {
            echo "is-invalid";
        }
        echo "\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "sortBy", [], "any", false, false, false, 35), 'label', ["label" => "Tri:"]);
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "sortBy", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-box"]]);
        // line 40
        echo "
        <div class=\"error icon-left\">
            <svg class=\"icon i-left i-error-red\">
                <use xlink:href=\"/svg/sprite.svg#error\"></use>
            </svg> 
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "sortBy", [], "any", false, false, false, 45), 'errors');
        echo "
        </div>
    </div>
</div>
";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/visit/_search_filter_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  111 => 45,  104 => 40,  102 => 36,  98 => 35,  92 => 34,  86 => 31,  79 => 26,  77 => 22,  71 => 21,  65 => 18,  58 => 13,  56 => 9,  50 => 8,  45 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {
    attr: {
        class: 'js-visit-search-filter-form'
    }
}) }}
<div class=\"visit-search-filter-form\"> 
    <h3 class=\"visit-search-filter-form-title\">Filtres</h3>
    <div class=\"form-group {% if form_errors(form.period) %}is-invalid{% endif %}\">
        {{ form_widget(form.period, {
            attr: {
                class: 'form-box'
            }
        }) }}
        <div class=\"error icon-left\">
            <svg class=\"icon i-left i-error-red\">
                <use xlink:href=\"/svg/sprite.svg#error\"></use>
            </svg> 
            {{ form_errors(form.period) }}
        </div>
    </div>
    <div class=\"form-group {% if form_errors(form.pageId) %}is-invalid{% endif %}\">
        {{ form_widget(form.pageId, {
            attr: {
                class: 'form-box'
            }
        }) }}
        <div class=\"error icon-left\">
            <svg class=\"icon i-left i-error-red\">
                <use xlink:href=\"/svg/sprite.svg#error\"></use>
            </svg> 
            {{ form_errors(form.pageId) }}
        </div>
    </div>
    <div class=\"form-group sortBy-group {% if form_errors(form.sortBy) %}is-invalid{% endif %}\">
        {{ form_label(form.sortBy, 'Tri:') }}
        {{ form_widget(form.sortBy, {
            attr: {
                class: 'form-box'
            }
        }) }}
        <div class=\"error icon-left\">
            <svg class=\"icon i-left i-error-red\">
                <use xlink:href=\"/svg/sprite.svg#error\"></use>
            </svg> 
            {{ form_errors(form.sortBy) }}
        </div>
    </div>
</div>
{{ form_end(form) }}", "admin/visit/_search_filter_form.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\visit\\_search_filter_form.html.twig");
    }
}
