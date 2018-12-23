<?php

/* admin/dashboard.html.twig */
class __TwigTemplate_1ad8eac3ab5561f2cdccb2bed7260b40da36271b63c79c00df5ea1865bf810f8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

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
<h1 class=\"mt-4 mb-5\" style=\"text-align:center;\">Espace administration</h1>
<!-- ****************************************************************** -->
<!-- ****************************************************************** -->
<!-- ****************************************************************** -->
<hr>
<!-- <div class=\"border-info mt-4 p-1\" style=\"border-style:solid;\">-->

<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("danceCreate", array("n" => "2"));
        echo "\" id=\"btn\" class=\"btn btn-info btn-lg btn-block mt-4\">
  Ajouter un Cours</a>

";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dansesParNiveau"]) || array_key_exists("dansesParNiveau", $context) ? $context["dansesParNiveau"] : (function () { throw new Twig_Error_Runtime('Variable "dansesParNiveau" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["niveau"] => $context["danses"]) {
            // line 16
            echo "
<div id=\"dansea\" class=\"mt-3\">
<button id=\"btn\" class=\"btn btn-primary btn-lg btn-block\"
type=\"button\" data-toggle=\"collapse\" data-target=\"#";
            // line 19
            echo twig_escape_filter($this->env, $context["niveau"], "html", null, true);
            echo "\"
aria-expanded=\"false\" aria-controls=\"";
            // line 20
            echo twig_escape_filter($this->env, $context["niveau"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["niveau"], "html", null, true);
            echo "</button>

<div class=\"collapse multi-collapse\" id=\"";
            // line 22
            echo twig_escape_filter($this->env, $context["niveau"], "html", null, true);
            echo "\">

<table  id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;font-size:1.5em;\">
    <caption>";
            // line 25
            echo twig_escape_filter($this->env, $context["niveau"], "html", null, true);
            echo "</caption>

    <thead class=\"thead-dark\">
      <tr>
        <th scope=\"col\" class=\"\">Nom</th>
        <th scope=\"col\" class=\"\">Date</th>
        <!--<th scope=\"col\" class=\"\">Youtube</th>
        <th scope=\"col\" class=\"\">PDF</th>-->
        <th scope=\"col\" class=\"\">Modifier</th>
        <th scope=\"col\" class=\"\">Supprimer</th>
      </tr>
    </thead>

    <tbody>
      ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["danses"]);
            foreach ($context['_seq'] as $context["_key"] => $context["danse"]) {
                // line 40
                echo "          <tr>
            <th scope=\"row\" >
              <span class=\"grand\" style=\"font-size:0.6em\">
                ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "title", array()), "html", null, true);
                echo " <br>

                ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["danse"], "danseRevisees", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["dr"]) {
                    // line 46
                    echo "                |<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dr"], "youtubeLink", array()), "html", null, true);
                    echo "\" class=\"nav-link\" style=\"display:inline;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dr"], "title", array()), "html", null, true);
                    echo "</a>|
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "              </span>
              <span class=\"petit\">
                <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("danseShow", array("id" => twig_get_attribute($this->env, $this->source, $context["danse"], "id", array()))), "html", null, true);
                echo "\" class=\"\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "title", array()), "html", null, true);
                echo "</a>
              </span>
            </th>

            <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "danceDate", array()), "d/m/Y"), "html", null, true);
                echo "</td>
            <!--<td> <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "youtubeLink", array()), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a></td>
            <td>
            ";
                // line 57
                if (twig_get_attribute($this->env, $this->source, $context["danse"], "brochure", array())) {
                    // line 58
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["danse"], "brochure", array()))), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"far fa-file-pdf\"></i></a>
            ";
                }
                // line 60
                echo "          </td>-->
            <td> <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("danceModify", array("id" => twig_get_attribute($this->env, $this->source, $context["danse"], "id", array()))), "html", null, true);
                echo "\" ><i class=\"fas fa-arrow-alt-circle-right\"></i></a></td>
            <td> <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("danceDelete", array("id" => twig_get_attribute($this->env, $this->source, $context["danse"], "id", array()))), "html", null, true);
                echo "\" ><i class=\"far fa-trash-alt\"></i></a></td>
          </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['danse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "    </tbody>
</table>

</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['niveau'], $context['danses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "</div>
</div>

<!-- ****************************************************************** -->
<!-- ****************************************************************** -->
<!-- ****************************************************************** -->
<hr>

<h1 class=\"mt-4\" style=\"text-align:center;\">Manifestations</h1>

<a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manifestationCreate");
        echo "\" id=\"btn\" class=\"btn btn-info btn-lg btn-block mt-4\">
  Ajouter une manifestation</a>

<div class=\"mt-4 mb-4\">
  <button id=\"btn\" class=\"btn btn-primary btn-lg btn-block mt-4\" type=\"button\" data-toggle=\"collapse\" data-target=\"#multiCollapseExample1\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample1\">Manifestation du club</button>
</div>

<div class=\"collapse multi-collapse\" id=\"multiCollapseExample1\">

  <table  id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;\">
    <thead class=\"thead-dark\">
      <tr>
        <th scope=\"col\" class=\"\">Nom</th>
        <th scope=\"col\" class=\"\">Date</th>
        <th scope=\"col\" class=\"\">Ville</th>
        <th scope=\"col\" class=\"\">CP</th>
        <th scope=\"col\" class=\"\">PDF</th>
        <th scope=\"col\" class=\"\">Modifier</th>
        <th scope=\"col\" class=\"\">Supprimer</th>
      </tr>
    </thead>
    <tbody>

";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dml"]) || array_key_exists("dml", $context) ? $context["dml"] : (function () { throw new Twig_Error_Runtime('Variable "dml" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["danse"]) {
            // line 104
            echo "  <tr>
    <th scope=\"row\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "title", array()), "html", null, true);
            echo "</th>
    <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "eventDate", array()), "d/m/Y"), "html", null, true);
            echo "</td>
    <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "ville", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["danse"], "cp", array()), "html", null, true);
            echo "</td>
    <td>
      ";
            // line 110
            if (twig_get_attribute($this->env, $this->source, $context["danse"], "brochure", array())) {
                // line 111
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["danse"], "brochure", array()))), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"far fa-file-pdf\"></i></a>
      ";
            }
            // line 113
            echo "    </td>
    <td> <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manifestationModify", array("id" => twig_get_attribute($this->env, $this->source, $context["danse"], "id", array()))), "html", null, true);
            echo "\" ><i class=\"fas fa-arrow-alt-circle-right\"></i></a></td>
    <td> <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manifestationDelete", array("id" => twig_get_attribute($this->env, $this->source, $context["danse"], "id", array()))), "html", null, true);
            echo "\" ><i class=\"far fa-trash-alt\"></i></a></td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['danse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "</tbody>
