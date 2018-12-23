<?php

/* admin/danceCreate.html.twig */
class __TwigTemplate_6cd84c8150290aef52113c30d5ea8b41089f760e5e1ce9d2156e4e767d52cdd2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/danceCreate.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/danceCreate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/danceCreate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1 class=\"mt-4 mb-4\" style=\"text-align:center;\">
  Ajout d'un nouveau cours
</h1>

<div class=\"\">
  ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 8, $this->source); })()), 'form_start');
        echo "

  <div class=\"form-row\">
    <div class=\"col-md-3 mr-4\">
    <label for=\"form\" style=\"font-size:2em;\">Niveau</label>
      ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 13, $this->source); })()), "niveau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"\">
      <label for=\"form\" style=\"font-size:2em;\">Date</label>
      ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 17, $this->source); })()), "danceDate", array()), 'widget');
        echo "
    </div>
  </div>

  <h4 class=\"mt-4\">Danse apprise</h4>

  <div id=\"principale\" class=\"alert\">
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 24, $this->source); })()), "title", array()), 'row', array("label" => "Titre", "attr" => array("placeholder" => "Ne rien mettre si aucune danse n'a été apprise")));
        echo "
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 25, $this->source); })()), "youtubeLink", array()), 'row', array("label" => "lien Youtube", "attr" => array("placeholder" => "Lien Youtube de la danse apprise")));
        echo "
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 26, $this->source); })()), "imageFile", array()), 'row');
        echo "
  </div>

</div>

<div class=\"\">
  <h4 class=\"\">Danses révisées</h4>
  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 33, $this->source); })()), "danseRevisees", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 34
            echo "    <div id=\"secondaire\" class=\"alert\">
      ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["d"], "title", array()), 'row', array("label" => "Titre", "attr" => array("placeholder" => "Titre de la danse révisée")));
            echo "
      ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["d"], "youtubeLink", array()), 'row', array("label" => "Lien Youtube", "attr" => array("placeholder" => "Lien Youtube de la danse révisée")));
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</div>

<button type=\"submit\" class=\"btn btn-success mb-5\">Ajouter les nouvelles danses</button>


";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["da"]) || array_key_exists("da", $context) ? $context["da"] : (function () { throw new Twig_Error_Runtime('Variable "da" does not exist.', 44, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/danceCreate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 44,  123 => 39,  114 => 36,  110 => 35,  107 => 34,  103 => 33,  93 => 26,  89 => 25,  85 => 24,  75 => 17,  68 => 13,  60 => 8,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<h1 class=\"mt-4 mb-4\" style=\"text-align:center;\">
  Ajout d'un nouveau cours
</h1>

<div class=\"\">
  {{  form_start(da) }}

  <div class=\"form-row\">
    <div class=\"col-md-3 mr-4\">
    <label for=\"form\" style=\"font-size:2em;\">Niveau</label>
      {{ form_widget(da.niveau, {\"attr\": {\"class\" : \"form-control\"} })}}
    </div>
    <div class=\"\">
      <label for=\"form\" style=\"font-size:2em;\">Date</label>
      {{ form_widget(da.danceDate)}}
    </div>
  </div>

  <h4 class=\"mt-4\">Danse apprise</h4>

  <div id=\"principale\" class=\"alert\">
    {{ form_row(da.title, {\"label\": \"Titre\" ,\"attr\": {\"placeholder\" : \"Ne rien mettre si aucune danse n'a été apprise\"} })}}
    {{ form_row(da.youtubeLink, {\"label\": \"lien Youtube\",\"attr\": {\"placeholder\" : \"Lien Youtube de la danse apprise\"} })}}
    {{ form_row(da.imageFile)}}
  </div>

</div>

<div class=\"\">
  <h4 class=\"\">Danses révisées</h4>
  {%  for d in da.danseRevisees  %}
    <div id=\"secondaire\" class=\"alert\">
      {{ form_row(d.title, {\"label\": \"Titre\",\"attr\": {\"placeholder\" : \"Titre de la danse révisée\"} }) }}
      {{ form_row(d.youtubeLink, {\"label\": \"Lien Youtube\",\"attr\": {\"placeholder\" : \"Lien Youtube de la danse révisée\"} }) }}
    </div>
  {% endfor %}
</div>

<button type=\"submit\" class=\"btn btn-success mb-5\">Ajouter les nouvelles danses</button>


{{  form_end(da)  }}

{% endblock %}
", "admin/danceCreate.html.twig", "/home/thebault/Documents/symfony/dmlLaille/templates/admin/danceCreate.html.twig");
    }
}
