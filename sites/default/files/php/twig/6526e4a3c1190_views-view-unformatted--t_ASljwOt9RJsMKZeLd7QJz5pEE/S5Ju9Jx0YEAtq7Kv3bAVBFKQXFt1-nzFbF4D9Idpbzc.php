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

/* themes/casa_firjan/templates/views/taxonomy/views-view-unformatted--taxonomy-term.html.twig */
class __TwigTemplate_2144f01addbed0d5e6caee55edb1af7e extends \Twig\Template
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
        // line 20
        echo "
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 22
            echo "    ";
            $context["node"] = $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_getNode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 22), "nid", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source));
            // line 23
            echo "    <div class=\"row itemProduto\">
        <div class=\"col-md-12 col-lg-6\">
            <a href=\"";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "url", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "thumb", [], "any", false, false, true, 25)) ? (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "thumb", [], "any", false, false, true, 25)) : (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "imagem", [], "any", false, false, true, 25))), "html", null, true);
            echo ");\" class=\"img\">
                <img src=\"";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "thumb", [], "any", false, false, true, 26)) ? (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "thumb", [], "any", false, false, true, 26)) : (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "imagem", [], "any", false, false, true, 26))), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "\">
                <span><p>";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</p></span>
            </a>
        </div>
        <div class=\"col-md-12 col-lg-6\">
            <div class=\"resumo\">
                <p class=\"text20\">";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_chamada", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "</p>
                <a href=\"";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "url", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\" class=\"mais\">Conheça mais ></a>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/views/taxonomy/views-view-unformatted--taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  73 => 32,  65 => 27,  59 => 26,  53 => 25,  49 => 23,  46 => 22,  42 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 *
 * @ingroup themeable
 */
#}

{% for row in rows %}
    {% set node = getNode(row.content['#row']._entity.nid.value) %}
    <div class=\"row itemProduto\">
        <div class=\"col-md-12 col-lg-6\">
            <a href=\"{{ node.url }}\" style=\"background-image:url({{ node.thumb ? node.thumb : node.imagem }});\" class=\"img\">
                <img src=\"{{ node.thumb ? node.thumb : node.imagem }}\" alt=\"{{ node.title }}\">
                <span><p>{{ node.title }}</p></span>
            </a>
        </div>
        <div class=\"col-md-12 col-lg-6\">
            <div class=\"resumo\">
                <p class=\"text20\">{{ node.field_chamada }}</p>
                <a href=\"{{ node.url }}\" class=\"mais\">Conheça mais ></a>
            </div>
        </div>
    </div>
{% endfor %}", "themes/casa_firjan/templates/views/taxonomy/views-view-unformatted--taxonomy-term.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/views/taxonomy/views-view-unformatted--taxonomy-term.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 21, "set" => 22);
        static $filters = array("escape" => 25);
        static $functions = array("getNode" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape'],
                ['getNode']
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
