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

/* admin/layouts/_navbar.html.twig */
class __TwigTemplate_2a3c1f3bb03198b700759f755d03c54c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar admin-navbar scroll\">
    <div class=\"nav-group-home\">
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_home");
        echo "\" class=\"nav-link logo-link ";
        if ((array_key_exists("current_menu", $context) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 3, $this->source); })()) === "admin_home"))) {
            echo "active";
        }
        echo "\" title=\"Tableau de bord\">
            <img class=\"nav-logo\" src=\"/img/logo/admin_nav_logo.png\">
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cakes_index");
        echo "\" class=\"nav-link icon-left ";
        if ((array_key_exists("current_menu", $context) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 15, $this->source); })()) === "admin_cakes"))) {
            echo "active";
        }
        echo "\">
                <svg class=\"icon i-left i-cake\">
                    <use xlink:href=\"/svg/sprite.svg#cake_fill\"></use>
                </svg> 
                <span class=\"nav-link-label\">Gérer les gâteaux</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_index");
        echo "\" class=\"nav-link icon-left\">
                <svg class=\"icon i-left\">
                    <use xlink:href=\"/svg/sprite.svg#cart_fill\"></use>
                </svg> 
                <span class=\"nav-link-label js-order-button\">Gérer les commandes</span>
            </a>
        </li>
    </ul>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/layouts/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  66 => 15,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar admin-navbar scroll\">
    <div class=\"nav-group-home\">
        <a href=\"{{ path('admin_home') }}\" class=\"nav-link logo-link {% if current_menu is defined and current_menu is same as 'admin_home' %}active{% endif %}\" title=\"Tableau de bord\">
            <img class=\"nav-logo\" src=\"/img/logo/admin_nav_logo.png\">
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
            <a href=\"{{ path('admin_cakes_index') }}\" class=\"nav-link icon-left {% if current_menu is defined and current_menu is same as 'admin_cakes' %}active{% endif %}\">
                <svg class=\"icon i-left i-cake\">
                    <use xlink:href=\"/svg/sprite.svg#cake_fill\"></use>
                </svg> 
                <span class=\"nav-link-label\">Gérer les gâteaux</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"{{ path('admin_order_index') }}\" class=\"nav-link icon-left\">
                <svg class=\"icon i-left\">
                    <use xlink:href=\"/svg/sprite.svg#cart_fill\"></use>
                </svg> 
                <span class=\"nav-link-label js-order-button\">Gérer les commandes</span>
            </a>
        </li>
    </ul>
</nav>", "admin/layouts/_navbar.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\layouts\\_navbar.html.twig");
    }
}
