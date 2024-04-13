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

/* exposition/index.html.twig */
class __TwigTemplate_15225d8c6920c44952b4660a058819a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exposition/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exposition/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exposition/index.html.twig", 1);
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

        echo "Expositions";
        
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
        echo "    <h1>Toutes les Expositions</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Publiee</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["expositions"]) || array_key_exists("expositions", $context) ? $context["expositions"] : (function () { throw new RuntimeError('Variable "expositions" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["exposition"]) {
            // line 19
            echo "        \t       
            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exposition"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exposition"], "titre", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo ((twig_get_attribute($this->env, $this->source, $context["exposition"], "publiee", [], "any", false, false, false, 23)) ? ("Oui") : ("Non"));
            echo "</td>
                <td>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exposition_show", ["id" => twig_get_attribute($this->env, $this->source, $context["exposition"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">Details</a>
                    ";
            // line 26
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 27
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exposition_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["exposition"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\">Modifier</a>
                    ";
            }
            // line 29
            echo "                </td>
            </tr>
            
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "            <tr>
                <td colspan=\"4\">Pas d'expositions trouvés</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exposition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["privateexpositions"]) || array_key_exists("privateexpositions", $context) ? $context["privateexpositions"] : (function () { throw new RuntimeError('Variable "privateexpositions" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["privateexposition"]) {
            // line 39
            echo "        \t
            <tr>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privateexposition"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privateexposition"], "titre", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo ((twig_get_attribute($this->env, $this->source, $context["privateexposition"], "publiee", [], "any", false, false, false, 43)) ? ("Oui") : ("Non"));
            echo "</td>
                <td>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exposition_show", ["id" => twig_get_attribute($this->env, $this->source, $context["privateexposition"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">Details</a>
                    ";
            // line 46
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 47
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exposition_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["privateexposition"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">Modifier</a>
                    ";
            }
            // line 49
            echo "                </td>
            </tr>
            
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privateexposition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        
        </tbody>
    </table>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "exposition/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 54,  189 => 49,  183 => 47,  181 => 46,  177 => 45,  172 => 43,  168 => 42,  164 => 41,  160 => 39,  156 => 38,  153 => 37,  144 => 33,  136 => 29,  130 => 27,  128 => 26,  124 => 25,  119 => 23,  115 => 22,  111 => 21,  107 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Expositions{% endblock %}

{% block body %}
    <h1>Toutes les Expositions</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Publiee</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for exposition in expositions %}
        \t       
            <tr>
                <td>{{ exposition.id }}</td>
                <td>{{ exposition.titre }}</td>
                <td>{{ exposition.publiee ? 'Oui' : 'Non' }}</td>
                <td>
                    <a href=\"{{ path('app_exposition_show', {'id': exposition.id}) }}\">Details</a>
                    {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ path('app_exposition_edit', {'id': exposition.id}) }}\">Modifier</a>
                    {% endif %}
                </td>
            </tr>
            
        {% else %}
            <tr>
                <td colspan=\"4\">Pas d'expositions trouvés</td>
            </tr>
        {% endfor %}
        
        {% for privateexposition in privateexpositions %}
        \t
            <tr>
                <td>{{ privateexposition.id }}</td>
                <td>{{ privateexposition.titre }}</td>
                <td>{{ privateexposition.publiee ? 'Oui' : 'Non' }}</td>
                <td>
                    <a href=\"{{ path('app_exposition_show', {'id': privateexposition.id}) }}\">Details</a>
                    {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ path('app_exposition_edit', {'id': privateexposition.id}) }}\">Modifier</a>
                    {% endif %}
                </td>
            </tr>
            
        
        {% endfor %}
        
        </tbody>
    </table>


{% endblock %}
", "exposition/index.html.twig", "C:\\Users\\sarra\\CSC4101\\projet\\myshoes\\templates\\exposition\\index.html.twig");
    }
}
