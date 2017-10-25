<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a84e28e4b1ff8532c05044acdde63a97b52b95591078550491b54710adb3e3e5 extends Twig_Template
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
        $__internal_39878cd44cd40f021d8e18af63085e5a136d6babbedc20e40febbe2f61dfa817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39878cd44cd40f021d8e18af63085e5a136d6babbedc20e40febbe2f61dfa817->enter($__internal_39878cd44cd40f021d8e18af63085e5a136d6babbedc20e40febbe2f61dfa817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a7be9f9c2c1e106578706d53f247ec90ac11603dbd56979f8a82d241157a05d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7be9f9c2c1e106578706d53f247ec90ac11603dbd56979f8a82d241157a05d9->enter($__internal_a7be9f9c2c1e106578706d53f247ec90ac11603dbd56979f8a82d241157a05d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_39878cd44cd40f021d8e18af63085e5a136d6babbedc20e40febbe2f61dfa817->leave($__internal_39878cd44cd40f021d8e18af63085e5a136d6babbedc20e40febbe2f61dfa817_prof);

        
        $__internal_a7be9f9c2c1e106578706d53f247ec90ac11603dbd56979f8a82d241157a05d9->leave($__internal_a7be9f9c2c1e106578706d53f247ec90ac11603dbd56979f8a82d241157a05d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
