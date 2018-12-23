<?php

/* public/adherent.html.twig */
class __TwigTemplate_a54926f4a33b1d0329d54f2840c08f4d443e33a2e49a01c3da4c71f51ed43b8b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/adherent.html.twig", 1);
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
<h1 class=\"mt-4\" style=\"text-align:center;\">Cours supplémentaires</h1>

<table  id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\" class=\"\">Nom</th>
      <th scope=\"col\" class=\"\">Date</th>
      <th scope=\"col\" class=\"\">Début</th>
      <th scope=\"col\" class=\"\">Fin</th>
      <th scope=\"col\" class=\"\">Niveau</th>
    </tr>
  </thead>
  <tbody>

";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cours"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 20
            echo "
    <tr>
      <th scope=\"row\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "coursDate", array()), "d/m/Y"), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "horaireDebut", array()), "H:i"), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "horaireFin", array()), "H:i"), "html", null, true);
            echo "</td>
      <td><p><span style=\"font-size:0.8em;\">
      ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["c"], "niveau", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
                // line 28
                echo "      | ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "title", array()), "html", null, true);
                echo " |
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['niveau'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </span></p></td>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "public/adherent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  90 => 30,  81 => 28,  77 => 27,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  56 => 20,  52 => 19,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/adherent.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\public\\adherent.html.twig");
    }
}
