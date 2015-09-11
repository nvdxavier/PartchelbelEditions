<?php

/* Ed_partchelbelBundle:Default:index.html.twig */
class __TwigTemplate_d4f110048ecf5c5bce120aa9de1b0da296abdf8f153299bbb66db6a2523eca44 extends Twig_Template
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
        $__internal_986edebe8e30678b728f0cc7f015d3014163a011a596ee8bf351c4b7ee4c8e0c = $this->env->getExtension("native_profiler");
        $__internal_986edebe8e30678b728f0cc7f015d3014163a011a596ee8bf351c4b7ee4c8e0c->enter($__internal_986edebe8e30678b728f0cc7f015d3014163a011a596ee8bf351c4b7ee4c8e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ed_partchelbelBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_986edebe8e30678b728f0cc7f015d3014163a011a596ee8bf351c4b7ee4c8e0c->leave($__internal_986edebe8e30678b728f0cc7f015d3014163a011a596ee8bf351c4b7ee4c8e0c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1514937a214ac19ffb3eb65d2032d40b270870f6df08514edca0247a641d8a37 = $this->env->getExtension("native_profiler");
        $__internal_1514937a214ac19ffb3eb65d2032d40b270870f6df08514edca0247a641d8a37->enter($__internal_1514937a214ac19ffb3eb65d2032d40b270870f6df08514edca0247a641d8a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Acceuil
";
        
        $__internal_1514937a214ac19ffb3eb65d2032d40b270870f6df08514edca0247a641d8a37->leave($__internal_1514937a214ac19ffb3eb65d2032d40b270870f6df08514edca0247a641d8a37_prof);

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
