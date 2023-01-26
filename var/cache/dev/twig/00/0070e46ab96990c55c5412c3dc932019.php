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

/* emails/security/password_init.html.twig */
class __TwigTemplate_f53b93310d7de395551a01d06453b944 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/security/password_init.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/security/password_init.html.twig"));

        // line 1
        echo "<h2 style=\"text-align: center; padding: 15px; color: rgb(77, 61, 61);  max-width: 500px; margin-left: auto; margin-right: auto;\">Bonjour, Fée des gâteaux</h2>

<p style=\"text-align: center; font-size: 0.9rem; padding: 15px; color: rgb(77, 61, 61); max-width: 500px; margin-left: auto; margin-right: auto;\">Vous avez demandé la réinitialisation de votre mot de passe. Veuillez cliquer sur le lien ci-dessous, il vous redirigera vers une page où vous pourrez créer un nouveau mot de passe.</p>

<p style=\"text-align: center; font-size: 0.9rem; padding: 15px; color: rgb(34, 163, 120); text-decoration: underline; max-width: 500px; margin-left: auto; margin-right: auto;\">   
    <a style=\"color: rgb(34, 163, 120); text-decoration: underline; font-size: 1.4em;\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">Réinitialiser mon mot de passe</a>
</p>

<p style=\"text-align: center; font-size: 0.9rem; padding: 15px; color: rgb(77, 61, 61); max-width: 500px; margin-left: auto; margin-right: auto;\">Attention, le lien est valable 24h seulement.</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "emails/security/password_init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 style=\"text-align: center; padding: 15px; color: rgb(77, 61, 61);  max-width: 500px; margin-left: auto; margin-right: auto;\">Bonjour, Fée des gâteaux</h2>

<p style=\"text-align: center; font-size: 0.9rem; padding: 15px; color: rgb(77, 61, 61); max-width: 500px; margin-left: auto; margin-right: auto;\">Vous avez demandé la réinitialisation de votre mot de passe. Veuillez cliquer sur le lien ci-dessous, il vous redirigera vers une page où vous pourrez créer un nouveau mot de passe.</p>

<p style=\"text-align: center; font-size: 0.9rem; padding: 15px; color: rgb(34, 163, 120); text-decoration: underline; max-width: 500px; margin-left: auto; margin-right: auto;\">   
    <a style=\"color: rgb(34, 163, 120); text-decoration: underline; font-size: 1.4em;\" href=\"{{ link }}\">Réinitialiser mon mot de passe</a>
</p>

<p style=\"text-align: center; font-size: 0.9rem; padding: 15px; color: rgb(77, 61, 61); max-width: 500px; margin-left: auto; margin-right: auto;\">Attention, le lien est valable 24h seulement.</p>
", "emails/security/password_init.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\emails\\security\\password_init.html.twig");
    }
}
