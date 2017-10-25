<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4fe0126cea834c2021a568bc22188a6a6babe007ed6f1aff9514e87b8ba11595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_073cb77c4e9d2c4ba3bc502fc0326b17069979e27d3a9000d3a21544aff023d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_073cb77c4e9d2c4ba3bc502fc0326b17069979e27d3a9000d3a21544aff023d4->enter($__internal_073cb77c4e9d2c4ba3bc502fc0326b17069979e27d3a9000d3a21544aff023d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b7a9f04a932e8ad125ffb8748f3fc521e3d8a171954e877a09a2f4d3363ea360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a9f04a932e8ad125ffb8748f3fc521e3d8a171954e877a09a2f4d3363ea360->enter($__internal_b7a9f04a932e8ad125ffb8748f3fc521e3d8a171954e877a09a2f4d3363ea360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_073cb77c4e9d2c4ba3bc502fc0326b17069979e27d3a9000d3a21544aff023d4->leave($__internal_073cb77c4e9d2c4ba3bc502fc0326b17069979e27d3a9000d3a21544aff023d4_prof);

        
        $__internal_b7a9f04a932e8ad125ffb8748f3fc521e3d8a171954e877a09a2f4d3363ea360->leave($__internal_b7a9f04a932e8ad125ffb8748f3fc521e3d8a171954e877a09a2f4d3363ea360_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f7327568cecab92a262324000913630f9d3779f672b1a2f6d3503f97e39ecff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7327568cecab92a262324000913630f9d3779f672b1a2f6d3503f97e39ecff->enter($__internal_9f7327568cecab92a262324000913630f9d3779f672b1a2f6d3503f97e39ecff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f091c3ae75a3770bf1a7d37dd81955f2ba842dd1968e756252f4d43c6a635a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f091c3ae75a3770bf1a7d37dd81955f2ba842dd1968e756252f4d43c6a635a1->enter($__internal_1f091c3ae75a3770bf1a7d37dd81955f2ba842dd1968e756252f4d43c6a635a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1f091c3ae75a3770bf1a7d37dd81955f2ba842dd1968e756252f4d43c6a635a1->leave($__internal_1f091c3ae75a3770bf1a7d37dd81955f2ba842dd1968e756252f4d43c6a635a1_prof);

        
        $__internal_9f7327568cecab92a262324000913630f9d3779f672b1a2f6d3503f97e39ecff->leave($__internal_9f7327568cecab92a262324000913630f9d3779f672b1a2f6d3503f97e39ecff_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_98e02e48e4169d938b147075d3b8d8d38f6e6ef477da23abafc4382b7793e63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e02e48e4169d938b147075d3b8d8d38f6e6ef477da23abafc4382b7793e63e->enter($__internal_98e02e48e4169d938b147075d3b8d8d38f6e6ef477da23abafc4382b7793e63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10982cc302023b851e8c4dbcd7cce7b9cf98ecd58b09dcdef9bf6f1334a69b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10982cc302023b851e8c4dbcd7cce7b9cf98ecd58b09dcdef9bf6f1334a69b61->enter($__internal_10982cc302023b851e8c4dbcd7cce7b9cf98ecd58b09dcdef9bf6f1334a69b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_10982cc302023b851e8c4dbcd7cce7b9cf98ecd58b09dcdef9bf6f1334a69b61->leave($__internal_10982cc302023b851e8c4dbcd7cce7b9cf98ecd58b09dcdef9bf6f1334a69b61_prof);

        
        $__internal_98e02e48e4169d938b147075d3b8d8d38f6e6ef477da23abafc4382b7793e63e->leave($__internal_98e02e48e4169d938b147075d3b8d8d38f6e6ef477da23abafc4382b7793e63e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bdfe7d840303d13661af76e77de5ef6d46452965e4691b2f00f3ecc17e67a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bdfe7d840303d13661af76e77de5ef6d46452965e4691b2f00f3ecc17e67a9e->enter($__internal_3bdfe7d840303d13661af76e77de5ef6d46452965e4691b2f00f3ecc17e67a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c31594625fb2d97d84b87722cb523cd71bd395723f31b0af9e52f6c1f50d503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c31594625fb2d97d84b87722cb523cd71bd395723f31b0af9e52f6c1f50d503->enter($__internal_0c31594625fb2d97d84b87722cb523cd71bd395723f31b0af9e52f6c1f50d503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0c31594625fb2d97d84b87722cb523cd71bd395723f31b0af9e52f6c1f50d503->leave($__internal_0c31594625fb2d97d84b87722cb523cd71bd395723f31b0af9e52f6c1f50d503_prof);

        
        $__internal_3bdfe7d840303d13661af76e77de5ef6d46452965e4691b2f00f3ecc17e67a9e->leave($__internal_3bdfe7d840303d13661af76e77de5ef6d46452965e4691b2f00f3ecc17e67a9e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
