<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_55f97edc2e8454f8a1a04e9415ce5c13f472e8b129d44b4a9801b2f1187b1a0f extends Twig_Template
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
        $__internal_03e2c3d15ca540ef9c4e4d41eca742a5d155cc7bf5219ee41aa9aea2a840def8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e2c3d15ca540ef9c4e4d41eca742a5d155cc7bf5219ee41aa9aea2a840def8->enter($__internal_03e2c3d15ca540ef9c4e4d41eca742a5d155cc7bf5219ee41aa9aea2a840def8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b21325b9bd18d685d7c0b3b78867139cc90da114cde4ec739bb2cdd4075adb26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21325b9bd18d685d7c0b3b78867139cc90da114cde4ec739bb2cdd4075adb26->enter($__internal_b21325b9bd18d685d7c0b3b78867139cc90da114cde4ec739bb2cdd4075adb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_03e2c3d15ca540ef9c4e4d41eca742a5d155cc7bf5219ee41aa9aea2a840def8->leave($__internal_03e2c3d15ca540ef9c4e4d41eca742a5d155cc7bf5219ee41aa9aea2a840def8_prof);

        
        $__internal_b21325b9bd18d685d7c0b3b78867139cc90da114cde4ec739bb2cdd4075adb26->leave($__internal_b21325b9bd18d685d7c0b3b78867139cc90da114cde4ec739bb2cdd4075adb26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
