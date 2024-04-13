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

/* placard/show.html.twig */
class __TwigTemplate_9a6cd03bd22fdfddad195d869d1ac75e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "placard/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "placard/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "placard/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "      <h1>Details du Placard</h1>

         

      <table class=\"table\">
          <tbody>
              <tr>
                  <th>Id</th>
                  <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["placard"]) || array_key_exists("placard", $context) ? $context["placard"] : (function () { throw new RuntimeError('Variable "placard" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                  <th>Placard</th>
                  <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["placard"]) || array_key_exists("placard", $context) ? $context["placard"] : (function () { throw new RuntimeError('Variable "placard" does not exist.', 16, $this->source); })()), "NomPlacard", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                  <th>Référence</th>
                  <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["placard"]) || array_key_exists("placard", $context) ? $context["placard"] : (function () { throw new RuntimeError('Variable "placard" does not exist.', 20, $this->source); })()), "RefPlacard", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                  <th>Appartient au membre</th>
                  <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["placard"]) || array_key_exists("placard", $context) ? $context["placard"] : (function () { throw new RuntimeError('Variable "placard" does not exist.', 24, $this->source); })()), "member", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                  <th>Chaussures</th>
                  <td>
                  <ul>
                  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["placard"]) || array_key_exists("placard", $context) ? $context["placard"] : (function () { throw new RuntimeError('Variable "placard" does not exist.', 30, $this->source); })()), "chaussures", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["chaussure"]) {
            // line 31
            echo "                  <li>
                  <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chaussure_show", ["id" => twig_get_attribute($this->env, $this->source, $context["chaussure"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["chaussure"], "html", null, true);
            echo "</a>
                  </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chaussure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo " 
                  </ul> 
                  </td>
              </tr>
          </tbody>
      </table>
      
      <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chaussure_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["placard"]) || array_key_exists("placard", $context) ? $context["placard"] : (function () { throw new RuntimeError('Variable "placard" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\">Nouvelle chaussure</a>
      
      <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_placard_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["placard"]) || array_key_exists("placard", $context) ? $context["placard"] : (function () { throw new RuntimeError('Variable "placard" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">Modifier</a>
      
      <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exposition_index");
        echo "\">Retour aux expositions</a>


  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "placard/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  140 => 43,  135 => 41,  126 => 34,  115 => 32,  112 => 31,  108 => 30,  99 => 24,  92 => 20,  85 => 16,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
      <h1>Details du Placard</h1>

         

      <table class=\"table\">
          <tbody>
              <tr>
                  <th>Id</th>
                  <td>{{ placard.id }}</td>
              </tr>
              <tr>
                  <th>Placard</th>
                  <td>{{ placard.NomPlacard }}</td>
              </tr>
              <tr>
                  <th>Référence</th>
                  <td>{{ placard.RefPlacard }}</td>
              </tr>
              <tr>
                  <th>Appartient au membre</th>
                  <td>{{ placard.member }}</td>
              </tr>
              <tr>
                  <th>Chaussures</th>
                  <td>
                  <ul>
                  {%  for chaussure in placard.chaussures %}
                  <li>
                  <a href=\"{{ path('chaussure_show', {'id': chaussure.id}) }}\">{{ chaussure }}</a>
                  </li>
                  {% endfor %} 
                  </ul> 
                  </td>
              </tr>
          </tbody>
      </table>
      
      <a href=\"{{ path('app_chaussure_new', {'id': placard.id}) }}\">Nouvelle chaussure</a>
      
      <a href=\"{{ path('app_placard_edit', {'id': placard.id}) }}\">Modifier</a>
      
      <a href=\"{{ path('app_exposition_index') }}\">Retour aux expositions</a>


  {% endblock %} {# body #} ", "placard/show.html.twig", "C:\\Users\\sarra\\CSC4101\\projet\\myshoes\\templates\\placard\\show.html.twig");
    }
}
