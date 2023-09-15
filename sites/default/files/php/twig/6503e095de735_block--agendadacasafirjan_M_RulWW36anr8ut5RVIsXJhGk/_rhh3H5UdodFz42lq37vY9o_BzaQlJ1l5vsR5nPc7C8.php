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

/* themes/casa_firjan/templates/blocks/block--agendadacasafirjan.html.twig */
class __TwigTemplate_1dc415dadc0fe9a92880530df8f7de09 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, true, true, 1), "eventos", [], "any", true, true, true, 1) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 1), "eventos", [], "any", false, false, true, 1)))) {
            // line 2
            echo "<div class=\"agenda\">
    <div class=\"container pt-5 pb-5\">
        <div class=\"d-flex flex-wrap align-items-stretch\">
            <!--
                Agenda
            -->
            <div class=\"col-lg-8 ps-0\">
                <section class=\"blocoAgenda\" >
                    <div class=\"row mb-4\">
                        <div class=\"col-md-12\">
                            <h3 class=\"textTitleBlock\">
                                ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 13, $this->source), "html", null, true);
            echo "
                            </h3>
                            ";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 15, $this->source), "html", null, true);
            echo "
                            ";
            // line 17
            echo "                        </div>
                    </div>
                    ";
            // line 24
            echo "                    ";
            // line 33
            echo "                    ";
            // line 35
            echo "                    ";
            // line 36
            echo "
                    ";
            // line 40
            echo "                    ";
            // line 41
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["new_group"] ?? null), 1, 5));
            foreach ($context['_seq'] as $context["data"] => $context["eventos"]) {
                // line 42
                echo "                        <div class=\"eventos\" data-date=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["data"], 42, $this->source), "html", null, true);
                echo "\">
                            ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["eventos"]);
                foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
                    // line 44
                    echo "                                <div class=\"d-block evento\" onclick=\"window.location = '";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "url", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo "'\">
                                    <h3 class=\"evento--header p-4 pt-3 pb-3 d-flex align-items-center justify-content-between\">
                                        <span>";
                    // line 46
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "Data", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo "</span>    
                                        <span>";
                    // line 47
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "Dia", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                    echo "</span>    
                                    </h3>
                                    <div class=\"evento--info d-block p-2 p-md-4 pt-3 pb-3\">
                                        <span class=\"d-flex align-items-center\">
                                            <span class=\"title title p-2 ps-3 pe-3\" title=\"";
                    // line 51
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "titulo", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                    echo "\">Saiba mais</span>
                                            <span class=\"info ps-2 ps-md-4\">
                                                <strong>Horário:</strong> ";
                    // line 53
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "hora", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                    echo "h";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "minutos", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                    echo " 
                                                | <strong>Duração:</strong> ";
                    // line 54
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "duracao", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo "
                                            </span>
                                        </span>       
                                        <h2 class=\"mb-2 mt-2 evento--title\">";
                    // line 57
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "titulo", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                    echo "</h2>
                                        <p class=\"description d-block mt-2 pb-0\">
                                            ";
                    // line 59
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["evento"], "texto", [], "any", false, false, true, 59), 59, $this->source));
                    echo "
                                        </p>       
                                    </div>                      
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['data'], $context['eventos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "
                    ";
            // line 68
            echo "                        ";
            // line 70
            echo "                    ";
            // line 75
            echo "                </section>
            </div>
            <!--
                Mais destaques
            -->
            <div class=\"col-lg-4 mt-4 mt-lg-0\">
                ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalRegion("sidebar"), "html", null, true);
            echo "
            </div>
        </div>
    </div>
