<?php

/* admin/coursSupplementaireCreate.html.twig */
class __TwigTemplate_fad97502dd8ea005e799ec30518489cb4f5b7f20382434e2fc66f8cdd6fa2e3f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<h1 class=\"mt-4 mb-4\" style=\"text-align:center;\">
  Ajout d'un nouveau cours supplémentaire
</h1>

<div id=\"principale\" class=\"alert\">
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["coursForm"] ?? null), 'form_start');
        echo "

";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["coursForm"] ?? null), "title", array()), 'row', array("label" => "Nom", "attr" => array("placeholder" => "Nom du cours")));
        echo "

";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["coursForm"] ?? null), "coursDate", array()), 'row', array("label" => "Date du cours"));
        echo "
<div class=\"form-row\">
  <div class=\"col-md-3\">
";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["coursForm"] ?? null), "horaireDebut", array()), 'row', array("label" => "Horaire de début"));
        echo "
  </div>
  <div class=\"col-md-3\">
";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["coursForm"] ?? null), "horaireFin", array()), 'row', array("label" => "Horaire de fin"));
        echo "
  </div>
</div>

<div class=\"\">
  <label for=\"form\" style=\"font-size:2em;\">Niveau</label>
  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["coursForm"] ?? null), "niveau", array()), 'widget');
        echo "

</div>


<button type=\"submit\" class=\"btn btn-success mt-4\">Ajouter le nouveau cours</button>

";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["coursForm"] ?? null), 'form_end');
        echo "
</div>
";
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
        return array (  84 => 33,  74 => 26,  65 => 20,  59 => 17,  53 => 14,  48 => 12,  43 => 10,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/coursSupplementaireCreate.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\admin\\coursSupplementaireCreate.html.twig");
    }
}
