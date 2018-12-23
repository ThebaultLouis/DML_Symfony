<?php

/* admin/coursSupplementaireCreate.html.twig */
class __TwigTemplate_b1b3f702f9df2b687fb07ce924bf533c0eb0166e6279d60575329e4ca73c4c2c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/coursSupplementaireCreate.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/coursSupplementaireCreate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/coursSupplementaireCreate.html.twig"));

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
  Ajout d'un nouveau cours supplémentaire
</h1>

<div id=\"principale\" class=\"alert\">
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["coursForm"]) || array_key_exists("coursForm", $context) ? $context["coursForm"] : (function () { throw new Twig_Error_Runtime('Variable "coursForm" does not exist.', 10, $this->source); })()), 'form_start');
        echo "

";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coursForm"]) || array_key_exists("coursForm", $context) ? $context["coursForm"] : (function () { throw new Twig_Error_Runtime('Variable "coursForm" does not exist.', 12, $this->source); })()), "title", array()), 'row', array("label" => "Nom", "attr" => array("placeholder" => "Nom du cours")));
        echo "

";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coursForm"]) || array_key_exists("coursForm", $context) ? $context["coursForm"] : (function () { throw new Twig_Error_Runtime('Variable "coursForm" does not exist.', 14, $this->source); })()), "coursDate", array()), 'row', array("label" => "Date du cours"));
        echo "
<div class=\"form-row\">
  <div class=\"col-md-3\">
";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coursForm"]) || array_key_exists("coursForm", $context) ? $context["coursForm"] : (function () { throw new Twig_Error_Runtime('Variable "coursForm" does not exist.', 17, $this->source); })()), "horaireDebut", array()), 'row', array("label" => "Horaire de début"));
        echo "
  </div>
  <div class=\"col-md-3\">
";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coursForm"]) || array_key_exists("coursForm", $context) ? $context["coursForm"] : (function () { throw new Twig_Error_Runtime('Variable "coursForm" does not exist.', 20, $this->source); })()), "horaireFin", array()), 'row', array("label" => "Horaire de fin"));
        echo "
  </div>
</div>

<div class=\"\">
  <label for=\"form\" style=\"font-size:2em;\">Niveau</label>
  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coursForm"]) || array_key_exists("coursForm", $context) ? $context["coursForm"] : (function () { throw new Twig_Error_Runtime('Variable "coursForm" does not exist.', 26, $this->source); })()), "niveau", array()), 'widget');
        echo "

</div>


<button type=\"submit\" class=\"btn btn-success mt-4\">Ajouter le nouveau cours</button>

";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["coursForm"]) || array_key_exists("coursForm", $context) ? $context["coursForm"] : (function () { throw new Twig_Error_Runtime('Variable "coursForm" does not exist.', 33, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/coursSupplementaireCreate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  92 => 26,  83 => 20,  77 => 17,  71 => 14,  66 => 12,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h1 class=\"mt-4 mb-4\" style=\"text-align:center;\">
  Ajout d'un nouveau cours supplémentaire
</h1>

<div id=\"principale\" class=\"alert\">
{{form_start(coursForm)}}

{{ form_row(coursForm.title, {\"label\": \"Nom\",\"attr\": {\"placeholder\" : \"Nom du cours\"} })}}

{{ form_row(coursForm.coursDate, {\"label\": \"Date du cours\"})}}
<div class=\"form-row\">
  <div class=\"col-md-3\">
{{ form_row(coursForm.horaireDebut, {\"label\": \"Horaire de début\"})}}
  </div>
  <div class=\"col-md-3\">
{{ form_row(coursForm.horaireFin, {\"label\": \"Horaire de fin\"})}}
  </div>
</div>

<div class=\"\">
  <label for=\"form\" style=\"font-size:2em;\">Niveau</label>
  {{ form_widget(coursForm.niveau) }}

</div>


<button type=\"submit\" class=\"btn btn-success mt-4\">Ajouter le nouveau cours</button>

{{form_end(coursForm)}}
</div>
{% endblock %}
", "admin/coursSupplementaireCreate.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\admin\\coursSupplementaireCreate.html.twig");
    }
}
