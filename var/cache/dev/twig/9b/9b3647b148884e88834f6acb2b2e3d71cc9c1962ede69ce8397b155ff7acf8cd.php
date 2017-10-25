<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9ad231d6fbc4600b0e5e3b67ea9d6a7c07fbacbed78c0a2bc7c3fc97a8e762cf extends Twig_Template
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
        $__internal_70be7b2e2f10d7673d3f7d06f29327c7c446f5a6bb952ed79a89a9d948a157ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70be7b2e2f10d7673d3f7d06f29327c7c446f5a6bb952ed79a89a9d948a157ec->enter($__internal_70be7b2e2f10d7673d3f7d06f29327c7c446f5a6bb952ed79a89a9d948a157ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c68ceb60ace68bcdb48320b9cfe8e013621d5df0008d4e9a162921c278ac3508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68ceb60ace68bcdb48320b9cfe8e013621d5df0008d4e9a162921c278ac3508->enter($__internal_c68ceb60ace68bcdb48320b9cfe8e013621d5df0008d4e9a162921c278ac3508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_70be7b2e2f10d7673d3f7d06f29327c7c446f5a6bb952ed79a89a9d948a157ec->leave($__internal_70be7b2e2f10d7673d3f7d06f29327c7c446f5a6bb952ed79a89a9d948a157ec_prof);

        
        $__internal_c68ceb60ace68bcdb48320b9cfe8e013621d5df0008d4e9a162921c278ac3508->leave($__internal_c68ceb60ace68bcdb48320b9cfe8e013621d5df0008d4e9a162921c278ac3508_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
