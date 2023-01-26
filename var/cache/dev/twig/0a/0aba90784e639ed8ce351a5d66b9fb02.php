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

/* admin/home/blocks/_cakes_block.html.twig */
class __TwigTemplate_cf1ea2d4842e9f8f7bf8d87fc493cf1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home/blocks/_cakes_block.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home/blocks/_cakes_block.html.twig"));

        // line 1
        echo "<div class=\"admin-home-block\">
    <h3 class=\"block-title icon-left\">
        <svg class=\"icon i-left i-cake\">
            <use xlink:href=\"/svg/sprite.svg#cake_fill\"></use>
        </svg> 
        <span>Mes gâteaux</span>
    </h3>
    <div class=\"block-body\">
        <div class=\"block-big\">
            <span class=\"block-big-counter\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\NumberFormaterRuntime')->format(twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 10, $this->source); })()), "countCakesSpotlighted", [], "any", false, false, false, 10)), "html", null, true);
        echo "</span>
            <div class=\"block-big-label icon-right\">
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cakes_index", ["spotlighted" => true]);
        echo "\">gâteau";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 12, $this->source); })()), "countCakesSpotlighted", [], "any", false, false, false, 12) > 1)) {
            echo "x";
        }
        echo " à la Une</a>
                <svg class=\"icon i-right i-spot\">
                    <use xlink:href=\"/svg/sprite.svg#spot_on\"></use>
                </svg> 
            </div>
        </div>
        ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 18, $this->source); })()), "countCakesSpotlighted", [], "any", false, false, false, 18) < 4)) {
            // line 19
            echo "            <div class=\"alert alert-danger\">
                Attention ! il faut au minimum 4 gâteaux à la Une pour un affichage optimal.
                Rdv sur <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cakes_index");
            echo "\">Gérer mes gâteaux</a>, et cliquez sur 
                <svg class=\"icon i-right i-spot\">
                    <use xlink:href=\"/svg/sprite.svg#spot_off\"></use>
                </svg> 
            </div>
        ";
        }
        // line 27
        echo "        
        <div class=\"block-big\">
            <span class=\"block-big-counter\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\NumberFormaterRuntime')->format(twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 29, $this->source); })()), "countCakes", [], "any", false, false, false, 29)), "html", null, true);
        echo "</span>
            <span class=\"block-big-label\">au total</span>
        </div>
        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cakes_index", ["sortBy" => "maxVisited"]);
        echo "\" class=\"block-link admin-home-button icon-left\">
            <svg class=\"icon i-left\">
                <use xlink:href=\"/svg/sprite.svg#trending\"></use>
            </svg> 
            <span>Gâteaux les plus vus</span>
        </a>
    </div>
    <div class=\"block-footer\">
        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cakes_index");
        echo "\" class=\"admin-home-button dual icon-left\">
            <svg class=\"icon i-left i-cake\">
                <use xlink:href=\"/svg/sprite.svg#cake_fill\"></use>
            </svg> 
            <span>Gérer mes gâteaux</span>
        </a>
        <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cakes_new");
        echo "\" class=\"admin-home-button add-button dual icon-left\">
            <svg class=\"icon i-left i-add\">
                <use xlink:href=\"/svg/sprite.svg#add\"></use>
            </svg> 
            <span>Ajouter un gâteau</span>
        </a>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/home/blocks/_cakes_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  108 => 40,  97 => 32,  91 => 29,  87 => 27,  78 => 21,  74 => 19,  72 => 18,  59 => 12,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"admin-home-block\">
    <h3 class=\"block-title icon-left\">
        <svg class=\"icon i-left i-cake\">
            <use xlink:href=\"/svg/sprite.svg#cake_fill\"></use>
        </svg> 
        <span>Mes gâteaux</span>
    </h3>
    <div class=\"block-body\">
        <div class=\"block-big\">
            <span class=\"block-big-counter\">{{ dashboard.countCakesSpotlighted | number_formater }}</span>
            <div class=\"block-big-label icon-right\">
                <a href=\"{{ path('admin_cakes_index', {spotlighted: true}) }}\">gâteau{% if dashboard.countCakesSpotlighted > 1 %}x{% endif %} à la Une</a>
                <svg class=\"icon i-right i-spot\">
                    <use xlink:href=\"/svg/sprite.svg#spot_on\"></use>
                </svg> 
            </div>
        </div>
        {% if dashboard.countCakesSpotlighted < 4 %}
            <div class=\"alert alert-danger\">
                Attention ! il faut au minimum 4 gâteaux à la Une pour un affichage optimal.
                Rdv sur <a href=\"{{ path('admin_cakes_index') }}\">Gérer mes gâteaux</a>, et cliquez sur 
                <svg class=\"icon i-right i-spot\">
                    <use xlink:href=\"/svg/sprite.svg#spot_off\"></use>
                </svg> 
            </div>
        {% endif %}
        
        <div class=\"block-big\">
            <span class=\"block-big-counter\">{{ dashboard.countCakes | number_formater }}</span>
            <span class=\"block-big-label\">au total</span>
        </div>
        <a href=\"{{ path('admin_cakes_index', {sortBy: 'maxVisited'}) }}\" class=\"block-link admin-home-button icon-left\">
            <svg class=\"icon i-left\">
                <use xlink:href=\"/svg/sprite.svg#trending\"></use>
            </svg> 
            <span>Gâteaux les plus vus</span>
        </a>
    </div>
    <div class=\"block-footer\">
        <a href=\"{{ path('admin_cakes_index') }}\" class=\"admin-home-button dual icon-left\">
            <svg class=\"icon i-left i-cake\">
                <use xlink:href=\"/svg/sprite.svg#cake_fill\"></use>
            </svg> 
            <span>Gérer mes gâteaux</span>
        </a>
        <a href=\"{{ path('admin_cakes_new') }}\" class=\"admin-home-button add-button dual icon-left\">
            <svg class=\"icon i-left i-add\">
                <use xlink:href=\"/svg/sprite.svg#add\"></use>
            </svg> 
            <span>Ajouter un gâteau</span>
        </a>
    </div>
</div>", "admin/home/blocks/_cakes_block.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\home\\blocks\\_cakes_block.html.twig");
    }
}
