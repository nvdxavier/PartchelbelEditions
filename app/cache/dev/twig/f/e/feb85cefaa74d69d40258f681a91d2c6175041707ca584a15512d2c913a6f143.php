<?php

/* Ed_partchelbelBundle:Default:second.html.twig */
class __TwigTemplate_feb85cefaa74d69d40258f681a91d2c6175041707ca584a15512d2c913a6f143 extends Twig_Template
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
        $__internal_df5f3298a68702ced455e1d47dc0645e27db8fa48d5af4390dd51ff524c02dd3 = $this->env->getExtension("native_profiler");
        $__internal_df5f3298a68702ced455e1d47dc0645e27db8fa48d5af4390dd51ff524c02dd3->enter($__internal_df5f3298a68702ced455e1d47dc0645e27db8fa48d5af4390dd51ff524c02dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Ed_partchelbelBundle:Default:second.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df5f3298a68702ced455e1d47dc0645e27db8fa48d5af4390dd51ff524c02dd3->leave($__internal_df5f3298a68702ced455e1d47dc0645e27db8fa48d5af4390dd51ff524c02dd3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fb908fdc1697512ccc42d0bba55d472af1c4086ab3ed1f303c4a5306800a2d7 = $this->env->getExtension("native_profiler");
        $__internal_9fb908fdc1697512ccc42d0bba55d472af1c4086ab3ed1f303c4a5306800a2d7->enter($__internal_9fb908fdc1697512ccc42d0bba55d472af1c4086ab3ed1f303c4a5306800a2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    SECOND
";
        
        $__internal_9fb908fdc1697512ccc42d0bba55d472af1c4086ab3ed1f303c4a5306800a2d7->leave($__internal_9fb908fdc1697512ccc42d0bba55d472af1c4086ab3ed1f303c4a5306800a2d7_prof);

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
