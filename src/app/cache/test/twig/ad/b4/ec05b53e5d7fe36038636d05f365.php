<?php

/* CsuarezSimpleMathFrontendBundle:Calculator:add.html.twig */
class __TwigTemplate_adb4ec05b53e5d7fe36038636d05f365 extends Twig_Template
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
        echo " + ";
        echo twig_escape_filter($this->env, $this->getContext($context, "b"), "html", null, true);
        echo " = ";
        echo twig_escape_filter($this->env, $this->getContext($context, "c"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "CsuarezSimpleMathFrontendBundle:Calculator:add.html.twig";
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
