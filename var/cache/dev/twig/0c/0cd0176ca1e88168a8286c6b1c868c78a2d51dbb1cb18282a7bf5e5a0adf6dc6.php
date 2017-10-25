<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_4c31623c5e2df92e22fa73f30c5b923327302307367269c1acddaadf8e20496c extends Twig_Template
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
        $__internal_89b16a0d54a4e20dcd99884518b5f4dd5b130f4964ed1befb8eaef562650cbc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b16a0d54a4e20dcd99884518b5f4dd5b130f4964ed1befb8eaef562650cbc8->enter($__internal_89b16a0d54a4e20dcd99884518b5f4dd5b130f4964ed1befb8eaef562650cbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_3f6f2a09c66c9edce25dd86013dbefc038917eb7a35b543c2c2254d517a1a5ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6f2a09c66c9edce25dd86013dbefc038917eb7a35b543c2c2254d517a1a5ae->enter($__internal_3f6f2a09c66c9edce25dd86013dbefc038917eb7a35b543c2c2254d517a1a5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_89b16a0d54a4e20dcd99884518b5f4dd5b130f4964ed1befb8eaef562650cbc8->leave($__internal_89b16a0d54a4e20dcd99884518b5f4dd5b130f4964ed1befb8eaef562650cbc8_prof);

        
        $__internal_3f6f2a09c66c9edce25dd86013dbefc038917eb7a35b543c2c2254d517a1a5ae->leave($__internal_3f6f2a09c66c9edce25dd86013dbefc038917eb7a35b543c2c2254d517a1a5ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
