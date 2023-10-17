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

/* themes/casa_firjan/templates/pages/page--taxonomy.html.twig */
class __TwigTemplate_6b73fa48584da7d840955d4a767c354f extends \Twig\Template
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

<main class=\"produto pt-0\">
  <div class=\"container\">
    ";
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        // line 8
        echo "
    <!--
              Topo produto
          -->
    ";
        // line 19
        echo "    <!--
              Produtos
          --> 

    <section class=\"destaques\" >
      <div class=\"container\">
        <div class=\"d-block mb-5\">
          <div class=\"textTitleBlock\">Em destaque</div>
        </div>      

        <div class=\"row align-items-stretch\">
          ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, true, true, 30), 0, [], "array", true, true, true, 30)) {
            // line 31
            echo "            <div class=\"col-lg-6 col-md-12 itens1\">
              ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 32)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "midia", [], "any", false, false, true, 32), "src", [], "any", false, false, true, 32)) {
                // line 33
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 33)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "midia", [], "any", false, false, true, 33), "tipo", [], "any", false, false, true, 33) == "video")) {
                    // line 34
                    echo "                  <a data-fancybox class=\"img video\"   href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 34)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "midia", [], "any", false, false, true, 34), "url", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 34)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "titulo", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo "\">
                    <img src=\"";
                    // line 35
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 35)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "midia", [], "any", false, false, true, 35), "src", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo "\">
                  </a>
                ";
                } else {
                    // line 38
                    echo "                  <a class=\"img\"   href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 38)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), "url", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 38)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "titulo", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    echo "\">
                    <img src=\"";
                    // line 39
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 39)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), "midia", [], "any", false, false, true, 39), "src", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo "\">
                  </a>
                ";
                }
                // line 42
                echo "              ";
            }
            // line 43
            echo "              ";
            if ((($context["level2"] ?? null) != true)) {
                // line 44
                echo "                <a class=\"textCat mt-2\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 44)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null), "categoria", [], "any", false, false, true, 44), "url", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 44)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null), "categoria", [], "any", false, false, true, 44), "label", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "</a>
              ";
            }
            // line 46
            echo "              <a class=\"textTitle\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 46)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[0] ?? null) : null), "url", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 46)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null), "titulo", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</a>
              <p class=\"text14\">";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 47)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null), "chamada", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "</p>
              <p class=\"textCreate\">";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 48)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[0] ?? null) : null), "autor_data", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "</p>
            </div>
          ";
        }
        // line 51
        echo "
          ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, true, true, 52), 1, [], "array", true, true, true, 52) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, true, true, 52), 2, [], "array", true, true, true, 52))) {
            // line 53
            echo "            <div class=\"col-lg-6 col-md-12 itens2\">
              ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, true, true, 54), 1, [], "array", true, true, true, 54)) {
                // line 55
                echo "              <div class=\"row mb-3 pb-3\">
                ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 56)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[1] ?? null) : null), "midia", [], "any", false, false, true, 56), "src", [], "any", false, false, true, 56)) {
                    // line 57
                    echo "                  <div class=\"col-sm-6 ps-0 pe-0 pe-md-2\">
                    ";
                    // line 58
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 58)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[1] ?? null) : null), "midia", [], "any", false, false, true, 58), "tipo", [], "any", false, false, true, 58) == "video")) {
                        // line 59
                        echo "                      <a data-fancybox class=\"img video\"  href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 59)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[1] ?? null) : null), "midia", [], "any", false, false, true, 59), "url", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 59)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[1] ?? null) : null), "titulo", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                        echo "\">
                        <img src=\"";
                        // line 60
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 60)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[1] ?? null) : null), "midia", [], "any", false, false, true, 60), "src", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                        echo "\">
                      </a>
                    ";
                    } else {
                        // line 63
                        echo "                      <a class=\"img\"  href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 63)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[1] ?? null) : null), "url", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 63)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[1] ?? null) : null), "titulo", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                        echo "\">
                        <img src=\"";
                        // line 64
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 64)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[1] ?? null) : null), "midia", [], "any", false, false, true, 64), "src", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                        echo "\">
                      </a>
                    ";
                    }
                    // line 67
                    echo "                  </div>
                ";
                }
                // line 69
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 69)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[1] ?? null) : null), "midia", [], "any", false, false, true, 69), "src", [], "any", false, false, true, 69)) {
                    // line 70
                    echo "                  <div class=\"flex-fill ps-0 ps-sm-2 pe-0\">
                ";
                } else {
                    // line 72
                    echo "                  <div class=\"col-sm-12\">
                ";
                }
                // line 74
                echo "                  ";
                if (((($context["level2"] ?? null) != true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 74)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[1] ?? null) : null), "categoria", [], "any", false, false, true, 74), "url", [], "any", false, false, true, 74))) {
                    // line 75
                    echo "                    <a class=\"textCat mt-2\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 75)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[1] ?? null) : null), "categoria", [], "any", false, false, true, 75), "url", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 75)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[1] ?? null) : null), "categoria", [], "any", false, false, true, 75), "label", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                    echo "</a>
                  ";
                }
                // line 77
                echo "                  <a class=\"textTitle\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 77)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[1] ?? null) : null), "url", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 77)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[1] ?? null) : null), "titulo", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "</a>
                  <p class=\"text14\">";
                // line 78
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_28 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 78)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[1] ?? null) : null), "chamada", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo "</p>
                  <p class=\"textCreate\">";
                // line 79
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 79)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[1] ?? null) : null), "autor_data", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "</p>
                </div>
              </div>
              ";
            }
            // line 83
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, true, true, 83), 2, [], "array", true, true, true, 83)) {
                // line 84
                echo "              <div class=\"row\">
                ";
                // line 85
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 85)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[2] ?? null) : null), "midia", [], "any", false, false, true, 85), "src", [], "any", false, false, true, 85)) {
                    // line 86
                    echo "                  <div class=\"col-sm-6 ps-0 pe-0 pe-md-2\">              
                    ";
                    // line 87
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 87)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[2] ?? null) : null), "midia", [], "any", false, false, true, 87), "tipo", [], "any", false, false, true, 87) == "video")) {
                        // line 88
                        echo "                      <a data-fancybox class=\"img video\"  href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 88)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[2] ?? null) : null), "midia", [], "any", false, false, true, 88), "url", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 88)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[2] ?? null) : null), "titulo", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                        echo "\">
                        <img src=\"";
                        // line 89
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_34 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 89)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[2] ?? null) : null), "midia", [], "any", false, false, true, 89), "src", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                        echo "\">
                      </a>
                    ";
                    } else {
                        // line 92
                        echo "                      <a class=\"img\"  href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 92)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[2] ?? null) : null), "url", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 92)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[2] ?? null) : null), "titulo", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                        echo "\">
                        <img src=\"";
                        // line 93
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_37 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 93)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[2] ?? null) : null), "midia", [], "any", false, false, true, 93), "src", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                        echo "\">
                      </a>
                    ";
                    }
                    // line 96
                    echo "                  </div>
                ";
                }
                // line 98
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 98)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[2] ?? null) : null), "midia", [], "any", false, false, true, 98), "src", [], "any", false, false, true, 98)) {
                    // line 99
                    echo "                  <div class=\"flex-fill ps-0 ps-sm-2 pe-0\">
                ";
                } else {
                    // line 101
                    echo "                  <div class=\"col-sm-12\">
                ";
                }
                // line 103
                echo "                  ";
                if ((($context["level2"] ?? null) != true)) {
                    // line 104
                    echo "                    <a class=\"textCat mt-2\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 104)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[2] ?? null) : null), "categoria", [], "any", false, false, true, 104), "url", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 104)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[2] ?? null) : null), "categoria", [], "any", false, false, true, 104), "label", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                    echo "</a>
                  ";
                }
                // line 106
                echo "                  <a class=\"textTitle\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_41 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 106)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[2] ?? null) : null), "url", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_42 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 106)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[2] ?? null) : null), "titulo", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "</a>
                  <p class=\"text14\">";
                // line 107
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_43 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 107)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[2] ?? null) : null), "chamada", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                echo "</p>
                  <p class=\"textCreate\">";
                // line 108
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_44 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 108)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[2] ?? null) : null), "autor_data", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                echo "</p>
                </div>
              </div>
              ";
            }
            // line 112
            echo "            </div>
          ";
        }
        // line 114
        echo "        </div>
      </div>
    </section>

    ";
        // line 118
        if ((($context["bundle"] ?? null) != "tags_conteudo")) {
            // line 119
            echo "      <section class=\"videosRecentes mb-5\">
        <div class=\"container\">
          <div class=\"d-block mb-5\">
            <div class=\"textTitleBlock\">Vídeos mais recentes</div>
          </div>        
          
          <div class=\"row\">

            ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "videosRecentes", [], "any", false, false, true, 127));
            foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                // line 128
                echo "              <div class=\"col-lg-3 col-sm-6 mb-4\">
                <a data-fancybox class=\"img video\" style=\"background-image:url(";
                // line 129
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["video"], "imagem", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                echo ");\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["video"], "videoUrl", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["video"], "titulo", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                echo "\">
                  <img src=\"";
                // line 130
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["video"], "imagem", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                echo "\">
                </a>
                ";
                // line 132
                if ((($context["level2"] ?? null) != true)) {
                    // line 133
                    echo "                  <a class=\"textCat mt-2\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], "categoria", [], "any", false, false, true, 133), "url", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], "categoria", [], "any", false, false, true, 133), "label", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                    echo "</a>
                ";
                }
                // line 135
                echo "                <a class=\"text20\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["video"], "url", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["video"], "titulo", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                echo "</a>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "          </div>
        </div>
      </section>
    ";
        }
        // line 142
        echo "
    <section class=\"vejaMais ";
        // line 143
        if ((($context["bundle"] ?? null) == "tags_conteudo")) {
            echo " mt-5 ";
        }
        echo "\">
      <div class=\"container posts\" data-url=\"";
        // line 144
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "leiaMais", [], "any", false, false, true, 144), "url", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
        echo "\">
        <div class=\"d-block\">
          ";
        // line 146
        if ((($context["bundle"] ?? null) != "tags_conteudo")) {
            // line 147
            echo "            <div class=\"d-block mb-5\">
              <div class=\"textTitleBlock\">Veja mais</div>
            </div>
          ";
        }
        // line 151
        echo "
          
          <div class=\"target row\">
            ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "leiaMais", [], "any", false, false, true, 154), "items", [], "any", false, false, true, 154));
        foreach ($context['_seq'] as $context["_key"] => $context["leiaMais"]) {
            // line 155
            echo "              <div class=\"col-12 col-md-6 mb-4\">
                <div class=\"row d-flex flex-column flex-lg-row flex-wrap\">
                
                  ";
            // line 158
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leiaMais"], "midia", [], "any", false, false, true, 158), "src", [], "any", false, false, true, 158)) {
                // line 159
                echo "                    <div class=\"col-12 col-lg-6\">
                      ";
                // line 160
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leiaMais"], "midia", [], "any", false, false, true, 160), "tipo", [], "any", false, false, true, 160) == "video")) {
                    // line 161
                    echo "                        <a data-fancybox class=\"img video\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leiaMais"], "midia", [], "any", false, false, true, 161), "urlvideo", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
                    echo "\"  title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["leiaMais"], "titulo", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
                    echo "\">
                          <img src=\"";
                    // line 162
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leiaMais"], "midia", [], "any", false, false, true, 162), "src", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
                    echo "\">
                        </a>
                      ";
                } else {
                    // line 165
                    echo "                        <a class=\"img\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["leiaMais"], "url", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["leiaMais"], "titulo", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
                    echo "\">
                          <img src=\"";
                    // line 166
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leiaMais"], "midia", [], "any", false, false, true, 166), "src", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
                    echo "\">
                        </a>
                      ";
                }
                // line 169
                echo "                    </div>
                  ";
            }
            // line 171
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leiaMais"], "midia", [], "any", false, false, true, 171), "src", [], "any", false, false, true, 171)) {
                // line 172
                echo "                    <div class=\"flex-fill\">
                  ";
            } else {
                // line 174
                echo "                    <div class=\"col-sm-12\">
                  ";
            }
            // line 176
            echo "                    ";
            if ((($context["level2"] ?? null) != true)) {
                // line 177
                echo "                      <a class=\"textCat mt-2\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leiaMais"], "categoria", [], "any", false, false, true, 177), "url", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leiaMais"], "categoria", [], "any", false, false, true, 177), "label", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
                echo "</a>
                    ";
            }
            // line 179
            echo "                    <a class=\"textTitle\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["leiaMais"], "url", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["leiaMais"], "titulo", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "</a>
                    <p class=\"text14\">";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["leiaMais"], "chamada", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            echo "</p>
                    <p class=\"textCreate\">";
            // line 181
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["leiaMais"], "autor_data", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
            echo "</p>
                  </div>
                </div>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leiaMais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "            </div>
          
        </div>  
          
        
        <div class=\"row justify-content-center btnVerMais loadMore\">
          <div class=\"col-2\">
            ";
        // line 193
        $context["totalPages"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "leiaMais", [], "any", false, false, true, 193), "paginacao", [], "any", false, false, true, 193), "totalPages", [], "any", false, false, true, 193) - 1);
        // line 194
        echo "            ";
        if ((($context["totalPages"] ?? null) > 0)) {
            // line 195
            echo "              <a href=\"javascript:void(0);\" data-atual=\"0\" data-total=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["totalPages"] ?? null), 195, $this->source), "html", null, true);
            echo "\" class=\"btnAzul\">Ver mais</a>
            ";
        }
        // line 197
        echo "          </div>
        </div>
      </div>
    </section>
  </div>

  <style>
    .img {
      margin: 0
    }
    .img img {
      object-fit: cover;
      opacity: 1;
      margin: 0;
    }

  </style>
