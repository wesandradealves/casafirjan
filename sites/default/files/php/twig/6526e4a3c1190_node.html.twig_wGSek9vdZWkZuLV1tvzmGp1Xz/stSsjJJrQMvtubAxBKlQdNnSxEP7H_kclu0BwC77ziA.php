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

/* themes/casa_firjan/templates/pages/node.html.twig */
class __TwigTemplate_f48501b3c3d2cbdcdb266fae4828c1f1 extends \Twig\Template
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
        // line 71
        echo "
";
        // line 72
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cards", [], "any", false, false, true, 72), 0, [], "any", false, false, true, 72)) {
            // line 73
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cards_layout", [], "any", false, false, true, 73) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cards_layout", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73))) {
                // line 74
                echo "      ";
                $context["cols"] = twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cards_layout", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74), 74, $this->source), "Colunas")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 74, $this->source));
                // line 75
                echo "      <style>
        @media (min-width: 992px) {
          .paragraph--cards {
            width: ";
                // line 78
                if ((($context["cols"] ?? null) == 2)) {
                    echo " 50% ";
                } else {
                    echo " 33.333% ";
                }
                echo ";
            flex: 0 0 auto !important;
            max-width: initial;            
          }
        }        
      </style>
    ";
            }
            // line 85
            echo "
    <div class=\"cards row d-flex flex-wrap align-items-stretch\">
        ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 87, $this->source), "html", null, true);
            echo "
    </div>
";
        } else {
            // line 90
            echo "    <article";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 90, $this->source), "html", null, true);
            echo ">
    
      ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 92, $this->source), "html", null, true);
            echo "
      ";
            // line 93
            if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
                // line 94
                echo "        <h2";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 94, $this->source), "html", null, true);
                echo ">
          <a href=\"";
                // line 95
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 95, $this->source), "html", null, true);
                echo "\" rel=\"bookmark\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 95, $this->source), "html", null, true);
                echo "</a>
        </h2>
      ";
            }
            // line 98
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 98, $this->source), "html", null, true);
            echo "
    
      ";
            // line 100
            if (($context["display_submitted"] ?? null)) {
                // line 101
                echo "        <footer>
          ";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 102, $this->source), "html", null, true);
                echo "
          <div";
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 103, $this->source), "html", null, true);
                echo ">
            ";
                // line 104
                echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 105
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 105, $this->source), "html", null, true);
                echo "
          </div>
        </footer>
      ";
            }
            // line 109
            echo "    
      <div";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 110, $this->source), "html", null, true);
            echo ">
        ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 111, $this->source), "html", null, true);
            echo "
      </div>
    
    </article>
";
        }
        // line 116
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/pages/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 116,  140 => 111,  136 => 110,  133 => 109,  125 => 105,  123 => 104,  119 => 103,  115 => 102,  112 => 101,  110 => 100,  104 => 98,  96 => 95,  91 => 94,  89 => 93,  85 => 92,  79 => 90,  73 => 87,  69 => 85,  55 => 78,  50 => 75,  47 => 74,  44 => 73,  42 => 72,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @ingroup themeable
 */
#}

{% if content.field_cards.0 %}
    {% if node.field_cards_layout and node.field_cards_layout.value %}
      {% set cols = node.field_cards_layout.value|split('Colunas')[0]|number_format %}
      <style>
        @media (min-width: 992px) {
          .paragraph--cards {
            width: {% if cols == 2 %} 50% {% else %} 33.333% {% endif %};
            flex: 0 0 auto !important;
            max-width: initial;            
          }
        }        
      </style>
    {% endif %}

    <div class=\"cards row d-flex flex-wrap align-items-stretch\">
        {{ content }}
    </div>
{% else %}
    <article{{ attributes }}>
    
      {{ title_prefix }}
      {% if label and not page %}
        <h2{{ title_attributes }}>
          <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h2>
      {% endif %}
      {{ title_suffix }}
    
      {% if display_submitted %}
        <footer>
          {{ author_picture }}
          <div{{ author_attributes }}>
            {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
            {{ metadata }}
          </div>
        </footer>
      {% endif %}
    
      <div{{ content_attributes }}>
        {{ content }}
      </div>
    
    </article>
{% endif %}

", "themes/casa_firjan/templates/pages/node.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/pages/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 72, "set" => 74, "trans" => 104);
        static $filters = array("number_format" => 74, "split" => 74, "escape" => 87);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'trans'],
                ['number_format', 'split', 'escape'],
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
