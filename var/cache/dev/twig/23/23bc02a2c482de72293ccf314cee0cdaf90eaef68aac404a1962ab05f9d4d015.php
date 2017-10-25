<?php

/* BONBERSPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_bace8df1bba356462e8cb3718c9dedc3ebe4467b5be34227784184f05d20aeab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BONBERSPlatformBundle::layout.html.twig", "BONBERSPlatformBundle:Advert:edit.html.twig", 1);
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
        $__internal_e9938bd3f7f19a4312f45ef79b49f4916da3bdb0a5644704bf775f32b0632914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9938bd3f7f19a4312f45ef79b49f4916da3bdb0a5644704bf775f32b0632914->enter($__internal_e9938bd3f7f19a4312f45ef79b49f4916da3bdb0a5644704bf775f32b0632914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:edit.html.twig"));

        $__internal_90e1cccf5ab3b9d754aa41001825f521384d4d8400944df39e16b7128c2aaa6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e1cccf5ab3b9d754aa41001825f521384d4d8400944df39e16b7128c2aaa6d->enter($__internal_90e1cccf5ab3b9d754aa41001825f521384d4d8400944df39e16b7128c2aaa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9938bd3f7f19a4312f45ef79b49f4916da3bdb0a5644704bf775f32b0632914->leave($__internal_e9938bd3f7f19a4312f45ef79b49f4916da3bdb0a5644704bf775f32b0632914_prof);

        
        $__internal_90e1cccf5ab3b9d754aa41001825f521384d4d8400944df39e16b7128c2aaa6d->leave($__internal_90e1cccf5ab3b9d754aa41001825f521384d4d8400944df39e16b7128c2aaa6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_09a7e5b8e44465b018887fc81f5cd945e014ca8fe8e38bde1cb9a967695bb833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a7e5b8e44465b018887fc81f5cd945e014ca8fe8e38bde1cb9a967695bb833->enter($__internal_09a7e5b8e44465b018887fc81f5cd945e014ca8fe8e38bde1cb9a967695bb833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_305fb675f55f96735c33438407144be681c6bec5323b92d43c99fcc12f25b232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305fb675f55f96735c33438407144be681c6bec5323b92d43c99fcc12f25b232->enter($__internal_305fb675f55f96735c33438407144be681c6bec5323b92d43c99fcc12f25b232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo " Modifier une annonce- ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_305fb675f55f96735c33438407144be681c6bec5323b92d43c99fcc12f25b232->leave($__internal_305fb675f55f96735c33438407144be681c6bec5323b92d43c99fcc12f25b232_prof);

        
        $__internal_09a7e5b8e44465b018887fc81f5cd945e014ca8fe8e38bde1cb9a967695bb833->leave($__internal_09a7e5b8e44465b018887fc81f5cd945e014ca8fe8e38bde1cb9a967695bb833_prof);

    }

    // line 7
    public function block_bonbers_platform_body($context, array $blocks = array())
    {
        $__internal_c0dd30874b82e1ce2b0e9d19bd5d294634e2793efcfa09229bdf26fcf48fd324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0dd30874b82e1ce2b0e9d19bd5d294634e2793efcfa09229bdf26fcf48fd324->enter($__internal_c0dd30874b82e1ce2b0e9d19bd5d294634e2793efcfa09229bdf26fcf48fd324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        $__internal_911e33f3d29e2db7686c0aabe17db56601ecf8307183be0f2b51e7cd4597c884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911e33f3d29e2db7686c0aabe17db56601ecf8307183be0f2b51e7cd4597c884->enter($__internal_911e33f3d29e2db7686c0aabe17db56601ecf8307183be0f2b51e7cd4597c884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        // line 8
        echo "    
    <h2>Modifier une annonce</h2>
    
    ";
        // line 11
        echo twig_include($this->env, $context, "BONBERSPlatformBundle:Advert:form.html.twig");
        echo "
    
    <p>
        Vous éditez une annonce qui existe déjà, merci de garder le contenu de base !
    </p>
    
    <p>
        <a href='";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 18, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "' class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>
    ";
        
        $__internal_911e33f3d29e2db7686c0aabe17db56601ecf8307183be0f2b51e7cd4597c884->leave($__internal_911e33f3d29e2db7686c0aabe17db56601ecf8307183be0f2b51e7cd4597c884_prof);

        
        $__internal_c0dd30874b82e1ce2b0e9d19bd5d294634e2793efcfa09229bdf26fcf48fd324->leave($__internal_c0dd30874b82e1ce2b0e9d19bd5d294634e2793efcfa09229bdf26fcf48fd324_prof);

    }

    public function getTemplateName()
    {
        return "BONBERSPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BONBERSPlatformBundle::layout.html.twig\" %}

{% block title %}
 Modifier une annonce- {{ parent() }}
{% endblock %}

{% block bonbers_platform_body %}
    
    <h2>Modifier une annonce</h2>
    
    {{ include(\"BONBERSPlatformBundle:Advert:form.html.twig\") }}
    
    <p>
        Vous éditez une annonce qui existe déjà, merci de garder le contenu de base !
    </p>
    
    <p>
        <a href='{{ path(\"bonbers_platform_view\", {\"id\" : advert.id}) }}' class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>
    {% endblock %}
", "BONBERSPlatformBundle:Advert:edit.html.twig", "/var/www/html/symfonyStart/src/BONBERS/PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
