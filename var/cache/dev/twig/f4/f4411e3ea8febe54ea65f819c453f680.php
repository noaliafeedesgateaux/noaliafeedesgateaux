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

/* admin/cakes/index.html.twig */
class __TwigTemplate_8286faeba75b08bab350f11d8a178321 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cakes/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cakes/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin_base.html.twig", "admin/cakes/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    ";
        $this->loadTemplate("admin/layouts/_breadcrumb.html.twig", "admin/cakes/index.html.twig", 4)->display($context);
        // line 5
        echo "    <span class=\"breadcrumb-item active\">Gâteaux</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    ";
        // line 12
        $this->loadTemplate("admin/cakes/form/_filter_search_form.html.twig", "admin/cakes/index.html.twig", 12)->display($context);
        // line 13
        echo "
    ";
        // line 15
        echo "    <div class=\"admin-cake-count-results\">
        <strong>";
        // line 16
        ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 16), "html", null, true))) : (print ("Aucun")));
        echo " gâteau";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 16) > 1)) {
            echo "x";
        }
        echo "</strong>
        ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 17, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 17) === 0)) {
            echo " ne ";
        }
        // line 18
        echo "         correspond";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 18) > 1)) {
            echo "ent";
        }
        echo " à la recherche.
    </div>

   
    ";
        // line 23
        echo "    <div class=\"spot-control\">
        <button class=\"icon-left admin-button js-filter-spotlighted ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, (isset($context["search_filter"]) || array_key_exists("search_filter", $context) ? $context["search_filter"] : (function () { throw new RuntimeError('Variable "search_filter" does not exist.', 24, $this->source); })()), "spotlighted", [], "any", false, false, false, 24) === true)) {
            echo "active";
        }
        echo "\" data-value=\"1\">
            <svg class=\"icon i-left i-spot-on\">
                <use xlink:href=\"/svg/sprite.svg#spot_on\"></use>
            </svg>
            <span>Gâteaux à la Une <span class=\"counter js-count-spotlighted\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["count_spotlighted_on_search"]) || array_key_exists("count_spotlighted_on_search", $context) ? $context["count_spotlighted_on_search"] : (function () { throw new RuntimeError('Variable "count_spotlighted_on_search" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</span></span>
        </button>
        <button class=\"admin-button js-filter-all ";
        // line 30
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["search_filter"]) || array_key_exists("search_filter", $context) ? $context["search_filter"] : (function () { throw new RuntimeError('Variable "search_filter" does not exist.', 30, $this->source); })()), "spotlighted", [], "any", false, false, false, 30) === true)) {
            echo "active";
        }
        echo "\" data-value=\"0\">
            Tous les gâteaux <span class=\"counter count-total-cakes\">";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["count_all_on_search"]) || array_key_exists("count_all_on_search", $context) ? $context["count_all_on_search"] : (function () { throw new RuntimeError('Variable "count_all_on_search" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</span>
        </button>
    </div>

    ";
        // line 36
        echo "    <div class=\"admin-cake-list\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 37, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["cake"]) {
            // line 38
            echo "            ";
            $this->loadTemplate("admin/cakes/parts/_cake_card.html.twig", "admin/cakes/index.html.twig", 38)->display($context);
            // line 39
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cake'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>

    ";
        // line 43
        echo "    ";
        twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 43, $this->source); })()), "setTemplate", [0 => "admin/layouts/_pagination.html.twig"], "method", false, false, false, 43);
        // line 44
        echo "    <div class=\"navigation\">
        ";
        // line 45
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 45, $this->source); })()));
        echo "
    </div>


    ";
        // line 49
        $this->loadTemplate("admin/cakes/form/_new_button.html.twig", "admin/cakes/index.html.twig", 49)->display($context);
        // line 50
        echo "    



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/cakes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 50,  210 => 49,  203 => 45,  200 => 44,  197 => 43,  193 => 40,  179 => 39,  176 => 38,  159 => 37,  156 => 36,  149 => 31,  143 => 30,  138 => 28,  129 => 24,  126 => 23,  116 => 18,  112 => 17,  104 => 16,  101 => 15,  98 => 13,  96 => 12,  93 => 11,  83 => 10,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/admin_base.html.twig\" %}

{% block breadcrumb %}
    {% include \"admin/layouts/_breadcrumb.html.twig\" %}
    <span class=\"breadcrumb-item active\">Gâteaux</span>
{% endblock %}



{% block body %}

    {% include \"admin/cakes/form/_filter_search_form.html.twig\" %}

    {# total items count #}
    <div class=\"admin-cake-count-results\">
        <strong>{{ pagination.getTotalItemCount ?: 'Aucun' }} gâteau{% if pagination.getTotalItemCount > 1 %}x{% endif %}</strong>
        {% if pagination.getTotalItemCount is same as 0 %} ne {% endif %}
         correspond{% if pagination.getTotalItemCount > 1 %}ent{% endif %} à la recherche.
    </div>

   
    {# spot controls #}
    <div class=\"spot-control\">
        <button class=\"icon-left admin-button js-filter-spotlighted {% if search_filter.spotlighted is same as true %}active{% endif %}\" data-value=\"1\">
            <svg class=\"icon i-left i-spot-on\">
                <use xlink:href=\"/svg/sprite.svg#spot_on\"></use>
            </svg>
            <span>Gâteaux à la Une <span class=\"counter js-count-spotlighted\">{{ count_spotlighted_on_search }}</span></span>
        </button>
        <button class=\"admin-button js-filter-all {% if search_filter.spotlighted is not same as true %}active{% endif %}\" data-value=\"0\">
            Tous les gâteaux <span class=\"counter count-total-cakes\">{{ count_all_on_search }}</span>
        </button>
    </div>

    {# cake-list #}
    <div class=\"admin-cake-list\">
        {% for cake in pagination %}
            {% include \"admin/cakes/parts/_cake_card.html.twig\" %}
        {% endfor %}
    </div>

    {# display navigation #}
    {% do pagination.setTemplate('admin/layouts/_pagination.html.twig') %}
    <div class=\"navigation\">
        {{ knp_pagination_render(pagination) }}
    </div>


    {% include \"admin/cakes/form/_new_button.html.twig\" %}
    



{% endblock %}", "admin/cakes/index.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\cakes\\index.html.twig");
    }
}
