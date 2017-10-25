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
        $__internal_c39d81915e7e2d21690e2c29303f5f067283994a1291e0c60970a5ff527d12de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39d81915e7e2d21690e2c29303f5f067283994a1291e0c60970a5ff527d12de->enter($__internal_c39d81915e7e2d21690e2c29303f5f067283994a1291e0c60970a5ff527d12de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:edit.html.twig"));

        $__internal_80b6f3db54f6a32242ff94c436e8582112ad1952a75b4cc1754afda6ea9612a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b6f3db54f6a32242ff94c436e8582112ad1952a75b4cc1754afda6ea9612a2->enter($__internal_80b6f3db54f6a32242ff94c436e8582112ad1952a75b4cc1754afda6ea9612a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c39d81915e7e2d21690e2c29303f5f067283994a1291e0c60970a5ff527d12de->leave($__internal_c39d81915e7e2d21690e2c29303f5f067283994a1291e0c60970a5ff527d12de_prof);

        
        $__internal_80b6f3db54f6a32242ff94c436e8582112ad1952a75b4cc1754afda6ea9612a2->leave($__internal_80b6f3db54f6a32242ff94c436e8582112ad1952a75b4cc1754afda6ea9612a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12b4314df8dbdb665adbecce0cf3b1aefc2e079635fe92de0036134c6b49e1d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b4314df8dbdb665adbecce0cf3b1aefc2e079635fe92de0036134c6b49e1d7->enter($__internal_12b4314df8dbdb665adbecce0cf3b1aefc2e079635fe92de0036134c6b49e1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2d0bb7bd0334c6f5e132d73e56ed92323542c75f4596ba228261bf4c970bced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d0bb7bd0334c6f5e132d73e56ed92323542c75f4596ba228261bf4c970bced->enter($__internal_b2d0bb7bd0334c6f5e132d73e56ed92323542c75f4596ba228261bf4c970bced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo " Modifier une annonce- ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b2d0bb7bd0334c6f5e132d73e56ed92323542c75f4596ba228261bf4c970bced->leave($__internal_b2d0bb7bd0334c6f5e132d73e56ed92323542c75f4596ba228261bf4c970bced_prof);

        
        $__internal_12b4314df8dbdb665adbecce0cf3b1aefc2e079635fe92de0036134c6b49e1d7->leave($__internal_12b4314df8dbdb665adbecce0cf3b1aefc2e079635fe92de0036134c6b49e1d7_prof);

    }

    // line 7
    public function block_bonbers_platform_body($context, array $blocks = array())
    {
        $__internal_46463c5fe771a2df6bec3391e3d6bda30b2e381705cbd22a792a27bd75e6d4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46463c5fe771a2df6bec3391e3d6bda30b2e381705cbd22a792a27bd75e6d4f1->enter($__internal_46463c5fe771a2df6bec3391e3d6bda30b2e381705cbd22a792a27bd75e6d4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        $__internal_ec6e844c3057b610b777c5b4ec44ac503ada4818b70eb5ede9a3d0dac23d3399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6e844c3057b610b777c5b4ec44ac503ada4818b70eb5ede9a3d0dac23d3399->enter($__internal_ec6e844c3057b610b777c5b4ec44ac503ada4818b70eb5ede9a3d0dac23d3399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

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
        
        $__internal_ec6e844c3057b610b777c5b4ec44ac503ada4818b70eb5ede9a3d0dac23d3399->leave($__internal_ec6e844c3057b610b777c5b4ec44ac503ada4818b70eb5ede9a3d0dac23d3399_prof);

        
        $__internal_46463c5fe771a2df6bec3391e3d6bda30b2e381705cbd22a792a27bd75e6d4f1->leave($__internal_46463c5fe771a2df6bec3391e3d6bda30b2e381705cbd22a792a27bd75e6d4f1_prof);

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
