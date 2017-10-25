<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0ab8b0a2e4db70c6bb6b0918e2c94355f0a5cc908f332b7c740b031daf7a3007 extends Twig_Template
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
        $__internal_1ba3fa202e7434a75db1abcffc396ee0f7e2d63be7b303d04af0afd325784a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ba3fa202e7434a75db1abcffc396ee0f7e2d63be7b303d04af0afd325784a7f->enter($__internal_1ba3fa202e7434a75db1abcffc396ee0f7e2d63be7b303d04af0afd325784a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a2708069f43e6e8d523c4459e601496b57b6ffdcb5d7c359a05e0aeacb519343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2708069f43e6e8d523c4459e601496b57b6ffdcb5d7c359a05e0aeacb519343->enter($__internal_a2708069f43e6e8d523c4459e601496b57b6ffdcb5d7c359a05e0aeacb519343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_1ba3fa202e7434a75db1abcffc396ee0f7e2d63be7b303d04af0afd325784a7f->leave($__internal_1ba3fa202e7434a75db1abcffc396ee0f7e2d63be7b303d04af0afd325784a7f_prof);

        
        $__internal_a2708069f43e6e8d523c4459e601496b57b6ffdcb5d7c359a05e0aeacb519343->leave($__internal_a2708069f43e6e8d523c4459e601496b57b6ffdcb5d7c359a05e0aeacb519343_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
