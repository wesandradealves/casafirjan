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

/* themes/casa_firjan/templates/pages/page--noticia.html.twig */
class __TwigTemplate_d667ecf8312b78a471ab327ceb1cbceb extends \Twig\Template
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
      ";
        // line 10
        echo "      <!--
                Topo do Conteúdo
            -->                 
      <div class=\"row justify-content-center\">
        <div class=\"col-md-12 col-lg-10\">
          <div class=\"topContent\">
            <a href=\"";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 16), "categoria", [], "any", false, false, true, 16), "url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "\"
               class=\"textCat\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 17), "categoria", [], "any", false, false, true, 17), "label", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</a>
            <h2 class=\"title\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 18), "titulo", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</h2>
            <p class=\"text22\">";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 19), "chamada", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</p>
            <p class=\"textCreate\">";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 20), "autor_data", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</p>
            <div class=\"sharethis-inline-share-buttons\"></div>
            ";
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
        echo "            ";
        // line 33
        echo "            ";
        // line 34
        echo "            ";
        // line 35
        echo "
            <div class=\"capa\">
              <img src=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 37), "midia", [], "any", false, false, true, 37), "src", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 37), "titulo", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "\">
              ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 38), "midia", [], "any", false, false, true, 38), "legenda", [], "any", false, false, true, 38)) {
            // line 39
            echo "                <span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 39), "midia", [], "any", false, false, true, 39), "legenda", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "</span>
              ";
        }
        // line 41
        echo "            </div>
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
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 51), "texto", [], "any", false, false, true, 51), 51, $this->source));
        echo "

          ";
        // line 54
        echo "          ";
        // line 55
        echo "          ";
        // line 56
        echo "          ";
        // line 57
        echo "          ";
        // line 58
        echo "          ";
        // line 59
        echo "          ";
        // line 60
        echo "          ";
        // line 61
        echo "          ";
        // line 62
        echo "          ";
        // line 63
        echo "          ";
        // line 64
        echo "        </div>
      </div>
    </div>
    <!--
                Pós conteúdo
            -->
    <div class=\"row\">
      <div class=\"col-md-12\">
        ";
        // line 72
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 72), "topicos", [], "any", false, false, true, 72))) {
            // line 73
            echo "          <div class=\"topicos\">
            <div class=\"text22 bold\">Tópicos:</div>
            <ul>
              ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 76), "topicos", [], "any", false, false, true, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["topico"]) {
                // line 77
                echo "                <li>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["topico"], 77, $this->source), "html", null, true);
                echo "</li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topico'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "            </ul>
          </div>
        ";
        }
        // line 82
        echo "        ";
        // line 83
        echo "        ";
        // line 84
        echo "        ";
        // line 85
        echo "        ";
        // line 86
        echo "        ";
        // line 87
        echo "        ";
        // line 88
        echo "        ";
        // line 89
        echo "        ";
        // line 90
        echo "        ";
        // line 91
        echo "        ";
        // line 92
        echo "        ";
        // line 93
        echo "        ";
        // line 94
        echo "        ";
        // line 95
        echo "        ";
        // line 96
        echo "        ";
        // line 97
        echo "        ";
        // line 98
        echo "        ";
        // line 99
        echo "        ";
        // line 100
        echo "        ";
        // line 101
        echo "        ";
        // line 102
        echo "        ";
        // line 103
        echo "        ";
        // line 104
        echo "        ";
        // line 105
        echo "        ";
        // line 106
        echo "        ";
        // line 107
        echo "        ";
        // line 108
        echo "        ";
        // line 109
        echo "        ";
        // line 110
        echo "        ";
        // line 111
        echo "        ";
        // line 112
        echo "        ";
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
        echo "      </div>
    </div>
    <!--
                Bloco Veja Mais
            -->
    ";
        // line 126
        echo "      ";
        // line 127
        echo "        ";
        // line 128
        echo "          ";
        // line 129
        echo "        ";
        // line 130
        echo "        ";
        // line 131
        echo "          ";
        // line 132
        echo "            ";
        // line 133
        echo "          ";
        // line 134
        echo "          ";
        // line 135
        echo "          ";
        // line 136
        echo "          ";
        // line 137
        echo "          ";
        // line 138
        echo "        ";
        // line 139
        echo "        ";
        // line 140
        echo "          ";
        // line 141
        echo "            ";
        // line 142
        echo "              ";
        // line 143
        echo "                ";
        // line 144
        echo "              ";
        // line 145
        echo "            ";
        // line 146
        echo "            ";
        // line 147
        echo "              ";
        // line 148
        echo "              ";
        // line 149
        echo "              ";
        // line 150
        echo "              ";
        // line 151
        echo "            ";
        // line 152
        echo "          ";
        // line 153
        echo "          ";
        // line 154
        echo "            ";
        // line 155
        echo "              ";
        // line 156
        echo "                ";
        // line 157
        echo "              ";
        // line 158
        echo "            ";
        // line 159
        echo "            ";
        // line 160
        echo "              ";
        // line 161
        echo "              ";
        // line 162
        echo "              ";
        // line 163
        echo "              ";
        // line 164
        echo "            ";
        // line 165
        echo "          ";
        // line 166
        echo "        ";
        // line 167
        echo "      ";
        // line 168
        echo "    ";
        // line 169
        echo "    </div>
  </article>
