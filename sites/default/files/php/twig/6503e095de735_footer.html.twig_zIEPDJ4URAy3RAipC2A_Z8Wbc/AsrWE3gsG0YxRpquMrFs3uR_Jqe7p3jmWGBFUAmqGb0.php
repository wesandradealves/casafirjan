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

/* @casa_firjan/includes/footer.html.twig */
class __TwigTemplate_f948da1a9d7df5d3ac70095bff316d2a extends \Twig\Template
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
        echo "<footer>
  <div id=\"newsletter\" style=\"padding-bottom: 15px;\"></div>
  
  ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalRegion("footer"), "html", null, true);
        echo "
  
  ";
        // line 7
        echo "
  <section class=\"footer\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4 col-sm-4\">
          <p class=\"title\">HORÁRIO DE VISITAÇÃO</p>
          <p style=\"margin: 0;\">
            Terça a domingo: 9h às 19h
          </p>
          <p>
            *Entrada encerrada às 18h30
          </p>
          ";
        // line 25
        echo "          <p class=\"title\">Endereço</p>
          <p>Rua Guilhermina Guinle, 211, Botafogo<br />CEP 22270-060, Rio de Janeiro – RJ</p>

        </div>
        <div class=\"col-md-1 col-sm-1 divisao d-sm-block d-none\"></div>
        <div class=\"col-md-3 col-sm-3 col-lg-4\">
          <p class=\"title\">Confira nossas redes sociais</p>
          <ul class=\"redes\">
            <li><a href=\"https://www.instagram.com/casafirjan/\" target=\"_blank\"><i class=\"icon-instagram\"></i><span>Siga
                  @casafirjan</span></a></li>
            ";
        // line 36
        echo "            <li><a href=\"https://www.linkedin.com/company/firjan/\" target=\"_blank\"><i
                  class=\"icon-linkedin\"></i><span>Siga a Firjan</span></a></li>
          </ul>
        </div>
        <div class=\"col-md-3 col-sm-4\">
          <ul class=\"logos\">
            <li><a href=\"https://www.firjan.com.br/firjan/\" target=\"_blank\"><img
                  src=\"/";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 43, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 43, $this->source)), "html", null, true);
        echo "/statics/img/logo-firjan.svg\" alt=\"Logo Firjan\" /></a></li>
            <li><a href=\"https://www.firjan.com.br/senai/\" target=\"_blank\"><img
                  src=\"/";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 45, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 45, $this->source)), "html", null, true);
        echo "/statics/img/logo-firjan-senai.svg\" alt=\"Logo Senai\" /></a></li>
            <li><a href=\"https://www.firjan.com.br/sesi/\" target=\"_blank\"><img
                  src=\"/";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 47, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 47, $this->source)), "html", null, true);
        echo "/statics/img/logo-firjan-sesi.svg\" alt=\"Logo Sesi\" /></a></li>
            <li><a href=\"https://www.firjan.com.br/iel/\" target=\"_blank\"><img
                  src=\"/";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 49, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 49, $this->source)), "html", null, true);
        echo "/statics/img/logo-firjan-iel.svg\" alt=\"Logo Iel\" /></a></li>
            <li><a href=\"https://www.firjan.com.br/firjancirj/\" target=\"_blank\"><img
                  src=\"/";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 51, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 51, $this->source)), "html", null, true);
        echo "/statics/img/logo-firjan-cirj.svg\" alt=\"Logo Cirj\" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class=\"copy\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6\">
          <p>© Casa Firjan, ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". Todos direitos reservados.</p>
        </div>
        <div class=\"col-md-6\">
          <ul class=\"menuFooter\">
            <li><a href=\"https://www.firjan.com.br/\">Firjan</a></li>
            ";
        // line 67
        echo "            <li><a href=\"/termo-de-privacidade\">Termo de privacidade</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div class=\"box-cookies hide\">
    <div class=\"lgpd-body\">
      <p>Utilizamos cookies para uma melhor experiência de navegação. Ao continuar no site você estará de acordo com a
        nossa <a href=\"/termo-de-privacidade\">Política de Privacidade</a>.</p>
    </div>
    <div class=\"btn-cookies\">Aceito</div>
  </div>

