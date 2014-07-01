<?php

/* RLTestBundle:Default:index.html.twig */
class __TwigTemplate_8452b0ac21c5652cbd90150e7c8c582004265afce7eadc54a939abd69ff0b35d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RLTestBundle::layout.html.twig");

        $this->blocks = array(
            'rl_body' => array($this, 'block_rl_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RLTestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_rl_body($context, array $blocks = array())
    {
        // line 4
        echo "
        <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("rl_test_homepage");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " >
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <input type=\"submit\" />
        </form>
    ";
    }

    public function getTemplateName()
    {
        return "RLTestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
