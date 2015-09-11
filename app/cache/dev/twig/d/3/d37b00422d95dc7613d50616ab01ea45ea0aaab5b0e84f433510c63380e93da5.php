<?php

/* EdpartchelbelBundle:Default:panier/layout/validation.html.twig */
class __TwigTemplate_d37b00422d95dc7613d50616ab01ea45ea0aaab5b0e84f433510c63380e93da5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EdpartchelbelBundle:Default:panier/layout/validation.html.twig", 1);
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
        $__internal_acc923a596d652e905ca9cf641e9482a5a4ce3e8c7eb79806fcb1646889e854d = $this->env->getExtension("native_profiler");
        $__internal_acc923a596d652e905ca9cf641e9482a5a4ce3e8c7eb79806fcb1646889e854d->enter($__internal_acc923a596d652e905ca9cf641e9482a5a4ce3e8c7eb79806fcb1646889e854d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EdpartchelbelBundle:Default:panier/layout/validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acc923a596d652e905ca9cf641e9482a5a4ce3e8c7eb79806fcb1646889e854d->leave($__internal_acc923a596d652e905ca9cf641e9482a5a4ce3e8c7eb79806fcb1646889e854d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8be6374d6c8dec9f07fd5224781ffe6568675a0048b65c8bd191995e285dab6 = $this->env->getExtension("native_profiler");
        $__internal_b8be6374d6c8dec9f07fd5224781ffe6568675a0048b65c8bd191995e285dab6->enter($__internal_b8be6374d6c8dec9f07fd5224781ffe6568675a0048b65c8bd191995e285dab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 7
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EdpartchelbelBundle:Default:panier/layout/validation.html.twig", 7)->display($context);
        // line 8
        echo "            </div>
            <div class=\"span9\">
                <h2>Valider mon parnier</h2>

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
                                2
                            </td>
                            <td>333,33€</td>
                            <td>333,33€</td>
                        </tr>
                        <tr>
                            <td>AC34423</td>
                            <td>
                                1
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
                    <dd>999,99€ TTC</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"#\" class=\"btn btn-success pull-right\">Payer</a>
            </div>

        </div>
    </div>
";
        
        $__internal_b8be6374d6c8dec9f07fd5224781ffe6568675a0048b65c8bd191995e285dab6->leave($__internal_b8be6374d6c8dec9f07fd5224781ffe6568675a0048b65c8bd191995e285dab6_prof);

    }

    public function getTemplateName()
    {
        return "EdpartchelbelBundle:Default:panier/layout/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
