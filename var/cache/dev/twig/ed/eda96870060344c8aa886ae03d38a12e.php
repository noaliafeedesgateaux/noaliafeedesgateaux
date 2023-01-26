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

/* admin/layouts/_pagination.html.twig */
class __TwigTemplate_555b08161edb01df57b53a5105b1443a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/_pagination.html.twig"));

        // line 2
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 2, $this->source); })()) > 1)) {
            // line 3
            echo "
    <div class=\"pagination-container\">

        <div class=\"pagination\">
        
            ";
            // line 8
            if ((array_key_exists("first", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 8, $this->source); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 8, $this->source); })())))) {
                // line 9
                echo "                <span class=\"pagination-item first active\">
                    <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 10, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 10, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 10, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 10, $this->source); })())])), "html", null, true);
                echo "\">
                        <svg class=\"icon i-pagination\">
                            <use xlink:href=\"/svg/sprite.svg#first_page\"></use>
                        </svg> 
                    </a>
                </span>
            ";
            } else {
                // line 17
                echo "                <span class=\"pagination-item first disabled\">
                    <svg class=\"icon i-pagination\">
                        <use xlink:href=\"/svg/sprite.svg#first_page\"></use>
                    </svg> 
                </span>
            ";
            }
            // line 23
            echo "
            ";
            // line 24
            if (array_key_exists("previous", $context)) {
                // line 25
                echo "                <span class=\"pagination-item previous active\">
                    <a rel=\"prev\" href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 26, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 26, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 26, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 26, $this->source); })())])), "html", null, true);
                echo "\">
                        <svg class=\"icon i-pagination\">
                            <use xlink:href=\"/svg/sprite.svg#chevron_left\"></use>
                        </svg> 
                    </a>
                </span>

            ";
            } else {
                // line 34
                echo "                <span class=\"pagination-item previous disabled\">
                    <svg class=\"icon i-pagination\">
                        <use xlink:href=\"/svg/sprite.svg#chevron_left\"></use>
                    </svg> 
                </span>
            ";
            }
            // line 40
            echo "
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 42
                echo "                ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 42, $this->source); })()))) {
                    // line 43
                    echo "                    <span class=\"pagination-item page active\">
                        <a href=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 44, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 44, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 44, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </span>
                ";
                } else {
                    // line 47
                    echo "                    <span class=\"pagination-item page current\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                ";
                }
                // line 49
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
            ";
            // line 51
            if (array_key_exists("next", $context)) {
                // line 52
                echo "                <span class=\"pagination-item next active\">
                    <a rel=\"next\" href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 53, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 53, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 53, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 53, $this->source); })())])), "html", null, true);
                echo "\">
                        <svg class=\"icon i-pagination\">
                            <use xlink:href=\"/svg/sprite.svg#chevron_right\"></use>
                        </svg> 
                    </a>
                </span>
            ";
            } else {
                // line 60
                echo "                <span class=\"pagination-item next disabled\">
                    <svg class=\"icon i-pagination\">
                        <use xlink:href=\"/svg/sprite.svg#chevron_right\"></use>
                    </svg> 
                </span>
            ";
            }
            // line 66
            echo "
            ";
            // line 67
            if ((array_key_exists("last", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 67, $this->source); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 67, $this->source); })())))) {
                // line 68
                echo "                <span class=\"pagination-item last active\">
                    <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 69, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 69, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 69, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 69, $this->source); })())])), "html", null, true);
                echo "\">
                        <svg class=\"icon i-pagination\">
                            <use xlink:href=\"/svg/sprite.svg#last_page\"></use>
                        </svg> 
                    </a>
                </span>
            ";
            } else {
                // line 76
                echo "                <span class=\"pagination-item last disabled\">
                    <svg class=\"icon i-pagination\">
                        <use xlink:href=\"/svg/sprite.svg#last_page\"></use>
                    </svg> 
                </span>
            ";
            }
            // line 82
            echo "        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/layouts/_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 82,  179 => 76,  169 => 69,  166 => 68,  164 => 67,  161 => 66,  153 => 60,  143 => 53,  140 => 52,  138 => 51,  135 => 50,  129 => 49,  123 => 47,  115 => 44,  112 => 43,  109 => 42,  105 => 41,  102 => 40,  94 => 34,  83 => 26,  80 => 25,  78 => 24,  75 => 23,  67 => 17,  57 => 10,  54 => 9,  52 => 8,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# default Sliding pagination control implementation #}
{% if pageCount > 1 %}

    <div class=\"pagination-container\">

        <div class=\"pagination\">
        
            {% if first is defined and current != first %}
                <span class=\"pagination-item first active\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">
                        <svg class=\"icon i-pagination\">
                            <use xlink:href=\"/svg/sprite.svg#first_page\"></use>
                        </svg> 
                    </a>
                </span>
            {% else %}
                <span class=\"pagination-item first disabled\">
                    <svg class=\"icon i-pagination\">
                        <use xlink:href=\"/svg/sprite.svg#first_page\"></use>
                    </svg> 
                </span>
            {% endif %}

            {% if previous is defined %}
                <span class=\"pagination-item previous active\">
                    <a rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">
                        <svg class=\"icon i-pagination\">
                            <use xlink:href=\"/svg/sprite.svg#chevron_left\"></use>
                        </svg> 
                    </a>
                </span>

            {% else %}
                <span class=\"pagination-item previous disabled\">
                    <svg class=\"icon i-pagination\">
                        <use xlink:href=\"/svg/sprite.svg#chevron_left\"></use>
                    </svg> 
                </span>
            {% endif %}

            {% for page in pagesInRange %}
                {% if page != current %}
                    <span class=\"pagination-item page active\">
                        <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                    </span>
                {% else %}
                    <span class=\"pagination-item page current\">{{ page }}</span>
                {% endif %}
            {% endfor %}

            {% if next is defined %}
                <span class=\"pagination-item next active\">
                    <a rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">
                        <svg class=\"icon i-pagination\">
                            <use xlink:href=\"/svg/sprite.svg#chevron_right\"></use>
                        </svg> 
                    </a>
                </span>
            {% else %}
                <span class=\"pagination-item next disabled\">
                    <svg class=\"icon i-pagination\">
                        <use xlink:href=\"/svg/sprite.svg#chevron_right\"></use>
                    </svg> 
                </span>
            {% endif %}

            {% if last is defined and current != last %}
                <span class=\"pagination-item last active\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">
                        <svg class=\"icon i-pagination\">
                            <use xlink:href=\"/svg/sprite.svg#last_page\"></use>
                        </svg> 
                    </a>
                </span>
            {% else %}
                <span class=\"pagination-item last disabled\">
                    <svg class=\"icon i-pagination\">
                        <use xlink:href=\"/svg/sprite.svg#last_page\"></use>
                    </svg> 
                </span>
            {% endif %}
        </div>
    </div>
{% endif %}
", "admin/layouts/_pagination.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\layouts\\_pagination.html.twig");
    }
}
