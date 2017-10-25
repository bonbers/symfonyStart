<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4712205dfb6cddc1995f48f7ee811c3276c72e08ee198c6fb6ffbcc84b2d5834 extends Twig_Template
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
        $__internal_8f263a929e8d6a6ecff1a1c17e807e3a642d8541e24ac50b7e66c6528a4ed5da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f263a929e8d6a6ecff1a1c17e807e3a642d8541e24ac50b7e66c6528a4ed5da->enter($__internal_8f263a929e8d6a6ecff1a1c17e807e3a642d8541e24ac50b7e66c6528a4ed5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_02c32affbee1553e1f14a328ee84e108ea7106fa5b3de7a71a94a4b0ffa14c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c32affbee1553e1f14a328ee84e108ea7106fa5b3de7a71a94a4b0ffa14c92->enter($__internal_02c32affbee1553e1f14a328ee84e108ea7106fa5b3de7a71a94a4b0ffa14c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_8f263a929e8d6a6ecff1a1c17e807e3a642d8541e24ac50b7e66c6528a4ed5da->leave($__internal_8f263a929e8d6a6ecff1a1c17e807e3a642d8541e24ac50b7e66c6528a4ed5da_prof);

        
        $__internal_02c32affbee1553e1f14a328ee84e108ea7106fa5b3de7a71a94a4b0ffa14c92->leave($__internal_02c32affbee1553e1f14a328ee84e108ea7106fa5b3de7a71a94a4b0ffa14c92_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
