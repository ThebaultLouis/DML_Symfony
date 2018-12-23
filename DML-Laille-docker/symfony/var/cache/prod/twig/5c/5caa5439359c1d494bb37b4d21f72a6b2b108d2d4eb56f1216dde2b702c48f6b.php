<?php

/* public/manifestation.html.twig */
class __TwigTemplate_cc1958d292b74409134fbf21074100d42099247c069b4b7806a8431c3ec1a347 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/manifestation.html.twig", 1);
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
<h1 style=\"text-align:center;\">Manifestations</h1>

<p class=\"mt-4\">
  <button id=\"btn\" class=\"btn btn-primary btn-lg btn-block\" type=\"button\" data-toggle=\"collapse\" data-target=\"#multiCollapseExample1\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample1\">Manifestation du club</button>
</p>


<div class=\"collapse multi-collapse\" id=\"multiCollapseExample1\">
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dml"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["danse"]) {
            // line 14
            echo "  <div class=\"card mb-3\">
    <div class=\"card-header\" style=\"font-size:2em;\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "title", array()), "html", null, true);
            echo "
      ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["danse"], "brochure", array())) {
                // line 17
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["danse"], "brochure", array()))), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"far fa-file-pdf\"></i></a>
      ";
            }
            // line 19
            echo "    </div>
    <div class=\"card-body\">
      <p class=\"card-text\">À ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "ville", array()), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "eventDate", array()), "d/m/Y"), "html", null, true);
            echo "</p>
      <p class=\"card-text\">";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["danse"], "description", array());
            echo "</p>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['danse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>

<button id=\"btn\" class=\"btn btn-primary btn-lg btn-block\" type=\"button\" data-toggle=\"collapse\" data-target=\"#multiCollapseExample2\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample2\">Manifestation ailleurs</button>

<div class=\"collapse multi-collapse\" id=\"multiCollapseExample2\">
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manifestations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manifMoi"]) {
            // line 32
            if ($context["manifMoi"]) {
                // line 33
                echo "<table id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\" class=\"\">Nom</th>
      <th scope=\"col\" class=\"\">Date</th>
      <th scope=\"col\" class=\"\">Ville</th>
      <th scope=\"col\" class=\"\">CP</th>
      <th scope=\"col\" class=\"\">Club</th>
    </tr>
  </thead>
  <tbody>

";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["manifMoi"]);
                foreach ($context['_seq'] as $context["_key"] => $context["mani"]) {
                    // line 46
                    echo "
    <tr>
      <th scope=\"row\">";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "title", array()), "html", null, true);
                    echo "</th>
      <td>";
                    // line 49
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "event_date", array()), "d/m/Y"), "html", null, true);
                    echo "</td>
      <td>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "ville", array()), "html", null, true);
                    echo "</td>
      <td>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "cp", array()), "html", null, true);
                    echo "</td>
      <td>";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "club", array()), "html", null, true);
                    echo "</td>
    </tr>

";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mani'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 57
            echo "</tbody>
</table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manifMoi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "  </div>



";
    }

    public function getTemplateName()
    {
        return "public/manifestation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 60,  147 => 57,  136 => 52,  132 => 51,  128 => 50,  124 => 49,  120 => 48,  116 => 46,  112 => 45,  98 => 33,  96 => 32,  92 => 31,  85 => 26,  75 => 22,  69 => 21,  65 => 19,  59 => 17,  57 => 16,  53 => 15,  50 => 14,  46 => 13,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/manifestation.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\public\\manifestation.html.twig");
    }
}
