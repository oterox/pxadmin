<?php

/* PXTasksBundle::base.html.twig */
class __TwigTemplate_c87807dbede10c0b56136d050c66b538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'styles' => array($this, 'block_styles'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7 ]><html class=\"ie ie6\" lang=\"en\"> <![endif]-->
<!--[if IE 7 ]><html class=\"ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"ie ie8\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang=\"en\"> <!--<![endif]-->
<head>
    <!-- Basic Page Needs
    ================================================== -->
    ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('meta', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('styles', $context, $blocks);
        // line 47
        echo "</head>

<body>
";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "</body>

</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        echo "        <title>pxadmin</title>
    ";
    }

    // line 13
    public function block_meta($context, array $blocks = array())
    {
        // line 14
        echo "
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
    }

    // line 25
    public function block_styles($context, array $blocks = array())
    {
        // line 26
        echo "
    <!-- CSS
    ================================================== -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pxadmin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pxadmin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"img/apple-touch-icon-114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"img/apple-touch-icon-72.png\">
    <link rel=\"apple-touch-icon\" href=\"img/apple-touch-icon.png\">
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\">

    <!-- Scripts
    ================================================== -->
    <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js\"></script>
    ";
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        // line 53
        echo "    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pxadmin/js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pxadmin/js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pxadmin/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pxadmin/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pxadmin/js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pxadmin/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pxadmin/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pxadmin/js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pxadmin/js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "PXTasksBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  167 => 65,  163 => 64,  159 => 63,  155 => 62,  151 => 61,  147 => 60,  143 => 59,  139 => 58,  135 => 57,  129 => 53,  126 => 52,  121 => 50,  100 => 30,  96 => 29,  91 => 26,  88 => 25,  75 => 14,  72 => 13,  67 => 10,  64 => 9,  58 => 68,  56 => 52,  53 => 51,  51 => 50,  46 => 47,  44 => 25,  41 => 24,  39 => 13,  36 => 12,  34 => 9,  24 => 1,);
    }
}
