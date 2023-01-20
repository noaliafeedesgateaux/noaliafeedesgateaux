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
class __TwigTemplate_1972e3e709423ba445cbd920edbcbc05 extends Template
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
        echo "<h2 style=\"text-align: center; padding: 15px; color: rgb(77, 61, 61);  max-width: 500px; margin-left: auto; margin-right: auto;\">Bonjour, Fée des gâteaux</h2>

<p style=\"text-align: center; font-size: 0.9rem; padding: 15px; color: rgb(77, 61, 61); max-width: 500px; margin-left: auto; margin-right: auto;\">Vous avez demandé la réinitialisation de votre mot de passe. Veuillez cliquer sur le lien ci-dessous, il vous redirigera vers une page où vous pourrez créer un nouveau mot de passe.</p>

<p style=\"text-align: center; font-size: 0.9rem; padding: 15px; color: rgb(34, 163, 120); text-decoration: underline; max-width: 500px; margin-left: auto; margin-right: auto;\">   
    <a style=\"color: rgb(34, 163, 120); text-decoration: underline; font-size: 1.4em;\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "\">Réinitialiser mon mot de passe</a>
</p>

<p style=\"text-align: center; font-size: 0.9rem; padding: 15px; color: rgb(77, 61, 61); max-width: 500px; margin-left: auto; margin-right: auto;\">Attention, le lien est valable 24h seulement.</p>
";
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
        return array (  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/security/password_init.html.twig", "/home/noaliav/templates/emails/security/password_init.html.twig");
    }
}
