<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_520ef3ef152bdd5b7f3e097050e6aab48e9e77aefd7dd8662003c1697bef2bd7 extends Twig_Template
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
        $__internal_f5ab7d5923533f865ee5aaf04ef95c02d6609e2a5040e5bd51466a19bb6ba8e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ab7d5923533f865ee5aaf04ef95c02d6609e2a5040e5bd51466a19bb6ba8e2->enter($__internal_f5ab7d5923533f865ee5aaf04ef95c02d6609e2a5040e5bd51466a19bb6ba8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_2894e4332ae0762937b2dae553b9e0395ec52f951dd3493493a93141a724348c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2894e4332ae0762937b2dae553b9e0395ec52f951dd3493493a93141a724348c->enter($__internal_2894e4332ae0762937b2dae553b9e0395ec52f951dd3493493a93141a724348c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f5ab7d5923533f865ee5aaf04ef95c02d6609e2a5040e5bd51466a19bb6ba8e2->leave($__internal_f5ab7d5923533f865ee5aaf04ef95c02d6609e2a5040e5bd51466a19bb6ba8e2_prof);

        
        $__internal_2894e4332ae0762937b2dae553b9e0395ec52f951dd3493493a93141a724348c->leave($__internal_2894e4332ae0762937b2dae553b9e0395ec52f951dd3493493a93141a724348c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
