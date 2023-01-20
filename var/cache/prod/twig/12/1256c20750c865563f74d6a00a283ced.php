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

/* layouts/header/_header_body.html.twig */
class __TwigTemplate_5d189bc423886feaa67c6de701a86615 extends Template
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
        echo "<div class=\"header-body\">
    <div class=\"header-logo-container\">
        <img src=\"/img/logo/header_logo.png\" class=\"header-logo\">
    </div>
    <div class=\"header-description-container\">
        <div class=\"header-description\">
            <div class=\"duo-1\">
                Créations personnalisées, décors en chocolat, crèmes au beurre et ganaches...
            </div>
            <div class=\"duo-2\">
                Recettes adaptées à chaque demande
            </div>
        </div>
    </div>
</div>

<div class=\"header-floater\">
    <div class=\"icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"svg/sprite.svg#location_fill\"></use>
        </svg>
        <span>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\LocationExtensionRuntime')->format(twig_get_attribute($this->env, $this->source, ($context["admin_details"] ?? null), "location", [], "any", false, false, false, 22)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"svg/sprite.svg#shipping_fill\"></use>
        </svg>
        <span>Livraison</span>
    </div>
</div>

        ";
    }

    public function getTemplateName()
    {
        return "layouts/header/_header_body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/header/_header_body.html.twig", "/home/noaliav/templates/layouts/header/_header_body.html.twig");
    }
}
