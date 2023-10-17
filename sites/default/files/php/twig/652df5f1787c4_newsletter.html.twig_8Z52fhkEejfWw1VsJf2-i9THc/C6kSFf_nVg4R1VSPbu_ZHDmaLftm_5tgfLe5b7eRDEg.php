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

/* @casa_firjan/includes/newsletter.html.twig */
class __TwigTemplate_e6e07ed9d4809a562f15e066a076af05 extends \Twig\Template
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
        echo "  <section class=\"newsletter\">
    <div class=\"container d-flex p-5\">
      <div class=\"col-3 col-lg-1 d-none d-md-block\">
        <img class=\"img-fluid\" src=\"/";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 4, $this->source), "html", null, true);
        echo "/statics/img/envelope.png\" />
      </div>
      <div class=\"ms-md-3 flex-fill\">
        <p class=\"chamada\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 7, $this->source), "html", null, true);
        echo " <small class=\"d-block mt-3\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 7, $this->source), "html", null, true);
        echo "</small></p>
        ";
        // line 56
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("webform", "newsletter"), "html", null, true);
        echo "

        ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "queryString", [], "any", false, true, true, 58), "sucesso", [], "any", true, true, true, 58)) {
            // line 59
            echo "          <div class=\"msg success center\">Cadastro efetuado com sucesso!<i class=\"icon-close\"></i></div>
        ";
        }
        // line 61
        echo "      </div>
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "@casa_firjan/includes/newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 61,  64 => 59,  62 => 58,  56 => 56,  50 => 7,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <section class=\"newsletter\">
    <div class=\"container d-flex p-5\">
      <div class=\"col-3 col-lg-1 d-none d-md-block\">
        <img class=\"img-fluid\" src=\"/{{directory}}/statics/img/envelope.png\" />
      </div>
      <div class=\"ms-md-3 flex-fill\">
        <p class=\"chamada\">{{title}} <small class=\"d-block mt-3\">{{text}}</small></p>
        {# <form class=\"formNews mt-4 col-12 row d-flex flex-wrap justify-content-between p-0 m-0\"
          action=\"{{customPage.newsletter.form.action}}\" method=\"post\" id=\"newsletter\">
          <div class=\"col-lg-6 pe-lg-4 p-0\">
            <input
              {{ (customPage.newsletter.form.fields.nome.errorMessage is defined) ? ' style=\"border-color:red\"' : '' }}
              type=\"text\" name=\"{{ customPage.newsletter.form.fields.nome.name }}\" class=\"nome\"
              placeholder=\"Informe o seu nome\">
          </div>
          <div class=\"col-lg-6 pe-lg-4 p-0\">
            <input
              {{ (customPage.newsletter.form.fields.sobrenome.errorMessage is defined) ? ' style=\"border-color:red\"' : '' }}
              type=\"text\" name=\"{{ customPage.newsletter.form.fields.sobrenome.name }}\" class=\"nome\"
              placeholder=\"Informe o seu sobrenome\">
          </div>
          <div class=\"col-lg-6 pe-lg-4 p-0\">
            <input
              {{ (customPage.newsletter.form.fields.e_mail.errorMessage is defined) ? ' style=\"border-color:red\"' : '' }}
              type=\"email\" name=\"{{ customPage.newsletter.form.fields.e_mail.name }}\" class=\"email\"
              placeholder=\"Informe o seu e-mail\">
          </div>
          <div class=\"col-lg-6 pe-lg-4 p-0\">
            <input
              {{ (customPage.newsletter.form.fields.celular.errorMessage is defined) ? ' style=\"border-color:red\"' : '' }}
              type=\"phone\" name=\"{{ customPage.newsletter.form.fields.celular.name }}\" class=\"celular\"
              placeholder=\"Informe o seu celular\">
          </div>
          <div class=\"col-12 mt-4 mb-3 d-flex align-items-center p-0\"
            {{ (customPage.newsletter.form.fields.aceite_termos_de_uso.errorMessage is defined) ? ' style=\"border:red 1px solid;\"' : '' }}>
            <div class=\"custom-checkbox\">
              <input type=\"checkbox\" id=\"aceite_termos_de_uso\" class=\"aceite_termos_de_uso\" name=\"aceite_termos_de_uso\"
                value=\"aceito\">
              <label class=\"d-flex align-items-center justify-content-center\" for=\"aceite_termos_de_uso\">
                <i class=\"fa-solid fa-check\"></i>
              </label>
            </div>
            <label for=\"aceite_termos_de_uso\" class=\"ps-2 form-check-label\" for=\"aceite_termos_de_uso\">Li e concordo com os <a
                href=\"/termo-de-privacidade\" target=\"blank\">termos de uso e privacidade</a>.</label>
          </div>
          <div class=\"col-12 mt-4 p-0\">
            {% for name, value in customPage.newsletter.form.hiddens %}
            <input type=\"hidden\" name=\"{{name}}\" value=\"{{value}}\">
            {% endfor %}
            <input type=\"submit\" class=\"btn btnAzul submit\" value=\"Enviar\">
            {% if customPage.queryString.newsletter is defined and customPage.queryString.newsletter == 'sucess' %}
            <div class=\"msg success center\">Cadastro efetuado com sucesso!<i class=\"icon-close\"></i></div>
            {% endif %}
          </div>
        </form> #}
        {{ drupal_entity('webform', 'newsletter') }}

        {% if customPage.queryString.sucesso is defined %}
          <div class=\"msg success center\">Cadastro efetuado com sucesso!<i class=\"icon-close\"></i></div>
        {% endif %}
      </div>
    </div>
  </section>
", "@casa_firjan/includes/newsletter.html.twig", "C:\\xampp\\htdocs\\CasaFirjan\\themes\\casa_firjan\\templates\\includes\\newsletter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 58);
        static $filters = array("escape" => 4);
        static $functions = array("drupal_entity" => 56);

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
