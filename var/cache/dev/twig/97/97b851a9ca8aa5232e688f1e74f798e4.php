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

/* admin/order/parts/_order_controls.html.twig */
class __TwigTemplate_fb65fb7dee320fe62386fd63127e5318 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order/parts/_order_controls.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order/parts/_order_controls.html.twig"));

        // line 1
        echo "<div class=\"order-controls\">
    <div class=\"master-checkbox-control order-control\">
        <div class=\"my-checkbox js-order-masterCheckbox\"
            title=\"Tout sélectionner\"
            >
            <svg class=\"icon i-my-checkbox-check\">
                <use xlink:href=\"/svg/sprite.svg#check\"></use>
            </svg>
        </div>
    </div>
    <div 
        class=\"js-order-mark-status order-control order-control-disappear\"
        data-entrypoint=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_apiMarkStatus");
        echo "\"
        title=\"marquer non lu\"
        >
        <svg class=\"icon i-mark-not-seen\">
            <use xlink:href=\"/svg/sprite.svg#email_unread\"></use>
        </svg>
        <svg class=\"icon i-mark-seen\">
            <use xlink:href=\"/svg/sprite.svg#mail_seen\"></use>
        </svg>
    </div>
    <div 
        class=\"js-order-trash order-control order-control-disappear\"
        data-entrypoint=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_apiDelete");
        echo "\"
        title=\"supprimer\"
        >
        <svg class=\"icon\">
            <use xlink:href=\"/svg/sprite.svg#trash\"></use>
        </svg>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/order/parts/_order_controls.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"order-controls\">
    <div class=\"master-checkbox-control order-control\">
        <div class=\"my-checkbox js-order-masterCheckbox\"
            title=\"Tout sélectionner\"
            >
            <svg class=\"icon i-my-checkbox-check\">
                <use xlink:href=\"/svg/sprite.svg#check\"></use>
            </svg>
        </div>
    </div>
    <div 
        class=\"js-order-mark-status order-control order-control-disappear\"
        data-entrypoint=\"{{ path('admin_order_apiMarkStatus') }}\"
        title=\"marquer non lu\"
        >
        <svg class=\"icon i-mark-not-seen\">
            <use xlink:href=\"/svg/sprite.svg#email_unread\"></use>
        </svg>
        <svg class=\"icon i-mark-seen\">
            <use xlink:href=\"/svg/sprite.svg#mail_seen\"></use>
        </svg>
    </div>
    <div 
        class=\"js-order-trash order-control order-control-disappear\"
        data-entrypoint=\"{{ path('admin_order_apiDelete') }}\"
        title=\"supprimer\"
        >
        <svg class=\"icon\">
            <use xlink:href=\"/svg/sprite.svg#trash\"></use>
        </svg>
    </div>
</div>", "admin/order/parts/_order_controls.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\order\\parts\\_order_controls.html.twig");
    }
}
