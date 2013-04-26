<?php

/* PXTasksBundle:Default:index.html.twig */
class __TwigTemplate_a1c9e858d8329719a8dd3ebad18cebb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PXTasksBundle::layout.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PXTasksBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "
    <!-- Example row of columns -->
    <div class=\"row\">

        <div class=\"span12\">
            <h2>Latest News</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
        </div>

        <div class=\"span12\">
            <a href=\"#\" class=\"btn\" data-toggle=\"popover\" data-placement=\"top\" data-content=\"Vivamus sagittis lacus vel augue laoreet rutrum faucibus.\t\" title=\"\" data-original-title=\"Popover on top\">Popover on top</a>
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "PXTasksBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
