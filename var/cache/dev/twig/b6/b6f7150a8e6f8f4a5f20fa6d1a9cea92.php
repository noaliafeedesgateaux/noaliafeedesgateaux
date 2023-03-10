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

/* home/index.html.twig */
class __TwigTemplate_eb36fbc3f7df6061406c7c95ff16db25 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'flashes' => [$this, 'block_flashes'],
            'flashes_on_header' => [$this, 'block_flashes_on_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 4
        echo "    <script src=\"/js/views/home/index.js\" type=\"module\" defer></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_flashes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flashes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flashes"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_flashes_on_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flashes_on_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flashes_on_header"));

        // line 9
        echo "    <div class=\"header-flashes\">
        ";
        // line 10
        $this->loadTemplate("layouts/_flashes.html.twig", "home/index.html.twig", 10)->display($context);
        // line 11
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "

        <h1 class=\"main-title\">Mes derni??res cr??ations</h1>

        ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["cakes_spotlighted"]) || array_key_exists("cakes_spotlighted", $context) ? $context["cakes_spotlighted"] : (function () { throw new RuntimeError('Variable "cakes_spotlighted" does not exist.', 19, $this->source); })())) >= 3)) {
            // line 20
            echo "            <div class=\"main-body carousel-container\">
                <svg class=\"icon car-arrow car-arrow-left\">
                    <use xlink:href=\"/svg/sprite.svg#chevron_left\"></use>
                </svg> 
                <div class=\"carousel\">
                    ";
            // line 25
            $context["padding"] = $this->env->getRuntime('App\Twig\Runtime\CarouselItemPaddingCalculatorRuntime')->calc((isset($context["cakes_spotlighted"]) || array_key_exists("cakes_spotlighted", $context) ? $context["cakes_spotlighted"] : (function () { throw new RuntimeError('Variable "cakes_spotlighted" does not exist.', 25, $this->source); })()));
            // line 26
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cakes_spotlighted"]) || array_key_exists("cakes_spotlighted", $context) ? $context["cakes_spotlighted"] : (function () { throw new RuntimeError('Variable "cakes_spotlighted" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cake"]) {
                // line 27
                echo "                        <div class=\"carousel-item\"
                            data-entrypoint=\"";
                // line 28
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cakes_api_getCakeData");
                echo "\"
                            data-apivisitcake=\"";
                // line 29
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cakes_api_addVisit");
                echo "\"
                            style=\"padding: ";
                // line 30
                echo twig_escape_filter($this->env, (isset($context["padding"]) || array_key_exists("padding", $context) ? $context["padding"] : (function () { throw new RuntimeError('Variable "padding" does not exist.', 30, $this->source); })()), "html", null, true);
                echo ";\"
                        >
                            <div class=\"carousel-img-container js-cake-card\"
                                data-id=\"";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cake"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "\"
                                style=\"background: url(";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\PicturePathExtensionRuntime')->getPath(twig_get_attribute($this->env, $this->source, $context["cake"], "firstPicture", [], "any", false, false, false, 34)), "html", null, true);
                echo ") center center / cover no-repeat\"
                            >
                                ";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["cake"], "title", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "                                    <div class=\"board\">
                                        <p>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cake"], "title", [], "any", false, false, false, 38), "html", null, true);
                    echo "</p>
                                    </div>
                                ";
                }
                // line 41
                echo "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cake'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                </div>
                <svg class=\"icon car-arrow car-arrow-right\">
                    <use xlink:href=\"/svg/sprite.svg#chevron_right\"></use>
                </svg> 
            </div>
        ";
        } else {
            // line 50
            echo "            <p class=\"empty-spotlighted-message\">Oups... aucun g??teau n'est affich?? ici actuellement.</p>
        ";
        }
        // line 52
        echo "
        
        <div class=\"home-to-cakes-link-container\">
            <a class=\"home-to-cakes-link\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cakes_index");
        echo "\">
                <span>Voir plus de g??teaux<span class=\"home-to-cakes-link-arrow\">></span></span>
            </a>
        </div>
        
        ";
        // line 60
        $this->loadTemplate("layouts/_pub.html.twig", "home/index.html.twig", 60)->display($context);
        // line 61
        echo "
        ";
        // line 62
        $this->loadTemplate("order/_form.html.twig", "home/index.html.twig", 62)->display($context);
        // line 63
        echo "        

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 63,  233 => 62,  230 => 61,  228 => 60,  220 => 55,  215 => 52,  211 => 50,  203 => 44,  195 => 41,  189 => 38,  186 => 37,  184 => 36,  179 => 34,  175 => 33,  169 => 30,  165 => 29,  161 => 28,  158 => 27,  153 => 26,  151 => 25,  144 => 20,  142 => 19,  136 => 15,  126 => 14,  115 => 11,  113 => 10,  110 => 9,  100 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block javascript %}
    <script src=\"/js/views/home/index.js\" type=\"module\" defer></script>
{% endblock %}

{% block flashes %}{% endblock %}
{% block flashes_on_header %}
    <div class=\"header-flashes\">
        {% include \"layouts/_flashes.html.twig\" %}
    </div>
{% endblock %}

{% block body %}


        <h1 class=\"main-title\">Mes derni??res cr??ations</h1>

        {% if (cakes_spotlighted | length) >= 3  %}
            <div class=\"main-body carousel-container\">
                <svg class=\"icon car-arrow car-arrow-left\">
                    <use xlink:href=\"/svg/sprite.svg#chevron_left\"></use>
                </svg> 
                <div class=\"carousel\">
                    {% set padding = carouselItem_padding_calc(cakes_spotlighted) %}
                    {% for cake in cakes_spotlighted %}
                        <div class=\"carousel-item\"
                            data-entrypoint=\"{{ path('cakes_api_getCakeData') }}\"
                            data-apivisitcake=\"{{ path('cakes_api_addVisit') }}\"
                            style=\"padding: {{ padding }};\"
                        >
                            <div class=\"carousel-img-container js-cake-card\"
                                data-id=\"{{ cake.id }}\"
                                style=\"background: url({{ cake.firstPicture | picture_path }}) center center / cover no-repeat\"
                            >
                                {% if cake.title %}
                                    <div class=\"board\">
                                        <p>{{ cake.title }}</p>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    {% endfor %}
                </div>
                <svg class=\"icon car-arrow car-arrow-right\">
                    <use xlink:href=\"/svg/sprite.svg#chevron_right\"></use>
                </svg> 
            </div>
        {% else %}
            <p class=\"empty-spotlighted-message\">Oups... aucun g??teau n'est affich?? ici actuellement.</p>
        {% endif %}

        
        <div class=\"home-to-cakes-link-container\">
            <a class=\"home-to-cakes-link\" href=\"{{ path('cakes_index') }}\">
                <span>Voir plus de g??teaux<span class=\"home-to-cakes-link-arrow\">></span></span>
            </a>
        </div>
        
        {% include \"layouts/_pub.html.twig\" %}

        {% include \"order/_form.html.twig\" %}
        

{% endblock %}", "home/index.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia f??e des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\home\\index.html.twig");
    }
}
