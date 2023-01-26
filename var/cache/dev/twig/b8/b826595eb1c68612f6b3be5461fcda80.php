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

/* admin/security/password_update.html.twig */
class __TwigTemplate_6e3d6e969875abf7231219d7b5658d7e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/password_update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/password_update.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin_base.html.twig", "admin/security/password_update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    ";
        $this->loadTemplate("admin/layouts/_breadcrumb.html.twig", "admin/security/password_update.html.twig", 4)->display($context);
        // line 5
        echo "    <span class=\"breadcrumb-item active\">Sécurité / mot de passe</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
        <h1>Modifier mon mot de passe</h1>

        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
        <div class=\"login-form\">
            <div class=\"form-group ";
        // line 14
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "currentPassword", [], "any", false, false, false, 14), 'errors')) {
            echo "is-invalid";
        }
        echo "\"> 
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "currentPassword", [], "any", false, false, false, 15), 'label', ["label" => "Mot de passe actuel"]);
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "currentPassword", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-box"]]);
        // line 20
        echo "
                <div class=\"error icon-left\">
                    <svg class=\"icon i-left i-error-red\">
                        <use xlink:href=\"/svg/sprite.svg#error\"></use>
                    </svg> 
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "currentPassword", [], "any", false, false, false, 25), 'errors');
        echo "
                </div>
            </div>

            <div class=\"form-group ";
        // line 29
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "newPassword", [], "any", false, false, false, 29), 'errors')) {
            echo "is-invalid";
        }
        echo "\"> 
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "newPassword", [], "any", false, false, false, 30), 'label', ["label" => "Nouveau mot de passe"]);
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "newPassword", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-box"]]);
        // line 35
        echo "
                <div class=\"error icon-left\">
                    <svg class=\"icon i-left i-error-red\">
                        <use xlink:href=\"/svg/sprite.svg#error\"></use>
                    </svg> 
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "newPassword", [], "any", false, false, false, 40), 'errors');
        echo "
                </div>
            </div>

            <div class=\"form-group ";
        // line 44
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "passwordConfirm", [], "any", false, false, false, 44), 'errors')) {
            echo "is-invalid";
        }
        echo "\"> 
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "passwordConfirm", [], "any", false, false, false, 45), 'label', ["label" => "Confirmez le mot de passe"]);
        echo "
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "passwordConfirm", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-box"]]);
        // line 50
        echo "
                <div class=\"error icon-left\">
                    <svg class=\"icon i-left i-error-red\">
                        <use xlink:href=\"/svg/sprite.svg#error\"></use>
                    </svg> 
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "passwordConfirm", [], "any", false, false, false, 55), 'errors');
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                <button type=\"submit\" class=\"form-box\">Valider</button>
            </div>
        </div>
        ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/security/password_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 63,  174 => 55,  167 => 50,  165 => 46,  161 => 45,  155 => 44,  148 => 40,  141 => 35,  139 => 31,  135 => 30,  129 => 29,  122 => 25,  115 => 20,  113 => 16,  109 => 15,  103 => 14,  98 => 12,  93 => 9,  83 => 8,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/admin_base.html.twig\" %}

{% block breadcrumb %}
    {% include \"admin/layouts/_breadcrumb.html.twig\" %}
    <span class=\"breadcrumb-item active\">Sécurité / mot de passe</span>
{% endblock %}

{% block body %}

        <h1>Modifier mon mot de passe</h1>

        {{ form_start(form) }}
        <div class=\"login-form\">
            <div class=\"form-group {% if form_errors(form.currentPassword) %}is-invalid{% endif %}\"> 
                {{ form_label(form.currentPassword, 'Mot de passe actuel') }}
                {{ form_widget(form.currentPassword, {
                    attr: {
                        class: 'form-box'
                    }
                }) }}
                <div class=\"error icon-left\">
                    <svg class=\"icon i-left i-error-red\">
                        <use xlink:href=\"/svg/sprite.svg#error\"></use>
                    </svg> 
                    {{ form_errors(form.currentPassword) }}
                </div>
            </div>

            <div class=\"form-group {% if form_errors(form.newPassword) %}is-invalid{% endif %}\"> 
                {{ form_label(form.newPassword, 'Nouveau mot de passe') }}
                {{ form_widget(form.newPassword, {
                    attr: {
                        class: 'form-box'
                    }
                }) }}
                <div class=\"error icon-left\">
                    <svg class=\"icon i-left i-error-red\">
                        <use xlink:href=\"/svg/sprite.svg#error\"></use>
                    </svg> 
                    {{ form_errors(form.newPassword) }}
                </div>
            </div>

            <div class=\"form-group {% if form_errors(form.passwordConfirm) %}is-invalid{% endif %}\"> 
                {{ form_label(form.passwordConfirm, 'Confirmez le mot de passe') }}
                {{ form_widget(form.passwordConfirm, {
                    attr: {
                        class: 'form-box'
                    }
                }) }}
                <div class=\"error icon-left\">
                    <svg class=\"icon i-left i-error-red\">
                        <use xlink:href=\"/svg/sprite.svg#error\"></use>
                    </svg> 
                    {{ form_errors(form.passwordConfirm) }}
                </div>
            </div>

            <div class=\"form-group\">
                <button type=\"submit\" class=\"form-box\">Valider</button>
            </div>
        </div>
        {{ form_end(form) }}
        
{% endblock %}

", "admin/security/password_update.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\security\\password_update.html.twig");
    }
}