</footer>
";
    }

    public function getTemplateName()
    {
        return "@casa_firjan/includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 67,  117 => 61,  104 => 51,  99 => 49,  94 => 47,  89 => 45,  84 => 43,  75 => 36,  63 => 25,  49 => 7,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
  <div id=\"newsletter\" style=\"padding-bottom: 15px;\"></div>
  
  {{ drupal_region('footer') }}
  
  {#{% include '@casa_firjan/includes/newsletter.html.twig' %}#}

  <section class=\"footer\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4 col-sm-4\">
          <p class=\"title\">HORÁRIO DE VISITAÇÃO</p>
          <p style=\"margin: 0;\">
            Terça a domingo: 9h às 19h
          </p>
          <p>
            *Entrada encerrada às 18h30
          </p>
          {#<p>
\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t*A reabertura da Casa Firjan está sendo realizada por etapas. No momento, apenas os jardins estão abertos ao público.
\t\t\t\t\t\t</small>q
\t\t\t\t\t\t
\t\t\t\t\t</p>#}
          <p class=\"title\">Endereço</p>
          <p>Rua Guilhermina Guinle, 211, Botafogo<br />CEP 22270-060, Rio de Janeiro – RJ</p>

        </div>
        <div class=\"col-md-1 col-sm-1 divisao d-sm-block d-none\"></div>
        <div class=\"col-md-3 col-sm-3 col-lg-4\">
          <p class=\"title\">Confira nossas redes sociais</p>
          <ul class=\"redes\">
            <li><a href=\"https://www.instagram.com/casafirjan/\" target=\"_blank\"><i class=\"icon-instagram\"></i><span>Siga
                  @casafirjan</span></a></li>
            {# <li><a href=\"https://www.facebook.com/groups/casafirjan/\" target=\"_blank\"><i class=\"icon-facebook\"></i><span>Participe do nosso grupo</span></a></li> #}
            <li><a href=\"https://www.linkedin.com/company/firjan/\" target=\"_blank\"><i
                  class=\"icon-linkedin\"></i><span>Siga a Firjan</span></a></li>
          </ul>
        </div>
        <div class=\"col-md-3 col-sm-4\">
          <ul class=\"logos\">
            <li><a href=\"https://www.firjan.com.br/firjan/\" target=\"_blank\"><img
                  src=\"/{{ base_path ~ directory }}/statics/img/logo-firjan.svg\" alt=\"Logo Firjan\" /></a></li>
            <li><a href=\"https://www.firjan.com.br/senai/\" target=\"_blank\"><img
                  src=\"/{{ base_path ~ directory }}/statics/img/logo-firjan-senai.svg\" alt=\"Logo Senai\" /></a></li>
            <li><a href=\"https://www.firjan.com.br/sesi/\" target=\"_blank\"><img
                  src=\"/{{ base_path ~ directory }}/statics/img/logo-firjan-sesi.svg\" alt=\"Logo Sesi\" /></a></li>
            <li><a href=\"https://www.firjan.com.br/iel/\" target=\"_blank\"><img
                  src=\"/{{ base_path ~ directory }}/statics/img/logo-firjan-iel.svg\" alt=\"Logo Iel\" /></a></li>
            <li><a href=\"https://www.firjan.com.br/firjancirj/\" target=\"_blank\"><img
                  src=\"/{{ base_path ~ directory }}/statics/img/logo-firjan-cirj.svg\" alt=\"Logo Cirj\" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class=\"copy\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6\">
          <p>© Casa Firjan, {{ \"now\"|date(\"Y\") }}. Todos direitos reservados.</p>
        </div>
        <div class=\"col-md-6\">
          <ul class=\"menuFooter\">
            <li><a href=\"https://www.firjan.com.br/\">Firjan</a></li>
            {#<li><a href=\"/termos-de-uso\">Termos de uso</a></li>#}
            <li><a href=\"/termo-de-privacidade\">Termo de privacidade</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div class=\"box-cookies hide\">
    <div class=\"lgpd-body\">
      <p>Utilizamos cookies para uma melhor experiência de navegação. Ao continuar no site você estará de acordo com a
        nossa <a href=\"/termo-de-privacidade\">Política de Privacidade</a>.</p>
    </div>
    <div class=\"btn-cookies\">Aceito</div>
  </div>

</footer>
", "@casa_firjan/includes/footer.html.twig", "C:\\xampp\\htdocs\\CasaFirjan\\themes\\casa_firjan\\templates\\includes\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4, "date" => 61);
        static $functions = array("drupal_region" => 4);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
                ['drupal_region']
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
