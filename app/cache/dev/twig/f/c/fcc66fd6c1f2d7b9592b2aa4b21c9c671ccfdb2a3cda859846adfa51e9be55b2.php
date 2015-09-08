<?php

/* EcommerceBundle:Default:index.html.twig */
class __TwigTemplate_fcc66fd6c1f2d7b9592b2aa4b21c9c671ccfdb2a3cda859846adfa51e9be55b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9aa0d86ee2f06a5a1a27c6230578bd44525320ec7b2e3eb86691ef7f305e9c62 = $this->env->getExtension("native_profiler");
        $__internal_9aa0d86ee2f06a5a1a27c6230578bd44525320ec7b2e3eb86691ef7f305e9c62->enter($__internal_9aa0d86ee2f06a5a1a27c6230578bd44525320ec7b2e3eb86691ef7f305e9c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_9aa0d86ee2f06a5a1a27c6230578bd44525320ec7b2e3eb86691ef7f305e9c62->leave($__internal_9aa0d86ee2f06a5a1a27c6230578bd44525320ec7b2e3eb86691ef7f305e9c62_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
