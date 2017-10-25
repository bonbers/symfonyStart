<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a9c7591cba1ae87bd5d4de2f4540c24ec688735bb32fd637a818090bf917b308 extends Twig_Template
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
        $__internal_4012963eb3b4b3d2d731c9d8040001c70f324072f3bd9f51e795fd1c23989192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4012963eb3b4b3d2d731c9d8040001c70f324072f3bd9f51e795fd1c23989192->enter($__internal_4012963eb3b4b3d2d731c9d8040001c70f324072f3bd9f51e795fd1c23989192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_0a3536a04174c1ad9c956992d1c2b8a99a6316bf837afe44bc0d843d1b8907b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3536a04174c1ad9c956992d1c2b8a99a6316bf837afe44bc0d843d1b8907b5->enter($__internal_0a3536a04174c1ad9c956992d1c2b8a99a6316bf837afe44bc0d843d1b8907b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4012963eb3b4b3d2d731c9d8040001c70f324072f3bd9f51e795fd1c23989192->leave($__internal_4012963eb3b4b3d2d731c9d8040001c70f324072f3bd9f51e795fd1c23989192_prof);

        
        $__internal_0a3536a04174c1ad9c956992d1c2b8a99a6316bf837afe44bc0d843d1b8907b5->leave($__internal_0a3536a04174c1ad9c956992d1c2b8a99a6316bf837afe44bc0d843d1b8907b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
