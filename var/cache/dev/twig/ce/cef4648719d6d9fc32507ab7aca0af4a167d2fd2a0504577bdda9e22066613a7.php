<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_063554805728216399ab68e40c8b8cff8a65aaff89f39ce0713b364b7eee2419 extends Twig_Template
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
        $__internal_6c3d04dc3d33898bc4f2b85da9b8071921b8f2442d2298a7ec88a27d15dc500e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3d04dc3d33898bc4f2b85da9b8071921b8f2442d2298a7ec88a27d15dc500e->enter($__internal_6c3d04dc3d33898bc4f2b85da9b8071921b8f2442d2298a7ec88a27d15dc500e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b5d6b020d3379c5e98197fd5b56890055f05764895586695297df444e004c03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d6b020d3379c5e98197fd5b56890055f05764895586695297df444e004c03c->enter($__internal_b5d6b020d3379c5e98197fd5b56890055f05764895586695297df444e004c03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6c3d04dc3d33898bc4f2b85da9b8071921b8f2442d2298a7ec88a27d15dc500e->leave($__internal_6c3d04dc3d33898bc4f2b85da9b8071921b8f2442d2298a7ec88a27d15dc500e_prof);

        
        $__internal_b5d6b020d3379c5e98197fd5b56890055f05764895586695297df444e004c03c->leave($__internal_b5d6b020d3379c5e98197fd5b56890055f05764895586695297df444e004c03c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
