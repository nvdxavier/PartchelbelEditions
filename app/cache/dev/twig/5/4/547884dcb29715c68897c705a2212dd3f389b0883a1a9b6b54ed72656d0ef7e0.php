<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_547884dcb29715c68897c705a2212dd3f389b0883a1a9b6b54ed72656d0ef7e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f77ed166f755fe1cf1b67747c8ddeff40ba74c1e4f3b5e2cff309534a89a19ca = $this->env->getExtension("native_profiler");
        $__internal_f77ed166f755fe1cf1b67747c8ddeff40ba74c1e4f3b5e2cff309534a89a19ca->enter($__internal_f77ed166f755fe1cf1b67747c8ddeff40ba74c1e4f3b5e2cff309534a89a19ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\" />
        <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">P'artchelbel</a>
                    <div class=\"nav-collapse collapse\">
                        <form class=\"navbar-form form-search pull-right\">
                            <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                            <button type=\"submit\" class=\"btn\">Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        <hr />
        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">
                            <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("pages", array("id" => 1));
        echo "\">CGV</a>
                            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("pages", array("id" => 2));
        echo "\">Mentions légales</a>
                        </ul>
                    </div> 

                    <div class=\"span4\">
                        <h4>Notre entrepôt</h4><div>PartchelbelEditions/app/Resources/views/layout/layout</div>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;#</p>
                    </div>

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: #</p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax: #</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"span4\">
                        <p>&copy; Copyright ";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - DevAndClick</p>
                    </div>
                </div>
            </div>
        </footer>\t
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    </body>
</html>";
        
        $__internal_f77ed166f755fe1cf1b67747c8ddeff40ba74c1e4f3b5e2cff309534a89a19ca->leave($__internal_f77ed166f755fe1cf1b67747c8ddeff40ba74c1e4f3b5e2cff309534a89a19ca_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_a0a91f2d24d80215667774cefb7c3031f71570bb41f1a26985ba8458275368d6 = $this->env->getExtension("native_profiler");
        $__internal_a0a91f2d24d80215667774cefb7c3031f71570bb41f1a26985ba8458275368d6->enter($__internal_a0a91f2d24d80215667774cefb7c3031f71570bb41f1a26985ba8458275368d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Ecommerce Fruits & légumes - By DevAndClick";
        
        $__internal_a0a91f2d24d80215667774cefb7c3031f71570bb41f1a26985ba8458275368d6->leave($__internal_a0a91f2d24d80215667774cefb7c3031f71570bb41f1a26985ba8458275368d6_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_71ae51f4386a52b314530644fc9b032515d6d2a1b1947676bc60019759b875c3 = $this->env->getExtension("native_profiler");
        $__internal_71ae51f4386a52b314530644fc9b032515d6d2a1b1947676bc60019759b875c3->enter($__internal_71ae51f4386a52b314530644fc9b032515d6d2a1b1947676bc60019759b875c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_71ae51f4386a52b314530644fc9b032515d6d2a1b1947676bc60019759b875c3->leave($__internal_71ae51f4386a52b314530644fc9b032515d6d2a1b1947676bc60019759b875c3_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_3b2956f4986fee51842812937ca1d6b237db5f432c5764a95d1355947062a465 = $this->env->getExtension("native_profiler");
        $__internal_3b2956f4986fee51842812937ca1d6b237db5f432c5764a95d1355947062a465->enter($__internal_3b2956f4986fee51842812937ca1d6b237db5f432c5764a95d1355947062a465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_3b2956f4986fee51842812937ca1d6b237db5f432c5764a95d1355947062a465->leave($__internal_3b2956f4986fee51842812937ca1d6b237db5f432c5764a95d1355947062a465_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d0f368c0c44edbc864bebf7b6ac682c62b393d747bfef6dd996d836479b7eb7 = $this->env->getExtension("native_profiler");
        $__internal_5d0f368c0c44edbc864bebf7b6ac682c62b393d747bfef6dd996d836479b7eb7->enter($__internal_5d0f368c0c44edbc864bebf7b6ac682c62b393d747bfef6dd996d836479b7eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5d0f368c0c44edbc864bebf7b6ac682c62b393d747bfef6dd996d836479b7eb7->leave($__internal_5d0f368c0c44edbc864bebf7b6ac682c62b393d747bfef6dd996d836479b7eb7_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9b2d817aca7eacf3cfb5e9e7c03bfbbc6b17e2f75d256d5a20771b7b925dc80 = $this->env->getExtension("native_profiler");
        $__internal_f9b2d817aca7eacf3cfb5e9e7c03bfbbc6b17e2f75d256d5a20771b7b925dc80->enter($__internal_f9b2d817aca7eacf3cfb5e9e7c03bfbbc6b17e2f75d256d5a20771b7b925dc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9b2d817aca7eacf3cfb5e9e7c03bfbbc6b17e2f75d256d5a20771b7b925dc80->leave($__internal_f9b2d817aca7eacf3cfb5e9e7c03bfbbc6b17e2f75d256d5a20771b7b925dc80_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22df754a07ab7fb0441b95d53b418323dc5ab4676c52b6d5b5147430339fa1bf = $this->env->getExtension("native_profiler");
        $__internal_22df754a07ab7fb0441b95d53b418323dc5ab4676c52b6d5b5147430339fa1bf->enter($__internal_22df754a07ab7fb0441b95d53b418323dc5ab4676c52b6d5b5147430339fa1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_22df754a07ab7fb0441b95d53b418323dc5ab4676c52b6d5b5147430339fa1bf->leave($__internal_22df754a07ab7fb0441b95d53b418323dc5ab4676c52b6d5b5147430339fa1bf_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 68,  199 => 34,  188 => 12,  177 => 7,  166 => 6,  154 => 5,  146 => 69,  144 => 68,  140 => 67,  136 => 66,  128 => 61,  107 => 43,  103 => 42,  94 => 35,  92 => 34,  79 => 24,  64 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
