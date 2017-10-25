<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a32fe549329d6e724d94f0ef992d64d18cb46f6c16a29b8dbb6d3665483fc346 extends Twig_Template
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
        $__internal_7b08595e4274cbcfb08632699790b0bfbd333612d4838d1fdb738bce2c8ef0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b08595e4274cbcfb08632699790b0bfbd333612d4838d1fdb738bce2c8ef0b1->enter($__internal_7b08595e4274cbcfb08632699790b0bfbd333612d4838d1fdb738bce2c8ef0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a0af57194cd42402fa6cd0e2ae8832f235918a9d6bedcc45628b675f01ce3fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0af57194cd42402fa6cd0e2ae8832f235918a9d6bedcc45628b675f01ce3fca->enter($__internal_a0af57194cd42402fa6cd0e2ae8832f235918a9d6bedcc45628b675f01ce3fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7b08595e4274cbcfb08632699790b0bfbd333612d4838d1fdb738bce2c8ef0b1->leave($__internal_7b08595e4274cbcfb08632699790b0bfbd333612d4838d1fdb738bce2c8ef0b1_prof);

        
        $__internal_a0af57194cd42402fa6cd0e2ae8832f235918a9d6bedcc45628b675f01ce3fca->leave($__internal_a0af57194cd42402fa6cd0e2ae8832f235918a9d6bedcc45628b675f01ce3fca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
