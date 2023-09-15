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

/* themes/casa_firjan/templates/blocks/block--system-main-block.html.twig */
class __TwigTemplate_fe58d1cfa5b77ed55d884dd30338b5ef extends \Twig\Template
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
        // line 44
        if (($context["content"] ?? null)) {
            // line 45
            $context["message"] = twig_striptags($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null), 45, $this->source));
            // line 46
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => (((($context["message"] ?? null) && (($context["message"] ?? null) == "A página solicitada não foi encontrada."))) ? ([0 => "d-block mt-5 pt-5 text-center"]) : (""))], "method", false, false, true, 46), 46, $this->source), "html", null, true);
            echo ">
  ";
            // line 47
            $this->displayBlock('content', $context, $blocks);
        }
        // line 51
        echo "</div>";
    }

    // line 47
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 48, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/blocks/block--system-main-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 48,  56 => 47,  52 => 51,  49 => 47,  44 => 46,  42 => 45,  40 => 44,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - module: The module that provided this block plugin.
 *   - cache: The cache settings.
 *   - Block plugin specific settings will also be stored here.
 * - block - The full block entity.
 *   - label_hidden: The hidden block title value if the block was
 *     configured to hide the title ('label' is empty in this case).
 *   - module: The module that generated the block.
 *   - delta: An ID for the block, unique within each module.
 *   - region: The block region embedding the current block.
 * - content: The content of this block.
 * - attributes: HTML attributes for the containing element.
 *   - id: A valid HTML ID and guaranteed unique.
 *   - class: Classes that can be used to style contextually through
 *     CSS. These can be manipulated through preprocess functions. The default
 *     values can be one or more of the following:
 *     - block: The current template type, i.e., \"theming hook\".
 *     - block-[module]: The module generating the block. For example, the user
 *       module is responsible for handling the default user navigation block.
 *       In that case the class would be 'block-user'.
 * - title_attributes: HTML attributes for the title element.
 * - content_attributes: HTML attributes for the content element.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 *
 * @ingroup themeable
 */
 @todo Remove the div around content as per http://drupal.org/node/1972122.
#}
{% if content %}
{% set message = content['#markup']|striptags %}
<div{{ attributes.addClass(message and message == 'A página solicitada não foi encontrada.' ? ['d-block mt-5 pt-5 text-center'] : '') }}>
  {% block content %}
    {{ content }}
  {% endblock %}
{% endif %}
</div>", "themes/casa_firjan/templates/blocks/block--system-main-block.html.twig", "C:\\xampp\\htdocs\\CasaFirjan\\themes\\casa_firjan\\templates\\blocks\\block--system-main-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 44, "set" => 45, "block" => 47);
        static $filters = array("striptags" => 45, "escape" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['striptags', 'escape'],
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
