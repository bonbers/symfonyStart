<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1f4665378d1086612636858000d474f9c6bf7b1e95dfd6a8d2b6de9d7571f91c extends Twig_Template
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
        $__internal_c0c1f83bd2d4f627af0748694e44404752f1169f9ad5a9e9b6bf9d9c37e702aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c1f83bd2d4f627af0748694e44404752f1169f9ad5a9e9b6bf9d9c37e702aa->enter($__internal_c0c1f83bd2d4f627af0748694e44404752f1169f9ad5a9e9b6bf9d9c37e702aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_20113535a416b8a1f918c2e063dbe0bb0d211fbd1dd78d498a393d235a409f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20113535a416b8a1f918c2e063dbe0bb0d211fbd1dd78d498a393d235a409f53->enter($__internal_20113535a416b8a1f918c2e063dbe0bb0d211fbd1dd78d498a393d235a409f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c0c1f83bd2d4f627af0748694e44404752f1169f9ad5a9e9b6bf9d9c37e702aa->leave($__internal_c0c1f83bd2d4f627af0748694e44404752f1169f9ad5a9e9b6bf9d9c37e702aa_prof);

        
        $__internal_20113535a416b8a1f918c2e063dbe0bb0d211fbd1dd78d498a393d235a409f53->leave($__internal_20113535a416b8a1f918c2e063dbe0bb0d211fbd1dd78d498a393d235a409f53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
