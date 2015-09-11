<?php

/* EdpartchelbelBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_82855920cd43981fb1f3eba7c5d14b56a225170b9b9861dcb498f26faf2c786d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EdpartchelbelBundle:Default:produits/layout/presentation.html.twig", 1);
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
        $__internal_ad978dab4ebbde969b079340df7223558573188e333a7b203e150bf32a25fa91 = $this->env->getExtension("native_profiler");
        $__internal_ad978dab4ebbde969b079340df7223558573188e333a7b203e150bf32a25fa91->enter($__internal_ad978dab4ebbde969b079340df7223558573188e333a7b203e150bf32a25fa91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EdpartchelbelBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad978dab4ebbde969b079340df7223558573188e333a7b203e150bf32a25fa91->leave($__internal_ad978dab4ebbde969b079340df7223558573188e333a7b203e150bf32a25fa91_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d855913269e83aad4a971995b34669115d606366b30298af277353a6ea6f7b0b = $this->env->getExtension("native_profiler");
        $__internal_d855913269e83aad4a971995b34669115d606366b30298af277353a6ea6f7b0b->enter($__internal_d855913269e83aad4a971995b34669115d606366b30298af277353a6ea6f7b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\"><h1>PRESENTATION</h1>
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 6
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EdpartchelbelBundle:Default:produits/layout/presentation.html.twig", 6)->display($context);
        // line 7
        echo "            </div>
            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>Item Brand and Category</h4>
                        <h5>AB29837 Item Model</h5>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.</p>
                        <h4>3.33€</h4>

                        <form action=\"panier.php\">


                            <select name=\"qte\" class=\"span1\">
                                <option>1</option>
                            </select>

                            <div>
                                <button class=\"btn btn-primary\">Ajouter au panier</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d855913269e83aad4a971995b34669115d606366b30298af277353a6ea6f7b0b->leave($__internal_d855913269e83aad4a971995b34669115d606366b30298af277353a6ea6f7b0b_prof);

    }

    public function getTemplateName()
    {
        return "EdpartchelbelBundle:Default:produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
