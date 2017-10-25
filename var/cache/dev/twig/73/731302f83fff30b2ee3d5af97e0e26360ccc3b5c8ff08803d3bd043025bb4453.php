<?php

/* BONBERSPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_7f7bab5daf7ae0b34d67b5f8ff77e8c5889156129f326404e70a1c6f5cd961cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BONBERSPlatformBundle::layout.html.twig", "BONBERSPlatformBundle:Advert:delete.html.twig", 1);
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
        $__internal_0de34f3b553ddc58f18b97281109bf40cc88883e12b10489e7711e5a9d7ffc68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de34f3b553ddc58f18b97281109bf40cc88883e12b10489e7711e5a9d7ffc68->enter($__internal_0de34f3b553ddc58f18b97281109bf40cc88883e12b10489e7711e5a9d7ffc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:delete.html.twig"));

        $__internal_7d650f169b9b2aa7c484cf26c5fc4db02ca9966fdd53458d038b3446ba2d1411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d650f169b9b2aa7c484cf26c5fc4db02ca9966fdd53458d038b3446ba2d1411->enter($__internal_7d650f169b9b2aa7c484cf26c5fc4db02ca9966fdd53458d038b3446ba2d1411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0de34f3b553ddc58f18b97281109bf40cc88883e12b10489e7711e5a9d7ffc68->leave($__internal_0de34f3b553ddc58f18b97281109bf40cc88883e12b10489e7711e5a9d7ffc68_prof);

        
        $__internal_7d650f169b9b2aa7c484cf26c5fc4db02ca9966fdd53458d038b3446ba2d1411->leave($__internal_7d650f169b9b2aa7c484cf26c5fc4db02ca9966fdd53458d038b3446ba2d1411_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75f3a1954dfbe4ffdcd3123673bb4b26ea9fc666b3018126305e347e4fc52905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f3a1954dfbe4ffdcd3123673bb4b26ea9fc666b3018126305e347e4fc52905->enter($__internal_75f3a1954dfbe4ffdcd3123673bb4b26ea9fc666b3018126305e347e4fc52905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2919b3420143c8bfd91bd274b7a95243daf66393441b1fb9d56d7ee3a02db2a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2919b3420143c8bfd91bd274b7a95243daf66393441b1fb9d56d7ee3a02db2a8->enter($__internal_2919b3420143c8bfd91bd274b7a95243daf66393441b1fb9d56d7ee3a02db2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2919b3420143c8bfd91bd274b7a95243daf66393441b1fb9d56d7ee3a02db2a8->leave($__internal_2919b3420143c8bfd91bd274b7a95243daf66393441b1fb9d56d7ee3a02db2a8_prof);

        
        $__internal_75f3a1954dfbe4ffdcd3123673bb4b26ea9fc666b3018126305e347e4fc52905->leave($__internal_75f3a1954dfbe4ffdcd3123673bb4b26ea9fc666b3018126305e347e4fc52905_prof);

    }

    // line 7
    public function block_bonbers_platform_body($context, array $blocks = array())
    {
        $__internal_58547c3196d378eef1b8b49b0dabcb02d2c4a9f8df29c4b173edb875a822c68f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58547c3196d378eef1b8b49b0dabcb02d2c4a9f8df29c4b173edb875a822c68f->enter($__internal_58547c3196d378eef1b8b49b0dabcb02d2c4a9f8df29c4b173edb875a822c68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        $__internal_1ae55219e44011a925835bee705ee595f815d492c0bcff1ead03937299f5601d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae55219e44011a925835bee705ee595f815d492c0bcff1ead03937299f5601d->enter($__internal_1ae55219e44011a925835bee705ee595f815d492c0bcff1ead03937299f5601d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        // line 8
        echo "
  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 12, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 16
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 16, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 17, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    ";
        // line 22
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 24
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), 'rest');
        echo "
  </form>

";
        
        $__internal_1ae55219e44011a925835bee705ee595f815d492c0bcff1ead03937299f5601d->leave($__internal_1ae55219e44011a925835bee705ee595f815d492c0bcff1ead03937299f5601d_prof);

        
        $__internal_58547c3196d378eef1b8b49b0dabcb02d2c4a9f8df29c4b173edb875a822c68f->leave($__internal_58547c3196d378eef1b8b49b0dabcb02d2c4a9f8df29c4b173edb875a822c68f_prof);

    }

    public function getTemplateName()
    {
        return "BONBERSPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  96 => 22,  89 => 17,  84 => 16,  78 => 12,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BONBERSPlatformBundle::layout.html.twig\" %}

{% block title %}
  Supprimer une annonce - {{ parent() }}
{% endblock %}

{% block bonbers_platform_body %}

  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"{{ advert.title }}\" ?
  </p>

  {# On met l'id de l'annonce dans la route de l'action du formulaire #}
  <form action=\"{{ path('bonbers_platform_delete', {'id': advert.id}) }}\" method=\"post\">
    <a href=\"{{ path('bonbers_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
  </form>

{% endblock %}
", "BONBERSPlatformBundle:Advert:delete.html.twig", "/var/www/html/symfonyStart/src/BONBERS/PlatformBundle/Resources/views/Advert/delete.html.twig");
    }
}
