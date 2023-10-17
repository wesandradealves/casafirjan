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

/* themes/casa_firjan/templates/pages/page--agenda.html.twig */
class __TwigTemplate_de7ec847aecc1546c59f21adfa910d90 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalRegion("breadcrumb"), "html", null, true);
        echo "

<main class=\"agenda\" data-controller=\"agenda\">
  <div class=\"container pt-5\">

    <!--
        Topo
    -->
    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 15
        echo "    
    
    ";
        // line 86
        echo "
    ";
        // line 87
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/filter.html.twig"), "themes/casa_firjan/templates/pages/page--agenda.html.twig", 87)->display(twig_array_merge($context, ["taxonomies" => ($context["eventosByTax"] ?? null)]));
        // line 88
        echo "
    <div data-category=\"all\" id=\"js-drupal-fullcalendar\" class=\"js-drupal-fullcalendar\" calendar-view-index=\"";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_index"] ?? null), 89, $this->source), "html", null, true);
        echo "\" calendar-view-name=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_id"] ?? null), 89, $this->source), "html", null, true);
        echo "\" calendar-display=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["display_id"] ?? null), 89, $this->source), "html", null, true);
        echo "\"></div>

    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["eventosByTax"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["tax"]) {
            // line 92
            echo "        <div data-category=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_slugify($this->sandbox->ensureToStringAllowed($context["tax"], 92, $this->source)), "html", null, true);
            echo "\" id=\"js-drupal-fullcalendar-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_slugify($this->sandbox->ensureToStringAllowed($context["tax"], 92, $this->source)), "html", null, true);
            echo "\" class=\"js-drupal-fullcalendar hidden\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "    

    <script src='";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 95, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 95, $this->source)), "html", null, true);
        echo "/templates/views/calendar/index.global.js'></script>
    <script src='";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 96, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 96, $this->source)), "html", null, true);
        echo "/templates/views/calendar/locales-all.js'></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('js-drupal-fullcalendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          locale: 'pt-br',
          headerToolbar: {
            left: 'prev,next',
            center: 'title',
            right: window.innerWidth < 992 ? 'listMonth' : 'dayGridDay,dayGridMonth,timeGridWeek,listMonth'
          },
          views: {
              dayGridMonth: {
                  titleFormat: { year: 'numeric', month: 'long' } 
              }
          },
          height: 'auto',  
          initialView: window.innerWidth < 992 ? 'listMonth' : 'dayGridMonth',
          initialDate: new Date(),
          editable: false,
          selectable: true,   
          buttonText: {
            today: 'Dia',
            month: 'Mês',
            week: 'Semana',
            day: 'Dia',
            list: 'Lista'
          },      
          dayMaxEvents: false, // allow \"more\" link when too many events
          // businessHours: true,
          weekends: true,
          events: [
            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eventos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 131
            echo "              {
                title: \"";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "start_time", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo " | ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "titulo", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "\",
                url: \"";
            // line 133
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "url", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo "\",
                start: \"";
            // line 134
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "dateTime", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
            echo "\"
              },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "          ],      
          eventContent: function( info ) {
            
            return {html: `<span onclick=\"window.location = '\${info.event['_def'].url}'\">\${info.event.title.split(\"h\")[0]}h <strong>\${info.event.title.split(\"h\")[1]}</strong></span`};
          },
          eventRender: function(info) {
            info.el.querySelectorAll('.fc-title')[0].innerHTML = info.el.querySelectorAll('.fc-title')[0].innerHtml;
          }
        });

        calendar.render();
      });
    </script>
    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eventosByTax"] ?? null));
        foreach ($context['_seq'] as $context["tax"] => $context["eventos"]) {
            // line 151
            echo "      <script>
        document.addEventListener('DOMContentLoaded', function() {        
            ";
            // line 153
            $context["tax"] = $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_slugify($this->sandbox->ensureToStringAllowed($context["tax"], 153, $this->source));
            // line 154
            echo "
            var calendarEl_";
            // line 155
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["tax"], 155, $this->source), "html", null, true);
            echo " = document.getElementById('js-drupal-fullcalendar-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["tax"], 155, $this->source), "html", null, true);
            echo "');

            var calendar_";
            // line 157
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["tax"], 157, $this->source), "html", null, true);
            echo " = new FullCalendar.Calendar(calendarEl_";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["tax"], 157, $this->source), "html", null, true);
            echo ", {
              locale: 'pt-br',
              headerToolbar: {
                left: 'prev,next',
                center: 'title',
                right: window.innerWidth < 992 ? 'listMonth' : 'dayGridDay,dayGridMonth,timeGridWeek,listMonth'
              },
              views: {
                  dayGridMonth: {
                      titleFormat: { year: 'numeric', month: 'long' } 
                  }
              },
              height: 'auto',  
              initialView: window.innerWidth < 992 ? 'listMonth' : 'dayGridMonth',
              initialDate: new Date(),
              editable: false,
              selectable: true,   
              buttonText: {
                today: 'Dia',
                month: 'Mês',
                week: 'Semana',
                day: 'Dia',
                list: 'Lista'
              },      
              dayMaxEvents: false, // allow \"more\" link when too many events
              // businessHours: true,
              weekends: true,
              events: [
                ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["eventos"]);
            foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
                // line 186
                echo "                  {
                    title: \"";
                // line 187
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "start_time", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
                echo " | ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "titulo", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
                echo "\",
                    url: \"";
                // line 188
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "url", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
                echo "\",
                    start: \"";
                // line 189
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "dateTime", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
                echo "\"
                  },
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "              ],      
              eventContent: function( info ) {
                
                return {html: `<span onclick=\"window.location = '\${info.event['_def'].url}'\">\${info.event.title.split(\"h\")[0]}h <strong>\${info.event.title.split(\"h\")[1]}</strong></span`};
              },
              eventRender: function(info) {
                info.el.querySelectorAll('.fc-title')[0].innerHTML = info.el.querySelectorAll('.fc-title')[0].innerHtml;
              }
            });

            calendar_";
            // line 202
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["tax"], 202, $this->source), "html", null, true);
            echo ".render();
        });
      </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tax'], $context['eventos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "  </div>
