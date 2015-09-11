<?php

/* EdpartchelbelBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_53bd0e679e480c6ca182224e56b88705c36472c3244eb760beae0a79211f0641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EdpartchelbelBundle:Default:panier/layout/panier.html.twig", 1);
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
        $__internal_6ea0accaf4ae0b3258f5a80caf081cf343ae8e3806b4d1b0a7ce3cceb2f469aa = $this->env->getExtension("native_profiler");
        $__internal_6ea0accaf4ae0b3258f5a80caf081cf343ae8e3806b4d1b0a7ce3cceb2f469aa->enter($__internal_6ea0accaf4ae0b3258f5a80caf081cf343ae8e3806b4d1b0a7ce3cceb2f469aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EdpartchelbelBundle:Default:panier/layout/panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ea0accaf4ae0b3258f5a80caf081cf343ae8e3806b4d1b0a7ce3cceb2f469aa->leave($__internal_6ea0accaf4ae0b3258f5a80caf081cf343ae8e3806b4d1b0a7ce3cceb2f469aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_58f31d3559d84068fd9ff99486e657ea468a9af080fff6ea6e1fb8f5bb0946c7 = $this->env->getExtension("native_profiler");
        $__internal_58f31d3559d84068fd9ff99486e657ea468a9af080fff6ea6e1fb8f5bb0946c7->enter($__internal_58f31d3559d84068fd9ff99486e657ea468a9af080fff6ea6e1fb8f5bb0946c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 7
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EdpartchelbelBundle:Default:panier/layout/panier.html.twig", 7)->display($context);
        // line 8
        echo "            </div>
            <div class=\"span9\">
                <h2>Votre parnier</h2>

                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>Références</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Total HT</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>AB29837</td>
                            <td>
                                <select class=\"span1\">
                                    <option>1</option>
                                </select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>333,33€</td>
                            <td>333,33€</td>
                        </tr>
                        <tr>
                            <td>AC34423</td>
                            <td>
                                <select class=\"span1\">
                                    <option>1</option>
                                </select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>333,33€</td>
                            <td>666,66€</td>
                        </tr>
                        </tbody>
                    </table>
                </form>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>

                    <dt>TVA :</dt>
                    <dd>200€</dd>

                    <dt>Total:</dt>
                    <dd>999,99€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"index.php\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>
";
        
        $__internal_58f31d3559d84068fd9ff99486e657ea468a9af080fff6ea6e1fb8f5bb0946c7->leave($__internal_58f31d3559d84068fd9ff99486e657ea468a9af080fff6ea6e1fb8f5bb0946c7_prof);

    }

    public function getTemplateName()
    {
        return "EdpartchelbelBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 62,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
