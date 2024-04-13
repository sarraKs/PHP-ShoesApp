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

/* @BootstrapMenu/link.html.twig */
class __TwigTemplate_9a6c278d68860bd86f6679c43a949f53 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/link.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "label", [], "any", true, true, false, 2) && (twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "route", [], "any", true, true, false, 2) || twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "url", [], "any", true, true, false, 2)))) {
            // line 3
            echo "  <li class=\"nav-item\">
    <a class=\"nav-link\" ";
            // line 4
            $this->loadTemplate("@BootstrapMenu/href.html.twig", "@BootstrapMenu/link.html.twig", 4)->display(twig_array_merge($context, ["menu_item" => (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 4, $this->source); })())]));
            echo ">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 5, $this->source); })()), "label", [], "any", false, false, false, 5), "html", null, true);
            // line 6
            echo "</a>
  </li>
  ";
        }
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_7_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@BootstrapMenu/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,  56 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
  {% if menu_item.label is defined and (menu_item.route is defined or menu_item.url is defined) %}
  <li class=\"nav-item\">
    <a class=\"nav-link\" {% include '@BootstrapMenu/href.html.twig' with { menu_item } %}>
      {{- menu_item.label -}}
    </a>
  </li>
  {% endif %}
{% endapply %}
", "@BootstrapMenu/link.html.twig", "C:\\Users\\sarra\\CSC4101\\projet\\myshoes\\vendor\\camurphy\\bootstrap-menu-bundle\\Resources\\views\\link.html.twig");
    }
}
