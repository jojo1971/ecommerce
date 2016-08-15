<?php

/* PagesBundle:Default:Pages/layout/Pages.html.twig */
class __TwigTemplate_4f830d2d0e8e689c626f507530365f20df3bc853b53834f196d3e7d72c8ff8e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/base.html.twig", "PagesBundle:Default:Pages/layout/Pages.html.twig", 1);
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

            <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</h1>
\t\t\t<div class=\"span12\">
\t\t\t";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contenu", array());
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:Pages/layout/Pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/base.html.twig" %}*/
/* {% block body %}*/
/* <div class="container">*/
/* 		<div class="row">*/
/* */
/*             <h1>{{ page.titre }}</h1>*/
/* 			<div class="span12">*/
/* 			{{ page.contenu|raw }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
