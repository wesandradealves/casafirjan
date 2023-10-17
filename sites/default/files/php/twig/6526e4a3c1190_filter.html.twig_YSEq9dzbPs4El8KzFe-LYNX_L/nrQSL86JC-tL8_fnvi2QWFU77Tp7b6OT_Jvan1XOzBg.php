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

/* themes/casa_firjan/templates/includes/filter.html.twig */
class __TwigTemplate_deca741d810d8df1efb150570c048161 extends \Twig\Template
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
        echo "<div class=\"filter d-flex align-items-center w-100 p-3 mb-4\">
    <p class=\"p-0 m-0\"><strong>Filtrar por:</strong></p>
    <div class=\"flex-fill ps-3\">
        ";
        // line 4
        if (($context["taxonomies"] ?? null)) {
            // line 5
            echo "            <ul class=\"d-flex align-items-center p-0 m-0\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["taxonomies"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 7
                echo "                    <li class=\"me-3 group-item d-flex align-items-center\"><span class=\"checkbox\"><input type=\"checkbox\" id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_slugify($this->sandbox->ensureToStringAllowed($context["cat"], 7, $this->source)), "html", null, true);
                echo "\" name=\"categories\" value=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_slugify($this->sandbox->ensureToStringAllowed($context["cat"], 7, $this->source)), "html", null, true);
                echo "\" /> <span></span></span> <label class=\"m-0 p-0 ms-2\" for=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_slugify($this->sandbox->ensureToStringAllowed($context["cat"], 7, $this->source)), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["cat"], 7, $this->source), "html", null, true);
                echo "</label></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            </ul>            
        ";
        } else {
            // line 11
            echo "            ";
            $context["categories"] = [];
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
                // line 13
                echo "                ";
                $context["term"] = $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_get_term($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "categoria", [], "any", false, false, true, 13), 13, $this->source));
                // line 14
                echo "                
                ";
                // line 15
                if ((($context["term"] ?? null) && !twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["term"] ?? null), "name", [], "any", false, false, true, 15), ($context["categories"] ?? null)))) {
                    // line 16
                    echo "                    ";
                    $context["categories"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["categories"] ?? null), 16, $this->source), [0 => twig_get_attribute($this->env, $this->source, ($context["term"] ?? null), "name", [], "any", false, false, true, 16)]);
                    // line 17
                    echo "                ";
                }
                // line 18
                echo "                ";
                // line 21
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            ";
            if (twig_length_filter($this->env, ($context["categories"] ?? null))) {
                // line 23
                echo "                <ul class=\"d-flex align-items-center p-0 m-0\">
                    ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 25
                    echo "                        <li class=\"me-3 group-item d-flex align-items-center\"><span class=\"checkbox\"><input type=\"checkbox\" id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["cat"], 25, $this->source), "html", null, true);
                    echo "\" name=\"categories[]\" value=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["cat"], 25, $this->source), "html", null, true);
                    echo "\" /> <span></span></span> <label class=\"m-0 p-0 ms-2\" for=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["cat"], 25, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["cat"], 25, $this->source), "html", null, true);
                    echo "</label></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                </ul>
            ";
            }
            // line 29
            echo "        ";
        }
        // line 30
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/includes/filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 30,  131 => 29,  127 => 27,  112 => 25,  108 => 24,  105 => 23,  102 => 22,  96 => 21,  94 => 18,  91 => 17,  88 => 16,  86 => 15,  83 => 14,  80 => 13,  75 => 12,  72 => 11,  68 => 9,  53 => 7,  49 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"filter d-flex align-items-center w-100 p-3 mb-4\">
    <p class=\"p-0 m-0\"><strong>Filtrar por:</strong></p>
    <div class=\"flex-fill ps-3\">
        {% if taxonomies %}
            <ul class=\"d-flex align-items-center p-0 m-0\">
                {% for cat in taxonomies|keys %}
                    <li class=\"me-3 group-item d-flex align-items-center\"><span class=\"checkbox\"><input type=\"checkbox\" id=\"{{slugify(cat)}}\" name=\"categories\" value=\"{{slugify(cat)}}\" /> <span></span></span> <label class=\"m-0 p-0 ms-2\" for=\"{{slugify(cat)}}\">{{cat}}</label></li>
                {% endfor %}
            </ul>            
        {% else %}
            {% set categories = [] %}
            {% for node in data %}
                {% set term = get_term(node.categoria) %}
                
                {% if term and term.name not in categories %}
                    {% set categories = categories|merge([term.name]) %}
                {% endif %}
                {# {% if node.categoria_curso and node.categoria_curso.name not in categories %}
                    {% set categories = categories|merge([node.categoria_curso.name]) %}
                {% endif %}             #}
            {% endfor %}
            {% if categories|length %}
                <ul class=\"d-flex align-items-center p-0 m-0\">
                    {% for cat in categories %}
                        <li class=\"me-3 group-item d-flex align-items-center\"><span class=\"checkbox\"><input type=\"checkbox\" id=\"{{cat}}\" name=\"categories[]\" value=\"{{cat}}\" /> <span></span></span> <label class=\"m-0 p-0 ms-2\" for=\"{{cat}}\">{{cat}}</label></li>
                    {% endfor %}
                </ul>
            {% endif %}
        {% endif %}
    </div>
</div>", "themes/casa_firjan/templates/includes/filter.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/includes/filter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "for" => 6, "set" => 11);
        static $filters = array("keys" => 6, "escape" => 7, "merge" => 16, "length" => 22);
        static $functions = array("slugify" => 7, "get_term" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['keys', 'escape', 'merge', 'length'],
                ['slugify', 'get_term']
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
