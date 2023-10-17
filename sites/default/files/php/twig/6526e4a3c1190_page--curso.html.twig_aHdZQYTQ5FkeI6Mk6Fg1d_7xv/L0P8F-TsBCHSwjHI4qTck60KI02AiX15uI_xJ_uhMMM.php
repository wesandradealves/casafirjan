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

/* themes/casa_firjan/templates/pages/page--curso.html.twig */
class __TwigTemplate_fcf40c941cc948f00c3b07b12d369d34 extends \Twig\Template
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
        echo "<main class=\"detalheEducacao\">
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
      <!--
          Breadcrumbs
      -->
      ";
        // line 14
        echo "      ";
        // line 15
        echo "      ";
        // line 16
        echo "      ";
        // line 17
        echo "      ";
        // line 18
        echo "      ";
        // line 19
        echo "      ";
        // line 20
        echo "      ";
        // line 21
        echo "      ";
        // line 22
        echo "      ";
        // line 23
        echo "      <!--
          Corpo do conteúdo
      -->
      <div class=\"row justify-content-between\">
        <div class=\"col-sm-12 col-lg-4 col-xl-3\">
          <a href=\"#\" class=\"cursoDetalhe ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 28), "nomeLoja", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "\">
            <div class=\"cat ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 29), "status", [], "any", false, false, true, 29) == true)) {
            echo "aberto";
        }
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 29), "categoria", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "</div>
            <div class=\"title\">";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 30), "titulo", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "</div>
            <div class=\"data\">";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 31), "dia", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "/<span>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 31), "mes", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "</span></div>
            ";
        // line 33
        echo "          </a>
        </div>

        <div class=\"col-lg-8 informacoes\">
          <div class=\"topo\">
            <p class=\"nome\">";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 38), "titulo", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 38), "data", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "</p>
            <p class=\"valor\">";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 39), "preco", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "</p>
            ";
        // line 41
        echo "            
            <div id='product-component-1573149169445'></div>
            <script type=\"text/javascript\">
            /*<![CDATA[*/
            (function () {
              var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
              if (window.ShopifyBuy) {
                if (window.ShopifyBuy.UI) {
                  ShopifyBuyInit();
                } else {
                  loadScript();
                }
              } else {
                loadScript();
              }
              function loadScript() {
                var script = document.createElement('script');
                script.async = true;
                script.src = scriptURL;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                script.onload = ShopifyBuyInit;
              }
              function ShopifyBuyInit() {
                var client = ShopifyBuy.buildClient({                  
                  domain: '";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 65), "loja", [], "any", false, false, true, 65), "url", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "',
                  storefrontAccessToken: '";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 66), "loja", [], "any", false, false, true, 66), "token", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "',
                });
                ShopifyBuy.UI.onReady(client).then(function (ui) {
                  ui.createComponent('product', {
                    id: '";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 70), "idProduct", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "',
                    node: document.getElementById('product-component-1573149169445'),
                    moneyFormat: 'R%24%20%7B%7Bamount_with_comma_separator%7D%7D',
                    options: {
              \"product\": {
                \"DOMEvents\": {
                  'click button.shopify-buy__btn': function (evt, target) { 
                    fbq('track', 'AddToCart', {currency: \"BRL\", value: \"";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 77), "precoFB", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "\", content_name: \"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 77), "titulo", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "\", content_ids: \"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 77), "idProduct", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "\", content_type: \"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 77), "categoria", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "\"});
                  }
                },
                \"styles\": {
                  \"product\": {
                    \"@media (min-width: 601px)\": {
                      \"max-width\": \"calc(25% - 20px)\",
                      \"margin-left\": \"20px\",
                      \"margin-bottom\": \"50px\"
                    },
                    \"text-align\": \"left\"
                  },
                  \"button\": {
                    \":hover\": {
                      \"background-color\": \"#1545c1\"
                    },
                    \"background-color\": \"#174dd6\",
                    \":focus\": {
                      \"background-color\": \"#1545c1\"
                    },
                    \"border-radius\": \"0px\"
                  }
                },
                \"contents\": {
                  \"img\": false,
                  \"title\": false,
                  \"price\": false
                },
                \"text\": {
                  \"button\": \"Adicionar ao Carrinho\",
                  \"outOfStock\": \"Aguarde próximas turmas\",
                }
              },
              \"productSet\": {
                \"styles\": {
                  \"products\": {
                    \"@media (min-width: 601px)\": {
                      \"margin-left\": \"-20px\"
                    }
                  }
                }
              },
              \"modalProduct\": {
                \"contents\": {
                  \"img\": false,
                  \"imgWithCarousel\": true,
                  \"button\": false,
                  \"buttonWithQuantity\": true
                },
                \"styles\": {
                  \"product\": {
                    \"@media (min-width: 601px)\": {
                      \"max-width\": \"100%\",
                      \"margin-left\": \"0px\",
                      \"margin-bottom\": \"0px\"
                    }
                  },
                  \"button\": {
                    \":hover\": {
                      \"background-color\": \"#1545c1\"
                    },
                    \"background-color\": \"#174dd6\",
                    \":focus\": {
                      \"background-color\": \"#1545c1\"
                    },
                    \"border-radius\": \"0px\"
                  },
                  \"title\": {
                    \"color\": \"#393230\"
                  },
                  \"price\": {
                    \"color\": \"#393230\"
                  },
                  \"compareAt\": {
                    \"color\": \"#393230\"
                  },
                  \"description\": {
                    \"color\": \"#393230\"
                  }
                },
                \"text\": {
                  \"button\": \"Adicionar ao carrinho\"
                }
              },
              \"cart\": {
                \"styles\": {
                  \"button\": {
                    \":hover\": {
                      \"background-color\": \"#1545c1\"
                    },
                    \"background-color\": \"#174dd6\",
                    \":focus\": {
                      \"background-color\": \"#1545c1\"
                    },
                    \"border-radius\": \"0px\"
                  }
                },
                \"text\": {
                  \"title\": \"Carrinho\",
                  \"total\": \"Subtotal\",
                  \"empty\": \"Seu carrinho está vazio\",
                  \"notice\": \"Códigos de envio e desconto são adicionados no checkout.\",
                  \"button\": \"Finalizar\",
                  \"noteDescription\": \"Observações do pedido\"
                },
                \"contents\": {
                  \"note\": true
                }
              },
              \"toggle\": {
                \"styles\": {
                  \"toggle\": {
                    \"background-color\": \"#174dd6\",
                    \":hover\": {
                      \"background-color\": \"#1545c1\"
                    },
                    \":focus\": {
                      \"background-color\": \"#1545c1\"
                    }
                  }
                }
              }
            },
                  });
                });
              }
            })();
            /*]]>*/
            </script>

            
          </div>
          <div class=\"corpo text20\">
            ";
        // line 210
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "conteudo", [], "any", false, false, true, 210), "texto", [], "any", false, false, true, 210), 210, $this->source));
        echo "
          </div>
        </div>
      </div>


    </div>
  </article>
