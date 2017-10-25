<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4859f90049d9811a5b0b57fc8543d37f880c8bd033528e666e01645ae5e33da6 extends Twig_Template
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
        $__internal_28d770e55935f1b599ace1b048f2bafda8414a0338b5ec34f31f80c22601ab4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d770e55935f1b599ace1b048f2bafda8414a0338b5ec34f31f80c22601ab4e->enter($__internal_28d770e55935f1b599ace1b048f2bafda8414a0338b5ec34f31f80c22601ab4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6955ffb8a33da9cc4e53cdabe054d3b8c956eb692cfe6ed9ade77b494938fb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6955ffb8a33da9cc4e53cdabe054d3b8c956eb692cfe6ed9ade77b494938fb54->enter($__internal_6955ffb8a33da9cc4e53cdabe054d3b8c956eb692cfe6ed9ade77b494938fb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_28d770e55935f1b599ace1b048f2bafda8414a0338b5ec34f31f80c22601ab4e->leave($__internal_28d770e55935f1b599ace1b048f2bafda8414a0338b5ec34f31f80c22601ab4e_prof);

        
        $__internal_6955ffb8a33da9cc4e53cdabe054d3b8c956eb692cfe6ed9ade77b494938fb54->leave($__internal_6955ffb8a33da9cc4e53cdabe054d3b8c956eb692cfe6ed9ade77b494938fb54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
