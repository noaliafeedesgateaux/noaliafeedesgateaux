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

/* security/login.html.twig */
class __TwigTemplate_58ff1c648bfa25a09ae796db82c67be0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'base_javascript' => [$this, 'block_base_javascript'],
            'header' => [$this, 'block_header'],
            'main_class' => [$this, 'block_main_class'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Noalia fée des gâteaux : Connexion";
    }

    // line 5
    public function block_base_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <script src=\"/js/views/security/login.js\" type=\"module\" defer></script>
";
    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("layouts/header/_login_navbar.html.twig", "security/login.html.twig", 10)->display($context);
    }

    // line 13
    public function block_main_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "main main-login";
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
        <h1>Connexion</h1>

        

        <form action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"POST\" class=\"login-form\">
            
            ";
        // line 23
        if (($context["error"] ?? null)) {
            // line 24
            echo "                <div class=\"form-group\">
                    <div class=\"login-form-error icon-left\">
                        <svg class=\"icon i-left\">
                            <use xlink:href=\"svg/sprite.svg#error\"></use>
                        </svg> 
                        <span>Identifiants invalides</span>
                    </div>
                </div>
            ";
        }
        // line 33
        echo "            <div class=\"form-group ";
        if (($context["error"] ?? null)) {
            echo "is-invalid";
        }
        echo "\"> 
                <label for=\"email\">Adresse email</label>
                <input id=\"email\" type=\"text\" class=\"form-box\" name=\"_username\" placeholder=\"Entrez votre adresse email\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["lastUsername"] ?? null), "html", null, true);
        echo "\">
            </div>    
            <div class=\"form-group ";
        // line 37
        if (($context["error"] ?? null)) {
            echo "is-invalid";
        }
        echo "\">
                <label for=\"password\">Mot de passe</label>
                <input id=\"password\" type=\"password\" class=\"form-box\" name=\"_password\" placeholder=\"Entrez votre mot de passe\">
                
                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_forgottenPassword");
        echo "\" class=\"form-link\">Mot de passe oublié ?</a>
            </div>
            <div class=\"form-group remember-me-group\">
                <label class=\"login-form-remember custom-checkbox-container icon-left\">
                    <div class=\"custom-checkbox i-left\">
                        <svg class=\"icon i-custom-checkbox\">
                            <use xlink:href=\"svg/sprite.svg#check\"></use>
                        </svg>
                    </div>
                    <input type=\"checkbox\" name=\"_remember_me\"/>
                    <span>Se souvenir de moi</span>
                </label>
            </div>
            <div class=\"form-group\">
                <button class=\"form-box\" type=\"submit\">Me connecter</button>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        </form>


";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 57,  133 => 41,  124 => 37,  119 => 35,  111 => 33,  100 => 24,  98 => 23,  93 => 21,  86 => 16,  82 => 15,  75 => 13,  70 => 10,  66 => 9,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/noaliav/templates/security/login.html.twig");
    }
}