</main>
";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/pages/page--noticia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 169,  354 => 168,  352 => 167,  350 => 166,  348 => 165,  346 => 164,  344 => 163,  342 => 162,  340 => 161,  338 => 160,  336 => 159,  334 => 158,  332 => 157,  330 => 156,  328 => 155,  326 => 154,  324 => 153,  322 => 152,  320 => 151,  318 => 150,  316 => 149,  314 => 148,  312 => 147,  310 => 146,  308 => 145,  306 => 144,  304 => 143,  302 => 142,  300 => 141,  298 => 140,  296 => 139,  294 => 138,  292 => 137,  290 => 136,  288 => 135,  286 => 134,  284 => 133,  282 => 132,  280 => 131,  278 => 130,  276 => 129,  274 => 128,  272 => 127,  270 => 126,  263 => 120,  261 => 119,  259 => 118,  257 => 117,  255 => 116,  253 => 115,  251 => 114,  249 => 113,  247 => 112,  245 => 111,  243 => 110,  241 => 109,  239 => 108,  237 => 107,  235 => 106,  233 => 105,  231 => 104,  229 => 103,  227 => 102,  225 => 101,  223 => 100,  221 => 99,  219 => 98,  217 => 97,  215 => 96,  213 => 95,  211 => 94,  209 => 93,  207 => 92,  205 => 91,  203 => 90,  201 => 89,  199 => 88,  197 => 87,  195 => 86,  193 => 85,  191 => 84,  189 => 83,  187 => 82,  182 => 79,  173 => 77,  169 => 76,  164 => 73,  162 => 72,  152 => 64,  150 => 63,  148 => 62,  146 => 61,  144 => 60,  142 => 59,  140 => 58,  138 => 57,  136 => 56,  134 => 55,  132 => 54,  127 => 51,  115 => 41,  109 => 39,  107 => 38,  101 => 37,  97 => 35,  95 => 34,  93 => 33,  91 => 32,  89 => 31,  87 => 30,  85 => 29,  83 => 28,  81 => 27,  79 => 26,  77 => 25,  75 => 24,  73 => 23,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  44 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main class=\"detalhe\" data-controller=\"detalhe\">
  <article>
    <div class=\"container\">
      {# <div id=\"custom-edit-content\" align=\"right\">
        {% if is_admin %}
          <!-- SE PERFIL == ADMINISTRADOR -->
          <a href=\"{{ customPage.conteudo.edit }}\" title=\"Editar conteúdo\"><img src=\"/themes/casa_firjan/statics/img/pencil-square.svg\" width=\"28\"/></a> 
        {% endif %}                 
      </div> #}
      <!--
                Topo do Conteúdo
            -->                 
      <div class=\"row justify-content-center\">
        <div class=\"col-md-12 col-lg-10\">
          <div class=\"topContent\">
            <a href=\"{{ customPage.conteudo.categoria.url }}\"
               class=\"textCat\">{{ customPage.conteudo.categoria.label }}</a>
            <h2 class=\"title\">{{ customPage.conteudo.titulo }}</h2>
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

            <div class=\"capa\">
              <img src=\"{{ customPage.conteudo.midia.src }}\" alt=\"{{ customPage.conteudo.titulo }}\">
              {% if customPage.conteudo.midia.legenda %}
                <span>{{ customPage.conteudo.midia.legenda }}</span>
              {% endif %}
            </div>
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
        {% if customPage.conteudo.topicos is not empty %}
          <div class=\"topicos\">
            <div class=\"text22 bold\">Tópicos:</div>
            <ul>
              {% for topico in customPage.conteudo.topicos %}
                <li>{{ topico }}</li>
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
    {#<section class=\"destaques\">#}
      {#<div class=\"row\">#}
        {#<div class=\"col-md-12\">#}
          {#<div class=\"textTitleBlock\">Veja mais</div>#}
        {#</div>#}
        {#<div class=\"col-lg-6 col-md-12 itens1\">#}
          {#<a data-fancybox class=\"img video\" href=\"https://www.youtube.com/watch?v=_sI_Ps7JSEk\" title=\"Imagem\">#}
            {#<img src=\"{{ customPage.system.staticPath }}img/trash/foto1.png\">#}
          {#</a>#}
          {#<a class=\"textCat\" href=\"#\">Lab de Tendências</a>#}
          {#<a class=\"textTitle\" href=\"#\">Em um cenário de crise, a criatividade é um diferencial?</a>#}
          {#<p class=\"text14\">É possível supor que somos todos criativos?</p>#}
          {#<p class=\"textCreate\">28/05/2019 por João Koeler</p>#}
        {#</div>#}
        {#<div class=\"col-lg-6 col-md-12 itens2\">#}
          {#<div class=\"row\">#}
            {#<div class=\"col-sm-4\">#}
              {#<a class=\"img\" href=\"#\" title=\"Imagem\">#}
                {#<img src=\"{{ customPage.system.staticPath }}img/trash/foto2.png\">#}
              {#</a>#}
            {#</div>#}
            {#<div class=\"col-sm-8\">#}
              {#<a class=\"textCat\" href=\"#\">Lab de Tendências</a>#}
              {#<a class=\"textTitle\" href=\"#\">Em um cenário de crise, a criatividade é um diferencial?</a>#}
              {#<p class=\"text14\">É possível supor que somos todos criativos?</p>#}
              {#<p class=\"textCreate\">28/05/2019 por João Koeler</p>#}
            {#</div>#}
          {#</div>#}
          {#<div class=\"row\">#}
            {#<div class=\"col-sm-4\">#}
              {#<a class=\"img\" href=\"#\" title=\"Imagem\">#}
                {#<img src=\"{{ customPage.system.staticPath }}img/trash/foto3.png\">#}
              {#</a>#}
            {#</div>#}
            {#<div class=\"col-sm-8\">#}
              {#<a class=\"textCat\" href=\"#\">Lab de Tendências</a>#}
              {#<a class=\"textTitle\" href=\"#\">Em um cenário de crise, a criatividade é um diferencial?</a>#}
              {#<p class=\"text14\">É possível supor que somos todos criativos?</p>#}
              {#<p class=\"textCreate\">28/05/2019 por João Koeler</p>#}
            {#</div>#}
          {#</div>#}
        {#</div>#}
      {#</div>#}
    {#</section>#}
    </div>
  </article>
</main>
", "themes/casa_firjan/templates/pages/page--noticia.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/pages/page--noticia.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 38, "for" => 76);
        static $filters = array("escape" => 16, "raw" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
