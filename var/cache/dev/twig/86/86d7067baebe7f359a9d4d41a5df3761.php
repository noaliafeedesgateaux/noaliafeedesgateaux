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

/* js_template/image_show.html.twig */
class __TwigTemplate_858a97af7f59efe6173da598a579cf0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js_template/image_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js_template/image_show.html.twig"));

        // line 1
        echo "<template id=\"image-show-template\">
    <aside class=\"image-show-modal\">
        <div class=\"image-show\">
            <svg class=\"icon image-show-closer\">
                <use xlink:href=\"svg/sprite.svg#close\"></use>
            </svg> 
            <div class=\"image-show-title-container\">
                <h2 class=\"image-show-title\"></h2>
            </div>
            <div class=\"image-show-body\">
                    <div class=\"image-show-carousel-container\">
                    <svg class=\"icon image-show-car-arrow image-show-car-arrow-left\">
                        <use xlink:href=\"/svg/sprite.svg#chevron_left\"></use>
                    </svg> 
                    <div class=\"image-show-carousel\">
                        ";
        // line 17
        echo "                    </div>
                    <svg class=\"icon image-show-car-arrow image-show-car-arrow-right\">
                        <use xlink:href=\"/svg/sprite.svg#chevron_right\"></use>
                    </svg> 
                </div>
                
                <div class=\"small-list\">
                    ";
        // line 25
        echo "                </div>
                <div class=\"image-show-description\">
                </div>
            </div>
        </div>
        <svg class=\"icon i-loader i-loader-modal\">
            <use xlink:href=\"/svg/sprite.svg#load\"></use>
        </svg> 
    </aside>
</template>


<template id=\"image-show-carousel-item-template\">
    <a class=\"img-link\" href=\"\" target=\"_blank\" title=\"Ouvrir l'image dans un nouvel onglet\">
        <div class=\"image-show-carousel-item image-show-carousel-img\">
        </div>
    </a>
</template>

<template id=\"small-img-template\">
    <div class=\"small-img\">
    </div>
</template>      ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "js_template/image_show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  60 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<template id=\"image-show-template\">
    <aside class=\"image-show-modal\">
        <div class=\"image-show\">
            <svg class=\"icon image-show-closer\">
                <use xlink:href=\"svg/sprite.svg#close\"></use>
            </svg> 
            <div class=\"image-show-title-container\">
                <h2 class=\"image-show-title\"></h2>
            </div>
            <div class=\"image-show-body\">
                    <div class=\"image-show-carousel-container\">
                    <svg class=\"icon image-show-car-arrow image-show-car-arrow-left\">
                        <use xlink:href=\"/svg/sprite.svg#chevron_left\"></use>
                    </svg> 
                    <div class=\"image-show-carousel\">
                        {# image-show-carousel-item-template #}
                    </div>
                    <svg class=\"icon image-show-car-arrow image-show-car-arrow-right\">
                        <use xlink:href=\"/svg/sprite.svg#chevron_right\"></use>
                    </svg> 
                </div>
                
                <div class=\"small-list\">
                    {# small-img-template #}
                </div>
                <div class=\"image-show-description\">
                </div>
            </div>
        </div>
        <svg class=\"icon i-loader i-loader-modal\">
            <use xlink:href=\"/svg/sprite.svg#load\"></use>
        </svg> 
    </aside>
</template>


<template id=\"image-show-carousel-item-template\">
    <a class=\"img-link\" href=\"\" target=\"_blank\" title=\"Ouvrir l'image dans un nouvel onglet\">
        <div class=\"image-show-carousel-item image-show-carousel-img\">
        </div>
    </a>
</template>

<template id=\"small-img-template\">
    <div class=\"small-img\">
    </div>
</template>      ", "js_template/image_show.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\js_template\\image_show.html.twig");
    }
}
