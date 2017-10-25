<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4fe0126cea834c2021a568bc22188a6a6babe007ed6f1aff9514e87b8ba11595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_2592379e5aa1999c339ef37b7505732b643a14eece6744badea37dc4313c7f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2592379e5aa1999c339ef37b7505732b643a14eece6744badea37dc4313c7f13->enter($__internal_2592379e5aa1999c339ef37b7505732b643a14eece6744badea37dc4313c7f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_8bfb668fc4237515eae71bf76bb546ac0a046744d3fb3282e79e2b593ac50d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfb668fc4237515eae71bf76bb546ac0a046744d3fb3282e79e2b593ac50d68->enter($__internal_8bfb668fc4237515eae71bf76bb546ac0a046744d3fb3282e79e2b593ac50d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2592379e5aa1999c339ef37b7505732b643a14eece6744badea37dc4313c7f13->leave($__internal_2592379e5aa1999c339ef37b7505732b643a14eece6744badea37dc4313c7f13_prof);

        
        $__internal_8bfb668fc4237515eae71bf76bb546ac0a046744d3fb3282e79e2b593ac50d68->leave($__internal_8bfb668fc4237515eae71bf76bb546ac0a046744d3fb3282e79e2b593ac50d68_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2e17283eeccf1f86a97e8e4318e612fab8dfbe02e42ccc3088ae7c74ac6ef4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e17283eeccf1f86a97e8e4318e612fab8dfbe02e42ccc3088ae7c74ac6ef4a->enter($__internal_e2e17283eeccf1f86a97e8e4318e612fab8dfbe02e42ccc3088ae7c74ac6ef4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c16d59af313eb285ddde1636a110669b9cdd01b22249a7f5a13e15c9a12a267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c16d59af313eb285ddde1636a110669b9cdd01b22249a7f5a13e15c9a12a267->enter($__internal_4c16d59af313eb285ddde1636a110669b9cdd01b22249a7f5a13e15c9a12a267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4c16d59af313eb285ddde1636a110669b9cdd01b22249a7f5a13e15c9a12a267->leave($__internal_4c16d59af313eb285ddde1636a110669b9cdd01b22249a7f5a13e15c9a12a267_prof);

        
        $__internal_e2e17283eeccf1f86a97e8e4318e612fab8dfbe02e42ccc3088ae7c74ac6ef4a->leave($__internal_e2e17283eeccf1f86a97e8e4318e612fab8dfbe02e42ccc3088ae7c74ac6ef4a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_986c6bb9bb255eb8dcdac1ddc8749d92958d36d5373431bbf78dd69ca1a93989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986c6bb9bb255eb8dcdac1ddc8749d92958d36d5373431bbf78dd69ca1a93989->enter($__internal_986c6bb9bb255eb8dcdac1ddc8749d92958d36d5373431bbf78dd69ca1a93989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5457f0df00cce03e5cb4b7f756527b358862a228ecd6b1dca800f5850ef8893d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5457f0df00cce03e5cb4b7f756527b358862a228ecd6b1dca800f5850ef8893d->enter($__internal_5457f0df00cce03e5cb4b7f756527b358862a228ecd6b1dca800f5850ef8893d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_5457f0df00cce03e5cb4b7f756527b358862a228ecd6b1dca800f5850ef8893d->leave($__internal_5457f0df00cce03e5cb4b7f756527b358862a228ecd6b1dca800f5850ef8893d_prof);

        
        $__internal_986c6bb9bb255eb8dcdac1ddc8749d92958d36d5373431bbf78dd69ca1a93989->leave($__internal_986c6bb9bb255eb8dcdac1ddc8749d92958d36d5373431bbf78dd69ca1a93989_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd36b7f31a283443a2f77710cc410b1c45b468efcb35a12ca6f757eca881a90f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd36b7f31a283443a2f77710cc410b1c45b468efcb35a12ca6f757eca881a90f->enter($__internal_dd36b7f31a283443a2f77710cc410b1c45b468efcb35a12ca6f757eca881a90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cae41d80013766d9c78abb5bbd014f39582324487bbd94ad9b3e2f9cae12aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cae41d80013766d9c78abb5bbd014f39582324487bbd94ad9b3e2f9cae12aaf->enter($__internal_0cae41d80013766d9c78abb5bbd014f39582324487bbd94ad9b3e2f9cae12aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_0cae41d80013766d9c78abb5bbd014f39582324487bbd94ad9b3e2f9cae12aaf->leave($__internal_0cae41d80013766d9c78abb5bbd014f39582324487bbd94ad9b3e2f9cae12aaf_prof);

        
        $__internal_dd36b7f31a283443a2f77710cc410b1c45b468efcb35a12ca6f757eca881a90f->leave($__internal_dd36b7f31a283443a2f77710cc410b1c45b468efcb35a12ca6f757eca881a90f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
