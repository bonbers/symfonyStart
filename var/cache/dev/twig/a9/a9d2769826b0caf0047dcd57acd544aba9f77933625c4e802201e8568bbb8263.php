<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_38e138bf7d58895f73346239e9572c235d7f8fad7deb0e1d81dcc6adc965a026 extends Twig_Template
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
        $__internal_248483388a49b0ba696edbd75c541dc9b1cce6fdb95c7272d3e594f0a01d3c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248483388a49b0ba696edbd75c541dc9b1cce6fdb95c7272d3e594f0a01d3c55->enter($__internal_248483388a49b0ba696edbd75c541dc9b1cce6fdb95c7272d3e594f0a01d3c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_5a0f820d7c2a5095cecf497cb57f7f43669f8a251333c1be7f30944d7214672c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0f820d7c2a5095cecf497cb57f7f43669f8a251333c1be7f30944d7214672c->enter($__internal_5a0f820d7c2a5095cecf497cb57f7f43669f8a251333c1be7f30944d7214672c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_248483388a49b0ba696edbd75c541dc9b1cce6fdb95c7272d3e594f0a01d3c55->leave($__internal_248483388a49b0ba696edbd75c541dc9b1cce6fdb95c7272d3e594f0a01d3c55_prof);

        
        $__internal_5a0f820d7c2a5095cecf497cb57f7f43669f8a251333c1be7f30944d7214672c->leave($__internal_5a0f820d7c2a5095cecf497cb57f7f43669f8a251333c1be7f30944d7214672c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
