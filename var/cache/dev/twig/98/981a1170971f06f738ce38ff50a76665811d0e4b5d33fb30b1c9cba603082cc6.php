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
        $__internal_9e89f0d5294b67132572e53be3afecb0a51530d14f86e03809ce64cd68343f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e89f0d5294b67132572e53be3afecb0a51530d14f86e03809ce64cd68343f93->enter($__internal_9e89f0d5294b67132572e53be3afecb0a51530d14f86e03809ce64cd68343f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:add.html.twig"));

        $__internal_27ab83d932299450cd85c5ae2007334c9ab93ed364b2579c2d48d44719671639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ab83d932299450cd85c5ae2007334c9ab93ed364b2579c2d48d44719671639->enter($__internal_27ab83d932299450cd85c5ae2007334c9ab93ed364b2579c2d48d44719671639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e89f0d5294b67132572e53be3afecb0a51530d14f86e03809ce64cd68343f93->leave($__internal_9e89f0d5294b67132572e53be3afecb0a51530d14f86e03809ce64cd68343f93_prof);

        
        $__internal_27ab83d932299450cd85c5ae2007334c9ab93ed364b2579c2d48d44719671639->leave($__internal_27ab83d932299450cd85c5ae2007334c9ab93ed364b2579c2d48d44719671639_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_57e66d1f4fa58744731091c044b2ec8980a04f36d8bc091aca0435af171b0623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e66d1f4fa58744731091c044b2ec8980a04f36d8bc091aca0435af171b0623->enter($__internal_57e66d1f4fa58744731091c044b2ec8980a04f36d8bc091aca0435af171b0623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e30d2fb9c2caed160879ea8223df28c394dd8e51f69c8dd28a4bfaa3e4c08b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30d2fb9c2caed160879ea8223df28c394dd8e51f69c8dd28a4bfaa3e4c08b4f->enter($__internal_e30d2fb9c2caed160879ea8223df28c394dd8e51f69c8dd28a4bfaa3e4c08b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e30d2fb9c2caed160879ea8223df28c394dd8e51f69c8dd28a4bfaa3e4c08b4f->leave($__internal_e30d2fb9c2caed160879ea8223df28c394dd8e51f69c8dd28a4bfaa3e4c08b4f_prof);

        
        $__internal_57e66d1f4fa58744731091c044b2ec8980a04f36d8bc091aca0435af171b0623->leave($__internal_57e66d1f4fa58744731091c044b2ec8980a04f36d8bc091aca0435af171b0623_prof);

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
