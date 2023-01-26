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

/* admin/home/blocks/_storage_block.html.twig */
class __TwigTemplate_bfda0451bc12781cfd5272c3b13f3a09 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home/blocks/_storage_block.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home/blocks/_storage_block.html.twig"));

        // line 1
        echo "<div class=\"admin-home-block\">
    <h3 class=\"block-title icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"/svg/sprite.svg#database\"></use>
        </svg> 
        <span>Stockage</span>
    </h3>
    <p class=\"block-info\">Capacités maximales</p>
    <div class=\"block-body no-margin\">
        <div class=\"block-big\">
            <span class=\"block-big-counter small\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\NumberFormaterRuntime')->format(twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 11, $this->source); })()), "maxCakes", [], "any", false, false, false, 11)), "html", null, true);
        echo "</span>
            <span class=\"block-big-label\">gâteaux</span>
        </div>
        <div class=\"block-big\">
            <span class=\"block-big-counter small\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\NumberFormaterRuntime')->format(twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 15, $this->source); })()), "maxOrders", [], "any", false, false, false, 15)), "html", null, true);
        echo "</span>
            <span class=\"block-big-label\">commandes</span>
        </div>
        <div class=\"block-big\">
            <span class=\"block-big-counter small\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\NumberFormaterRuntime')->format(twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 19, $this->source); })()), "maxVisits", [], "any", false, false, false, 19)), "html", null, true);
        echo "</span>
            <span class=\"block-big-label\">visites</span>
        </div>
    </div>
    <p class=\"block-info small\">
        <svg class=\"icon\">
            <use xlink:href=\"/svg/sprite.svg#info\"></use>
        </svg>
        Si la limite de commandes/visites est atteinte, la plus ancienne commande/visite sera supprimée pour permettre à la nouvelle d'être sauvegardée
    </p>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/home/blocks/_storage_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  62 => 15,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"admin-home-block\">
    <h3 class=\"block-title icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"/svg/sprite.svg#database\"></use>
        </svg> 
        <span>Stockage</span>
    </h3>
    <p class=\"block-info\">Capacités maximales</p>
    <div class=\"block-body no-margin\">
        <div class=\"block-big\">
            <span class=\"block-big-counter small\">{{ dashboard.maxCakes | number_formater }}</span>
            <span class=\"block-big-label\">gâteaux</span>
        </div>
        <div class=\"block-big\">
            <span class=\"block-big-counter small\">{{ dashboard.maxOrders | number_formater }}</span>
            <span class=\"block-big-label\">commandes</span>
        </div>
        <div class=\"block-big\">
            <span class=\"block-big-counter small\">{{ dashboard.maxVisits | number_formater }}</span>
            <span class=\"block-big-label\">visites</span>
        </div>
    </div>
    <p class=\"block-info small\">
        <svg class=\"icon\">
            <use xlink:href=\"/svg/sprite.svg#info\"></use>
        </svg>
        Si la limite de commandes/visites est atteinte, la plus ancienne commande/visite sera supprimée pour permettre à la nouvelle d'être sauvegardée
    </p>
</div>", "admin/home/blocks/_storage_block.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\home\\blocks\\_storage_block.html.twig");
    }
}
