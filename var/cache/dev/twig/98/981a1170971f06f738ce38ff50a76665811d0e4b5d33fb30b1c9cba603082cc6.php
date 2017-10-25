<?php

/* BONBERSPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_5b4b6d6c37de8a7d3600ce0e25158a8cc8e92ae4bbc6a1871c23eb682ca09174 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BONBERSPlatformBundle::layout.html.twig", "BONBERSPlatformBundle:Advert:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BONBERSPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d89be3faf96ca50f78c652b9cfe86a030ca737b2720a41ff0bddd3f8dd9ba7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d89be3faf96ca50f78c652b9cfe86a030ca737b2720a41ff0bddd3f8dd9ba7e->enter($__internal_0d89be3faf96ca50f78c652b9cfe86a030ca737b2720a41ff0bddd3f8dd9ba7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:add.html.twig"));

        $__internal_729a136c3cb9f9d097bd3cca815739cea0a7c6bf88160eefdaf3d2aebd892648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729a136c3cb9f9d097bd3cca815739cea0a7c6bf88160eefdaf3d2aebd892648->enter($__internal_729a136c3cb9f9d097bd3cca815739cea0a7c6bf88160eefdaf3d2aebd892648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d89be3faf96ca50f78c652b9cfe86a030ca737b2720a41ff0bddd3f8dd9ba7e->leave($__internal_0d89be3faf96ca50f78c652b9cfe86a030ca737b2720a41ff0bddd3f8dd9ba7e_prof);

        
        $__internal_729a136c3cb9f9d097bd3cca815739cea0a7c6bf88160eefdaf3d2aebd892648->leave($__internal_729a136c3cb9f9d097bd3cca815739cea0a7c6bf88160eefdaf3d2aebd892648_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdebe695f411286ce38fabe7df5647108340bca0273475c16d1197aee65023d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdebe695f411286ce38fabe7df5647108340bca0273475c16d1197aee65023d5->enter($__internal_bdebe695f411286ce38fabe7df5647108340bca0273475c16d1197aee65023d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d0d9e1494f713538e5302922d1bca647d1a89b32e0642431c89724bc72b37ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0d9e1494f713538e5302922d1bca647d1a89b32e0642431c89724bc72b37ec->enter($__internal_9d0d9e1494f713538e5302922d1bca647d1a89b32e0642431c89724bc72b37ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h2>Ajouter une annonce</h2>
  ";
        // line 5
        echo twig_include($this->env, $context, "BONBERSPlatformBundle:Advert:form.html.twig");
        echo "
  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>
";
        
        $__internal_9d0d9e1494f713538e5302922d1bca647d1a89b32e0642431c89724bc72b37ec->leave($__internal_9d0d9e1494f713538e5302922d1bca647d1a89b32e0642431c89724bc72b37ec_prof);

        
        $__internal_bdebe695f411286ce38fabe7df5647108340bca0273475c16d1197aee65023d5->leave($__internal_bdebe695f411286ce38fabe7df5647108340bca0273475c16d1197aee65023d5_prof);

    }

    public function getTemplateName()
    {
        return "BONBERSPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BONBERSPlatformBundle::layout.html.twig\" %}

{% block body %}
  <h2>Ajouter une annonce</h2>
  {{ include(\"BONBERSPlatformBundle:Advert:form.html.twig\") }}
  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>
{% endblock %}
", "BONBERSPlatformBundle:Advert:add.html.twig", "/var/www/html/symfonyStart/src/BONBERS/PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
