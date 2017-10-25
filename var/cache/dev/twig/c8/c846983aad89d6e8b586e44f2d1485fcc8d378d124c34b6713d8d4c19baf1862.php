<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e430766fec310da2abd67946c5b6a63365d027b076561e30fd2009055245abab extends Twig_Template
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
        $__internal_6f12ba48c645862f8592ded8f91849a5c95515e6d80f77fbc6ff842fb4d664b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f12ba48c645862f8592ded8f91849a5c95515e6d80f77fbc6ff842fb4d664b8->enter($__internal_6f12ba48c645862f8592ded8f91849a5c95515e6d80f77fbc6ff842fb4d664b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_12829d3264493b82c814b4aa167b51f193dbab19a11e864024564f0b06e650ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12829d3264493b82c814b4aa167b51f193dbab19a11e864024564f0b06e650ba->enter($__internal_12829d3264493b82c814b4aa167b51f193dbab19a11e864024564f0b06e650ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6f12ba48c645862f8592ded8f91849a5c95515e6d80f77fbc6ff842fb4d664b8->leave($__internal_6f12ba48c645862f8592ded8f91849a5c95515e6d80f77fbc6ff842fb4d664b8_prof);

        
        $__internal_12829d3264493b82c814b4aa167b51f193dbab19a11e864024564f0b06e650ba->leave($__internal_12829d3264493b82c814b4aa167b51f193dbab19a11e864024564f0b06e650ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
