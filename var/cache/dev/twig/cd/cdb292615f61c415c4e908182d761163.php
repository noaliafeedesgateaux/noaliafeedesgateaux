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

/* admin/order/parts/_order_card.html.twig */
class __TwigTemplate_f4d09b56c553bbcc3330c0c7be7d1c11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order/parts/_order_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order/parts/_order_card.html.twig"));

        // line 1
        echo "
<li class=\"order-item ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 2, $this->source); })()), "seen", [], "any", false, false, false, 2) === false)) {
            echo "active";
        }
        echo "\"
    data-id=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\"
    data-entrypoint=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_apiShowOrder");
        echo "\"
>
    <span class=\"order-item-element order-item-checkbox \">
        <span class=\"my-checkbox js-item-checkbox\"
            data-id=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "\"
            data-seen=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 9, $this->source); })()), "seen", [], "any", false, false, false, 9), "html", null, true);
        echo "\"
        >
            <svg class=\"icon i-my-checkbox-check\">
                <use xlink:href=\"/svg/sprite.svg#check\"></use>
            </svg>
        </span>
    </span>
    <span class=\"order-item-element order-item-fullName\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\ExcerptExtensionRuntime')->getExcerpt(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "fullName", [], "any", false, false, false, 16), 15), "html", null, true);
        echo "</span>
    <span class=\"order-item-element order-item-message\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\ExcerptExtensionRuntime')->getExcerpt(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "message", [], "any", false, false, false, 17), 60), "html", null, true);
        echo "</span>
    <span class=\"order-item-element order-item-date\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\OrderDateFormatRuntime')->orderDateFormat(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "createdAt", [], "any", false, false, false, 18)), "html", null, true);
        echo "</span>
</li>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/order/parts/_order_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  81 => 17,  77 => 16,  67 => 9,  63 => 8,  56 => 4,  52 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<li class=\"order-item {% if order.seen is same as false %}active{% endif %}\"
    data-id=\"{{ order.id }}\"
    data-entrypoint=\"{{ path('admin_order_apiShowOrder') }}\"
>
    <span class=\"order-item-element order-item-checkbox \">
        <span class=\"my-checkbox js-item-checkbox\"
            data-id=\"{{ order.id }}\"
            data-seen=\"{{ order.seen }}\"
        >
            <svg class=\"icon i-my-checkbox-check\">
                <use xlink:href=\"/svg/sprite.svg#check\"></use>
            </svg>
        </span>
    </span>
    <span class=\"order-item-element order-item-fullName\">{{ order.fullName | excerpt(15)}}</span>
    <span class=\"order-item-element order-item-message\">{{ order.message | excerpt(60) }}</span>
    <span class=\"order-item-element order-item-date\">{{ order.createdAt | order_date_format }}</span>
</li>
", "admin/order/parts/_order_card.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\order\\parts\\_order_card.html.twig");
    }
}
