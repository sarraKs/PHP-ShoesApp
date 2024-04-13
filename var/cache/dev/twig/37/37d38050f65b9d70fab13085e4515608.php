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

/* exposition/show.html.twig */
class __TwigTemplate_6bc0cb2a6ba55a71d1aa6c099656a52d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exposition/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exposition/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exposition/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Exposition";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Exposition</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exposition"]) || array_key_exists("exposition", $context) ? $context["exposition"] : (function () { throw new RuntimeError('Variable "exposition" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exposition"]) || array_key_exists("exposition", $context) ? $context["exposition"] : (function () { throw new RuntimeError('Variable "exposition" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Publiee</th>
                <td>";
        // line 20
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["exposition"]) || array_key_exists("exposition", $context) ? $context["exposition"] : (function () { throw new RuntimeError('Variable "exposition" does not exist.', 20, $this->source); })()), "publiee", [], "any", false, false, false, 20)) ? ("Oui") : ("Non"));
        echo "</td>
            </tr>
        </tbody>
    </table>
    
    <h2>Chaussures</h2>
\t\t<ul>
   \t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["exposition"]) || array_key_exists("exposition", $context) ? $context["exposition"] : (function () { throw new RuntimeError('Variable "exposition" does not exist.', 27, $this->source); })()), "chaussures", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["chaussure"]) {
            // line 28
            echo "   \t\t\t\t<li>
     \t\t\t\t";
            // line 33
            echo " \t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chaussure_show", ["id" => twig_get_attribute($this->env, $this->source, $context["chaussure"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["chaussure"], "html", null, true);
            echo "</a>  \t\t\t\t
   \t\t\t\t</li>
   \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chaussure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t</ul>

\t
    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exposition_index");
        echo "\">Retour aux expositions</a>
\t
\t";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 42
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exposition_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["exposition"]) || array_key_exists("exposition", $context) ? $context["exposition"] : (function () { throw new RuntimeError('Variable "exposition" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">Modifier</a>
    ";
            // line 43
            echo twig_include($this->env, $context, "exposition/_delete_form.html.twig");
            echo "
    ";
        }
        // line 45
        echo "\t
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "exposition/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 45,  156 => 43,  151 => 42,  149 => 41,  144 => 39,  139 => 36,  127 => 33,  124 => 28,  120 => 27,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Exposition{% endblock %}

{% block body %}
    <h1>Exposition</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ exposition.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ exposition.titre }}</td>
            </tr>
            <tr>
                <th>Publiee</th>
                <td>{{ exposition.publiee ? 'Oui' : 'Non' }}</td>
            </tr>
        </tbody>
    </table>
    
    <h2>Chaussures</h2>
\t\t<ul>
   \t\t\t{% for chaussure in exposition.chaussures %}
   \t\t\t\t<li>
     \t\t\t\t{#
     \t\t\t\t<a href=\"{{ path('app_exposition_chaussure_show', {'exposition_id': exposition.id, 'chaussure_id': chaussure.id}) }}\">{{ chaussure }}</a>
 \t\t\t\t\t
 \t\t\t\t\t#}
 \t\t\t\t\t<a href=\"{{ path('chaussure_show', {'id': chaussure.id}) }}\">{{ chaussure }}</a>  \t\t\t\t
   \t\t\t\t</li>
   \t\t\t{% endfor %}
\t\t</ul>

\t
    <a href=\"{{ path('app_exposition_index') }}\">Retour aux expositions</a>
\t
\t{% if is_granted('ROLE_USER') %}
    <a href=\"{{ path('app_exposition_edit', {'id': exposition.id}) }}\">Modifier</a>
    {{ include('exposition/_delete_form.html.twig') }}
    {% endif %}
\t
    
{% endblock %}
", "exposition/show.html.twig", "C:\\Users\\sarra\\CSC4101\\projet\\myshoes\\templates\\exposition\\show.html.twig");
    }
}
