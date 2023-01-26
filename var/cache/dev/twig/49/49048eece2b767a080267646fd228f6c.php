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
class __TwigTemplate_aa5e5fd447becbac18b2a22a72f5fa65 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cakes/_cake_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cakes/_cake_card.html.twig"));

        // line 1
        echo "<li class=\"cake-item js-cake-card appears\"

    data-id=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\"
    style=\"background: url(";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\PicturePathExtensionRuntime')->getPath(twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 4, $this->source); })()), "firstPicture", [], "any", false, false, false, 4)), "html", null, true);
        echo ") center center / cover no-repeat\"
>
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6)) {
            // line 7
            echo "        <div class=\"board appears-faster\">
            <p>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 10
        echo "    
</li>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  67 => 10,  61 => 8,  58 => 7,  56 => 6,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"cake-item js-cake-card appears\"

    data-id=\"{{ cake.id }}\"
    style=\"background: url({{ cake.firstPicture | picture_path }}) center center / cover no-repeat\"
>
    {% if cake.title %}
        <div class=\"board appears-faster\">
            <p>{{ cake.title }}</p>
        </div>
    {% endif %}    
</li>", "cakes/_cake_card.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\cakes\\_cake_card.html.twig");
    }
}
