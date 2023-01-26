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

/* admin/cakes/form/_filter_search_form.html.twig */
class __TwigTemplate_42752a001aa693b48fe5e93921081e28 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cakes/form/_filter_search_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cakes/form/_filter_search_form.html.twig"));

        // line 1
        echo "<form class=\"filter-search-form\" action=\"\" method=\"GET\">
    <div class=\"form-group q-group\">
        <input class=\"form-box q-input js-auto-suggest\" 
                data-entrypoint=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cakes_findTitlesByQ");
        echo "\" 
                name=\"q\" placeholder=\"Rechercher un gâteau...\" 
                value=\"";
        // line 6
        (((twig_get_attribute($this->env, $this->source, ($context["search_filter"] ?? null), "q", [], "any", true, true, false, 6) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["search_filter"] ?? null), "q", [], "any", false, false, false, 6)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["search_filter"] ?? null), "q", [], "any", false, false, false, 6), "html", null, true))) : (print ("")));
        echo "\"
        >
        <svg class=\"icon i-search\">
            <use xlink:href=\"/svg/sprite.svg#search\"></use>
        </svg>
        <svg class=\"icon i-loader\">
            <use xlink:href=\"/svg/sprite.svg#load\"></use>
        </svg>
    </div>
    <div class=\"form-group submit-group\">
        <button class=\"darkrose-button form-box\" type=\"submit\">Rechercher</button>
    </div>
    <div class=\"form-group select-group\">
        <p>Tri: </p>
        <select class=\"form-box form-select js-cakes-select\" name=\"sortBy\">
            <option value=\"latest\" ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, (isset($context["search_filter"]) || array_key_exists("search_filter", $context) ? $context["search_filter"] : (function () { throw new RuntimeError('Variable "search_filter" does not exist.', 21, $this->source); })()), "sortBy", [], "any", false, false, false, 21) === "latest")) {
            echo "selected";
        }
        echo ">
                Plus récents d'abord
            </option>
            <option value=\"oldest\" ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, (isset($context["search_filter"]) || array_key_exists("search_filter", $context) ? $context["search_filter"] : (function () { throw new RuntimeError('Variable "search_filter" does not exist.', 24, $this->source); })()), "sortBy", [], "any", false, false, false, 24) === "oldest")) {
            echo "selected";
        }
        echo ">
                Plus anciens d'abord
            </option>
            <option value=\"maxVisited\" ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, (isset($context["search_filter"]) || array_key_exists("search_filter", $context) ? $context["search_filter"] : (function () { throw new RuntimeError('Variable "search_filter" does not exist.', 27, $this->source); })()), "sortBy", [], "any", false, false, false, 27) === "maxVisited")) {
            echo "selected";
        }
        echo ">
                Plus vus d'abord
            </option>
            <option value=\"minVisited\" ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, (isset($context["search_filter"]) || array_key_exists("search_filter", $context) ? $context["search_filter"] : (function () { throw new RuntimeError('Variable "search_filter" does not exist.', 30, $this->source); })()), "sortBy", [], "any", false, false, false, 30) === "minVisited")) {
            echo "selected";
        }
        echo ">
                Moins vus d'abord
            </option>
        </select>
    </div>
    <input class=\"input-spotlighted\" type=\"hidden\" name=\"spotlighted\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["search_filter"]) || array_key_exists("search_filter", $context) ? $context["search_filter"] : (function () { throw new RuntimeError('Variable "search_filter" does not exist.', 35, $this->source); })()), "spotlighted", [], "any", false, false, false, 35), "html", null, true);
        echo "\">
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/cakes/form/_filter_search_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  95 => 30,  87 => 27,  79 => 24,  71 => 21,  53 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"filter-search-form\" action=\"\" method=\"GET\">
    <div class=\"form-group q-group\">
        <input class=\"form-box q-input js-auto-suggest\" 
                data-entrypoint=\"{{ path('admin_cakes_findTitlesByQ') }}\" 
                name=\"q\" placeholder=\"Rechercher un gâteau...\" 
                value=\"{{ search_filter.q ?? '' }}\"
        >
        <svg class=\"icon i-search\">
            <use xlink:href=\"/svg/sprite.svg#search\"></use>
        </svg>
        <svg class=\"icon i-loader\">
            <use xlink:href=\"/svg/sprite.svg#load\"></use>
        </svg>
    </div>
    <div class=\"form-group submit-group\">
        <button class=\"darkrose-button form-box\" type=\"submit\">Rechercher</button>
    </div>
    <div class=\"form-group select-group\">
        <p>Tri: </p>
        <select class=\"form-box form-select js-cakes-select\" name=\"sortBy\">
            <option value=\"latest\" {% if search_filter.sortBy is same as 'latest' %}selected{% endif %}>
                Plus récents d'abord
            </option>
            <option value=\"oldest\" {% if search_filter.sortBy is same as 'oldest' %}selected{% endif %}>
                Plus anciens d'abord
            </option>
            <option value=\"maxVisited\" {% if search_filter.sortBy is same as 'maxVisited' %}selected{% endif %}>
                Plus vus d'abord
            </option>
            <option value=\"minVisited\" {% if search_filter.sortBy is same as 'minVisited' %}selected{% endif %}>
                Moins vus d'abord
            </option>
        </select>
    </div>
    <input class=\"input-spotlighted\" type=\"hidden\" name=\"spotlighted\" value=\"{{ search_filter.spotlighted }}\">
</form>", "admin/cakes/form/_filter_search_form.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\cakes\\form\\_filter_search_form.html.twig");
    }
}
