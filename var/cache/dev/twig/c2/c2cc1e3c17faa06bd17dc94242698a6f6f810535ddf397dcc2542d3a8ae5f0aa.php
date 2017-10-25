<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_504b4c769556d0dec363c5a1ba46cd1ccd966e1af8d1a9aa5a5f438d60d29ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df53656cf414a1565945ca85106c178c3214a83f8581c2e70adce279cfdc4b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df53656cf414a1565945ca85106c178c3214a83f8581c2e70adce279cfdc4b52->enter($__internal_df53656cf414a1565945ca85106c178c3214a83f8581c2e70adce279cfdc4b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0b25410ba7dd02d566102d6aee63e985b44d5a8395abb007d4b6197ba1e9ae5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b25410ba7dd02d566102d6aee63e985b44d5a8395abb007d4b6197ba1e9ae5e->enter($__internal_0b25410ba7dd02d566102d6aee63e985b44d5a8395abb007d4b6197ba1e9ae5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df53656cf414a1565945ca85106c178c3214a83f8581c2e70adce279cfdc4b52->leave($__internal_df53656cf414a1565945ca85106c178c3214a83f8581c2e70adce279cfdc4b52_prof);

        
        $__internal_0b25410ba7dd02d566102d6aee63e985b44d5a8395abb007d4b6197ba1e9ae5e->leave($__internal_0b25410ba7dd02d566102d6aee63e985b44d5a8395abb007d4b6197ba1e9ae5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22a8c339ae532e17f34418dfcddf71ece6fe142531a0eee6aa4bb84ffb9b71c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a8c339ae532e17f34418dfcddf71ece6fe142531a0eee6aa4bb84ffb9b71c4->enter($__internal_22a8c339ae532e17f34418dfcddf71ece6fe142531a0eee6aa4bb84ffb9b71c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6e5986e9a511845bbff4bf009b0d4e015f0ac336001c5af2e2c46b70958d9d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5986e9a511845bbff4bf009b0d4e015f0ac336001c5af2e2c46b70958d9d4f->enter($__internal_6e5986e9a511845bbff4bf009b0d4e015f0ac336001c5af2e2c46b70958d9d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e5986e9a511845bbff4bf009b0d4e015f0ac336001c5af2e2c46b70958d9d4f->leave($__internal_6e5986e9a511845bbff4bf009b0d4e015f0ac336001c5af2e2c46b70958d9d4f_prof);

        
        $__internal_22a8c339ae532e17f34418dfcddf71ece6fe142531a0eee6aa4bb84ffb9b71c4->leave($__internal_22a8c339ae532e17f34418dfcddf71ece6fe142531a0eee6aa4bb84ffb9b71c4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab9dcba5a096eef0ac75fefbc817ed31b2f6e54dc11964f09ea073bce9afc097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9dcba5a096eef0ac75fefbc817ed31b2f6e54dc11964f09ea073bce9afc097->enter($__internal_ab9dcba5a096eef0ac75fefbc817ed31b2f6e54dc11964f09ea073bce9afc097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_935c582012bb8e88a345db224f3d33d8f1b7fe598a7accbde28b8aa61fa48d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935c582012bb8e88a345db224f3d33d8f1b7fe598a7accbde28b8aa61fa48d89->enter($__internal_935c582012bb8e88a345db224f3d33d8f1b7fe598a7accbde28b8aa61fa48d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_935c582012bb8e88a345db224f3d33d8f1b7fe598a7accbde28b8aa61fa48d89->leave($__internal_935c582012bb8e88a345db224f3d33d8f1b7fe598a7accbde28b8aa61fa48d89_prof);

        
        $__internal_ab9dcba5a096eef0ac75fefbc817ed31b2f6e54dc11964f09ea073bce9afc097->leave($__internal_ab9dcba5a096eef0ac75fefbc817ed31b2f6e54dc11964f09ea073bce9afc097_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d572607b68ef93bc52259691e839c54e2a532e84474cf9f5b30d26ab0c797dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d572607b68ef93bc52259691e839c54e2a532e84474cf9f5b30d26ab0c797dd->enter($__internal_5d572607b68ef93bc52259691e839c54e2a532e84474cf9f5b30d26ab0c797dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d7e0c279c2875f94cadf22060d25e8803576ac680d32bc0a8c66cd2189300abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e0c279c2875f94cadf22060d25e8803576ac680d32bc0a8c66cd2189300abf->enter($__internal_d7e0c279c2875f94cadf22060d25e8803576ac680d32bc0a8c66cd2189300abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d7e0c279c2875f94cadf22060d25e8803576ac680d32bc0a8c66cd2189300abf->leave($__internal_d7e0c279c2875f94cadf22060d25e8803576ac680d32bc0a8c66cd2189300abf_prof);

        
        $__internal_5d572607b68ef93bc52259691e839c54e2a532e84474cf9f5b30d26ab0c797dd->leave($__internal_5d572607b68ef93bc52259691e839c54e2a532e84474cf9f5b30d26ab0c797dd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
