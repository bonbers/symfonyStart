<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_193db0b66fcc31ebef7449393ecf274750e51b136947643a242a24767c2d037f extends Twig_Template
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
        $__internal_9ddd66cf35785022e61373a3a8567e09c1fbd429b848ff71806052ffc7c4ec8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ddd66cf35785022e61373a3a8567e09c1fbd429b848ff71806052ffc7c4ec8e->enter($__internal_9ddd66cf35785022e61373a3a8567e09c1fbd429b848ff71806052ffc7c4ec8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_df12267283474e6f796ba859808c439adba6a263fc5d9191deb048351c6d6f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df12267283474e6f796ba859808c439adba6a263fc5d9191deb048351c6d6f3e->enter($__internal_df12267283474e6f796ba859808c439adba6a263fc5d9191deb048351c6d6f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9ddd66cf35785022e61373a3a8567e09c1fbd429b848ff71806052ffc7c4ec8e->leave($__internal_9ddd66cf35785022e61373a3a8567e09c1fbd429b848ff71806052ffc7c4ec8e_prof);

        
        $__internal_df12267283474e6f796ba859808c439adba6a263fc5d9191deb048351c6d6f3e->leave($__internal_df12267283474e6f796ba859808c439adba6a263fc5d9191deb048351c6d6f3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
