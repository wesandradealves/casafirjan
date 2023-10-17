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

/* themes/casa_firjan/templates/pages/page--fale-conosco.html.twig */
class __TwigTemplate_b1c768c7a19105b2077670443b8e6cbd extends \Twig\Template
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
        echo "<main class=\"contato\" data-controller=\"contato\">
  <div class=\"container\">
    <!--
        Topo
    -->
    <div class=\"row\">
      <div class=\"col-md-12 col-lg-6\">
        <h3 class=\"textBigTitle\">Contato</h3>
        <div class=\"text20\">
          A Firjan disponibiliza canais para o seu contato direto conosco.
          Preencha o formulário abaixo e envie a sua mensagem ou, caso prefira, fale com a nossa Central de Atendimento.
        </div>
      </div>
    </div>

    <!--
        Formulário de contato
    -->
 
    <div class=\"row\">
      <div class=\"col-lg-8\">
        <!--
        <form action=\"";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 23), "form", [], "any", false, false, true, 23), "action", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "\" id=\"fale-conosco\" method=\"post\">
          <div class=\"form-row\">
            <div class=\"col-lg-12\">
              <div class=\"form-group\">
                <label for=\"nome\">";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 27), "form", [], "any", false, false, true, 27), "fields", [], "any", false, false, true, 27), "nome_completo", [], "any", false, false, true, 27), "label", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "</label>
                <input ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, true, true, 28), "form", [], "any", false, true, true, 28), "fields", [], "any", false, true, true, 28), "nome_completo", [], "any", false, true, true, 28), "errorMessage", [], "any", true, true, true, 28)) ? (" style=\"border: 1px solid red;\"") : ("")));
        echo " type=\"text\" id=\"nome\"
                       class=\"form-control nome\" name=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 29), "form", [], "any", false, false, true, 29), "fields", [], "any", false, false, true, 29), "nome_completo", [], "any", false, false, true, 29), "name", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "\" value=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 29), "form", [], "any", false, false, true, 29), "fields", [], "any", false, false, true, 29), "nome_completo", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "\" required>
              </div>
            </div>
          </div>

          <div class=\"form-row\">
            <div class=\"col-lg-8\">
              <div class=\"form-group\">
                <label for=\"email\">";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 37), "form", [], "any", false, false, true, 37), "fields", [], "any", false, false, true, 37), "e_mail", [], "any", false, false, true, 37), "label", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "</label>
                <input ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, true, true, 38), "form", [], "any", false, true, true, 38), "fields", [], "any", false, true, true, 38), "e_mail", [], "any", false, true, true, 38), "errorMessage", [], "any", true, true, true, 38)) ? (" style=\"border: 1px solid red;\"") : ("")));
        echo " type=\"email\" id=\"email\" class=\"form-control email\"
                       name=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 39), "form", [], "any", false, false, true, 39), "fields", [], "any", false, false, true, 39), "e_mail", [], "any", false, false, true, 39), "name", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "\" value=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 39), "form", [], "any", false, false, true, 39), "fields", [], "any", false, false, true, 39), "e_mail", [], "any", false, false, true, 39), "value", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "\" required>
              </div>
            </div>
            <div class=\"col-lg-4\">
              <div class=\"form-group\">
                <label for=\"telefone\">";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 44), "form", [], "any", false, false, true, 44), "fields", [], "any", false, false, true, 44), "telefone", [], "any", false, false, true, 44), "label", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "</label>
                <input ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, true, true, 45), "form", [], "any", false, true, true, 45), "fields", [], "any", false, true, true, 45), "telefone", [], "any", false, true, true, 45), "errorMessage", [], "any", true, true, true, 45)) ? (" style=\"border: 1px solid red;\"") : ("")));
        echo " type=\"tel\" id=\"telefone\" class=\"form-control telefone\"
                       name=\"";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 46), "form", [], "any", false, false, true, 46), "fields", [], "any", false, false, true, 46), "telefone", [], "any", false, false, true, 46), "name", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "\" value=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 46), "form", [], "any", false, false, true, 46), "fields", [], "any", false, false, true, 46), "telefone", [], "any", false, false, true, 46), "value", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "\">
              </div>
            </div>
          </div>


          <div class=\"form-row tipoContatoLabel\">
            <div class=\"col\">
              <label>";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 54), "form", [], "any", false, false, true, 54), "fields", [], "any", false, false, true, 54), "associado", [], "any", false, false, true, 54), "label", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "</label>
            </div>
          </div>
          <div class=\"form-row tipoContatoRadios\" ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, true, true, 57), "form", [], "any", false, true, true, 57), "fields", [], "any", false, true, true, 57), "associado", [], "any", false, true, true, 57), "errorMessage", [], "any", true, true, true, 57)) ? (" style=\"border: 1px solid red;\"") : ("")));
        echo ">
            <div class=\"col-lg-12\">
              ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 59), "form", [], "any", false, false, true, 59), "fields", [], "any", false, false, true, 59), "associado", [], "any", false, false, true, 59), "options", [], "any", false, false, true, 59));
        foreach ($context['_seq'] as $context["key"] => $context["tipoContato"]) {
            // line 60
            echo "                <div class=\"form-check form-check-inline\">
                  <input ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 61), "form", [], "any", false, false, true, 61), "fields", [], "any", false, false, true, 61), "associado", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61) == twig_get_attribute($this->env, $this->source, $context["tipoContato"], "value", [], "any", false, false, true, 61))) ? (" checked ") : ("")));
            echo " type=\"radio\" id=\"tipoContato";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 61, $this->source), "html", null, true);
            echo "\" value=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tipoContato"], "value", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "\"
                         class=\"form-check-input form-control-sm tipoInformacao\"
                         name=\"";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 63), "form", [], "any", false, false, true, 63), "fields", [], "any", false, false, true, 63), "associado", [], "any", false, false, true, 63), "name", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "\">
                  <label class=\"form-check-label\" for=\"tipoContato";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 64, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tipoContato"], "label", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "</label>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tipoContato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </div>
          </div>


          <div class=\"form-row mt-2 d-none\">
            <div class=\"col-lg-12\">
              <div class=\"form-group\">
                <label for=\"nome\">";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 74), "form", [], "any", false, false, true, 74), "fields", [], "any", false, false, true, 74), "empresa", [], "any", false, false, true, 74), "label", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "</label>
                <input ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, true, true, 75), "form", [], "any", false, true, true, 75), "fields", [], "any", false, true, true, 75), "empresa", [], "any", false, true, true, 75), "errorMessage", [], "any", true, true, true, 75)) ? (" style=\"border: 1px solid red;\"") : ("")));
        echo " type=\"text\" id=\"nome\"
                       class=\"form-control nome\" name=\"";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 76), "form", [], "any", false, false, true, 76), "fields", [], "any", false, false, true, 76), "empresa", [], "any", false, false, true, 76), "name", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "\" value=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 76), "form", [], "any", false, false, true, 76), "fields", [], "any", false, false, true, 76), "empresa", [], "any", false, false, true, 76), "value", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "\" required>
              </div>
            </div>
          </div>


          <div class=\"form-row tipoContatoLabel\">
            <div class=\"col\">
              <label>";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 84), "form", [], "any", false, false, true, 84), "fields", [], "any", false, false, true, 84), "tipo_de_contato", [], "any", false, false, true, 84), "label", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "</label>
            </div>
          </div>
          <div class=\"form-row tipoContatoRadios\" ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, true, true, 87), "form", [], "any", false, true, true, 87), "fields", [], "any", false, true, true, 87), "tipo_de_contato", [], "any", false, true, true, 87), "errorMessage", [], "any", true, true, true, 87)) ? (" style=\"border: 1px solid red;\"") : ("")));
        echo ">
            <div class=\"col-lg-12\">
              ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 89), "form", [], "any", false, false, true, 89), "fields", [], "any", false, false, true, 89), "tipo_de_contato", [], "any", false, false, true, 89), "options", [], "any", false, false, true, 89));
        foreach ($context['_seq'] as $context["key"] => $context["tipoContato"]) {
            // line 90
            echo "                <div class=\"form-check form-check-inline\">
                  <input ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 91), "form", [], "any", false, false, true, 91), "fields", [], "any", false, false, true, 91), "tipo_de_contato", [], "any", false, false, true, 91), "value", [], "any", false, false, true, 91) == twig_get_attribute($this->env, $this->source, $context["tipoContato"], "value", [], "any", false, false, true, 91))) ? (" checked ") : ("")));
            echo " type=\"radio\" id=\"tipoContato";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 91, $this->source), "html", null, true);
            echo "\" value=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tipoContato"], "value", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "\"
                         class=\"form-check-input form-control-sm tipoInformacao\"
                         name=\"";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 93), "form", [], "any", false, false, true, 93), "fields", [], "any", false, false, true, 93), "tipo_de_contato", [], "any", false, false, true, 93), "name", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            echo "\">
                  <label class=\"form-check-label\" for=\"tipoContato";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 94, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tipoContato"], "label", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "</label>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tipoContato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "            </div>
          </div>
          <div class=\"form-row assuntoLabel\">
            <div class=\"col\">
              <label>";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 101), "form", [], "any", false, false, true, 101), "fields", [], "any", false, false, true, 101), "assunto", [], "any", false, false, true, 101), "label", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
        echo "</label>
            </div>
          </div>
          <div class=\"form-row assuntoRadios\" ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, true, true, 104), "form", [], "any", false, true, true, 104), "fields", [], "any", false, true, true, 104), "assunto", [], "any", false, true, true, 104), "errorMessage", [], "any", true, true, true, 104)) ? (" style=\"border: 1px solid red;\"") : ("")));
        echo ">
            <div class=\"col-lg-12\">
              ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 106), "form", [], "any", false, false, true, 106), "fields", [], "any", false, false, true, 106), "assunto", [], "any", false, false, true, 106), "options", [], "any", false, false, true, 106));
        foreach ($context['_seq'] as $context["key"] => $context["assunto"]) {
            // line 107
            echo "                <div class=\"form-check form-check-inline\">
                    ";
            // line 108
            $context["_key"] = twig_replace_filter($this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_slugify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["assunto"], "value", [], "any", false, false, true, 108), 108, $this->source)), ["-" => ""]);
            // line 109
            echo "                    
                    ";
            // line 110
            $context["_assunto"] = twig_replace_filter($this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_slugify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 110), "params", [], "any", false, false, true, 110), "assunto", [], "any", false, false, true, 110), 110, $this->source)), ["-" => ""]);
            // line 111
            echo "                    
                  <input
                    ";
            // line 113
            if ((($context["_assunto"] ?? null) != "na")) {
                // line 114
                echo "                        ";
                // line 115
                echo "                    ";
            } else {
                // line 116
                echo "                        ";
                if ((($context["_key"] ?? null) == ($context["_assunto"] ?? null))) {
                    // line 117
                    echo "                             checked 
                        ";
                }
                // line 119
                echo "                    ";
            }
            // line 120
            echo "                    
                    ";
            // line 121
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 121), "form", [], "any", false, false, true, 121), "fields", [], "any", false, false, true, 121), "assunto", [], "any", false, false, true, 121), "value", [], "any", false, false, true, 121) == twig_get_attribute($this->env, $this->source, $context["assunto"], "value", [], "any", false, false, true, 121))) ? (" checked ") : ("")));
            echo " type=\"radio\" id=\"assunto";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 121, $this->source), "html", null, true);
            echo "\" value=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["assunto"], "value", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "\"
                         class=\"form-check-input form-control-sm educacao\"
                         name=\"";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 123), "form", [], "any", false, false, true, 123), "fields", [], "any", false, false, true, 123), "assunto", [], "any", false, false, true, 123), "name", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "\">
                  <label class=\"form-check-label\" for=\"assunto";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 124, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["assunto"], "label", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "</label>

                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['assunto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col-lg-12\">
              <div class=\"form-group\">
                <label for=\"email\">";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 133), "form", [], "any", false, false, true, 133), "fields", [], "any", false, false, true, 133), "mensagem", [], "any", false, false, true, 133), "label", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "</label>
                <textarea ";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, true, true, 134), "form", [], "any", false, true, true, 134), "fields", [], "any", false, true, true, 134), "mensagem", [], "any", false, true, true, 134), "errorMessage", [], "any", true, true, true, 134)) ? (" style=\"border: 1px solid red;\"") : ("")));
        echo " name=\"mensagem\" id=\"mensagem\" class=\"form-control mensagem\"
                          name=\"";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 135), "form", [], "any", false, false, true, 135), "fields", [], "any", false, false, true, 135), "mensagem", [], "any", false, false, true, 135), "name", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
        echo "\" cols=\"30\" rows=\"7\"
                          required>";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 136), "form", [], "any", false, false, true, 136), "fields", [], "any", false, false, true, 136), "mensagem", [], "any", false, false, true, 136), "value", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
          <div class=\"form-row justify-content-end\">
            <div class=\"col-lg-3\">
              <div class=\"form-group\">
                ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "faleConosco", [], "any", false, false, true, 143), "form", [], "any", false, false, true, 143), "hiddens", [], "any", false, false, true, 143));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 144
            echo "                  <input type=\"hidden\" name=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 144, $this->source), "html", null, true);
            echo "\" value=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 144, $this->source), "html", null, true);
            echo "\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                <input type=\"submit\" class=\"form-control btnAzul submit\" name=\"submit\" value=\"Enviar\">
                <p class=\"d-block text-end mt-2\">* Campos obrigatórios</p>
              </div>
            </div>
          </div>

          ";
        // line 152
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "queryString", [], "any", false, true, true, 152), "contato", [], "any", true, true, true, 152) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "queryString", [], "any", false, false, true, 152), "contato", [], "any", false, false, true, 152) == "sucess"))) {
            // line 153
            echo "          <div class=\"msg success center\">Contato enviado com sucesso!<i class=\"icon-close\"></i></div>
          ";
        }
        // line 155
        echo "
        </form>
        -->
        ";
        // line 158
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("webform", "fale_conosco"), "html", null, true);
        echo "

        ";
        // line 160
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "queryString", [], "any", false, false, true, 160), "sucesso", [], "any", false, false, true, 160)) {
            // line 161
            echo "          <div class=\"msg success center\">Contato enviado com sucesso!<i class=\"icon-close\"></i></div>
        ";
        }
        // line 162
        echo "        

        <p class=\"d-block text-end\">* Campos obrigatórios</p>
      </div>
      <div class=\"offset-lg-1 col-lg-3 outrosContatos\">
        <div class=\"text21\">
          ";
        // line 168
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 168), "texto", [], "any", false, false, true, 168), 168, $this->source));
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
        return "themes/casa_firjan/templates/pages/page--fale-conosco.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 168,  398 => 162,  394 => 161,  392 => 160,  387 => 158,  382 => 155,  378 => 153,  376 => 152,  368 => 146,  357 => 144,  353 => 143,  343 => 136,  339 => 135,  335 => 134,  331 => 133,  324 => 128,  312 => 124,  308 => 123,  299 => 121,  296 => 120,  293 => 119,  289 => 117,  286 => 116,  283 => 115,  281 => 114,  279 => 113,  275 => 111,  273 => 110,  270 => 109,  268 => 108,  265 => 107,  261 => 106,  256 => 104,  250 => 101,  244 => 97,  233 => 94,  229 => 93,  220 => 91,  217 => 90,  213 => 89,  208 => 87,  202 => 84,  189 => 76,  185 => 75,  181 => 74,  172 => 67,  161 => 64,  157 => 63,  148 => 61,  145 => 60,  141 => 59,  136 => 57,  130 => 54,  117 => 46,  113 => 45,  109 => 44,  99 => 39,  95 => 38,  91 => 37,  78 => 29,  74 => 28,  70 => 27,  63 => 23,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main class=\"contato\" data-controller=\"contato\">
  <div class=\"container\">
    <!--
        Topo
    -->
    <div class=\"row\">
      <div class=\"col-md-12 col-lg-6\">
        <h3 class=\"textBigTitle\">Contato</h3>
        <div class=\"text20\">
          A Firjan disponibiliza canais para o seu contato direto conosco.
          Preencha o formulário abaixo e envie a sua mensagem ou, caso prefira, fale com a nossa Central de Atendimento.
        </div>
      </div>
    </div>

    <!--
        Formulário de contato
    -->
 
    <div class=\"row\">
      <div class=\"col-lg-8\">
        <!--
        <form action=\"{{ customPage.faleConosco.form.action }}\" id=\"fale-conosco\" method=\"post\">
          <div class=\"form-row\">
            <div class=\"col-lg-12\">
              <div class=\"form-group\">
                <label for=\"nome\">{{ customPage.faleConosco.form.fields.nome_completo.label }}</label>
                <input {{ (customPage.faleConosco.form.fields.nome_completo.errorMessage is defined) ? ' style=\"border: 1px solid red;\"' : '' }} type=\"text\" id=\"nome\"
                       class=\"form-control nome\" name=\"{{ customPage.faleConosco.form.fields.nome_completo.name }}\" value=\"{{ customPage.faleConosco.form.fields.nome_completo.value }}\" required>
              </div>
            </div>
          </div>

          <div class=\"form-row\">
            <div class=\"col-lg-8\">
              <div class=\"form-group\">
                <label for=\"email\">{{ customPage.faleConosco.form.fields.e_mail.label }}</label>
                <input {{ (customPage.faleConosco.form.fields.e_mail.errorMessage is defined) ? ' style=\"border: 1px solid red;\"' : '' }} type=\"email\" id=\"email\" class=\"form-control email\"
                       name=\"{{ customPage.faleConosco.form.fields.e_mail.name }}\" value=\"{{ customPage.faleConosco.form.fields.e_mail.value }}\" required>
              </div>
            </div>
            <div class=\"col-lg-4\">
              <div class=\"form-group\">
                <label for=\"telefone\">{{ customPage.faleConosco.form.fields.telefone.label }}</label>
                <input {{ (customPage.faleConosco.form.fields.telefone.errorMessage is defined) ? ' style=\"border: 1px solid red;\"' : '' }} type=\"tel\" id=\"telefone\" class=\"form-control telefone\"
                       name=\"{{ customPage.faleConosco.form.fields.telefone.name }}\" value=\"{{ customPage.faleConosco.form.fields.telefone.value }}\">
              </div>
            </div>
          </div>


          <div class=\"form-row tipoContatoLabel\">
            <div class=\"col\">
              <label>{{ customPage.faleConosco.form.fields.associado.label }}</label>
            </div>
          </div>
          <div class=\"form-row tipoContatoRadios\" {{ (customPage.faleConosco.form.fields.associado.errorMessage is defined) ? ' style=\"border: 1px solid red;\"' : '' }}>
            <div class=\"col-lg-12\">
              {% for key,tipoContato in customPage.faleConosco.form.fields.associado.options %}
                <div class=\"form-check form-check-inline\">
                  <input {{ customPage.faleConosco.form.fields.associado.value == tipoContato.value ? ' checked ' : '' }} type=\"radio\" id=\"tipoContato{{ key }}\" value=\"{{ tipoContato.value }}\"
                         class=\"form-check-input form-control-sm tipoInformacao\"
                         name=\"{{ customPage.faleConosco.form.fields.associado.name }}\">
                  <label class=\"form-check-label\" for=\"tipoContato{{ key }}\">{{ tipoContato.label }}</label>
                </div>
              {% endfor %}
            </div>
          </div>


          <div class=\"form-row mt-2 d-none\">
            <div class=\"col-lg-12\">
              <div class=\"form-group\">
                <label for=\"nome\">{{ customPage.faleConosco.form.fields.empresa.label }}</label>
                <input {{ (customPage.faleConosco.form.fields.empresa.errorMessage is defined) ? ' style=\"border: 1px solid red;\"' : '' }} type=\"text\" id=\"nome\"
                       class=\"form-control nome\" name=\"{{ customPage.faleConosco.form.fields.empresa.name }}\" value=\"{{ customPage.faleConosco.form.fields.empresa.value }}\" required>
              </div>
            </div>
          </div>


          <div class=\"form-row tipoContatoLabel\">
            <div class=\"col\">
              <label>{{ customPage.faleConosco.form.fields.tipo_de_contato.label }}</label>
            </div>
          </div>
          <div class=\"form-row tipoContatoRadios\" {{ (customPage.faleConosco.form.fields.tipo_de_contato.errorMessage is defined) ? ' style=\"border: 1px solid red;\"' : '' }}>
            <div class=\"col-lg-12\">
              {% for key,tipoContato in customPage.faleConosco.form.fields.tipo_de_contato.options %}
                <div class=\"form-check form-check-inline\">
                  <input {{ customPage.faleConosco.form.fields.tipo_de_contato.value == tipoContato.value ? ' checked ' : '' }} type=\"radio\" id=\"tipoContato{{ key }}\" value=\"{{ tipoContato.value }}\"
                         class=\"form-check-input form-control-sm tipoInformacao\"
                         name=\"{{ customPage.faleConosco.form.fields.tipo_de_contato.name }}\">
                  <label class=\"form-check-label\" for=\"tipoContato{{ key }}\">{{ tipoContato.label }}</label>
                </div>
              {% endfor %}
            </div>
          </div>
          <div class=\"form-row assuntoLabel\">
            <div class=\"col\">
              <label>{{ customPage.faleConosco.form.fields.assunto.label }}</label>
            </div>
          </div>
          <div class=\"form-row assuntoRadios\" {{ (customPage.faleConosco.form.fields.assunto.errorMessage is defined) ? ' style=\"border: 1px solid red;\"' : '' }}>
            <div class=\"col-lg-12\">
              {% for key,assunto in customPage.faleConosco.form.fields.assunto.options %}
                <div class=\"form-check form-check-inline\">
                    {% set _key = slugify(assunto.value)|replace({'-': ''}) %}
                    
                    {% set _assunto = slugify(customPage.faleConosco.params.assunto)|replace({'-': ''}) %}
                    
                  <input
                    {% if _assunto != 'na' %}
                        {# able #}
                    {% else %}
                        {% if _key == _assunto %}
                             checked 
                        {% endif %}
                    {% endif %}
                    
                    {{ customPage.faleConosco.form.fields.assunto.value == assunto.value ? ' checked ' : '' }} type=\"radio\" id=\"assunto{{ key }}\" value=\"{{ assunto.value }}\"
                         class=\"form-check-input form-control-sm educacao\"
                         name=\"{{ customPage.faleConosco.form.fields.assunto.name }}\">
                  <label class=\"form-check-label\" for=\"assunto{{ key }}\">{{ assunto.label }}</label>

                </div>
              {% endfor %}
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col-lg-12\">
              <div class=\"form-group\">
                <label for=\"email\">{{ customPage.faleConosco.form.fields.mensagem.label }}</label>
                <textarea {{ (customPage.faleConosco.form.fields.mensagem.errorMessage is defined) ? ' style=\"border: 1px solid red;\"' : '' }} name=\"mensagem\" id=\"mensagem\" class=\"form-control mensagem\"
                          name=\"{{ customPage.faleConosco.form.fields.mensagem.name }}\" cols=\"30\" rows=\"7\"
                          required>{{ customPage.faleConosco.form.fields.mensagem.value }}</textarea>
              </div>
            </div>
          </div>
          <div class=\"form-row justify-content-end\">
            <div class=\"col-lg-3\">
              <div class=\"form-group\">
                {% for name, value in customPage.faleConosco.form.hiddens %}
                  <input type=\"hidden\" name=\"{{ name }}\" value=\"{{ value }}\">
                {% endfor %}
                <input type=\"submit\" class=\"form-control btnAzul submit\" name=\"submit\" value=\"Enviar\">
                <p class=\"d-block text-end mt-2\">* Campos obrigatórios</p>
              </div>
            </div>
          </div>

          {% if customPage.queryString.contato is defined and customPage.queryString.contato == 'sucess' %}
          <div class=\"msg success center\">Contato enviado com sucesso!<i class=\"icon-close\"></i></div>
          {% endif %}

        </form>
        -->
        {{ drupal_entity('webform', 'fale_conosco') }}

        {% if customPage.queryString.sucesso %}
          <div class=\"msg success center\">Contato enviado com sucesso!<i class=\"icon-close\"></i></div>
        {% endif %}        

        <p class=\"d-block text-end\">* Campos obrigatórios</p>
      </div>
      <div class=\"offset-lg-1 col-lg-3 outrosContatos\">
        <div class=\"text21\">
          {{ customPage.conteudo.texto|raw }}
        </div>
      </div>
    </div> 
    
  </div>
</main>
", "themes/casa_firjan/templates/pages/page--fale-conosco.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/pages/page--fale-conosco.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 59, "set" => 108, "if" => 113);
        static $filters = array("escape" => 23, "replace" => 108, "raw" => 168);
        static $functions = array("slugify" => 108, "drupal_entity" => 158);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'replace', 'raw'],
                ['slugify', 'drupal_entity']
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
