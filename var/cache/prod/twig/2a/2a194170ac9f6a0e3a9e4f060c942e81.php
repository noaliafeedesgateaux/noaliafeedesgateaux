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

/* layouts/_pub.html.twig */
class __TwigTemplate_2b0760709eaeeda6e0e9ef754abdc349 extends Template
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
        echo "<div class=\"pub\">
    <p class=\"icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"svg/sprite.svg#location\"></use>
        </svg>
        <span>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\LocationExtensionRuntime')->format(twig_get_attribute($this->env, $this->source, ($context["admin_details"] ?? null), "location", [], "any", false, false, false, 6)), "html", null, true);
        echo "</span>
    </p>
    <p>
        <span class=\"alternative\">5€ la part + 15€ design et main d'oeuvre</span>
    </p>
    <p class=\"icon-left\">
        <svg class=\"icon i-left pub-i-shipping\">
            <use xlink:href=\"svg/sprite.svg#shipping_fill\"></use>
        </svg>
        <span>Livraison possible</span>
    </p>
</div>

";
    }

    public function getTemplateName()
    {
        return "layouts/_pub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/_pub.html.twig", "/home/noaliav/templates/layouts/_pub.html.twig");
    }
}
