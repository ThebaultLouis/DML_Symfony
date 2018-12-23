<?php

/* admin/manifestationCreate.html.twig */
class __TwigTemplate_55847fc7a6a4463202120bf7f0d5cda345397b893ca3a7745eb40e7a7af75021 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/manifestationCreate.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/manifestationCreate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/manifestationCreate.html.twig"));

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
<h1 class=\"mt-4 mb-4\" style=\"text-align:center;\">
  Ajout d'une nouvelle manifestation
</h1>
  <div id=\"principale\" class=\"alert\">
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["maniForm"]) || array_key_exists("maniForm", $context) ? $context["maniForm"] : (function () { throw new Twig_Error_Runtime('Variable "maniForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "

";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["maniForm"]) || array_key_exists("maniForm", $context) ? $context["maniForm"] : (function () { throw new Twig_Error_Runtime('Variable "maniForm" does not exist.', 11, $this->source); })()), "title", array()), 'row', array("label" => "Nom", "attr" => array("placeholder" => "Nom de la manifestation")));
        echo "

";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["maniForm"]) || array_key_exists("maniForm", $context) ? $context["maniForm"] : (function () { throw new Twig_Error_Runtime('Variable "maniForm" does not exist.', 13, $this->source); })()), "eventDate", array()), 'row', array("label" => "Date de la manifestation"));
        echo "

<div class=\"form-row\">
  <div class=\"col-md-3\">
  ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["maniForm"]) || array_key_exists("maniForm", $context) ? $context["maniForm"] : (function () { throw new Twig_Error_Runtime('Variable "maniForm" does not exist.', 17, $this->source); })()), "ville", array()), 'row', array("label" => "Ville", "attr" => array("placeholder" => "Ville", "class" => "control-form")));
        echo "
</div>
  <div class=\"col-md-3\">
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["maniForm"]) || array_key_exists("maniForm", $context) ? $context["maniForm"] : (function () { throw new Twig_Error_Runtime('Variable "maniForm" does not exist.', 20, $this->source); })()), "cp", array()), 'row', array("label" => "CP", "attr" => array("placeholder" => "Code postal", "class" => "control-form")));
        echo "
  </div>
  <div class=\"col-md-5\">
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["maniForm"]) || array_key_exists("maniForm", $context) ? $context["maniForm"] : (function () { throw new Twig_Error_Runtime('Variable "maniForm" does not exist.', 23, $this->source); })()), "club", array()), 'row', array("label" => "Club", "attr" => array("placeholder" => "Mettre 'DML' si organisé par le club", "class" => "control-form")));
        echo "
  </div>
</div>
  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["maniForm"]) || array_key_exists("maniForm", $context) ? $context["maniForm"] : (function () { throw new Twig_Error_Runtime('Variable "maniForm" does not exist.', 26, $this->source); })()), "imageFile", array()), 'row');
        echo "
  ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["maniForm"]) || array_key_exists("maniForm", $context) ? $context["maniForm"] : (function () { throw new Twig_Error_Runtime('Variable "maniForm" does not exist.', 27, $this->source); })()), "description", array()), 'row');
        echo "
    <button type=\"submit\" class=\"btn btn-success\">Ajoutes les nouvelles danses</button>
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["maniForm"]) || array_key_exists("maniForm", $context) ? $context["maniForm"] : (function () { throw new Twig_Error_Runtime('Variable "maniForm" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/manifestationCreate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  99 => 27,  95 => 26,  89 => 23,  83 => 20,  77 => 17,  70 => 13,  65 => 11,  60 => 9,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h1 class=\"mt-4 mb-4\" style=\"text-align:center;\">
  Ajout d'une nouvelle manifestation
</h1>
  <div id=\"principale\" class=\"alert\">
{{form_start(maniForm)}}

{{ form_row(maniForm.title, {\"label\": \"Nom\",\"attr\": {\"placeholder\" : \"Nom de la manifestation\"} })}}

{{ form_row(maniForm.eventDate, {\"label\": \"Date de la manifestation\" })}}

<div class=\"form-row\">
  <div class=\"col-md-3\">
  {{ form_row(maniForm.ville, {\"label\": \"Ville\",\"attr\": {\"placeholder\" : \"Ville\", \"class\" : \"control-form\"} })}}
</div>
  <div class=\"col-md-3\">
    {{ form_row(maniForm.cp, {\"label\": \"CP\",\"attr\": {\"placeholder\" : \"Code postal\", \"class\" : \"control-form\"} })}}
  </div>
  <div class=\"col-md-5\">
    {{ form_row(maniForm.club, {\"label\": \"Club\",\"attr\": {\"placeholder\" : \"Mettre 'DML' si organisé par le club\", \"class\" : \"control-form\"} })}}
  </div>
</div>
  {{ form_row(maniForm.imageFile)}}
  {{ form_row(maniForm.description)}}
    <button type=\"submit\" class=\"btn btn-success\">Ajoutes les nouvelles danses</button>
{{form_end(maniForm)}}
  </div>
{% endblock %}
", "admin/manifestationCreate.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\admin\\manifestationCreate.html.twig");
    }
}
