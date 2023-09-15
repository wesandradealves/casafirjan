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

/* @casa_firjan/includes/destaques.html.twig */
class __TwigTemplate_ab3a5114fe4f2eca3112b6582105d2f3 extends \Twig\Template
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
        echo "
";
        // line 2
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, true, true, 2), 0, [], "array", true, true, true, 2) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, true, true, 2), 1, [], "array", true, true, true, 2)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, true, true, 2), 2, [], "array", true, true, true, 2))) {
            // line 3
            echo "
<section class=\"destaques\">
  <div class=\"container\">
    
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"textTitleBlock\">Em destaque</div>
      </div>
      ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, true, true, 11), 0, [], "array", true, true, true, 11)) {
                // line 12
                echo "        <div class=\"col-lg-6 col-md-12 itens1\">
          ";
                // line 13
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 13)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "midia", [], "any", false, false, true, 13), "src", [], "any", false, false, true, 13)) {
                    // line 14
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 14)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "midia", [], "any", false, false, true, 14), "tipo", [], "any", false, false, true, 14) == "video")) {
                        // line 15
                        echo "              <a data-fancybox class=\"img video\"  style=\"background-image:url(";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 15)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "midia", [], "any", false, false, true, 15), "src", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                        echo ");\" href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 15)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "midia", [], "any", false, false, true, 15), "url", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 15)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "titulo", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                        echo "\">
                <img src=\"";
                        // line 16
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "system", [], "any", false, false, true, 16), "staticPath", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                        echo "img/img10x5.gif\">
              </a>
            ";
                    } else {
                        // line 19
                        echo "              <a class=\"img\" style=\"background-image:url(";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 19)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), "midia", [], "any", false, false, true, 19), "src", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                        echo ");\"  href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 19)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "url", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 19)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), "titulo", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                        echo "\">
                <img src=\"";
                        // line 20
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "system", [], "any", false, false, true, 20), "staticPath", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                        echo "img/img10x5.gif\">
              </a>
            ";
                    }
                    // line 23
                    echo "          ";
                }
                // line 24
                echo "          ";
                if ((($context["level2"] ?? null) != true)) {
                    // line 25
                    echo "            <a class=\"textCat\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 25)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null), "categoria", [], "any", false, false, true, 25), "url", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 25)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null), "categoria", [], "any", false, false, true, 25), "label", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo "</a>
          ";
                }
                // line 27
                echo "          <a class=\"textTitle\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 27)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[0] ?? null) : null), "url", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 27)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null), "titulo", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "</a>
          <p class=\"text14\">";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 28)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null), "chamada", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</p>
          <p class=\"textCreate\">";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 29)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[0] ?? null) : null), "autor_data", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "</p>
        </div>
      ";
            }
            // line 32
            echo "
      ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, true, true, 33), 1, [], "array", true, true, true, 33) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, true, true, 33), 2, [], "array", true, true, true, 33))) {
                // line 34
                echo "      <div class=\"col-lg-6 col-md-12 itens2\">
        ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, true, true, 35), 1, [], "array", true, true, true, 35)) {
                    // line 36
                    echo "        <div class=\"row\">
          ";
                    // line 37
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 37)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[1] ?? null) : null), "midia", [], "any", false, false, true, 37), "src", [], "any", false, false, true, 37)) {
                        // line 38
                        echo "            <div class=\"col-sm-4\">
              
              ";
                        // line 40
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 40)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[1] ?? null) : null), "midia", [], "any", false, false, true, 40), "tipo", [], "any", false, false, true, 40) == "video")) {
                            // line 41
                            echo "                <a data-fancybox class=\"img video\" style=\"background-image:url(";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 41)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[1] ?? null) : null), "midia", [], "any", false, false, true, 41), "src", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                            echo ");\" href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 41)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[1] ?? null) : null), "midia", [], "any", false, false, true, 41), "url", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                            echo "\" title=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 41)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[1] ?? null) : null), "titulo", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                            echo "\">
                  <img src=\"";
                            // line 42
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "system", [], "any", false, false, true, 42), "staticPath", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                            echo "img/img1x1.gif\">
                </a>
              ";
                        } else {
                            // line 45
                            echo "                <a class=\"img\" style=\"background-image:url(";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 45)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[1] ?? null) : null), "midia", [], "any", false, false, true, 45), "src", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                            echo ");\" href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 45)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[1] ?? null) : null), "url", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                            echo "\" title=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 45)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[1] ?? null) : null), "titulo", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                            echo "\">
                  <img src=\"";
                            // line 46
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "system", [], "any", false, false, true, 46), "staticPath", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                            echo "img/img1x1.gif\">
                </a>
              ";
                        }
                        // line 49
                        echo "            </div>
          ";
                    }
                    // line 51
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 51)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[1] ?? null) : null), "midia", [], "any", false, false, true, 51), "src", [], "any", false, false, true, 51)) {
                        // line 52
                        echo "            <div class=\"col-sm-8\">
          ";
                    } else {
                        // line 54
                        echo "            <div class=\"col-sm-12\">
          ";
                    }
                    // line 56
                    echo "            ";
                    if ((($context["level2"] ?? null) != true)) {
                        // line 57
                        echo "              <a class=\"textCat\" href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 57)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[1] ?? null) : null), "categoria", [], "any", false, false, true, 57), "url", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 57)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[1] ?? null) : null), "categoria", [], "any", false, false, true, 57), "label", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 59
                    echo "            <a class=\"textTitle\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 59)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[1] ?? null) : null), "url", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 59)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[1] ?? null) : null), "titulo", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                    echo "</a>
            <p class=\"text14\">";
                    // line 60
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 60)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[1] ?? null) : null), "chamada", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                    echo "</p>
            <p class=\"textCreate\">";
                    // line 61
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_28 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 61)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[1] ?? null) : null), "autor_data", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    echo "</p>
          </div>
        </div>
        ";
                }
                // line 65
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, true, true, 65), 2, [], "array", true, true, true, 65)) {
                    // line 66
                    echo "        <div class=\"row\">
          ";
                    // line 67
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 67)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[2] ?? null) : null), "midia", [], "any", false, false, true, 67), "src", [], "any", false, false, true, 67)) {
                        // line 68
                        echo "            <div class=\"col-sm-4\">              
              ";
                        // line 69
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 69)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[2] ?? null) : null), "midia", [], "any", false, false, true, 69), "tipo", [], "any", false, false, true, 69) == "video")) {
                            // line 70
                            echo "                <a data-fancybox class=\"img video\" style=\"background-image:url(";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 70)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[2] ?? null) : null), "midia", [], "any", false, false, true, 70), "src", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                            echo ");\" href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 70)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[2] ?? null) : null), "midia", [], "any", false, false, true, 70), "url", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                            echo "\" title=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 70)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[2] ?? null) : null), "titulo", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                            echo "\">
                  <img src=\"";
                            // line 71
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "system", [], "any", false, false, true, 71), "staticPath", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                            echo "img/img1x1.gif\">
                </a>
              ";
                        } else {
                            // line 74
                            echo "                <a class=\"img\" style=\"background-image:url(";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_34 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 74)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[2] ?? null) : null), "midia", [], "any", false, false, true, 74), "src", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                            echo ");\" href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 74)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[2] ?? null) : null), "url", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                            echo "\" title=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 74)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[2] ?? null) : null), "titulo", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                            echo "\">
                  <img src=\"";
                            // line 75
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "system", [], "any", false, false, true, 75), "staticPath", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                            echo "img/img1x1.gif\">
                </a>
              ";
                        }
                        // line 78
                        echo "            </div>
          ";
                    }
                    // line 80
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_37 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 80)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[2] ?? null) : null), "midia", [], "any", false, false, true, 80), "src", [], "any", false, false, true, 80)) {
                        // line 81
                        echo "            <div class=\"col-sm-8\">
          ";
                    } else {
                        // line 83
                        echo "            <div class=\"col-sm-12\">
          ";
                    }
                    // line 85
                    echo "            ";
                    if ((($context["level2"] ?? null) != true)) {
                        // line 86
                        echo "              <a class=\"textCat\" href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 86)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[2] ?? null) : null), "categoria", [], "any", false, false, true, 86), "url", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 86)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[2] ?? null) : null), "categoria", [], "any", false, false, true, 86), "label", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 88
                    echo "            <a class=\"textTitle\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 88)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[2] ?? null) : null), "url", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_41 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 88)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[2] ?? null) : null), "titulo", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                    echo "</a>
            <p class=\"text14\">";
                    // line 89
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_42 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 89)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[2] ?? null) : null), "chamada", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                    echo "</p>
            <p class=\"textCreate\">";
                    // line 90
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_43 = twig_get_attribute($this->env, $this->source, ($context["customPage"] ?? null), "destaques", [], "any", false, false, true, 90)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[2] ?? null) : null), "autor_data", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                    echo "</p>
          </div>
        </div>
        ";
                }
                // line 94
                echo "      </div>
      ";
            }
            // line 96
            echo "    </div>
  </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "@casa_firjan/includes/destaques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 96,  307 => 94,  300 => 90,  296 => 89,  289 => 88,  281 => 86,  278 => 85,  274 => 83,  270 => 81,  267 => 80,  263 => 78,  257 => 75,  248 => 74,  242 => 71,  233 => 70,  231 => 69,  228 => 68,  226 => 67,  223 => 66,  220 => 65,  213 => 61,  209 => 60,  202 => 59,  194 => 57,  191 => 56,  187 => 54,  183 => 52,  180 => 51,  176 => 49,  170 => 46,  161 => 45,  155 => 42,  146 => 41,  144 => 40,  140 => 38,  138 => 37,  135 => 36,  133 => 35,  130 => 34,  128 => 33,  125 => 32,  119 => 29,  115 => 28,  108 => 27,  100 => 25,  97 => 24,  94 => 23,  88 => 20,  79 => 19,  73 => 16,  64 => 15,  61 => 14,  59 => 13,  56 => 12,  54 => 11,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if customPage.destaques[0] is defined or customPage.destaques[1] is defined or customPage.destaques[2] is defined %}

