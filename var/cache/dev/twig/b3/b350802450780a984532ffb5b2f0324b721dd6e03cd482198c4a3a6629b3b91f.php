<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_883f0c912b62c5a28c8b7e784bf76887b14b194e03307ad8658d26766b0ba423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c07b576f7da0f81c696a2ef524921799d4988349838fc3c402759721c95eaa0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07b576f7da0f81c696a2ef524921799d4988349838fc3c402759721c95eaa0a->enter($__internal_c07b576f7da0f81c696a2ef524921799d4988349838fc3c402759721c95eaa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9323319890dea6e153a5e4a2a22ce6d2b2ca3e4f4488297d8b39775b60d8c6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9323319890dea6e153a5e4a2a22ce6d2b2ca3e4f4488297d8b39775b60d8c6a9->enter($__internal_9323319890dea6e153a5e4a2a22ce6d2b2ca3e4f4488297d8b39775b60d8c6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c07b576f7da0f81c696a2ef524921799d4988349838fc3c402759721c95eaa0a->leave($__internal_c07b576f7da0f81c696a2ef524921799d4988349838fc3c402759721c95eaa0a_prof);

        
        $__internal_9323319890dea6e153a5e4a2a22ce6d2b2ca3e4f4488297d8b39775b60d8c6a9->leave($__internal_9323319890dea6e153a5e4a2a22ce6d2b2ca3e4f4488297d8b39775b60d8c6a9_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_79410186711a0e81403dbdc298887e6cf808af4d77288e2f4fc2ee8ab649b0f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79410186711a0e81403dbdc298887e6cf808af4d77288e2f4fc2ee8ab649b0f4->enter($__internal_79410186711a0e81403dbdc298887e6cf808af4d77288e2f4fc2ee8ab649b0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_faab4f74a62156499679d8c0599a370b4fbd396fb2f9cd81597995e0a63de98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faab4f74a62156499679d8c0599a370b4fbd396fb2f9cd81597995e0a63de98d->enter($__internal_faab4f74a62156499679d8c0599a370b4fbd396fb2f9cd81597995e0a63de98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_faab4f74a62156499679d8c0599a370b4fbd396fb2f9cd81597995e0a63de98d->leave($__internal_faab4f74a62156499679d8c0599a370b4fbd396fb2f9cd81597995e0a63de98d_prof);

        
        $__internal_79410186711a0e81403dbdc298887e6cf808af4d77288e2f4fc2ee8ab649b0f4->leave($__internal_79410186711a0e81403dbdc298887e6cf808af4d77288e2f4fc2ee8ab649b0f4_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f875230cd4a3121b68eca46651cf9b0110a5709dc2b4072b97954a73e55b4417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f875230cd4a3121b68eca46651cf9b0110a5709dc2b4072b97954a73e55b4417->enter($__internal_f875230cd4a3121b68eca46651cf9b0110a5709dc2b4072b97954a73e55b4417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bf0ff3c4fd27422121ed3c0b9edf1464ab1414c682a57b4e57cc2802f1b16e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0ff3c4fd27422121ed3c0b9edf1464ab1414c682a57b4e57cc2802f1b16e88->enter($__internal_bf0ff3c4fd27422121ed3c0b9edf1464ab1414c682a57b4e57cc2802f1b16e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_bf0ff3c4fd27422121ed3c0b9edf1464ab1414c682a57b4e57cc2802f1b16e88->leave($__internal_bf0ff3c4fd27422121ed3c0b9edf1464ab1414c682a57b4e57cc2802f1b16e88_prof);

        
        $__internal_f875230cd4a3121b68eca46651cf9b0110a5709dc2b4072b97954a73e55b4417->leave($__internal_f875230cd4a3121b68eca46651cf9b0110a5709dc2b4072b97954a73e55b4417_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
