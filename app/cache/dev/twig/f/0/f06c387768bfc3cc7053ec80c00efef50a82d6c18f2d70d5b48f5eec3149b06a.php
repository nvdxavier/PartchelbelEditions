<?php

/* ::layout/base.html.twig */
class __TwigTemplate_f06c387768bfc3cc7053ec80c00efef50a82d6c18f2d70d5b48f5eec3149b06a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bed135ffd7c366ce4405b5203f7469891a6db3a1624b51c2f0d60826183320c3 = $this->env->getExtension("native_profiler");
        $__internal_bed135ffd7c366ce4405b5203f7469891a6db3a1624b51c2f0d60826183320c3->enter($__internal_bed135ffd7c366ce4405b5203f7469891a6db3a1624b51c2f0d60826183320c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\"/>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"index.php\">DevAndClick</a>

            <div class=\"nav-collapse collapse\">
                <form class=\"navbar-form form-search pull-right\">
                    <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                    <button type=\"submit\" class=\"btn\">Rechercher</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
<hr/>
<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    <li><a href=\"texte.php\">CGV</a>
                    <li><a href=\"texte.php\">Mentions légales</a>
                </ul>
            </div>

            <div class=\"span4\">
                <h4>Notre entrepôt</h4>

                <p><i class=\"icon-map-marker\"></i>&nbsp;Paris 75 000 - 3 rue des jardins</p>
            </div>

            <div class=\"span2\">
                <h4>Nous contacter</h4>

                <p><i class=\"icon-phone\"></i>&nbsp;Tel: 02 35 00 00 00</p>

                <p><i class=\"icon-print\"></i>&nbsp;Fax: 02 35 00 00 00</p>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright 2014 - DevAndClick</p>
            </div>
        </div>
    </div>
</footer>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "</body>
</html>";
        
        $__internal_bed135ffd7c366ce4405b5203f7469891a6db3a1624b51c2f0d60826183320c3->leave($__internal_bed135ffd7c366ce4405b5203f7469891a6db3a1624b51c2f0d60826183320c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_02750939f27b42c35047ad951e9fc49a265fd94dbbb87d988e5f5dab876d71a2 = $this->env->getExtension("native_profiler");
        $__internal_02750939f27b42c35047ad951e9fc49a265fd94dbbb87d988e5f5dab876d71a2->enter($__internal_02750939f27b42c35047ad951e9fc49a265fd94dbbb87d988e5f5dab876d71a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_02750939f27b42c35047ad951e9fc49a265fd94dbbb87d988e5f5dab876d71a2->leave($__internal_02750939f27b42c35047ad951e9fc49a265fd94dbbb87d988e5f5dab876d71a2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82a55cbd879b9429cc445c72e4e85a6b39859df201d2512aad963717cc6a2373 = $this->env->getExtension("native_profiler");
        $__internal_82a55cbd879b9429cc445c72e4e85a6b39859df201d2512aad963717cc6a2373->enter($__internal_82a55cbd879b9429cc445c72e4e85a6b39859df201d2512aad963717cc6a2373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_82a55cbd879b9429cc445c72e4e85a6b39859df201d2512aad963717cc6a2373->leave($__internal_82a55cbd879b9429cc445c72e4e85a6b39859df201d2512aad963717cc6a2373_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7df9d5f98f90848c9a789b8bbbb700ad6388455398dba3095dca795e38e9cfab = $this->env->getExtension("native_profiler");
        $__internal_7df9d5f98f90848c9a789b8bbbb700ad6388455398dba3095dca795e38e9cfab->enter($__internal_7df9d5f98f90848c9a789b8bbbb700ad6388455398dba3095dca795e38e9cfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7df9d5f98f90848c9a789b8bbbb700ad6388455398dba3095dca795e38e9cfab->leave($__internal_7df9d5f98f90848c9a789b8bbbb700ad6388455398dba3095dca795e38e9cfab_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf420e0facbf7decba72d66f7fcc2e8097b60a656883ab0f36e53f39eaf3444f = $this->env->getExtension("native_profiler");
        $__internal_cf420e0facbf7decba72d66f7fcc2e8097b60a656883ab0f36e53f39eaf3444f->enter($__internal_cf420e0facbf7decba72d66f7fcc2e8097b60a656883ab0f36e53f39eaf3444f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cf420e0facbf7decba72d66f7fcc2e8097b60a656883ab0f36e53f39eaf3444f->leave($__internal_cf420e0facbf7decba72d66f7fcc2e8097b60a656883ab0f36e53f39eaf3444f_prof);

    }

    public function getTemplateName()
    {
        return "::layout/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 71,  160 => 33,  149 => 10,  137 => 5,  129 => 72,  127 => 71,  123 => 70,  119 => 69,  82 => 34,  80 => 33,  54 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
