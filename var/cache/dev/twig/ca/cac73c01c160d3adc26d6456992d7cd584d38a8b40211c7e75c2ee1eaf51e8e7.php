<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e4033c02e2f763b1f046e4c4ce5a715edd405d931d6cb51766b850ede954ce41 extends Twig_Template
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
        $__internal_9d0358fa3a13177710ad9ba7188c5a196ab8ea309372d84ce5793d15f058be2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0358fa3a13177710ad9ba7188c5a196ab8ea309372d84ce5793d15f058be2f->enter($__internal_9d0358fa3a13177710ad9ba7188c5a196ab8ea309372d84ce5793d15f058be2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_53f9b9850671035d1af2b92af0706fe1df1fc4ccaaca7e26101387b16cf37e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f9b9850671035d1af2b92af0706fe1df1fc4ccaaca7e26101387b16cf37e21->enter($__internal_53f9b9850671035d1af2b92af0706fe1df1fc4ccaaca7e26101387b16cf37e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9d0358fa3a13177710ad9ba7188c5a196ab8ea309372d84ce5793d15f058be2f->leave($__internal_9d0358fa3a13177710ad9ba7188c5a196ab8ea309372d84ce5793d15f058be2f_prof);

        
        $__internal_53f9b9850671035d1af2b92af0706fe1df1fc4ccaaca7e26101387b16cf37e21->leave($__internal_53f9b9850671035d1af2b92af0706fe1df1fc4ccaaca7e26101387b16cf37e21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
