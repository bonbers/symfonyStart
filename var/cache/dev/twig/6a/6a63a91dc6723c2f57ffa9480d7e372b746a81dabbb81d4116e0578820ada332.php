<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5a883cf9da9b411c3453a2d7f612df245179e86be5bf460effb8f438b853a9bc extends Twig_Template
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
        $__internal_25817c4bc19b3f97efdba4efc1e80409647715ec9853d350ab740012db7169ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25817c4bc19b3f97efdba4efc1e80409647715ec9853d350ab740012db7169ad->enter($__internal_25817c4bc19b3f97efdba4efc1e80409647715ec9853d350ab740012db7169ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d015aab30700a6c9c396bca0512aca8d01a8ac2c239110775879fc5f847dd38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d015aab30700a6c9c396bca0512aca8d01a8ac2c239110775879fc5f847dd38f->enter($__internal_d015aab30700a6c9c396bca0512aca8d01a8ac2c239110775879fc5f847dd38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_25817c4bc19b3f97efdba4efc1e80409647715ec9853d350ab740012db7169ad->leave($__internal_25817c4bc19b3f97efdba4efc1e80409647715ec9853d350ab740012db7169ad_prof);

        
        $__internal_d015aab30700a6c9c396bca0512aca8d01a8ac2c239110775879fc5f847dd38f->leave($__internal_d015aab30700a6c9c396bca0512aca8d01a8ac2c239110775879fc5f847dd38f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
