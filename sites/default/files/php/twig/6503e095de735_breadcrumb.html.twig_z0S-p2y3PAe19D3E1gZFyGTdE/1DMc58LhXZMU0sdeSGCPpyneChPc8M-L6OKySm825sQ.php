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

/* themes/casa_firjan/templates/blocks/breadcrumb.html.twig */
class __TwigTemplate_cf82ffa195563fd1f74a93a9ab28f891 extends \Twig\Template
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
        $context["headline"] = "";
        // line 13
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        if (($context["term"] ?? null)) {
            // line 15
            echo "      <nav class=\"breadcrumb mb-5\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
        <div class=\"container pt-5 pb-5\">
          <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
            echo "</h2>
          <ul class=\"p-0 m-0 d-flex align-items-md-center flex-wrap\">
              <li class=\"me-3\">
                <a>";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["term"] ?? null), "titulo", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</a>
              </li>
          </ul>
          ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["term"] ?? null), "descricao", [], "any", false, false, true, 23)) {
                // line 24
                echo "            <h3 class=\"mt-2 headline\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["term"] ?? null), "descricao", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "</h3>
          ";
            }
            // line 26
            echo "
          ";
            // line 28
            echo "        </div>
      </nav>
    ";
        } elseif (        // line 30
($context["breadcrumb"] ?? null)) {
            // line 31
            echo "      <nav class=\"breadcrumb mb-5\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\" ";
            if (($context["breadcrumb_bg"] ?? null)) {
                echo " style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb_bg"] ?? null), 31, $this->source), "html", null, true);
                echo ")\" ";
            }
            echo ">
        <div class=\"container pt-5 pb-5\">
          <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
            echo "</h2>
          <ul class=\"p-0 m-0 d-flex align-items-md-center flex-wrap\">
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                if (($context["breadcrumb"] ?? null)) {
                    // line 36
                    echo "              <li class=\"me-3\">
                <a>";
                    // line 37
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                    echo "</a>
              </li>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    
          </ul>
          ";
            // line 41
            if ((($context["field_headline"] ?? null) || (($__internal_compile_0 = twig_last($this->env, ($context["breadcrumb"] ?? null))) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["headline"] ?? null) : null))) {
                // line 42
                echo "            <h3 class=\"mt-2 headline\">";
                if (($context["field_headline"] ?? null)) {
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_headline"] ?? null), 42, $this->source), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_last($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 42, $this->source))) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["headline"] ?? null) : null), 42, $this->source), "html", null, true);
                    echo " ";
                }
                echo "</h3>
          ";
            }
            // line 44
            echo "        </div>
      </nav>
    ";
        }
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/blocks/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 44,  124 => 42,  122 => 41,  118 => 39,  108 => 37,  105 => 36,  100 => 35,  95 => 33,  85 => 31,  83 => 30,  79 => 28,  76 => 26,  70 => 24,  68 => 23,  62 => 20,  56 => 17,  52 => 15,  49 => 14,  42 => 13,  40 => 12,);
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
{% set headline = '' %}
{% block content %}
    {% if term %}
      <nav class=\"breadcrumb mb-5\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
        <div class=\"container pt-5 pb-5\">
          <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">{{ 'Breadcrumb'|t }}</h2>
          <ul class=\"p-0 m-0 d-flex align-items-md-center flex-wrap\">
              <li class=\"me-3\">
                <a>{{term.titulo}}</a>
              </li>
          </ul>
          {% if term.descricao %}
            <h3 class=\"mt-2 headline\">{{term.descricao}}</h3>
          {% endif %}

          {# {{dump(get_term(term.tid))}} #}
        </div>
      </nav>
    {% elseif breadcrumb %}
      <nav class=\"breadcrumb mb-5\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\" {% if breadcrumb_bg %} style=\"background-image: url({{breadcrumb_bg}})\" {% endif %}>
        <div class=\"container pt-5 pb-5\">
          <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">{{ 'Breadcrumb'|t }}</h2>
          <ul class=\"p-0 m-0 d-flex align-items-md-center flex-wrap\">
            {% for item in breadcrumb if breadcrumb %}
              <li class=\"me-3\">
                <a>{{item.text}}</a>
              </li>
            {% endfor %}    
          </ul>
          {% if field_headline or breadcrumb|last['headline'] %}
            <h3 class=\"mt-2 headline\">{% if field_headline %} {{field_headline}} {% else %} {{breadcrumb|last['headline']}} {% endif %}</h3>
          {% endif %}
        </div>
      </nav>
    {% endif %}
{% endblock %}", "themes/casa_firjan/templates/blocks/breadcrumb.html.twig", "C:\\xampp\\htdocs\\CasaFirjan\\themes\\casa_firjan\\templates\\blocks\\breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "block" => 13, "if" => 14, "for" => 35);
        static $filters = array("t" => 17, "escape" => 20, "last" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['t', 'escape', 'last'],
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
