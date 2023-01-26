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

/* admin/cakes/parts/_cake_card.html.twig */
class __TwigTemplate_850504734d8b1fca59456c0b3c8ea133 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cakes/parts/_cake_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cakes/parts/_cake_card.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cakes_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" class=\"admin-cake-item\">
    <div class=\"admin-cake-card\">
        <div style=\"background: url('";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\PicturePathExtensionRuntime')->getPath(twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 3, $this->source); })()), "firstPicture", [], "any", false, false, false, 3)), "html", null, true);
        echo "') center center / cover no-repeat\"
            class=\"cake-card-img\">
            <div class=\"cake-card-spot ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 5, $this->source); })()), "spotlighted", [], "any", false, false, false, 5)) {
            echo "spot-on";
        }
        echo "\" 
                data-entrypoint=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cakes_spotlightToggle", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
        echo "\"
                data-form=\".filter-search-form\"
                data-onlyspotlightednav=\".js-filter-spotlighted\"
                title=\"";
        // line 9
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 9, $this->source); })()), "spotlighted", [], "any", false, false, false, 9)) ? ("Enlever de la Une") : ("Mettre à la Une"));
        echo "\"
                >
                <svg class=\"icon i-spot i-spot-on\">
                    <use xlink:href=\"/svg/sprite.svg#spot_on\"></use>
                </svg>
                <svg class=\"icon i-spot i-spot-off\">
                    <use xlink:href=\"/svg/sprite.svg#spot_off\"></use>
                </svg> 
            </div>
            <p class=\"cake-card-date\">Ajouté le ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 18, $this->source); })()), "createdAt", [], "any", false, false, false, 18), "format", [0 => "d/m/Y"], "method", false, false, false, 18), "html", null, true);
        echo "</p>
            <div class=\"cake-card-visit\">
                <span><strong>";
        // line 20
        (((twig_get_attribute($this->env, $this->source, ($context["cake"] ?? null), "countVisit", [], "any", true, true, false, 20) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["cake"] ?? null), "countVisit", [], "any", false, false, false, 20)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cake"] ?? null), "countVisit", [], "any", false, false, false, 20), "html", null, true))) : (print ("0")));
        echo "</strong> vue";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 20, $this->source); })()), "countVisit", [], "any", false, false, false, 20) > 1)) {
            echo "s";
        }
        echo "</span>
                ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 21, $this->source); })()), "lastVisit", [], "any", false, false, false, 21)) {
            // line 22
            echo "                    <span class=\"text-very-small\">";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 22, $this->source); })()), "countVisit", [], "any", false, false, false, 22) > 1)) {
                echo "Dernière - ";
            }
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\OrderDateFormatRuntime')->orderDateFormat(twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 22, $this->source); })()), "lastVisit", [], "any", false, false, false, 22)), "html", null, true);
            echo "</span>
                ";
        }
        // line 24
        echo "            </div>
        </div>
        <div class=\"cake-card-body\">
            <h3 class=\"cake-card-title ";
        // line 27
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27))) {
            echo "no-content";
        }
        echo "\">";
        ((twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), "html", null, true))) : (print ("Sans titre")));
        echo "</h3>
            <p class=\"cake-card-description ";
        // line 28
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28))) {
            echo "no-content";
        }
        echo "\">";
        (($this->env->getRuntime('App\Twig\Runtime\ExcerptExtensionRuntime')->getExcerpt(twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 100)) ? (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\ExcerptExtensionRuntime')->getExcerpt(twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 100), "html", null, true))) : (print ("Sans description")));
        echo "</p>
            <div class=\"cake-card-controls\">
                ";
        // line 30
        $this->loadTemplate("admin/cakes/form/_update_button.html.twig", "admin/cakes/parts/_cake_card.html.twig", 30)->display($context);
        // line 31
        echo "                ";
        $this->loadTemplate("admin/cakes/form/_delete_button.html.twig", "admin/cakes/parts/_cake_card.html.twig", 31)->display($context);
        // line 32
        echo "            </div>
        </div>
    </div>
</a>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/cakes/parts/_cake_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 32,  126 => 31,  124 => 30,  115 => 28,  107 => 27,  102 => 24,  93 => 22,  91 => 21,  83 => 20,  78 => 18,  66 => 9,  60 => 6,  54 => 5,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{ path('admin_cakes_show', {id: cake.id}) }}\" class=\"admin-cake-item\">
    <div class=\"admin-cake-card\">
        <div style=\"background: url('{{ cake.firstPicture | picture_path }}') center center / cover no-repeat\"
            class=\"cake-card-img\">
            <div class=\"cake-card-spot {% if cake.spotlighted %}spot-on{% endif %}\" 
                data-entrypoint=\"{{ path('admin_cakes_spotlightToggle', {id: cake.id}) }}\"
                data-form=\".filter-search-form\"
                data-onlyspotlightednav=\".js-filter-spotlighted\"
                title=\"{{ cake.spotlighted ? 'Enlever de la Une': 'Mettre à la Une' }}\"
                >
                <svg class=\"icon i-spot i-spot-on\">
                    <use xlink:href=\"/svg/sprite.svg#spot_on\"></use>
                </svg>
                <svg class=\"icon i-spot i-spot-off\">
                    <use xlink:href=\"/svg/sprite.svg#spot_off\"></use>
                </svg> 
            </div>
            <p class=\"cake-card-date\">Ajouté le {{ cake.createdAt.format('d/m/Y') }}</p>
            <div class=\"cake-card-visit\">
                <span><strong>{{ cake.countVisit ?? '0' }}</strong> vue{% if cake.countVisit > 1 %}s{% endif %}</span>
                {% if cake.lastVisit %}
                    <span class=\"text-very-small\">{% if cake.countVisit > 1 %}Dernière - {% endif %}{{ cake.lastVisit | order_date_format }}</span>
                {% endif %}
            </div>
        </div>
        <div class=\"cake-card-body\">
            <h3 class=\"cake-card-title {% if cake.title is null %}no-content{% endif %}\">{{ cake.title ?: 'Sans titre' }}</h3>
            <p class=\"cake-card-description {% if cake.description is null %}no-content{% endif %}\">{{ cake.description | excerpt(100) ?: 'Sans description' }}</p>
            <div class=\"cake-card-controls\">
                {% include \"admin/cakes/form/_update_button.html.twig\" %}
                {% include \"admin/cakes/form/_delete_button.html.twig\" %}
            </div>
        </div>
    </div>
</a>", "admin/cakes/parts/_cake_card.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\cakes\\parts\\_cake_card.html.twig");
    }
}
