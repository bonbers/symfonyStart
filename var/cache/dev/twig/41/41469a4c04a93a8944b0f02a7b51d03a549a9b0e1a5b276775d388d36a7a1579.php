<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e13f3861bc71d8c4b5514afbc6cae9b512064554515a6ac7644b5f079506a67f extends Twig_Template
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
        $__internal_e371416efd6fc41b2f9070ca9aa9693218317fd9e8e1474e096ed9ab2c0b6a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e371416efd6fc41b2f9070ca9aa9693218317fd9e8e1474e096ed9ab2c0b6a2c->enter($__internal_e371416efd6fc41b2f9070ca9aa9693218317fd9e8e1474e096ed9ab2c0b6a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f4da5f0711d9cd7624fbb038aa38d54709547e90692e28ea13803eb8b90a12fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4da5f0711d9cd7624fbb038aa38d54709547e90692e28ea13803eb8b90a12fc->enter($__internal_f4da5f0711d9cd7624fbb038aa38d54709547e90692e28ea13803eb8b90a12fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e371416efd6fc41b2f9070ca9aa9693218317fd9e8e1474e096ed9ab2c0b6a2c->leave($__internal_e371416efd6fc41b2f9070ca9aa9693218317fd9e8e1474e096ed9ab2c0b6a2c_prof);

        
        $__internal_f4da5f0711d9cd7624fbb038aa38d54709547e90692e28ea13803eb8b90a12fc->leave($__internal_f4da5f0711d9cd7624fbb038aa38d54709547e90692e28ea13803eb8b90a12fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
