<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_20f15efe3d35f33281d26631173cc721e829b29d7a3881745435af0c25886b61 extends Twig_Template
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
        $__internal_2c9e9e5266c2d0850ad7899fa94bf5b1255ece16491595bb0a0c73682c910e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9e9e5266c2d0850ad7899fa94bf5b1255ece16491595bb0a0c73682c910e1c->enter($__internal_2c9e9e5266c2d0850ad7899fa94bf5b1255ece16491595bb0a0c73682c910e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f4831458e6dc3817fcc18343beecea7d9a8a9b3daa9e90f076965fa106d241ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4831458e6dc3817fcc18343beecea7d9a8a9b3daa9e90f076965fa106d241ea->enter($__internal_f4831458e6dc3817fcc18343beecea7d9a8a9b3daa9e90f076965fa106d241ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2c9e9e5266c2d0850ad7899fa94bf5b1255ece16491595bb0a0c73682c910e1c->leave($__internal_2c9e9e5266c2d0850ad7899fa94bf5b1255ece16491595bb0a0c73682c910e1c_prof);

        
        $__internal_f4831458e6dc3817fcc18343beecea7d9a8a9b3daa9e90f076965fa106d241ea->leave($__internal_f4831458e6dc3817fcc18343beecea7d9a8a9b3daa9e90f076965fa106d241ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