</div>
";
        }
        // line 86
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/blocks/block--agendadacasafirjan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 86,  164 => 81,  156 => 75,  154 => 70,  152 => 68,  149 => 66,  142 => 64,  131 => 59,  126 => 57,  120 => 54,  114 => 53,  109 => 51,  102 => 47,  98 => 46,  92 => 44,  88 => 43,  83 => 42,  78 => 41,  76 => 40,  73 => 36,  71 => 35,  69 => 33,  67 => 24,  63 => 17,  59 => 15,  54 => 13,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if customPage.conteudo.eventos is defined and customPage.conteudo.eventos is not empty %}
<div class=\"agenda\">
    <div class=\"container pt-5 pb-5\">
        <div class=\"d-flex flex-wrap align-items-stretch\">
            <!--
                Agenda
            -->
            <div class=\"col-lg-8 ps-0\">
                <section class=\"blocoAgenda\" >
                    <div class=\"row mb-4\">
                        <div class=\"col-md-12\">
                            <h3 class=\"textTitleBlock\">
                                {{title}}
                            </h3>
                            {{content}}
                            {# <p>Fique por dentro dos próximos eventos da Casa Firjan. Para ver a agenda completa, <a href=\"\"><strong>acesse aqui</strong></a>.</p> #}
                        </div>
                    </div>
                    {# <div class=\"row\">
                        <div class=\"col-md-12\">
                        <a href=\"/agenda\" class=\"verTudo\">Veja toda a nossa programação ></a>
                        </div>
                    </div> #}
                    {# <div class=\"row\">
                        <div class=\"col-md-12\">
                        <ul class=\"filtro\">
                            {% for key,grupo in customPage.conteudo.eventos.grupos %}
                            <li class=\"{{ key }}\">{{ grupo }}</li>
                            {% endfor %}
                        </ul>
                        </div>
                    </div> #}
                    {# <div class=\"row\">
                        <div class=\"col-md-12\"> #}
                    {# <div class=\"eventos\"> #}

                    {# {% for data, eventos in new_group %}
                        {{dump(eventos)}}
                    {% endfor %}                     #}
                    {# {{dump(new_group|slice(1, 5))}} #}
                    {% for data, eventos in new_group|slice(1, 5) %}
                        <div class=\"eventos\" data-date=\"{{data}}\">
                            {% for evento in eventos %}
                                <div class=\"d-block evento\" onclick=\"window.location = '{{evento.url}}'\">
                                    <h3 class=\"evento--header p-4 pt-3 pb-3 d-flex align-items-center justify-content-between\">
                                        <span>{{evento.Data}}</span>    
                                        <span>{{evento.Dia}}</span>    
                                    </h3>
                                    <div class=\"evento--info d-block p-2 p-md-4 pt-3 pb-3\">
                                        <span class=\"d-flex align-items-center\">
                                            <span class=\"title title p-2 ps-3 pe-3\" title=\"{{evento.titulo}}\">Saiba mais</span>
                                            <span class=\"info ps-2 ps-md-4\">
                                                <strong>Horário:</strong> {{evento.hora}}h{{evento.minutos}} 
                                                | <strong>Duração:</strong> {{evento.duracao}}
                                            </span>
                                        </span>       
                                        <h2 class=\"mb-2 mt-2 evento--title\">{{evento.titulo}}</h2>
                                        <p class=\"description d-block mt-2 pb-0\">
                                            {{ evento.texto|raw }}
                                        </p>       
                                    </div>                      
                                </div>
                            {% endfor %}
                        </div>
                    {% endfor %}

                    {# </div> #}
                        {# </div>
                    </div> #}
                    {# <div class=\"row\">
                        <div class=\"col-md-12\">
                        <a href=\"/agenda\" class=\"verTudo\">Veja toda a nossa programação ></a>
                        </div>
                    </div> #}
                </section>
            </div>
            <!--
                Mais destaques
            -->
            <div class=\"col-lg-4 mt-4 mt-lg-0\">
                {{ drupal_region('sidebar') }}
            </div>
        </div>
    </div>
</div>
{% endif %}  ", "themes/casa_firjan/templates/blocks/block--agendadacasafirjan.html.twig", "C:\\xampp\\htdocs\\CasaFirjan\\themes\\casa_firjan\\templates\\blocks\\block--agendadacasafirjan.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 41);
        static $filters = array("escape" => 13, "slice" => 41, "raw" => 59);
        static $functions = array("drupal_region" => 81);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'slice', 'raw'],
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