<section class=\"destaques\">
  <div class=\"container\">
    
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"textTitleBlock\">Em destaque</div>
      </div>
      {% if customPage.destaques[0] is defined %}
        <div class=\"col-lg-6 col-md-12 itens1\">
          {% if customPage.destaques[0].midia.src %}
            {% if customPage.destaques[0].midia.tipo == 'video' %}
              <a data-fancybox class=\"img video\"  style=\"background-image:url({{ customPage.destaques[0].midia.src }});\" href=\"{{ customPage.destaques[0].midia.url }}\" title=\"{{ customPage.destaques[0].titulo }}\">
                <img src=\"{{ customPage.system.staticPath }}img/img10x5.gif\">
              </a>
            {% else %}
              <a class=\"img\" style=\"background-image:url({{ customPage.destaques[0].midia.src }});\"  href=\"{{customPage.destaques[0].url }}\" title=\"{{ customPage.destaques[0].titulo }}\">
                <img src=\"{{ customPage.system.staticPath }}img/img10x5.gif\">
              </a>
            {% endif %}
          {% endif %}
          {% if level2 != TRUE %}
            <a class=\"textCat\" href=\"{{customPage.destaques[0].categoria.url }}\">{{customPage.destaques[0].categoria.label }}</a>
          {% endif %}
          <a class=\"textTitle\" href=\"{{customPage.destaques[0].url }}\">{{ customPage.destaques[0].titulo }}</a>
          <p class=\"text14\">{{customPage.destaques[0].chamada }}</p>
          <p class=\"textCreate\">{{customPage.destaques[0].autor_data }}</p>
        </div>
      {% endif %}

      {% if customPage.destaques[1] is defined or customPage.destaques[2] is defined %}
      <div class=\"col-lg-6 col-md-12 itens2\">
        {% if customPage.destaques[1] is defined %}
        <div class=\"row\">
          {% if customPage.destaques[1].midia.src %}
            <div class=\"col-sm-4\">
              
              {% if customPage.destaques[1].midia.tipo == 'video' %}
                <a data-fancybox class=\"img video\" style=\"background-image:url({{ customPage.destaques[1].midia.src }});\" href=\"{{ customPage.destaques[1].midia.url }}\" title=\"{{ customPage.destaques[1].titulo }}\">
                  <img src=\"{{ customPage.system.staticPath }}img/img1x1.gif\">
                </a>
              {% else %}
                <a class=\"img\" style=\"background-image:url({{ customPage.destaques[1].midia.src }});\" href=\"{{customPage.destaques[1].url }}\" title=\"{{ customPage.destaques[1].titulo }}\">
                  <img src=\"{{ customPage.system.staticPath }}img/img1x1.gif\">
                </a>
              {% endif %}
            </div>
          {% endif %}
          {% if  customPage.destaques[1].midia.src %}
            <div class=\"col-sm-8\">
          {% else %}
            <div class=\"col-sm-12\">
          {% endif %}
            {% if level2 != TRUE %}
              <a class=\"textCat\" href=\"{{customPage.destaques[1].categoria.url }}\">{{customPage.destaques[1].categoria.label }}</a>
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
            <div class=\"col-sm-4\">              
              {% if customPage.destaques[2].midia.tipo == 'video' %}
                <a data-fancybox class=\"img video\" style=\"background-image:url({{ customPage.destaques[2].midia.src }});\" href=\"{{ customPage.destaques[2].midia.url }}\" title=\"{{ customPage.destaques[2].titulo }}\">
                  <img src=\"{{ customPage.system.staticPath }}img/img1x1.gif\">
                </a>
              {% else %}
                <a class=\"img\" style=\"background-image:url({{ customPage.destaques[2].midia.src }});\" href=\"{{customPage.destaques[2].url }}\" title=\"{{ customPage.destaques[2].titulo }}\">
                  <img src=\"{{ customPage.system.staticPath }}img/img1x1.gif\">
                </a>
              {% endif %}
            </div>
          {% endif %}
          {% if  customPage.destaques[2].midia.src %}
            <div class=\"col-sm-8\">
          {% else %}
            <div class=\"col-sm-12\">
          {% endif %}
            {% if level2 != TRUE %}
              <a class=\"textCat\" href=\"{{customPage.destaques[2].categoria.url }}\">{{customPage.destaques[2].categoria.label }}</a>
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
{% endif %}
", "@casa_firjan/includes/destaques.html.twig", "C:\\xampp\\htdocs\\CasaFirjan\\themes\\casa_firjan\\templates\\includes\\destaques.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
