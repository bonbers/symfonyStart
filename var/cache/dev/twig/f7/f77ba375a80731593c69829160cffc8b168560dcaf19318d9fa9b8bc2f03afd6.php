<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b054c8712f4118be585d44cf5f01245196ec76b8d03c7d9f8ac34af4862f738e extends Twig_Template
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
        $__internal_63cc6f427659593178df717725c4f987a03b78157a371baa37d2be1a85fb065f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63cc6f427659593178df717725c4f987a03b78157a371baa37d2be1a85fb065f->enter($__internal_63cc6f427659593178df717725c4f987a03b78157a371baa37d2be1a85fb065f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_dbbc1db8cd107d864b17b97a55fa7e81522e4aec0aab9f69922a1c8f046cc76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbc1db8cd107d864b17b97a55fa7e81522e4aec0aab9f69922a1c8f046cc76f->enter($__internal_dbbc1db8cd107d864b17b97a55fa7e81522e4aec0aab9f69922a1c8f046cc76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_63cc6f427659593178df717725c4f987a03b78157a371baa37d2be1a85fb065f->leave($__internal_63cc6f427659593178df717725c4f987a03b78157a371baa37d2be1a85fb065f_prof);

        
        $__internal_dbbc1db8cd107d864b17b97a55fa7e81522e4aec0aab9f69922a1c8f046cc76f->leave($__internal_dbbc1db8cd107d864b17b97a55fa7e81522e4aec0aab9f69922a1c8f046cc76f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
