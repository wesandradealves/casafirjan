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

/* themes/casa_firjan/templates/field/field.html.twig */
class __TwigTemplate_262212124fc8e031978fc4f19a4ba6a6 extends \Twig\Template
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
        // line 39
        if (($context["items"] ?? null)) {
            // line 40
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/field/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 41,  41 => 40,  39 => 39,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Theme override for a field.
*
* To override output, copy the \"field.html.twig\" from the templates directory
* to your theme's directory and customize it, just like customizing other
* Drupal templates such as page.html.twig or node.html.twig.
*
* Instead of overriding the theming for all fields, you can also just override
* theming for a subset of fields using
* @link themeable Theme hook suggestions. @endlink For example,
* here are some theme hook suggestions that can be used for a field_foo field
* on an article node type:
* - field--node--field-foo--article.html.twig
* - field--node--field-foo.html.twig
* - field--node--article.html.twig
* - field--field-foo.html.twig
* - field--text-with-summary.html.twig
* - field.html.twig
*
* Available variables:
* - attributes: HTML attributes for the containing element.
* - label_hidden: Whether to show the field label or not.
* - title_attributes: HTML attributes for the title.
* - label: The label for the field.
* - multiple: TRUE if a field can contain multiple items.
* - items: List of all the field items. Each item contains:
*   - attributes: List of HTML attributes for each item.
*   - content: The field item's content.
* - entity_type: The entity type to which the field belongs.
* - field_name: The name of the field.
* - field_type: The type of the field.
* - label_display: The display settings for the label.
*
* @see template_preprocess_field()
*/
#}
{%if items%}
    {% for item in items %}
        {{ item.content }}
    {% endfor %}
{%endif%}", "themes/casa_firjan/templates/field/field.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/field/field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 39, "for" => 40);
        static $filters = array("escape" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
