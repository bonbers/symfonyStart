<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6200124103c646875a206e41441c8730fd87661d90e6cf35d84388946e03cfd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77ca7ed68d971b2620ea96fd4d32f05b092786173eb47c22764ef8173640246c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ca7ed68d971b2620ea96fd4d32f05b092786173eb47c22764ef8173640246c->enter($__internal_77ca7ed68d971b2620ea96fd4d32f05b092786173eb47c22764ef8173640246c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_6e4d5b06440ba96662583162f3c59b368f3849c4ef7df94212385b20dbd28799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4d5b06440ba96662583162f3c59b368f3849c4ef7df94212385b20dbd28799->enter($__internal_6e4d5b06440ba96662583162f3c59b368f3849c4ef7df94212385b20dbd28799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77ca7ed68d971b2620ea96fd4d32f05b092786173eb47c22764ef8173640246c->leave($__internal_77ca7ed68d971b2620ea96fd4d32f05b092786173eb47c22764ef8173640246c_prof);

        
        $__internal_6e4d5b06440ba96662583162f3c59b368f3849c4ef7df94212385b20dbd28799->leave($__internal_6e4d5b06440ba96662583162f3c59b368f3849c4ef7df94212385b20dbd28799_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcaadab428a795da7d9818f9101b29c42200936d2003cfbae01e27a79f83a0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcaadab428a795da7d9818f9101b29c42200936d2003cfbae01e27a79f83a0c3->enter($__internal_bcaadab428a795da7d9818f9101b29c42200936d2003cfbae01e27a79f83a0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2eadfa2480eac0057108296b4826a5558479e9e9c786d6fe726fc73d02bcbce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2eadfa2480eac0057108296b4826a5558479e9e9c786d6fe726fc73d02bcbce->enter($__internal_f2eadfa2480eac0057108296b4826a5558479e9e9c786d6fe726fc73d02bcbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f2eadfa2480eac0057108296b4826a5558479e9e9c786d6fe726fc73d02bcbce->leave($__internal_f2eadfa2480eac0057108296b4826a5558479e9e9c786d6fe726fc73d02bcbce_prof);

        
        $__internal_bcaadab428a795da7d9818f9101b29c42200936d2003cfbae01e27a79f83a0c3->leave($__internal_bcaadab428a795da7d9818f9101b29c42200936d2003cfbae01e27a79f83a0c3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0cd63c37e93ffff122609c243053d404de8c270353f43dd37c012a0a0d5c72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0cd63c37e93ffff122609c243053d404de8c270353f43dd37c012a0a0d5c72e->enter($__internal_d0cd63c37e93ffff122609c243053d404de8c270353f43dd37c012a0a0d5c72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc9632981a0dc77682607a1da81169edc3da42a033d2f648876cffce0928cc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9632981a0dc77682607a1da81169edc3da42a033d2f648876cffce0928cc36->enter($__internal_cc9632981a0dc77682607a1da81169edc3da42a033d2f648876cffce0928cc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cc9632981a0dc77682607a1da81169edc3da42a033d2f648876cffce0928cc36->leave($__internal_cc9632981a0dc77682607a1da81169edc3da42a033d2f648876cffce0928cc36_prof);

        
        $__internal_d0cd63c37e93ffff122609c243053d404de8c270353f43dd37c012a0a0d5c72e->leave($__internal_d0cd63c37e93ffff122609c243053d404de8c270353f43dd37c012a0a0d5c72e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
