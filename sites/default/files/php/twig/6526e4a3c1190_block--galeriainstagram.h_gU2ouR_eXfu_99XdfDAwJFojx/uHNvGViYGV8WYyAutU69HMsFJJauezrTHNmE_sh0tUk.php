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

/* themes/casa_firjan/templates/blocks/block--galeriainstagram.html.twig */
class __TwigTemplate_10f7570f9dc997658c2360f841521e0a extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!--
Galeria do Instagram
-->
<div class=\"galeriaInstagram mt-5\">
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col\">
            <p class=\"title  p-0 m-0\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 8, $this->source), "html", null, true);
        echo "</p>
        </div>
        </div>
    </div>
    <div class=\"owl-carousel p-0 mt-4\" data-instagram=\"casafirjan\">
        <div class=\"loadingCarousel\"></div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/blocks/block--galeriainstagram.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--
Galeria do Instagram
-->
<div class=\"galeriaInstagram mt-5\">
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col\">
            <p class=\"title  p-0 m-0\">{{title}}</p>
        </div>
        </div>
    </div>
    <div class=\"owl-carousel p-0 mt-4\" data-instagram=\"casafirjan\">
        <div class=\"loadingCarousel\"></div>
    </div>
</div>
", "themes/casa_firjan/templates/blocks/block--galeriainstagram.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/blocks/block--galeriainstagram.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
