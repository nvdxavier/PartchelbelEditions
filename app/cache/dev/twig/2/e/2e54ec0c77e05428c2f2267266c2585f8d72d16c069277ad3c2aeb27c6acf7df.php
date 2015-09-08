<?php

/* Ed_partchelbelBundle:Default:third.html.twig */
class __TwigTemplate_2e54ec0c77e05428c2f2267266c2585f8d72d16c069277ad3c2aeb27c6acf7df extends Twig_Template
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
        $__internal_0fb8843714835ab8440d6333b01094ee86d40bedb2359788f318da74bb10d549 = $this->env->getExtension("native_profiler");
        $__internal_0fb8843714835ab8440d6333b01094ee86d40bedb2359788f318da74bb10d549->enter($__internal_0fb8843714835ab8440d6333b01094ee86d40bedb2359788f318da74bb10d549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ed_partchelbelBundle:Default:third.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb8843714835ab8440d6333b01094ee86d40bedb2359788f318da74bb10d549->leave($__internal_0fb8843714835ab8440d6333b01094ee86d40bedb2359788f318da74bb10d549_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dec4667cdc7347670ea1dc54991aeaa5e6813de3629ce116c4a9f9cebacd92c = $this->env->getExtension("native_profiler");
        $__internal_3dec4667cdc7347670ea1dc54991aeaa5e6813de3629ce116c4a9f9cebacd92c->enter($__internal_3dec4667cdc7347670ea1dc54991aeaa5e6813de3629ce116c4a9f9cebacd92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Third";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_3dec4667cdc7347670ea1dc54991aeaa5e6813de3629ce116c4a9f9cebacd92c->leave($__internal_3dec4667cdc7347670ea1dc54991aeaa5e6813de3629ce116c4a9f9cebacd92c_prof);

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
