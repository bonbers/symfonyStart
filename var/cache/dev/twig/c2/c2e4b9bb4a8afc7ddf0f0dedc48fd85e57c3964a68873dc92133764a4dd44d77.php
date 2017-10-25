<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1199215b16bfc8632229b6cbe506b45b929258725cf9cc521fe57fd31d315794 extends Twig_Template
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
        $__internal_864bdcbb415ca4b38f53b79450fbc8ee8546a7415a2606451cfb7b25416a653d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864bdcbb415ca4b38f53b79450fbc8ee8546a7415a2606451cfb7b25416a653d->enter($__internal_864bdcbb415ca4b38f53b79450fbc8ee8546a7415a2606451cfb7b25416a653d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_fd488028aaae36474a2da4890b60855565cd353908a8677f102bf0607eef3552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd488028aaae36474a2da4890b60855565cd353908a8677f102bf0607eef3552->enter($__internal_fd488028aaae36474a2da4890b60855565cd353908a8677f102bf0607eef3552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_864bdcbb415ca4b38f53b79450fbc8ee8546a7415a2606451cfb7b25416a653d->leave($__internal_864bdcbb415ca4b38f53b79450fbc8ee8546a7415a2606451cfb7b25416a653d_prof);

        
        $__internal_fd488028aaae36474a2da4890b60855565cd353908a8677f102bf0607eef3552->leave($__internal_fd488028aaae36474a2da4890b60855565cd353908a8677f102bf0607eef3552_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
