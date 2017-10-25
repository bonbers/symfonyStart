<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_001ec319e56b05cdf9c9542561587dc367de6b139dec9406243e318a64bdc777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f012bebdeeea8fdb74a7b661fdc40738f734d876baa5455d7aaf497479ccc988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f012bebdeeea8fdb74a7b661fdc40738f734d876baa5455d7aaf497479ccc988->enter($__internal_f012bebdeeea8fdb74a7b661fdc40738f734d876baa5455d7aaf497479ccc988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5ee07cf1a690069d738a66544fb1d3d391e78a5852fc5af7bd4cc1b1f8855b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee07cf1a690069d738a66544fb1d3d391e78a5852fc5af7bd4cc1b1f8855b2b->enter($__internal_5ee07cf1a690069d738a66544fb1d3d391e78a5852fc5af7bd4cc1b1f8855b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f012bebdeeea8fdb74a7b661fdc40738f734d876baa5455d7aaf497479ccc988->leave($__internal_f012bebdeeea8fdb74a7b661fdc40738f734d876baa5455d7aaf497479ccc988_prof);

        
        $__internal_5ee07cf1a690069d738a66544fb1d3d391e78a5852fc5af7bd4cc1b1f8855b2b->leave($__internal_5ee07cf1a690069d738a66544fb1d3d391e78a5852fc5af7bd4cc1b1f8855b2b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec78f90bcdc7340288f4c2e5a0d152f6f95a2f1d017150a03ab61b56f32cfc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec78f90bcdc7340288f4c2e5a0d152f6f95a2f1d017150a03ab61b56f32cfc42->enter($__internal_ec78f90bcdc7340288f4c2e5a0d152f6f95a2f1d017150a03ab61b56f32cfc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eb0bae0b62acf0326f8bc8975401f077b918335e08bed8cefe115b384cdd86f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0bae0b62acf0326f8bc8975401f077b918335e08bed8cefe115b384cdd86f8->enter($__internal_eb0bae0b62acf0326f8bc8975401f077b918335e08bed8cefe115b384cdd86f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_eb0bae0b62acf0326f8bc8975401f077b918335e08bed8cefe115b384cdd86f8->leave($__internal_eb0bae0b62acf0326f8bc8975401f077b918335e08bed8cefe115b384cdd86f8_prof);

        
        $__internal_ec78f90bcdc7340288f4c2e5a0d152f6f95a2f1d017150a03ab61b56f32cfc42->leave($__internal_ec78f90bcdc7340288f4c2e5a0d152f6f95a2f1d017150a03ab61b56f32cfc42_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