</table>
</div>

<button id=\"btn\" class=\"btn btn-primary btn-lg btn-block\" type=\"button\" data-toggle=\"collapse\" data-target=\"#multiCollapseExample2\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample2\">Manifestation ailleurs</button>

<div class=\"collapse multi-collapse\" id=\"multiCollapseExample2\">
";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["manifestations"]) || array_key_exists("manifestations", $context) ? $context["manifestations"] : (function () { throw new Twig_Error_Runtime('Variable "manifestations" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["manifMoi"]) {
            // line 126
            echo "
<table  id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\" class=\"\">Nom</th>
      <th scope=\"col\" class=\"\">Date</th>
      <th scope=\"col\" class=\"\">Ville</th>
      <th scope=\"col\" class=\"\">CP</th>
      <th scope=\"col\" class=\"\">Club</th>
      <th scope=\"col\" class=\"\">Modifier</th>
      <th scope=\"col\" class=\"\">Supprimer</th>
    </tr>
  </thead>
  <tbody>

";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["manifMoi"]);
            foreach ($context['_seq'] as $context["_key"] => $context["mani"]) {
                // line 142
                echo "
    <tr>
      <th scope=\"row\">";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "title", array()), "html", null, true);
                echo "</th>
      <td>";
                // line 145
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "event_date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
      <td>";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "ville", array()), "html", null, true);
                echo "</td>
      <td>";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "cp", array()), "html", null, true);
                echo "</td>
      <td>";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mani"], "club", array()), "html", null, true);
                echo "</td>
      <td> <a href=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manifestationModify", array("id" => twig_get_attribute($this->env, $this->source, $context["mani"], "id", array()))), "html", null, true);
                echo "\" ><i class=\"fas fa-arrow-alt-circle-right\"></i></a></td>
      <td> <a href=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manifestationDelete", array("id" => twig_get_attribute($this->env, $this->source, $context["mani"], "id", array()))), "html", null, true);
                echo "\" ><i class=\"far fa-trash-alt\"></i></a></td>
    </tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mani'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</tbody>
</table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manifMoi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "</div>
</div>



