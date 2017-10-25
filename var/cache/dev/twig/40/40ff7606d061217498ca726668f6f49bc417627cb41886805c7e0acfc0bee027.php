<?php

/* BONBERSPlatformBundle::layout.html.twig */
class __TwigTemplate_3d20e5ddbd9dae2be07e1de55bedd9d12f51c93592d8a9d77cdb93071e8bbe8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "BONBERSPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'bonbers_platform_body' => array($this, 'block_bonbers_platform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f01265c7e2aeb64222965dd747221b4b949b10e7b6026013d266309db1705c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f01265c7e2aeb64222965dd747221b4b949b10e7b6026013d266309db1705c3->enter($__internal_3f01265c7e2aeb64222965dd747221b4b949b10e7b6026013d266309db1705c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle::layout.html.twig"));

        $__internal_a2721e021180a75fedf82c9af660496e375f9ac824bc6bb71521f1b0f83426a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2721e021180a75fedf82c9af660496e375f9ac824bc6bb71521f1b0f83426a9->enter($__internal_a2721e021180a75fedf82c9af660496e375f9ac824bc6bb71521f1b0f83426a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f01265c7e2aeb64222965dd747221b4b949b10e7b6026013d266309db1705c3->leave($__internal_3f01265c7e2aeb64222965dd747221b4b949b10e7b6026013d266309db1705c3_prof);

        
        $__internal_a2721e021180a75fedf82c9af660496e375f9ac824bc6bb71521f1b0f83426a9->leave($__internal_a2721e021180a75fedf82c9af660496e375f9ac824bc6bb71521f1b0f83426a9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9472bdd1c5932a3c8b54e017438189b44232c9992f233010420e8e57977e284a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9472bdd1c5932a3c8b54e017438189b44232c9992f233010420e8e57977e284a->enter($__internal_9472bdd1c5932a3c8b54e017438189b44232c9992f233010420e8e57977e284a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd17de74a1fde0bdbea98a345c70f696b07c90f080c1b7c1127df42b354fd78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd17de74a1fde0bdbea98a345c70f696b07c90f080c1b7c1127df42b354fd78d->enter($__internal_fd17de74a1fde0bdbea98a345c70f696b07c90f080c1b7c1127df42b354fd78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_fd17de74a1fde0bdbea98a345c70f696b07c90f080c1b7c1127df42b354fd78d->leave($__internal_fd17de74a1fde0bdbea98a345c70f696b07c90f080c1b7c1127df42b354fd78d_prof);

        
        $__internal_9472bdd1c5932a3c8b54e017438189b44232c9992f233010420e8e57977e284a->leave($__internal_9472bdd1c5932a3c8b54e017438189b44232c9992f233010420e8e57977e284a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7acb751ff2b0730afa1f61e2327523dd7a4df8184b0bcd45e588813539052f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7acb751ff2b0730afa1f61e2327523dd7a4df8184b0bcd45e588813539052f08->enter($__internal_7acb751ff2b0730afa1f61e2327523dd7a4df8184b0bcd45e588813539052f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59744568a8683724c95317e3062b7794ebfccb066b2a3e7f5521239ff9aef410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59744568a8683724c95317e3062b7794ebfccb066b2a3e7f5521239ff9aef410->enter($__internal_59744568a8683724c95317e3062b7794ebfccb066b2a3e7f5521239ff9aef410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <h1>Annonces</h1><hr>
        ";
        // line 7
        $this->displayBlock('bonbers_platform_body', $context, $blocks);
        
        $__internal_59744568a8683724c95317e3062b7794ebfccb066b2a3e7f5521239ff9aef410->leave($__internal_59744568a8683724c95317e3062b7794ebfccb066b2a3e7f5521239ff9aef410_prof);

        
        $__internal_7acb751ff2b0730afa1f61e2327523dd7a4df8184b0bcd45e588813539052f08->leave($__internal_7acb751ff2b0730afa1f61e2327523dd7a4df8184b0bcd45e588813539052f08_prof);

    }

    public function block_bonbers_platform_body($context, array $blocks = array())
    {
        $__internal_2e0446f7031c0b51fab18f271a5a55aa85eeaee76b0e9a5b77e968566510a207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e0446f7031c0b51fab18f271a5a55aa85eeaee76b0e9a5b77e968566510a207->enter($__internal_2e0446f7031c0b51fab18f271a5a55aa85eeaee76b0e9a5b77e968566510a207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        $__internal_7c11f8ef43e1dae781720e30ebcaa969ae8efee7e619271b7c333ff095d30932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c11f8ef43e1dae781720e30ebcaa969ae8efee7e619271b7c333ff095d30932->enter($__internal_7c11f8ef43e1dae781720e30ebcaa969ae8efee7e619271b7c333ff095d30932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        // line 8
        echo "        ";
        
        $__internal_7c11f8ef43e1dae781720e30ebcaa969ae8efee7e619271b7c333ff095d30932->leave($__internal_7c11f8ef43e1dae781720e30ebcaa969ae8efee7e619271b7c333ff095d30932_prof);

        
        $__internal_2e0446f7031c0b51fab18f271a5a55aa85eeaee76b0e9a5b77e968566510a207->leave($__internal_2e0446f7031c0b51fab18f271a5a55aa85eeaee76b0e9a5b77e968566510a207_prof);

    }

    public function getTemplateName()
    {
        return "BONBERSPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 8,  73 => 7,  70 => 6,  61 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %} Annonces - {{ parent() }}{% endblock %}

{% block body %}
        <h1>Annonces</h1><hr>
        {% block bonbers_platform_body %}
        {% endblock %}
{% endblock %}   ", "BONBERSPlatformBundle::layout.html.twig", "/var/www/html/symfonyStart/src/BONBERS/PlatformBundle/Resources/views/layout.html.twig");
    }
}
