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
        $__internal_e4708b79ca3c2b631a73727f0d37bd0bfd575ee7ac90848c5fd437066aebe908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4708b79ca3c2b631a73727f0d37bd0bfd575ee7ac90848c5fd437066aebe908->enter($__internal_e4708b79ca3c2b631a73727f0d37bd0bfd575ee7ac90848c5fd437066aebe908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_81e995df4c153f5bf9dc639efd1c4a23ec08af31f9a5496d7157bb39048c2efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e995df4c153f5bf9dc639efd1c4a23ec08af31f9a5496d7157bb39048c2efc->enter($__internal_81e995df4c153f5bf9dc639efd1c4a23ec08af31f9a5496d7157bb39048c2efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4708b79ca3c2b631a73727f0d37bd0bfd575ee7ac90848c5fd437066aebe908->leave($__internal_e4708b79ca3c2b631a73727f0d37bd0bfd575ee7ac90848c5fd437066aebe908_prof);

        
        $__internal_81e995df4c153f5bf9dc639efd1c4a23ec08af31f9a5496d7157bb39048c2efc->leave($__internal_81e995df4c153f5bf9dc639efd1c4a23ec08af31f9a5496d7157bb39048c2efc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_259ef96f9b8c824da292705ef33599bc1283ba14d740ead8224e1f039dcb88c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259ef96f9b8c824da292705ef33599bc1283ba14d740ead8224e1f039dcb88c3->enter($__internal_259ef96f9b8c824da292705ef33599bc1283ba14d740ead8224e1f039dcb88c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ac30c6b657e577f6ecc9a83d56b879ae523e9e4211288d2e9362295d6f34b250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac30c6b657e577f6ecc9a83d56b879ae523e9e4211288d2e9362295d6f34b250->enter($__internal_ac30c6b657e577f6ecc9a83d56b879ae523e9e4211288d2e9362295d6f34b250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ac30c6b657e577f6ecc9a83d56b879ae523e9e4211288d2e9362295d6f34b250->leave($__internal_ac30c6b657e577f6ecc9a83d56b879ae523e9e4211288d2e9362295d6f34b250_prof);

        
        $__internal_259ef96f9b8c824da292705ef33599bc1283ba14d740ead8224e1f039dcb88c3->leave($__internal_259ef96f9b8c824da292705ef33599bc1283ba14d740ead8224e1f039dcb88c3_prof);

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