<!-- ****************************************************************** -->
<!-- ****************************************************************** -->
<!-- ****************************************************************** -->

<hr>

<h1 class=\"mt-4\" style=\"text-align:center;\">Cours supplémentaires</h1>

<a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursSuppCreate");
        echo "\" id=\"btn\" class=\"btn btn-info btn-lg btn-block mt-4\">
  Ajouter un cours un supplémentaire</a>

<div class=\"mt-4 mb-4\">
  <button id=\"btn\" class=\"btn btn-primary btn-lg btn-block mt-4\"
  type=\"button\" data-toggle=\"collapse\" data-target=\"#cours\"
  aria-expanded=\"false\" aria-controls=\"cours\">Cours supplémentaire</button>
</div>

<div class=\"collapse multi-collapse\" id=\"cours\">
  <table  id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;\">
    <thead class=\"thead-dark\">
      <tr>
        <th scope=\"col\" class=\"\">Nom</th>
        <th scope=\"col\" class=\"\">Date</th>
        <th scope=\"col\" class=\"\">Début</th>
        <th scope=\"col\" class=\"\">Fin</th>
        <th scope=\"col\" class=\"\">Niveau</th>
        <th scope=\"col\" class=\"\">Modifier</th>
        <th scope=\"col\" class=\"\">Supprimer</th>
        </tr>
    </thead>
    <tbody>

  ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new Twig_Error_Runtime('Variable "cours" does not exist.', 194, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 195
            echo "
      <tr>
        <th scope=\"row\">";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", array()), "html", null, true);
            echo "</th>
        <td>";
            // line 198
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "coursDate", array()), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 199
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "horaireDebut", array()), "H:i"), "html", null, true);
            echo "</td>
        <td>";
            // line 200
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "horaireFin", array()), "H:i"), "html", null, true);
            echo "</td>
        <td><p><span style=\"font-size:0.8em;\">
        ";
            // line 202
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["c"], "niveau", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
                // line 203
                echo "        | ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "title", array()), "html", null, true);
                echo " |
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['niveau'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "      </span></p></td>
      <td> <a href=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursSuppModify", array("id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", array()))), "html", null, true);
            echo "\" ><i class=\"fas fa-arrow-alt-circle-right\"></i></a></td>
      <td> <a href=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursSuppDelete", array("id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", array()))), "html", null, true);
            echo "\" ><i class=\"far fa-trash-alt\"></i></a></td>

      </tr>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "  </tbody>
  </table>

</div>


<!-- ****************************************************************** -->
<!-- ****************************************************************** -->
<!-- ****************************************************************** -->

<hr>

<h1 class=\"mt-4\" style=\"text-align:center;\">Niveaux</h1>

<a href=\"";
        // line 226
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("niveauCreate");
        echo "\" id=\"btn\" class=\"btn btn-info btn-lg btn-block mt-4\">
  Ajouter un niveau</a>

<div class=\"mt-4 mb-4\">
  <button id=\"btn\" class=\"btn btn-primary btn-lg btn-block mt-4\"
  type=\"button\" data-toggle=\"collapse\" data-target=\"#niveaux\"
  aria-expanded=\"false\" aria-controls=\"niveaux\">Niveaux du club</button>
</div>

<div class=\"collapse multi-collapse\" id=\"niveaux\">

  <table  id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;\">
    <thead class=\"thead-dark\">
      <tr>
        <th scope=\"col\" class=\"\">Nom</th>
        <th scope=\"col\" class=\"\">Horaire début</th>
        <th scope=\"col\" class=\"\">Horaire Fin</th>
        <th scope=\"col\" class=\"\">Description</th>
        <th scope=\"col\" class=\"\">Modifier</th>
        <th scope=\"col\" class=\"\">Supprimer</th>
      </tr>
    </thead>
    <tbody>

";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new Twig_Error_Runtime('Variable "niveaux" does not exist.', 250, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
            // line 251
            echo "  <tr>
    <th scope=\"row\">";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "title", array()), "html", null, true);
            echo "</th>
    <td>";
            // line 253
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "horaire", array()), "H:i"), "html", null, true);
            echo "</td>
    <td>";
            // line 254
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "horaireFin", array()), "H:i"), "html", null, true);
            echo "</td>
    <td>";
            // line 255
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "description", array()), 0, 50), "html", null, true);
            echo "...</td>
    <td> <a href=\"";
            // line 256
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("niveauModify", array("id" => twig_get_attribute($this->env, $this->source, $context["niveau"], "id", array()))), "html", null, true);
            echo "\" ><i class=\"fas fa-arrow-alt-circle-right\"></i></a></td>
    <td> <a href=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("niveauDelete", array("id" => twig_get_attribute($this->env, $this->source, $context["niveau"], "id", array()))), "html", null, true);
            echo "\" ><i class=\"far fa-trash-alt\"></i></a></td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['niveau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "  </tbody>
