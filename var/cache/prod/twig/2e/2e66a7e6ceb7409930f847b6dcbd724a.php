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

/* security/forgotten_password.html.twig */
class __TwigTemplate_5ca2dee124234c04c9260d804e92b7ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/forgotten_password.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_base_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->loadTemplate("layouts/header/_login_navbar.html.twig", "security/forgotten_password.html.twig", 7)->display($context);
    }

    // line 10
    public function block_main_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "main main-login";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        <h1>Mot de passe oublié</h1>
        
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"login-form\">
            <div class=\"form-group ";
        // line 17
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 17), 'errors')) {
            echo "is-invalid";
        }
        echo "\"> 
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 18), 'label', ["label" => "Entrez votre adresse email"]);
        echo "   
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-box"]]);
        // line 23
        echo " 
                <div class=\"error icon-left\">
                    <svg class=\"icon i-left i-error-red\">
                        <use xlink:href=\"/svg/sprite.svg#error\"></use>
                    </svg> 
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 28), 'errors');
        echo "
                </div>
            </div>  
            <div class=\"form-group\">
                <button class=\"form-box\" type=\"submit\">Réinitialiser</button>
            </div>
        </div>
        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "security/forgotten_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  103 => 28,  96 => 23,  94 => 19,  90 => 18,  84 => 17,  79 => 15,  75 => 13,  71 => 12,  64 => 10,  59 => 7,  55 => 6,  49 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/forgotten_password.html.twig", "/home/noaliav/templates/security/forgotten_password.html.twig");
    }
}
