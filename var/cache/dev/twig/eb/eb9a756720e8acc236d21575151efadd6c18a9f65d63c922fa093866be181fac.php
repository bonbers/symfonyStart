<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_3768ca429458b08c7d85e7a758dcd852afbc5483bc342c4a813755dd8aa6e1ea extends Twig_Template
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
        $__internal_22a34a65195b9daf354a779c07c3ccf1d9cbe596848d906b85f1fb4082098ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a34a65195b9daf354a779c07c3ccf1d9cbe596848d906b85f1fb4082098ed5->enter($__internal_22a34a65195b9daf354a779c07c3ccf1d9cbe596848d906b85f1fb4082098ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f6ac6b4df61b9d00702986294cf4939b08e4a20062115e5afce95230a14a63e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ac6b4df61b9d00702986294cf4939b08e4a20062115e5afce95230a14a63e9->enter($__internal_f6ac6b4df61b9d00702986294cf4939b08e4a20062115e5afce95230a14a63e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_22a34a65195b9daf354a779c07c3ccf1d9cbe596848d906b85f1fb4082098ed5->leave($__internal_22a34a65195b9daf354a779c07c3ccf1d9cbe596848d906b85f1fb4082098ed5_prof);

        
        $__internal_f6ac6b4df61b9d00702986294cf4939b08e4a20062115e5afce95230a14a63e9->leave($__internal_f6ac6b4df61b9d00702986294cf4939b08e4a20062115e5afce95230a14a63e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
