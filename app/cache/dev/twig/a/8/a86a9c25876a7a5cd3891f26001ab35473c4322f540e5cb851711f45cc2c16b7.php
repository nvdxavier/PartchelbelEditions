<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a86a9c25876a7a5cd3891f26001ab35473c4322f540e5cb851711f45cc2c16b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cfe9a609ad43ea32b39d1754a51d8a775575ec3c2349fafccfa1f01ab1c66c9 = $this->env->getExtension("native_profiler");
        $__internal_2cfe9a609ad43ea32b39d1754a51d8a775575ec3c2349fafccfa1f01ab1c66c9->enter($__internal_2cfe9a609ad43ea32b39d1754a51d8a775575ec3c2349fafccfa1f01ab1c66c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cfe9a609ad43ea32b39d1754a51d8a775575ec3c2349fafccfa1f01ab1c66c9->leave($__internal_2cfe9a609ad43ea32b39d1754a51d8a775575ec3c2349fafccfa1f01ab1c66c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef357fd6a3de4f826e8b1250ee608d9c5d2aca535b052c68402a8a84d0b2dcfe = $this->env->getExtension("native_profiler");
        $__internal_ef357fd6a3de4f826e8b1250ee608d9c5d2aca535b052c68402a8a84d0b2dcfe->enter($__internal_ef357fd6a3de4f826e8b1250ee608d9c5d2aca535b052c68402a8a84d0b2dcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ef357fd6a3de4f826e8b1250ee608d9c5d2aca535b052c68402a8a84d0b2dcfe->leave($__internal_ef357fd6a3de4f826e8b1250ee608d9c5d2aca535b052c68402a8a84d0b2dcfe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da868855b924c2e5240e29ded8d31998ee8263351ea21a2f779f3a48084c77cf = $this->env->getExtension("native_profiler");
        $__internal_da868855b924c2e5240e29ded8d31998ee8263351ea21a2f779f3a48084c77cf->enter($__internal_da868855b924c2e5240e29ded8d31998ee8263351ea21a2f779f3a48084c77cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da868855b924c2e5240e29ded8d31998ee8263351ea21a2f779f3a48084c77cf->leave($__internal_da868855b924c2e5240e29ded8d31998ee8263351ea21a2f779f3a48084c77cf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a35e512a0649259ccf70051774bd4003d871ea509b4522bf9e4d262ed3ed2c9a = $this->env->getExtension("native_profiler");
        $__internal_a35e512a0649259ccf70051774bd4003d871ea509b4522bf9e4d262ed3ed2c9a->enter($__internal_a35e512a0649259ccf70051774bd4003d871ea509b4522bf9e4d262ed3ed2c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a35e512a0649259ccf70051774bd4003d871ea509b4522bf9e4d262ed3ed2c9a->leave($__internal_a35e512a0649259ccf70051774bd4003d871ea509b4522bf9e4d262ed3ed2c9a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
