<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_06181338ca8edab861fb8b8ec3b4e1e4b656286104e8e37dbd0c4c4e5dfb39d5 extends Twig_Template
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
        $__internal_3b807f271a88fa8403c7301bc5034ba66df8265b8735037b881840a5464f96b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b807f271a88fa8403c7301bc5034ba66df8265b8735037b881840a5464f96b3->enter($__internal_3b807f271a88fa8403c7301bc5034ba66df8265b8735037b881840a5464f96b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a4116003cb4485efd76c76945b9ac5f01cc963658eebfcc4723b78036a6c72ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4116003cb4485efd76c76945b9ac5f01cc963658eebfcc4723b78036a6c72ef->enter($__internal_a4116003cb4485efd76c76945b9ac5f01cc963658eebfcc4723b78036a6c72ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3b807f271a88fa8403c7301bc5034ba66df8265b8735037b881840a5464f96b3->leave($__internal_3b807f271a88fa8403c7301bc5034ba66df8265b8735037b881840a5464f96b3_prof);

        
        $__internal_a4116003cb4485efd76c76945b9ac5f01cc963658eebfcc4723b78036a6c72ef->leave($__internal_a4116003cb4485efd76c76945b9ac5f01cc963658eebfcc4723b78036a6c72ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
