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

/* themes/casa_firjan/templates/blocks/block--ultimaspublicacoes.html.twig */
class __TwigTemplate_c82ad0211f986de49d715b244ceec8d9 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaquesMini", [], "any", true, true, true, 1) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaquesMini", [], "any", false, false, true, 1)))) {
            // line 2
            echo "<div class=\"maisDestaquesHome\">
  <div class=\"row mb-4\">
    <div class=\"col-md-12\">
      <h3 class=\"textTitleBlock\">
        ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 6, $this->source), "html", null, true);
            echo "
      </h3>
      ";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 8, $this->source), "html", null, true);
            echo "
      ";
            // line 10
            echo "    </div>
  </div>
  ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaquesMini", [], "any", false, false, true, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["destaqueMini"]) {
                // line 13
                echo "  <div class=\"row\">
    <div class=\"col-12\">
      <a class=\"textCat\" href=\"";
                // line 15
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["destaqueMini"], "categoria", [], "any", false, false, true, 15), "url", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["destaqueMini"], "categoria", [], "any", false, false, true, 15), "label", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "</a>
      <a class=\"textTitle\" href=\"";
                // line 16
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["destaqueMini"], "url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["destaqueMini"], "titulo", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "</a>
      <p class=\"textChamada\">";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["destaqueMini"], "chamada", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "</p>
      <p class=\"textCreate\">";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["destaqueMini"], "autor_data", [], "any", false, false, true, 18), 18, $this->source), "em"), 1, [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "</p>
    </div>
  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destaqueMini'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/blocks/block--ultimaspublicacoes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  84 => 18,  80 => 17,  74 => 16,  68 => 15,  64 => 13,  60 => 12,  56 => 10,  52 => 8,  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if customPage.destaquesMini is defined and customPage.destaquesMini is not empty %}
<div class=\"maisDestaquesHome\">
  <div class=\"row mb-4\">
    <div class=\"col-md-12\">
      <h3 class=\"textTitleBlock\">
        {{title}}
      </h3>
      {{content}}
      {# <p class=\"p-0\">{{content}}</p> #}
    </div>
  </div>
  {% for destaqueMini in customPage.destaquesMini %}
  <div class=\"row\">
    <div class=\"col-12\">
      <a class=\"textCat\" href=\"{{destaqueMini.categoria.url }}\">{{destaqueMini.categoria.label }}</a>
      <a class=\"textTitle\" href=\"{{destaqueMini.url }}\">{{ destaqueMini.titulo }}</a>
      <p class=\"textChamada\">{{destaqueMini.chamada}}</p>
      <p class=\"textCreate\">{{destaqueMini.autor_data|split('em').1 }}</p>
    </div>
  </div>
  {% endfor %}
</div>
{% endif %}", "themes/casa_firjan/templates/blocks/block--ultimaspublicacoes.html.twig", "C:\\xampp\\htdocs\\CasaFirjan\\themes\\casa_firjan\\templates\\blocks\\block--ultimaspublicacoes.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 12);
        static $filters = array("escape" => 6, "split" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'split'],
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
