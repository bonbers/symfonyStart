<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_da71a5f5c4dd989038cc4f41830ffee4e4aba3e1d4ed2b33921e5a1c9b3b239e extends Twig_Template
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
        $__internal_642e1ce30457ff7235f4a1bcd60e28df7f8423282e7ce274ce9bc238a56a4f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_642e1ce30457ff7235f4a1bcd60e28df7f8423282e7ce274ce9bc238a56a4f57->enter($__internal_642e1ce30457ff7235f4a1bcd60e28df7f8423282e7ce274ce9bc238a56a4f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7cbe0227c69a27a439ee78ae0569c44691915bf21d36f66761eded9afe43dcff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbe0227c69a27a439ee78ae0569c44691915bf21d36f66761eded9afe43dcff->enter($__internal_7cbe0227c69a27a439ee78ae0569c44691915bf21d36f66761eded9afe43dcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_642e1ce30457ff7235f4a1bcd60e28df7f8423282e7ce274ce9bc238a56a4f57->leave($__internal_642e1ce30457ff7235f4a1bcd60e28df7f8423282e7ce274ce9bc238a56a4f57_prof);

        
        $__internal_7cbe0227c69a27a439ee78ae0569c44691915bf21d36f66761eded9afe43dcff->leave($__internal_7cbe0227c69a27a439ee78ae0569c44691915bf21d36f66761eded9afe43dcff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
