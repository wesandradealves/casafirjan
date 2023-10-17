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

/* themes/casa_firjan/templates/pages/page--termos-de-uso.html.twig */
class __TwigTemplate_0e2f34fa6edc220ec2a59dbd12321c5a extends \Twig\Template
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
        echo "<main class=\"aCasaFirjan\">
  ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "imagem", [], "any", true, true, true, 2) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "imagem", [], "any", false, false, true, 2)))) {
            // line 3
            echo "    <div class=\"banner\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "imagem", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo ");\"></div>
  ";
        }
        // line 5
        echo "  <div class=\"container\">

    <div class=\"row justify-content-center\">
      <div class=\"col-md-12 col-lg-7\">
        <h3 class=\"textBigTitle\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 9), "titulo", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</h3>
        <div class=\"text20 descricao\">
          ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 11), "texto", [], "any", false, false, true, 11), 11, $this->source));
        echo "
        </div>
      </div>
    </div>
  </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/pages/page--termos-de-uso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  56 => 9,  50 => 5,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main class=\"aCasaFirjan\">
  {% if customPage.imagem is defined and customPage.imagem is not empty %}
    <div class=\"banner\" style=\"background-image:url({{ customPage.imagem }});\"></div>
  {% endif %}
  <div class=\"container\">

    <div class=\"row justify-content-center\">
      <div class=\"col-md-12 col-lg-7\">
        <h3 class=\"textBigTitle\">{{ customPage.conteudo.titulo }}</h3>
        <div class=\"text20 descricao\">
          {{ customPage.conteudo.texto|raw }}
        </div>
      </div>
    </div>
  </div>
</main>
", "themes/casa_firjan/templates/pages/page--termos-de-uso.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/pages/page--termos-de-uso.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 3, "raw" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
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
