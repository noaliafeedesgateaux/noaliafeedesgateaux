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

/* admin/home/blocks/_details_block.html.twig */
class __TwigTemplate_26e29879cd65583730d510098d35d78b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home/blocks/_details_block.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home/blocks/_details_block.html.twig"));

        // line 1
        echo "<div class=\"admin-home-block js-admin-details\">
    <form class=\"js-admin-details-form\" method=\"POST\" action=\"\" data-entrypoint=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_apiUpdateDetails");
        echo "\">
        <h3 class=\"block-title icon-left\">
            <svg class=\"icon i-left\">
                <use xlink:href=\"/svg/sprite.svg#user\"></use>
            </svg> 
            <span>Mes coordonnées</span>
        </h3>
        <div class=\"block-body details\">
            <div class=\"block-body-field icon-left\">
                <svg class=\"icon i-left\">
                    <use xlink:href=\"/svg/sprite.svg#phone\"></use>
                </svg> 
                <span class=\"admin-details-label\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 14, $this->source); })()), "administrator", [], "any", false, false, false, 14), "phone", [], "any", false, false, false, 14), "html", null, true);
        echo "</span>
                <input class=\"admin-details-form form-box\" name=\"phone\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 15, $this->source); })()), "administrator", [], "any", false, false, false, 15), "phone", [], "any", false, false, false, 15), "html", null, true);
        echo "\">                
            </div>
            <div class=\"separator\"></div>
            <div class=\"block-body-field icon-left\">
                <svg class=\"icon i-left i-mail\">
                    <use xlink:href=\"/svg/sprite.svg#mail_fill\"></use>
                </svg> 
                <span class=\"admin-details-label\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 22, $this->source); })()), "administrator", [], "any", false, false, false, 22), "email", [], "any", false, false, false, 22), "html", null, true);
        echo "</span>
                <input class=\"admin-details-form form-box\" name=\"email\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 23, $this->source); })()), "administrator", [], "any", false, false, false, 23), "email", [], "any", false, false, false, 23), "html", null, true);
        echo "\">                
            </div>
            <div class=\"separator\"></div>
            <div class=\"block-body-field icon-left\">
                <svg class=\"icon i-left details-fb\" xmlns=\"http://www.w3.org/2000/svg\" height=\"800\" width=\"1200\" viewBox=\"-204.79995 -341.33325 1774.9329 2047.9995\">
                    <path d=\"M1365.333 682.667C1365.333 305.64 1059.693 0 682.667 0 305.64 0 0 305.64 0 682.667c0 340.738 249.641 623.16 576 674.373V880H402.667V682.667H576v-150.4c0-171.094 101.917-265.6 257.853-265.6 74.69 0 152.814 13.333 152.814 13.333v168h-86.083c-84.804 0-111.25 52.623-111.25 106.61v128.057h189.333L948.4 880H789.333v477.04c326.359-51.213 576-333.635 576-674.373\" fill=\"#100f0d\"/><path d=\"M948.4 880l30.267-197.333H789.333V554.609C789.333 500.623 815.78 448 900.584 448h86.083V280s-78.124-13.333-152.814-13.333c-155.936 0-257.853 94.506-257.853 265.6v150.4H402.667V880H576v477.04a687.805 687.805 0 00106.667 8.293c36.288 0 71.91-2.84 106.666-8.293V880H948.4\" fill=\"#fff\"/>
                </svg>
                <span class=\"admin-details-label\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 30, $this->source); })()), "administrator", [], "any", false, false, false, 30), "facebook", [], "any", false, false, false, 30), "html", null, true);
        echo "</span>
                <input class=\"admin-details-form form-box\" name=\"facebook\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 31, $this->source); })()), "administrator", [], "any", false, false, false, 31), "facebook", [], "any", false, false, false, 31), "html", null, true);
        echo "\">                
            </div>
            <div class=\"separator\"></div>
            <div class=\"block-body-field icon-left city-field\">
                <svg class=\"icon i-left\">
                    <use xlink:href=\"/svg/sprite.svg#location_fill\"></use>
                </svg> 
                <span class=\"admin-details-label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\LocationExtensionRuntime')->format(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 38, $this->source); })()), "administrator", [], "any", false, false, false, 38), "location", [], "any", false, false, false, 38)), "html", null, true);
        echo "</span>
                <input class=\"admin-details-form form-box js-city-suggest\" 
                        name=\"location\" 
                        value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\LocationExtensionRuntime')->format(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 41, $this->source); })()), "administrator", [], "any", false, false, false, 41), "location", [], "any", false, false, false, 41), true), "html", null, true);
        echo "\"
                        autocomplete=\"off\"
                        data-suggestvalidated=\"1\"
                        data-x=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 44, $this->source); })()), "administrator", [], "any", false, false, false, 44), "location", [], "any", false, false, false, 44), "x", [], "any", false, false, false, 44), "html", null, true);
        echo "\"
                        data-y=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 45, $this->source); })()), "administrator", [], "any", false, false, false, 45), "location", [], "any", false, false, false, 45), "y", [], "any", false, false, false, 45), "html", null, true);
        echo "\"
                        data-city=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 46, $this->source); })()), "administrator", [], "any", false, false, false, 46), "location", [], "any", false, false, false, 46), "city", [], "any", false, false, false, 46), "html", null, true);
        echo "\"
                        data-postcode=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 47, $this->source); })()), "administrator", [], "any", false, false, false, 47), "location", [], "any", false, false, false, 47), "postcode", [], "any", false, false, false, 47), "html", null, true);
        echo "\"
                        >
                <svg class=\"icon i-loader\">
                    <use xlink:href=\"/svg/sprite.svg#load\"></use>
                </svg>              
            </div>
        </div>
        <div class=\"block-footer\">
            <a class=\"admin-home-button add-button icon-left js-admin-details-update edit-button\">
                <svg class=\"icon i-left i-edit\">
                    <use xlink:href=\"/svg/sprite.svg#edit\"></use>
                </svg> 
                <span>Modifier</span>
            </a>
            <div class=\"admin-details-form admin-details-update-controls\">
                <a class=\"admin-home-button js-admin-details-cancel\">Annuler</a>
                <button type=\"submit\" class=\"admin-home-button add-button icon-left js-admin-details-submit form-submit enabled\">
                    <svg class=\"icon i-left i-edit\">
                        <use xlink:href=\"/svg/sprite.svg#save\"></use>
                    </svg> 
                    <svg class=\"icon i-left i-loader\">
                        <use xlink:href=\"/svg/sprite.svg#load\"></use>
                    </svg> 
                    <span>Enregistrer</span>
                </button>
            </div>
        </div>
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("update-admin-details"), "html", null, true);
        echo "\">
    </form>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/home/blocks/_details_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 74,  127 => 47,  123 => 46,  119 => 45,  115 => 44,  109 => 41,  103 => 38,  93 => 31,  89 => 30,  79 => 23,  75 => 22,  65 => 15,  61 => 14,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"admin-home-block js-admin-details\">
    <form class=\"js-admin-details-form\" method=\"POST\" action=\"\" data-entrypoint=\"{{ path('admin_apiUpdateDetails') }}\">
        <h3 class=\"block-title icon-left\">
            <svg class=\"icon i-left\">
                <use xlink:href=\"/svg/sprite.svg#user\"></use>
            </svg> 
            <span>Mes coordonnées</span>
        </h3>
        <div class=\"block-body details\">
            <div class=\"block-body-field icon-left\">
                <svg class=\"icon i-left\">
                    <use xlink:href=\"/svg/sprite.svg#phone\"></use>
                </svg> 
                <span class=\"admin-details-label\">{{ dashboard.administrator.phone }}</span>
                <input class=\"admin-details-form form-box\" name=\"phone\" value=\"{{ dashboard.administrator.phone }}\">                
            </div>
            <div class=\"separator\"></div>
            <div class=\"block-body-field icon-left\">
                <svg class=\"icon i-left i-mail\">
                    <use xlink:href=\"/svg/sprite.svg#mail_fill\"></use>
                </svg> 
                <span class=\"admin-details-label\">{{ dashboard.administrator.email }}</span>
                <input class=\"admin-details-form form-box\" name=\"email\" value=\"{{ dashboard.administrator.email }}\">                
            </div>
            <div class=\"separator\"></div>
            <div class=\"block-body-field icon-left\">
                <svg class=\"icon i-left details-fb\" xmlns=\"http://www.w3.org/2000/svg\" height=\"800\" width=\"1200\" viewBox=\"-204.79995 -341.33325 1774.9329 2047.9995\">
                    <path d=\"M1365.333 682.667C1365.333 305.64 1059.693 0 682.667 0 305.64 0 0 305.64 0 682.667c0 340.738 249.641 623.16 576 674.373V880H402.667V682.667H576v-150.4c0-171.094 101.917-265.6 257.853-265.6 74.69 0 152.814 13.333 152.814 13.333v168h-86.083c-84.804 0-111.25 52.623-111.25 106.61v128.057h189.333L948.4 880H789.333v477.04c326.359-51.213 576-333.635 576-674.373\" fill=\"#100f0d\"/><path d=\"M948.4 880l30.267-197.333H789.333V554.609C789.333 500.623 815.78 448 900.584 448h86.083V280s-78.124-13.333-152.814-13.333c-155.936 0-257.853 94.506-257.853 265.6v150.4H402.667V880H576v477.04a687.805 687.805 0 00106.667 8.293c36.288 0 71.91-2.84 106.666-8.293V880H948.4\" fill=\"#fff\"/>
                </svg>
                <span class=\"admin-details-label\">{{ dashboard.administrator.facebook }}</span>
                <input class=\"admin-details-form form-box\" name=\"facebook\" value=\"{{ dashboard.administrator.facebook }}\">                
            </div>
            <div class=\"separator\"></div>
            <div class=\"block-body-field icon-left city-field\">
                <svg class=\"icon i-left\">
                    <use xlink:href=\"/svg/sprite.svg#location_fill\"></use>
                </svg> 
                <span class=\"admin-details-label\">{{ dashboard.administrator.location | location_format }}</span>
                <input class=\"admin-details-form form-box js-city-suggest\" 
                        name=\"location\" 
                        value=\"{{ dashboard.administrator.location | location_format(true) }}\"
                        autocomplete=\"off\"
                        data-suggestvalidated=\"1\"
                        data-x=\"{{ dashboard.administrator.location.x }}\"
                        data-y=\"{{ dashboard.administrator.location.y }}\"
                        data-city=\"{{ dashboard.administrator.location.city }}\"
                        data-postcode=\"{{ dashboard.administrator.location.postcode }}\"
                        >
                <svg class=\"icon i-loader\">
                    <use xlink:href=\"/svg/sprite.svg#load\"></use>
                </svg>              
            </div>
        </div>
        <div class=\"block-footer\">
            <a class=\"admin-home-button add-button icon-left js-admin-details-update edit-button\">
                <svg class=\"icon i-left i-edit\">
                    <use xlink:href=\"/svg/sprite.svg#edit\"></use>
                </svg> 
                <span>Modifier</span>
            </a>
            <div class=\"admin-details-form admin-details-update-controls\">
                <a class=\"admin-home-button js-admin-details-cancel\">Annuler</a>
                <button type=\"submit\" class=\"admin-home-button add-button icon-left js-admin-details-submit form-submit enabled\">
                    <svg class=\"icon i-left i-edit\">
                        <use xlink:href=\"/svg/sprite.svg#save\"></use>
                    </svg> 
                    <svg class=\"icon i-left i-loader\">
                        <use xlink:href=\"/svg/sprite.svg#load\"></use>
                    </svg> 
                    <span>Enregistrer</span>
                </button>
            </div>
        </div>
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('update-admin-details') }}\">
    </form>
</div>", "admin/home/blocks/_details_block.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\home\\blocks\\_details_block.html.twig");
    }
}
