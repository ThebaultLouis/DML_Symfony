<?php

/* public/danseShow.html.twig */
class __TwigTemplate_7602374bdd9f0ac86a1cd24551c0d5ef679ad5a7f1aa47105c1f04d7c980f85d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"show\" class=\"card mb-3 mt-4\">
  <div class=\"card-header\" style=\"font-size:2em;\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["da"] ?? null), "title", array()), "html", null, true);
        echo "
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["da"] ?? null), "brochure", array())) {
            // line 7
            echo "    <a class=\"ml-4 mr-4\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, ($context["da"] ?? null), "brochure", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"far fa-file-pdf\"></i></a>
    ";
        }
        // line 9
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["da"] ?? null), "youtubeLink", array())) {
            // line 10
            echo "     <a class=\"ml-4 mr-4\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["da"] ?? null), "youtubeLink", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["da"] ?? null), "danceDate", array()), "d/m/Y"), "html", null, true);
        echo "
      </li>
      ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["da"] ?? null), "danseRevisees", array()));
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
        return array (  88 => 23,  77 => 20,  74 => 19,  70 => 18,  65 => 16,  59 => 12,  53 => 10,  50 => 9,  44 => 7,  42 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/danseShow.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\public\\danseShow.html.twig");
    }
}
