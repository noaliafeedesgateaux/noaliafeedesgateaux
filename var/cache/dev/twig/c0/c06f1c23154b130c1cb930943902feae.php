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

/* js_template/flash.html.twig */
class __TwigTemplate_fbf06bd17a2d41ad29276313326bb768 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js_template/flash.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js_template/flash.html.twig"));

        // line 1
        echo "<template id=\"flash-danger-template\">
    <div class=\"alert alert-danger icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"/svg/sprite.svg#error\"></use>
        </svg> 
        <span class=\"flash-message\"></span>
    </div>
</template>

<template id=\"flash-success-template\">
    <div class=\"alert alert-success icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"/svg/sprite.svg#info\"></use>
        </svg> 
        <span class=\"flash-message\"></span>
    </div>
</template>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "js_template/flash.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<template id=\"flash-danger-template\">
    <div class=\"alert alert-danger icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"/svg/sprite.svg#error\"></use>
        </svg> 
        <span class=\"flash-message\"></span>
    </div>
</template>

<template id=\"flash-success-template\">
    <div class=\"alert alert-success icon-left\">
        <svg class=\"icon i-left\">
            <use xlink:href=\"/svg/sprite.svg#info\"></use>
        </svg> 
        <span class=\"flash-message\"></span>
    </div>
</template>", "js_template/flash.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\js_template\\flash.html.twig");
    }
}
