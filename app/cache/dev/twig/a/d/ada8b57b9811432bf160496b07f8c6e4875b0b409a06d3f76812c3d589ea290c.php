<?php

/* Ed_partchelbelBundle:Default:first.html.twig */
class __TwigTemplate_ada8b57b9811432bf160496b07f8c6e4875b0b409a06d3f76812c3d589ea290c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Ed_partchelbelBundle:Default:first.html.twig", 1);
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
        $__internal_3f4c6007d10ff3c3a0a9961e07bae1844616979c484cad7e5683a71cd88e1a6f = $this->env->getExtension("native_profiler");
        $__internal_3f4c6007d10ff3c3a0a9961e07bae1844616979c484cad7e5683a71cd88e1a6f->enter($__internal_3f4c6007d10ff3c3a0a9961e07bae1844616979c484cad7e5683a71cd88e1a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ed_partchelbelBundle:Default:first.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f4c6007d10ff3c3a0a9961e07bae1844616979c484cad7e5683a71cd88e1a6f->leave($__internal_3f4c6007d10ff3c3a0a9961e07bae1844616979c484cad7e5683a71cd88e1a6f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2519321dca999a08d1075990154681f0a2e1f10b6370b8414dd08cfc665c7d06 = $this->env->getExtension("native_profiler");
        $__internal_2519321dca999a08d1075990154681f0a2e1f10b6370b8414dd08cfc665c7d06->enter($__internal_2519321dca999a08d1075990154681f0a2e1f10b6370b8414dd08cfc665c7d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    FIRST :";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_2519321dca999a08d1075990154681f0a2e1f10b6370b8414dd08cfc665c7d06->leave($__internal_2519321dca999a08d1075990154681f0a2e1f10b6370b8414dd08cfc665c7d06_prof);

    }

    public function getTemplateName()
    {
        return "Ed_partchelbelBundle:Default:first.html.twig";
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
