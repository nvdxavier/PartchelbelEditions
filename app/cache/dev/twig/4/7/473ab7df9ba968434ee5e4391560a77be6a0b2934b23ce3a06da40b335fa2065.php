<?php

/* EdpartchelbelBundle:Default:index.html.twig */
class __TwigTemplate_473ab7df9ba968434ee5e4391560a77be6a0b2934b23ce3a06da40b335fa2065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EdpartchelbelBundle:Default:index.html.twig", 1);
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
        $__internal_271378d13f39c34e0d330bbc6ac9f4cd527b3e13d21185ecce00028eafbc29fe = $this->env->getExtension("native_profiler");
        $__internal_271378d13f39c34e0d330bbc6ac9f4cd527b3e13d21185ecce00028eafbc29fe->enter($__internal_271378d13f39c34e0d330bbc6ac9f4cd527b3e13d21185ecce00028eafbc29fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EdpartchelbelBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_271378d13f39c34e0d330bbc6ac9f4cd527b3e13d21185ecce00028eafbc29fe->leave($__internal_271378d13f39c34e0d330bbc6ac9f4cd527b3e13d21185ecce00028eafbc29fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5cfb1e9393048f5db715dbe202e43ac74816b86b3091bcbae5822b847232851 = $this->env->getExtension("native_profiler");
        $__internal_b5cfb1e9393048f5db715dbe202e43ac74816b86b3091bcbae5822b847232851->enter($__internal_b5cfb1e9393048f5db715dbe202e43ac74816b86b3091bcbae5822b847232851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
            ";
        // line 7
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EdpartchelbelBundle:Default:index.html.twig", 7)->display($context);
        // line 8
        echo "            </div>
            <div class=\"span9\">
                <!--PartchelbelEditions/app/src/Edpartchelbel/Resources/views/Default/-->
                <ul class=\"thumbnails\">
                    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "                        <li class=\"span3\">
                            <div class=\"thumbnail\">
                                <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/holder.png"), "html", null, true);
            echo "\" alt=\"DevAndClick\" width=\"300\" height=\"300\">

                                <div class=\"caption\">
                                    <h4>Thumbnail label</h4>

                                    <p>100,00 €</p>
                                    <a class=\"btn btn-primary\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("produit.php"), "html", null, true);
            echo "\">Plus d'infos</a>
                                    <a class=\"btn btn-success\" href=\"panier.php\">Ajouter au panier</a>
                                </div>
                            </div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </ul>

                <div class=\"pagination\">
                    <ul>
                        <li class=\"disabled\"><span>Précédent</span></li>
                        <li class=\"disabled\"><span>1</span></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Suivant</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <?php include '../layout/footer.php'; ?>
";
        
        $__internal_b5cfb1e9393048f5db715dbe202e43ac74816b86b3091bcbae5822b847232851->leave($__internal_b5cfb1e9393048f5db715dbe202e43ac74816b86b3091bcbae5822b847232851_prof);

    }

    public function getTemplateName()
    {
        return "EdpartchelbelBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  70 => 21,  61 => 15,  57 => 13,  53 => 12,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
