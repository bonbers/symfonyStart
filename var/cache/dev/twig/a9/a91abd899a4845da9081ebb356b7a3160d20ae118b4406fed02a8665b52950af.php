<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2b689fc13bb5fa7f2db42fbbd5c896d1a83845ce448b6fa245cf6e77ac45d91e extends Twig_Template
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
        $__internal_e0f89cc8a8ef5a0ae2d8bdc7519c23bab0f53cc470bbe73519c75a108d43c2fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f89cc8a8ef5a0ae2d8bdc7519c23bab0f53cc470bbe73519c75a108d43c2fc->enter($__internal_e0f89cc8a8ef5a0ae2d8bdc7519c23bab0f53cc470bbe73519c75a108d43c2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_2e35e5af73390ab7fa57ac5687f6394765889f6a41db22cac6dec0f845165faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e35e5af73390ab7fa57ac5687f6394765889f6a41db22cac6dec0f845165faf->enter($__internal_2e35e5af73390ab7fa57ac5687f6394765889f6a41db22cac6dec0f845165faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_e0f89cc8a8ef5a0ae2d8bdc7519c23bab0f53cc470bbe73519c75a108d43c2fc->leave($__internal_e0f89cc8a8ef5a0ae2d8bdc7519c23bab0f53cc470bbe73519c75a108d43c2fc_prof);

        
        $__internal_2e35e5af73390ab7fa57ac5687f6394765889f6a41db22cac6dec0f845165faf->leave($__internal_2e35e5af73390ab7fa57ac5687f6394765889f6a41db22cac6dec0f845165faf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
