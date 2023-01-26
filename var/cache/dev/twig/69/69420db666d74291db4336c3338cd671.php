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

/* admin/cakes/show.html.twig */
class __TwigTemplate_84857af8ca38f6dda37b341362c21e41 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'body' => [$this, 'block_body'],
            'cake_show_start' => [$this, 'block_cake_show_start'],
            'first_picture_container_class' => [$this, 'block_first_picture_container_class'],
            'cake_first_picture' => [$this, 'block_cake_first_picture'],
            'secondary_pictures_container_class' => [$this, 'block_secondary_pictures_container_class'],
            'cake_secondary_pictures' => [$this, 'block_cake_secondary_pictures'],
            'title_container_class' => [$this, 'block_title_container_class'],
            'cake_title' => [$this, 'block_cake_title'],
            'description_container_class' => [$this, 'block_description_container_class'],
            'cake_description' => [$this, 'block_cake_description'],
            'cake_createdAt' => [$this, 'block_cake_createdAt'],
            'cake_controls' => [$this, 'block_cake_controls'],
            'cake_show_end' => [$this, 'block_cake_show_end'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cakes/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cakes/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin_base.html.twig", "admin/cakes/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    ";
        $this->loadTemplate("admin/layouts/_breadcrumb.html.twig", "admin/cakes/show.html.twig", 4)->display($context);
        // line 5
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cakes_index");
        echo "\" class=\"breadcrumb-item\">Gâteaux</a>
    <span class=\"breadcrumb-separator\">></span>
    <span class=\"breadcrumb-item active\">";
        // line 7
        ((twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true))) : (print ("Sans titre")));
        echo "</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
    ";
        // line 13
        $this->displayBlock('cake_show_start', $context, $blocks);
        // line 14
        echo "
        <div class=\"cake-show\">
            
            <div class=\"cake-show-container first-picture-container ";
        // line 17
        $this->displayBlock('first_picture_container_class', $context, $blocks);
        echo "\"> 
                <h2>Photo principale *</h2>
                ";
        // line 19
        $this->displayBlock('cake_first_picture', $context, $blocks);
        // line 26
        echo "            </div>

            <div class=\"cake-show-container secondary-pictures-container ";
        // line 28
        $this->displayBlock('secondary_pictures_container_class', $context, $blocks);
        echo "\">
                <h2>Photos supplémentaires</h2>
                ";
        // line 30
        $this->displayBlock('cake_secondary_pictures', $context, $blocks);
        // line 35
        echo "            </div>

            <div class=\"cake-show-super-container\">
                <div class=\"cake-show-container title-container ";
        // line 38
        $this->displayBlock('title_container_class', $context, $blocks);
        echo "\">
                    <h2>Titre</h2>
                    ";
        // line 40
        $this->displayBlock('cake_title', $context, $blocks);
        // line 43
        echo "                </div>
                <div class=\"cake-show-container description-container ";
        // line 44
        $this->displayBlock('description_container_class', $context, $blocks);
        echo "\">
                    <h2>Description</h2>
                    ";
        // line 46
        $this->displayBlock('cake_description', $context, $blocks);
        // line 49
        echo "                </div>
            </div>

            ";
        // line 52
        $this->displayBlock('cake_createdAt', $context, $blocks);
        // line 59
        echo "            
            <div class=\"cake-show-container controls-container\">
                ";
        // line 61
        $this->displayBlock('cake_controls', $context, $blocks);
        // line 65
        echo "            </div>
        </div>

    ";
        // line 68
        $this->displayBlock('cake_show_end', $context, $blocks);
        // line 69
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_cake_show_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_show_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_show_start"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_first_picture_container_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "first_picture_container_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "first_picture_container_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_cake_first_picture($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_first_picture"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_first_picture"));

        // line 20
        echo "                    <img 
                        class=\"first-picture js-first-picture\" 
                        src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\PicturePathExtensionRuntime')->getPath(twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 22, $this->source); })()), "firstPicture", [], "any", false, false, false, 22)), "html", null, true);
        echo "\"
                        data-pictureid=\"";
        // line 23
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cake"] ?? null), "firstPicture", [], "any", false, true, false, 23), "id", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cake"] ?? null), "firstPicture", [], "any", false, true, false, 23), "id", [], "any", false, false, false, 23)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cake"] ?? null), "firstPicture", [], "any", false, true, false, 23), "id", [], "any", false, false, false, 23), "html", null, true))) : (print ("default")));
        echo "\"
                    >
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_secondary_pictures_container_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "secondary_pictures_container_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "secondary_pictures_container_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_cake_secondary_pictures($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_secondary_pictures"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_secondary_pictures"));

        // line 31
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 31, $this->source); })()), "pictures", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 32
            echo "                        <img class=\"secondary-picture\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Runtime\PicturePathExtensionRuntime')->getPath($context["picture"]), "html", null, true);
            echo "\">
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_title_container_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_container_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_container_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_cake_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_title"));

        // line 41
        echo "                        <p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 41, $this->source); })()), "title", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_description_container_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description_container_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description_container_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_cake_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_description"));

        // line 47
        echo "                        <p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), "html", null, true);
        echo "</p>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_cake_createdAt($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_createdAt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_createdAt"));

        // line 53
        echo "                <div class=\"cake-show-fat-container\">
                    <div class=\"cake-show-container date-container\">
                        <p>Gâteau ajouté le <strong>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cake"]) || array_key_exists("cake", $context) ? $context["cake"] : (function () { throw new RuntimeError('Variable "cake" does not exist.', 55, $this->source); })()), "createdAt", [], "any", false, false, false, 55), "format", [0 => "d/m/Y"], "method", false, false, false, 55), "html", null, true);
        echo "</strong></p>
                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_cake_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_controls"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_controls"));

        // line 62
        echo "                    ";
        $this->loadTemplate("admin/cakes/form/_update_button.html.twig", "admin/cakes/show.html.twig", 62)->display($context);
        // line 63
        echo "                    ";
        $this->loadTemplate("admin/cakes/form/_delete_button.html.twig", "admin/cakes/show.html.twig", 63)->display($context);
        // line 64
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_cake_show_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_show_end"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cake_show_end"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/cakes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 68,  438 => 64,  435 => 63,  432 => 62,  422 => 61,  408 => 55,  404 => 53,  394 => 52,  381 => 47,  371 => 46,  353 => 44,  340 => 41,  330 => 40,  312 => 38,  302 => 34,  293 => 32,  288 => 31,  278 => 30,  260 => 28,  247 => 23,  243 => 22,  239 => 20,  229 => 19,  211 => 17,  193 => 13,  182 => 69,  180 => 68,  175 => 65,  173 => 61,  169 => 59,  167 => 52,  162 => 49,  160 => 46,  155 => 44,  152 => 43,  150 => 40,  145 => 38,  140 => 35,  138 => 30,  133 => 28,  129 => 26,  127 => 19,  122 => 17,  117 => 14,  115 => 13,  112 => 12,  102 => 11,  90 => 7,  84 => 5,  81 => 4,  71 => 3,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/admin_base.html.twig\" %}

