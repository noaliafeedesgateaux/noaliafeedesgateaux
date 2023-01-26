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

/* emails/order_email.html.twig */
class __TwigTemplate_f99eb822cd97c8193ae1553c28170e86 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/order_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/order_email.html.twig"));

        // line 1
        echo "<h2 style=\"text-align: center; padding: 15px; color: rgb(77, 61, 61);\">Bonjour, Fée des gâteaux</h2>

<h3 style=\"text-align: center; padding: 15px; color: rgb(77, 61, 61);\">Félicitations ! Vous venez de recevoir une commande !</h3>

<div style=\"background-color: rgba(228, 156, 146, 0.28); border-radius: 20px; color: rgb(77, 61, 61); padding: 15px; max-width: 500px; margin: 0 auto;\">
    <h5 style=\"margin: 0; text-align: right;\">Commande n° ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 6), "html", null, true);
        echo "</h3>
    <h5 style=\"margin: 5px 0 20px; text-align: right;\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\OrderDateFormatRuntime')->orderDateFormat(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "createdAt", [], "any", false, false, false, 7), true), "html", null, true);
        echo "</h4>
    <div>
        <h5 style=\"margin-bottom: 0;\">Nom</h5>
        <p style=\"margin-top: 4px;\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "fullName", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
    </div>
    <div>
        <h5 style=\"margin-bottom: 0;\">Email</h5>
        <p style=\"margin-top: 4px;\"><a style=\"color: rgb(46, 124, 212);\" href=\"mailto:";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "\" title=\"Répondre à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></p>
    </div>
    <div>
        <h5 style=\"margin-bottom: 0;\">Téléphone</h5>
        <p style=\"margin-top: 4px;\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "phone", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
    </div>
    <div>
        <h5 style=\"margin-bottom: 0;\">Ville</h5>
        <p style=\"margin-top: 4px;\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\LocationExtensionRuntime')->format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "location", [], "any", false, false, false, 22)), "html", null, true);
        echo "</p>
    </div>
    <div>
        <h5 style=\"margin-bottom: 0;\">Message</h5>
        <p style=\"margin-top: 4px;\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 26, $this->source); })()), "message", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
    </div>
</div>


<p style=\"font-size: 0.9rem; padding: 15px; text-align: center; color: rgb(77, 61, 61);\">
    Pour gérer les commandes depuis l'interface d'administration, <a style=\"color: inherit; font-weight: 600;\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\">cliquez ici</a>
</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "emails/order_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  92 => 26,  85 => 22,  78 => 18,  67 => 14,  60 => 10,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 style=\"text-align: center; padding: 15px; color: rgb(77, 61, 61);\">Bonjour, Fée des gâteaux</h2>

<h3 style=\"text-align: center; padding: 15px; color: rgb(77, 61, 61);\">Félicitations ! Vous venez de recevoir une commande !</h3>

<div style=\"background-color: rgba(228, 156, 146, 0.28); border-radius: 20px; color: rgb(77, 61, 61); padding: 15px; max-width: 500px; margin: 0 auto;\">
    <h5 style=\"margin: 0; text-align: right;\">Commande n° {{ order.invoiceNumber }}</h3>
    <h5 style=\"margin: 5px 0 20px; text-align: right;\">{{ order.createdAt | order_date_format(true) }}</h4>
    <div>
        <h5 style=\"margin-bottom: 0;\">Nom</h5>
        <p style=\"margin-top: 4px;\">{{ order.fullName }}</p>
    </div>
    <div>
        <h5 style=\"margin-bottom: 0;\">Email</h5>
        <p style=\"margin-top: 4px;\"><a style=\"color: rgb(46, 124, 212);\" href=\"mailto:{{ order.email }}\" title=\"Répondre à {{ order.email }}\">{{ order.email }}</a></p>
    </div>
    <div>
        <h5 style=\"margin-bottom: 0;\">Téléphone</h5>
        <p style=\"margin-top: 4px;\">{{ order.phone }}</p>
    </div>
    <div>
        <h5 style=\"margin-bottom: 0;\">Ville</h5>
        <p style=\"margin-top: 4px;\">{{ order.location | location_format }}</p>
    </div>
    <div>
        <h5 style=\"margin-bottom: 0;\">Message</h5>
        <p style=\"margin-top: 4px;\">{{ order.message }}</p>
    </div>
</div>


<p style=\"font-size: 0.9rem; padding: 15px; text-align: center; color: rgb(77, 61, 61);\">
    Pour gérer les commandes depuis l'interface d'administration, <a style=\"color: inherit; font-weight: 600;\" href=\"{{ link }}\">cliquez ici</a>
</p>
", "emails/order_email.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\emails\\order_email.html.twig");
    }
}
