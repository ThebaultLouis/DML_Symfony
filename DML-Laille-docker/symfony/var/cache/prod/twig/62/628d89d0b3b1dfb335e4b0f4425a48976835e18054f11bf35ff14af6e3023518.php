<?php

/* admin/niveauCreate.html.twig */
class __TwigTemplate_bc4f31661dd8534fe7022001aee504102c2d9165b23e231a8f670468afc275e2 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<h1 class=\"mt-4 mb-4\" style=\"text-align:center;\">
  Ajout d'un nouveau niveau
</h1>
  <div id=\"principale\" class=\"alert\">
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["niveauForm"] ?? null), 'form_start');
        echo "

";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["niveauForm"] ?? null), "title", array()), 'row', array("label" => "Nom", "attr" => array("placeholder" => "Nom du niveau")));
        echo "

<div class=\"form-row\">
  <div class=\"col-md-3\">
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["niveauForm"] ?? null), "horaire", array()), 'row', array("label" => "Horaire de début"));
        echo "
  </div>
  <div class=\"col-md-3\">
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["niveauForm"] ?? null), "horaireFin", array()), 'row', array("label" => "Horaire de fin"));
        echo "
  </div>
</div>

";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["niveauForm"] ?? null), "description", array()), 'row', array("label" => "Description", "attr" => array("placeholder" => "Description du niveau")));
        echo "

";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["niveauForm"] ?? null), 'form_end');
        echo "
</div>
";
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
        return array (  72 => 24,  67 => 22,  60 => 18,  54 => 15,  47 => 11,  42 => 9,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/niveauCreate.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\admin\\niveauCreate.html.twig");
    }
}
