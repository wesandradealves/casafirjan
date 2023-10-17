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

/* modules/contrib/recaptcha_v3/templates/captcha--recaptcha-v3.html.twig */
class __TwigTemplate_d4219329a72c0f389932f8de9715871d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'captcha' => [$this, 'block_captcha'],
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
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('captcha', $context, $blocks);
    }

    public function block_captcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 22, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/recaptcha_v3/templates/captcha--recaptcha-v3.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 22,  46 => 21,  43 => 20,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{#
/**
 * @file
 * Default theme implementation for a reCAPTCHA v3.
 *
 * Available variables:
 * - is_visible: Boolean to indicate if the CAPTCHA is visible or was
 *   already solved (but element still needed for hidden inputs).
 * - attributes: HTML attributes for the containing element.
 * - title: The captcha title
 * - description: The captcha description
 * - element: The captcha element itself (image, recaptcha, ...)
 *
 * @see template_preprocess_captcha()
 *
 * @ingroup themeable
 */
#}

{% block captcha %}
  {{ element }}
{% endblock %}
", "modules/contrib/recaptcha_v3/templates/captcha--recaptcha-v3.html.twig", "/home/casafirjancityco/public_html/modules/contrib/recaptcha_v3/templates/captcha--recaptcha-v3.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 21);
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
