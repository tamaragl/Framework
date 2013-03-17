<?php

/* staff/login.tpl */
class __TwigTemplate_5f9e549b2cd6544bf4aab75d763501d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("general.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "general.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo "  

\t \t<p><a href=\"/register\">Register</a> 

\t\t<form action=\"/login\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t
\t\t\t<label for=\"username\"> Username:
\t\t\t\t<input type=\"text\" name =\"username\" />
\t\t\t</label>
\t\t\t<br>

\t\t\t<label for=\"username\"> Password:
\t\t\t\t<input type=\"password\" name =\"password\" />
\t\t\t</label>
\t\t\t<br>
\t\t\t
\t\t\t<input type=\"submit\" name=\"submit\" />
\t\t</form>
\t\t<p><a href=\"/forgot-password\">Forgot password?</a></p>  
        
     ";
    }

    public function getTemplateName()
    {
        return "staff/login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,);
    }
}
