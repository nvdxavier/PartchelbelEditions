<?php

/* EdpartchelbelBundle:Default:panier/layout/livraison.html.twig */
class __TwigTemplate_330f10c63548a0e12918fd0b6805cd49b7b85f4fe231d41ba909027877e87b07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EdpartchelbelBundle:Default:panier/layout/livraison.html.twig", 1);
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
        $__internal_da2081df3475c93f519600204a93bd85556f974f312da639c2b6abb51c234359 = $this->env->getExtension("native_profiler");
        $__internal_da2081df3475c93f519600204a93bd85556f974f312da639c2b6abb51c234359->enter($__internal_da2081df3475c93f519600204a93bd85556f974f312da639c2b6abb51c234359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EdpartchelbelBundle:Default:panier/layout/livraison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da2081df3475c93f519600204a93bd85556f974f312da639c2b6abb51c234359->leave($__internal_da2081df3475c93f519600204a93bd85556f974f312da639c2b6abb51c234359_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_982b2af39eb298fc72f04c0cd139ae93929bee3a947f64978ec8c75593147f0c = $this->env->getExtension("native_profiler");
        $__internal_982b2af39eb298fc72f04c0cd139ae93929bee3a947f64978ec8c75593147f0c->enter($__internal_982b2af39eb298fc72f04c0cd139ae93929bee3a947f64978ec8c75593147f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Livraison</h2>

            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("validation");
        echo "\">
                            <h4>Adresse de livraison</h4>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>

                            <br/><br/>

                            <h4>Adresse de facturation</h4>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\"
                                       checked=\"\">
                                3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\"
                                       checked=\"\">
                                4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\"
                                       checked=\"\">
                                5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <button class=\"btn btn-primary\">Valider mon adresse de livraison</button>
                        </form>
                    </div>


                    <div class=\"span4 offset2\">
                        <h4>Ajouter une nouvelle adresse</h4>

                        <form>
                            <label>Nom</label>
                            <input type=\"text\">

                            <label>Prénom</label>
                            <input type=\"text\">

                            <label>Adresse</label>
                            <input type=\"text\">

                            <label>Ville</label>
                            <input type=\"text\">

                            <label>Code postal</label>
                            <input type=\"text\">

                            <label>Ville</label>
                            <input type=\"text\">

                            <label>Téléphone</label>
                            <input type=\"text\">

                            <br/>
                            <button class=\"btn btn-primary\">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
";
        
        $__internal_982b2af39eb298fc72f04c0cd139ae93929bee3a947f64978ec8c75593147f0c->leave($__internal_982b2af39eb298fc72f04c0cd139ae93929bee3a947f64978ec8c75593147f0c_prof);

    }

    public function getTemplateName()
    {
        return "EdpartchelbelBundle:Default:panier/layout/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
