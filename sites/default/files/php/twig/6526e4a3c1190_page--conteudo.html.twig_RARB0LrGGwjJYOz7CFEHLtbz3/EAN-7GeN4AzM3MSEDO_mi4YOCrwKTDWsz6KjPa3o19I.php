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

/* themes/casa_firjan/templates/pages/page--conteudo.html.twig */
class __TwigTemplate_ce9af2903fbf83d8ac099d960bba528e extends \Twig\Template
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
        echo "<main class=\"detalhe\" data-controller=\"detalhe\">
  <article>
    <div class=\"container\">
      <div id=\"custom-edit-content\" align=\"right\">
        ";
        // line 5
        if (($context["is_admin"] ?? null)) {
            // line 6
            echo "          <!-- SE PERFIL == ADMINISTRADOR -->
          <a href=\"";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 7), "edit", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "\" title=\"Editar conteúdo\"><img src=\"/themes/casa_firjan/statics/img/pencil-square.svg\" width=\"28\"/></a> 
        ";
        }
        // line 8
        echo "                 
      </div>
      
      ";
        // line 12
        echo "      <div class=\"row justify-content-center\">
        <div class=\"col-md-12 col-lg-10\">
          <div class=\"topContent\">
            <h1 class=\"title\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 15), "titulo", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</h1>
            <p class=\"text22\">";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 16), "chamada", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</p>
            <p class=\"textCreate\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 17), "autor_data", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</p>
            <div class=\"sharethis-inline-share-buttons\"></div>
            ";
        // line 20
        echo "            ";
        // line 21
        echo "            ";
        // line 22
        echo "            ";
        // line 23
        echo "            ";
        // line 24
        echo "            ";
        // line 25
        echo "            ";
        // line 26
        echo "            ";
        // line 27
        echo "            ";
        // line 28
        echo "            ";
        // line 29
        echo "            ";
        // line 30
        echo "            ";
        // line 31
        echo "            ";
        // line 32
        echo "
            ";
        // line 38
        echo "
            ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 39), "midia", [], "any", false, false, true, 39), "src", [], "any", false, false, true, 39)) {
            // line 40
            echo "
              ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 41), "midia", [], "any", false, false, true, 41), "tipo", [], "any", false, false, true, 41) == "imagem")) {
                // line 42
                echo "
              <div class=\"capa\">
                <img src=\"";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 44), "midia", [], "any", false, false, true, 44), "src", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 44), "titulo", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "\">
                ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 45), "midia", [], "any", false, false, true, 45), "legenda", [], "any", false, false, true, 45)) {
                    // line 46
                    echo "                  <span>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 46), "midia", [], "any", false, false, true, 46), "legenda", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo "</span>
                ";
                }
                // line 48
                echo "              </div>        

              ";
            } else {
                // line 50
                echo "    

              <div class=\"videoWrapper\">
                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/";
                // line 53
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 53), "midia", [], "any", false, false, true, 53), "src", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                echo "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
              </div>   

              ";
            }
            // line 56
            echo "       

            ";
        }
        // line 58
        echo "    
        </div>
      </div>
    </div>
    <!--
                Corpo do conteúdo
            -->
    <div class=\"row justify-content-center\">
      <div class=\"col-md-12 col-lg-7\">
        <div class=\"content\">
          ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 68), "texto", [], "any", false, false, true, 68), 68, $this->source));
        echo "

          ";
        // line 71
        echo "          ";
        // line 72
        echo "          ";
        // line 73
        echo "          ";
        // line 74
        echo "          ";
        // line 75
        echo "          ";
        // line 76
        echo "          ";
        // line 77
        echo "          ";
        // line 78
        echo "          ";
        // line 79
        echo "          ";
        // line 80
        echo "          ";
        // line 81
        echo "        </div>
      </div>
    </div>
    <!--
                Pós conteúdo
            -->
    <div class=\"row\">
      <div class=\"col-md-12\">
        ";
        // line 99
        echo "
        ";
        // line 100
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 100), "tags", [], "any", false, false, true, 100))) {
            // line 101
            echo "          <div class=\"topicos\">
            <div class=\"text22 bold\">Tags:</div>
            <ul>
              ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 104), "tags", [], "any", false, false, true, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 105
                echo "                <li>
                  <a href=\"";
                // line 106
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "path", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "</a>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "            </ul>
          </div>
        ";
        }
        // line 111
        echo "        
        ";
        // line 113
        echo "        ";
        // line 114
        echo "        ";
        // line 115
        echo "        ";
        // line 116
        echo "        ";
        // line 117
        echo "        ";
        // line 118
        echo "        ";
        // line 119
        echo "        ";
        // line 120
        echo "        ";
        // line 121
        echo "        ";
        // line 122
        echo "        ";
        // line 123
        echo "        ";
        // line 124
        echo "        ";
        // line 125
        echo "        ";
        // line 126
        echo "        ";
        // line 127
        echo "        ";
        // line 128
        echo "        ";
        // line 129
        echo "        ";
        // line 130
        echo "        ";
        // line 131
        echo "        ";
        // line 132
        echo "        ";
        // line 133
        echo "        ";
        // line 134
        echo "        ";
        // line 135
        echo "        ";
        // line 136
        echo "        ";
        // line 137
        echo "        ";
        // line 138
        echo "        ";
        // line 139
        echo "        ";
        // line 140
        echo "        ";
        // line 141
        echo "        ";
        // line 142
        echo "        ";
        // line 143
        echo "        ";
        // line 144
        echo "        ";
        // line 145
        echo "        ";
        // line 146
        echo "        ";
        // line 147
        echo "        ";
        // line 148
        echo "        ";
        // line 149
        echo "        ";
        // line 150
        echo "      </div>
    </div>
    <!--
                Bloco Veja Mais
            -->
      ";
        // line 155
        $this->loadTemplate("@casa_firjan/includes/destaques.html.twig", "themes/casa_firjan/templates/pages/page--conteudo.html.twig", 155)->display($context);
        // line 156
        echo "    </div>
  </article>
