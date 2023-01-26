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

/* layouts/header/_navbar.html.twig */
class __TwigTemplate_7c8df707aee20f5b1181b69f293a76ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/header/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/header/_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar\">
    <div class=\"nav-group-home\">
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link logo-link ";
        if ((array_key_exists("current_menu", $context) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 3, $this->source); })()) === "home"))) {
            echo "active";
        }
        echo "\" title=\"Page d'Accueil\">
            <img class=\"nav-logo\" src=\"/img/logo/nav_logo.png\">
        </a>
        <svg class=\"icon i-nav-menu js-hidden-menu-opener\">
            <use xlink:href=\"/svg/sprite.svg#menu\"></use>
        </svg>
        <svg class=\"icon i-nav-menu js-hidden-menu-closer\">
            <use xlink:href=\"/svg/sprite.svg#close\"></use>
        </svg> 
    </div>
    <ul class=\"nav-group js-hidden-menu\">
        <li class=\"nav-item\">
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cakes_index");
        echo "\" class=\"nav-link icon-left ";
        if ((array_key_exists("current_menu", $context) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 15, $this->source); })()) === "cakes_index"))) {
            echo "active";
        }
        echo "\">
                <svg class=\"icon i-left i-cake\">
                    <use xlink:href=\"/svg/sprite.svg#cake_fill\"></use>
                </svg> 
                <span class=\"nav-link-label\">Voir toutes mes créations</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <button class=\"nav-link icon-left\">
                <svg class=\"icon i-left\">
                    <use xlink:href=\"/svg/sprite.svg#cart_fill\"></use>
                </svg> 
                <span class=\"nav-link-label js-order-button\">Passer commande</span>
            </button>
        </li>
        <li class=\"nav-social\">
            <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_details"]) || array_key_exists("admin_details", $context) ? $context["admin_details"] : (function () { throw new RuntimeError('Variable "admin_details" does not exist.', 31, $this->source); })()), "facebook", [], "any", false, false, false, 31), "html", null, true);
        echo "\" class=\"social-link icon-right\" title=\"Facebook Noalia fée des gâteaux\">
                <svg class=\"i-facebook nav-facebook i-right\" xmlns=\"http://www.w3.org/2000/svg\" height=\"800\" width=\"1200\" viewBox=\"-204.79995 -341.33325 1774.9329 2047.9995\">
                    <path d=\"M1365.333 682.667C1365.333 305.64 1059.693 0 682.667 0 305.64 0 0 305.64 0 682.667c0 340.738 249.641 623.16 576 674.373V880H402.667V682.667H576v-150.4c0-171.094 101.917-265.6 257.853-265.6 74.69 0 152.814 13.333 152.814 13.333v168h-86.083c-84.804 0-111.25 52.623-111.25 106.61v128.057h189.333L948.4 880H789.333v477.04c326.359-51.213 576-333.635 576-674.373\" fill=\"#100f0d\"/><path d=\"M948.4 880l30.267-197.333H789.333V554.609C789.333 500.623 815.78 448 900.584 448h86.083V280s-78.124-13.333-152.814-13.333c-155.936 0-257.853 94.506-257.853 265.6v150.4H402.667V880H576v477.04a687.805 687.805 0 00106.667 8.293c36.288 0 71.91-2.84 106.666-8.293V880H948.4\" fill=\"#fff\"/>
                </svg>
            </a>
        </li>
    </ul>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layouts/header/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  66 => 15,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar\">
    <div class=\"nav-group-home\">
        <a href=\"{{ path('home') }}\" class=\"nav-link logo-link {% if current_menu is defined and current_menu is same as 'home' %}active{% endif %}\" title=\"Page d'Accueil\">
            <img class=\"nav-logo\" src=\"/img/logo/nav_logo.png\">
        </a>
        <svg class=\"icon i-nav-menu js-hidden-menu-opener\">
            <use xlink:href=\"/svg/sprite.svg#menu\"></use>
        </svg>
        <svg class=\"icon i-nav-menu js-hidden-menu-closer\">
            <use xlink:href=\"/svg/sprite.svg#close\"></use>
        </svg> 
    </div>
    <ul class=\"nav-group js-hidden-menu\">
        <li class=\"nav-item\">
            <a href=\"{{ path('cakes_index') }}\" class=\"nav-link icon-left {% if current_menu is defined and current_menu is same as 'cakes_index' %}active{% endif %}\">
                <svg class=\"icon i-left i-cake\">
                    <use xlink:href=\"/svg/sprite.svg#cake_fill\"></use>
                </svg> 
                <span class=\"nav-link-label\">Voir toutes mes créations</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <button class=\"nav-link icon-left\">
                <svg class=\"icon i-left\">
                    <use xlink:href=\"/svg/sprite.svg#cart_fill\"></use>
                </svg> 
                <span class=\"nav-link-label js-order-button\">Passer commande</span>
            </button>
        </li>
        <li class=\"nav-social\">
            <a href=\"{{ admin_details.facebook }}\" class=\"social-link icon-right\" title=\"Facebook Noalia fée des gâteaux\">
                <svg class=\"i-facebook nav-facebook i-right\" xmlns=\"http://www.w3.org/2000/svg\" height=\"800\" width=\"1200\" viewBox=\"-204.79995 -341.33325 1774.9329 2047.9995\">
                    <path d=\"M1365.333 682.667C1365.333 305.64 1059.693 0 682.667 0 305.64 0 0 305.64 0 682.667c0 340.738 249.641 623.16 576 674.373V880H402.667V682.667H576v-150.4c0-171.094 101.917-265.6 257.853-265.6 74.69 0 152.814 13.333 152.814 13.333v168h-86.083c-84.804 0-111.25 52.623-111.25 106.61v128.057h189.333L948.4 880H789.333v477.04c326.359-51.213 576-333.635 576-674.373\" fill=\"#100f0d\"/><path d=\"M948.4 880l30.267-197.333H789.333V554.609C789.333 500.623 815.78 448 900.584 448h86.083V280s-78.124-13.333-152.814-13.333c-155.936 0-257.853 94.506-257.853 265.6v150.4H402.667V880H576v477.04a687.805 687.805 0 00106.667 8.293c36.288 0 71.91-2.84 106.666-8.293V880H948.4\" fill=\"#fff\"/>
                </svg>
            </a>
        </li>
    </ul>
</nav>", "layouts/header/_navbar.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\layouts\\header\\_navbar.html.twig");
    }
}
