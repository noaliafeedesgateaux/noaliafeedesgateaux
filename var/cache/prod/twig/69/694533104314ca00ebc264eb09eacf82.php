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

/* js_template/cake_card.html.twig */
class __TwigTemplate_19f50ca76ca321ccb122bc008ce7c3ed extends Template
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
        echo "<template id=\"cake-card-template\">
    <li class=\"cake-item js-cake-card appears\"
        data-id=\"\"
    >
        <div class=\"board appears-faster\">
            <p></p>
        </div>
    </li>
</template>";
    }

    public function getTemplateName()
    {
        return "js_template/cake_card.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "js_template/cake_card.html.twig", "/home/noaliav/templates/js_template/cake_card.html.twig");
    }
}
