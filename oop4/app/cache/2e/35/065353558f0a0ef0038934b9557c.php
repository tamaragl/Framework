<?php

/* api/api.tpl */
class __TwigTemplate_2e35065353558f0a0ef0038934b9557c extends Twig_Template
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
        echo (isset($context["response"]) ? $context["response"] : null);
    }

    public function getTemplateName()
    {
        return "api/api.tpl";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
