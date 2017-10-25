<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_92db36962c8bd989850c196931b0f51fe0114729f674ec0999bb8b5ff5d37dc7 extends Twig_Template
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
        $__internal_531ee145e6b6d53b4335107fcda37bb064c39d0dd1ad84aad1f395a339dc792f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_531ee145e6b6d53b4335107fcda37bb064c39d0dd1ad84aad1f395a339dc792f->enter($__internal_531ee145e6b6d53b4335107fcda37bb064c39d0dd1ad84aad1f395a339dc792f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c88b0040a71babb8188759d2354104b538ccdf622b743adcc31def8bf8a88e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88b0040a71babb8188759d2354104b538ccdf622b743adcc31def8bf8a88e78->enter($__internal_c88b0040a71babb8188759d2354104b538ccdf622b743adcc31def8bf8a88e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_531ee145e6b6d53b4335107fcda37bb064c39d0dd1ad84aad1f395a339dc792f->leave($__internal_531ee145e6b6d53b4335107fcda37bb064c39d0dd1ad84aad1f395a339dc792f_prof);

        
        $__internal_c88b0040a71babb8188759d2354104b538ccdf622b743adcc31def8bf8a88e78->leave($__internal_c88b0040a71babb8188759d2354104b538ccdf622b743adcc31def8bf8a88e78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