</main>";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/pages/page--agenda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 206,  273 => 202,  261 => 192,  252 => 189,  248 => 188,  242 => 187,  239 => 186,  235 => 185,  202 => 157,  195 => 155,  192 => 154,  190 => 153,  186 => 151,  182 => 150,  167 => 137,  158 => 134,  154 => 133,  148 => 132,  145 => 131,  141 => 130,  104 => 96,  100 => 95,  96 => 93,  85 => 92,  81 => 91,  72 => 89,  69 => 88,  67 => 87,  64 => 86,  60 => 15,  58 => 14,  56 => 13,  54 => 12,  52 => 11,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ drupal_region('breadcrumb') }}

<main class=\"agenda\" data-controller=\"agenda\">
  <div class=\"container pt-5\">

    <!--
        Topo
    -->
    {#<div class=\"row\">#}
    {#  <div class=\"col\">#}
    {#    <h3 class=\"textBigTitle\">Agenda</h3>#}
    {#    <p class=\"text20\">Confira a nossa programação.</p>#}
    {#  </div>#}
    {#</div>#}
    
    
    {# <div class=\"row\">
      <!--
          Filtros
      -->

      <div class=\"col-lg-4 filtros\">
        <div class=\"title\">Filtrar</div>
        
        <!-- Filtro por ciclo -->
        <form id=\"porCiclo\" action=\"{{ customPage.filtros.action }}\" method=\"get\" enctype=\"multipart/form-data\">
          <div class=\"row porCiclo\">
            <div class=\"col\">
              {% for option in customPage.filtros.ciclos.itens %}
                <input data-color=\"{{ option.color }}\" type=\"checkbox\" name=\"ciclo[]\" value=\"{{ option.tid }}\" id=\"ciclo{{ option.tid }}\" {{ option.checked }}><label for=\"ciclo{{ option.tid }}\">{{ option.label }}<i class=\"icon-close\"></i></label>
              {% endfor %}
            </div>
          </div>

          <div class=\"row porCategoria\">
            <div class=\"col\">
              {% for option in customPage.filtros.categorias.itens %}
                <input type=\"checkbox\" name=\"categoria[]\" value=\"{{ option.tid }}\" id=\"{{ option.tid }}\" {{ option.checked }}><label for=\"{{ option.tid }}\">{{ option.label }}<i class=\"icon-close\"></i></label>
              {% endfor %}
            </div>
          </div>
        </form>
        
        <!-- Filtro por data -->
        <form id=\"porData\" data-last=\"{{ customPage.filtros.datas|split(\",\")|last|trim }}\" action=\"{{ customPage.filtros.action }}\" method=\"get\" enctype=\"multipart/form-data\" date-set=\"{{ customPage.filtros.currentDay }}\">
          <div class=\"row\">
            <div class=\"col\">
              <input type=\"hidden\" name=\"data_inicio\" value=\"2019-07-19 00:00:00\">
              <input type=\"hidden\" name=\"data_fim\" value=\"2019-07-19 23:59:59\">
            </div>
          </div>
          <div class=\"row porData\">
            <div class=\"col\">
              <div id=\"calendario\" data-days=\"['{{ customPage.filtros.datas }}']\"></div>
            </div>
          </div>
        </form>
      </div>

      <!--
          Lista de Eventos
      -->
      <div class=\"col-lg-8\">
        <section class=\"blocoAgenda posts\" data-url=\"{{ customPage.urlCurrent }}\">
          <div class=\"row filtros\">
            <div class=\"col-md-12\">
             
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-12\">
              {% include '@casa_firjan/includes/loop-agenda.html.twig' %}
            </div>
          </div>
          <div class=\"row btnVerMais loadMore\">
            <div class=\"col-md-12\">
              {% set totalPages = customPage.conteudo.eventos.paginacao.totalPages - 1 %}
              {% if totalPages > 0 %}
                <a href=\"javascript:void(0);\" data-atual=\"0\" data-total=\"{{ totalPages }}\" class=\"btnAzul\">Carregar mais</a>
              {% endif %}
            </div>
          </div>
        </section>
      </div>
    </div> #}

    {% include directory ~ '/templates/includes/filter.html.twig' with {taxonomies: eventosByTax} %}

    <div data-category=\"all\" id=\"js-drupal-fullcalendar\" class=\"js-drupal-fullcalendar\" calendar-view-index=\"{{ view_index }}\" calendar-view-name=\"{{ view_id }}\" calendar-display=\"{{ display_id }}\"></div>

    {% for tax in eventosByTax|keys %}
        <div data-category=\"{{slugify(tax)}}\" id=\"js-drupal-fullcalendar-{{slugify(tax)}}\" class=\"js-drupal-fullcalendar hidden\"></div>
    {% endfor %}    

    <script src='{{ base_path ~ directory }}/templates/views/calendar/index.global.js'></script>
    <script src='{{ base_path ~ directory }}/templates/views/calendar/locales-all.js'></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('js-drupal-fullcalendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          locale: 'pt-br',
          headerToolbar: {
            left: 'prev,next',
            center: 'title',
            right: window.innerWidth < 992 ? 'listMonth' : 'dayGridDay,dayGridMonth,timeGridWeek,listMonth'
          },
          views: {
              dayGridMonth: {
                  titleFormat: { year: 'numeric', month: 'long' } 
              }
          },
          height: 'auto',  
          initialView: window.innerWidth < 992 ? 'listMonth' : 'dayGridMonth',
          initialDate: new Date(),
          editable: false,
          selectable: true,   
          buttonText: {
            today: 'Dia',
            month: 'Mês',
            week: 'Semana',
            day: 'Dia',
            list: 'Lista'
          },      
          dayMaxEvents: false, // allow \"more\" link when too many events
          // businessHours: true,
          weekends: true,
          events: [
            {% for evento in eventos %}
              {
                title: \"{{evento.start_time}} | {{evento.titulo}}\",
                url: \"{{evento.url}}\",
                start: \"{{evento.dateTime}}\"
              },
            {% endfor %}
          ],      
          eventContent: function( info ) {
            
            return {html: `<span onclick=\"window.location = '\${info.event['_def'].url}'\">\${info.event.title.split(\"h\")[0]}h <strong>\${info.event.title.split(\"h\")[1]}</strong></span`};
          },
          eventRender: function(info) {
            info.el.querySelectorAll('.fc-title')[0].innerHTML = info.el.querySelectorAll('.fc-title')[0].innerHtml;
          }
        });

        calendar.render();
      });
    </script>
    {% for tax, eventos in eventosByTax %}
      <script>
        document.addEventListener('DOMContentLoaded', function() {        
            {% set tax = slugify(tax) %}

            var calendarEl_{{tax}} = document.getElementById('js-drupal-fullcalendar-{{tax}}');

            var calendar_{{tax}} = new FullCalendar.Calendar(calendarEl_{{tax}}, {
              locale: 'pt-br',
              headerToolbar: {
                left: 'prev,next',
                center: 'title',
                right: window.innerWidth < 992 ? 'listMonth' : 'dayGridDay,dayGridMonth,timeGridWeek,listMonth'
              },
              views: {
                  dayGridMonth: {
                      titleFormat: { year: 'numeric', month: 'long' } 
                  }
              },
              height: 'auto',  
              initialView: window.innerWidth < 992 ? 'listMonth' : 'dayGridMonth',
              initialDate: new Date(),
              editable: false,
              selectable: true,   
              buttonText: {
                today: 'Dia',
                month: 'Mês',
                week: 'Semana',
                day: 'Dia',
                list: 'Lista'
              },      
              dayMaxEvents: false, // allow \"more\" link when too many events
              // businessHours: true,
              weekends: true,
              events: [
                {% for evento in eventos %}
                  {
                    title: \"{{evento.start_time}} | {{evento.titulo}}\",
                    url: \"{{evento.url}}\",
                    start: \"{{evento.dateTime}}\"
                  },
                {% endfor %}
              ],      
              eventContent: function( info ) {
                
                return {html: `<span onclick=\"window.location = '\${info.event['_def'].url}'\">\${info.event.title.split(\"h\")[0]}h <strong>\${info.event.title.split(\"h\")[1]}</strong></span`};
              },
              eventRender: function(info) {
                info.el.querySelectorAll('.fc-title')[0].innerHTML = info.el.querySelectorAll('.fc-title')[0].innerHtml;
              }
            });

            calendar_{{tax}}.render();
        });
      </script>
    {% endfor %}
  </div>
</main>", "themes/casa_firjan/templates/pages/page--agenda.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/pages/page--agenda.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 87, "for" => 91, "set" => 153);
        static $filters = array("escape" => 1, "keys" => 91);
        static $functions = array("drupal_region" => 1, "slugify" => 92);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'for', 'set'],
                ['escape', 'keys'],
                ['drupal_region', 'slugify']
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
