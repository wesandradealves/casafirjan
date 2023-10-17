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

/* themes/casa_firjan/templates/pages/page--agenda-detalhe.html.twig */
class __TwigTemplate_f7234b7f7c36e0cbb37a5d10e840a4c3 extends \Twig\Template
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
        echo "<main class=\"detalheEvento\">
  <article>
    <div class=\"container\">
      <!--
          Topo
      -->
      <div class=\"row topo\">
        <div class=\"col\">
          <a href=\"/agenda\" class=\"textCat\">Agenda</a>
          <h3 class=\"textBigTitle\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 10), "titulo", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</h3>
          <div id=\"custom-edit-content\" align=\"right\">
            ";
        // line 12
        if (($context["is_admin"] ?? null)) {
            // line 13
            echo "              <!-- SE PERFIL == ADMINISTRADOR -->
              <a href=\"";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 14), "edit", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\" title=\"Editar conteúdo\"><img src=\"/themes/casa_firjan/statics/img/pencil-square.svg\" width=\"28\"/></a> 
            ";
        }
        // line 15
        echo "                 
          </div>
        </div>
      </div>
      <!--
          Corpo do conteúdo
      -->

      ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 23), "status", [], "any", false, false, true, 23) == 1)) {
            // line 24
            echo "
      <div class=\"row conteudo\">
        <div class=\"col-sm-12 col-lg-8\">
          <div class=\"data\">";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 27), "data", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</div>
          ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 28), "imagem", [], "any", false, false, true, 28), "src", [], "any", false, false, true, 28)) {
                // line 29
                echo "          <div class=\"arte\">
            <img src=\"";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 30), "imagem", [], "any", false, false, true, 30), "src", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "\" alt=\"Arte do evento\">
              ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 31), "imagem", [], "any", false, false, true, 31), "legenda", [], "any", false, false, true, 31)) {
                    // line 32
                    echo "                <span>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 32), "imagem", [], "any", false, false, true, 32), "legenda", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                    echo "</span>
              ";
                }
                // line 34
                echo "          </div>
          ";
            }
            // line 36
            echo "          <div class=\"text20\">
            ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 37), "texto", [], "any", false, false, true, 37), 37, $this->source));
            echo "
          </div>
        </div>
        
        <div class=\"col-lg-4\">
          <div class=\"informacoes\">
            <p class=\"text20 bold\">SERVIÇO</p>
            <p class=\"text20\"><span>Data:</span> ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 44), "data", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "</p>
            ";
            // line 46
            echo "            <p class=\"text20\"><span>Horário:</span> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 46), "start_time", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</p>
            <p class=\"text20\"><span>Tipo:</span> ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 47), "categoria", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "</p>
            <p class=\"text20\"><span>Preço:</span> ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 48), "preco", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "</p>
            ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, true, true, 49), "formUrl", [], "any", true, true, true, 49) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 49), "formUrl", [], "any", false, false, true, 49)))) {
                // line 50
                echo "              <a target=\"_blank\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 50), "formUrl", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "\" class=\"btnAzul\" target=\"_blank\" ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 50), "codigoga", [], "any", false, false, true, 50))) {
                    echo " onclick=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 50), "codigoga", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                    echo "\" ";
                }
                echo " >";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 50), "textoLinkForm", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 52
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, true, true, 52), "ingresso", [], "any", true, true, true, 52) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 52), "ingresso", [], "any", false, false, true, 52)))) {
                    // line 53
                    echo "                <a target=\"_blank\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 53), "ingresso", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                    echo "\" class=\"btnAzul\" ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 53), "codigoga", [], "any", false, false, true, 53))) {
                        echo " onclick=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 53), "codigoga", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo "\" ";
                    }
                    echo " >";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 53), "textoLinkIngresso", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                    echo "</a>
              ";
                }
                // line 55
                echo "            ";
            }
            // line 56
            echo "            <a href=\"/agenda\" class=\"verEventos\">Ver todos os eventos ></a>
          </div>
        </div>
      </div>
      ";
        } else {
            // line 61
            echo "
        <div class=\"alert alert-info\">Conteúdo indisponível no momento!</div>

      ";
        }
        // line 65
        echo "
      ";
        // line 94
        echo "
    </div>
  </article>
