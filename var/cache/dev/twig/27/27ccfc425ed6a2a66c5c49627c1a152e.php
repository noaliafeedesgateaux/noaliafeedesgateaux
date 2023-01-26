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

/* admin/cakes/update.html.twig */
class __TwigTemplate_30f0426f4d0058a18b6f612174f3d122 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'cake_show_start' => [$this, 'block_cake_show_start'],
            'cake_secondary_pictures' => [$this, 'block_cake_secondary_pictures'],
            'secondary_pictures_container_class' => [$this, 'block_secondary_pictures_container_class'],
            'cake_title' => [$this, 'block_cake_title'],
            'title_container_class' => [$this, 'block_title_container_class'],
            'cake_description' => [$this, 'block_cake_description'],
            'description_container_class' => [$this, 'block_description_container_class'],
            'cake_controls' => [$this, 'block_cake_controls'],
            'cake_show_end' => [$this, 'block_cake_show_end'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/cakes/show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cakes/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cakes/update.html.twig"));

        $this->parent = $this->loadTemplate("admin/cakes/show.html.twig", "admin/cakes/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "    ";
        $this->loadTemplate("admin/layouts/_breadcrumb.html.twig", "admin/cakes/update.html.twig", 5)->display($context);
        // line 6
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cakes_index");
        echo "\" class=\"breadcrumb-item\">Gâteaux</a>
    <span class=\"breadcrumb-separator\">></span>
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cakes_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\" class=\"breadcrumb-item\">";
        ((twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true))) : (print ("Sans titre")));
        echo "</a>
    <span class=\"breadcrumb-separator\">></span>
    <span class=\"breadcrumb-item active\">Modifier</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_cake_show_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_show_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_show_start"));

        // line 17
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
    <div class=\"cake-update\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_cake_secondary_pictures($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_secondary_pictures"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_secondary_pictures"));

        // line 25
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 25, $this->source); })()), "pictures", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 26
            echo "            <div class=\"secondary-picture-container\"
                data-pictureid=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\"
                data-cakeid=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\"
            >
                <img class=\"secondary-picture\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\PicturePathExtensionRuntime')->getPath($context["picture"]), "html", null, true);
            echo "\">
                <svg class=\"icon js-picture-delete\" data-entrypoint=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_picture_delete");
            echo "\">
                    <use xlink:href=\"/svg/sprite.svg#trash\"></use>
                </svg> 
                <svg class=\"icon js-picture-to-first\" 
                    data-firstimage=\".js-first-picture\" 
                    data-entrypoint=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_picture_replaceFirst");
            echo "\"
                >
                    <use xlink:href=\"/svg/sprite.svg#arrow_up\"></use>
                </svg> 
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        ";
        $this->loadTemplate("admin/cakes/form/fields/_pictureFiles.html.twig", "admin/cakes/update.html.twig", 42)->display($context);
        // line 43
        echo "        
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_secondary_pictures_container_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "secondary_pictures_container_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "secondary_pictures_container_class"));

        // line 46
        echo "        ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "pictureFiles", [], "any", false, false, false, 46), 'errors')) {
            echo "is-invalid";
        }
        // line 47
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_cake_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_title"));

        // line 52
        echo "        ";
        $this->loadTemplate("admin/cakes/form/fields/_title.html.twig", "admin/cakes/update.html.twig", 52)->display($context);
        // line 53
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_title_container_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_container_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_container_class"));

        // line 55
        echo "        ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55), 'errors')) {
            echo "is-invalid";
        }
        // line 56
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_cake_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_description"));

        // line 60
        echo "        ";
        $this->loadTemplate("admin/cakes/form/fields/_description.html.twig", "admin/cakes/update.html.twig", 60)->display($context);
        // line 61
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_description_container_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description_container_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description_container_class"));

        // line 63
        echo "        ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "description", [], "any", false, false, false, 63), 'errors')) {
            echo "is-invalid";
        }
        // line 64
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_cake_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_controls"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_controls"));

        // line 67
        echo "        <div class=\"update-new-controls-container\">
            <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cakes_index");
        echo "\" class=\"cake-card-button cake-submit-button cake-cancel-button icon-left\">
                Retour
            </a>
            <button class=\"cake-card-button cake-submit-button icon-left\" type=\"submit\">
                <svg class=\"icon i-left\">
                    <use xlink:href=\"/svg/sprite.svg#save\"></use>
                </svg> 
                <svg class=\"icon i-left i-loader\">
                    <use xlink:href=\"/svg/sprite.svg#load\"></use>
                </svg> 
                <span>Enregistrer</span>
            </button>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 84
    public function block_cake_show_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_show_end"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_show_end"));

        // line 85
        echo "    </div>
    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'rest');
        echo "
    ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
    
    <p class=\"admin-cake-form-info\">* champs obligatoires</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/cakes/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 87,  362 => 86,  359 => 85,  349 => 84,  325 => 68,  322 => 67,  312 => 66,  302 => 64,  297 => 63,  287 => 62,  277 => 61,  274 => 60,  264 => 59,  254 => 56,  249 => 55,  239 => 54,  229 => 53,  226 => 52,  216 => 51,  206 => 47,  201 => 46,  191 => 45,  180 => 43,  177 => 42,  165 => 36,  157 => 31,  153 => 30,  148 => 28,  144 => 27,  141 => 26,  136 => 25,  126 => 24,  112 => 17,  102 => 16,  86 => 8,  80 => 6,  77 => 5,  67 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/cakes/show.html.twig\" %}


