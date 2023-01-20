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

/* home/index.html.twig */
class __TwigTemplate_279f755598bb01e41374a57f3288abc4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'flashes' => [$this, 'block_flashes'],
            'flashes_on_header' => [$this, 'block_flashes_on_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script src=\"/js/views/home/index.js\" type=\"module\" defer></script>
";
    }

    // line 7
    public function block_flashes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 8
    public function block_flashes_on_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div class=\"header-flashes\">
        ";
        // line 10
        $this->loadTemplate("layouts/_flashes.html.twig", "home/index.html.twig", 10)->display($context);
        // line 11
        echo "    </div>
";
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "

        <h1 class=\"main-title\">Mes dernières créations</h1>

        ";
        // line 19
        if ((twig_length_filter($this->env, ($context["cakes_spotlighted"] ?? null)) >= 3)) {
            // line 20
            echo "            <div class=\"main-body carousel-container\">
                <svg class=\"icon car-arrow car-arrow-left\">
                    <use xlink:href=\"/svg/sprite.svg#chevron_left\"></use>
                </svg> 
                <div class=\"carousel\">
                    ";
            // line 25
            $context["padding"] = $this->env->getRuntime('App\Twig\Runtime\CarouselItemPaddingCalculatorRuntime')->calc(($context["cakes_spotlighted"] ?? null));
            // line 26
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cakes_spotlighted"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cake"]) {
                // line 27
                echo "                        <div class=\"carousel-item\"
                            data-entrypoint=\"";
                // line 28
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cakes_api_getCakeData");
                echo "\"
                            data-apivisitcake=\"";
                // line 29
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cakes_api_addVisit");
                echo "\"
                            style=\"padding: ";
                // line 30
                echo twig_escape_filter($this->env, ($context["padding"] ?? null), "html", null, true);
                echo ";\"
                        >
                            <div class=\"carousel-img-container js-cake-card\"
                                data-id=\"";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cake"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "\"
                                style=\"background: url(";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\PicturePathExtensionRuntime')->getPath(twig_get_attribute($this->env, $this->source, $context["cake"], "firstPicture", [], "any", false, false, false, 34)), "html", null, true);
                echo ") center center / cover no-repeat\"
                            >
                                ";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["cake"], "title", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "                                    <div class=\"board\">
                                        <p>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cake"], "title", [], "any", false, false, false, 38), "html", null, true);
                    echo "</p>
                                    </div>
                                ";
                }
                // line 41
                echo "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cake'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                </div>
                <svg class=\"icon car-arrow car-arrow-right\">
                    <use xlink:href=\"/svg/sprite.svg#chevron_right\"></use>
                </svg> 
            </div>
        ";
        } else {
            // line 50
            echo "            <p class=\"empty-spotlighted-message\">Oups... aucun gâteau n'est affiché ici actuellement.</p>
        ";
        }
        // line 52
        echo "
        
        <div class=\"home-to-cakes-link-container\">
            <a class=\"home-to-cakes-link\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cakes_index");
        echo "\">
                <span>Voir plus de gâteaux<span class=\"home-to-cakes-link-arrow\">></span></span>
            </a>
        </div>
        
        ";
        // line 60
        $this->loadTemplate("layouts/_pub.html.twig", "home/index.html.twig", 60)->display($context);
        // line 61
        echo "
        ";
        // line 62
        $this->loadTemplate("order/_form.html.twig", "home/index.html.twig", 62)->display($context);
        // line 63
        echo "        

";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 63,  179 => 62,  176 => 61,  174 => 60,  166 => 55,  161 => 52,  157 => 50,  149 => 44,  141 => 41,  135 => 38,  132 => 37,  130 => 36,  125 => 34,  121 => 33,  115 => 30,  111 => 29,  107 => 28,  104 => 27,  99 => 26,  97 => 25,  90 => 20,  88 => 19,  82 => 15,  78 => 14,  73 => 11,  71 => 10,  68 => 9,  64 => 8,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/home/noaliav/templates/home/index.html.twig");
    }
}
