<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ab6d31fb24e7e3a2b762b2b0bd9ae633402fa54501c74d08c3986d3f3ce8f6ac extends Twig_Template
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
        $__internal_7927250c86aa468d33c309a6ae4a6a744b6baeabc05ad2a5dc8da0c7ee2112d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7927250c86aa468d33c309a6ae4a6a744b6baeabc05ad2a5dc8da0c7ee2112d7->enter($__internal_7927250c86aa468d33c309a6ae4a6a744b6baeabc05ad2a5dc8da0c7ee2112d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_dc22dc86ca4feef06cbfb5f01c20b3d277d61f04e0dcdf3a6e44d9302a70bce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc22dc86ca4feef06cbfb5f01c20b3d277d61f04e0dcdf3a6e44d9302a70bce3->enter($__internal_dc22dc86ca4feef06cbfb5f01c20b3d277d61f04e0dcdf3a6e44d9302a70bce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7927250c86aa468d33c309a6ae4a6a744b6baeabc05ad2a5dc8da0c7ee2112d7->leave($__internal_7927250c86aa468d33c309a6ae4a6a744b6baeabc05ad2a5dc8da0c7ee2112d7_prof);

        
        $__internal_dc22dc86ca4feef06cbfb5f01c20b3d277d61f04e0dcdf3a6e44d9302a70bce3->leave($__internal_dc22dc86ca4feef06cbfb5f01c20b3d277d61f04e0dcdf3a6e44d9302a70bce3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
