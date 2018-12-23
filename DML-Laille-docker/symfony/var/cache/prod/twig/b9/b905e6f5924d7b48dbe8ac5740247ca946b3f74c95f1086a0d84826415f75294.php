<?php

/* admin/danceCreate.html.twig */
class __TwigTemplate_16e43376745cc8ebd47fcc8f6448fff2b0d05893fa75dc078fc150c1d0b7514d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1 class=\"mt-4 mb-4\" style=\"text-align:center;\">
  Ajout d'un nouveau cours
</h1>

<div class=\"\">
  ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["da"] ?? null), 'form_start');
        echo "

  <div class=\"form-row\">
    <div class=\"col-md-3 mr-4\">
    <label for=\"form\" style=\"font-size:2em;\">Niveau</label>
      ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["da"] ?? null), "niveau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"\">
      <label for=\"form\" style=\"font-size:2em;\">Date</label>
      ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["da"] ?? null), "danceDate", array()), 'widget');
        echo "
    </div>
  </div>

  <h4 class=\"mt-4\">Danse apprise</h4>

  <div id=\"principale\" class=\"alert\">
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["da"] ?? null), "title", array()), 'row', array("label" => "Titre", "attr" => array("placeholder" => "Ne rien mettre si aucune danse n'a été apprise")));
        echo "
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["da"] ?? null), "youtubeLink", array()), 'row', array("label" => "lien Youtube", "attr" => array("placeholder" => "Lien Youtube de la danse apprise")));
        echo "
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["da"] ?? null), "imageFile", array()), 'row');
        echo "
  </div>

</div>

<div class=\"\">
  <h4 class=\"\">Danses révisées</h4>
  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["da"] ?? null), "danseRevisees", array()));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["da"] ?? null), 'form_end');
        echo "

";
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
        return array (  112 => 44,  105 => 39,  96 => 36,  92 => 35,  89 => 34,  85 => 33,  75 => 26,  71 => 25,  67 => 24,  57 => 17,  50 => 13,  42 => 8,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/danceCreate.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\admin\\danceCreate.html.twig");
    }
}
