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

/* admin/order/parts/_order_search_filter_form.html.twig */
class __TwigTemplate_a829159da1f2b22638b2f3e39339a261 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order/parts/_order_search_filter_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order/parts/_order_search_filter_form.html.twig"));

        // line 1
        echo "<form class=\"order-search-filter-form\" action=\"\" method=\"GET\">

    <div class=\"form-group select-group order-select-group\">
    <p>Tri: </p>
        <select class=\"form-box form-select js-order-select\" name=\"sortBy\">
            <option value=\"latest\" ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, (isset($context["search_filter"]) || array_key_exists("search_filter", $context) ? $context["search_filter"] : (function () { throw new RuntimeError('Variable "search_filter" does not exist.', 6, $this->source); })()), "sortBy", [], "any", false, false, false, 6) === "latest")) {
            echo "selected";
        }
        echo ">
                Plus récentes d'abord
            </option>
            <option value=\"oldest\" ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, (isset($context["search_filter"]) || array_key_exists("search_filter", $context) ? $context["search_filter"] : (function () { throw new RuntimeError('Variable "search_filter" does not exist.', 9, $this->source); })()), "sortBy", [], "any", false, false, false, 9) === "oldest")) {
            echo "selected";
        }
        echo ">
                Plus anciennes d'abord
            </option>
        </select>
    </div>

    ";
        // line 16
        echo "    <div class=\"spot-control\">
        <button class=\"icon-left admin-button ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, (isset($context["search_filter"]) || array_key_exists("search_filter", $context) ? $context["search_filter"] : (function () { throw new RuntimeError('Variable "search_filter" does not exist.', 17, $this->source); })()), "seen", [], "any", false, false, false, 17) === false)) {
            echo "active";
        }
        echo "\"
                name=\"seen\" value=\"0\"
        >
            <svg class=\"icon i-left i-spot-on\">
                <use xlink:href=\"/svg/sprite.svg#mail_fill\"></use>
            </svg>
            <span>Non lues <span class=\"counter js-not-seen-counter\" data-entrypoint=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_apiCountNotSeen");
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["countNotSeen"]) || array_key_exists("countNotSeen", $context) ? $context["countNotSeen"] : (function () { throw new RuntimeError('Variable "countNotSeen" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</span></span>
        </button>
        <button class=\"admin-button js-filter-all ";
        // line 25
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["search_filter"]) || array_key_exists("search_filter", $context) ? $context["search_filter"] : (function () { throw new RuntimeError('Variable "search_filter" does not exist.', 25, $this->source); })()), "seen", [], "any", false, false, false, 25) === false)) {
            echo "active";
        }
        echo "\"
                name=\"seen\" value=\"1\"
        >
            <span>Toutes <span class=\"counter\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["countAll"]) || array_key_exists("countAll", $context) ? $context["countAll"] : (function () { throw new RuntimeError('Variable "countAll" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</span></span>
        </button>
    </div>

</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/order/parts/_order_search_filter_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  90 => 25,  83 => 23,  72 => 17,  69 => 16,  58 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"order-search-filter-form\" action=\"\" method=\"GET\">

    <div class=\"form-group select-group order-select-group\">
    <p>Tri: </p>
        <select class=\"form-box form-select js-order-select\" name=\"sortBy\">
            <option value=\"latest\" {% if search_filter.sortBy is same as 'latest' %}selected{% endif %}>
                Plus récentes d'abord
            </option>
            <option value=\"oldest\" {% if search_filter.sortBy is same as 'oldest' %}selected{% endif %}>
                Plus anciennes d'abord
            </option>
        </select>
    </div>

    {# spot controls #}
    <div class=\"spot-control\">
        <button class=\"icon-left admin-button {% if search_filter.seen is same as false %}active{% endif %}\"
                name=\"seen\" value=\"0\"
        >
            <svg class=\"icon i-left i-spot-on\">
                <use xlink:href=\"/svg/sprite.svg#mail_fill\"></use>
            </svg>
            <span>Non lues <span class=\"counter js-not-seen-counter\" data-entrypoint=\"{{ path('admin_order_apiCountNotSeen') }}\">{{ countNotSeen }}</span></span>
        </button>
        <button class=\"admin-button js-filter-all {% if search_filter.seen is not same as false %}active{% endif %}\"
                name=\"seen\" value=\"1\"
        >
            <span>Toutes <span class=\"counter\">{{ countAll }}</span></span>
        </button>
    </div>

</form>", "admin/order/parts/_order_search_filter_form.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\order\\parts\\_order_search_filter_form.html.twig");
    }
}
