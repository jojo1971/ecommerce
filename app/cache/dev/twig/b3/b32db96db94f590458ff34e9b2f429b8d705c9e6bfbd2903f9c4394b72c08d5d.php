<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_f7a08386af65e02e7a45af82848536cdb9c90825705d603302da52e354725a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
\t\t<div class=\"row\">

             <div class=\"span3\">
                ";
        // line 7
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 7)->display($context);
        // line 8
        echo "            </div>

\t\t\t\t<div class=\"span9\">
                    <h2>Votre panier</h2>
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
                                    <select class=\"span1\"><option>1</option></select>&nbsp;
                                    <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                    <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </td>
                                <td>333,33€</td>
                                <td>333,33€</td>
                            </tr>
                            <tr>
                                <td>AC34423</td>
                                <td>
                                    <select class=\"span1\"><option>1</option></select>&nbsp;
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
        // line 58
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"index.php\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 58,  39 => 8,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}*/
/* {% block body %}*/
/* <div class="container">*/
/* 		<div class="row">*/
/* */
/*              <div class="span3">*/
/*                 {% include '::modulesUsed/navigation.html.twig' %}*/
/*             </div>*/
/* */
/* 				<div class="span9">*/
/*                     <h2>Votre panier</h2>*/
/*                     <form>*/
/*                     <table class="table table-striped table-hover">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Références</th>*/
/*                                 <th>Quantité</th>*/
/*                                 <th>Prix unitaire</th>*/
/*                                 <th>Total HT</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             <tr>*/
/*                                 <td>AB29837</td>*/
/*                                 <td>*/
/*                                     <select class="span1"><option>1</option></select>&nbsp;*/
/*                                     <a href="#"><i class="icon-refresh"></i></a>*/
/*                                     <a href="#"><i class="icon-trash"></i></a>*/
/*                                 </td>*/
/*                                 <td>333,33€</td>*/
/*                                 <td>333,33€</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>AC34423</td>*/
/*                                 <td>*/
/*                                     <select class="span1"><option>1</option></select>&nbsp;*/
/*                                     <a href="#"><i class="icon-refresh"></i></a>*/
/*                                     <a href="#"><i class="icon-trash"></i></a>*/
/*                                 </td>*/
/*                                 <td>333,33€</td>*/
/*                                 <td>666,66€</td>*/
/*                             </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </form>*/
/* */
/*                 <dl class="dl-horizontal pull-right">*/
/*                     <dt>Total HT :</dt>*/
/*                     <dd>799,99€</dd>*/
/* */
/*                     <dt>TVA :</dt>*/
/*                     <dd>200€</dd>*/
/* */
/*                     <dt>Total:</dt>*/
/*                     <dd>999,99€</dd>*/
/*                 </dl>*/
/*                 <div class="clearfix"></div>*/
/*                 <a href="{{ path('livraison') }}" class="btn btn-success pull-right">Valider mon panier</a>*/
/*                 <a href="index.php" class="btn btn-primary">Continuer mes achats</a>*/
/*             </div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
