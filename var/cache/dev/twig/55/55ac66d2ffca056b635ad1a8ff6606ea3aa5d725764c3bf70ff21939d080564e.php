<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_45bbe5ecaed1d281241ad41355aa28f1917e2b48733a7c8ebe89c7b268e5c594 extends Twig_Template
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
        $__internal_ba734cbdaf644751cc9514eb8994ad840dc386933b9a8dc41d0f1cfd2504bfdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba734cbdaf644751cc9514eb8994ad840dc386933b9a8dc41d0f1cfd2504bfdd->enter($__internal_ba734cbdaf644751cc9514eb8994ad840dc386933b9a8dc41d0f1cfd2504bfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_c8c5d02fb97437aea752eecead9dc36f0b93b6d3093d9e4e0ffa80928484500a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c5d02fb97437aea752eecead9dc36f0b93b6d3093d9e4e0ffa80928484500a->enter($__internal_c8c5d02fb97437aea752eecead9dc36f0b93b6d3093d9e4e0ffa80928484500a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_ba734cbdaf644751cc9514eb8994ad840dc386933b9a8dc41d0f1cfd2504bfdd->leave($__internal_ba734cbdaf644751cc9514eb8994ad840dc386933b9a8dc41d0f1cfd2504bfdd_prof);

        
        $__internal_c8c5d02fb97437aea752eecead9dc36f0b93b6d3093d9e4e0ffa80928484500a->leave($__internal_c8c5d02fb97437aea752eecead9dc36f0b93b6d3093d9e4e0ffa80928484500a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