{% block breadcrumb %}
    {% include \"admin/layouts/_breadcrumb.html.twig\" %}
    <a href=\"{{ path('admin_cakes_index') }}\" class=\"breadcrumb-item\">Gâteaux</a>
    <span class=\"breadcrumb-separator\">></span>
    <span class=\"breadcrumb-item active\">{{ cake.title ?: 'Sans titre' }}</span>
{% endblock %}


{% block body %}
    
    {% block cake_show_start %}{% endblock %}

        <div class=\"cake-show\">
            
            <div class=\"cake-show-container first-picture-container {% block first_picture_container_class %}{% endblock %}\"> 
                <h2>Photo principale *</h2>
                {% block cake_first_picture %}
                    <img 
                        class=\"first-picture js-first-picture\" 
                        src=\"{{ cake.firstPicture | picture_path }}\"
                        data-pictureid=\"{{ cake.firstPicture.id ?? 'default' }}\"
                    >
                {% endblock %}
            </div>

            <div class=\"cake-show-container secondary-pictures-container {% block secondary_pictures_container_class %}{% endblock %}\">
                <h2>Photos supplémentaires</h2>
                {% block cake_secondary_pictures %}
                    {% for picture in cake.pictures %}
                        <img class=\"secondary-picture\" src=\"{{ picture | picture_path }}\">
                    {% endfor %}
                {% endblock %}
            </div>

            <div class=\"cake-show-super-container\">
                <div class=\"cake-show-container title-container {% block title_container_class %}{% endblock %}\">
                    <h2>Titre</h2>
                    {% block cake_title %}
                        <p>{{ cake.title }}</p>
                    {% endblock %}
                </div>
                <div class=\"cake-show-container description-container {% block description_container_class %}{% endblock %}\">
                    <h2>Description</h2>
                    {% block cake_description %}
                        <p>{{ cake.description }}</p>
                    {% endblock %}
                </div>
            </div>

            {% block cake_createdAt %}
                <div class=\"cake-show-fat-container\">
                    <div class=\"cake-show-container date-container\">
                        <p>Gâteau ajouté le <strong>{{ cake.createdAt.format('d/m/Y') }}</strong></p>
                    </div>
                </div>
            {% endblock %}
            
            <div class=\"cake-show-container controls-container\">
                {% block cake_controls %}
                    {% include \"admin/cakes/form/_update_button.html.twig\" %}
                    {% include \"admin/cakes/form/_delete_button.html.twig\" %}
                {% endblock %}
            </div>
        </div>

    {% block cake_show_end %}{% endblock %}

{% endblock %}", "admin/cakes/show.html.twig", "C:\\Users\\Vico\\Desktop\\Noalia fée des gateaux (dossier complet)\\noaliafeedesgateaux\\templates\\admin\\cakes\\show.html.twig");
    }
}
