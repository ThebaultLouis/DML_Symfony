<?php

/* admin/niveauCreate.html.twig */
class __TwigTemplate_7b26ee3437194a01f52a3b2cb2409d8038bf0ece4076d664a89cd100a2bcd1d6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/niveauCreate.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/niveauCreate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/niveauCreate.html.twig"));

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
  Ajout d'un nouveau niveau
</h1>
  <div id=\"principale\" class=\"alert\">
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["niveauForm"]) || array_key_exists("niveauForm", $context) ? $context["niveauForm"] : (function () { throw new Twig_Error_Runtime('Variable "niveauForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "

";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["niveauForm"]) || array_key_exists("niveauForm", $context) ? $context["niveauForm"] : (function () { throw new Twig_Error_Runtime('Variable "niveauForm" does not exist.', 11, $this->source); })()), "title", array()), 'row', array("label" => "Nom", "attr" => array("placeholder" => "Nom du niveau")));
        echo "

<div class=\"form-row\">
  <div class=\"col-md-3\">
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["niveauForm"]) || array_key_exists("niveauForm", $context) ? $context["niveauForm"] : (function () { throw new Twig_Error_Runtime('Variable "niveauForm" does not exist.', 15, $this->source); })()), "horaire", array()), 'row', array("label" => "Horaire de début"));
        echo "
  </div>
  <div class=\"col-md-3\">
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["niveauForm"]) || array_key_exists("niveauForm", $context) ? $context["niveauForm"] : (function () { throw new Twig_Error_Runtime('Variable "niveauForm" does not exist.', 18, $this->source); })()), "horaireFin", array()), 'row', array("label" => "Horaire de fin"));
        echo "
  </div>
</div>

";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["niveauForm"]) || array_key_exists("niveauForm", $context) ? $context["niveauForm"] : (function () { throw new Twig_Error_Runtime('Variable "niveauForm" does not exist.', 22, $this->source); })()), "description", array()), 'row', array("label" => "Description", "attr" => array("placeholder" => "Description du niveau")));
        echo "

";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["niveauForm"]) || array_key_exists("niveauForm", $context) ? $context["niveauForm"] : (function () { throw new Twig_Error_Runtime('Variable "niveauForm" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/niveauCreate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  85 => 22,  78 => 18,  72 => 15,  65 => 11,  60 => 9,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h1 class=\"mt-4 mb-4\" style=\"text-align:center;\">
  Ajout d'un nouveau niveau
</h1>
  <div id=\"principale\" class=\"alert\">
{{form_start(niveauForm)}}

{{ form_row(niveauForm.title, {\"label\": \"Nom\",\"attr\": {\"placeholder\" : \"Nom du niveau\"} })}}

<div class=\"form-row\">
  <div class=\"col-md-3\">
    {{ form_row(niveauForm.horaire, {\"label\": \"Horaire de début\"})}}
  </div>
  <div class=\"col-md-3\">
    {{ form_row(niveauForm.horaireFin, {\"label\": \"Horaire de fin\"})}}
  </div>
</div>

{{ form_row(niveauForm.description, {\"label\": \"Description\",\"attr\": {\"placeholder\" : \"Description du niveau\"} })}}

{{form_end(niveauForm)}}
</div>
{% endblock %}
", "admin/niveauCreate.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\admin\\niveauCreate.html.twig");
    }
}
