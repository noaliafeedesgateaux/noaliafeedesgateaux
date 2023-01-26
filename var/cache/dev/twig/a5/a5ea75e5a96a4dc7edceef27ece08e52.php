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

/* admin/visit/index.html.twig */
class __TwigTemplate_1f96a34b697aa86632d6d8dfe0216744 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'breadcrumb_add_class' => [$this, 'block_breadcrumb_add_class'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/visit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/visit/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin_base.html.twig", "admin/visit/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "    ";
        $this->loadTemplate("admin/layouts/_breadcrumb.html.twig", "admin/visit/index.html.twig", 5)->display($context);
        // line 6
        echo "    <span class=\"breadcrumb-item active\">Visites</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_breadcrumb_add_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb_add_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb_add_class"));

        echo "everVisible";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("admin/visit/_search_filter_form.html.twig", "admin/visit/index.html.twig", 14)->display($context);
        // line 15
        echo "

    <div class=\"visit-results-counter\">
        <strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\NumberFormaterRuntime')->format(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 18)), "html", null, true);
        echo "</strong> résultat";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 18) > 1)) {
            echo "s";
        }
        // line 19
        echo "    </div>

    <table class=\"table\">
        <thead class=\"table-head\">
            <th class=\"table-head-cell\">Date</th>
            <th class=\"table-head-cell\">Page visitée</th>
        </thead>
        <tbody class=\"table-body\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["visit"]) {
            // line 28
            echo "                <tr class=\"table-row\">
                    <td class=\"table-cell\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\OrderDateFormatRuntime')->orderDateFormat(twig_get_attribute($this->env, $this->source, $context["visit"], "visitedAt", [], "any", false, false, false, 29), true), "html", null, true);
            echo "</td>
                    <td class=\"table-cell\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\PageNameConverterRuntime')->convert(twig_get_attribute($this->env, $this->source, $context["visit"], "visitedPageId", [], "any", false, false, false, 30)), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    ";
        // line 37
        echo "    ";
        twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 37, $this->source); })()), "setTemplate", [0 => "admin/layouts/_pagination.html.twig"], "method", false, false, false, 37);
        // line 38
        echo "    <div class=\"navigation\">
        ";
        // line 39
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 39, $this->source); })()));
        echo "
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/visit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 39,  167 => 38,  164 => 37,  159 => 33,  150 => 30,  146 => 29,  143 => 28,  139 => 27,  129 => 19,  123 => 18,  118 => 15,  116 => 14,  113 => 13,  103 => 12,  84 => 9,  73 => 6,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/admin_base.html.twig\" %}


{% block breadcrumb %}
    {% include \"admin/layouts/_breadcrumb.html.twig\" %}
    <span class=\"breadcrumb-item active\">Visites</span>
{% endblock %}

{% block breadcrumb_add_class %}everVisible{% endblock %}


{% block body %}

    {% include \"admin/visit/_search_filter_form.html.twig\" %}


    <div class=\"visit-results-counter\">
        <strong>{{ pagination.getTotalItemCount | number_formater }}</strong> résultat{% if pagination.getTotalItemCount > 1 %}s{% endif %}
    </div>

    <table class=\"table\">
        <thead class=\"table-head\">
            <th class=\"table-head-cell\">Date</th>
            <th class=\"table-head-cell\">Page visitée</th>
        </thead>
        <tbody class=\"table-body\">
            {% for visit in pagination %}
                <tr class=\"table-row\">
                    <td class=\"table-cell\">{{ visit.visitedAt | order_date_format(true) }}</td>
                    <td class=\"table-cell\">{{ visit.visitedPageId | page_label }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    {# display navigation #}
    {% do pagination.setTemplate('admin/layouts/_pagination.html.twig') %}
    <div class=\"navigation\">
        {{ knp_pagination_render(pagination) }}
    </div>

{% endblock %}


", "admin/visit/index.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\visit\\index.html.twig");
    }
}
