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

/* cakes/_cake_card.html.twig */
class __TwigTemplate_d55fb761ec5781897d50dc8fb002344c extends Template
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
        echo "<li class=\"cake-item js-cake-card appears\"

    data-id=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cake"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\"
    style=\"background: url(";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\PicturePathExtensionRuntime')->getPath(twig_get_attribute($this->env, $this->source, ($context["cake"] ?? null), "firstPicture", [], "any", false, false, false, 4)), "html", null, true);
        echo ") center center / cover no-repeat\"
>
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["cake"] ?? null), "title", [], "any", false, false, false, 6)) {
            // line 7
            echo "        <div class=\"board appears-faster\">
            <p>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cake"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 10
        echo "    
</li>";
    }

    public function getTemplateName()
    {
        return "cakes/_cake_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  55 => 8,  52 => 7,  50 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cakes/_cake_card.html.twig", "/home/noaliav/templates/cakes/_cake_card.html.twig");
    }
}
