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
        $__internal_8f29581239e8e1c0119da11f1038b8e923fa964585858704823741a52a0cc80c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f29581239e8e1c0119da11f1038b8e923fa964585858704823741a52a0cc80c->enter($__internal_8f29581239e8e1c0119da11f1038b8e923fa964585858704823741a52a0cc80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_9c0db51dcf7dc7cde2ac631c2fad3e769a3b5345ae6b7b6829f76dc13114692c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0db51dcf7dc7cde2ac631c2fad3e769a3b5345ae6b7b6829f76dc13114692c->enter($__internal_9c0db51dcf7dc7cde2ac631c2fad3e769a3b5345ae6b7b6829f76dc13114692c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_8f29581239e8e1c0119da11f1038b8e923fa964585858704823741a52a0cc80c->leave($__internal_8f29581239e8e1c0119da11f1038b8e923fa964585858704823741a52a0cc80c_prof);

        
        $__internal_9c0db51dcf7dc7cde2ac631c2fad3e769a3b5345ae6b7b6829f76dc13114692c->leave($__internal_9c0db51dcf7dc7cde2ac631c2fad3e769a3b5345ae6b7b6829f76dc13114692c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1547852972e668a2caeac701aa8c53504a9db2cd3e073467fc2787f218d7b20d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1547852972e668a2caeac701aa8c53504a9db2cd3e073467fc2787f218d7b20d->enter($__internal_1547852972e668a2caeac701aa8c53504a9db2cd3e073467fc2787f218d7b20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4a2ab510373a89f412d901cae9983d6a392360a097736dfb5559d2021979c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a2ab510373a89f412d901cae9983d6a392360a097736dfb5559d2021979c2a->enter($__internal_f4a2ab510373a89f412d901cae9983d6a392360a097736dfb5559d2021979c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bonbers Plateforme";
        
        $__internal_f4a2ab510373a89f412d901cae9983d6a392360a097736dfb5559d2021979c2a->leave($__internal_f4a2ab510373a89f412d901cae9983d6a392360a097736dfb5559d2021979c2a_prof);

        
        $__internal_1547852972e668a2caeac701aa8c53504a9db2cd3e073467fc2787f218d7b20d->leave($__internal_1547852972e668a2caeac701aa8c53504a9db2cd3e073467fc2787f218d7b20d_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54ddd3afc711b690b8383502c7e3d04ab97f592d53c19ca02661fa19518c3f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ddd3afc711b690b8383502c7e3d04ab97f592d53c19ca02661fa19518c3f83->enter($__internal_54ddd3afc711b690b8383502c7e3d04ab97f592d53c19ca02661fa19518c3f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f523011ed00dd90e97ba207afa23f1c4bb43addb05f5852f14f51116a73f078b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f523011ed00dd90e97ba207afa23f1c4bb43addb05f5852f14f51116a73f078b->enter($__internal_f523011ed00dd90e97ba207afa23f1c4bb43addb05f5852f14f51116a73f078b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        ";
        
        $__internal_f523011ed00dd90e97ba207afa23f1c4bb43addb05f5852f14f51116a73f078b->leave($__internal_f523011ed00dd90e97ba207afa23f1c4bb43addb05f5852f14f51116a73f078b_prof);

        
        $__internal_54ddd3afc711b690b8383502c7e3d04ab97f592d53c19ca02661fa19518c3f83->leave($__internal_54ddd3afc711b690b8383502c7e3d04ab97f592d53c19ca02661fa19518c3f83_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_074872d836f9328741b69d787d0a2c66e82e4abf154525185b6e4026f0280b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074872d836f9328741b69d787d0a2c66e82e4abf154525185b6e4026f0280b3a->enter($__internal_074872d836f9328741b69d787d0a2c66e82e4abf154525185b6e4026f0280b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f9979b1162a7f6cacc6fb36ad440489e6d9e5f1a84b82ba75631f4821479786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9979b1162a7f6cacc6fb36ad440489e6d9e5f1a84b82ba75631f4821479786->enter($__internal_6f9979b1162a7f6cacc6fb36ad440489e6d9e5f1a84b82ba75631f4821479786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "    ";
        
        $__internal_6f9979b1162a7f6cacc6fb36ad440489e6d9e5f1a84b82ba75631f4821479786->leave($__internal_6f9979b1162a7f6cacc6fb36ad440489e6d9e5f1a84b82ba75631f4821479786_prof);

        
        $__internal_074872d836f9328741b69d787d0a2c66e82e4abf154525185b6e4026f0280b3a->leave($__internal_074872d836f9328741b69d787d0a2c66e82e4abf154525185b6e4026f0280b3a_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0573d906f0b8ae9d80e7b5d603dc1398cab4bffd0ae0b94bc1e0f356e1c2d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0573d906f0b8ae9d80e7b5d603dc1398cab4bffd0ae0b94bc1e0f356e1c2d32->enter($__internal_f0573d906f0b8ae9d80e7b5d603dc1398cab4bffd0ae0b94bc1e0f356e1c2d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_35ca2adcd102b3c6c86aa34558af872c68ec77eeee9f87434a1c80cc3f92bb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ca2adcd102b3c6c86aa34558af872c68ec77eeee9f87434a1c80cc3f92bb54->enter($__internal_35ca2adcd102b3c6c86aa34558af872c68ec77eeee9f87434a1c80cc3f92bb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
                ";
        
        $__internal_35ca2adcd102b3c6c86aa34558af872c68ec77eeee9f87434a1c80cc3f92bb54->leave($__internal_35ca2adcd102b3c6c86aa34558af872c68ec77eeee9f87434a1c80cc3f92bb54_prof);

        
        $__internal_f0573d906f0b8ae9d80e7b5d603dc1398cab4bffd0ae0b94bc1e0f356e1c2d32->leave($__internal_f0573d906f0b8ae9d80e7b5d603dc1398cab4bffd0ae0b94bc1e0f356e1c2d32_prof);

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
