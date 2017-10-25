<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4d59eba2bd53714ad793eb40792c12409c0df3ab2607b87a75b95460de681ccd extends Twig_Template
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
        $__internal_34e4c2041dc0427094eb56ca5804e777ed9aca7b799877421c75f951e4fc0460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e4c2041dc0427094eb56ca5804e777ed9aca7b799877421c75f951e4fc0460->enter($__internal_34e4c2041dc0427094eb56ca5804e777ed9aca7b799877421c75f951e4fc0460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_47f5aa5e6d4cc34016f733914ad712997eac33090d1b899f706adde6031eb57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f5aa5e6d4cc34016f733914ad712997eac33090d1b899f706adde6031eb57e->enter($__internal_47f5aa5e6d4cc34016f733914ad712997eac33090d1b899f706adde6031eb57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_34e4c2041dc0427094eb56ca5804e777ed9aca7b799877421c75f951e4fc0460->leave($__internal_34e4c2041dc0427094eb56ca5804e777ed9aca7b799877421c75f951e4fc0460_prof);

        
        $__internal_47f5aa5e6d4cc34016f733914ad712997eac33090d1b899f706adde6031eb57e->leave($__internal_47f5aa5e6d4cc34016f733914ad712997eac33090d1b899f706adde6031eb57e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
