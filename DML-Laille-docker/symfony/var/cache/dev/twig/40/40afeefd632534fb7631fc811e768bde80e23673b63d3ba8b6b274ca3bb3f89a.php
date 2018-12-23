<?php

/* public/index.html.twig */
class __TwigTemplate_b20b1963e00a4237f02c6d38e725a2989e8476d5724fd4426dc801607ec1ea2a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/index.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new Twig_Error_Runtime('Variable "niveaux" does not exist.', 17, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new Twig_Error_Runtime('Variable "niveaux" does not exist.', 61, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  162 => 71,  152 => 67,  146 => 66,  142 => 65,  137 => 63,  134 => 62,  130 => 61,  90 => 23,  79 => 20,  75 => 19,  72 => 18,  68 => 17,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}


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
  {% for niveau in niveaux %}
    <tr>
      <th scope=\"row\">{{niveau.title}}</th>
      <td>{{niveau.horaire | date('H:i')}} à {{niveau.horaireFin | date('H:i')}}</td>
    </tr>
  {% endfor %}
  </tbody>
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
{% for niveau in niveaux %}
  <div class=\"card\">
    <!--<img class=\"card-img-top mt-4\" style=\"max-width:200px;margin:auto;\" src=\"{{ asset('uploads/images/' ~ \"circle-regular.svg\") }}\" alt=\"Card image cap\">-->
    <div class=\"card-body\">
      <h5 class=\"card-title\">{{niveau.title}}</h5>
      <h5 class=\"card-title\">{{niveau.horaire | date('H:i')}} à {{niveau.horaireFin | date('H:i')}}</h5>
      <p class=\"card-text\">{{niveau.description}}</p>
    </div>
  </div>
{% endfor %}

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

{% endblock %}
", "public/index.html.twig", "/home/thebault/Documents/symfony/dmlLaille/templates/public/index.html.twig");
    }
}
