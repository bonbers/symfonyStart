<?php

/* ::layout.html.twig */
class __TwigTemplate_f1282e0934be0126d3f59c38709e8ff1c62cdecfa89e4cdd59af770144af35ab extends Twig_Template
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
        $__internal_085a4cfde3535603c0e106951b1cdc1daf48a6c25591920e3bdaa68b1e686f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085a4cfde3535603c0e106951b1cdc1daf48a6c25591920e3bdaa68b1e686f45->enter($__internal_085a4cfde3535603c0e106951b1cdc1daf48a6c25591920e3bdaa68b1e686f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_29ba45cc737048082479f759d950aa9d3a6ac4903fe610c2c67849d74355afea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ba45cc737048082479f759d950aa9d3a6ac4903fe610c2c67849d74355afea->enter($__internal_29ba45cc737048082479f759d950aa9d3a6ac4903fe610c2c67849d74355afea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        
    </head>
<body>
    <div class=\"container\">
        <div id=\"header\" class=\"jumbotron\">
            <h1>Ma plateforme d'annonce</h1>
            <p>
                Ce projet est propulsé par Symfony !
            </p>
            <p>
                <a class='btn btn-primary btn-lg' href='https://openclassrooms.com/courses/'>
                    OpenclassRooms
                </a>
            </p>
        </div>
        
        <div class=\"row\">
            <div id=\"menu\" class=\"col-md-3\">
                <h3>Les annonces</h3>
                <ul class=\"nav nav-pills nav-stacked\">
                    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_home");
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_add");
        echo "\">Ajouter une annonce</a></li>
                </ul>
                
                <h4>Dernières annonces</h4>
             ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("BONBERSPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
            </div>
            <div id='content' class='col-md-9'>

";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "            </div>
        </div>
            
            <hr>
            
            <footer>
                <p>The sky's the limit © ";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
            </footer>
    </div>
            
            ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    
</body>
</html>";
        
        $__internal_085a4cfde3535603c0e106951b1cdc1daf48a6c25591920e3bdaa68b1e686f45->leave($__internal_085a4cfde3535603c0e106951b1cdc1daf48a6c25591920e3bdaa68b1e686f45_prof);

        
        $__internal_29ba45cc737048082479f759d950aa9d3a6ac4903fe610c2c67849d74355afea->leave($__internal_29ba45cc737048082479f759d950aa9d3a6ac4903fe610c2c67849d74355afea_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e70b150b9bf60b682d11cc28305acd352aab656fe9395573cc4a8dba000f782b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70b150b9bf60b682d11cc28305acd352aab656fe9395573cc4a8dba000f782b->enter($__internal_e70b150b9bf60b682d11cc28305acd352aab656fe9395573cc4a8dba000f782b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f7fd9413bcb9306610e83f295478d600506e8feba3258d90cfa136b50cb64af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7fd9413bcb9306610e83f295478d600506e8feba3258d90cfa136b50cb64af->enter($__internal_6f7fd9413bcb9306610e83f295478d600506e8feba3258d90cfa136b50cb64af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bonbers Plateforme";
        
        $__internal_6f7fd9413bcb9306610e83f295478d600506e8feba3258d90cfa136b50cb64af->leave($__internal_6f7fd9413bcb9306610e83f295478d600506e8feba3258d90cfa136b50cb64af_prof);

        
        $__internal_e70b150b9bf60b682d11cc28305acd352aab656fe9395573cc4a8dba000f782b->leave($__internal_e70b150b9bf60b682d11cc28305acd352aab656fe9395573cc4a8dba000f782b_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ec8b2337304584f6c235ef05eaad0d6acddd912f402c5fbc84e7de19e85bc30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec8b2337304584f6c235ef05eaad0d6acddd912f402c5fbc84e7de19e85bc30->enter($__internal_6ec8b2337304584f6c235ef05eaad0d6acddd912f402c5fbc84e7de19e85bc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_58586cdb288e5834188b1446509f73616c464ec56320c492f836472a46df1ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58586cdb288e5834188b1446509f73616c464ec56320c492f836472a46df1ced->enter($__internal_58586cdb288e5834188b1446509f73616c464ec56320c492f836472a46df1ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        ";
        
        $__internal_58586cdb288e5834188b1446509f73616c464ec56320c492f836472a46df1ced->leave($__internal_58586cdb288e5834188b1446509f73616c464ec56320c492f836472a46df1ced_prof);

        
        $__internal_6ec8b2337304584f6c235ef05eaad0d6acddd912f402c5fbc84e7de19e85bc30->leave($__internal_6ec8b2337304584f6c235ef05eaad0d6acddd912f402c5fbc84e7de19e85bc30_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d3f92f715da02d5f0b9188262f6cad1c383f402a7ec646b6c731e433db6520b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3f92f715da02d5f0b9188262f6cad1c383f402a7ec646b6c731e433db6520b->enter($__internal_6d3f92f715da02d5f0b9188262f6cad1c383f402a7ec646b6c731e433db6520b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1e47009b9ca916c73579da1e2dbb98860e18a6e61ed8b4c34952a8d3759925c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e47009b9ca916c73579da1e2dbb98860e18a6e61ed8b4c34952a8d3759925c->enter($__internal_e1e47009b9ca916c73579da1e2dbb98860e18a6e61ed8b4c34952a8d3759925c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "    ";
        
        $__internal_e1e47009b9ca916c73579da1e2dbb98860e18a6e61ed8b4c34952a8d3759925c->leave($__internal_e1e47009b9ca916c73579da1e2dbb98860e18a6e61ed8b4c34952a8d3759925c_prof);

        
        $__internal_6d3f92f715da02d5f0b9188262f6cad1c383f402a7ec646b6c731e433db6520b->leave($__internal_6d3f92f715da02d5f0b9188262f6cad1c383f402a7ec646b6c731e433db6520b_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3699fa68eb82f7508a0f9c1fc0a40372e02735f7577c5de2bcfd8dccef55184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3699fa68eb82f7508a0f9c1fc0a40372e02735f7577c5de2bcfd8dccef55184->enter($__internal_a3699fa68eb82f7508a0f9c1fc0a40372e02735f7577c5de2bcfd8dccef55184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a81428f4367172d84f3a820f74aa847f8e45ce43b117674977397916321bb9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81428f4367172d84f3a820f74aa847f8e45ce43b117674977397916321bb9bc->enter($__internal_a81428f4367172d84f3a820f74aa847f8e45ce43b117674977397916321bb9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
                ";
        
        $__internal_a81428f4367172d84f3a820f74aa847f8e45ce43b117674977397916321bb9bc->leave($__internal_a81428f4367172d84f3a820f74aa847f8e45ce43b117674977397916321bb9bc_prof);

        
        $__internal_a3699fa68eb82f7508a0f9c1fc0a40372e02735f7577c5de2bcfd8dccef55184->leave($__internal_a3699fa68eb82f7508a0f9c1fc0a40372e02735f7577c5de2bcfd8dccef55184_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 53,  171 => 52,  161 => 41,  152 => 40,  141 => 9,  132 => 8,  114 => 6,  102 => 56,  100 => 52,  93 => 48,  85 => 42,  83 => 40,  76 => 36,  69 => 32,  65 => 31,  43 => 11,  41 => 8,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Bonbers Plateforme{% endblock %}</title>
        
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        {% endblock%}
        
    </head>
<body>
    <div class=\"container\">
        <div id=\"header\" class=\"jumbotron\">
            <h1>Ma plateforme d'annonce</h1>
            <p>
                Ce projet est propulsé par Symfony !
            </p>
            <p>
                <a class='btn btn-primary btn-lg' href='https://openclassrooms.com/courses/'>
                    OpenclassRooms
                </a>
            </p>
        </div>
        
        <div class=\"row\">
            <div id=\"menu\" class=\"col-md-3\">
                <h3>Les annonces</h3>
                <ul class=\"nav nav-pills nav-stacked\">
                    <li><a href=\"{{ path('bonbers_platform_home') }}\">Accueil</a></li>
                    <li><a href=\"{{ path('bonbers_platform_add') }}\">Ajouter une annonce</a></li>
                </ul>
                
                <h4>Dernières annonces</h4>
             {{ render(controller(\"BONBERSPlatformBundle:Advert:menu\", {'limit': 3})) }}
            </div>
            <div id='content' class='col-md-9'>

{% block body %}
    {% endblock %}
            </div>
        </div>
            
            <hr>
            
            <footer>
                <p>The sky's the limit © {{ 'now' |date('Y') }} and beyond.</p>
            </footer>
    </div>
            
            {% block javascripts %}
                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
                {% endblock %}
    
</body>
</html>", "::layout.html.twig", "/var/www/html/symfonyStart/app/Resources/views/layout.html.twig");
    }
}
