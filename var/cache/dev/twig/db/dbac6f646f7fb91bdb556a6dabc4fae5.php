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

/* order/_form.html.twig */
class __TwigTemplate_7bade5f3ed205115d1520b696af19652 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/_form.html.twig"));

        // line 1
        echo "<div class=\"js-scrollspy-order\">
    <h1 class=\"form-title js-order-title\">Vous souhaitez passer commande ?</h1>

    <p class=\"form-intro\">Renseignez vos coordonnées, je vous recontacterai au plus vite. Sinon, vous pouvez aussi m'appeler directement au <strong>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_details"]) || array_key_exists("admin_details", $context) ? $context["admin_details"] : (function () { throw new RuntimeError('Variable "admin_details" does not exist.', 4, $this->source); })()), "phone", [], "any", false, false, false, 4), "html", null, true);
        echo "</strong></p>

    <form class=\"form order-form\" action=\"\" method=\"post\" data-entrypoint=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_new");
        echo "\">
        <div class=\"form-body\">
            <div class=\"form-group fullName-group\">
                <label class=\"form-label fullName-label\" for=\"fullName\">Nom *</label>
                <input id=\"fullName\" type=\"text\" class=\"form-box form-input fullName-input\" name=\"fullName\" placeholder=\"Ex: Jean Dumoulin...\">
                <svg class=\"icon i-error-red\">
                    <use xlink:href=\"svg/sprite.svg#error\"></use>
                </svg>
            </div>
            <div class=\"form-group email-group\">
                <label class=\"form-label email-label\" for=\"email\">Adresse email *</label>
                <input id=\"email\" type=\"text\" class=\"form-box form-input email-input\" name=\"email\" placeholder=\"exemple@mail.fr\">
                <svg class=\"icon i-error-red\">
                    <use xlink:href=\"svg/sprite.svg#error\"></use>
                </svg>
            </div>
            <div class=\"form-group city-group optional\">
                <label class=\"form-label city-label\" for=\"city\">Ville *</label>
                <input class=\"form-box form-input city-input js-city-suggest\" 
                        id=\"city\" 
                        type=\"text\" 
                        name=\"city\"
                        autocomplete=\"off\"
                        placeholder=\"Ex: Nice, Cannes...\"
                        >
                <svg class=\"icon i-input i-location-fill\">
                    <use xlink:href=\"svg/sprite.svg#location_fill\"></use>
                </svg>
                <svg class=\"icon i-left i-loader\">
                    <use xlink:href=\"svg/sprite.svg#load\"></use>
                </svg>
                <svg class=\"icon i-error-red\">
                    <use xlink:href=\"svg/sprite.svg#error\"></use>
                </svg>
            </div>
            <div class=\"form-group phone-group optional\">
                <label class=\"form-label phone-label\" for=\"phone\">Téléphone</label>
                <input id=\"phone\" type=\"text\" class=\"form-box form-input phone-input\" name=\"phone\" placeholder=\"06 01 02 03 04\">
                <svg class=\"icon i-input\">
                    <use xlink:href=\"svg/sprite.svg#phone\"></use>
                </svg>
                <svg class=\"icon i-error-red\">
                    <use xlink:href=\"svg/sprite.svg#error\"></use>
                </svg>
            </div>
            <div class=\"form-group message-group optional\">
                <label class=\"form-label message-label\" for=\"message\">Message</label>
                <textarea class=\"form-box form-textarea message-textarea\" name=\"message\" id=\"message\" cols=\"80\" rows=\"40\" placeholder=\"Décrivez moi le gâteau que vous souhaitez...\"></textarea>
            </div>
        </div>
        <div class=\"form-group info-group\">
            <p class=\"form-info\"><strong>*</strong> champs obligatoires</p>
        </div>
        <div class=\"form-group submit-group\">
            <div class=\"submit-alert icon-left\">
                <svg class=\"icon i-left i-check\">
                    <use xlink:href=\"svg/sprite.svg#check\"></use>
                </svg>
                <svg class=\"icon i-left i-error\">
                    <use xlink:href=\"svg/sprite.svg#error\"></use>
                </svg>
                <span class=\"submit-alert-label\"></span>
            </div>
            <button class=\"form-box form-submit icon-left\" type=\"submit\">
                <svg class=\"icon i-left i-send\">
                    <use xlink:href=\"svg/sprite.svg#send_fill\"></use>
                </svg>
                <svg class=\"icon i-left i-loader\">
                    <use xlink:href=\"svg/sprite.svg#load\"></use>
                </svg>
                <span>Envoyer</span>
            </button>
        </div>
    </form>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "order/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"js-scrollspy-order\">
    <h1 class=\"form-title js-order-title\">Vous souhaitez passer commande ?</h1>

    <p class=\"form-intro\">Renseignez vos coordonnées, je vous recontacterai au plus vite. Sinon, vous pouvez aussi m'appeler directement au <strong>{{ admin_details.phone }}</strong></p>

    <form class=\"form order-form\" action=\"\" method=\"post\" data-entrypoint=\"{{ path('order_new') }}\">
        <div class=\"form-body\">
            <div class=\"form-group fullName-group\">
                <label class=\"form-label fullName-label\" for=\"fullName\">Nom *</label>
                <input id=\"fullName\" type=\"text\" class=\"form-box form-input fullName-input\" name=\"fullName\" placeholder=\"Ex: Jean Dumoulin...\">
                <svg class=\"icon i-error-red\">
                    <use xlink:href=\"svg/sprite.svg#error\"></use>
                </svg>
            </div>
            <div class=\"form-group email-group\">
                <label class=\"form-label email-label\" for=\"email\">Adresse email *</label>
                <input id=\"email\" type=\"text\" class=\"form-box form-input email-input\" name=\"email\" placeholder=\"exemple@mail.fr\">
                <svg class=\"icon i-error-red\">
                    <use xlink:href=\"svg/sprite.svg#error\"></use>
                </svg>
            </div>
            <div class=\"form-group city-group optional\">
                <label class=\"form-label city-label\" for=\"city\">Ville *</label>
                <input class=\"form-box form-input city-input js-city-suggest\" 
                        id=\"city\" 
                        type=\"text\" 
                        name=\"city\"
                        autocomplete=\"off\"
                        placeholder=\"Ex: Nice, Cannes...\"
                        >
                <svg class=\"icon i-input i-location-fill\">
                    <use xlink:href=\"svg/sprite.svg#location_fill\"></use>
                </svg>
                <svg class=\"icon i-left i-loader\">
                    <use xlink:href=\"svg/sprite.svg#load\"></use>
                </svg>
                <svg class=\"icon i-error-red\">
                    <use xlink:href=\"svg/sprite.svg#error\"></use>
                </svg>
            </div>
            <div class=\"form-group phone-group optional\">
                <label class=\"form-label phone-label\" for=\"phone\">Téléphone</label>
                <input id=\"phone\" type=\"text\" class=\"form-box form-input phone-input\" name=\"phone\" placeholder=\"06 01 02 03 04\">
                <svg class=\"icon i-input\">
                    <use xlink:href=\"svg/sprite.svg#phone\"></use>
                </svg>
                <svg class=\"icon i-error-red\">
                    <use xlink:href=\"svg/sprite.svg#error\"></use>
                </svg>
            </div>
            <div class=\"form-group message-group optional\">
                <label class=\"form-label message-label\" for=\"message\">Message</label>
                <textarea class=\"form-box form-textarea message-textarea\" name=\"message\" id=\"message\" cols=\"80\" rows=\"40\" placeholder=\"Décrivez moi le gâteau que vous souhaitez...\"></textarea>
            </div>
        </div>
        <div class=\"form-group info-group\">
            <p class=\"form-info\"><strong>*</strong> champs obligatoires</p>
        </div>
        <div class=\"form-group submit-group\">
            <div class=\"submit-alert icon-left\">
                <svg class=\"icon i-left i-check\">
                    <use xlink:href=\"svg/sprite.svg#check\"></use>
                </svg>
                <svg class=\"icon i-left i-error\">
                    <use xlink:href=\"svg/sprite.svg#error\"></use>
                </svg>
                <span class=\"submit-alert-label\"></span>
            </div>
            <button class=\"form-box form-submit icon-left\" type=\"submit\">
                <svg class=\"icon i-left i-send\">
                    <use xlink:href=\"svg/sprite.svg#send_fill\"></use>
                </svg>
                <svg class=\"icon i-left i-loader\">
                    <use xlink:href=\"svg/sprite.svg#load\"></use>
                </svg>
                <span>Envoyer</span>
            </button>
        </div>
    </form>
</div>", "order/_form.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\order\\_form.html.twig");
    }
}
