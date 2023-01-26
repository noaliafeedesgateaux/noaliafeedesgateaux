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

/* admin/cakes/form/_delete_button.html.twig */
class __TwigTemplate_c48498f4f680546eb1b4bed3eb1b97c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cakes/form/_delete_button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cakes/form/_delete_button.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cakes_delete");
        echo "\" method=\"POST\">
    <button type=\"submit\" name=\"cake_id\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "\" class=\"cake-card-button cake-delete-button icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"/svg/sprite.svg#trash\"></use>
        </svg> 
        <span>Supprimer</span>
    </button>
    <input type=\"hidden\" name=\"token\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-cake"), "html", null, true);
        echo "\"/>
</form> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/cakes/form/_delete_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ path('admin_cakes_delete') }}\" method=\"POST\">
    <button type=\"submit\" name=\"cake_id\" value=\"{{ cake.id }}\" class=\"cake-card-button cake-delete-button icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"/svg/sprite.svg#trash\"></use>
        </svg> 
        <span>Supprimer</span>
    </button>
    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-cake') }}\"/>
</form> ", "admin/cakes/form/_delete_button.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\cakes\\form\\_delete_button.html.twig");
    }
}
