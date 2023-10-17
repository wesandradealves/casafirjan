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

/* themes/casa_firjan/templates/pages/page--noticias.html.twig */
class __TwigTemplate_7b281b079676d482de24f9d0f696037c extends \Twig\Template
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
        echo "<main class=\"noticias\" data-controller=\"noticias\">
  <div class=\"container\">
    <!--
        Topo
    -->
    <div class=\"row\">
      <div class=\"col-md-12 col-lg-6\">
        <h3 class=\"textBigTitle\">Notícias</h3>
      </div>
    </div>
    <!--
        Notícias
    -->
    <div class=\"row\">
      <div class=\"col-lg-7 posts\" data-url=\"/noticias\">
        <div class=\"target\">
          <div class=\"row\">

            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 19), "noticias", [], "any", false, false, true, 19), "itens", [], "any", false, false, true, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 20
            echo "              <div class=\"col-lg-6 item\">
                ";
            // line 27
            echo "                <a class=\"img\" style=\"background-image:url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["noticia"], "imagem", [], "any", false, false, true, 27), "src", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo ");\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["noticia"], "url", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["noticia"], "titulo", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\">
                  <img src=\"";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "system", [], "any", false, false, true, 28), "staticPath", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "img/img14x9.gif\">
                </a>
                <p class=\"textCat\">";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["noticia"], "data", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</p>
                <a class=\"text20\" href=\"";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["noticia"], "url", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["noticia"], "titulo", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</a>
                ";
            // line 33
            echo "              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
          </div>
        </div>
        <div class=\"row btnVerMais loadMore\">
          ";
        // line 39
        $context["totalPages"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 39), "noticias", [], "any", false, false, true, 39), "paginacao", [], "any", false, false, true, 39), "totalPages", [], "any", false, false, true, 39) - 1);
        // line 40
        echo "          ";
        if ((($context["totalPages"] ?? null) > 0)) {
            // line 41
            echo "            <a href=\"javascript:void(0);\" data-atual=\"0\" data-total=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["totalPages"] ?? null), 41, $this->source), "html", null, true);
            echo "\" class=\"btnAzul\">Ver mais</a>
          ";
        }
        // line 43
        echo "        </div>
      </div>
      <div class=\"col-lg-4 offset-lg-1 destaques\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"textTitleBlock\">Em destaque</div>
          </div>
        </div>
        <div class=\"row itens\">
          ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 52), "destaques", [], "any", false, false, true, 52), "itens", [], "any", false, false, true, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["destaque"]) {
            // line 53
            echo "          <a class=\"item\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["destaque"], "url", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\">
            <div class=\"row\">
              <div class=\"col-lg-3\">
                <span>";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["destaque"], "index", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "°</span>
              </div>
              <div class=\"col-lg-9\">
                <p class=\"text18\">";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["destaque"], "titulo", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "</p>
                <p class=\"textCreate\">";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["destaque"], "autor_data", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "</p>
              </div>
            </div>
          </a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destaque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </div>
      </div>
    </div>
  </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/pages/page--noticias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 65,  146 => 60,  142 => 59,  136 => 56,  129 => 53,  125 => 52,  114 => 43,  108 => 41,  105 => 40,  103 => 39,  97 => 35,  90 => 33,  84 => 31,  80 => 30,  75 => 28,  66 => 27,  63 => 20,  59 => 19,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main class=\"noticias\" data-controller=\"noticias\">
  <div class=\"container\">
    <!--
        Topo
    -->
    <div class=\"row\">
      <div class=\"col-md-12 col-lg-6\">
        <h3 class=\"textBigTitle\">Notícias</h3>
      </div>
    </div>
    <!--
        Notícias
    -->
    <div class=\"row\">
      <div class=\"col-lg-7 posts\" data-url=\"/noticias\">
        <div class=\"target\">
          <div class=\"row\">

            {% for noticia in customPage.conteudo.noticias.itens %}
              <div class=\"col-lg-6 item\">
                {# <div id=\"custom-edit-content\" align=\"right\">
                  {% if is_admin %}
                    <!-- SE PERFIL == ADMINISTRADOR -->
                    <a href=\"{{ noticia.edit }}\" title=\"Editar conteúdo\"><img src=\"/themes/casa_firjan/statics/img/pencil-square.svg\" width=\"28\"/></a> 
                  {% endif %}                 
                </div> #}
                <a class=\"img\" style=\"background-image:url({{ noticia.imagem.src }});\" href=\"{{ noticia.url }}\" title=\"{{ noticia.titulo }}\">
                  <img src=\"{{ customPage.system.staticPath }}img/img14x9.gif\">
                </a>
                <p class=\"textCat\">{{ noticia.data }}</p>
                <a class=\"text20\" href=\"{{ noticia.url }}\">{{ noticia.titulo }}</a>
                {#<p class=\"textCreate\">por Bruna J. Castro</p>#}
              </div>
            {% endfor %}

          </div>
        </div>
        <div class=\"row btnVerMais loadMore\">
          {% set totalPages = customPage.conteudo.noticias.paginacao.totalPages - 1 %}
          {% if totalPages > 0 %}
            <a href=\"javascript:void(0);\" data-atual=\"0\" data-total=\"{{ totalPages }}\" class=\"btnAzul\">Ver mais</a>
          {% endif %}
        </div>
      </div>
      <div class=\"col-lg-4 offset-lg-1 destaques\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"textTitleBlock\">Em destaque</div>
          </div>
        </div>
        <div class=\"row itens\">
          {% for destaque in customPage.conteudo.destaques.itens %}
          <a class=\"item\" href=\"{{ destaque.url }}\">
            <div class=\"row\">
              <div class=\"col-lg-3\">
                <span>{{ destaque.index }}°</span>
              </div>
              <div class=\"col-lg-9\">
                <p class=\"text18\">{{ destaque.titulo }}</p>
                <p class=\"textCreate\">{{ destaque.autor_data }}</p>
              </div>
            </div>
          </a>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</main>
", "themes/casa_firjan/templates/pages/page--noticias.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/pages/page--noticias.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 19, "set" => 39, "if" => 40);
        static $filters = array("escape" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
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
