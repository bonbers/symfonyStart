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
        $__internal_7cd605257ac4877c7173ad1c55bffba8f85497138b3649fa3063d12280dc5270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd605257ac4877c7173ad1c55bffba8f85497138b3649fa3063d12280dc5270->enter($__internal_7cd605257ac4877c7173ad1c55bffba8f85497138b3649fa3063d12280dc5270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:menu.html.twig"));

        $__internal_8d22670a56015f26839008d1d7c8d6ebb7d1bd9aa66c73a605e18d8b4ee7a78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d22670a56015f26839008d1d7c8d6ebb7d1bd9aa66c73a605e18d8b4ee7a78c->enter($__internal_8d22670a56015f26839008d1d7c8d6ebb7d1bd9aa66c73a605e18d8b4ee7a78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:menu.html.twig"));

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
        
        $__internal_7cd605257ac4877c7173ad1c55bffba8f85497138b3649fa3063d12280dc5270->leave($__internal_7cd605257ac4877c7173ad1c55bffba8f85497138b3649fa3063d12280dc5270_prof);

        
        $__internal_8d22670a56015f26839008d1d7c8d6ebb7d1bd9aa66c73a605e18d8b4ee7a78c->leave($__internal_8d22670a56015f26839008d1d7c8d6ebb7d1bd9aa66c73a605e18d8b4ee7a78c_prof);

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