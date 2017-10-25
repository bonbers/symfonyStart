<?php

/* BONBERSPlatformBundle:Advert:no_advert.html.twig */
class __TwigTemplate_8b45eb2d93080958318a323835cbebcda2964c22d2fa64c55daba8bd834a4632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BONBERSPlatformBundle::layout.html.twig", "BONBERSPlatformBundle:Advert:no_advert.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bonbers_platform_body' => array($this, 'block_bonbers_platform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BONBERSPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85275450c829f9c3ec14450a3a1a43749d8509e9b266e7891b0bf881a4bcf0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85275450c829f9c3ec14450a3a1a43749d8509e9b266e7891b0bf881a4bcf0e6->enter($__internal_85275450c829f9c3ec14450a3a1a43749d8509e9b266e7891b0bf881a4bcf0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:no_advert.html.twig"));

        $__internal_45ccfecf8f8cf9159b4e573da570602c5d40a23597f4508c0b85de3aef57a015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ccfecf8f8cf9159b4e573da570602c5d40a23597f4508c0b85de3aef57a015->enter($__internal_45ccfecf8f8cf9159b4e573da570602c5d40a23597f4508c0b85de3aef57a015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:no_advert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85275450c829f9c3ec14450a3a1a43749d8509e9b266e7891b0bf881a4bcf0e6->leave($__internal_85275450c829f9c3ec14450a3a1a43749d8509e9b266e7891b0bf881a4bcf0e6_prof);

        
        $__internal_45ccfecf8f8cf9159b4e573da570602c5d40a23597f4508c0b85de3aef57a015->leave($__internal_45ccfecf8f8cf9159b4e573da570602c5d40a23597f4508c0b85de3aef57a015_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_916ba7a17e1d84610a88653ae6c867501ed28f25391e2c549c52fff6304bde39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916ba7a17e1d84610a88653ae6c867501ed28f25391e2c549c52fff6304bde39->enter($__internal_916ba7a17e1d84610a88653ae6c867501ed28f25391e2c549c52fff6304bde39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9862578ed6f707a4ec8f63d878fd306b5b842117591801609cc273894a3a383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9862578ed6f707a4ec8f63d878fd306b5b842117591801609cc273894a3a383->enter($__internal_a9862578ed6f707a4ec8f63d878fd306b5b842117591801609cc273894a3a383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a9862578ed6f707a4ec8f63d878fd306b5b842117591801609cc273894a3a383->leave($__internal_a9862578ed6f707a4ec8f63d878fd306b5b842117591801609cc273894a3a383_prof);

        
        $__internal_916ba7a17e1d84610a88653ae6c867501ed28f25391e2c549c52fff6304bde39->leave($__internal_916ba7a17e1d84610a88653ae6c867501ed28f25391e2c549c52fff6304bde39_prof);

    }

    // line 7
    public function block_bonbers_platform_body($context, array $blocks = array())
    {
        $__internal_4d268fa04d29091124c5346659cb8a69a414c9bd6b5409a8bb235f38aa2d9d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d268fa04d29091124c5346659cb8a69a414c9bd6b5409a8bb235f38aa2d9d14->enter($__internal_4d268fa04d29091124c5346659cb8a69a414c9bd6b5409a8bb235f38aa2d9d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        $__internal_2260b57f6c64529068d1d253a4abf8e1ce785e2674efa5f5539eca8a238625ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2260b57f6c64529068d1d253a4abf8e1ce785e2674efa5f5539eca8a238625ae->enter($__internal_2260b57f6c64529068d1d253a4abf8e1ce785e2674efa5f5539eca8a238625ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        // line 8
        echo "
  <h2>Aucune annonce !</h2>

  <a href=";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_add");
        echo ">Ajouter une annonce !</a>
";
        
        $__internal_2260b57f6c64529068d1d253a4abf8e1ce785e2674efa5f5539eca8a238625ae->leave($__internal_2260b57f6c64529068d1d253a4abf8e1ce785e2674efa5f5539eca8a238625ae_prof);

        
        $__internal_4d268fa04d29091124c5346659cb8a69a414c9bd6b5409a8bb235f38aa2d9d14->leave($__internal_4d268fa04d29091124c5346659cb8a69a414c9bd6b5409a8bb235f38aa2d9d14_prof);

    }

    public function getTemplateName()
    {
        return "BONBERSPlatformBundle:Advert:no_advert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BONBERSPlatformBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block bonbers_platform_body %}

  <h2>Aucune annonce !</h2>

  <a href={{ path('bonbers_platform_add') }}>Ajouter une annonce !</a>
{% endblock %}
", "BONBERSPlatformBundle:Advert:no_advert.html.twig", "/var/www/html/symfonyStart/src/BONBERS/PlatformBundle/Resources/views/Advert/no_advert.html.twig");
    }
}
