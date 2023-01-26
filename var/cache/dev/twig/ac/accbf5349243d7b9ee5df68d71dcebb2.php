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

/* js_template/order_show.html.twig */
class __TwigTemplate_f715457802cbf2a167039708394fac1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js_template/order_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js_template/order_show.html.twig"));

        // line 1
        echo "<template id=\"order-show-template\">
    <div class=\"order-show\">
        <div class=\"order-show-header\">
            <div class=\"order-show-title\">
                <span class=\"js-order-show-invoiceNumber\">n° machin</span>
                <span class=\"js-order-show-date\">date exemple</span>
            </div>
        </div>
        <div class=\"order-show-body\">
            <div class=\"order-show-group\">
                <h3 class=\"order-show-label\">Nom :</h3>
                <p class=\"js-order-show-name\"></p>
            </div>
            <div class=\"order-show-group\">
                <h3 class=\"order-show-label\">Adresse email :</h3>
                <p><a class=\"js-order-show-mail\" href=\"\"></a></p>
            </div>
            <div class=\"order-show-group\">
                <h3 class=\"order-show-label\">Téléphone :</h3>
                <p class=\"js-order-show-phone\"></p>
            </div>
            <div class=\"order-show-group city-group\">
                <div class=\"city-label\">
                    <h3 class=\"order-show-label\">Ville :</h3>
                    <p class=\"js-order-show-city\"></p>
                </div>
                <div class=\"distance-calculator-loader\">
                    <svg class=\"icon i-left i-loader\">
                        <use xlink:href=\"/svg/sprite.svg#load\"></use>
                    </svg>
                    <span>calcul de la distance en cours</span>
                </div>
                <div 
                    class=\"distance-calculator icon-left\"
                    data-entrypoint=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_apiDistanceCalculator");
        echo "\"
                    >
                    <svg class=\"icon i-left\">
                        <use xlink:href=\"/svg/sprite.svg#my_location_fill\"></use>
                    </svg>
                    <div class=\"body\">
                        <div class=\"title\"></div>
                        <div class=\"text\"><strong class=\"distance\"></strong> à vol d'oiseau</div>
                    </div>
                </div>
            </div>
            <div class=\"order-show-group\">
                <h3 class=\"order-show-label\">Message :</h3>
                <p class=\"js-order-show-message\"></p>
            </div>
        </div>
    </div>
</template>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "js_template/order_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 35,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<template id=\"order-show-template\">
    <div class=\"order-show\">
        <div class=\"order-show-header\">
            <div class=\"order-show-title\">
                <span class=\"js-order-show-invoiceNumber\">n° machin</span>
                <span class=\"js-order-show-date\">date exemple</span>
            </div>
        </div>
        <div class=\"order-show-body\">
            <div class=\"order-show-group\">
                <h3 class=\"order-show-label\">Nom :</h3>
                <p class=\"js-order-show-name\"></p>
            </div>
            <div class=\"order-show-group\">
                <h3 class=\"order-show-label\">Adresse email :</h3>
                <p><a class=\"js-order-show-mail\" href=\"\"></a></p>
            </div>
            <div class=\"order-show-group\">
                <h3 class=\"order-show-label\">Téléphone :</h3>
                <p class=\"js-order-show-phone\"></p>
            </div>
            <div class=\"order-show-group city-group\">
                <div class=\"city-label\">
                    <h3 class=\"order-show-label\">Ville :</h3>
                    <p class=\"js-order-show-city\"></p>
                </div>
                <div class=\"distance-calculator-loader\">
                    <svg class=\"icon i-left i-loader\">
                        <use xlink:href=\"/svg/sprite.svg#load\"></use>
                    </svg>
                    <span>calcul de la distance en cours</span>
                </div>
                <div 
                    class=\"distance-calculator icon-left\"
                    data-entrypoint=\"{{ path('admin_apiDistanceCalculator') }}\"
                    >
                    <svg class=\"icon i-left\">
                        <use xlink:href=\"/svg/sprite.svg#my_location_fill\"></use>
                    </svg>
                    <div class=\"body\">
                        <div class=\"title\"></div>
                        <div class=\"text\"><strong class=\"distance\"></strong> à vol d'oiseau</div>
                    </div>
                </div>
            </div>
            <div class=\"order-show-group\">
                <h3 class=\"order-show-label\">Message :</h3>
                <p class=\"js-order-show-message\"></p>
            </div>
        </div>
    </div>
</template>", "js_template/order_show.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\js_template\\order_show.html.twig");
    }
}
