<?php

/* BONBERSPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_cdefa595d3bc2426e1f0fabc37f158984b7e9367ceff389cb68c3876d88e13ee extends Twig_Template
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
        $__internal_dd8eec9c5cdfb980beea42f6df4fe5d736f3e686040b52ec17dbc00e5fdd5040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8eec9c5cdfb980beea42f6df4fe5d736f3e686040b52ec17dbc00e5fdd5040->enter($__internal_dd8eec9c5cdfb980beea42f6df4fe5d736f3e686040b52ec17dbc00e5fdd5040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:menu.html.twig"));

        $__internal_4acfbb1c0d565c7cdb5ee555d9f1b8f245aefe1f6341a1f16884d4897b28783a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acfbb1c0d565c7cdb5ee555d9f1b8f245aefe1f6341a1f16884d4897b28783a->enter($__internal_4acfbb1c0d565c7cdb5ee555d9f1b8f245aefe1f6341a1f16884d4897b28783a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:menu.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 2, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 3
            echo "    <li>
      <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>
";
        
        $__internal_dd8eec9c5cdfb980beea42f6df4fe5d736f3e686040b52ec17dbc00e5fdd5040->leave($__internal_dd8eec9c5cdfb980beea42f6df4fe5d736f3e686040b52ec17dbc00e5fdd5040_prof);

        
        $__internal_4acfbb1c0d565c7cdb5ee555d9f1b8f245aefe1f6341a1f16884d4897b28783a->leave($__internal_4acfbb1c0d565c7cdb5ee555d9f1b8f245aefe1f6341a1f16884d4897b28783a_prof);

    }

    public function getTemplateName()
    {
        return "BONBERSPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  39 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-pills nav-stacked\">
  {% for advert in listAdverts %}
    <li>
      <a href=\"{{ path('bonbers_platform_view', {'id': advert.id}) }}\">
        {{ advert.title }}
      </a>
    </li>
  {% endfor %}
</ul>
", "BONBERSPlatformBundle:Advert:menu.html.twig", "/var/www/html/symfonyStart/src/BONBERS/PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
