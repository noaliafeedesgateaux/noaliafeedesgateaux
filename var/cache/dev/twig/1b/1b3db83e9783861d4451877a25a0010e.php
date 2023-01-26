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

/* layouts/header/_header_body.html.twig */
class __TwigTemplate_7dcd2e3b905c57d0021e9a96e43fd347 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/header/_header_body.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/header/_header_body.html.twig"));

        // line 1
        echo "<div class=\"header-body\">
    <div class=\"header-logo-container\">
        <img src=\"/img/logo/header_logo.png\" class=\"header-logo\">
    </div>
    <div class=\"header-description-container\">
        <div class=\"header-description\">
            <div class=\"duo-1\">
                Créations personnalisées, décors en chocolat, crèmes au beurre et ganaches...
            </div>
            <div class=\"duo-2\">
                Recettes adaptées à chaque demande
            </div>
        </div>
    </div>
</div>

<div class=\"header-floater\">
    <div class=\"icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"svg/sprite.svg#location_fill\"></use>
        </svg>
        <span>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\LocationExtensionRuntime')->format(twig_get_attribute($this->env, $this->source, (isset($context["admin_details"]) || array_key_exists("admin_details", $context) ? $context["admin_details"] : (function () { throw new RuntimeError('Variable "admin_details" does not exist.', 22, $this->source); })()), "location", [], "any", false, false, false, 22)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"svg/sprite.svg#shipping_fill\"></use>
        </svg>
        <span>Livraison</span>
    </div>
</div>

        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layouts/header/_header_body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header-body\">
    <div class=\"header-logo-container\">
        <img src=\"/img/logo/header_logo.png\" class=\"header-logo\">
    </div>
    <div class=\"header-description-container\">
        <div class=\"header-description\">
            <div class=\"duo-1\">
                Créations personnalisées, décors en chocolat, crèmes au beurre et ganaches...
            </div>
            <div class=\"duo-2\">
                Recettes adaptées à chaque demande
            </div>
        </div>
    </div>
</div>

<div class=\"header-floater\">
    <div class=\"icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"svg/sprite.svg#location_fill\"></use>
        </svg>
        <span>{{ admin_details.location | location_format }}</span>
    </div>
    <div class=\"icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"svg/sprite.svg#shipping_fill\"></use>
        </svg>
        <span>Livraison</span>
    </div>
</div>

        ", "layouts/header/_header_body.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\layouts\\header\\_header_body.html.twig");
    }
}
