<?php

/* Ed_partchelbelBundle:Default:third.html.twig */
class __TwigTemplate_86828c938fb3beec23b231e845afddc5783cdbd81e732f619870ceeb129e1e5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Ed_partchelbelBundle:Default:third.html.twig", 1);
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
        $__internal_ade12e99b1d41ab0c0318676ecf4611ed6798f539cbd2768a2111945388fcf08 = $this->env->getExtension("native_profiler");
        $__internal_ade12e99b1d41ab0c0318676ecf4611ed6798f539cbd2768a2111945388fcf08->enter($__internal_ade12e99b1d41ab0c0318676ecf4611ed6798f539cbd2768a2111945388fcf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ed_partchelbelBundle:Default:third.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade12e99b1d41ab0c0318676ecf4611ed6798f539cbd2768a2111945388fcf08->leave($__internal_ade12e99b1d41ab0c0318676ecf4611ed6798f539cbd2768a2111945388fcf08_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_df3f66e3ded7ed98777a99fbee478fd33d023b58a5c1f2aa9acceb2ecb8fb408 = $this->env->getExtension("native_profiler");
        $__internal_df3f66e3ded7ed98777a99fbee478fd33d023b58a5c1f2aa9acceb2ecb8fb408->enter($__internal_df3f66e3ded7ed98777a99fbee478fd33d023b58a5c1f2aa9acceb2ecb8fb408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Third";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_df3f66e3ded7ed98777a99fbee478fd33d023b58a5c1f2aa9acceb2ecb8fb408->leave($__internal_df3f66e3ded7ed98777a99fbee478fd33d023b58a5c1f2aa9acceb2ecb8fb408_prof);

    }

    public function getTemplateName()
    {
        return "Ed_partchelbelBundle:Default:third.html.twig";
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
