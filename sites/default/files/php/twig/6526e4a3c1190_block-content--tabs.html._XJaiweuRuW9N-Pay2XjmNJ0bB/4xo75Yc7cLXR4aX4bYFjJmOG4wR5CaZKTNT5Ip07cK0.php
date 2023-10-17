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

/* themes/casa_firjan/templates/blocks/block-content--tabs.html.twig */
class __TwigTemplate_9840b375c415529966a95b37442f2b07 extends \Twig\Template
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
        // line 31
        echo "<section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => [0 => "tabs d-flex flex-column"]], "method", false, false, true, 31), 31, $this->source), "html", null, true);
        echo ">
    <div class=\"container\">
        ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "    </div>
</section>";
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "            ";
        if ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tab", [], "any", false, false, true, 34)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null)) {
            // line 35
            echo "                <nav class=\"tabs-nav col-8 m-auto mb-5 d-flex align-items-center justify-content-lg-center\">
                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tab", [], "any", false, false, true, 36)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["index"] => $context["item"]) {
                // line 37
                echo "                        <a href=\"javascript:void(0)\" data-id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_slugify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 37), "get", [0 => "field_titulo"], "method", false, false, true, 37), 0, [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37), 37, $this->source)), "html", null, true);
                echo "\" class=\"list-group-item flex-fill text-center p-2 ";
                if (($context["index"] == 0)) {
                    echo " active ";
                }
                echo "\">
                            <span>";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 38), "get", [0 => "field_titulo"], "method", false, false, true, 38), 0, [], "any", false, false, true, 38), "value", [], "any", false, false, true, 38), 38, $this->source));
                echo "</span>
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                </nav>    
                <ul class=\"col-12 d-block tabs-panels p-0 m-0\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tab", [], "any", false, false, true, 43)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null));
            foreach ($context['_seq'] as $context["index"] => $context["item"]) {
                // line 44
                echo "                        <li data-id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_slugify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 44), "get", [0 => "field_titulo"], "method", false, false, true, 44), 0, [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44), 44, $this->source)), "html", null, true);
                echo "\" class=\"list-group-item p-0 m-0 align-items-stretch flex-wrap flex-column flex-md-row ";
                if (($context["index"] == 0)) {
                    echo " d-flex ";
                } else {
                    echo " d-none ";
                }
                echo "\">
                            <div class=\"mb-3 mb-md-0 col-12 col-md-5 p-0 pe-md-4\">
                                <img class=\"img-fluid\" src=\"";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_get_image_from_id($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 46), "get", [0 => "field_imagem"], "method", false, false, true, 46), "value", [], "any", false, false, true, 46), 0, [], "any", false, false, true, 46), "target_id", [], "any", false, false, true, 46), 46, $this->source)), "html", null, true);
                echo "\" width=\"100%\">
                            </div>
                            <div class=\"flex-fill p-0\">
                                ";
                // line 49
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 49), "get", [0 => "field_texto"], "method", false, false, true, 49), 0, [], "any", false, false, true, 49), "value", [], "any", false, false, true, 49), 49, $this->source));
                echo "
                            </div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                </ul>
            ";
        }
        // line 54
        echo " 
        ";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/blocks/block-content--tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 54,  121 => 53,  111 => 49,  105 => 46,  93 => 44,  89 => 43,  85 => 41,  76 => 38,  67 => 37,  63 => 36,  60 => 35,  57 => 34,  53 => 33,  48 => 56,  46 => 33,  40 => 31,);
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
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - in_preview: Whether the plugin is being rendered in preview mode.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 *
 * @ingroup themeable
 */
#}
<section{{ attributes.addClass(['tabs d-flex flex-column']) }}>
    <div class=\"container\">
        {% block content %}
            {%if content.field_tab['#items'] %}
                <nav class=\"tabs-nav col-8 m-auto mb-5 d-flex align-items-center justify-content-lg-center\">
                    {% for index, item in content.field_tab['#items'] %}
                        <a href=\"javascript:void(0)\" data-id=\"{{slugify(item.entity.get('field_titulo').0.value|raw)}}\" class=\"list-group-item flex-fill text-center p-2 {% if index == 0 %} active {% endif %}\">
                            <span>{{item.entity.get('field_titulo').0.value|raw}}</span>
                        </a>
                    {% endfor %}
                </nav>    
                <ul class=\"col-12 d-block tabs-panels p-0 m-0\">
                    {% for index, item in content.field_tab['#items'] %}
                        <li data-id=\"{{slugify(item.entity.get('field_titulo').0.value|raw)}}\" class=\"list-group-item p-0 m-0 align-items-stretch flex-wrap flex-column flex-md-row {% if index == 0 %} d-flex {% else %} d-none {% endif %}\">
                            <div class=\"mb-3 mb-md-0 col-12 col-md-5 p-0 pe-md-4\">
                                <img class=\"img-fluid\" src=\"{{get_image_from_id(item.entity.get('field_imagem').value.0.target_id)}}\" width=\"100%\">
                            </div>
                            <div class=\"flex-fill p-0\">
                                {{item.entity.get('field_texto').0.value|raw}}
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            {%endif%} 
        {% endblock %}
    </div>
</section>", "themes/casa_firjan/templates/blocks/block-content--tabs.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/blocks/block-content--tabs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 33, "if" => 34, "for" => 36);
        static $filters = array("escape" => 31, "raw" => 37);
        static $functions = array("slugify" => 37, "get_image_from_id" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for'],
                ['escape', 'raw'],
                ['slugify', 'get_image_from_id']
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
