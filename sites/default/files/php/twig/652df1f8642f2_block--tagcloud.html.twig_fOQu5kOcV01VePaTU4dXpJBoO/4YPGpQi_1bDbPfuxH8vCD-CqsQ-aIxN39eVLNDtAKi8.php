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

/* themes/casa_firjan/templates/blocks/block--tagcloud.html.twig */
class __TwigTemplate_8713a43abdc10767558fffd3c60a67d9 extends \Twig\Template
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
        $context["field_background"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#block_content"] ?? null) : null), "field_background", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1), "target_id", [], "any", false, false, true, 1);
        // line 2
        echo "
<section id=\"tagcloud\" class=\"tagcloud mt-5\" style=\"background: url(";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_get_image_from_id($this->sandbox->ensureToStringAllowed(($context["field_background"] ?? null), 3, $this->source)), "html", null, true);
        echo ") center center / cover no-repeat\">
    <div class=\"container pt-5 pb-5\">
        <h3>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 5, $this->source), "html", null, true);
        echo "</h3>
        ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 6, $this->source), "html", null, true);
        echo "
        ";
        // line 7
        if (($context["taxonomies"] ?? null)) {
            // line 8
            echo "            <ul class=\"taglist p-0 mt-5 d-flex flex-wrap align-items-center justify-content-between\">
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["taxonomies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["taxonomy"]) {
                // line 10
                echo "                    <li class=\"pb-4 flex-fill ps-2 pe-2\">
                        <a class=\"p-2 ps-4 pe-4 tag d-block text-center\" href=\"";
                // line 11
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["taxonomy"], "url", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\" data-id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["taxonomy"], "tid", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["taxonomy"], "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomy'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "            </ul>
        ";
        }
        // line 16
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/blocks/block--tagcloud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 16,  82 => 14,  69 => 11,  66 => 10,  62 => 9,  59 => 8,  57 => 7,  53 => 6,  49 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set field_background = content['#block_content'].field_background.0.target_id %}

<section id=\"tagcloud\" class=\"tagcloud mt-5\" style=\"background: url({{get_image_from_id(field_background)}}) center center / cover no-repeat\">
    <div class=\"container pt-5 pb-5\">
        <h3>{{ title }}</h3>
        {{content}}
        {% if taxonomies %}
            <ul class=\"taglist p-0 mt-5 d-flex flex-wrap align-items-center justify-content-between\">
                {% for taxonomy in taxonomies %}
                    <li class=\"pb-4 flex-fill ps-2 pe-2\">
                        <a class=\"p-2 ps-4 pe-4 tag d-block text-center\" href=\"{{taxonomy.url}}\" data-id=\"{{ taxonomy.tid }}\">{{ taxonomy.name }}</a>
                    </li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
</section>", "themes/casa_firjan/templates/blocks/block--tagcloud.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/blocks/block--tagcloud.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 7, "for" => 9);
        static $filters = array("escape" => 3);
        static $functions = array("get_image_from_id" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
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
