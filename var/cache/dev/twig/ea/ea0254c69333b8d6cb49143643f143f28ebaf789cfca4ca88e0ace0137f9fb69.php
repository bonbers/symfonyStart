<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d767430c9d46766085c4ca8dc331e36f2ddcccfabc2c4cf4cf76a9897793cff3 extends Twig_Template
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
        $__internal_b432af9c5bbfad8d9bb6caab4d4e6beacce2b669ecd9dcd285bf97135ff38f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b432af9c5bbfad8d9bb6caab4d4e6beacce2b669ecd9dcd285bf97135ff38f39->enter($__internal_b432af9c5bbfad8d9bb6caab4d4e6beacce2b669ecd9dcd285bf97135ff38f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c4bc94ba76c0b200b3d6b0f10cc143427b42a0c3aa56566f0d2c3923ac98f0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4bc94ba76c0b200b3d6b0f10cc143427b42a0c3aa56566f0d2c3923ac98f0cd->enter($__internal_c4bc94ba76c0b200b3d6b0f10cc143427b42a0c3aa56566f0d2c3923ac98f0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b432af9c5bbfad8d9bb6caab4d4e6beacce2b669ecd9dcd285bf97135ff38f39->leave($__internal_b432af9c5bbfad8d9bb6caab4d4e6beacce2b669ecd9dcd285bf97135ff38f39_prof);

        
        $__internal_c4bc94ba76c0b200b3d6b0f10cc143427b42a0c3aa56566f0d2c3923ac98f0cd->leave($__internal_c4bc94ba76c0b200b3d6b0f10cc143427b42a0c3aa56566f0d2c3923ac98f0cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
