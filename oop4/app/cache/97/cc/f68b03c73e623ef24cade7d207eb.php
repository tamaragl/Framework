<?php

/* general_admin.tpl */
class __TwigTemplate_97ccf68b03c73e623ef24cade7d207eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("general.tpl");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
    public function block_head($context, array $blocks = array())
    {
        echo "           
        <title>
        \t";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - My project
        </title>
    ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "
\t\t";
        // line 12
        $this->displayBlock('menu', $context, $blocks);
        // line 21
        echo "    
    ";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        echo "           
\t        <p>
                <a href=\"/new-store\">New Store</a> | 
                <a href=\"/list-stores\">Stores List</a> |
                <a href=\"/new-staff\">New Staff</a> | 
\t\t\t\t<a href=\"/list-staff\">Staff List</a>  
\t\t\t\t<a href=\"/logout\">Logout</a> Hola ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : null), "html", null, true);
        echo "
\t\t\t</p>
    \t";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        echo "    
    
    ";
    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        echo "   
    \t<p>copyright</p>
    ";
    }

    public function getTemplateName()
    {
        return "general_admin.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  80 => 25,  73 => 18,  63 => 12,  58 => 21,  56 => 12,  53 => 11,  50 => 10,  39 => 5,  33 => 3,  65 => 19,  48 => 12,  44 => 10,  40 => 9,  34 => 6,  28 => 4,);
    }
}
