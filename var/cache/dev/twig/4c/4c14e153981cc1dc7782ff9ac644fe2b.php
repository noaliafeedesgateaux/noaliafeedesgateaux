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

/* admin/home/blocks/_visits_block.html.twig */
class __TwigTemplate_90884fb1cac067489d17c03436bcbe64 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home/blocks/_visits_block.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home/blocks/_visits_block.html.twig"));

        // line 1
        echo "<div class=\"admin-home-block\">
    <h3 class=\"block-title icon-left\">
        <svg class=\"icon i-left i-eye\">
            <use xlink:href=\"/svg/sprite.svg#eye_fill\"></use>
        </svg> 
        <span>Visites</span>
    </h3>
    <div class=\"block-body\">
        <div class=\"block-big\">
            <span class=\"block-big-counter\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\NumberFormaterRuntime')->format(twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 10, $this->source); })()), "countVisitsToday", [], "any", false, false, false, 10)), "html", null, true);
        echo "</span>
            <span class=\"block-big-label\">aujourd'hui</span>
        </div>
        <div class=\"block-big\">
            <span class=\"block-big-counter\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\NumberFormaterRuntime')->format(twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 14, $this->source); })()), "countVisits", [], "any", false, false, false, 14)), "html", null, true);
        echo "</span>
            <span class=\"block-big-label\">au total</span>
        </div>
    </div>
    <div class=\"block-footer\">
        <a class=\"admin-home-button icon-left\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_visit_index");
        echo "\">
            <svg class=\"icon i-left\">
                <use xlink:href=\"/svg/sprite.svg#eye\"></use>
            </svg> 
            <span>Historique des visites</span>
        </a>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/home/blocks/_visits_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  61 => 14,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"admin-home-block\">
    <h3 class=\"block-title icon-left\">
        <svg class=\"icon i-left i-eye\">
            <use xlink:href=\"/svg/sprite.svg#eye_fill\"></use>
        </svg> 
        <span>Visites</span>
    </h3>
    <div class=\"block-body\">
        <div class=\"block-big\">
            <span class=\"block-big-counter\">{{ dashboard.countVisitsToday | number_formater }}</span>
            <span class=\"block-big-label\">aujourd'hui</span>
        </div>
        <div class=\"block-big\">
            <span class=\"block-big-counter\">{{ dashboard.countVisits | number_formater }}</span>
            <span class=\"block-big-label\">au total</span>
        </div>
    </div>
    <div class=\"block-footer\">
        <a class=\"admin-home-button icon-left\" href=\"{{ path('admin_visit_index') }}\">
            <svg class=\"icon i-left\">
                <use xlink:href=\"/svg/sprite.svg#eye\"></use>
            </svg> 
            <span>Historique des visites</span>
        </a>
    </div>
</div>", "admin/home/blocks/_visits_block.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\home\\blocks\\_visits_block.html.twig");
    }
}
