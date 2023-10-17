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

/* themes/casa_firjan/templates/html/html.html.twig */
class __TwigTemplate_39fa1a80c2b5d357d38b9da762626398 extends \Twig\Template
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
        echo "<html lang=\"pt-br\">

<head>
  ";
        // line 4
        if (($context["metatags"] ?? null)) {
            // line 5
            echo "  <meta property=\"og:image\" content=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["metatags"] ?? null), "image", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "\">
  <meta property=\"og:image:width\" content=\"1200\">
  <meta property=\"og:image:height\" content=\"628\">
  <meta property=\"twitter:image\" content=\"";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["metatags"] ?? null), "image", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\">
  <meta property=\"twitter:title\" content=\"";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["metatags"] ?? null), "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\">
  <meta property=\"og:title\" content=\"";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["metatags"] ?? null), "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\">
  <meta property=\"twitter:description\" content=\"";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["metatags"] ?? null), "description", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\">
  <meta property=\"og:description\" content=\"";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["metatags"] ?? null), "description", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\">
  <meta property=\"twitter:url\" content=\"";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
            echo "\" />
  <meta property=\"og:url\" content=\"";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
            echo "\" />
  <meta property=\"og:locale\" content=\"pt_BR\" />
  <meta property=\"og:type\" content=\"article\" />
  <link rel=\"canonical\" href=\"";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
            echo "\">
  ";
        } else {
            // line 19
            echo "  <head-placeholder token=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 19, $this->source));
            echo "\">
    ";
        }
        // line 21
        echo "    <meta charset=\"utf-8\" />
    ";
        // line 22
        if ( !($context["root_path"] ?? null)) {
            // line 23
            echo "    <title>Casa Firjan</title>
    ";
        } else {
            // line 25
            echo "    <title>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 25, $this->source), " | "));
            echo "</title>
    ";
        }
        // line 27
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link href=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\gm5_interface\Plugin\Util\GM5TwigExtension']->fileVersion("themes/casa_firjan/statics/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\gm5_interface\Plugin\Util\GM5TwigExtension']->fileVersion("themes/casa_firjan/statics/css/calendar-gc.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\gm5_interface\Plugin\Util\GM5TwigExtension']->fileVersion("themes/casa_firjan/statics/js/simplelightbox-master/simple-lightbox.min.css"), "html", null, true);
        echo "\"
      rel=\"stylesheet\" />
    <link rel=\"icon\" href=\"/";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 33, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 33, $this->source)), "html", null, true);
        echo "/favicon.ico\" />
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js\" integrity=\"sha512-efAcjYoYT0sXxQRtxGY37CKYmqsFVOIwMApaEbrxJr4RwqVVGw8o+Lfh/+59TU07+suZn1BWq4fDl5fdgyCNkw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.8/index.global.js\" integrity=\"sha512-i1QYxrZ2eJKNdGkTdSVfokfaXHQEpcjj5CfnWhJ6dQ0X76aG9rIaWvB77GpqFtVp83iRzE/b6e20weGSZpecjQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5PLPMRM');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5PLPMRM\"
  height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  ";
        // line 51
        $this->loadTemplate("@casa_firjan/includes/header.html.twig", "themes/casa_firjan/templates/html/html.html.twig", 51)->display($context);
        // line 52
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 52, $this->source), "html", null, true);
        echo "
  ";
        // line 53
        $this->loadTemplate("@casa_firjan/includes/footer.html.twig", "themes/casa_firjan/templates/html/html.html.twig", 53)->display($context);
        // line 54
        echo "  <script src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\gm5_interface\Plugin\Util\GM5TwigExtension']->fileVersion("themes/casa_firjan/statics/js/base.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\gm5_interface\Plugin\Util\GM5TwigExtension']->fileVersion("themes/casa_firjan/statics/js/calendar-gc.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\gm5_interface\Plugin\Util\GM5TwigExtension']->fileVersion("themes/casa_firjan/statics/js/simplelightbox-master/simple-lightbox.min.js"), "html", null, true);
        echo "\">
  </script>
  <script src=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\gm5_interface\Plugin\Util\GM5TwigExtension']->fileVersion("themes/casa_firjan/statics/js/controller.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\gm5_interface\Plugin\Util\GM5TwigExtension']->fileVersion("themes/casa_firjan/statics/js/classes.js"), "html", null, true);
        echo "\"></script>
  <script type='text/javascript'
    src='https://platform-api.sharethis.com/js/sharethis.js#property=5d30b08e7f09b20012e4b6d7&product=inline-share-buttons'
    async='async'></script>
  <style>
    pre.sf-dump,
    pre.sf-dump .sf-dump-default {
      z-index: 1;
    }
  </style>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "themes/casa_firjan/templates/html/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 59,  170 => 58,  165 => 56,  161 => 55,  156 => 54,  154 => 53,  149 => 52,  147 => 51,  126 => 33,  121 => 31,  117 => 30,  113 => 29,  109 => 27,  103 => 25,  99 => 23,  97 => 22,  94 => 21,  88 => 19,  83 => 17,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"pt-br\">

