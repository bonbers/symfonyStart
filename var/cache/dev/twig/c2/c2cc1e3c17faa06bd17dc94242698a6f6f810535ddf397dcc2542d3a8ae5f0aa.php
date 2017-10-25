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
        $__internal_fc4597425b8f7231c3d0e134eb5be4d62fb2b508b087aaa169d0e5a9fbbc7be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4597425b8f7231c3d0e134eb5be4d62fb2b508b087aaa169d0e5a9fbbc7be0->enter($__internal_fc4597425b8f7231c3d0e134eb5be4d62fb2b508b087aaa169d0e5a9fbbc7be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_069b1a0801b8c8aea5d23c95ac6142eafb6ed5dad8bac99f7e7396b549311c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069b1a0801b8c8aea5d23c95ac6142eafb6ed5dad8bac99f7e7396b549311c21->enter($__internal_069b1a0801b8c8aea5d23c95ac6142eafb6ed5dad8bac99f7e7396b549311c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc4597425b8f7231c3d0e134eb5be4d62fb2b508b087aaa169d0e5a9fbbc7be0->leave($__internal_fc4597425b8f7231c3d0e134eb5be4d62fb2b508b087aaa169d0e5a9fbbc7be0_prof);

        
        $__internal_069b1a0801b8c8aea5d23c95ac6142eafb6ed5dad8bac99f7e7396b549311c21->leave($__internal_069b1a0801b8c8aea5d23c95ac6142eafb6ed5dad8bac99f7e7396b549311c21_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4713edfc0632a9e03afd4825a77046ea982f7cbe78036a58ded9bb86611d2de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4713edfc0632a9e03afd4825a77046ea982f7cbe78036a58ded9bb86611d2de6->enter($__internal_4713edfc0632a9e03afd4825a77046ea982f7cbe78036a58ded9bb86611d2de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8067c77a70624a05e8d1b808e6a7fce5b07411a66c90771727487e94d5d6316d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8067c77a70624a05e8d1b808e6a7fce5b07411a66c90771727487e94d5d6316d->enter($__internal_8067c77a70624a05e8d1b808e6a7fce5b07411a66c90771727487e94d5d6316d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8067c77a70624a05e8d1b808e6a7fce5b07411a66c90771727487e94d5d6316d->leave($__internal_8067c77a70624a05e8d1b808e6a7fce5b07411a66c90771727487e94d5d6316d_prof);

        
        $__internal_4713edfc0632a9e03afd4825a77046ea982f7cbe78036a58ded9bb86611d2de6->leave($__internal_4713edfc0632a9e03afd4825a77046ea982f7cbe78036a58ded9bb86611d2de6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb38bbac1cc5d3562c535baa7bfab582e28f5833ff577b22d446526315573c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb38bbac1cc5d3562c535baa7bfab582e28f5833ff577b22d446526315573c7a->enter($__internal_cb38bbac1cc5d3562c535baa7bfab582e28f5833ff577b22d446526315573c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cff589abd604caa28ba02f26d6d0389b8c02002143290a6c33c4931fabe8ac98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff589abd604caa28ba02f26d6d0389b8c02002143290a6c33c4931fabe8ac98->enter($__internal_cff589abd604caa28ba02f26d6d0389b8c02002143290a6c33c4931fabe8ac98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cff589abd604caa28ba02f26d6d0389b8c02002143290a6c33c4931fabe8ac98->leave($__internal_cff589abd604caa28ba02f26d6d0389b8c02002143290a6c33c4931fabe8ac98_prof);

        
        $__internal_cb38bbac1cc5d3562c535baa7bfab582e28f5833ff577b22d446526315573c7a->leave($__internal_cb38bbac1cc5d3562c535baa7bfab582e28f5833ff577b22d446526315573c7a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85eab8f09fef38a4a8b2c5db2b7a99433a12f2d5de75546bdcb8415a019f7674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85eab8f09fef38a4a8b2c5db2b7a99433a12f2d5de75546bdcb8415a019f7674->enter($__internal_85eab8f09fef38a4a8b2c5db2b7a99433a12f2d5de75546bdcb8415a019f7674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f4a328797bc9af85545fdcb78d9b667e0884971a41a57b501ace4afe8a344a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a328797bc9af85545fdcb78d9b667e0884971a41a57b501ace4afe8a344a5b->enter($__internal_f4a328797bc9af85545fdcb78d9b667e0884971a41a57b501ace4afe8a344a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f4a328797bc9af85545fdcb78d9b667e0884971a41a57b501ace4afe8a344a5b->leave($__internal_f4a328797bc9af85545fdcb78d9b667e0884971a41a57b501ace4afe8a344a5b_prof);

        
        $__internal_85eab8f09fef38a4a8b2c5db2b7a99433a12f2d5de75546bdcb8415a019f7674->leave($__internal_85eab8f09fef38a4a8b2c5db2b7a99433a12f2d5de75546bdcb8415a019f7674_prof);

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
