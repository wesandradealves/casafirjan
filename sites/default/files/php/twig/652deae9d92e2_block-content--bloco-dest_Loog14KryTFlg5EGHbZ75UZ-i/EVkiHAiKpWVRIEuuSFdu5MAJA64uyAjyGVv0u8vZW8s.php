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

/* themes/casa_firjan/templates/blocks/block-content--bloco-destaque.html.twig */
class __TwigTemplate_272a7ad3e08d1248e89659acb4795567 extends \Twig\Template
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
        $context["layout"] = ((($context["layout"] ?? null)) ? (($context["layout"] ?? null)) : ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_layout", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null)));
        // line 2
        $context["mostrar_header"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mostrar_header", [], "any", false, false, true, 2)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null), "value", [], "any", false, false, true, 2);
        // line 3
        $context["mostrar_botao_conheca_mais"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mostrar_botao_conheca_mais", [], "any", false, false, true, 3)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null), "value", [], "any", false, false, true, 3);
        // line 4
        $context["botao_label"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_botao_label", [], "any", false, false, true, 4), 0, [], "any", false, false, true, 4)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#context"] ?? null) : null), "value", [], "any", false, false, true, 4);
        // line 5
        $context["enable_filter"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_enable_filter", [], "any", false, false, true, 5)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#items"] ?? null) : null), "value", [], "any", false, false, true, 5);
        // line 6
        echo "<section style=\"background-image: url(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bg"] ?? null), 6, $this->source), "html", null, true);
        echo ")\" class=\"bloco-destaque ";
        if (($context["horizontal"] ?? null)) {
            echo " horizontal ";
        }
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_classes", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#context"] ?? null) : null), "value", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\" data-layout=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 6, $this->source), "html", null, true);
        echo "\">
    <div class=\"container\">

        <div class=\"d-flex flex-wrap ";
        // line 9
        if ((($context["layout"] ?? null) == "video")) {
            echo " align-items-center ";
        }
        echo "\">
            ";
        // line 10
        if (($context["mostrar_header"] ?? null)) {
            // line 11
            echo "            <div class=\"bloco-destaque--header ";
            if ((($context["layout"] ?? null) != "video")) {
                echo " mb-4 ";
            }
            echo " col-12 ";
            if ((($context["layout"] ?? null) == "video")) {
                echo " col-lg-3 pe-lg-4 ";
            }
            echo " ps-0 pe-0\">
                <h3 class=\"title d-flex align-items-center justify-content-between m-0 mb-4\">
                    <span>";
            // line 13
            if (($context["title"] ?? null)) {
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 13, $this->source), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo", [], "any", false, false, true, 13), 0, [], "any", false, false, true, 13)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#context"] ?? null) : null), "value", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo " ";
            }
            echo "</span>
                    ";
            // line 14
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ver_todos", [], "any", false, false, true, 14)) && (($context["layout"] ?? null) != "video"))) {
                // line 15
                echo "                        <a class=\"btn\" href=\"";
                if ((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ver_todos", [], "any", false, false, true, 15), 0, [], "any", false, false, true, 15)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#url"] ?? null) : null)) {
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ver_todos", [], "any", false, false, true, 15), 0, [], "any", false, false, true, 15)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#url"] ?? null) : null), 15, $this->source), "html", null, true);
                    echo " ";
                } else {
                    echo " nodes.0.categoria.url ";
                }
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ver_todos", [], "any", false, false, true, 15), 0, [], "any", false, false, true, 15)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#title"] ?? null) : null), 15, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_10 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ver_todos", [], "any", false, false, true, 15), 0, [], "any", false, false, true, 15)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#title"] ?? null) : null), 15, $this->source), "html", null, true);
                echo "</a>
                    ";
            }
            // line 16
            echo "                    
                </h3>
                <h4 class=\"subtitle m-0 mt-2\">
                    ";
            // line 20
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
                </h4>
                ";
            // line 22
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ver_todos", [], "any", false, false, true, 22)) && (($context["layout"] ?? null) == "video"))) {
                // line 23
                echo "                    <a class=\"btn mt-4\" href=\"";
                if ((($__internal_compile_11 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ver_todos", [], "any", false, false, true, 23), 0, [], "any", false, false, true, 23)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#url"] ?? null) : null)) {
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_12 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ver_todos", [], "any", false, false, true, 23), 0, [], "any", false, false, true, 23)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#url"] ?? null) : null), 23, $this->source), "html", null, true);
                    echo " ";
                } else {
                    echo " nodes.0.categoria.url ";
                }
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ver_todos", [], "any", false, false, true, 23), 0, [], "any", false, false, true, 23)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#title"] ?? null) : null), 23, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ver_todos", [], "any", false, false, true, 23), 0, [], "any", false, false, true, 23)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#title"] ?? null) : null), 23, $this->source), "html", null, true);
                echo "</a>
                ";
            }
            // line 25
            echo "            </div>
            ";
        }
        // line 27
        echo "
            ";
        // line 28
        if (($context["enable_filter"] ?? null)) {
            // line 29
            echo "                ";
            $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/filter.html.twig"), "themes/casa_firjan/templates/blocks/block-content--bloco-destaque.html.twig", 29)->display(twig_array_merge($context, ["data" => ($context["nodes"] ?? null)]));
            // line 30
            echo "            ";
        }
        // line 31
        echo "
            <div class=\"row flex-fill bloco-destaque--grid ";
        // line 32
        if ((($context["layout"] ?? null) == "video")) {
            echo " mt-5 mt-lg-0 ";
        }
        echo "\">
                ";
        // line 33
        if ((($context["layout"] ?? null) == "video")) {
            // line 34
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["nodes"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["node"]) {
                if (($context["index"] <= 2)) {
                    // line 35
                    echo "                    <div class=\"post--grid";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["index"], 35, $this->source), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 35) == "")) {
                        echo " onclick=\"window.location = '";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "url", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                        echo "'\" ";
                    }
                    echo ">
                        ";
                    // line 36
                    $context["vid"] = ((twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 36)) ? (((twig_in_filter(".be", twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 36))) ? ((($__internal_compile_15 = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 36), 36, $this->source), ".be/")) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[1] ?? null) : null)) : ((($__internal_compile_16 = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 36), 36, $this->source), "?v=")) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[1] ?? null) : null)))) : (""));
                    // line 37
                    echo "                        ";
                    $context["image"] = ((twig_get_attribute($this->env, $this->source, $context["node"], "image", [], "any", false, false, true, 37)) ? (twig_get_attribute($this->env, $this->source, $context["node"], "image", [], "any", false, false, true, 37)) : (((twig_get_attribute($this->env, $this->source, $context["node"], "media_image", [], "any", false, false, true, 37)) ? (twig_get_attribute($this->env, $this->source, $context["node"], "media_image", [], "any", false, false, true, 37)) : ((("//i3.ytimg.com/vi/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "youtubeId", [], "any", false, false, true, 37), 37, $this->source)) . "/hqdefault.jpg")))));
                    // line 38
                    echo "                        <div class=\"post-grid--inner\">
                            <a title=\"";
                    // line 39
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "title", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo "\" data-fancybox class=\"thumbnail\" style=\"background-image: url(";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 39, $this->source), "html", null, true);
                    echo "); ";
                    if ((twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 39) == "")) {
                        echo " pointer-events: none; ";
                    }
                    echo "\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo "\">
                                <span class=\"thumbnail-inner\">
                                    ";
                    // line 41
                    if ((twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 41) != "")) {
                        // line 42
                        echo "                                        <i class=\"fa-solid fa-play\"></i>
                                    ";
                    }
                    // line 44
                    echo "                                </span>
                            </a>
                        </div>
                    </div>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['node'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                ";
        } else {
            // line 50
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["nodes"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["node"]) {
                if (twig_length_filter($this->env, ($context["nodes"] ?? null))) {
                    // line 51
                    echo "                        ";
                    $context["url"] = null;
                    // line 52
                    echo "
                        ";
                    // line 53
                    if (twig_get_attribute($this->env, $this->source, $context["node"], "field_link_para_compra", [], "any", false, false, true, 53)) {
                        // line 54
                        echo "                            ";
                        $context["url"] = twig_get_attribute($this->env, $this->source, $context["node"], "field_link_para_compra", [], "any", false, false, true, 54);
                        // line 55
                        echo "                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, $context["node"], "field_link", [], "any", false, false, true, 55)) {
                        // line 56
                        echo "                            ";
                        $context["url"] = twig_get_attribute($this->env, $this->source, $context["node"], "field_link", [], "any", false, false, true, 56);
                        // line 57
                        echo "                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, $context["node"], "field_link_externo", [], "any", false, false, true, 57)) {
                        // line 58
                        echo "                            ";
                        $context["url"] = twig_get_attribute($this->env, $this->source, $context["node"], "field_link_externo", [], "any", false, false, true, 58);
                        // line 59
                        echo "                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, $context["node"], "url", [], "any", false, false, true, 59)) {
                        // line 60
                        echo "                            ";
                        $context["url"] = twig_get_attribute($this->env, $this->source, $context["node"], "url", [], "any", false, false, true, 60);
                        // line 61
                        echo "                        ";
                    }
                    // line 62
                    echo "
                        ";
                    // line 63
                    if (twig_get_attribute($this->env, $this->source, $context["node"], "categoria", [], "any", false, false, true, 63)) {
                        // line 64
                        echo "                            ";
                        $context["term"] = $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_get_term($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "categoria", [], "any", false, false, true, 64), 64, $this->source));
                        // line 65
                        echo "                        ";
                    }
                    echo "  

                        <div ";
                    // line 67
                    if (twig_get_attribute($this->env, $this->source, $context["node"], "categoria", [], "any", false, false, true, 67)) {
                        echo " data-category=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["term"] ?? null), "name", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                        echo "\" ";
                    }
                    echo " class=\"";
                    if (($context["horizontal"] ?? null)) {
                        echo " mb-5 ";
                    } else {
                        echo " mb-4 ";
                    }
                    echo "  post--grid";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["index"], 67, $this->source), "html", null, true);
                    echo " d-flex flex-column ";
                    if (((($context["layout"] ?? null) == "2_columns") || (($context["layout"] ?? null) == "yellow_box"))) {
                        echo " col-lg-6 ";
                    } elseif ((($context["layout"] ?? null) == "1_columns")) {
                        echo " col-12 ";
                    } else {
                        echo " col-lg-4 ";
                    }
                    echo "\">
                            ";
                    // line 68
                    $context["vid"] = ((twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 68)) ? (((twig_in_filter(".be", twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 68))) ? ((($__internal_compile_17 = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 68), 68, $this->source), ".be/")) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[1] ?? null) : null)) : ((($__internal_compile_18 = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 68), 68, $this->source), "?v=")) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[1] ?? null) : null)))) : (""));
                    // line 69
                    echo "                            ";
                    $context["tipo_de_associacao"] = $this->extensions['Drupal\ds_twig_extensions\ApplyPrefix']->_slugify($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "tipo_de_associacao", [], "any", false, false, true, 69), 69, $this->source));
                    // line 70
                    echo "                            ";
                    $context["image"] = ((twig_get_attribute($this->env, $this->source, $context["node"], "image", [], "any", false, false, true, 70)) ? (twig_get_attribute($this->env, $this->source, $context["node"], "image", [], "any", false, false, true, 70)) : (((twig_get_attribute($this->env, $this->source, $context["node"], "media_image", [], "any", false, false, true, 70)) ? (twig_get_attribute($this->env, $this->source, $context["node"], "media_image", [], "any", false, false, true, 70)) : ((("//i3.ytimg.com/vi/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "youtubeId", [], "any", false, false, true, 70), 70, $this->source)) . "/hqdefault.jpg")))));
                    // line 71
                    echo "                            
                            <div ";
                    // line 72
                    if (($context["horizontal"] ?? null)) {
                        echo " horizontal ";
                    }
                    echo " class=\"post-grid--inner flex-fill ";
                    if (($context["horizontal"] ?? null)) {
                        echo " d-flex flex-row flex-wrap align-items-start ";
                    } else {
                        echo " flex-column ";
                    }
                    echo "\">
                                <a  title=\"";
                    // line 73
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "title", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 73)) {
                        echo " data-fancybox href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        echo "\" ";
                    } else {
                        echo " href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 73, $this->source), "html", null, true);
                        echo "\" ";
                    }
                    echo " class=\"thumbnail mb-4 ";
                    if (($context["horizontal"] ?? null)) {
                        echo " mb-lg-0 col-12 col-lg-4 ";
                    }
                    echo "\" style=\"background-image: url(";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 73, $this->source), "html", null, true);
                    echo "); ";
                    if ((twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 73) == "")) {
                        echo " cursor: pointer; ";
                    }
                    echo "\" >
                                    <span class=\"thumbnail-inner\">
                                        ";
                    // line 75
                    if ((twig_get_attribute($this->env, $this->source, $context["node"], "media_video", [], "any", false, false, true, 75) != "")) {
                        // line 76
                        echo "                                            <i class=\"fa-solid fa-play\"></i>
                                        ";
                    }
                    // line 78
                    echo "                                        ";
                    if ((($context["layout"] ?? null) == "yellow_box")) {
                        // line 79
                        echo "                                            <span class=\"p-2 ps-4 pe-4 m-3\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "title", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                        echo "</span>
                                        ";
                    }
                    // line 80
                    echo " 
                                    </span>
                                </a>
                                <div ";
                    // line 83
                    echo " class=\"info ";
                    if (($context["horizontal"] ?? null)) {
                        echo " flex-fill ps-lg-5 ";
                    }
                    echo " ";
                    if ((($context["layout"] ?? null) == "yellow_box")) {
                        echo " p-5 pt-0 ";
                    }
                    echo "\">
                                    ";
                    // line 84
                    if (twig_get_attribute($this->env, $this->source, $context["node"], "categoria", [], "any", false, false, true, 84)) {
                        // line 85
                        echo "                                        <h4 class=\"category m-0 mb-2\">
                                            ";
                        // line 86
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["term"] ?? null), "name", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                        echo "
                                        </h4>
                                    ";
                    }
                    // line 89
                    echo "
                                    ";
                    // line 90
                    if ((($context["layout"] ?? null) != "yellow_box")) {
                        // line 91
                        echo "                                        <h2 class=\"title m-0\" ><a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 91, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "title", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                        echo "</a></h2>
                                    ";
                    }
                    // line 92
                    echo " 

                                    ";
                    // line 95
                    echo "
                                    ";
                    // line 97
                    echo "                                    <p class=\"text m-0 mt-2\" >";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "text", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                    echo "</p>


                                    ";
                    // line 100
                    if ((($context["mostrar_botao_conheca_mais"] ?? null) && (($context["layout"] ?? null) != "yellow_box"))) {
                        // line 101
                        echo "                                        ";
                        if (((twig_get_attribute($this->env, $this->source, $context["node"], "type", [], "any", false, false, true, 101) == "card") && twig_get_attribute($this->env, $this->source, $context["node"], "field_link", [], "any", false, false, true, 101))) {
                            // line 102
                            echo "                                            <a  class=\"btn mt-4 mb-2\" href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "field_link", [], "any", false, false, true, 102), "uri", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                            echo "\" title=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((($context["botao_label"] ?? null)) ? (($context["botao_label"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "field_link", [], "any", false, false, true, 102), "title", [], "any", false, false, true, 102))), "html", null, true);
                            echo "\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((($context["botao_label"] ?? null)) ? (($context["botao_label"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "field_link", [], "any", false, false, true, 102), "title", [], "any", false, false, true, 102))), "html", null, true);
                            echo "</a>         
                                        ";
                        } else {
                            // line 104
                            echo "                                            <a  class=\"btn mt-4 mb-2\" href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, $context["node"], "field_link_para_compra", [], "any", false, false, true, 104)) ? (twig_get_attribute($this->env, $this->source, $context["node"], "field_link_para_compra", [], "any", false, false, true, 104)) : (((twig_get_attribute($this->env, $this->source, $context["node"], "field_link", [], "any", false, false, true, 104)) ? (twig_get_attribute($this->env, $this->source, $context["node"], "field_link", [], "any", false, false, true, 104)) : (((twig_get_attribute($this->env, $this->source, $context["node"], "field_link_externo", [], "any", false, false, true, 104)) ? (twig_get_attribute($this->env, $this->source, $context["node"], "field_link_externo", [], "any", false, false, true, 104)) : (twig_get_attribute($this->env, $this->source, $context["node"], "url", [], "any", false, false, true, 104))))))), "html", null, true);
                            echo "\" title=\"";
                            if (($context["botao_label"] ?? null)) {
                                echo " ";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["botao_label"] ?? null), 104, $this->source), "html", null, true);
                                echo " ";
                            } else {
                                echo " Saiba Mais ";
                            }
                            echo "\">";
                            if (($context["botao_label"] ?? null)) {
                                echo " ";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["botao_label"] ?? null), 104, $this->source), "html", null, true);
                                echo " ";
                            } else {
                                echo " Saiba Mais ";
                            }
                            echo "</a>         
                                        ";
                        }
                        // line 106
                        echo "                                    ";
                    }
                    echo " 

                                    ";
                    // line 113
                    echo "                                </div>
                            </div>                        
                        </div>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['node'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "     
                    
                    ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["taxonomies"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["term"]) {
                if (twig_length_filter($this->env, ($context["taxonomies"] ?? null))) {
                    // line 119
                    echo "                        <div onclick=\"window.location = '";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["term"], "url", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                    echo "'\" class=\"mb-5 post--grid";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["index"], 119, $this->source), "html", null, true);
                    echo " d-flex flex-column ";
                    if (((($context["layout"] ?? null) == "2_columns") || (($context["layout"] ?? null) == "yellow_box"))) {
                        echo " col-lg-6 ";
                    } elseif ((($context["layout"] ?? null) == "1_columns")) {
                        echo " col-12 ";
                    } else {
                        echo " col-lg-4 ";
                    }
                    echo "\">
                            <div ";
                    // line 120
                    if (($context["horizontal"] ?? null)) {
                        echo " horizontal ";
                    }
                    echo " class=\"post-grid--inner flex-fill ";
                    if (($context["horizontal"] ?? null)) {
                        echo " flex-row flex-wrap align-items-stretch ";
                    } else {
                        echo " flex-column ";
                    }
                    echo "\">
                                <a title=\"";
                    // line 121
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["term"], "name", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                    echo "\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["term"], "url", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                    echo "\" class=\"thumbnail mb-4 ";
                    if (($context["horizontal"] ?? null)) {
                        echo " mb-lg-0 col-12 col-lg-4 ";
                    }
                    echo "\" style=\"background-image: url(";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, $context["term"], "field_imagem", [], "any", false, false, true, 121)) ? (twig_get_attribute($this->env, $this->source, $context["term"], "field_imagem", [], "any", false, false, true, 121)) : (twig_get_attribute($this->env, $this->source, $context["term"], "field_thumb", [], "any", false, false, true, 121))), "html", null, true);
                    echo ");\">
                                    <span class=\"thumbnail-inner\">
                                        ";
                    // line 123
                    if ((($context["layout"] ?? null) == "yellow_box")) {
                        // line 124
                        echo "                                            <span class=\"p-2 ps-4 pe-4 m-3\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["term"], "name", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
                        echo "</span>
                                        ";
                    }
                    // line 126
                    echo "                                    </span>
                                </a>
                                <div class=\"info ";
                    // line 128
                    if (($context["horizontal"] ?? null)) {
                        echo " flex-fill ps-lg-5 ";
                    }
                    echo " ";
                    if ((($context["layout"] ?? null) == "yellow_box")) {
                        echo " p-5 pt-0 ";
                    }
                    echo "\" onclick=\"window.location = '";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["term"], "url", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                    echo "'\">
                                    ";
                    // line 129
                    if ((($context["layout"] ?? null) == "yellow_box")) {
                        // line 130
                        echo "                                        ";
                        // line 135
                        echo "                                        <p class=\"text m-0 mt-2\" >";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["term"], "field_sub_texto", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                        echo "</p>
                                    ";
                    } else {
                        // line 137
                        echo "                                        <h2 class=\"title m-0\" >";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["term"], "name", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                        echo "</h2>
                                    ";
                    }
                    // line 139
                    echo "                                    <p class=\"d-block text m-0 mt-2\" >";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, $context["term"], "field_texto", [], "any", false, false, true, 139)) ? (twig_get_attribute($this->env, $this->source, $context["term"], "field_texto", [], "any", false, false, true, 139)) : (twig_get_attribute($this->env, $this->source, $context["term"], "description", [], "any", false, false, true, 139))), "html", null, true);
                    echo "</p>
                                </div>
                            </div>                        
                        </div>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['term'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "   
                ";
        }
        // line 145
        echo "            </div>
        </div>        
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/blocks/block-content--bloco-destaque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  579 => 145,  575 => 143,  562 => 139,  556 => 137,  550 => 135,  548 => 130,  546 => 129,  534 => 128,  530 => 126,  524 => 124,  522 => 123,  509 => 121,  497 => 120,  482 => 119,  477 => 118,  473 => 116,  463 => 113,  457 => 106,  435 => 104,  425 => 102,  422 => 101,  420 => 100,  413 => 97,  410 => 95,  406 => 92,  398 => 91,  396 => 90,  393 => 89,  387 => 86,  384 => 85,  382 => 84,  371 => 83,  366 => 80,  360 => 79,  357 => 78,  353 => 76,  351 => 75,  326 => 73,  314 => 72,  311 => 71,  308 => 70,  305 => 69,  303 => 68,  279 => 67,  273 => 65,  270 => 64,  268 => 63,  265 => 62,  262 => 61,  259 => 60,  256 => 59,  253 => 58,  250 => 57,  247 => 56,  244 => 55,  241 => 54,  239 => 53,  236 => 52,  233 => 51,  227 => 50,  224 => 49,  213 => 44,  209 => 42,  207 => 41,  194 => 39,  191 => 38,  188 => 37,  186 => 36,  175 => 35,  169 => 34,  167 => 33,  161 => 32,  158 => 31,  155 => 30,  152 => 29,  150 => 28,  147 => 27,  143 => 25,  127 => 23,  125 => 22,  119 => 20,  114 => 16,  98 => 15,  96 => 14,  84 => 13,  72 => 11,  70 => 10,  64 => 9,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set layout = layout ? layout : content.field_layout.0[\"#markup\"] %}
{% set mostrar_header = content.field_mostrar_header['#items'].value %}
{% set mostrar_botao_conheca_mais = content.field_mostrar_botao_conheca_mais['#items'].value %}
{% set botao_label = content.field_botao_label.0['#context'].value %}
{% set enable_filter = content.field_enable_filter['#items'].value %}
<section style=\"background-image: url({{bg}})\" class=\"bloco-destaque {% if horizontal %} horizontal {% endif %} {{content.field_classes.0['#context'].value}}\" data-layout=\"{{layout}}\">
    <div class=\"container\">

        <div class=\"d-flex flex-wrap {% if layout == 'video' %} align-items-center {% endif %}\">
            {% if mostrar_header %}
            <div class=\"bloco-destaque--header {% if layout != 'video' %} mb-4 {% endif %} col-12 {% if layout == 'video' %} col-lg-3 pe-lg-4 {% endif %} ps-0 pe-0\">
                <h3 class=\"title d-flex align-items-center justify-content-between m-0 mb-4\">
                    <span>{% if title %} {{title}} {% else %} {{content.field_titulo.0['#context'].value}} {% endif %}</span>
                    {% if content.field_ver_todos|render and layout != 'video' %}
                        <a class=\"btn\" href=\"{% if content.field_ver_todos.0['#url'] %} {{content.field_ver_todos.0['#url']}} {% else %} nodes.0.categoria.url {% endif %}\" title=\"{{ content.field_ver_todos.0['#title'] }}\">{{ content.field_ver_todos.0['#title'] }}</a>
                    {% endif %}                    
                </h3>
                <h4 class=\"subtitle m-0 mt-2\">
                    {#{{content.field_subtitulo.0['#context'].value}}#}
                    {{content.field_subtitle}}
                </h4>
                {% if content.field_ver_todos|render and layout == 'video' %}
                    <a class=\"btn mt-4\" href=\"{% if content.field_ver_todos.0['#url'] %} {{content.field_ver_todos.0['#url']}} {% else %} nodes.0.categoria.url {% endif %}\" title=\"{{ content.field_ver_todos.0['#title'] }}\">{{ content.field_ver_todos.0['#title'] }}</a>
                {% endif %}
            </div>
            {% endif %}

            {% if enable_filter %}
                {% include directory ~ '/templates/includes/filter.html.twig' with {data: nodes} %}
            {% endif %}

            <div class=\"row flex-fill bloco-destaque--grid {% if layout == 'video' %} mt-5 mt-lg-0 {% endif %}\">
                {% if layout == 'video' %}
                    {% for index, node in nodes if index <= 2 %}
                    <div class=\"post--grid{{index}}\" {% if node.media_video == '' %} onclick=\"window.location = '{{node.url}}'\" {% endif %}>
                        {% set vid = node.media_video ? ('.be' in node.media_video ? node.media_video|split('.be/')[1] : node.media_video|split('?v=')[1]) : '' %}
                        {% set image = node.image ? node.image : node.media_image ? node.media_image : '//i3.ytimg.com/vi/'~ node.youtubeId ~'/hqdefault.jpg' %}
                        <div class=\"post-grid--inner\">
                            <a title=\"{{node.title}}\" data-fancybox class=\"thumbnail\" style=\"background-image: url({{image}}); {% if node.media_video == '' %} pointer-events: none; {% endif %}\" href=\"{{node.media_video}}\">
                                <span class=\"thumbnail-inner\">
                                    {% if node.media_video != '' %}
                                        <i class=\"fa-solid fa-play\"></i>
                                    {% endif %}
                                </span>
                            </a>
                        </div>
                    </div>
                    {% endfor %}
                {% else %}
                    {% for index, node in nodes if nodes|length %}
                        {% set url = null %}

                        {% if node.field_link_para_compra %}
                            {% set url = node.field_link_para_compra %}
                        {% elseif node.field_link %}
                            {% set url = node.field_link %}
                        {% elseif node.field_link_externo %}
                            {% set url = node.field_link_externo %}
                        {% elseif node.url %}
                            {% set url = node.url %}
                        {% endif %}

                        {% if node.categoria %}
                            {% set term = get_term(node.categoria) %}
                        {% endif %}  

                        <div {% if node.categoria %} data-category=\"{{term.name}}\" {% endif %} class=\"{% if horizontal %} mb-5 {% else %} mb-4 {% endif %}  post--grid{{index}} d-flex flex-column {% if layout == '2_columns' or layout == 'yellow_box' %} col-lg-6 {% elseif layout == '1_columns' %} col-12 {% else %} col-lg-4 {% endif %}\">
                            {% set vid = node.media_video ? ('.be' in node.media_video ? node.media_video|split('.be/')[1] : node.media_video|split('?v=')[1]) : '' %}
                            {% set tipo_de_associacao = slugify(node.tipo_de_associacao) %}
                            {% set image = node.image ? node.image : node.media_image ? node.media_image : '//i3.ytimg.com/vi/'~ node.youtubeId ~'/hqdefault.jpg' %}
                            
                            <div {% if horizontal %} horizontal {% endif %} class=\"post-grid--inner flex-fill {% if horizontal %} d-flex flex-row flex-wrap align-items-start {% else %} flex-column {% endif %}\">
                                <a  title=\"{{node.title}}\" {% if node.media_video %} data-fancybox href=\"{{node.media_video}}\" {% else %} href=\"{{url}}\" {% endif %} class=\"thumbnail mb-4 {% if horizontal %} mb-lg-0 col-12 col-lg-4 {% endif %}\" style=\"background-image: url({{image}}); {% if node.media_video == '' %} cursor: pointer; {% endif %}\" >
                                    <span class=\"thumbnail-inner\">
                                        {% if node.media_video != '' %}
                                            <i class=\"fa-solid fa-play\"></i>
                                        {% endif %}
                                        {% if layout == 'yellow_box' %}
                                            <span class=\"p-2 ps-4 pe-4 m-3\">{{node.title}}</span>
                                        {% endif %} 
                                    </span>
                                </a>
                                <div {# {% if url %} onclick=\"window.location = '{{url}}'\" style=\"cursor: pointer\" {% endif %} #} class=\"info {% if horizontal %} flex-fill ps-lg-5 {% endif %} {% if layout == 'yellow_box' %} p-5 pt-0 {% endif %}\">
                                    {% if node.categoria %}
                                        <h4 class=\"category m-0 mb-2\">
                                            {{term.name}}
                                        </h4>
                                    {% endif %}

                                    {% if layout != 'yellow_box' %}
                                        <h2 class=\"title m-0\" ><a href=\"{{url}}\">{{node.title}}</a></h2>
                                    {% endif %} 

                                    {# <p class=\"text m-0 mt-2\">{{node.field_headline}}</p> #}

                                    {# <p class=\"text m-0 mt-2\" >{{node.text}}</p> #}
                                    <p class=\"text m-0 mt-2\" >{{node.text}}</p>


                                    {% if mostrar_botao_conheca_mais and layout != 'yellow_box' %}
                                        {% if node.type == 'card' and node.field_link %}
                                            <a  class=\"btn mt-4 mb-2\" href=\"{{node.field_link.uri}}\" title=\"{{botao_label ? botao_label : node.field_link.title}}\">{{botao_label ? botao_label : node.field_link.title}}</a>         
                                        {% else %}
                                            <a  class=\"btn mt-4 mb-2\" href=\"{{node.field_link_para_compra ? node.field_link_para_compra : node.field_link ? node.field_link : node.field_link_externo ? node.field_link_externo : node.url}}\" title=\"{% if botao_label %} {{botao_label}} {% else %} Saiba Mais {% endif %}\">{% if botao_label %} {{botao_label}} {% else %} Saiba Mais {% endif %}</a>         
                                        {% endif %}
                                    {% endif %} 

                                    {# {% if node.tag %}
                                        {% for tag in node.tag %}
                                            <a class=\"tag mt-2 d-block\" href=\"{{tag.url}}\">#{{tag.name}}</a>
                                        {% endfor %}
                                    {% endif %} #}
                                </div>
                            </div>                        
                        </div>
                    {% endfor %}     
                    
                    {% for index, term in taxonomies if taxonomies|length %}
                        <div onclick=\"window.location = '{{term.url}}'\" class=\"mb-5 post--grid{{index}} d-flex flex-column {% if layout == '2_columns' or layout == 'yellow_box' %} col-lg-6 {% elseif layout == '1_columns' %} col-12 {% else %} col-lg-4 {% endif %}\">
                            <div {% if horizontal %} horizontal {% endif %} class=\"post-grid--inner flex-fill {% if horizontal %} flex-row flex-wrap align-items-stretch {% else %} flex-column {% endif %}\">
                                <a title=\"{{term.name}}\" href=\"{{term.url}}\" class=\"thumbnail mb-4 {% if horizontal %} mb-lg-0 col-12 col-lg-4 {% endif %}\" style=\"background-image: url({{term.field_imagem ? term.field_imagem : term.field_thumb}});\">
                                    <span class=\"thumbnail-inner\">
                                        {% if layout == 'yellow_box' %}
                                            <span class=\"p-2 ps-4 pe-4 m-3\">{{term.name}}</span>
                                        {% endif %}
                                    </span>
                                </a>
                                <div class=\"info {% if horizontal %} flex-fill ps-lg-5 {% endif %} {% if layout == 'yellow_box' %} p-5 pt-0 {% endif %}\" onclick=\"window.location = '{{term.url}}'\">
                                    {% if layout == 'yellow_box' %}
                                        {# <div class=\"summary d-block overflow-hidden mb-4\">
                                            {{term.field_resumo|raw}}<br/>

                                            {{term.field_sub_texto}}
                                        </div> #}
                                        <p class=\"text m-0 mt-2\" >{{term.field_sub_texto}}</p>
                                    {% else %}
                                        <h2 class=\"title m-0\" >{{term.name}}</h2>
                                    {% endif %}
                                    <p class=\"d-block text m-0 mt-2\" >{{term.field_texto ? term.field_texto : term.description}}</p>
                                </div>
                            </div>                        
                        </div>
                    {% endfor %}   
                {% endif %}
            </div>
        </div>        
    </div>
</section>", "themes/casa_firjan/templates/blocks/block-content--bloco-destaque.html.twig", "C:\\xampp\\htdocs\\CasaFirjan\\themes\\casa_firjan\\templates\\blocks\\block-content--bloco-destaque.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 6, "include" => 29, "for" => 34);
        static $filters = array("escape" => 6, "render" => 14, "split" => 36, "length" => 50);
        static $functions = array("get_term" => 64, "slugify" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'for'],
                ['escape', 'render', 'split', 'length'],
                ['get_term', 'slugify']
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
