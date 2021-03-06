<?php

/* ::layout/base.html.twig */
class __TwigTemplate_b420a6cfff957844a50f7aaa5a1bace9d4a47b1f8ec8757f96f9d71200b837a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
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
        // line 22
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">DevAndClick</a>
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
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
            \t<hr />

\t<footer id=\"footer\" class=\"vspace20\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"span4 offset1\">
\t\t\t\t\t<h4>Informations</h4>
\t\t\t\t\t<ul class=\"nav nav-stacked\">
\t\t\t\t\t\t<li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("page", array("id" => 1));
        echo "\">CGV</a>
\t\t\t\t\t\t<li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("page", array("id" => 2));
        echo "\">Mentions légales</a>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"span4\">
\t\t\t\t\t<h4>Notre entrepôt</h4>
\t\t\t\t\t<p><i class=\"icon-map-marker\"></i>&nbsp;Paris 75 000 - 3 rue des jardins</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"span2\">
\t\t\t\t\t<h4>Nous contacter</h4>
\t\t\t\t\t<p><i class=\"icon-phone\"></i>&nbsp;Tel: 02 35 00 00 00</p>
\t\t\t\t\t<p><i class=\"icon-print\"></i>&nbsp;Fax: 02 35 00 00 00</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"span4\">
\t\t\t\t\t<p>&copy; Copyright 2014 - DevAndClick</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>


        ";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 73,  154 => 33,  149 => 10,  143 => 5,  137 => 74,  135 => 73,  127 => 68,  123 => 67,  97 => 44,  93 => 43,  82 => 34,  80 => 33,  66 => 22,  51 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*             <div class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="navbar-inner">*/
/*                 <div class="container">*/
/*                     <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="brand" href="{{ path('produits') }}">DevAndClick</a>*/
/*                     <div class="nav-collapse collapse">*/
/*                         <form class="navbar-form form-search pull-right">*/
/*                             <input id="Search" name="Search" type="text" class="input-medium search-query">*/
/*                             <button type="submit" class="btn">Rechercher</button>*/
/*                         </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*               {% block body %}{% endblock %}*/
/* */
/*             	<hr />*/
/* */
/* 	<footer id="footer" class="vspace20">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="span4 offset1">*/
/* 					<h4>Informations</h4>*/
/* 					<ul class="nav nav-stacked">*/
/* 						<li><a href="{{ path('page', {'id' : 1}) }}">CGV</a>*/
/* 						<li><a href="{{ path('page', {'id' : 2}) }}">Mentions légales</a>*/
/* 					</ul>*/
/* 				</div>*/
/* */
/* 				<div class="span4">*/
/* 					<h4>Notre entrepôt</h4>*/
/* 					<p><i class="icon-map-marker"></i>&nbsp;Paris 75 000 - 3 rue des jardins</p>*/
/* 				</div>*/
/* */
/* 				<div class="span2">*/
/* 					<h4>Nous contacter</h4>*/
/* 					<p><i class="icon-phone"></i>&nbsp;Tel: 02 35 00 00 00</p>*/
/* 					<p><i class="icon-print"></i>&nbsp;Fax: 02 35 00 00 00</p>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="span4">*/
/* 					<p>&copy; Copyright 2014 - DevAndClick</p>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</footer>*/
/* 	<script src="{{ asset('js/jquery-1.10.0.min.js') }}"></script>*/
/* 	<script src="{{ asset('js/bootstrap.js') }}"></script>*/
/* </body>*/
/* </html>*/
/* */
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
