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

/* themes/casa_firjan/templates/blocks/block--new-breadcrumb.html.twig */
class __TwigTemplate_00be78436b8516310fcedcf2b611af60 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        $context["field_background"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#block_content"] ?? null) : null), "field_background", [], "any", false, false, true, 14), 0, [], "any", false, false, true, 14), "target_id", [], "any", false, false, true, 14);
        // line 15
        echo "    ";
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/blocks/breadcrumb.html.twig"), "themes/casa_firjan/templates/blocks/block--new-breadcrumb.html.twig", 15)->display(twig_array_merge($context, ["breadcrumb_bg" => $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_get_image_from_id(($context["field_background"] ?? null))]));
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/blocks/block--new-breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  54 => 14,  50 => 13,  45 => 17,  43 => 13,  40 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a breadcrumb trail.
 *
 * Available variables:
 * - breadcrumb: Breadcrumb trail items.
 *
 * @ingroup themeable
 */
#}

{% block content %}
    {% set field_background = content['#block_content'].field_background.0.target_id %}
    {% include directory ~ '/templates/blocks/breadcrumb.html.twig' with {breadcrumb_bg: get_image_from_id(field_background)} %}
{% endblock %}

", "themes/casa_firjan/templates/blocks/block--new-breadcrumb.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/blocks/block--new-breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 13, "set" => 14, "include" => 15);
        static $filters = array();
        static $functions = array("get_image_from_id" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'include'],
                [],
                ['get_image_from_id']
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
