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

/* themes/casa_firjan/templates/blocks/block-content--formularios.html.twig */
class __TwigTemplate_6dd5d4d47a20b586de96a32d18979c4a extends \Twig\Template
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
        echo "<section class=\"bloco-destaque --formulario pt-5 pb-5\">
    <div class=\"container\">
        <div class=\"d-flex flex-wrap\">
            <div class=\"bloco-destaque--header mb-4 col-12 ps-0 pe-0\">
                <h3 class=\"title d-flex align-items-center justify-content-between m-0 mb-4\">
                    <span>
                        ";
        // line 7
        if (($context["title"] ?? null)) {
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 7, $this->source), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#context"] ?? null) : null), "value", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo " 
                        ";
        }
        // line 9
        echo "                    </span>
                </h3>
                <h4 class=\"subtitle m-0 mt-2\">";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitulo", [], "any", false, false, true, 11), 0, [], "any", false, false, true, 11)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#context"] ?? null) : null), "value", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</h4>
            </div>
            ";
        // line 13
        if (($context["tid"] ?? null)) {
            // line 14
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("webform", $this->sandbox->ensureToStringAllowed(($context["tid"] ?? null), 14, $this->source)), "html", null, true);
            echo "
            ";
        }
        // line 16
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/blocks/block-content--formularios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  69 => 14,  67 => 13,  62 => 11,  58 => 9,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"bloco-destaque --formulario pt-5 pb-5\">
    <div class=\"container\">
        <div class=\"d-flex flex-wrap\">
            <div class=\"bloco-destaque--header mb-4 col-12 ps-0 pe-0\">
                <h3 class=\"title d-flex align-items-center justify-content-between m-0 mb-4\">
                    <span>
                        {% if title %} {{title}} {% else %} {{content.field_titulo.0['#context'].value}} 
                        {% endif %}
                    </span>
                </h3>
                <h4 class=\"subtitle m-0 mt-2\">{{content.field_subtitulo.0['#context'].value}}</h4>
            </div>
            {% if tid %}
                {{ drupal_entity('webform', tid) }}
            {% endif %}
    </div>
</section>", "themes/casa_firjan/templates/blocks/block-content--formularios.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/blocks/block-content--formularios.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("escape" => 7);
        static $functions = array("drupal_entity" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['drupal_entity']
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
