<?php

/* CsuarezSimpleMathFrontendBundle:Calculator:subtract.html.twig */
class __TwigTemplate_fe8238054620b22164e6e742e98814bc extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getContext($context, "a"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getContext($context, "b"), "html", null, true);
        echo " = ";
        echo twig_escape_filter($this->env, $this->getContext($context, "c"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "CsuarezSimpleMathFrontendBundle:Calculator:subtract.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}
