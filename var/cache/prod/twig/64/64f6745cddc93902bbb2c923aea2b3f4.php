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

/* layouts/_footer.html.twig */
class __TwigTemplate_400f75f686cf6b773fdd69b5f7471ac4 extends Template
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
        // line 1
        echo "<footer class=\"footer container\">
        <p class=\"footer-location icon-left\">
            <svg class=\"icon i-left\">
                <use xlink:href=\"/svg/sprite.svg#location\"></use>
            </svg>
            <span class=\"footer-location-text\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\LocationExtensionRuntime')->format(twig_get_attribute($this->env, $this->source, ($context["admin_details"] ?? null), "location", [], "any", false, false, false, 6)), "html", null, true);
        echo "</span>
        </p>
        <ul class=\"footer-list\">
            <li class=\"footer-list-item footer-email-item\">
                <a href=\"mailto:";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin_details"] ?? null), "email", [], "any", false, false, false, 10), "html", null, true);
        echo "\" class=\"footer-link\" title=\"Ecrire à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin_details"] ?? null), "email", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin_details"] ?? null), "emailStart", [], "any", false, false, false, 11), "html", null, true);
        echo "<strong>@</strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin_details"] ?? null), "emailEnd", [], "any", false, false, false, 11), "html", null, true);
        echo "
                </a>
            </li>
            <li class=\"footer-list-item footer-phone-item icon-left\">
                <svg class=\"icon i-left\">
                    <use xlink:href=\"/svg/sprite.svg#phone\"></use>
                </svg> 
                <span class=\"phone-text\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin_details"] ?? null), "phone", [], "any", false, false, false, 18), "html", null, true);
        echo "</span>
            </li>
            <li class=\"footer-list-item footer-social-item icon-right\">
                <span class=\"footer-social-text\">
                    Retrouvez-moi sur
                </span>
                <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin_details"] ?? null), "facebook", [], "any", false, false, false, 24), "html", null, true);
        echo "\" class=\"footer-social-link i-right\" title=\"Facebook Noalia fée des gâteaux\">
                    <svg class=\"i-facebook i-footer-facebook\" xmlns=\"http://www.w3.org/2000/svg\" height=\"800\" width=\"1200\" viewBox=\"-204.79995 -341.33325 1774.9329 2047.9995\"><path d=\"M1365.333 682.667C1365.333 305.64 1059.693 0 682.667 0 305.64 0 0 305.64 0 682.667c0 340.738 249.641 623.16 576 674.373V880H402.667V682.667H576v-150.4c0-171.094 101.917-265.6 257.853-265.6 74.69 0 152.814 13.333 152.814 13.333v168h-86.083c-84.804 0-111.25 52.623-111.25 106.61v128.057h189.333L948.4 880H789.333v477.04c326.359-51.213 576-333.635 576-674.373\" fill=\"#100f0d\"/><path d=\"M948.4 880l30.267-197.333H789.333V554.609C789.333 500.623 815.78 448 900.584 448h86.083V280s-78.124-13.333-152.814-13.333c-155.936 0-257.853 94.506-257.853 265.6v150.4H402.667V880H576v477.04a687.805 687.805 0 00106.667 8.293c36.288 0 71.91-2.84 106.666-8.293V880H948.4\" fill=\"#fff\"/></svg>
                </a>
            </li>
        </ul>
        <div class=\"footer-title\">
            <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"link-logo\" title=\"Page d'Accueil\">
                <img class=\"footer-logo\" src=\"/img/logo/footer_logo.png\">
            </a>
            <span class=\"separator\">-</span>
            <span class=\"date\">2022</span>
        </div>
    </footer>


    ";
    }

    public function getTemplateName()
    {
        return "layouts/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  78 => 24,  69 => 18,  57 => 11,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/_footer.html.twig", "/home/noaliav/templates/layouts/_footer.html.twig");
    }
}
