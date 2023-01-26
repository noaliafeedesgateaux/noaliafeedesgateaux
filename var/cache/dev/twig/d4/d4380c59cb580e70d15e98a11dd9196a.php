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

/* admin/home/index.html.twig */
class __TwigTemplate_6d44ec17b2c9a522b2f6c058171ad8bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin_base.html.twig", "admin/home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"admin-title icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"/svg/sprite.svg#home_fill\"></use>
        </svg>
        <span>Tableau de bord</span>
    </h2>

    <main class=\"admin-home-body\">
        
        ";
        // line 13
        $this->loadTemplate("admin/home/blocks/_cakes_block.html.twig", "admin/home/index.html.twig", 13)->display($context);
        // line 14
        echo "
        ";
        // line 15
        $this->loadTemplate("admin/home/blocks/_orders_block.html.twig", "admin/home/index.html.twig", 15)->display($context);
        // line 16
        echo "
        ";
        // line 17
        $this->loadTemplate("admin/home/blocks/_visits_block.html.twig", "admin/home/index.html.twig", 17)->display($context);
        // line 18
        echo "        
        ";
        // line 19
        $this->loadTemplate("admin/home/blocks/_storage_block.html.twig", "admin/home/index.html.twig", 19)->display($context);
        // line 20
        echo "
        ";
        // line 21
        $this->loadTemplate("admin/home/blocks/_details_block.html.twig", "admin/home/index.html.twig", 21)->display($context);
        // line 22
        echo "        
        ";
        // line 23
        $this->loadTemplate("admin/home/blocks/_security_block.html.twig", "admin/home/index.html.twig", 23)->display($context);
        // line 24
        echo "        
    </main>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  104 => 23,  101 => 22,  99 => 21,  96 => 20,  94 => 19,  91 => 18,  89 => 17,  86 => 16,  84 => 15,  81 => 14,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/admin_base.html.twig\" %}

{% block body %}
    <h2 class=\"admin-title icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"/svg/sprite.svg#home_fill\"></use>
        </svg>
        <span>Tableau de bord</span>
    </h2>

    <main class=\"admin-home-body\">
        
        {% include \"admin/home/blocks/_cakes_block.html.twig\" %}

        {% include \"admin/home/blocks/_orders_block.html.twig\" %}

        {% include \"admin/home/blocks/_visits_block.html.twig\" %}
        
        {% include \"admin/home/blocks/_storage_block.html.twig\" %}

        {% include \"admin/home/blocks/_details_block.html.twig\" %}
        
        {% include \"admin/home/blocks/_security_block.html.twig\" %}
        
    </main>
    
{% endblock %}", "admin/home/index.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\home\\index.html.twig");
    }
}
