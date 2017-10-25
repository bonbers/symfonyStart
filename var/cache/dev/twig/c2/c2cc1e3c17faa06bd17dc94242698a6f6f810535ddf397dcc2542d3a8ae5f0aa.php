<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_504b4c769556d0dec363c5a1ba46cd1ccd966e1af8d1a9aa5a5f438d60d29ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_544bfd6ec73b75aa646388723a7645286ad0f2a7ac7b7b879fa433184cbad4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544bfd6ec73b75aa646388723a7645286ad0f2a7ac7b7b879fa433184cbad4d8->enter($__internal_544bfd6ec73b75aa646388723a7645286ad0f2a7ac7b7b879fa433184cbad4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_5a96de429c8c8fd72a323a437f77caa453eb2377d4f7d257ab986d364c5cafec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a96de429c8c8fd72a323a437f77caa453eb2377d4f7d257ab986d364c5cafec->enter($__internal_5a96de429c8c8fd72a323a437f77caa453eb2377d4f7d257ab986d364c5cafec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_544bfd6ec73b75aa646388723a7645286ad0f2a7ac7b7b879fa433184cbad4d8->leave($__internal_544bfd6ec73b75aa646388723a7645286ad0f2a7ac7b7b879fa433184cbad4d8_prof);

        
        $__internal_5a96de429c8c8fd72a323a437f77caa453eb2377d4f7d257ab986d364c5cafec->leave($__internal_5a96de429c8c8fd72a323a437f77caa453eb2377d4f7d257ab986d364c5cafec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7350f49a78693862f9c74df7c89190a6e8bce7f70425b34929e10d09d046f4cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7350f49a78693862f9c74df7c89190a6e8bce7f70425b34929e10d09d046f4cc->enter($__internal_7350f49a78693862f9c74df7c89190a6e8bce7f70425b34929e10d09d046f4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b67c2a1fdf0e7c140cbe4263e25e6aac8a8711dac69accad0f748b2b34f39d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67c2a1fdf0e7c140cbe4263e25e6aac8a8711dac69accad0f748b2b34f39d83->enter($__internal_b67c2a1fdf0e7c140cbe4263e25e6aac8a8711dac69accad0f748b2b34f39d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b67c2a1fdf0e7c140cbe4263e25e6aac8a8711dac69accad0f748b2b34f39d83->leave($__internal_b67c2a1fdf0e7c140cbe4263e25e6aac8a8711dac69accad0f748b2b34f39d83_prof);

        
        $__internal_7350f49a78693862f9c74df7c89190a6e8bce7f70425b34929e10d09d046f4cc->leave($__internal_7350f49a78693862f9c74df7c89190a6e8bce7f70425b34929e10d09d046f4cc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4946ca4c4b5c0c6be4f9ede34fc95831ade0e44ae0fe31555979380c3a6250fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4946ca4c4b5c0c6be4f9ede34fc95831ade0e44ae0fe31555979380c3a6250fc->enter($__internal_4946ca4c4b5c0c6be4f9ede34fc95831ade0e44ae0fe31555979380c3a6250fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6d4f976307896ce150639259564fa580ef3d32a61351f92d6e4553cb472f577b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4f976307896ce150639259564fa580ef3d32a61351f92d6e4553cb472f577b->enter($__internal_6d4f976307896ce150639259564fa580ef3d32a61351f92d6e4553cb472f577b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d4f976307896ce150639259564fa580ef3d32a61351f92d6e4553cb472f577b->leave($__internal_6d4f976307896ce150639259564fa580ef3d32a61351f92d6e4553cb472f577b_prof);

        
        $__internal_4946ca4c4b5c0c6be4f9ede34fc95831ade0e44ae0fe31555979380c3a6250fc->leave($__internal_4946ca4c4b5c0c6be4f9ede34fc95831ade0e44ae0fe31555979380c3a6250fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_308526f346889d374c4c70221f80c036f0b5e66fd8ef14ca369653168e5ad53c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308526f346889d374c4c70221f80c036f0b5e66fd8ef14ca369653168e5ad53c->enter($__internal_308526f346889d374c4c70221f80c036f0b5e66fd8ef14ca369653168e5ad53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_10896546fcb2f14956d3487ac389b46b030169b07e5e7b9231f4b53a9add0a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10896546fcb2f14956d3487ac389b46b030169b07e5e7b9231f4b53a9add0a8f->enter($__internal_10896546fcb2f14956d3487ac389b46b030169b07e5e7b9231f4b53a9add0a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_10896546fcb2f14956d3487ac389b46b030169b07e5e7b9231f4b53a9add0a8f->leave($__internal_10896546fcb2f14956d3487ac389b46b030169b07e5e7b9231f4b53a9add0a8f_prof);

        
        $__internal_308526f346889d374c4c70221f80c036f0b5e66fd8ef14ca369653168e5ad53c->leave($__internal_308526f346889d374c4c70221f80c036f0b5e66fd8ef14ca369653168e5ad53c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
