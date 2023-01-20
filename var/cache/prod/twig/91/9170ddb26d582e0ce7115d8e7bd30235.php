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

/* cakes/index.html.twig */
class __TwigTemplate_f214912c96d2c338f06f41962089aa43 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascript' => [$this, 'block_javascript'],
            'flashes' => [$this, 'block_flashes'],
            'flashes_on_header' => [$this, 'block_flashes_on_header'],
            'header' => [$this, 'block_header'],
            'main_class' => [$this, 'block_main_class'],
            'body' => [$this, 'block_body'],
            'additionnal_js_templates' => [$this, 'block_additionnal_js_templates'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "cakes/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Noalia fée des gâteaux : Toutes mes créations";
    }

    // line 5
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <script src=\"/js/views/cakes/index.js\" type=\"module\" defer></script>
";
    }

    // line 9
    public function block_flashes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_flashes_on_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <div class=\"header-flashes\">
        ";
        // line 12
        $this->loadTemplate("layouts/_flashes.html.twig", "cakes/index.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
";
    }

    // line 16
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <header class=\"header-light\">
        ";
        // line 18
        $this->loadTemplate("layouts/header/_navbar.html.twig", "cakes/index.html.twig", 18)->display($context);
        // line 19
        echo "    </header>
";
    }

    // line 23
    public function block_main_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "cakes";
    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    
    ";
        // line 27
        $this->loadTemplate("cakes/_breadcrumb.html.twig", "cakes/index.html.twig", 27)->display($context);
        // line 28
        echo "
    <h1 class=\"cakes-title appears-later\">Toutes mes créations</h1>
    
    ";
        // line 31
        if ((twig_length_filter($this->env, ($context["cakes"] ?? null)) > 0)) {
            // line 32
            echo "        <ul 
            class=\"cakes-list\"
            data-entrypoint=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cakes_api_getCakeData");
            echo "\"
            data-apivisitcake=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cakes_api_addVisit");
            echo "\"
            >
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cakes"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cake"]) {
                // line 38
                echo "                ";
                $this->loadTemplate("cakes/_cake_card.html.twig", "cakes/index.html.twig", 38)->display($context);
                // line 39
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cake'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </ul>
    ";
        } else {
            // line 42
            echo "        <p class=\"empty-spotlighted-message more-height\">Oups... suite à un problème technique aucun gâteau ne peut être affiché pour le moment, revenez un peu plus tard...</p>
    ";
        }
        // line 44
        echo "
    <div 
        class=\"infinite-pagination-control\"
        data-entrypoint=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cakes_api_infinitePagination");
        echo "\"
        data-offset=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
        echo "\"  ";
        // line 49
        echo "        data-container=\".cakes-list\"
        data-template=\"#cake-card-template\"
    >
        <svg class=\"icon i-loader\">
            <use xlink:href=\"svg/sprite.svg#load\"></use>
        </svg> 
    </div>

    ";
        // line 57
        $this->loadTemplate("layouts/_pub.html.twig", "cakes/index.html.twig", 57)->display($context);
        // line 58
        echo "
    ";
        // line 59
        $this->loadTemplate("order/_form.html.twig", "cakes/index.html.twig", 59)->display($context);
        // line 60
        echo "
";
    }

    // line 63
    public function block_additionnal_js_templates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "    ";
        $this->loadTemplate("js_template/cake_card.html.twig", "cakes/index.html.twig", 64)->display($context);
    }

    public function getTemplateName()
    {
        return "cakes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 64,  215 => 63,  210 => 60,  208 => 59,  205 => 58,  203 => 57,  193 => 49,  190 => 48,  186 => 47,  181 => 44,  177 => 42,  173 => 40,  159 => 39,  156 => 38,  139 => 37,  134 => 35,  130 => 34,  126 => 32,  124 => 31,  119 => 28,  117 => 27,  114 => 26,  110 => 25,  103 => 23,  98 => 19,  96 => 18,  93 => 17,  89 => 16,  84 => 13,  82 => 12,  79 => 11,  75 => 10,  69 => 9,  64 => 6,  60 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cakes/index.html.twig", "/home/noaliav/templates/cakes/index.html.twig");
    }
}
