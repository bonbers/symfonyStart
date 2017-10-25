<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d0cc55beecbb9584a74dd5765367dd2962404f594802ededa40f89ff2ac1905d extends Twig_Template
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
        $__internal_3355e548271a61623c7094bf1fe91638eccf787187a99afa8d16caa64a12b1d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3355e548271a61623c7094bf1fe91638eccf787187a99afa8d16caa64a12b1d3->enter($__internal_3355e548271a61623c7094bf1fe91638eccf787187a99afa8d16caa64a12b1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_f07777ae71df6039bdeb0b0ca006ed0a924a3c88f52015e84bc9174e736fca95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07777ae71df6039bdeb0b0ca006ed0a924a3c88f52015e84bc9174e736fca95->enter($__internal_f07777ae71df6039bdeb0b0ca006ed0a924a3c88f52015e84bc9174e736fca95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3355e548271a61623c7094bf1fe91638eccf787187a99afa8d16caa64a12b1d3->leave($__internal_3355e548271a61623c7094bf1fe91638eccf787187a99afa8d16caa64a12b1d3_prof);

        
        $__internal_f07777ae71df6039bdeb0b0ca006ed0a924a3c88f52015e84bc9174e736fca95->leave($__internal_f07777ae71df6039bdeb0b0ca006ed0a924a3c88f52015e84bc9174e736fca95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