</main>
";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/pages/page--curso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 210,  173 => 77,  163 => 70,  156 => 66,  152 => 65,  126 => 41,  122 => 39,  116 => 38,  109 => 33,  103 => 31,  99 => 30,  91 => 29,  87 => 28,  80 => 23,  78 => 22,  76 => 21,  74 => 20,  72 => 19,  70 => 18,  68 => 17,  66 => 16,  64 => 15,  62 => 14,  55 => 8,  50 => 7,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main class=\"detalheEducacao\">
  <article>
    <div class=\"container\">
      <div id=\"custom-edit-content\" align=\"right\">
        {% if is_admin %}
          <!-- SE PERFIL == ADMINISTRADOR -->
          <a href=\"{{ customPage.conteudo.edit }}\" title=\"Editar conteúdo\"><img src=\"/themes/casa_firjan/statics/img/pencil-square.svg\" width=\"28\"/></a> 
        {% endif %}                 
      </div>
      <!--
          Breadcrumbs
      -->
      {#<div class=\"row\">#}
      {#  <div class=\"col-md-12\">#}
      {#    <ul class=\"breadcrumbs\">#}
      {#      <li><a href=\"#\">Lab de Educação</a></li>#}
      {#      <li><a href=\"#\">Educação</a></li>#}
      {#      <li><a href=\"#\">Cursos</a></li>#}
      {#      <li><a href=\"#\">Marketing Digital - 10/07</a></li>#}
      {#    </ul>#}
      {#  </div>#}
      {#</div>#}
      <!--
          Corpo do conteúdo
      -->
      <div class=\"row justify-content-between\">
        <div class=\"col-sm-12 col-lg-4 col-xl-3\">
          <a href=\"#\" class=\"cursoDetalhe {{ customPage.conteudo.nomeLoja }}\">
            <div class=\"cat {% if customPage.conteudo.status == true %}aberto{% endif %}\">{{ customPage.conteudo.categoria }}</div>
            <div class=\"title\">{{ customPage.conteudo.titulo }}</div>
            <div class=\"data\">{{ customPage.conteudo.dia }}/<span>{{ customPage.conteudo.mes }}</span></div>
            {#<div class=\"carga\">{{ customPage.conteudo.cargaHoraria }}h</div>#}
          </a>
        </div>

        <div class=\"col-lg-8 informacoes\">
          <div class=\"topo\">
            <p class=\"nome\">{{ customPage.conteudo.titulo }} - {{ customPage.conteudo.data }}</p>
            <p class=\"valor\">{{ customPage.conteudo.preco }}</p>
            {#<a target=\"_blank\" href=\"{{ customPage.conteudo.linkCompra }}\" class=\"btnAzul carrinho\">Adicionar ao carrinho</a>#}
            
            <div id='product-component-1573149169445'></div>
            <script type=\"text/javascript\">
            /*<![CDATA[*/
            (function () {
              var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
              if (window.ShopifyBuy) {
                if (window.ShopifyBuy.UI) {
                  ShopifyBuyInit();
                } else {
                  loadScript();
                }
              } else {
                loadScript();
              }
              function loadScript() {
                var script = document.createElement('script');
                script.async = true;
                script.src = scriptURL;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                script.onload = ShopifyBuyInit;
              }
              function ShopifyBuyInit() {
                var client = ShopifyBuy.buildClient({                  
                  domain: '{{ customPage.conteudo.loja.url }}',
                  storefrontAccessToken: '{{ customPage.conteudo.loja.token }}',
                });
                ShopifyBuy.UI.onReady(client).then(function (ui) {
                  ui.createComponent('product', {
                    id: '{{ customPage.conteudo.idProduct }}',
                    node: document.getElementById('product-component-1573149169445'),
                    moneyFormat: 'R%24%20%7B%7Bamount_with_comma_separator%7D%7D',
                    options: {
              \"product\": {
                \"DOMEvents\": {
                  'click button.shopify-buy__btn': function (evt, target) { 
                    fbq('track', 'AddToCart', {currency: \"BRL\", value: \"{{ customPage.conteudo.precoFB }}\", content_name: \"{{ customPage.conteudo.titulo }}\", content_ids: \"{{ customPage.conteudo.idProduct }}\", content_type: \"{{ customPage.conteudo.categoria }}\"});
                  }
                },
                \"styles\": {
                  \"product\": {
                    \"@media (min-width: 601px)\": {
                      \"max-width\": \"calc(25% - 20px)\",
                      \"margin-left\": \"20px\",
                      \"margin-bottom\": \"50px\"
                    },
                    \"text-align\": \"left\"
                  },
                  \"button\": {
                    \":hover\": {
                      \"background-color\": \"#1545c1\"
                    },
                    \"background-color\": \"#174dd6\",
                    \":focus\": {
                      \"background-color\": \"#1545c1\"
                    },
                    \"border-radius\": \"0px\"
                  }
                },
                \"contents\": {
                  \"img\": false,
                  \"title\": false,
                  \"price\": false
                },
                \"text\": {
                  \"button\": \"Adicionar ao Carrinho\",
                  \"outOfStock\": \"Aguarde próximas turmas\",
                }
              },
              \"productSet\": {
                \"styles\": {
                  \"products\": {
                    \"@media (min-width: 601px)\": {
                      \"margin-left\": \"-20px\"
                    }
                  }
                }
              },
              \"modalProduct\": {
                \"contents\": {
                  \"img\": false,
                  \"imgWithCarousel\": true,
                  \"button\": false,
                  \"buttonWithQuantity\": true
                },
                \"styles\": {
                  \"product\": {
                    \"@media (min-width: 601px)\": {
                      \"max-width\": \"100%\",
                      \"margin-left\": \"0px\",
                      \"margin-bottom\": \"0px\"
                    }
                  },
                  \"button\": {
                    \":hover\": {
                      \"background-color\": \"#1545c1\"
                    },
                    \"background-color\": \"#174dd6\",
                    \":focus\": {
                      \"background-color\": \"#1545c1\"
                    },
                    \"border-radius\": \"0px\"
                  },
                  \"title\": {
                    \"color\": \"#393230\"
                  },
                  \"price\": {
                    \"color\": \"#393230\"
                  },
                  \"compareAt\": {
                    \"color\": \"#393230\"
                  },
                  \"description\": {
                    \"color\": \"#393230\"
                  }
                },
                \"text\": {
                  \"button\": \"Adicionar ao carrinho\"
                }
              },
              \"cart\": {
                \"styles\": {
                  \"button\": {
                    \":hover\": {
                      \"background-color\": \"#1545c1\"
                    },
                    \"background-color\": \"#174dd6\",
                    \":focus\": {
                      \"background-color\": \"#1545c1\"
                    },
                    \"border-radius\": \"0px\"
                  }
                },
                \"text\": {
                  \"title\": \"Carrinho\",
                  \"total\": \"Subtotal\",
                  \"empty\": \"Seu carrinho está vazio\",
                  \"notice\": \"Códigos de envio e desconto são adicionados no checkout.\",
                  \"button\": \"Finalizar\",
                  \"noteDescription\": \"Observações do pedido\"
                },
                \"contents\": {
                  \"note\": true
                }
              },
              \"toggle\": {
                \"styles\": {
                  \"toggle\": {
                    \"background-color\": \"#174dd6\",
                    \":hover\": {
                      \"background-color\": \"#1545c1\"
                    },
                    \":focus\": {
                      \"background-color\": \"#1545c1\"
                    }
                  }
                }
              }
            },
                  });
                });
              }
            })();
            /*]]>*/
            </script>

            
          </div>
          <div class=\"corpo text20\">
            {{ customPage.conteudo.texto|raw }}
          </div>
        </div>
      </div>


    </div>
  </article>
</main>
", "themes/casa_firjan/templates/pages/page--curso.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/pages/page--curso.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("escape" => 7, "raw" => 210);
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
