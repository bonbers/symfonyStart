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
        $__internal_86baa515e9d52a3cc3a04670fa234fe498eea56f881f7bbc1152fd2414da280e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86baa515e9d52a3cc3a04670fa234fe498eea56f881f7bbc1152fd2414da280e->enter($__internal_86baa515e9d52a3cc3a04670fa234fe498eea56f881f7bbc1152fd2414da280e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_16a1d5b26167033aae52e8892eb273084916832d99cf2649827a132981e904b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a1d5b26167033aae52e8892eb273084916832d99cf2649827a132981e904b6->enter($__internal_16a1d5b26167033aae52e8892eb273084916832d99cf2649827a132981e904b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_86baa515e9d52a3cc3a04670fa234fe498eea56f881f7bbc1152fd2414da280e->leave($__internal_86baa515e9d52a3cc3a04670fa234fe498eea56f881f7bbc1152fd2414da280e_prof);

        
        $__internal_16a1d5b26167033aae52e8892eb273084916832d99cf2649827a132981e904b6->leave($__internal_16a1d5b26167033aae52e8892eb273084916832d99cf2649827a132981e904b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_81e2be9c00ff064eaee829a5940456ed3f275a6d70f1325a2d05a82a5217edab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e2be9c00ff064eaee829a5940456ed3f275a6d70f1325a2d05a82a5217edab->enter($__internal_81e2be9c00ff064eaee829a5940456ed3f275a6d70f1325a2d05a82a5217edab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5a3fd8ca9fd184bfbe006271a275958c7979a4e8339e5a3484b1f33cb3b5a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a3fd8ca9fd184bfbe006271a275958c7979a4e8339e5a3484b1f33cb3b5a4c->enter($__internal_d5a3fd8ca9fd184bfbe006271a275958c7979a4e8339e5a3484b1f33cb3b5a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d5a3fd8ca9fd184bfbe006271a275958c7979a4e8339e5a3484b1f33cb3b5a4c->leave($__internal_d5a3fd8ca9fd184bfbe006271a275958c7979a4e8339e5a3484b1f33cb3b5a4c_prof);

        
        $__internal_81e2be9c00ff064eaee829a5940456ed3f275a6d70f1325a2d05a82a5217edab->leave($__internal_81e2be9c00ff064eaee829a5940456ed3f275a6d70f1325a2d05a82a5217edab_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_26faba6866fda8835bcfd2b02f5a394a65dfe7639273ab10daf236d7b268aa2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26faba6866fda8835bcfd2b02f5a394a65dfe7639273ab10daf236d7b268aa2e->enter($__internal_26faba6866fda8835bcfd2b02f5a394a65dfe7639273ab10daf236d7b268aa2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c28d2848689f4414b0265460582db079e909175a3fe9d2741faf5ac9c8ee8301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28d2848689f4414b0265460582db079e909175a3fe9d2741faf5ac9c8ee8301->enter($__internal_c28d2848689f4414b0265460582db079e909175a3fe9d2741faf5ac9c8ee8301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c28d2848689f4414b0265460582db079e909175a3fe9d2741faf5ac9c8ee8301->leave($__internal_c28d2848689f4414b0265460582db079e909175a3fe9d2741faf5ac9c8ee8301_prof);

        
        $__internal_26faba6866fda8835bcfd2b02f5a394a65dfe7639273ab10daf236d7b268aa2e->leave($__internal_26faba6866fda8835bcfd2b02f5a394a65dfe7639273ab10daf236d7b268aa2e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f43fb39cb4d2e06251fee180fbc8f59f18dcd8d04b182aab6c0a1f7584487006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f43fb39cb4d2e06251fee180fbc8f59f18dcd8d04b182aab6c0a1f7584487006->enter($__internal_f43fb39cb4d2e06251fee180fbc8f59f18dcd8d04b182aab6c0a1f7584487006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb4f53c47a3c0a54618250172fc0c27c3fb7d2b1a3a0aeac72c0d2ee045c3ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4f53c47a3c0a54618250172fc0c27c3fb7d2b1a3a0aeac72c0d2ee045c3ec3->enter($__internal_bb4f53c47a3c0a54618250172fc0c27c3fb7d2b1a3a0aeac72c0d2ee045c3ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb4f53c47a3c0a54618250172fc0c27c3fb7d2b1a3a0aeac72c0d2ee045c3ec3->leave($__internal_bb4f53c47a3c0a54618250172fc0c27c3fb7d2b1a3a0aeac72c0d2ee045c3ec3_prof);

        
        $__internal_f43fb39cb4d2e06251fee180fbc8f59f18dcd8d04b182aab6c0a1f7584487006->leave($__internal_f43fb39cb4d2e06251fee180fbc8f59f18dcd8d04b182aab6c0a1f7584487006_prof);

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
