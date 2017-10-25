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
        $__internal_186a19930c6094c22fb0d548753b161b7020d4bfc8bb52bc57a15076029bf0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_186a19930c6094c22fb0d548753b161b7020d4bfc8bb52bc57a15076029bf0f6->enter($__internal_186a19930c6094c22fb0d548753b161b7020d4bfc8bb52bc57a15076029bf0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:no_advert.html.twig"));

        $__internal_1b8638baa2fd4a9aed9274c105cee7612f96876ab0dd5d9092322d41b23569ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8638baa2fd4a9aed9274c105cee7612f96876ab0dd5d9092322d41b23569ec->enter($__internal_1b8638baa2fd4a9aed9274c105cee7612f96876ab0dd5d9092322d41b23569ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:no_advert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_186a19930c6094c22fb0d548753b161b7020d4bfc8bb52bc57a15076029bf0f6->leave($__internal_186a19930c6094c22fb0d548753b161b7020d4bfc8bb52bc57a15076029bf0f6_prof);

        
        $__internal_1b8638baa2fd4a9aed9274c105cee7612f96876ab0dd5d9092322d41b23569ec->leave($__internal_1b8638baa2fd4a9aed9274c105cee7612f96876ab0dd5d9092322d41b23569ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d404ce7082494f0598314e8486b6902921338d0433cd9a7e74a4a6964b7a8848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d404ce7082494f0598314e8486b6902921338d0433cd9a7e74a4a6964b7a8848->enter($__internal_d404ce7082494f0598314e8486b6902921338d0433cd9a7e74a4a6964b7a8848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11f25b52b4ca4002b76f61abb785921cecbfb967eaf937b27555bd9c08e54854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f25b52b4ca4002b76f61abb785921cecbfb967eaf937b27555bd9c08e54854->enter($__internal_11f25b52b4ca4002b76f61abb785921cecbfb967eaf937b27555bd9c08e54854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_11f25b52b4ca4002b76f61abb785921cecbfb967eaf937b27555bd9c08e54854->leave($__internal_11f25b52b4ca4002b76f61abb785921cecbfb967eaf937b27555bd9c08e54854_prof);

        
        $__internal_d404ce7082494f0598314e8486b6902921338d0433cd9a7e74a4a6964b7a8848->leave($__internal_d404ce7082494f0598314e8486b6902921338d0433cd9a7e74a4a6964b7a8848_prof);

    }

    // line 7
    public function block_bonbers_platform_body($context, array $blocks = array())
    {
        $__internal_7d3eca335511d14466e3b4f5c5992d0bf3000e4800ab3e098a605e9fa160c7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3eca335511d14466e3b4f5c5992d0bf3000e4800ab3e098a605e9fa160c7f0->enter($__internal_7d3eca335511d14466e3b4f5c5992d0bf3000e4800ab3e098a605e9fa160c7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        $__internal_6983485418eaed4a68eb880ace2bdae00fbf6e0c05161f23aa0161a9454b883c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6983485418eaed4a68eb880ace2bdae00fbf6e0c05161f23aa0161a9454b883c->enter($__internal_6983485418eaed4a68eb880ace2bdae00fbf6e0c05161f23aa0161a9454b883c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        // line 8
        echo "
  <h2>Aucune annonce !</h2>

  <a href=";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_add");
        echo ">Ajouter une annonce !</a>
";
        
        $__internal_6983485418eaed4a68eb880ace2bdae00fbf6e0c05161f23aa0161a9454b883c->leave($__internal_6983485418eaed4a68eb880ace2bdae00fbf6e0c05161f23aa0161a9454b883c_prof);

        
        $__internal_7d3eca335511d14466e3b4f5c5992d0bf3000e4800ab3e098a605e9fa160c7f0->leave($__internal_7d3eca335511d14466e3b4f5c5992d0bf3000e4800ab3e098a605e9fa160c7f0_prof);

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
