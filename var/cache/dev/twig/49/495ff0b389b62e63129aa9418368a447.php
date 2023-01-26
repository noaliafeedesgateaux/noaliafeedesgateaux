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

/* cakes/_breadcrumb.html.twig */
class __TwigTemplate_31fb30922a141364136d6856826355a4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cakes/_breadcrumb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cakes/_breadcrumb.html.twig"));

        // line 1
        echo "<div class=\"breadcrumb cakes-breadcrumb\">
    <a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"icon-left breadcrumb-item js-cakes-to-home\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"/svg/sprite.svg#home_fill\"></use>
        </svg>
        <span>Accueil</span>
    </a>
    <span class=\"breadcrumb-separator\">></span>
    <span class=\"breadcrumb-item active\">Toutes mes créations</span>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "cakes/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumb cakes-breadcrumb\">
    <a href=\"{{ path('home') }}\" class=\"icon-left breadcrumb-item js-cakes-to-home\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"/svg/sprite.svg#home_fill\"></use>
        </svg>
        <span>Accueil</span>
    </a>
    <span class=\"breadcrumb-separator\">></span>
    <span class=\"breadcrumb-item active\">Toutes mes créations</span>
</div>", "cakes/_breadcrumb.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\cakes\\_breadcrumb.html.twig");
    }
}
