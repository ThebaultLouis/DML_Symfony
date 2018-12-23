<?php

/* public/manifestation.html.twig */
class __TwigTemplate_5f0d804ab95e177bca3b8a44ffcbee515cc839a87e733bcce0a1e15a8946a836 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/manifestation.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/manifestation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/manifestation.html.twig"));

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
<h1 style=\"text-align:center;\">Manifestations</h1>

<p class=\"mt-4\">
  <button id=\"btn\" class=\"btn btn-primary btn-lg btn-block\" type=\"button\" data-toggle=\"collapse\" data-target=\"#multiCollapseExample1\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample1\">Manifestation du club</button>
</p>


<div class=\"collapse multi-collapse\" id=\"multiCollapseExample1\">
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dml"]) || array_key_exists("dml", $context) ? $context["dml"] : (function () { throw new Twig_Error_Runtime('Variable "dml" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["danse"]) {
            // line 14
            echo "  <div class=\"card mb-3\">
    <div class=\"card-header\" style=\"font-size:2em;\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "title", array()), "html", null, true);
            echo "
      ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["danse"], "brochure", array())) {
                // line 17
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["danse"], "brochure", array()))), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"far fa-file-pdf\"></i></a>
      ";
            }
            // line 19
            echo "    </div>
    <div class=\"card-body\">
      <p class=\"card-text\">À ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "ville", array()), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "eventDate", array()), "d/m/Y"), "html", null, true);
            echo "</p>
      <p class=\"card-text\">";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["danse"], "description", array());
            echo "</p>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['danse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>

<button id=\"btn\" class=\"btn btn-primary btn-lg btn-block\" type=\"button\" data-toggle=\"collapse\" data-target=\"#multiCollapseExample2\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample2\">Manifestation ailleurs</button>

<div class=\"collapse multi-collapse\" id=\"multiCollapseExample2\">
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["manifestations"]) || array_key_exists("manifestations", $context) ? $context["manifestations"] : (function () { throw new Twig_Error_Runtime('Variable "manifestations" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["manifMoi"]) {
            // line 32
            if ($context["manifMoi"]) {
                // line 33
                echo "<table id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\" class=\"\">Nom</th>
      <th scope=\"col\" class=\"\">Date</th>
      <th scope=\"col\" class=\"\">Ville</th>
      <th scope=\"col\" class=\"\">CP</th>
      <th scope=\"col\" class=\"\">Club</th>
    </tr>
  </thead>
  <tbody>

";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["manifMoi"]);
                foreach ($context['_seq'] as $context["_key"] => $context["mani"]) {
                    // line 46
                    echo "
    <tr>
      <th scope=\"row\">";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "title", array()), "html", null, true);
                    echo "</th>
      <td>";
                    // line 49
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "event_date", array()), "d/m/Y"), "html", null, true);
                    echo "</td>
      <td>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "ville", array()), "html", null, true);
                    echo "</td>
      <td>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "cp", array()), "html", null, true);
                    echo "</td>
      <td>";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "club", array()), "html", null, true);
                    echo "</td>
    </tr>

";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mani'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 57
            echo "</tbody>
</table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manifMoi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "  </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/manifestation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 60,  165 => 57,  154 => 52,  150 => 51,  146 => 50,  142 => 49,  138 => 48,  134 => 46,  130 => 45,  116 => 33,  114 => 32,  110 => 31,  103 => 26,  93 => 22,  87 => 21,  83 => 19,  77 => 17,  75 => 16,  71 => 15,  68 => 14,  64 => 13,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h1 style=\"text-align:center;\">Manifestations</h1>

<p class=\"mt-4\">
  <button id=\"btn\" class=\"btn btn-primary btn-lg btn-block\" type=\"button\" data-toggle=\"collapse\" data-target=\"#multiCollapseExample1\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample1\">Manifestation du club</button>
</p>


<div class=\"collapse multi-collapse\" id=\"multiCollapseExample1\">
{% for danse in dml %}
  <div class=\"card mb-3\">
    <div class=\"card-header\" style=\"font-size:2em;\">{{danse.title}}
      {% if danse.brochure %}
      <a href=\"{{ asset('uploads/brochures/' ~ danse.brochure) }}\" target=\"_blank\"><i class=\"far fa-file-pdf\"></i></a>
      {% endif %}
    </div>
    <div class=\"card-body\">
      <p class=\"card-text\">À {{danse.ville}} le {{danse.eventDate | date('d/m/Y')}}</p>
      <p class=\"card-text\">{{danse.description | raw}}</p>
    </div>
  </div>
{% endfor %}
</div>

<button id=\"btn\" class=\"btn btn-primary btn-lg btn-block\" type=\"button\" data-toggle=\"collapse\" data-target=\"#multiCollapseExample2\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample2\">Manifestation ailleurs</button>

<div class=\"collapse multi-collapse\" id=\"multiCollapseExample2\">
{% for manifMoi in manifestations %}
{% if manifMoi %}
<table id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\" class=\"\">Nom</th>
      <th scope=\"col\" class=\"\">Date</th>
      <th scope=\"col\" class=\"\">Ville</th>
      <th scope=\"col\" class=\"\">CP</th>
      <th scope=\"col\" class=\"\">Club</th>
    </tr>
  </thead>
  <tbody>

{% for mani in manifMoi %}

    <tr>
      <th scope=\"row\">{{mani.title}}</th>
      <td>{{mani.event_date | date(\"d/m/Y\")}}</td>
      <td>{{mani.ville}}</td>
      <td>{{mani.cp}}</td>
      <td>{{mani.club}}</td>
    </tr>

{% endfor %}
{% endif %}
</tbody>
</table>
{% endfor %}
  </div>



{% endblock %}
", "public/manifestation.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\public\\manifestation.html.twig");
    }
}
