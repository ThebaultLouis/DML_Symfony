<?php

/* admin/dashboard.html.twig */
class __TwigTemplate_e417e73ff32c2b93b07b5db76d1de540ec1bf31d385915b5ff8cca266394358b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["dansesParNiveau"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["dml"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["manifestations"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["cours"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["niveaux"] ?? null));
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
        return array (  522 => 260,  513 => 257,  509 => 256,  505 => 255,  501 => 254,  497 => 253,  493 => 252,  490 => 251,  486 => 250,  459 => 226,  443 => 212,  432 => 207,  428 => 206,  425 => 205,  416 => 203,  412 => 202,  407 => 200,  403 => 199,  399 => 198,  395 => 197,  391 => 195,  387 => 194,  360 => 170,  345 => 157,  337 => 154,  327 => 150,  323 => 149,  319 => 148,  315 => 147,  311 => 146,  307 => 145,  303 => 144,  299 => 142,  295 => 141,  278 => 126,  274 => 125,  265 => 118,  256 => 115,  252 => 114,  249 => 113,  243 => 111,  241 => 110,  236 => 108,  232 => 107,  228 => 106,  224 => 105,  221 => 104,  217 => 103,  191 => 80,  179 => 70,  169 => 65,  160 => 62,  156 => 61,  153 => 60,  147 => 58,  145 => 57,  140 => 55,  136 => 54,  127 => 50,  123 => 48,  112 => 46,  108 => 45,  103 => 43,  98 => 40,  94 => 39,  77 => 25,  71 => 22,  64 => 20,  60 => 19,  55 => 16,  51 => 15,  45 => 12,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/dashboard.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\admin\\dashboard.html.twig");
    }
}