</main>";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/pages/page--taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 197,  510 => 195,  507 => 194,  505 => 193,  496 => 186,  485 => 181,  481 => 180,  474 => 179,  466 => 177,  463 => 176,  459 => 174,  455 => 172,  452 => 171,  448 => 169,  442 => 166,  435 => 165,  429 => 162,  422 => 161,  420 => 160,  417 => 159,  415 => 158,  410 => 155,  406 => 154,  401 => 151,  395 => 147,  393 => 146,  388 => 144,  382 => 143,  379 => 142,  373 => 138,  361 => 135,  353 => 133,  351 => 132,  346 => 130,  338 => 129,  335 => 128,  331 => 127,  321 => 119,  319 => 118,  313 => 114,  309 => 112,  302 => 108,  298 => 107,  291 => 106,  283 => 104,  280 => 103,  276 => 101,  272 => 99,  269 => 98,  265 => 96,  259 => 93,  252 => 92,  246 => 89,  239 => 88,  237 => 87,  234 => 86,  232 => 85,  229 => 84,  226 => 83,  219 => 79,  215 => 78,  208 => 77,  200 => 75,  197 => 74,  193 => 72,  189 => 70,  186 => 69,  182 => 67,  176 => 64,  169 => 63,  163 => 60,  156 => 59,  154 => 58,  151 => 57,  149 => 56,  146 => 55,  144 => 54,  141 => 53,  139 => 52,  136 => 51,  130 => 48,  126 => 47,  119 => 46,  111 => 44,  108 => 43,  105 => 42,  99 => 39,  92 => 38,  86 => 35,  79 => 34,  76 => 33,  74 => 32,  71 => 31,  69 => 30,  56 => 19,  50 => 8,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ drupal_region('breadcrumb') }}

