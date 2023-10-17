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
class __TwigTemplate_89c477d7a6d967fb7267c6832c2a6d2d extends \Twig\Template
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
        echo "
";
        // line 14
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        if (($context["term"] ?? null)) {
            // line 16
            echo "      <nav class=\"breadcrumb mb-5\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
        <div class=\"container pt-5 pb-5\">
          <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
            echo "</h2>
          <ul class=\"p-0 m-0 d-flex align-items-md-center flex-wrap\">
              <li class=\"me-3\">
                <a>";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["term"] ?? null), "titulo", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "</a>
              </li>
          </ul>
          ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["term"] ?? null), "descricao", [], "any", false, false, true, 24)) {
                // line 25
                echo "            <h3 class=\"mt-2 headline\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["term"] ?? null), "descricao", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "</h3>
          ";
            }
            // line 27
            echo "
          ";
            // line 29
            echo "        </div>
      </nav>
    ";
        } elseif (        // line 31
($context["breadcrumb"] ?? null)) {
            // line 32
            echo "      <nav class=\"breadcrumb mb-5\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\" ";
            if (($context["breadcrumb_bg"] ?? null)) {
                echo " style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb_bg"] ?? null), 32, $this->source), "html", null, true);
                echo ")\" ";
            }
            echo ">
        <div class=\"container pt-5 pb-5\">
          <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
            echo "</h2>
          <ul class=\"p-0 m-0 d-flex align-items-md-center flex-wrap\">
            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                if (($context["breadcrumb"] ?? null)) {
                    // line 37
                    echo "              <li class=\"me-3\">
                <a>";
                    // line 38
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    echo "</a>
              </li>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    
          </ul>
          ";
            // line 42
            if ((($context["field_headline"] ?? null) || (($__internal_compile_0 = twig_last($this->env, ($context["breadcrumb"] ?? null))) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["headline"] ?? null) : null))) {
                // line 43
                echo "            <h3 class=\"mt-2 headline\">";
                if (($context["field_headline"] ?? null)) {
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_headline"] ?? null), 43, $this->source), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_last($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 43, $this->source))) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["headline"] ?? null) : null), 43, $this->source), "html", null, true);
                    echo " ";
                }
                echo "</h3>
          ";
            }
            // line 45
            echo "        </div>
      </nav>
    ";
        } elseif (        // line 47
($context["is_search"] ?? null)) {
            // line 48
            echo "        Busca aqui
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
        return array (  147 => 48,  145 => 47,  141 => 45,  127 => 43,  125 => 42,  121 => 40,  111 => 38,  108 => 37,  103 => 36,  98 => 34,  88 => 32,  86 => 31,  82 => 29,  79 => 27,  73 => 25,  71 => 24,  65 => 21,  59 => 18,  55 => 16,  52 => 15,  45 => 14,  42 => 13,  40 => 12,);
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
    {% elseif is_search %}
        Busca aqui
    {% endif %}
{% endblock %}", "themes/casa_firjan/templates/blocks/breadcrumb.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/blocks/breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 12, "block" => 14, "if" => 15, "for" => 36);
        static $filters = array("t" => 18, "escape" => 21, "last" => 42);
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
