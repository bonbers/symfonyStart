<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_85ecbacfc767efa443ada8b1f07cb45205b02dd8c3adf1c8de4740e8cd738498 extends Twig_Template
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
        $__internal_093010d199d192a16088e5b7dea4be3dff602ce5826405e1c2885c2e6d7388e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093010d199d192a16088e5b7dea4be3dff602ce5826405e1c2885c2e6d7388e4->enter($__internal_093010d199d192a16088e5b7dea4be3dff602ce5826405e1c2885c2e6d7388e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_815fd5683fb43800d2f6f76baae456bf9913cd78b7126b8d234f8fe5ab84cb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815fd5683fb43800d2f6f76baae456bf9913cd78b7126b8d234f8fe5ab84cb67->enter($__internal_815fd5683fb43800d2f6f76baae456bf9913cd78b7126b8d234f8fe5ab84cb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_093010d199d192a16088e5b7dea4be3dff602ce5826405e1c2885c2e6d7388e4->leave($__internal_093010d199d192a16088e5b7dea4be3dff602ce5826405e1c2885c2e6d7388e4_prof);

        
        $__internal_815fd5683fb43800d2f6f76baae456bf9913cd78b7126b8d234f8fe5ab84cb67->leave($__internal_815fd5683fb43800d2f6f76baae456bf9913cd78b7126b8d234f8fe5ab84cb67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
