<?php

/* base.html.twig */
class __TwigTemplate_ae2ac9c100d32efc29ee8f6ffc00d7a98871c5cd6abda72469807a3c3f58a2eb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-125092805-1\"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-125092805-1');
    </script>

    <title>Country</title>
    <meta name=\"Author\" content=\"THEBAULT Louis\">
    <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . "danse_country.jpg")), "html", null, true);
        echo "\">
    <meta name=\"Description\" content=\"Le club DML laillé 35 est un club de Country et de Line.
     Avec ses 3 niveaux de cours (débutant, initié, confirmé)
     il organise de nombreuses manisfestations pour soutenir bénévolement différente association caritative
    \">

    <meta property=\"og:description\" content=\"Le club DML laillé 35 est un club de Country et de Line.
     Avec ses 3 niveaux de cours (débutant, initié, confirmé)
     il organise de nombreuses manisfestations pour soutenir bénévolement différente association caritative
    \">
    <meta property=\"og:title\" content=\"DML Laillé 35\" />


      <meta charset=\"UTF-8\">
      <title>";
        // line 30
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

      ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "
      <link href=\"https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/sandstone/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-CfCAYEgrdtRrpvjGKxoaRy5ge1ggMbxNSpEkY+XqdfdRTUkRrYZVB2z99E7BsEDZ\" crossorigin=\"anonymous\">
      <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
      <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">


    </head>
    <body>
      <nav id=\"nav\" class=\"navbar navbar-dark navbar-expand-lg sticky-top\" >
        <a class=\"navbar-brand\" href=\"/\">Dml Laille</a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("danse");
        echo "\" >Danse</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manifestation");
        echo "\">Manifestation</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent");
        echo "\">adherent</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Admin</a>
            </li>
            ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array())) {
            // line 63
            echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
            echo "\">Deconnexion</a>
            </li>
            ";
        }
        // line 67
        echo "          </ul>
          <div class=\"media\">
            <a  href=\"mailto:valeriedml35@gmail.com\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/envelope.svg"), "html", null, true);
        echo "\" class=\"ImgMedia\"></a>
            <a  href=\"#\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/facebook.svg"), "html", null, true);
        echo "\" class=\"ImgMedia\"></a>
            <a  href=\"#\"><img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/youtube.svg"), "html", null, true);
        echo "\" class=\"ImgMedia\"></a>
            <a  href=\"#\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/twitter.svg"), "html", null, true);
        echo "\" class=\"ImgMedia\"></a>
            <a  href=\"https://www.linkedin.com/in/louis-thebault-9340b9167/\"><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/linkedin.svg"), "html", null, true);
        echo "\" class=\"ImgMedia\"></a>
          </div>
        </div>
        </nav>
        <div class=\"container\">


          ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "        </div>
        ";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        echo "DML Laille";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 82,  182 => 80,  177 => 32,  171 => 30,  162 => 83,  160 => 82,  157 => 81,  155 => 80,  145 => 73,  141 => 72,  137 => 71,  133 => 70,  129 => 69,  125 => 67,  119 => 64,  116 => 63,  114 => 62,  109 => 60,  103 => 57,  97 => 54,  91 => 51,  73 => 36,  68 => 33,  66 => 32,  61 => 30,  44 => 16,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\base.html.twig");
    }
}
