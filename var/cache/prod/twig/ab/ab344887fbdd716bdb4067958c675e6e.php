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

/* cakes/_breadcrumb.html.twig */
class __TwigTemplate_cae8c6de7de411d31a7992a61d5b6a1a extends Template
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
        echo "<div class=\"breadcrumb cakes-breadcrumb\">
    <a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"icon-left breadcrumb-item js-cakes-to-home\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"/svg/sprite.svg#home_fill\"></use>
        </svg>
        <span>Accueil</span>
    </a>
    <span class=\"breadcrumb-separator\">></span>
    <span class=\"breadcrumb-item active\">Toutes mes créations</span>
</div>";
    }

    public function getTemplateName()
    {
        return "cakes/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cakes/_breadcrumb.html.twig", "/home/noaliav/templates/cakes/_breadcrumb.html.twig");
    }
}
