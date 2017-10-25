<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8f50df5ca895258440071ff40a9f0694794fb4770455fad446d4d5186e5f5d93 extends Twig_Template
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
        $__internal_190c4751c3c4eff9a8f7ef85aa604223ea7b63931a427e16d8cbdd495c984094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190c4751c3c4eff9a8f7ef85aa604223ea7b63931a427e16d8cbdd495c984094->enter($__internal_190c4751c3c4eff9a8f7ef85aa604223ea7b63931a427e16d8cbdd495c984094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_fb7046e42703a30829987e8727bb5f2ab5f19de48050d798448569797ef4d434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7046e42703a30829987e8727bb5f2ab5f19de48050d798448569797ef4d434->enter($__internal_fb7046e42703a30829987e8727bb5f2ab5f19de48050d798448569797ef4d434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_190c4751c3c4eff9a8f7ef85aa604223ea7b63931a427e16d8cbdd495c984094->leave($__internal_190c4751c3c4eff9a8f7ef85aa604223ea7b63931a427e16d8cbdd495c984094_prof);

        
        $__internal_fb7046e42703a30829987e8727bb5f2ab5f19de48050d798448569797ef4d434->leave($__internal_fb7046e42703a30829987e8727bb5f2ab5f19de48050d798448569797ef4d434_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
