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

/* layouts/header/_login_navbar.html.twig */
class __TwigTemplate_08be94c579d6cd9db868115c93b5f052 extends Template
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
        echo "<nav class=\"login-navbar\">
    <div class=\"nav-group-home\">
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link logo-link ";
        if ((array_key_exists("current_menu", $context) && (($context["current_menu"] ?? null) === "home"))) {
            echo "active";
        }
        echo "\">
            <img class=\"nav-logo\" src=\"/img/logo/nav_logo.png\">
        </a>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "layouts/header/_login_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/header/_login_navbar.html.twig", "/home/noaliav/templates/layouts/header/_login_navbar.html.twig");
    }
}
