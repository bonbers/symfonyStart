<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3c176af0ecb79a274a82a320dd5e598d0fa02c06d9bfdde38b5897e371d7d31d extends Twig_Template
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
        $__internal_c51c54ce0b6fa640cfd8470fce7828c76813a0ab89d60eac5a19500a9de830d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51c54ce0b6fa640cfd8470fce7828c76813a0ab89d60eac5a19500a9de830d4->enter($__internal_c51c54ce0b6fa640cfd8470fce7828c76813a0ab89d60eac5a19500a9de830d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f085d289fb80a6953c7a79685c6c02472cf3033523454a8a10aeea9bcb6b7099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f085d289fb80a6953c7a79685c6c02472cf3033523454a8a10aeea9bcb6b7099->enter($__internal_f085d289fb80a6953c7a79685c6c02472cf3033523454a8a10aeea9bcb6b7099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c51c54ce0b6fa640cfd8470fce7828c76813a0ab89d60eac5a19500a9de830d4->leave($__internal_c51c54ce0b6fa640cfd8470fce7828c76813a0ab89d60eac5a19500a9de830d4_prof);

        
        $__internal_f085d289fb80a6953c7a79685c6c02472cf3033523454a8a10aeea9bcb6b7099->leave($__internal_f085d289fb80a6953c7a79685c6c02472cf3033523454a8a10aeea9bcb6b7099_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
