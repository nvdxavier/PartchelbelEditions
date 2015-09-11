<?php

/* PagesBundle:Default:pages/layout/pages.html.twig */
class __TwigTemplate_d82dcda4690dd0e36626c0e6b99eef3cfac2c8a8b84250b9077be8c0024458f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesBundle:Default:pages/layout/pages.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54efa2487396d73a131df633de5dcf3e36b011d59b0a8934cf85cff533e81753 = $this->env->getExtension("native_profiler");
        $__internal_54efa2487396d73a131df633de5dcf3e36b011d59b0a8934cf85cff533e81753->enter($__internal_54efa2487396d73a131df633de5dcf3e36b011d59b0a8934cf85cff533e81753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54efa2487396d73a131df633de5dcf3e36b011d59b0a8934cf85cff533e81753->leave($__internal_54efa2487396d73a131df633de5dcf3e36b011d59b0a8934cf85cff533e81753_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e64afe2b014d22bbd6e92aff44767810dd4598346b8fc0ce1e532d84904c3a9 = $this->env->getExtension("native_profiler");
        $__internal_5e64afe2b014d22bbd6e92aff44767810dd4598346b8fc0ce1e532d84904c3a9->enter($__internal_5e64afe2b014d22bbd6e92aff44767810dd4598346b8fc0ce1e532d84904c3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <div class=\"row\">
                    <h4>Item Brand and Category</h4>
                    <h5>AB29837 Item Model</h5>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                </div>
                <div class=\"row\">
                    <h4>Item Brand and Category</h4>
                    <h5>AB29837 Item Model</h5>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                </div>
                <div class=\"row\">
                    <h4>Item Brand and Category</h4>
                    <h5>AB29837 Item Model</h5>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5e64afe2b014d22bbd6e92aff44767810dd4598346b8fc0ce1e532d84904c3a9->leave($__internal_5e64afe2b014d22bbd6e92aff44767810dd4598346b8fc0ce1e532d84904c3a9_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages/layout/pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
