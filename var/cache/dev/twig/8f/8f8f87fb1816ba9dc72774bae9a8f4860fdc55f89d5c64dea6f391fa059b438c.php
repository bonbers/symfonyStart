<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_59376f8f17caee83a6c462eebaa666862a05768aae5e8a1e520390be4274954d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20f8b55d361ca12cb81349a22e7e131e8fb568bdc00e1870365375db5a4329d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f8b55d361ca12cb81349a22e7e131e8fb568bdc00e1870365375db5a4329d1->enter($__internal_20f8b55d361ca12cb81349a22e7e131e8fb568bdc00e1870365375db5a4329d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_fda855cec4e734e2a8cd3b78dcb1869c17cfe617a1c2e39609e3f223fd2486ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda855cec4e734e2a8cd3b78dcb1869c17cfe617a1c2e39609e3f223fd2486ca->enter($__internal_fda855cec4e734e2a8cd3b78dcb1869c17cfe617a1c2e39609e3f223fd2486ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20f8b55d361ca12cb81349a22e7e131e8fb568bdc00e1870365375db5a4329d1->leave($__internal_20f8b55d361ca12cb81349a22e7e131e8fb568bdc00e1870365375db5a4329d1_prof);

        
        $__internal_fda855cec4e734e2a8cd3b78dcb1869c17cfe617a1c2e39609e3f223fd2486ca->leave($__internal_fda855cec4e734e2a8cd3b78dcb1869c17cfe617a1c2e39609e3f223fd2486ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d6b61e6cd50abe4ba58339444f5bc78bc72fd68800395148718195c814ac711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6b61e6cd50abe4ba58339444f5bc78bc72fd68800395148718195c814ac711->enter($__internal_2d6b61e6cd50abe4ba58339444f5bc78bc72fd68800395148718195c814ac711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_10b0c1e712075729d14be0ed1bc745b9036244619592b7635f8ea4f1583ceefd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b0c1e712075729d14be0ed1bc745b9036244619592b7635f8ea4f1583ceefd->enter($__internal_10b0c1e712075729d14be0ed1bc745b9036244619592b7635f8ea4f1583ceefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_10b0c1e712075729d14be0ed1bc745b9036244619592b7635f8ea4f1583ceefd->leave($__internal_10b0c1e712075729d14be0ed1bc745b9036244619592b7635f8ea4f1583ceefd_prof);

        
        $__internal_2d6b61e6cd50abe4ba58339444f5bc78bc72fd68800395148718195c814ac711->leave($__internal_2d6b61e6cd50abe4ba58339444f5bc78bc72fd68800395148718195c814ac711_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bae5804937c6816753cea056ff04bc878cbbd33225071163982dd54900d7515f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae5804937c6816753cea056ff04bc878cbbd33225071163982dd54900d7515f->enter($__internal_bae5804937c6816753cea056ff04bc878cbbd33225071163982dd54900d7515f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34dc7445917cfb5133d0448787a38c62265774ffe633317cdf15da2474b41422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34dc7445917cfb5133d0448787a38c62265774ffe633317cdf15da2474b41422->enter($__internal_34dc7445917cfb5133d0448787a38c62265774ffe633317cdf15da2474b41422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_34dc7445917cfb5133d0448787a38c62265774ffe633317cdf15da2474b41422->leave($__internal_34dc7445917cfb5133d0448787a38c62265774ffe633317cdf15da2474b41422_prof);

        
        $__internal_bae5804937c6816753cea056ff04bc878cbbd33225071163982dd54900d7515f->leave($__internal_bae5804937c6816753cea056ff04bc878cbbd33225071163982dd54900d7515f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
