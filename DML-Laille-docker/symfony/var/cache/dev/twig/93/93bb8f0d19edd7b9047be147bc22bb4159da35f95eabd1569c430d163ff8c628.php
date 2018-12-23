<?php

/* public/adherent.html.twig */
class __TwigTemplate_74f93d2adcf68ae27cb1fcc55ee11efdd5a7cf887f1eb5f7d63fd194afa360e3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/adherent.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/adherent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/adherent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1 class=\"mt-4\" style=\"text-align:center;\">Cours supplémentaires</h1>

<table  id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\" class=\"\">Nom</th>
      <th scope=\"col\" class=\"\">Date</th>
      <th scope=\"col\" class=\"\">Début</th>
      <th scope=\"col\" class=\"\">Fin</th>
      <th scope=\"col\" class=\"\">Niveau</th>
    </tr>
  </thead>
  <tbody>

";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new Twig_Error_Runtime('Variable "cours" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 20
            echo "
    <tr>
      <th scope=\"row\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "coursDate", array()), "d/m/Y"), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "horaireDebut", array()), "H:i"), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "horaireFin", array()), "H:i"), "html", null, true);
            echo "</td>
      <td><p><span style=\"font-size:0.8em;\">
      ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["c"], "niveau", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
                // line 28
                echo "      | ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "title", array()), "html", null, true);
                echo " |
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['niveau'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </span></p></td>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/adherent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  108 => 30,  99 => 28,  95 => 27,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 20,  70 => 19,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h1 class=\"mt-4\" style=\"text-align:center;\">Cours supplémentaires</h1>

<table  id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\" class=\"\">Nom</th>
      <th scope=\"col\" class=\"\">Date</th>
      <th scope=\"col\" class=\"\">Début</th>
      <th scope=\"col\" class=\"\">Fin</th>
      <th scope=\"col\" class=\"\">Niveau</th>
    </tr>
  </thead>
  <tbody>

{% for c in cours %}

    <tr>
      <th scope=\"row\">{{c.title}}</th>
      <td>{{c.coursDate | date(\"d/m/Y\")}}</td>
      <td>{{c.horaireDebut | date(\"H:i\")}}</td>
      <td>{{c.horaireFin | date(\"H:i\")}}</td>
      <td><p><span style=\"font-size:0.8em;\">
      {% for niveau in c.niveau %}
      | {{niveau.title}} |
      {% endfor %}
    </span></p></td>
    </tr>

{% endfor %}
</tbody>
</table>

{% endblock %}
", "public/adherent.html.twig", "/home/thebault/Documents/symfony/dmlLaille/templates/public/adherent.html.twig");
    }
}