<main class=\"produto pt-0\">
  <div class=\"container\">
    {# {{dump(term_id)}} #}
    {# {{dump(customPage)}}x #}
    {# {{ drupal_view('taxonomy_term', 'page_2', term_id) }} #}

    <!--
              Topo produto
          -->
    {# <div class=\"row taxonomy-header\">
      <div class=\"col-md-12 col-lg-8\">
        <p class=\"tag_menu d-block mb-4\">{{base_taxonomy}}</p>
        <h3 class=\"textBigTitle\">{{ customPage.term.titulo }}</h3>
        <p class=\"text20\">{{ customPage.term.descricao|raw }}</p>
      </div>
    </div> #}
    <!--
              Produtos
          --> 

    <section class=\"destaques\" >
      <div class=\"container\">
        <div class=\"d-block mb-5\">
          <div class=\"textTitleBlock\">Em destaque</div>
        </div>      

        <div class=\"row align-items-stretch\">
          {% if customPage.destaques[0] is defined %}
            <div class=\"col-lg-6 col-md-12 itens1\">
              {% if customPage.destaques[0].midia.src %}
                {% if customPage.destaques[0].midia.tipo == 'video' %}
                  <a data-fancybox class=\"img video\"   href=\"{{ customPage.destaques[0].midia.url }}\" title=\"{{ customPage.destaques[0].titulo }}\">
                    <img src=\"{{ customPage.destaques[0].midia.src }}\">
                  </a>
                {% else %}
                  <a class=\"img\"   href=\"{{customPage.destaques[0].url }}\" title=\"{{ customPage.destaques[0].titulo }}\">
                    <img src=\"{{ customPage.destaques[0].midia.src }}\">
                  </a>
                {% endif %}
              {% endif %}
              {% if level2 != TRUE %}
                <a class=\"textCat mt-2\" href=\"{{customPage.destaques[0].categoria.url }}\">{{customPage.destaques[0].categoria.label }}</a>
              {% endif %}
              <a class=\"textTitle\" href=\"{{customPage.destaques[0].url }}\">{{ customPage.destaques[0].titulo }}</a>
              <p class=\"text14\">{{customPage.destaques[0].chamada }}</p>
              <p class=\"textCreate\">{{customPage.destaques[0].autor_data }}</p>
            </div>
          {% endif %}

          {% if customPage.destaques[1] is defined or customPage.destaques[2] is defined %}
            <div class=\"col-lg-6 col-md-12 itens2\">
              {% if customPage.destaques[1] is defined %}
              <div class=\"row mb-3 pb-3\">
                {% if customPage.destaques[1].midia.src %}
                  <div class=\"col-sm-6 ps-0 pe-0 pe-md-2\">
                    {% if customPage.destaques[1].midia.tipo == 'video' %}
                      <a data-fancybox class=\"img video\"  href=\"{{ customPage.destaques[1].midia.url }}\" title=\"{{ customPage.destaques[1].titulo }}\">
                        <img src=\"{{ customPage.destaques[1].midia.src }}\">
                      </a>
                    {% else %}
                      <a class=\"img\"  href=\"{{customPage.destaques[1].url }}\" title=\"{{ customPage.destaques[1].titulo }}\">
                        <img src=\"{{ customPage.destaques[1].midia.src }}\">
                      </a>
                    {% endif %}
                  </div>
                {% endif %}
                {% if  customPage.destaques[1].midia.src %}
                  <div class=\"flex-fill ps-0 ps-sm-2 pe-0\">
                {% else %}
                  <div class=\"col-sm-12\">
                {% endif %}
                  {% if level2 != TRUE and customPage.destaques[1].categoria.url %}
                    <a class=\"textCat mt-2\" href=\"{{customPage.destaques[1].categoria.url }}\">{{customPage.destaques[1].categoria.label }}</a>
                  {% endif %}
                  <a class=\"textTitle\" href=\"{{customPage.destaques[1].url }}\">{{ customPage.destaques[1].titulo }}</a>
                  <p class=\"text14\">{{customPage.destaques[1].chamada }}</p>
                  <p class=\"textCreate\">{{customPage.destaques[1].autor_data }}</p>
                </div>
              </div>
              {% endif %}
              {% if customPage.destaques[2] is defined %}
              <div class=\"row\">
                {% if customPage.destaques[2].midia.src %}
                  <div class=\"col-sm-6 ps-0 pe-0 pe-md-2\">              
                    {% if customPage.destaques[2].midia.tipo == 'video' %}
                      <a data-fancybox class=\"img video\"  href=\"{{ customPage.destaques[2].midia.url }}\" title=\"{{ customPage.destaques[2].titulo }}\">
                        <img src=\"{{ customPage.destaques[2].midia.src }}\">
                      </a>
                    {% else %}
                      <a class=\"img\"  href=\"{{customPage.destaques[2].url }}\" title=\"{{ customPage.destaques[2].titulo }}\">
                        <img src=\"{{ customPage.destaques[2].midia.src }}\">
                      </a>
                    {% endif %}
                  </div>
                {% endif %}
                {% if  customPage.destaques[2].midia.src %}
                  <div class=\"flex-fill ps-0 ps-sm-2 pe-0\">
                {% else %}
                  <div class=\"col-sm-12\">
                {% endif %}
                  {% if level2 != TRUE %}
                    <a class=\"textCat mt-2\" href=\"{{customPage.destaques[2].categoria.url }}\">{{customPage.destaques[2].categoria.label }}</a>
                  {% endif %}
                  <a class=\"textTitle\" href=\"{{customPage.destaques[2].url }}\">{{ customPage.destaques[2].titulo }}</a>
                  <p class=\"text14\">{{customPage.destaques[2].chamada }}</p>
                  <p class=\"textCreate\">{{customPage.destaques[2].autor_data }}</p>
                </div>
              </div>
              {% endif %}
            </div>
          {% endif %}
        </div>
      </div>
    </section>

    {% if bundle != 'tags_conteudo' %}
      <section class=\"videosRecentes mb-5\">
        <div class=\"container\">
          <div class=\"d-block mb-5\">
            <div class=\"textTitleBlock\">Vídeos mais recentes</div>
          </div>        
          
          <div class=\"row\">

            {% for video in customPage.videosRecentes %}
              <div class=\"col-lg-3 col-sm-6 mb-4\">
                <a data-fancybox class=\"img video\" style=\"background-image:url({{ video.imagem }});\" href=\"{{ video.videoUrl }}\" title=\"{{ video.titulo }}\">
                  <img src=\"{{ video.imagem }}\">
                </a>
                {% if level2 != TRUE %}
                  <a class=\"textCat mt-2\" href=\"{{ video.categoria.url }}\">{{ video.categoria.label }}</a>
                {% endif %}
                <a class=\"text20\" href=\"{{ video.url }}\">{{ video.titulo }}</a>
              </div>
            {% endfor %}
          </div>
        </div>
      </section>
    {% endif %}

    <section class=\"vejaMais {% if bundle == 'tags_conteudo' %} mt-5 {% endif %}\">
      <div class=\"container posts\" data-url=\"{{customPage.leiaMais.url}}\">
        <div class=\"d-block\">
          {% if bundle != 'tags_conteudo' %}
            <div class=\"d-block mb-5\">
              <div class=\"textTitleBlock\">Veja mais</div>
            </div>
          {% endif %}

          
          <div class=\"target row\">
            {% for leiaMais in customPage.leiaMais.items %}
              <div class=\"col-12 col-md-6 mb-4\">
                <div class=\"row d-flex flex-column flex-lg-row flex-wrap\">
                
                  {% if leiaMais.midia.src %}
                    <div class=\"col-12 col-lg-6\">
                      {% if leiaMais.midia.tipo == 'video' %}
                        <a data-fancybox class=\"img video\" href=\"{{ leiaMais.midia.urlvideo }}\"  title=\"{{ leiaMais.titulo }}\">
                          <img src=\"{{ leiaMais.midia.src }}\">
                        </a>
                      {% else %}
                        <a class=\"img\" href=\"{{leiaMais.url }}\" title=\"{{ leiaMais.titulo }}\">
                          <img src=\"{{ leiaMais.midia.src }}\">
                        </a>
                      {% endif %}
                    </div>
                  {% endif %}
                  {% if leiaMais.midia.src %}
                    <div class=\"flex-fill\">
                  {% else %}
                    <div class=\"col-sm-12\">
                  {% endif %}
                    {% if level2 != TRUE %}
                      <a class=\"textCat mt-2\" href=\"{{leiaMais.categoria.url }}\">{{leiaMais.categoria.label }}</a>
                    {% endif %}
                    <a class=\"textTitle\" href=\"{{leiaMais.url }}\">{{ leiaMais.titulo }}</a>
                    <p class=\"text14\">{{leiaMais.chamada }}</p>
                    <p class=\"textCreate\">{{leiaMais.autor_data }}</p>
                  </div>
                </div>
              </div>
            {% endfor %}
            </div>
          
        </div>  
          
        
        <div class=\"row justify-content-center btnVerMais loadMore\">
          <div class=\"col-2\">
            {% set totalPages = customPage.leiaMais.paginacao.totalPages - 1 %}
            {% if totalPages > 0 %}
              <a href=\"javascript:void(0);\" data-atual=\"0\" data-total=\"{{ totalPages }}\" class=\"btnAzul\">Ver mais</a>
            {% endif %}
          </div>
        </div>
      </div>
    </section>
  </div>

  <style>
    .img {
      margin: 0
    }
    .img img {
      object-fit: cover;
      opacity: 1;
      margin: 0;
    }

  </style>
</main>", "themes/casa_firjan/templates/pages/page--taxonomy.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/pages/page--taxonomy.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 30, "for" => 127, "set" => 193);
        static $filters = array("escape" => 1);
        static $functions = array("drupal_region" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape'],
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
