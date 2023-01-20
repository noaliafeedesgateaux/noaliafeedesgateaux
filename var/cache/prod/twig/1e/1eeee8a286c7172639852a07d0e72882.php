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
class __TwigTemplate_16fe4df55f236d404784dfcdd963a756 extends Template
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
        echo "<template id=\"image-show-template\">
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
        // line 16
        echo "                </div>
                <svg class=\"icon image-show-car-arrow image-show-car-arrow-right\">
                    <use xlink:href=\"/svg/sprite.svg#chevron_right\"></use>
                </svg> 
            </div>
            
            <div class=\"small-list\">
                ";
        // line 24
        echo "            </div>
            <div class=\"image-show-description\">
            </div>
        </div>
    </div>
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
    }

    public function getTemplateName()
    {
        return "js_template/image_show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 24,  53 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "js_template/image_show.html.twig", "/home/noaliav/templates/js_template/image_show.html.twig");
    }
}
