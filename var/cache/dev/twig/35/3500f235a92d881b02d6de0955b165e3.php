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

/* layouts/_pub.html.twig */
class __TwigTemplate_ec476b49329086c791b41df754912723 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/_pub.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/_pub.html.twig"));

        // line 1
        echo "<div class=\"pub\">
    <p class=\"icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"svg/sprite.svg#location\"></use>
        </svg>
        <span>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\LocationExtensionRuntime')->format(twig_get_attribute($this->env, $this->source, (isset($context["admin_details"]) || array_key_exists("admin_details", $context) ? $context["admin_details"] : (function () { throw new RuntimeError('Variable "admin_details" does not exist.', 6, $this->source); })()), "location", [], "any", false, false, false, 6)), "html", null, true);
        echo "</span>
    </p>
    <p>
        <span class=\"alternative\">5€ la part + 15€ design et main d'oeuvre</span>
    </p>
    <p class=\"icon-left\">
        <svg class=\"icon i-left pub-i-shipping\">
            <use xlink:href=\"svg/sprite.svg#shipping_fill\"></use>
        </svg>
        <span>Livraison possible</span>
    </p>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layouts/_pub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"pub\">
    <p class=\"icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"svg/sprite.svg#location\"></use>
        </svg>
        <span>{{ admin_details.location | location_format }}</span>
    </p>
    <p>
        <span class=\"alternative\">5€ la part + 15€ design et main d'oeuvre</span>
    </p>
    <p class=\"icon-left\">
        <svg class=\"icon i-left pub-i-shipping\">
            <use xlink:href=\"svg/sprite.svg#shipping_fill\"></use>
        </svg>
        <span>Livraison possible</span>
    </p>
</div>

", "layouts/_pub.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\layouts\\_pub.html.twig");
    }
}
