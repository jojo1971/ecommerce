<?php

/* EcommerceBundle:Default:Produits/layout/produits.html.twig */
class __TwigTemplate_9a433a779fc77c2a89a9730e2f2649a39588dd4743af183a7089282e8f00c928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "EcommerceBundle:Default:Produits/layout/produits.html.twig", 1);
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
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 6
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:Produits/layout/produits.html.twig", 6)->display($context);
        // line 7
        echo "            </div>
    <div class=\"span9\">

                <ul class=\"thumbnails\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/holder.png"), "html", null, true);
            echo "\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                            <div class=\"caption\">
                                <h4>Thumbnail label</h4>
                                <p>100,00 €</p>
                                <a class=\"btn btn-primary\" href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("presentation");
            echo "\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\">Ajouter au panier</a>
                            </div>
                        </div>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
                </ul>

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


";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  63 => 19,  59 => 18,  52 => 14,  48 => 12,  44 => 11,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}*/
/* {% block body %}*/
/* <div class="container">*/
/*         <div class="row">*/
/*             <div class="span3">*/
/*                 {% include '::modulesUsed/navigation.html.twig' %}*/
/*             </div>*/
/*     <div class="span9">*/
/* */
/*                 <ul class="thumbnails">*/
/*                     {% for i in 0..10 %}*/
/*                     <li class="span3">*/
/*                         <div class="thumbnail">*/
/*                             <img src="{{ asset('img/holder.png') }}" alt="DevAndClick" width="300" height="300">*/
/*                             <div class="caption">*/
/*                                 <h4>Thumbnail label</h4>*/
/*                                 <p>100,00 €</p>*/
/*                                 <a class="btn btn-primary" href="{{ path('presentation') }}">Plus d'infos</a>*/
/*                                 <a class="btn btn-success" href="{{ path('panier') }}">Ajouter au panier</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     {% endfor %}*/
/* */
/*                 </ul>*/
/* */
/*                 <div class="pagination">*/
/*                     <ul>*/
/*                         <li class="disabled"><span>Précédent</span></li>*/
/*                         <li class="disabled"><span>1</span></li>*/
/*                         <li><a href="#">2</a></li>*/
/*                         <li><a href="#">3</a></li>*/
/*                         <li><a href="#">4</a></li>*/
/*                         <li><a href="#">5</a></li>*/
/*                         <li><a href="#">Suivant</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*     </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
