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

/* admin/cakes/form/fields/_firstPictureFile.html.twig */
class __TwigTemplate_889f5ddfc54690bc05bbe74da46b415b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cakes/form/fields/_firstPictureFile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cakes/form/fields/_firstPictureFile.html.twig"));

        // line 1
        echo "<div class=\"upload-group\">
    <div class=\"upload-input-container\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "firstPictureFile", [], "any", false, false, false, 3), 'widget', ["required" => false, "attr" => ["class" => "upload-input"]]);
        // line 8
        echo "
    </div>
    ";
        // line 10
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "firstPictureFile", [], "any", false, false, false, 10), 'errors')) {
            // line 11
            echo "        <div class=\"admin-form-error icon-left\">
            <svg class=\"icon i-left\">
                <use xlink:href=\"/svg/sprite.svg#error\"></use>
            </svg>
            ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "firstPictureFile", [], "any", false, false, false, 15), 'errors');
            echo "
        </div>
    ";
        }
        // line 18
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/cakes/form/fields/_firstPictureFile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  61 => 15,  55 => 11,  53 => 10,  49 => 8,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"upload-group\">
    <div class=\"upload-input-container\">
        {{ form_widget(form.firstPictureFile, {
            required: false,
        attr: {
            class: 'upload-input'
        }
        }) }}
    </div>
    {% if form_errors(form.firstPictureFile) %}
        <div class=\"admin-form-error icon-left\">
            <svg class=\"icon i-left\">
                <use xlink:href=\"/svg/sprite.svg#error\"></use>
            </svg>
            {{ form_errors(form.firstPictureFile) }}
        </div>
    {% endif %}
</div>", "admin/cakes/form/fields/_firstPictureFile.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\cakes\\form\\fields\\_firstPictureFile.html.twig");
    }
}
