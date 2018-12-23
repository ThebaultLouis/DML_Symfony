<?php

/* public/index.html.twig */
class __TwigTemplate_dfc2635dae028387791eefee2af3b170eaa5a220d61019fb999f363ef682c2ef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/index.html.twig", 1);
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

<h1 class=\"mt-4 mb-5 titre\" style=\"text-align:center;\">Bienvenue sur le site DML Laille 35</h1>

<table id=\"danse\" class=\"table mt-4\" style=\"text-align:center;font-size:1.5em;\">
  <caption>Le Vendredi à Salle des boulais, Route de Guichen, 39 rue de la halte, 35890 Laillé</caption>
  <thead class=\"\">
    <tr>
      <th scope=\"col\" class=\"\">Niveau</th>
      <th scope=\"col\" class=\"\">Horaire</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["niveaux"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
            // line 18
            echo "    <tr>
      <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "title", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "horaire", array()), "H:i"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "horaireFin", array()), "H:i"), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['niveau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </tbody>
</table>


<div class=\"card mt-3 mb-2\">
  <h2 class=\"ml-4\" style=\"line-height:40px;\">Le club DML Laillé</h2>
</div>
<div class=\"card-group mb-5\">
  <div class=\"card\">
    <!--<img class=\"card-img-top\" src=\"http://placehold.it/180x180\" alt=\"Card image cap\">-->
    <div class=\"card-body\">
      <h5 class=\"card-title\">Country</h5>
      <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa optio ex aliquid, ad nulla molestiae maiores quod modi facere nostrum quia eveniet harum, veritatis totam, nobis consectetur, inventore labore reprehenderit?</p>
    </div>
  </div>
  <div class=\"card\">
    <!--<img class=\"card-img-top\" src=\"http://placehold.it/180x180\" alt=\"Card image cap\">-->
    <div class=\"card-body\">
      <h5 class=\"card-title\">Line</h5>
      <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde quo, repellat, nam nobis neque amet perferendis cupiditate minus soluta cum explicabo nihil voluptatum a nesciunt reprehenderit ducimus aliquam officia laborum!</p>
    </div>
  </div>
  <div class=\"card\">
    <!--<img class=\"card-img-top\" src=\"http://placehold.it/180x180\" alt=\"Card image cap\">-->
    <div class=\"card-body\">
      <h5 class=\"card-title\">Manifestation</h5>
      <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi nostrum deserunt asperiores facere id, pariatur tempora maxime sed eveniet voluptates quisquam quod voluptatum, suscipit fuga ipsa ipsam, cupiditate repellat earum.</p>
    </div>
  </div>
</div>


<br>

<div class=\"card mb-2\">
  <h2 class=\"ml-4\" style=\"line-height:40px;\">Plusieurs niveaux</h2>
</div>
<div class=\"card-group mb-4\">
";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["niveaux"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
            // line 62
            echo "  <div class=\"card\">
    <!--<img class=\"card-img-top mt-4\" style=\"max-width:200px;margin:auto;\" src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . "circle-regular.svg")), "html", null, true);
            echo "\" alt=\"Card image cap\">-->
    <div class=\"card-body\">
      <h5 class=\"card-title\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "title", array()), "html", null, true);
            echo "</h5>
      <h5 class=\"card-title\">";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "horaire", array()), "H:i"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "horaireFin", array()), "H:i"), "html", null, true);
            echo "</h5>
      <p class=\"card-text\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "description", array()), "html", null, true);
            echo "</p>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['niveau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
<!--
</div>
  <div class=\"card\">
    <img class=\"card-img-top\" src=\"http://placehold.it/180x180\" alt=\"Card image cap\">
    <div class=\"card-body\">
      <h5 class=\"card-title\">Intermédiaire</h5>
      <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde quo, repellat, nam nobis neque amet perferendis cupiditate minus soluta cum explicabo nihil voluptatum a nesciunt reprehenderit ducimus aliquam officia laborum!</p>
    </div>
  </div>
-->

";
    }

    public function getTemplateName()
    {
        return "public/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 71,  134 => 67,  128 => 66,  124 => 65,  119 => 63,  116 => 62,  112 => 61,  72 => 23,  61 => 20,  57 => 19,  54 => 18,  50 => 17,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/index.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\public\\index.html.twig");
    }
}
