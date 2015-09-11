<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_554d2f4ce10b6703c27ab9bb3fec8a5bfbe3a92093956fab3e1afbc45752ccd1 extends Twig_Template
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
        $__internal_c7a7af8ddeebd7313cc12a74f3c66494af76570406f13a35c47a6124a110bc93 = $this->env->getExtension("native_profiler");
        $__internal_c7a7af8ddeebd7313cc12a74f3c66494af76570406f13a35c47a6124a110bc93->enter($__internal_c7a7af8ddeebd7313cc12a74f3c66494af76570406f13a35c47a6124a110bc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7a7af8ddeebd7313cc12a74f3c66494af76570406f13a35c47a6124a110bc93->leave($__internal_c7a7af8ddeebd7313cc12a74f3c66494af76570406f13a35c47a6124a110bc93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8559283bfeb45aa427e315202d68ee2b977c01637f6934eb3873e12541382f3e = $this->env->getExtension("native_profiler");
        $__internal_8559283bfeb45aa427e315202d68ee2b977c01637f6934eb3873e12541382f3e->enter($__internal_8559283bfeb45aa427e315202d68ee2b977c01637f6934eb3873e12541382f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8559283bfeb45aa427e315202d68ee2b977c01637f6934eb3873e12541382f3e->leave($__internal_8559283bfeb45aa427e315202d68ee2b977c01637f6934eb3873e12541382f3e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b95a30c3aaf1ae028e7f0f0ed4d23802030be657d5cea68197a88e6f8210426 = $this->env->getExtension("native_profiler");
        $__internal_8b95a30c3aaf1ae028e7f0f0ed4d23802030be657d5cea68197a88e6f8210426->enter($__internal_8b95a30c3aaf1ae028e7f0f0ed4d23802030be657d5cea68197a88e6f8210426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8b95a30c3aaf1ae028e7f0f0ed4d23802030be657d5cea68197a88e6f8210426->leave($__internal_8b95a30c3aaf1ae028e7f0f0ed4d23802030be657d5cea68197a88e6f8210426_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6aecba064cdd0ef938a1537ed43f3593307f939f368c461a63a42a6a0fdef75f = $this->env->getExtension("native_profiler");
        $__internal_6aecba064cdd0ef938a1537ed43f3593307f939f368c461a63a42a6a0fdef75f->enter($__internal_6aecba064cdd0ef938a1537ed43f3593307f939f368c461a63a42a6a0fdef75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6aecba064cdd0ef938a1537ed43f3593307f939f368c461a63a42a6a0fdef75f->leave($__internal_6aecba064cdd0ef938a1537ed43f3593307f939f368c461a63a42a6a0fdef75f_prof);

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
