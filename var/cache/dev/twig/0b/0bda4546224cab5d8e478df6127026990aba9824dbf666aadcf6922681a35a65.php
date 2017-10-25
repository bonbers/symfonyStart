<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_eb944a494f7c08c306378a3366952e8d4c2c504c53abd124d20a2c3596109dca extends Twig_Template
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
        $__internal_50c493f84e1320fa2cd099e7f9a201e4450610079b3f68f49d133c420568d454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c493f84e1320fa2cd099e7f9a201e4450610079b3f68f49d133c420568d454->enter($__internal_50c493f84e1320fa2cd099e7f9a201e4450610079b3f68f49d133c420568d454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e61129636a7cb6597ec25090f4bf9ef3ae7f9dac43420f74daf13758e99dc798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61129636a7cb6597ec25090f4bf9ef3ae7f9dac43420f74daf13758e99dc798->enter($__internal_e61129636a7cb6597ec25090f4bf9ef3ae7f9dac43420f74daf13758e99dc798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_50c493f84e1320fa2cd099e7f9a201e4450610079b3f68f49d133c420568d454->leave($__internal_50c493f84e1320fa2cd099e7f9a201e4450610079b3f68f49d133c420568d454_prof);

        
        $__internal_e61129636a7cb6597ec25090f4bf9ef3ae7f9dac43420f74daf13758e99dc798->leave($__internal_e61129636a7cb6597ec25090f4bf9ef3ae7f9dac43420f74daf13758e99dc798_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
