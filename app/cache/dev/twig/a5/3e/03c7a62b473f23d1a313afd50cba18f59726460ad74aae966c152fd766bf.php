<?php

/* ::base.html.twig */
class __TwigTemplate_a53e03c7a62b473f23d1a313afd50cba18f59726460ad74aae966c152fd766bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        echo "
";
        // line 3
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            ";
        // line 8
        echo twig_include($this->env, $context, "FpJsFormValidatorBundle::javascripts.html.twig");
        echo "
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "  </head>

  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Projet Symfony2</h1>
      </div>
        
     <div id=\"content\" class=\"span9\">
          ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "     </div>

      <hr>

      <footer>
        <p>NordNet © 2014.</p>
      </footer>
    </div>

  ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "
  </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Test";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "          ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "   
    <script src=\"C:/wamp/www/ProjetSymfony2/web/bootstrap/jquery-2.1.1.min.js')\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  103 => 35,  100 => 34,  96 => 24,  93 => 23,  86 => 12,  83 => 11,  77 => 9,  70 => 39,  68 => 34,  57 => 25,  55 => 23,  44 => 14,  42 => 11,  37 => 9,  33 => 8,  26 => 3,  23 => 1,);
    }
}
