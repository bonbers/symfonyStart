<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_8006b7f8fc2624f01b3de6d52decc5ff3e8fa8050fc8435cce232d4e154540ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ebb1a708008631344414ad7663214b6662b3de30aa38406b06dbf2818b1fd3e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb1a708008631344414ad7663214b6662b3de30aa38406b06dbf2818b1fd3e9->enter($__internal_ebb1a708008631344414ad7663214b6662b3de30aa38406b06dbf2818b1fd3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_214314e3f77102c4c9a1c115854af81525781b186fe2312b01180460bfe3cec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214314e3f77102c4c9a1c115854af81525781b186fe2312b01180460bfe3cec3->enter($__internal_214314e3f77102c4c9a1c115854af81525781b186fe2312b01180460bfe3cec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebb1a708008631344414ad7663214b6662b3de30aa38406b06dbf2818b1fd3e9->leave($__internal_ebb1a708008631344414ad7663214b6662b3de30aa38406b06dbf2818b1fd3e9_prof);

        
        $__internal_214314e3f77102c4c9a1c115854af81525781b186fe2312b01180460bfe3cec3->leave($__internal_214314e3f77102c4c9a1c115854af81525781b186fe2312b01180460bfe3cec3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc1a6ed47cea2bf64677564fb4a685f6e51cae50145d621261758bd95d0f20f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc1a6ed47cea2bf64677564fb4a685f6e51cae50145d621261758bd95d0f20f6->enter($__internal_dc1a6ed47cea2bf64677564fb4a685f6e51cae50145d621261758bd95d0f20f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b10123cc42d6460a02605e7f1cf11033fd997eddb3b6e34db215f254022c9e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10123cc42d6460a02605e7f1cf11033fd997eddb3b6e34db215f254022c9e60->enter($__internal_b10123cc42d6460a02605e7f1cf11033fd997eddb3b6e34db215f254022c9e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b10123cc42d6460a02605e7f1cf11033fd997eddb3b6e34db215f254022c9e60->leave($__internal_b10123cc42d6460a02605e7f1cf11033fd997eddb3b6e34db215f254022c9e60_prof);

        
        $__internal_dc1a6ed47cea2bf64677564fb4a685f6e51cae50145d621261758bd95d0f20f6->leave($__internal_dc1a6ed47cea2bf64677564fb4a685f6e51cae50145d621261758bd95d0f20f6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af3c5341ac2fe2b5c86f33d0dab66b1fd73abd955e47a2da21fdb6fada2db3ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3c5341ac2fe2b5c86f33d0dab66b1fd73abd955e47a2da21fdb6fada2db3ab->enter($__internal_af3c5341ac2fe2b5c86f33d0dab66b1fd73abd955e47a2da21fdb6fada2db3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8833c41c3b88d936b8c9d279502d2a4e95c4b27b126328c346af3289646bd978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8833c41c3b88d936b8c9d279502d2a4e95c4b27b126328c346af3289646bd978->enter($__internal_8833c41c3b88d936b8c9d279502d2a4e95c4b27b126328c346af3289646bd978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8833c41c3b88d936b8c9d279502d2a4e95c4b27b126328c346af3289646bd978->leave($__internal_8833c41c3b88d936b8c9d279502d2a4e95c4b27b126328c346af3289646bd978_prof);

        
        $__internal_af3c5341ac2fe2b5c86f33d0dab66b1fd73abd955e47a2da21fdb6fada2db3ab->leave($__internal_af3c5341ac2fe2b5c86f33d0dab66b1fd73abd955e47a2da21fdb6fada2db3ab_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b76dc9a71405c76c4ba64dfe5ca5c0ffdd4e65aec11ec580dc4664aee67f1a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76dc9a71405c76c4ba64dfe5ca5c0ffdd4e65aec11ec580dc4664aee67f1a41->enter($__internal_b76dc9a71405c76c4ba64dfe5ca5c0ffdd4e65aec11ec580dc4664aee67f1a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c50f9dbd282fac21a327ced65e529a24f43ab196d6bab964e28052ebf2a4ebbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50f9dbd282fac21a327ced65e529a24f43ab196d6bab964e28052ebf2a4ebbb->enter($__internal_c50f9dbd282fac21a327ced65e529a24f43ab196d6bab964e28052ebf2a4ebbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_c50f9dbd282fac21a327ced65e529a24f43ab196d6bab964e28052ebf2a4ebbb->leave($__internal_c50f9dbd282fac21a327ced65e529a24f43ab196d6bab964e28052ebf2a4ebbb_prof);

        
        $__internal_b76dc9a71405c76c4ba64dfe5ca5c0ffdd4e65aec11ec580dc4664aee67f1a41->leave($__internal_b76dc9a71405c76c4ba64dfe5ca5c0ffdd4e65aec11ec580dc4664aee67f1a41_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
