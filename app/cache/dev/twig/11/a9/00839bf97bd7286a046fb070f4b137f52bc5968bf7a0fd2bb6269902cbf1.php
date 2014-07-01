<?php

/* RLTestBundle::layout.html.twig */
class __TwigTemplate_11a900839bf97bd7286a046fb070f4b137f52bc5968bf7a0fd2bb6269902cbf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'rl_body' => array($this, 'block_rl_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        $this->displayBlock('rl_body', $context, $blocks);
        // line 9
        echo "
";
    }

    // line 7
    public function block_rl_body($context, array $blocks = array())
    {
        // line 8
        echo "  ";
    }

    public function getTemplateName()
    {
        return "RLTestBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  37 => 9,  35 => 7,  32 => 6,  29 => 5,  40 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
