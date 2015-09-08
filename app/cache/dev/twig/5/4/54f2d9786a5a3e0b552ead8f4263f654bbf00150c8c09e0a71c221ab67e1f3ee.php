<?php

/* Ed_partchelbelBundle:Default:second.html.twig */
class __TwigTemplate_54f2d9786a5a3e0b552ead8f4263f654bbf00150c8c09e0a71c221ab67e1f3ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Ed_partchelbelBundle:Default:second.html.twig", 1);
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
        $__internal_48d3cea416a5dc85a119ccd30d2fcd63e1d33aca5bbd76fbf02bf4ef98ee75a8 = $this->env->getExtension("native_profiler");
        $__internal_48d3cea416a5dc85a119ccd30d2fcd63e1d33aca5bbd76fbf02bf4ef98ee75a8->enter($__internal_48d3cea416a5dc85a119ccd30d2fcd63e1d33aca5bbd76fbf02bf4ef98ee75a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ed_partchelbelBundle:Default:second.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48d3cea416a5dc85a119ccd30d2fcd63e1d33aca5bbd76fbf02bf4ef98ee75a8->leave($__internal_48d3cea416a5dc85a119ccd30d2fcd63e1d33aca5bbd76fbf02bf4ef98ee75a8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9c0e8446e5fd717ad23af99dc02357acfa2395ef12f533fd30367117898683b = $this->env->getExtension("native_profiler");
        $__internal_e9c0e8446e5fd717ad23af99dc02357acfa2395ef12f533fd30367117898683b->enter($__internal_e9c0e8446e5fd717ad23af99dc02357acfa2395ef12f533fd30367117898683b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    SECOND
";
        
        $__internal_e9c0e8446e5fd717ad23af99dc02357acfa2395ef12f533fd30367117898683b->leave($__internal_e9c0e8446e5fd717ad23af99dc02357acfa2395ef12f533fd30367117898683b_prof);

    }

    public function getTemplateName()
    {
        return "Ed_partchelbelBundle:Default:second.html.twig";
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
