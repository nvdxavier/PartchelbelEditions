<?php

/* ::base.html.twig */
class __TwigTemplate_f6929c513008c89cdeb2dfe14c8ad8d564e5c758977668be08a489309bda2bc4 extends Twig_Template
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
        $__internal_3f22f2b6aee1965409ce60832ae741b5c138cdd0a5fb2fd42bb3c09068597bf1 = $this->env->getExtension("native_profiler");
        $__internal_3f22f2b6aee1965409ce60832ae741b5c138cdd0a5fb2fd42bb3c09068597bf1->enter($__internal_3f22f2b6aee1965409ce60832ae741b5c138cdd0a5fb2fd42bb3c09068597bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
<ul>
    <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($this->env->getExtension('routing')->getPath("ed.partchelbel_homepage") . ".html"), "html", null, true);
        echo "\">acceuil</a></li>
    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($this->env->getExtension('routing')->getPath("ed.partchelbel_first", array("id" => 666)) . ".html"), "html", null, true);
        echo "\">first</a></li>
    <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($this->env->getExtension('routing')->getPath("ed.partchelbel_second") . ".html"), "html", null, true);
        echo "\">second</a></li>
    <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($this->env->getExtension('routing')->getPath("ed.partchelbel_third", array("id" => 555)) . ".html"), "html", null, true);
        echo "\">third</a></li>
</ul>
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_3f22f2b6aee1965409ce60832ae741b5c138cdd0a5fb2fd42bb3c09068597bf1->leave($__internal_3f22f2b6aee1965409ce60832ae741b5c138cdd0a5fb2fd42bb3c09068597bf1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_39f1c3838a6e0ff6cf996db2406b0120e0a14cf105341e3b7d063a6546152a5c = $this->env->getExtension("native_profiler");
        $__internal_39f1c3838a6e0ff6cf996db2406b0120e0a14cf105341e3b7d063a6546152a5c->enter($__internal_39f1c3838a6e0ff6cf996db2406b0120e0a14cf105341e3b7d063a6546152a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_39f1c3838a6e0ff6cf996db2406b0120e0a14cf105341e3b7d063a6546152a5c->leave($__internal_39f1c3838a6e0ff6cf996db2406b0120e0a14cf105341e3b7d063a6546152a5c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5d8482ff26935e96c711ef4977c0a91016d9adbffb13ea12188ea0be27f0bbe = $this->env->getExtension("native_profiler");
        $__internal_b5d8482ff26935e96c711ef4977c0a91016d9adbffb13ea12188ea0be27f0bbe->enter($__internal_b5d8482ff26935e96c711ef4977c0a91016d9adbffb13ea12188ea0be27f0bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b5d8482ff26935e96c711ef4977c0a91016d9adbffb13ea12188ea0be27f0bbe->leave($__internal_b5d8482ff26935e96c711ef4977c0a91016d9adbffb13ea12188ea0be27f0bbe_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdd653ee22d70b946d4a31a3f220362d28f6e9b36d8e2306eea3bb752ff55604 = $this->env->getExtension("native_profiler");
        $__internal_cdd653ee22d70b946d4a31a3f220362d28f6e9b36d8e2306eea3bb752ff55604->enter($__internal_cdd653ee22d70b946d4a31a3f220362d28f6e9b36d8e2306eea3bb752ff55604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cdd653ee22d70b946d4a31a3f220362d28f6e9b36d8e2306eea3bb752ff55604->leave($__internal_cdd653ee22d70b946d4a31a3f220362d28f6e9b36d8e2306eea3bb752ff55604_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7526e388a7bb9eb7cf12099f8833d2afb11d263caee264689d51fd039e290ff6 = $this->env->getExtension("native_profiler");
        $__internal_7526e388a7bb9eb7cf12099f8833d2afb11d263caee264689d51fd039e290ff6->enter($__internal_7526e388a7bb9eb7cf12099f8833d2afb11d263caee264689d51fd039e290ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7526e388a7bb9eb7cf12099f8833d2afb11d263caee264689d51fd039e290ff6->leave($__internal_7526e388a7bb9eb7cf12099f8833d2afb11d263caee264689d51fd039e290ff6_prof);

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
        return array (  111 => 17,  100 => 16,  89 => 6,  77 => 5,  68 => 18,  65 => 17,  63 => 16,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
