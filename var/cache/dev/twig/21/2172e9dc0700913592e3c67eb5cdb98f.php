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

/* chaussure/show.html.twig */
class __TwigTemplate_586125d43448eb5cbb1aed98e39ddba9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chaussure/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chaussure/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chaussure/show.html.twig", 1);
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

        echo "Details de chaussure";
        
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
        echo "
    <h1>Details de la chaussure ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chaussure"]) || array_key_exists("chaussure", $context) ? $context["chaussure"] : (function () { throw new RuntimeError('Variable "chaussure" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>

      <table class=\"table\">
          <tbody>
              <tr>
                  <th>Id</th>
                  <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chaussure"]) || array_key_exists("chaussure", $context) ? $context["chaussure"] : (function () { throw new RuntimeError('Variable "chaussure" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                  <th>Categorie</th>
                  <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chaussure"]) || array_key_exists("chaussure", $context) ? $context["chaussure"] : (function () { throw new RuntimeError('Variable "chaussure" does not exist.', 17, $this->source); })()), "Categorie", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                  <th>Marque</th>
                  <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chaussure"]) || array_key_exists("chaussure", $context) ? $context["chaussure"] : (function () { throw new RuntimeError('Variable "chaussure" does not exist.', 21, $this->source); })()), "Marque", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                  <th>Couleur</th>
                  <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chaussure"]) || array_key_exists("chaussure", $context) ? $context["chaussure"] : (function () { throw new RuntimeError('Variable "chaussure" does not exist.', 25, $this->source); })()), "Couleur", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
              </tr>
          </tbody>
      </table>
\t  <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("placard_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chaussure"]) || array_key_exists("chaussure", $context) ? $context["chaussure"] : (function () { throw new RuntimeError('Variable "chaussure" does not exist.', 29, $this->source); })()), "placard", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)]), "html", null, true);
        echo "\">Revenir au placard</a>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "chaussure/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 29,  121 => 25,  114 => 21,  107 => 17,  100 => 13,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Details de chaussure{% endblock %}

{% block body %}

    <h1>Details de la chaussure {{chaussure.id}}</h1>

      <table class=\"table\">
          <tbody>
              <tr>
                  <th>Id</th>
                  <td>{{ chaussure.id }}</td>
              </tr>
              <tr>
                  <th>Categorie</th>
                  <td>{{ chaussure.Categorie }}</td>
              </tr>
              <tr>
                  <th>Marque</th>
                  <td>{{ chaussure.Marque }}</td>
              </tr>
              <tr>
                  <th>Couleur</th>
                  <td>{{ chaussure.Couleur }}</td>
              </tr>
          </tbody>
      </table>
\t  <a href=\"{{ path('placard_show', {'id': chaussure.placard.id}) }}\">Revenir au placard</a>


{% endblock %}
", "chaussure/show.html.twig", "C:\\Users\\sarra\\CSC4101\\projet\\myshoes\\templates\\chaussure\\show.html.twig");
    }
}
