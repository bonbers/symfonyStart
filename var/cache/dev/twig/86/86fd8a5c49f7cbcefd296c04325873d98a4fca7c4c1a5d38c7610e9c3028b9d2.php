<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6d2c78afb708b9e2840d2da06457126b472ec0604b52ff63c3118bb811611e5e extends Twig_Template
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
        $__internal_566700d24b0312f1d1c30a750e1e38c1ff15134eb0b56bc27f9407a04f5013ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566700d24b0312f1d1c30a750e1e38c1ff15134eb0b56bc27f9407a04f5013ce->enter($__internal_566700d24b0312f1d1c30a750e1e38c1ff15134eb0b56bc27f9407a04f5013ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a7c98ee4f0c84f3d46a6a6a59359ab06890cbc7077129b4041c39f1626c7e174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c98ee4f0c84f3d46a6a6a59359ab06890cbc7077129b4041c39f1626c7e174->enter($__internal_a7c98ee4f0c84f3d46a6a6a59359ab06890cbc7077129b4041c39f1626c7e174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_566700d24b0312f1d1c30a750e1e38c1ff15134eb0b56bc27f9407a04f5013ce->leave($__internal_566700d24b0312f1d1c30a750e1e38c1ff15134eb0b56bc27f9407a04f5013ce_prof);

        
        $__internal_a7c98ee4f0c84f3d46a6a6a59359ab06890cbc7077129b4041c39f1626c7e174->leave($__internal_a7c98ee4f0c84f3d46a6a6a59359ab06890cbc7077129b4041c39f1626c7e174_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
