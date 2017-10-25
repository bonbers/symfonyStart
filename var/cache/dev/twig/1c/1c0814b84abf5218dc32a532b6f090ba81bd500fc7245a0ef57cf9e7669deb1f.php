<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_fa70b6e5aa426bc73fdc1e833f01a5f3b238154760fb5adc8fd95688d7c39e3c extends Twig_Template
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
        $__internal_6e8ddb992ca95751c11bfe2552d459578252bc42ce9b3fbf8b71337891fd1f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8ddb992ca95751c11bfe2552d459578252bc42ce9b3fbf8b71337891fd1f6e->enter($__internal_6e8ddb992ca95751c11bfe2552d459578252bc42ce9b3fbf8b71337891fd1f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_72a1a64c038de896198665246ac98c9223b66d7e63dc1708e6a7e5220b502e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a1a64c038de896198665246ac98c9223b66d7e63dc1708e6a7e5220b502e79->enter($__internal_72a1a64c038de896198665246ac98c9223b66d7e63dc1708e6a7e5220b502e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6e8ddb992ca95751c11bfe2552d459578252bc42ce9b3fbf8b71337891fd1f6e->leave($__internal_6e8ddb992ca95751c11bfe2552d459578252bc42ce9b3fbf8b71337891fd1f6e_prof);

        
        $__internal_72a1a64c038de896198665246ac98c9223b66d7e63dc1708e6a7e5220b502e79->leave($__internal_72a1a64c038de896198665246ac98c9223b66d7e63dc1708e6a7e5220b502e79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
