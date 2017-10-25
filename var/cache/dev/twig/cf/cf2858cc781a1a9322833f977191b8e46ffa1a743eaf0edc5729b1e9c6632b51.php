<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_caaca6001ba3911ad1f7c638b7378e3b7e1d986014185371796d31268ecd66a1 extends Twig_Template
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
        $__internal_2c1fde99dfd9afa705473640e72f084db8b91cec50ccae5f0a74ee1e1e3eba96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1fde99dfd9afa705473640e72f084db8b91cec50ccae5f0a74ee1e1e3eba96->enter($__internal_2c1fde99dfd9afa705473640e72f084db8b91cec50ccae5f0a74ee1e1e3eba96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_2c69c7eea1d361f123978d37473f1175880cd46205605d599b93b33beaa06ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c69c7eea1d361f123978d37473f1175880cd46205605d599b93b33beaa06ee7->enter($__internal_2c69c7eea1d361f123978d37473f1175880cd46205605d599b93b33beaa06ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2c1fde99dfd9afa705473640e72f084db8b91cec50ccae5f0a74ee1e1e3eba96->leave($__internal_2c1fde99dfd9afa705473640e72f084db8b91cec50ccae5f0a74ee1e1e3eba96_prof);

        
        $__internal_2c69c7eea1d361f123978d37473f1175880cd46205605d599b93b33beaa06ee7->leave($__internal_2c69c7eea1d361f123978d37473f1175880cd46205605d599b93b33beaa06ee7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
