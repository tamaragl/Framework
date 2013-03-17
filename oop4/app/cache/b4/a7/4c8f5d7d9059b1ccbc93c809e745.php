<?php

/* general.tpl */
class __TwigTemplate_b4a74c8f5d7d9059b1ccbc93c809e745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
\t<head>

\t\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "
        <style type=\"text/css\">
        
            body {font-family: Arial;}

            .page {
                display: inline-block;
                padding: 0px 9px;
                margin-right: 4px;
                border-radius: 3px;
                border: solid 1px #c0c0c0;
                background: #e9e9e9;
                box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);
                font-size: .875em;
                font-weight: bold;
                text-decoration: none;
                color: #717171;
                text-shadow: 0px 1px 0px rgba(255,255,255, 1);
                width: 17px;
                text-align: center;
            }

            .page.current-page {
                border: none;
                background: #616161;
                box-shadow: inset 0px 0px 8px rgba(0,0,0, .5), 0px 1px 0px rgba(255,255,255, .8);
                color: #f0f0f0;
                text-shadow: 0px 0px 3px rgba(0,0,0, .5);
            }

            .page.gradient {
                background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
                background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);
            }



        </style>

\t</head>
\t<body>

\t\t";
        // line 51
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "

        ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "


        ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo " 

\t</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        echo "           
            <title>
            \t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - My Framework
            </title>
        ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 51
    public function block_header($context, array $blocks = array())
    {
        // line 52
        echo "\t\t
        
        ";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        echo "    
        
        ";
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        echo "   
        \t
        ";
    }

    public function getTemplateName()
    {
        return "general.tpl";
    }

    public function getDebugInfo()
    {
        return array (  131 => 63,  123 => 57,  117 => 52,  114 => 51,  103 => 6,  97 => 4,  90 => 65,  88 => 63,  83 => 60,  81 => 57,  77 => 55,  75 => 51,  31 => 9,  29 => 4,  24 => 1,  28 => 3,);
    }
}
