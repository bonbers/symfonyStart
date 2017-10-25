<?php

/* BONBERSPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_7f7bab5daf7ae0b34d67b5f8ff77e8c5889156129f326404e70a1c6f5cd961cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BONBERSPlatformBundle::layout.html.twig", "BONBERSPlatformBundle:Advert:delete.html.twig", 1);
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
        $__internal_fbb1bba943a63e73f7d2f804d2a7c66d9479471d6c6c358dfc0d75a5fdf60d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb1bba943a63e73f7d2f804d2a7c66d9479471d6c6c358dfc0d75a5fdf60d4c->enter($__internal_fbb1bba943a63e73f7d2f804d2a7c66d9479471d6c6c358dfc0d75a5fdf60d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:delete.html.twig"));

        $__internal_14401d9d65acd3bb3c7260b04e75ca531a6e671d5e2c53e8c7b1844f37841992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14401d9d65acd3bb3c7260b04e75ca531a6e671d5e2c53e8c7b1844f37841992->enter($__internal_14401d9d65acd3bb3c7260b04e75ca531a6e671d5e2c53e8c7b1844f37841992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbb1bba943a63e73f7d2f804d2a7c66d9479471d6c6c358dfc0d75a5fdf60d4c->leave($__internal_fbb1bba943a63e73f7d2f804d2a7c66d9479471d6c6c358dfc0d75a5fdf60d4c_prof);

        
        $__internal_14401d9d65acd3bb3c7260b04e75ca531a6e671d5e2c53e8c7b1844f37841992->leave($__internal_14401d9d65acd3bb3c7260b04e75ca531a6e671d5e2c53e8c7b1844f37841992_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2451a69c7afc820020cf727511cc42d01dc3cfe79db8171ef7d61d5566e4d3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2451a69c7afc820020cf727511cc42d01dc3cfe79db8171ef7d61d5566e4d3bf->enter($__internal_2451a69c7afc820020cf727511cc42d01dc3cfe79db8171ef7d61d5566e4d3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08527361bdae023d1b63cd7eda106a7d930a997d1acbd9a6d0a68485fe15cd00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08527361bdae023d1b63cd7eda106a7d930a997d1acbd9a6d0a68485fe15cd00->enter($__internal_08527361bdae023d1b63cd7eda106a7d930a997d1acbd9a6d0a68485fe15cd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_08527361bdae023d1b63cd7eda106a7d930a997d1acbd9a6d0a68485fe15cd00->leave($__internal_08527361bdae023d1b63cd7eda106a7d930a997d1acbd9a6d0a68485fe15cd00_prof);

        
        $__internal_2451a69c7afc820020cf727511cc42d01dc3cfe79db8171ef7d61d5566e4d3bf->leave($__internal_2451a69c7afc820020cf727511cc42d01dc3cfe79db8171ef7d61d5566e4d3bf_prof);

    }

    // line 7
    public function block_bonbers_platform_body($context, array $blocks = array())
    {
        $__internal_05127175ba9dda2d11eac649f9c443488bea03ed3e15732d4f893eb35851175f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05127175ba9dda2d11eac649f9c443488bea03ed3e15732d4f893eb35851175f->enter($__internal_05127175ba9dda2d11eac649f9c443488bea03ed3e15732d4f893eb35851175f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        $__internal_ef88840d0bcd9e3cf43f046705153b6033312381a0af799dfd935ec783015650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef88840d0bcd9e3cf43f046705153b6033312381a0af799dfd935ec783015650->enter($__internal_ef88840d0bcd9e3cf43f046705153b6033312381a0af799dfd935ec783015650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        // line 8
        echo "
  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 12, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 16
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 16, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 17, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    ";
        // line 22
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 24
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), 'rest');
        echo "
  </form>

";
        
        $__internal_ef88840d0bcd9e3cf43f046705153b6033312381a0af799dfd935ec783015650->leave($__internal_ef88840d0bcd9e3cf43f046705153b6033312381a0af799dfd935ec783015650_prof);

        
        $__internal_05127175ba9dda2d11eac649f9c443488bea03ed3e15732d4f893eb35851175f->leave($__internal_05127175ba9dda2d11eac649f9c443488bea03ed3e15732d4f893eb35851175f_prof);

    }

    public function getTemplateName()
    {
        return "BONBERSPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  96 => 22,  89 => 17,  84 => 16,  78 => 12,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BONBERSPlatformBundle::layout.html.twig\" %}

{% block title %}
  Supprimer une annonce - {{ parent() }}
{% endblock %}

{% block bonbers_platform_body %}

  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"{{ advert.title }}\" ?
  </p>

  {# On met l'id de l'annonce dans la route de l'action du formulaire #}
  <form action=\"{{ path('bonbers_platform_delete', {'id': advert.id}) }}\" method=\"post\">
    <a href=\"{{ path('bonbers_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
  </form>

{% endblock %}
", "BONBERSPlatformBundle:Advert:delete.html.twig", "/var/www/html/symfonyStart/src/BONBERS/PlatformBundle/Resources/views/Advert/delete.html.twig");
    }
}
