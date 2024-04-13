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

/* @EasyAdmin/crud/field/boolean.html.twig */
class __TwigTemplate_33d430d01bc61231f08c1003bbfb427f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/boolean.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/boolean.html.twig"));

        // line 5
        echo "
";
        // line 6
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "crud", [], "any", false, false, false, 6), "currentAction", [], "any", false, false, false, 6) == "detail") ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "customOptions", [], "any", false, false, false, 6), "get", ["renderAsSwitch"], "method", false, false, false, 6))) {
            // line 7
            echo "    ";
            $context["badge_is_hidden"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 7, $this->source); })()), "crud", [], "any", false, false, false, 7), "currentAction", [], "any", false, false, false, 7) == "index") && (((twig_get_attribute($this->env, $this->source,             // line 9
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 9, $this->source); })()), "value", [], "any", false, false, false, 9) == true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 9, $this->source); })()), "customOptions", [], "any", false, false, false, 9), "get", ["hideValueWhenTrue"], "method", false, false, false, 9) == true)) || ((twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 11, $this->source); })()), "value", [], "any", false, false, false, 11) == false) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 11, $this->source); })()), "customOptions", [], "any", false, false, false, 11), "get", ["hideValueWhenFalse"], "method", false, false, false, 11) == true))));
            // line 13
            echo "
    ";
            // line 14
            if ( !(isset($context["badge_is_hidden"]) || array_key_exists("badge_is_hidden", $context) ? $context["badge_is_hidden"] : (function () { throw new RuntimeError('Variable "badge_is_hidden" does not exist.', 14, $this->source); })())) {
                // line 15
                echo "        <span class=\"badge ";
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 15, $this->source); })()), "value", [], "any", false, false, false, 15) == true)) ? ("badge-boolean-true") : ("badge-boolean-false"));
                echo "\">
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 16, $this->source); })()), "value", [], "any", false, false, false, 16) == true)) ? ("label.true") : ("label.false")), [], "EasyAdminBundle"), "html", null, true);
                echo "
        </span>
    ";
            }
        } else {
            // line 20
            echo "    <div class=\"form-check form-switch\">
        <input type=\"checkbox\" class=\"form-check-input\" id=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 21, $this->source); })()), "uniqueId", [], "any", false, false, false, 21), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 21, $this->source); })()), "value", [], "any", false, false, false, 21) == true)) ? ("checked") : (""));
            echo "
            data-toggle-url=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 22, $this->source); })()), "customOptions", [], "any", false, false, false, 22), "get", ["toggleUrl"], "method", false, false, false, 22), "html", null, true);
            echo "\"
            ";
            // line 23
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 23, $this->source); })()), "formTypeOption", ["disabled"], "method", false, false, false, 23) == true)) ? ("disabled") : (""));
            echo " autocomplete=\"off\">
        <label class=\"form-check-label\" for=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 24, $this->source); })()), "uniqueId", [], "any", false, false, false, 24), "html", null, true);
            echo "\"></label>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  63 => 16,  58 => 15,  56 => 14,  53 => 13,  51 => 11,  50 => 9,  48 => 7,  46 => 6,  43 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var field \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% trans_default_domain 'EasyAdminBundle' %}

{% if ea.crud.currentAction == 'detail' or not field.customOptions.get('renderAsSwitch') %}
    {% set badge_is_hidden = ea.crud.currentAction == 'index'
        and (
            (field.value == true and field.customOptions.get('hideValueWhenTrue') == true)
            or
            (field.value == false and field.customOptions.get('hideValueWhenFalse') == true)
        ) %}

    {% if not badge_is_hidden %}
        <span class=\"badge {{ field.value == true ? 'badge-boolean-true' : 'badge-boolean-false' }}\">
            {{ (field.value == true ? 'label.true' : 'label.false')|trans }}
        </span>
    {% endif %}
{% else %}
    <div class=\"form-check form-switch\">
        <input type=\"checkbox\" class=\"form-check-input\" id=\"{{ field.uniqueId }}\" {{ field.value == true ? 'checked' }}
            data-toggle-url=\"{{ field.customOptions.get('toggleUrl') }}\"
            {{ field.formTypeOption('disabled') == true ? 'disabled' }} autocomplete=\"off\">
        <label class=\"form-check-label\" for=\"{{ field.uniqueId }}\"></label>
    </div>
{% endif %}
", "@EasyAdmin/crud/field/boolean.html.twig", "C:\\Users\\sarra\\CSC4101\\projet\\myshoes\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\field\\boolean.html.twig");
    }
}
