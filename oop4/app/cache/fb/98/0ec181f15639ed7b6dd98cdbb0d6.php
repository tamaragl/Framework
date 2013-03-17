<?php

/* customer/rental.tpl */
class __TwigTemplate_fb980ec181f15639ed7b6dd98cdbb0d6 extends Twig_Template
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

   ";
        // line 6
        echo (isset($context["paginator_html"]) ? $context["paginator_html"] : null);
        echo "

   \t<ul>
\t\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 10
            echo "\t\t\t
\t\t\t\t
\t\t\t\t<li>[ ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "total"), "html", null, true);
            echo " ] ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "last_name"), "html", null, true);
            echo "</li>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "\t\t
\t</ul>

   ";
    }

    public function getTemplateName()
    {
        return "customer/rental.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  48 => 12,  44 => 10,  40 => 9,  34 => 6,  28 => 4,);
    }
}
