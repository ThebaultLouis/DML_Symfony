<?php

/* public/danseShow.html.twig */
class __TwigTemplate_9e56336b1cbe2e85824b4a4481e8886098fdb4e4723e9e0e108f83c3ec457c83 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/danseShow.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/danseShow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/danseShow.html.twig"));

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
        echo "<div id=\"show\" class=\"card mb-3 mt-4\">
  <div class=\"card-header\" style=\"font-size:2em;\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 5, $this->source); })()), "title", array()), "html", null, true);
        echo "
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 6, $this->source); })()), "brochure", array())) {
            // line 7
            echo "    <a class=\"ml-4 mr-4\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, (isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 7, $this->source); })()), "brochure", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"far fa-file-pdf\"></i></a>
    ";
        }
        // line 9
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 9, $this->source); })()), "youtubeLink", array())) {
            // line 10
            echo "     <a class=\"ml-4 mr-4\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 10, $this->source); })()), "youtubeLink", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a>
    ";
        }
        // line 12
        echo "  </div>
  <div class=\"card-body\">
    <ul >
      <li class=\"list-group-item d-flex justify-content-between align-items-center\">
        Danses révisées le ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 16, $this->source); })()), "danceDate", array()), "d/m/Y"), "html", null, true);
        echo "
      </li>
      ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 18, $this->source); })()), "danseRevisees", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dr"]) {
            // line 19
            echo "      <li class=\"list-group-item d-flex justify-content-between align-items-center\">
        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dr"], "youtubeLink", array()), "html", null, true);
            echo "\" class=\"nav-link\" style=\"display:inline;\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dr"], "title", array()), "html", null, true);
            echo "</a>
      </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </ul>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/danseShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 23,  95 => 20,  92 => 19,  88 => 18,  83 => 16,  77 => 12,  71 => 10,  68 => 9,  62 => 7,  60 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div id=\"show\" class=\"card mb-3 mt-4\">
  <div class=\"card-header\" style=\"font-size:2em;\">{{da.title}}
    {% if da.brochure %}
    <a class=\"ml-4 mr-4\" href=\"{{ asset('uploads/brochures/' ~ da.brochure) }}\" target=\"_blank\"><i class=\"far fa-file-pdf\"></i></a>
    {% endif %}
    {% if da.youtubeLink %}
     <a class=\"ml-4 mr-4\" href=\"{{da.youtubeLink}}\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a>
    {% endif %}
  </div>
  <div class=\"card-body\">
    <ul >
      <li class=\"list-group-item d-flex justify-content-between align-items-center\">
        Danses révisées le {{da.danceDate | date('d/m/Y')}}
      </li>
      {% for dr in da.danseRevisees %}
      <li class=\"list-group-item d-flex justify-content-between align-items-center\">
        <a href=\"{{dr.youtubeLink}}\" class=\"nav-link\" style=\"display:inline;\" target=\"_blank\">{{dr.title}}</a>
      </li>
      {% endfor %}
    </ul>
  </div>
</div>
{% endblock %}
", "public/danseShow.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\public\\danseShow.html.twig");
    }
}
