<?php

/* film/category_list.tpl */
class __TwigTemplate_2de224b3ac8181409fb0ac0e81131a87 extends Twig_Template
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

<ul style=\"float:left; width:300px\">
\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu_categories"]) ? $context["menu_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "\t\t<li>
\t\t\t<a href=\"/list-film-category/";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "total_found"), "html", null, true);
            echo ") </a>
\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "</ul>

<div style=\"float:left;\">
\t<table>

\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["film_list"]) ? $context["film_list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 18
            echo "
\t\t<tr>
\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "film_id"), "html", null, true);
            echo "\t</td>
\t\t\t
\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "title"), "html", null, true);
            echo "</td>
\t\t\t
\t\t\t<td><a href=\"/film/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "username"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "username"), "html", null, true);
            echo "</a></td>
\t\t\t
\t\t</tr>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "\t
\t</table>
</div>

   ";
    }

    public function getTemplateName()
    {
        return "film/category_list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  80 => 24,  75 => 22,  70 => 20,  66 => 18,  62 => 17,  55 => 12,  42 => 9,  39 => 8,  35 => 7,  28 => 4,);
    }
}
