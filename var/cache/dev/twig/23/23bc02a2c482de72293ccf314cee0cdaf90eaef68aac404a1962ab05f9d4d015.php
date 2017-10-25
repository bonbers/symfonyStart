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
        $__internal_8f68622fdeda9297639bf25d1f4e46b3e8c4e00680a2b6c90916354465e0a146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f68622fdeda9297639bf25d1f4e46b3e8c4e00680a2b6c90916354465e0a146->enter($__internal_8f68622fdeda9297639bf25d1f4e46b3e8c4e00680a2b6c90916354465e0a146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:edit.html.twig"));

        $__internal_3f95c3e4041c3aa6c469f5d2304e5d671de02f825900cdb536baf25419607ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f95c3e4041c3aa6c469f5d2304e5d671de02f825900cdb536baf25419607ff2->enter($__internal_3f95c3e4041c3aa6c469f5d2304e5d671de02f825900cdb536baf25419607ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f68622fdeda9297639bf25d1f4e46b3e8c4e00680a2b6c90916354465e0a146->leave($__internal_8f68622fdeda9297639bf25d1f4e46b3e8c4e00680a2b6c90916354465e0a146_prof);

        
        $__internal_3f95c3e4041c3aa6c469f5d2304e5d671de02f825900cdb536baf25419607ff2->leave($__internal_3f95c3e4041c3aa6c469f5d2304e5d671de02f825900cdb536baf25419607ff2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eac92babac47a116a7a098ddd58c5807d01fb31f88a187bc0f50290347ad5043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac92babac47a116a7a098ddd58c5807d01fb31f88a187bc0f50290347ad5043->enter($__internal_eac92babac47a116a7a098ddd58c5807d01fb31f88a187bc0f50290347ad5043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_516c3a44b5118d7499b09f8f83ed08972bbc15f9e244e967cb2a6ab409f219d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516c3a44b5118d7499b09f8f83ed08972bbc15f9e244e967cb2a6ab409f219d4->enter($__internal_516c3a44b5118d7499b09f8f83ed08972bbc15f9e244e967cb2a6ab409f219d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo " Modifier une annonce- ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_516c3a44b5118d7499b09f8f83ed08972bbc15f9e244e967cb2a6ab409f219d4->leave($__internal_516c3a44b5118d7499b09f8f83ed08972bbc15f9e244e967cb2a6ab409f219d4_prof);

        
        $__internal_eac92babac47a116a7a098ddd58c5807d01fb31f88a187bc0f50290347ad5043->leave($__internal_eac92babac47a116a7a098ddd58c5807d01fb31f88a187bc0f50290347ad5043_prof);

    }

    // line 7
    public function block_bonbers_platform_body($context, array $blocks = array())
    {
        $__internal_aa42cd8be811befb2db625d6c2539e31f0a0d15fa9f403c44763c320a537157e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa42cd8be811befb2db625d6c2539e31f0a0d15fa9f403c44763c320a537157e->enter($__internal_aa42cd8be811befb2db625d6c2539e31f0a0d15fa9f403c44763c320a537157e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        $__internal_9b520d38473736f67e0bbf939dc73f734f3425743d38e25434eb96f21e08df12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b520d38473736f67e0bbf939dc73f734f3425743d38e25434eb96f21e08df12->enter($__internal_9b520d38473736f67e0bbf939dc73f734f3425743d38e25434eb96f21e08df12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

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
        
        $__internal_9b520d38473736f67e0bbf939dc73f734f3425743d38e25434eb96f21e08df12->leave($__internal_9b520d38473736f67e0bbf939dc73f734f3425743d38e25434eb96f21e08df12_prof);

        
        $__internal_aa42cd8be811befb2db625d6c2539e31f0a0d15fa9f403c44763c320a537157e->leave($__internal_aa42cd8be811befb2db625d6c2539e31f0a0d15fa9f403c44763c320a537157e_prof);

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
