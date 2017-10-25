<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_a0d85f2b977c08022a314ca662dc978dd1358503863b8921f3e0006b6970e0b9 extends Twig_Template
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
        $__internal_70309daaaa794e7c78012bf883ed94c12833e7b240bb4f068b29c26457e36296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70309daaaa794e7c78012bf883ed94c12833e7b240bb4f068b29c26457e36296->enter($__internal_70309daaaa794e7c78012bf883ed94c12833e7b240bb4f068b29c26457e36296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_a41dfa5209d6278e219969da8b3c2be720f1a9b93ed8a6a18e61f78ff36c15d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41dfa5209d6278e219969da8b3c2be720f1a9b93ed8a6a18e61f78ff36c15d7->enter($__internal_a41dfa5209d6278e219969da8b3c2be720f1a9b93ed8a6a18e61f78ff36c15d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_70309daaaa794e7c78012bf883ed94c12833e7b240bb4f068b29c26457e36296->leave($__internal_70309daaaa794e7c78012bf883ed94c12833e7b240bb4f068b29c26457e36296_prof);

        
        $__internal_a41dfa5209d6278e219969da8b3c2be720f1a9b93ed8a6a18e61f78ff36c15d7->leave($__internal_a41dfa5209d6278e219969da8b3c2be720f1a9b93ed8a6a18e61f78ff36c15d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
