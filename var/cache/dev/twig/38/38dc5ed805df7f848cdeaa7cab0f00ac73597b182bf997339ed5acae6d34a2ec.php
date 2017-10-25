<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_a8fe31633b9cd1e0d8dfdf67957bf2215e880f4eb9ac23dc01494eb68caecbb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b977b48f8ccd0d294e53c6395910555a5c95103a59accca032a81984f2a7cd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b977b48f8ccd0d294e53c6395910555a5c95103a59accca032a81984f2a7cd1f->enter($__internal_b977b48f8ccd0d294e53c6395910555a5c95103a59accca032a81984f2a7cd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_9620069ac73c40bfbeb2f3ebe9824ec636b498030e1cdf5c16b92dc0426a9d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9620069ac73c40bfbeb2f3ebe9824ec636b498030e1cdf5c16b92dc0426a9d32->enter($__internal_9620069ac73c40bfbeb2f3ebe9824ec636b498030e1cdf5c16b92dc0426a9d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b977b48f8ccd0d294e53c6395910555a5c95103a59accca032a81984f2a7cd1f->leave($__internal_b977b48f8ccd0d294e53c6395910555a5c95103a59accca032a81984f2a7cd1f_prof);

        
        $__internal_9620069ac73c40bfbeb2f3ebe9824ec636b498030e1cdf5c16b92dc0426a9d32->leave($__internal_9620069ac73c40bfbeb2f3ebe9824ec636b498030e1cdf5c16b92dc0426a9d32_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