</main>";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/pages/page--agenda-detalhe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 94,  186 => 65,  180 => 61,  173 => 56,  170 => 55,  156 => 53,  153 => 52,  139 => 50,  137 => 49,  133 => 48,  129 => 47,  124 => 46,  120 => 44,  110 => 37,  107 => 36,  103 => 34,  97 => 32,  95 => 31,  91 => 30,  88 => 29,  86 => 28,  82 => 27,  77 => 24,  75 => 23,  65 => 15,  60 => 14,  57 => 13,  55 => 12,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main class=\"detalheEvento\">
  <article>
    <div class=\"container\">
      <!--
          Topo
      -->
      <div class=\"row topo\">
        <div class=\"col\">
          <a href=\"/agenda\" class=\"textCat\">Agenda</a>
          <h3 class=\"textBigTitle\">{{ customPage.conteudo.titulo }}</h3>
          <div id=\"custom-edit-content\" align=\"right\">
            {% if is_admin %}
              <!-- SE PERFIL == ADMINISTRADOR -->
              <a href=\"{{ customPage.conteudo.edit }}\" title=\"Editar conteúdo\"><img src=\"/themes/casa_firjan/statics/img/pencil-square.svg\" width=\"28\"/></a> 
            {% endif %}                 
          </div>
        </div>
      </div>
      <!--
          Corpo do conteúdo
      -->

      {% if customPage.conteudo.status == 1 %}

      <div class=\"row conteudo\">
        <div class=\"col-sm-12 col-lg-8\">
          <div class=\"data\">{{ customPage.conteudo.data }}</div>
          {% if customPage.conteudo.imagem.src %}
          <div class=\"arte\">
            <img src=\"{{ customPage.conteudo.imagem.src }}\" alt=\"Arte do evento\">
              {% if customPage.conteudo.imagem.legenda %}
                <span>{{ customPage.conteudo.imagem.legenda }}</span>
              {% endif %}
          </div>
          {% endif %}
          <div class=\"text20\">
            {{ customPage.conteudo.texto|raw }}
          </div>
        </div>
        
        <div class=\"col-lg-4\">
          <div class=\"informacoes\">
            <p class=\"text20 bold\">SERVIÇO</p>
            <p class=\"text20\"><span>Data:</span> {{ customPage.conteudo.data }}</p>
            {# <p class=\"text20\"><span>Horário:</span> {{ customPage.conteudo.horario }}</p> #}
            <p class=\"text20\"><span>Horário:</span> {{ customPage.conteudo.start_time }}</p>
            <p class=\"text20\"><span>Tipo:</span> {{ customPage.conteudo.categoria }}</p>
            <p class=\"text20\"><span>Preço:</span> {{ customPage.conteudo.preco }}</p>
            {% if customPage.conteudo.formUrl is defined and customPage.conteudo.formUrl is not empty%}
              <a target=\"_blank\" href=\"{{ customPage.conteudo.formUrl }}\" class=\"btnAzul\" target=\"_blank\" {% if customPage.conteudo.codigoga is not empty %} onclick=\"{{ customPage.conteudo.codigoga }}\" {% endif %} >{{ customPage.conteudo.textoLinkForm }}</a>
            {% else %}
              {% if customPage.conteudo.ingresso is defined and customPage.conteudo.ingresso is not empty%}
                <a target=\"_blank\" href=\"{{ customPage.conteudo.ingresso }}\" class=\"btnAzul\" {% if customPage.conteudo.codigoga is not empty %} onclick=\"{{ customPage.conteudo.codigoga }}\" {% endif %} >{{ customPage.conteudo.textoLinkIngresso }}</a>
              {% endif %}
            {%endif%}
            <a href=\"/agenda\" class=\"verEventos\">Ver todos os eventos ></a>
          </div>
        </div>
      </div>
      {% else %}

        <div class=\"alert alert-info\">Conteúdo indisponível no momento!</div>

      {% endif %}

      {# {% if customPage.conteudo.eventos.itens is defined and customPage.conteudo.eventos.itens is not empty %}
      <div class=\"row\">
        <div class=\"col-lg-7\">
          <section class=\"blocoAgenda posts\" data-url=\"/agenda\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"textTitleBlock\">Agenda</div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-md-12\">
                <a href=\"/agenda\" class=\"verTudo\">Veja toda a nossa programação ></a>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-md-12\">
                {% include '@casa_firjan/includes/loop-agenda.html.twig' %}
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-md-12\">
                <a href=\"/agenda\" class=\"verTudo\">Veja toda a nossa programação ></a>
              </div>
            </div>
          </section>
        </div>
        {% endif %}
      </div> #}

    </div>
  </article>
</main>", "themes/casa_firjan/templates/pages/page--agenda-detalhe.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/pages/page--agenda-detalhe.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12);
        static $filters = array("escape" => 10, "raw" => 37);
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
