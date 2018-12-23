<?php

/* public/danse.html.twig */
class __TwigTemplate_76942472ab0f1485c5eee5174a2f559648e856372445abbe668cb64e5bb5ab3a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/danse.html.twig", 1);
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
<h1 style=\"text-align:center;\">Danses</h1>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dansesParNiveau"] ?? null));
        foreach ($context['_seq'] as $context["niveau"] => $context["danses"]) {
            // line 8
            echo "<div class=\"mt-3\" id=\"dansea\">

<button id=\"btn\" class=\"btn btn-primary btn-lg btn-block\"
type=\"button\" data-toggle=\"collapse\" data-target=\"#";
            // line 11
            echo twig_escape_filter($this->env, $context["niveau"], "html", null, true);
            echo "\"
aria-expanded=\"false\" aria-controls=\"";
            // line 12
            echo twig_escape_filter($this->env, $context["niveau"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["niveau"], "html", null, true);
            echo "</button>

<div class=\"collapse multi-collapse\" id=\"";
            // line 14
            echo twig_escape_filter($this->env, $context["niveau"], "html", null, true);
            echo "\">

<table id=\"danse\" class=\"table mt-4\" style=\"text-align:center;font-size:1.5em;\">
  <thead class=\"\">
    <tr>
      <th scope=\"col\" class=\"\">Nom</th>
      <th scope=\"col\" class=\"\">Date</th>
      <th scope=\"col\" class=\"\">Youtube</th>
      <th scope=\"col\" class=\"\">PDF</th>
    </tr>
  </thead>
  <tbody>

";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["danses"]);
            foreach ($context['_seq'] as $context["_key"] => $context["danse"]) {
                // line 28
                echo "
    <tr>
      <th scope=\"row\" >
        <span class=\"grand\" style=\"font-size:0.6em\">
          ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "title", array()), "html", null, true);
                echo " <br>

          ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["danse"], "danseRevisees", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["dr"]) {
                    // line 35
                    echo "          |<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dr"], "youtubeLink", array()), "html", null, true);
                    echo "\" class=\"nav-link\" style=\"display:inline;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dr"], "title", array()), "html", null, true);
                    echo "</a>|
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "        </span>
        <span class=\"petit\">
          <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("danseShow", array("id" => twig_get_attribute($this->env, $this->source, $context["danse"], "id", array()))), "html", null, true);
                echo "\" class=\"\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "title", array()), "html", null, true);
                echo "</a>
        </span>
      </th>

      <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "danceDate", array()), "d/m/Y"), "html", null, true);
                echo "</td>
      <td> <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "youtubeLink", array()), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a></td>
      <td>
        ";
                // line 46
                if (twig_get_attribute($this->env, $this->source, $context["danse"], "brochure", array())) {
                    // line 47
                    echo "        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["danse"], "brochure", array()))), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"far fa-file-pdf\"></i></a>
        ";
                }
                // line 49
                echo "      </td>
    </tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['danse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "</tbody>
</table>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['niveau'], $context['danses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "

";
    }

    public function getTemplateName()
    {
        return "public/danse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 57,  145 => 53,  136 => 49,  130 => 47,  128 => 46,  123 => 44,  119 => 43,  110 => 39,  106 => 37,  95 => 35,  91 => 34,  86 => 32,  80 => 28,  76 => 27,  60 => 14,  53 => 12,  49 => 11,  44 => 8,  40 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/danse.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\public\\danse.html.twig");
    }
}
