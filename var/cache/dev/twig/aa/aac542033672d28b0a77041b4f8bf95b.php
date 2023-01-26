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

/* admin/home/blocks/_security_block.html.twig */
class __TwigTemplate_b3c7f839a17b7dc3faef8736dcf6aad4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home/blocks/_security_block.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home/blocks/_security_block.html.twig"));

        // line 1
        echo "<div class=\"admin-home-block start-block\">
    <h3 class=\"block-title icon-left\">
        <svg class=\"icon i-left i-eye\">
            <use xlink:href=\"/svg/sprite.svg#lock_fill\"></use>
        </svg> 
        <span>Sécurité</span>
    </h3>
    <div class=\"block-body\">
    </div>
    <div class=\"block-footer\">
        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_security_passwordUpdate");
        echo "\" class=\"admin-home-button add-button dual icon-left\">
            <span>Modifier mon mot de passe</span>
        </a>
        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\" class=\"admin-home-button dual icon-left admin-logout\">
            <svg class=\"icon i-left i-cake\">
                <use xlink:href=\"/svg/sprite.svg#logout\"></use>
            </svg> 
            <span>Me déconnecter</span>
        </a>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/home/blocks/_security_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"admin-home-block start-block\">
    <h3 class=\"block-title icon-left\">
        <svg class=\"icon i-left i-eye\">
            <use xlink:href=\"/svg/sprite.svg#lock_fill\"></use>
        </svg> 
        <span>Sécurité</span>
    </h3>
    <div class=\"block-body\">
    </div>
    <div class=\"block-footer\">
        <a href=\"{{ path('admin_security_passwordUpdate') }}\" class=\"admin-home-button add-button dual icon-left\">
            <span>Modifier mon mot de passe</span>
        </a>
        <a href=\"{{ path('security_logout') }}\" class=\"admin-home-button dual icon-left admin-logout\">
            <svg class=\"icon i-left i-cake\">
                <use xlink:href=\"/svg/sprite.svg#logout\"></use>
            </svg> 
            <span>Me déconnecter</span>
        </a>
    </div>
</div>", "admin/home/blocks/_security_block.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\home\\blocks\\_security_block.html.twig");
    }
}
