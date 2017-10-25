<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_fb1856ccb238a50a7436b485cf4856c243698adb1d331f72eceeb35b71f6678c extends Twig_Template
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
        $__internal_fc9548c8bfa7c0c74a30d094e0c07b15004e66297368fb66b9100d10f24b0f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9548c8bfa7c0c74a30d094e0c07b15004e66297368fb66b9100d10f24b0f5d->enter($__internal_fc9548c8bfa7c0c74a30d094e0c07b15004e66297368fb66b9100d10f24b0f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_453b039ccfe1cb30e99a1d95b759e32413bc98dbc6efc8cdbe26c1c99a0b4de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453b039ccfe1cb30e99a1d95b759e32413bc98dbc6efc8cdbe26c1c99a0b4de1->enter($__internal_453b039ccfe1cb30e99a1d95b759e32413bc98dbc6efc8cdbe26c1c99a0b4de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_fc9548c8bfa7c0c74a30d094e0c07b15004e66297368fb66b9100d10f24b0f5d->leave($__internal_fc9548c8bfa7c0c74a30d094e0c07b15004e66297368fb66b9100d10f24b0f5d_prof);

        
        $__internal_453b039ccfe1cb30e99a1d95b759e32413bc98dbc6efc8cdbe26c1c99a0b4de1->leave($__internal_453b039ccfe1cb30e99a1d95b759e32413bc98dbc6efc8cdbe26c1c99a0b4de1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
