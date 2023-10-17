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

/* themes/casa_firjan/templates/blocks/block--bannerhome.html.twig */
class __TwigTemplate_9df50b00d1a4c718cb5bf3dcd531909c extends \Twig\Template
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
        echo "<!--
    Banner Home
-->
<div class=\"owl-carousel bannerHome\">

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "bannersHome", [], "any", false, false, true, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 7
            echo "    <div target=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, true, 7), "target", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "\" class=\"item owl-lazy\" data-src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner"], "midia", [], "any", false, false, true, 7), "src", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "\">
        <div class=\"box  w-100 pb-5 pb-md-0\">
            <div class=\"container pt-5 pb-5 w-100  d-flex align-items-center justify-content-center text-center\">
                <div class=\"row m-auto  w-100 d-flex align-items-center justify-content-center text-center\">
                    <div class=\"col-12 col-lg-6 col-sm-8 m-0 p-0\">
                    ";
            // line 12
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["banner"], "texto", [], "any", false, false, true, 12))) {
                // line 13
                echo "                        <p class=\"title\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["banner"], "titulo", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "</p>
                        <p class=\"text\">";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["banner"], "texto", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "</p>
                        ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "url", [], "any", false, false, true, 15)) {
                    // line 16
                    echo "                            <a ";
                    if (twig_get_attribute($this->env, $this->source, $context["banner"], "field_link_background", [], "any", false, false, true, 16)) {
                        echo " style=\" border: 0; background-color: ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["banner"], "field_link_background", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                        echo "; ";
                        if ((twig_get_attribute($this->env, $this->source, $context["banner"], "field_link_background", [], "any", false, false, true, 16) == "#FFFFFF")) {
                            echo " color: black; ";
                        } else {
                            echo " color: white; ";
                        }
                        echo "\" ";
                    }
                    echo " target=\"";
                    ((twig_get_attribute($this->env, $this->source, $context["banner"], "target", [], "any", false, false, true, 16)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("_" . twig_get_attribute($this->env, $this->source, $context["banner"], "target", [], "any", false, false, true, 16)), "html", null, true))) : (print ("_top")));
                    echo "\" class=\"btn mt-5\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["banner"], "url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                    echo "\">";
                    if (twig_get_attribute($this->env, $this->source, $context["banner"], "label", [], "any", false, false, true, 16)) {
                        echo " ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["banner"], "label", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                        echo " ";
                    } else {
                        echo " Acesse Aqui ";
                    }
                    echo "</a>
                        ";
                }
                // line 18
                echo "                    ";
            }
            // line 19
            echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/blocks/block--bannerhome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  105 => 19,  102 => 18,  74 => 16,  72 => 15,  68 => 14,  63 => 13,  61 => 12,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--
    Banner Home
-->
<div class=\"owl-carousel bannerHome\">

{% for banner in customPage.bannersHome %}
    <div target=\"{{ banner.link.target }}\" class=\"item owl-lazy\" data-src=\"{{ banner.midia.src }}\">
        <div class=\"box  w-100 pb-5 pb-md-0\">
            <div class=\"container pt-5 pb-5 w-100  d-flex align-items-center justify-content-center text-center\">
                <div class=\"row m-auto  w-100 d-flex align-items-center justify-content-center text-center\">
                    <div class=\"col-12 col-lg-6 col-sm-8 m-0 p-0\">
                    {% if banner.texto is not empty %}
                        <p class=\"title\">{{ banner.titulo }}</p>
                        <p class=\"text\">{{ banner.texto }}</p>
                        {% if banner.url %}
                            <a {% if banner.field_link_background %} style=\" border: 0; background-color: {{banner.field_link_background}}; {% if banner.field_link_background == \"#FFFFFF\" %} color: black; {% else %} color: white; {% endif %}\" {% endif %} target=\"{{ banner.target ? '_' ~ banner.target : '_top' }}\" class=\"btn mt-5\" href=\"{{ banner.url }}\">{% if banner.label %} {{banner.label}} {% else %} Acesse Aqui {% endif %}</a>
                        {% endif %}
                    {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endfor %}
</div>
", "themes/casa_firjan/templates/blocks/block--bannerhome.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/blocks/block--bannerhome.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 6, "if" => 12);
        static $filters = array("escape" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
