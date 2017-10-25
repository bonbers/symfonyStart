<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_af89e651a5d4f1a36791085fc8ea7ddbe8c433df7711d38855357f93ff101b3a extends Twig_Template
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
        $__internal_29282867e7913c003de33b602380bdc3c879d4ffe3601013dba7ad264d74e702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29282867e7913c003de33b602380bdc3c879d4ffe3601013dba7ad264d74e702->enter($__internal_29282867e7913c003de33b602380bdc3c879d4ffe3601013dba7ad264d74e702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c18433345170b3ef624d30d5c4f6818e6c9fa1fc627a30fe99564f4cced6dea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18433345170b3ef624d30d5c4f6818e6c9fa1fc627a30fe99564f4cced6dea2->enter($__internal_c18433345170b3ef624d30d5c4f6818e6c9fa1fc627a30fe99564f4cced6dea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_29282867e7913c003de33b602380bdc3c879d4ffe3601013dba7ad264d74e702->leave($__internal_29282867e7913c003de33b602380bdc3c879d4ffe3601013dba7ad264d74e702_prof);

        
        $__internal_c18433345170b3ef624d30d5c4f6818e6c9fa1fc627a30fe99564f4cced6dea2->leave($__internal_c18433345170b3ef624d30d5c4f6818e6c9fa1fc627a30fe99564f4cced6dea2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
