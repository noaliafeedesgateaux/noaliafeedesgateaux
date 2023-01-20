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

/* base.html.twig */
class __TwigTemplate_ef2279b89e42cfb2059b1ae6066a0d99 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'admin_css' => [$this, 'block_admin_css'],
            'base_javascript' => [$this, 'block_base_javascript'],
            'javascript' => [$this, 'block_javascript'],
            'header' => [$this, 'block_header'],
            'flashes_on_header' => [$this, 'block_flashes_on_header'],
            'container' => [$this, 'block_container'],
            'main_class' => [$this, 'block_main_class'],
            'flashes' => [$this, 'block_flashes'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'js_templates' => [$this, 'block_js_templates'],
            'additionnal_js_templates' => [$this, 'block_additionnal_js_templates'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $this->displayBlock('admin_css', $context, $blocks);
        // line 19
        echo "
        <!-- fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Great+Vibes&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,400;0,700;1,300&display=swap\" rel=\"stylesheet\">

        ";
        // line 25
        $this->displayBlock('base_javascript', $context, $blocks);
        // line 34
        echo "
        ";
        // line 35
        $this->displayBlock('javascript', $context, $blocks);
        // line 36
        echo "    </head>

    <body>
        ";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "
        ";
        // line 47
        $this->displayBlock('container', $context, $blocks);
        // line 58
        echo "
        ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        echo "

       

        ";
        // line 73
        $this->displayBlock('js_templates', $context, $blocks);
        // line 76
        echo "
        ";
        // line 77
        $this->displayBlock('additionnal_js_templates', $context, $blocks);
        // line 78
        echo "
    </body>

    
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Noalia fée des gâteaux";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            <!-- slick (carousel) css -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/js/packages/slick/slick.css\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/js/packages/slick/slick-theme.css\"/>
            <!-- my css -->
            <link href=\"/main.css\" rel=\"stylesheet\">
        ";
    }

    // line 18
    public function block_admin_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 25
    public function block_base_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "        <!-- slick (carousel) js -->
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.0.min.js\" defer></script>
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\" defer></script>
        <script type=\"text/javascript\" src=\"/js/packages/slick/slick.min.js\" defer></script>

        <!-- my js -->
        <script src=\"/js/views/base.js\" type=\"module\" defer></script>
        ";
    }

    // line 35
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 39
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "            <header class=\"header\">
                ";
        // line 41
        $this->loadTemplate("layouts/header/_navbar.html.twig", "base.html.twig", 41)->display($context);
        // line 42
        echo "                ";
        $this->displayBlock('flashes_on_header', $context, $blocks);
        echo " 
                ";
        // line 43
        $this->loadTemplate("layouts/header/_header_body.html.twig", "base.html.twig", 43)->display($context);
        // line 44
        echo "            </header>
        ";
    }

    // line 42
    public function block_flashes_on_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 47
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "            <div class=\"container main-container\">
                <main class=\"";
        // line 49
        $this->displayBlock('main_class', $context, $blocks);
        echo "\"> 
                    ";
        // line 50
        $this->displayBlock('flashes', $context, $blocks);
        // line 52
        echo " 

                    ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "                </main>
            </div>
        ";
    }

    // line 49
    public function block_main_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "main";
    }

    // line 50
    public function block_flashes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                        ";
        $this->loadTemplate("layouts/_flashes.html.twig", "base.html.twig", 51)->display($context);
        // line 52
        echo "                    ";
    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 59
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "            ";
        $this->loadTemplate("layouts/_footer.html.twig", "base.html.twig", 60)->display($context);
        // line 61
        echo "             ";
        // line 62
        echo "             <div class=\"body-dark\">
                ";
        // line 64
        echo "                <svg class=\"icon i-loader body-dark-loader\">
                    <use xlink:href=\"/svg/sprite.svg#load\"></use>
                </svg> 
             </div>   
        ";
    }

    // line 73
    public function block_js_templates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "            ";
        $this->loadTemplate("js_template/image_show.html.twig", "base.html.twig", 74)->display($context);
        // line 75
        echo "        ";
    }

    // line 77
    public function block_additionnal_js_templates($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  280 => 77,  276 => 75,  273 => 74,  269 => 73,  261 => 64,  258 => 62,  256 => 61,  253 => 60,  249 => 59,  243 => 54,  239 => 52,  236 => 51,  232 => 50,  225 => 49,  219 => 55,  217 => 54,  213 => 52,  211 => 50,  207 => 49,  204 => 48,  200 => 47,  194 => 42,  189 => 44,  187 => 43,  182 => 42,  180 => 41,  177 => 40,  173 => 39,  167 => 35,  156 => 26,  152 => 25,  146 => 18,  137 => 11,  133 => 10,  126 => 5,  117 => 78,  115 => 77,  112 => 76,  110 => 73,  104 => 69,  102 => 59,  99 => 58,  97 => 47,  94 => 46,  92 => 39,  87 => 36,  85 => 35,  82 => 34,  80 => 25,  72 => 19,  70 => 18,  67 => 17,  65 => 10,  57 => 5,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/noaliav/templates/base.html.twig");
    }
}
