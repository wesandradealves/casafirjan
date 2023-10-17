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

/* themes/casa_firjan/templates/blocks/block-content--bloco_texto.html.twig */
class __TwigTemplate_7d649b4f62287a693ccdea297af6f257 extends \Twig\Template
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
        echo "<section style=\"background-image: url(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bg"] ?? null), 1, $this->source), "html", null, true);
        echo ")\" class=\"bloco-texto ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_classes", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#context"] ?? null) : null), "value", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "\" data-layout=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_slugify($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tema", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#markup"] ?? null) : null), 1, $this->source)), "html", null, true);
        echo "\">
    <div class=\"container pt-5 pb-5\">
        <div class=\"d-block\">
            <h2 class=\"title mb-4 d-block\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source), "html", null, true);
        echo "</h2>
            <div class=\"text d-block\">
                ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
            </div>
        </div>        
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/blocks/block-content--bloco_texto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  50 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section style=\"background-image: url({{bg}})\" class=\"bloco-texto {{content.field_classes.0['#context'].value}}\" data-layout=\"{{slugify(content.field_tema.0[\"#markup\"])}}\">
    <div class=\"container pt-5 pb-5\">
        <div class=\"d-block\">
            <h2 class=\"title mb-4 d-block\">{{title}}</h2>
            <div class=\"text d-block\">
                {{content.body}}
            </div>
        </div>        
    </div>
</section>", "themes/casa_firjan/templates/blocks/block-content--bloco_texto.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/blocks/block-content--bloco_texto.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array("slugify" => 1);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['slugify']
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
