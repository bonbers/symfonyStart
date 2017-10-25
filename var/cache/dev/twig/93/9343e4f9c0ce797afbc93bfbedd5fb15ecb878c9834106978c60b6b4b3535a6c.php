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
        $__internal_4cddafacda1182b0d06aee28ffee4a8417f86af5c7ae07ac8cdb267ff4d869b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cddafacda1182b0d06aee28ffee4a8417f86af5c7ae07ac8cdb267ff4d869b0->enter($__internal_4cddafacda1182b0d06aee28ffee4a8417f86af5c7ae07ac8cdb267ff4d869b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:no_advert.html.twig"));

        $__internal_31c86b0e30001cb606426b95e83601731924f06c985715c3b0db81d1dccd95dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c86b0e30001cb606426b95e83601731924f06c985715c3b0db81d1dccd95dd->enter($__internal_31c86b0e30001cb606426b95e83601731924f06c985715c3b0db81d1dccd95dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:no_advert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cddafacda1182b0d06aee28ffee4a8417f86af5c7ae07ac8cdb267ff4d869b0->leave($__internal_4cddafacda1182b0d06aee28ffee4a8417f86af5c7ae07ac8cdb267ff4d869b0_prof);

        
        $__internal_31c86b0e30001cb606426b95e83601731924f06c985715c3b0db81d1dccd95dd->leave($__internal_31c86b0e30001cb606426b95e83601731924f06c985715c3b0db81d1dccd95dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_18f830b49cdd6d8b8a29d0d591afde35197ae630d8f2caa40f214e1acadf16ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f830b49cdd6d8b8a29d0d591afde35197ae630d8f2caa40f214e1acadf16ac->enter($__internal_18f830b49cdd6d8b8a29d0d591afde35197ae630d8f2caa40f214e1acadf16ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fbfe66c32696fcdf2e78f739f0849baa1209015047177f8d58983f3a06181bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbfe66c32696fcdf2e78f739f0849baa1209015047177f8d58983f3a06181bb7->enter($__internal_fbfe66c32696fcdf2e78f739f0849baa1209015047177f8d58983f3a06181bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fbfe66c32696fcdf2e78f739f0849baa1209015047177f8d58983f3a06181bb7->leave($__internal_fbfe66c32696fcdf2e78f739f0849baa1209015047177f8d58983f3a06181bb7_prof);

        
        $__internal_18f830b49cdd6d8b8a29d0d591afde35197ae630d8f2caa40f214e1acadf16ac->leave($__internal_18f830b49cdd6d8b8a29d0d591afde35197ae630d8f2caa40f214e1acadf16ac_prof);

    }

    // line 7
    public function block_bonbers_platform_body($context, array $blocks = array())
    {
        $__internal_ba39bb25cbb2088bdf0ca3d7b07cec287903e498e469cc564ea36ace3d6ec496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba39bb25cbb2088bdf0ca3d7b07cec287903e498e469cc564ea36ace3d6ec496->enter($__internal_ba39bb25cbb2088bdf0ca3d7b07cec287903e498e469cc564ea36ace3d6ec496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        $__internal_4b4c114e0aa23da45849aeb00918cc2e903ec23eecf977b91998c43ded58863d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4c114e0aa23da45849aeb00918cc2e903ec23eecf977b91998c43ded58863d->enter($__internal_4b4c114e0aa23da45849aeb00918cc2e903ec23eecf977b91998c43ded58863d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        // line 8
        echo "
  <h2>Aucune annonce !</h2>

  <a href=";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_add");
        echo ">Ajouter une annonce !</a>
";
        
        $__internal_4b4c114e0aa23da45849aeb00918cc2e903ec23eecf977b91998c43ded58863d->leave($__internal_4b4c114e0aa23da45849aeb00918cc2e903ec23eecf977b91998c43ded58863d_prof);

        
        $__internal_ba39bb25cbb2088bdf0ca3d7b07cec287903e498e469cc564ea36ace3d6ec496->leave($__internal_ba39bb25cbb2088bdf0ca3d7b07cec287903e498e469cc564ea36ace3d6ec496_prof);

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
