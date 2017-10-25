<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_42ad1cda4129fb7dd270a17c73e9d777ce83a5593fdd83dab77160909243549d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad53e556ff1b3bcb2b6fb436c177a29db459073a2dc6d825b8874d715e072349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad53e556ff1b3bcb2b6fb436c177a29db459073a2dc6d825b8874d715e072349->enter($__internal_ad53e556ff1b3bcb2b6fb436c177a29db459073a2dc6d825b8874d715e072349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d1a9ac4c1176ba69f2552f5dee95a89f35d5d45e269a6124103634f7c35ae01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a9ac4c1176ba69f2552f5dee95a89f35d5d45e269a6124103634f7c35ae01f->enter($__internal_d1a9ac4c1176ba69f2552f5dee95a89f35d5d45e269a6124103634f7c35ae01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ad53e556ff1b3bcb2b6fb436c177a29db459073a2dc6d825b8874d715e072349->leave($__internal_ad53e556ff1b3bcb2b6fb436c177a29db459073a2dc6d825b8874d715e072349_prof);

        
        $__internal_d1a9ac4c1176ba69f2552f5dee95a89f35d5d45e269a6124103634f7c35ae01f->leave($__internal_d1a9ac4c1176ba69f2552f5dee95a89f35d5d45e269a6124103634f7c35ae01f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_635cbcb3cd61e9bfea7966c3706e979ff208f0ef90842b572699f16bee52bfba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635cbcb3cd61e9bfea7966c3706e979ff208f0ef90842b572699f16bee52bfba->enter($__internal_635cbcb3cd61e9bfea7966c3706e979ff208f0ef90842b572699f16bee52bfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a64884d55f13dfa55524aa2287008da493c3223d7a4ad66036cb7cabacaf3e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64884d55f13dfa55524aa2287008da493c3223d7a4ad66036cb7cabacaf3e6c->enter($__internal_a64884d55f13dfa55524aa2287008da493c3223d7a4ad66036cb7cabacaf3e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a64884d55f13dfa55524aa2287008da493c3223d7a4ad66036cb7cabacaf3e6c->leave($__internal_a64884d55f13dfa55524aa2287008da493c3223d7a4ad66036cb7cabacaf3e6c_prof);

        
        $__internal_635cbcb3cd61e9bfea7966c3706e979ff208f0ef90842b572699f16bee52bfba->leave($__internal_635cbcb3cd61e9bfea7966c3706e979ff208f0ef90842b572699f16bee52bfba_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a57f7178c67c70ec183f057835ef124455042dd84f095f0b099a5a4c315230c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a57f7178c67c70ec183f057835ef124455042dd84f095f0b099a5a4c315230c->enter($__internal_6a57f7178c67c70ec183f057835ef124455042dd84f095f0b099a5a4c315230c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_379f852cec0339b30fd2ddbff942b1a38b064b1f15727a0db58456cbcea57057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379f852cec0339b30fd2ddbff942b1a38b064b1f15727a0db58456cbcea57057->enter($__internal_379f852cec0339b30fd2ddbff942b1a38b064b1f15727a0db58456cbcea57057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_379f852cec0339b30fd2ddbff942b1a38b064b1f15727a0db58456cbcea57057->leave($__internal_379f852cec0339b30fd2ddbff942b1a38b064b1f15727a0db58456cbcea57057_prof);

        
        $__internal_6a57f7178c67c70ec183f057835ef124455042dd84f095f0b099a5a4c315230c->leave($__internal_6a57f7178c67c70ec183f057835ef124455042dd84f095f0b099a5a4c315230c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_645f99b11b21aedc6d684bf106489305dd84f967283987f24f03d8b1b7d251be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645f99b11b21aedc6d684bf106489305dd84f967283987f24f03d8b1b7d251be->enter($__internal_645f99b11b21aedc6d684bf106489305dd84f967283987f24f03d8b1b7d251be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ad9e1a3a4cee7dc64441a8a2036e6e9d7748a7f4e7bb43251c2ef95bd3698aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad9e1a3a4cee7dc64441a8a2036e6e9d7748a7f4e7bb43251c2ef95bd3698aa->enter($__internal_0ad9e1a3a4cee7dc64441a8a2036e6e9d7748a7f4e7bb43251c2ef95bd3698aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0ad9e1a3a4cee7dc64441a8a2036e6e9d7748a7f4e7bb43251c2ef95bd3698aa->leave($__internal_0ad9e1a3a4cee7dc64441a8a2036e6e9d7748a7f4e7bb43251c2ef95bd3698aa_prof);

        
        $__internal_645f99b11b21aedc6d684bf106489305dd84f967283987f24f03d8b1b7d251be->leave($__internal_645f99b11b21aedc6d684bf106489305dd84f967283987f24f03d8b1b7d251be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
