<?php

/* Ed_partchelbelBundle:Default:first.html.twig */
class __TwigTemplate_9159848116da2be7f7debc2c56a287510dbf1a5a19080de22d08463884e0cf3f extends Twig_Template
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
        $__internal_4c7c8696d06d96dcf3baa3592fd6ec1447207c0324e4ad5d02b609f44dda15d7 = $this->env->getExtension("native_profiler");
        $__internal_4c7c8696d06d96dcf3baa3592fd6ec1447207c0324e4ad5d02b609f44dda15d7->enter($__internal_4c7c8696d06d96dcf3baa3592fd6ec1447207c0324e4ad5d02b609f44dda15d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ed_partchelbelBundle:Default:first.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c7c8696d06d96dcf3baa3592fd6ec1447207c0324e4ad5d02b609f44dda15d7->leave($__internal_4c7c8696d06d96dcf3baa3592fd6ec1447207c0324e4ad5d02b609f44dda15d7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_49d8a11ccbf41aff0251b03cbcb15ea3217348bcbb20b94c74b0d1596f888846 = $this->env->getExtension("native_profiler");
        $__internal_49d8a11ccbf41aff0251b03cbcb15ea3217348bcbb20b94c74b0d1596f888846->enter($__internal_49d8a11ccbf41aff0251b03cbcb15ea3217348bcbb20b94c74b0d1596f888846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    FIRST :";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_49d8a11ccbf41aff0251b03cbcb15ea3217348bcbb20b94c74b0d1596f888846->leave($__internal_49d8a11ccbf41aff0251b03cbcb15ea3217348bcbb20b94c74b0d1596f888846_prof);

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
