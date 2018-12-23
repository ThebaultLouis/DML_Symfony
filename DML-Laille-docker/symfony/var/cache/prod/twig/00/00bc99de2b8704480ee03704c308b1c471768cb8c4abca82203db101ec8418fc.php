<?php

/* admin/index.html.twig */
class __TwigTemplate_18ae46a525f8a56400200e0a4bf639887495a283b19311ed5fca9f87a3719cf9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Hello ";
        echo twig_escape_filter($this->env, ($context["controller_name"] ?? null), "html", null, true);
        echo "!";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"\" style=\"text-align:center;\">
  <h1 class=\"mb-4 mt-4\">Bienvenue pour administrer votre site</h1>

  <h2 class=\"mb-5\">Veuillez vous connectez pour <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">continuer</a></h2>

</div>

<form class=\"\" action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\" method=\"POST\">
  <div class=\"form-row\">
    <div class=\"col-md-3\">
    <input placeholder=\"Nom\" class=\"form-control\" required name=\"_username\" type=\"text\">
  </div>
  <div class=\"col-md-3\">
    <input placeholder=\"Mot de passe\" class=\"form-control\" required name=\"_password\" type=\"password\">
  </div>
  <div class=\"col-md-3\">
    <button type=\"submit\" class=\"btn btn-success\">Connexion</button>
  </div>
</form>

";
    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  49 => 9,  44 => 6,  41 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/index.html.twig", "E:\\dvp-web\\PHP\\www\\symfony\\dmlLaille\\templates\\admin\\index.html.twig");
    }
}
