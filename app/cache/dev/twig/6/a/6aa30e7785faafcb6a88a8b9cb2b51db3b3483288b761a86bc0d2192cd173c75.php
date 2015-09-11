<?php

/* ::base.html.twig */
class __TwigTemplate_6aa30e7785faafcb6a88a8b9cb2b51db3b3483288b761a86bc0d2192cd173c75 extends Twig_Template
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
        $__internal_6ee18926789ffc53090bdefe7f47e8140f33a398afdcf3595d08c59d804846ba = $this->env->getExtension("native_profiler");
        $__internal_6ee18926789ffc53090bdefe7f47e8140f33a398afdcf3595d08c59d804846ba->enter($__internal_6ee18926789ffc53090bdefe7f47e8140f33a398afdcf3595d08c59d804846ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6ee18926789ffc53090bdefe7f47e8140f33a398afdcf3595d08c59d804846ba->leave($__internal_6ee18926789ffc53090bdefe7f47e8140f33a398afdcf3595d08c59d804846ba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcbcb0ff3da30948333726b8037bd34bff75a3358c531ff62c8bd1919444e9ce = $this->env->getExtension("native_profiler");
        $__internal_bcbcb0ff3da30948333726b8037bd34bff75a3358c531ff62c8bd1919444e9ce->enter($__internal_bcbcb0ff3da30948333726b8037bd34bff75a3358c531ff62c8bd1919444e9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bcbcb0ff3da30948333726b8037bd34bff75a3358c531ff62c8bd1919444e9ce->leave($__internal_bcbcb0ff3da30948333726b8037bd34bff75a3358c531ff62c8bd1919444e9ce_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_952410d27beb6ac81737fe40e0f387f30f3b01d0b8712efcec7cfce3b456b71f = $this->env->getExtension("native_profiler");
        $__internal_952410d27beb6ac81737fe40e0f387f30f3b01d0b8712efcec7cfce3b456b71f->enter($__internal_952410d27beb6ac81737fe40e0f387f30f3b01d0b8712efcec7cfce3b456b71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_952410d27beb6ac81737fe40e0f387f30f3b01d0b8712efcec7cfce3b456b71f->leave($__internal_952410d27beb6ac81737fe40e0f387f30f3b01d0b8712efcec7cfce3b456b71f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_09fa2af3ee3674d32a36126ec18e7b6a82fff7a6144cca7b834369c3d74cc64c = $this->env->getExtension("native_profiler");
        $__internal_09fa2af3ee3674d32a36126ec18e7b6a82fff7a6144cca7b834369c3d74cc64c->enter($__internal_09fa2af3ee3674d32a36126ec18e7b6a82fff7a6144cca7b834369c3d74cc64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_09fa2af3ee3674d32a36126ec18e7b6a82fff7a6144cca7b834369c3d74cc64c->leave($__internal_09fa2af3ee3674d32a36126ec18e7b6a82fff7a6144cca7b834369c3d74cc64c_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f975b9bf2b94a4b3c8839e0cc5ddc354057a129c00a6bc345e356f5ae0194cc = $this->env->getExtension("native_profiler");
        $__internal_6f975b9bf2b94a4b3c8839e0cc5ddc354057a129c00a6bc345e356f5ae0194cc->enter($__internal_6f975b9bf2b94a4b3c8839e0cc5ddc354057a129c00a6bc345e356f5ae0194cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f975b9bf2b94a4b3c8839e0cc5ddc354057a129c00a6bc345e356f5ae0194cc->leave($__internal_6f975b9bf2b94a4b3c8839e0cc5ddc354057a129c00a6bc345e356f5ae0194cc_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
