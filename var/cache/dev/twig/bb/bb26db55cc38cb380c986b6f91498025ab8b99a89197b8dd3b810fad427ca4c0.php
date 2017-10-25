<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d12744d5bae412df4ec2eea87e780c9e3925f5c57421403b91ce6564cf109439 extends Twig_Template
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
        $__internal_591ad3567c6b67ec4c23b1c63729ae1fd0e53e6c542d7c380faf70540420835a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591ad3567c6b67ec4c23b1c63729ae1fd0e53e6c542d7c380faf70540420835a->enter($__internal_591ad3567c6b67ec4c23b1c63729ae1fd0e53e6c542d7c380faf70540420835a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_218260efb439d246911d333dd70a3cc1cf746a9c2634c8915bcd94fe5845523b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218260efb439d246911d333dd70a3cc1cf746a9c2634c8915bcd94fe5845523b->enter($__internal_218260efb439d246911d333dd70a3cc1cf746a9c2634c8915bcd94fe5845523b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_591ad3567c6b67ec4c23b1c63729ae1fd0e53e6c542d7c380faf70540420835a->leave($__internal_591ad3567c6b67ec4c23b1c63729ae1fd0e53e6c542d7c380faf70540420835a_prof);

        
        $__internal_218260efb439d246911d333dd70a3cc1cf746a9c2634c8915bcd94fe5845523b->leave($__internal_218260efb439d246911d333dd70a3cc1cf746a9c2634c8915bcd94fe5845523b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