</main>
";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/pages/page--conteudo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 156,  321 => 155,  314 => 150,  312 => 149,  310 => 148,  308 => 147,  306 => 146,  304 => 145,  302 => 144,  300 => 143,  298 => 142,  296 => 141,  294 => 140,  292 => 139,  290 => 138,  288 => 137,  286 => 136,  284 => 135,  282 => 134,  280 => 133,  278 => 132,  276 => 131,  274 => 130,  272 => 129,  270 => 128,  268 => 127,  266 => 126,  264 => 125,  262 => 124,  260 => 123,  258 => 122,  256 => 121,  254 => 120,  252 => 119,  250 => 118,  248 => 117,  246 => 116,  244 => 115,  242 => 114,  240 => 113,  237 => 111,  232 => 109,  219 => 106,  216 => 105,  212 => 104,  207 => 101,  205 => 100,  202 => 99,  192 => 81,  190 => 80,  188 => 79,  186 => 78,  184 => 77,  182 => 76,  180 => 75,  178 => 74,  176 => 73,  174 => 72,  172 => 71,  167 => 68,  155 => 58,  150 => 56,  143 => 53,  138 => 50,  133 => 48,  127 => 46,  125 => 45,  119 => 44,  115 => 42,  113 => 41,  110 => 40,  108 => 39,  105 => 38,  102 => 32,  100 => 31,  98 => 30,  96 => 29,  94 => 28,  92 => 27,  90 => 26,  88 => 25,  86 => 24,  84 => 23,  82 => 22,  80 => 21,  78 => 20,  73 => 17,  69 => 16,  65 => 15,  60 => 12,  55 => 8,  50 => 7,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main class=\"detalhe\" data-controller=\"detalhe\">
  <article>
    <div class=\"container\">
      <div id=\"custom-edit-content\" align=\"right\">
        {% if is_admin %}
          <!-- SE PERFIL == ADMINISTRADOR -->
          <a href=\"{{ customPage.conteudo.edit }}\" title=\"Editar conteúdo\"><img src=\"/themes/casa_firjan/statics/img/pencil-square.svg\" width=\"28\"/></a> 
        {% endif %}                 
      </div>
      
      {# {% include '@casa_firjan/includes/breadcrumb.html.twig' %} #}
      <div class=\"row justify-content-center\">
        <div class=\"col-md-12 col-lg-10\">
          <div class=\"topContent\">
            <h1 class=\"title\">{{ customPage.conteudo.titulo }}</h1>
            <p class=\"text22\">{{ customPage.conteudo.chamada }}</p>
            <p class=\"textCreate\">{{ customPage.conteudo.autor_data }}</p>
            <div class=\"sharethis-inline-share-buttons\"></div>
            {#<div class=\"compartilhamento\">#}
            {#  <ul>#}
            {#    <li>#}
            {#      <a class=\"icon-whatsapp\" href=\"#\"></a>#}
            {#    </li>#}
            {#    <li>#}
            {#      <a class=\"icon-facebook\" href=\"#\"></a>#}
            {#    </li>#}
            {#    <li>#}
            {#      <a class=\"icon-twitter\" href=\"#\"></a>#}
            {#    </li>#}
            {#  </ul>#}
            {#</div>#}

            {# {% if customPage.conteudo.midia.tipo == 'imagem' %}

            {% elseif customPage.conteudo.midia.tipo == 'video' %}

            {% endif %} #}

            {% if customPage.conteudo.midia.src %}

              {% if customPage.conteudo.midia.tipo == 'imagem' %}

              <div class=\"capa\">
                <img src=\"{{ customPage.conteudo.midia.src }}\" alt=\"{{ customPage.conteudo.titulo }}\">
                {% if customPage.conteudo.midia.legenda %}
                  <span>{{ customPage.conteudo.midia.legenda }}</span>
                {% endif %}
              </div>        

              {% else %}    

              <div class=\"videoWrapper\">
                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/{{ customPage.conteudo.midia.src }}\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
              </div>   

              {% endif %}       

            {% endif %}    
        </div>
      </div>
    </div>
    <!--
                Corpo do conteúdo
            -->
    <div class=\"row justify-content-center\">
      <div class=\"col-md-12 col-lg-7\">
        <div class=\"content\">
          {{ customPage.conteudo.texto|raw }}

          {#<div class=\"blockVideo\">#}
          {#<p class=\"textTitleBlock\">ASSISTA:</p>#}
          {#<p class=\"desc\">David Baker no aquário da Casa Firjan</p>#}
          {#<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/HjVBHOhcrdc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>#}
          {#<a href=\"#\">Assista mais edições do aquário da Casa Firjan</a>#}
          {#</div>#}
          {##}
          {#<div class=\"blockDestaque\">#}
          {#<p class=\"title\">INTERESSADO EM APRENDER MAIS SOBRE CRIATIVIDADE?</p>\t#}
          {#<p>A partir do dia 30 de abril, a Casa Firjan irá inaugurar o curso de Criatividade Aplicada, curso onde você poderá criar inspirações e referências, como as diferentes profissionais e as suas competências, e conhecer as diferentes ferramentas e ferramentas para desenvolver sua voz criativa. É sobre inspiração, mas também sobre produtividade.  :) Gostou? </p>#}
          {#</div>#}
        </div>
      </div>
    </div>
    <!--
                Pós conteúdo
            -->
    <div class=\"row\">
      <div class=\"col-md-12\">
        {# {% if customPage.conteudo.topicos is not empty %}
          <div class=\"topicos\">
            <div class=\"text22 bold\">Tópicos:</div>
            <ul>
              {% for topico in customPage.conteudo.topicos %}
                <li>{{ topico }}</li>
              {% endfor %}
            </ul>
          </div>
        {% endif %} #}

        {% if customPage.conteudo.tags is not empty %}
          <div class=\"topicos\">
            <div class=\"text22 bold\">Tags:</div>
            <ul>
              {% for tag in customPage.conteudo.tags %}
                <li>
                  <a href=\"{{tag.path}}\" title=\"{{tag.name}}\">{{tag.name}}</a>
                </li>
              {% endfor %}
            </ul>
          </div>
        {% endif %}        
        {#<div class=\"comentarios\">#}
        {#<div class=\"text22 bold\">Comentários:</div>#}
        {#<form id=\"comentarios\" action=\"#\">#}
        {#<textarea rows=\"5\" width=\"100%\" type=\"textarea\" class=\"comentario\" name=\"comentario\" placeholder=\"Deixe aqui seu comentário\"></textarea>#}
        {#<input type=\"submit\" class=\"btnPreto submit\" value=\"Enviar comentário\">#}
        {#</form>#}
        {#<div class=\"posts\">#}
        {#<div class=\"text18\">Recentes:</div>#}
        {#<div class=\"post\">#}
        {#<div class=\"user\">#}
        {#<img src=\"https://via.placeholder.com/80\" alt=\"Foto\">#}
        {#<p class=\"name\">Marina da Silva</p>#}
        {#<p class=\"textCreate\">há 1 semana</p>#}
        {#</div>#}
        {#<div class=\"body\">#}
        {#Eu adorei o conteúdo!#}
        {#</div>#}
        {#<div class=\"likes\">#}
        {#<a class=\"icon-like like\" title=\"Curti\" href=\"#\"></a>#}
        {#<a class=\"icon-like dislike\" title=\"Não curti\" href=\"#\"></a>#}
        {#</div>\t\t\t\t\t\t\t\t\t#}
        {#</div>#}
        {#<div class=\"post\">#}
        {#<div class=\"user\">#}
        {#<img src=\"https://via.placeholder.com/80\" alt=\"Foto\">#}
        {#<p class=\"name\">Marina da Silva</p>#}
        {#<p class=\"textCreate\">há 1 semana</p>#}
        {#</div>#}
        {#<div class=\"body\">#}
        {#Eu adorei o conteúdo!#}
        {#</div>#}
        {#<div class=\"likes\">#}
        {#<a class=\"icon-like like\" title=\"Curti\" href=\"#\"></a>#}
        {#<a class=\"icon-like dislike\" title=\"Não curti\" href=\"#\"></a>#}
        {#</div>\t\t\t\t\t\t\t\t\t#}
        {#</div>#}
        {#</div>#}
        {#</div>#}
      </div>
    </div>
    <!--
                Bloco Veja Mais
            -->
      {% include '@casa_firjan/includes/destaques.html.twig' %}
    </div>
  </article>
</main>
", "themes/casa_firjan/templates/pages/page--conteudo.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/pages/page--conteudo.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "for" => 104, "include" => 155);
        static $filters = array("escape" => 7, "raw" => 68);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'include'],
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
