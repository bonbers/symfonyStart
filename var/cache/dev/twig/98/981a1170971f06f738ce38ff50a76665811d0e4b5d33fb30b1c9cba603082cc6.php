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
        $__internal_28cd4cb611a1d8561cc6885b41d01c8f8f86acc5a92c89bbf1156cad7cdeecc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28cd4cb611a1d8561cc6885b41d01c8f8f86acc5a92c89bbf1156cad7cdeecc5->enter($__internal_28cd4cb611a1d8561cc6885b41d01c8f8f86acc5a92c89bbf1156cad7cdeecc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:add.html.twig"));

        $__internal_3303fd7cccde41df6429959799d6e016a42bcc161bef228c35a986f15353a65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3303fd7cccde41df6429959799d6e016a42bcc161bef228c35a986f15353a65b->enter($__internal_3303fd7cccde41df6429959799d6e016a42bcc161bef228c35a986f15353a65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28cd4cb611a1d8561cc6885b41d01c8f8f86acc5a92c89bbf1156cad7cdeecc5->leave($__internal_28cd4cb611a1d8561cc6885b41d01c8f8f86acc5a92c89bbf1156cad7cdeecc5_prof);

        
        $__internal_3303fd7cccde41df6429959799d6e016a42bcc161bef228c35a986f15353a65b->leave($__internal_3303fd7cccde41df6429959799d6e016a42bcc161bef228c35a986f15353a65b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1479bad66b7a9643e38f36dc78a4952938b622ef673583eaa86bc1d51f0ff846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1479bad66b7a9643e38f36dc78a4952938b622ef673583eaa86bc1d51f0ff846->enter($__internal_1479bad66b7a9643e38f36dc78a4952938b622ef673583eaa86bc1d51f0ff846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3251a96c8a6231ce2059d02748015857eeb65754bbbda750dbc5cf4adb8f637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3251a96c8a6231ce2059d02748015857eeb65754bbbda750dbc5cf4adb8f637->enter($__internal_d3251a96c8a6231ce2059d02748015857eeb65754bbbda750dbc5cf4adb8f637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d3251a96c8a6231ce2059d02748015857eeb65754bbbda750dbc5cf4adb8f637->leave($__internal_d3251a96c8a6231ce2059d02748015857eeb65754bbbda750dbc5cf4adb8f637_prof);

        
        $__internal_1479bad66b7a9643e38f36dc78a4952938b622ef673583eaa86bc1d51f0ff846->leave($__internal_1479bad66b7a9643e38f36dc78a4952938b622ef673583eaa86bc1d51f0ff846_prof);

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
