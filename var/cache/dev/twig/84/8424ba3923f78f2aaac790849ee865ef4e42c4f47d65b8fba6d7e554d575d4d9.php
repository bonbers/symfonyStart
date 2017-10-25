<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_64ccd21a5fb473223d69168969f0b5d3d6bf4791e14d40ed1df99589d0e7d55e extends Twig_Template
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
        $__internal_ea2033e2af4f267350a80bfe7fb87b2841b739883f5bb431a118397833a30218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2033e2af4f267350a80bfe7fb87b2841b739883f5bb431a118397833a30218->enter($__internal_ea2033e2af4f267350a80bfe7fb87b2841b739883f5bb431a118397833a30218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4425889ed96febe9b75185115b0a55ef447d6d229c8a26c5b95920dc2d9937cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4425889ed96febe9b75185115b0a55ef447d6d229c8a26c5b95920dc2d9937cd->enter($__internal_4425889ed96febe9b75185115b0a55ef447d6d229c8a26c5b95920dc2d9937cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ea2033e2af4f267350a80bfe7fb87b2841b739883f5bb431a118397833a30218->leave($__internal_ea2033e2af4f267350a80bfe7fb87b2841b739883f5bb431a118397833a30218_prof);

        
        $__internal_4425889ed96febe9b75185115b0a55ef447d6d229c8a26c5b95920dc2d9937cd->leave($__internal_4425889ed96febe9b75185115b0a55ef447d6d229c8a26c5b95920dc2d9937cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
