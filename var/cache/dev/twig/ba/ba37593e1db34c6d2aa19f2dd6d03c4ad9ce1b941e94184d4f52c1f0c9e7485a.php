<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_8920d00a041025b373be5218051deeceaf2715fa60c5f02a1d246a8cb9b7c692 extends Twig_Template
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
        $__internal_1c5f79037342a4601fb99486135852d0283246874a1de4fe31475daa2980c423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5f79037342a4601fb99486135852d0283246874a1de4fe31475daa2980c423->enter($__internal_1c5f79037342a4601fb99486135852d0283246874a1de4fe31475daa2980c423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2350eb0f573f7a68c679f0e893f9839fab374f0795a36a1381c461be555f6efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2350eb0f573f7a68c679f0e893f9839fab374f0795a36a1381c461be555f6efd->enter($__internal_2350eb0f573f7a68c679f0e893f9839fab374f0795a36a1381c461be555f6efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1c5f79037342a4601fb99486135852d0283246874a1de4fe31475daa2980c423->leave($__internal_1c5f79037342a4601fb99486135852d0283246874a1de4fe31475daa2980c423_prof);

        
        $__internal_2350eb0f573f7a68c679f0e893f9839fab374f0795a36a1381c461be555f6efd->leave($__internal_2350eb0f573f7a68c679f0e893f9839fab374f0795a36a1381c461be555f6efd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
