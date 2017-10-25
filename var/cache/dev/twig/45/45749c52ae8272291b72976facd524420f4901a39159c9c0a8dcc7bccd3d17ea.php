<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_55b6f4d1281677017c6991d7fa78ea2c8499c27ef6c30ad9af3c7a3de28b9c4f extends Twig_Template
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
        $__internal_0965ac20617ffeeab379ef826a8dfc69afa25c0f28e629f90c9d3059e18f3484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0965ac20617ffeeab379ef826a8dfc69afa25c0f28e629f90c9d3059e18f3484->enter($__internal_0965ac20617ffeeab379ef826a8dfc69afa25c0f28e629f90c9d3059e18f3484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2615597afd6fbf56d0d1f49fab5b687c64497f587b8bd47a3523c57b117e1f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2615597afd6fbf56d0d1f49fab5b687c64497f587b8bd47a3523c57b117e1f18->enter($__internal_2615597afd6fbf56d0d1f49fab5b687c64497f587b8bd47a3523c57b117e1f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0965ac20617ffeeab379ef826a8dfc69afa25c0f28e629f90c9d3059e18f3484->leave($__internal_0965ac20617ffeeab379ef826a8dfc69afa25c0f28e629f90c9d3059e18f3484_prof);

        
        $__internal_2615597afd6fbf56d0d1f49fab5b687c64497f587b8bd47a3523c57b117e1f18->leave($__internal_2615597afd6fbf56d0d1f49fab5b687c64497f587b8bd47a3523c57b117e1f18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
