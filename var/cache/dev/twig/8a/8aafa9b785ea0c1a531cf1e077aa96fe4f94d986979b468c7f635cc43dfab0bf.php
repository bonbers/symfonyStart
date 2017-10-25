<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_39dc690ff0906ab0af65ac710d2fdd4dc2183e749b6aa04b8decdfec81c6b3b2 extends Twig_Template
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
        $__internal_a7876c167f63fd06dcc952032999aa1c8ba2e9ddf9e71e576bc1752fdc1fc919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7876c167f63fd06dcc952032999aa1c8ba2e9ddf9e71e576bc1752fdc1fc919->enter($__internal_a7876c167f63fd06dcc952032999aa1c8ba2e9ddf9e71e576bc1752fdc1fc919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_de6ba4684375297fe993fd45eb3d5493c4f6acf89b191305ed66eed0b465afc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6ba4684375297fe993fd45eb3d5493c4f6acf89b191305ed66eed0b465afc1->enter($__internal_de6ba4684375297fe993fd45eb3d5493c4f6acf89b191305ed66eed0b465afc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a7876c167f63fd06dcc952032999aa1c8ba2e9ddf9e71e576bc1752fdc1fc919->leave($__internal_a7876c167f63fd06dcc952032999aa1c8ba2e9ddf9e71e576bc1752fdc1fc919_prof);

        
        $__internal_de6ba4684375297fe993fd45eb3d5493c4f6acf89b191305ed66eed0b465afc1->leave($__internal_de6ba4684375297fe993fd45eb3d5493c4f6acf89b191305ed66eed0b465afc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
