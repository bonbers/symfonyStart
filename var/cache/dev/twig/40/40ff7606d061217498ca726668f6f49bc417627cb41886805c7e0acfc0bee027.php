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
        $__internal_36850cde055055879edc1be41597bdeeca5a66801d62f7b30a19eaea9a6747a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36850cde055055879edc1be41597bdeeca5a66801d62f7b30a19eaea9a6747a2->enter($__internal_36850cde055055879edc1be41597bdeeca5a66801d62f7b30a19eaea9a6747a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle::layout.html.twig"));

        $__internal_20442398f89a65a4744ca2a59d76a8f43dd8a29707c3c188f2947236b5428a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20442398f89a65a4744ca2a59d76a8f43dd8a29707c3c188f2947236b5428a39->enter($__internal_20442398f89a65a4744ca2a59d76a8f43dd8a29707c3c188f2947236b5428a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36850cde055055879edc1be41597bdeeca5a66801d62f7b30a19eaea9a6747a2->leave($__internal_36850cde055055879edc1be41597bdeeca5a66801d62f7b30a19eaea9a6747a2_prof);

        
        $__internal_20442398f89a65a4744ca2a59d76a8f43dd8a29707c3c188f2947236b5428a39->leave($__internal_20442398f89a65a4744ca2a59d76a8f43dd8a29707c3c188f2947236b5428a39_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_889a7f6a0e94f86ef312835a0a33e242eb9356e834fad00e1fcf2e280e5da320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889a7f6a0e94f86ef312835a0a33e242eb9356e834fad00e1fcf2e280e5da320->enter($__internal_889a7f6a0e94f86ef312835a0a33e242eb9356e834fad00e1fcf2e280e5da320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b061ceddba258924011209c8c2551f26134b2a86f7c6850497d226d3722045d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b061ceddba258924011209c8c2551f26134b2a86f7c6850497d226d3722045d4->enter($__internal_b061ceddba258924011209c8c2551f26134b2a86f7c6850497d226d3722045d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_b061ceddba258924011209c8c2551f26134b2a86f7c6850497d226d3722045d4->leave($__internal_b061ceddba258924011209c8c2551f26134b2a86f7c6850497d226d3722045d4_prof);

        
        $__internal_889a7f6a0e94f86ef312835a0a33e242eb9356e834fad00e1fcf2e280e5da320->leave($__internal_889a7f6a0e94f86ef312835a0a33e242eb9356e834fad00e1fcf2e280e5da320_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfaeaa8c8e87deb303417c114c568c38fec32d06c88134bf90db36405dacad6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfaeaa8c8e87deb303417c114c568c38fec32d06c88134bf90db36405dacad6f->enter($__internal_cfaeaa8c8e87deb303417c114c568c38fec32d06c88134bf90db36405dacad6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4b3eaa393db0c88d6328c0bba12650c73f92058d6600c3336ebbad38012f25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b3eaa393db0c88d6328c0bba12650c73f92058d6600c3336ebbad38012f25d->enter($__internal_d4b3eaa393db0c88d6328c0bba12650c73f92058d6600c3336ebbad38012f25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <h1>Annonces</h1><hr>
        ";
        // line 7
        $this->displayBlock('bonbers_platform_body', $context, $blocks);
        
        $__internal_d4b3eaa393db0c88d6328c0bba12650c73f92058d6600c3336ebbad38012f25d->leave($__internal_d4b3eaa393db0c88d6328c0bba12650c73f92058d6600c3336ebbad38012f25d_prof);

        
        $__internal_cfaeaa8c8e87deb303417c114c568c38fec32d06c88134bf90db36405dacad6f->leave($__internal_cfaeaa8c8e87deb303417c114c568c38fec32d06c88134bf90db36405dacad6f_prof);

    }

    public function block_bonbers_platform_body($context, array $blocks = array())
    {
        $__internal_c3ab84aa809f49144fde4553893f55cd5657dbec9b4233e5a4edcac063f1b306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ab84aa809f49144fde4553893f55cd5657dbec9b4233e5a4edcac063f1b306->enter($__internal_c3ab84aa809f49144fde4553893f55cd5657dbec9b4233e5a4edcac063f1b306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        $__internal_06c77bc9a83d93ccd5d5c5f4187e8515f45047407f215f090f14f7f29abf8a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c77bc9a83d93ccd5d5c5f4187e8515f45047407f215f090f14f7f29abf8a0a->enter($__internal_06c77bc9a83d93ccd5d5c5f4187e8515f45047407f215f090f14f7f29abf8a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        // line 8
        echo "        ";
        
        $__internal_06c77bc9a83d93ccd5d5c5f4187e8515f45047407f215f090f14f7f29abf8a0a->leave($__internal_06c77bc9a83d93ccd5d5c5f4187e8515f45047407f215f090f14f7f29abf8a0a_prof);

        
        $__internal_c3ab84aa809f49144fde4553893f55cd5657dbec9b4233e5a4edcac063f1b306->leave($__internal_c3ab84aa809f49144fde4553893f55cd5657dbec9b4233e5a4edcac063f1b306_prof);

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