<head>
  {% if metatags %}
  <meta property=\"og:image\" content=\"{{ metatags.image }}\">
  <meta property=\"og:image:width\" content=\"1200\">
  <meta property=\"og:image:height\" content=\"628\">
  <meta property=\"twitter:image\" content=\"{{ metatags.image }}\">
  <meta property=\"twitter:title\" content=\"{{ metatags.title }}\">
  <meta property=\"og:title\" content=\"{{ metatags.title }}\">
  <meta property=\"twitter:description\" content=\"{{ metatags.description }}\">
  <meta property=\"og:description\" content=\"{{ metatags.description }}\">
  <meta property=\"twitter:url\" content=\"{{url('<current>')}}\" />
  <meta property=\"og:url\" content=\"{{url('<current>')}}\" />
  <meta property=\"og:locale\" content=\"pt_BR\" />
  <meta property=\"og:type\" content=\"article\" />
  <link rel=\"canonical\" href=\"{{url('<current>')}}\">
  {% else %}
  <head-placeholder token=\"{{ placeholder_token|raw }}\">
    {% endif %}
    <meta charset=\"utf-8\" />
    {% if not root_path %}
    <title>Casa Firjan</title>
    {% else %}
    <title>{{ head_title|safe_join(' | ') }}</title>
    {% endif %}

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link href=\"{{ fileVersion('themes/casa_firjan/statics/css/style.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ fileVersion('themes/casa_firjan/statics/css/calendar-gc.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ fileVersion('themes/casa_firjan/statics/js/simplelightbox-master/simple-lightbox.min.css') }}\"
      rel=\"stylesheet\" />
    <link rel=\"icon\" href=\"/{{ base_path ~ directory }}/favicon.ico\" />
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js\" integrity=\"sha512-efAcjYoYT0sXxQRtxGY37CKYmqsFVOIwMApaEbrxJr4RwqVVGw8o+Lfh/+59TU07+suZn1BWq4fDl5fdgyCNkw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.8/index.global.js\" integrity=\"sha512-i1QYxrZ2eJKNdGkTdSVfokfaXHQEpcjj5CfnWhJ6dQ0X76aG9rIaWvB77GpqFtVp83iRzE/b6e20weGSZpecjQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5PLPMRM');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5PLPMRM\"
  height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  {% include '@casa_firjan/includes/header.html.twig' %}
  {{ page }}
  {% include '@casa_firjan/includes/footer.html.twig' %}
  <script src=\"{{ fileVersion('themes/casa_firjan/statics/js/base.js') }}\"></script>
  <script src=\"{{ fileVersion('themes/casa_firjan/statics/js/calendar-gc.min.js') }}\"></script>
  <script src=\"{{ fileVersion('themes/casa_firjan/statics/js/simplelightbox-master/simple-lightbox.min.js') }}\">
  </script>
  <script src=\"{{ fileVersion('themes/casa_firjan/statics/js/controller.js') }}\"></script>
  <script src=\"{{ fileVersion('themes/casa_firjan/statics/js/classes.js') }}\"></script>
  <script type='text/javascript'
    src='https://platform-api.sharethis.com/js/sharethis.js#property=5d30b08e7f09b20012e4b6d7&product=inline-share-buttons'
    async='async'></script>
  <style>
    pre.sf-dump,
    pre.sf-dump .sf-dump-default {
      z-index: 1;
    }
  </style>
</body>

</html>", "themes/casa_firjan/templates/html/html.html.twig", "/home/casafirjancityco/public_html/themes/casa_firjan/templates/html/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "include" => 51);
        static $filters = array("escape" => 5, "raw" => 19, "safe_join" => 25);
        static $functions = array("url" => 13, "fileVersion" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'raw', 'safe_join'],
                ['url', 'fileVersion']
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
