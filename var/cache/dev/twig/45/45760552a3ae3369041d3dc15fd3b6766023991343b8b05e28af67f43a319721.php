<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a29320387f3844f07cc9ca110dbf3e93bc89b3c661f0bbfaf38dee0519199faf extends Twig_Template
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
        $__internal_3bf8d8e8d35e7dd9ddd5e138e1d548523a96a7b31ea6fe51e09423a2f51936f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf8d8e8d35e7dd9ddd5e138e1d548523a96a7b31ea6fe51e09423a2f51936f5->enter($__internal_3bf8d8e8d35e7dd9ddd5e138e1d548523a96a7b31ea6fe51e09423a2f51936f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_174a324e1e548c0dba7e7963f5a4e7f761f34b3ce1c9437019388bdce5a9aeee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174a324e1e548c0dba7e7963f5a4e7f761f34b3ce1c9437019388bdce5a9aeee->enter($__internal_174a324e1e548c0dba7e7963f5a4e7f761f34b3ce1c9437019388bdce5a9aeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3bf8d8e8d35e7dd9ddd5e138e1d548523a96a7b31ea6fe51e09423a2f51936f5->leave($__internal_3bf8d8e8d35e7dd9ddd5e138e1d548523a96a7b31ea6fe51e09423a2f51936f5_prof);

        
        $__internal_174a324e1e548c0dba7e7963f5a4e7f761f34b3ce1c9437019388bdce5a9aeee->leave($__internal_174a324e1e548c0dba7e7963f5a4e7f761f34b3ce1c9437019388bdce5a9aeee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
