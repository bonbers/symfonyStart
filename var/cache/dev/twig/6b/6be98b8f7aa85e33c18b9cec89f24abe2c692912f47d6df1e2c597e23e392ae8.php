<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e8ebfcfb421ee490c5ca4895b2ff016ff836db7989cfa46aa054e5ef341e4270 extends Twig_Template
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
        $__internal_260e13d16809fd5487a134227a770e0c7a7eae18213ae1f06c91a1a2bc2834a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_260e13d16809fd5487a134227a770e0c7a7eae18213ae1f06c91a1a2bc2834a5->enter($__internal_260e13d16809fd5487a134227a770e0c7a7eae18213ae1f06c91a1a2bc2834a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_fca7e5c2543acfa4776a0c4972356afc6fef3107ee0a9d3b0a623955055448a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca7e5c2543acfa4776a0c4972356afc6fef3107ee0a9d3b0a623955055448a0->enter($__internal_fca7e5c2543acfa4776a0c4972356afc6fef3107ee0a9d3b0a623955055448a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_260e13d16809fd5487a134227a770e0c7a7eae18213ae1f06c91a1a2bc2834a5->leave($__internal_260e13d16809fd5487a134227a770e0c7a7eae18213ae1f06c91a1a2bc2834a5_prof);

        
        $__internal_fca7e5c2543acfa4776a0c4972356afc6fef3107ee0a9d3b0a623955055448a0->leave($__internal_fca7e5c2543acfa4776a0c4972356afc6fef3107ee0a9d3b0a623955055448a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