</table>
</div>

<!-- ****************************************************************** -->
<!-- ****************************************************************** -->
<!-- ****************************************************************** -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 260,  531 => 257,  527 => 256,  523 => 255,  519 => 254,  515 => 253,  511 => 252,  508 => 251,  504 => 250,  477 => 226,  461 => 212,  450 => 207,  446 => 206,  443 => 205,  434 => 203,  430 => 202,  425 => 200,  421 => 199,  417 => 198,  413 => 197,  409 => 195,  405 => 194,  378 => 170,  363 => 157,  355 => 154,  345 => 150,  341 => 149,  337 => 148,  333 => 147,  329 => 146,  325 => 145,  321 => 144,  317 => 142,  313 => 141,  296 => 126,  292 => 125,  283 => 118,  274 => 115,  270 => 114,  267 => 113,  261 => 111,  259 => 110,  254 => 108,  250 => 107,  246 => 106,  242 => 105,  239 => 104,  235 => 103,  209 => 80,  197 => 70,  187 => 65,  178 => 62,  174 => 61,  171 => 60,  165 => 58,  163 => 57,  158 => 55,  154 => 54,  145 => 50,  141 => 48,  130 => 46,  126 => 45,  121 => 43,  116 => 40,  112 => 39,  95 => 25,  89 => 22,  82 => 20,  78 => 19,  73 => 16,  69 => 15,  63 => 12,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h1 class=\"mt-4 mb-5\" style=\"text-align:center;\">Espace administration</h1>
<!-- ****************************************************************** -->
<!-- ****************************************************************** -->
<!-- ****************************************************************** -->
<hr>
<!-- <div class=\"border-info mt-4 p-1\" style=\"border-style:solid;\">-->

<a href=\"{{path(\"danceCreate\", {\"n\": \"2\"})}}\" id=\"btn\" class=\"btn btn-info btn-lg btn-block mt-4\">
  Ajouter un Cours</a>

{% for niveau, danses in  dansesParNiveau %}

<div id=\"dansea\" class=\"mt-3\">
<button id=\"btn\" class=\"btn btn-primary btn-lg btn-block\"
type=\"button\" data-toggle=\"collapse\" data-target=\"#{{niveau}}\"
aria-expanded=\"false\" aria-controls=\"{{niveau}}\">{{niveau}}</button>

<div class=\"collapse multi-collapse\" id=\"{{niveau}}\">

