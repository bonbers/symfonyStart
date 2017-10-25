<?php

/* BONBERSPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_62ffc3ef5773e218c68477b93afd5ed9706c105101c609e1b9e0bb33e9ab0aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BONBERSPlatformBundle::layout.html.twig", "BONBERSPlatformBundle:Advert:view.html.twig", 1);
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
        $__internal_544293f39e09b65a4ca42962a31820fbe9e68a6b42a025da660fc0f6f8288a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544293f39e09b65a4ca42962a31820fbe9e68a6b42a025da660fc0f6f8288a1a->enter($__internal_544293f39e09b65a4ca42962a31820fbe9e68a6b42a025da660fc0f6f8288a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:view.html.twig"));

        $__internal_90de7f616ceb00403dbf44ff99e9c54b0ae812f3a086d314a19c94d6f9870375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90de7f616ceb00403dbf44ff99e9c54b0ae812f3a086d314a19c94d6f9870375->enter($__internal_90de7f616ceb00403dbf44ff99e9c54b0ae812f3a086d314a19c94d6f9870375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_544293f39e09b65a4ca42962a31820fbe9e68a6b42a025da660fc0f6f8288a1a->leave($__internal_544293f39e09b65a4ca42962a31820fbe9e68a6b42a025da660fc0f6f8288a1a_prof);

        
        $__internal_90de7f616ceb00403dbf44ff99e9c54b0ae812f3a086d314a19c94d6f9870375->leave($__internal_90de7f616ceb00403dbf44ff99e9c54b0ae812f3a086d314a19c94d6f9870375_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_becad90926b4cbb96d45ffb704925f35f9771f7cd3d8e206f538b146b46cfb8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_becad90926b4cbb96d45ffb704925f35f9771f7cd3d8e206f538b146b46cfb8d->enter($__internal_becad90926b4cbb96d45ffb704925f35f9771f7cd3d8e206f538b146b46cfb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2be93e89a9251a3c59d52dce671e83126745f714f89efeeabd873fdbcfdd9f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be93e89a9251a3c59d52dce671e83126745f714f89efeeabd873fdbcfdd9f02->enter($__internal_2be93e89a9251a3c59d52dce671e83126745f714f89efeeabd873fdbcfdd9f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2be93e89a9251a3c59d52dce671e83126745f714f89efeeabd873fdbcfdd9f02->leave($__internal_2be93e89a9251a3c59d52dce671e83126745f714f89efeeabd873fdbcfdd9f02_prof);

        
        $__internal_becad90926b4cbb96d45ffb704925f35f9771f7cd3d8e206f538b146b46cfb8d->leave($__internal_becad90926b4cbb96d45ffb704925f35f9771f7cd3d8e206f538b146b46cfb8d_prof);

    }

    // line 7
    public function block_bonbers_platform_body($context, array $blocks = array())
    {
        $__internal_c9135e6ebe0e3af13f90dda5a6ca1638798207fe174dd2e78a214a6f6f2b5144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9135e6ebe0e3af13f90dda5a6ca1638798207fe174dd2e78a214a6f6f2b5144->enter($__internal_c9135e6ebe0e3af13f90dda5a6ca1638798207fe174dd2e78a214a6f6f2b5144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        $__internal_d58bec5ecdf4f99917c83065ada2bf29ddb4090f943752e858caae6074619047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58bec5ecdf4f99917c83065ada2bf29ddb4090f943752e858caae6074619047->enter($__internal_d58bec5ecdf4f99917c83065ada2bf29ddb4090f943752e858caae6074619047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        // line 8
        echo "
  <div style=\"float: left; margin-right: 1em;\">
    ";
        // line 11
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 11, $this->getSourceContext()); })()), "image", array()))) {
            // line 12
            echo "      <img
        src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 13, $this->getSourceContext()); })()), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
        alt=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 14, $this->getSourceContext()); })()), "image", array()), "alt", array()), "html", null, true);
            echo "\"
        height=\"60\"
      />
    ";
        }
        // line 18
        echo "  </div>

  <h2>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 20, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 21, $this->getSourceContext()); })()), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 21, $this->getSourceContext()); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 24, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
  </div>

  ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 27, $this->getSourceContext()); })()), "categories", array()), "empty", array())) {
            // line 28
            echo "    <p>
      Cette annonce est parue dans les catégories suivantes :
      ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 30, $this->getSourceContext()); })()), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 32
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </p>
  ";
        }
        // line 35
        echo "
  ";
        // line 36
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) || array_key_exists("listAdvertSkills", $context) ? $context["listAdvertSkills"] : (function () { throw new Twig_Error_Runtime('Variable "listAdvertSkills" does not exist.', 36, $this->getSourceContext()); })())) > 0)) {
            // line 37
            echo "    <div>
      Cette annonce requiert les compétences suivantes :
      <ul>
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) || array_key_exists("listAdvertSkills", $context) ? $context["listAdvertSkills"] : (function () { throw new Twig_Error_Runtime('Variable "listAdvertSkills" does not exist.', 40, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 41
                echo "          <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      </ul>
    </div>
  ";
        }
        // line 46
        echo "
  <p>
    <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 52, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bonbers_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 56, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_d58bec5ecdf4f99917c83065ada2bf29ddb4090f943752e858caae6074619047->leave($__internal_d58bec5ecdf4f99917c83065ada2bf29ddb4090f943752e858caae6074619047_prof);

        
        $__internal_c9135e6ebe0e3af13f90dda5a6ca1638798207fe174dd2e78a214a6f6f2b5144->leave($__internal_c9135e6ebe0e3af13f90dda5a6ca1638798207fe174dd2e78a214a6f6f2b5144_prof);

    }

    public function getTemplateName()
    {
        return "BONBERSPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 56,  203 => 52,  196 => 48,  192 => 46,  187 => 43,  176 => 41,  172 => 40,  167 => 37,  165 => 36,  162 => 35,  158 => 33,  144 => 32,  138 => 31,  121 => 30,  117 => 28,  115 => 27,  109 => 24,  101 => 21,  97 => 20,  93 => 18,  86 => 14,  82 => 13,  79 => 12,  76 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BONBERSPlatformBundle::layout.html.twig\" %}

{% block title %}
  Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block bonbers_platform_body %}

  <div style=\"float: left; margin-right: 1em;\">
    {# On vérifie qu'une image soit bien associée à l'article #}
    {% if advert.image is not null %}
      <img
        src=\"{{ asset(advert.image.webPath) }}\"
        alt=\"{{ advert.image.alt }}\"
        height=\"60\"
      />
    {% endif %}
  </div>

  <h2>{{ advert.title }}</h2>
  <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

  <div class=\"well\">
    {{ advert.content }}
  </div>

  {% if not advert.categories.empty %}
    <p>
      Cette annonce est parue dans les catégories suivantes :
      {% for category in advert.categories %}
        {{ category.name }}{% if not loop.last %}, {% endif %}
      {% endfor %}
    </p>
  {% endif %}

  {% if listAdvertSkills|length > 0 %}
    <div>
      Cette annonce requiert les compétences suivantes :
      <ul>
        {% for advertSkill in listAdvertSkills %}
          <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>
        {% endfor %}
      </ul>
    </div>
  {% endif %}

  <p>
    <a href=\"{{ path('bonbers_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"{{ path('bonbers_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"{{ path('bonbers_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

{% endblock %}
", "BONBERSPlatformBundle:Advert:view.html.twig", "/var/www/html/symfonyStart/src/BONBERS/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