{% block breadcrumb %}
    {% include \"admin/layouts/_breadcrumb.html.twig\" %}
    <a href=\"{{ path('admin_cakes_index') }}\" class=\"breadcrumb-item\">Gâteaux</a>
    <span class=\"breadcrumb-separator\">></span>
    <a href=\"{{ path('admin_cakes_show', {id: cake.id}) }}\" class=\"breadcrumb-item\">{{ cake.title ?: 'Sans titre' }}</a>
    <span class=\"breadcrumb-separator\">></span>
    <span class=\"breadcrumb-item active\">Modifier</span>
{% endblock %}




{% block cake_show_start %}
    {{ form_start(form) }}
    <div class=\"cake-update\">
{% endblock %}

    


    {% block cake_secondary_pictures %}
        {% for picture in cake.pictures %}
            <div class=\"secondary-picture-container\"
                data-pictureid=\"{{ picture.id }}\"
                data-cakeid=\"{{ cake.id }}\"
            >
                <img class=\"secondary-picture\" src=\"{{ picture | picture_path }}\">
                <svg class=\"icon js-picture-delete\" data-entrypoint=\"{{ path('admin_picture_delete') }}\">
                    <use xlink:href=\"/svg/sprite.svg#trash\"></use>
                </svg> 
                <svg class=\"icon js-picture-to-first\" 
                    data-firstimage=\".js-first-picture\" 
                    data-entrypoint=\"{{ path('admin_picture_replaceFirst') }}\"
                >
                    <use xlink:href=\"/svg/sprite.svg#arrow_up\"></use>
                </svg> 
            </div>
        {% endfor %}
        {% include \"admin/cakes/form/fields/_pictureFiles.html.twig\" %}
        
    {% endblock %}
    {% block secondary_pictures_container_class %}
        {% if form_errors(form.pictureFiles) %}is-invalid{% endif %}
    {% endblock %}



    {% block cake_title %}
        {% include \"admin/cakes/form/fields/_title.html.twig\" %}
    {% endblock %}
    {% block title_container_class %}
        {% if form_errors(form.title) %}is-invalid{% endif %}
    {% endblock %}


    {% block cake_description %}
        {% include \"admin/cakes/form/fields/_description.html.twig\" %}
    {% endblock %}
    {% block description_container_class %}
        {% if form_errors(form.description) %}is-invalid{% endif %}
    {% endblock %}

    {% block cake_controls %}
        <div class=\"update-new-controls-container\">
            <a href=\"{{ path('admin_cakes_index') }}\" class=\"cake-card-button cake-submit-button cake-cancel-button icon-left\">
                Retour
            </a>
            <button class=\"cake-card-button cake-submit-button icon-left\" type=\"submit\">
                <svg class=\"icon i-left\">
                    <use xlink:href=\"/svg/sprite.svg#save\"></use>
                </svg> 
                <svg class=\"icon i-left i-loader\">
                    <use xlink:href=\"/svg/sprite.svg#load\"></use>
                </svg> 
                <span>Enregistrer</span>
            </button>
        </div>
    {% endblock %}


{% block cake_show_end %}
    </div>
    {{ form_rest(form) }}
    {{ form_end(form) }}
    
    <p class=\"admin-cake-form-info\">* champs obligatoires</p>
{% endblock %}
", "admin/cakes/update.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\cakes\\update.html.twig");
    }
}