<table  id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;font-size:1.5em;\">
    <caption>{{niveau}}</caption>

    <thead class=\"thead-dark\">
      <tr>
        <th scope=\"col\" class=\"\">Nom</th>
        <th scope=\"col\" class=\"\">Date</th>
        <!--<th scope=\"col\" class=\"\">Youtube</th>
        <th scope=\"col\" class=\"\">PDF</th>-->
        <th scope=\"col\" class=\"\">Modifier</th>
        <th scope=\"col\" class=\"\">Supprimer</th>
      </tr>
    </thead>

    <tbody>
      {% for danse in danses %}
          <tr>
            <th scope=\"row\" >
              <span class=\"grand\" style=\"font-size:0.6em\">
                {{danse.title}} <br>

                {% for dr in danse.danseRevisees %}
                |<a href=\"{{dr.youtubeLink}}\" class=\"nav-link\" style=\"display:inline;\">{{dr.title}}</a>|
                {% endfor %}
              </span>
              <span class=\"petit\">
                <a href=\"{{path(\"danseShow\", {\"id\" : danse.id})}}\" class=\"\">{{danse.title}}</a>
              </span>
            </th>

            <td>{{danse.danceDate | date(\"d/m/Y\")}}</td>
            <!--<td> <a href=\"{{danse.youtubeLink}}\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a></td>
            <td>
            {% if danse.brochure %}
            <a href=\"{{ asset('uploads/brochures/' ~ danse.brochure) }}\" target=\"_blank\"><i class=\"far fa-file-pdf\"></i></a>
            {% endif %}
          </td>-->
            <td> <a href=\"{{path(\"danceModify\", {\"id\" : danse.id})}}\" ><i class=\"fas fa-arrow-alt-circle-right\"></i></a></td>
            <td> <a href=\"{{path(\"danceDelete\", {\"id\" : danse.id})}}\" ><i class=\"far fa-trash-alt\"></i></a></td>
          </tr>
      {% endfor %}
    </tbody>
</table>

</div>
{% endfor %}
</div>
</div>

<!-- ****************************************************************** -->
<!-- ****************************************************************** -->
<!-- ****************************************************************** -->
<hr>

<h1 class=\"mt-4\" style=\"text-align:center;\">Manifestations</h1>

<a href=\"{{path(\"manifestationCreate\")}}\" id=\"btn\" class=\"btn btn-info btn-lg btn-block mt-4\">
  Ajouter une manifestation</a>

<div class=\"mt-4 mb-4\">
  <button id=\"btn\" class=\"btn btn-primary btn-lg btn-block mt-4\" type=\"button\" data-toggle=\"collapse\" data-target=\"#multiCollapseExample1\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample1\">Manifestation du club</button>
</div>

<div class=\"collapse multi-collapse\" id=\"multiCollapseExample1\">

  <table  id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;\">
    <thead class=\"thead-dark\">
      <tr>
        <th scope=\"col\" class=\"\">Nom</th>
        <th scope=\"col\" class=\"\">Date</th>
        <th scope=\"col\" class=\"\">Ville</th>
        <th scope=\"col\" class=\"\">CP</th>
        <th scope=\"col\" class=\"\">PDF</th>
        <th scope=\"col\" class=\"\">Modifier</th>
        <th scope=\"col\" class=\"\">Supprimer</th>
      </tr>
    </thead>
    <tbody>

{% for danse in dml %}
  <tr>
    <th scope=\"row\">{{ danse.title}}</th>
    <td>{{ danse.eventDate | date(\"d/m/Y\")}}</td>
    <td>{{ danse.ville}}</td>
    <td>{{ danse.cp}}</td>
    <td>
      {% if danse.brochure %}
      <a href=\"{{ asset('uploads/brochures/' ~ danse.brochure) }}\" target=\"_blank\"><i class=\"far fa-file-pdf\"></i></a>
      {% endif %}
    </td>
    <td> <a href=\"{{path(\"manifestationModify\", {\"id\" :  danse.id})}}\" ><i class=\"fas fa-arrow-alt-circle-right\"></i></a></td>
    <td> <a href=\"{{path(\"manifestationDelete\", {\"id\" :  danse.id})}}\" ><i class=\"far fa-trash-alt\"></i></a></td>
  </tr>
{% endfor %}
</tbody>
</table>
</div>

<button id=\"btn\" class=\"btn btn-primary btn-lg btn-block\" type=\"button\" data-toggle=\"collapse\" data-target=\"#multiCollapseExample2\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample2\">Manifestation ailleurs</button>

<div class=\"collapse multi-collapse\" id=\"multiCollapseExample2\">
{% for manifMoi in manifestations %}

<table  id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\" class=\"\">Nom</th>
      <th scope=\"col\" class=\"\">Date</th>
      <th scope=\"col\" class=\"\">Ville</th>
      <th scope=\"col\" class=\"\">CP</th>
      <th scope=\"col\" class=\"\">Club</th>
      <th scope=\"col\" class=\"\">Modifier</th>
      <th scope=\"col\" class=\"\">Supprimer</th>
    </tr>
  </thead>
  <tbody>

{% for mani in manifMoi %}

    <tr>
      <th scope=\"row\">{{mani.title}}</th>
      <td>{{mani.event_date | date(\"d/m/Y\")}}</td>
      <td>{{mani.ville}}</td>
      <td>{{mani.cp}}</td>
      <td>{{mani.club}}</td>
      <td> <a href=\"{{path(\"manifestationModify\", {\"id\" : mani.id})}}\" ><i class=\"fas fa-arrow-alt-circle-right\"></i></a></td>
      <td> <a href=\"{{path(\"manifestationDelete\", {\"id\" : mani.id})}}\" ><i class=\"far fa-trash-alt\"></i></a></td>
    </tr>

{% endfor %}
</tbody>
</table>
{% endfor %}
</div>
</div>



<!-- ****************************************************************** -->
<!-- ****************************************************************** -->
<!-- ****************************************************************** -->

<hr>

<h1 class=\"mt-4\" style=\"text-align:center;\">Cours supplémentaires</h1>

<a href=\"{{path(\"coursSuppCreate\")}}\" id=\"btn\" class=\"btn btn-info btn-lg btn-block mt-4\">
  Ajouter un cours un supplémentaire</a>

<div class=\"mt-4 mb-4\">
  <button id=\"btn\" class=\"btn btn-primary btn-lg btn-block mt-4\"
  type=\"button\" data-toggle=\"collapse\" data-target=\"#cours\"
  aria-expanded=\"false\" aria-controls=\"cours\">Cours supplémentaire</button>
</div>

<div class=\"collapse multi-collapse\" id=\"cours\">
  <table  id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;\">
    <thead class=\"thead-dark\">
      <tr>
        <th scope=\"col\" class=\"\">Nom</th>
        <th scope=\"col\" class=\"\">Date</th>
        <th scope=\"col\" class=\"\">Début</th>
        <th scope=\"col\" class=\"\">Fin</th>
        <th scope=\"col\" class=\"\">Niveau</th>
        <th scope=\"col\" class=\"\">Modifier</th>
        <th scope=\"col\" class=\"\">Supprimer</th>
        </tr>
    </thead>
    <tbody>

  {% for c in cours %}

      <tr>
        <th scope=\"row\">{{c.title}}</th>
        <td>{{c.coursDate | date(\"d/m/Y\")}}</td>
        <td>{{c.horaireDebut | date(\"H:i\")}}</td>
        <td>{{c.horaireFin | date(\"H:i\")}}</td>
        <td><p><span style=\"font-size:0.8em;\">
        {% for niveau in c.niveau %}
        | {{niveau.title}} |
        {% endfor %}
      </span></p></td>
      <td> <a href=\"{{path(\"coursSuppModify\", {\"id\" : c.id})}}\" ><i class=\"fas fa-arrow-alt-circle-right\"></i></a></td>
      <td> <a href=\"{{path(\"coursSuppDelete\", {\"id\" : c.id})}}\" ><i class=\"far fa-trash-alt\"></i></a></td>

      </tr>

  {% endfor %}
  </tbody>
  </table>

</div>


<!-- ****************************************************************** -->
<!-- ****************************************************************** -->
<!-- ****************************************************************** -->

<hr>

<h1 class=\"mt-4\" style=\"text-align:center;\">Niveaux</h1>

<a href=\"{{path(\"niveauCreate\")}}\" id=\"btn\" class=\"btn btn-info btn-lg btn-block mt-4\">
  Ajouter un niveau</a>

<div class=\"mt-4 mb-4\">
  <button id=\"btn\" class=\"btn btn-primary btn-lg btn-block mt-4\"
  type=\"button\" data-toggle=\"collapse\" data-target=\"#niveaux\"
  aria-expanded=\"false\" aria-controls=\"niveaux\">Niveaux du club</button>
</div>

<div class=\"collapse multi-collapse\" id=\"niveaux\">

  <table  id=\"danse\" class=\"table mt-4 border table-striped table-bordered\" style=\"text-align:center;\">
    <thead class=\"thead-dark\">
      <tr>
        <th scope=\"col\" class=\"\">Nom</th>
        <th scope=\"col\" class=\"\">Horaire début</th>
        <th scope=\"col\" class=\"\">Horaire Fin</th>
        <th scope=\"col\" class=\"\">Description</th>
        <th scope=\"col\" class=\"\">Modifier</th>
        <th scope=\"col\" class=\"\">Supprimer</th>
      </tr>
    </thead>
    <tbody>

{% for niveau in niveaux %}
  <tr>
    <th scope=\"row\">{{ niveau.title}}</th>
    <td>{{ niveau.horaire | date(\"H:i\")}}</td>
    <td>{{ niveau.horaireFin | date(\"H:i\")}}</td>
    <td>{{ niveau.description[:50]}}...</td>
    <td> <a href=\"{{path(\"niveauModify\", {\"id\" : niveau.id})}}\" ><i class=\"fas fa-arrow-alt-circle-right\"></i></a></td>
    <td> <a href=\"{{path(\"niveauDelete\", {\"id\" : niveau.id})}}\" ><i class=\"far fa-trash-alt\"></i></a></td>
  </tr>
{% endfor %}
  </tbody>
</table>
</div>

<!-- ****************************************************************** -->
<!-- ****************************************************************** -->
<!-- ****************************************************************** -->

{% endblock %}
", "admin/dashboard.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\admin\\dashboard.html.twig");
    }
}
