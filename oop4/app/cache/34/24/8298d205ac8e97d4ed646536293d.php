<?php

/* store/create.tpl */
class __TwigTemplate_34248298d205ac8e97d4ed646536293d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("general_admin.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "general_admin.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        echo " 
\t\t
\t\t<form  action =\"/new-store\" method=\"POST\">
\t\t\t<label for=\"manager\"> Manager ID:
\t\t\t\t<input type=\"text\" name =\"manager\" />
\t\t\t</label>
\t\t\t</br>
\t\t\t<label for=\"address\"> Address ID:
\t\t\t\t<input type=\"text\" name =\"address\" />
\t\t\t</label>
\t\t\t<input type=\"submit\" name=\"submit\" />
\t\t</form>
 \t";
    }

    public function getTemplateName()
    {
        return "store/create.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,);
    }
}
