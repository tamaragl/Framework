<?php

/* store/list.tpl */
class __TwigTemplate_997c739eda18811ce45ceb2cf59e9d1a extends Twig_Template
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
        // line 5
        echo "\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>Store ID</th>
\t\t\t\t<th>Manager Staff ID</th>
\t\t\t\t<th>Address ID</th>
\t\t\t\t<th>Last Update</th>
\t\t\t<tr>

\t\t\t

\t\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 16
            echo "\t\t\t
\t\t\t
\t\t\t\t\t\t\t\t<td><a href=\"/edit-store/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "store_id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "store_id"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "manager_staff_id"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "address_id"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "last_update"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<form action=\"/delete-store\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"store_id\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "store_id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"delete\" value=\"delete\" />
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "\t\t

\t\t</table>

   ";
    }

    public function getTemplateName()
    {
        return "store/list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  71 => 24,  65 => 21,  61 => 20,  57 => 19,  51 => 18,  47 => 16,  43 => 15,  31 => 5,  28 => 4,);
    }
}
