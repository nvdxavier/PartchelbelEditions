<?php

/* Ed_partchelbelBundle:Default:index.html.twig */
class __TwigTemplate_7ca9d9a146f5d215891e5e5502d212436ae0c79450753ca09a642bfa0d3e0d58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Ed_partchelbelBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4d0c0ad0ef51bff0e26723406c8ce009b1e03c49e5fe2ac4a690f0411026096 = $this->env->getExtension("native_profiler");
        $__internal_f4d0c0ad0ef51bff0e26723406c8ce009b1e03c49e5fe2ac4a690f0411026096->enter($__internal_f4d0c0ad0ef51bff0e26723406c8ce009b1e03c49e5fe2ac4a690f0411026096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ed_partchelbelBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4d0c0ad0ef51bff0e26723406c8ce009b1e03c49e5fe2ac4a690f0411026096->leave($__internal_f4d0c0ad0ef51bff0e26723406c8ce009b1e03c49e5fe2ac4a690f0411026096_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0d0be6085cbad6835705b854a9309f2917f6bf041d9cc9769445f6f8176b52e = $this->env->getExtension("native_profiler");
        $__internal_a0d0be6085cbad6835705b854a9309f2917f6bf041d9cc9769445f6f8176b52e->enter($__internal_a0d0be6085cbad6835705b854a9309f2917f6bf041d9cc9769445f6f8176b52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Acceuil
";
        
        $__internal_a0d0be6085cbad6835705b854a9309f2917f6bf041d9cc9769445f6f8176b52e->leave($__internal_a0d0be6085cbad6835705b854a9309f2917f6bf041d9cc9769445f6f8176b52e_prof);

    }

    public function getTemplateName()
    {
        return "Ed_partchelbelBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
