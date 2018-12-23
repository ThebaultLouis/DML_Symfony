<?php

/* admin/manifestationCreate.html.twig */
class __TwigTemplate_0ea51b82e3db6ee855abdce6e4472d9093c284a615fa7360c68d8d75744c1836 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<h1 class=\"mt-4 mb-4\" style=\"text-align:center;\">
  Ajout d'une nouvelle manifestation
</h1>
  <div id=\"principale\" class=\"alert\">
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["maniForm"] ?? null), 'form_start');
        echo "

";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["maniForm"] ?? null), "title", array()), 'row', array("label" => "Nom", "attr" => array("placeholder" => "Nom de la manifestation")));
        echo "

";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["maniForm"] ?? null), "eventDate", array()), 'row', array("label" => "Date de la manifestation"));
        echo "

<div class=\"form-row\">
  <div class=\"col-md-3\">
  ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["maniForm"] ?? null), "ville", array()), 'row', array("label" => "Ville", "attr" => array("placeholder" => "Ville", "class" => "control-form")));
        echo "
</div>
  <div class=\"col-md-3\">
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["maniForm"] ?? null), "cp", array()), 'row', array("label" => "CP", "attr" => array("placeholder" => "Code postal", "class" => "control-form")));
        echo "
  </div>
  <div class=\"col-md-5\">
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["maniForm"] ?? null), "club", array()), 'row', array("label" => "Club", "attr" => array("placeholder" => "Mettre 'DML' si organisé par le club", "class" => "control-form")));
        echo "
  </div>
</div>
  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["maniForm"] ?? null), "imageFile", array()), 'row');
        echo "
  ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["maniForm"] ?? null), "description", array()), 'row');
        echo "
    <button type=\"submit\" class=\"btn btn-success\">Ajoutes les nouvelles danses</button>
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["maniForm"] ?? null), 'form_end');
        echo "
  </div>
";
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
        return array (  86 => 29,  81 => 27,  77 => 26,  71 => 23,  65 => 20,  59 => 17,  52 => 13,  47 => 11,  42 => 9,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/manifestationCreate.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\admin\\manifestationCreate.html.twig");
    }
}
