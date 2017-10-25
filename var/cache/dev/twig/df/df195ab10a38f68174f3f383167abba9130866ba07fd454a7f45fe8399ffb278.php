<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_35fe61666411fb9e55d2340caf4f0b2f1bea780a0430c51285866967c0a351fa extends Twig_Template
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
        $__internal_3ca50842851fccf76a8005c6d7ab05df4170ab2506da05cf90b7d3bff313a149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca50842851fccf76a8005c6d7ab05df4170ab2506da05cf90b7d3bff313a149->enter($__internal_3ca50842851fccf76a8005c6d7ab05df4170ab2506da05cf90b7d3bff313a149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_379b676233a8ef1d0a00cc49299dafd863313d504db4329510783ce92f59b026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379b676233a8ef1d0a00cc49299dafd863313d504db4329510783ce92f59b026->enter($__internal_379b676233a8ef1d0a00cc49299dafd863313d504db4329510783ce92f59b026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_3ca50842851fccf76a8005c6d7ab05df4170ab2506da05cf90b7d3bff313a149->leave($__internal_3ca50842851fccf76a8005c6d7ab05df4170ab2506da05cf90b7d3bff313a149_prof);

        
        $__internal_379b676233a8ef1d0a00cc49299dafd863313d504db4329510783ce92f59b026->leave($__internal_379b676233a8ef1d0a00cc49299dafd863313d504db4329510783ce92f59b026_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
