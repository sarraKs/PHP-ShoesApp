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

/* admin/fields/placard_chaussures.html.twig */
class __TwigTemplate_8899cf23bbe380b9974dd72ca5ce91ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fields/placard_chaussures.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fields/placard_chaussures.html.twig"));

        // line 2
        echo "  <ul>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 3, $this->source); })()), "value", [], "any", false, false, false, 3));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["chaussure"]) {
            // line 4
            $context["url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", ["App\\Controller\\Admin\\ChaussureCrudController"], "method", false, false, false, 4), "setAction", ["detail"], "method", false, false, false, 5), "setEntityId", [twig_get_attribute($this->env, $this->source,             // line 7
$context["chaussure"], "id", [], "any", false, false, false, 7)], "method", false, false, false, 6);
            // line 9
            echo "<li>
  \t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $context["chaussure"], "html", null, true);
            echo "
  \t</a>
  </li>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "</ul>  
  <span class=\"badge badge-secondary\">None</span>
  <ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chaussure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </ul>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/fields/placard_chaussures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  70 => 15,  61 => 11,  57 => 10,  54 => 9,  52 => 7,  51 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# source: https://stackoverflow.com/a/65082524/1814910 #}
  <ul>
{% for chaussure in field.value %}
  {%- set url = ea_url()
    .setController('App\\\\Controller\\\\Admin\\\\ChaussureCrudController')
    .setAction('detail')
    .setEntityId(chaussure.id)
  -%}
  <li>
  \t<a href=\"{{ url }}\">
        {{ chaussure }}
  \t</a>
  </li>
{% else %}
</ul>  
  <span class=\"badge badge-secondary\">None</span>
  <ul>
{% endfor %}
  </ul>", "admin/fields/placard_chaussures.html.twig", "C:\\Users\\sarra\\CSC4101\\projet\\myshoes\\templates\\admin\\fields\\placard_chaussures.html.twig");
    }
}
