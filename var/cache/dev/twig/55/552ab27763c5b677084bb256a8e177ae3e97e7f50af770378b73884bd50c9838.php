<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_1006e65dd460517172efb1290b44ed90ad8260eebfcfedde712aca31ffdca89b extends Twig_Template
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
        $__internal_12e942d3b8d8177a193e19a2c517c5578c5cafac90c1061422683bd74e3f0d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e942d3b8d8177a193e19a2c517c5578c5cafac90c1061422683bd74e3f0d11->enter($__internal_12e942d3b8d8177a193e19a2c517c5578c5cafac90c1061422683bd74e3f0d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b566b50cf8888fdd39b2ddcf1abee496eea750198210751810d52f28136839a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b566b50cf8888fdd39b2ddcf1abee496eea750198210751810d52f28136839a4->enter($__internal_b566b50cf8888fdd39b2ddcf1abee496eea750198210751810d52f28136839a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_12e942d3b8d8177a193e19a2c517c5578c5cafac90c1061422683bd74e3f0d11->leave($__internal_12e942d3b8d8177a193e19a2c517c5578c5cafac90c1061422683bd74e3f0d11_prof);

        
        $__internal_b566b50cf8888fdd39b2ddcf1abee496eea750198210751810d52f28136839a4->leave($__internal_b566b50cf8888fdd39b2ddcf1abee496eea750198210751810d52f28136839a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
