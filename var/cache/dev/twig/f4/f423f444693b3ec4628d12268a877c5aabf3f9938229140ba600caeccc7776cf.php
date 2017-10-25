<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_3ce88363fc72cc4a86ab97550d6bb4cb99f156ae242d5350eb36a8aadf1be89e extends Twig_Template
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
        $__internal_8adf06451575e6ec33cdf5b32464b2094704facc847d9c730e8a6d7bc9c46f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8adf06451575e6ec33cdf5b32464b2094704facc847d9c730e8a6d7bc9c46f45->enter($__internal_8adf06451575e6ec33cdf5b32464b2094704facc847d9c730e8a6d7bc9c46f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_54ac6243d0b94915e76f7fcc5734d79273568bab2455c20676deaa300d9ece29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ac6243d0b94915e76f7fcc5734d79273568bab2455c20676deaa300d9ece29->enter($__internal_54ac6243d0b94915e76f7fcc5734d79273568bab2455c20676deaa300d9ece29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8adf06451575e6ec33cdf5b32464b2094704facc847d9c730e8a6d7bc9c46f45->leave($__internal_8adf06451575e6ec33cdf5b32464b2094704facc847d9c730e8a6d7bc9c46f45_prof);

        
        $__internal_54ac6243d0b94915e76f7fcc5734d79273568bab2455c20676deaa300d9ece29->leave($__internal_54ac6243d0b94915e76f7fcc5734d79273568bab2455c20676deaa300d9ece29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
