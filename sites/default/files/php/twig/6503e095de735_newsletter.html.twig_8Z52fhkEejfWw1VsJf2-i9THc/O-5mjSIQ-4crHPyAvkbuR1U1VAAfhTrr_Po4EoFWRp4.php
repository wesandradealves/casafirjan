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
        <form class=\"formNews mt-4 col-12 row d-flex flex-wrap justify-content-between p-0 m-0\"
          action=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "newsletter", [], "any", false, false, true, 9), "form", [], "any", false, false, true, 9), "action", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\" method=\"post\" id=\"newsletter\">
          <div class=\"col-lg-6 pe-lg-4 p-0\">
            <input
              ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "newsletter", [], "any", false, true, true, 12), "form", [], "any", false, true, true, 12), "fields", [], "any", false, true, true, 12), "nome", [], "any", false, true, true, 12), "errorMessage", [], "any", true, true, true, 12)) ? (" style=\"border-color:red\"") : ("")));
        echo "
              type=\"text\" name=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "newsletter", [], "any", false, false, true, 13), "form", [], "any", false, false, true, 13), "fields", [], "any", false, false, true, 13), "nome", [], "any", false, false, true, 13), "name", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\" class=\"nome\"
              placeholder=\"Informe o seu nome\">
          </div>
          <div class=\"col-lg-6 pe-lg-4 p-0\">
            <input
              ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "newsletter", [], "any", false, true, true, 18), "form", [], "any", false, true, true, 18), "fields", [], "any", false, true, true, 18), "sobrenome", [], "any", false, true, true, 18), "errorMessage", [], "any", true, true, true, 18)) ? (" style=\"border-color:red\"") : ("")));
        echo "
              type=\"text\" name=\"";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "newsletter", [], "any", false, false, true, 19), "form", [], "any", false, false, true, 19), "fields", [], "any", false, false, true, 19), "sobrenome", [], "any", false, false, true, 19), "name", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "\" class=\"nome\"
              placeholder=\"Informe o seu sobrenome\">
          </div>
          <div class=\"col-lg-6 pe-lg-4 p-0\">
            <input
              ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "newsletter", [], "any", false, true, true, 24), "form", [], "any", false, true, true, 24), "fields", [], "any", false, true, true, 24), "e_mail", [], "any", false, true, true, 24), "errorMessage", [], "any", true, true, true, 24)) ? (" style=\"border-color:red\"") : ("")));
        echo "
              type=\"email\" name=\"";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "newsletter", [], "any", false, false, true, 25), "form", [], "any", false, false, true, 25), "fields", [], "any", false, false, true, 25), "e_mail", [], "any", false, false, true, 25), "name", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "\" class=\"email\"
              placeholder=\"Informe o seu e-mail\">
          </div>
          <div class=\"col-lg-6 pe-lg-4 p-0\">
            <input
              ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "newsletter", [], "any", false, true, true, 30), "form", [], "any", false, true, true, 30), "fields", [], "any", false, true, true, 30), "celular", [], "any", false, true, true, 30), "errorMessage", [], "any", true, true, true, 30)) ? (" style=\"border-color:red\"") : ("")));
        echo "
              type=\"phone\" name=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "newsletter", [], "any", false, false, true, 31), "form", [], "any", false, false, true, 31), "fields", [], "any", false, false, true, 31), "celular", [], "any", false, false, true, 31), "name", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "\" class=\"celular\"
              placeholder=\"Informe o seu celular\">
          </div>
          <div class=\"col-12 mt-4 mb-3 d-flex align-items-center p-0\"
            ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "newsletter", [], "any", false, true, true, 35), "form", [], "any", false, true, true, 35), "fields", [], "any", false, true, true, 35), "aceite_termos_de_uso", [], "any", false, true, true, 35), "errorMessage", [], "any", true, true, true, 35)) ? (" style=\"border:red 1px solid;\"") : ("")));
        echo ">
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
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "newsletter", [], "any", false, false, true, 47), "form", [], "any", false, false, true, 47), "hiddens", [], "any", false, false, true, 47));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 48
            echo "            <input type=\"hidden\" name=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 48, $this->source), "html", null, true);
            echo "\" value=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 48, $this->source), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            <input type=\"submit\" class=\"btn btnAzul submit\" value=\"Enviar\">
            ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "queryString", [], "any", false, true, true, 51), "newsletter", [], "any", true, true, true, 51) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "queryString", [], "any", false, false, true, 51), "newsletter", [], "any", false, false, true, 51) == "sucess"))) {
            // line 52
            echo "            <div class=\"msg success center\">Cadastro efetuado com sucesso!<i class=\"icon-close\"></i></div>
            ";
        }
        // line 54
        echo "          </div>
        </form>
      </div>
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
        return array (  149 => 54,  145 => 52,  143 => 51,  140 => 50,  129 => 48,  125 => 47,  110 => 35,  103 => 31,  99 => 30,  91 => 25,  87 => 24,  79 => 19,  75 => 18,  67 => 13,  63 => 12,  57 => 9,  50 => 7,  44 => 4,  39 => 1,);
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
        <form class=\"formNews mt-4 col-12 row d-flex flex-wrap justify-content-between p-0 m-0\"
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
        </form>
      </div>
    </div>
  </section>
", "@casa_firjan/includes/newsletter.html.twig", "C:\\xampp\\htdocs\\CasaFirjan\\themes\\casa_firjan\\templates\\includes\\newsletter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 47, "if" => 51);
        static $filters = array("escape" => 4);
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
