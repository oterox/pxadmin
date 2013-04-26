<?php

/* PXTasksBundle::layout.html.twig */
class __TwigTemplate_8c871c4ab937d2767f43b3c2653b8156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PXTasksBundle::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'mainmenu' => array($this, 'block_mainmenu'),
            'container' => array($this, 'block_container'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PXTasksBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('mainmenu', $context, $blocks);
        // line 41
        echo "

    <div class=\"container\">

        ";
        // line 45
        $this->displayBlock('container', $context, $blocks);
        // line 46
        echo "
    </div> <!-- /container -->

    ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "
";
    }

    // line 5
    public function block_mainmenu($context, array $blocks = array())
    {
        // line 6
        echo "
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"#\">Project name</a>
                    <div class=\"nav-collapse collapse\">
                        <ul class=\"nav\">
                            <li class=\"active\"><a href=\"#\">Home</a></li>
                            <li><a href=\"projects\">Projects</a></li>
                            <li><a href=\"projects\">Project Board</a></li>
                            <li><a href=\"schedule.php\">Schedule</a></li>
                            <li><a href=\"reporting.php\">Reporting</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Las plantillas <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Las plantillas1</a></li>
                                    <li><a href=\"#\">Las plantillas2</a></li>
                                    <li><a href=\"#\">Las plantillas3</a></li>
                                    <li><a href=\"#\">Las plantillas4</a></li>
                                </ul>
                            </li>
                            <li><a href=\"labs.php\">Labs</a></li>
                            <li><a href=\"admin.php\"><i class=\"icon-cog\"></i></a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

    ";
    }

    // line 45
    public function block_container($context, array $blocks = array())
    {
    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        // line 50
        echo "        <hr/>
        <footer>
            <div class=\"container\">
                <p>copyright 2013</p>
            </div>
        </footer>
    ";
    }

    public function getTemplateName()
    {
        return "PXTasksBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 50,  105 => 49,  100 => 45,  62 => 6,  59 => 5,  54 => 57,  52 => 49,  47 => 46,  45 => 45,  39 => 41,  37 => 5,  34 => 4,  31 => 3,  28 => 3,);
    }
}
