<?php

/* BONBERSPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_a6dca65eb52f46dee693762670f7383e5f0cb2a7ac3aae89dc17f70db6655117 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BONBERSPlatformBundle::layout.html.twig", "BONBERSPlatformBundle:Advert:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bonbers_platform_body' => array($this, 'block_bonbers_platform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BONBERSPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf010d9e7b81b481b3bc10f6d02c39721e590ce74966c1f528e982dd1497a689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf010d9e7b81b481b3bc10f6d02c39721e590ce74966c1f528e982dd1497a689->enter($__internal_cf010d9e7b81b481b3bc10f6d02c39721e590ce74966c1f528e982dd1497a689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:index.html.twig"));

        $__internal_acbfe80295e0f2090295e2629a765fcc05bd2660c69a5a08489ee18df9172a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbfe80295e0f2090295e2629a765fcc05bd2660c69a5a08489ee18df9172a5b->enter($__internal_acbfe80295e0f2090295e2629a765fcc05bd2660c69a5a08489ee18df9172a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf010d9e7b81b481b3bc10f6d02c39721e590ce74966c1f528e982dd1497a689->leave($__internal_cf010d9e7b81b481b3bc10f6d02c39721e590ce74966c1f528e982dd1497a689_prof);

        
        $__internal_acbfe80295e0f2090295e2629a765fcc05bd2660c69a5a08489ee18df9172a5b->leave($__internal_acbfe80295e0f2090295e2629a765fcc05bd2660c69a5a08489ee18df9172a5b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb9f0f0372254cedd125e22b0842d68a3c3618a72dbf9321bdae04ee70653724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb9f0f0372254cedd125e22b0842d68a3c3618a72dbf9321bdae04ee70653724->enter($__internal_cb9f0f0372254cedd125e22b0842d68a3c3618a72dbf9321bdae04ee70653724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4cd50e25b355e2268fd39e8b988de84e17d1ceb96bbba5d42dfd27efc5c7032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4cd50e25b355e2268fd39e8b988de84e17d1ceb96bbba5d42dfd27efc5c7032->enter($__internal_f4cd50e25b355e2268fd39e8b988de84e17d1ceb96bbba5d42dfd27efc5c7032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f4cd50e25b355e2268fd39e8b988de84e17d1ceb96bbba5d42dfd27efc5c7032->leave($__internal_f4cd50e25b355e2268fd39e8b988de84e17d1ceb96bbba5d42dfd27efc5c7032_prof);

        
        $__internal_cb9f0f0372254cedd125e22b0842d68a3c3618a72dbf9321bdae04ee70653724->leave($__internal_cb9f0f0372254cedd125e22b0842d68a3c3618a72dbf9321bdae04ee70653724_prof);

    }

    // line 7
    public function block_bonbers_platform_body($context, array $blocks = array())
    {
        $__internal_43c49fb99777b75093bfbf4ddce47aad978b86b2696ab2b2b5e3605bd5b348f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c49fb99777b75093bfbf4ddce47aad978b86b2696ab2b2b5e3605bd5b348f2->enter($__internal_43c49fb99777b75093bfbf4ddce47aad978b86b2696ab2b2b5e3605bd5b348f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        $__internal_760ed41e81d86ba90d9f1715bbc8687ff69765afc575675b3d426b2feb2fae25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760ed41e81d86ba90d9f1715bbc8687ff69765afc575675b3d426b2feb2fae25->enter($__internal_760ed41e81d86ba90d9f1715bbc8687ff69765afc575675b3d426b2feb2fae25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        // line 8
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 12, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 13
            echo "      <li>
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </ul>

  <ul class=\"pagination\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbPages" does not exist.', 26, $this->getSourceContext()); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 27
            echo "      <li";
            if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </ul>

";
        
        $__internal_760ed41e81d86ba90d9f1715bbc8687ff69765afc575675b3d426b2feb2fae25->leave($__internal_760ed41e81d86ba90d9f1715bbc8687ff69765afc575675b3d426b2feb2fae25_prof);

        
        $__internal_43c49fb99777b75093bfbf4ddce47aad978b86b2696ab2b2b5e3605bd5b348f2->leave($__internal_43c49fb99777b75093bfbf4ddce47aad978b86b2696ab2b2b5e3605bd5b348f2_prof);

    }

    public function getTemplateName()
    {
        return "BONBERSPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 31,  130 => 28,  123 => 27,  119 => 26,  114 => 23,  107 => 21,  99 => 18,  95 => 17,  90 => 15,  86 => 14,  83 => 13,  78 => 12,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BONBERSPlatformBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block bonbers_platform_body %}

  <h2>Liste des annonces</h2>

  <ul>
    {% for advert in listAdverts %}
      <li>
        <a href=\"{{ path('bonbers_platform_view', {'id': advert.id}) }}\">
          {{ advert.title }}
        </a>
        par {{ advert.author }},
        le {{ advert.date|date('d/m/Y') }}
      </li>
    {% else %}
      <li>Pas (encore !) d'annonces</li>
    {% endfor %}
  </ul>

  <ul class=\"pagination\">
    {% for p in range(1, nbPages) %}
      <li{% if p == page %} class=\"active\"{% endif %}>
        <a href=\"{{ path('bonbers_platform_home', {'page': p}) }}\">{{ p }}</a>
      </li>
    {% endfor %}
  </ul>

{% endblock %}
", "BONBERSPlatformBundle:Advert:index.html.twig", "/var/www/html/symfonyStart/src/BONBERS/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
