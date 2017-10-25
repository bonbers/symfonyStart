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
        $__internal_823cd81b8405c17a7f4e8b7cd4c8ec3dcf0241c11ce5da66c28fd933e41dca0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823cd81b8405c17a7f4e8b7cd4c8ec3dcf0241c11ce5da66c28fd933e41dca0c->enter($__internal_823cd81b8405c17a7f4e8b7cd4c8ec3dcf0241c11ce5da66c28fd933e41dca0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0dbc38ae87a3c0c9b81dfb67062ee4fd5b6b0fb7da9532950f9d53951acb6f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbc38ae87a3c0c9b81dfb67062ee4fd5b6b0fb7da9532950f9d53951acb6f7c->enter($__internal_0dbc38ae87a3c0c9b81dfb67062ee4fd5b6b0fb7da9532950f9d53951acb6f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_823cd81b8405c17a7f4e8b7cd4c8ec3dcf0241c11ce5da66c28fd933e41dca0c->leave($__internal_823cd81b8405c17a7f4e8b7cd4c8ec3dcf0241c11ce5da66c28fd933e41dca0c_prof);

        
        $__internal_0dbc38ae87a3c0c9b81dfb67062ee4fd5b6b0fb7da9532950f9d53951acb6f7c->leave($__internal_0dbc38ae87a3c0c9b81dfb67062ee4fd5b6b0fb7da9532950f9d53951acb6f7c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c8bf5e90735039583febd846228b77410c5d11449f9760fff1dcbb42f851d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8bf5e90735039583febd846228b77410c5d11449f9760fff1dcbb42f851d30->enter($__internal_6c8bf5e90735039583febd846228b77410c5d11449f9760fff1dcbb42f851d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a2efbcd6d06203e7c2bfd2659875a89861eafbca339860995a0cdbb8799700d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2efbcd6d06203e7c2bfd2659875a89861eafbca339860995a0cdbb8799700d->enter($__internal_9a2efbcd6d06203e7c2bfd2659875a89861eafbca339860995a0cdbb8799700d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9a2efbcd6d06203e7c2bfd2659875a89861eafbca339860995a0cdbb8799700d->leave($__internal_9a2efbcd6d06203e7c2bfd2659875a89861eafbca339860995a0cdbb8799700d_prof);

        
        $__internal_6c8bf5e90735039583febd846228b77410c5d11449f9760fff1dcbb42f851d30->leave($__internal_6c8bf5e90735039583febd846228b77410c5d11449f9760fff1dcbb42f851d30_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcb3642b603e52277be26c28afcb55f5b3790c96a231b53575df0c7f2769e0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb3642b603e52277be26c28afcb55f5b3790c96a231b53575df0c7f2769e0fb->enter($__internal_bcb3642b603e52277be26c28afcb55f5b3790c96a231b53575df0c7f2769e0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f5bec8f89addb2f3b5b9de951e4b38dac46450ac2b7391f1e506c65d0c2c188a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5bec8f89addb2f3b5b9de951e4b38dac46450ac2b7391f1e506c65d0c2c188a->enter($__internal_f5bec8f89addb2f3b5b9de951e4b38dac46450ac2b7391f1e506c65d0c2c188a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f5bec8f89addb2f3b5b9de951e4b38dac46450ac2b7391f1e506c65d0c2c188a->leave($__internal_f5bec8f89addb2f3b5b9de951e4b38dac46450ac2b7391f1e506c65d0c2c188a_prof);

        
        $__internal_bcb3642b603e52277be26c28afcb55f5b3790c96a231b53575df0c7f2769e0fb->leave($__internal_bcb3642b603e52277be26c28afcb55f5b3790c96a231b53575df0c7f2769e0fb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f1beb2346784fc8b36612ff976a4f55b125ee688e7fb3df4ce5f349a3fb73d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1beb2346784fc8b36612ff976a4f55b125ee688e7fb3df4ce5f349a3fb73d8->enter($__internal_1f1beb2346784fc8b36612ff976a4f55b125ee688e7fb3df4ce5f349a3fb73d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea5ddd4eddf3beb4a12f022d54c8a8b0706a64052223c7880c10bde4a9e36bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5ddd4eddf3beb4a12f022d54c8a8b0706a64052223c7880c10bde4a9e36bd7->enter($__internal_ea5ddd4eddf3beb4a12f022d54c8a8b0706a64052223c7880c10bde4a9e36bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ea5ddd4eddf3beb4a12f022d54c8a8b0706a64052223c7880c10bde4a9e36bd7->leave($__internal_ea5ddd4eddf3beb4a12f022d54c8a8b0706a64052223c7880c10bde4a9e36bd7_prof);

        
        $__internal_1f1beb2346784fc8b36612ff976a4f55b125ee688e7fb3df4ce5f349a3fb73d8->leave($__internal_1f1beb2346784fc8b36612ff976a4f55b125ee688e7fb3df4ce5f349a3fb73d8_prof);

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
