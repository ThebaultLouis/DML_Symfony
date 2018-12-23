<?php

/* public/danse.html.twig */
class __TwigTemplate_3f1a539171197905a0333f77b912964ec174a519b1cbd2a1b24db0561a754143 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/danse.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/danse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/danse.html.twig"));

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
<h1 style=\"text-align:center;\">Danses</h1>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dansesParNiveau"]) || array_key_exists("dansesParNiveau", $context) ? $context["dansesParNiveau"] : (function () { throw new Twig_Error_Runtime('Variable "dansesParNiveau" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["niveau"] => $context["danses"]) {
            // line 8
            echo "<div class=\"mt-3\" id=\"dansea\">

<button id=\"btn\" class=\"btn btn-primary btn-lg btn-block\"
type=\"button\" data-toggle=\"collapse\" data-target=\"#";
            // line 11
            echo twig_escape_filter($this->env, $context["niveau"], "html", null, true);
            echo "\"
aria-expanded=\"false\" aria-controls=\"";
            // line 12
            echo twig_escape_filter($this->env, $context["niveau"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["niveau"], "html", null, true);
            echo "</button>

<div class=\"collapse multi-collapse\" id=\"";
            // line 14
            echo twig_escape_filter($this->env, $context["niveau"], "html", null, true);
            echo "\">

<table id=\"danse\" class=\"table mt-4\" style=\"text-align:center;font-size:1.5em;\">
  <thead class=\"\">
    <tr>
      <th scope=\"col\" class=\"\">Nom</th>
      <th scope=\"col\" class=\"\">Date</th>
      <th scope=\"col\" class=\"\">Youtube</th>
      <th scope=\"col\" class=\"\">PDF</th>
    </tr>
  </thead>
  <tbody>

";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["danses"]);
            foreach ($context['_seq'] as $context["_key"] => $context["danse"]) {
                // line 28
                echo "
    <tr>
      <th scope=\"row\" >
        <span class=\"grand\" style=\"font-size:0.6em\">
          ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "title", array()), "html", null, true);
                echo " <br>

          ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["danse"], "danseRevisees", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["dr"]) {
                    // line 35
                    echo "          |<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dr"], "youtubeLink", array()), "html", null, true);
                    echo "\" class=\"nav-link\" style=\"display:inline;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dr"], "title", array()), "html", null, true);
                    echo "</a>|
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "        </span>
        <span class=\"petit\">
          <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("danseShow", array("id" => twig_get_attribute($this->env, $this->source, $context["danse"], "id", array()))), "html", null, true);
                echo "\" class=\"\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "title", array()), "html", null, true);
                echo "</a>
        </span>
      </th>

      <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "danceDate", array()), "d/m/Y"), "html", null, true);
                echo "</td>
      <td> <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "youtubeLink", array()), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a></td>
      <td>
        ";
                // line 46
                if (twig_get_attribute($this->env, $this->source, $context["danse"], "brochure", array())) {
                    // line 47
                    echo "        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["danse"], "brochure", array()))), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"far fa-file-pdf\"></i></a>
        ";
                }
                // line 49
                echo "      </td>
    </tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['danse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "</tbody>
</table>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['niveau'], $context['danses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/danse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 57,  163 => 53,  154 => 49,  148 => 47,  146 => 46,  141 => 44,  137 => 43,  128 => 39,  124 => 37,  113 => 35,  109 => 34,  104 => 32,  98 => 28,  94 => 27,  78 => 14,  71 => 12,  67 => 11,  62 => 8,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h1 style=\"text-align:center;\">Danses</h1>

{% for niveau, danses in  dansesParNiveau %}
<div class=\"mt-3\" id=\"dansea\">

<button id=\"btn\" class=\"btn btn-primary btn-lg btn-block\"
type=\"button\" data-toggle=\"collapse\" data-target=\"#{{niveau}}\"
aria-expanded=\"false\" aria-controls=\"{{niveau}}\">{{niveau}}</button>

<div class=\"collapse multi-collapse\" id=\"{{niveau}}\">

<table id=\"danse\" class=\"table mt-4\" style=\"text-align:center;font-size:1.5em;\">
  <thead class=\"\">
    <tr>
      <th scope=\"col\" class=\"\">Nom</th>
      <th scope=\"col\" class=\"\">Date</th>
      <th scope=\"col\" class=\"\">Youtube</th>
      <th scope=\"col\" class=\"\">PDF</th>
    </tr>
  </thead>
  <tbody>

{% for danse in danses %}

    <tr>
      <th scope=\"row\" >
        <span class=\"grand\" style=\"font-size:0.6em\">
          {{danse.title}} <br>

          {% for dr in danse.danseRevisees %}
          |<a href=\"{{dr.youtubeLink}}\" class=\"nav-link\" style=\"display:inline;\">{{dr.title}}</a>|
          {% endfor %}
        </span>
        <span class=\"petit\">
          <a href=\"{{path(\"danseShow\", {\"id\" : danse.id})}}\" class=\"\">{{danse.title}}</a>
        </span>
      </th>

      <td>{{danse.danceDate | date(\"d/m/Y\")}}</td>
      <td> <a href=\"{{danse.youtubeLink}}\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a></td>
      <td>
        {% if danse.brochure %}
        <a href=\"{{ asset('uploads/brochures/' ~ danse.brochure) }}\" target=\"_blank\"><i class=\"far fa-file-pdf\"></i></a>
        {% endif %}
      </td>
    </tr>

{% endfor %}
</tbody>
</table>
</div>
{% endfor %}


{% endblock %}
", "public/danse.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\public\\danse.html.twig");
    }
}
