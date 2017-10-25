<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8006b7f8fc2624f01b3de6d52decc5ff3e8fa8050fc8435cce232d4e154540ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_c3bf36c3c70a0db33f35423ef500e7899b7d19c17c18a288e31f8fe6c33e14f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3bf36c3c70a0db33f35423ef500e7899b7d19c17c18a288e31f8fe6c33e14f9->enter($__internal_c3bf36c3c70a0db33f35423ef500e7899b7d19c17c18a288e31f8fe6c33e14f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c0b92768a17a4b5230c5d52b1fa27fd938591effb26e1f3b1df92c5815336f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b92768a17a4b5230c5d52b1fa27fd938591effb26e1f3b1df92c5815336f96->enter($__internal_c0b92768a17a4b5230c5d52b1fa27fd938591effb26e1f3b1df92c5815336f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3bf36c3c70a0db33f35423ef500e7899b7d19c17c18a288e31f8fe6c33e14f9->leave($__internal_c3bf36c3c70a0db33f35423ef500e7899b7d19c17c18a288e31f8fe6c33e14f9_prof);

        
        $__internal_c0b92768a17a4b5230c5d52b1fa27fd938591effb26e1f3b1df92c5815336f96->leave($__internal_c0b92768a17a4b5230c5d52b1fa27fd938591effb26e1f3b1df92c5815336f96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e399ad09dc7bd8e48003cef853ba1fcf6c58088b94d740e9342d6de2c602dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e399ad09dc7bd8e48003cef853ba1fcf6c58088b94d740e9342d6de2c602dcc->enter($__internal_0e399ad09dc7bd8e48003cef853ba1fcf6c58088b94d740e9342d6de2c602dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_28ec6c37a9f74fba22abcecd485fb98a2c399c845030bdb36643250e9f59715b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ec6c37a9f74fba22abcecd485fb98a2c399c845030bdb36643250e9f59715b->enter($__internal_28ec6c37a9f74fba22abcecd485fb98a2c399c845030bdb36643250e9f59715b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_28ec6c37a9f74fba22abcecd485fb98a2c399c845030bdb36643250e9f59715b->leave($__internal_28ec6c37a9f74fba22abcecd485fb98a2c399c845030bdb36643250e9f59715b_prof);

        
        $__internal_0e399ad09dc7bd8e48003cef853ba1fcf6c58088b94d740e9342d6de2c602dcc->leave($__internal_0e399ad09dc7bd8e48003cef853ba1fcf6c58088b94d740e9342d6de2c602dcc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87c6e5926ece9079c91004d61fb819d19b7d5d00eac936c201107396c4e7a438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c6e5926ece9079c91004d61fb819d19b7d5d00eac936c201107396c4e7a438->enter($__internal_87c6e5926ece9079c91004d61fb819d19b7d5d00eac936c201107396c4e7a438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7d07c0a17fc3a55115c020dd7613433fb952e91040be4c67533ea266bb743db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d07c0a17fc3a55115c020dd7613433fb952e91040be4c67533ea266bb743db8->enter($__internal_7d07c0a17fc3a55115c020dd7613433fb952e91040be4c67533ea266bb743db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7d07c0a17fc3a55115c020dd7613433fb952e91040be4c67533ea266bb743db8->leave($__internal_7d07c0a17fc3a55115c020dd7613433fb952e91040be4c67533ea266bb743db8_prof);

        
        $__internal_87c6e5926ece9079c91004d61fb819d19b7d5d00eac936c201107396c4e7a438->leave($__internal_87c6e5926ece9079c91004d61fb819d19b7d5d00eac936c201107396c4e7a438_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c89d9d714333d6f96339c836d8ef5c5bf47310fd026cf6ea78225a9e90922098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c89d9d714333d6f96339c836d8ef5c5bf47310fd026cf6ea78225a9e90922098->enter($__internal_c89d9d714333d6f96339c836d8ef5c5bf47310fd026cf6ea78225a9e90922098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6df3c07f966a723356852f58646e1645849e8523b430ba911ef9e9ceb14776f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df3c07f966a723356852f58646e1645849e8523b430ba911ef9e9ceb14776f3->enter($__internal_6df3c07f966a723356852f58646e1645849e8523b430ba911ef9e9ceb14776f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6df3c07f966a723356852f58646e1645849e8523b430ba911ef9e9ceb14776f3->leave($__internal_6df3c07f966a723356852f58646e1645849e8523b430ba911ef9e9ceb14776f3_prof);

        
        $__internal_c89d9d714333d6f96339c836d8ef5c5bf47310fd026cf6ea78225a9e90922098->leave($__internal_c89d9d714333d6f96339c836d8ef5c5bf47310fd026cf6ea78225a9e90922098_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
