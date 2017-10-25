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
        $__internal_4deec502dd81cecca3676ed7b607ed29b1d09625d940650040e64b9041f9b40f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4deec502dd81cecca3676ed7b607ed29b1d09625d940650040e64b9041f9b40f->enter($__internal_4deec502dd81cecca3676ed7b607ed29b1d09625d940650040e64b9041f9b40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_850f66b2b87a9d8e0adea9593b0e0daceffb10547812830a6dcbf128acde7d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850f66b2b87a9d8e0adea9593b0e0daceffb10547812830a6dcbf128acde7d7d->enter($__internal_850f66b2b87a9d8e0adea9593b0e0daceffb10547812830a6dcbf128acde7d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_4deec502dd81cecca3676ed7b607ed29b1d09625d940650040e64b9041f9b40f->leave($__internal_4deec502dd81cecca3676ed7b607ed29b1d09625d940650040e64b9041f9b40f_prof);

        
        $__internal_850f66b2b87a9d8e0adea9593b0e0daceffb10547812830a6dcbf128acde7d7d->leave($__internal_850f66b2b87a9d8e0adea9593b0e0daceffb10547812830a6dcbf128acde7d7d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d28d4d96d3da91609c56892cda9bca2bd343f2d40b424c3635dc3791f1244cfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28d4d96d3da91609c56892cda9bca2bd343f2d40b424c3635dc3791f1244cfd->enter($__internal_d28d4d96d3da91609c56892cda9bca2bd343f2d40b424c3635dc3791f1244cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af7ae288bdc62ee1f4858b21a8c524e87f30bddfadda812d0d9e18df1fd296f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7ae288bdc62ee1f4858b21a8c524e87f30bddfadda812d0d9e18df1fd296f1->enter($__internal_af7ae288bdc62ee1f4858b21a8c524e87f30bddfadda812d0d9e18df1fd296f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bonbers Plateforme";
        
        $__internal_af7ae288bdc62ee1f4858b21a8c524e87f30bddfadda812d0d9e18df1fd296f1->leave($__internal_af7ae288bdc62ee1f4858b21a8c524e87f30bddfadda812d0d9e18df1fd296f1_prof);

        
        $__internal_d28d4d96d3da91609c56892cda9bca2bd343f2d40b424c3635dc3791f1244cfd->leave($__internal_d28d4d96d3da91609c56892cda9bca2bd343f2d40b424c3635dc3791f1244cfd_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe1a8cbebe7f2887fc76e38e5e387325623e96beb19851ce318bb50761b77ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1a8cbebe7f2887fc76e38e5e387325623e96beb19851ce318bb50761b77ab4->enter($__internal_fe1a8cbebe7f2887fc76e38e5e387325623e96beb19851ce318bb50761b77ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_32547bf44f78f485e24a58749c5b11718e5fe19cb28c69dc08f769ef2bc5639d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32547bf44f78f485e24a58749c5b11718e5fe19cb28c69dc08f769ef2bc5639d->enter($__internal_32547bf44f78f485e24a58749c5b11718e5fe19cb28c69dc08f769ef2bc5639d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        ";
        
        $__internal_32547bf44f78f485e24a58749c5b11718e5fe19cb28c69dc08f769ef2bc5639d->leave($__internal_32547bf44f78f485e24a58749c5b11718e5fe19cb28c69dc08f769ef2bc5639d_prof);

        
        $__internal_fe1a8cbebe7f2887fc76e38e5e387325623e96beb19851ce318bb50761b77ab4->leave($__internal_fe1a8cbebe7f2887fc76e38e5e387325623e96beb19851ce318bb50761b77ab4_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_50d3a026978235fbfaa3ca816015ed6ab6f5e29da9e59f69e788d0ddf99ab26e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d3a026978235fbfaa3ca816015ed6ab6f5e29da9e59f69e788d0ddf99ab26e->enter($__internal_50d3a026978235fbfaa3ca816015ed6ab6f5e29da9e59f69e788d0ddf99ab26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10581113874cdbea2f1550a419a8ae09e21a8394d1981bcf0438ed9fc8abba04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10581113874cdbea2f1550a419a8ae09e21a8394d1981bcf0438ed9fc8abba04->enter($__internal_10581113874cdbea2f1550a419a8ae09e21a8394d1981bcf0438ed9fc8abba04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "    ";
        
        $__internal_10581113874cdbea2f1550a419a8ae09e21a8394d1981bcf0438ed9fc8abba04->leave($__internal_10581113874cdbea2f1550a419a8ae09e21a8394d1981bcf0438ed9fc8abba04_prof);

        
        $__internal_50d3a026978235fbfaa3ca816015ed6ab6f5e29da9e59f69e788d0ddf99ab26e->leave($__internal_50d3a026978235fbfaa3ca816015ed6ab6f5e29da9e59f69e788d0ddf99ab26e_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d7ebf32e6e9c0f909cf526545ab53e9d15c16c6d2d595788c7dda65a76ef4c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7ebf32e6e9c0f909cf526545ab53e9d15c16c6d2d595788c7dda65a76ef4c6->enter($__internal_3d7ebf32e6e9c0f909cf526545ab53e9d15c16c6d2d595788c7dda65a76ef4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b0fc0a4d8a256ee21ff9d952ecc117b7665969d38f210412b807ac4e62dbae80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fc0a4d8a256ee21ff9d952ecc117b7665969d38f210412b807ac4e62dbae80->enter($__internal_b0fc0a4d8a256ee21ff9d952ecc117b7665969d38f210412b807ac4e62dbae80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
                ";
        
        $__internal_b0fc0a4d8a256ee21ff9d952ecc117b7665969d38f210412b807ac4e62dbae80->leave($__internal_b0fc0a4d8a256ee21ff9d952ecc117b7665969d38f210412b807ac4e62dbae80_prof);

        
        $__internal_3d7ebf32e6e9c0f909cf526545ab53e9d15c16c6d2d595788c7dda65a76ef4c6->leave($__internal_3d7ebf32e6e9c0f909cf526545ab53e9d15c16c6d2d595788c7dda65a76ef4c6_prof);

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
