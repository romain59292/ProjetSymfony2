<?php

/* FpJsFormValidatorBundle::javascripts.html.twig */
class __TwigTemplate_b9d2eb359bc99eda8f4c6899dc680e500728130f00f7f7c5e96faa3e94cd19e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fpjsformvalidator/js/fp_js_validator.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        // line 2
        echo $this->env->getExtension('fp_js_form_validator')->getConfig();
        echo "
";
        // line 3
        echo $this->env->getExtension('fp_js_form_validator')->getJsValidator();
    }

    public function getTemplateName()
    {
        return "FpJsFormValidatorBundle::javascripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,  108 => 37,  105 => 36,  103 => 35,  100 => 34,  96 => 24,  93 => 23,  86 => 12,  83 => 11,  77 => 9,  70 => 39,  68 => 34,  57 => 25,  55 => 23,  44 => 14,  33 => 8,  26 => 3,  23 => 1,  45 => 8,  42 => 11,  37 => 9,  35 => 7,  32 => 6,  29 => 5,  40 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
