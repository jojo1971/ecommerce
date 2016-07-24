<?php

/* EcommerceBundle:Default:panier/layout/livraison.html.twig */
class __TwigTemplate_8fbdb7df87b984f0dbb210a036aa26bbed9630a08b3208d7b2afde98c683880e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "EcommerceBundle:Default:panier/layout/livraison.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <form action=\"";
        // line 11
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

                            <br /><br />

                            <h4>Adresse de facturation</h4>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <button class=\"btn btn-primary\">Valider mon adresse de livraison</button>
                        </form>
                    </div>


\t\t\t\t\t\t\t\t<div class=\"span4 offset2\">
\t\t\t\t\t\t\t\t\t<h4>Ajouter une nouvelle adresse</h4>
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t<label>Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">

\t\t\t\t\t\t\t\t\t\t<label>Prénom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">

\t\t\t\t\t\t\t\t\t\t<label>Adresse</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">

\t\t\t\t\t\t\t\t\t\t<label>Ville</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">

\t\t\t\t\t\t\t\t\t\t<label>Code postal</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">

\t\t\t\t\t\t\t\t\t\t<label>Ville</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">

\t\t\t\t\t\t\t\t\t\t<label>Téléphone</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">

                                        <br />
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Ajouter</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="span12">*/
/*             <h2>Livraison</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     <div class="span4">*/
/*                         <form action="{{ path('validation') }}">*/
/*                             <h4>Adresse de livraison</h4>*/
/*                             <label class="radio">*/
/*                                 <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">*/
/*                                 3b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                             </label>*/
/*                             <label class="radio">*/
/*                                 <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">*/
/*                                 4b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                             </label>*/
/*                             <label class="radio">*/
/*                                 <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">*/
/*                                 5b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                             </label>*/
/* */
/*                             <br /><br />*/
/* */
/*                             <h4>Adresse de facturation</h4>*/
/*                             <label class="radio">*/
/*                                 <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked="">*/
/*                                 3b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                             </label>*/
/*                             <label class="radio">*/
/*                                 <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked="">*/
/*                                 4b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                             </label>*/
/*                             <label class="radio">*/
/*                                 <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked="">*/
/*                                 5b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                             </label>*/
/*                             <button class="btn btn-primary">Valider mon adresse de livraison</button>*/
/*                         </form>*/
/*                     </div>*/
/* */
/* */
/* 								<div class="span4 offset2">*/
/* 									<h4>Ajouter une nouvelle adresse</h4>*/
/* 									<form>*/
/* 										<label>Nom</label>*/
/* 										<input type="text">*/
/* */
/* 										<label>Prénom</label>*/
/* 										<input type="text">*/
/* */
/* 										<label>Adresse</label>*/
/* 										<input type="text">*/
/* */
/* 										<label>Ville</label>*/
/* 										<input type="text">*/
/* */
/* 										<label>Code postal</label>*/
/* 										<input type="text">*/
/* */
/* 										<label>Ville</label>*/
/* 										<input type="text">*/
/* */
/* 										<label>Téléphone</label>*/
/* 										<input type="text">*/
/* */
/*                                         <br />*/
/* 										<button class="btn btn-primary">Ajouter</button>*/
/* 									</form>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
